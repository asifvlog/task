<?php
error_reporting(E_ALL &~ E_NOTICE); 
include"conn.php";

if($_GET['msg'])
{
	$msg=$_GET['msg'];
	echo"<font size=6 color=green>$msg</font>";
}
?>

<!DOCTYPE html>
<html lang='en-US'>
<head>
	<meta charset="utf-8">
	<title>PHP TASK</title>
</head>
<body>	
<center><br>
	<table border="1" >
		<form method="post" action="insert.php" >
		<tr>
			<th>First Name:</th>
			<td><input type="text" name="first_name"></td>
		</tr>
		<tr>
			<th>Last Name:</th>
			<td><input type="text" name="last_name"></td>
		</tr>
		<tr>
			<th>EMAIL:</th>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<th>Date Of Birth:</th>
			<td><input type="date" name="dob"></td>
		</tr>
		<tr>
			<th>Telephone/Mobile:</th>
			<td><input type="tel" id="phone" name="phone" ></td>
		</tr>
		<tr>
			<th>Designation:</th>
			<td>
				<select name="designation" id="">
					<option selected>---Select Option---</option>
					<?php 
						$res1 = mysqli_query($conn,"SELECT * FROM `designation`");
						while($row1=mysqli_fetch_array($res1))
						{
							echo"<option value='$row1[designation]'>$row1[designation]</option>";
						}
					?>			
				</select>
			</td>
		</tr>
		
		<tr>
			<th>Gender:</th>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</td>
		</tr>

		<tr>
			<th>Hobbies</th>
			<td>
			<?php 
				$res2 = mysqli_query($conn,"SELECT * FROM `hobby`");
				while($row2 = mysqli_fetch_array($res2))
				{
					echo"<input type='checkbox' name='arry[]' value='$row2[hobby]'> $row2[hobby]";
				}
			?>
			</td>	
		</tr>

		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
		</form>
	</table>
</center>
</body>
<a href="show.php"><h1>Show All Data Page</h1></a>
</html>
