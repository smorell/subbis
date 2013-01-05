<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Subbis - Das Subunternehmer Portal</title>
	<meta name="description" content="">
	<meta name="google-site-verification" content="IJStII1xwa1IM6k9cL9ELrR4BFSJ1XzIbCaeIyUgXLo" />

	<link href="http://fonts.googleapis.com/css?family=Viga|Indie+Flower|Oswald:400,300" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="http://lesscss.googlecode.com/files/less-1.0.30.min.js"></script>	<!-- CSS
  ================================================== -->
  	<link href="<?= base_url('/assets/front/css/base.css')?>" media="screen" rel="stylesheet" type="text/css" />
  	<link href="<?= base_url('/assets/front/css/prettyPhoto.css')?>" media="screen" rel="stylesheet" type="text/css" />
  	<link href="<?= base_url('/assets/front/css/grid.css')?>" media="screen" rel="stylesheet" type="text/css" />	
	<!-- Scripts
  ================================================== -->
  	<script src="<?= base_url('/assets/front/js/countdown.js')?>" type="text/javascript"></script>
  	<script src="<?= base_url('/assets/front/js/jquery.pagescroller.lite.js')?>" type="text/javascript"></script>
  	<script src="<?= base_url('/assets/front/js/jquery.prettyPhoto.js')?>" type="text/javascript"></script>
  	<script src="<?= base_url('/assets/front/js/custom.js')?>" type="text/javascript"></script>	
  	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?= base_url('/assets/img/favicon.ico')?>">

</head>
<body>

	<div id="nav" class="pageScrollerNav standardNav">
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
		</ul>
	</div><!-- END #nav .pageScrollerNav -->

	<header>
		<div class="container_12 section">
			<section class="grid_5">
				<h1><a href="#" id="logo"><img src="<?= base_url('assets/front/img/logo-1.png') ?>"/></a></h1>
				<img src="<?= base_url('assets/front/img/ipad.png') ?>" alt="" id="featured-ipad" />
			</section><!-- END .grid_5 -->
			<div class="grid_7">
				<div class="column">
					<div class="social-channels group">
						<span>folge uns jetzt schon auf</span>
						<ul>
							<li><a href="https://twitter.com/nimbleo" class="twitter" target="_blank">Follow Us on Twitter</a></li>
							<li><a href="#" class="facebook">Like Us on Facebook</a></li>
						</ul>
					</div><!-- END .social-channels -->
					<h2>Portal für Subunternehmer</h2>
					<p>Wir bauen das <strong>bundesweit größte Portal für Subunternehmer</strong>. <!--mit über 600.000 Unternehmen, die bereits in unserer Datenbank sind.--></p>
					<a href="#contact" class="button">Melde Dich jetzt kostenlos an.</a>
					<p></p>
					<p>Alles läuft auf Hochtouren - Wir starten in...</p>
					<ul id="countdown-timer">
						<li>
							<span class="days">00</span>
							<p class="timeRefDays">Tagen</p>
						</li>
						<li>
							<span class="hours">00</span>
							<p class="timeRefHours">Stunden</p>
						</li>
						<li>
							<span class="minutes">00</span>
							<p class="timeRefMinutes">Minuten</p>
						</li>
						<li>
							<span class="seconds">00</span>
							<p class="timeRefSeconds">Sekunden</p>
						</li>
					</ul><!-- END #countdown-timer -->

				</div><!-- END .column -->
			</div><!-- END .grid_7 -->
		</div><!-- END .container_12 -->
	</header><!-- END header -->

	<div id="main" class="container_12">

	<!--<section class="grid_12 section">
		<h2><span>Wie funktioniert subbis?</span></h2>
    	<hr />
        <p class="entry-text">Vertigo landing page delivers the leading design aesthetics and a simplified user experience. Loved by customers for its ease of use and elegance, Vertigo is the best and most professional way to <strong>catapult your featured application to the next level</strong>.</p>
        <div class="featured-item"><img src="<?= base_url('assets/front/img/ipad-iphone.png') ?>" alt=""></div>        
    </section><!-- END .grid_12 -->
    
    <section class="grid_12 section">
    	<h2 class="alignright">So funktioniert Subbis</h2>
    	<hr />
    	<div class="featured-video">
    		<embed width='958' height='570' flashvars='file=http://3.s3.envato.com/files/33204473/Whiteboard Scribing 540p Preview.flv&skin=http://videohive.net/video_player/modieus.zip&image=http://1.s3.envato.com/files/33204474/Whiteboard Scribing IMG Preview.jpg' wmode='transparent' src='http://videohive.net/video_player/player.swf' /> 
    	</div><!-- END .featured-video -->
    	<div class="callout group">
    		<div class="text-block">					
    			<h4>Jetzt anmelden und als Subunternehmer sofort Aufträge bekommen.</h4>
    			<p>Du kannst Dich jetzt bereits anmelden und schon morgen Deine ersten Aufträge erhalten.<br />
    				Und das Beste daran: Es ist <strong>kostenlos und unverbindlich</strong>!</p>
    			</div><!-- END .text-block -->
    			<a href="#contact" class="button">Jetzt Anmelden</a>
    		</div><!-- END .callout -->
    	</section><!-- END .grid_12 -->

    	<section class="grid_12 section">
    		<h2><span>Deine Vorteile</span></h2>
    		<hr />
    		<div class="features group">				
    			<div class="grid_6 omega alpha">
    				<div class="icon-bubble">
    					<img src="<?= base_url('assets/front/img/icon-1.png') ?>" alt="">
    				</div><!-- END .icon-bubble -->
    				<h4>Am Puls der Zeit</h4>
    				<p>Immer mehr Unternehmen bauen Arbeitsplätze ab und beaufttragen lieber Subunternehmer - Wir bieten den größten Marketplatz für Aufträge an Subunternehmer.</p>
    			</div><!-- END grid_6 -->

    			<div class="grid_6 omega alpha">
    				<div class="icon-bubble">
    					<img src="<?= base_url('assets/front/img/icon-2.png') ?>" alt="">
    				</div><!-- END .icon-bubble -->
    				<h4>Innovative Design</h4>
    				<p>Make your product or service the focal point of your landing page.</p>
    			</div><!-- END grid_6 -->

    			<div class="grid_6 omega alpha">
    				<div class="icon-bubble">
    					<img src="<?= base_url('assets/front/img/icon-3.png') ?>" alt="">
    				</div><!-- END .icon-bubble -->
    				<h4>Super Awesome</h4>
    				<p>A defininte powerhouse in premium landing page theming, built to last and to skyrocket your product sales.</p>
    			</div><!-- END grid_6 -->

    			<div class="grid_6 omega alpha">
    				<div class="icon-bubble">
    					<img src="<?= base_url('assets/front/img/icon-4.png') ?>" alt="">
    				</div><!-- END .icon-bubble -->
    				<h4>Unlimited support</h4>
    				<p>Feeling stuck? Don't stress, Vertigo landing page is fully supported and has detailed documentation to get you unstuck in no time.</p>
    			</div><!-- END grid_6 -->

    		</div><!-- END .features-breakdown -->
    	</section><!-- END .grid_12 -->

   	<!--<section class="grid_12 section">
        <h2 class="alignright">At a Glance</h2>
        <hr />
        <ul class="screenshots group">
            <li class="grid_4 alpha">
            	<a href="<?= base_url('assets/front/img/preview/large-1.jpg') ?>" rel="prettyPhoto[gallery1]">
                   	<span class="overlay">
	                  	<span class="icon"></span>
                    </span>
					<img src="<?= base_url('assets/front/img/preview/thumb-1.jpg') ?>" alt="" />
                </a>
            </li>
            <li class="grid_4">
            	<a href="<?= base_url('assets/front/img/preview/large-1.jpg') ?>" rel="prettyPhoto[gallery1]">
                   	<span class="overlay">
	                  	<span class="icon"></span>
                    </span>
                	<img src="<?= base_url('assets/front/img/preview/thumb-1.jpg') ?>" alt="" />
                </a>
            </li>
            <li class="grid_4 omega">
            	<a href="<?= base_url('assets/front/img/preview/large-1.jpg') ?>" rel="prettyPhoto[gallery1]">
                   	<span class="overlay">
	                  	<span class="icon"></span>
                    </span>
                	<img src="<?= base_url('assets/front/img/preview/thumb-1.jpg') ?>" alt="" />
                </a>
            </li>
            <li class="grid_4 alpha">
            	<a href="<?= base_url('assets/front/img/preview/large-1.jpg') ?>" rel="prettyPhoto[gallery1]">
                   	<span class="overlay">
	                  	<span class="icon"></span>
                    </span>
                	<img src="<?= base_url('assets/front/img/preview/thumb-1.jpg') ?>" alt="" />
                </a>
            </li>
            <li class="grid_4">
            	<a href="<?= base_url('assets/front/img/preview/large-1.jpg') ?>" rel="prettyPhoto[gallery1]">
                   	<span class="overlay">
	                  	<span class="icon"></span>
                    </span>
                	<img src="<?= base_url('assets/front/img/preview/thumb-1.jpg') ?>" alt="" />
                </a>
            </li>
            <li class="grid_4 omega">
            	<a href="<?= base_url('assets/front/img/preview/large-1.jpg') ?>" rel="prettyPhoto[gallery1]">
                   	<span class="overlay">
	                  	<span class="icon"></span>
                    </span>
                	<img src="<?= base_url('assets/front/img/preview/thumb-1.jpg') ?>" alt="" />
                </a>
            </li>
        </ul>
    </section><!-- END .grid_12 -->

    <section class="grid_12 section">
    	<h2 id="contact"><span>Jetzt anmelden</span></h2>
    	<hr />
        
    	<p>Einfach das Formular ausfüllen und wir nehmen Dich sofort kostenlos und unverbindlich in unsere Subunternehmer Datenbank auf. Sobald dein Konto freigeschaltet ist erhältst Du Auftragsangebote einfach und praktisch per Email.</p>
    	<div class="form group">
            <?= form_open('website/thanks'); ?>
    			<div class="grid_6 alpha">
    				<fieldset>
    					<label for="first_name">Vorname:</label>
    					<input type="text" name="first_name" id="first_name" placeholder="Dein Vorname" value="<?= set_value('first_name') ?>" />
    					<label for="last_name">Nachname:</label>
    					<input type="text" name="last_name" id="last_name" placeholder="Dein Nachname" value="<?= set_value('last_name') ?>" />
    					<label for="email">eMail Adresse</label>
    					<input type="text" name="email" id="email" placeholder="Deine Email Adresse" value="<?= set_value('email') ?>" />
    					<div style="float:left;">
    						<label for="situation">Situation zur Zeit</label>
    						<select name="situation">
    							<option>Arbeitslos ALG-I</option>
    							<option>Arbeitslos ALG-II</option>
    							<option>Freiberuflich</option>
    							<option>Selbständig</option>
    							<option>Student/Ausbildung</option>
    							<option>Sonstiges</option>
    						</select>
    					</div>
    					<div style="float:right;">
    						<label for="salutation">Anrede</label>
    						<select name="salutation">
    							<option>Herr</option>
    							<option>Frau</option>
    						</select>
    					</div>
    				</fieldset>
    			</div><!-- END .grid_7 -->                                        
    			<div class="grid_6 omega">
    				<label for="phone">Telefon-Nr.:</label>
    				<input type="text" name="phone" id="phone" placeholder="Telefon oder Handy" value="<?= set_value('phone') ?>" />
    				<label for="street">Strasse & Hausnr.</label>
    				<input type="text" name="street" id="street" placeholder="Strasse und Hausnummer" value="<?= set_value('street') ?>" />
    				<label>PLZ und Ort:</label>
    				<div style="height:56px;">
    					<input type="text" name="zipcode" id="zipcode" placeholder="PLZ" style="width:100px; float:left; margin-right:10px" value="<?= set_value('zipcode') ?>" />
    					<input type="text" name="city" id="city" placeholder="Ort" style="width:350px; float:left;" value="<?= set_value('city') ?>" />
    				</div>
                    <div style="height:102px;">
                        &nbsp;
                    </div>
    				
    				<input type="submit" value="Jetzt Anmelden" class="button">
    			</div><!-- END .grid_7 -->
    		<?= form_close() ?><!-- END #contact -->
    	</div><!-- END .form -->
    </section><!-- END .grid_12 -->
</div><!-- END #main .container_12 -->
	
	<hr />
	<footer>
		<div class="container_12">
			<div class="grid_7"><a href="#" id="footer-logo">&nbsp;</a></div>
			<p class="copyright grid_5">&copy; Copyright 2012 by subbis.de. <a href="http://netameri.com">A Business Websites by NetAmeri.com</a></p>
		</div><!-- END .container_12 -->
		<div class="container_12" style="font-size:10px;">
			<div class="grid_4">
				CHR  Coaching & Human Resources UG (haftungsbeschränkt)<br />
				Krumme Str. 65<br />
				10627 Berlin<br />

			</div>
			<div class="grid_4">
				vertretungsberechtigter Geschäftsführer:<br />
				Olaf Schröpfer<br />
				Tel. 0176 64329440
			</div>
			<div class="grid_4">
				Registergericht: Amtsgericht Charlottenburg HRB 145039 B<br />
				Finanzamt für Körperschaften I Berlin<br />
				Steuernummer 27 / 413 / 05725
			</div>
		</div>
	</footer><!-- END footer -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36592495-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>