<?php
require_once "koneksi.php";
?>

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
          <div class="container"></div>
          <img src="../assets/buku.jpg"  class="img-fluid img-thumbnail" alt="..." style="width:100%; height:400px"> 
          <div class="col-12 text-dark" style="min-height:650px" >
            <div class="container text-center text-dark mt-5"><h2><b>INPUT FORM BUKU</b></h2>
                <form action="prosesInsertBuku.php" method="POST">
                  <div class="form-group text-left">
                    <label for="namabuku">Nama Buku:</label>
                    <input type="text" class="form-control" name="namabuku" placeholder=" nama Buku "  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="namapenerbit">Nama Penerbit:</label>
                    <input type="text" class="form-control mr-sm-2" name="namapenerbit" placeholder="nama Penerbit " style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="namapenulis">Nama Penulis:</label>
                    <input type="text" class="form-control mr-sm-2" name="namapenulis" placeholder="nama Penulis " style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="tahunterbit">Tahun Terbit:</label>
                    <input type="number" class="form-control mr-sm-2" name="tahunterbit" placeholder="tahun Terbit" style="width: 100%;" required> 
                  </div>
                  <button type="submit" class="btn btn-info mr-auto"style="width: 100%;">Simpan</button>
                  </div>
              </form>  
              <hr>

              <form class="form-inline my-2 my-lg-0 ">
                  <input class = "form-control mr-sm-2" type="text" name="q" placeholder="search"> 
                  <button class = "btn btn-success my-2 my-sm-0" type="submit" >search</button>
              </form>
              <br>
              <!-- Tabel data  -->
                <table class ="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Buku</th>
                            <th>Nama Penerbit</th>
                            <th>Nama Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // jika $_GET['q'] ada isinya
                        if (isset ($_GET['q'])){
                            // yang dijalankan jika ada isinya
                            $q = $_GET['q'];
                            $sql = "SELECT*FROM tb_buku WHERE nama_buku LIKE '%$q%'";
                        }else{
                            // jika $_GET['q'] tidak ada isinya
                            $sql = "SELECT*FROM tb_buku";
                        }
                            $result =$conn->query($sql);

                        if($result->num_rows > 0){
                                // Akan dijalankan jika recordnya da
                            while($row = $result->fetch_assoc()){ ?>
                                <tr>
                                    <td><?=$row['id_buku']?></td>
                                    <td><?=$row['nama_buku']?></td>
                                    <td><?=$row['nama_penerbit']?></td>
                                    <td><?=$row['nama_penulis']?></td>
                                    <td><?=$row['tahun_terbit']?></td>
                                    <td>
                                   
                                        <a onclick="return-confirm('Anda yakin akan menghapus record ini ?')"class="btn btn-danger" href="prosesDeleteBuku.php?id=<?=$row ['id_buku']?>">
                                        Delete
                                        </a>

                                        
                                        <a class="btn btn-primary" href="" onclick="showUpdateForm ('<?=$row['id_buku']?>', '<?=$row['nama_buku']?>', '<?=$row['nama_penerbit']?>', '<?=$row['nama_penulis']?>', '<?=$row['tahun_terbit']?>') "data-toggle="modal" data-target="#exampleModal">Update
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
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form UPDATE BUKU</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="prosesUpdateBuku.php" method="POST">
                  <div class="form-group text-left">
                    <label for="idbuku">id Buku:</label>
                    <input type="text" class="form-control" name="idbuku" id="modal-id-buku" placeholder="id buku"  style="width: 100%;" readonly>
                  </div>
                  <div class="form-group text-left">
                    <label for="namabuku">Nama Buku:</label>
                    <input type="text" class="form-control" name="namabuku" id="modal-nama-buku" placeholder=" nama buku"  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="namapenerbit">Nama Penerbit:</label>
                    <input type="text" class="form-control mr-sm-2" name="namapenerbit" id="modal-nama-penerbit" placeholder="nama penerbit" style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="namapenulis">Nama Penulis:</label>
                    <input type="text" class="form-control mr-sm-2" name="namapenulis" id="modal-nama-penulis" placeholder="nama penulis" style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="tahunterbit">Tahun Terbit:</label>
                    <input type="number" class="form-control mr-sm-2" name="tahunterbit" id="modal-tahun-terbit" placeholder="tahun terbit" style="width: 100%;" required> 
                  </div>

                <button type="submit" class="btn btn-info mr-auto"style="width: 100%;" value="Update">Update</button>
                
              </form> 
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>                       
      // fungsi untuk menampilkan nilai pada from update -->
      function showUpdateForm(id,nama,penerbit,penulis,tahun){
        // document.getElemtById adalah cara pada js DOM untuk mengambil elemen pada hal -->
        document.getElementById('modal-id-buku').value = id;
        document.getElementById('modal-nama-buku').value = nama;
        document.getElementById('modal-nama-penerbit').value = penerbit;
        document.getElementById('modal-nama-penulis').value = penulis;
        document.getElementById('modal-tahun-terbit').value = tahun;
      
      }
    </script>
</body>
</html>