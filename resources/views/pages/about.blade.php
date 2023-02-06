@extends('layouts.app')

@section('content')
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1> rólunk</h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="{{ route('darknine.app.index') }}"> Kezdőlap &nbsp; / &nbsp;</a></li>
                                <li>rólunk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inner_about_wrapper dm_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="{{ config('app.url') }}/assets/images/head3.png" alt="img">
                        <h2>a klubról</h2>
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

                        <p>D9 - az underground techno élmény</p>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="about_us_btm_content dm_cover">
                        <p>A D9 egy különleges hely Budapest IX. kerületében, ahol az underground techno zene és az industrial hangulat találkozik. A 111 éves épület, amelyben a szórakozóhely található, korábban a Posta Kísérleti Intézetnek adott otthont. A hatalmas terek, folyosók, az épület múltja és jelene egymáshoz illesztve máshol nem megtapasztalható hangulatot garantál. A Dark Nine a társasági élet, az új emberek megismerése és a barátokkal való találkozás ideális helye. Látogass el hozzánk, hogy átélhesd az igazi techno élményt a D9 falai között!</p>
                        <ul class="dm_about_link dm_cover">
                            <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> 1500m<sup>2</sup> terület</a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> 111 éves épület</a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Összesen 3 táncterem</a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Egyedi fény és hangtechnika</a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Hosszú folyosók</a></li>
                            <li><a href="javascript:void(0);"><i class="fas fa-circle"></i> Összesen 3 bár</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us wrapper end-->
    <!-- offer wrapper start-->
    <div class="offer_wrapper dm_cover">
        <div class="club_video_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="{{ config('app.url') }}/assets/images/head9.png" alt="img">
                        <h2>amivel várunk téged</h2>
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

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                            <br> bibendum auctor, nisi elit consequat.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="offer_content_wrapper dm_cover">
                        <div class="offer_left_content_wrapper dm_cover">
                            <div class="offer_set_img">
                                <img src="{{ config('app.url') }}/assets/images/new/place/dance_floors.jpg" alt="img" class="img-responsive">
                            </div>
                            <div class="offer_right_content_box">
                                <h1><a href="javascript:void(0);">Tánctermek</a></h1>
                                <p>A klub három táncterme különféle zenei stílusokat kínál, így mindenki megtalálhatja a számára leginkább tetsző hangulatot.</p>
                            </div>
                        </div>
                        <div class="offer_left_content_wrapper dm_cover">
                            <div class="offer_set_img">
                                <img src="{{ config('app.url') }}/assets/images/new/place/bars.jpg" alt="img" class="img-responsive">
                            </div>
                            <div class="offer_right_content_box">
                                <h1><a href="javascript:void(0);">Bárok</a></h1>
                                <p>A klub 3 bárja gondoskodik arról, hogy ne kelljen sokat várni a frissítőkre.</p>
                            </div>
                        </div>
                        <div class="offer_left_content_wrapper dm_cover">
                            <div class="offer_set_img">
                                <img src="{{ config('app.url') }}/assets/images/new/place/resting_room.jpg" alt="img" class="img-responsive">
                            </div>
                            <div class="offer_right_content_box">
                                <h1><a href="javascript:void(0);">Pihenőszoba</a></h1>
                                <p>A klub pihenőszobája lehetőséget biztosít egy kis pihenésre.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="offer_content_wrapper dm_cover">
                        <div class="offer_left_content_wrapper dm_cover">
                            <div class="offer_set_img">
                                <img src="{{ config('app.url') }}/assets/images/offer4.png" alt="img" class="img-responsive">
                            </div>
                            <div class="offer_right_content_box">
                                <h1><a href="javascript:void(0);">VIP szoba</a></h1>
                                <p>A klub VIP szobájában exkluzív pihenésben lehet részed.</p>
                            </div>
                        </div>
                        <div class="offer_left_content_wrapper dm_cover">
                            <div class="offer_set_img">
                                <img src="{{ config('app.url') }}/assets/images/offer5.png" alt="img" class="img-responsive">
                            </div>
                            <div class="offer_right_content_box">
                                <h1><a href="javascript:void(0);">Ruhatár</a></h1>
                                <p>A klub ruhatárjában elhelyezheted ruháidat, amiért tokenekkel (zsetonokkal) tudsz fizetni.</p>
                            </div>
                        </div>
                        <div class="offer_left_content_wrapper dm_cover">
                            <div class="offer_set_img">
                                <img src="{{ config('app.url') }}/assets/images/offer6.png" alt="img" class="img-responsive">
                            </div>
                            <div class="offer_right_content_box">
                                <h1><a href="javascript:void(0);">Tokenek</a></h1>
                                <p>A bárban és a ruhatárban tokenekkel (zsetonokkal) lehet fizetni a szolgáltatásokért és a finom italokért.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offer wrapper end-->
    <!-- partners wrapper start-->
    <div class="partner_item_wrapper dm_cover">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="partner_item_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="partner_wrapper_content">
                                    <i class="fa fa-star"></i>
                                    <p><a href="javascript:void(0);">VIP Zone</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_wrapper_content">
                                    <i class="fa fa-user"></i>
                                    <p><a href="javascript:void(0);">ruhatár</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_wrapper_content">
                                    <i class="fa fa-money-bill"></i>
                                    <p><a href="javascript:void(0);">tokenek</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_wrapper_content">
                                    <i class="fa fa-wine-glass"></i>
                                    <p><a href="javascript:void(0);">bár</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_wrapper_content">
                                    <i class="fa fa-couch"></i>
                                    <p><a href="javascript:void(0);">pihenőszoba</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner_wrapper_content">
                                    <i class="fa fa-music"></i>
                                    <p><a href="javascript:void(0);">táncterem</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners wrapper end-->
    <!-- night club wrapper start-->
    <div class="night_club_wrapper portfolio_grid  dm_cover">
        <div class="club_video_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="{{ config('app.url') }}/assets/images/head10.png" alt="img">
                        <h2>Our night club dj’s</h2>
                        <div class="bars bars2 bar5">
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

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                            <br> bibendum auctor, nisi elit consequat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="night_club_slider pi_3">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="portfolio_item">
                        <img src="{{ config('app.url') }}/assets/images/nt1.png" alt="">
                        <div class="portfolio_hover">

                            <div class="zoom_popup">
                                <a class="img-link" href="{{ config('app.url') }}/assets/images/nt1.png"> <i class="flaticon-add-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio_item">
                        <img src="{{ config('app.url') }}/assets/images/nt2.png" alt="">
                        <div class="portfolio_hover">

                            <div class="zoom_popup">
                                <a class="img-link" href="{{ config('app.url') }}/assets/images/nt2.png"> <i class="flaticon-add-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio_item">
                        <img src="{{ config('app.url') }}/assets/images/nt3.png" alt="">
                        <div class="portfolio_hover">

                            <div class="zoom_popup">
                                <a class="img-link" href="{{ config('app.url') }}/assets/images/nt3.png"> <i class="flaticon-add-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio_item">
                        <img src="{{ config('app.url') }}/assets/images/nt4.png" alt="">
                        <div class="portfolio_hover">

                            <div class="zoom_popup">
                                <a class="img-link" href="{{ config('app.url') }}/assets/images/nt4.png"> <i class="flaticon-add-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- night club wrapper end-->

<div class="row" style="padding-bottom: 200px;"></div>
@endsection
