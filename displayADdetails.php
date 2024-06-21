<!DOCTYPE html>
<html>
    <head>
        <title>Ad details</title>
        <link rel="stylesheet" href="tableStyle.css">
    </head>
 
    <body>
    <?php
      include 'header1.php';
      ?>
        <br><br>
        <div class ="insidecontent">
        <table>
            <tr>
                <th>Post ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Price</th>
                <th>Name</th>
                <th>Phone Number</th>

            </tr>
            <button class="Btn postBtn"style="font-size:24px"><a href="postAd.html" style="color: white">Post Your Ad </a><i class="fa fa-plus"></i></button>
            <?php
            include_once 'config.php'
            ?>
            <?php
            $sql="SELECT* FROM adDetails";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>".$row["post_id"]."</td><td>".$row["Category"]."</td><td>".$row["Title"]."</td><td>"
                    .$row["Description"]."</td><td>".$row["Location"]."</td><td>".$row["Price"]."</td><td>"
                    .$row["Name"]."</td><td>".$row["Phone_no"]."</td></tr>";
                }
            }else{
                echo"Empty Rows";
            }
            echo"</table>";
            $conn->close();
            ?>
            </div>
            <?php
            include 'footer1.php';
            ?>



    </body>

</html>