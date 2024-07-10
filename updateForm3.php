<?php

$id = htmlentities($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Parent</title>

    <link href="https://cdn.jsdelivr.net/npm/bootshtrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
  <form action="./parent/queries/updateParent.php" method="post">

  <input type="text" value="<?php echo $id; ?>" name="id" id="id" hidden>
 
  <div class="row mb-3">

<div class="col-sm-6">
    <label for="name">Enter parent Name:</label>
    <input type="text" name="name" id="name" placeholder="Enter parent Name">
</div>
</div>

<div class="row mb-3">

  <div class="col-sm-6">
  <label for="phoneNo">Enter Phone Number:</label>
  <input type="text" name="phoneNo" id="phoneNo" placeholder="Enter Phone Number">
  </div>  

  <div class="col-sm-6">
  <label for="residence">Enter  Residence</label>
  <input type="text" name="residence" id="residence" placeholder="Enter  Residence">
  </div>

</div>

<div class="row mb-2">
        <div class="btn-group">
        <button type="submit" class="btn btn-sm btn-primary">Update Parent</button>
        </div>
</div>
</form>

</body>
</html>