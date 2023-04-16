<section class="content">
  
   <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Total Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>Total Suara</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
      <div class="alert alert-info alert-dismissible">
                  <h5><i class="icon fas fa-info"></i> Perolehan Suara!!</h5>
                  <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-success" style="text-decoration: none;">
                  <i class="fa-solid fa-rotate"></i> Refresh Untuk Melihat Data Terbaru</a>
                </div>
      </div>
    </div>


<!-- mengatur ukuran Chart -->
<canvas id="myChart" width="200" height="150"></canvas>

</section>

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







  