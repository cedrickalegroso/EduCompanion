<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use Illuminate\Http\Request;

class QuizGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifymath(Request $request, $answer, $points)
    {
        
          // user register
        // Validation 
        $this->validate($request, [
            'useranswer' => 'required'
        ]);
        
        $useranswer = $request['useranswer'];
        if ( $answer == $useranswer ) {
            
    $user = User::find(Auth::user()->id);
    
    $prevpoints = $user->math_quiz_pts;
    $pointslatest = $prevpoints + $points;
    $user->math_quiz_pts = $pointslatest;
    $user->save();
    return redirect()->back();   
     
        } else {
           
            $user =  User::find(Auth::user()->id);
    
    
            $prevpoints = $user->math_quiz_pts;
            $pointslatest = $prevpoints - $points;
            $user->math_quiz_pts = $pointslatest;
            $user->save(); 
            return redirect()->back();   
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mathquizgame()
    {
        
        $leaderboard = user::where('math_quiz_pts', '>', 0)
        ->take('3')
        ->orderBy ('math_quiz_pts', 'desc')
        ->get();

        return view('user.quizgames.mathquizgame', ['leaderboard' => $leaderboard]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function codingquizgame()
    {
       return view('user.quizgames.codingquizgame');
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
