<?php include('inc/_header.php'); ?>

	<h1>Forms</h1>
	
	<h2>Form inputs</h2>
	
	<p>Default text input: <input type="text" value="text input" /></p>
	
	<p>Text input with class .fx-form-control: <input type="text" class="fx-form-control" value="text input" /></p>
	
	<p>Disabled text input with class .fx-form-control: <input type="text" class="fx-form-control" value="disabled input" disabled="disabled" /></p>
	
	<p>Dropdown/Select: 
		<select>
			<option value="1">Option 1</option>
			<option value="2">Option 2</option>
			<option value="3">Option 3</option>
		</select>
	</p>
	
	<p>Checkboxes:
		<label><input type="checkbox" name="checkbox1" value="1" checked="checked" /> 1</label>
		<label><input type="checkbox" name="checkbox2" value="1" /> 2</label>
	</p>
	
	<p>Radio buttons:
		<label><input type="radio" name="radio" value="1" checked="checked" /> 1</label>
		<label><input type="radio" name="radio" value="2" /> 2</label>
	</p>
	
	<p>Textarea:</p>
	
	<p><textarea>Textarea</textarea></p>
	
	<h2>Form buttons</h2>

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
	
	<p>
		Block buttons:
		<button class="fx-btn fx-btn-primary fx-btn-block fx-margin-bottom">button + .fx-btn + .fx-btn-primary + .fx-btn-block</button>
		<button class="fx-btn fx-btn-success fx-btn-block fx-margin-bottom">button + .fx-btn + .fx-btn-success + .fx-btn-block</button>
		<button class="fx-btn fx-btn-danger fx-btn-block fx-margin-bottom">button + .fx-btn + .fx-btn-danger + .fx-btn-block</button>
	</p>


<?php include('inc/_footer.php'); ?>