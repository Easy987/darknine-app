@extends('layouts.app')

@section('content')
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1> bejelentkezés</h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="#"> Kezdőlap &nbsp; / &nbsp;</a></li>
                                <li>fiók</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="booking_table_wrapper dm_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                <div class="dmx_heading_wraper">
                    <img src="assets/images/head3.png" alt="img">
                    <h2>bejelentkezés</h2>
                    <div class="bars bars2">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>

                    <p>Jelentkezz be a további funkciók használatához.</p>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                <div class="booking_form_field" style="text-transform: none;">
                    <form method="POST" action="{{ route('darknine.app.auth.login') }}">
                        @csrf
                        <div id="logreg-forms">
                            <form class="form-signin" style="text-transform: none">
                                <div class="row social-login">
                                    <div class="col-lg-6 col-12 text-center">
                                        <a href="{{ route('darknine.app.auth.social.redirect', ['provider' => 'facebook']) }}">
                                            <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f" style="margin-right: 5px;"></i> Bejelentkezés Facebook fiókkal</span> </button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-12 text-center mt-lg-0 mt-1">
                                        <a href="{{ route('darknine.app.auth.social.redirect', ['provider' => 'google']) }}">
                                            <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google" style="margin-right: 5px"></i> Bejelentkezés Google fiókkal</span> </button>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <p style="text-align:center"> VAGY  </p>
                                <br>
                                @error('email')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email cím" required="" autofocus="">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Jelszó" required="">

                                <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Bejelentkezés</button>
                                <a href="#" id="forgot_pswd">Elfelejtett jelszó?</a>
                                <hr>
                                <!-- <p>Don't have an account!</p>  -->
                                <a href="{{ route('darknine.app.auth.showRegistrationForm') }}"><button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Új fiók létrehozása</button></a>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="padding-bottom: 200px;"></div>
@endsection
