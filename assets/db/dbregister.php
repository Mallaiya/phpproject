<?php 
    include "dbconnections.php";
    
    if(isset($_POST['submit'])){
        $fullname = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $gender = mysqli_real_escape_string($connection, $_POST['radio']);
        $phonenumber = mysqli_real_escape_string($connection, $_POST['phone']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);    
        
        $sql = "Select * from user_credentials where email=?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "<script>
                    window.location.href='../includes/register.php';
                    alert('Database connectivity problem');
            </script>";
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                echo "<script>
                    window.location.href='../includes/register.php';
                    alert('Email already exits');
                </script>";
                exit();
            }else{
                
                $sql = "Select * from user_credentials where username=?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "<script>
                    window.location.href='../includes/register.php';
                    alert('Database connectivity problem');
            </script>";
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                echo "<script>
                    window.location.href='../includes/register.php';
                    alert('Username already exits try with new one');
                </script>";
                exit();
            }else{
                
                $sql = "insert into user_credentials (fullname, email, username,gender, phonenumber, password, registerdatetime) values (?, ?, ?, ?, ?, ?, ?);";
                $currentDateTime = date('y-m-d h:i:s');
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "<script>
                        window.location.href='../includes/register.php';
                        alert('Database connectivity problem');
                    </script>";
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "sssssss", $fullname, $email, $username, $gender, $phonenumber, $password, $currentDateTime);
                    mysqli_stmt_execute($stmt);
                    echo "<script>
                        window.location.href='../../index.php';
                        alert('Successfully Registered');
                    </script>";
                exit();
                }



                


            }        }
                


            }
        }
        
    }else{
        header("Location: ../includes/register.php");
        exit();
    }
?>

