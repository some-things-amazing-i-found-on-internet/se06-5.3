  <!-- Body Content Wrapper -->

  <div class="ms-content-wrapper">
      <div class="row">

          <div class="col-md-12">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">New Restaurants</li>

                  </ol>
              </nav>
              <!-- Active Orders Graph -->
              <div class="row">
                  <!-- <div class="col-lg-12 col-md-12">
            <div class="ms-panel ms-panel-fh">
              <div class="ms-panel-header">
                <h6>Restaurant wise sales</h6>

              </div>
              <div class="ms-panel-body">

                <div class="row">
                  <div class="col-xl-4 col-md-4">
                    <div class="ms-graph-labels column-direction">
                      <div class="ms-chart-no-label">
                        <span class="bg-success"></span>
                        <p>$9,348,319</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-primary"></span>
                        <p>$4,344,316</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-warning"></span>
                        <p>$518,513</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-danger"></span>
                        <p>$348,319</p>
                      </div>
                      <div class="ms-chart-no-label">
                        <span class="bg-secondary"></span>
                        <p>$3,416,139</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-8 col-md-8">
                    <canvas id="pie-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
                  <div class="col-xl-12">
                      <div class="ms-panel">
                          <div class="ms-panel-header d-flex justify-content-between pb-0" style="align-items: baseline;">
                              <h6 class="mr-3">New Restaurants</h6>
                              <nav aria-label="Page navigation example">
                                  <ul class="pagination">
                                  </ul>
                              </nav>
                          </div>
                          <div class="ms-panel-body">

                              <div class="table-responsive">
                                  <table class="table table-hover thead-primary">
                                      <thead>
                                          <tr>
                                              <th scope="col">ID</th>
                                              <th scope="col">Restaurant Name</th>
                                              <th scope="col">Location</th>
                                              <th scope="col">Phone</th>

                                              <th scope="col">Food Link</th>
                                              <th scope="col">Lock</th>

                                          </tr>
                                      </thead>
                                      <?php foreach($result as $row) { ?>
                                      <tbody>
                                          <tr>
                                              <th style="width: 10%;" scope="row"><?php echo $row['restaurant_id'] ?></th>
                                              <td style="width: 15%;"><?php echo $row['restaurant_name'] ?></td>
                                              <td style="width: 30%;"><?php echo $row['restaurant_address'] . ", " . $row['district'] . ", " . $row['city'] ?></td>
                                              <td>
                                                  <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                      <li class="ms-rating-item rated d-flex">
                                                          <div class="mr-2"><?php echo $row['restaurant_phone'] ?></div>
                                                      </li>
                                                  </ul>
                                              </td>
                                              <td>
                                                  <a target="__blank" href=""><i class='fas fa-paper-plane text-secondary text-success'></i></a>
                                              </td>
                                              <td>
                                                  <a href="<?php echo "new-restaurant&id=" . $row['restaurant_id'] ?>"><i class='fas fa-lock text-secondary'></i></a>
                                                  <!-- <a href='a.html'><i class='far fa-trash-alt ms-text-danger'></i></a> -->
                                              </td>
                                          </tr>
                                      </tbody>
                                      <?php } ?>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>