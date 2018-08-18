<!DOCTYPE html>
<html>
	<head>
		<title>Chez Fitche</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>

	<body>
		<h1>Chez Fitche</h1>


		<nav>
			<a id="accueil" href="index.php">Accueil</a>

			<ul>
				<?php
					$index = simplexml_load_file("index.xml");
					$itemNumber = $index->File1->count();
					foreach (scandir('Categories/') as $element1)
					{
						if($element1[0] === ".")
						{
							continue;
						}
						if (is_dir('Categories/'.$element1))
						{	
							echo '<li>'.$element1.'</li>';
							echo "\n";
							echo '<ul>';
							echo "\n";
							foreach (scandir('Categories/'.$element1) as $element2)
							{
								if($element2[0] === ".")
								{
									continue;
								}
								echo '<li>'.$element2.'</li>';
								echo "\n";
							}
							echo '</ul>';
						}
						else
						{
							echo '<li>'.$element1.'</li>';
							echo "\n";
						}
					}
				?>
			</ul>
		</nav>

		<section id="blog">
			<h2>blog 1</h2>
			<p>bla àéè bla bla...<br/>et bla!<br/><br/><br/><br/><br/><br/></p>
		</section>

	</body>
</html>
