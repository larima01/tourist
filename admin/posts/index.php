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
	<title>Admin Section - Manage Post</title>
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
					<h2 class="page-title">Manage Posts</h2>
					<?php include(ROOT_PATH . "/app/includes/messages.php") ?>
					<table>
						<thead>
							<th>SN</th>
							<th>Title</th>
							<th>Author</th>
							<th colspan="3">Action</th>
						</thead>
						<tbody>
							<?php foreach ($posts as $key => $post): ?>
								<tr>
									<td><?php echo $key + 1; ?></td>
									<td><?php echo $post['title']; ?></td>
									<td>Amin</td>
									<td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
									<td><a href="index.php?del_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
										<?php if ($post['published']): ?>
										<td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
										<?php else: ?>
										<td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
									<?php endif; ?>
								</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script type="text/javascript" src="../../assests/js/script.js"></script>
</body>
</html>