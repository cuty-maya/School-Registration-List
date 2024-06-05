<?php

require_once "./queries/selectStudents.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Registration List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body class="body">
    
  <div class="container">
    <div id="div1">
        <h1 style="color:red">Madrasatul Al Muadh Al Islamiyah</h1>
    </div>

    <div id="div2" class="mb-2">
        <h4>Use this list to view and add student to the Madrasa</h4>
    </div>

    <button type="button" class="btn btn-primary" id="add_student_button" data-bs-toggle="modal" data-bs-target="#add_student_modal">Add Student</button>


    <div class="alert alert-info mb-3 mt-2">
        <p><strong>This page contains all the students in the system. it also contains details on how to add a new student.</strong></p>
        <hr>
        <p>Click on a student to veiw more information about it or click the add new vehicle to the system.</p>
    </div>

    <hr>


    <div class="modal fade" id="add_student_modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="add_student_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="add_student">
                    Add New Student
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"><strong></strong></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <p><strong>Use this form to add a new student.</strong></p>
                </div>

                 <form action="./queries/insertStudent.php" method="post">

        <div class="row mb-3">

            <div class="col-sm-6">
                <label for="name">Enter Student Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter Student Name">
            </div>

            <div class="col-sm-6 col-6">
                <label for="admNo">Enter Admission Number:</label>
                <input type="text" name="admNo" id="admNo" placeholder="Enter Admission Number">
            </div>
        </div>

        <div class="row mb-2">
                <div class="btn-group">
                    <button type="submit" class="btn btn-sm btn-primary">Add Student</button>
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
            <th>AdmNo</th>
            <th>Date Of Admission</th>
            <th>createdAt</th>
            <th>isActive</th>
        </thead>
        <tbody >
            <?php 
              while ($rows = $students->fetch_array()) {
             ?>
             <tr>
                <td><a href="./updateForm.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></a></td>
                <td><?php echo $rows['admNo']; ?></td>
                <td><?php echo $rows['DoA']; ?></td>
                <td><?php echo $rows['createdAt']; ?></td>
                <td><?php 
                
                    if($rows['isActive'] == 1){
                        echo '<span class="badge rounded-pill text-bg-success">Active</span>';
                    } else {
                        echo '<span class="badge rounded-pill text-bg-danger">InActive</span>';
                    }
                     
                
                ?></td>
              </tr>   
              <?php
              };
              ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>