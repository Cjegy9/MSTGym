@section('content')
    <div class="sixteen wide column">
        <div class="ui segment">
            <p>
                This is the about segment.
            </p>
        </div>
    </div>

    <div class="sixteen wide column">
        <div class="ui accordion">
            <div class="title">
            <i class="dropdown icon"></i>
                Class 1
            </div>
            <div class="content">
                <p>
                    This is where the content for class 1 will go
                </p>
            </div>
            <div class="title">
            <i class="dropdown icon"></i>
                Class 2
            </div>
            <div class="content">
                <p>
                    This is where the content for class 2 will go
                </p>
            </div>
            <div class="title">
            <i class="dropdown icon"></i>
                Class 3
            </div>
            <div class="content">
                <p>
                    This is where the content for class 3 will go
                </p>
            </div>
        </div>
    </div>


    <div class="sixteen wide column">
        <div class="ui three column grid">
          <div class="column">
            <div class="ui horizontal segment">
              <p>Silver Membership</p>
            </div>
          </div>
          <div class="column">
            <div class="ui horizontal segment">
              <p>Gold Membership</p>
            </div>
          </div>
          <div class="column">
            <div class="ui horizontal segment">
              <p>Platinum Membership</p>
            </div>
          </div>
        </div>
    </div>
@stop

@section('inline-js')
    <script type="text/javascript">
    $('.ui.accordion').accordion();
    </script>
@append