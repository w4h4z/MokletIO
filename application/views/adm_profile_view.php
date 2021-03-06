<style>
.icon-picker-list {
  display: flex;
  flex-flow: row wrap;
  list-style: none;
  padding-left: 0;
}
.sub-logo{
  background: none;
}
.icon-picker-list li {
  display: flex;
  flex: 0 0 20%;
  float: left;
  width: 20%;
}
.modal-open, .modal-open .navbar-fixed-top {
  margin-right: 0 !important;
}
-picker-list a {
  background-color: #f9f9f9;
  border: 1px solid #fff;
  color: black;
  display: block;
  flex: 1 1 auto;
  font-size: 12px;
  line-height: 1.4;
  min-height: 100px;
  padding: 10px;
  text-align: center;
  user-select: none;
}
.inline-icon-picker{
  margin:16px 16px 16px 0px;
  height: 0px;
  padding: 0px;
  overflow: hidden;
  transition: height 1s;
}
.inline-icon-picker-show{
  height: 170px;
  overflow: auto;
}
.icon-picker-list a.active{
  background-color: #009E49;
  color: #fff;
  cursor: pointer;
  text-decoration: none;
}
.icon-picker-list .fa {
  font-size: 24px;
  margin-bottom: 10px;
  margin-top: 5px;
}
.icon-picker-list .name-class {
  display: block;
  text-align: center;
  word-wrap: break-word;
}
/*.sample-color{
  margin: 7px 2% 7px 2%;
  width: 21%;
  position: relative;
  float: left;
  padding: 0px !important;
  height: 13px;
  }*/
  .sample-color{
    height: 27px;
    width: 19%; 
    margin: 0px 3% 0px 3%;
  }

  #secondaryCol-sample{
    height: 34px;
    width: 44%; 
    margin: 0px 3% 0px 3%;
  }
</style>


<section class="content-header">
  <h1>
    Profile
    <small><?php echo $sub->SINGKATAN_SUB ;?></small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12 col-lg-12">
      <div class="box">
        <div class="box-header">
          <!--          <h3 class="box-title"></h3> -->
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
          <div class="row">
            <div class="col-lg-12 col-xs-12">
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/uploads/<?php echo $sub->LOGO_SUB ;?>" alt="User profile picture">
                  <h3 class="profile-username text-center" id="nama_sub_text"><?php echo $sub->NAMA_SUB ;?></h3>
                  <p class="text-muted text-center" id="singkatan_sub_text"><?php echo $sub->SINGKATAN_SUB ;?></p>
                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Description : </b>
                      <p id="desc_sub_text"><?php echo $sub->DESC_SUB ;?></p>
                    </li>
                    <li class="list-group-item">
                      <b>Primary Color : </b> 
                      <div class="pull-right" style="background-color:<?php echo $sub->PRIMARY_COLOR ;?> ; width: 25px;height: 25px"></div>
                      <a class="pull-right" style="margin-right: 10px" id="primaryCol"> <?php echo $sub->PRIMARY_COLOR ;?> </a>
                    </li>
                    <li class="list-group-item">
                      <b>Secondary Color : </b> 
                      <div class="pull-right" style="background-color: <?php echo $sub->SECONDARY_COLOR ;?>; width: 25px;height: 25px"></div>
                      <a class="pull-right" style="margin-right: 10px" id="secondaryCol"> <?php echo $sub->SECONDARY_COLOR ;?> </a>
                    </li>
                    <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-6 col-xs-12">
                          <b>Logo :</b><br>
                          <img class="sub-logo" src="<?php echo base_url();?>/uploads/<?php echo $sub->LOGO_SUB ;?>" alt="Avatar" style="width:50%" id="logo_img">
                        </div>
                        <div class="col-lg-6 col-xs-12">
                          <b>Header Photo :</b><br>
                          <img src="<?php echo base_url();?>/uploads/<?php echo $sub->FOTO_HEADER_SUB ;?>" alt="Avatar" style="width:50%" id="header_img">
                        </div>
                      </div>
                    </li>
                  </ul>
                  <a href="#" id="editProfileBtn" data-toggle="modal" data-target="#editProfile" class="btn btn-primary btn-block">Edit</a>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-xs-12">
              <div class="box box-info">
                <div class="box-body box-profile" style="text-align: center;">
                  <h4><b>Organization Structure</b></h4>
                  <img src="<?php echo base_url(); ?>uploads/<?php echo $sub->struktur ;?>" id="struktur_img" style="width: 100%;margin-bottom: 15px" id="structure_img">
                  <a href="#" data-toggle="modal" data-target="#editStructure" class="btn btn-primary btn-block">Edit</a>
                </div>
              </div>
            </div>
          </div>





          <div class="row">
            <?php
            $i = 1;
            foreach ($feature as $data) {
              echo '
              <div class="col-lg-4 col-xs-12">
              <div class="box box-success">
              <div class="box-header">
              <h3 class="box-title">Data Feature '.$i.'</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <div class="text-center">
              <div>
              <span class="'.$data->ICON_FEATURE.' fa-3x dataIcon" id="icon_feature_'.$i.'"></span>
              </div>
              <div>
              <h4 id="nama_feature_'.$i.'"><b>'.$data->NAMA_FEATURE.'</b></h4>
              <p id="desc_feature_'.$i.'">'.$data->DESC_FEATURE.'</p>
              </div>
              <hr>
              <button class="btn btn-block btn-primary editFeatureBtn"  onclick="editFeature('.$data->ID_FEATURE.')" data-toggle="modal" data-target="#editFeature">Edit</button>
              </div>
              </div>
              <!-- /.box-body -->
              </div>
              </div>
              '; $i++;
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

<!-- Modal -->
<div id="editProfile" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Profile</h4>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" enctype="multipart/form-data" id="form-editProfile">
            <div class="form-body">
              <div class="form-group">
                <label class="control-label col-xs-2 col-lg-2">Full Name</label>
                <div class="col-xs-10 col-lg-4">
                  <input name="fullName" id="fullName" required placeholder="Full Name" class="form-control" type="text" value="">
                </div>
                <label class="control-label col-xs-2 col-lg-1" style="text-align: left;">Acronym</label>
                <div class="col-xs-10 col-lg-5" style="text-align: left;">
                  <input name="acronymName" id="acronymName" required placeholder="Acronym" class="form-control" type="text" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-2">Description</label>
                <div class="col-xs-10">
                  <textarea class="form-control" id="descSub" required rows="5" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-xs-2 col-lg-2">Primary Color</label>
                <div class="col-xs-10 col-lg-4">
                  <label class="radio-inline col-lg-3">
                    <input type="radio" name="primaryCol" value="#222222" id="dark"> Dark
                    <span class="sample-color"></span>
                  </label>
                  <div class="col-lg-3 sample-color" style="background-color: #222222; color:white;">
                    <!-- SAMPLE COLOR DARK -->
                  </div>
                  <label class="radio-inline col-lg-3">
                    <input type="radio" name="primaryCol" value="#e9e9e9" id="light"> Light
                  </label>
                  <div class="col-lg-3 sample-color" style="background-color: #e9e9e9">
                    <!-- SAMPLE COLOR IGHT -->
                  </div>
                </div>


                <label class="control-label col-xs-2 col-lg-2" style="text-align:left;">Secondary Color</label>
                <div class="col-xs-10 col-lg-4">
                 <div class="col-xs-10 col-lg-6">
                  <input type="text" required name="secondaryCol" id="secondaryCol" class="form-control my-colorpicker1" value="">
                </div>
                <div id="secondaryCol-sample" class="col-lg-6">
                  <!-- SECONDARY COLOR SAMPLE -->
                </div>
              </div>

            </div>

            <div class="form-group">
              <label class="control-label col-xs-2">Logo</label>
              <div class="col-xs-10">
                <input name="logoPhoto" class="form-control" type="file" id="imgInp1">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-2">Header Photo</label>
              <div class="col-xs-10">
                <input name="headerPhoto" class="form-control" type="file" id="imgInp">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="save_profile">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="editFeature" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Feature</h4>
      </div>
      <div class="modal-body">
        <form action="" id="formFeature" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="form-body">
            <div class="form-group">
              <input type="hidden" name="id_feature" id="id_feature">
              <label class="control-label col-lg-2 col-xs-12 col-md-2" style="text-align: left">Name</label>
              <div class="col-lg-10 col-xs-12 col-md-10">
                <input name="name" placeholder="Name" id="nama" class="form-control" type="text" value="">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-2 col-xs-12 col-md-2" style="text-align: left">Desc</label>
              <div class="col-lg-10 col-xs-12 col-md-10">
                <textarea class="form-control" id="desc" name="desc" rows="5" placeholder="Description"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-lg-2 col-xs-12 col-md-2" style="text-align: left">Icon</label>
              <div class="col-lg-10 col-xs-12 col-md-10">
                <div class="row">
                  <div class="col-lg-9">
                    <div class="input-group">
                      <div class="input-group-addon"><i id="preview-icon" class=""></i></div>
                      <input type="text" class="icon-class-input form-control" name="icon" id="icon-input" placeholder="Icon" value="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <button type="button" class="btn btn-success btn-md picker-button btn-block">Pick</button>
                  </div>
                  <div class="" style="margin-top:50px;">
                    <div class="modal-body inline-icon-picker">
                      <div>
                        <ul class="icon-picker-list">
                          <li>
                            <a class="icon-on-picker" data-class="{{item}} {{activeState}}" data-index="{{index}}">
                              <span class="{{item}}"></span>
                              <span class="name-class">{{item}}</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          <button type="button"  class="btn btn-primary" id="save_feature">Save</button>
        </form>
      </div>
    </div>
    <div id="iconPicker" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Icon Picker</h4>
          </div>
          <div class="modal-body" style="max-height: 500px;overflow: auto;">
            <div>
              <ul class="icon-picker-list">
                <li>
                  <a id="itemObject" data-class="{{item}} {{activeState}}" data-index="{{index}}">
                    <span class="{{item}}"></span>
                    <span class="name-class">{{item}}</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="change-icon" class="btn btn-success">
              <span class="fa fa-check-circle-o"></span>
              Use Selected Icon
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="editStructure" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Organization Structure</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('profile/editStructure');?>"  class="form-horizontal" method="post" enctype="multipart/form-data" id="editStruktur">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-xs-12 col-lg-5">Organization Structure Photo</label>
              <div class="col-xs-12 col-lg-7">
                <input name="structurePhoto" class="form-control" type="file" required>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="save_structure">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>


<script>



    function editFeature(id_feature){
      $.getJSON('<?php echo base_url('profile/getSpecificFeature/') ?>'+id_feature, function(json, textStatus) {
        $('#id_feature').val(json.ID_FEATURE);
        $('#nama').val(json.NAMA_FEATURE);
        $('#desc').val(json.DESC_FEATURE);
        $('#icon-input').val(json.ICON_FEATURE);
        $('#preview-icon').addClass(json.ICON_FEATURE);
      });
    }
  jQuery(document).ready(function() {
    CKEDITOR.replace('descSub'); // Active ckeditor

    $('#save_profile').click(function(event) {
      waitingDialog.show('Loading');
      event.preventDefault();
      var data = new FormData(document.getElementById("form-editProfile"));
      data.append('descSub', CKEDITOR.instances['descSub'].getData());
       // data.append("fileToUpload", blobFile);
       $.ajax({
        url : "<?php echo base_url('profile/editProfile') ?>",
        data : data,
        type: "POST",
        async: false,
        mimeType:"multipart/form-data",
        processData: false,
        contentType: false,
        dataType : "JSON",
        success: function(data){

          if (data.status == true) {
            waitingDialog.hide();
            swal("Success", "Edit Data Success", "success");
            reload_profile();
          }else{
            waitingDialog.hide();
            swal("Error", "Please Contact Administrator", "warning");
          }
        },
        error : function(jqXHR, textStatus, errorThrown){
          waitingDialog.hide();
          swal("Error", "Please Contact Administrator", "warning");
        }
      });       
       $('#editProfile').modal('hide');
     });



    $('#save_structure').click(function(event) {
      waitingDialog.show('Loading');
      event.preventDefault();
      var data = new FormData(document.getElementById("editStruktur"));
       // data.append("fileToUpload", blobFile);
       $.ajax({
        url : "<?php echo base_url('profile/editStructure') ?>",
        data : data,
        type: "POST",
        async: false,
        mimeType:"multipart/form-data",
        processData: false,
        contentType: false,
        dataType : "JSON",
        success: function(data){
          reload_structure();
          waitingDialog.hide();
          swal("Success", "Edit Data Success", "success");
        },
        error : function(jqXHR, textStatus, errorThrown){
          swal("Error", "Please Contact Administrator", "warning");
          waitingDialog.hide();
        }
      })
       $('#editStructure').modal('hide');
    });

    $('#save_feature').click(function() {
      $.post('<?php echo base_url('profile/editFeature') ?>', $('#formFeature').serialize(), function(data, textStatus, xhr) {
        $('#editFeature').modal('hide');
        if (data.status == true) {
          swal("Success", "Edit Data Success", "success");
          reload_feature();
        }else{
           swal("Error", "Please Contact Administrator", "warning");
        }
      },"json");
    });
  

    $('#editProfileBtn').click(function() {
      $.getJSON('<?php echo base_url('profile/getProfile')?>', function(dataProfile, textStatus) {
        $('#fullName').val(dataProfile.NAMA_SUB);
        $('#acronymName').val(dataProfile.SINGKATAN_SUB);
        if (dataProfile.PRIMARY_COLOR == "#222222") {
          $('[name="primaryCol"]').attr('checked', false);
          $('#dark').attr('checked', true);
        }else{
          $('[name="primaryCol"]').attr('checked', false);
          $('#light').attr('checked', true);
        }
        $('#secondaryCol-sample').css('background-color', dataProfile.SECONDARY_COLOR);
        $('#primaryCol').val(dataProfile.PRIMARY_COLOR);
        $('#secondaryCol').val(dataProfile.SECONDARY_COLOR);
        CKEDITOR.instances['descSub'].setData(dataProfile.DESC_SUB);
      });
    });

    $('[name="secondaryCol"]').change(function(event) {
      $('#secondaryCol-sample').css('background-color', $(this).val());
    });

    var dataProfile = {
      "nama":"<?php echo $sub->NAMA_SUB; ?>",
      "singkatan":"<?php echo $sub->SINGKATAN_SUB; ?>",
      "deskripsi":"<?php echo $sub->DESC_SUB; ?>",
      "warna_primary":"<?php echo $sub->PRIMARY_COLOR; ?>",
      "warna_secondary":"<?php echo $sub->SECONDARY_COLOR; ?>",
    }
    /*CKEDITOR*/
    CKEDITOR_CONFIGS = {
      'default': {
        'toolbar_Basic': [
        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'],
        ['Undo', 'Redo'],
        ['Scayt'],
        ['Link', 'Unlink', 'Anchor'],
        ['Source'],
        ['Maximize'],
        ['Bold', 'Italic', 'Underline', 'RemoveFormat'],
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'],
        ],
        'toolbar': 'Basic',
      },
    }

    function reload_profile(){// reload ulang data setelah melakukan perubahan data
      $.getJSON('<?php echo base_url('Profile/load_profile') ?>', function(json, textStatus) {
          $('#nama_sub_text').html(json.sub.NAMA_SUB)
          $('#singkatan_sub_text').html(json.sub.SINGKATAN_SUB)
          $('#desc_sub_text').html(json.sub.DESC_SUB)
          $('#primaryCol').html(json.sub.PRIMARY_COLOR)
          $('#primaryCol').siblings('div').css('backgroundColor', json.sub.PRIMARY_COLOR);
          $('#secondaryCol').html(json.sub.SECONDARY_COLOR)
          $('#secondaryCol').siblings('div').css('backgroundColor', json.sub.SECONDARY_COLOR);
          $('#logo_img').attr('src', '<?php echo base_url('/uploads/') ?>'+json.sub.LOGO_SUB);
          $('#header_img').attr('src', '<?php echo base_url('/uploads/') ?>'+json.sub.FOTO_HEADER_SUB);
      });
    }

    function reload_structure(){// reload ulang data setelah melakukan perubahan data
      $.getJSON('<?php echo base_url('Profile/load_structure') ?>', function(json, textStatus) {
          $('#struktur_img').attr('src', '<?php echo base_url('/uploads/') ?>'+json.sub.struktur);
      });
    }

    function reload_feature(){
      $.getJSON('<?php echo base_url('Profile/load_feature') ?>', function(json, textStatus) {
        var a =1;
        for (i in json) {
          $('#icon_feature_'+a).addClass(json[i].ICON_FEATURE);
          $('#nama_feature_'+a).html(json[i].NAMA_FEATURE);
          $('#desc_feature_'+a).html(json[i].DESC_FEATURE);
          a++;
        }
      });
    }

/*  $('#editProfileBtn').click(function(){
    $('#fullName').val(dataProfile.nama);
    $('#acronymName').val(dataProfile.singkatan);
    $('#descSub').val(dataProfile.deskripsi);
    $('#primaryCol').val(dataProfile.warna_primary);
    $('#secondaryCol').val(dataProfile.warna_secondary);
  });*/

/*<?php 
foreach ($feature as $data) {
  echo '
    var dataFeature = {
      "nama":"'.$data->NAMA_FEATURE.'",
      "desc":"'.$data->DESC_FEATURE.'",
      "icon":"'.$data->ICON_FEATURE.'"
    }
  ';
}?>


$('#editFeatureBtn').click(function(){
  $('#nama').val(dataFeature.nama);
  $('#desc').val(dataFeature.desc);
  $('#icon-input').val(dataFeature.icon);
});*/


/*$('.editFeatureBtn').click(function() {
  var icon = $(this).siblings('div').children('span').attr('class').split(' ')[1];
  var nama = $(this).siblings('div').children('h4').children('b').html();
  var desc = $(this).siblings('div').children('p').html();
  var action = '<?php echo base_url('profile/editFeature/');?>';
  var id = $(this).siblings('div').children('.idFeature').html();
  $('#nama').val(nama);
  $('#desc').val(desc);
  $('#preview-icon').addClass('fa ' + icon);
  $('#icon-input').val(icon);
  $('#formFeature').attr('action', action+id);
});


*/
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

var icons = [{ icon: 'fa fa-glass' }, { icon: 'fa fa-music' }, { icon: 'fa fa-search' }, { icon: 'fa fa-envelope-o' }, { icon: 'fa fa-heart' }, { icon: 'fa fa-star' }, { icon: 'fa fa-star-o' }, { icon: 'fa fa-user' }, { icon: 'fa fa-film' }, { icon: 'fa fa-th-large' }, { icon: 'fa fa-th' }, { icon: 'fa fa-th-list' }, { icon: 'fa fa-check' }, { icon: 'fa fa-times' }, { icon: 'fa fa-search-plus' }, { icon: 'fa fa-search-minus' }, { icon: 'fa fa-power-off' }, { icon: 'fa fa-signal' }, { icon: 'fa fa-cog' }, { icon: 'fa fa-trash-o' }, { icon: 'fa fa-home' }, { icon: 'fa fa-file-o' }, { icon: 'fa fa-clock-o' }, { icon: 'fa fa-road' }, { icon: 'fa fa-download' }, { icon: 'fa fa-arrow-circle-o-down' }, { icon: 'fa fa-arrow-circle-o-up' }, { icon: 'fa fa-inbox' }, { icon: 'fa fa-play-circle-o' }, { icon: 'fa fa-repeat' }, { icon: 'fa fa-refresh' }, { icon: 'fa fa-list-alt' }, { icon: 'fa fa-lock' }, { icon: 'fa fa-flag' }, { icon: 'fa fa-headphones' }, { icon: 'fa fa-volume-off' }, { icon: 'fa fa-volume-down' }, { icon: 'fa fa-volume-up' }, { icon: 'fa fa-qrcode' }, { icon: 'fa fa-barcode' }, { icon: 'fa fa-tag' }, { icon: 'fa fa-tags' }, { icon: 'fa fa-book' }, { icon: 'fa fa-bookmark' }, { icon: 'fa fa-print' }, { icon: 'fa fa-camera' }, { icon: 'fa fa-font' }, { icon: 'fa fa-bold' }, { icon: 'fa fa-italic' }, { icon: 'fa fa-text-height' }, { icon: 'fa fa-text-width' }, { icon: 'fa fa-align-left' }, { icon: 'fa fa-align-center' }, { icon: 'fa fa-align-right' }, { icon: 'fa fa-align-justify' }, { icon: 'fa fa-list' }, { icon: 'fa fa-outdent' }, { icon: 'fa fa-indent' }, { icon: 'fa fa-video-camera' }, { icon: 'fa fa-picture-o' }, { icon: 'fa fa-pencil' }, { icon: 'fa fa-map-marker' }, { icon: 'fa fa-adjust' }, { icon: 'fa fa-tint' }, { icon: 'fa fa-pencil-square-o' }, { icon: 'fa fa-share-square-o' }, { icon: 'fa fa-check-square-o' }, { icon: 'fa fa-arrows' }, { icon: 'fa fa-step-backward' }, { icon: 'fa fa-fast-backward' }, { icon: 'fa fa-backward' }, { icon: 'fa fa-play' }, { icon: 'fa fa-pause' }, { icon: 'fa fa-stop' }, { icon: 'fa fa-forward' }, { icon: 'fa fa-fast-forward' }, { icon: 'fa fa-step-forward' }, { icon: 'fa fa-eject' }, { icon: 'fa fa-chevron-left' }, { icon: 'fa fa-chevron-right' }, { icon: 'fa fa-plus-circle' }, { icon: 'fa fa-minus-circle' }, { icon: 'fa fa-times-circle' }, { icon: 'fa fa-check-circle' }, { icon: 'fa fa-question-circle' }, { icon: 'fa fa-info-circle' }, { icon: 'fa fa-crosshairs' }, { icon: 'fa fa-times-circle-o' }, { icon: 'fa fa-check-circle-o' }, { icon: 'fa fa-ban' }, { icon: 'fa fa-arrow-left' }, { icon: 'fa fa-arrow-right' }, { icon: 'fa fa-arrow-up' }, { icon: 'fa fa-arrow-down' }, { icon: 'fa fa-share' }, { icon: 'fa fa-expand' }, { icon: 'fa fa-compress' }, { icon: 'fa fa-plus' }, { icon: 'fa fa-minus' }, { icon: 'fa fa-asterisk' }, { icon: 'fa fa-exclamation-circle' }, { icon: 'fa fa-gift' }, { icon: 'fa fa-leaf' }, { icon: 'fa fa-fire' }, { icon: 'fa fa-eye' }, { icon: 'fa fa-eye-slash' }, { icon: 'fa fa-exclamation-triangle' }, { icon: 'fa fa-plane' }, { icon: 'fa fa-calendar' }, { icon: 'fa fa-random' }, { icon: 'fa fa-comment' }, { icon: 'fa fa-magnet' }, { icon: 'fa fa-chevron-up' }, { icon: 'fa fa-chevron-down' }, { icon: 'fa fa-retweet' }, { icon: 'fa fa-shopping-cart' }, { icon: 'fa fa-folder' }, { icon: 'fa fa-folder-open' }, { icon: 'fa fa-arrows-v' }, { icon: 'fa fa-arrows-h' }, { icon: 'fa fa-bar-chart' }, { icon: 'fa fa-twitter-square' }, { icon: 'fa fa-facebook-square' }, { icon: 'fa fa-camera-retro' }, { icon: 'fa fa-key' }, { icon: 'fa fa-cogs' }, { icon: 'fa fa-comments' }, { icon: 'fa fa-thumbs-o-up' }, { icon: 'fa fa-thumbs-o-down' }, { icon: 'fa fa-star-half' }, { icon: 'fa fa-heart-o' }, { icon: 'fa fa-sign-out' }, { icon: 'fa fa-linkedin-square' }, { icon: 'fa fa-thumb-tack' }, { icon: 'fa fa-external-link' }, { icon: 'fa fa-sign-in' }, { icon: 'fa fa-trophy' }, { icon: 'fa fa-github-square' }, { icon: 'fa fa-upload' }, { icon: 'fa fa-lemon-o' }, { icon: 'fa fa-phone' }, { icon: 'fa fa-square-o' }, { icon: 'fa fa-bookmark-o' }, { icon: 'fa fa-phone-square' }, { icon: 'fa fa-twitter' }, { icon: 'fa fa-facebook' }, { icon: 'fa fa-github' }, { icon: 'fa fa-unlock' }, { icon: 'fa fa-credit-card' }, { icon: 'fa fa-rss' }, { icon: 'fa fa-hdd-o' }, { icon: 'fa fa-bullhorn' }, { icon: 'fa fa-bell' }, { icon: 'fa fa-certificate' }, { icon: 'fa fa-hand-o-right' }, { icon: 'fa fa-hand-o-left' }, { icon: 'fa fa-hand-o-up' }, { icon: 'fa fa-hand-o-down' }, { icon: 'fa fa-arrow-circle-left' }, { icon: 'fa fa-arrow-circle-right' }, { icon: 'fa fa-arrow-circle-up' }, { icon: 'fa fa-arrow-circle-down' }, { icon: 'fa fa-globe' }, { icon: 'fa fa-wrench' }, { icon: 'fa fa-tasks' }, { icon: 'fa fa-filter' }, { icon: 'fa fa-briefcase' }, { icon: 'fa fa-arrows-alt' }, { icon: 'fa fa-users' }, { icon: 'fa fa-link' }, { icon: 'fa fa-cloud' }, { icon: 'fa fa-flask' }, { icon: 'fa fa-scissors' }, { icon: 'fa fa-files-o' }, { icon: 'fa fa-paperclip' }, { icon: 'fa fa-floppy-o' }, { icon: 'fa fa-square' }, { icon: 'fa fa-bars' }, { icon: 'fa fa-list-ul' }, { icon: 'fa fa-list-ol' }, { icon: 'fa fa-strikethrough' }, { icon: 'fa fa-underline' }, { icon: 'fa fa-table' }, { icon: 'fa fa-magic' }, { icon: 'fa fa-truck' }, { icon: 'fa fa-pinterest' }, { icon: 'fa fa-pinterest-square' }, { icon: 'fa fa-google-plus-square' }, { icon: 'fa fa-google-plus' }, { icon: 'fa fa-money' }, { icon: 'fa fa-caret-down' }, { icon: 'fa fa-caret-up' }, { icon: 'fa fa-caret-left' }, { icon: 'fa fa-caret-right' }, { icon: 'fa fa-columns' }, { icon: 'fa fa-sort' }, { icon: 'fa fa-sort-desc' }, { icon: 'fa fa-sort-asc' }, { icon: 'fa fa-envelope' }, { icon: 'fa fa-linkedin' }, { icon: 'fa fa-undo' }, { icon: 'fa fa-gavel' }, { icon: 'fa fa-tachometer' }, { icon: 'fa fa-comment-o' }, { icon: 'fa fa-comments-o' }, { icon: 'fa fa-bolt' }, { icon: 'fa fa-sitemap' }, { icon: 'fa fa-umbrella' }, { icon: 'fa fa-clipboard' }, { icon: 'fa fa-lightbulb-o' }, { icon: 'fa fa-exchange' }, { icon: 'fa fa-cloud-download' }, { icon: 'fa fa-cloud-upload' }, { icon: 'fa fa-user-md' }, { icon: 'fa fa-stethoscope' }, { icon: 'fa fa-suitcase' }, { icon: 'fa fa-bell-o' }, { icon: 'fa fa-coffee' }, { icon: 'fa fa-cutlery' }, { icon: 'fa fa-file-text-o' }, { icon: 'fa fa-building-o' }, { icon: 'fa fa-hospital-o' }, { icon: 'fa fa-ambulance' }, { icon: 'fa fa-medkit' }, { icon: 'fa fa-fighter-jet' }, { icon: 'fa fa-beer' }, { icon: 'fa fa-h-square' }, { icon: 'fa fa-plus-square' }, { icon: 'fa fa-angle-double-left' }, { icon: 'fa fa-angle-double-right' }, { icon: 'fa fa-angle-double-up' }, { icon: 'fa fa-angle-double-down' }, { icon: 'fa fa-angle-left' }, { icon: 'fa fa-angle-right' }, { icon: 'fa fa-angle-up' }, { icon: 'fa fa-angle-down' }, { icon: 'fa fa-desktop' }, { icon: 'fa fa-laptop' }, { icon: 'fa fa-tablet' }, { icon: 'fa fa-mobile' }, { icon: 'fa fa-circle-o' }, { icon: 'fa fa-quote-left' }, { icon: 'fa fa-quote-right' }, { icon: 'fa fa-spinner' }, { icon: 'fa fa-circle' }, { icon: 'fa fa-reply' }, { icon: 'fa fa-github-alt' }, { icon: 'fa fa-folder-o' }, { icon: 'fa fa-folder-open-o' }, { icon: 'fa fa-smile-o' }, { icon: 'fa fa-frown-o' }, { icon: 'fa fa-meh-o' }, { icon: 'fa fa-gamepad' }, { icon: 'fa fa-keyboard-o' }, { icon: 'fa fa-flag-o' }, { icon: 'fa fa-flag-checkered' }, { icon: 'fa fa-terminal' }, { icon: 'fa fa-code' }, { icon: 'fa fa-reply-all' }, { icon: 'fa fa-star-half-o' }, { icon: 'fa fa-location-arrow' }, { icon: 'fa fa-crop' }, { icon: 'fa fa-code-fork' }, { icon: 'fa fa-chain-broken' }, { icon: 'fa fa-question' }, { icon: 'fa fa-info' }, { icon: 'fa fa-exclamation' }, { icon: 'fa fa-superscript' }, { icon: 'fa fa-subscript' }, { icon: 'fa fa-eraser' }, { icon: 'fa fa-puzzle-piece' }, { icon: 'fa fa-microphone' }, { icon: 'fa fa-microphone-slash' }, { icon: 'fa fa-shield' }, { icon: 'fa fa-calendar-o' }, { icon: 'fa fa-fire-extinguisher' }, { icon: 'fa fa-rocket' }, { icon: 'fa fa-maxcdn' }, { icon: 'fa fa-chevron-circle-left' }, { icon: 'fa fa-chevron-circle-right' }, { icon: 'fa fa-chevron-circle-up' }, { icon: 'fa fa-chevron-circle-down' }, { icon: 'fa fa-html5' }, { icon: 'fa fa-css3' }, { icon: 'fa fa-anchor' }, { icon: 'fa fa-unlock-alt' }, { icon: 'fa fa-bullseye' }, { icon: 'fa fa-ellipsis-h' }, { icon: 'fa fa-ellipsis-v' }, { icon: 'fa fa-rss-square' }, { icon: 'fa fa-play-circle' }, { icon: 'fa fa-ticket' }, { icon: 'fa fa-minus-square' }, { icon: 'fa fa-minus-square-o' }, { icon: 'fa fa-level-up' }, { icon: 'fa fa-level-down' }, { icon: 'fa fa-check-square' }, { icon: 'fa fa-pencil-square' }, { icon: 'fa fa-external-link-square' }, { icon: 'fa fa-share-square' }, { icon: 'fa fa-compass' }, { icon: 'fa fa-caret-square-o-down' }, { icon: 'fa fa-caret-square-o-up' }, { icon: 'fa fa-caret-square-o-right' }, { icon: 'fa fa-eur' }, { icon: 'fa fa-gbp' }, { icon: 'fa fa-usd' }, { icon: 'fa fa-inr' }, { icon: 'fa fa-jpy' }, { icon: 'fa fa-rub' }, { icon: 'fa fa-krw' }, { icon: 'fa fa-btc' }, { icon: 'fa fa-file' }, { icon: 'fa fa-file-text' }, { icon: 'fa fa-sort-alpha-asc' }, { icon: 'fa fa-sort-alpha-desc' }, { icon: 'fa fa-sort-amount-asc' }, { icon: 'fa fa-sort-amount-desc' }, { icon: 'fa fa-sort-numeric-asc' }, { icon: 'fa fa-sort-numeric-desc' }, { icon: 'fa fa-thumbs-up' }, { icon: 'fa fa-thumbs-down' }, { icon: 'fa fa-youtube-square' }, { icon: 'fa fa-youtube' }, { icon: 'fa fa-xing' }, { icon: 'fa fa-xing-square' }, { icon: 'fa fa-youtube-play' }, { icon: 'fa fa-dropbox' }, { icon: 'fa fa-stack-overflow' }, { icon: 'fa fa-instagram' }, { icon: 'fa fa-flickr' }, { icon: 'fa fa-adn' }, { icon: 'fa fa-bitbucket' }, { icon: 'fa fa-bitbucket-square' }, { icon: 'fa fa-tumblr' }, { icon: 'fa fa-tumblr-square' }, { icon: 'fa fa-long-arrow-down' }, { icon: 'fa fa-long-arrow-up' }, { icon: 'fa fa-long-arrow-left' }, { icon: 'fa fa-long-arrow-right' }, { icon: 'fa fa-apple' }, { icon: 'fa fa-windows' }, { icon: 'fa fa-android' }, { icon: 'fa fa-linux' }, { icon: 'fa fa-dribbble' }, { icon: 'fa fa-skype' }, { icon: 'fa fa-foursquare' }, { icon: 'fa fa-trello' }, { icon: 'fa fa-female' }, { icon: 'fa fa-male' }, { icon: 'fa fa-gratipay' }, { icon: 'fa fa-sun-o' }, { icon: 'fa fa-moon-o' }, { icon: 'fa fa-archive' }, { icon: 'fa fa-bug' }, { icon: 'fa fa-vk' }, { icon: 'fa fa-weibo' }, { icon: 'fa fa-renren' }, { icon: 'fa fa-pagelines' }, { icon: 'fa fa-stack-exchange' }, { icon: 'fa fa-arrow-circle-o-right' }, { icon: 'fa fa-arrow-circle-o-left' }, { icon: 'fa fa-caret-square-o-left' }, { icon: 'fa fa-dot-circle-o' }, { icon: 'fa fa-wheelchair' }, { icon: 'fa fa-vimeo-square' }, { icon: 'fa fa-try' }, { icon: 'fa fa-plus-square-o' }, { icon: 'fa fa-space-shuttle' }, { icon: 'fa fa-slack' }, { icon: 'fa fa-envelope-square' }, { icon: 'fa fa-wordpress' }, { icon: 'fa fa-openid' }, { icon: 'fa fa-university' }, { icon: 'fa fa-graduation-cap' }, { icon: 'fa fa-yahoo' }, { icon: 'fa fa-google' }, { icon: 'fa fa-reddit' }, { icon: 'fa fa-reddit-square' }, { icon: 'fa fa-stumbleupon-circle' }, { icon: 'fa fa-stumbleupon' }, { icon: 'fa fa-delicious' }, { icon: 'fa fa-digg' }, { icon: 'fa fa-pied-piper' }, { icon: 'fa fa-pied-piper-alt' }, { icon: 'fa fa-drupal' }, { icon: 'fa fa-joomla' }, { icon: 'fa fa-language' }, { icon: 'fa fa-fax' }, { icon: 'fa fa-building' }, { icon: 'fa fa-child' }, { icon: 'fa fa-paw' }, { icon: 'fa fa-spoon' }, { icon: 'fa fa-cube' }, { icon: 'fa fa-cubes' }, { icon: 'fa fa-behance' }, { icon: 'fa fa-behance-square' }, { icon: 'fa fa-steam' }, { icon: 'fa fa-steam-square' }, { icon: 'fa fa-recycle' }, { icon: 'fa fa-car' }, { icon: 'fa fa-taxi' }, { icon: 'fa fa-tree' }, { icon: 'fa fa-spotify' }, { icon: 'fa fa-deviantart' }, { icon: 'fa fa-soundcloud' }, { icon: 'fa fa-database' }, { icon: 'fa fa-file-pdf-o' }, { icon: 'fa fa-file-word-o' }, { icon: 'fa fa-file-excel-o' }, { icon: 'fa fa-file-powerpoint-o' }, { icon: 'fa fa-file-image-o' }, { icon: 'fa fa-file-archive-o' }, { icon: 'fa fa-file-audio-o' }, { icon: 'fa fa-file-video-o' }, { icon: 'fa fa-file-code-o' }, { icon: 'fa fa-vine' }, { icon: 'fa fa-codepen' }, { icon: 'fa fa-jsfiddle' }, { icon: 'fa fa-life-ring' }, { icon: 'fa fa-circle-o-notch' }, { icon: 'fa fa-rebel' }, { icon: 'fa fa-empire' }, { icon: 'fa fa-git-square' }, { icon: 'fa fa-git' }, { icon: 'fa fa-hacker-news' }, { icon: 'fa fa-tencent-weibo' }, { icon: 'fa fa-qq' }, { icon: 'fa fa-weixin' }, { icon: 'fa fa-paper-plane' }, { icon: 'fa fa-paper-plane-o' }, { icon: 'fa fa-history' }, { icon: 'fa fa-circle-thin' }, { icon: 'fa fa-header' }, { icon: 'fa fa-paragraph' }, { icon: 'fa fa-sliders' }, { icon: 'fa fa-share-alt' }, { icon: 'fa fa-share-alt-square' }, { icon: 'fa fa-bomb' }, { icon: 'fa fa-futbol-o' }, { icon: 'fa fa-tty' }, { icon: 'fa fa-binoculars' }, { icon: 'fa fa-plug' }, { icon: 'fa fa-slideshare' }, { icon: 'fa fa-twitch' }, { icon: 'fa fa-yelp' }, { icon: 'fa fa-newspaper-o' }, { icon: 'fa fa-wifi' }, { icon: 'fa fa-calculator' }, { icon: 'fa fa-paypal' }, { icon: 'fa fa-google-wallet' }, { icon: 'fa fa-cc-visa' }, { icon: 'fa fa-cc-mastercard' }, { icon: 'fa fa-cc-discover' }, { icon: 'fa fa-cc-amex' }, { icon: 'fa fa-cc-paypal' }, { icon: 'fa fa-cc-stripe' }, { icon: 'fa fa-bell-slash' }, { icon: 'fa fa-bell-slash-o' }, { icon: 'fa fa-trash' }, { icon: 'fa fa-copyright' }, { icon: 'fa fa-at' }, { icon: 'fa fa-eyedropper' }, { icon: 'fa fa-paint-brush' }, { icon: 'fa fa-birthday-cake' }, { icon: 'fa fa-area-chart' }, { icon: 'fa fa-pie-chart' }, { icon: 'fa fa-line-chart' }, { icon: 'fa fa-lastfm' }, { icon: 'fa fa-lastfm-square' }, { icon: 'fa fa-toggle-off' }, { icon: 'fa fa-toggle-on' }, { icon: 'fa fa-bicycle' }, { icon: 'fa fa-bus' }, { icon: 'fa fa-ioxhost' }, { icon: 'fa fa-angellist' }, { icon: 'fa fa-cc' }, { icon: 'fa fa-ils' }, { icon: 'fa fa-meanpath' }, { icon: 'fa fa-buysellads' }, { icon: 'fa fa-connectdevelop' }, { icon: 'fa fa-dashcube' }, { icon: 'fa fa-forumbee' }, { icon: 'fa fa-leanpub' }, { icon: 'fa fa-sellsy' }, { icon: 'fa fa-shirtsinbulk' }, { icon: 'fa fa-simplybuilt' }, { icon: 'fa fa-skyatlas' }, { icon: 'fa fa-cart-plus' }, { icon: 'fa fa-cart-arrow-down' }, { icon: 'fa fa-diamond' }, { icon: 'fa fa-ship' }, { icon: 'fa fa-user-secret' }, { icon: 'fa fa-motorcycle' }, { icon: 'fa fa-street-view' }, { icon: 'fa fa-heartbeat' }, { icon: 'fa fa-venus' }, { icon: 'fa fa-mars' }, { icon: 'fa fa-mercury' }, { icon: 'fa fa-transgender' }, { icon: 'fa fa-transgender-alt' }, { icon: 'fa fa-venus-double' }, { icon: 'fa fa-mars-double' }, { icon: 'fa fa-venus-mars' }, { icon: 'fa fa-mars-stroke' }, { icon: 'fa fa-mars-stroke-v' }, { icon: 'fa fa-mars-stroke-h' }, { icon: 'fa fa-neuter' }, { icon: 'fa fa-facebook-official' }, { icon: 'fa fa-pinterest-p' }, { icon: 'fa fa-whatsapp' }, { icon: 'fa fa-server' }, { icon: 'fa fa-user-plus' }, { icon: 'fa fa-user-times' }, { icon: 'fa fa-bed' }, { icon: 'fa fa-viacoin' }, { icon: 'fa fa-train' }, { icon: 'fa fa-subway' }, { icon: 'fa fa-medium' }];

var itemTemplate = $('.icon-picker-list').clone(true).html();

$('.icon-picker-list').html('');

  // Loop through JSON and appends content to show icons
  $(icons).each(function(index) {
    var itemtemp = itemTemplate;
    var item = icons[index].icon;
    
    if (index == selectedIcon) {
      var activeState = 'active'
    } else {
      var activeState = ''
    }
    
    itemtemp = itemtemp.replace(/{{item}}/g, item).replace(/{{index}}/g, index).replace(/{{activeState}}/g, activeState);
    
    $('.icon-picker-list').append(itemtemp);
  });
  
  // Variable that's passed around for active states of icons
  var selectedIcon = null;
  
  $('.icon-class-input').each(function() {
    if ($(this).val() != null) {
      $(this).siblings('.demo-icon').addClass($(this).val());
    }
  });
  
  // To be set to which input needs updating
  var iconInput = null;
  
  var isToggle = false;
  // Click function to set which input is being used
  $('.picker-button').click(function() {
  // Sets var to which input is being updated
  iconInput = $(this).siblings('.icon-class-input');
  // Shows Bootstrap Modal
  //$('#iconPicker').modal('show');
  if(!isToggle){

    $('.inline-icon-picker').addClass('inline-icon-picker-show');
    isToggle = true;
  }else{

    $('.inline-icon-picker').removeClass('inline-icon-picker-show');
    isToggle = false;
  }
  
  // Sets active state by looping through the list with the previous class from the picker input
  selectedIcon = findInObject(icons, 'icon', $(this).siblings('.icon-class-input').val());
  // Removes any previous active class
  console.log(selectedIcon);
  $('.icon-picker-list a').removeClass('active');
  // Sets active class
  $('.icon-picker-list a').eq(selectedIcon).addClass('active');
});
  
  $('#editFeature').on('hidden.bs.modal', function () {
    isToggle = false;
    $('.inline-icon-picker').removeClass('inline-icon-picker-show');
    $('#icon-input').val("");
    $('#preview-icon').attr('class',"");
  })
  
  // Click function to select icon
  $(document).on('click', '.icon-picker-list a', function() {
  // Sets selected icon
  selectedIcon = $(this).data('index');
  
  // Removes any previous active class
  $('.icon-picker-list a').removeClass('active');
  // Sets active class
  $('.icon-picker-list a').eq(selectedIcon).addClass('active');
});
  
  // Update icon input
  $('#change-icon').click(function() {
    iconInput.val(icons[selectedIcon].icon);
    iconInput.siblings('.demo-icon').attr('class', 'demo-icon');
    iconInput.siblings('.demo-icon').addClass(icons[selectedIcon].icon);
    $('#iconPicker').modal('hide');
    console.log(iconInput);
    console.log(icons[selectedIcon].icon);
  });
  
  $('.icon-on-picker').click(function(){
    var value = $(this).children('class-name').prevObject[0].innerText;
    $('#icon-input').val(value);
    $('#preview-icon').attr('class',value);
    isToggle = false;
    $('.inline-icon-picker').removeClass('inline-icon-picker-show');
  });
  
  function findInObject(object, property, value) {
    for (var i = 0; i < object.length; i += 1) {
      if (object[i][property] === value) {
        return i;
      }
    }
  }
  
  $(function () {
    //Colorpicker
    $('.my-colorpicker1').colorpicker()
  })
});


</script>