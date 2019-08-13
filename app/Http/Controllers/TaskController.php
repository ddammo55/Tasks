<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
    	$tasks = Task::latest()->get();

    	return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
    	return view('tasks.create');
    }

    public function store(Request $request)
    {
    	
    	Task::create([
    		'title' => $request->input('title'),
    		'body' => $request->input('body')
    	]);
    	return redirect('tasks');
    }

    public function show(Task $task)
    {
    	return view('tasks.show',compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    public function update(Task $task)
    {
        $task->update([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/tasks');
    }


    public function destory(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }




}
