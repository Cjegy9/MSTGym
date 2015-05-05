@section('inline-js')
    <script type="text/javascript">
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            var events = [];

            @if(count($schedule) > 0)
                @foreach ($schedule as $class)
                    events.push(
                        {
                            title : "{{ $class->employee->first_name . " " . $class->employee->last_name . " " . $class->start . "-" . $class->end }}",
                            start : "{{ $class->day }}"
                        }
                    );
                @endforeach
            @endif

            $('#calendar').fullCalendar({
                @if(count($schedule) > 0)
                events: events
                @endif
            });
        });
    </script>
@append