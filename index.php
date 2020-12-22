<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <h3><i class="fas fa-cart-plus text-success"></i></h3>
            <a class="navbar-brand font-weight-bold ml-3"  href="#">MY SHOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Reseller <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Bantuan <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5>
                    <i class="fas fa-cart-plus ml-3 mr-3" ></i>
                    <i class="fas fa-envelope mr-3" ></i>
                    <i class="fas fa-bell mr-3" ></i>
                    </h5>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mt-5 no-gutters">
    <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-4">
        <li class="list-group-item bg-warning"><i class="fas fa-list"></i> KATEGORI PRODUK</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Peralatan Elektronik</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Aksesoris Elektronik</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Pria</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Wanita</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Fashion Anak</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Otomotif</li>
        <li class="list-group-item"><i class="fas fa-angle-right"></i> Hobi & Olahraga</li>

        </ul>
    </div>
    <div class="col-md-10">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/slide/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/slide/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/slide/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

        <h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>
        <div class="row mx-auto">
                    <div class="card ml-4 " style="width: 16rem;">
            <img src="img/produk/headphone.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">Headphone</h5>
                <p class="card-text">Headphone Free Ongkir</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 300.000</a>
            </div>
            </div>

            <div class="row mx-auto">
                    <div class="card mr-2 ml-2 " style="width: 16rem;">
            <img src="img/produk/jacket.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">JACKET</h5>
                <p class="card-text">Jacket Berkualitas</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 150.000</a>
            </div>
            </div>

            <div class="row mx-auto">
                    <div class="card mr-2 ml-2  " style="width: 16rem;">
            <img src="img/produk/kamera.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">KAMERA</h5>
                <p class="card-text">Kamera HD</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 850.000</a>
            </div>
            </div>

            <div class="row mx-auto">
                    <div class="card mr-2 ml-2 " style="width: 16rem;">
            <img src="img/produk/laptop.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">LAPTOP ASUS</h5>
                <p class="card-text">Laptop Asus Gaming</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 2.000.000</a>
            </div>
            </div>
             <!-- Modal -->
        <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-6">
                        <img src="img/produk/headphone.jpg" >
                </div>
                <div class="col-md-6">
                        <table>
                            <table class="table table-borderless"></table>
                            <tr>
                                <th>Nama Produk : </th>
                                <td>Headphone</td><br>
                            </tr>
                            <tr>
                                <th>Merk/Type : </th>
                                <td>Bosse/5B</td><br>
                            </tr>
                            <tr>
                                <th>Biaya Ongkir : </th>
                                <td>Standar</td> <br>
                            </tr>
                            <tr>
                                <th>Rating Produk : </th>
                            <td>
                            <i class="fas fa-star text-success"></i>
                            <i class="fas fa-star text-success"></i>
                            <i class="fas fa-star text-success"></i>
                            <i class="fas fa-star-half-alt text-success"></i>
                            <i class="far fa-star text-success" ></i>
                        <br></td>
                            </tr>
                            <tr>
                                <th>Stock : </th>
                                <td>50</td><br>
                            </tr>
                            <tr>
                                <th> Harga : </th>
                                <td>Rp. 30.000</td><br>
                            </tr>

                        </table>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary">Beli</button>
            </div>
            </div>
        </div>
        </div>

        </div>

    </div>
        
    </div>

    <div class="row mx-auto mt-5">
                    <div class="card ml-4 " style="width: 16rem;">
            <img src="img/produk/sdcard.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">Sd Card</h5>
                <p class="card-text">Sd Card V-Gen 128GB</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 1500.000</a>
            </div>
            </div>

            <div class="row mx-auto">
                    <div class="card mr-2 ml-2 " style="width: 16rem;">
            <img src="img/produk/speaker.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">SPEAKER</h5>
                <p class="card-text">Speaker Simbadda Super Bass</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 100.000</a>
            </div>
            </div>

            <div class="row mx-auto">
                    <div class="card mr-2 ml-2  " style="width: 16rem;">
            <img src="img/produk/ssd.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">SSD 128GB</h5>
                <p class="card-text">SSD Murah</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 500.000</a>
            </div>
            </div>

            <div class="row mx-auto">
                    <div class="card mr-2 ml-2 " style="width: 16rem;">
            <img src="img/produk/usb.jpg" class="card-img-top" alt="...">
            <div class="card-body bg-light">
                <h5 class="card-title">USB</h5>
                <p class="card-text">USB Gaming</p>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star text-success"></i>
                <i class="fas fa-star-half-alt text-success"></i>
                <i class="far fa-star text-success" ></i><br>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-primary btn-danger">Rp. 200.000</a>
            </div>
            </div>

        </div>
         <!-- Modal -->
        <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
            </div>
        
    </div>
    


    <!-- Site footer -->
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>