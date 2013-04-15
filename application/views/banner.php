<script type='text/javascript'>
	$('document').ready(function(){
		$('button').click(function(){
			$('#dialogform').dialog('open');
		});
		
		$('#dialogform').dialog(
		{
			autoOpen:false,
			modal:true
		});
	});
</script>
<style>
h2
{
	border:0px solid black;
	display:inline;
}
button
{
	border:0px solid black;
	float:right;
}
</style>

<h2>Webshop</h2>	<button>Login</button>
<div id='dialogform'>
<table>
	<form action='../users/login' method='post' >
		<tr>
			<td>Gebruikersnaam</td>
			<td><input type='text' name='username' /></td>
		</tr>
		<tr>
			<td>Wachtwoord</td>
			<td><input type='password' name='password' /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' value='go!' /></td>
		</tr>	
	</form>
</table>
</div>