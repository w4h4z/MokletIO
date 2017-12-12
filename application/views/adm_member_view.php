<section class="content-header">
  <h1>
    Manage Member
    <small><?php echo $sub->SINGKATAN_SUB ;?></small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Member</h3>
        <br>
        <br>
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
                <th>Name</th>
                <th>Generation</th>
                <th>Class</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Tittle</th>
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
                                  <td class="data-kelas">'.$data->KELAS_MEMBER.'</td>
                                  <td>'.$data->NO_HP_MEMBER.'</td>
                                  <td>'.$data->EMAIL_MEMBER.'</td>
                                  <td>'.$data->JABATAN_MEMBER.'</td>
                                  <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_detail'.$data->ID_MEMBER.'"><span class="glyphicon glyphicon-zoom-in"></span></button>
                                      <button  class="btn btn-warning btn-sm edit" data-toggle="modal" data-target="#modal_edit'.$data->ID_MEMBER.'"><span class="glyphicon glyphicon-pencil"></span></button>
                                      <a href="'.base_url('member/deleteNewMember/'.$data->ID_MEMBER.'/1').'" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><span class="glyphicon glyphicon-trash"></span></a>
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
              <label class="control-label col-md-3">Generation *</label>
              <div class="col-md-9">
                <input name="angkatan" placeholder="Generation" class="form-control" type="number" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Class *</label>
              <div class="col-md-9">
                <select class="form-control" name="kelas">
                  <option value="XRPL1">XRPL1</option>
                  <option value="XRPL2">XRPL2</option>
                  <option value="XRPL3">XRPL3</option>
                  <option value="XRPL4">XRPL4</option>
                  <option value="XRPL5">XRPL5</option>
                  <option value="XRPL6">XRPL6</option>
                  <option value="XTKJ1">XTKJ1</option>
                  <option value="XTKJ2">XTKJ2</option>
                  <option value="XTKJ3">XTKJ3</option>
                  <option value="XTKJ4">XTKJ4</option>
                  <option value="XTKJ5">XTKJ5</option>
                  <option value="XTKJ6">XTKJ6</option>
                  <option value="XIRPL1">XIRPL1</option>
                  <option value="XIRPL2">XIRPL2</option>
                  <option value="XIRPL3">XIRPL3</option>
                  <option value="XIRPL4">XIRPL4</option>
                  <option value="XIRPL5">XIRPL5</option>
                  <option value="XIRPL6">XIRPL6</option>
                  <option value="XITKJ1">XITKJ1</option>
                  <option value="XITKJ2">XITKJ2</option>
                  <option value="XITKJ3">XITKJ3</option>
                  <option value="XITKJ4">XITKJ4</option>
                  <option value="XITKJ5">XITKJ5</option>
                  <option value="XITKJ6">XITKJ6</option>
                  <option value="XIIRPL1">XIIRPL1</option>
                  <option value="XIIRPL2">XIIRPL2</option>
                  <option value="XIIRPL3">XIIRPL3</option>
                  <option value="XIIRPL4">XIIRPL4</option>
                  <option value="XIIRPL5">XIIRPL5</option>
                  <option value="XIIRPL6">XIIRPL6</option>
                  <option value="XIITKJ1">XIITKJ1</option>
                  <option value="XIITKJ2">XIITKJ2</option>
                  <option value="XIITKJ3">XIITKJ3</option>
                  <option value="XIITKJ4">XIITKJ4</option>
                  <option value="XIITKJ5">XIITKJ5</option>
                  <option value="XIITKJ6">XIITKJ6</option>
                </select>
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
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Bootstrap modal -->

<?php
  foreach ($member as $data) {
    echo '
      <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_detail'.$data->ID_MEMBER.'" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Detail New Member</h3>
        </div>
        <div class="modal-body form">
          <img src="'.base_url().'uploads/'.$data->FOTO_MEMBER.'" class="form-control col-lg-offset-3 col-xs-offset-3" style="height: 50%;width: 50%; margin-bottom: 20px">
            <div class="row">
              <div class="form-group col-lg-offset-2 col-xs-offset-2">
                <label class="control-label col-md-4 text-right">Name</label>
                <div class="col-md-8">
                  '.$data->NAMA_MEMBER.'
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-2 col-xs-offset-2">
                <label class="control-label col-md-4 text-right">Generation</label>
                <div class="col-md-8">
                  '.$data->ANGKATAN_MEMBER.'
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-2 col-xs-offset-2">
                <label class="control-label col-md-4 text-right">Class</label>
                <div class="col-md-8">
                  '.$data->KELAS_MEMBER.'
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-2 col-xs-offset-2">
                <label class="control-label col-md-4 text-right">Phone Number</label>
                <div class="col-md-8">
                  '.$data->NO_HP_MEMBER.'
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-2 col-xs-offset-2">
                <label class="control-label col-md-4 text-right">Email</label>
                <div class="col-md-8">
                  '.$data->EMAIL_MEMBER.'
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-offset-2 col-xs-offset-2">
                <label class="control-label col-md-4 text-right">Reason to Join</label>
                <div class="col-md-8">
                  '.$data->ALASAN_MEMBER.'
                </div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    <!-- End Bootstrap modal -->
    ';
  }

foreach ($member as $data) {
  echo '
  <!-- Bootstrap modal -->
<div class="modal fade" id="modal_edit'.$data->ID_MEMBER.'" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Edit New Member Form</h3>
      </div>
      <div class="modal-body form">
        <form action="'.base_url('member/editNewMember/'.$data->ID_MEMBER.'/1').'" id="form" class="form-horizontal" method="post" enctype="multipart/form-data">
          <input type="hidden" value="" name="member_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Name *</label>
              <div class="col-md-9">
                <input name="name" placeholder="Name" class="form-control" type="text" required value="'.$data->NAMA_MEMBER.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Generation *</label>
              <div class="col-md-9">
                <input name="angkatan" placeholder="Generation" class="form-control" type="number" required value="'.$data->ANGKATAN_MEMBER.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Class *</label>
              <div class="col-md-9">
                <select class="form-control" id="kelas" name="kelas">
                  <option value="XRPL1">XRPL1</option>
                  <option value="XRPL2">XRPL2</option>
                  <option value="XRPL3">XRPL3</option>
                  <option value="XRPL4">XRPL4</option>
                  <option value="XRPL5">XRPL5</option>
                  <option value="XRPL6">XRPL6</option>
                  <option value="XTKJ1">XTKJ1</option>
                  <option value="XTKJ2">XTKJ2</option>
                  <option value="XTKJ3">XTKJ3</option>
                  <option value="XTKJ4">XTKJ4</option>
                  <option value="XTKJ5">XTKJ5</option>
                  <option value="XTKJ6">XTKJ6</option>
                  <option value="XIRPL1">XIRPL1</option>
                  <option value="XIRPL2">XIRPL2</option>
                  <option value="XIRPL3">XIRPL3</option>
                  <option value="XIRPL4">XIRPL4</option>
                  <option value="XIRPL5">XIRPL5</option>
                  <option value="XIRPL6">XIRPL6</option>
                  <option value="XITKJ1">XITKJ1</option>
                  <option value="XITKJ2">XITKJ2</option>
                  <option value="XITKJ3">XITKJ3</option>
                  <option value="XITKJ4">XITKJ4</option>
                  <option value="XITKJ5">XITKJ5</option>
                  <option value="XITKJ6">XITKJ6</option>
                  <option value="XIIRPL1">XIIRPL1</option>
                  <option value="XIIRPL2">XIIRPL2</option>
                  <option value="XIIRPL3">XIIRPL3</option>
                  <option value="XIIRPL4">XIIRPL4</option>
                  <option value="XIIRPL5">XIIRPL5</option>
                  <option value="XIIRPL6">XIIRPL6</option>
                  <option value="XIITKJ1">XIITKJ1</option>
                  <option value="XIITKJ2">XIITKJ2</option>
                  <option value="XIITKJ3">XIITKJ3</option>
                  <option value="XIITKJ4">XIITKJ4</option>
                  <option value="XIITKJ5">XIITKJ5</option>
                  <option value="XIITKJ6">XIITKJ6</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Phone Number *</label>
              <div class="col-md-9">
                <input name="phone" placeholder="Phone Number" class="form-control" type="number" required value="'.$data->NO_HP_MEMBER.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Email *</label>
              <div class="col-md-9">
                <input name="email" placeholder="Email" class="form-control" type="email" required value="'.$data->EMAIL_MEMBER.'">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Reason to Join</label>
              <div class="col-md-9">
                <textarea class="form-control" name="reason" rows="4" placeholder="Reason to Join">'.$data->ALASAN_MEMBER.'</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Photo</label>
              <div class="col-md-9">
                <input name="photoMember1" class="form-control" type="file" id="imgInp1">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Preview</label>
              <div class="col-md-9">
                <img src="'.base_url().'uploads/'.$data->FOTO_MEMBER.'" class="user-image form-control" alt="Photo Preview" id="preview1" style="height: 100%">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Bootstrap modal -->

  ';
}

  ?>


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

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('#preview1').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  $("#imgInp1").change(function() {
    readURL(this);
  });

  $('.edit').click(function() {
    var kelas = $(this).parent('td').siblings('.data-kelas').html()
    $('#kelas option[value="'+kelas+'"').attr('selected', true);
  });

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