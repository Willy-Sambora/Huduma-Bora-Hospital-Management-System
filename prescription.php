<?php
include('includes/header.php'); 
include('includes/sidebar.php'); 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Doctor || Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <?php
// Include config file
require_once "../config.php";

if(isset($_POST['submit']))
{		
    $patientno = $_POST['patientno'];
    $username = $_POST['username'];
    $symptoms = $_POST['symptoms'];
    $disease = $_POST['disease'];
    $prescription = $_POST['prescription'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $insert = mysqli_query($link,"INSERT INTO `prescription`(`patientno`, `username`,`sysmptoms`,`disease`,`prescription`,`time`,`date`) VALUES ('$patientno','$username','$symptoms','$disease,'$prescription','$time','$date')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($link); // Close connection
?>
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">PRESCRIPTION</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                <div class="form-group">
           <form action="index.php" method="post">
           <div class="form-group ">
                <label>Patient No.</label>
                <input type="text" name="patientno" class="form-control" value="">
                <span class="help-block"></span>
            </div>  
            <div class="form-group ">
                <label>Patient Name</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Symptoms</label>
                <textarea name="signs" class="form-control" value="">Enter text here...</textarea>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Disease</label>
                <textarea name="signs" class="form-control" value="">Enter text here...</textarea>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Prescription</label>
                <textarea name="signs" class="form-control" value="">Enter text here...</textarea>
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label for="inputDate">Time</label>
                <input type="time" id="inputDate" name="time" class="form-control" value="" required="">
              </div>
              <div class="form-group">
                <label for="inputDate">Date</label>
                <input type="date" id="inputDate" name="date" class="form-control" value="" required="">
              </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
               
            </div>
          </div>
          </div>
        </form>
    </div>    
              
    
        
            
        </div>
        <!-- /.row (main row) -->
   </div><!-- /.container-fluid -->
 </section>
    <!-- /.content -->
     
        
      
  
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
</body>
</html>
