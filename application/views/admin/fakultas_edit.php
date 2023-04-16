<section class="content">

<div class="card">
            
            <div class="card-header">

              <h3 class="box-title"><?php echo $title ?></h3>
            
            </div>

              <!-- /.card-header -->
              <div class="card-body">

              <form action="<?php echo site_url('admin/fakultas/update'); ?>" method="post">

              <input type="hidden" name="id" value="<?php echo $row->id ?>">
                
                    <table id="table" width="30%">

                        <tr>

                            <td>

                            <div class="form-group">

                                <label for="nama">Nama Fakultas</label>

                                <input type="text" name="fakultas" id="fakultas" class="form-control" required value="<?php echo $row->nama ?>">

                            </div>

                            </td>
                        
                        <tr>

                    </table>


                    <a href="<?php echo site_url('admin/fakultas'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>
                    <button type="submit" class="btn bg-teal"><i class="fa fa-save"> Update</i></button>

                </div>

            </div>
</section>

</div>
