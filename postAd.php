<!DOCTYPE html>
<html>
    <head>
        <title>Posting ad on Neon</title>
        <link rel="stylesheet" href="postAd.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="phnNoValidation.js"></script>

    </head>
    <body>
        <?php
        include 'header1.php';
        ?>
        <div class="pinkblock">
            <h2>Fill in the details</h2>
            
        <div class="ad">
            <form id="adForm" action="submitPostAd.php" method="post" onsubmit="return validatePhoneNumber();">
                <label for="cateogory"><h4>Select a category</h4></label>
                <select name="field1">
                    <option value="accomedations">Accomedations</option>
                    <option value="vehicles">Vehicles</option>
                    <option value="property">Property</option>
                    <option value="jobs">Jobs</option>
                    <option value="Pets">Pets</option>
                    <option value="fashionbeauty">Fashion & Beauty</option>
                    <option value="electronics">Electronics</option>
                    <option value="education">Education</option>

                </select>

                <h4>Title:</h4>
                <input type="text" class="textbox" name="field2" placeholder="Keep it short" required>

                <h4>Description:</h4>
                <textarea name="field3" rows="8" cols="50" placeholder="More details= More interested buyers" required></textarea>

                <h4>Location:</h4>
                <input type="text" class="textbox" name="field4">

                <h4>Price:<h4>
                <input type="text" class="textbox" name="field5" required>
                <hr class="inside">
                <b>Contact details</b><br><br>
                <h4>Name:</h4>
                <input type="text" class="textbox" name="field6" placeholder="Enter your name" required>
                <h4>Add phone number:</h4>
                <input type="text" class="textbox" id="phone" name="field8" placeholder="Enter phone number" required>

                <input type="submit" class="Btn" value="Post Ad">


            </form>
        </div>
</div>

        <?php
        include 'footer1.php';
        ?>
    </body>



</html>