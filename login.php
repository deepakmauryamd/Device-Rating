<?php
    session_start();
    include 'connect.php';
    if(isset($_POST['submit-signin'])) 
    {
       $username = mysqli_real_escape_string($conn, $_POST['Email']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);

       if(empty( $username) || empty($password))
       {
        header("Location: ../firstpage.php?empty_fields");
        exit();
       }
       else{
            $sql = "SELECT * FROM login_details WHERE username = '$username' AND apassword = '$password' " ;
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck == 1 )
            {  
                $_SESSION['name'] = $username ;
                header("Location: ../phpfiles/compare.php?Login-Successful");
                exit();
            }
            else
            {
                header("Location: ../firstpage.php?error");
                exit();
            }
            
         }
    }
    else
    {
     header("Location: ../firstpage.php?error");
     exit();
    }
?>