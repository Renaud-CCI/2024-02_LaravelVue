<?php

namespace Tests\Feature\Api\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class IndexControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testInvoke()
    {
        User::factory()->count(5)->create();

        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJsonCount(5, 'data');
    }
}