@include('partial/header')
<body>
<!-- preloader Start -->
<div class="jb_preloader">
    <div class="spinner_wrap">
        <div class="spinner"></div>
    </div>
</div>

<!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="flaticon-up-arrow"></i></a>
<!-- Top Scroll End -->
<!--  navi wrapper Start -->
<!-- top header wrapper end-->
<div class="cp_navi_main_wrapper dm_cover">
    @include('partial.menu')
    <!-- top header wrapper start -->
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1>galériánk</h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="{{ route('darknine.app.index') }}"> Kezdőlap &nbsp; / &nbsp;</a></li>
                                <li>galéria</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- top header wrapper end -->
<!-- navi wrapper End -->
<!-- gallery wrapper start-->
<div class="gallery_wrapper portfolio_grid dm_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                <div class="dmx_heading_wraper">
                    <img src="{{ config('app.url') }}/assets/images/head4.png" alt="img">
                    <h2>tartalmak</h2>
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
            <div class="col-md-12 col-lg-12">
                <div class="row portfoli_inner pi_3">

                    <!-- Items -->
                    @foreach($images as $image)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 gallery_2 dribbble ux_ui">
                        <div class="portfolio_item">
                            <img src="{{ $image->file_path }}" alt="">
                            <div class="portfolio_hover">
                                <div class="zoom_popup">
                                    <a class="img-link" href="{{ $image->file_path }}"> <i class="flaticon-add-button"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery wrapper end-->
@include('partial.newsletter')
@include('partial.footer')
