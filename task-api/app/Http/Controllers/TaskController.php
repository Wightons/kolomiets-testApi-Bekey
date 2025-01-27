<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();
        return response()->json([
            "message" => "Task Added"
        ], 201);
    }

    public function show($id)
    {
        $task = Task::find($id);
        if (!empty($task)) {
            return response()->json($task);
        } else {
            return response()->json([
                "message" => "Task not found"
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                "message" => "Task not found"
            ], 404);
        }

        $task->name = $request->name ?? $task->name;
        $task->description = $request->description ?? $task->description;
        $task->status = $request->status ?? $task->status;
        $task->save();

        return response()->json([
            "message" => "Task Updated"
        ]);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                "message" => "Task not found"
            ], 404);
        }

        $task->delete();
        return response()->json([
            "message" => "Task Deleted"
        ]);
    }
}

