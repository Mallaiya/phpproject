<?php 
    session_start();
    
    if(isset($_POST['submit'])){
        include "dbconnections.php";
        
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);    
        $sql = "select * from user_credentials where email = ? ;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "<script>
                        window.location.href='../includes/login.php';
                        alert('Database connection failed');
                </script>";
        } else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $checkResult = mysqli_stmt_num_rows($stmt);
            
            if($checkResult<1) {
                echo "<script>
                        window.location.href='../includes/login.php';
                        alert('Email is not registered');
                    </script>";
                   
            } else{
                $result = mysqli_query($connection, "SELECT * FROM user_credentials WHERE email ='$email';");
                if($row = mysqli_fetch_assoc($result)){
                    $passwordCheck = $row['password'];
                    if($password !=$passwordCheck){
                        echo "<script>
                        window.location.href='../includes/login.php?password=invalid';
                        alert('Invalid Password');
                        </script>";
                    } elseif($password ==$passwordCheck){
                        $_SESSION['s_name'] = $row['fullname'];
                        $_SESSION['s_email'] = $row['email'];
                        $_SESSION['s_username'] = $row['username'];
                        $_SESSION['s_gender'] = $row['gender'];
                        $_SESSION['s_phonenumber'] = $row['phonenumber'];
                        $_SESSION['s_gender'] = $row['gender'];
                        echo "<script>
                        window.location.href='../includes/home.php';
                        alert('Logged In successfully');
                        </script>";
                    }
                }
            }
        }
    
} else {
    header("Location: ./index.php?login=error");
    exit();
}