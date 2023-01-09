<?php

function emptyInputAdd($fullName, $registrationID, $phone, $gender, $course, $yearLevel, $semesterNo, $email, $password, $password_match){
    $result;

    if (empty($fullName) || empty($email) || empty($registrationID) || empty($phone) || empty($gender) || empty($course) || empty($yearLevel) || empty($semesterNo) || empty($password_match) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result =true;
    }
    else{
        $result=false;
    }

    return $result;
}
function pwdMatch($password, $password_match)
{
    $result;

    if ($password !== $password_match){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function uidExist($con, $fullName, $registrationID){
    $sql = "SELECT * FROM student WHERE stu_fullname = ? AND stu_registrationID = ?;";

    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../index.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $fullName, $registrationID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)){
        return  $row;
    }
    else{
        $result=false;
        return $result;
    }
mysqli_stmt_close($stmt);
}


