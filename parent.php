<?php

require_once "./parent/queries/selectParent.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="body">;

<div class="container-fluid">

<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <div class="bg-dark text-white">
    
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small"> 
            <li>
                <a href="./index.php" class="nav-link text-white">Students</a>
            </li>
            <li >
                <a href="./teachers/teachers.php" class="nav-link text-white">Teachers</a>
            </li>
            <li>
                <a href="./parent.php" class="nav-link text-white">Parents</a>
                
             </li>
            </ul>
        </div>
    </div>
</header>

    <div id="div1">
        <h1 style="color:red">Madrasatul Al Muadh Al Islamiyah</h1>
    </div>

    <div id="div2" class="mb-2">
        <h4>Use this list to view and add parent to the Madrasa</h4>
    </div>

    <button type="button" class="btn btn-primary" id="add_student_button" data-bs-toggle="modal" data-bs-target="#add_student_modal">Add parent</button>
    
    <div class="alert alert-info mb-3 mt-2">
        <p><strong>This page contains all the parent in the system. it also contains details on how to add a new .</strong></p>
        <hr>
        <p>Click on a parent to veiw more information about it or click the add new parent to the system.</p>
    </div>

    <hr>

    <div class="modal fade" id="add_student_modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="add_student_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="add_student">
                    Add New parent
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"><strong></strong></button>
            </div>

            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <p><strong>Use this form to add a new parent.</strong></p>
                </div>

                 <form method="post" action="./parent/queries/insertParent.php">

                        <label for="name">Enter parent Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter parent Name">
                    
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
                                    <button type="submit" class="btn btn-sm btn-primary">Add parent</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>


   

    <table class="table table-bordered table-responsive border-primary">
        <thead>
            <th>Name</th>
            <th>phoneNo</th>
            <th>residence</th>     
        </thead>
        <tbody >
        <?php 
              while ($rows = $parents->fetch_array()) {
          ?>
             <tr>
                <td><a href="./updateForm3.php?id=<?php echo $rows['id']?>"><?php echo $rows['name']; ?></a></td>
                <td><?php echo $rows['phoneNo']; ?></td>
                <td><?php echo $rows['residence']; ?></td>

                <td><a href="./parent/queries/deleteParent.php?id=<?php echo $rows['id'];?>">Delete</td>

             </tr>
             <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
</div>
    
</body>
</html>