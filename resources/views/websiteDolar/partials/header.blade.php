
<header class="Web-Header">
			<div class="container-xl bp-header-container h-100">
				<div class="bp-main-header h-100">
					<div class="bp-header-row h-100">
						<div class="col-header col-header_left col-nav">
							<div class="header-logo d-lg-none">
								<a href="./">
									<img class="img-fluid" src="{{ asset('assets/img/Logo-Angelitos.svg') }}" alt="Tango">
								</a>
							</div>
							<nav class="main-navigation d-none d-lg-block">
								<ul>
									<li class="active"><a href="../">Home</a></li>
									<li><a href="../show/">El Show</a></li>
									<li><a href="../cena-y-show">Cena y show</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-header col-logo">
							<div class="header-logo d-none d-lg-block">
								<a href="../">
									<img class="img-fluid" src="{{ asset('assets/img/Logo-Angelitos.svg') }}" alt="Tango">
								</a>
							</div>
						</div>
						<div class="col-header col-header_right col-nav">
							<nav class="main-navigation d-none d-lg-block">
								<ul>
									<li><a href="../informacion/">Información</a></li>
									<li><a href="../shop/">Shop</a></li>
									<li  class="destacar"><a href="?partner_id=9MRZPLV&partner_ticketing_activity_ids=764572">Reservar</a></li>
								</ul>
							</nav>
							<div class="h-100 d-flex align-items-center" id="openSideMenu">
							    <div class="menu-activador">
							      <span class="menu-activador-linea"></span>
							      <span class="menu-activador-linea"></span>
							      <span class="menu-activador-linea"></span>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu Mobile -->
		<div class="side-panel" id="panelMenu">
			<div class="side-panel_inner">
				<div class="side-panel_head">
					<div class="panel-side-logo">
						<img class="img-fluid" src="{{ asset('assets/img/Logo-Angelitos.svg') }}" alt="Tango">
					</div>

					<a href="#" class="btnPanelMenu" id="closeSideMenu">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" d="m7 7l10 10M7 17L17 7"/></svg>
					</a>
				</div>
				<div class="side-panel_body">
					<nav>
						<ul>
							<li class="active"><a href="../">Home</a></li>
							<li><a href="../show/">El Show</a></li>
							<li><a href="#">Cena y show</a></li>
							<li><a href="../informacion/">Información</a></li>
							<li><a href="../shop/">Shop</a></li>
							<li><a class="" href="?partner_id=9MRZPLV&partner_ticketing_activity_ids=764572">Reservar</a></li>
						</ul>
					</nav>
				</div>
				<div class="side-panel_footer"></div>
			</div>			
		</div>
		<!-- END Menu Mobile -->
