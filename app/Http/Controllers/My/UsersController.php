<?php
namespace App\Http\Controllers\My;

use App;
use Auth;
use Input;
use App\Http\Controllers\Controller;
use Request;
use Validator;
use View;
class UsersController extends Controller{
	
	
	public function getProfile(){
		 return view('my.profile');
	}
	
	
	public function getInfo(){
		 return view('my.info');
	}
}