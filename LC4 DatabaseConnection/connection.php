<?php 
session_start();
// $_SESSION['myCode'] = "My Global Variable";
$con = mysqli_connect("localhost","root","","pr2_2023_08g"); //true

// Confirmation
// if($con){
//     echo "Connected";
// }


if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

   $query =  mysqli_query($con,"INSERT INTO registers(name,email,password)VALUES('$name','$email','$password')");


//    if($query){
//         echo "<script>
//             alert('Account Created Successfully')
//             location.assign('register.php')
//         </script>";
//    }

if($query){
    $_SESSION['success'] = "Account Created Successfully";
    header('location:register.php');
}

}



?>