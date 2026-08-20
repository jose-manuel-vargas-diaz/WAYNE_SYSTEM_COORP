<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Proforma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AtencionController extends Controller
{
    public function storeComunicado(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'telefono' => ['nullable', 'string', 'max:30'],
            'tipo_consulta' => ['required', 'string', 'max:80'],
            'mensaje' => ['required', 'string', 'max:2000'],
        ]);

        Comunicado::create($data);

        return back()->with('success', 'Recibimos tu consulta. Te responderemos a la brevedad.');
    }

    public function admin()
    {
        return view('admin.dashboard', [
            'comunicados' => Comunicado::latest()->get(),
            'proformas' => Proforma::latest()->get(),
        ]);
    }

    public function updateComunicado(Request $request, Comunicado $comunicado)
    {
        $comunicado->update(['estado' => 'atendido']);

        return back()->with('success', 'Consulta marcada como atendida.');
    }

    public function storeProforma(Request $request)
    {
        $data = $request->validate([
            'cliente' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'telefono' => ['required', 'string', 'max:30'],
            'direccion' => ['nullable', 'string', 'max:200'],
            'items' => ['required', 'string', 'max:4000'],
        ]);

        $items = collect(explode("\n", $data['items']))
            ->map(fn ($item) => array_map('trim', explode('|', $item)))
            ->filter()
            ->values()
            ->map(fn ($item) => [
                'detalle' => $item[0] ?? '',
                'cantidad' => (int) ($item[1] ?? 1),
                'precio' => (float) ($item[2] ?? 0),
            ])
            ->all();

        $total = collect($items)->sum(fn ($item) => $item['cantidad'] * $item['precio']);

        $proforma = Proforma::create([
            ...$data,
            'items' => $items,
            'total' => $total,
            'estado' => 'borrador',
        ]);

        $documento = view('proformas.documento', compact('proforma'))->render();
        $archivo = "proformas/proforma-{$proforma->id}.html";
        Storage::disk('local')->put($archivo, $documento);
        $proforma->update(['archivo_path' => $archivo]);

        return back()->with('success', 'Proforma creada y guardada como archivo.');
    }

    public function descargarProforma(Proforma $proforma)
    {
        $this->asegurarArchivoProforma($proforma);

        return Storage::disk('local')->download($proforma->archivo_path, "proforma-{$proforma->id}.html");
    }

    private function asegurarArchivoProforma(Proforma $proforma): void
    {
        if ($proforma->archivo_path && Storage::disk('local')->exists($proforma->archivo_path)) {
            return;
        }

        $archivo = "proformas/proforma-{$proforma->id}.html";
        Storage::disk('local')->put($archivo, view('proformas.documento', compact('proforma'))->render());
        $proforma->update(['archivo_path' => $archivo]);
    }
}