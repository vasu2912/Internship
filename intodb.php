<?php 
include "db.php";
    $i=0;
   for ($i=0;$i<200;$i++) {
    
            if(isset($_POST["$i"])){
            
                $query= "SELECT * from items where id ='$i'";
                $result= mysqli_query($connection,$query);
                if ($result) {
                    if (mysqli_num_rows($result)>0) {
                        while ($row = mysqli_fetch_array($result)) {
                              
                              $oid=$row['id'];
                              $itemname=$row['name'];
                              $tprice=$row['price'];
                              $quan=1;
                             $sql = "INSERT INTO porder (id, name, price,quan)
VALUES ($oid, '$itemname', $tprice, $quan)";

                           
                              $resul = mysqli_query($connection,$sql);
                              if (!$resul) {
                              	echo mysqli_error($connection);
                              	
                              }
        }
    }
      }
  }
}

    ?>