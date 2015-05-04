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
        <div class="ui segment">
            <h4 style="color: #78b638">Cycling Schedule</h4>
            <div id='calendar'></div>
        </div>
        <div class="ui segment">
            <h4 class="ui dividing header" style="color: #78b638">Join A Cycling Class</h4>
            {{ Form::open(array('url' => 'cycling/signup', '', 'class' => 'ui form')) }}
            <div class="fields">
                <div class="four wide field">
                    <input type="date" name="class_date" >
                </div>
                <div class="three wide field">
                    <input type="number" name="class_start" placeholder="Start Time">
                </div>
                <div class="three wide field">
                    <input type="number" name="class_end" placeholder="End Time">
                </div>
                <div class="one wide field">
                    {{ Form::submit('+', array('class' => 'ui submit button buttoncolor')) }}
                </div>
            </div>
            {{ Form::close() }}
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

