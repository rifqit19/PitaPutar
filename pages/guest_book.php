<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="../fontawesome//css/all.min.css"
    />

    <link rel="stylesheet" type="text/css" href="../css/style-guestbook.css" />

    <title>Pita Putar</title>
  </head>
  <body>
    <!--Awal NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="../Sources/assets/logo.png"
            alt=""
            width="50"
            height="50"
            class="me-2"
          />
          <strong>PitaPutar</strong>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Cari barang anda"
              aria-label="Search"
            />
            <button class="btn btn-light" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.html">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Buku Tamu</a
              >
            </li>
            <li class="nav-item">
              <button
                type="button"
                class="btn btn-outline-warning"
                onclick="gotoLogin()"
              >
                Masuk
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir NavBar-->

    <!--Awal BUKU TAMU-->
    <div class="container mt-5">
      <div class="container" style="width: 450px">
        <div
          class="title-categori"
          style="background-color: white 0%; padding: 5px 10px"
        >
          <h5 class="text-center" style="margin-top: 5px">
            <hr />
            FORM BUKU TAMU
            <hr />
          </h5>
        </div>
      </div>

      <div class="container mt-2" style="width: 450px">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
          <div class="mt-5">
            <label for="exampleInputEmail1" class="form-label textForm"
              >Nama Lengkap</label
            >
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"
                ><i class="fas fa-user"></i
              ></span>
              <input
                type="text"
                class="form-control"
                id="field_name"
                placeholder="masuka nama lengkap anda..."
                name="nama_lengkap"
              />
            </div>
          </div>

          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label textForm"
              >Email</label
            >
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"
                ><i class="fas fa-envelope"></i
              ></span>
              <input
                type="text"
                class="form-control"
                id="field_email"
                placeholder="masukan email anda..."
                name="email"
              />
            </div>
          </div>

          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label textForm"
              >Nomor Hp</label
            >
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"
                ><i class="fas fa-phone"></i
              ></span>
              <input
                type="text"
                class="form-control"
                id="field_phone_number"
                placeholder="masukan nomor hp anda..."
                name="nomor_hp"
              />
            </div>
          </div>

          <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label textForm"
              >Alamat</label
            >
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping"
                ><i class="fas fa-address-book"></i
              ></span>
              <input
                type="text"
                class="form-control"
                id="field_address"
                placeholder="masukan alamat anda..."
                name="alamat"
              />
            </div>
          </div>

          <div class="form-group mt-3">
            <label for="exampleFormControlTextarea1">Pesan</label>
            <textarea
              class="form-control"
              id="field_message"
              rows="4"
              style="width: 425px"
              name="pesan"
            ></textarea>
          </div>
          <div class="mt-5 mb-3 d-grid">
            <button type="submit" class="btn btn-primary text-light textForm">
              Kirim
            </button>
          </div>
        </form>
        <div>

        <!--Awal PHP-->

        <?php
        
        if(isset($_POST['nama_lengkap'])){


          $nama = $_POST['nama_lengkap'];
          $email = $_POST['email'];
          $nomor_hp = $_POST['nomor_hp'];
          $alamat = $_POST['alamat'];
          $pesan = $_POST['pesan'];


          echo "
          <table>
          
          <tr>
          <td>Nama Lengkap</td>
          <td> : </td>
          <td>$nama</td>
          </tr>

          <tr>
          <td>Email</td>
          <td> : </td>
          <td>$email</td>
          </tr>
          
          <tr>
          <td>Nomor Hp</td>
          <td> : </td>
          <td>$nomor_hp</td>
          </tr>

          <tr>
          <td>Alamat</td>
          <td> : </td>
          <td>$alamat</td>
          </tr>

          <tr>
          <td>Pesan</td>
          <td> : </td>
          <td>$pesan</td>
          </tr>


          </table>
          ";

          

        }


        ?>

        <!--Akhir PHP-->
          
        </div>
      </div>
    </div>
    <!--Akhir BUKU TAMU-->


    <!--Awal foooter-->
    <footer class="bg-light p-5 mt-5">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img
                src="../Sources/assets/logo.png"
                style="width: 40px"
                alt=""
              />
            </a>
            <span class="ps-1"
              >Copyright @2022 | Created with
              <i class="fas fa-heart text-danger"></i> by
              <a
                href="https://twitter.com/qiiiiisixx"
                class="text-decoration-none text-dark fw-bold"
                >qiiiiisixx</a
              ></span
            >
          </div>

          <div class="col-md-6 text-md-end text-center pt-2 pb-2">
            <a
              href="https://web.facebook.com/rifqitriginandri?_rdc=1&_rdr"
              class="text-decoration-none"
            >
              <img
                class="ms-2"
                src="../Sources/assets/sosialMedia/facebook.png"
                style="width: 32px"
                alt=""
              />
            </a>
            <a
              href="https://www.instagram.com/rifqitriginandri/"
              class="text-decoration-none"
            >
              <img
                class="ms-2"
                src="../Sources/assets/sosialMedia/instagram.png"
                style="width: 32px"
                alt=""
              />
            </a>
            <a
              href="https://mobile.twitter.com/qiiiiisixx"
              class="text-decoration-none"
            >
              <img
                class="ms-2"
                src="../Sources/assets/sosialMedia/twitter.png"
                style="width: 32px"
                alt=""
              />
            </a>
            <a
              href="https://id.linkedin.com/in/rifqitriginandri"
              class="text-decoration-none"
            >
              <img
                class="ms-2"
                src="../Sources/assets/sosialMedia/linkedin.png"
                style="width: 32px"
                alt=""
              />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!--Akhir Footer-->

    <script>
      function gotoLogin() {
        window.location.href = "login.html";
      }
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
