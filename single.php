<?php include("path.php")?>

<?php 
	include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
	$post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assests/css/style.css">
	<link rel="stylesheet" type="text/css" href="assests/css/query.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Lora">
	<title><?php echo $post['title']; ?></title>
</head>
<body>
	<!--Navigation Start -->
	<?php include(ROOT_PATH . "/app/includes/header.php") ?>
	<!--Navigation Close -->

	<!-- Page Container -->
		<div class="page-container">

		<!--Recent Story Start -->
		<div class="content clearfix">
			<div class="main-content-container">
				<div class="main-content single">
			<h1 class="post-title"><?php echo $post['title']; ?></h1>
			<div class="post-content">
				<?php echo html_entity_decode($post['body']); ?>
								
			</div>
			
		</div>
			</div>
		
		<div class="sidebar single">

			<div class="section popular">
				<h2>Popular</h2>
				<?php foreach ($posts as $p): ?>
				<div class="post clearfix">
					<img src="<?php echo BASE_URL . '/assests/images/' . $p['image']; ?>" all="">
					<a href="#" class="title"><h4><?php echo $p['title']; ?></h4></a>
				</div>
			<?php endforeach; ?>
			</div>
	
			<div class="section stories">
				<h2 class="section-title">Stories</h2>
				<ul>
					<?php foreach ($topics as $topic): ?>
					<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
		</div>
		</div>

	<!-- End Page Container -->

	<!--Footer Start -->
	<?php include(ROOT_PATH . "/app/includes/footer.php") ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>