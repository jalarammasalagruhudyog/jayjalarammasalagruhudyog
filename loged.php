<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Loged In</title>
    <style media="screen">


    body{
      margin: 0;
      padding: 0;
      background-color: #15202B;
    }

    h1{
      text-align: center;
      color: #fff;
      font-family: 'Russo One', sans-serif;
    	font-weight: 500;
    }
    #data{
			margin-top: 3.5%;
			font-size: 1.25em;
      font-family: 'Roboto Mono', monospace;
		}
          #data th{
        color: #eeeeee;
        text-transform: capitalize;
        font-size: 1.25em;
        text-shadow: 1.5px 1.5px 2.5px #c1c1c1;
        text-align: inherit;
        padding: 0 20px;
      }

            #data td {
          color: #eeeeee;
          text-shadow: 1px 1px 1.5px #c1c1c1;
          text-transform: capitalize;
          font-weight: 400;
          padding: 0 20px;
      }
            /* #btn {
          margin: 5px 0px;
          width: 150%;
          height: 45px;
          background-color: #281859;
      } */

      #submit-btn {
    margin-top: 10px;
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #fff;
    background-color: #17a2b8;
    border: none;
}

body .center {
    display: flex;
    align-items: center;
    justify-content: center;
}
      /* button {
    width: 20%;
    height: 50px;
    color: white;
    background-color: #281859;
    border: 2px solid #c1c1c1;
    border-radius: 8%;
} */

.bg {
    margin: 0;
    padding: 0;
    background-image: url("https://hdqwalls.com/download/hex-abstract-material-design-ad-3840x2160.jpg");
    height: 100%;
    background-position: center;
    background-size: cover;
}
.logout{

  margin: auto;
  align-content: center;

}

    </style>

    <script type="text/javascript">
		function redirect(button){
			var x = button.id;

			switch (x) {
				case '1':
				document.write();
				window.location.assign("loged.php");
					break;
				case '2':
				document.write();
				window.location.assign("loged.php");
					break;
					default:
			    return false;
	}
}
</script>
  </head>
  <body class="container-fluid">
      <section class="conatiner">
        <h1>Hi Dhruv </h1>
          <div class="">
            <?php
            include_once 'connect.php';
            session_start();
            if(isset($_SESSION['name'])){


			$sql="SELECT * FROM feedback";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck > 0)
			{
				?>

		<table  cellspacing="10" id="data" style="text-align:left;" class="center">

			<tr>
				<th style="width: auto;">Id</th>
				<th style="width: auto;">Name</th>
				<th style="width: auto;">Subject</th>
				<th style="width: auto;">Email</th>

				<th style="width: auto;">Message</th>
			</tr>
			<tr style="margin-bottom:15px;">
			<?php

				while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['id'];
					$name=$row['name'];
					$sub=$row['subject'];
          $email = $row['email'];
					$msg = $row['msg'];
				 ?>
				<td style="width: auto;"><?php echo $id; ?></td>

				<td style="width: auto;"><?php echo $name; ?></td>

				<td style="width: auto;"><?php echo $sub; ?></td>
				<td style="width: auto;"><?php echo $email; ?></td>
				<td style="width: auto;"><?php echo $msg; ?></td>
				<td style="width: auto;">
					<!-- <form action="loged.php" method="POST">
						<input type="hidden" name="id" value="//php echo $; ?>">

						<button id="btn" class="btn" onclick="redirect()" name="accept">Accept</button>
					</form> -->
				</td>
					<form action="loged.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<td style="width: auto;">

						<button id="submit-btn" class="submit-btn" onclick="redirect()" name="delete">Delete</button>
						</td>
				</form>

			</tr>
    <?php }?>
		</table>
	<?php	}else{
				echo "<h1 class='center'>No new Feedback to View</h1>";
			}
    }
      ?>
      <?php
			if(isset($_POST['delete']))
			{
				$val=$_POST['id'];
				$sql="DELETE FROM feedback WHERE id='$val'";
				mysqli_query($conn,$sql);
				echo '<script type="text/javascript">
				alert("DELETED  Successfully");

				</script>';

				echo '<meta http-equiv="refresh" content="1">';

			}


		?>
    <div class="center">
      <form class="" action="logout.php" method="post">
        <input id="submit-btn" class="" type="submit" name="logout" value="Logout">
      </form>

    </div>
          </div>

      </section>

  </body>
</html>
