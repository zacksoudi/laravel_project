<?php

class AuthController extends Controller {
    public function getLogin() {
    	return View::make('login');
    }
	
	public function postLogin(){
		$rules = array('username' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);




	if($validator->fails()) {
		return Redirect::route('login')->withErrors($validator);
	}
  
       $auth = Auth::attempt(array(
          'name' => Input::get('username'),
          'password' => Input::get('password')


       	), false);

      if(!$auth) {

      	  return Redirect::route('login')->withErrors(array(
              'Identifiant erroné'

      	  	));
      }

      return Redirect::route('home')->with('flash_notice', 'Vous avez été correctement connecté avec le pseudo ' . Auth::user()->username);





	}
  public function postInscription() {

        $user = new User;
        $user->name = Input::get('username');
        $user->password = Hash::make(Input::get('password')); 
        $user->email = Input::get('email');
        $user->save();

        return Redirect::route('home');
      
      

  
}
public function getLogout()
  {
    Auth::logout(); 
    return Redirect::route('home');
  }


}