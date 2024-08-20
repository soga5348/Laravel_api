<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    public function show($id)
    {
        $task = Task::find($id);
        if (is_null($task)) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if (is_null($task)) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if (is_null($task)) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->delete();
        return response()->json(null, 204);
    }
}
