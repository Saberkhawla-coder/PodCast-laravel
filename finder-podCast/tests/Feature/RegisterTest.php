<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
     public function test_user_can_register_successfully()
    {
        $payload = [
            'first_name' => 'nawal',
            'last_name' => 'saber',
            'email' => 'nawal@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        // Appel à la route d'enregistrement (ajuste l'url si nécessaire)
        $response = $this->postJson('/api/register', $payload);

        // Assertions
        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'User registered successfully',
                 ]);
        // Vérifie que l'utilisateur est bien en base
        $this->assertDatabaseHas('users', [
            'email' => 'nawal@example.com',
            'first_name' => 'nawal',
            'last_name' => 'saber',
        ]);
    }
}
