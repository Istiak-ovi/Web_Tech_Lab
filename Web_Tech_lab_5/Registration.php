<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<h1>Welcome To Registration</h1>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name" value="<?php echo $name; ?>"><?php echo $err_name; ?></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="userName" value="<?php echo $user_name; ?>"><?php echo $err_user_name; ?></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="confirmPassword" value="<?php echo $password; ?>"><?php echo $err_confirm_password; ?></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td>
							<input type="text" placeholder="code" size="3" name="code" value="<?php echo $phone_code; ?>"> - <input type="text" placeholder="Number" size="11" name="number" value="<?php echo $phone_no ?>"><?php echo $err_phone; ?>
						</td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td>
							<input type="text" placeholder="Street Address" name="street" value="<?php echo $address_street; ?>"><?php echo $err_address; ?>
						</td>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="3" name="city" value="<?php echo $address_city; ?>"> - <input type="text" placeholder="State" size="11" name="state" value="<?php echo $address_state; ?>">
						</td>
				
				    </tr>
				</table>
			</fieldset>	
		</form>	
	</body>
</html>	