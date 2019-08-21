<?php

namespace App\Http\Controllers;


use Auth;
use App\task;
use App\enroll;
use App\User;
use App\classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacherclassroompage(Request $request)
    {
       $classes = classroom::where('class_teacher', Auth::user()->id )
       ->take('5')
       ->get();

       return view('teacher.classroom', ['classes' => $classes]);
    }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teachercreateclass(Request $request)
    {
        $this->validate($request, [
            'class-name' => 'required'
        ]);

        $classname = $request['class-name'];

        $classcode = str_random(6);

        $classroom = new classroom();
        $classroom->class_name = $classname;
        $classroom->class_code = $classcode;
        $classroom->class_teacher = Auth::user()->id;
        $classroom->save();


        return redirect()->back();



    }


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function classroompage()
    {

        $enrolled = enroll::where('enrolled_user', Auth::user()->id )
        ->take('5')
        ->get();


       return view('user.classroom', ['enrolled' => $enrolled ]);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userenrollclass(Request $request)
    {


        $this->validate($request, [
            'class-code' => 'required'
        ]);


        $classcode = $request['class-code'];
         $id = Auth::user()->id;

        $classroom = classroom::where('class_code', $classcode)->first();
           $name = $classroom->class_name;


        $enroll = new enroll();
        $enroll->enrolled_user =  $id;
        $enroll->enrolled_name =  $name;
        $enroll->enrolled_at = $classroom->id;
        $enroll->save();


        return redirect()->back();

       
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function openclass($enrolled)
    {
        
        $class = classroom::where('id', $enrolled)
        ->take('1')
        ->get();


        $task = task::where('task_to', $enrolled)
        ->take('10')
        ->get();
        
      
       
        return view('user.openclass', ['class' => $class, 'task' => $task ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacheropenclass($id)
    {
        $class = classroom::where('id', $id)
        ->take('1')
        ->get();

        $task = task::where('task_to', $id)
        ->orderBy('created_at', 'desc')
        ->take('10')
        ->get();

        return view('teacher.openclass', ['class' => $class, 'task' => $task ]);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTask(Request $request, $id)
    {
        $this->validate($request, [
            'taskTitle' => 'required',
            'taskdesc' => 'required',
            'tasktype' => 'required',
        ]);

        $title = $request['taskTitle'];
        $desc = $request['taskdesc'];
        $type = $request['tasktype'];



        $newtask = new task();
        $newtask->task_title = $title;
        $newtask->task_body = $desc;
        $newtask->task_type = $type;
        $newtask->task_to = $id;
        $newtask->save();


        return redirect()->back();
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
