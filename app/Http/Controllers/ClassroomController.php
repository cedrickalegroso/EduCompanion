<?php

namespace App\Http\Controllers;

use Auth;
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
       return view('user.classroom');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userenrollclass()
    {


        $this->validate($request, [
            'class-code' => 'required'
        ]);


        $classcode = $request['class-code'];


        $classroom = classroom::where('code_class', $classcode)->first();

       
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