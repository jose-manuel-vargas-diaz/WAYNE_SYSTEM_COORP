<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login_with_default_credentials(): void
    {
        User::factory()->create([
            'name' => 'wayne',
            'email' => 'wayne@localhost',
            'password' => bcrypt('yagami999'),
        ]);

        $response = $this->post('/login', [
            'username' => 'wayne',
            'password' => 'yagami999',
        ]);

        $response->assertRedirect('/admin');
        $this->assertAuthenticated();
    }

    public function test_admin_requires_authentication(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/login');
    }
}
