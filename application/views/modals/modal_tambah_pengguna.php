<form id="form-tambah-pengguna" class="form-horizontal" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 style="display:block; text-align:center;">Tambah Data Pengguna</h3>                   
  </div> <!-- modal header -->
  <div class="modal-body form">
    <div class="form-msg"></div>
    <input type="hidden" value="" name="id"/>
    <div class="form-body well">
      <div class="form-group">
        <label class="control-label col-md-2">NIK</label>
        <div class="col-md-10">
          <input name="username" placeholder="NIK" class="form-control" type="text">
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Password</label>
        <div class="col-md-10">
          <div class="input-group">
            <input id="password" name="password" placeholder="Password" class="form-control" type="password" data-toggle="password">
            <span class="input-group-btn">
              <button type="button" class="btn btn-flat" onclick="myFunction()"><i class="fa fa-eye"></i></button>
            </span>
            <span class="help-block"></span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Nama Depan</label>
        <div class="col-md-10">
          <input name="first_name" placeholder="Nama Depan" class="form-control" type="text">
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Nama Belakang</label>
        <div class="col-md-10">
          <input name="last_name" placeholder="Nama Belakang" class="form-control" type="text">
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Level Pengguna</label>
        <div class="col-md-10">
          <select class="form-control select2" name="id_role" id="id_role" placeholder="Role" style="width: 100%">
            <option value="2">Warga</option>
            <option value="1">Administrator</option>
          </select>
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Alamat</label>
        <div class="col-md-10">
          <input name="email" placeholder="Alamat" class="form-control" type="email">
          <span class="help-block"></span>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-2">Phone</label>
        <div class="col-md-10">
          <input name="phone" placeholder="Phone" class="form-control" type="text" ">
          <span class="help-block"></span>
        </div>
      </div>
    </div>
  </div> <!-- modal body -->

  <div class="modal-footer">
    <div>
      <button type="submit" class="form-control btn btn-primary"><i class="fa fa-check"></i> Tambah Data</button>

    </div>
  </div> <!-- modal footer -->
</form>
