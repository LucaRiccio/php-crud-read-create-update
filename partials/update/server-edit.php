<?php

include __DIR__ . '/../database.php';

$sql = "UPDATE stanze SET room_number = ?, floor = ?, beds = ? WHERE id=?";    //update_at = NOW()//

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii",$roomNumber,$floor,$beds,$id);

$roomNumber = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];
$id = $_POST['id'];

$stmt->execute();

if ($stmt && $stmt->affected_rows > 0){
  header("Location: $basepath/show.php?id=$id");
} elseif ($stmt && $stmt->affected_rows == 0) {
  echo "Non hai modificato nessun dato";
} else {
  die('errore, dato non accettato');
}

?>
