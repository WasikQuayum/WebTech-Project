<?php
include '../include/dbconnect.php';
  session_start();
  
  $is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
  
  if($is_page_refreshed ) {
  echo "<script>
			alert('U Cant Refresh Quiz page.Going back in login page');
			window.location.href='login.php';
			</script>";
}


	if($_SESSION['goqp']!=0)
	{
		header("Location:home.php");
	}

if($_SESSION["gqdif"]=="easy"){
$q="select id from  ".$_SESSION["gchoice"]." where dif='0' ";
$result=mysqli_query($conn,$q);

}
else{
	if($_SESSION["gqdif"]=="hard"){
		$q="select id from ".$_SESSION["gchoice"]." where dif='1' ";
		$result=mysqli_query($conn,$q);
		
	}
	else{
		$q="select id from ".$_SESSION["gchoice"]." ";
		$result=mysqli_query($conn,$q);
	}
}

$id=array();
$i=0;
while($row = mysqli_fetch_assoc($result)){
	$id [$i] =$row["id"];
	$i++;
}

shuffle($id);
$ques=array();

for($x=0;$x<$_SESSION["gqnum"];$x++){
	$q="select * from  ".$_SESSION["gchoice"]." where id="."'".$id[$x]."'";
     $result=mysqli_query($conn,$q);
	$row = mysqli_fetch_assoc($result);
	$ques[$x]=array(
	"qs"  => $row['ques'],
	"opt1" =>$row['opt1'],
	"opt2" =>$row['opt2'],
	"opt3" =>$row['opt3'],
	"opt4" =>$row['opt4'],
	"ans" => $row['ans'],
	"ansid"=> $row["ansid"]
	);
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/style.css"></link>
  <title>Question Platform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

  
</head>



<body>




<div class="container">
  
  <h2 class="h">Fill all the Answer</h2>
 
  
<?php for($x=0;$x<$_SESSION["gqnum"];$x++)
{if(strlen($ques[$x]["ansid"])==1){?>
	
 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo $ques[$x]["qs"]?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="radio" id ="<?php echo ++$y?>" name="qid<?php echo $y?>" value= "<?php echo $ques[$x]["opt1"]?>" > &nbsp <?php echo $ques[$x]["opt1"]?></td>
      </tr>
      <tr>
        <td><input type="radio" id ="<?php echo $y?>" name="qid<?php echo $y?>" value="<?php echo $ques[$x]["opt2"]?>"> &nbsp <?php echo $ques[$x]["opt2"]?></td>
        
      </tr>
      <tr>
        <td><input type="radio" id ="<?php echo $y?>" name="qid<?php echo $y?>" value="<?php echo $ques[$x]["opt3"]?>"> &nbsp <?php echo $ques[$x]["opt3"]?></td>
        
      </tr>
	  
	  <tr>
        <td><input type="radio" id ="<?php echo $y?>" name="qid<?php echo $y?>" value="<?php echo $ques[$x]["opt4"]?>"> &nbsp <?php echo $ques[$x]["opt4"]?></td>
        
      </tr>
	  
	  
    </tbody>
	
  </table>
  <?php
  }
  else{
	  ?>
	   <table class="table table-bordered">
    <thead>
      <tr>
        <th><?php echo $ques[$x]["qs"]?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" id ="qid<?php echo ++$y.'1'?>" name="qid<?php echo $y.'1'?>" value= "<?php echo $ques[$x]["opt1"]?>" > &nbsp <?php echo $ques[$x]["opt1"]?></td>
      </tr>
      <tr>
        <td><input type="checkbox" id ="qid<?php echo $y.'2'?>" name="qid<?php echo $y.'2'?>" value="<?php echo $ques[$x]["opt2"]?>"> &nbsp <?php echo $ques[$x]["opt2"]?></td>
        
      </tr>
      <tr>
        <td><input type="checkbox" id ="qid<?php echo $y.'3'?>" name="qid<?php echo $y.'3'?>" value="<?php echo $ques[$x]["opt3"]?>"> &nbsp <?php echo $ques[$x]["opt3"]?></td>
        
      </tr>
	  
	  <tr>
        <td><input type="checkbox" id ="qid<?php echo $y.'4'?>" name="qid<?php echo $y.'4'?>" value="<?php echo $ques[$x]["opt4"]?>"> &nbsp <?php echo $ques[$x]["opt4"]?></td>
        
      </tr>
	  
	  
    </tbody>
	
  </table>
	  
	  
<?php  }
}
?> 
  

</div>

<div align="center">
	 <button name="a" class="btn btn-success" onclick="checkscore();">Submit</button>
</div>




<script>
	
		function checkscore(){
			
			var score=0;
			var num= <?php echo $_SESSION['gqnum']; ?>;
			var ansarray = <?php echo json_encode($ques); ?>;
	
		var flag=0;
		var wrong = [];
		var wrongans= [];
			
			var kk="";
			
			
		for(var  i=1;i<=num;i++){
			
				if(ansarray[i-1].ansid.length==1){
				flag=0;
				var radios = document.getElementsByName("qid"+i);

				for (var j= 0, length = radios.length; j < length; j++) {
					
				if (radios[j].checked) {
					if(radios[j].value==ansarray[i-1].ans)
					{
					 score++;
					 flag=1;
					}
					break;
					}
				}
						if(flag==0)
						{
								wrong[i-1]=ansarray[i-1].qs;
								wrongans[i-1]=ansarray[i-1].ans;
						}
			}
			
			else{
				flag=0;
				var al="";
				var x=true;
				for (var k=1; k < 5; k++) {
					x=document.getElementById("qid"+i+k).checked;
					if(x){
						al=al+k;
					}
				
				}
				if(al==ansarray[i-1].ansid){
					score++;
					flag=1;
				}
				if(flag==0)
						{
								wrong[i-1]=ansarray[i-1].qs;
								wrongans[i-1]=ansarray[i-1].ans;
						}
				
			}
			
		}
			
			
			localStorage.setItem('gwrong', JSON.stringify(wrong));
			localStorage.setItem('gwrongans', JSON.stringify(wrongans));

			
			
			location.href="gresult.php?gscore= "+score;
		}		
	
	</script>

</body>
</html>
