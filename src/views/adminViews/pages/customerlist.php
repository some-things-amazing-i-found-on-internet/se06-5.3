<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Customer</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customer List</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Customer List</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-4" class="table w-100 thead-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Street</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customers as $customer) { ?>
                                    <tr>
                                        <th scope="row"> <?php echo $customer['id'] ?> </th>
                                        <td><?php echo $customer['fname'] . " " . $customer['lname'] ?></td>
                                        <td> <?php echo $customer['address'] ?></td>
                                        <td> <?php echo $customer['road'] ?></td>
                                        <td> <?php echo $customer['email'] ?></td>
                                        <td> <?php echo $customer['phone'] ?></td>
                                        <td> <?php echo $customer['role'] == 0 ? "User" : ($customer['role'] == 1 ? "Admin Restaurant" : "Admin") ?></td>
                                        <?php if ($customer['Status'] == 1) { ?>
                                            <td>
                                                <form method="POST">
                                                    <button name="deactive" class="badge badge-success" value="<?php echo $customer['id'] ?>">Active</button>
                                                </form>
                                            </td>
                                        <?php } else { ?>
                                            <td>
                                                <form method="POST">
                                                    <button name="active" class="badge badge-dark" value="<?php echo $customer['id'] ?>">Inactive</button>
                                                </form>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>