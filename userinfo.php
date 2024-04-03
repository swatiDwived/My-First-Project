
<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'ccproject');

$name = $_POST['name'];
$email = $_POST['email'];
$desc = $_POST['desc'];

$query ="INSERT INTO `ccproject` (`name`, `email`, `desc`, `Date`) VALUES ('$name', '$email', '$desc', current_timestamp())";

// echo "$query";

mysqli_query($con, $query);

header('location: index.php');

?>