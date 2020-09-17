<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//Added by me to use Question model
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $question = Question::all();

        $data = array();
        $data['my_objects'] = $question;
        return view('questions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $create_question=new Question;
        $data=array();
        $data['new_question']=$create_question;
        return view('questions.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
        echo '<pre>';
        print_r($request);
        echo '<pre>';
        **/
        //Create a new object model
        $question=new Question;

        //Get the form values and map them to DB
        $question->title=$request->title;
        $question->description=$request->description;
        $question->code=$request->code;

        //Error message if the required fields are not filled
        if(!$question->save()){
            $errors=$question->getErrors();

            return redirect()
                ->action('QuestionController@create')
                ->with('errors', $errors)
                ->withInput();
        }

        //Success action for submission
        return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-success">Question created successfully</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display the value(id) passed in the URL
        //echo $id;
        //Display the show.blade.php file under the questions folder
        $data=array();
        //$data['id']=$id;
        //$question=Question::find($id);
        $question=Question::findOrFail($id); //For error message, it is findOrFail and not just find
        $data['single_object']=$question;
        return view('questions/show', $data);
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
