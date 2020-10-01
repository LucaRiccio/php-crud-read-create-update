<?php

  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';

  if (empty($_POST['id'])){
    die('nessun id');
  }

  $id = $_POST['id'];

  removeId($conn,'stanze',$id,$basepath);

  // $sql = "DELETE FROM stanze WHERE id = ?";
  // $stmt = $conn->prepare($sql);
  // $stmt->bind_param("i",$id);
  //
  // $id = $_POST['id'];
  // $stmt->execute();
  //
  // if ($stmt && $stmt->affected_rows > 0){
  //   header("Location: $basepath/index-php.php?roomId=$id");
  // }else {
  //   echo "Voce non cancellata";
  // }
  //
  // $conn->close();
