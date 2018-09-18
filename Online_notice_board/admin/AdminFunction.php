<?php
 include('../connection.php');
 
  class AdminFunction
 {
   public function select_user(){
    $q=mysqli_query($conn,"select * from user ");
    print_r($q); die;
    echo mysqli_num_rows($q);
    
    return $rr;
   }

   public function select_user_object(){
    $q=mysqli_query($conn,"select * from user ");

    return $q;
   }
 }
 $user=new AdminFunction();




?>