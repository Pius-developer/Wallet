<?php

include 'db.php';

if(isset($_GET['vkey'])){

     //Process verification

   $vkey = $_GET['vkey'];



     $sql = "SELECT verified,vkey FROM users WHERE verified= 0 AND vkey='$vkey' LIMIT 1 ; ";
    $result = mysqli_query($conn,$sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0){

        // echo "seen";

        $sql = "UPDATE users

		SET verified= 1
				

		WHERE vkey = '$vkey' LIMIT 1 ";

          mysqli_query($conn,$sql);





        header ("Location:../login.php?verified");
        exit();

         }else{

        // echo "not seen";

        header ("Location:../login.php?veriferror");
        exit();
    }


}else{

    die("something went wrong");

}

?>