<section class="sec1" id="sec1">

    <div class="container">

        <div class="row">

            <div class="col-md-12">
                
                <h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Perolehan Suara</h2>

                <canvas id="myChart" width="200" height="150"></canvas>

            </div>
            
        </div>


        <script>

            const ctx = document.getElementById('myChart').getContext('2d');
            
            const myChart = new Chart(ctx, {
                
                type: 'bar',
                    
                    data: {
                            labels: ['Paslon 1', 'Paslon 2', 'Paslon 3'],
                            datasets: [{
                            label: '# Hasil Suara',
                            data: [12, 19, 11, 0],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 2
                        }]
                        },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                        </script>

                            </div>
        </section>

    
<section class="sec2" id="sec2">

    <div class="container">

    <div class="row">

        <div class="col md-12">

        <h2 class="display-4 text-primary mt-5 h2-sec1 text-center">Voting</h2>

        </div>

    </div>


        <div class="row">

        <?php foreach($paslon as $psl) : ?>

            <div class="col-md-4">

                <div class="card mb-3">
                
                    <img src="<?php echo base_url('assets/img/' .$psl->foto); ?>" class="card-img-top" alt="...">
                    
                    <div class="card-body">
                    
                        <h5 class="card-title text-center text-primary font-weight-bold"><?php echo $psl->nama_kandidat ?></h5>
                        
                        <p class="card-text text-center text-secondary"><?php echo $psl->nama_paslon ?></p>

                        <div class="d-flex justify-content-between">

                            <a href="<?php echo site_url('home/visimisi/' .$psl->id); ?>" class="btn btn-primary btn-sm"> Lihat Visi Misi</a>

                            <a href="#" class="btn btn-success btn-sm" data-nama_kandidat="<?php echo $psl->nama_kandidat ?>" 
                            data-id_user="<?php echo $this->session->userdata('id'); ?> "> Pilih <?php echo $psl->nama_kandidat ?></a>

                        </div>
                </div>

                
            </div>
            
        </div>
        
        <?php endforeach; ?>
            
            </div>

            </div>

        </div>

    </div>

</section>


<!-- Modal -->
    <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
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

  



