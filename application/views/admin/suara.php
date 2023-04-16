<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>

              <h3 class="box-title"><?php echo $title ?></h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>
                  <tr>

                    <th>#</th>
                    <th>Nama User</th>
                    <th>Nama Kandidat</th>
                    <th>Waktu Pemilihan</th>
                    <th>Tindakan</th>
   
                 
                  </tr>
                  </tbody>

                  <tfoot>
                    <tr>
                    <th>#</th>
                    <th>Nama User</th>
                    <th>Nama Kandidat</th>
                    <th>Waktu Pemilihan</th>
                    <th>Tindakan</th>
                    </tr>
                  </tfoot>

                  <?php $no= 1;
                  
                  foreach($rows as $row) : ?>
                  
                  <tr>

                      <td><?php echo $no++ ?></td>

                      <td><?php echo $row->nama_user ?></td>

                      <td><?php echo $row->nama_kandidat ?></td>

                      <td><?php echo $row->created ?></td>


                      <td>

                        <a href="<?php echo site_url('admin/suara/hapus/' . $row->id_suara); ?>" class= "btn btn-sm 
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
