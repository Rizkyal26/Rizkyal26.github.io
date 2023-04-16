<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>

              <a href="<?php echo site_url('admin/visi_misi/tambah'); ?>" class="btn bg-teal"><i class="fa fa-plus-circle"></i> Tambah Visi & Misi</a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>
                  <tr>

                    <th>#</th>
                    <th>Nama Kandidat</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Tindakan</th>

                  
                 
                  </tr>
                  </tbody>

                  <tfoot>
                    <tr>
                    <th>#</th>
                    <th>Nama Kandidat</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Tindakan</th>
                    </tr>
                  </tfoot>

                  <?php $no= 1;
                  
                  foreach($rows as $row) : ?>
                  
                  <tr>

                      <td><?php echo $no++ ?></td>

                      <td><?php echo $row->nama_kandidat ?></td>

                      <td><?php echo $row->visi ?></td>

                      <td><?php echo $row->misi ?></td>


                      <td>
                      
                        <a href="<?php echo site_url('admin/visi_misi/edit/' . $row->id_visimisi); ?>" class= "btn btn-sm btn-info"><i
                        class="fa fa-pen"></i> Edit</a>

                        <a href="<?php echo site_url('admin/visi_misi/hapus/' . $row->id_visimisi); ?>" class= "btn btn-sm 
                        btn-danger" onclick="return confirm('Apakah Anda Yakin Mau Ingin Menghapus Data Ini?')"><i
                        class="fa fa-trash"></i> Hapus</a>
                    
                    
                      </td>



                  </tr>
                  
                  <?php endforeach; ?>

                </table>

              </div>
</div>
</section>
</div>
