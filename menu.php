<?php include('inc/_header.php'); ?>

	<h1>Menu</h1>
	
	<p>CSS Dropdown menu with infinite depth nesting. Pure CSS, no JavaScript used.</p>
	
	<h3>Menu light. Classes: .fx-menu .fx-menu-light .fx-bg-gray-lightest</h3>
	
	<nav class="fx-menu fx-menu-light fx-bg-gray-lightest">
		<ul>
			<li><a href="index.php">Flexify</a></li>
			<li class="page_item_has_children"><a href="#">Docs</a>
				<ul>
					<li><a href="#">Grid</a></li>
					<li><a href="#">Grid</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
	<h3>Menu gray. Classes: .fx-menu .fx-menu-dark .fx-bg-gray</h3>
	
	<nav class="fx-menu fx-menu-dark fx-bg-gray">
		<ul>
			<li><a href="index.php">Flexify</a></li>
			<li class="page_item_has_children"><a href="#">Docs</a>
				<ul>
					<li><a href="#">Grid</a></li>
					<li><a href="#">Grid</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
	<h3>Menu dark. Classes: .fx-menu .fx-menu-dark .fx-bg-gray-darkest</h3>
	
	<nav class="fx-menu fx-menu-dark fx-bg-gray-darkest">
		<ul>
			<li><a href="index.php">Flexify</a></li>
			<li class="page_item_has_children"><a href="#">Docs</a>
				<ul>
					<li><a href="#">Grid</a></li>
					<li><a href="#">Grid</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	
<?php include('inc/_footer.php'); ?>