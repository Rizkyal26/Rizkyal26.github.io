
<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">

    <!-- Style Border --->
    <style> 

        .img-circle
        {

            display: block;

            border-radius: 50%;

            margin: 30px auto;
        }
    
    </style>

    <!--- Chart Suara --->
    <script src="<?php echo base_url('assets/'); ?>js/Chart.min.js"></script>
    
    <!--- Icon Tab -->
    <link href='assets/img/granat.png' rel='shortcut icon'>

    <!--- Judul dari Auth -->
    <title><?php echo $title ?></title>
    
  </head>

  <body id="body">

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-white rounded fixed-top">

    <div class="container">

        <a class="navbar-brand text-primary font-weight-bold" href=" ">E - VOTE GRANAT</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>


        <?php if($this->session->userdata('id') != NULL) : ?>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link nav-active active" href="#sec1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-active"  href="#sec2">Voting</a>
                        </li>
            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $this->session->userdata('nama'); ?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a a class="dropdown-item" href="<?php echo site_url('auth/logout')?>">Logout</a>
                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        <?php endif; ?>

    </div>

</nav>

