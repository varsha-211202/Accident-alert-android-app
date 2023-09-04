<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Accident Detection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
        <style>
    table {
      margin: 0 auto;
      font-size: small;
      border: 1px solid black;
          margin-left: -7px;

    }

    h1 {
      text-align: center;
      color: black;
      font-size: xx-large;
      font-family: 'Gill Sans', 'Gill Sans MT',
      ' Calibri', 'Trebuchet MS', 'sans-serif';
    }

    td {
      background-color: #E4F5D4;
      border: 1px solid black;
    }

    th,
    td {
      font-weight: bold;
      border: 1px solid black;
      padding: 5px;
      text-align: center;
    }

    td {
      font-weight: lighter;
    }
  </style>
  </head>
  <body>
    
	

	  <?php include "include/header.php"; ?>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Driver Portal</span>
            <h2 class="mb-2">Accident Alert</h2>
             <div>
            	<?php
            	include "connection.php";
     

		$sql = "SELECT * FROM reg_table where state=0 ORDER by id DESC";
$result = mysqli_query($conn,$sql);
?>

	              <table> 
            	  <tr>
        <th>S.no</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile Number</th>
      </tr>
      <!-- PHP CODE TO FETCH DATA FROM ROWS-->
      <?php // LOOP TILL END OF DATA
      $i=0;
        while($rows=$result->fetch_assoc())
        {
      ?>
      <tr>
        <!--FETCHING DATA FROM EACH
          ROW OF EVERY COLUMN-->
        <td><?php echo $i; ?></td>
        <td><?php echo $rows['username'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['mobile_num'];?></td>
      </tr>
      <?php
      $i++;
        }
      ?>
    </table>
            </div>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">    					
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.4602403839294!2d80.24660917346193!3d13.069991987254449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666e06185a7b%3A0x2ff1faae1df5aabb!2sWomen&#39;s%20Christian%20College!5e0!3m2!1sen!2sin!4v1682621546021!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		    					<div class="text">
		    						<form  action='update_msg.php' method="post">
		    							<p><label >Patient Name</label></p>
		    							<input type="text" name="patient">
		    							<label for="cars">Choose a Hospital:</label>

<select name="hospital" id="cars">
  <option value="Kanchi Hospital">Kanchi Hospital</option>
  <option value="BRS Hospital">BRS Hospital</option>
  <option value="Vinita Hospital">Vinita Hospital</option>
</select><br>
<p><label >Message</label></p>
  <textarea style="margin-left: -3px;
    width: 287px;
    height: 80px;
}" id="w3review" name="Message" rows="4" cols="50"></textarea>
  <input type="submit" name="submit" value='SUBMIT'>
		    						</form>
		    						<div class="d-flex mb-3">
		    						</div>
		    						
		    					</div>
		    				</div>
    					</div>
    			</div>
    		</div>
    	</div>
    </section>

	
<?php include "include/footer.php"  ?>
  

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>

</html>