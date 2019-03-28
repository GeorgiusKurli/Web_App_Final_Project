<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Test;
use App\Question;
use App\User;

class TestController extends Controller
{
	// show the create page
	public function create(){
		if (Auth::check()) {
			$user = User::where('id', Auth::id())->first();
			if ($user->active == 1) {
				# code...
				$tests = Test::where('user_id', Auth::id())->get();
				return view('create', compact('tests'));
			}
			else{
				return redirect('test')->withError('Account Suspended From Creating Tests');
			}

		}
		else{
			return redirect()->route('login')->withError('You need to login to create a test');
		}
	}

	// show the browse page
	public function show(Request $request){
		// all three is null
		if ($request->input('search') == null && $request->input('id') == null && $request->input('category') == null){
			$tests = Test::all();
			return view('test', compact('tests'));
		}

		$query = Test::query();
		if ($request->input('search') != null){
			$query = $query->where('test_name', 'LIKE', '%'.$request->input('search').'%');
		}

		if ($request->input('id') != null){
			$query = $query->where('id', $request->input('id'));
		}

		if ($request->input('category') != null){
			$query = $query->where('category', 'LIKE', '%'.$request->input('category').'%');
		}
		$tests = $query->get();
		return view('test', compact('tests'));
	}

	// function to create a test
	public function create_test(){
		if (Auth::check()) {
			return view('createtest');
		}
		else{
			return redirect()->route('login')->withError('You need to login to create a test');
		}
	}

	// function to store test into db
	public function store(Request $request){
		$validatedData = $request->validate([
			'test_name' => 'required|max:190',
			'category' => 'required|max:190',
			'user_id' => 'required'
		]);

		$test = Test::create($validatedData);

		return redirect('/create')->with('success', 'Test successfully created');
	}

	// function to edit a test
	public function edit($id, Request $request){
		$test = Test::findOrFail($id);

		// redirect incorrect user
		if($test->user_id != Auth::id()){
			return redirect('/');
		}

		// return questions made by the user and for the test
		$questions = Question::where('test_id', $id)->where('user_id', Auth::id())->get();
		$request->session()->put('test_id', $id);
		return view('edit', compact('questions'));
	}

	// function to delete a test
	public function destroy($id){
		$test = Test::findOrFail($id);

		// redirect incorrect user
		if($test->user_id != Auth::id()){
			return redirect('/');
		}

		$test->delete();

		return redirect('/create')->with('success', 'Test successfully deleted');
	}
}
