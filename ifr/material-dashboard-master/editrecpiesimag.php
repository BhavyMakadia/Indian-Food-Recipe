<?php

include 'header.php';

  $reid = $_GET['rid'];
  $con = mysqli_connect("localhost", "root", "", "foodrecipes");
  $qu = "select * from r_image where recipe_id=$reid";
	$res = mysqli_query($con,$qu);
  while($row=mysqli_fetch_array($res))
	{
    $img1=$row['image_1'];
    $img2=$row['image_2'];
    $img3=$row['image_3'];
    $img4=$row['image_4'];
	}



	 
 if(isset($_POST['btnok']))
  {
				if(isset($_FILES['imgf1']['name']))
			{
				$newimage1=$_FILES['imgf1']['name'];
				move_uploaded_file($_FILES['imgf1']['tmp_name'],"upload_image/".$newimage1);
	
			}
				elseif(isset($_FILES['imgf2']['name']))
			{
				$newimage2=$_FILES['imgf2']['name'];
				move_uploaded_file($_FILES['imgf2']['tmp_name'],"upload_image/".$newimage2);
	
			}
				elseif(isset($_FILES['imgf3']['name']))
			{
				$newimage3=$_FILES['imgf3']['name'];
				move_uploaded_file($_FILES['img3']['tmp_name'],"upload_image/".$newimage3);
	
			}
				elseif(isset($_FILES['imgf4']['name']))
			{
				$newimage4=$_FILES['imgf4']['name'];
				move_uploaded_file($_FILES['imgf4']['tmp_name'],"upload_image/".$newimage4);
	
			}
			else{
					$newimage1=$img1;
					/*$newimage2=$img2;
					$newimage3=$img3;
					$newimage4=$img4;*/
				}
  }
  
	
	else
	{
			$img1=$_FILES['imgf1']['name'];
			$img2=$_FILES['imgf2']['name'];
			$img3=$_FILES['imgf3']['name'];
			$img4=$_FILES['imgf4']['name'];
        
      
			$qu = "update r_image set image_1='$img1',image_2='$img2',image_3='$img3',image_4='$img4',where recipe_image_id=$reid";
				$q=mysqli_query($con,$qu);
			if($q)
			{
				?>
				<script>
						window.location="managecategory.php";
				</script>
				<?php
			}
			else
			{
				echo "Errroorrrr";
			}
          
        // Close connection
        mysqli_close($con);
    } 
 
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
Edit image
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../material-dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../material-dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../material-dashboard-master/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-120" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-8"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-16 col-md-16 col-16 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-4 z-index-4">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-2 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edit image</h4>
                  
                </div>
              </div>
              <div class="card-body">
                <form action="#" class="text-start" method="POST" enctype="multipart/form-data">
     

	 <img src="upload_image/<?php echo $img1;?>" height=100 width=100/><br/><br/>
                      <label>IMAGE 1:-</label></br>
                    <input type="File" name="imgf1">
                 </br></br>
				 
				 
				 
				 
					 <img src="upload_image/<?php echo $img2;?>" height=100 width=100/><br/><br/>
					  <label>IMAGE 2:-</label></br>
                    <input type="File" name="imgf2">
                 </br></br>
				 
				 
				 
				  <img src="upload_image/<?php echo $img3;?>" height=100 width=100/><br/><br/>
				   <label>IMAGE 3:-</label></br>
                    <input type="File" name="imgf3">
                 </br></br>
				 
				 
				 
				  <img src="upload_image/<?php echo $img4;?>" height=100 width=100/><br/><br/>
				   <label>IMAGE 4:-</label></br>
                    <input type="File" name="imgf4">
                 </br></br>             
                 
				 
				 
                  <div class="text-center">
                    <input type="submit" name="btnok" value="Edit Recipes" class="btn bg-gradient-primary w-100 my-4 mb-2">
					</input>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </main>

</body>

</html>
<?php
  include 'footer.php';
?>