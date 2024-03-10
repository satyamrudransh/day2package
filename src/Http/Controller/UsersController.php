<?php

namespace Satyam\Contact\Http\Controller;
use Satyam\Contact\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index(Request $request)
{
    return User::get();
    return "hello From Controller";
}


}
