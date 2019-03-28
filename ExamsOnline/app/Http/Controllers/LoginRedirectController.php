<<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginRedirectController extends Controller
	{
		/**
		 * Show the profile for the given user.
		 *
		 * @param  int  $id
		 * @return View
		 */
		public function show($id)
		{
			return view('user.profile', ['user' => User::findOrFail($id)]);
		}
	}
 ?>