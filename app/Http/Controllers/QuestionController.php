<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Test;
use App\Question;

class QuestionController extends Controller
{
	// function to create a question the create test page
	public function create(){
		if (Auth::check()) {
			return view('createquestion');
		}
		else{
			return redirect()->route('login')->withError('You need to login to create a test');
		}
	}

	// function to store question into db
	public function store(Request $request){
		$validated_question = $request->validate([
			'test_id' => 'required',
			'user_id' => 'required',
			'question' => 'required|max:190',
		]);

		//create question
		$question = Question::create($validated_question);

		//create 4 choices
		$choice_data = array(
			'choice' => $request->input('inputOptionA'),
			'question_id' => $question->id,
			'user_id' => $request->input('user_id'),
			'correct' => $request->input('checka')
		);

		DB::table ('choices')->insert ($choice_data);

		$choice_data = array(
			'choice' => $request->input('inputOptionB'),
			'question_id' => $question->id,
			'user_id' => $request->input('user_id'),
			'correct' => $request->input('checkb')
		);

		DB::table ('choices')->insert ($choice_data);

		$choice_data = array(
			'choice' => $request->input('inputOptionC'),
			'question_id' => $question->id,
			'user_id' => $request->input('user_id'),
			'correct' => $request->input('checkc')
		);

		DB::table ('choices')->insert ($choice_data);

		$choice_data = array(
			'choice' => $request->input('inputOptionD'),
			'question_id' => $question->id,
			'user_id' => $request->input('user_id'),
			'correct' => $request->input('checkd')
		);

		DB::table ('choices')->insert ($choice_data);

		return redirect()->back()->with('success', 'Question successfully created');
	}

	// function to edit a test
	public function edit($id){
	// $test = Test::findOrFail($id);

	return view('edit', compact('test'));
	}

	// function to delete a test
	public function destroy($id){
		$question = Question::findOrFail($id);
		$question->delete();

		return redirect()->back()->with('success', 'Question successfully deleted');
	}
}
