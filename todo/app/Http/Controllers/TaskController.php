<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function index(){
        /*
        $tasks = [
            [
                "id" => 1,
                "name" => "Estudar php",
                "complete"=>false
            ],
            [
                "id" => 2,
                "name" => "Vue.js ",
                "complete"=>true
            ],
        ];
        return $tasks;
        */
        return Task::all();
    }

    public function store(Request $request){
        //todas as regras de validacao https://laravel.com/docs/7.x/validation

        $request->validate([
            'name'=>'required|max:255',
            'complete'=>'required',
        ]);

        $task = Task::create([
            'name'=> $request->input('name'),
            'complete'=> $request->input('complete')
        ]);

        return $task ;
    }

    public function show(Task $task){
        return $task ;
    }
    public function update(Request $request,Task $task){
       
        $request->validate([
            'name'=>'required|max:255'
        ]);

        $task->name =  $request->input('name');
        $task->save();

        return $task ;
    }
    public function destroy(Task $task){
        $task->delete();
        return response()->json(['sucess'=>true]);
    }
}
