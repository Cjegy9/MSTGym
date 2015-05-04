@section('inline-js')
    <script type="text/javascript">
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                events: [
                    @foreach($classes as $class)
                        {
                            title : "{{ $class->name . " " . $class->start . "-" . $class->end }}",
                            start : "{{ $class->day }}",
                        }
                    @endforeach
                ]
            })
        });
    </script>
@append