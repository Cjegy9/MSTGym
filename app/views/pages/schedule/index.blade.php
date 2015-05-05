@section('content')
    <div class="sixteen wide column">
        <div class="ui segment">
            <h4 style="color: #78b638">Trainers and Events</h4>
            <p>
                The schedule below is for members to see what Trainers are on staff during the times they plan on working out.
                All events and promotions that are offered by MST Gym are also displayed on the calender.
            </p>
        </div>
        <div class="ui segment">
            <div id='calendar'></div>
        </div>
    </div>

@stop

@include('includes.globals.classes_js')