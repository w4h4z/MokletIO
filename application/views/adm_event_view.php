  <section class="content-header">
      <h1>
        Event
        <small><?php echo $sub->SINGKATAN_SUB ;?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Event</h3>
        <br>
        <br>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modal_event"><span class="glyphicon glyphicon-plus"></span> Add New Event</button>
        <?php
          $failed = $this->session->flashdata('failed');
            if(!empty($failed)){
              echo '<div class="alert alert-danger alert-dismissable"  style="margin-top: 10px">';
              echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
              echo '<i class="icon fa fa-warning"></i>';
              echo $failed;
              echo '</div>';
            }
          
          $success = $this->session->flashdata('success');
          if(!empty($success)){
              echo '<div class="alert alert-success alert-dismissable"  style="margin-top: 10px">';
              echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
              echo '<i class="icon fa fa-check"></i>';
              echo $success;
              echo '</div>';
          }
          ?>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="event" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Event Name</th>
                <th>Desc Event</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i = 1;
                foreach ($event as $data) {
                  echo '
                  <tr>
                    <td>'.$i++.'</td>
                    <td>'.$data->NAMA_EVENT.'</td>
                    <td style="max-width:100px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis">'.$data->DESC_DETAIL.'</td>
                    <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_detail"><span class="glyphicon glyphicon-zoom-in"></span></button>
                                      <button class="btn btn-warning btn-sm edit" data-toggle="modal" data-target="#modal_edit'.$data->ID_EVENT.'"><span class="glyphicon glyphicon-pencil"></span></button>
                                      <a href="'.base_url('/event/deleteEvent/').''.$data->ID_DETAIL.'/'.$data->ID_EVENT.'" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><span class="glyphicon glyphicon-trash"></span></a></td>
                  </tr>
                  ';
                }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
  </section>
    <!-- /.content -->



      <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_event" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Add New Event</h3>
        </div>
        <div class="modal-body form">
          <form action="<?php echo base_url('event/addEvent'); ?>" id="formEvent" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Event Title</label>
              <div class="col-md-9">
                <input name="name" placeholder="Event Name" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Sub Title</label>
              <div class="col-md-9">
                <input name="title" placeholder="Title" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Detail Name</label>
              <div class="col-md-9">
                <input name="detail" placeholder="Detail Name" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Mini Name</label>
              <div class="col-md-9">
                <input name="miniName" placeholder="Mini Name" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Sub Detail Name</label>
              <div class="col-md-9">
                <input name="subName" placeholder="Sub Detail Name" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Desc Event</label>
              <div class="col-md-9">
                <textarea class="form-control" placeholder="Desc" name="desc" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Banner Photo</label>
              <div class="col-md-9">
                <input name="photoBanner" class="form-control" type="file" id="imgInp" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Poster Photo</label>
              <div class="col-md-9">
                <input name="photoPoster" class="form-control" type="file" id="imgInp1" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
    
<?php 
foreach ($event as $data) {
  echo '
      <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_edit'.$data->ID_EVENT.'" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Edit Event</h3>
        </div>
        <div class="modal-body form">
          <form action="'.base_url().'event/editEvent/'.$data->ID_EVENT.'" id="formEvent" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Event Title</label>
              <div class="col-md-9">
                <input name="name" placeholder="Event Name" class="form-control" type="text" required value="'.$data->NAMA_EVENT.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Sub Title</label>
              <div class="col-md-9">
                <input name="title" placeholder="Title" class="form-control" type="text" required value="'.$data->SUB_NAMA_EVENT.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Detail Name</label>
              <div class="col-md-9">
                <input name="detail" placeholder="Detail Name" class="form-control" type="text" required value="'.$data->NAMA_DETAIL.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Mini Name</label>
              <div class="col-md-9">
                <input name="miniName" placeholder="Mini Name" class="form-control" type="text" required value="'.$data->NAMA_MINI_TITLE.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Sub Detail Name</label>
              <div class="col-md-9">
                <input name="subName" placeholder="Sub Detail Name" class="form-control" type="text" required value="'.$data->SUB_NAMA_TITLE.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Desc Event</label>
              <div class="col-md-9">
                <textarea class="form-control" placeholder="Desc" name="desc" required style="height:150px">'.$data->DESC_DETAIL.'</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Banner Photo</label>
              <div class="col-md-9">
                <input name="photoBanner" class="form-control" type="file" id="imgInp">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Poster Photo</label>
              <div class="col-md-9">
                <input name="photoPoster" class="form-control" type="file" id="imgInp1">
              </div>
            </div>
          </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
  ';
}

?>

    <script type="text/javascript">
      function confirmDelete() {
        var txt;
        var r = confirm("Are you sure want to Delete?");
        if (r) {
            return true;
        } else {
            return false;
        }
      }
    </script>
