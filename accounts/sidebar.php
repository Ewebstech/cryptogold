  <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
					<li>
                        <a  href="../index.php"><i class="fa fa-backward"></i> Main Site</a>
                    </li>
                    <li>
                        <a class="<?php echo($pagename == "index.php") ? "active-menu":""; ?>" href="index.php"><i class="fa fa-dashboard"></i> My Account</a>
                    </li>
                    <li>
                        <a class="<?php echo($pagename == "myorders.php") ? "active-menu":""; ?>" href="myorders.php"><i class="fa fa-shopping-cart"></i> My Orders</a>
                    </li>
					
                    <?php if($row["status"] == "Merchant"){ ?>
					<li>
                          <a class="<?php echo($pagename == "uploadcenter.php") ? "active-menu":""; ?>" href="uploadcenter.php"><i class="fa fa-arrow-up"></i> Uploads Center</a>
                      </li>
                      <li>
                          <a class="<?php echo($pagename == "myuploads.php") ? "active-menu":""; ?>" href="myuploads.php"><i class="fa fa-expand"></i> My Uploads</a>
                      </li>
                  <?php } ?>

                </ul>

            </div>

        </nav>
