<?php include "entete.php" ?>
<body>
	<?php
		$page = "equipe";
		include "menu.php"
	?>
    <section class="equipe-bandeau">
		<img src="../img/img_equipe.jpg" />
    </section>
    <section class="intro_equipe content">
		<div id="content">
            <div class="coll vide">
				<h1><?php trad("L'équipe", "The team") ?><span id="title_line"></span></h1>
            </div>
            <div class="coll text">
				<p class="police-serif">
					<span class="nom-membre">Christian Bedu</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Président de l'association Images Humaines", "President of association Images Humaines"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Nathalie Roudière</span>
					<br/>
					<span class="fonction-membre">
						Coordination
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Raed Bawayah</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Directeur artistique", "Artistic director"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Géraldine Rippert</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Responsable des partenariats", "Direction of partnerships"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Albena Gadjanova</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Chargée des partenariats", "In charge of partnerships"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Maud Schweblin</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Responsable de la communication", "Direction of communication"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Myriam Lefebvre</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Chargée des photographes", "In charge of photographers"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Caroline Impergre</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Responsable pédagogique des ateliers pour enfants", "Educational direction of children workshop"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Aurélien Bassemayousse</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Conception graphique", "Graphical conception"); ?>
					</span>
					<br class="separateur"/>
					<span class="nom-membre">Mathias Chouet</span>
					<br/>
					<span class="fonction-membre">
						<?php echo trad("Développeur", "Website developer"); ?>
					</span>
				</p>
            </div>
        </div>
    </section>
    <section class="equipe aller-plus-loin content">
    	<div id="content">
    		<h3>Pour aller plus loin</h3>
    		<span id="title_line_h3"></span>
			<div id="container-liens">
				<div class="lien-bloc">
					<a href="actualites.php?annee=2015&nolimit#actu-21">
						<img src="../img/allerplusloin/bresil_invite_honneur.jpg" class="video-miniature" />
						<h4>Brésil, invité d'honneur</h4>
						<p>
							En 2014, le Brésil était invité d'honneur.
							Retrouvez tous les artistes qui ont participé.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<div class="lien-bloc">
					<a href="actualites.php?annee=2015&nolimit#actu-27">
						<img src="../img/allerplusloin/camille_lepage.png" class="video-miniature" />
						<h4>Camille Lepage</h4>
						<p>
							En 2014, La Quatrième Image rendait hommage à la photojournaliste.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<div class="lien-bloc">
					<a href="les_jeunes_talents.php?annee=2014">
						<img src="../img/allerplusloin/jeunes_talents.png" class="video-miniature" />
						<h4>Jeunes talents 2014</h4>
						<p>
							Création du prix Jeunes Talents qui met à l'honneur
							de jeunes photographes.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<div class="lien-bloc">
					<a href="lecture_portfolios.php">
						<img src="../img/allerplusloin/portfolio.png" class="video-miniature" />
						<h4>Lectures de Portfolio</h4>
						<p>
							Présenter vos projets photographiques, ces rencontres sont gratuites.
						</p>
						<p class="savoir-plus">En savoir plus</p>
					</a>
				</div>
				<br class="clear" />
			</div>
    	</div>
    </section>
    <?php include "pied.php" ?>
    
    
    
       <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59936821-1', 'auto');
  ga('send', 'pageview');

</script>
    
    
    
</body>
</html>
