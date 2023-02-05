<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return response(["message" => "Welcome to the Establishment"])->header('Content-Type', 'application/json');
    }
}
