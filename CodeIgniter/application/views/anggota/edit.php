<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Edit Anggota</h3>
				</div>
				<div class="box-body">
					<form action="<?=site_url('anggota/update');?>" method="post" accept-charset="utf-8">
						<div class="box-body">
							<input type="hidden" name="id_anggota" value="<?=$show->id_anggota;?>">
			                <div class="form-group">
			                	<label>Nama Anggota</label>
			                	<input type="text" name="nama_anggota" class="form-control" value="<?=$show->nama_anggota;?>" placeholder="Masukkan nama anggota" required="required">
			                </div>
			                <div class="form-group">
			                	<label>Gender</label>
			                	<input type="text" name="gender" class="form-control" value="<?=$show->gender;?>" placeholder="Masukkan gender" required="required">
			                	<select name="gender" size="1" class="form-control">
			                  	<option value="1">Laki-laki</option>
			                  	<option value="2">Perempuan</option>
			                  </select>
			                </div>     
			                <div class="form-group">
			                	<label>No Telp</label>
			                	<input type="text" name="no_telp" class="form-control" value="<?=$show->no_telp;?>" placeholder="Masukkan no telp" required="required">
			                </div>
			            	<div class="form-group">
			                  <label>Alamat</label>
			                  <input type="text" name="alamat" class="form-control" value="<?=$show->alamat;?>" placeholder="Masukkan Alamat" required="required">
			                </div>
			                <div class="form-group">
			                  <label>Email</label>
			                  <input type="text" name="email" class="form-control" value="<?=$show->email;?>" placeholder="Masukkan Email" required="required">
			                </div>
			                <div class="form-group">
			                  <label>Password</label>
			                  <input type="password" name="password" class="form-control" value="<?=$show->password;?>" placeholder="Masukkan Password" required="required">
			                </div>
						</div>

						<div class="box-footer">
							<button type="button" class="btn btn-default"> <i class="fa fa-arrow-circle-left"></i> Batal</button>
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-send"></i> Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>