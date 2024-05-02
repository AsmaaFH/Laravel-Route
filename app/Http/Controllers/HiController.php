<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HiController extends Controller
{
    public function Greet($fullName){
        return view('welcome');
    }
    public function all($id){
        $posts = DB::table('posts')->find($id);
        return view('hello', compact('posts'));
    }
}
