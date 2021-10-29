<?php
 include("class.php");
 $ob=new Project();
 if(isset($_POST['submit']))
 {
     $msg=$ob->register($_POST['name'],$_POST['password'],$_POST['email'],$_POST['age'],$_POST['city']);
 }

?>
<html>
<head>
<?php include("head.php") ;?>

</head>
<body>
    
<div class="jumbotron bg-info">
  <h1 class="display-4 text-center">Register Panel</h1>
  
    <?php 
    if(!empty($msg))
    {
        echo $msg;
    }
   ?>
  
</div>
    
    
  <div class="container border border-warning bg-success" style="width:700px;">
<form method="post" enctype="multipart/form-data">
    <h1>Register</h1>
  
    
    Name 
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Your name" >
    
    Password  
    <input type="password" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Enter Your Password" >

    Email address 
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    

    Age 
    <input type="text" class="form-control" name="age" aria-describedby="emailHelp" placeholder="Enter your Age" >
    
    City 
    <input type="text" class="form-control" name="city" aria-describedby="emailHelp" placeholder="Enter Your city" >
    

<button type="submit" class="btn btn-dark" name="submit">submit</button>
    <a href="login.php" class="text-light">Existing users?</a>
</form>
</div>
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
