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
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Master
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#section41">Data 1</a>
                <a class="dropdown-item" href="#section42">Data 2</a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Transaksi
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#section41">form 1</a>
                <a class="dropdown-item" href="#section42">form 2</a>
                </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" href="#">logout</a>
                </li>    
              </ul>
              <form class="form-inline my-2 my-lg-0 ">
                  <input class = "form-control mr-sm-2" type="text" name="q" placeholder="search"> 
                  <button class = "btn btn-success my-2 my-sm-0" type="submit" >search</button>
              </form>
            </div>  
          </nav>
          
          <h3 class="text-center mb-5">FORM INPUT DATA TRANSAKSI</h3>
          <form action="ProsesInsertTransaksi.php" id="form1" method="POST">
            <div class="form-group row">
                <label class="control-label col-sm-3">No Transaksi :</label><div class="col-sm-9">
                <input type="text" name="noTransaksi" class="form-control" id="no-transaksi" placeholder="Masukkan Nomer Transaksi
                " onkeyup="validasiTransaksi()" onclick="validasiTransaksi()" data-toggle="tooltip" title="Isi keranjang belanjaan dahulu"data-placement="left">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3">Tanggal :</label>
            <div class="col-sm-9">
                <input type="date" name="tanggalTransaksi" class="form-control" id="tanggal-transaksi" value="<?php echo date('Y-m-j');?>" readonly>
            </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-3">ID User(Kasir) / Nama User(Kasir)</label>
            <div class="col-sm-2">
                <input type="text" name="idUser" class="form-control" id="id-user" value="2" readonly>
            </div>
            <div class="col-sm-7">
                <input type="text" name="namaUser" class="form-control" id="nama-user" value="Zulka Ali" readonly>
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-sm-3">
                <select onchange="getDataBarang()" class="form-control" id="id-barang" name="idBarang">
                  <option value="" disabled selected>Pilih Barang --></option>
                        <?php
                        require_once 'koneksi.php';
                        $sql = "SELECT*FROM tb_barang";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?= $row['id_barang']; ?>">
                        <?= $row['id_barang'] . "-" . $row['nama_barang']; ?>
                        </option>
                        <?php }; ?>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" name="hargaBarang" class="form-control" id="harga-barang" readonly>
            </div>
            <div class="col-sm-2">
                <input type="text" name="satuanBarang" class="form-control" id="satuan-barang" readonly>
            </div>
            <div class="col-sm-2">
                <input type="number" min="1" name="jumlahBeli" class="form-control" id="jumlah-beli" disabled>
            </div>
            <div class="col-sm-3">
                <input type="submit" name="submitTemp" class="form-control btn btn-success" id="submit-temp" value="Tambah" disabl
            ed>
            </div>
            </div>
            <hr>
              <!-- Tabel data -->
            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Beli</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $no = 1;
                    $totalHarga = 0;
                    $grandTotal = 0;
                    $totalBeli = 0;
                    $sql = "SELECT*FROM tb_temp";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    //Akan dijalankan jika recordnya ada
                    while ($row = $result->fetch_assoc()) {
                    $totalHarga = $row['harga_barang'] * $row['jumlah_beli'];
                    ?>
            <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['id_barang']; ?></td>
                  <td><?= $row['nama_barang']; ?></td>
                  <td><?= $row['satuan_barang']; ?></td>
                  <td><?= $row['harga_barang']; ?></td>
                  <td><?= $row['jumlah_beli']; ?></td>
                  <td><?= $totalHarga; ?></td>
                  <td>
            <a onclick="return confirm('Anda yakin akan menghapus record ini?')" class="btn btn-danger" href="pros
                  esDeleteTempTrans.php?id=<?= $row['id_barang'] ?>">
                  Delete
            </a>
            </td>
            </tr>
                  <?php
                  $grandTotal = $grandTotal + $totalHarga;
                  $totalBeli = $totalBeli + $row['jumlah_beli'];
                  }
                  } else {
                  //Akan dijalankan jika recordnya kosong
                  echo "<tr><td colspan='3'>Record masih kosong</td></tr>";
                  }
                  ?>
            </tbody>
            </table>
            <tfoot class="bg-secondary text-light">
            <tr>
              <td colspan="5"></td>
              <td><?= $totalBeli; ?></td>
              <td>
              <input type="number" name="grandTotal" value="<?= $grandTotal; ?>" id="grand-total" readonly>
            </td>
            <td></td>
            </tr>
            </tfoot>
            </table>
            <div class="row">
            <div class="col-12">
            <input type="submit" name="submitTrans" class="form-control btn btn-primary" id="submit-trans" value="Simpan Trans
            aksi" disabled>
            </div>
            </div>
            </form>          
            </div>
        </div>
          <div class="col-12 col-md-4 col-lg-2 bg-secondary text-light">Banner</div>
          <div class="col-12 bg-info text-light">Footer</div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form UPDATE DATA BARANG</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="prosesUpdateBarang.php" method="POST">
                  <div class="form-group text-left">
                    <label for="idBarang">id Barang:</label>
                    <input type="text" class="form-control" name="idBarang" id="modal-id-barang" placeholder="id barang"  style="width: 100%;" readonly>
                  </div>
                  <div class="form-group text-left">
                    <label for="namaBarang">Nama Barang:</label>
                    <input type="text" class="form-control" name="namaBarang" id="modal-nama-barang" placeholder=" name barang"  style="width: 100%;" required>
                  </div>
                  <div class="form-group text-left">
                    <label for="satuanBarang">Satuan Barang:</label>
                    <input type="text" class="form-control mr-sm-2" name="satuanBarang" id="modal-satuan-barang" placeholder="satuan barang" style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="hargaBarang">Jumlah Barang:</label>
                    <input type="number" class="form-control mr-sm-2" name="hargaBarang" id="modal-harga-barang" placeholder="harga barang" style="width: 100%;" required> 
                  </div>
                  <div class="form-group text-left">
                    <label for="hargaBarang">Harga Barang:</label>
                    <input type="number" class="form-control mr-sm-2" name="hargaBarang" id="modal-harga-barang" placeholder="harga barang" style="width: 100%;" required> 
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
      function showUpdateForm(id,nama,satuan,harga){
        // document.getElemtById adalah cara pada js DOM untuk mengambil elemen pada hal -->
        document.getElementById('modal-id-barang').value = id;
        document.getElementById('modal-nama-barang').value = nama;
        document.getElementById('modal-satuan-barang').value = satuan;
        document.getElementById('modal-harga-barang').value = harga;
      
      }
    </script>
</body>
</html>