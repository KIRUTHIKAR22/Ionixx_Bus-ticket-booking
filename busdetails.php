<?php
      $con = new mysqli("localhost","root","","book");

      if(!$con){
          die("not connected".mysqli_error());
      }
      else{

        if(isset($_POST['busdetails']))
        {
            $busname = mysqli_real_escape_string($con,$_POST['busname']);
            $froom = mysqli_real_escape_string($con,$_POST['froom']);
            $too = mysqli_real_escape_string($con,$_POST['too']);
            $seat = mysqli_real_escape_string($con,$_POST['seat']);
            $price = mysqli_real_escape_string($con,$_POST['price']);
            $sql = "INSERT INTO busdetails(busname,froom,too,seat,price) VALUES('$busname','$froom','$too','$seat','$price')";
            $result = mysqli_query($con,$sql);
            if(!$result){
                echo "Not Registered...:-(";
            }
            else{
                echo "Registered Successfully";
            }
            mysqli_close($con);
        }
      }
?>
