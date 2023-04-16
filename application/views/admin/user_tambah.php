<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>
              
              <h3 class="box-title"><?php echo $title ?></h3>


            
              
            </div>

              <!-- /.card-header -->
              <div class="card-body">

              <form action="<?php echo site_url('admin/user/simpan'); ?>" method="post">
                

            
                <div class="form-group">

                    <label for="id_fakultas"> Fakultas </label>

                    <select name="id_fakultas" id="id_fakultas" class="form-control">

                    <?php foreach($fakultas as $fts) : ?>

                        <option value="<?php echo $fts->id ?>"><?php echo $fts-> nama ?></option>

                    <?php endforeach; ?> 

                    </select>

                </div>


                <div class="form-group">

                        <label for="nama"> Nama *</label>

                        <input type="nama" name="nama" id="nama" class="form-control" required>

                </div>

                <div class="form-group">

                        <label for="email" >Email *</label>

                        <input type="email" name="email" id="email" class="form-control" required>

                </div>

                <div class="form-group">

                        <label for="npm" > Npm *</label>

                        <input type="npm" name="npm" id="npm" class="form-control" required>

                </div>

                <div class="form-group">

                        <label for="password" >Password *</label>

                        <input type="password" name="password" id="password" class="form-control" required>

                </div>

                <div class="form-group">

                        <label for="level" >Level *</label>

                        <select name="level" id="level" class="form-control">

                            <option value="admin">Admin</option>

                            <option value="anggota">Anggota</option>
                        
                        </select>

                </div>

              <a href="<?php echo site_url('admin/user'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>

                    <button type="submit" class="btn bg-teal"><i class="fa fa-save"> Simpan </i></button>

                </div>

            </div>
</section>


</div>
