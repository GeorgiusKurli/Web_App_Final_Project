<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Test;
use App\Question;
use App\Choice;

class TestDisplayController extends Controller
{

	public function show($id, Request $request){
		$test = Test::findOrFail($id);
		$request->session()->put('test_id', $id);

		$questions = Question::where('test_id', $id)->get();

		return view('showquestion', compact('test', 'questions'));
	}

	public function result(Request $request){
		$question_number = $request->input('question_number');
		$score = 0;
		for ($i=0; $i < $question_number; $i++) {
			$choice = DB::table('choices')
				->where('question_id', '=', $request->input('question_id'.$i))
				->where('choice', '=', $request->input('choice'.$i))
				->first();
			// foreach ($choices as $choice) {
				if ($choice->correct == 1) {
					$score += 1;
				// }
			}
		}
		// return view('testresult', compact('choices'));
		return view('testresult', compact('score', 'question_number'));
	}
}
