@section('content')
    <div class="sixteen wide column">
        <div class="ui segment">
            <h5 class="buttoncolor">About MST Gym</h5>
            <p>
                MST Gym is a gym located in Rolla Missouri that has something for every person that wants to exercise. MST Gym has classes taught by expert trainers for people of all ages and
                fitness level. The facilities are top of the line and provide members with the best possible equipment to be healthy. Every person has their own set of goals and their own unique perspective
                of what a fitness center means to them. We at MST Gym are here to help our members achieve their goals.
            </p>
        </div>
    </div>
    <div class="sixteen wide column">
        <div class="ui top attached tabular menu" style="border-color: #78b638">
            <a class="active item" data-tab="classes" style="color:#78b638">Classes</a>
            <a class="item" data-tab="crossfit" style="color:#78b638">Crossfit</a>
            <a class="item" data-tab="pilates" style="color:#78b638">Pilates</a>
            <a class="item" data-tab="zumba" style="color:#78b638">Zumba</a>
            <a class="item" data-tab="Cycling" style="color:#78b638">Cycling</a>
            <a class="item" data-tab="yoga" style="color:#78b638">Yoga</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="classes">At MST Gym we incorporate a fun and motivation group atmosphere with expert class instructors
          to give you an effective wy to work out. Whether you're looking for the challenge of Crossfit classes, the fun of Zumba classes or the peace of Yoga classes, we have
          a group fitness class that suits your goals and your schedule. Each member will receive an amount of classes based on their membership.
        <br>
        <br>
            <a class="tiny ui button" style="color: #78b638" href="/classes">
            View Available Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="crossfit">The CrossFit program is designed for universal scalability making it the perfect application for any
        committed individual regardless of experience. We’ve used our same routines for elderly individuals with heart disease and cage fighters one month out from televised
        bouts. We scale load and intensity; we don’t change programs.
        <br>
        <br>
        <a class="tiny ui button" style="color: #78b638" href="/classes/crossfit">
            Crossfit Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="pilates">Pilates is good for all and can be done by everybody. Pilates is good for both men and women, young and old, elite athletes and those who are new to exercise.
        The nature of the Pilates allows for decompression of the spine as well as stretching and strengthening of the body, resulting in a sculpted physique and enhanced well-being of the body
        and mind. Pilates is physiologically efficient as it is full body focused, coupled with the use of the breath and optimized activation of the inner muscles of the body's core.
        <br>
        <br>
        <a class="tiny ui button" style="color: #78b638" href="/classes/pilates">
            Pilates Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="zumba">Zumba is a fitness program that combines Latin and international music with dance moves. Zumba routines incorporate interval training —
        alternating fast and slow rhythms — and resistance training. Aerobic exercise reduces health risks, keeps excess pounds at bay, strengthens your heart and boosts your mood. If you enjoy Zumba,
        you're also more likely to do it regularly — and experience its benefits as an aerobic exercise.
        <br>
        <br>
        <a class="tiny ui button" style="color: #78b638" href="/classes/zumba">
            Zumba Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="Cycling">Experience the thrill of outdoor cycling inside the club.
        In our authentic and athletic cycling class, motivating instructors and up-tempo music keep you energized as you sweat
        through grueling hill climbs, flat terrain, head winds, tail winds and anaerobic intervals.
        <br>
        <br>
        <a class="tiny ui button" style="color: #78b638" href="/classes/cycling">
            Cycling Classes
        </a>
        </div>

        <div class="ui bottom attached tab segment" data-tab="yoga">Designed to enhance vitality and a sense of well-being, our yoga classes use gentle movements to improve flexibility, balance, strength
        and posture. The class may incorporate basic poses from various yoga styles.
        <br>
        <br>
        <a class="tiny ui button"style="color: #78b638" href="/classes/yoga">
            Yoga Classes
        </a>
        </div>
    </div>

    <div class="sixteen wide column">
        <div class="ui segment">
            <div class="ui three column grid">
              <div class="column">
                <div class="ui horizontal segment">
                  <p style="color:#78b638; text-align: center">
                    Silver Membership
                    <ul class="ul list">
                     <li>Access to Weight and Cardio Equipment</li>
                     <li>1 Classes Per Week</li>
                     <li>Receive Monthly Newsletter </li>
                    </ul>
                  </p>
                </div>
              </div>
              <div class="column">
                <div class="ui horizontal segment">
                  <p style="color:#78b638; text-align: center">
                    Gold Membership
                    <ul class="ul list">
                        <li>Access to Weight and Cardio Equipment</li>
                        <li>Access to Pool and Spa</li>
                        <li>4 Classes Per Week</li>
                        <li>10% Discount on Gym Apparel</li>
                        <li>Receive Monthly Newsletter</li>
                    </ul>
                  </p>

                </div>
              </div>
              <div class="column">
                <div class="ui horizontal segment">
                  <p style="color:#78b638; text-align: center">
                    Platinum Membership
                    <ul class="ul list">
                        <li>Access To All Facilites</li>
                        <li>Unlimited Classes Per Week</li>
                        <li>25% Discount on Gym Apparel</li>
                        <li>Receive Monthly Newsletter</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
            <a href="/membership" class="ui button buttoncolor">
                View Memberships
            </a>
        </div>

        <div class="ui segment">
            <h5 class="buttoncolor">About Our Trainers</h5>
            <p>
                The trainers at MST Gym are there to help members perfect their routines and lead classes that make working out fun and exciting.
                All trainers are experts in their craft and provide expert knowledge to members. The trainers at MST Gym are selfless and there to
                help you with any thing you will need to be healthy and safe.
            </p>
        </div>
    </div>
@stop

@section('inline-js')
    <script type="text/javascript">
    $('.tabular.menu .item').tab();
    $(document).ready(function() {
        $('#slider').leanSlider();
    });
    </script>
@append