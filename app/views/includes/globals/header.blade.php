<div class="ui grid">
    <div class="eight wide column">

        <img  class="logo" src="{{ asset('images/gym-logo.png')}}" />

    </div>
    @if (\Auth::user() == null)
        <div class="eight wide column" style="vertical-align: bottom">
            {{ Form::open(array('url' => action('User\AccountController@postLogin'), 'class' => 'ui form')) }}
            <div class="three fields">
                <div class="required field" style="float: right; padding-right: 0px; margin-bottom: 0px;">
                    <div class="ui icon input">
                        {{ Form::password('password', array('placeholder' => 'password')) }}
                    </div>
                </div>
                <div class="required field" style="float: right; margin-bottom: 0px;">
                    <div class="ui icon input">
                        {{ Form::text('email', '', array('placeholder' => 'Email')) }}
                    </div>
                </div>
                <div class="required field" style="text-align: right;">
                    {{ Form::submit('Login', array('class' => 'ui submit button')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    @endif
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
        <a href="/schedule" class="item">
            <i></i> Schedule
        </a>
        <a href="/account" class="item">
            <i></i> Account
        </a>
        @if(\Auth::check() && \Auth::user()->admin)
        <a href="/admin" class="item">
            <i></i>Admin
        </a>
        @endif
        <a href="/contact" class="item">
            <i></i>Contact Us
        </a>
        @if (\Auth::check())
            <a href="{{ action('User\AccountController@getLogout') }}" class="item">
                <i></i>Logout
            </a>
        @endif
    </div>
</div>
