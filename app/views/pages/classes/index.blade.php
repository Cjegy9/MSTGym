@section('content')
<div class="four wide column">
    <div class="ui vertical menu">
        <a class="active item" href="/classes" style="color: #78b638 !important;">Classes</a>
        <a class="item" href="/classes/crossfit" style="color: #78b638 !important;">Crossfit</a>
        <a class="item" href="/classes/pilates" style="color: #78b638 !important;">Pilates</a>
        <a class="item" href="/classes/zumba" style="color: #78b638 !important;">Zumba</a>
        <a class="item" href="/classes/cycling" style="color: #78b638 !important;">Cycling</a>
        <a class="item" href="/classes/yoga" style="color: #78b638 !important;">Yoga</a>
    </div>
</div>

<div class="twelve wide column">
    <div class="ui segment">
        <h4 style="color: #78b638">About Classes</h4>
        <p>
            At MST Gym we incorporate a fun and motivation group atmosphere with expert class instructors to give you an
            effective wy to work out. Whether you're looking for the challenge of Crossfit classes, the fun of Zumba classes
            or the peace of Yoga classes, we have a group fitness class that suits your goals and your schedule. Each member
            will receive an amount of classes based on their membership.<br>
            <br>
            To view information or join a class please visit that classes page on the menu to the left. Remember, you must be
            a member to join a class.

        </p>
    </div>
    <div class="ui segment">
        <h4 style="color: #78b638">All Classes Schedule</h4>
        <div id="calendar"></div>
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
                title : 'Zumba 6:00 - 7:00',
                start : '2015-05-02',
                allDay : true
            }
        ]
        })


    });

    </script>

@append