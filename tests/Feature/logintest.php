<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_login(): void
    {
        $response = $this->post('/login', [
            'email' => 'arvindbaghel6264@gmail.com',
            'password' => '12345678',
        ]); 

        $response->assertStatus(200);   
    }
}
