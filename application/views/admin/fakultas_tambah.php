<section class="content">

<div class="card">
              <div class="card-header">

              <?php echo $this->session->flashdata('message'); ?>

              <a href="<?php echo site_url('admin/fakultas'); ?>" class="btn bg-maroon"><i class="fa fa-arrow-left"></i>Kembali</a>

              <button type="button" class="btn bg-teal" id="btn_tambah_form"><i class="fa fa-plus-circle"></i> Tambah Fakultas</button>
              
                </div>

              <!-- /.card-header -->
              <div class="card-body">

              <form action="<?php echo site_url('admin/fakultas/simpan'); ?>" method="post">
                
                    <table id="table" width="30%">

                        <tr>

                            <td>

                            <div class="form-group">

                                <label for="nama">Nama Fakultas</label>

                                <input type="text" name="fakultas[]" id="fakultas" class="form-control" required>

                            </div>

                            </td>

                            <td>

                                <button type="button" class="btn btn-danger btn-sm" id="btn_minus" style="margin-top: 15px; margin-left: 5px;" disabled> 
                                <i class="fa fa-minus-circle" ></i></button>

                        </td>
                        
                        <tr>

                    </table>


                    <button type="reset" class="btn bg-red"><i class="fa fa-trash"> Reset</i></button>

                    <button type="submit" class="btn bg-teal"><i class="fa fa-save"> Simpan</i></button>

                </div>

            </div>
</section>


<script>

    $(document).ready(function()

        {

            $('#btn_tambah_form').on('click', function()

                {
                    $('#table').append(`
                    <tr>

                            <td>

                            <div class="form-group">

                                <label for="nama">Nama Fakultas</label>

                                <input type="text" name="fakultas[]" id="fakultas" class="form-control" required>

                            </div>

                            </td>

                            <td>

                                <button type="button" class="btn btn-danger btn-sm" id="btn_minus" style="margin-top: 15px; margin-left: 5px;">
                                <i class="fa fa-minus-circle" ></i></button>

                        </td>
                        
                        <tr>`)
            })

        $('#table').on('click', '#btn_minus', function()

            {

                $(this).closest("tr").remove();

            })
    });

</script>
</div>
