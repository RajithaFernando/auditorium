<!DOCTYPE html>
<html>
<head>

    <title>Payment</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->

<style>
        body { margin-top:20px; 
            font-family: 'Ubuntu', sans-serif;
            }
        .panel-title {display: inline;font-weight: bold;}
        .checkbox.pull-right { margin: 0; }
        .pl-ziro { padding-left: 0px; }
        
        .details {
            padding-left: 500px !important;

        }


</style>


</head>
<body>
<!-- ################ -->

    <div class="container">

    <div class="row">
        <div class="col-lg-6">
            <h1>Pay Online</h1>
       
        </div>
        <div class="col-lg-6">
        
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
        </div>
        <div class="col-xs-12 col-md-1">
        </div>
    
        <div class="col-xs-12 col-md-7" style="font-size: 12pt; line-height: 2em;" class="details">
            <p><h1>Bill Details</h1>
                <ul>
                    <li>As-you-type, input formatting</li>
                    <li>Form field validation (also as you type)</li>
                    <li>Graceful error feedback for declined card, etc</li>
                    <li>AJAX form submission w/ visual feedback</li>
                    <li>Creates a Stripe credit card token</li>
                </ul>
            </p>
            <p>Be sure to replace the dummy API key with a valid Stripe API key.</p>
            
            <!-- <p>Built upon: Bootstrap, jQuery, 
                <a href="http://jqueryvalidation.org/">jQuery Validation Plugin</a>, 
                <a href="https://github.com/stripe/jquery.payment">jQuery.payment library</a>,
                and <a href="https://stripe.com/docs/stripe.js">Stripe.js</a>
            </p> -->
        </div>
    
    
    
    
    </div>



    </div>

</body>
</html>
