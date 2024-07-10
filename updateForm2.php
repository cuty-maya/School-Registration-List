<?php

$id = htmlentities($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teachers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootshtrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<form action="./teachers/queries/updateTeachers.php" method="post">

<input type="text" value="<?php echo $id; ?>" name="id" id="id" hidden>


        <div class="row mb-3">

            <div class="col-sm-6">
                <label for="name">Enter Teachers Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter Teachers Name">
            </div>

            <div class="col-sm-6 col-6">
            <label for="phoneNo">Enter Phone Number</label>
            <input type="text" name="phoneNo" id="phoneNO" placeholder="Enter Phone Number">
        </div>

        <div>
            <label for="idNo">Enter Id Number</label>
            <input type="text" name="idNo" id="idNo" placeholder="Enter Id Number">
        </div>

        
        <div class="row mb-2">
                <div class="btn-group">
                    <button type="submit" class="btn btn-sm btn-primary">Update Teachers</button>
            </div>
        </div>
    </form>

</body>
</html>