
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <h1 class="db-header-title">Welcome, <?php echo $_SESSION['admin'][0]['lname'] ?></h1>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Tổng doanh thu</strong></span>
                <h2><?php echo number_format($total_revenue[0]["SUM(total)"]) . "đ"?></h2>
              </div>
            </div>
            <canvas id="line-chart"></canvas>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Tổng số lượng người dùng</strong></span>
                <h2><?php echo $count_users[0]["COUNT(*)"] ?></h2>
              </div>
            </div>
            <canvas id="line-chart-2"></canvas>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Tổng số lượng nhà hàng</strong></span>
                <h2><?php echo $count_restaurants[0]["COUNT(*)"] ?></h2>
              </div>
            </div>
            <canvas id="line-chart-3"></canvas>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <span class="black-text"><strong>Tổng đơn hàng đã được đặt</strong></span>
                <h2><?php echo $total_revenue[0]["COUNT(*)"] ?></h2>
              </div>
            </div>
            <canvas id="line-chart-4"></canvas>
          </div>
        </div>
        <!-- Recent Orders Requested -->
        
        <!-- Food Orders -->
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Đồ ăn đang hot</h6>
            </div>
            <div class="ms-panel-body">
              <div class="row">
                <?php
                foreach($trending_food as $row) {
                ?>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src=<?php echo $row['photos'] ?> alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6><?php echo $row['name'] ?></h6>
                        <span class="green-text"><strong><?php echo number_format($row['price_value']) . "VNĐ" ?></strong></span>
                      </div>
                      <div class="ms-card-heading-title">
                        <p>Số lượng đặt <span class="red-text"><?php echo $row['SUM(pre_orders.quantity_order)'] ?></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
              </div>
            </div>
          </div>
        </div>
        <!-- END/Food Orders -->

        <!-- Total Earnings -->
        <!-- Recent Placed Orders< -->
        <div class="col-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Một số đơn hàng gần đây</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead>
                    <tr>
                      <th scope="col">Mã ID</th>
                      <th scope="col">Món ăn</th>
                      <th scope="col">Trạng thái</th>
                      <th scope="col">Thời gian đặt</th>
                      <th scope="col">Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($post_orders as $row1) { ?>
                    <tr>
                      <th scope="row"><?php echo $row1['id'] ?></th>
                      <td>
                        <?php
                          foreach($pre_orders as $row2) {
                            if ($row2['order_id'] == $row1['pre_orders_id']) {
                              echo $row2['name'] . " x" . $row2['quantity_order'] .  "<br>";
                            }
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                        if ($row1['status'] == '0') {
                        ?>
                        <span class="badge badge-primary">Đang giao hàng</span>
                        
                        <?php
                        } else if ($row1['status'] == '1') {
                        ?>
                        <span class="badge badge-success">Đã giao</span>
                        <?php
                        } else {
                        ?>
                        <span class="badge badge-dark">Đã hủy</span>
                        <?php
                        }
                        ?>
                      </td>
                      <td><?php echo $row1['time_order'] ?></td>
                      <td><?php echo number_format($row1['total']) . " VNĐ" ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Recent Orders< -->

      </div>
    </div>
