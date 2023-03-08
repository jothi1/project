<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

    
 <title > College Admission form </title>
 <style type="text/css">
    .valid{
        
    }
    .error{
        color: red
    }
</style>
</head>
    <body>
    
    <div class="container border">
    <h1 class="text-center"> Course Admission form</h1>
    <form action="" method="post" id ="myform">
    <div class="col-sm-12 mt-sm-2" style="width: 200px;">
    
    </div>
   
    <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label  class="form-label" >First name</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
            <input type="text" id="fname" name="fname" class="form-control"/>
        </div>
          
        <div class="col-sm-2 mt-sm-2">
             <label class= "col-sm-3col-form-label">last name</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
             <input type="text" id="lname"  name="lname"class="form-control"/>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
             <label >phone no</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
            <input type="text" name='phno' id="phno" class="form-control"/>
        </div>

        <div class="col-sm-2 mt-sm-2">
             <label >Email</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
             <input type="text" name="mail" id="mail" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label> Gender</label>
        </div>
        <div class="col-sm-1 mt-sm-2">
            <input type="radio" name="gender" class="form-check-input"/> Male
        </div>
        <div class="col-sm-1 mt-sm-2">
            <input type="radio" name="gender" class="form-check-input"/> Female
        </div>
        <div class="col-sm-2 mt-sm-2">
            <input type="radio" name="gender" class="form-check-input"/> others
        </div>
        <div class="col-sm-2 mt-sm-2">
            <label>Date of birth</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
             <input type="text" name="date" id="date" data-provide="datepicker" class="form-control">
        </div>
</div>
<div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label >Highest Qualification</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
            <select name="hq" id="hq" class="form-select">
            <option  value="">Choose</option>
            <option  value="sslc">sslc</option>
            <option  value="hss">HSS</option>
            <option  value="ug">UG</option>
            </select>
        </div>
        
        <div class="col-sm-2 mt-sm-2">
             <label >Percentage</label>
        </div>
        <div class="col-sm-4 mt-sm-2">
             <input type="text" name="per"id="per" class="form-control"/>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label >Address </label>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <input type="text" id="Dno" name="Dno" placeholder="Door no" class="form-control"/>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <input type="text" id="flat" name="flat" placeholder="Flat" class="form-control"/>
        </div>
        <div class="col-sm-3 mt-sm-2 ">
            <input type="text" id="street" name="street" placeholder="Street" class="form-control"/>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 mt-sm-2">
        </div>
        <div class="col-sm-3 mt-sm-2">
           <input type="text" id="state"  value=" Tamilnadu" readonly class="form-control"/>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <select name="district" id="district" class="form-select">
            <option  value="">select district</option>
            <?php
               $query="SELECT district_id, district_name FROM public.district_table ORDER BY district_id  ";
                $result = pg_query($query);

                while($myrow = pg_fetch_assoc($result)) {
                     printf ("<option value='$myrow[district_id]'>$myrow[district_name]</option>");
                }
             ?>
            
            </select>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <select name="city" id="city" class="form-select">
            <option  value="">select city</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-2 mt-sm-2">
        </div>
    <div class="col-sm-3 mt-sm-2">
            <input type="text" id="pin" name="pin" placeholder="pincode" class="form-control"/>
        </div>
    </div>
    
    <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label >Course details </label>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <select name="course" id="course" class="form-select">
            <option  value="">select course</option>
            <?php
               $query="SELECT course_id, course_name FROM public.course_table ORDER BY course_id  ";
                $result = pg_query($query);

                while($myrow = pg_fetch_assoc($result)) {
                     printf ("<option value='$myrow[course_id]'>$myrow[course_name]</option>");
                }
             ?>
            </select>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <select name="degree" id="degree" class="form-select">
            <option  value="">select Degree</option>
            </select>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <select name="department" id="department" class="form-select">
            <option  value="">select department</option>
            </select>
        </div>

    </div>
    <div class="form-group row ">
         <div class="col-sm-2 mt-sm-2">
        <label> Skills</label>    
        </div>
         <div class="col-md-4 mt-sm-2">
              <label>Select Skills</label>
             <select class="form-control" data-skip-name="true" data-name="skill[]" required>
                    <option value="">Select</option>
                    <option value="PHP">PHP</option>
                     <option value="Mysql">Mysql</option>
                     <option value="JQuery">JQuery</option>
                    <option value="Ajax">Ajax</option>
                     <option value="AngularJS">AngularJS</option>
                     <option value="Codeigniter">Codeigniter</option>
                     <option value="Laravel">Laravel</option>
                     <option value="Bootstrap">Bootstrap</option>
                     </select>
        </div>
    </div>
    
   <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label> Languages you know</label>
        </div>
        <div class="col-sm-1 mt-sm-2">
            <input type="checkbox" name"language" class="form-check-input"/> Tamil
        </div>
        <div class="col-sm-1 mt-sm-2">
            <input type="checkbox" name"language" class="form-check-input"/> English
        </div>
        <div class="col-sm-2 mt-sm-2">
            <input type="checkbox" name"language" class="form-check-input"/> Hindi
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2 mt-sm-2">
            <label> Certification Done by you</label>
        </div>
        <div class="col-sm-3 mt-sm-2">
            <button type="button" id="add" class="btn btn-primary">Add more</button>
        </div>
    </div>
    <table id="table">
        <tbody>
          <tr>
            <td>
              <input type="text" name="course" placeholder='Course name' class="form-control mt-sm-3" />
            </td>
            <td>
              <input type="text" name="certified" placeholder="Certified by" class="form-control mt-sm-3" />
            </td>
            <td>
              <input type="text" name="year[]" placeholder="Year" class="form-control mt-sm-3" />
            </td>
            <td>
              <input type="text" name="garde" placeholder="grade"class="form-control mt-sm-3" />
            </td> 
          </tr>
          <!-- <tr id='addr'></tr> -->
        </tbody>
    </table>
    <div class="form-group row ">
    <div class="col-sm-2 mt-sm-2">
            <label >comments </label>
        </div>
    <div class="col-sm-5 mt-sm-2  ">
    <textarea name="comment" cols="50" rows="2" value="address" class="form-control"> 
    </textarea>
    </div>
    </div>
 <div class="form-group row">
    <div class="col text-center mt-sm-2">
      <button class="btn btn-primary">Submit</button>
    </div>
</div>

</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script>
$(document).ready(function(){ 
    $("#state").on("change", function(){
        alert('ffgfgfsjfsjf')
        var state_id = $("state").val();
       alert(state_id);
            $.ajax({
                method:"POST",
                url:"ajaxData.php",
                data:
                {
                    id=state_id,
                },
                datarype="html",
                success:function(data){
                    $("#district").html(data);
                }
            }); 
        
    });
});
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"> </script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="validation.js"></script>

<script>
    $(document).ready(function() {
   $("#myform").validate();
});

$(document).ready(function(){  

  $("#district").on("change", function(){
    var district_id = $("#district").val();

jQuery.ajax({  
url: 'ajax.php',  
type: 'POST', 
data :{id:district_id},
  success: function(data) {  
   //alert(data);
    $("#city").html(data);                
  }  
});  
  });  
});   
$(document).ready(function(){  

$("#course").on("change", function(){
  var course_id = $("#course").val();

jQuery.ajax({  
url: 'degreeAjax.php',  
type: 'POST', 
data :{id:course_id},
success: function(data) {  
 //alert(data);
  $("#degree").html(data);                
}  
});  
});  
});   
$(document).ready(function(){  

$("#degree").on("change", function(){
  var degree_id = $("#degree").val();

jQuery.ajax({  
url: 'departmentAjax.php',  
type: 'POST', 
data :{id:degree_id},
success: function(data) {  
 //alert(data);
  $("#department").html(data);                
}  
});  
});  
});
$(document).ready(function() {
            $("#add").click(function(){
                var row="<tr><td><input type='text' name='course' placeholder='Course name' class='form-control' /> </td><td><input type='text'name='certified'placeholder='Certified by' class='form-control'/></td><td><input type='text' name='year[]' placeholder='Year' class='form-control' /></td><td><input type='text' name='garde' placeholder='grade'class='form-control' /></td> <td><button type='button' id='remove' class='btn btn-secondary mb-2'>-</button></td> </tr>";
            $('#table tbody').append(row);
            $('tbody').on("click","#remove",function(){
                $(this).closest("tr").remove();
            });
  });
});
$(document).ready(function(){
    $('#date').datepicker(
        {
            "format": "mm-dd-yy",
           "startDate": "-5d",
           "endDate": "02-15-2023",
           "keyboardNavigation": false
        }
    ); 
});
</script>
</div>
</body>
<html>