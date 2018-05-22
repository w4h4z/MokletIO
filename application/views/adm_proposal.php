
  <section class="content-header">
    <h1>
      Manage Proposal
      <small><?php echo $sub->SINGKATAN_SUB ;?></small>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Proposal</h3>
            <br>
            <br>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal_form" id="btnTambahProposal"><span class="glyphicon glyphicon-plus"></span> Add New Proposal</button>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="newMember" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tittle</th>
                    <th>Date</th>
                    <th>Keterangan</th>
                    <th>File</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="dataProposal">
                  
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
          <h3 class="modal-title">New Proposal Form</h3>
        </div>
        <div class="modal-body form">
          <form class="form-horizontal" method="post" enctype="multipart/form-data" id="tambahProposal">
            <input type="hidden" value="" name="member_id"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3">Tittle *</label>
                <div class="col-md-9">
                  <input name="tittle" placeholder="Tittle" class="form-control" type="text" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Keterangan</label>
                <div class="col-md-9">
                  <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">File *</label>
                <div class="col-md-9">
                  <input name="fileProposal" class="form-control" type="file" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <!-- <button type="submit" class="btn btn-primary">Save</button> -->
            <input type="submit" name="submit" class="btn btn-primary" value="Save" onclick="insertProposal()">
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- End Bootstrap modal -->


   <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form_update" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Edit Proposal Form</h3>
        </div>
        <div class="modal-body form">
          <form class="form-horizontal" method="post" enctype="multipart/form-data" id="editProposal">
            <input type="hidden" id="idProposal" name="idProposal"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3">Tittle *</label>
                <div class="col-md-9">
                  <input name="tittle" placeholder="Tittle" class="form-control" type="text" id="tittleProposal" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Keterangan</label>
                <div class="col-md-9">
                  <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="ketProposal"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <!-- <button type="submit" class="btn btn-primary">Save</button> -->
            <input type="submit" name="submit" class="btn btn-primary" value="Save" onclick="updateProposal()">
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- End Bootstrap modal -->

     <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form_update_file" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Edit File Proposal Form</h3>
        </div>
        <div class="modal-body form">
          <form class="form-horizontal" method="post" enctype="multipart/form-data" id="editFileProposal">
            <input type="hidden" id="idProposalFile" name="idProposal"/>
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-md-3">Select File</label>
                <div class="col-md-9">
                  <input type="file" name="fileProposal" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <!-- <button type="submit" class="btn btn-primary">Save</button> -->
            <input type="submit" name="submit" class="btn btn-primary" value="Save" onclick="updateFileProposal()">
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- End Bootstrap modal -->


<script>

  $('#btnTambahProposal').on('click', function() {
    event.preventDefault();
    document.getElementById("tambahProposal").reset();
  });

  $('.btnEditFileProposal').on('click', function() {
    event.preventDefault();
    alert('a');
    //document.getElementById("editFileProposal").reset();
  });

  function insertProposal() {
    event.preventDefault();
    var data = new FormData(document.getElementById("tambahProposal"));

      $.ajax({
        url: "<?php echo base_url('proposal/insert'); ?>",
        data: data,
        type: "POST",
        mimeType: "multipart/form-data",
        processData: false,
        contentType: false,
        dataType: "JSON",
        success: function(data){
          if(data.status == false){
            swal('Insert data failed', data.error, 'error')
          } else {
            swal('Insert data success', '', 'success')
            getProposal();
            $('#modal_form').modal('hide');
          }
        }
      });
  }

    function confirmDelete(id) {
     swal({
       title: "Are you sure?",
       text: "Once deleted, you will not be able to recover the data !",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         deleteProposal(id);
       } 
     });
  }

  function deleteProposal(id) {
    $.ajax({
      url: '<?php echo base_url('proposal/delete/'); ?>'+id,
      type: 'POST',
      dataType: 'JSON',
      success: function (r) {
        if (r.status == true) {
          getProposal();
          swal('Delete data success','','success')
        } else {
          swal('Delete data failed','','error')
        }
      }
    })
  }

  function getDetailProposal(id) {
    $.ajax({
      url: '<?=base_url('proposal/getDetailProposal/')?>'+id,
      dataType: 'JSON',
      success: function (r) {
        $('#idProposal').val(r.id_proposal)
        $('#tittleProposal').val(r.judul);
        $('#ketProposal').val(r.keterangan);
      }
    })
  }

  function updateProposal() {
    event.preventDefault();
    data = $('#editProposal').serialize();

    $.ajax({
      url: '<?=base_url('proposal/update')?>',
      type: 'POST',
      dataType: 'JSON',
      data: data,
      success: function (r) {
        if (r.status == true && r.error == '') {
          getProposal();
          swal('Update data success','','success')
          $('#modal_form_update').modal('hide');
        } else if(r.status == true && r.error != '') {
          swal('Update data failed',r.error,'warning')
        } else {
          swal('Update data failed',r.error,'error')
        }
      }
    })
  }

  function getFileProposal(id) {
    $.ajax({
      url: '<?=base_url('proposal/getDetailProposal/')?>'+id,
      dataType: 'JSON',
      success: function (r) {
        $('#idProposalFile').val(r.id_proposal)
      }
    })
  }

  function updateFileProposal() {
    event.preventDefault();
    var data = new FormData(document.getElementById("editFileProposal"));

    $.ajax({
      url: '<?=base_url('proposal/updateFileProposal')?>',
      type: 'POST',
      mimeType: "multipart/form-data",
      processData: false,
      contentType: false,
      dataType: 'JSON',
      data: data,
      success: function (r) {
        if(r.status != true){
            swal('Update data failed', r.error, 'error')
          } else {
            swal('Update data success', '', 'success')
            getProposal();
            $('#modal_form_update_file').modal('hide');
          }
      }
    })
  }

</script>