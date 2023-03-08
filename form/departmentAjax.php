<?php
// Include the database config file 
require_once 'db.php'; 
 
if(!empty($_POST["id"])){ 
    // Fetch city data based on the specific state
    $id=$_POST['id'];
    // echo $id;die;
    $query = "SELECT * FROM public.department_table where degree_id=$id"; 
    // echo $query;die;
    $result = pg_query($db,$query); 
   
     
    // Generate HTML of city options list 
    if(pg_num_rows($result) > 0){ 
        echo '<option value="">Select department</option>'; 
        while($row = pg_fetch_assoc($result)){  
            echo '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">course not available</option>'; 
    } 
    
}

?>