<!DOCTYPE html>
<?php
require_once "controller/user/loggedIn.php";
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maoni</title>
    <link rel="icon" type="image/x-icon" href="bootstrap/img/ICOMAONI.ico" />
    <link href="bootstrap/img/ICOMAONI.png" rel="apple-touch-icon">
    <!-- Custom fonts for this template-->
    <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script type="text/javascript" src="https://prod-uk-a.online.tableau.com/javascripts/api/viz_v1.js"></script>
    <!-- Custom styles for this template-->
    <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

    <script>
        window['_fs_debug'] = false;
        window['_fs_host'] = 'fullstory.com';
        window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
        window['_fs_org'] = '12D2S5';
        window['_fs_namespace'] = 'FS';
        (function(m, n, e, t, l, o, g, y) {
            if (e in m) {
                if (m.console && m.console.log) {
                    m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');
                }
                return;
            }
            g = m[e] = function(a, b, s) {
                g.q ? g.q.push([a, b, s]) : g._api(a, b, s);
            };
            g.q = [];
            o = n.createElement(t);
            o.async = 1;
            o.crossOrigin = 'anonymous';
            o.src = 'https://' + _fs_script;
            y = n.getElementsByTagName(t)[0];
            y.parentNode.insertBefore(o, y);
            g.identify = function(i, v, s) {
                g(l, {
                    uid: i
                }, s);
                if (v) g(l, v, s)
            };
            g.setUserVars = function(v, s) {
                g(l, v, s)
            };
            g.event = function(i, v, s) {
                g('event', {
                    n: i,
                    p: v
                }, s)
            };
            g.anonymize = function() {
                g.identify(!!0)
            };
            g.shutdown = function() {
                g("rec", !1)
            };
            g.restart = function() {
                g("rec", !0)
            };
            g.log = function(a, b) {
                g("log", [a, b])
            };
            g.consent = function(a) {
                g("consent", !arguments.length || a)
            };
            g.identifyAccount = function(i, v) {
                o = 'account';
                v = v || {};
                v.acctId = i;
                g(o, v)
            };
            g.clearUserCookie = function() {};
            g.setVars = function(n, p) {
                g('setVars', [n, p]);
            };
            g._w = {};
            y = 'XMLHttpRequest';
            g._w[y] = m[y];
            y = 'fetch';
            g._w[y] = m[y];
            if (m[y]) m[y] = function() {
                return g._w[y].apply(this, arguments)
            };
            g._v = "1.3.0";
        })(window, document, window['_fs_namespace'], 'script', 'user');
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="" onclick="header()">
                <div class="sidebar-brand-icon">
                    <img src="bootstrap/img/logoMaoni.png" style="height: 45px; width: 45px" alt="Logo" />
                </div>
                <div class="sidebar-brand-text mx-3">MAONI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php?par=trending" onclick="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trending Keywords</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Meetings
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
            <!--
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Meetings</span></a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link collapsed" style="padding: .5rem 1rem;" href="#" data-toggle="collapse" data-target="#cross_topics" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Cross-Functional</span>
                </a>
                <div id="cross_topics" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="collapse-inner" style="padding: 0rem;">
                        <h1 class="collapse-header" style="padding: .5rem 0rem; font-size: .65rem; color: white;">Weekly Shake</h1>
                        <a class="nav-link w-100 h-100" style="padding: .5rem 1rem;" href="index.php?par=historical">Historical Sentiment</a>
                        <a class="nav-link w-100 h-100" style="padding: .5rem 1rem;" href="index.php?par=teams">Teams - Sentiment</a>
                        <!-- estudar data-parent -->
                        <a class="nav-link collapsed w-100 h-100" style="padding: .5rem 1rem;" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Key Topics</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#cross_topics">
                            <div class="bg-white collapse-inner rounded" style="padding: 0rem;">
                                <a class="collapse-item" href="index.php?par=people">People</a>
                                <a class="collapse-item" href="index.php?par=technology">Technology</a>
                                <a class="collapse-item" href="index.php?par=onboarding">Onboarding</a>
                                <a class="collapse-item" href="index.php?par=scaling">Scaling</a>
                                <a class="collapse-item" href="index.php?par=operations">Operations</a>
                            </div>
                        </div>
                        <a class="nav-link collapsed w-100 h-100" style="padding: .5rem 1rem;" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Tagged Topics</span>
                        </a>
                        <!-- data-parent="#accordionSidebar" -->
                        <div id="collapsePagess" class="collapse" aria-labelledby="headingPages" data-parent="#cross_topics">
                            <div class="bg-white collapse-inner rounded" style="padding: 0rem;">
                                <a class="collapse-item" href="index.php?par=countries">Countries</a>
                                <a class="collapse-item" href="index.php?par=global">Global Goals</a>
                                <a class="collapse-item" href="index.php?par=product">Product Offering</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Others
            </div>

            <li class="nav-item">
                <a class="nav-link" style="padding: .5rem 1rem;" href="index.php?par=insights">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Insights</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style="padding: .5rem 1rem;" href="index.php?par=our">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Our Methodology</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style="padding: .5rem 1rem;" href="index.php?par=remote">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Remote Work Playbook</span>
                </a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/bootstrap/img/undraw_profile_1.svg" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/bootstrap/img/undraw_profile_2.svg" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/bootstrap/img/undraw_profile_3.svg" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php $_SESSION['name']?>
                                </span>
                                <img class="img-profile rounded-circle" src="bootstrap/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a onclick="logout()" class="dropdown-item" data-toggle="modal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid ">

                    <!-- Page Heading 
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">"-- Nome Reunião --"</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> (Dá para deixar isso aqui ao invés de jogar código em todas as páginas) -->

                    <!-- Content Row (container fluid)-->
                    <!-- Código feio este abaixo... Arrumar pois não é para carregar uma nova página toda vez que o usuário
                        seleciona uma aba... uma visão de gráfico! Ou seja, já tem que estar carregado e que ele navegue
                        de maneira fluída-->
                    <?php
                    if (isset($_GET['par'])) {
                        if ($_GET["par"] == "historical") {
                            require_once "view/historicalSentiment.php";
                        } else if ($_GET["par"] == "teams") {
                            require_once "view/teams.php";
                        } else if ($_GET["par"] == "people") {
                            require_once "view/people.php";
                        } else if ($_GET["par"] == "onboarding") {
                            require_once "view/onboarding.php";
                        } else if ($_GET["par"] == "scaling") {
                            require_once "view/scaling.php";
                        } else if ($_GET["par"] == "technology") {
                            require_once "view/technology.php";
                        } else if ($_GET["par"] == "operations") {
                            require_once "view/operations.php";
                        } else if ($_GET["par"] == "global") {
                            require_once "view/globalGoals.php";
                        } else if ($_GET["par"] == "countries") {
                            require_once "view/countries.php";
                        } else if ($_GET["par"] == "product") {
                            require_once "view/productOffering.php";
                        } else if ($_GET["par"] == "remote") {
                            require_once "view/remotePlaybook.php";
                        } else if ($_GET["par"] == "our") {
                            require_once "view/ourMethodology.php";
                        } else if ($_GET["par"] == "insights") {
                            require_once "view/insights.php";
                        } else {
                            require_once "view/trendingTopics.php";
                        }
                    } else {
                        require_once "view/trendingTopics.php";
                    } ?>

                </div>

            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="controller/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
        <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="bootstrap/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins --
            <script src="vendor/chart.js/Chart.min.js"></script>
             Page level custom scripts --
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>-->
        <script type="text/javascript" src="bootstrap/js/canvasjs.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/fixx.js"></script>
        <script>
            function logout() {
                window.location.href = "controller/user/logout.php";
            }
        </script>

</body>

</html>