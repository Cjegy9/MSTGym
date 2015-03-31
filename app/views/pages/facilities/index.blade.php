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

    <div class="ui grid">
        <div class="seven wide column">
            <img src="{{ asset('images/weights.png') }}" height="200" width="300" alt=""/>
        </div>
        <div class="nine wide column">
            <p>
                This is where the information about the weight room will go.
            </p>
        </div>
        <div class="nine wide column">
            <p>
                This is where the information for the pool will go.
            </p>
        </div>
        <div class="seven wide column">
            <img src="{{ asset('images/pool.png') }}" align="right" height="200" width="300" alt=""/>
        </div>
        <div class="seven wide column">
            <img src="{{ asset('images/cycle-studio.png') }}" height="200" width="300" alt=""/>
        </div>
        <div class="nine wide column">
            <p>
                This is where the information for the Spinning studio will go.
            </p>
        </div>
        <div class="nine wide column">
            <p>
                This is where the information for the Yoga Studio will go.
            </p>
        </div>
        <div class="seven wide column">
            <img src="{{ asset('images/yoga-studio.png') }}" align="right" height="200" width="300" alt=""/>
        </div>
    </div>

@stop

@section('inline-js')
    <script type="text/javascript">
    $(document).ready(function() {
        $('#slider').leanSlider();
    });
    </script>
@append