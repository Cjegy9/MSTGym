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
    <div class='ui segment'>
        <h4 style="color: #78b638">Search Classes</h4>
        <div class="ui divider"></div>
        <div class="ui form">
            <div class="field">
                {{ Form::text('class_name', '', array('placeholder' => 'Class Name', 'id' => 'class_name')) }}
            </div>
            <div class="field">
                {{ Form::select('class_type', $class_types, '', array('id' => 'type_dropdown')) }}
            </div>
            <div class="field">
                {{ Form::select('employee', $employees, '', array('id' => 'employee_dropdown')) }}
            </div>
            <div class="field">
                <button class="ui button buttoncolor" id="class_search">Search</button>
            </div>
            <div class="hidden" id="search_results">
                <div class="ui divider"></div>
                <div class="ui list" id="results_list">

                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('inline-js')
    <script type="text/javascript">
        $("#class_search").on("click", function()
        {
            var params = {
                'name' : $("#class_name").val(),
                'class_type' : $("#type_dropdown").val(),
                'employee' : $("#employee_dropdown").val()
            };

            $.ajax({
                type : "POST",
                data : params,
                url : "{{ action('User\ClassesController@postSearch') }}",
                success : function(data) {
                    if(data.count > 0) {
                        var result_list = "";
                        for (i = 0; i < data.count; i++) {
                            result_list += '<div class="item">';
                            result_list += '<div class="header">' + data.results[i]['name'] + '</div>';
                            result_list += '<strong>Capacity: </strong>' + data.results[i]['capacity'];
                            result_list += ' <strong>Start Time: </strong>' + data.results[i]['start'];
                            result_list += ' <strong>End Time: </strong>' + data.results[i]['end'];
                            result_list += ' <strong>Trainer: </strong>' + data.results[i]['employee']['first_name'];
                            result_list += '</div>'
                        }

                        $("#results_list").html(result_list);
                        $("#search_results").removeClass('hidden');
                    } else {
                        $("#search_results").removeClass('hidden');
                        $("#search_results").append('<div class="ui blue message">Sorry! We could not find any results for your search</div>')
                    }
                }
            });
        });
    </script>
@append

