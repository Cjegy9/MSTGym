@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <div class="ui grid">

            <div class="six wide column">
                <img src="{{ asset('images/gym.png') }}" height="200" width="300" alt=""/>
            </div>
            <div class="ten wide column">
                <h4 style="color: #78b638">Weight Room</h4>
                <p>
                    This is where the information about the weight room will go.
                </p>
            </div>

            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>

            <div class="ten wide column">
                <h4 style="color: #78b638">Cardio Equipment</h4>
                <p>
                    This is where the information for the Spinning studio will go.
                </p>
            </div>
            <div class="six wide column">
                <img src="{{ asset('images/cycle-studio.png') }}" align="right" height="200" width="300" alt=""/>
            </div>

            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>

            <div class="six wide column">
                <img src="{{ asset('images/pool.png') }}" align="left" height="200" width="300" alt=""/>
            </div>
            <div class="ten wide column">
                <h4 style="color: #78b638">Pool and Spa</h4>
                <p>
                    This is where the information for the pool will go.
                </p>
            </div>

            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>

            <div class="ten wide column">
                <h4 style="color: #78b638">Class Rooms</h4>
                <p>
                    This is where the information for the Yoga Studio will go.
                </p>
            </div>
            <div class="six wide column">
                <img src="{{ asset('images/yoga.png') }}" align="right" height="200" width="300" alt=""/>
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