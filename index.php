<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Pendaftaran</title>
</head>
<style>
.nav-link:hover::after {
    content: "";
    display: block;
    border-bottom: solid #3de423;
    width: 50%;
    margin: auto;
}



.container-md {
    width: 60%;
    padding: 2em 4em 4em 4em;
    margin-top: 4em;
    margin-bottom: 4em;
    background: #fff;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

form .form-group {
    margin-top: 2em;
}

#daftar {
    width: 100%;
}

div form div label a {
    text-align: center;
}

i {
    color: gray;
}

@media only screen and (max-width: 800px) {
    .container-md {
        width: 100%;
        padding: 2em;
    }

}
</style>

<body class="bg-danger">
    <div id="home">
        <div class="col-md-1 text-end">
            <a href="index.html" class="text-dark"><button type="button" style="width: 150px; height: 30px;"
                    class="btn btn-light text-dark">
                </button> </a> </div>
        <div class="container-md">
            <div class="form">
                <div>
                    <h2 class="text-center"> PENDAFTARAN</h2>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin:</label>
                    <select class="form-select" aria-label="Default select example" id="jk">
                        <option selected>Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Pekerjaan/Sekolah:</label>
                    <input type="text" class="form-control" id="pekerjaan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Tempat tanggal lahir:</label>
                    <input type="text" class="form-control" id="ttl">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">No. HP:</label>
                    <input type="text" class="form-control" id="telp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Nama Ayah:</label>
                    <input type="text" class="form-control" id="ayah">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Nama Ibu:</label>
                    <input type="text" class="form-control" id="ibu">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Alamat Rumah:</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pilih Kelas:</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Pra Tahsin 1" class="form-check-input kelas" name="optradio">Pra
                            Tahsin 1
                            <br>
                            <i>(syarat : Masih Iqro atau belum bisa membaca sama sekali)</i>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Pra Tahsin 2" class="form-check-input kelas" name="kelas">Pra
                            Tahsin 2 <br>
                            <i>(Syarat: Sudah bisa atau masih terbata-bata dalam membaca Al Qur'an)</i>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Tahsin Tilawah" class="form-check-input kelas"
                                name="kelas">Tahsin Tilawah
                            1<br>
                            <i>(Syarat: Sudah bisa membaca Al Qur'an akan tetapi belum sesuai dengan hukum
                                tajwid)</i>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Tahsin Tilawah 2" class="form-check-input kelas"
                                name="kelas">Tahsin Tilawah 2
                            <br>
                            <i>(Syarat: Sudah bisa membaca Al Qur'an sesuai dengan hukum tajwid)</i>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Tahsin Khusus" class="form-check-input kelas" name="kelas">Tahsin
                            Khusus
                            Langsia <br>
                            <i>(Syarat: Sudah bisa membaca Al Qur'an dan atau usia lebih dari 50 tahun)</i>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Tahsin Remaja/Anak" class="form-check-input kelas"
                                name="kelas">Tahsin Remaja/Anak
                            <br>
                            <i>(Syarat: Sudah bisa membaca Al Qur'an kan tetapi belum sesuai dengan hukum
                                tajwid)</i>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" value="Tahfidz Qur'an" class="form-check-input kelas"
                                name="kelas">Tahfidz Qur'an <br>
                            <i>(Syarat: Sudah bisa membaca Al Qur'an kan secara tartil dan sesui hukum
                                tajwid serta
                                berkotmitmen untuk menghafalkan Al Qur'an secara mutqin)</i>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                <br><br>
                <button class="btn btn-register btn-block btn-danger">Daftar</button>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js">
        </script>

        <script>
        $(document).ready(function() {

            $(".btn-register").click(function() {
                var nama_lengkap = $("#nama_lengkap").val();
                var jk = $("#jk").val();
                var pekerjaan = $("#pekerjaan").val();
                var ttl = $("#ttl").val();
                var ayah = $("#ayah").val();
                var ibu = $("#ibu").val();
                var alamat = $("#alamat").val();
                var gambar = $("#gambar").val();


                if (nama_lengkap.length == "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Nama Lengkap Wajib Diisi !'
                    });

                } else if (jk.length == "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Jenis Kelamin Wajib Diisi !'
                    });

                } else if (pekerjaan.length == "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Pekerjaan Wajib Diisi !'
                    });

                } else if (ttl.length == "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Tanggal lahir Wajib Diisi !'
                    });

                } else if (alamat.length = "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Alamat Wajib Diisi !'
                    });

                } else if (gambar.length = "") {

                    Swal.fire({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Gambar Wajib Diisi !'
                    });

                } else {
                    $.ajax({

                        url: "simpan.php",
                        type: "POST",
                        data: {
                            "nama_lengkap": nama_lengkap,
                            "jk": jk,
                            "pekerjaan": pekerjaan,
                            "ttl": ttl,
                            "ayah": ayah,
                            "ibu": ibu,
                            "alamat": alamat,
                            "gambar": gambar
                        },

                        success: function(response) {

                            if (response == "success") {

                                Swal.fire({
                                    type: 'success',
                                    title: 'Pendaftaran Berhasil!'
                                });

                                $("#nama_lengkap").val('');
                                $("$jk").val('');
                                $("#pekerjaan").val('');
                                $("#ttl").val('');
                                $("#ayah").val('');
                                $("#ibu").val('');
                                $("#alamat").val('');
                                $("#gambar").val('');

                            } else {

                                Swal.fire({
                                    type: 'error',
                                    title: 'Pendaftaran Gagal!',
                                    text: 'silahkan coba lagi!'
                                });

                            }

                            console.log(response);

                        },

                        error: function(response) {
                            Swal.fire({
                                type: 'error',
                                title: 'Opps!',
                                text: 'server error!'
                            });
                        }

                    })

                }

            });
        });
        </script>
</body>


</html>