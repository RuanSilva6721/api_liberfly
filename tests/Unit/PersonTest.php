<?php

namespace Tests\Unit;

use App\Http\Controllers\PersonController;
use App\Models\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    public function testBuscarTodosUsuarios(PersonController $people)
    {
        $users = Person::factory()->count(3)->create();

        $foundUsers = $people->getPersonAll();

        $this->assertCount(3, $foundUsers);

        foreach ($users as $key => $user) {
            $this->assertEquals($user->id, $foundUsers[$key]->id);
            $this->assertEquals($user->name, $foundUsers[$key]->name);
            // Adicione aqui as outras propriedades do usuário que você deseja verificar
        }
    }
    public function testBuscarUsuario(PersonController $people)
    {
        $user = Person::factory()->create();

        $foundUser = $people->getPersonOne($user->id);

        $this->assertEquals($user->id, $foundUser->id);
        $this->assertEquals($user->name, $foundUser->name);
        // Adicione aqui as outras propriedades do usuário que você deseja verificar
    }

}
