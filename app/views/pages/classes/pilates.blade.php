@section('content')
    <div class="four wide column">
        <div class="ui vertical menu">
            <a class="item" href="/classes" style="color: #78b638 !important;">Classes</a>
            <a class="item" href="/classes/crossfit" style="color: #78b638 !important;">Crossfit</a>
            <a class="active item" href="/classes/pilates" style="color: #78b638 !important;">Pilates</a>
            <a class="item" href="/classes/zumba" style="color: #78b638 !important;">Zumba</a>
            <a class="item" href="/classes/cycling" style="color: #78b638 !important;">Cycling</a>
            <a class="item" href="/classes/yoga" style="color: #78b638 !important;">Yoga</a>
        </div>
    </div>
    <div class="twelve wide column">
        <div class="ui segment">
            <h4 style="color: #78b638">About Pilates</h4>
            <p>
                Pilates is good for all and can be done by everybody. Pilates is good for both men and women, young and old, elite athletes and those who are new to exercise.
                The nature of the Pilates allows for decompression of the spine as well as stretching and strengthening of the body, resulting in a sculpted physique and enhanced well-being of the body
                and mind. Pilates is physiologically efficient as it is full body focused, coupled with the use of the breath and optimized activation of the inner muscles of the body's core.
            </p>

        </div>

        @if(\Auth::check())
            <div class="ui segment">
                <h4 class="ui dividing header" style="color: #78b638">Join A Pilates Class</h4>
                {{ Form::open(array('url' => action('User\ClassesController@classSignUp', 'pilates'), '', 'class' => 'ui form')) }}
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
                    <h4 style="color: #78b638">Pilates Schedule</h4>
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

