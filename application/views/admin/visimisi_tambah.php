<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>
              
              <h3 class="box-title"><?php echo $title ?></h3>


            
              
            </div>

              <!-- /.card-header -->
              <div class="card-body">

              <form action="<?php echo site_url('admin/visi_misi/simpan'); ?>" method="post">
                

            
                <div class="form-group">

                    <label for="id_paslon">Nama Paslon</label>

                    <select name="id_paslon" id="id_paslon" class="form-control">

                    <?php foreach($paslon as $psl) : ?>

                        <option value="<?php echo $psl->id ?>"><?php echo $psl->nama_kandidat ?></option>

                    <?php endforeach; ?> 

                    </select>

                </div>


                
                <div class="form-group">

                    <label for="visi">Visi</label>
                    
                    <textarea name="visi" id="visi" class="form-control ckeditor" required></textarea>
                
                </div>

                <div class="form-group">

                    <label for="misi">Misi</label>
                    
                    <textarea name="misi" id="misi" class="form-control ckeditor" required></textarea>
                
                </div>



              <a href="<?php echo site_url('admin/visi_misi'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>

                    <button type="submit" class="btn bg-teal"><i class="fa fa-save"> Simpan </i></button>

                </div>

            </div>
</section>


</div>
