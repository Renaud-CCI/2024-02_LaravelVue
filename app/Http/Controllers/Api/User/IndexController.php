<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\User; // Import the User class from the correct namespace

class IndexController extends Controller
{
    public function __invoke(Request $request): ResourceCollection
    {
        return new UserCollection(
            resource: User::all(),
        );
    }
}
