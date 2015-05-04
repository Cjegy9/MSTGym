@section('content')
<div class="sixteen wide column">
    <div class=" ui top attached tabular menu" style="border-color: #78b638">
        <a class="active item" data-tab="schedule" style="color:#78b638">Schedule Classes</a>
        <a class="item" data-tab="emp_sch" style="color:#78b638">Schedule Employees</a>
        <a class="item" data-tab="add_emp" style="color:#78b638">Add Employee</a>
        <a class="item" data-tab="remove_emp" style="color:#78b638">Remove Employee</a>
        <a class="item" data-tab="remove_member" style="color: #78b638">Remove Member</a>
    </div>
    <div class="ui bottom attached active tab segment" data-tab="schedule">
        {{ Form::open(array('url' => 'class/schedule', 'class' => 'ui form')) }}
            <div class="fields">
                <div class="six wide field">
                    <input type="text" placeholder="Class Name">
                </div>
                <div class="two wide field">
                    <input type="number" placeholder="Capacity">
                </div>
                <div class="four wide field">
                    <input type="text" placeholder="Trainer">
                </div>
            </div>
            <div class="fields">
                <div class="two wide field">
                    <input type="number" placeholder="Start">
                </div>
                <div class="two wide field">
                    <input type="number" placeholder="End">
                </div>
                <div class="four wide field">
                    <input type="date" placeholder="Date">
                </div>
                <div class="four wide field">
                    {{ Form::submit('Schedule Class', array('class' => 'ui submit button buttoncolor')) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>

    <div class="ui bottom attached tab segment" data-tab="emp_sch">
        {{ Form::open(array('url' => 'employee/schedule', 'class' => 'ui form')) }}
            <div class="fields">
                <div class="four wide field">
                    {{ Form::select('employee', $employee_dropdown, '', array('class' => 'ui search dropdown')) }}
                </div>
                <div class="four wide field">
                    <input type="date" name="date">
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
        {{ Form::open(array('url' => 'employee/add', 'class' => 'ui form')) }}
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
        {{ Form::open(array('url' => 'employee/remove', 'class' => 'ui form')) }}
            <div class="fields">
                 <div class="four wide field">
                    {{ Form::select('employee', $employee_dropdown, '', array('class' => 'ui search dropdown')) }}
                 </div>
                 <div class="one wide field">
                    {{ Form::submit('-', array('class' => 'ui button buttoncolor')) }}
                 </div>
            </div>
        {{ Form::close() }}
    </div>

    <div class="ui bottom attached tab segment" data-tab="remove_member">
        {{ Form::open(array('url' => 'member/remove', 'class' => 'ui form')) }}
            <div class="fields">
                <div class="four wide field">
                    <input type="text" placeholder="First Name" name="first_name">
                </div>
                <div class="four wide field">
                    <input type="text" placeholder="Last Name" name="last_name">
                </div>
                <div class="one wide field">
                    {{ Form::submit('-', array('class' => 'ui button buttoncolor')) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>

</div>

@stop

@section('inline-js')
    <script type="text/javascript">
    $('.tabular.menu .item').tab();
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