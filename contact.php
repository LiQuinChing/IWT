<html>
<head>
<title>Contact US</title>
<link rel="stylesheet" href="contactstyle.css">
<script src="https://kit.fontawesome.com/c6f63b3b85.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include 'header.php';
  ?>
<div class="section1">
  <div class="container1">
    <div class="part1">
        <div class="word">Have Some Questions?</div>
        <div class="img"></div>
        <div class="word1">Thank you for your interest in our services. Please fill out the form and we will get back to you promptly regarding your request.</div>
    </div>
      <div class="part2">
      <form action="submit.php" method="POST">
<fieldset>
<legend style="font-size:36;font-weight:bold">Contact Us</legend>
<div class="form1">
<label>First name*</label><label style="margin-left:150">Last name*</label></br>
<div class="field1"><input type="text" name="name"></div><div class="field2"><input type="text" name="lname"></div></br></br>
<label>Telephone Number*</label></br>
<div class="field3"><input type="text" name="telephone" required></div></br></br>
<label>E-Mail*</label></br>
<div class="field4"><input type="email" name="email" required></div></br></br>
<label>Message*</label></br>
<div class="textarea1"><textarea name="message" rows="10" cols="61" style=" background-color:#f5f5f5;margin-top:20px"></textarea></div></br></br>
<input type="submit" value="Send" class="btnsend"></br></br>
        </div>
      </div>
    </div>
<div class="container2">
    <div class="con1">
        <div class=con1_part1>
        <i class="fa-sharp fa-solid fa-location-dot fa-2xl"></i>
      </div>
        <div class=con1_part2><font style="font-size:24;font-weight:bold;margin-left:35px">Location</font></br>15/A,Temple Road,Galle
      </div>
    </div>
    <div class="con2">
        <div class=con2_part1>
        <i class="fa-solid fa-envelope fa-2xl"></i>
        </div>
        <div class=con2_part2><font style="font-size:24;font-weight:bold;margin-left:40px">E-mail</font></br>neon(pvt)ltd.gmail.com</div>
    </div>
    <div class="con3"> 
        <div class=con2_part1>
        <i class="fa-solid fa-phone fa-2xl"></i>
        </div>
        <div class=con2_part2><font style="font-size:24;font-weight:bold;margin-left:10px">Phone</font></br>0715594553</div>
    </div>
  </div>


<?php
   include 'footer.php';
?>
</body>
</html>
