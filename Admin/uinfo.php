<?php

session_start();

	include '../include/dbconnect.php';
	$ko="";
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "admin") ){
	header("Location: ../login.php");
}

  $perPage = 5;

  $commentsQuery = "select * from login limit $perPage";
  $resultComments = mysqli_query($conn, $commentsQuery);

  $totalCommentsQuery = "SELECT COUNT(*) as t_c FROM login";
  $resultTotalComments = mysqli_query($conn, $totalCommentsQuery);
  $rowTotalComments = mysqli_fetch_assoc($resultTotalComments);
  $tC = $rowTotalComments['t_c'];

  


	if( ($_SERVER["REQUEST_METHOD"]=="POST") ){
		if($_POST['vd'] !="" )
		{
			if ($_POST['sub'] == 'view'){
				$sql = "select * from login where id= '".$_POST['vd']."'";
				$result = mysqli_query($conn, $sql);
				$num=mysqli_num_rows($result);
				if($num!=1){
					$ko="Id doesnt Exist";
				}
				else{
					while($row = mysqli_fetch_assoc($result)){
						$usertype=$row['userType'];
						$username=$row['name'];
					}
					if($usertype == "user"){
						$sql2="SELECT * FROM qhistory WHERE name = '".$username."'";
						$result2 = mysqli_query($conn,$sql2);
						$tq=mysqli_num_rows ( $result2 );	
						
						$ko="Number of Quiz taken : ".$tq."<br> <br> ";
						$ko=$ko. "<table><tr><th>User</th><th>Subject</th>
							<th>Question Number</th>
							<th>Correct Answer</th>
							<th>Date and time</th>
							</tr>";
						while($row = mysqli_fetch_assoc($result2)){
						$subject=$row['Subject'];
						$number=$row['number'];
						$correct=$row['Correct'];
						$date=$row['Date'];
					
					$ko=$ko."<tr><td>".$username."</td><td>" . $subject . "</td><td>" . $number . "</td><td>" . $correct . "</td><td>" . $date . "</td></tr>";
						}
						$ko=$ko."</table>";
					}
					elseif($usertype == "provider"){
						$sql="SELECT * FROM cs WHERE addby = '".$username."'";
						$result = mysqli_query($conn,$sql);
						$csq=mysqli_num_rows ( $result );	
						
						$sql="SELECT * FROM gk WHERE addby = '".$username."'";
						$result = mysqli_query($conn,$sql);
						$gkq=mysqli_num_rows ( $result );	
						
						$sql="SELECT * FROM mh WHERE addby = '".$username."'";
						$result = mysqli_query($conn,$sql);
						$mhq=mysqli_num_rows ( $result );	
						
						$sql="SELECT * FROM mp WHERE addby = '".$username."'";
						$result = mysqli_query($conn,$sql);
						$mpq=mysqli_num_rows ( $result );

						$ko="Total question added in <br> Computer Science Section: ".$csq."<br> General knowledge section: ".$gkq." <br> Modern History section: ".$mhq."<br> Math & Physics section: ".$mpq;
						
						
					}
					
					if($usertype == "admin"){
						$ko="Sorry Admin info viewing permission denied";
					}
					
					
				}
				
				
				
			}
			elseif ($_POST['sub'] == 'delete'){
				$sql = "select * from login where id= '".$_POST['vd']."'";
				$result = mysqli_query($conn, $sql);
				$num=mysqli_num_rows($result);
				if($num!=1){
					$ko="Id doesnt Exist";
				}
				else{
					$sql = "DELETE FROM `login` WHERE  id= '".$_POST['vd']."'";
					mysqli_query($conn, $sql);
					$ko="";
				echo	"<script>
				alert('Successfully deleted');
				window.location.href='uinfo.php';
			</script>";
				}
			}
		}
}


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
   
	 <link rel="stylesheet" href="../css/style.css">
	 
	 <style>
      body{
        background-color: #ffffff
      }
      #comments{
        background-color: #ffffff;
        padding: 10px;
        width: 40%;
      }
      #btn_load, .btnpg {
        background-color: white;
        color: black;
        border: 2px solid #000000;
        cursor: pointer;
        padding: 16px 32px;
      }

      #btn_load, .btnpg:hover {
        background-color: #000000;
        color: white;
      }
	  
	  table {
		width: 100%;
		border-collapse: collapse;
		
	  }

		table, td, th {
		border: 1px solid black;
			padding: 5px;
		}

			th {text-align: left;}


    </style>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

	 <script type="text/javascript">

      $(document).ready(function(){
		  var i = 5;
      var j = 0;
		  

      $('#searchBox').on('keyup',function(){
		  if(document.getElementById('searchBox').value != ""){
        $('#ok').load('getuinfo.php',{searchVal: document.getElementById('searchBox').value});
		  }
      })

      $('#prevBtn').click(function(){
        j = j - 5;
		if(j<0){
			j=j+5;
			}
			 $('#ok').load('getuinfo.php',{startingVal: j});
	   
		  });

      $('#nextBtn').click(function(){
        j = j + 5;
		if(j>=<?php echo $tC ?>){
			j=j-5;
			}
			 $('#ok').load('getuinfo.php',{startingVal: j});
		  });

	  });
	</script>
	
  </head>
  
    <body>
		<header>
			<div >
			<div >
			<h1 style="color:#00aa00;text-align:center; text-shadow: 2px 2px 2px white;">Online Question page</h1>
			</div>
            <li > 
			<a href="Adminhome.php" style="color:white"  > Home </a>&nbsp  &nbsp
			<a href="../login.php" style="color:white">Sign Out </a></li>
			</div>
		</header>
		
		<div id="mainDiv">
				<h2 style="color:red;text-align:left; "> <?php echo "Welcome, " .$_SESSION['username'] ?></h1>

		<div align="center" >
		
		
		 <input type="text" name="search" id="searchBox" value="" placeholder="Search by Name...">
<br> <br>
	<div align="center" id="ok" >
		
		<?php
			echo "<table>
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>User type</th>
			</tr>";
			while($row = mysqli_fetch_assoc($resultComments)){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['userType'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

		?>
		<br><br>
		</div>
		<button class="btnpg" type="button" name="btnPrev" id="prevBtn">Previous</button>
		<button class="btnpg" type="button" name="btnNext" id="nextBtn">Next</button>
		<br> <br>
		<form action="uinfo.php" method="post">
		<input type="text" name="vd" id="vd" value="" placeholder="Type id to view or Delete">
		<button type="submit" name="sub" value="view"  >View</button>
		<button type="submit" name="sub" value="delete"   >Delete</button>
		<br> <br>
		
		</form>
		<label style="color:green"><?php echo $ko; ?> </label>
		<br> <br>
		</div>
		
		
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	