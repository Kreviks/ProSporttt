
<?php
     $conn = mysqli_connect("localhost","root","","nagan");

     if($conn == false){
        die("Беда с подключением к базе" . mysqli_connect_error());
     }

    $user_fiol = $_POST['fio'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_address = $_POST['address'];

    $sql = "INSERT INTO `dima_forma` VALUES (DEFAULT,'$user_fiol','$user_email',$user_phone,'$user_address')";

     if(mysqli_query($conn, $sql)){
          echo "Good";
     } else{
          echo "Bad";
     }

    mysqli_close($conn);
?>
