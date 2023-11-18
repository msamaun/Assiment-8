<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index( $id)
    {
       $name = "Donald Trump";
       $age = "75";

       $data = [
           'id' => $id,
           'name' => $name,
           'age' => $age
       ];

       $cookieName = 'access_token';
       $cookieValue = '123-xyz';
       $minutes = 1;
       $path = '/';
       $domain = "localhost";
       $secure = false;
       $httpOnly = true;


        cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        return response($data, 200)->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

    }
}
