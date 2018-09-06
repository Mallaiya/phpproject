<?php
    session_start();
    if(isset( $_SESSION['s_email'])){
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name ="theme-color" content="#FF3D00">
      <title>User Login | ePractice Zone</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
       <link rel="icon" href="../image/blog-logo.png">
      <style>
         .main-center{
         margin-top: 30px;
         margin: 0 auto;
         max-width: 400px;
         padding: 10px 40px;
         background:#0bb3fd;
         color: #fff;
         }
         .main{
         margin: 50px auto;
         }
         .main-login{
         padding: 20px;
         }
         .main-login button{
         background: #000;
         border: none;
         width: 100%;
         margin: 0 auto;
         color: #fff;
         padding: 5px 2px;
         }
          .error{
              color: #f00;
              text-align: center;
              font-weight: 450;
          }
      </style>
   </head>
   <body>
      <div class="container">
         <br>
         <a href="../../index.php"><button class="btn btn-primary text-uppercase"><span><i class="fas fa-angle-double-left"></i>&nbsp;Home</span></button></a>
         <a href="../includes/register.php" class="pull-md-right pull-sm-right pull-xs-right"><button class="btn btn-primary text-uppercase"><span>Sign up&nbsp;<i class="fas fa-angle-double-right"></i></span></button></a>
         <div class="row main">
            <div class="main-login main-center">
               <form class="" method="POST" action="../db/dblogin.php">
                  <h2 class="text-uppercase text-md-center">
                     Login
                  </h2>
                  <div class="form-group">
                     <label for="username" class="cols-sm-2 control-label">Email</label>
                     <div class="cols-sm-10">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                           <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email"/>
                        </div>
                     </div>
                     <p class="error" id="error-mail"></p>
                  </div>
                  <div class="form-group">
                     <label for="password" class="cols-sm-2 control-label">Password</label>
                     <div class="cols-sm-10">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                           <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                        </div>
                     </div>
                     <p class="error" id="error-password"></p>
                  </div>
                  <br>
                  <button type="submit" onclick="return isLoginValidationAccept();" name="submit" value="submit">Submit</button><br>
                  <p class="error" id="error-login"></p>
               </form>
            </div>
         </div>
      </div>
      <script src="../js/login.js"></script>
   </body>
</html>