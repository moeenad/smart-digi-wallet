<?php
include('connection.php');
if(isset($_POST["create"])){
    $firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $unit = mysqli_real_escape_string ($conn, $_POST["unit"]);
    $address = mysqli_real_escape_string ($conn, $_POST["address"]);
    $city = mysqli_real_escape_string($conn,$_POST["city"]);
    $province = mysqli_real_escape_string($conn,$_POST["province"]);
    $country = mysqli_real_escape_string($conn,$_POST["country"]);
    $postalCode = mysqli_real_escape_string($conn,$_POST["postal"]);
    $tel = mysqli_real_escape_string($conn,$_POST["tel"]);
    $mobile = mysqli_real_escape_string($conn,$_POST["mobile"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $newsLetter = mysqli_real_escape_string($conn,$_POST["news"]);
    $sql = "INSERT INTO customer(firstName, lastName, email, unit, address, city, province, country, postalCode, tel, mobile, password) VALUES ('$firstName', '$lastName', '$email', '$unit', '$address', '$city', '$province', '$country', '$postalCode', '$tel', '$mobile', '$password')";
    if(mysqli_query ($conn, $sql)){
        session_start();
        $_SESSION['create'] = 'Your account created successfuly. Please login!';
        header("Location:login.php");
    }else{
        echo "there was an issue in registring your account";
    }
    mysqli_close($conn);
} 

//change password
if(isset($_POST["changePassword"])){
    $id = mysqli_real_escape_string($conn,$_POST["id"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $sql = "UPDATE customer SET password='$password' WHERE customerId=$id";
    if(mysqli_query ($conn, $sql)){
        session_start();
        $_SESSION['update'] = 'Your password changed successfuly. Please login!';
        header("Location:login.php");
    }else{
        echo "there was an issue updating your password";
    }
    mysqli_close($conn);
} 
?>
