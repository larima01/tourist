<?php include("../../path.php"); ?> 
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
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
	<title>Admin Section - EDit Topic</title>
</head>
<body>
	<!--Navigation Start -->
<?php include(ROOT_PATH . "/app/includes/adminNav.php"); ?>
	<!--Navigation Close -->

	<!-- Admin Page Container -->
		<div class="admin-page">
			<!-- Admin Sidebar -->
			<?php include(ROOT_PATH . "/app/includes/sidebar.php") ?>
			<!-- Close Admin Sidebar -->
		
			<!-- Admin Content -->
			<div class="admin-content">
				<div class="button-group">
					<a href="create.php" class="btn btn-big">Add Topic</a>
					<a href="index.php" class="btn btn-big">Manage Topics</a>
				</div>

				<div class="content">
					<h2 class="page-title">Edit Topic</h2>
					<?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
					<form action="edit.php" method="post">
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<div>
							<label>Name</label>
							<input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
						</div>
						<div>
							<label>Description</label>
							<textarea type="text" name="description" id="body" rows="4" class="text-input"><?php echo $description; ?></textarea>
							<!-- <textarea id="body" name="description"><?php echo $description; ?></textarea> -->
						</div>
							<div>
								<button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
							</div>
					</form>
				</div>
			</div>


			<!-- Close Admin Content -->
		</div>

	<!-- End of Admin Page Container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
</body>
</html>