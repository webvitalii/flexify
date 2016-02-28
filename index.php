<?php include('inc/_header.php'); ?>

<?php include('inc/_menu.php'); ?>

	<h1>Flexify frontend framework</h1>

	<p>Flexify is a responsive and flexible css-framework.</p>

	<h2>Flexify features:</h2>

	<ul>
		<li>normalized initial styles for all elements</li>
		<li>Bootstrap-like grid (12 columns, responsive, 5 breakpoints)</li>
		<li>responsive dropdown menu</li>
		<li>columns helper classes</li>
		<li>padding and margin helper classes</li>
	</ul>

	<h3>Breakpoints:</h3>

	<p>-xs- [544px] -sm- [768px] -md- [992px] -lg- [1200px] -xl-</p>


	<p>You need to include flexify.css file into page and add .fx-wrap class to the body element.</p>

	<p>All class-names have fx- prefix and it is safe to use Flexify framework with other frameworks on the same page.</p>

	<h3>Grid</h3>

	<div class="fx-row">
		<div class="fx-col-3 fx-p-a fx-demo">.fx-col-3 - 3/12 = 25%<br> .fx-p-a - adds inner padding</div>
		<div class="fx-col-6 fx-p-a fx-demo">.fx-col-6 - 6/12 = 50%</div>
		<div class="fx-col-3 fx-p-a fx-demo">.fx-col-3 - 3/12 = 25%</div>
	</div>

	<h3>Grid - responsive</h3>

	<p><a href="http://caniuse.com/#feat=css-mediaqueries" target="_blank">Browsers support</a>: Modern browsers and IE9+</p>

	<div class="fx-row">
		<div class="fx-col-sm-3 fx-col-xs-2 fx-col-xl-5 fx-p-a fx-demo">.fx-col-sm-3 .fx-col-xs-2 .fx-col-xl-5<br> .fx-p-a - adds inner padding</div>
		<div class="fx-col-sm-6 fx-col-xs-2 fx-col-xl-5 fx-p-a fx-demo">.fx-col-sm-6 .fx-col-xs-2 .fx-col-xl-5</div>
		<div class="fx-col-sm-3 fx-col-xs-8 fx-col-xl-2 fx-p-a fx-demo">.fx-col-sm-3 .fx-col-xs-8 .fx-col-xl-2</div>
	</div>

	<h3>Flexible Grid</h3>

	<p><a href="http://caniuse.com/#search=flexbox" target="_blank">Browsers support</a>: Modern browsers and IE12+</p>

	<div class="fx-grid">
		<div class="fx-box-1 fx-p-a fx-demo">.fx-box-1 - 1/4 = 25%<br> .fx-p-a - adds inner padding</div>
		<div class="fx-box-2 fx-p-a fx-demo">.fx-box-2 - 2/4 = 50%;</div>
		<div class="fx-box-1 fx-p-a fx-demo">.fx-box-1 - 1/4 = 25%</div>
	</div>

<?php include('inc/_footer.php'); ?>