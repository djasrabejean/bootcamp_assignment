<?php if (isset($_SESSION['success'])) : ?>
	<div class="alert alert-success"  role="alert">
		<h3 style="font-size:15px">
			<?php 
				echo $_SESSION['success']; 
				unset($_SESSION['success']);
			?>
		</h3>
	</div>
<?php endif ?>
