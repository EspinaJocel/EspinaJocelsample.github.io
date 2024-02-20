<?php
include  "conn.php";
session_start();

//this is for creating account
if(isset($_POST['reg'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $idno = $_POST['idnumber'];

    //student validation
    $validate = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");
    $val_num = mysqli_num_rows($validate);


    if($val_num <= 0){
        $insert_student = mysqli_query($conn, "INSERT INTO students VALUES ('0', '$firstname', '$lastname', '$email', '$password', '$idno')");
        if($insert_student == true){
            ?>
            <script>
                alert("Registered Successfully!");
                window.location.href = "index.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Registered Not Successfull!");
                window.location.href = "index.php";
            </script>
            <?php
        }
    }
    
}
//end of creating account

//log-in admin

if(isset($_POST['login_admin'])){
    $a_email = $_POST['email'];
    $a_pass = $_POST['pass'];

 
    $admin_det = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$a_email' AND password = '$a_pass'");
    $num_det = mysqli_num_rows($admin_det);
 
    
    if ($num_det <=0){
        
        ?>
        <script>
            alert("Wrong Email or Password!");
            window.location.href="index.php";
        </script>
        <?php
        
    }else{
        $_SESSION ['email'] = $a_email;
         ?>
    <script>
        alert("Login Successfully");
        window.location.href="admin";
    </script>
    <?php
    }
    
   
}
//end for log-in as admin

//log-in for students
if(isset($_POST['login_student'])){
    $s_email = $_POST['email'];
    $s_pass = $_POST['pass'];
    
    $stud_det = mysqli_query($conn, "SELECT * FROM students WHERE email = '$s_email' AND password = '$s_pass'");
    $num_det = mysqli_num_rows($stud_det);
 
    
    if ($num_det <=0){
        
        ?>
        <script>
            alert("Wrong Email or Password!");
            window.location.href="index.php";
        </script>
        <?php
        
    }else{
        $_SESSION ['email'] = $s_email;
         ?>
    <script>
        alert("Login Successfully");
        window.location.href="student/index.php";
    </script>
    <?php
    }
    
   
}
//end of log-in for students
?>