<br/><br/><br/>

<?php
$id=$_GET['id'];



$query = "SELECT * FROM Student where id=$id ";     
$rs_result = mysqli_query ($conn, $query);





$fetched = mysqli_fetch_array($rs_result);    




if(isset($_POST['update'])){ //check if form was submitted
  
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,"jatinder2");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$qualification = $_POST['qualification'];


$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country= $_POST['country'];

$About = $_POST['about'];
$sql="update student set name=$name, email=$email, phone=$phone, qualification=$qualification,address=$address,city=$city,state=$state,country=$country where id=$id";


//$sql="insert into Student  (name, email, phone, qualification,address,city,state,country) values('jatinder','akfgagfi','dafaf','af','address','city','state','country') ";
if ($conn->query($sql) === TRUE) {
} else {
  
  echo die("Error: " . $sql . "<br>" . $conn->error);
}

  header("Location: http://localhost/jatinder/dashboard.php?page=1&id=name&action=ASC");
}    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPDATE FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootst rapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   
</head>
<body>
<script>
        $().ready(function () {
 
            $("#updateForm").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                    name: "required",
                    email: "required",
                    phone: {
                        required: true,
                        minlength: 10 //for length of lastname
                    },
                    qualification: {
                        required: true,
                        minlength: 3
                    },
                    state: {
                        required: true,
                        minlength: 5,
                    },
                    
                },
                // in 'messages' user have to specify message as per rules
                
            });
        });
 
    </script>

<div class="container" >
  
  <form class="form-horizontal"  id='updateForm' action="" method="POST">

  <div class="form-group">
  <label class="control-label col-sm-2" for="name">name:</label>
  <div class="col-sm-10">
  <input type="text"  class="form-control " placeholder=  "<?php echo $fetched['Name'];?>" name="name" required>
  </div>
  <br/><br/> 
  </div>



<?php echo $rows['Qualification'];?>
<?php echo $rows['Address'];?>
<?php echo $rows['City'];?>
<?php echo $rows['State'];?>
<?php echo $rows['Country'];?>
<?php echo $rows['About Yourself'];?>




    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder=
<?php echo $rows['Email'];?> name="email" required>
      </div>
      <br/><br/>  
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone" >Phone:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  required placeholder=
<?php echo $rows['Phone'];?> name="phone">
      </div> <br/><br/>  
    </div>
    <div class="form-group">
    <label for="qualification"  class="control-label col-sm-2" >Qualification:</label>


<select name="qualification" id="qualification" required >

<div class="col-sm-10" >     
    <option >Graduate</option>
    <option >12 pass</option>
    <option >Masters</option>
    <option >Phd's</option>
</div>
  </select> <br/><br/> 
    </div>
    <div class="form-group">
  <label class="control-label col-sm-2" for="address">address:</label>
  <div class="col-sm-10">
  <input type="text"  class="form-control " placeholder="Enter Address" name="address">
  </div> <br/><br/>  
  
  </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="city">city:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
      </div> <br/><br/>  
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="state">state:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  placeholder="Enter state" name="state">
      </div> <br/><br/>  
    </div>
    

  <div class="form-group">
  <label class="control-label col-sm-2" for="name">Country:</label>
  <div class="col-sm-10">
  <input type="text"  class="form-control " placeholder="Enter country" name="country">
  </div>
  <br/><br/>  
  </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="About Yourself">About Yourself:</label>
      <div class="col-sm-10">
        <input type="textarea" class="form-control" id="about" placeholder="Enter something about yourself" name="about">
      </div>
      <br/><br/>  
</div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="update">Update</button>
      </div> <br/><br/>  
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="Reset" class="btn btn-primary">Reset</button>
      </div> <br/><br/>  
    </div>

  </form>
</div>
</body>
</html>

