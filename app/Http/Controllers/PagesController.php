<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome', [
            'foo' => 'bar',
            'tasks' => ['some tasks']
        ]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

}
