<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-skills.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Skills</a>

				<h1>Skills</h1>
				<p>This table includes <?php echo counting("skills", "id");?> skills.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Level</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$skills = getAll("skills");
				if($skills) foreach ($skills as $skillss):
					?>
					<tr>
		<td><?php echo $skillss['id']?></td>
		<td><?php echo $skillss['name']?></td>
		<td><?php echo $skillss['level']?></td>


						<td><a href="edit-skills.php?act=edit&id=<?php echo $skillss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $skillss['id']?>&cat=skills" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				