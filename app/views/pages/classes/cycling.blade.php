@section('content')
    <div class="four wide column">
        <div class="ui vertical menu">
            <a class="item" href="/classes" style="color: #78b638 !important;">Classes</a>
            <a class="item" href="/classes/crossfit" style="color: #78b638 !important;">Crossfit</a>
            <a class="item" href="/classes/pilates" style="color: #78b638 !important;">Pilates</a>
            <a class="item" href="/classes/zumba" style="color: #78b638 !important;">Zumba</a>
            <a class="active item" href="/classes/cycling" style="color: #78b638 !important;">Cycling</a>
            <a class="item" href="/classes/yoga" style="color: #78b638 !important;">Yoga</a>
        </div>
    </div>
    <div class="twelve wide column">
        <div class="ui segment">
            <h4 style="color: #78b638">About Cycling</h4>
            <p>
                Experience the thrill of outdoor cycling inside the club.
                        In our authentic and athletic cycling class, motivating instructors and up-tempo music keep you energized as you sweat
                        through grueling hill climbs, flat terrain, head winds, tail winds and anaerobic intervals.
            </p>

        </div>

        @if(\Auth::check())
            <div class="ui segment">
                <h4 class="ui dividing header" style="color: #78b638">Join A Cycling Class</h4>
                {{ Form::open(array('url' => action('User\ClassesController@classSignUp', 'cycling'), '', 'class' => 'ui form')) }}
                <div class="fields">
                    <div class="eleven wide field">
                        {{ Form::select('class', $classes_dropdown, '', array('id' => 'ui dropdown')) }}
                    </div>
                    <div class="one wide field">
                        {{ Form::submit('+', array('class' => 'ui submit button buttoncolor')) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        @endif
    </div>

    <div class="sixteen wide column">
        <div class="ui segment">
                    <h4 style="color: #78b638">Cycling Schedule</h4>
                    <div id='calendar'></div>
                </div>
    </div>




@stop

@include('includes.globals.classes_js')

@section('inline-css')
    <style type="text/css">
        .buttoncolor {
            color: #78b638 !important;
        }
    </style>

@append

