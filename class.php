<?php 
 class Project{
     private $conn;
     public $mail;
     public $msg;
    function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","","register1") or die("disconnet");

    }

    function register($name,$password,$email,$age,$city){
        
        if(mysqli_query($this->conn,"INSERT INTO student(name,password,email,age,city) VALUES('$name','$password','$email','$age','$city');"))
        {
            $msg="Registerd Successfully";
            header("location:login.php");
            return $msg;
        }
        else {
            $msg="Not Registered";
            return $msg;
        }
    }
    function login($email,$password){
        $fetch=mysqli_query($this->conn,"select * from student where email='$email';");
        if(mysqli_num_rows($fetch)>0){
            while($arr=mysqli_fetch_assoc($fetch)){
            if($arr['email']==$email && $arr['password']==$password){
                session_start();
                $_SESSION['email']=$email;
                $msg="success";
                  header("location:dashboard.php");
                return $msg;
            }
            else{
                $msg="not success";
                return $msg;
            }
        }

        }
    }
    function display(){
       // session_start();
        $email=$_SESSION['email'];
        $selectquery="select * from student where email='$email' "; 
        $query=mysqli_query($this->conn,$selectquery);
        $res=mysqli_fetch_assoc($query);
        return $res;
        

    }
    function changepassword($old_password,$new_password,$confirm_password){
        session_start();
        $email=$_SESSION['email'];
        $sql=mysqli_query($this->conn,"SELECT * FROM student where email='$email'");
        $num=mysqli_fetch_assoc($sql);
        $ol_password=$num['password'];
        if($old_password==$ol_password){
            if($new_password==$confirm_password){
                if(mysqli_query($this->conn,"update student set password='$new_password' where email='$email' "))
                {
                    $msg="success";
                    header("location:dashboard.php");
                }else{
                    $msg="not success";
                }
            }
            else{
                $msg="not changes ";
            }
        }
    }

    function __destruct()
    {
        mysqli_close($this->conn);
    }
 }
?>