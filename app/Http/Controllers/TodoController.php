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
        $attributes = $this->validate($request, [
            "title"=> "required",
            "description"=> "nullable"
        ]);
        $todo = Todo::create($attributes);
        return redirect()->route("index");
    }

    public function update(Request $request, Todo $todo)
    {

    }

    public function destroy(Todo $todo)
    {

    }
}
