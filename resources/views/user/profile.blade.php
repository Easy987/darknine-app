@section('header')
    <style>
        .avg {
            font-size:77px;
            padding-top: 20px;
            color:#5CB85C;
        }

        .details {
            min-height: 355px;
            display: inline-block;
            width: 100%;
        }

        .rating {
            padding-left:40px;
        }

        .skillLine {
            display:inline-block;
            width:100%;
            padding: 3px 4px;
        }

        .skills {
            text-decoration:underline;
        }

        div.skill {
            background: #F58723;
            border-radius: 3px;
            color: white;
            font-weight: bold;
            padding: 3px 4px;
            width:70px;
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1> profil</h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="{{ route('darknine.app.index') }}"> Kezdőlap &nbsp; / &nbsp;</a></li>
                                <li>profil</li>
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
                        <h2>profilod</h2>
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
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-offset-2 col-lg-offset-3 col-lg-8">
                                    <div class="well details">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8">
                                                <h2 style="text-decoration:underline;">{{ $user->getName() }}</h2>
                                                <p><strong>Rang: </strong>{{ __('auth.roles.' . $user->getRoleName()) }}</p>
                                                <p><strong>Egyenleg: </strong>{{ $user->getWalletBalance('points') }} pont</p>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-lg-1 text-center">
                                            <figure>
                                                    <div id="qrcode">{!! $entryQrCode !!}</div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom: 200px;"></div>
@endsection
