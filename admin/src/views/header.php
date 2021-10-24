<?php
$cur_page = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
if ($cur_page == 'index.php') {
    $prefixPath = "";
} else if($cur_page == 'a.php' || $cur_page == 'restaurants.php' || $cur_page == 'sales.php' || $cur_page == 'widgets.php' || $cur_page == 'animation.php') {
    $prefixPath = "../";
}else {
    $prefixPath = "../../";
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/costic/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 03:51:04 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Costic Dashboard</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo $prefixPath ?>vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $prefixPath ?>vendors/iconic-fonts/flat-icons/flaticon.css">
    <link rel="stylesheet" href="<?php echo $prefixPath ?>vendors/iconic-fonts/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" href="<?php echo $prefixPath ?>vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $prefixPath ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="<?php echo $prefixPath ?>assets/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="<?php echo $prefixPath ?>assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo $prefixPath ?>assets/css/datatables.min.css" rel="stylesheet">
    <!-- Costic styles -->
    <link href="<?php echo $prefixPath ?>assets/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
    <!-- Sidebar Navigation Left -->
    <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
        <!-- Logo -->
        <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center" href="<?php echo $prefixPath ?>index.php">
                <img src="<?php $prefixPath ?><?php echo $prefixPath ?>assets/img/costic/costic-logo-216x62.png" alt="logo">
            </a>
        </div>
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"> <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
                </a>
                <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>index.php">Costic</a>
                    </li>
                </ul>
            </li>
            <!-- /Dashboard -->
            <!-- restaurants -->
            <li class="menu-item">
                <a href="<?php echo $prefixPath ?>pages/restaurants.php"> <span><i class="fa fa-tasks fs-16"></i>Restaurants List</span>
                </a>
            </li>
            <!-- restaurants end -->
            <!-- product -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Menus </span>
                </a>
                <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/product/productcata.php">Menu Catalogue</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/product/productlist.php">Menu List</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/product/productgrid.php">Menu Grid</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/product/addproduct.php">Add Product</a>
                    </li>
                    
                </ul>
            </li>
            <!-- product end -->
            <!-- orders -->
            <li class="menu-item">
                <a href="<?php echo $prefixPath ?>pages/orders.html"> <span><i class="fas fa-clipboard-list fs-16"></i>Orders</span>
                </a>
            </li>
            <!-- orders end -->

            <!-- Invoice -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="invoice"> <span><i class="fas fa-file-invoice fs-16"></i>Invoice </span>
                </a>
                <ul id="invoice" class="collapse" aria-labelledby="invoice" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/invoice/invoicedetail.html">Invoice Detail</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/invoice/invoicelist.html">Invoice List</a>
                    </li>
                </ul>
            </li>
            <!-- Invoice end -->
            <!-- customers-->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="fas fa-user-friends fs-16"></i>Customers </span>
                </a>
                <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/customer/customersreview.html">Customers Review</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/customer/customersreview.html">Customers List</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/customer/social.html">Social Activity</a>
                    </li>
                </ul>
            </li>
            <!-- Customers  end -->
            <!-- sales -->
            <li class="menu-item">
                <a href="<?php echo $prefixPath ?>pages/sales.html"> <span><i class="fa fa-briefcase fs-16"></i>Sales</span>
                </a>
            </li>
            <!-- sales end  -->
            <li class="menu-item">
                <a href="<?php echo $prefixPath ?>pages/widgets.html"> <span><i class="material-icons fs-16">widgets</i>Widgets</span>
                </a>
            </li>
            <!-- Basic UI Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements"> <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
                </a>
                <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/accordions.html">Accordions</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/alerts.html">Alerts</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/buttons.html">Buttons</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/breadcrumbs.html">Breadcrumbs</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/badges.html">Badges</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/cards.html">Cards</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/progress-bars.html">Progress Bars</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/preloaders.html">Pre-loaders</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/pagination.html">Pagination</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/tabs.html">Tabs</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-basic/typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <!-- /Basic UI Elements -->
            <!-- Advanced UI Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements"> <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
                </a>
                <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/draggables.html">Draggables</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/sliders.html">Sliders</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/modals.html">Modals</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/rating.html">Rating</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/tour.html">Tour</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/cropper.html">Cropper</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/ui-advanced/range-slider.html">Range Slider</a>
                    </li>
                </ul>
            </li>
            <!-- /Advanced UI Elements -->
            <li class="menu-item">
                <a href="<?php echo $prefixPath ?>pages/animation.html"> <span><i class="material-icons fs-16">format_paint</i>Animations</span>
                </a>
            </li>
            <!-- Form Elements -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements"> <span><i class="material-icons fs-16">input</i>Form Elements</span>
                </a>
                <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/form/form-elements.html">Form Elements</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/form/form-layout.html">Form Layouts</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/form/form-validation.html">Form Validation</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/form/form-wizard.html">Form Wizard</a>
                    </li>
                </ul>
            </li>
            <!-- /Form Elements -->
            <!-- Charts -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts"> <span><i class="material-icons fs-16">equalizer</i>Charts</span>
                </a>
                <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/charts/chartjs.html">Chart JS</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/charts/morris-charts.html">Morris Chart</a>
                    </li>
                </ul>
            </li>
            <!-- /Charts -->
            <!-- Tables -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables"> <span><i class="material-icons fs-16">tune</i>Tables</span>
                </a>
                <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/tables/basic-tables.html">Basic Tables</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/tables/data-tables.html">Data tables</a>
                    </li>
                </ul>
            </li>
            <!-- /Tables -->
            <!-- Popups -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups"> <span><i class="material-icons fs-16">message</i>Popups</span>
                </a>
                <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/popups/sweet-alerts.html">Sweet Alerts</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/popups/toast.html">Toast</a>
                    </li>
                </ul>
            </li>
            <!-- /Popups -->
            <!-- Icons -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons"> <span><i class="material-icons fs-16">border_color</i>Icons</span>
                </a>
                <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/icons/fontawesome.html">Fontawesome</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/icons/flaticons.html">Flaticons</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/icons/materialize.html">Materialize</a>
                    </li>
                </ul>
            </li>
            <!-- /Icons -->
            <!-- Maps -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps"> <span><i class="material-icons fs-16">map</i>Maps</span>
                </a>
                <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/maps/google-maps.html">Google Maps</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/maps/vector-maps.html">Vector Maps</a>
                    </li>
                </ul>
            </li>
            <!-- /Maps -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bonuspages" aria-expanded="false" aria-controls="bonuspages"> <span><i class="material-icons fs-16">insert_drive_file</i> Bonus Pages</span>
                </a>
                <ul id="bonuspages" class="collapse" aria-labelledby="bonuspages" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/dashboard/web-analytics.html"> Web Analytics </a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/dashboard/project-management.html">Stock Management</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/dashboard/client-management.html">Client Management</a>
                    </li>
                </ul>
            </li>
            <!-- / bonus Pages -->
            <!-- Pages -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages"> <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
                </a>
                <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
                    <li class="menu-item"> <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
                        <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
                            <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/default-login.html">Default Login</a>
                            </li>
                            <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/modal-login.html">Modal Login</a>
                            </li>
                            <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/default-register.html">Default Registration</a>
                            </li>
                            <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/modal-register.html">Modal Registration</a>
                            </li>
                            <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/lock-screen.html">Lock Screen</a>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/coming-soon.html">Coming Soon</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/error.html">Error Page</a>
                    </li>
                    <li class="menu-item"> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/faq.html"> FAQ </a>
                    </li>
                    <li class="menu-item"> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/portfolio.html"> Portfolio </a>
                    </li>
                    <li class="menu-item"> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/user-profile.html"> User Profile </a>
                    </li>
                    <li class="menu-item"> <a href="<?php echo $prefixPath ?>pages/prebuilt-pages/invoice.html"> Invoice </a>
                    </li>
                </ul>
            </li>
            <!-- /Pages -->
            <!-- Apps -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps"> <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
                </a>
                <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                    <li> <a href="<?php echo $prefixPath ?>pages/apps/chat.html">Chat</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/apps/email.html">Email</a>
                    </li>
                    <li> <a href="<?php echo $prefixPath ?>pages/apps/to-do-list.html">To-do List</a>
                    </li>
                </ul>
            </li>
            <!-- /Apps -->
        </ul>
    </aside>
    <!-- Sidebar Right -->
    <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
        <div class="ms-aside-header">
            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a>
                </li>
                <li>
                    <button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span>
                    </button>
                </li>
            </ul>
        </div>
        <div class="ms-aside-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                    <ul class="ms-activity-log">
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-light"> <i class="flaticon-gear"></i>
                            </div>
                            <h6>Update 1.0.0 Pushed</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-success"> <i class="flaticon-tick-inside-circle"></i>
                            </div>
                            <h6>Profile Updated</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-warning"> <i class="flaticon-alert-1"></i>
                            </div>
                            <h6>Your payment is due</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-danger"> <i class="flaticon-alert"></i>
                            </div>
                            <h6>Database Error</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-info"> <i class="flaticon-information"></i>
                            </div>
                            <h6>Checkout what's Trending</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-secondary"> <i class="flaticon-diamond"></i>
                            </div>
                            <h6>Your Dashboard is ready</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                    </ul> <a href="#" class="btn btn-primary d-block"> View All </a>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main Content -->