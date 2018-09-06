<?php
    session_start();
    if(!isset( $_SESSION['s_email'])){
        header("Location: ./login.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" >
      <meta name ="theme-color" content="#FF3D00">
      <title>ePractice Zone | Welcome</title>
      <!-- Online links -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="icon" href="../image/blog-logo.png">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      
      
 <style>
          header{
              height: 100vh;
              
          }
     .navbar-toggleable-sm  a{
             line-height: 40px;
         text-decoration: none;
         color: #000;
         }
     .user-name{
         color: #00f;
         font-weight: 600;
     }
     .text-bold{
         font-weight: 600;
         color: #00f;
     }
     .navbar-toggleable-sm form{
         display: inline-block;
     }
     
     .navbar-toggleable-sm button{
         background: #f00;
         border: none;
         border-radius: 20px;
         color: #fff;
         padding: 5px 15px;
     }
     .user-info-display{
         width: 40%;
         margin:  5% auto;
         background: #fff;
         height: auto;
         padding: 30px 10px;
     }
     @media (max-width: 550px) and (min-width: 380px){
         
         .navbar-toggleable-sm{
           padding-top: 15%;
        }
         .user-info-display{
         width: 90%;
         }
     }
     @media (max-width: 379px) and (min-width:320px){
         .navbar-toggleable-sm{
           padding-top: 20%;
        }
         .user-info-display{
         width: 90%;
         }
     }
       </style>
   </head>
   <body>
      <!-- Header -->
      <header>
         <nav class="navbar nav-custom">
            <div class="container">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.html">
                  <img src="../image/blog-logo.png" class="img-fluid">
                  e<span class="text-uppercase">Practice Zone</span>
                  </a>
               </div>
               <button class="navbar-toggler hidden-md-up pull-xs-right" id="nav-collapse-bar" data-target="#collapsenav" data-toggle="collapse" type="button">
               <i class="fa fa-bars"></i>
               </button>
               <div class="navbar-toggleable-sm collapse pull-md-right text-xs-center" id="collapsenav">
                   
                    <?php
                    echo "<a href='javascript:void(0)'>Welcome&nbsp;&nbsp;<span class='user-name'>".$_SESSION['s_name']."!</span>&nbsp;&nbsp;</a>";
                ?>
                 
                <form method="post" action="../db/dblogout.php">
                    <button type="submit" value="submit" name="submit" id="submit">Logout</button>
                    
                </form>
                
               </div>
               
                
            </div>
         </nav>
        
         <div class="container user-info-display">
             <div class="col-md-12 col-sm-12 col-xs-12 ">
                <h3 class="text-uppercase text-md-center text-sm-center text-xs-center">User details</h3>   
                <?php
                  echo "<p><span class='text-bold'>Fullname : </span>".$_SESSION['s_name']."</p>";
                  echo "<p><span class='text-bold'>Email : </span>".$_SESSION['s_email']."</p>";
                  echo "<p><span class='text-bold'>Username : </span>".$_SESSION['s_username']."</p>";
                  echo "<p><span class='text-bold'>Gender : </span>".$_SESSION['s_gender']."</p>";
                  echo "<p><span class='text-bold'>Phone Number : </span>".$_SESSION['s_phonenumber']."</p>";
                 ?>
             </div>
         </div>
      </header>
      <!-- Info Card-->
      
   </body>
</html>
