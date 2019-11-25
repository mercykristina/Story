<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= site_url('user/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>


<!--Genre-->
<div class="modal fade" id="GenreModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Genre</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      
      <div class="modal-body">    
    <div class="form-group">
      <label style="width:50%">Genre</label>
      <br>
      <div style="float:left; width: 32%;" class="controls">
        <select id="genre">
        <option value="0" disabled selected>-- Select Genre --</option>
        <option value="Action">Action</option>
        <option value="Adventure">Adventure</option>
        <option value="Comedy">Comedy</option>
        <option value="Fiction">Fiction</option>
        <option value="History">History</option>
        <option value="Horror">Horror</option>
        <option value="Romance">Romance</option>
        </select>
      </div>
      
    </div>
    </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal" >Cancel</button>
        <input type=button value="View" class="btn btn-primary" onclick="Genre()"/>
      </div>
    </div>
  </div>
</div>

<script>
  function GenreModal(url){
    $('#GenreModal').modal();
  }

  function Genre()
    {
    var url = "<?php echo site_url('user/product/list_genre/') ?>"+document.getElementById('genre').value;
        
    if(document.getElementById('genre').value=='0'){
            alert("Silahkan Lengkapi Data Terlebih Dahulu!");
    }
    else{
      window.location = url;
        }
    }
</script>