<?php 
 include("class.php");
 $ob=new Project();
 if(isset($_POST['login']))
 {
     $msg=$ob->changepassword($_POST['old_password'],$_POST['new_password'],$_POST['confirm_password']);
 }
?>
<html>
<head>
<?php include("head.php") ;?>
<style>
    .error{
        color:red;
    }
</style>
</head>
<body>
    
<div class="jumbotron bg-info">
  <h1 class="display-4 text-center">Change Password</h1>
  <?php 
         if(!empty($msg))
         {
             echo $msg;
         }
        ?>
  
</div>
    
    
  <div class="container border border-warning bg-success" style="width:700px;">

  <form method="post">
  <div class="form-group"> 
    <label for="old_password">old Password</label> 
    <input type="password" class="form-control" id="old_password" placeholder="plz enter old password" name="old_password">
  </div>
  
    <div class="form-group"> 
    <label for="new_password">New Password</label> 
    <input type="password" class="form-control" id="new_password" placeholder="plz enter new password" name="new_password">
  </div>
  
  <div class="form-group">
    <label for="confirm_password">Confirm Password</label>  
    <input type="password" class="form-control" id="confirm_password" placeholder="plz enter confirm password" name="confirm_password">
  </div>
  
            <input type="submit" name="login" value="Login"/>
        </form>
</div>


<?php include("foot.php");?>
    </body>
</html>
