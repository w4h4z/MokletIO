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
                <th>Poster</th>
                <th>Banner</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
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
          <form action="#" id="formEvent" class="form-horizontal" method="post" enctype="multipart/form-data">
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
          <h3 class="modal-title">Edit Event</h3>
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