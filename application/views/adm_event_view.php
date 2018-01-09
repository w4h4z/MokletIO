  
<style>
  .intro1-desc blockquote {
    padding-left: 1.5rem;
    border-left: 5px solid red/*<?php echo $data->SECONDARY_COLOR; ?>*/;
  }
  blockquote {
    padding-left: 1.5rem;
    border-left: 5px solid <?php echo $sub->SECONDARY_COLOR; ?>;
  }
  .intro1-desc p:first-child:first-letter{
    color: <?php echo $sub->SECONDARY_COLOR; ?> !important;
  }

  .ardown, hr{
    background-color: <?php echo $sub->SECONDARY_COLOR; ?>;
  }
  #modal-livePreview .modal-body{
    background-color: <?php echo $sub->PRIMARY_COLOR; ?>
  }

   <?php 
        if ($sub->PRIMARY_COLOR == '#e9e9e9') {
          echo '
        .intro1-message, .intro1-desc, .mini-title:not(.mini-title-gallery){
          color: #222222 !important ;
        }';
        }else{
          echo '
        .intro1-message, .intro1-desc, .mini-title{
          color: #C5C5C5 !important ;
        }
      ';
        }; 
      ?>
  
</style>
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
                    <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_detail_'.$data->ID_EVENT.'"><span class="glyphicon glyphicon-zoom-in"></span></button>
                                      <button class="btn btn-warning btn-sm edit" data-toggle="modal" id="modal1" ><span class="glyphicon glyphicon-pencil"></span></button>
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
                <input name="name" placeholder="Event Name" id="event_title" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Sub Title</label>
              <div class="col-md-9">
                <input name="title" placeholder="Title" id="event_subtitle" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Detail Name</label>
              <div class="col-md-9">
                <input name="detail" placeholder="Detail Name" id="detail_title" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Mini Name</label>
              <div class="col-md-9">
                <input name="miniName" placeholder="Mini Name" id="mini-title" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Sub Detail Name</label>
              <div class="col-md-9">
                <input name="subName" placeholder="Sub Detail Name" id="detail_subtitle" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Desc Event</label>
              <div class="col-md-9">
                <textarea class="form-control ckeditor" rows="4" placeholder="Desc" id="detail_desc" name="desc" required></textarea>
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
          <button type="button" class="btn btn-info" id="btnlivePreview">Preview</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->



    <!-- Modal -->
<div id="modal-livePreview" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Live review</h4>
      </div>
      <div class="modal-body" style="height: 500px;overflow-y: scroll;">
        <div><!-- Event -->
          <div class="row">
            <div class="landing2" style="background-image: url('<?php echo base_url(); ?>assets/front_end/images/paskibra4.jpg')">
              <div class="landing2-message">
                <h1>Event Title</h1>
                <h4>Event Subtitle is Here</h4>
              </div>
              <a class="ardown fa fa-angle-down" data-menuanchor="detail-event" href="#detail-event"></a>
            </div>    
          </div>
        </div>
        <div class="row" id="detail-event">
          <div class="intro1">
            <div class="intro1-message">
              <p class="mini-title">mini-title</p>
              <h1>Detail Title</h1>
              <hr>
              <h4>Detail-subtitle</h4>
            </div>
            <div class="intro1-content">
              <div class="intro1-desc">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <blockquote>This is Description</blockquote>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
              </div>
              <div class="intro1-img">
                <img src="<?php echo base_url(); ?>assets/front_end/images/abel.jpg" class="img-responsive thumbnail" alt="" id="posterFoto">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
      //CKEDITOR.replace( 'detail_desc' );
      jQuery(document).ready(function() {
        $('#modal1').click(function() {
          $('#modal_edit2').modal();
        });
        $('#btnlivePreview').click(function() {
          $event_title= $("#event_title").val()
          $event_subtitle= $("#event_subtitle").val()
          $mini_title = $('#mini-title').val()
          $detail_title = $('#detail_title').val();
          $detail_subtitle =$('#detail_subtitle').val()
          //$detail_desc= $('#detail_desc').val();
         $detail_desc = CKEDITOR.instances.detail_desc.getData();
         // $imgBanner = $('#imgInp').
         $('#modal-livePreview .landing2-message h1').text($event_title);
         $('#modal-livePreview .landing2-message h4').text($event_title);
         $('#modal-livePreview .intro1-message .mini-title').text($mini_title);
         $('#modal-livePreview .intro1-message h1').text($detail_title);
         $('#modal-livePreview .intro1-message h4').text($detail_subtitle);
         $('#modal-livePreview .intro1-desc').html($detail_desc); 
          $('#modal-livePreview').modal();
        });
                                                          
        $('#modal-livePreview .close').click(function() {
          $('#modal-livePreview').modal('toggle');
          $('modal_event').modal();
        });
         /*Change Foto*/
        function posterFoto(input) {
         if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#posterFoto').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
           }
        }
        function bannerFoto(input) {
         if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function () {
                   // $('#bannerFoto').attr('src', e.target.result);
                    $('.landing2').css('background-image', 'url("' + reader.result + '")');
                }
                reader.readAsDataURL(input.files[0]);
           }
        }

        $("#imgInp1").change(function(){
            posterFoto(this);
        });

        $("#imgInp").change(function(){
            bannerFoto(this);
        });

        /*Smooth Scroll*/
        var $root = $('html, body');
        $('a.ardown').click(function() {
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top - 0
            }, 1000, function () {
                window.location.hash = href;
            });
            return false;
        });
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
