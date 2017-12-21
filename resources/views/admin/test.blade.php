@extends('layout.landing')
@section('content')
    <div id="divOnlyAutoji" class="animated slideInDown" style="margin:auto!important;width:500px;height:209px;background-image:url(/assets/pages/img/autoji1.jpg);background-position:center;background-repeat:no-repeat;position:fixed;top:50%;left:50%;margin-top:-104px!important;margin-left:-250px!important"></div>

    <div id="divEverything" style="opacity:0;position:fixed;top:50%;margin-top:-222px;left:50%;margin-left:-186px;border: 0px red solid;">
        <!--<div style="height:50px;"></div>-->
        <!-- BEGIN LOGO -->
        <!-- <div class="logo" style="margin-top:20px;margin-bottom:20px;">
            <a href="index.html">
                <img style="width: 150px"  src="/assets/pages/img/autoji1.jpg" alt="" />
            </a>
        </div> -->

        <div class="logo" style="margin-top:20px;margin-bottom:0px;">
            <a>
                <img style="width: 195px"  src="/assets/pages/img/autoji1.jpg" alt="" />
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->

        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" role="form" method="post" action="/api/login/update" id="loginForm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-danger hidden">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix input-change" type="text" autocomplete="off" placeholder="Username" name="username"  id="username" maxlength="40"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                         <input class="form-control placeholder-no-fix input-change" type="password" autocomplete="off" placeholder="Password" name="password" id="password" maxlength="40"/>
                    </div>
                </div>
                 <input class="form-control placeholder-no-fix input-change" type="hidden"  name="userpass" id="userpass" maxlength="40"/>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" /> Remember me
                        <span></span>
                    </label>
                     <!-- <button type="submit" onclick="goToHome();" class="btn green-jungle pull-right"> Login </button> -->
                    <button type="submit"  class="btn green-jungle pull-right user-login" action="/login/update"> Login </button>
                    <div style="clear:both;"></div>
                    <span class="help-block" id="userDetailsAlert">

                    </span>
                </div>

            </form>
            <!-- END LOGIN FORM -->


        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright" style="color:#666">  2017 &copy; Autoji Admin. </div>
        <!-- END COPYRIGHT -->
    </div>
@stop
