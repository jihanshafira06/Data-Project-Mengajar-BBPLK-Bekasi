<?php require_once "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class= "container">
        <div class="row">
          <!-- <div class= "col-12 bg-primary text-light" style="height: 100px" >Header</div> -->
          <div class="container-fluid"></div>
          <img src="../assets/coffe.jpg"  class="img-fluid img-thumbnail" alt="..." style="width:100%; height:400px"> 

          <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">Navigation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="LatihanBoostrap3.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Facilities</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" href="#">Guest Book</a>
                </li>    
              </ul>
              <form class="form-inline my-2 my-lg-0 ">
                  <input class="form-control mr-sm-2" type="search" placeholder="search"> 
                  <button class="btn btn-success my-2 my-sm-0" type="button" >search</button>
              </form>
            </div>  
          </nav>
          
          <div class="col-12 col-md-8 col-lg-10 bg-light text-dark" style="min-height:650px" >
            <div class="container-fluid text-center text-dark"><h2><b>INPUT DATA USER</b></h2>
                <form action="prosesInsertUser.php" method="POST">
                  <div class="form-group text-left">
                    <label for="namaUser">Nama User:</label>
                    <input type="text" class="form-control" name="namaUser" placeholder="user name"  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="emaiUser">Email User:</label>
                    <input type="email" class="form-control mr-sm-2" name="emailUser" placeholder="@" style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="passwordUser">Password User:</label>
                    <input type="password" class="form-control mr-sm-2" name="passwordUser" placeholder="password" style="width: 100%;" required> 
                  </div>
                <button type="submit" class="btn btn-info mr-auto"style="width: 100%;">Submit</button>
              </form>  
              <br>
              <!-- Tabel data  -->
                <table class ="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT*FROM tb_users";
                            $result = $conn->query($sql);

                        if($result->num_rows > 0){
                                // Akan dijalankan jika recordnya da
                            while($row = $result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?=$row['id_user']?></td>
                                    <td><?=$row['nama_user']?></td>
                                    <td><?=$row['email_user']?></td>
                                    <td>
                                   
                                        <a onclick="return-confirm('Anda yakin akan menghapus record ini ?')"class="btn btn-danger" href="prosesDeleteUser.php?id=<?=$row ['id_user']?>">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                }
                            }else{
                                // Akan dijalankan jika recordnya kosong
                                echo "<tr><td colspan='3'>Recordnya masih kosong</td></tr>";
                            }
                        ?>

                    </tbody>
                </table>
                      
            </div>
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