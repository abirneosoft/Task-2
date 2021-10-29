<?php 
 include("class.php");
 $ob=new Project();
 if(isset($_POST['submit']))
 {
     $msg=$ob->login($_POST['email'],$_POST['password']);
 }
?>
<html>    
<head>
    
    <?php include("head.php") ;?>
    </head>
    <body>

  <div class="jumbotron bg-info">
  <h1 class="display-4 text-center">Login Panel</h1>
  <?php 
         if(!empty($msg))
         {
             echo $msg;
         }
        ?>
  
</div>
    
  <div class="container border border-warning bg-success" style="width:700px;">
<form method="post">
    <h1>Login </h1><br>
  
    Email address 
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"  >
    Password  
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rem">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
  <a href="Register.php" class="text-light">New User?</a>
</form>
</div>
<br><br><br><br>

<div class="footer-copyright">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center bg-dark text-white ">
<p>Copyright  © 2021. All rights reserved.</p>
</div>
</div>
</div>
</div>
<?php include("foot.php");?>
    </body>
</html>

