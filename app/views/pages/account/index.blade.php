@section('content')
<div class="sixteen wide column">
    <div class="ui segment">
        <h4 class="ui dividing header" style="color: #78b638">Create Account</h4>
        {{ Form::open(array('url' => 'register', 'class' => 'ui form')) }}
            <div class="fields">
                <div class="ten wide field">
                    {{ Form::label('last_name', 'Name') }}
                    <div class="two fields">
                        <div class="field">
                            {{ Form::text('first_name', '', array('placeholder' => 'First Name', 'id' => 'first_name')) }}
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Last Name" id="last_name" name="last_name">
                         </div>
                    </div>
                </div>
                <div class="two wide field">
                    <label>Middle Initial</label>
                    <input type="text" placeholder="MI" name="middle_initial">
                </div>
                <div class="four wide field">
                    <label>Date of Birth</label>
                    <input type="date" name="d_o_b">
                </div>
            </div>
                <div class="fields">
                    <div class="sixteen wide field">
                        <label>Address</label>
                        <div class="four fields">
                            <div class="field">
                                <input type="text" placeholder="Street" name="street">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="City" name="city">
                            </div>
                            <div class="field">
                                <input type="text" placeholder="State" name="state">
                            </div>
                            <div class="field">
                                <input type="number" placeholder="Zip Code" name="zip_code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fields">
                    <div class="twelve wide field">
                        <label>Account Info</label>
                        <div class="three fields">
                            <div class="field">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Retype Password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="four wide field">
                        <label>Membership</label>
                        {{ Form::select('membership', $mem_level_dropdown, '', array('class' => 'ui search dropdown', 'id' => 'mem_level')) }}
                    </div>
                </div>

                <h4 class="ui dividing header hide" id="payment_header" style="color: #78b638">Payment Information</h4>
                <div class="fields hide" id="payment_fields">
                    <div class="sixteen wide field">
                        <div class="four fields">
                            <div class="field">
                                <input type="text" placeholder="Name on Card" name="card_name">
                            </div>
                            <div class="field">
                                <input type="number" placeholder="Card Number" name="card_number">
                            </div>
                            <div class="field">
                                <input type="date" placeholder="MM/DD/YYYY" name="card_exp">
                            </div>
                            <div class="field">
                            {{ Form::select('card_type', $card_type_dropdown, '', array('class' => 'ui search dropdown', 'id' => 'card_type')) }}
                            </div>
                        </div>
                    </div>
                </div>
            {{ Form::submit('Create Account', array('class' => 'ui submit button buttoncolor')) }}
        {{ Form::close() }}
    </div>
</div>
@stop

@section('inline-js')
    <script type="text/javascript">
        $(document).on('change', "#mem_level", function(){
            var changedVal = $(this).val();
            console.log(changedVal);
            if(changedVal == "0"){
                $("#payment_header").addClass('hide');
                $("#payment_fields").addClass('hide');
            } else {
                $("#payment_header").removeClass('hide');
                $("#payment_fields").removeClass('hide');
            }
        });
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