<div class="ms-content-wrapper">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-0">
					<li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
					</li>
					<li class="breadcrumb-item"><a href="#">Invoice</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
				</ol>
			</nav>
			<div class="ms-panel">
				<div class="ms-panel-header header-mini">
					<div class="d-flex justify-content-between">
						<h6>Invoice</h6>
						<h6><?php echo "#" . $_GET['id']; ?></h6>
					</div>
				</div>
				<div class="ms-panel-body">
					<!-- Invoice To -->
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="invoice-address">
								<h3><?php echo $data[0]['rname']; ?> </h3>
								<h5><?php echo $data[0]['fname'] . " " . $data[0]['lname']; ?></h5>
								<p><?php echo $data[0]['email']; ?></p>
								<p class="mb-0"><?php echo $data[0]['address']; ?></p>
								<p class="mb-0"><?php echo $data[0]['road']; ?></p>
							</div>
						</div>
						<div class="col-md-6 text-md-right">
							<ul class="invoice-date">
								<li>Invoice Date : <?php echo $data[0]['time_order']; ?></li>
							</ul>
						</div>
					</div>
					<!-- Invoice Table -->
					<div class="ms-invoice-table table-responsive mt-5">
						<table class="table table-hover text-right thead-light">
							<thead>
								<tr class="text-capitalize">
									<th class="text-center w-5">id</th>
									<th class="text-left">Tên món</th>
									<th>Số lượng</th>
									<th>Đơn giá</th>
									<th>Giá tiền</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach ($data as $row) { ?>
									<tr>
										<td class="text-center"><?php echo $i;
																$i++; ?></td>
										<td class="text-left"><?php echo $row['name']; ?></td>
										<td><?php echo $row['quantity_order']; ?></td>
										<td><?php echo $row['price_value'] . "đ"; ?></td>
										<td><?php echo ($row['price_value'] * $row['quantity_order']) . "đ"; ?></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="<?php echo $i - 1; ?>">Thành tiền:</td>
									<td><?php echo $data[0]['total'] . "đ"; ?></td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="invoice-buttons text-right"> <a href="#" class="btn btn-primary mr-2">Print Invoice</a>
						<a href="#" class="btn btn-primary">Send Invoice</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>