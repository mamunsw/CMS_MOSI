<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Sinopsis</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>judulfilm</label>
            <input type="text" name="judulfilm" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>genrefilm</label>
            <input type="text" name="genrefilm" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>sinopsisfilm</label>
            <input type="text" name="sinopsisfilm" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>gambarfilm</label>
            <input type="text" name="gambarfilm" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>durasifilm</label>
            <input type="text" name="durasifilm" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="id" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
