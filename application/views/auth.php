<section class="sec1" id="sec1">

    <div class="container">
    <div class="row">
        <div class="col-md-6">

            <h2 class="display-4 text-primary mt-5 h2-sec1">Selamat Datang <br> di E-Voting UKM Granat</h2>

            <p class="text-secondary p-sec1"> Ayo Gunakan Hak Suara Kalian!!! Untuk Menentukan<br> Paslon Ketua dan Wakil Ketua UKM Granat Yang baru</p>

            <div class="a-sec1">

                <a href=" " class="btn btn-primary" data-toggle="modal" data-target="#modallogin">Login</a>

                <a href="#sec2" class="btn btn-secondary">Daftar Akun</a>

            </div>
            

        </div>
        <div class="col-md-6">

            <img src="<?php echo base_url('assets/img/logogranat.png'); ?>" class="img-fluid">


        </div>
    </div>
</section>

<section class="sec2" id="sec2">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

            <img src="<?php echo base_url ('assets/img/logokampus.png'); ?>" class="img-fluid img-sec2">

            </div>


            <div class="col-md-6">

                <h2 class="text-primary h2-sec2">Belum Punya Akun?</h2>

                <p class="text-secondary p-sec2">Silahkan Isi Form dibawah ini, Jika sudah anda dapat login.</p> 



            <form action="<?php echo site_url('auth/registrasi'); ?>" method="post">

            <div class="form-group">

                <label for="nama" class="text-secondary">Nama *</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo set_value('nama') ?>">
                <?php echo form_error('nama', '<span class="text-danger small pl-3">', '</span'); ?>

            </div>

            <div class="form-group">

                <label for="email" class="text-secondary">Email *</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>">
                <?php echo form_error('email', '<span class="text-danger small pl-3">', '</span'); ?>


            </div>

            <div class="form-group">

            <label for="npm" class="text-secondary">Npm *</label>
            <input type="text" name="npm" id="npm" class="form-control" value="<?php echo set_value('npm') ?>">
            <?php echo form_error('npm', '<span class="text-danger small pl-3">', '</span'); ?>

            </div>

            <div class="form-group">

            <label for="password" class="text-secondary">Password *</label>
            <input type="text" name="password" id="password" class="form-control">
            <?php echo form_error('password', '<span class="text-danger small pl-3">', '</span'); ?>



            </div>

            <div class="form-group">

                <label for="id_fakultas" class="text-secondary"> Fakultas *</label>
                <select name="id_fakultas" id="id_fakultas" class="form-control">

                    <?php foreach($fakultas as $fts) : ?>

                        <option value="<?php echo $fts->id ?>"><?php echo $fts->nama ?></option>

                    <?php endforeach; ?>

                </select>

            </div>

            <button type="submit" class="btn btn-primary">Daftarkan Akun</button>

            </form>

        </div>

        </div>

    </div>

</section>

<!-- Modal -->
    <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle"> Login </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>

        <div class="modal-body">
                <form action="<?php echo site_url('auth/login'); ?>" method="post">

                    <div class="form-group">

                    <label class="text-secondary" for="npm1">Npm *</label>
                    <input type="npm" name="npm1" id="npm1" class="form-control" required>

                    </div>

                    <div class="form-group">

                    <label class="text-secondary" for="password1">Password *</label>
                    <input type="password" name="password1" id="password1" class="form-control" required>

                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
        <div class="modal-footer">

        </div>
        </div>
    </div>
</div>




