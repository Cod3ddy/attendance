<?php
    include_once('connection/dbcon.php');
    session_start();
?>

<!--header-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyAttendance</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
include ('includes/sidebar.php');
?>

<?php
include ('includes/topNavBar.php');
?>


<!-- sections -->
<section class="dashboard">

    <div class="menu-boxes">
        <div class="header">
            <h2>Registered Students</h2>
        </div>
        <div class="body">
            <p>
                <?php
                    $query = "SELECT * FROM student";

                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0){
                        $counter = 0;
                        foreach($query_run as $student){
                            
                                
                     
                            $counter+=1;
                        }
                        ?>
                        <p><?=$counter;?></p>
                        <?php
                    }
                ?>
            </p>
        </div>
        <div class="footer">
            <!-- <p class="datePresent">Thursday, Jan 2023</p> -->
        </div>
    </div>

    <div class="menu-boxes">
        <div class="header">
            <h2>Unregistered Students</h2>
        </div>
        <div class="body">
            <p>980</p>
        </div>
        <div class="footer">
            <!-- <p class="datePresent">Thursday, Jan 2023</p> -->
        </div>

    </div>
    <div class="menu-boxes">
        <div class="header">
            <h2>Registered Students</h2>
        </div>
        <div class="body">
        <?php
                    $query = "SELECT * FROM student";

                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0){
                        $counter = 0;
                        foreach($query_run as $student){
                            
                            $counter+=1;
                        }
                        ?>

                        <p><?=$counter;?></p>

                        <?php
                    }
                ?>
        </div>
        <div class="footer">
            <!-- <p>Thursday, Jan 2023</p> -->
        </div>
    </div>

</section>
<!-- error zone -->

    <?php
    if (isset($_GET['error'])){
        if ($_GET['error'] == "emptyInput"){
        echo "<script>
        alert('Please fill all the fields');
        </script>";
        }
        if ($_GET['error'] == "invalidEmail"){
            echo "<script>
        alert('Please enter a valid email address');
        </script>";
            }
        if ($_GET['error'] == "passwordsDontMatch"){
            echo "<script>
        alert('Passwords dont match');
        </script>";
            }
        if ($_GET['error'] == "studentNameExist"){
            echo "<script>
        alert('Student Already Exist');
        </script>";
            
            }
        if ($_GET['error'] == "stmtFailed"){
            
            echo "<script>
        alert('Something went wrong');
        </script>";
            }
    }
?>

<?php
include ('includes/modalForm.php');
?>
<!-- footer -->
<footer class="mainFooter">

</footer>
<script src="js/main.js"></script>
</body>
</html>