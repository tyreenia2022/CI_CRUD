<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">CRUD</div>
                    <a class="nav-link" href="<?= base_url('objects'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                        Crud Sederhana
                    </a>
                    <div class="sb-sidenav-menu-heading">Logout</div>
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                        <div class="sb-nav-link-icon"><i class="fas fa-power-off"></i></div>
                        Logout
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= user()->username; ?>
            </div>
        </nav>
    </div>