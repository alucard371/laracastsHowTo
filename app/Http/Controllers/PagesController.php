<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        $tasks = [
            'Go to the store',
            'Go to the mall',
            'Go to work'
        ];

        return view(
            'welcome', [
            'tasks' => $tasks,
            'foo'   => 'test'
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
