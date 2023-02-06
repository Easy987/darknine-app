<div class="news_letter_wrapper dm_cover">
    <div class="club_video_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                <div class="dmx_heading_wraper">
                    <img src="{{ config('app.url') }}/assets/images/head8.png" alt="img">
                    <h2>Iratkozz fel hirlevelünkre</h2>
                    <div class="bars bars2 bar_track2">
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
            <div class="col-md-12 col-lg-12">
                <div class="club-couture_news_field">
                    <div class="club-couture_newsletter_field">
                        <form method="POST" action="{{ route('darknine.app.subscribe') }}">
                            @csrf
                            <input type="email" name="email" placeholder="Email cím">
                            <button type="submit">feliratkozom</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
