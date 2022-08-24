<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $name = "Victor";
        $age = 18;
    
        $arr = [10, 20, 30, 40, 50];
        $names = ["Matheus", "Victor", "Roberto", "Saulo"];
    
        return view('welcome',
            [
                'name' => $name,
                'age' => $age,
                'occupation' => 'developer',
                'arr' => $arr,
                'names' => $names,
            ]);
    }

    public function create() {
        return view('events.create');
    }
}
