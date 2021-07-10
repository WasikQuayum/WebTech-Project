<?php

session_start();

	include '../include/dbconnect.php';
	$ko="";
if( (!isset($_SESSION['username'])) or ($_SESSION['usertype'] != "admin") ){
	header("Location: ../login.php");
}


  $perPage = 10;

  $sql = "select * from cs limit $perPage";
  $result = mysqli_query($conn, $sql);

  $totalquery = "SELECT COUNT(*) as t_c FROM cs";
  $resulttotal = mysqli_query($conn, $totalquery);
  $totalrow = mysqli_fetch_assoc($resulttotal);
  $tC = $totalrow['t_c'];

  


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Question info page</title>
   
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
		
		var j = 0;
		
      $('#searchBox').on('keyup',function(){
		  if(document.getElementById('searchBox').value != ""){
			$('#ok').load('getqinfo.php',{searchVal: document.getElementById('searchBox').value , sub: document.getElementById('sub').value});
		  
		  }
      })

      $('#prevBtn').click(function(){
        j = j - document.getElementById('perpage').value;
		if(j<0){
			j=j+Number(document.getElementById('perpage').value);
			}
			 $('#ok').load('getqinfo.php',{startingVal: j , sub: document.getElementById('sub').value , limit: document.getElementById('perpage').value });
	   
		  });

      $('#nextBtn').click(function(){
        j = j + Number(document.getElementById('perpage').value);
		if(j>=<?php echo $tC ?>){
			j=j-document.getElementById('perpage').value;
			}
			 $('#ok').load('getqinfo.php',{startingVal: j , sub: document.getElementById('sub').value , limit: document.getElementById('perpage').value });
		  });
		  
		$('#perpage').change(function(){
		$('#ok').load('getqinfo.php',{limitVal: document.getElementById('perpage').value , sub: document.getElementById('sub').value});

		  });
		  
		  $('#sub').change(function(){
        $('#ok').load('getqinfo.php',{limitVal: document.getElementById('perpage').value , sub: document.getElementById('sub').value});

		  });
		  
		  $('#delete').click(function(){
        if(document.getElementById('vd').value != ""){
			 $('#ok').load('getqinfo.php',{sub: document.getElementById('sub').value , id: document.getElementById('vd').value });
		}
		  });
		  
		   $('#modify').click(function(){
        if(document.getElementById('vd').value != ""){
			location.href = "modques.php?sub="+ document.getElementById('sub').value +"&id="+ document.getElementById('vd').value;
		}
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
		 <input type="text" name="search" id="searchBox" value="" placeholder="Search by provider name...">

			<select name="perpage" id="perpage">
			<option value="10">Show 10 Question per page</option>
			<option value="25">Show 25 Question per page</option>
			<option value="50">Show 50 Question per page</option>
			</select>
			
			<select name="sub" id="sub">
			<option value="cs">Computer Science</option>
			<option value="mh">Modern History</option>
			<option value="mp">Math and Physics</option>
			<option value="gk">General Knowledge</option>
			</select>
		
		
		
		
		
		<div align="center" id="ok" >
		 
		 <?php
			echo "<table>
			<tr>
			<th>Id</th>
			<th>Question</th>
			<th>Option 1</th>
			<th>Option 2</th>
			<th>Option 3</th>
			<th>Option 4</th>
			<th>Answer</th>
			<th>Difficulty</th>
			<th>Add by</th>
			</tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['ques'] . "</td>";
				echo "<td>" . $row['opt1'] . "</td>";
				echo "<td>" . $row['opt2'] . "</td>";
				echo "<td>" . $row['opt3'] . "</td>";
				echo "<td>" . $row['opt4'] . "</td>";
				echo "<td>" . $row['ans'] . "</td>";
				echo "<td>" . $row['dif'] . "</td>";
				echo "<td>" . $row['addby'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";

		?>
		 
		</div>
		<button class="btnpg" type="button" name="btnPrev" id="prevBtn">Previous</button>
		<button class="btnpg" type="button" name="btnNext" id="nextBtn">Next</button>
		
		<br> <br>
		<input type="text" name="vd" id="vd" value="" placeholder="Type id to Delete">
		<button type="button" name="delete"  id="delete" value="delete"  style="background-color:red;" >Delete</button>
		<button type="button" name="modify"  id="modify" value="modify"  style="" >Modify</button>

		<br> <br>
		<label style="color:green"><?php echo $ko; ?> </label>
		</div>
		</div>
		
		<footer>
			<p>RWST reserve the right &copy; 2020</p>
		</footer>
	</body>

</html>	