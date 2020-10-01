<?php

  include __DIR__ . '/partials/templates/header.php';


?>

<div class="container p-3">
  <form action="partials/create/server.php" method="post">
    <div class="form-group">
      <label for="roomNumber">Numero della stanza</label>
      <input type="number" class="form-control" placeholdere="" name="roomNumber" value="" id="roomNumber">
    </div>
    <div class="form-group">
      <label for="floor">Floor</label>
      <input type="number" class="form-control" placeholdere="" name="floor" value="" id="floor">
    </div>
    <div class="form-group">
      <label for="beds">Numero Di Letti</label>
      <input type="number" class="form-control" placeholdere="" name="beds" value="" id="beds">
    </div>
    <!-- <div class="form-group">
      <input type="hidden" class="form-control" placeholdere="" name="id" value="" id="beds">
    </div> -->
    <div class="form-group">
      <input type="submit" class="form-control bg-warning" value="Insert">
    </div>
  </form>

</div>


<?php

include __DIR__ . '/partials/templates/footer.php';

?>
