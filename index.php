<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<h1>Dans la cuisine de Poulou</h1>
		<nav>
			<li><a id="accueil" href="index.php">Accueil</a></li>
			<ul>
				<?php
					function buildNavFromFolder($root, $id, $backgroundColor)
					{
						if (count(scandir($root)) == 2)
						{ 
							echo '<li>(vide)</li>';
							echo "\n";
						}
						foreach (scandir($root) as $element)
						{
							if($element[0] === ".")
								continue;
							if (is_dir($root.$element))
							{
								if (!empty($_GET["page"]) && strpos($_GET["page"], $root.$element) === 0)
									$dirState = "openedDir";
								else
									$dirState = "closedDir";
								echo '<li class="dirName" id="folder_'.$id.'"><a title='.pathinfo($element, PATHINFO_FILENAME).' href="javascript:void(0)" onClick="showFolderContent(\''.$id.'\');">'.$element.'</a></li>';
								echo "\n";
								echo '<ul class="dir '.$backgroundColor.' '.$dirState.'" id="'.$id.'">';
								echo "\n";
								$id++;
								if ($backgroundColor == "fonce")
									$id = buildNavFromFolder($root.$element."/", $id, "clair");
								else
									$id = buildNavFromFolder($root.$element."/", $id, "fonce");
								echo '</ul>';
								echo "\n";
							}
							else
							{
								echo '<li><a href="index.php?page='.$root.$element.'" title="'.pathinfo($element, PATHINFO_FILENAME).'" >'.pathinfo($element, PATHINFO_FILENAME).'</a></li>';
								echo "\n";
							}
						}
						return $id;
					}
					$root = "Categories/";
					buildNavFromFolder($root, 0, "clair");
				?>
			</ul>
		</nav>
		<section id="blog">
			<?php
				if (empty($_GET["page"]))
					include "pages/accueil.html";
				elseif ($_GET["page"] === "test")
					include 'pages/test.html';
				elseif (!file_exists($_GET["page"]))
					include 'pages/404.html';
				else if (!strstr($_GET["page"], '../'))
					include $_GET["page"];
				else
					include 'pages/404.html';
			?>
		</section>
		<a id="topLink" href="javascript: void(0)" onClick="scrollUp();"><img id="imgUp" src="imgs/scrollUp.png" alt="Haut de page"/></a>
		<script src="js/jquery-3.6.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/nav.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/scrollUp.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
