<?php
// Your existing PHP code
error_reporting(0);
@include 'config.php';
@include 'login_check.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $cid = $_SESSION['client_id'];
  // Check if any required field is empty
  $required_fields = [
    "collar", "neck_to_shoulder", "sleeve_length", "shoulder_to_shoulder",
    "chest", "front_length", "sleeve_cuff", "hem", "waist", "front_rise", "hip", "thigh", "length",
    "knee", "inseam", "leg_opening"
  ];

  foreach ($required_fields as $field) {
    if (empty($_POST[$field]) and $_POST[$field]!=0) {
      echo "Error: $field is empty.";
      exit;
    }
  }


  $collar = $_POST["collar"];
  $neck_to_shoulder = $_POST["neck_to_shoulder"];
  $sleeve_length = $_POST["sleeve_length"];
  $shoulder_to_shoulder = $_POST["shoulder_to_shoulder"];
  $chest = $_POST["chest"];
  $front_length = $_POST["front_length"];
  $sleeve_cuff = $_POST["sleeve_cuff"];
  $hem = $_POST["hem"];
  $waist = $_POST["waist"];
  $front_rise = $_POST["front_rise"];
  $hip = $_POST["hip"];
  $thigh = $_POST["thigh"];
  $length = $_POST["length"];
  $knee = $_POST["knee"];
  $inseam = $_POST["inseam"];
  $leg_opening = $_POST["leg_opening"];

  $shirt_insert = "UPDATE shirt SET 
          collar='$collar',
          neck_to_shoulder='$neck_to_shoulder',
          sleeve_length='$sleeve_length',
          shoulder_to_shoulder='$shoulder_to_shoulder',
          chest='$chest',
          front_length='$front_length',
          sleeve_cuff='$sleeve_cuff',
          hem='$hem' 
          WHERE
          client_id='$cid'";

  $pant_insert = "UPDATE pant SET
          waist='$waist',
          front_rise='$front_rise',
          hip='$hip',
          thigh='$thigh',
          length='$length',
          knee='$knee',
          inseam='$inseam',
          leg_opening='$leg_opening'
          WHERE
          client_id='$cid'";
  $res_shirt = mysqli_query($conn, $shirt_insert) or die(mysqli_error($conn));
  $res_pant = mysqli_query($conn, $pant_insert) or die(mysqli_error($conn));
  if ($res_shirt && $res_pant) {
    $_SESSION['collar'] = $collar;
    $_SESSION['neck_to_shoulder'] = $neck_to_shoulder;
    $_SESSION['sleeve_length'] = $sleeve_length;
    $_SESSION['shoulder_to_shoulder'] = $shoulder_to_shoulder;
    $_SESSION['chest'] = $chest;
    $_SESSION['front_length'] = $front_length;
    $_SESSION['sleeve_length'] = $sleeve_length;
    $_SESSION['hem'] = $hem;
    $_SESSION['waist'] = $waist;
    $_SESSION['front_rise'] = $front_rise;
    $_SESSION['hip'] = $hip;
    $_SESSION['thigh'] = $thigh;
    $_SESSION['length'] = $length;
    $_SESSION['knee'] = $knee;
    $_SESSION['inseam'] = $inseam;
    $_SESSION['leg_opening'] = $leg_opening;

    header('Location: ' . SITEURL . 'client_details.php');
    exit;
  } else {
    echo "Data not inserted";
  }
}
