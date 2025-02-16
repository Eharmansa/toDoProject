<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index($id){

        $kategori = Task::where('category_id', $id)->get();

        return view('panel.tasks.index',compact('kategori'));
    }
    public function createPage(){
        $categories = Category::where('user_id',Auth::user()->id)->get();
        return view('panel.tasks.create',compact('categories'));
    }
    public function addTask(Request $request){

        $task = new Task();

        $task->category_id = $request->category;
        $task->title = $request->title;
        $task->content = $request->content;
        $task->status = $request->status;
        $task->deadline = $request->deadline;
        $task->save();

        return redirect()->route('panel.categoryIndex')->with('success', 'Görev ekleme başarılı. . .');

    }
    public function editTasks($id){
        $task = Task::where('id', $id)->first();

        return view('panel.tasks.update',compact('task'));
    }

    public function updateTasks(Request $r){

        $task = Task::where('id',$r->task_id)->first();
        if ($task) {
            $task->title = $r->task_title;
            $task->content = $r->task_content;
            $task->status = $r->task_status;
            $task->deadline = $r->task_datetime;
            $task->save();

            return redirect()->route('panel.TaskIndex', ['id' => $r->cat_id])->with('success','Task başarıyla güncellendi');

        }
        return redirect()->route('panel.TaskIndex', ['id' => $r->cat_id])->with('errors','Task güncellenemedi, tekrar deneyiniz !!!');

    }


    public function deleteTasks($id){

        $del_task = Task::where('id',$id)->first();
        if($del_task){
            $del_task->delete();
            return redirect()->route('panel.TaskIndex', ['id' => $del_task->category_id])->with('success','Task başarıyla silindi. . .');

        }
    }
}
