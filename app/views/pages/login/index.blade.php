@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <form class="ui form">
            <h4 class="ui dividing header">Login</h4>
            <div class="two fields">
                <div class="required field">
                    <label>Username</label>
                    <div class="ui icon input">
                        <input type="text" placeholder="Username">
                        <i class="user icon"></i>
                    </div>
                </div>
                <div class="required field">
                    <label>Password</label>
                    <div class="ui icon input">
                        <input type="password" placeholder="Username">
                        <i class="lock icon"></i>
                    </div>
                </div>
            </div>
            <br />
            <div class="ui submit button">Login</div>
        </form>
    </div>
</div>
@stop