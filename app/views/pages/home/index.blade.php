@section('content')

    {{--<div class="sixteen wide column">
        <div class="slider-wrapper">
            <div id="slider" class="lean-slider">
                <div class="slide1 lean-slider-slide">
                                    <img src="images/yoga-studio.png" alt=""/>
                                </div>
                <div class="slide2 lean-slider-slide">
                    <img src="{{ asset('images/crossfit.png') }}" alt=""/>
                </div>
                <div class="slide3 lean-slider-slide">
                    <img src="{{ asset('images/pool.png') }}"height="350px" alt=""/>
                </div>
                <div class="slide4 lean-slider-slide">
                    <img src="{{ asset('images/cycle-studio.png') }}" height="350px" alt=""/>
                </div>
                <div class="slide5 lean-slider-slide">
                    <img src="images/yoga-studio.png" height="350px" alt=""/>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="sixteen wide column">
        <div class="ui segment">
            <p>
                This is the about segment.
            </p>
        </div>
    </div>
    <div class="sixteen wide column">
        <div class="ui top attached tabular menu" style="border-color: #78b638">
            <a class="active item" data-tab="classes" style="color:#78b638">Classes</a>
            <a class="item" data-tab="crossfit" style="color:#78b638">Crossfit</a>
            <a class="item" data-tab="pilates" style="color:#78b638">Pilates</a>
            <a class="item" data-tab="zumba" style="color:#78b638">Zumba</a>
            <a class="item" data-tab="Cycling" style="color:#78b638">Cycling</a>
            <a class="item" data-tab="yoga" style="color:#78b638">Yoga</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="classes">At MST Gym we incorporate a fun and motivation group atmosphere with expert class instructors
          to give you an effective wy to work out. Whether you're looking for the challenge of Crossfit classes, the fun of Zumba classes or the peace of Yoga classes, we have
          a group fitness class that suits your goals and your schedule. Each member will receive an amount of classes based on their membership.
        <br>
            <a class="tiny ui button" style="float: right; color: #78b638" href="/classes">
            View Available Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="crossfit">The CrossFit program is designed for universal scalability making it the perfect application for any
        committed individual regardless of experience. We’ve used our same routines for elderly individuals with heart disease and cage fighters one month out from televised
        bouts. We scale load and intensity; we don’t change programs.
        <br>
        <a class="tiny ui button" style="float: right; color: #78b638" href="/classes/crossfit">
            Crossfit Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="pilates">Pilates is good for all and can be done by everybody. Pilates is good for both men and women, young and old, elite athletes and those who are new to exercise.
        The nature of the Pilates allows for decompression of the spine as well as stretching and strengthening of the body, resulting in a sculpted physique and enhanced well-being of the body
        and mind. Pilates is physiologically efficient as it is full body focused, coupled with the use of the breath and optimized activation of the inner muscles of the body's core.
        <br>
        <a class="tiny ui button" style="float: right; color: #78b638" href="/classes/pilates">
            Pilates Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="zumba">Information for Zumba
        <br>
        <a class="tiny ui button" style="float: right; color: #78b638" href="/classes/zumba">
            Zumba Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="Cycling">Experience the thrill of outdoor cycling inside the club.
        In our authentic and athletic cycling class, motivating instructors and up-tempo music keep you energized as you sweat
        through grueling hill climbs, flat terrain, head winds, tail winds and anaerobic intervals.
        <br>
        <a class="tiny ui button" style="float: right; color: #78b638" href="/classes/cycling">
            Cycling Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="yoga">Information for Yoga
        <br>
        <a class="tiny ui button" style="float: right; color: #78b638" href="/classes/yoga">
            Yoga Classes
        </a>
        </div>
    </div>

    <div class="sixteen wide column">
        <div class="ui segment">
            <div class="ui three column grid">
              <div class="column">
                <div class="ui horizontal segment">
                  <p style="color:#78b638; text-align: center">
                  Silver Membership
                  <ul class="ul list">
                    <li></li>
                  </ul>
                  </p>
                </div>
              </div>
              <div class="column">
                <div class="ui horizontal segment">
                  <p style="color:#78b638; text-align: center">Gold Membership</p>
                </div>
              </div>
              <div class="column">
                <div class="ui horizontal segment">
                  <p style="color:#78b638; text-align: center">Platinum Membership</p>
                </div>
              </div>
            </div>
        </div>
    </div>
@stop

@section('inline-js')
    <script type="text/javascript">
    $('.tabular.menu .item').tab();
    $(document).ready(function() {
        $('#slider').leanSlider();
    });
    </script>
@append