<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $firebase = (new Factory)->fromServiceAccount(storage_path('google-service-account.json'));
        // $database = $firebase->getDatabase();

        // $list_question_answer = $database->getReference('/question-answer')->getSnapshot()->getValue();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();

        $list_question_answer = $database->getReference('/question-answer')->getValue();

        return view('question-answer.index')->with('list_question_answer', $list_question_answer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question-answer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id'       => 'required',
            'title'    => 'required',
            'question' => 'required',
            'answer'   => 'required',
        ]);

        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $database = $firebase->getDatabase();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();

        $question_answer = [
            'title'    => $request->get('title'),
            'question' => $request->get('question'),
            'answer'   => $request->get('answer'),
        ];

        if ($database->getReference('/question-answer/'.$request->get('id'))->getValue() != null) {
            session(['alert' => 'add article failed, id already in used']);

            return redirect()->back()->withInput();
        }

        $database->getReference('/question-answer/'.$request->get('id'))->set($question_answer);

        session(['notify' => 'add article success']);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $database = $firebase->getDatabase();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();
        $reference = $database->getReference('/question-answer/'.$id);
        $question_answer = $reference->getSnapshot()->getValue();

        return view('question-answer.edit')
            ->with('question_answer', $question_answer)
            ->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'    => 'required',
            'question' => 'required',
            'answer'   => 'required',
        ]);

        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $database = $firebase->getDatabase();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();

        $question_answer = [
            'title'    => $request->get('title'),
            'question' => $request->get('question'),
            'answer'   => $request->get('answer'),
        ];

        $database->getReference('/question-answer/'.$id)->set($question_answer);

        session(['notify' => 'update article success']);

        return redirect('question-answer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function editIndex($id)
    {
        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $database = $firebase->getDatabase();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();
        $reference = $database->getReference('/question-answer/'.$id);
        $question_answer = $reference->getSnapshot()->getValue();

        return view('question-answer.edit-index')
            ->with('question_answer', $question_answer)
            ->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updateIndex(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);

        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $database = $firebase->getDatabase();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();

        // check is key exists
        if ($database->getReference('/question-answer/'.$request->get('id'))->getValue() != null) {
            session(['alert' => 'add article failed, id already in used']);

            return redirect()->back()->withInput();
        }

        $reference = $database->getReference('/question-answer/'.$id);

        // get value of question answer
        $question_answer = $reference->getSnapshot()->getValue();

        // remove old data
        $database->getReference('/question-answer/'.$request->get('old-id'))->remove();

        // create new data
        $database->getReference('/question-answer/'.$request->get('id'))->set($question_answer);

        session(['notify' => 'update article success']);

        return redirect('question-answer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $firebase = Firebase::fromServiceAccount(storage_path().'/google-service-account.json');
        // $database = $firebase->getDatabase();
        $firebase = (new Factory)->withServiceAccount(storage_path('google-service-account.json'))->withDatabaseUri('https://daily-dhamma-dev-default-rtdb.asia-southeast1.firebasedatabase.app');
        $database = $firebase->createDatabase();
        $database->getReference('/question-answer/'.$id)->remove();

        session(['notify' => 'delete article success']);

        return redirect('question-answer');
    }
}
