@section('content')

    <div class="sixteen wide column">
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
    </div>
    <div class="sixteen wide column">
        <div class="ui segment">
            <p>
                This is the about segment.
            </p>
        </div>
    </div>
    <div class="sixteen wide column">
        <div class="ui top attached green tabular menu">
            <a class="active item" data-tab="classes">Classes</a>
            <a class="item" data-tab="crossfit">Crossfit</a>
            <a class="item" data-tab="pilates">Pilates</a>
            <a class="item" data-tab="zumba">Zumba</a>
            <a class="item" data-tab="spinning">Spinning</a>
            <a class="item" data-tab="yoga">Yoga</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="classes">This will be information about the different classes and what classes and do for you.</div>
        <div class="ui bottom attached tab segment" data-tab="crossfit">Information for Crossfit</div>
        <div class="ui bottom attached tab segment" data-tab="pilates">Information for Pilates</div>
        <div class="ui bottom attached tab segment" data-tab="zumba">Information for Zumba</div>
        <div class="ui bottom attached tab segment" data-tab="spinning">Information for Spinning</div>
        <div class="ui bottom attached tab segment" data-tab="yoga">Information for Yoga</div>
    </div>
    <div class="sixteen wide column">
    <br />
        <div class="ui three column grid">
          <div class="column">
            <div class="ui horizontal segment">
              <p>Silver Membership</p>
            </div>
          </div>
          <div class="column">
            <div class="ui horizontal segment">
              <p>Gold Membership</p>
            </div>
          </div>
          <div class="column">
            <div class="ui horizontal segment">
              <p>Platinum Membership</p>
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