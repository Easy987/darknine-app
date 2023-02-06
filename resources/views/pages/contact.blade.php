@extends('layouts.app')

@section('content')
    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">

                        <h1> kapcsolat</h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="{{ route('darknine.app.index') }}"> Kezdőlap &nbsp; / &nbsp;</a></li>
                                <li>kapcsolat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact_wrapper dm_cover">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                    <div class="pricing_wrapper_box contct_info_center dm_cover">
                        <div class="pricing_wrapper_images dm_cover">
                            <div class="price_tag">
                                <p><i class="flaticon-placeholder"></i></p>
                            </div>
                        </div>
                        <div class="pricing_tab_content dm_cover">

                            <p>Zombori utca 16
                                <br> 1097, Budapest, Magyarország
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                    <div class="pricing_wrapper_box contct_info_center dm_cover">
                        <div class="pricing_wrapper_images dm_cover">

                            <div class="price_tag">
                                <p><i class="flaticon-telephone"></i></p>
                            </div>
                        </div>
                        <div class="pricing_tab_content dm_cover">

                            <p>
                                +36 1 123-4567
                                <br>
                                +36 1 123-4567
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                    <div class="pricing_wrapper_box contct_info_center dm_cover">
                        <div class="pricing_wrapper_images dm_cover">

                            <div class="price_tag">
                                <p><i class="flaticon-close-envelope"></i></p>
                            </div>
                        </div>
                        <div class="pricing_tab_content dm_cover">

                            <p>
                                <a href="mailto:darknine.contact@gmail.com">darknine.contact@gmail.com</a>
                                <br>
                                <br>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="booking_table_wrapper contact_top_wrapper dm_cover">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="dmx_heading_wraper">
                        <img src="{{ config('app.url') }}/assets/images/head7.png" alt="img">
                        <h2>vedd fel velünk a kapcsolatot</h2>
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
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="booking_form_field contact_us_field_wrapper" style="text-transform: none;">
                        <form style="text-transform: none;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-pos form_field">
                                        <div class="form-group i-name">
                                            <input type="text" name="first_name" class="form-control require" required="required" placeholder="Név *">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-e form_field">
                                        <div class="form-group i-email">
                                            <label class="sr-only">Email </label>
                                            <input type="email" name="email" class="form-control require" required="required" placeholder="Email cím *" data-valid="email">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-m form_field">
                                        <div class="form-group i-name">

                                            <input type="text" name="contact_no" class="form-control" placeholder="Telefonszám">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-m form_field">
                                        <div class="form-group i-name">

                                            <input type="text" name="subject" class="form-control" placeholder="Tárgy *" required="required">
                                            <i class="fas fa-info-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-e form_field">
                                        <div class="form-group i-email">
                                            <textarea name="message"  class="form-control require" rows="4" id="messageTen" placeholder="Üzenet *" required="required"></textarea>
                                            <i class="fas fa-comment"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tb_es_btn_div">
                                        <div class="response"></div>
                                        <div class="tb_es_btn_wrapper">
                                            <input type="hidden" name="form_type" value="contact">
                                            <button type="button" class="submitForm">üzenet elküldése</button>
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
@endsection
