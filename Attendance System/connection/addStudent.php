<?php
session_start();
include ('dbcon.php');

if(isset($_POST['submit'])){
    $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
     $registrationID = mysqli_real_escape_string($con, $_POST['regiID']);
     $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $birthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
    $gender= mysqli_real_escape_string($con, $_POST['gender']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $yearLevel = mysqli_real_escape_string($con, $_POST['yearLevel']);
    $semesterNo = mysqli_real_escape_string($con, $_POST['semesterNo']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password_match = mysqli_real_escape_string($con, $_POST['passwordMatch']);

    require_once('../includes/functions.php');

    if (emptyInputAdd($fullName, $registrationID, $phone, $gender, $course, $yearLevel, $semesterNo, $email, $password, $password_match) !== false)
    {
        header("Location: ../index.php?error=emptyInput");
        exit();
    }

    if (invalidEmail($email) !== false)
    {
        header("Location: ../index.php?error=invalidEmail");
        exit();
    }

    if (pwdMatch($password, $password_match)){
        header("Location: ../index.php?error=passwordsDontMatch");
        exit();
    }
    if (uidExist($con, $fullName, $registrationID, $email)){
        header("Location: ../index.php?error=studentNameExist");
        exit();
    }

        $query = "INSERT INTO student (stu_Fullname, stu_emailAdress, stu_phoneAdress, stu_registrationID, stu_yearNo, stu_semesterNo, stu_gender, stu_program, stu_birthDate, stu_password, stu_passwordConfirm) VALUES ('$fullName', '$email', '$phone', '$registrationID', '$yearLevel', '$semesterNo', '$gender', '$course', '$birthDate', '$password', '$password_match')";

        $query_run = mysqli_query($con, $query);
        if ($query_run){

            echo "Student has been added Successfully";
        }
        else{
            echo "Something Went Wrong";
        }



}
else{
    echo "
    <script>
    alert('Something Went Wrong')
    </script>
    ";
    header("Location: ../index.php");
    exit(0);
}
?>