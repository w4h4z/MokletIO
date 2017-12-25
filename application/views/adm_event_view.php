  <style>
    .item{
      background-color: #3C8DBC;
      text-align: center;
      height: 200px;
      position: relative;
      padding-top: 22%;
    }
    .past-event{
      position: absolute;
      top: 0;
      padding: auto;
      width :100%;
      height: 0%;
      overflow: hidden;
      background-color: rgba(44,44,44,0.5);
    }
    .event-id{
      display: none;
    }
    .event-title{
      color: white;
      font-family: aharoni;
      font-size: 2em;
    }
    .btn-past-event-edit, .btn-past-event-delete{
      margin-top: 25%;
    }
    .item:hover .past-event{
      height: 100%;
    }
    .live-preview{
      width: 100%;
      height: 500px;
    }
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
           	<!-- <h3 class="box-title"></h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                      <div class="past-event">
                        <button class="btn btn-info btn-past-event-edit" data-toggle="modal" data-target="#ModalCE">Edit</button>
                        <button class="btn btn-danger btn-past-event-delete"  data-toggle="modal" data-target="#ModalDelete">Delete</button>
                      </div>
                      <i class="event-id"></i> <!-- ID Event -->
                      <h4 class="event-title">Past Event</h4><!-- Title Event -->
                    </div>
                    <div class="item">
                      <div class="past-event">
                        <button class="btn btn-info btn-past-event-edit" data-toggle="modal" data-target="#ModalCE">Edit</button>
                        <button class="btn btn-danger btn-past-event-delete"  data-toggle="modal" data-target="#ModalDelete">Delete</button>
                      </div>
                      <i class="event-id"></i> <!-- ID Event -->
                      <h4 class="event-title">Past Event</h4><!-- Title Event -->
                    </div> 
                    <div class="item">
                      <div class="past-event">
                        <button class="btn btn-info btn-past-event-edit" data-toggle="modal" data-target="#ModalCE">Edit</button>
                        <button class="btn btn-danger btn-past-event-delete"  data-toggle="modal" data-target="#ModalDelete">Delete</button>
                      </div>
                      <i class="event-id"></i> <!-- ID Event -->
                      <h4 class="event-title">Past Event</h4><!-- Title Event -->
                    </div>
                     <div class="item">
                      <div class="past-event">
                        <button class="btn btn-info btn-past-event-edit" data-toggle="modal" data-target="#ModalCE">Edit</button>
                        <button class="btn btn-danger btn-past-event-delete"  data-toggle="modal" data-target="#ModalDelete">Delete</button>
                      </div>
                      <i class="event-id"></i> <!-- ID Event -->
                      <h4 class="event-title">Past Event</h4><!-- Title Event -->
                    </div>
                     <div class="item">
                      <div class="past-event">
                        <button class="btn btn-info btn-past-event-edit" data-toggle="modal" data-target="#ModalCE">Edit</button>
                        <button class="btn btn-danger btn-past-event-delete"  data-toggle="modal" data-target="#ModalDelete">Delete</button>
                      </div>
                      <i class="event-id"></i> <!-- ID Event -->
                      <h4 class="event-title">Past Event</h4><!-- Title Event -->
                    </div>
                    
                  </div>
                    <script>
                      $(document).ready(function() {
                        var owl = $('.owl-carousel');
                        owl.owlCarousel({
                          items: 3,
                          loop: true,
                          margin: 10,
                          autoplay: true,
                          autoplayTimeout: 2000,
                          autoplayHoverPause: true
                        });
                      })
                    </script>
                  </div>
                </div>
                <!-- Carousel -->
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <button class="btn btn-info" id="see-website-button">See Website</button>
                    <button class="btn btn-success" data-toggle="modal" data-target="#ModalCE" id="btn-new-event">Add New Event</button>
                  </div>                
                </div>

                <div class="row">
                  <div class="col-lg-12 event-content">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
            </div>
          <!-- /.box -->
          </div>     
      </div>
      <!-- /.row -->



      <!-- Modal Untuk Create dan Edit -->
      <div id="ModalCE" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="tes">Modal Header</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <h1>Untuk Live Preview (Menyusul)</h1>
                </div>
                <div class="col-lg-6">
                  <form class="form-horizontal" role="form" id="formEvent">
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="miniTitle">Mini-Title:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="miniTitle" placeholder="Enter Mini Title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="title">Title:</label>
                        <div class="col-sm-9"> 
                          <input type="password" class="form-control" id="title" placeholder="Enter Title">
                        </div>
                      </div>                    
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="background">Background:</label>
                        <div class="col-sm-9"> 
                          <input type="file" class="form-control" id="Background" placeholder="Enter Title">
                        </div>
                      </div>
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="reset" class="btn btn-danger">Reset</button>
                          <button type="submit" class="btn btn-success" id="btnInsert" onclick="Event()">Insert</button>
                        </div>
                      </div>
                  </form>

                  <form class="form-horizontal" role="form" id="formDetailEvent" style="display: none;">
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="detail-minititle">Mini-Title:</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="detail-miniTitle" placeholder="Enter Mini Title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="detail-title">Title:</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" id="detail-title" placeholder="Enter Title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="detail-subtitle">Sub-Title:</label>
                        <div class="col-sm-9"> 
                          <input type="text" class="form-control" id="detail-subtitle" placeholder="Enter Sub-Title">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="detail-description">Description:</label>
                        <div class="col-sm-9"> 
                          <textarea class="form-control" id="detail-description" placeholder="Enter Description"></textarea>
                        </div>
                      </div>                    
                      <div class="form-group">
                        <label class="control-label col-sm-3 text-right" for="detail-background">Background:</label>
                        <div class="col-sm-9"> 
                          <input type="file" class="form-control" id="detail-Background" placeholder="Enter Title">
                        </div>
                      </div>
                      <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="reset" class="btn btn-danger">Reset</button>
                          <button type="submit" class="btn btn-success" id="detail-btnInsert" onclick="Event2()">Insert</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div><!-- Modal Untuk Create Dan Edit -->


             <!-- Modal Untuk Delete -->
      <div id="ModalDelete" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Delete Event</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure want to delete this event ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Yes</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div><!-- Modal Untuk Delete -->
  </section>
    <!-- /.content -->

<script>
  $('#see-website-button').click(function() {
    $('.event-content').append('<iframe src="<?php echo base_url('index.php/page/bdi/') ?>" class="live-preview"></iframe>')
  });  

    
  function Event(i) {
    event.preventDefault();
    alert("Gunakan Ajax Untuk Input dan Edit  Event")


    /* Tulis Ajax untuk EVENT disini
      Gunakan Seleksi kondisi jika data berhasil diinputkan, lalu form Event akan ditutup dan otomatis membuka form Detail Event
    */

    /*Contoh script JS untuk membuka form Detail Event, langsung Copas Saja*/
    $('#formEvent').fadeOut('/400', function() {
      $('#formDetailEvent').fadeIn('400');
    });
  }

  function Event2() {
    /* Tulis Ajax untuk DETAIL EVENT disini*/
    event.preventDefault();
    alert("Gunakan Ajax Untuk Input dan Edit Detail Event")
  }



/* Berhubung kita menggunakan satu form untuk create dan Edit maka script dibawah ini digunakan untuk mengubah nilai Action dan tulisan header form*/
  $('#btn-new-event').click(function() {
    $('#tes').html("Add Event");
  });

  $('.btn-past-event-edit').click(function() {
    $('#tes').html("Edit Event");
  });

</script>