<html>
    <head>
        <meta charset="utf-8">
        <title>Payment</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }
                .content {
                    margin-top: 100px;
                    text-align: center;
                }
            </style>
    </head>
    <body>
        <!-----  Use Logo of PayPal----->
        <div class="flex-center position-ref full-height">
            <div class="content">
                <a href=""><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">
                </a>
            </div>
        </div>
        <!--   End Here  -->

        <!---  Stsrt Payment Gateway    --->
        <div class="container">
            <div class="row">       
                <div class="col-md-8 col-md-offset-2">          
                    <div class="panel panel-default" style="margin-top: 60px;">

                        @if ($message = Session::get('success'))
                        <div class="custom-alerts alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('success');?>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="custom-alerts alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('error');?>
                        @endif
                        <div class="panel-heading"><b>Payment with Paypal</b></div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}" >
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                    <label for="amount" class="col-md-4 control-label">Enter Amount</label>

                                    <div class="col-md-6">
                                        <input id="amount" type="text" class="form-control" name="amount" required="" value="{{ old('amount') }}" autofocus placeholder="Please enter Amount">

                                        @if ($errors->has('amount'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                           Payment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>