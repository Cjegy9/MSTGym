@section('content')
    <div class="eight wide column">
        <div class="ui segment">
            <form class="ui form">
                <h4 class="ui dividing header" style="color: #78b638">Contact Us</h4>

                    <div class="required field">
                        <label>Your Name</label>
                        <input type="text">
                    </div>
                    <div class="required field">
                        <label>Email</label>
                        <input type="text">
                    </div>
                    <div class="required field">
                        <label>Subject</label>
                        <input type="text">
                    </div>
                    <div class="required field">
                        <label>Message</label>
                        <textarea></textarea>
                    </div>
                    <submit class="ui button" style="color: #78b638">
                        <label>Submit</label>
                    </submit>
            </form>
        </div>
    </div>

    <div class="eight wide column">
        <div class="ui segment" style="text-align: center">
            <img  class="logo" src="{{ asset('images/gym-logo.png')}}" />
            <p>
                <br>
                705 West 10th Street<br>
                Rolla, MO 65401<br>
                <br>
                Hours<br>
                Monday 7am - 10pm<br>
                Tuesday 7am - 10pm<br>
                Wednesday 7am - 10pm<br>
                Thursday 7am - 10pm<br>
                Friday 7am - 10pm<br>
                Saturday 7am - 10pm<br>
                Sunday 7am - 10pm
            </p>

        </div>
    </div>
@stop