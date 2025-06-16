<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->simplePaginate(3);
        return view('todos.index', [
          'todos' => $todos
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string|max:255',
            'body' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        Todo::create($data);

        return redirect('/todos')->with('status', 'Todo created successfully!');
    }

    public function update($id){
      $todo = Todo::findOrFail($id);
      // validate
      $data = request()->validate([
          'title' => 'required|string|max:255',
          'body' => 'nullable|string',
          'completed' => 'boolean',
      ]);

      $todo->update($data);

      return redirect('/todos/' . $todo->id)->with('status', 'Todo updated!');      
    }

    public function toggle($id){
      $todo = Todo::findOrFail($id);
      // toggle completed status
      $todo->completed = !$todo->completed;
      $todo->save();

      return redirect('/todos/' . $todo->id)->with('status', 'Todo status toggled!');
    }

    public function destroy($id){
      $todo = Todo::findOrFail($id);
      $todo->delete();
      //redirect
      return redirect('/todos')->with('status', 'Todo #{$todo->id} deleted!');      
    }

}
