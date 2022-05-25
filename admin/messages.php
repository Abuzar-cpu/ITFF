<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-messages.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Messages</a>

				<h1>Messages</h1>
				<p>This table includes <?php echo counting("messages", "id");?> messages.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Content</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$messages = getAll("messages");
				if($messages) foreach ($messages as $messagess):
					?>
					<tr>
		<td><?php echo $messagess['id']?></td>
		<td><?php echo $messagess['name']?></td>
		<td><?php echo $messagess['email']?></td>
		<td><?php echo $messagess['subject']?></td>
		<td><?php echo $messagess['content']?></td>


						<td><a href="edit-messages.php?act=edit&id=<?php echo $messagess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $messagess['id']?>&cat=messages" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				