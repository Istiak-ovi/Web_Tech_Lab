<?php include_once "verify.php" ;?>
<html>
	<head></head>
	<body>
		
		<fieldset>  
		* Fields are required
			<form action="" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="login" value="login">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>