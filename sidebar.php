<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2 ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x'] == 'Home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="Home"><i
                                    class="bi bi-house-door"></i> Dashboard</a>
                        </li>

                        <?php 
                            if($hasil['level']==1 || $hasil['level']==3) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'menu') ? 'active link-light' : 'link-dark' ; ?>" href="menu"><i class="bi bi-journal-text"></i></i> Daftar Menu</a>
                        </li>
                        <?php } ?>

                        <?php 
                            if($hasil['level']==1) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'katmenu') ? 'active link-light' : 'link-dark' ; ?>" href="katmenu"><i class="bi bi-tags"></i> Kategori Menu</a>
                        </li>
                        <?php } ?>

                        <?php 
                            if($hasil['level']==1 || $hasil['level']==2 || $hasil['level']==3) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'Order') ? 'active link-light' : 'link-dark' ; ?>" href="Order"><i class="bi bi-cart4"></i> Order</a>
                        </li>
                        <?php } ?>

                        <?php 
                            if($hasil['level']==1 || $hasil['level']==4) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'dapur') ? 'active link-light' : 'link-dark' ; ?>" href="dapur"><i class="bi bi-tree-fill"></i></i> Dapur</a>
                        </li>
                        <?php } ?>

                        <?php 
                            if($hasil['level']==1) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark' ; ?>" href="user"><i class="bi bi-person-bounding-box"></i>
                                User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark' ; ?>" href="report"><i class="bi bi-file-earmark-bar-graph"></i>
                                Report</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>