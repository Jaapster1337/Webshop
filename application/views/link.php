<div id='link'>
	<ul>
		<?php if ( isset($_SESSION['userrole'] ))
		{
			switch ($_SESSION['userrole'])
			{
				case "administrator":
					echo "<li><a href='../administrators/viewall'>Gebruikers</a></li>";
					echo "<li><a href='../administrators/add_user'>Add User</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
				break;
				case "root":
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
				break;
				case "customer":
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
					echo "<li><a href=''>---</a></li>";
				break;
			}
			echo "<li><a href='../users/logout'>Logout</a></li>";
		}
		else
		{
			echo "<li><a href=''>TODO1</a></li>";
			echo "<li><a href=''>TODO2</a></li>";
			echo "<li><a href=''>TODO3</a></li>";
			echo "<li><a href=''>TODO4</a></li>";
			echo "<li><a href=''>TODO5</a></li>";
		}
		?>
	</ul>
</div>