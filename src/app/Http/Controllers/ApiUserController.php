<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApiRegisterRequest;
use App\Models\User;

class ApiUserController extends Controller
{
    //
    public function register(ApiRegisterRequest $request){
        $user = new User;
        $user ->fill($request->all());

        $user -> save();
    }
}
