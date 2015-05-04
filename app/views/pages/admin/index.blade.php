@section('content')
<div class="sixteen wide column">
    <div class=" ui top attached tabular menu" style="border-color: #78b638">
        <a class="active item" data-tab="schedule" style="color:#78b638">Schedule Classes</a>
        <a class="item" data-tab="emp_sch" style="color:#78b638">Schedule Employees</a>
        <a class="item" id="add_emp" data-tab="add_emp" style="color:#78b638">Add Employee</a>
        <a class="item" data-tab="remove_emp" style="color:#78b638">Remove Employee</a>
        <a class="item" data-tab="remove_member" style="color: #78b638">Remove Member</a>
    </div>
    <div class="ui bottom attached active tab segment" data-tab="schedule">
        {{ Form::open(array('url' => action('User\AdminController@postClass'), 'class' => 'ui form')) }}
            <div class="fields">
                <div class="six wide field">
                    {{ Form::text('name', '', array('placeholder' => 'Class Name')) }}
                </div>
                <div class="two wide field">
                    {{ Form::number('capacity', "", array('placeholder' => 'Capacity')) }}
                </div>
                <div class="four wide field">
                    {{ Form::select('employee_id', $employee_dropdown, '', array('class' => 'ui dropdown', 'id' => 'employee_id')) }}
                </div>
            </div>
            <div class="fields">
                <div class="two wide field">
                    {{ Form::number('start', "", array('placeholder' => 'start')) }}
                </div>
                <div class="two wide field">
                    {{ Form::number('end', "", array('placeholder' => 'End')) }}
                </div>
                <div class="four wide field">
                    <input type="date" name="day" placeholder="Date">
                </div>
                <div class="four wide field">
                    {{ Form::select('class_type', $class_types, "", array('class' => 'ui dropdown', 'id' => 'class_types')) }}
                </div>
                <div class="four wide field">
                    {{ Form::submit('Schedule Class', array('class' => 'ui submit button buttoncolor')) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>

    <div class="ui bottom attached tab segment" data-tab="emp_sch">
        {{ Form::open(array('url' => action('User\AdminController@postSchedule'), 'class' => 'ui form')) }}
            <div class="fields">
                <div class="four wide field">
                    {{ Form::select('employee_id', $employee_dropdown, '', array('class' => 'ui search dropdown')) }}
                </div>
                <div class="four wide field">
                    <input type="date" name="day">
                </div>
                <div class="two wide field">
                    <input type="number" placeholder="Start" name="start">
                </div>
                <div class="two wide field">
                    <input type="number" placeholder="End" name="end">
                </div>
                <div class="one wide field">
                {{ Form::submit('+', array('class' => 'ui button buttoncolor')) }}
                </div>
            </div>

        {{ Form::close() }}
    </div>
    <div class="ui bottom attached tab segment" data-tab="add_emp">
        {{ Form::open(array('url' => action('User\AdminController@postEmployee'), 'class' => 'ui form')) }}
            <div class="fields">
                <div class="four wide field">
                    <input type="text" placeholder="First Name" name="first_name">
                </div>
                <div class="four wide field">
                    <input type="text" placeholder="Last Name" name="last_name">
                </div>
                <div class="four wide field">
                    <input type="number" placeholder="Phone Number" name="phone_number">
                </div>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <input type="text" placeholder="Position" name="position">
                </div>
                <div class="two wide field">
                    <input type="number" placeholder="Pay" name="pay">
                </div>
                <div class="two wide field">
                    {{ Form::submit('Add Employee', array('class' => 'ui submit button buttoncolor')) }}
                </div>
            </div>
        {{ Form::close() }}

    </div>
    <div class="ui bottom attached tab segment" data-tab="remove_emp">
        <div class="ui form">
            <div class="fields">
                 <div class="four wide field">
                    {{ Form::select('employee_dropdown', $employee_dropdown, '', array('class' => 'ui dropdown', 'id' => 'remove_employee_dropdown')) }}
                 </div>
                 <div class="one wide field">
                    <button class="ui button buttoncolor" id="remove_employee">-</button>
                 </div>
            </div>
        </div>
    </div>

    <div class="ui bottom attached tab segment" data-tab="remove_member">
        <div class="ui form">
            <div class="fields">
                <div class="four wide field">
                    {{ Form::select('members_dropdown', $members_dropdown, '', array('class' => 'ui dropdown', 'id' => 'members_dropdown')) }}
                </div>
                <div class="one wide field">
                    <button class="ui button buttoncolor" id="remove_member">-</button>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('inline-js')
    <script type="text/javascript">
        $('.tabular.menu .item').tab();

        $("#remove_employee").on("click", function()
        {
            var params = {
                'emp_id' : $("#remove_employee_dropdown").val()
            };

            $.ajax({
                type : "DELETE",
                data : params,
                url : "{{ action('User\AdminController@deleteEmployee') }}",
                success : function(data){
                    $("#remove_employee_dropdown option[value=" + params['emp_id'] + "]").remove();
                }
            });
        });

        $("#remove_member").on("click", function()
        {
            var params = {
                'user_id' : $("#members_dropdown").val()
            };

            $.ajax({
                type : "DELETE",
                data : params,
                url : "{{ action('User\AdminController@deleteMember') }}",
                success : function(data){
                    $("#members_dropdown option[value=" + params['user_id'] + "]").remove();
                }
            });
        });
    </script>
@append

@section('inline-css')
    <style type="text/css">
        .hide {
            display: none;
        }
        .buttoncolor {
            color: #78b638 !important;
        }
    </style>
@append