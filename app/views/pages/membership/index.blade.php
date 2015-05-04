@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <h4 style="color: #78b638">Why Get A Gym Membership</h4>
        <p>
            Joining a gym or health club can be a big decision, one that requires discipline, dedication and commitment.
            Working out at a gym can improve your health. In addition to helping you to burn fat and calories, cardiovascular
            exercise also helps to strengthen your heart and prevent against risky medical conditions. Cardio exercise can
            also help you sleep through the night more soundly, relieve stress, have a more positive attitude and increase energy levels.
            <br>
            <br>
            At MST Gym we have three different levels of membership: Silver, Gold, and Platinum. Each level of membership comes
            with different benefits. All members have access to our weights and cardio equipment as well as the on staff personal trainers.
        </p>
    </div>
    <div class="ui segment">
        <h4 style="color:#78b638">Silver Membership - $20/month</h4>
            <ul class="ul list">
                <li>Access to Weight and Cardio Equipment</li>
                <li>1 Classes Per Week</li>
                <li>Receive Monthly Newsletter </li>
            </ul>
            <p>
                Silver membership provides the basics for members to come in and work out using our weight and cardio equipment. Along with access to our equipment members are allowed to sign up for
                one class per week. Finally, any silver member will receive our monthly newsletter that talks about whats new in the world of fitness and tips for being healthy.
            </p>
        <div class="ui button buttoncolor" id="silver_button">
            Become A Silver Member
        </div>
    </div>
    <div class="ui segment">
        <h4 style="color:#78b638">Gold Membership - $40/month</h4>
        <ul class="ul list">
            <li>Access to Weight and Cardio Equipment</li>
            <li>Access to Pool and Spa</li>
            <li>4 Classes Per Week</li>
            <li>10% Discount on Gym Apparel</li>
            <li>Receive Monthly Newsletter</li>
        </ul>
        <p>
            Gold Membership includes all the benefits of silver membership plus some extra perks. Along with access to our weights and cardio equipment members will be able to enjoy our pool and spa. Members will
            now be allowed to sign up for 4 classes per week. All our apparel will be available to Gold members for a 10% discounted price.
        </p>
        <div class="ui button buttoncolor" id="gold_button">
            Become A Gold Member
        </div>
    </div>
    <div class="ui segment">
        <h4 style="color:#78b638">Platinum Membership - $60/month</h4>
        <ul class="ul list">
            <li>Access To All Facilites</li>
            <li>Unlimited Classes Per Week</li>
            <li>25% Discount on Gym Apparel</li>
            <li>Receive Monthly Newsletter</li>
        </ul>
        <p>
            Platinum is our gyms highest membership. It allows members access to all facilities in the gym. Any Platinum member is allowed unlimited classes per week. All apparel will be available to Platinum members for
            a 25% discounted price.
        </p>
        <div class="ui button buttoncolor" id="platinum_button">
            Become A Platinum Member
        </div>
    </div>
</div>
@stop

@section('inline-css')
    <style type="text/css">
        .buttoncolor {
            color: #78b638 !important;
        }
    </style>

@append