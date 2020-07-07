<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM student ORDER BY id DESC"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<style type="text/css">
.page-header h2{
    margin-top: 0;
}
table tr td:last-child a{
    margin-right: 15px;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header clearfix">
          <h2 class="pull-left">Student Details</h2>
          <a href="create.php" class="btn btn-success pull-right">Add New Student</a>
        </div>
        <?php
          echo "<table class='table table-bordered table-striped'>";
            echo "<thead>";
              echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Enrollment No</th>";
                echo "<th>Student Name</th>";
                echo "<th>Father Name</th>";
                echo "<th>Gender</th>";
                echo "<th>Date of Birth</th>";
                echo "<th>Nationality</th>";
                echo "<th>Course</th>";
                echo "<th>Branch</th>";
                echo "<th>Contact</th>";
                echo "<th>Passport Number</th>";
                echo "<th>Passport Validity</th>";
                echo "<th>Visa Number</th>";
                echo "<th>Visa Validity</th>";
                echo "<th>Action</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
              $i = 1;
              while($row = mysqli_fetch_array($result)) 
              {  
                echo "<tr>";
                  echo "<td>" . $i . "</td>";
                  echo "<td>" . $row['enrollment_no'] . "</td>";
                  echo "<td>" . $row['student_name'] . "</td>";
                  echo "<td>" . $row['father_name'] . "</td>";
                  echo "<td>" . $row['gender'] . "</td>";
                  echo "<td>" . $row['dob'] . "</td>";
                  echo "<td>" . $row['nationality'] . "</td>";
                  echo "<td>" . $row['course'] . "</td>";
                  echo "<td>" . $row['branch'] . "</td>";
                  echo "<td>" . $row['contact'] . "</td>";
                  echo "<td>" . $row['passport_no'] . "</td>";
                  echo "<td>" . $row['passport_validity'] . "</td>";
                  echo "<td>" . $row['visa_no'] . "</td>";
                  echo "<td>" . $row['visa_validity'] . "</td>";
                  echo "<td>";
                  echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                  echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                echo "</td>";
                $i++;
              }
            echo "</tbody>";
          echo "</table>";
        ?>
      </div>
    </div>
  </div>
</body>
</html>
