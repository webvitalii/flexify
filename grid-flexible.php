<?php include('inc/_header.php'); ?>

	<h1>Flexible Grid</h1>

	<p><a href="//caniuse.com/#search=flexbox" target="_blank">Browsers support</a>: Modern browsers and IE12+</p>

	<p>Grid with equal height columns. Pure CSS, no JavaScript used.</p>
	
	<div class="fx-grid">
		<div class="fx-box-sm-3 fx-padding-all fx-demo">.fx-box-sm-3 - 3/12 = 25%<br> .fx-padding-all - adds inner padding</div>
		<div class="fx-box-sm-6 fx-padding-all fx-demo">.fx-box-sm-6 - 6/12 = 50%</div>
		<div class="fx-box-sm-3 fx-padding-all fx-demo">.fx-box-sm-3 - 3/12 = 25%</div>
	</div>
	
	<h2>Grid vertical alignment. Pure CSS, no JavaScript used.</h2>
	
	<div class="fx-grid">
		<div class="fx-box-sm-4 fx-padding-all fx-demo">
			A lot of text<br>A lot of text<br>A lot of text<br>
			A lot of text<br>A lot of text<br>A lot of text<br>
		</div>
		<div class="fx-box-sm-2 fx-box-sm-align-top fx-padding-all fx-demo">.fx-box-sm-align-top - align to top</div>
		<div class="fx-box-sm-2 fx-box-sm-align-middle fx-padding-all fx-demo">.fx-box-sm-align-middle - align to middle</div>
		<div class="fx-box-sm-2 fx-box-sm-align-bottom fx-padding-all fx-demo">.fx-box-sm-align-bottom - align to bottom</div>
		<div class="fx-box-sm-2 fx-padding-all fx-demo">1 line of text</div>
	</div>

<?php include('inc/_footer.php'); ?>