<!-- Main Content -->
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">Menu</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Product</li>
        </ol>
      </nav>

      <div class="alert alert-success" role="alert">
        <strong>Điền đầy đủ thông tin vào mẫu dưới đây!</strong>
      </div>
    </div>
    <div class="col-xl-6 col-md-12">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-header">
          <h6>Mẫu thêm đồ ăn</h6>
        </div>
        <div class="ms-panel-body">
          <form class="" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom18">Tên món ăn</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="food_name" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom24">Đơn giá</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="food_price" required>
                  <div class="invalid-feedback">
                    Quantity
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom25">Đơn vị tiền</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="food_unit" required>
                  <div class="invalid-feedback">
                    Price
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom12">Miêu tả</label>
                <div class="input-group">
                  <textarea rows="5" class="form-control" name="food_description" required></textarea>
                  <div class="invalid-feedback">
                    Please provide a message.
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom12">Ảnh đồ ăn</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload" required>
                  <label class="custom-file-label" for="validatedCustomFile">Tải lên một ảnh...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
              </div>
              <button class="btn btn-primary d-block" type="submit">Lưu</button>
            </div>
          </form>

        </div>
      </div>

    </div>

    <div class="col-xl-6 col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Product </h6>
            </div>
            <div class="ms-panel-body">
              <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $prefixPath ?>assets/img/costic/add-product-1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $prefixPath ?>assets/img/costic/add-product-2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $prefixPath ?>assets/img/costic/add-product-3.jpg" alt="Third slide">
                  </div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#imagesSlider" data-slide-to="0" class="active"> <img class="d-block w-100" src="<?php echo $prefixPath ?>assets/img/costic/add-product-1.jpg" alt="First slide"></li>
                  <li data-target="#imagesSlider" data-slide-to="1"><img class="d-block w-100" src="<?php echo $prefixPath ?>assets/img/costic/add-product-2.jpg" alt="Second slide"></li>
                  <li data-target="#imagesSlider" data-slide-to="2"><img class="d-block w-100" src="<?php echo $prefixPath ?>assets/img/costic/add-product-3.jpg" alt="Third slide"></li>
                </ol>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>