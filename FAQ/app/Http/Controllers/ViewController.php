<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class ViewController extends Controller
{
    //

    public function index()
    {
        //
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('layout.show1', compact('tasks'));
    }
}
