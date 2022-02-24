
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/image_style.css'); ?>"> -->

<body>

<div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-sm-8 col-8 border rounded main-section">
        <h3 class="text-center text-inverse">Edit Employee Details</h3>
        <hr>
        <?php
                                        foreach ($employ as $row) { ?>
        <form class="container" id="needs-validation" enctype="multipart/form-data" action="<?php echo base_url('Employee/create_employee'); ?>" method="POST" novalidate>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom01">Name *</label>
                <input type="text" class="form-control" id="validationCustom01" name="name" value="<?php echo $row->name ?>" placeholder="First name" value="" required>
              </div>
            </div>
           
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label class="text-inverse" for="inputEmail4">Email *</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $row->email ?>" placeholder="Email" required>
                <div class="invalid-feedback">
                  Please provide a valid Email.
                </div>
              </div>  
            </div>
         
          </div>
          <div class="row">
         
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="select-menu">Designation *</label>
                <select class="custom-select d-block form-control" id="image" name="desigination"  required>
                  <option value=""><?php echo $row->desigination ?></option>
                  <?php

foreach ($desigination as $row) { ?>
    <option value="<?= $row->desigination; ?>"><?= $row->desigination; ?></option>


<?php  }
?>

                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
          </div>
          <div class="row">
          <div class="form-group">
          <div class="wrapper">
  <div class="box">
    <div class="js--image-preview"></div>
    <div class="upload-options">
      <label>
        <input type="file" class="image-upload"   name="empoly_image" accept="image/*" />
      </label>
    </div>
  </div>

 </div>
</div>
          </div>
     
          <hr>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <button class="btn btn-info" type="submit">Update form</button>
            </div>
          </div>  
        </form>
        <?php } ?>
      </div>
    </div>  
</div>
        
</body>


<script  src="<?php echo base_url('assets/js/image_script.js'); ?>"></script>