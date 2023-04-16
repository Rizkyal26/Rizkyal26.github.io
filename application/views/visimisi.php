<section class="sec1" id="sec1">

    <div class="container">

            <img src="<?php echo base_url('assets/img/' . $paslon->foto); ?>" class="img-circle">
                
            <h2 class="text-primary mt-5 h2-sec1 text-center"><?php echo $paslon->nama_paslon ?></h2>
            <!-- ubah display jadi 5 -->

        <div class="row justify-content-center">

            <div class="col-md-5">
                
                

                <!-- Tambah mt-5 untuk jarak atas bawah -->

                <table class="table">

                    <tr>

                        <th>VISI</th>

                            <td>
                                <?php echo $visimisi->visi ?>
                            </td>

                    </tr>

                    <tr>

                        <th>MISI</th>

                            <td>
                                <?php echo $visimisi->misi ?>
                            </td>

                    </tr>
                
                </table>

                <a href="<?php echo site_url('home'); ?>" class="btn btn-info"> Kembali </a>

            </div>

        </div>

    </div>

</section>

 



