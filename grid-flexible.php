<?php include('inc/_header.php'); ?>

	<h1>Flexible Grid</h1>

	<p><a href="http://caniuse.com/#search=flexbox" target="_blank">Browsers support</a>: Modern browsers and IE12+</p>

	<div class="fx-grid">
		<div class="fx-box-1 fx-p-a fx-demo">.fx-box-1 - 1/4 = 25%<br> .fx-p-a - adds inner padding</div>
		<div class="fx-box-2 fx-p-a fx-demo">.fx-box-2 - 2/4 = 50%</div>
		<div class="fx-box-1 fx-p-a fx-demo">.fx-box-1 - 1/4 = 25%</div>
	</div>
	
	<h2>Grid vertical alignment</h2>
	
	<div class="fx-grid">
		<div class="fx-box-1 fx-p-a fx-demo">
			A lot of text<br>A lot of text<br>A lot of text<br>
			A lot of text<br>A lot of text<br>A lot of text<br>
		</div>
		<div class="fx-box-1 fx-box-align-top fx-p-a fx-demo">.fx-box-align-top - align to top</div>
		<div class="fx-box-1 fx-box-align-middle fx-p-a fx-demo">.fx-box-align-middle - align to middle</div>
		<div class="fx-box-1 fx-box-align-bottom fx-p-a fx-demo">.fx-box-align-bottom - align to bottom</div>
		<div class="fx-box-1 fx-p-a fx-demo">1 line of text</div>
	</div>

<?php include('inc/_footer.php'); ?>