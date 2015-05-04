@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <div class="card">
            <div class="content">
                <div class="header"><h2>{{ $user->first_name }} {{ $user->last_name }}</h2></div>
                <div class="description indent">
                     <h5 class="buttoncolor indent botmarg">Date of Birth</h5> <p class="indent">{{ $user->d_o_b }}<p></p></div>
                     <h5 class="buttoncolor indent botmarg">Address</h5>
                        <p class="indent botmarg">{{ $user->street }}<br></p>
                        <p class="indent botmarg">{{ $user->city }}, {{ $user->state }} {{ $user->zip_code }}<br></p>
                     <h5 class="buttoncolor indent botmarg">Email</h5>
                        <p class="indent botmarg">{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop