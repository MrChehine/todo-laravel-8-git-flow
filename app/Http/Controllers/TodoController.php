<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update(["isDone" => !$todo->isDone]);
        return redirect()->route("index");
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route("index");
    }
}
