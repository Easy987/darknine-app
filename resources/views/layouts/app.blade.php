@include('partial/header')
<body>
<!-- preloader Start -->
<div class="jb_preloader">
    <div class="spinner_wrap">
        <div class="spinner"></div>
    </div>
</div>

<a href="javascript:" id="return-to-top"><i class="flaticon-up-arrow"></i></a>

@yield('top_content')

@include('partial.menu')

@yield('content')

@include('partial.footer')
