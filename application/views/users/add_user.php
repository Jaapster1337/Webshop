<p><h3><?php echo $header; ?></h3></p>
	<form action='' method='post'>
<table>
	<tr>
			<td>Voornaam</td>
			<td><input type='text' name='firstname' /></td>
		</tr>
		<tr>
			<td>Tussenvoegsel</td>
			<td><input type='text' name='infix' /></td>
		</tr>
		<tr>
			<td>Achternaam</td>
			<td><input type='text' name='surname' /></td>
		</tr>
		<tr>
			<td>Emailadres</td>
			<td><input type='text' name='emailaddres' /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<td>gebruikersrol</td>
			<td>
				<select name='userrole'>
					<?php echo $userroles; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' /></td>
		</tr>
	</form>
</table>