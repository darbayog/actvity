<html>
<form  style="background-color:#ADD8E6;width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px; box-sizing: border-box;" class="form" role="form" autocomplete="off" id="formLogin" method="post" action = "php/login.php">
			<table>
				<tr>
					<td><label for="uname1">Username</label></td>
					<td><input style=" border: 1px solid;" type="text" name="uname" id="uname" class="form" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input style=" border: 1px solid;" type="password" id="pass" name = "pass" placeholder="" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input style="background-color:#45a049;color:white" type="submit" name="submit" value="Log in" id="btnLogin" title="Log in" />
					<input style="background-color:red;color:white" type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
			</table>
	</form>
</html>