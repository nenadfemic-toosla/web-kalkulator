<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_addition()
    {
        $response = $this->postJson('/api/add', ['a' => 5, 'b' => 3]);
        $response->assertStatus(200)->assertJson(['result' => 8]);
    }

    public function test_subtraction()
    {
        $response = $this->postJson('/api/subtract', ['a' => 5, 'b' => 3]);
        $response->assertStatus(200)->assertJson(['result' => 2]);
    }

    public function test_multiplication()
    {
        $response = $this->postJson('/api/multiply', ['a' => 5, 'b' => 3]);
        $response->assertStatus(200)->assertJson(['result' => 15]);
    }

    public function test_division()
    {
        $response = $this->postJson('/api/divide', ['a' => 6, 'b' => 3]);
        $response->assertStatus(200)->assertJson(['result' => 2]);
    }

    public function test_division_by_zero()
    {
        $response = $this->postJson('/api/divide', ['a' => 6, 'b' => 0]);
        $response->assertStatus(400)->assertJson(['error' => 'Cannot divide by zero']);
    }
}
