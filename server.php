<!-- code snipet from edureka channel -->
<!-- https://www.youtube.com/watch?v=qjwc8ScTHnY -->
<?php
// session_start();
//     variables

// $email = "" ;
// $phone = "" ;
// $error = array();

// // connect to database
// $database = new mysqli('localhost', 'root','','fullstack');
// $email = mysqli_real_escape_string($database, $_POST['email']);
// $phone = mysqli_real_escape_string($database, $_POST['phone']);
// $password = mysqli_real_escape_string($database, $_POST['password']);
// // $password2 = mysqli_real_escape_string($database, $_POST['repassword']);

// //unique email and phone

// $query_check = "SELECT * FROM users WHERE email = '$email' or phone = '$phone' LIMIT 1 ";
// $result = mysqli_query($database, $query_check);
// $user = mysqli_fetch_assoc($result);
// if($user){
//     if($user['email'] === $email){
//         array_push($error, "Email already exist!!");
//     }
// }
// if($user){
//     if($user['phone'] === $phone){
//         array_push($error, "Phone number already exist!!");
//     }
// }
// // storing users
// if(count($error)==0){
//     $store_user = "INSERT INTO users ('email', 'password', 'phone') VALUES ('$email', '$password', '$phone')";
//     mysqli_query($database , $store_user);
//     header('location: profile.html');
// }

session_start();
// Store users into database
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
//connection
$db = new mysqli('localhost', 'root','','fullstack');
//Test connection
if($db->connect_error){
    die('Connection Failed : '.$db->connect_error);
}else{
    $stmt = $db->prepare("INSERT INTO users(email, password, phone) VALUES(?, ?, ?)");
    $stmt->bind_param("ssi",$email, $password, $phone);
    $stmt->execute();
    $stmt->close();
    $db->close();
    header('location: profile.html');
}



?>