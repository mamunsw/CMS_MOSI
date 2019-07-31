<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Sinopsis</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
                    <label>id</label>
                    <input type="text" name="id" class="form-control" placeholder="" value="<?php echo $dataedit->id?>" readonly>
            </div>
	  <div class="form-group">
            <label>judulfilm</label>
            <input type="text" name="judulfilm" class="form-control" value="<?php echo $dataedit->judulfilm?>">
    </div>
	  <div class="form-group">
            <label>genrefilm</label>
            <input type="text" name="genrefilm" class="form-control" value="<?php echo $dataedit->genrefilm?>">
    </div>
	  <div class="form-group">
            <label>sinopsisfilm</label>
            <input type="text" name="sinopsisfilm" class="form-control" value="<?php echo $dataedit->sinopsisfilm?>">
    </div>
	  <div class="form-group">
            <label>gambarfilm</label>
            <input type="text" name="gambarfilm" class="form-control" value="<?php echo $dataedit->gambarfilm?>">
    </div>
	  <div class="form-group">
            <label>durasifilm</label>
            <input type="text" name="durasifilm" class="form-control" value="<?php echo $dataedit->durasifilm?>">
    </div>
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
