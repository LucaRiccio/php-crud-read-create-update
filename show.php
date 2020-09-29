<?php

include __DIR__ . '/partials/templates/header.php';
include __DIR__ . '/partials/show/server.php';

?>

<body>

  <a href="index-php.php"> Torna alla Home</a>

  <ul class="list-group">
    <li class="list-group-item">ID: <?php echo $row['id']; ?></li>
    <li class="list-group-item">Numero stanza: <?php echo $row['room_number']; ?></li>
    <li class="list-group-item">Piano: <?php echo $row['floor']; ?></li>
    <li class="list-group-item">Letti: <?php echo $row['beds']; ?></li>
  </ul>

</body>

</html>
