<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>

              <a href="<?php echo site_url('admin/user/tambah'); ?>" class="btn bg-teal"><i class="fa fa-plus-circle"></i> Tambah User </a>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead>

                    <tr>

                        <th>#</th>
                        <th>Fakultas</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Npm</th>
                        <th>Status</th>
                        <th>Level</th>
                        <th>Tindakan</th>

                    </tr>
                  </tbody>

                    <tfoot>
                        <tr>
                        <th>#</th>
                        <th>Fakultas</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Npm</th>
                        <th>Status</th>
                        <th>Level</th>
                        <th>Tindakan</th>
                        </tr>
                    </tfoot>

                  <?php $no= 1;
                  
                  foreach($rows as $row) : ?>
                  
                  <tr>

                      <td><?php echo $no++ ?></td>

                      <td><?php echo $row->nama_fakultas?></td>

                      <td><?php echo $row->nama_user ?></td>

                      <td><?php echo $row->email ?></td>

                      <td><?php echo $row->npm ?></td>

                      <td>
                            <?php if($row->status == 1) {?>

                              <button type="button" class="btn btn-info"><i class="fa fa-check"></i> Sudah Memilih </button>
                          
                            <?php } else { ?>

                              <button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i> Belum Memilih </button>

                            <?php } ?>
                          
                      </td>

                      <td><?php echo $row->level ?></td>

                    <td>  

                        <a href="<?php echo site_url('admin/user/edit/' . $row->id_user); ?>" class= "btn btn-sm btn-info"><i
                        class="fa fa-pen"></i> Edit</a>

                        <a onclick="return confirm('Apakah Kamu yakin mau Menghapus Data ini?')" href="<?php echo site_url('admin/user/hapus/' . $row->id_user); ?>" class= "btn btn-sm btn-danger"><i
                        class="fa fa-trash-alt"></i> Hapus </a>
                    
                    </td>

                </tr>
                  
            <?php endforeach; ?>

            </table>

            </div>

</div>

</section>

</div>
