<div class="ui grid">
<div class="eight wide column">

<img  class="logo" src="{{ asset('images/gym-logo.png')}}" />

</div>
<div class="eight wide column" style="vertical-align: bottom">
    {{ Form::open(array('url' => action('User\LoginController@postLogin'), 'class' => 'ui form')) }}
        <div class="three fields">
            <div class="required field" style="float: right; padding-right: 0px; margin-bottom: 0px;">
                <div class="ui icon input">
                    {{ Form::password('password', array('placeholder' => 'password')) }}
                </div>
            </div>
            <div class="required field" style="float: right; margin-bottom: 0px;">
                <div class="ui icon input">
                    {{ Form::text('username', '', array('placeholder' => 'Username')) }}
                </div>
            </div>
            <div class="required field" style="text-align: right;">
                {{ Form::submit('Login', array('class' => 'ui submit button')) }}
            </div>
        </div>
    {{ Form::close() }}
</div>
</div>
<div class="ui inverted menu">
    <div class="greencolor">
  <a href="/home" class="item">
    <i></i> Home
  </a>
  <a href="/classes" class="item">
    <i></i> Classes
  </a>
  <a href="/membership" class="item">
    <i></i>Membership
  </a>
  <a href="/facilities" class="item">
    <i></i> Facilities
  </a>
  <a href="/trainers" class="item">
    <i></i> Trainers
  </a>
  <a href="/schedule" class="item">
    <i></i> Schedule
  </a>
  <a href="/login" class="item">
    <i></i> Login
  </a>
  <a href="/admin" class="item">
    <i></i>Admin
  </a>
  <a href="/contact" class="item">
    <i></i>Contact Us
  </a>
  </div>
</div>
