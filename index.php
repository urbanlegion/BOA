<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 11/9/2016
 * Time: 6:18 PM
 */
$name = $company = $email = $password = $phone = $skype = $errorMsg = "";
// $requiredArray will increase conversions significantly, phone and skype are deal-breakers for many people.
$requiredArray = array('name', 'company', 'password');
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $company = test_input($_POST["company"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $phone = test_input($_POST["phone"]);
    $skype = test_input($_POST["skype"]);

    //looping over the $requiredArray to check each field if empty.
    foreach ($requiredArray as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        }
    }
//passing error to view
    if ($error) {
        $errorMsg = "All fields except phone and skype are required.";
    }else{
        echo '<html><body onload="Modal();"></body></html>';
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BOA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="container-fluid">
    <div id="background"></div>
    <div id="header" class="row">
        <img src="img/logo.png">
    </div>
    <div class="theRealDivider"></div>
    <div id="join" class="row">
        <div class="col-xs-12">
            <h1>JOIN US TODAY</h1>

            <div id="formWrapper">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input required name="name" type="text" placeholder="Your Name">
                    <input required name="company" type="text" placeholder="Company">
                    <input required name="email" type="email" placeholder="E-mail Address">
                    <br>
                    <input required name="password" type="password" placeholder="Password">
                    <!--made phone and skype optional-->
                    <input name="phone" type="tel" placeholder="Phone">
                    <input name="skype" type="text" placeholder="Skype">
                    <br>
                    <input name="submit" id="CTA" type="submit" value="">

                    <h3 class="errorMsg"><?php echo $errorMsg; ?></h3>
                </form>
            </div>
        </div>
    </div>
    <div class="theRealDivider"></div>
    <div id="weGot" class="row">
        <div class="col-xs-12 col-md-3 text-center">
            <div class="plusSign"><a href="#header"><span
                        class="glyphicon glyphicon-plus glyphicon-bordered"></span></a></div>
            <h1>WE GOT</h1>

            <h3>BRANDS</h3>

            <P>Over 60 top converting brokers for your traffic, with a wide selection of products and a high
                conversion rate.</P>
        </div>
        <div class="col-xs-12 col-md-3 text-center">
            <div class="plusSign"><a href="#header"><span
                        class="glyphicon glyphicon-plus glyphicon-bordered"></span></a></div>
            <h1>WE GOT</h1>

            <h3>YOUR PAYCHECK</h3>

            <P>With BOA Elite you know you get the most for your effort. Right on time, every time.</P>
        </div>
        <div class="col-xs-12 col-md-3 text-center">
            <div class="plusSign"><a href="#header"><span
                        class="glyphicon glyphicon-plus glyphicon-bordered"></span></a></div>
            <h1>WE GOT</h1>

            <h3>PLATFORMS</h3>

            <P>With BOA Elite you know you get the most for your effort. Right on time, every time.</P>
        </div>
        <div class="col-xs-12 col-md-3 text-center">
            <div class="plusSign"><a href="#header"><span
                        class="glyphicon glyphicon-plus glyphicon-bordered"></span></a></div>
            <h1>WE GOT</h1>

            <h3>TECHNOLOGY</h3>

            <P>API tracking that allows us to direct your traffic in real time to the best converting broker,
                increasing your ROI in the process.</P>
        </div>
    </div>
    <div id="machine" class="row">
        <h1>HOW MUCH DO YOU WANT TO EARN?</h1>

        <p>Being a binary option affiliate is extremely profitable and gives you the highest possible return on<br> your
            traffic. Working with BOA Elite is extremely efficient and gives you the highest ROI by always<br> directing
            your traffic to the highest converting broker. </p>
        <img src="img/VectorSmartObject2.png">
    </div>
    <div id="about" class="row">
        <p><span style="color: #fd6a00;">BOA Elite’s affiliate network</span> has a professional team of experts that
            understand<br>
            your needs. We are fully transparent with our affiliates and give full and detailed<br>
            insights about traffic performance, as well as around the clock support.<br>
            No matter what problems or bumps in the road you encounter, we are here to<br>
            support your actions with vast knowledge on the Binary option market.<br>
            If there's a place to start your way as a binary affiliate – <span
                style="color: #fd6a00;">it's with BOA.</span></p>
    </div>
    <div id="achievements" class="row">
       <a href="#header"><div class="achievementWrapper scroller">
            <div class="sprite sprite-mic"></div>
            <p>24/7<br>Free Support</p>
        </div></a>
       <a href="#header"><div class="achievementWrapper scroller">
            <div class="sprite sprite-man"></div>
            <p>Dedicated<br>Account Manager</p>
        </div></a>
       <a href="#header"><div class="achievementWrapper scroller">
            <div class="sprite sprite-trophy"></div>
            <p>Highest<br>ROI</p>
        </div></a>
       <a href="#header"><div class="achievementWrapper scroller">
            <div class="sprite sprite-dollar"></div>
            <p>Payment<br>On Time</p>
        </div></a>
       <a href="#header"><div class="achievementWrapper scroller">
            <div class="sprite sprite-location"></div>
            <p>100%<br>Tracking</p>
        </div></a>
       <a href="#header"><div class="achievementWrapper scroller">
            <div class="sprite sprite-stat"></div>
            <p>Top Converting<br>Creative</p>
        </div></a>
    </div>
    <div id="footer" class="row">
        <div class="pull-left">
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>

            <p>©Copyright 2014 - 2016 BOAEliteAffiliate Network</p>
        </div>
        <a href="#header">
            <button id="sendUp" value=""></button>
        </a>
        <img src="img/footerbak.png">
    </div>
</div>
<script src="js/jquery.js"></script>
<script>
    var pos = 0;
    $('a[href=#header]').click(function () {
        $("html,body").animate({scrollTop: pos}, "slow", function () {
            console.log('a clicked');
        });

    });
</script>
<script src="js/sweetalert.min.js"></script>

<script>
    function Modal(){

        submitButton = $('input[name="submit"]');
        userName = $("input[name='name']").val();

        $( "form" ).on( "submit", function( event ) {
            event.preventDefault();
            console.log( $( this ).serialize() );

            $.ajax({
                type: "POST",
                url: "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>",
                data: {

                }
            }).done(function( msg ) {
                alert( "Data Saved: " + msg );
            });
        });

        /*insert if for success for modal*/
    swal({
        title: userName+", you're The Best!",
        text: "You'll receive an email shortly from you're Account Mgr.",
        type: "success",
        confirmButtonText: "Cool Beans"
    });
    }

</script>

</body>
</html>