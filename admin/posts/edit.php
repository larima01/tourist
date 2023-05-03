<?php include('../../path.php')?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="../../assests/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assests/css/admin.css">
	<link rel="stylesheet" type="text/css" href="../../assests/css/query.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
	<title>Admin Section - Edit Post</title>
</head>
<body>
	<!--Navigation Start -->
	<?php include(ROOT_PATH . "/app/includes/adminNav.php") ?>
	<!--Navigation Close -->

	<!-- Admin Page Container -->
		<div class="admin-page">
			<!-- Admin Sidebar -->
			<?php include(ROOT_PATH . "/app/includes/sidebar.php") ?>
			<!-- Close Admin Sidebar -->
		
			<!-- Admin Content -->
			<div class="admin-content">
				<div class="button-group">
					<a href="create.php" class="btn btn-big">Add Post</a>
					<a href="index.php" class="btn btn-big">Manage Posts</a>
				</div>

				<div class="content">
					<h2 class="page-title">Edit Posts</h2>
					<?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
					<form action="edit.php" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $id; ?>" >
						<div>
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
						</div>
						<div>
							<label>Body</label>
							<textarea type="text" name="body" id="body" rows="4" class="text-input"><?php echo $body ?></textarea>
						</div>
						<div>
							<label>Image</label>
							<input type="file" name="image" class="text-input">
						</div>
							<div>
								<label>Topic</label>
								<select name="topic_id" class="text-input">
									<option value=""></option>
									<?php foreach ($topics as $key => $topic): ?>
										<?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
										<option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
										<?php else: ?>
											<option value="<?php echo $topic['id']; ?>">
											<?php echo $topic['name']; ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<div>
							<?php if(empty($published) && $published == 0): ?>
								<label>
									<input type="checkbox" name="published">
									Publish
								</label>
								<?php else: ?>
									<label>
									<input type="checkbox" name="published" checked>
									Publish
								</label>
							<?php endif; ?>
							</div>
							<div>
								<button type="submit" name="update-post" class="btn btn-big">Update Post</button>
							</div>
					</form>
				</div>
			</div>


			<!-- Close Admin Content -->
		</div>

	<!-- End of Admin Page Container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script type="text/javascript" src="../../assests/js/script.js"></script>
</body>
</html>