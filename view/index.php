
<?php
  $content = '
  <div class="container-fluid ">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Cross-Functional Meetings</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">
      <!--Key topics--->
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-primary font-weight-bold">Merchants</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="chart3" class="h-100"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>


      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow  py-2">
              <div class="card-body">

                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-success font-weight-bold">Terminal</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="chart4" class="h-100"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow  py-2">
              <div class="card-body">

                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="col mr-2">
                              <div class="h5 mb-0 text-info font-weight-bold">Last Week</div>
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="chart5" class="h-100"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">

          <div class="card border-left-warning shadow  py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-warning font-weight-bold">Iceland</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="chartt" class="h-100"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </div>
  </div>

  <div class="row">
      <div class="col-sm">
          <div class="card shadow mb-4">
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Subjective / Polarity Score (Sentiment)</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                          aria-labelledby="dropdownMenuLink">
                          <div class="dropdown-header">Dropdown Header:</div>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                  </div>
              </div>
              <div class="card-body">
                  <div class="chart-area">
                      <div id="chartContainer" class="h-100"></div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-sm">
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Sentiment Overtime</h6>
              </div>
              <div class="card-body">
                  <div class="chart-area">
                      <div id="chart2" class="h-100"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row mb-4">

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-primary font-weight-bold">People Team</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="team" class="h-100"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-success font-weight-bold">Sales Team</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa- fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="team2" class="h-100"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-warning font-weight-bold">Customer Relations Team
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="team3" class="h-100"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="h5 mb-0 text-success font-weight-bold">Tech Team</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>

                  <div class="row no-gutters align-items-center">
                      <div class="col mt-3 ">
                          <div class="chart-area">
                              <div id="team4" class="h-100"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>';
  include('../master.php');
?>