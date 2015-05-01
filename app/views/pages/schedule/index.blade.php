@section('content')
    <div class="sixteen wide column">
        <div class="ui segment">
            <div id='calendar'>

            </div>
        </div>
    </div>

@stop

@section('inline-js')
    <script type="text/javascript">
    $(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
        events: [
            {
                title : 'Zumba',
                start : '2015-05-02',
                allDay : true
            },
        ]


    });
    });
    </script>

@stop