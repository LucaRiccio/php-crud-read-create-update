<?php

  include __DIR__ . '/../database.php';

  if (empty($_POST['id'])){
    die('nessun id');
  }

  $id = $_POST['id'];

  $sql = "DELETE FROM stanze WHERE id = $id ";
  $result = $conn->query($sql);

  if ($result) {
    echo "Voce cancellata";
  }else {
    echo "Voce non cancellata";
  }

  $conn->close();