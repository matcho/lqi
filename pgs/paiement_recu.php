<?php
	include "entete.php";
?>
<body>
    <header>
        <?php
            $choix = isset($_GET['choix']) ? $_GET['choix'] : null;
		?>
		<div id="barremenu">
            <div id="logo">
                    <img src="../img/logo/100x100.png" alt="La Quatrième Image" />
            </div>
        </div>
	</header>
    <section class="infodossier intro content">
        <div id="content">
			<h1>Paiement reçu<span id="title_line"></span></h1>
			<div id="paiement-recu">
				<div id="message">
					<div class="texte">Nous avons bien reçu votre paiement</div>
					<div class="texte">Vous allez recevoir un mail contenant un lien pour compléter votre dossier.</div>
					<a href="https://laquatriemeimage.com">
						Retourner sur le site La Quatrième Image
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php
		include "pied.php";
	?>
</body>
</html>