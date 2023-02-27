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
                                 style="background-image: url(&quot;assets/img/dogs/image1.jpeg&quot;);">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-2"><strong>Scan E-Absensi</strong></h4><img src=""
                                                                                                        style="width: 80%;">
                                    <div id="reader" width="600px"></div>
                                    <p class="mb-4">Untuk melakukan absensi pengunjung wajib melakukan scan QR code
                                        diatas atau dengan kode unik dibawah ini</p>
                                </div>
                                <form class="user" method="post" action="{{ route('scanQR') }}">
                                    @csrf
                                    <input class="form-control form-control-lg form-control-user" type="text" id="result" aria-describedby="emailHelp" name="result" style="text-align: center;"/>
                                    <button type="submit" class="form-control btn btn-primary btn-user btn-block mt-3">
                                        Masuk
                                    </button>
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
<script src="https://unpkg.com/html5-qrcode" type="text/javascript">

</script>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        // console.log(`Code matched = ${decodedText}`, decodedResult);
        // alert(decodedText);

        $('#result').val(decodedText);
        let id = decodedText;
        html5QrcodeScanner.clear().then(_ => {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({

                url: "{{ route('scanQR') }}",
                type: 'POST',
                data: {
                    _methode: "POST",
                    _token: CSRF_TOKEN,
                    qr_code: id
                },
                success: function (response) {
                    console.log(response);
                    if (response.status === 200) {
                        alert('berhasil');
                    } else {
                        alert('gagal');
                    }
                }
            });
        }).catch(error => {
            alert('something wrong');
        });
    }

    function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        // console.warn(`Code scan error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader",
        {fps: 10, qrbox: {width: 250, height: 250}},
        /* verbose= */ false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>


</body>

</html>
