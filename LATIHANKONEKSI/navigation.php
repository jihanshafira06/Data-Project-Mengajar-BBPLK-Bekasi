<a class="navbar-brand" href="">Navigation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php?p=formInputUser.php">form user</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?p=formBarang.php">form barang</a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="index.php?p=formTransaksi.php">form Transaksi</a>
                </li> 
              </ul>
              <form class="form-inline my-2 my-lg-0 ">
                  <input class = "form-control mr-sm-2" type="text" name="q" placeholder="search"> 
                  <button class = "btn btn-success my-2 my-sm-0" type="submit" >search</button>
              </form>
            </div>


<!-- ini copyan <index class="tokojihan"> -->
<div class="container">
    ini header
        <div class="row">
          <div class= "col-12 bg-primary text-light" style="height: 100px" ><?php include_once ('part/header.php');?></div>
    ini navigation
          <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
          <?php include_once ('part/navigation.php');?>  
          </nav>
    ini content
          <div class="col-12 col-md-8 col-lg-10 bg-light text-light" style="min-height:650px"><?php include_once $page;?>
          </div>
    ini banner
          <div class="col-12 col-md-4 col-lg-2 bg-danger text-light"><?php include_once ('part/banner.php');?></div>
    ini footer
          <div class="col-12 bg-info text-light"><?php include_once ('part/footer.php');?></div>
      </div>
    </div> -->
