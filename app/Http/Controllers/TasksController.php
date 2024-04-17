<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index',compact('tasks'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 
        ]);
        $task = new Task();
        $task->title=$request->title;
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'product creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));   
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);
        $task->title = $request->title;
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'tarea creada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tarea Eliminada');
    }
}
