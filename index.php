<!-- ===== Our PHP code will be here ===== -->
<?php 
    include './vendor/autoload.php';
if (isset($_POST['mobile']) && isset($_POST['msgs'])){

// Twilio

$sid ='AC6ea1c5874e50c0ce1b4baf7a16063803';
$token='75129491c1c975859870d93e3eb967f6';

$client = New Twilio/Rest/Client($sid, $token);
$message = $client ->message->create(
    $_POST['mobile'],array(
        'from' => '+19088670450',
        'body' => $_POST['msgs']
         )
    );

    if($message->sid){
            echo "message sent successfully";

    }
}

?>
<link href="style.css" rel="stylesheet">
<html>
<head>
</head>
<body>

<h2>Cyn Twilio sms Example</h2>
<p>you will get to know how to send sms using twilio.</p>

<div class="container">
  <form action="" method "post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Mobile number</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="mobile" placeholder="Mobile number">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="subject">Message</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="msgs" placeholder="your message" style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>