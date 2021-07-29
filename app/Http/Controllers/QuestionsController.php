<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
/**
 * @mixin Builder
 */

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Question::latest()->paginate(5);

        return view('questions.index')->with(compact('questions'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Question $question)
    {
        //
    }


    public function edit(Question $question)
    {
        //
    }


    public function update(Request $request, Question $question)
    {
        //
    }


    public function destroy(Question $question)
    {
        //
    }
}
