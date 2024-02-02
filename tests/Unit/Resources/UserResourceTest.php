<?php

namespace Tests\Unit\Resources;

use Tests\TestCase;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserResourceTest extends TestCase
{
    use RefreshDatabase;

    public function testToArray()
    {
        $user = User::factory()->create();

        $resource = new UserResource($user);

        $this->assertEquals([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'created_at' => $user->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $user->updated_at->format('Y-m-d H:i:s'),
        ], $resource->toArray(request()));
    }
}