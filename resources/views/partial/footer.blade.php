<div class="footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer_about_content">
                    <div class="footer_img_logo">
                        <a href="{{ route('darknine.app.index') }}"><img src="{{ config('app.url') }}/assets/images/new/logo/logo_64.png" class="img-responsive" alt="logo"/></a>
                    </div>
                    <div class="footer_abotus_content">
                        <p>A D9 egy különleges hely Budapest IX. kerületében, ahol az underground techno zene és az industrial hangulat találkozik.</p>
                        <p>Látogass el hozzánk, hogy átélhesd az igazi techno élményt a D9 falai között!
                            </p>
                    </div>
                    <div class="footer_aboutus_link">
                        <a href="{{ route('darknine.app.about') }}">részletek...</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="wrapper_second_blog footer_heading">
                    <h4>latest news</h4>
                    <div class="blog_wrapper1">
                        <div class="blog_image">
                            <img src="{{ config('app.url') }}/assets/images/ft_blog1.png" class="img-responsive" alt="blog-img1_img"/>
                        </div>
                        <div class="blog_text">
                            <h5><a href="#">Lorem Night club
                                    and Beer bar </a></h5>
                            <div class="blog_date">June 28, 2020</div>
                        </div>
                    </div>
                    <div class="blog_wrapper2">
                        <div class="blog_image">
                            <img src="{{ config('app.url') }}/assets/images/ft_blog2.png" class="img-responsive" alt="blog-img2_img"/>
                        </div>
                        <div class="blog_text">
                            <h5><a href="#">Lorem Night club
                                    and Beer bar </a></h5>
                            <div class="blog_date">June 28, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="wrapper_second_useful footer_heading">
                    <h4>galéria</h4>
                    <div class="footer_gallary">
                        <div class="row">
                            <ul>
                                @php
                                    $images = \App\Models\Gallery\GalleryImage::inRandomOrder()->limit(6)->get();
                                @endphp
                                @foreach($images as $image)
                                    <li><img height="75" width="75" src="{{ $image->file_path }}" alt="img" class="img-responsive"></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="wrapper_second_contact footer_heading">
                    <h4>kapcsolat</h4>

                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i><span>Budapest, Zombori utca 16</span>
                        </li>
                        <li><i class="fas fa-globe"></i><a href="{{ config('app.url') }}">{{ config('app.url') }}</a>

                        </li>
                        <li><i class="fa fa-phone"></i><span>+36 1 123-4567</span>

                        </li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:darknine.contact@gmail.com">darknine.contact@gmail.com</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="footer_bottom_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12 col-sm-12">
                <div class="footer_copyright">
                    <p>© {{ date('Y') }} <a href="{{ route('darknine.app.index') }}">D9 Dark Nine</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 col-sm-12">
                <div class="footer_icon_link">
                    <ul>
                        <li><a href="https://www.facebook.com/D9.club.bp"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/d9.dark.nine"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer section end -->
<!--custom js files-->
<script src="{{ config('app.url') }}/assets/js/jquery-3.3.1.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/modernizr.js"></script>
<script src="{{ config('app.url') }}/assets/js/jquery.menu-aim.js"></script>
<script src="{{ config('app.url') }}/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/jquery.magnific-popup.js"></script>
<script src="{{ config('app.url') }}/assets/js/jquery.countTo.js"></script>
<script src="{{ config('app.url') }}/assets/js/jquery.inview.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/jquery.downCount.js"></script>
<script src="{{ config('app.url') }}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/owl.carousel.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.extension.video.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
<script src="{{ config('app.url') }}/assets/js/player.js"></script>
<script src="{{ config('app.url') }}/assets/js/slider.js"></script>
<script src="{{ config('app.url') }}/assets/js/music.js"></script>
<script src="{{ config('app.url') }}/assets/js/custom.js"></script>
<script src="{{ config('app.url') }}/assets/js/toastify.min.js"></script>
<!-- custom js-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDOogBL2cC0dSezucKzQGWxMIMmclqWNts&sensor=false"></script>
<script>
    var infowindow = null;
    $(document).ready(function () {
        initialize();
    });

    function initialize() {

        var centerMap = new google.maps.LatLng(41.0793, -85.1394);

        var myOptions = {
            zoom: 6,
            center: centerMap,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                elementType: 'geometry',
                stylers: [{
                    color: '#1b1b1b'
                }]
            }, {
                elementType: 'labels.text.stroke',
                stylers: [{
                    color: '#1b1b1b'
                }]
            }, {
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#746855'
                }]
            }, {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#d59563'
                }]
            }]
        }

        var map = new google.maps.Map(document.getElementById("map"), myOptions);

        setMarkers(map, sites);
        infowindow = new google.maps.InfoWindow({
            content: "loading..."
        });

        var bikeLayer = new google.maps.BicyclingLayer();
        bikeLayer.setMap(map);

    }

    var sites = [
        ['club-couture', 38.6270, -90.1994, 5, 'club-couture Lakewood Avenue, Chicago'],
    ];

    function setMarkers(map, markers) {

        for (var i = 0; i < markers.length; i++) {
            var sites = markers[i];
            var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
            var marker = new google.maps.Marker({
                position: siteLatLng,
                map: map,
                title: sites[0],
                zIndex: sites[3],
                html: sites[4]
            });

            var contentString = "Some content";

            google.maps.event.addListener(marker, "click", function () {
                infowindow.setContent(this.html);
                infowindow.open(map, this);
            });
        }
    }
</script>
@foreach (['error', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <script>
        $(document).ready(function() {
            Toastify({
                text: "{{ Session::get('alert-' . $msg) }}",
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    @switch($msg)
                        @case('error')
                            background: "linear-gradient(90deg, rgba(184,0,0,1) 0%, rgba(129,0,0,1) 100%)",
                            @break
                        @case('warning')
                            background: "linear-gradient(90deg, rgba(180,184,0,1) 0%, rgba(180,178,0,1) 100%)",
                            @break
                        @case('success')
                            background: "linear-gradient(90deg, rgba(0,150,12,1) 0%, rgba(0,79,21,1) 100%)",
                            @break
                        @case('info')
                            background: "linear-gradient(90deg, rgba(0,151,255,1) 0%, rgba(0,87,184,1) 100%)",
                            @break
                    @endswitch
                },
            }).showToast();
        });
    </script>
    @endif
@endforeach
</body>
</html>
