# laravel-session

# kernel file(kernel.php -> inside Http)

  'api' => [
      \App\Http\Middleware\EncryptCookies::class,            //Added For Session
      \Illuminate\Session\Middleware\StartSession::class,    //Added For Session  public function
  ],

# AdminSiteController

  public function userlogin(Request $request){
  
    $request->session()->put('my_name',$username);
    
    return redirect()->route('polist');
    
  }

# api.php

  Route::group(['middlewareGroups' => ['web']], function () {
  
    Route::post('/login/update', 'AdminSiteController@userlogin');
    
  });

# test.blade.php
  form class="login-form" role="form" method="post" action="/api/login/update" id="loginForm">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit"  class="btn green-jungle pull-right user-login" action="/login/update"> Login </button>
  form

# default.blade.php

  <span class="username username-hide-on-mobile"> {{ Session::get('my_name') }}</span>
