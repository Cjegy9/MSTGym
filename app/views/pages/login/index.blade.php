@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <form class="ui form">
            <h4 class="ui dividing header" style="color: #78b638">Login</h4>
            <div class="two fields">
                <div class="field">
                    <label>Username</label>
                    <input type="text" placeholder="Username">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" placeholder="Password">
                </div>
            </div>
            <div class="ui submit button">Login</div>
        </form>
    </div>

    <div class="ui segment">
        <div class="ui form">
            <h4 class="ui dividing header" style="color: #78b638">Create Account</h4>
            <div class="fields">
                <div class="ten wide field">
                    <label>Name</label>
                    <div class="two fields">
                        <div class="field">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Last Name">
                         </div>
                    </div>
                </div>
                <div class="two wide field">
                    <label>Middle Initial</label>
                    <input type="text" placeholder="MI">
                </div>
                <div class="four wide field">
                    <label>Date of Birth</label>
                    <input type="date">
                </div>
            </div>
                <div class="fields">
                    <div class="sixteen wide field">
                        <label>Address</label>
                        <div class="four fields">
                            <div class="field">
                                <input type="text" placeholder="Street">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="City">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="State">
                            </div>
                            <div class="field">
                                <input type="number" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fields">
                    <div class="twelve wide field">
                        <label>Account Info</label>
                        <div class="three fields">
                            <div class="field">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Retype Password">
                            </div>
                        </div>
                    </div>
                    <div class="four wide field">
                        <label>Membership</label>
                        <select class="ui search dropdown" id="mem_level">
                            <option value="">Membership Level</option>
                            <option value="">None</option>
                            <option value="Silver">Silver - $20/month</option>
                            <option vlaue="Gold">Gold - $40/month</option>
                            <option vlaue="Platinum">Platinum - $60/month</option>
                        </select>
                    </div>
                </div>

                <h4 class="ui dividing header hide" id="payment_header" style="color: #78b638">Payment Information</h4>
                <div class="fields hide" id="payment_fields">
                    <div class="sixteen wide field">
                        <div class="four fields">
                            <div class="field">
                                <input type="text" placeholder="Name on Card">
                            </div>
                            <div class="field">
                                <input type="number" placeholder="Card Number">
                            </div>
                            <div class="field">
                                <input type="date" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="field">
                            <select class="ui search dropdown">
                                <option value="">Card Type</option>
                                <option value="Visa">Visa</option>
                                <option value="American Express">American Express</option>
                                <option value="MasterCard">MasterCard</option>
                                <option value="Discover">Discover</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="ui submit button">Create Account</div>
        </div>
    </div>
</div>
@stop

@section('inline-js')
    <script type="text/javascript">
        $(document).on('change', "#mem_level", function(){
            var changedVal = $(this).val();
            if(changedVal == ""){
                $("#payment_header").addClass('hide');
                $("#payment_fields").addClass('hide');
            } else {
                $("#payment_header").removeClass('hide');
                $("#payment_fields").removeClass('hide');
            }
        })
    </script>
@append

@section('inline-css')
    <style type="text/css">
        .hide {
            display: none;
        }
    </style>
@append