<htnl>
  <head><title>Complaint Details</title>
  <link rel="stylesheet" href="contactstyle.css">
</head>
<body>

<?php
   include 'config.php';
?>
<div class="Box_1">
  <div class="innerbox">
    <div class="boxhead">Complaint Details</div>
<?php

$sql="select * from complaint";
$result=$conn->query($sql);

if($result->num_rows>0){
     while($row=$result->fetch_assoc()){
       echo"<div><div class='text_1'>Name of Client:".$row["first_name"].$row["last_name"]."</div> 
       <div class='text_1'>Telepone:".$row["telephone"]."</div>
       <div class='text_1'>Email:".$row["email"]."</div>
       <div class='text_1'>Message:".$row["message"]."</div></div>";
  }


}
?>
</div>
</div>
<?php
  include 'footer.php';
?>
</body>
</html>