<?php include("include/header.php"); ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TRANFER CREDITS
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action='process_add_bazzar.php' method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>enter user1 mailid</label>
                  <input type="text" class="form-control" id="bazar_name" name="usr1" placeholder="Enter user1 Mailid">
                </div>
                <div class="form-group">
                  <label>Enter credits for transfer</label>
                  <input type="number" class="form-control" placeholder="Enter Credits"  id="open_time" name="credit">
                </div>
                <div class="form-group">
                  <label>enter user2 mailid</label>
                  <input type="text" class="form-control" placeholder="Enter user2 Mail id" id="close_time" name="usr2">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 <?php  include("include/footer.php");

 ?>
