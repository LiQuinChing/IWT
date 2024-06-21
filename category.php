<!DOCTYPE html>
<html>
    <head>
        <title>Category</title>
        <link rel="stylesheet" href="categoryGallery.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    
    <body>
    <?php
      include 'header1.php';
      ?>
<div class="insidebody">
        <center> <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Browse items by category</h2> </center>
        <br><br><br>
        <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/hotel.jpg">
                <img src="imgs/hotel.jpg" alt="hotel">
              </a>
              <div class="desc">Accomedations</div>
            </div>
          </div>
          
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/vehicle.jpg">
                <img src="imgs/vehicle.jpg" alt="vehicle">
              </a>
              <div class="desc">Vehicle</div>
            </div>
          </div>
          
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/property.jpg">
                <img src="imgs/property.jpg" alt="Houses and Lands">
              </a>
              <div class="desc">Property</div>
            </div>
          </div>
          
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/jobs.jpg">
                <img src="imgs/jobs.jpg" alt="job">
              </a>
              <div class="desc">Jobs</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/pets.png">
                <img src="imgs/pets.png" alt="hotel">
              </a>
              <div class="desc">Pets</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/fashion.jpg">
                <img src="imgs/fashion.jpg" alt="fashion">
              </a>
              <div class="desc">Fashion & Beauty</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/electronics.png">
                <img src="imgs/electronics.png" alt="electronics">
              </a>
              <div class="desc">Electronics</div>
            </div>
          </div>
          <div class="responsive">
            <div class="gallery">
              <a target="_blank" href="imgs/education.png">
                <img src="imgs/education.png" alt="education">
              </a>
              <div class="desc">Education</div>
            </div>
          </div>
          
          <div class="clearfix"></div>
          <button class="Btn postBtn"style="font-size:24px"><a href="postAd.php" style="color: white">Post Your Ad </a><i class="fa fa-plus"></i></button>
</div>
          <?php
          include 'footer1.php';
          ?>
    </body>
</html>