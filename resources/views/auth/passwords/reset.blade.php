@extends('layouts.app')

@section('content')
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1> jelszó helyreállítása</h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="{{ route('darknine.app.index') }}"> Kezdőlap &nbsp; / &nbsp;</a></li>
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
                        <img src="{{ config('app.url') }}/assets/images/head3.png" alt="img">
                        <h2>jelszó helyreállítása</h2>
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
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="booking_form_field" style="text-transform: none;">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div id="logreg-forms">
                                <form class="form-signin" style="text-transform: none">
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email cím" required="required" autofocus="" value="{{ $email ?? old('email') }}">

                                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Jelszó" required="required">
                                    <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Jelszó megerősítése" required="required">

                                    <br>

                                    <button class="btn btn-success btn-block" type="submit"><i class="fas fa-key"></i> Jelszó helyreállítása</button>
                                    <a href="{{ route('darknine.app.auth.showLoginForm') }}" id="forgot_pswd">Inkább bejelentkeznél?</a>
                                    <hr>
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
