
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootst rapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
        </style>   




</head>

<?php
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
$sql="select * from Student ";



$action = 'ASC';    
$sql2 = "SELECT * from Student";
$where = '';
if(isset($_GET["id"]))
{
    
     $id     = $_GET["id"];   //geting id value which we are passing from table headers
     $action = $_GET["action"]; // geting action value which we are passing from table headers
    
    //we are checking condition if $action value is ASC then $action will set to DESC otherwise it will remain ASC



    if($action == 'ASC')
     { 
        $action='DESC';
     }
     else  
     { 
        $action='ASC';
     }
    
    if($_GET['id']=='name') 
    {
        $id = "name";
    }
    elseif($_GET['id']=='email') 
    {
        $id="email";
    }
    
    $where = " ORDER BY  $id $action ";
        $sql2 = "SELECT * FROM Student " . $where;
    }
   


?> 



</head>

<body><center>
  <section>
    <h1>Student details</h1>
    </section></center>
<! pagination here -->

<center>  
    <?php  
      
    // Import the file where we defined the connection to Database.     
    //    require_once "connection.php";   
    
        $per_page_record = 5;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM Student $where LIMIT $start_from, $per_page_record ";     
        $rs_result = mysqli_query ($conn, $query);
        
    ?>    
  
    <div class="container">   
      <br>   
      <div>    
        <table class="table table-striped table-condensed    
                                          table-bordered">   
          <thead>   
            <tr>
        <th>S.NO.</th>
        <th><a href="dashboard.php?page=<?php echo $page?>&id=<?php echo 'name';?>&action=<?php echo $action;?>">Name<button id="button"> sort</button></a></th>
        <th><a href="dashboard.php?page=<?php echo $page?>&id=<?php echo 'email';?>&action=<?php echo $action;?>">Email<button id="button"> sort</button></a></th>
        <th>Phone</th>

        <th>qualification</th>
        <th>Address</th>
        <th>City</th>
        
        <th>state</th>

        <th>country</th>
        <th>About Yourself</th>

        <th>Action</th>
      </tr>

          </thead>  
          <tbody>   
    <?php     
    $s=(5*($page-1))+1;
            while ($rows = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
            ?>     
           

            <tr>
        <!-- FETCHING DATA FROM EACH
          ROW OF EVERY COLUMN -->
        <td><?php echo $s++;?></td>
        <td><?php echo $rows['Name'];?></td>
        <td><?php echo $rows['Email'];?></td>
        <td><?php echo $rows['Phone'];?></td>

        <td><?php echo $rows['Qualification'];?></td>
        <td><?php echo $rows['Address'];?></td>
        <td><?php echo $rows['City'];?></td>
        <td><?php echo $rows['State'];?></td>

        <td><?php echo $rows['Country'];?></td>
        <td><?php echo $rows['About Yourself'];?></td>

        <td><a href="update.php?id=<?php echo $rows['id']; ?>"><button id="edit" name="edit">edit</button></a>/<a href="update.php?id=$rows['id']"><button id="delete" name="delete">delete</button></a></td>
       <?php //$D= "DELETE FROM table_name WHERE condition";

?>

      </tr>



            <?php     
                };    
            ?>     
          </tbody>   
        </table>   

     <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM Student";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0]; 
              
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     

        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='dashboard.php?page=".($page-1)."&id=".$id."&action=".$action."'>  Prev </a>";   
        
      }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='dashboard.php?page="  
                                                .$i."&id=".$id."&action=".$action."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='dashboard.php?page=".$i."&id=".$id."&action=".$action."'>".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){ 
            echo "<a href='dashboard.php?page=".($page+1)."&id=".$id."&action=".$action."'>  Next </a>";   
        }   
  
      ?>    
  
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
</center>   
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'dashboard.php?page='+page+'&id='+$id+'&action='+$action;   
    }   
  </script>  

<br/>
<br/>
<br/>

  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      <center><a href="index.php"> <button  class="btn btn-primary">add new student</button></a></center>
      </div> <br/><br/>  
    </div>
</body>

</html>

