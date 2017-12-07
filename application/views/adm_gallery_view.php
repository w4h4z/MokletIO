<style>
  .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 100%;
  }

  .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

  .container {
      padding: 2px 16px;
  }
</style>

  <section class="content-header">
      <h1>
        Gallery
        <small><?php echo $sub->SINGKATAN_SUB ;?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
<!--         	<h3 class="box-title"></h3> -->
            </div>

            <!-- /.box-header -->
            <div class="box-body">
               <?php
                  $failed = $this->session->flashdata('failed');
                    if(!empty($failed)){
                      echo '<div class="alert alert-danger alert-dismissable">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                      echo '<i class="icon fa fa-warning"></i>';
                      echo $failed;
                      echo '</div>';
                    }

                  $success = $this->session->flashdata('success');
                  if(!empty($success)){
                      echo '<div class="alert alert-success alert-dismissable">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                      echo '<i class="icon fa fa-check"></i>';
                      echo $success;
                      echo '</div>';
                  }
                ?>
              <button class="btn btn-success" data-toggle="modal" data-target="#addPhoto"><span class="glyphicon glyphicon-plus"></span> Add New Photo</button>
              <hr>
              <div class="row">
              <?php
                foreach ($gallery as $data) {
                  echo '
                    <div class="col-lg-3" style="margin-bottom: 20px">
                    <div class="card">
                      <img src="'.base_url().'uploads/'.$data->FOTO_GAL.'" alt="Avatar" style="width:100%">
                      <div class="container">
                        <h4><b>'.$data->FOTO_GAL.'</b></h4> 
                        <div style="padding-bottom: 10px">
                          <a href="'.base_url().'gallery/deleteGallery/'.$data->ID_GAL.'" onclick="return ConfirmDelete();" style="margin-right: 10px"><span class="fa fa-trash fa-2x"></span></a>
                          <a href="#" data-toggle="modal" data-target="#detailPhoto'.$data->ID_GAL.'"><span class="fa fa-search-plus fa-2x"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ';
                }
              ?>
                          
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>     
      </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->

<?php
  foreach ($gallery as $data) {
    echo '

<!-- Modal -->
<div id="detailPhoto'.$data->ID_GAL.'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Photo</h4>
      </div>
      <div class="modal-body">
        <img src="'.base_url().'uploads/'.$data->FOTO_GAL.'" alt="Avatar" style="width:100%">
      </div>
      <div class="modal-footer">
        <div class="pull-left">'.$data->FOTO_GAL.'</div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    ';
  }
?>


<!-- Modal -->
<div id="addPhoto" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Photo</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('gallery/uploadGallery'); ?>" id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group" style="margin-bottom: 70px;margin-top: 20px">
          <label class="control-label col-lg-4 col-xs-12">Select Multiple Photo</label>
          <div class="col-lg-8 col-xs-12">
           <input name="upl_files[]" class="form-control" type="file" multiple>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>

  </div>
</div>



<script>
 function ConfirmDelete() {
    var txt;
    var r = confirm("Are you sure want to Delete?");
    if (r) {
        return true;
    } else {
        return false;
    }
 }
</script>


