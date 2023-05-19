<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testBuscarUsuario()
    {
        $user = Person::factory()->create();

        $response = $this->get('/users/' . $user->id);

        $response->assertStatus(200);
        $response->assertJson([
            'id' => $user->id,
            'name' => $user->name,
            // Adicione aqui as outras propriedades do usuário que você deseja verificar
        ]);
    }
    public function testBuscarTodosUsuarios()
    {
        $users = Person::factory()->count(3)->create();

        $response = $this->get('/users');

        $response->assertStatus(200);
        foreach ($users as $user) {
            $response->assertJsonFragment([
                'id' => $user->id,
                'name' => $user->name,
                // Adicione aqui as outras propriedades do usuário que você deseja verificar
            ]);
        }
    }
}
