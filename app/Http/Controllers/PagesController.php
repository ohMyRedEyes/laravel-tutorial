<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work',
            ],
            'foo' => 'Awesome',
            'req' => request('title'),  // value taken from address bar '?title=SomeTitle'
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
