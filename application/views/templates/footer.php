
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="<?php echo base_url('assets/'); ?>js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>js/popper.min.js" ></script>
  <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>sweetalert/sweetalert2.all.min.js"></script>

  <script>

    $(document).ready(function()
      {
        $('.nav-active').on('click', function()
        {

          $('.nav-active').removeClass('active');
          
          $(this).addClass('active');
          
        });

        $('.btn-success').on('click', function()
        {
          let nama_kandidat = $(this).data('nama_kandidat');
          let id_user = $(this).data('id_user');

          Swal.fire({

            title: 'Apakah Anda Yakin?',

            icon: 'question',

            showCancelButton: true,

            confirmButtonColor: '#3085d6',

            cancelButtonColor: '#d33',

            confirmButtonText: 'Yakin!'

          }).then((result) => {

              if (result.isConfirmed) {
               
                $.ajax({

                    type:'post',
                    url:'<?php echo site_url('home/pilih_kandidat') ?>',
                    dataType: 'json',
                    data: 
                    {
                      'nama_kandidat': nama_kandidat,
                      'id_user': id_user,
                    }, 

                    success: function(result)
                    {
                      if (result.success == true)
                      {
                        alert('ok');
                      }
                    }
                })
              }

          })

        })

      });

  </script>



<footer>

  <p class="text-secondary font-weight-bold text-center">©Copyright AL'S_Corp 2022</p>
  <p class="text-secondary font-weight-bold text-center">All Right Reserved and Protected by Law</p>

</footer>  

</body>
</html>
