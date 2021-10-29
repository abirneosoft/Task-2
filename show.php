<?php
include("class.php");
$ob=new Project();

    $msg=$ob->display();
    


?>

<html>
    <head>
        <title></title>
        

    </head>
    <body>
   <?php 

    include("head.php");

?>
    <table class="table table-bordered">
    <thead>
    
        <th> Id</th>
        <td><?php echo $msg['id'];?></td>
      </tr>
    </thead>
    <tbody>
      
      
     
      <tr>
        <th>name</th>
        <td><?php echo $msg['name'];?></td>
       </tr>
      
       <tr>
        <th>Password</th>
        <td><?php echo $msg['password'];?></td>
       </tr>

       <tr>
        <th>Email</th>
        <td><?php echo $msg['email'];?></td>
       </tr>
       <tr>
        <th>age</th>
        <td><?php echo $msg['age'];?></td>
       </tr>
       <tr>
        <th>city</th>
        <td><?php echo $msg['city'];?></td>
       </tr>
       <!-- <td><a href="change.php?id=<?php // echo $msg['id'];?>" class="text-dark">change password</td> -->

       </tr>
      
     
      
    </tbody>
  </table>

   
   
    <?php include("foot.php"); ?>
    </body>
</html>