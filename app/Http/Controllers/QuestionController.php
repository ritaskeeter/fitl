<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//Added by me to use Question model
use App\Question;
use App\Language;
use Auth;

class QuestionController extends Controller
{
    //Added by me to ensure that only logged in users have access to modify questions
    public function __construct()
    {
        $this->middleware('auth', ['only'=>['create', 'store', 'edit', 'update', 'destroy']]);
    }
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
        $data['questions'] = $question;

        //Added after sometime
        $data['languages']=Language::all();
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
        $data['question']=$create_question;

        //$data['languages']=Language::all(); 
        //The below is to get the values in the format required for Bootstrap
        $data['languages']=Language::lists('name', 'id');
        //echo '<pre>';
        //print_r($data['languages']);
        //echo '</pre>';
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
        $question->user_id=Auth::user()->id;

        //Error message if the required fields are not filled
        if(!$question->save()){
            $errors=$question->getErrors();

            return redirect()
                ->action('QuestionController@create')
                ->with('errors', $errors)
                ->withInput();
        }

        //Success action for submission
        //Adding it here so that the sync happens only after the object/question is created
        $question->languages()->sync($request->language_id);
        
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
        $data['questions']=$question;
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
        $question=Question::findOrFail($id);

        //Check if user is logged in and so has access to edit
        if(!$question->canEdit())
        {
            abort('403', 'You are not authorized to perform this action');
        }

        $all_languages=Language::lists('name', 'id');
        return view('questions.edit', ['question'=>$question, 'languages'=>$all_languages]);

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
        $question=Question::findOrFail($id);

        //Get the form values and map them to DB
        $question->title=$request->title;
        $question->description=$request->description;
        $question->code=$request->code;
        $question->languages()->sync($request->language_id);

        //Error message if the required fields are not filled
        if(!$question->save()){
            $errors=$question->getErrors();

            return redirect()
                ->action('QuestionController@edit', $question->id)
                ->with('errors', $errors)
                ->withInput();
        }

        //Success action for submission
        return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-success">Question has been updated</div>');
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
        $question=Question::findOrFail($id);

        if(!$question->canEdit())
        {
            abort('403', 'You are not authorized to perform this action');
        }

        $question->delete(); //In-built function

        return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-info">Question has been deleted</div>');
    }
}
