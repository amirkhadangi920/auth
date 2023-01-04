<?php

namespace Amirkhadangi920\Auth\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return response()->json([
            'hello' => 'friend',
        ]);
    }
}
