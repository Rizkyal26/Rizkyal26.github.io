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
                    <th>Nama Kandidat</th>
                    <th>Nama Paslon</th>
                    <th>Foto</th>
                    <th>Tindakan</th>

                  
                 
                  </tr>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nama Kandidat</th>
                      <th>Nama Paslon</th>
                      <th>Foto</th>
                      <th>Tindakan</th>
                    </tr>
                  </tfoot>

                  <?php $no= 1;
                  
                  foreach($rows as $row) : ?>
                  
                  <tr>

                      <td><?php echo $no++ ?></td>

                      <td><?php echo $row->nama_kandidat ?></td>

                      <td><?php echo $row->nama_paslon ?></td>

                      <td>
                        <img src="<?php echo base_url('assets/img/'.$row->foto); ?>"  width="100">
                      </td>


                      <td>
                      
                        <a href="<?php echo site_url('admin/paslon/edit/' . $row->id); ?>" class= "btn btn-sm btn-info"><i
                        class="fa fa-pen"></i> Edit</a>
                    
                    
                      </td>



                  </tr>
                  
                  <?php endforeach; ?>

                </table>

              </div>
</div>
</section>
</div>
