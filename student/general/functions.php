<?php
     
     function testmessage($condition,$mess){
         if($condition){
             echo" <div class='alert text-center w-50 m-auto alert-success'>
             <h6> $mess process is true</h6>
             </div>";    
         }else{
            echo" <div class='alert text-center w-50 m-auto alert-danger'>
            <h6> $mess process is false</h6>
            </div>";
         }
     }
     
     
     
     
     function auth(){
        if($_SESSION['student']){
    
        }else{
            header('location:/project/student/login.php');
        }
    }

    auth();
?>
