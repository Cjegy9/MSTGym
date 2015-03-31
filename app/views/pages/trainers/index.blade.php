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
@stop

@section('inline-js')
    <script type="text/javascript">
    $(document).ready(function() {
        $('#slider').leanSlider();
    });
    </script>
@append