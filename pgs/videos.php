<?php include "entete.php" ?>
<body>
	<?php
		include "menu.php";
		$video = isset($_GET['video']) ? $_GET['video'] : 1;
	?>
    <section class="videos lecteur content">
    	<div id="content">
    		<h1>Les vidéos<span id="title_line"></span></h1>
			<?php switch($video):
			case 1: ?>
				<div class="lecteur-vimeo">
					<iframe src="//player.vimeo.com/video/119041506" width="800" height="450"
						frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="colg">
					<span class="date-video"> <br> <br> 08/02/2015</span>
					<br/>
					<span class="duree-video">3:23</span>
					<br/>
					<span class="copyright-video">Vidéo réalisée par © Pierre Duyckaerts </span>
				</div>
				<div class="cold">
					<h4> <br> <br> Felicia Simion - Jeune Talent 2014</h4>
					<p> Prix Jeunes talents 2014, elle présente sa démarche artistique 
                       à travers la série exposée pendant le salon <em>The Playground.</em><br/> 
                       <br/> Photographe de 20 ans d'origine roumaine.
					</p>
					
				</div>
			<?php break; case 2: ?>
				<div class="lecteur-vimeo">
					<iframe src="//player.vimeo.com/video/118998369" width="800" height="450"
						frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="colg">
					<span class="date-video"> <br> <br> 08/02/2015</span>
					<br/>
					<span class="duree-video">3:03</span>
					<br/>
					<span class="copyright-video">Vidéo réalisée par © Pierre Duyckaerts</span>
				</div>
				<div class="cold">
					<h4> <br> <br> Igor Chekachkov - Jeune Talent 2014</h4>
					<p>                  
                        Prix Jeunes talents 2014, il présente sa démarche artistique 
                       à travers la série exposée pendant le salon <em>Daily Lives.</em> <br/> 
                       
                      <br/> Igor Chekachkov est né en 1989 à Kharkiv en Ukraine.
                       
					</p>
				
				</div>
			<?php break; case 3: ?>
				<div class="lecteur-vimeo">
					<iframe src="//player.vimeo.com/video/31378272?portrait=0" width="940" height="528"
						frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="colg">
					<span class="date-video">29/10/14</span>
					<br/>
					<span class="duree-video">3:19</span>
					<br/>
					<span class="copyright-video">Vidéo réalisée par © XXX</span>
				</div>
				<div class="cold">
					<h4>Video 3</h4>
					<p>
						Praesent suscipit at nisi vel rutrum. Phasellus vitae viverra
						lorem, ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget. Vestibulum mollis, mi ut vulputate aucto,
						ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget. Vestibulum mollis, mi ut vulputate aucto.
					</p>
					<p>
						Praesent suscipit at nisi vel rutrum. Phasellus vitae viverra
						lorem, ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget.
					</p>
				</div>
			<?php break; case 4: ?>
				<div class="lecteur-vimeo">
					<iframe src="//player.vimeo.com/video/31378272?portrait=0" width="940" height="528"
						frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="colg">
					<span class="date-video">29/10/14</span>
					<br/>
					<span class="duree-video">3:19</span>
					<br/>
					<span class="copyright-video">Vidéo réalisée par © XXX</span>
				</div>
				<div class="cold">
					<h4>Video 4</h4>
					<p>
						Praesent suscipit at nisi vel rutrum. Phasellus vitae viverra
						lorem, ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget. Vestibulum mollis, mi ut vulputate aucto,
						ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget. Vestibulum mollis, mi ut vulputate aucto.
					</p>
					<p>
						Praesent suscipit at nisi vel rutrum. Phasellus vitae viverra
						lorem, ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget.
					</p>
				</div>
			<?php break; case 5: ?>
				<div class="lecteur-vimeo">
					<iframe src="//player.vimeo.com/video/31378272?portrait=0" width="940" height="528"
						frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="colg">
					<span class="date-video">29/10/14</span>
					<br/>
					<span class="duree-video">3:19</span>
					<br/>
					<span class="copyright-video">Vidéo réalisée par © XXX</span>
				</div>
				<div class="cold">
					<h4>Video 5</h4>
					<p>
						Praesent suscipit at nisi vel rutrum. Phasellus vitae viverra
						lorem, ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget. Vestibulum mollis, mi ut vulputate aucto,
						ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget. Vestibulum mollis, mi ut vulputate aucto.
					</p>
					<p>
						Praesent suscipit at nisi vel rutrum. Phasellus vitae viverra
						lorem, ac euismod leo. Duis imperdiet arcu orci, non blandit
						arcu sagittis eget.
					</p>
				</div>
			<?php endswitch; ?>
			<br class="clear" />
        </div>
    </section>
	<section class="videos toutes content">
    	<div id="content">
    		<h3>Toutes les vidéos</h3>
    		<span id="title_line_h3"></span>
			<div id="container-videos">
				<div class="video-bloc" data-idx="1">
					<a href="videos.php?video=1">
						<img src="../img/videos/felicia_simion.jpg" class="video-miniature" />
						<h4>Interview</h4>
						<p>
							Rencontre avec Felicia Simon qui présente sa
							démarche artistique..
						</p>
					</a>
				</div>
				<div class="video-bloc central" data-idx="2">
					<a href="videos.php?video=2">
						<img src="../img/videos/igor_chekachkov.jpg" class="video-miniature" />
						<h4>Interview</h4>
						<p>
							Rencontre avec Igor Chekachkov qui présente sa
							démarche artistique.
						</p>
					</a>
				</div>
				<!--<div class="video-bloc" data-idx="3">
					<a href="videos.php?video=3">
						<img src="../img/videos/video_3.jpg" class="video-miniature" />
						<h4>Le point de vue du jury</h4>
						<p>
							Membre du jury en 2014.
						</p>
					</a>
				</div>
				<br class="clear" />
				<div class="video-bloc" data-idx="4">
					<a href="videos.php?video=4">
						<img src="../img/videos/video_4.jpg" class="video-miniature" />
						<h4>Rencontre</h4>
						<p>
							Bob Wolfenson présente sa dernière série
							<span class="italique">Brazilia</span> qu'il a
							réalisée en 2013.
						</p>
					</a>
				</div>
				<div class="video-bloc central" data-idx="5">
					<a href="videos.php?video=5">
						<img src="../img/videos/video_5.jpg" class="video-miniature" />
						<h4>Portrait</h4>
						<p>
							Rencontre avec Felicia Simon qui présente sa
							démarche artistique.
						</p>
					</a>
				</div>-->
			</div>
			<br class="clear" />
		</div>
	</section>
	<section class="videos aller-plus-loin content">
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
					<a href="le_prix_photo.php?annee=2014">
						<img src="../img/allerplusloin/prix_photo.png" class="video-miniature" />
						<h4>Les Prix Photo 2014</h4>
						<p>
							En 2014, les Prix Photo ont été attribués à Mateusz
							Sarello, Andrejs Strokins, Eleonora...
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
