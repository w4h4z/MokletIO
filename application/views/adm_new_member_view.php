  <section class="content-header">
      <h1>
        Manage New Register Member
        <small><?php echo $sub->SINGKATAN_SUB ;?></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data New Register Member</h3>
              <br>
              <br>
              <button class="btn btn-success" data-toggle="modal" data-target="#modal_form"><span class="glyphicon glyphicon-plus"></span> Add New Member</button>
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
              <table id="newMember" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Angkatan</th>
                  <th>No Hp</th>
                  <th>Email</th>
                  <th>...</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
<?php 
$i = 1;
foreach ($member as $data) {
  echo '
      <tr>
                  <td>'.$i++.'</td>
                  <td>'.$data->NAMA_MEMBER.'</td>
                  <td>'.$data->ANGKATAN_MEMBER.'</td>
                  <td>'.$data->NO_HP_MEMBER.'</td>
                  <td>'.$data->EMAIL_MEMBER.'</td>
                  <td><button class="btn btn-primary btn-sm">...</button></td>
                  <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_detail"><span class="glyphicon glyphicon-zoom-in"></span></button>
                      <button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button>
                      <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                  </td>
                </tr>
  '; 
}
  
?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>     
      </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->


  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">New Member Form</h3>
      </div>
      <div class="modal-body form">
        <form action="<?php echo base_url('member/addMember');?>" id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
          <input type="hidden" value="" name="member_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Name *</label>
              <div class="col-md-9">
                <input name="name" placeholder="Name" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Angkatan *</label>
              <div class="col-md-9">
                <input name="angkatan" placeholder="Angkatan" class="form-control" type="number" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Phone Number *</label>
              <div class="col-md-9">
                <input name="phone" placeholder="Phone Number" class="form-control" type="number" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Email *</label>
              <div class="col-md-9">
                <input name="email" placeholder="Email" class="form-control" type="email" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Reason to Join</label>
              <div class="col-md-9">
                <textarea class="form-control" name="reason" rows="4" placeholder="Reason to Join"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Photo</label>
              <div class="col-md-9">
                <input name="photoMember" class="form-control" type="file" id="imgInp">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Preview</label>
              <div class="col-md-9">
                <img src="#" class="user-image form-control" alt="Photo Preview" id="preview" style="height: 100%">
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


<!-- Bootstrap modal -->
  <div class="modal fade" id="modal_detail" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Detail New Member</h3>
      </div>
      <div class="modal-body form">
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->


<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });

</script>