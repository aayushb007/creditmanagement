<?php include("include/header.php"); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">USERS</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Credit</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php
                $sql = "select * from user order by uid desc";
                $rs = mysqli_query($con,$sql);
                $i = 1;
                while($row = mysqli_fetch_array($rs)){
                ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row['name'];?></td>
                  <td><?=$row['email']?></td>
                  <td><?=$row['credit']?></td>
                  <td><a href="add_bazar.php?game_id=<?=$row['game_id']?>" >Edit</a></td>
                </tr>
                <?php $i++; } ?>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
 <?php include("include/footer.php"); ?>
