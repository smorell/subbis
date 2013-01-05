<header id="panelheader">
    <div class="container">
        <div class="row">
            <div class="span12">
				<div class="navbar navbar-static-top">
					<div class="navbar-inner">
					<a class="brand" href="<?= site_url("office/index") ?>">subbis.de</a>
						<ul class="nav">
							<li ><a href="<?= site_url("office/index") ?>">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Stammdaten<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?= site_url("office/subbis") ?>">Subbis</a></li>
									<li><a href="<?= site_url("office/subbis_new") ?>">Firmen</a></li>
									
									
								</ul>
							</li>
						</ul>
						
						<ul class="nav pull-right">
							<li class="">
								<a href="#">Logout</a>
							</li>
							<li class="divider"></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?= site_url("office/") ?>">Einstellungen</a></li>
									<li class="divider"></li>
									<li><a href="<?= site_url("settings/promoter") ?>">Werber</a></li>
									<li><a href="<?= site_url("") ?>">Akquisiteure</a></li>
									<li><a href="<?= site_url("") ?>">Büros</a></li>
									<li><a href="<?= site_url("settings/campaign") ?>">Kampagnen</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</header>