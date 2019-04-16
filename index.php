<?php
/**
 * -------------------------------------------------------------------------
 * WordOps Dashboard
 * -------------------------------------------------------------------------
 * Website: https://wordops.net
 * GitHub:  https://github.com/WordOps/wordops-dashboard
 * Copyright (c) 2019 - WordOps
 * This dashboard template is licensed under M.I.T
 * -------------------------------------------------------------------------
 * Version 1.0 - 2019-04-03
 * -------------------------------------------------------------------------
 */
$root = $_SERVER['HTTP_HOST'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="WordOps Dashboard">
  <meta name="author" content="VirtuBox">
  <title>WordOps Dashboard</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->

 <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.min.css" rel="stylesheet">
  <script>
    var netdataNoBootstrap=true;
    var netdataNoFontAwesome=true;
  </script>
  <script type="text/javascript" src="https://<?php echo $root; ?>/netdata/dashboard.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
  <style>
    .svg-inline--fa {
      padding-right: 0.3em;
      font-size: 1.7em;
    }
  </style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="https://<?php echo $root; ?>">
        <img src="./assets/img/brand/logo.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
            aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="https://<?php echo $root; ?>">
                <img src="./assets/img/brand/logo.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav" id="list-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link list-group-item-action active" aria-selected="true">
              <i class="fas fa-home"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://<?php echo $root; ?>/files/" target="_blank" rel="noopener">
              <i class="fas fa-folder-open"></i> File Manager
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://<?php echo $root;?>/php/info.php" target="_blank" rel="noopener">
              <i class="fab fa-php"></i> PHP Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://<?php echo $root;?>/netdata/" target="_blank" rel="noopener">
              <i class="fas fa-chart-bar"></i> Monitoring
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://<?php echo $root;?>/vts_status" target="_blank" rel="noopener">
              <i class="fas fa-list-alt"></i> Nginx VTS
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Links</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">

          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://wordops.net" target="_blank" rel="noopener">
              <i class="fas fa-rocket"></i> WordOps.net
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://docs.wordops.net" target="_blank" rel="noopener">
              <i class="fas fa-book"></i> Documentation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://community.wordops.net" target="_blank" rel="noopener">
              <i class="fas fa-comments"></i> Forum
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">WordOps
          Dashboard</a>

        <!-- User -->
        <!-- <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">WordOps</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="#" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>-->
      </div>
    </nav>
    <!-- Header -->

    <div class="header bg-gradient-success pb-8 pt-4 pt-md-6">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0">
                        <div data-netdata="system.cpu" data-title="CPU Usage" data-chart-library="gauge"
                          data-height="320" data-width="100%" data-points="60" data-after="-60"></div>
                      </span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0">
                        <div class="netdata-container-gauge" data-netdata="nginx_local.connections" data-dimensions=""
                          data-height="270" data-width="100%" data-chart-library="gauge" data-gauge-adjust="width"
                          data-title="Nginx Connections" data-before="0" data-after="-480" data-points="CHART_DURATION"
                          data-colors="#0099C6" role="application"></div>
                      </span>
                    </div>

                  </div>

                </div>
              </div>
            </div>
            <div class="col-xl col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">

                      <span class="h2 font-weight-bold mb-0">
                        <div class="netdata-container-gauge" data-netdata="nginx_local.requests" data-dimensions=""
                          data-height="270" data-width="100%" data-chart-library="gauge" data-gauge-adjust="width"
                          data-title="Nginx Requests" data-before="0" data-after="-480" data-points="CHART_DURATION"
                          data-colors="#66AA00" role="application" style="will-change: transform;"></div>
                      </span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0">
                        <div class="netdata-container-gauge" data-netdata="net.eth0" data-dimensions="received"
                          data-height="270" data-width="100%" data-chart-library="gauge" data-gauge-adjust="width"
                          data-title="Network IN" data-before="0" data-after="-480" data-points="CHART_DURATION"
                          data-colors="" role="application" style="width: 12%; will-change: transform;"></div>
                      </span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0">
                        <div class="netdata-container-gauge" data-netdata="net.eth0" data-dimensions="sent"
                          data-height="270" data-width="100%" data-chart-library="gauge" data-gauge-adjust="width"
                          data-title="Network OUT" data-before="0" data-after="-480" data-points="CHART_DURATION"
                          data-colors="" role="application" style="width: 12%; will-change: transform;"></div>
                      </span>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


     <div class="container">

          <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
              <i class="fas fa-server"></i> Monitoring</a></li>
        <li class="nav-item">
            <a class="nav-link" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
              <i class="fas fa-database"></i> Database</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
              <i class="fas fa-database"></i>  Cache</a>
        </li>
    </ul>
    </div>

</div>

    </div>

    <div class="tab-content" id="nav-tabContent">

      <!-- First TAB -->
      <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-ta">
        <div class="container-fluid mt--8">
          <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
              <div class="card">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Main Metrics</h3>
                    </div>
                    <div class="col text-right">
                      <a href="https://<?php echo $root;?>/netdata/" class="btn btn-sm btn-primary" target="_blank">See
                        all</a>
                    </div>
                  </div>
                </div>
                <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-sm">

                        <tbody>

                          <tr>

                            <td class="bg-white">
                              <div data-legend="yes" data-netdata="system.cpu" data-dimensions="user"
                                data-chart-library="dygraph" data-before="0" data-after="-480" data-width="100%"
                                data-dygraph-valuerange="[null, null]" data-height="200px" data-colors="#3366CC"></div>
                            </td>
                            <td class="bg-white">
                              <div data-legend="yes" data-netdata="system.ram" data-chart-library="dygraph"
                                data-before="0" data-after="-480" data-width="100%"
                                data-dygraph-valuerange="[null, null]" data-height="200px"></div>
                            </td>

                          </tr>
                          <tr>
                            <td class="bg-white">
                              <div data-legend="yes" data-netdata="nginx_local.connections" data-chart-library="dygraph"
                                data-before="0" data-after="-480" data-dygraph-valuerange="[null, null]"
                                data-width="100%" data-height="200px" data-after="-240" data-colors="#0099C6"></div>
                            </td>
                            <td class="bg-white">
                              <div data-legend="yes" data-netdata="nginx_local.requests" data-chart-library="dygraph"
                                data-before="0" data-after="-480" data-dygraph-valuerange="[null, null]"
                                data-width="100%" data-height="200px" data-after="-240" data-colors="#0099C6"></div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card shadow">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Other Metrics</h3>
                    </div>
                    <div class="col text-right">
                      <a href="https://<?php echo $root;?>/netdata/" class="btn btn-sm btn-primary" target="_blank">See
                        all</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <!-- Projects table -->
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Referral</th>
                        <th scope="col">Visitors</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          CPU
                        </th>
                        <td>
                          <div class="d-flex align-items-center">
                            <div>
                              <embed
                                src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.cpu&alarm=10min_cpu_usage&refresh=auto"
                                type="image/svg+xml" height="20" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          Load Average
                        </th>

                        <td>
                          <div class="d-flex align-items-center">
                            <div>
                              <embed
                                src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.load&alarm=load_average_15&refresh=auto"
                                type="image/svg+xml" height="20" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          RAM in use
                        </th>

                        <td>
                          <div class="d-flex align-items-center">

                            <div>
                              <embed
                                src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.ram&alarm=ram_in_use&refresh=auto"
                                type="image/svg+xml" height="20" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          RAM available
                        </th>

                        <td>
                          <div class="d-flex align-items-center">

                            <div>
                              <embed
                                src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=mem.available&alarm=ram_available&refresh=auto"
                                type="image/svg+xml" height="20" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          Disk Usage
                        </th>

                        <td>
                          <div class="d-flex align-items-center">
                            <div>
                              <embed
                                src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=disk_space._&alarm=disk_space_usage&refresh=auto"
                                type="image/svg+xml" height="20" />
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          System Entropy
                        </th>

                        <td>
                          <div class="d-flex align-items-center">
                            <div>

                              <embed
                                src="https://<?php echo $root; ?>/netdata/api/v1/badge.svg?chart=system.entropy&alarm=lowest_entropy&refresh=auto"
                                type="image/svg+xml" height="20" />

                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Second TAB -->
      <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
        <div class="container-fluid mt--8">
          <div class="row">
            <div class="col mb-5 mb-xl-0">
              <div class="card">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Database</h3>
                    </div>
                    <div class="col text-right">
                      <a href="https://<?php echo $root;?>/netdata/" class="btn btn-sm btn-primary" target="_blank">See
                        all</a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
						<div class="row">
							<div class="container">
								<div class="card-deck">
									<div class="card">
										<div class="text-center mt-4">
											<i class="fas fa-database fa-6x"></i>
											<div class="card-body">
												<h4 class="card-title">phpMyAdmin</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/db/pma/" target="_blank" class="btn btn-outline-primary">
													Open
												</a>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center mt-4">
											<i class="fas fa-database fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Adminer</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/db/adminer/" target="_blank" class="btn btn-outline-primary">
													Open
												</a>

											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center mt-4">
											<i class="fas fa-database fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Anemometer</h4>



											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/db/anemometer/" target="_blank" class="btn btn-outline-primary">
													Open
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
</div>
						</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
        <div class="container-fluid mt--8">
          <div class="row">
            <div class="col mb-5 mb-xl-0">
              <div class="card">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Cache</h3>
                    </div>
                    <div class="col text-right">
                      <a href="https://<?php echo $root;?>/netdata/" class="btn btn-sm btn-primary" target="_blank">See
                        all</a>
                    </div>
                  </div>
                </div>
                						<div class="row">
							<div class="container">
								<div class="card-deck">
									<div class="card">
										<div class="text-center mt-4">
											<i class="fas fa-server fa-6x"></i>
											<div class="card-body">
												<h4 class="card-title">Memcached</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/cache/memcache/" target="_blank" class="btn btn-outline-primary">
													Open
												</a>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center mt-4">
											<i class="fas fa-server fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Redis</h4>

											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/cache/redis/phpRedisAdmin/" target="_blank" class="btn btn-outline-primary">
												Open
												</a>

											</div>
										</div>
									</div>
									<div class="card">
										<div class="text-center mt-4">
											<i class="fas fa-server fa-6x"></i>

											<div class="card-body">
												<h4 class="card-title">Opcache</h4>



											</div>

											<div class="card-footer">
												<a href="https://<?php echo $root; ?>/cache/opcache/opgui.php" target="_blank"class="btn btn-outline-primary">
													Open
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative
              Tim</a> modified by <a href="https://virtubox.net" class="font-weight-bold" target="_blank">VirtuBox</a>
          </div>
        </div>
        <div class="col-xl-6">
          <!--            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>-->
        </div>
      </div>
    </footer>
  </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <!--<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>-->
 <!--<script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  <!-- Argon JS -->
<script src="./assets/js/argon.min.js"></script>

</body>

</html>