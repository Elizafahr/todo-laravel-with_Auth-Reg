<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Task::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $Task = new Task();
        $Task->title = $request->input('title');
        $Task->description = $request->input('description');
        $Task->completed = false;
        $Task->save();

        return redirect()->route('todos.index');
    }

    public function edit(Task $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Task $Task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $Task->title = $request->input('title');
        $Task->description = $request->input('description');
        $Task->save();

        return redirect()->route('todos.index');
    }

    public function destroy(Task $todo)
    {
        $todo->delete();
         
        return redirect()->route('todos.index');
    }

    public function updateStatus(Request $request, Task $todo)
    {
        $todo->completed = $request->input('completed') ? 1 : 0;
        $todo->save();

        return redirect()->route('todos.index');
    }
}