<header>
	<?php if (! isset($page)) $page = null ?>
	<div id="barremenu">
		<div id="logo">
			<a href="../index.php">
				<img src="../img/logo/100x100.png" alt="La Quatrième Image" />
			</a>
		</div>
		<ul id="lang">
			<li><a href="?langue=en"<?php echo $langue == 'en' ? ' class="active"' : '' ?>>EN</a></li>
			<li class="sep">/</li>
			<li><a href="?langue=fr"<?php echo $langue == 'fr' ? ' class="active"' : '' ?>>FR</a></li>
		</ul>
		<nav>
		    <ul>
		        <li><a <?php echo ($page == "salon" ? 'class="active"' : '') ?> href="le_salon.php"><?php trad("Le salon", "Photo fair") ?></a></li>
		        <li><a <?php echo ($page == "participer" ? 'class="active"' : '') ?> href="participer.php"><?php trad("Participer", "Participate") ?></a></li>
		        <li><a class="<?php echo ($page == "exposants" ? 'active ' : '') ?>active-red" href="exposants.php"><?php trad("Les exposants", "Exhibitors") ?></a></li>
		        <li><a class="<?php echo ($page == "prix_photo" ? 'active ' : '') ?>active-blue" href="le_prix_photo.php"><?php trad("Le Prix Photo", "Photo Prizes") ?></a></li>
		        <li><a class="<?php echo ($page == "jeunes_talents" ? 'active ' : '') ?>active-yellow" href="les_jeunes_talents.php"><?php trad("Les Jeunes Talents", "Young talents") ?></a></li>
		        <li><a <?php echo ($page == "jury" ? 'class="active"' : '') ?> href="jury.php"><?php trad("Le jury", "Jury") ?></a></li>
		    </ul>
		</nav>
	</div>
</header>
