<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Literasi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image"
                         style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h2 class="display-4 text-dark d-md-flex justify-content-md-center align-items-md-center mb-4"
                                style="font-weight: bold;">DAFTAR</h2>
                        </div>
                        <form class="user" method="post">
                            @csrf
                            <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                     id="exampleInputEmail" aria-describedby="emailHelp"
                                                     placeholder="Email" name="Nama Lengka"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                          type="text" id="exampleFirstName"
                                                                          placeholder="Nama Lengkap" name="first_name">
                                </div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                                             id="exampleFirstName" placeholder="Username"
                                                             name="last_name"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center;">
                                    <div class="dropdown" style="text-align: center;">
                                        <button class="btn btn-primary dropdown-toggle" aria-expanded="false"
                                                data-bs-toggle="dropdown" type="button"
                                                style="width: 100%;text-align: center;border-radius: 27px;border-width: 8px;">
                                            Kelas&nbsp;
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#"
                                                                      data-bs-target="Pemasaran">X</a><a
                                                class="dropdown-item" href="#" data-bs-target="Akutansi">XI</a><a
                                                class="dropdown-item" href="#" data-bs-target="TKJ">XII</a></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center;">
                                    <div class="dropdown" style="text-align: center;">
                                        <button class="btn btn-primary dropdown-toggle" aria-expanded="false"
                                                data-bs-toggle="dropdown" type="button"
                                                style="width: 100%;text-align: center;border-radius: 27px;border-width: 8px;">
                                            Jurusan
                                        </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Pemasaran</a><a
                                                class="dropdown-item" href="#">Akutansi</a><a class="dropdown-item"
                                                                                              href="#">Teknik Komputer
                                                &amp; Jaringan</a><a class="dropdown-item" href="#">Teknik Kendaraan
                                                Ringan Otomotif</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                          type="password" id="examplePasswordInput"
                                                                          placeholder="Kata Sandi" name="password">
                                </div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                                             id="exampleRepeatPasswordInput"
                                                             placeholder="Konfirmasi Kata Sandi" name="password_repeat">
                                </div>
                            </div>
                            <hr>
                            <a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button">Buat Akun
                                sebagai Siswa</a><a class="btn btn-primary d-block btn-facebook btn-user w-100"
                                                    role="button">Buat Akun Tamu</a>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.html">Lupa Kata Sandi?</a></div>
                        <div class="text-center"><a class="small" href="login.html">Saya sudah punya Akun? Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/Lightbox-Gallery.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>
