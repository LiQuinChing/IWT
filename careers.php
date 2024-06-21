<html>
<head>
<title>Careers</title>
<link rel="stylesheet" href="contactstyle.css">
<script src="https://kit.fontawesome.com/c6f63b3b85.js" crossorigin="anonymous"></script>
<script src="jobs.js"></script>
</head>
<body>
<?php
   include 'header.php';
?>
<div class="car1">
    <div class="car1_part1">
        <div class="cat">
            Categories
        </div>
        <div class="dropdown">
            <button type="button" class="btn1" id="jbtn1" onclick="loadData('jbtn1')">Business and Accounting</button></br>
            <button type="button" class="btn1" id="jbtn2" onclick="loadData('jbtn2')">Internships</button></br>
            <button type="button" class="btn1" id="jbtn3" onclick="loadData('jbtn3')">Design and Development</button></br>
            <button type="button" class="btn1" id="jbtn4" onclick="loadData('jbtn4')">Finance and Management</button></br>
            <button type="button" class="btn1" id="jbtn5" onclick="loadData('jbtn5')">Information Technology</button></br>
            <button type="button" class="btnsee">SeeMore</button></br>
        </div>
        <div class="loca">
           Location
        </div>
        <div class="dropdown2">
            <input type="button" class="btn2" value="Colombo"></br>
            <input type="button" class="btn2" value="Gampaha"></br>
            <input type="button" class="btn2" value="Kaluthara"></br>
            <input type="button" class="btn2" value="Kandy"></br>
            <input type="button" class="btn2" value="Galle"></br>
            <input type="button" class="btnsee" value="SeeMore"></br>
        </div>
    </div>
  
    <div class="car1_part2">
        <div class="job1">
        <table style="">
                <tr>
                    <td width="180px" height="180px"><div class="imgborder"><img src="image/busi.png" width="180px" height="180px" id="i1"></div></td><td width="400px"><div class="head" id="job_1"> Business Executive</div></br><font style="font-size:18px;font-family:Arial, Helvetica, sans-serif">NeON(Pvt)Ltd</font></br></br><div class="loc"><div><i class="fa-solid fa-location-dot fa-1x"></i>  Malabe,Colombo</div><div><i class="fa-solid fa-briefcase fa-1x"></i> Fulltime</div></div></br><div class="rfloat"><div class="time">3 days ago</div><div><input type="button" value="Apply Now" class="btn"></div></div></td>
                </tr>
            </table>
        </div>
        <div class="job2">
            <table>
                <tr>
                <td width="180px" height="180px"><div class="imgborder"><img src="image/acc.png" width="180px" height="180px" id="i2"></div></td><td width="400px"><div class="head" id="job_2">Accountant Clerk</div></br><font style="font-size:18px; font-family: Arial, Helvetica, sans-serif;">NeON(Pvt)Ltd</font></br></br><div class="loc"><div><i class="fa-solid fa-location-dot fa-1x"></i>  Borella,Colombo</div><div><i class="fa-solid fa-briefcase fa-1x"></i> Fulltime</div></div></br><div class="rfloat"><div class="time">5 days ago</div><div><input type="button" value="Apply Now" class="btn"></div></div></td>
                </tr>
            </table>
        </div>
        <div class="job3">
        <table>
                <tr>
                <td width="180px" height="180px"><div class="imgborder"><img src="image/qual.png" width="180px" height="180px" id="i3"></div></td><td width="400px"><div class="head" id="job_3">Quality Assurance Executive</div></br><font style="font-size:18px;font-family: Arial, Helvetica, sans-serif;">NeON(Pvt)Ltd</font></br></br><div class="loc"><div><i class="fa-solid fa-location-dot fa-1x"></i>  Thalawathugoda,Colombo</div><div><i class="fa-solid fa-briefcase fa-1x"></i> Fulltime/Halftime</div></div></br><div class="rfloat"><div class="time">6 days ago</div><div><input type="button" value="Apply Now" class="btn"></div></div></td>
                </tr>
            </table>
        </div>
        <div class=
        "job4">
        <table>
                <tr>
                <td width="180px" height="180px"><div class="imgborder"><img src="image/sale.png" width="180px" height="180px" id="i4"></div></td><td width="400px"><div class="head" id="job_4">Sales Executive</div></br><font style="font-size:18px;font-family: Arial, Helvetica, sans-serif;">NeON(Pvt)Ltd</font></br></br><div class="loc"><div><i class="fa-solid fa-location-dot fa-1x"></i>  Malabe,Colombo</div><div><i class="fa-solid fa-briefcase fa-1x"></i> Fulltime</div></div></br><div class="rfloat"><div class="time">9 days ago</div><div><input type="button" value="Apply Now" class="btn"></div></div></td>
                </tr>
            </table>
        </div>
        <div class="job5">
        <table>
                <tr>
                <td width="180px" height="180px"><div class="imgborder"><img src="image/HR.png" width="180px" height="180px"  id="i5"></div></td><td width="400px"><div class="head" id="job_5">Human Resource Assistant</div></br><font style="font-size:18px;font-family: Arial, Helvetica, sans-serif;">NeON(Pvt)Ltd</font></br></br><div class="loc"><div><i class="fa-solid fa-location-dot fa-1x"></i> Maharagama,Colombo</div><div><i class="fa-solid fa-briefcase fa-1x"></i> Fulltime/Halftime</div></div></br><div class="rfloat"><div class="time">9 days ago</div><div><input type="button" value="Apply Now" class="btn"></div></div></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
   include 'footer.php';
?>
</body>
</html>

