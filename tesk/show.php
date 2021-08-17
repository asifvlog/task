<?php
error_reporting(E_ALL &~ E_NOTICE); 
include"conn.php";

// if($_GET['msg'])
// {
// 	$msg=$_GET['msg'];
// 	echo"<font size=6 color=green>$msg</font>";
// }
?>
<!DOCTYPE html>
<html lang=en-US>
<head>
	<meta charset="utf-8">
	<title>Show database content</title>
</head>
<body>
	<center>
		<table border="1">
			<form action="">
				<tr>
					<th>Sr no.</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>EMAIL ID</th>
					<th>DATE OF BIRTH</th>
					<th>PHONE</th>
					<th>DESIGNATION</th>
					<th>GENDER</th>
					<th>HOBBY</th>
				</tr>

				<?php 
					$n = 1;
					$res = mysqli_query($conn,"SELECT * FROM `user_info`");
					while($row=mysqli_fetch_array($res))
					{
				?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $row['first_name']?></td>
						<td><?php echo $row['last_name']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['dob']?></td>
						<td><?php echo $row['phone']?></td>
						<td><?php echo $row['designation']?></td>
						<td><?php echo $row['gender']?></td>
						<td><?php echo $row['hobby']?></td>
					</tr>

					<?php
					$n++;
					}	
					?>
			</form>
		</table>
	</center>
</body>
<a href="form.php"><h1>Form Page</h1></a>
</html>