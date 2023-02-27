<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Forgotten Password - Literasi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-password-image"
                                 style="background-image: url('https://source.unsplash.com/random/?learning');"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-2"><strong>KODE PENGUNJUNG</strong></h4>
                                    <div class="visible-print text-center">
                                        {!!QrCode::size(200)->generate($absensi->code);!!}
                                        {{--                                        <p>Scan me to return to the original page.</p>--}}
                                    </div>
                                    {{--                                    <img src="assets/img/avatars/qr-code.png" style="width: 80%;">--}}
                                    <p class="mb-4">Untuk melakukan absensi pengunjung wajib melakukan scan QR code
                                        diatas atau dengan kode unik dibawah ini</p>
                                </div>
                                <form class="user">
                                    <div class="mb-3"><input class="form-control form-control-lg form-control-user"
                                                             type="text" id="qrCode" name="qrCode" readonly=""
                                                             style="text-align: center;" placeholder="{{$absensi->code}}">
                                    </div>
                                </form>
                                <div class="text-center"><a class="small" href="{{url('/')}}">Kembali ke Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>

