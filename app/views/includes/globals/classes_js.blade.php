@section('inline-js')
    <script type="text/javascript">
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            var events = [];

            @if(count($classes) > 0)
                @foreach ($classes as $class)
                    events.push(
                        {
                            title : "{{ $class->name . " " . $class->start . "-" . $class->end }}",
                            start : "{{ $class->day }}"
                        }
                    );
                @endforeach
            @endif

            $('#calendar').fullCalendar({
                @if(count($classes) > 0)
                events: events
                @endif
            });
        });
    </script>
@append