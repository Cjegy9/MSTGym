@section('content')

    <div class="sixteen wide column">
        <div class="slider-wrapper">
            <div id="slider" >
                <div class="slide1">
                    <img src="{{ asset('images/gym-logo.png') }}" width="150" height="300" alt=""/>
                </div>
                <div class="slide2">
                    <img src="{{ asset('images/sun-plug.png') }}" width="150" height="300" alt=""/>
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
        <div class="ui accordion">
            <div class="active title">
            <i class="dropdown icon"></i>
                Crossfit
            </div>
            <div class="active content">
                <p>
                    This is where the content for crossfit will go
                </p>
            </div>
            <div class="title">
            <i class="dropdown icon"></i>
                Pilates
            </div>
            <div class="content">
                <p>
                    This is where the content for pilates will go
                </p>
            </div>
            <div class="title">
            <i class="dropdown icon"></i>
                Zumba
            </div>
            <div class="content">
                <p>
                    This is where the content for class zumba go
                </p>
            </div>
            <div class="title">
                <i class="dropdown icon"></i>
                Spinnging
            </div>
            <div class="content">
                <p>
                    This is where the content for spinning will go.
                </p>
            </div>
            <div class="title">
                <i class="dropdown icon"></i>
                Yoga
            </div>
            <div class="content">
                <p>
                    This is where the content for Yoga will go.
                </p>
            </div>
        </div>
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
    $('.ui.accordion').accordion();
    $(document).ready(function() {
        $('#slider').leanSlider();
    });
    </script>
@append