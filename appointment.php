<?php
include('includes/header.php'); 
include('includes/sidebar.php'); 
extract($_POST);
?>
<?php
if(isset($save))
{
		$query="INSERT into appointment values('','$pno','$name','$location','$phone','$time','$date','$doc')";
		if(mysqli_query($con,$query))
		{
			echo "<script>
	alert('Data saved successfully')
	</script>";
		
		
		}
		else
		{
		echo "<script>
	alert('Data saved unsuccessfully')
	</script>";
		}
	}
	

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Patients|| Dashboard</h1>
          </div><!-- /.col -->
         
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Appointment Booking</h3>
              
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
              <div class="form-group">
                <label for="doctor">Patient No.</label>
                <select name="pno" class="form-control custom-select">
                <option disabled selected>-- Select Patient No --</option>
                
                  <?php $ret=mysqli_query($link,"select * from users");
                  while($row=mysqli_fetch_array($ret))
                  {
                  ?>
									<option value="<?php echo htmlentities($row['patientno']);?>">
									<?php echo htmlentities($row['patientno']);?>
										</option>
									<?php } ?>
                </select>
                <label for="inputName">Patient Name</label>
                <input type="text" id="inputName" name="name" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputLocation">Location</label>
                <input type="text" id="inputLocation" name="location" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputNumber">Phone Number.</label>
                <input type="phone" id="inputNumber" name="phone" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputDate">Time</label>
                <input type="time" id="inputDate" name="time" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputDate">Date</label>
                <input type="date" id="inputDate" name="date" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="doctor">Select Doctor</label>
                <select  name="doc" class="form-control custom-select">
                <option disabled selected>-- Select Doctor --</option>
                 <?php
                   require_once '../config.php';
                   $result=mysqli_query($link,"SELECT docname FROM doctor");
                    while ($data=mysqli_fetch_array($result))
                    {
                      echo "<option value='". $data['docname'] ."'>" .$data['docname'] ."</option>";
                    }
                  echo " </select>";
                  ?>
                   <?php mysqli_close($link);?>
              </div>
              <div class="col-6">
          <input type="submit" name="save" value="SEND" class="btn btn-success">
        </div>
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
