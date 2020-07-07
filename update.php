<?php
include_once("config.php");
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $enrollment_no = $_POST['enrollment_no'];
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $passport_no = $_POST['passport_no'];
    $passport_validity = $_POST['passport_validity'];
    $visa_no = $_POST['visa_no'];
    $visa_validity = $_POST['visa_validity'];
        
   if(empty($enrollment_no) || empty($student_name) || empty($father_name) 
        || empty($gender) || empty($dob) || empty($nationality) || empty($course) || empty($branch) || empty($contact) || empty($passport_no) || empty($passport_validity) || empty($visa_no) || empty($visa_validity)) 
    {                
        if(empty($enrollment_no)) {
            echo "<font color='red'>Enrollment field is empty.</font><br/>";
        }
        
        if(empty($student_name)) {
            echo "<font color='red'>Student Name field is empty.</font><br/>";
        }
        
        if(empty($father_name)) {
            echo "<font color='red'>Father Name field is empty.</font><br/>";
        }

        if(empty($gender)) {
            echo "<font color='red'>Gender field is empty.</font><br/>";
        }

        if(empty($dob)) {
            echo "<font color='red'>Date of Birth field is empty.</font><br/>";
        }

        if(empty($nationality)) {
            echo "<font color='red'>Nationality field is empty.</font><br/>";
        }

        if(empty($course)) {
            echo "<font color='red'>Course field is empty.</font><br/>";
        }

        if(empty($branch)) {
            echo "<font color='red'>Branch field is empty.</font><br/>";
        }

        if(empty($contact)) {
            echo "<font color='red'>Contact field is empty.</font><br/>";
        }

        if(empty($passport_no)) {
            echo "<font color='red'>Passport No field is empty.</font><br/>";
        }

        if(empty($passport_validity)) {
            echo "<font color='red'>Passport Validity field is empty.</font><br/>";
        }

        if(empty($visa_no)) {
            echo "<font color='red'>Visa No field is empty.</font><br/>";
        }

        if(empty($visa_validity)) {
            echo "<font color='red'>Visa Validity field is empty.</font><br/>";
        }     
    } else {    
        $result = mysqli_query($mysqli, "UPDATE student SET enrollment_no='$enrollment_no',student_name='$student_name',father_name='$father_name', gender='$gender', dob='$dob', nationality='$nationality', course='$course', branch='$branch', contact='$contact', passport_no='$passport_no', passport_validity='$passport_validity', visa_no='$visa_no', visa_validity='$visa_validity' WHERE id=$id");
        
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $enrollment_no = $res['enrollment_no'];
    $student_name = $res['student_name'];
    $father_name = $res['father_name'];
    $gender = $res['gender'];
    $dob = $res['dob'];
    $nationality = $res['nationality'];
    $course = $res['course'];
    $branch = $res['branch'];
    $contact = $res['contact'];
    $passport_no = $res['passport_no'];
    $passport_validity = $res['passport_validity'];
    $visa_no = $res['visa_no'];
    $visa_validity = $res['visa_validity'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="page-header">
                    <h2>Update Record</h2>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Enrollment No</label>
                        <input type="text" name="enrollment_no" class="form-control" value="<?php echo $enrollment_no;?>">
                    </div>
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" name="student_name" class="form-control" value="<?php echo $student_name;?>">
                    </div>
                    <div class="form-group">
                        <label>Father's Name</label>
                        <input type="text" name="father_name" class="form-control" value="<?php echo $father_name;?>">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') echo 'checked="checked"'; ?>>Male
                        <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') echo 'checked="checked"'; ?>>Female
                        <input type="radio" name="gender" value="Other" <?php if ($gender == 'Other') echo 'checked="checked"'; ?>>Other
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="<?php echo $dob;?>">
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <input type="text" name="nationality" class="form-control" value="<?php echo $nationality;?>">
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <input type="text" name="course" class="form-control" value="<?php echo $course;?>">
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <input type="text" name="branch" class="form-control" value="<?php echo $branch;?>">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="tel" name="contact" maxlength="10" class="form-control" value="<?php echo $contact;?>">
                    </div>
                    <div class="form-group">
                        <label>Passport No</label>
                        <input type="text" name="passport_no" class="form-control" value="<?php echo $passport_no;?>">
                    </div>
                    <div class="form-group">
                        <label>Passport Validity</label>
                        <input type="date" name="passport_validity" class="form-control" value="<?php echo $passport_validity;?>">
                    </div>
                    <div class="form-group">
                        <label>Visa No</label>
                        <input type="text" name="visa_no" class="form-control" value="<?php echo $visa_no;?>">
                    </div>
                    <div class="form-group">
                        <label>Visa Validity</label>
                        <input type="date" name="visa_validity" class="form-control" value="<?php echo $visa_validity;?>">
                    </div>
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <input type="submit" class="btn btn-primary" name="update" value="Edit">
                    <a href="index.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>        
    </div>
</body>
</html>