<a class="ui computer only" href="{{ URL::to('/') }}"><img  class="logo" src="{{ asset('images/nest-logo.png')}}" /></a>
<div class="ui menu">
    {{ HTML::linkClass('dashboard', '<i class="home icon"></i> Home', 'strong item') }}
    <div class="right menu blue">
        {{ HTML::linkClass('/logout', '<i class="user icon"></i> Logout', 'item') }}
    </div>
</div>