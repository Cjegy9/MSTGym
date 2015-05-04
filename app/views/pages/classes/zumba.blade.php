@section('content')
    <div class="four wide column">
        <div class="ui vertical menu">
            <a class="item" href="/classes" style="color: #78b638 !important;">Classes</a>
            <a class="item" href="/classes/crossfit" style="color: #78b638 !important;">Crossfit</a>
            <a class="item" href="/classes/pilates" style="color: #78b638 !important;">Pilates</a>
            <a class="active item" href="/classes/zumba" style="color: #78b638 !important;">Zumba</a>
            <a class="item" href="/classes/cycling" style="color: #78b638 !important;">Cycling</a>
            <a class="item" href="/classes/yoga" style="color: #78b638 !important;">Yoga</a>
        </div>
    </div>
    <div class="twelve wide column">
        <div class="ui segment">
            <h4 style="color: #78b638">About Zumba</h4>
            <p>
                Zumba is a fitness program that combines Latin and international music with dance moves. Zumba routines incorporate interval training —
                        alternating fast and slow rhythms — and resistance training. Aerobic exercise reduces health risks, keeps excess pounds at bay, strengthens your heart and boosts your mood. If you enjoy Zumba,
                        you're also more likely to do it regularly — and experience its benefits as an aerobic exercise.
            </p>

        </div>
        <div class="ui segment">
            <h4 style="color: #78b638">Zumba Schedule</h4>
            <div id='calendar'></div>
        </div>
        <div class="ui segment">
            <h4 class="ui dividing header" style="color: #78b638">Join A Zumba Class</h4>
            {{ Form::open(array('url' => 'zumba/signup', '', 'class' => 'ui form')) }}
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

