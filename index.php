<!-- ===== Our PHP code will be here ===== -->
<?php 



?>
<link href="style.css" rel="stylesheet">
<html>
<head>
</head>
<body>

<h2>Cyn Twilio sms Example</h2>
<p>you will get to know how to send sms using twilio.</p>

<div class="container">
  <form action="method "post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Mobile number</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="mobile number" placeholder="Mobile number">
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