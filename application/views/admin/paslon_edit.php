<section class="content">

<div class="card">
            
            <div class="card-header">

              <h3 class="box-title"><?php echo $title ?></h3>

              <?php echo form_open_multipart('admin/paslon/update');?> <!-- -->

              <input type="hidden" name="id" value="<?php echo $row->id ?>">
            

              <!-- /.card-header -->
              <div class="card-body">

                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo base_url('assets/img/' .$row->foto); ?>" class="img-fluid">
                    </div>

                    <div class="col-md-9">

                    <div class="form-group">

                        <label for="nama_kandidat">Nama Kandidat</label>

                        <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control" value="<?php echo $row->nama_kandidat ?>" readonly> 

                    </div>

                    <div class="form-group">

                        <label for="nama_paslon">Nama Paslon</label>

                        <input type="text" name="nama_paslon" id="nama_paslon" class="form-control" value="<?php echo $row->nama_paslon ?>">

                    </div>

                    <div class="form-group">

                        <label for="foto">Ganti Foto</label>

                        <input type="file" name="foto" id="foto" class="form-control">

                    </div>

                    </div>

                </div>



                    <a href="<?php echo site_url('admin/paslon'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>
                    <button type="submit" class="btn bg-teal"><i class="fa fa-save"> Update</i></button>

            


                </div>

            </div>
</section>

</div>
