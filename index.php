<!-- ===== Our PHP code will be here ===== -->
<?php 
    include './vendor/autoload.php';
	use Twilio\Rest\Client;
	
if(isset($_POST['mobile']) && isset($_POST['msg'])){

// Twilio

$account_sid = 'MGb77f89a0b2998d0bac62e1da2df425dc';
$auth_token = '75129491c1c975859870d93e3eb967f6';

$client = new Client($account_sid, $auth_token);
$messages = $client->messages->create(
    $_POST['mobile'],array(
        'from' => '+19088670450',
        'body' => $_POST['msg']
         )
    );
if ($messages->sid){
	
echo "message sent";

};
    
}

?>


<html>
<h2>Cyn Twilio sms Example</h2>
<p>you will get to know how to send sms using twilio.</p>


  <form action="" method="post">

     Mobile number
    <br>
   
      <input type="text" placeholder="Mobile number" name="mobile">
    <br>
	
  Message<br>
   
      <textarea id="subject" placeholder="your message" name="msg"></textarea>
   
    <input type="submit" value="Submit">
  
  </form>
</html>