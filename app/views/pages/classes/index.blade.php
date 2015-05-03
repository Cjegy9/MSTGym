@section('content')
{{--<div class="sixteen wide column">
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
</div>--}}


<div class="four wide column">
    <div class="ui vertical menu">
        <a class="active item" href="/classes" style="color: #78b638 !important;">Classes</a>
        <a class="item" href="/classes/crossfit" style="color: #78b638 !important;">Crossfit</a>
        <a class="item" href="/classes/pilates" style="color: #78b638 !important;">Pilates</a>
        <a class="item" href="/classes/zumba" style="color: #78b638 !important;">Zumba</a>
        <a class="item" href="/classes/cycling" style="color: #78b638 !important;">Cycling</a>
        <a class="item" href="/classes/yoga" style="color: #78b638 !important;">Yoga</a>
    </div>
</div>

<div class="twelve wide column">
    <div class="ui segment">
        <p>This is the segment</p>
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