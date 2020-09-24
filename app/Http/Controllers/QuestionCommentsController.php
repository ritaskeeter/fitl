<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//Added by me to use Comments model PHP file
use App\Comments;

class QuestionCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $questionID)
    {
        //
        $comment=new Comments;

        $comment->question_id=$questionID;
        $comment->comment = $request->comment;

        if(!$comment->save())
        {
            $errors=$comment->getErrors();

            return redirect()
                ->action('QuestionController@show', $questionID)
                ->with('errors', $errors)
                ->withInput();
        }

        return redirect()
            ->action('QuestionController@show', $questionID)
            ->with('message', '<div class="alert alert-success">Comment added!</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questionID, $id)
    {
        //
        $comment = Comments::findOrFail($id);
        $comment->comment = $request->comment;

        if(!$comment->save())
        {
            $errors=$comment->getErrors();

            return redirect()
                ->action('QuestionController@show', $questionID)
                ->with('errors', $errors)
                ->withInput();
        }

        return redirect()
            ->action('QuestionController@show', $questionID)
            ->with('message', '<div class="alert alert-success">Comment updated!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionID, $id)
    {
        $comment=Comments::findOrFail($id);

        $comment->delete();

        return redirect()
            ->action('QuestionController@show', $questionID)
            ->with('message', '<div class="mt-2 alert alert-info">Comment deleted</div>');
    }
}
