<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>
              
              <h3 class="box-title"><?php echo $title ?></h3>


            
              
            </div>

              <!-- /.card-header -->
              <div class="card-body">

              <form action="<?php echo site_url('admin/user/update'); ?>" method="post">
                
              <input type="hidden" name="id" value="<?php echo $row->id ?>">

            
                <div class="form-group">

                    <label for="id_fakultas"> Fakultas </label>

                    <select name="id_fakultas" id="id_fakultas" class="form-control">

                    <?php foreach($fakultas as $fts) : ?>

                        <option value="<?php echo $fts->id ?>" <?php echo $row->id_fakultas == $fts->id ? 'selected' : '' ?>
                        ><?php echo $fts-> nama ?></option>

                    <?php endforeach; ?> 

                    </select>

                </div>


                <div class="form-group">

                        <label for="nama"> Nama *</label>

                        <input type="nama" name="nama" id="nama" class="form-control" required value="<?php echo $row->nama ?>">

                </div>

                <div class="form-group">

                        <label for="email" >Email *</label>

                        <input type="email" name="email" id="email" class="form-control" required value="<?php echo $row->email ?>">

                </div>

                <div class="form-group">

                        <label for="npm" > Npm *</label>

                        <input type="npm" name="npm" id="npm" class="form-control" required value="<?php echo $row->npm ?>">

                </div>



                <div class="form-group">

                        <label for="level" >Level *</label>

                        <select name="level" id="level" class="form-control">

                            <option value="admin" <?php echo $row->level == 'admin' ? 'selected' : '' ?>>Admin</option>

                            <option value="anggota"<?php echo $row->level == 'anggota' ? 'selected' : '' ?>>Anggota</option>
                        
                        </select>

                </div>

              <a href="<?php echo site_url('admin/user'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>

                    <button type="submit" class="btn bg-teal"><i class="fa fa-save"> Update </i></button>

                </div>

            </div>
</section>


</div>
