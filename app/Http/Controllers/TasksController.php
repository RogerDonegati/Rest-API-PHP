<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class TasksController extends Controller
{
    public function index(){
        return Task::all();
    }

    public function getById(Task $task){
        return $task;
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255|min:3',
            'complete'=>'required'
        ]);

        $task = Task::create([
            'name'=>$request->input('name'),
            'complete'=>$request->input('complete'),
        ]);
        return $request;
    }

    public function update(Task $task, Request $request){

        $request->validate([
            'name'=>'required|max:255|min:3'
        ]);

        $task->name = $request->input('name');
        $task->save();
        return $task;
    }

    public function delete(Task $task){
        $task->delete();
        return response()->json([
            'msg'=>'Deletado com sucesso',
            'code'=>'200'
        ]);
    }
}
