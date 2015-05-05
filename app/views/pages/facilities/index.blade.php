@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <div class="ui grid">

            <div class="six wide column">
                <img src="{{ asset('images/gym.png') }}" height="200" width="300" alt=""/>
            </div>
            <div class="ten wide column">
                <h4 style="color: #78b638">Fitness Center</h4>
                <p>
                    The Fitness Center features equipment such as  Elliptical Trainers and Body Masters cardiovascular
                    equipment. Strength training equipment includes a chin dip, vertical chest press, shoulder press,
                    cable-cross over, adjustable hi/lo pulley, leg curl and leg extension.The Weight Room offers use of
                    various benches, power stations and other free weight equipment.
                </p>
            </div>

            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>

            <div class="ten wide column">
                <h4 style="color: #78b638">Cardio Equipment</h4>
                <p>
                    Cardio equipment gets the heart rate and breathing levels up while putting minimal strain on the body. The machines here include
                    an Indoor Rower, Arc Trainer, Stairmaster, Jacobs Ladder, Stationary Cycles, Incline Trainers and Elliptical Trainers. There machines
                    are regularly updated so members are always using the best equipment out there.
                </p>
            </div>
            <div class="six wide column">
                <img src="{{ asset('images/cycle-studio.png') }}" align="right" height="200" width="300" alt=""/>
            </div>

            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>

            <div class="six wide column">
                <img src="{{ asset('images/pool.png') }}" align="left" height="200" width="300" alt=""/>
            </div>
            <div class="ten wide column">
                <h4 style="color: #78b638">Pool and Spa</h4>
                <p>
                    After members have a great workout session they can relax and unwind in our leisure pool and spa. Members can also get a great workout using the
                    lap pool. Along with using the pool and spa members have access to private showers and locker rooms.
                </p>
            </div>

            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>

            <div class="ten wide column">
                <h4 style="color: #78b638">Class Rooms</h4>
                <p>
                     All the classes at MST Gym are located in our studio classrooms. They have ample space to accommodate classes both small and large. With eight classrooms
                     our gym can hold multiple classes at once. This allows for a variety of classes for our members to enjoy. Come join us for a fun class where exercise is not a job but something
                                         you will look forward to everyday.
                </p>
            </div>
            <div class="six wide column">
                <img src="{{ asset('images/yoga.png') }}" align="right" height="200" width="300" alt=""/>
            </div>

        </div>
    </div>
</div>

@stop

@section('inline-js')
    <script type="text/javascript">
    $(document).ready(function() {
        $('#slider').leanSlider();
    });
    </script>
@append