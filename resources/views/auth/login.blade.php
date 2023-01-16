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
                        <div class="row">
                            <div class="col-md-6 col-sm-12" colspan="2" style="margin: auto;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-pos form_field">
                                            <div class="form-group i-name">
                                                <input style="text-transform: none" type="text" class="form-control require" name="email" required="" placeholder="Email cím*">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-pos form_field">
                                            <div class="form-group i-name">
                                                <input style="text-transform: none" type="text" class="form-control require" name="password" required="" placeholder="Jelszó*">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tb_es_btn_div">
                                    <div class="response"></div>
                                    <div class="tb_es_btn_wrapper">
                                        <button type="submit">bejelentkezés</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="padding-bottom: 200px;"></div>
@endsection
