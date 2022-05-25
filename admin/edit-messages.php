<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$messages = getById("messages", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Messages</legend>
						<input name="cat" type="hidden" value="messages">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$messages['name']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$messages['email']?>" /><br>
							
							<label>Subject</label>
							<input class="form-control" type="text" name="subject" value="<?=$messages['subject']?>" /><br>
							
							<label>Content</label>
							<textarea class="ckeditor form-control" name="content"><?=$messages['content']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				