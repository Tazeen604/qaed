<?php 
include("header.php");
include("db_con.php");
//select dates query
$sql="SELECT distinct startdate,enddate FROM training_details";
$result=mysqli_query($conn,$sql);
if (!$result) {
    print_r("Error:".mysqli_error($conn));
    exit();
}
//End dates selection query

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="row d-flex align-items-center justify-content-center">
<div class="col-lg-3 col-md-3 col-sm-3"></div>
<div class="col-lg-6 col-md-6 col-sm-6">
    <form method="post" action="indexHandler.php" name="f1">

                           
<div class="form-group">
<label for="exampleFormControlSelect1">Start Date</label>
<select class="form-control" id="sdate" name="sdate">

<?php
  $endarr = array();
  $a=0;
  $i=0;
while($row=mysqli_fetch_array($result)) 
{
$start=$row['startdate'];
$endarr[$i]=$row['enddate'];
$i++;
?>

  <option value="<?php echo $start;?>"><?php echo $start;?></option>
<?php }
?>
</select> 
<label for="exampleFormControlSelect1">End Date</label>
<select class="form-control" id="edate" name="edate">
<option value="">Please Select End Date</option>
<?php
while($a<=sizeof($endarr)) 
{
$end=$endarr[$a];
$a++; ?>

  <option value="<?php echo $end;?>"><?php echo $end;?></option>
<?php } 
?>
</select> 
</div>
<div class="form-group">
<label for="exampleFormControlSelect1">Select Tehsil</label>
<select class="form-control" id="tehsilname" name="tehsilname">
<option value="">Select End Date First</option>

</select>
</div>
<div class="form-group">
<label for="exampleFormControlSelect1">Select Training Title</label>
<select class="form-control" id="title" name="title">
  <option>Select Tehsil First</option>

</select>
</div>

<button type="submit" class="btn btn-primary text-center">Submit</button>
</form>
</div>
<div class="col-lg-3 col-md-3 col-sm-3"></div>
</div>
                       
                    </div>
                </div>

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Training Details</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->

                </div>
                <!-- End of Main Content -->
            </div>
        </div>
    </div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
   
</body>

</html>
