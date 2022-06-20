<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Navigation Links</li>
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <?php
                if ($_SESSION['role'] == "admin") {
                    ?>
                    <li>
                        <a href="institution.php">Institutions</a>
                    </li>
                    <li>
                        <a href="admin_certs.php">Certificates</a>
                    </li>
                    <?php
                } else if ($_SESSION['role'] == "institution") {
                    ?>
                    <li>
                        <a href="certificates.php">Certificates</a>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="../signout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</div> 