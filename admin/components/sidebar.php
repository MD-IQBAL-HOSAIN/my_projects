<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>


                <a class="nav-link" href="index.php" title="homepage" target="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <img src="<?= settings()['logo'] ?>" alt="site link">
                </a>
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Info & Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <!-- product categories -->
                        <a class="nav-link" href="category_all.php"><i class="bi bi-bank"></i>Product categories</a>
                        <!-- <a class="nav-link" href="select.php"><i class="bi bi-bank"></i>Product_in_up_Del</a> -->
                        <!-- <a class="nav-link" href="layout-static.html">All</a> -->

                        <a class="nav-link" href="customer_list.php"><i class="bi bi-person-workspace"></i>Customers</a>
                        <a class="nav-link" href="employee.php"><i class="bi bi-person-lines-fill"></i>Employee_List</a>
                        <a class="nav-link" href="invoice.php"><i class="bi bi-receipt-cutoff"></i>Invoice</a>
                        <a class="nav-link" href="invoicedetails.php"><i class="bi bi-receipt"></i>Invoice_Details</a>
                        <a class="nav-link" href="orders.php"><i class="bi bi-box"></i>Orders</a>
                        <a class="nav-link" href="orderdetails.php"><i class="bi bi-box-seam"></i>Orders_Details</a>
                        <a class="nav-link" href="expenses.php"><i class="bi bi-dash-circle"></i>Expences</a>
                        <a class="nav-link" href="accounts.php"><i class="bi bi-credit-card-2-front"></i>Payment</a>
                        <a class="nav-link" href="suppliers.php"><i class="bi bi-suitcase-lg-fill"></i>Suppliers</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="users-all.php">All</a>
                        <a class="nav-link" href="users-all.php?access=2">Admin</a>
                        <a class="nav-link" href="users-all.php?access=1">User</a>
                        <a class="nav-link" href="users-all.php?access=3">Deactive</a>
                        <a class="nav-link" href="user_create.php">Add member</a>
                    </nav>
                </div>
                <!-- <div>
                    <nav class="sb-sidenav-menu-nested nav">
                        
                    </nav>
                </div> -->
                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div> -->
                <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
                <a class="nav-link" href="blank.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Blank
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>