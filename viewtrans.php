<?php include("include/header.php"); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        VIEW ALL TRANSFER DETAILS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Modify Data</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Transfers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>User1</th>
                  <th>Credit</th>
                  <th>User2</th>

                </tr>
                <?php
                $sql = "select * from transfer order by transid desc";
                $rs = mysqli_query($con,$sql);
                $i = 1;
                while($row = mysqli_fetch_array($rs)){
                ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$row['user1'];?></td>
                  <td><?=$row['credits']?></td>
                  <td><?=$row['user2']?></td>

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
