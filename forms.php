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
			Buttons:
			<button>button</button>
			<button class="fx-btn">button + .fx-btn</button>
		</p>
		<p>
			Submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn" type="submit" value="submit + .fx-btn" />
		</p>
		
		<p>
			Primary buttons:
			<button>button</button>
			<button class="fx-btn fx-btn-primary">button + .fx-btn + .fx-btn-primary</button>
		</p>
		<p>
			Primary submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn fx-btn-primary" type="submit" value="submit + .fx-btn + .fx-btn-primary" />
		</p>
		
		<p>
			Success buttons:
			<button>button</button>
			<button class="fx-btn fx-btn-success">button + .fx-btn + .fx-btn-success</button>
		</p>
		<p>
			Success submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn fx-btn-success" type="submit" value="submit + .fx-btn + .fx-btn-success" />
		</p>
		
		<p>
			Danger buttons:
			<button>button</button>
			<button class="fx-btn fx-btn-danger">button + .fx-btn + .fx-btn-danger</button>
		</p>
		<p>
			Danger submit inputs:
			<input type="submit" value="submit" />
			<input class="fx-btn fx-btn-danger" type="submit" value="submit + .fx-btn + .fx-btn-danger" />
		</p>

	</form>

<?php include('inc/_footer.php'); ?>