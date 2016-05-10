<?php include('inc/_header.php'); ?>

	<h1 class="fx-text-center">Flexify frontend framework</h1>

	<h3 class="fx-text-center">Responsive and flexible css-framework</h3>
	
	<div class="fx-grid">
		<div class="fx-box-1 fx-padding-all fx-text-center">
			<!-- <i class="ionicon ion-ios-monitor-outline fx-icon fx-icon-40"></i>-->
			<i class="ionicon ion-monitor fx-icon fx-icon-40"></i>
			<!-- <i class="ionicon ion-laptop fx-icon fx-icon-40"></i>-->
			<i class="ionicon ion-ipad fx-icon fx-icon-40"></i>
			<i class="ionicon ion-iphone fx-icon fx-icon-40"></i>
			<h3>Responsive: works on every device</h3>
		</div>
		<div class="fx-box-2 fx-padding-all fx-text-center">
			<i class="ionicon ion-social-html5 fx-icon fx-icon-40"></i>
			<i class="ionicon ion-social-css3 fx-icon fx-icon-40"></i>
			<i class="ionicon ion-social-chrome fx-icon fx-icon-40"></i>
			<h3>Uses latest web features and works in every modern browser</h3>
		</div>
		<div class="fx-box-1 fx-padding-all fx-text-center">
			<i class="ionicon ion-social-github fx-icon fx-icon-40"></i>
			<i class="ionicon ion-ios-speedometer fx-icon fx-icon-40"></i>
			<i class="ionicon ion-code fx-icon fx-icon-40"></i>
			<h3>Open-source, light and hack-free</h3>
		</div>
	</div><!-- .fx-grid -->
	
	
	<h2>Flexify features:</h2>

	<ul>
		<li>normalized initial styles for all elements</li>
		<li><a href="grid-flexible.php">Flexible Grid (powered by flexbox)</a></li>
		<li><a href="grid.php">Bootstrap-like grid (12 columns, responsive, 5 breakpoints)</a></li>
		<li><a href="menu.php">responsive dropdown CSS menu</a></li>
		<li><a href="columns.php">columns helper classes</a></li>
		<li><a href="helpers.php">text, padding and margin helper classes</a></li>
		<li>All class-names have fx- prefix and it is safe to use Flexify framework with other frameworks on the same page.</li>
	</ul>
	
	
	<h3>Breakpoints:</h3>

	<p>-xs- [544px] -sm- [768px] -md- [992px] -lg- [1200px] -xl-</p>
	
	
	<h3>Usage:</h3>
	
	<p>You need to include flexify.css file into page and add .fx-wrap class to the body element.</p>


<?php include('inc/_footer.php'); ?>