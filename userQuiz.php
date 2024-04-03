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
$water = $_POST['water'];
$plant = $_POST['plant'];
$waste = $_POST['waste'];
$community = $_POST['community'];
$light = $_POST['light'];
$walk = $_POST['walk'];

$query ="INSERT INTO `quiz` (`name`, `email`, `water`, `plant`, `waste`, `community`, `light`, `walk`, `date`) VALUES ('$name', '$email', '$water', '$plant', '$waste', '$community', '$light', '$walk', current_timestamp())";

echo "$query";

mysqli_query($con, $query);

header('location: feed.php');

?>