<?php include('inc/_header.php'); ?>

	<h1>Forms</h1>
	
	<h2>Form inputs</h2>
	
	<form>
		
		<p>Default text input: <input type="text" value="text input" /></p>
		
		<p>Text input with class .fx-form-control: <input type="text" class="fx-form-control" value="text input" /></p>
		
		<p>Disabled text input with class .fx-form-control: <input type="text" class="fx-form-control" value="disabled input" disabled="disabled" /></p>
		
	</form>
	
	<h2>Form buttons</h2>

	<form>
		<p>
			buttons:
			<button>button</button>
			<button class="fx-btn">button + .fx-btn</button>
		</p>
		<p>
			submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn" type="submit" value="submit + .fx-btn" />
		</p>
		<p>
			red buttons:
			<button>button</button>
			<button class="fx-btn fx-btn-red">button + .fx-btn + .fx-btn-red</button>
		</p>
		<p>
			red submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn fx-btn-red" type="submit" value="submit + .fx-btn + .fx-btn-red" />
		</p>
		<p>
			green buttons:
			<button>button</button>
			<button class="fx-btn fx-btn-green">button + .fx-btn + .fx-btn-green</button>
		</p>
		<p>
			green submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn fx-btn-green" type="submit" value="submit + .fx-btn + .fx-btn-green" />
		</p>
		<p>
			blue buttons:
			<button>button</button>
			<button class="fx-btn fx-btn-blue">button + .fx-btn + .fx-btn-blue</button>
		</p>
		<p>
			blue submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn fx-btn-blue" type="submit" value="submit + .fx-btn + .fx-btn-blue" />
		</p>
	</form>

<?php include('inc/_footer.php'); ?>