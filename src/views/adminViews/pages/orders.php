<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
	<div class="row">

		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Orders</li>

				</ol>
			</nav>
			<div class="col-md-12">
				<div class="ms-panel ms-panel-fh">
					<div class="ms-panel-header">
						<h6>Favourite Orders</h6>
					</div>
					<div class="ms-panel-body order-circle">

						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-6">
								<h6 class="text-center">Pizza</h6>
								<div class="progress-rounded progress-round-tiny">

									<div class="progress-value">12%</div>
									<svg>
										<circle class="progress-cicle bg-success" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="12" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
										</circle>
									</svg>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6">
								<h6 class="text-center">Mexican Noodels</h6>
								<div class="progress-rounded progress-round-tiny">
									<div class="progress-value">38.8%</div>
									<svg>
										<circle class="progress-cicle bg-primary" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="38.8" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
										</circle>
									</svg>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6">
								<h6 class="text-center">Spicy Salad</h6>
								<div class="progress-rounded progress-round-tiny">
									<div class="progress-value">78.8%</div>
									<svg>
										<circle class="progress-cicle bg-secondary" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="78.8" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
										</circle>
									</svg>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6">
								<h6 class="text-center">French Fries</h6>
								<div class="progress-rounded progress-round-tiny">
									<div class="progress-value">100%</div>
									<svg>
										<circle class="progress-cicle bg-dark" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="100" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
										</circle>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="ms-panel">
					<div class="ms-panel-header">
						<h6> Order List</h6>
					</div>
					<div class="ms-panel-body">
						<div class="table-responsive">
							<table class="table table-hover thead-primary">
								<thead>
									<tr>
										<th scope="col">Order ID</th>
										<th scope="col">Customer Name</th>
										<th scope="col">Restaurant</th>
										<th scope="col">Order Status</th>
										<th scope="col">Delivered Time</th>
										<th scope="col">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $row) { ?>
										<tr>
											<th scope="row"><a href="invoice?id=<?php echo $row['pre_orders_id']; ?>"> <?php echo $row['pre_orders_id']; ?></a></th>
											<td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td>
												<?php
												if ($row['status'] == 0) {
													echo "<span class=\"badge badge-primary\">Đang giao</span>";
												} else if ($row['status'] == 1) {
													echo "<span class=\"badge badge-success\">Đã giao</span>";
												} else {
													echo "<span class=\"badge badge-dark\">Đã hủy</span>";
												} ?>

											</td>
											<td><?php echo $row['time_order']; ?></td>
											<td><?php echo $row['total'] . "đ"; ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>