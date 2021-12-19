<!-- Main Content -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb" class="new">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">Menu</a></li>
          <li class="breadcrumb-item active" aria-current="page">Menu Grid</li>
        </ol>
        <a  href="<?php echo "add-menu&id=" . $id ?>" type="button" class="btn grid-btn mt-0 btn-primary">Thêm menu</a>
      </nav>
      <div class="row">
        <?php foreach($result as $row) { ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
          <div class="ms-card">
            <div class="ms-card-img">
              <img style="width: 1000px; height: 170px;" src=<?php echo $row['food_image'] ?> alt="card_img">
            </div>
            <div class="ms-card-body">
              <div class="new">
                <h6 class="mb-0"><?php echo $row['food_name'] ?> </h6>
                <h6 class="ms-text-primary mb-0"><?php echo $row['food_price']/1000 . ".000" . $row['food_unit'] ?></h6>
              </div>
              <p><?php echo "Mô tả: " . $row['food_description'] ?></p>
              <div class="new mb-0">
                <!-- <button type="button" class="btn grid-btn mt-0 btn-primary">Remove</button> -->
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

</div>