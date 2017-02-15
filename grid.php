<?php include('inc/_header.php'); ?>

	<h1>Grid</h1>
	
	<p><a href="//caniuse.com/#search=flexbox" target="_blank">Browsers support</a>: Modern browsers and IE12+</p>
	
	<p>Grid with equal height columns. Pure CSS, no JavaScript used.</p>
	
	<div class="fx-row">
		<div class="fx-col-3 fx-padding-all fx-demo">.fx-col-3 - 3/12 = 25%<br> .fx-padding-all - adds inner padding</div>
		<div class="fx-col-6 fx-padding-all fx-demo">.fx-col-6 - 6/12 = 50%</div>
		<div class="fx-col-3 fx-padding-all fx-demo">.fx-col-3 - 3/12 = 25%</div>
	</div>

	<h2>Grid - responsive</h2>

	<p><a href="//caniuse.com/#feat=css-mediaqueries" target="_blank">Browsers support</a>: Modern browsers and IE9+</p>

	<div class="fx-row">
		<div class="fx-col-sm-3 fx-col-2 fx-col-xl-5 fx-padding-all fx-demo">.fx-col-sm-3 .fx-col-2 .fx-col-xl-5<br> .fx-padding-all - adds inner padding</div>
		<div class="fx-col-sm-6 fx-col-2 fx-col-xl-5 fx-padding-all fx-demo">.fx-col-sm-6 .fx-col-2 .fx-col-xl-5</div>
		<div class="fx-col-sm-3 fx-col-8 fx-col-xl-2 fx-padding-all fx-demo">.fx-col-sm-3 .fx-col-8 .fx-col-xl-2</div>
	</div>
	
	<h2>Grid vertical alignment. Pure CSS, no JavaScript used.</h2>
	
	<div class="fx-row">
		<div class="fx-col-sm-4 fx-padding-all fx-demo">
			A lot of text<br>A lot of text<br>A lot of text<br>
			A lot of text<br>A lot of text<br>A lot of text<br>
		</div>
		<div class="fx-col-sm-2 fx-col-sm-align-top fx-padding-all fx-demo">.fx-col-sm-align-top - align to top</div>
		<div class="fx-col-sm-2 fx-col-sm-align-middle fx-padding-all fx-demo">.fx-col-sm-align-middle - align to middle</div>
		<div class="fx-col-sm-2 fx-col-sm-align-bottom fx-padding-all fx-demo">.fx-col-sm-align-bottom - align to bottom</div>
		<div class="fx-col-sm-2 fx-padding-all fx-demo">1 line of text</div>
	</div>
	
<?php include('inc/_footer.php'); ?>