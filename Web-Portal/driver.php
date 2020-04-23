
<?php
session_start();
require("connect-db.php");



if(isset($_POST['btn']))
{

 $driver_number = $_POST['driver_number'];


 $bus_number = $_POST['bus_number']; 
 


$sql = "INSERT INTO diver(driver_number,bus_number)
VALUES ('$driver_number','$bus_number')";
$retval = mysqli_query( $conn,$sql);
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error());
}
echo "Entered data successfully\n";

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>School Bus Tracking</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
 

</head>

<body>
	<?php require("header.php");?>
		
	<?php require("menu.php");?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Student</h1>
			</div>
		</div><!--/.row-->
	
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" onSubmit="return formValidation();"  name="f1">
							
								<div class="form-group">
									<label>Driver Information</label>
									<input class="form-control" placeholder="Driver Number" name="driver_number" required>
								</div>
								<div class="form-group">
									
									<input class="form-control"  placeholder="Enter Bus Number" name="bus_number">
								</div>
										
										
								<button type="submit" name="btn" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
						
								
								
							</div>
						
								
								
								
							
								
									</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->
		
		
		
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
