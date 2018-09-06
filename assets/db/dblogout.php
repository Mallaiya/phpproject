<?php
   if(isset($_POST['submit'])){
        echo"<script>alert('yes');</script>";
        session_start();
        session_unset();
        session_destroy();
        
        header("Location: ../includes/login.php?logout=success"); 
       echo"<script>alert('Logged out successfully');</script>";
    }
?>