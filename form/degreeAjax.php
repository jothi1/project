<?php
// Include the database config file 
require_once 'db.php'; 
 
if(!empty($_POST["id"])){ 
    // Fetch city data based on the specific state
    $id=$_POST['id'];
    // echo $id;die;
    $query = "SELECT * FROM public.degree_table where course_id=$id"; 
    // echo $query;die;
    $result = pg_query($db,$query); 
   
     
    // Generate HTML of city options list 
    if(pg_num_rows($result) > 0){ 
        echo '<option value="">Select degree</option>'; 
        while($row = pg_fetch_assoc($result)){  
            echo '<option value="'.$row['degree_id'].'">'.$row['degree_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">course not available</option>'; 
    } 
    
}

?>