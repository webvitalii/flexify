<?php include('inc/_header.php'); ?>

	<h1>Flexible Grid</h1>

	<p><a href="//caniuse.com/#search=flexbox" target="_blank">Browsers support</a>: Modern browsers and IE12+</p>

	<p>Grid with equal height columns. Pure CSS, no JavaScript used.</p>
	
	<div class="fx-grid">
		<div class="fx-box-3 fx-padding-all fx-demo">.fx-box-3 - 3/12 = 25%<br> .fx-padding-all - adds inner padding</div>
		<div class="fx-box-6 fx-padding-all fx-demo">.fx-box-6 - 6/12 = 50%</div>
		<div class="fx-box-3 fx-padding-all fx-demo">.fx-box-3 - 3/12 = 25%</div>
	</div>
	
	<h2>Grid vertical alignment. Pure CSS, no JavaScript used.</h2>
	
	<div class="fx-grid">
		<div class="fx-box-4 fx-padding-all fx-demo">
			A lot of text<br>A lot of text<br>A lot of text<br>
			A lot of text<br>A lot of text<br>A lot of text<br>
		</div>
		<div class="fx-box-2 fx-box-align-top fx-padding-all fx-demo">.fx-box-align-top - align to top</div>
		<div class="fx-box-2 fx-box-align-middle fx-padding-all fx-demo">.fx-box-align-middle - align to middle</div>
		<div class="fx-box-2 fx-box-align-bottom fx-padding-all fx-demo">.fx-box-align-bottom - align to bottom</div>
		<div class="fx-box-2 fx-padding-all fx-demo">1 line of text</div>
	</div>

<?php include('inc/_footer.php'); ?>