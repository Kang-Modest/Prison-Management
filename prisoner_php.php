<html>

<head>
<title> Login Php Page </title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>
<?php require("header/header2.php"); ?>

<link rel="stylesheet" href="assets/css/style.css">

<!------ Include the above in your HEAD tag ---------->
<head>

<body>
  <?php
  if(isset($_GET['noimg'])){
    echo"<script>alert('Please input an image')</script>";
    echo"<script> window.location = 'prisoner_php.php'; </script>";
  }
  if(isset($_GET['notexit'])){
    echo"<script>alert('Sorry, file already exists.')</script>";
    echo"<script> window.location = 'prisoner_php.php'; </script>";
  }
  if(isset($_GET['largefile'])){
    echo"<script>alert(Sorry, your file is too large.')</script>";
    echo"<script> window.location = 'prisoner_php.php'; </script>";
  }
  if(isset($_GET['notimg'])){
    echo"<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
    echo"<script> window.location = 'prisoner_php.php'; </script>";
  }
  if(isset($_GET['err'])){
    echo"<script>alert('Sorry, there was an error uploading your file.')</script>";
    echo"<script> window.location = 'prisoner_php.php'; </script>";
  }
  if(isset($_GET['success'])){
    echo"<script>alert('Successfully Added')</script>";
    echo"<script> window.location = 'prisoner_php.php'; </script>";
  // if(isset($_GET['success'])){
  //   echo "<script> window.location = 'prisoner_del.php';</script>";
  // }
  }
 
  
  
  ?>
<form class="form-horizontal" action="p_reg_dbms.php" method="post" enctype="multipart/form-data">	
        <fieldset>
        
        <!-- Form Name -->
        <legend>Add a new Prisoner</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Prisoner No: </label>  
          <div class="col-md-4">
          <input id="textinput" name="noinput" type="text" placeholder="eg: 0000" class="form-control input-md">
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Prisoner Name: </label>  
          <div class="col-md-4">
          <input id="textinput" name="nameinput" type="text" placeholder="eg: Name" class="form-control input-md">
            
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Admit Date: </label>  
          <div class="col-md-4">
          <input id="textinput" name="a_date" type="date" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">DOB: </label>  
          <div class="col-md-4">
          <input id="textinput" name="date" type="date" placeholder="" class="form-control input-md">
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Address: </label>  
          <div class="col-md-4">
          <input id="textinput" name="addinput" type="text" placeholder="eg: Buea" class="form-control input-md">
            
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Crime Committed </label>  
          <div class="col-md-4">
          <input id="textinput" name="crimeinput" type="text" placeholder="eg: Murder" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">NIC </label>  
          <div class="col-md-4">
          <input id="textinput" name="nic" type="text" placeholder="eg: ID CardNo" class="form-control input-md">
        </div>
        </div>
        
          <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Weight </label>  
          <div class="col-md-4">
          <input id="textinput" name="weight" type="text" placeholder="In KG" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Height</label>  
          <div class="col-md-4">
          <input id="textinput" name="height" type="text" placeholder="In Metres" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Close Relation</label>  
          <div class="col-md-4">
          <input id="textinput" name="relation" type="text" placeholder="eg: Jonh Doe" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Emergency Number</label>  
          <div class="col-md-4">
          <input id="textinput" name="emergency" type="text" placeholder="eg: Jonh Doe" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Health Issues</label>  
          <div class="col-md-4">
          <input id="textinput" name="health" type="text" placeholder="e.g Hypertension" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Previous P. Records</label>  
          <div class="col-md-4">
          <input id="textinput" name="previous" type="text" placeholder="eg: Jonh Doe" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Cell no: </label>  
          <div class="col-md-4">
          <input id="textinput" name="c_no" type="text" placeholder="eg: CellNO" class="form-control input-md">
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Duration of Imprisonment: </label>  
          <div class="col-md-4">
          <input id="textinput" name="d_imp" type="text" placeholder="eg: 1 Month" class="form-control input-md">
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Prisoner Type: </label>  
             
        <select name="type">
            <option>Minimum security</option> 
            <option>Standard security</option> 
            <option>Maximum security</option> 
        </select>   
          </div>
        </div>
          </div>
        </div>
        
        <!-- Password input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Gender: </label>  
        <input type="radio" name="gender" value = "Male">
        Male
        <br>
        <input type="radio" name="gender" value = "Female">
        Female
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Image</label>  
          <div class="col-md-4">
          <input id="fileToUpload" name="fileToUpload" type="file" class="form-control input-md">
            
          </div>
        </div>
        
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Submit</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
        <script src="/assets/web/jquery/jquery.mim.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script Type="text/javascript">
            $(function()) { 
              // alert('hello.');
              Swal.fire({
                'title': 'Hello world',
                'text': 'this is sweet alert 2',
                'type': 'success'
              })
            });

</body>
</html>