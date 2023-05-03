<?php 
	include("path.php");
	include(ROOT_PATH . "/app/controllers/topics.php");

	$posts = array();
	$postsTitle = 'Recent Posts';

	if (isset($_GET['t_id'])) {
		$posts = getPostsByTopicId($_GET['t_id']);
		$postsTitle = "You searched for story under '" . $_GET['name'] . "'";
	} else if (isset($_POST['search-story'])) {
		$postsTitle = "You searched for '" . $_POST['search-story'] . "'";
	 	$posts = searchPosts($_POST['search-story']);
	 } else{
	 	$posts = getPublishedPosts();
	 }

	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assests/css/style.css">
	<link rel="stylesheet" type="text/css" href="assests/css/query.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
	<title>Story</title>
</head>
<body>
	<!--Navigation Start -->
	<?php include(ROOT_PATH . "/app/includes/header.php") ?>
	<?php include(ROOT_PATH . "/app/includes/messages.php") ?>
	<!--Navigation Close -->
	
	<!-- Page Container -->
	<div class="page-container">
			<!--Trading Story Start -->
		<div class="story-slider">
				<h1 class="slider-title">Trading Story</h1>
				<i class="fa fa-chevron-left prev"></i>
				<i class="fa fa-chevron-right next"></i>
			<div class="story-wrapper">
				<?php foreach ($posts as $key => $post): ?>
					<div class="story">
							<img src="<?php echo BASE_URL . '/assests/images/' . $post['image'] ?>" class="story-image">
						<div class="story-info">
								<h4>
									<a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
								</h4>
								<i class="fa fa-user"><?php echo $post['username'] ?></i>
											&nbsp;
								<i class="fa-regular fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?> </i>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>

				<!--Trading Story End -->

			<!--Recent Story Start -->
		<div class="content clearfix">
			
			<div class="main-content">
				<h1 class="recent-story-title"><?php echo $postsTitle ?></h1>
				<div class="story clearfix">
					<?php foreach ($posts as $key => $post): ?>
						<div class="story">
							<img src="<?php echo BASE_URL . '/assests/images/' . $post['image'] ?>" class="story-image">
							<div class="story-preview">
							<h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
							<i class="fa fa-user"><?php echo $post['username'] ?></i>
											&nbsp;
							<i class="fa-regular fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?> </i>
							<p class="preview-text">
								<?php echo substr($post['body'], 0, 150) . '...'; ?>
							</p>
							<a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
						</div>
						</div>
					<?php endforeach ?>
				</div>

			</div>
		
			<div class="sidebar">
				<div class="section search">
					<h2 class="section-title">Search</h2>
					<form action="index.php" method="post">
						<input type="text" name="search-story" class="text-input" placeholder="Search...">
					</form>
				</div>

				<div class="section stories">
					<h2 class="section-title">Stories</h2>
					<ul>
						<?php foreach ($topics as $key => $topic): ?>

							<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
						<?php endforeach;?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- End Page Container -->
<?php include(ROOT_PATH . "/app/includes/footer.php") ?>
	<!--Footer Start -->
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script type="text/javascript" src="assests/js/script.js"></script>
</body>
</html>