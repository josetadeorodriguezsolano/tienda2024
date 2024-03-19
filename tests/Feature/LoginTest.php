<?php

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login(): void
    {
        $response = $this->get('/users/login');
        $response->assertStatus(200);
        $usuario = User::factory()->make();
        $password = "123";
        $usuario->password = Hash::make($password);
        $usuario->save();
        $response = $this->post('/users/login',
            ["correo"=>$usuario->email,"password"=>$password]);
        $response->assertStatus(302);
        $response->assertRedirect("/productos/formAlta");
        $response->assertSessionHas("user");
        //$response->ddSession();
        //$response->dd();
    }
}
