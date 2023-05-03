	<header>
		<a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
			<h1 class="logo-text"><span>Our</span>Story</h1>
		</a>
		<i class="fa fa-bars toggle"></i>
		<ul class="nav">
			<?php if (isset($_SESSION['id'])): ?> 
			<li>
				<a href="#">
					<i class="fa fa-user"></i>
					<?php echo $_SESSION['username']; ?>
				<i class="fa fa-chevron-down" style="font-size: .8em"></i>
			</a>
			<?php endif ?>
				<ul>
					<li><a href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a></li>
				</ul>
			</li>
			
		</ul>
	</header>