<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="admins.php">Admins</a></td>
					<td><?=counting("admins", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="messages.php">Messages</a></td>
					<td><?=counting("messages", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="skills.php">Skills</a></td>
					<td><?=counting("skills", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			