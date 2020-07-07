<?php
include_once("config.php");
 
    if(isset($_POST['add'])) 
    {    
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
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
       
        $result = mysqli_query($mysqli, "INSERT INTO student(enrollment_no,student_name,father_name,gender,dob,nationality,course,branch,contact,passport_no,passport_validity,visa_no,visa_validity) 
            VALUES('$enrollment_no','$student_name','$father_name','$gender', '$dob', '$nationality', '$course', '$branch', '$contact', 
            '$passport_no', '$passport_validity', '$visa_no', 
            '$visa_validity')");
        
       header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="page-header">
                    <h2>Create Record</h2>
                </div>
                <p>Please fill this form and submit to add student record to the database.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Enrollment No</label>
                        <input type="text" name="enrollment_no" class="form-control" placeholder="Enroll No.">
                    </div>
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="Student Name">
                    </div>
                    <div class="form-group">
                        <label>Father's Name</label>
                        <input type="text" name="father_name" class="form-control" placeholder="Father Name">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nationality</label>
                        <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                    </div>
                    <div class="form-group">
                        <label>Course</label>
                        <input type="text" name="course" class="form-control" placeholder="Course">
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                        <input type="text" name="branch" class="form-control" placeholder="Branch">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="tel" name="contact" maxlength="10" class="form-control" placeholder="eg: 1234567890"> 
                    </div>
                    <div class="form-group">
                        <label>Passport No</label>
                        <input type="text" name="passport_no" class="form-control" placeholder="Passport No.">
                    </div>
                    <div class="form-group">
                        <label>Passport Validity</label>
                        <input type="date" name="passport_validity" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Visa No</label>
                        <input type="text" name="visa_no" class="form-control" placeholder="Visa No.">
                    </div>
                    <div class="form-group">
                        <label>Visa Validity</label>
                        <input type="date" name="visa_validity" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" name="add" value="Submit">
                    <a href="index.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>        
    </div>
</body>
</html>