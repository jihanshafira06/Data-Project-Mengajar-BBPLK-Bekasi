<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        $Nama1 ="hana";
        $Nama2 ="indria";
        $Email1 ="hana@gmail.com";
        $Email2 ="indria@gmail.com";
        $Komentar1 ="hjdgfgjgfhgdfhgf";
        $Komentar2 ="hfbdhfgvfjdbvdh";
    ?>

    <div class= "container">
        <div class="row">
          <div class="container-fluid"></div>
          <img src="assets/coffe.jpg"class="img-fluid img-thumbnail" alt="..." style="width:100%; height:400px"> 

          <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">Navigation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link active" href="#">Data Komentar</a>
                </li>   
              </ul>
              <form class="form-inline my-2 my-lg-0 ">
                  <input class="form-control mr-sm-2" type="search" placeholder="search"> 
                  <button class="btn btn-success my-2 my-sm-0" type="button" >search</button>
              </form>
            </div>  
          </nav>
          
          <div class="col-12 col-md-8 col-lg-10 bg-light text-dark table-hover" style="min-height:650px; padding: 4rem!important;" >
            <div class="container-fluid p-3 my-3 bg-light text-dark text-center">
              <h1><b>Data Komentar</b></h1>
            </div>
            <table class="table table-striped">
                <thead class="thead-drak bg-primary">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Komentar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-primary">
                    <th scope="row">1</th>
                    <td><?php echo $Nama1;?></td>
                    <td><?php echo $Email1;?></td>
                    <td><?php echo $Komentar1;?></td>
                  </tr>
                  <tr class="table-primary">
                    <th scope="row">2</th>
                    <td><?php echo $Nama2;?></td>
                    <td><?php echo $Email2;?></td>
                    <td><?php echo $Komentar2;?></td>
                  </tr>
                </tbody>
              </table>      
        </div>
        <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
        <div class="col-12 bg-info text-light">Footer</div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>