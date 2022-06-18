<html>

<head>
    <title>Multi Step Registration</title>
    <style>
        html {
            position: relative;
        }

        #signup-step li {
            /* list-style: none;
            float: left;
            padding: 5px 10px;
            border-top: #004C9C 1px solid;
            border-left: #004C9C 1px solid;
            border-right: #004C9C 1px solid;
            border-radius: 5px 5px 0 0; */
            float: left;
            display: block;
            background-color: inherit;
            color: black;
            padding: 2px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
        }

        .active {
            color: #FFF;
        }

        #signup-step li.active {
            /* background-color: #004C9C; */
            font-weight: bold;
        }

        #signup-form {
            clear: both;
            float: left;
            /* display: none; */
            /* border: 1px #004C9C solid; */
            /* padding: 20px; */
            /* width: 100%; */
            /* margin: auto; */
            /* float: left; */
            /* padding: 22px 12px; */
            padding-top: 22px;
            /* border: 1px solid #ccc; */
            /* width: 70%; */
            border-left: none;
            /* height: 300px; */
            /* margin-left: 30%; */
            /* margin-top: 10%; */
            margin-bottom: 10%;
        }

        .demoInputBox {
            padding: 10px;
            border: #CDCDCD 1px solid;
            border-radius: 4px;
            background-color: #FFF;
            width: 50%;
        }

        .signup-error {
            color: #FF0000;
            padding-left: 15px;
        }

        .message {
            color: #00FF00;
            font-weight: bold;
            width: 100%;
            padding: 10;
        }

        .btnAction {
            /* padding: 5px 10px;
            background-color: #F00;
            border: 0;
            color: #FFF;
            */
            cursor: pointer;
            /* margin-top: 15px; */
            margin-top: 10px;
            margin-left: 10px;
            width: 95%;
            /* width: 667.75px;*/
            height: 38.39px;
            /* left: 673.5px; */
            /* top: 1372.38px; */
            background: #A6CBF5;
            border: none;
        }

        label {
            line-height: 35px;
        }

        .rounded-box {
            width: 150px;
            height: 150px;
            display: block;
            margin: 0 auto;
        }

        .outer {
            width: 100% !important;
            height: 100% !important;
            max-width: 150px !important;

            max-height: 150px !important;

            margin: auto;
            background-color: #6eafd4;
            border-radius: 100%;
            position: relative;
        }

        .inner {
            background-color: white;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .inner:hover {
            background-color: grey;
        }

        .inputfile {
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: 1;
            width: 50px;
            height: 50px;
        }

        .inputfile+label {
            font-size: 1.25rem;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: inline-block;
            overflow: hidden;
            width: 50px;
            height: 50px;
            pointer-events: none;
            cursor: pointer;
            line-height: 50px;
            text-align: center;
        }

        .inputfile+label svg {
            fill: black;
        }

        #myProgress {
            width: 100%;
            background-color: #ddd;
        }

        #myBar {
            width: 1%;
            height: 30px;
            background-color: #04AA6D;
        }

        @media screen and (min-width:768px) {
            .card {
                width: 600px;
            }
        }

        @media screen and (max-width:720px) {
            .card {
                width: 540px;
            }
        }

        @media screen and (max-width:600px) {
            .card {
                width: 400px;
            }
        }

        #body {
            padding: 30px;
        }
    </style>

    <!--<script src="http://code.jquery.com/jquery-1.10.2.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function validate() {
            var output = true;
            $(".signup-error").html('');

            if ($("#profil-field").css('display') != 'none') {
                if (!($("#username").val())) {
                    output = false;
                    $("#username-error").html("username required!");
                }

                if (!($("#nama_depan").val())) {
                    output = false;
                    $("#nama_depan-error").html("Nama Depan required!");
                }
                if (!($("#nama_belakang").val())) {
                    output = false;
                    $("#nama_belakang-error").html("Nama belakang required!");
                }
                if (!($("#nomor_handphone").val())) {
                    output = false;
                    $("#nomor_handphone-error").html("nomor handphone required!");
                }
                if (!($("#tanggal_lahir").val())) {
                    output = false;
                    $("#tanggal_lahir-error").html("tanggal lahir required!");
                }
            }
            if ($("#freelancer-field").css('display') != 'none') {
                if (!($("#tentang_anda").val())) {
                    output = false;
                    $("#tentang_anda-error").html("Tentang Anda required!");
                }
                if (!($("#portofolio").val())) {
                    output = false;
                    $("#portofolio-error").html("Portofolio Anda required!");
                }
            }

            if ($("#ktp-field").css('display') != 'none') {
                if (!($("#nomor_ktp").val())) {
                    output = false;
                    $("#nomor_ktp-error").html("nomor ktp Anda required!");
                }
                if (!($("#nama_depan_ktp").val())) {
                    output = false;
                    $("#nama_depan_ktp-error").html("Nama Depan di KTP required!");
                }
                if (!($("#nama_belakang_ktp").val())) {
                    output = false;
                    $("#nama_belakang_ktp-error").html("Nama Belakang di KTP required!");
                }
                if (!($("#jenis_kelamin").val())) {
                    output = false;
                    $("#jenis_kelamin-error").html("Jenis Kelamin required!");
                }
                if (!($("#alamat").val())) {
                    output = false;
                    $("#alamat-error").html("Alamat required!");
                }
                if (!($("#kode_pos").val())) {
                    output = false;
                    $("#kode_pos-error").html("Kode Pos required!");
                }
                // if (!($("#foto_ktp").val())) {
                //     output = false;
                //     $("#file_foto_ktp-error").html("foto_ktp Anda required!");
                // }
                // if (!($("#selfie_ktp").val())) {
                //     output = false;
                //     $("#file_selfie_ktp-error").html("selfie_ktp Anda required!");
                // }
            }

            return output;
        }

        $(document).ready(function() {
            $("#next").click(function() {
                var output = validate();
                if (output === true) {
                    var current = $(".active");
                    var next = $(".active").next("li");
                    if (next.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + next.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        next.addClass("active");
                        if ($(".active").attr("id") == $("li").last().attr("id")) {
                            $("#next").hide();
                            $("#finish").show();
                        }
                    }
                }
            });


            $("#back").click(function() {
                var current = $(".active");
                var prev = $(".active").prev("li");
                if (prev.length > 0) {
                    $("#" + current.attr("id") + "-field").hide();
                    $("#" + prev.attr("id") + "-field").show();
                    $("#next").show();
                    $("#finish").hide();
                    $(".active").removeClass("active");
                    prev.addClass("active");
                    if ($(".active").attr("id") == $("li").first().attr("id")) {
                        $("#back").hide();
                    }
                }
            });

            $("input#finish").click(function(e) {
                var output = validate();
                var current = $(".active");

                if (output === true) {
                    return true;
                } else {
                    //prevent refresh
                    e.preventDefault();
                    $("#" + current.attr("id") + "-field").show();
                    $("#back").show();
                    $("#finish").show();
                }
            });
        });
    </script>

</head>

<body>
    <div class="container px-4">
        <div class="row">
            <div class="col-lg-4 col-sm-12">

                <ul id="signup-step">
                    <li id="profil" class="active">Profil</li>
                    <li id="freelancer">Profil Daftar Freelancer</li>
                    <li id="ktp">KTP</li>
                </ul>

                <?php
                if (isset($success)) {
                    echo '<div>User record inserted successfully</div>';
                } ?>
            </div>
            <?php
            $attributes = array('name' => 'frmRegistration', 'id' => 'signup-form');
            echo form_open_multipart($this->uri->uri_string(), $attributes);
            ?>

            <div class="col-lg-12 col-sm-12">
                <div id="profil-field">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div style="color:black">
                                    <h4 style="display:inline-block;text-align:left"> Profil Anda</h4>
                                </div>
                            </div>
                            <div class="col-md-0">
                                <a href="#" class="thumbnail">
                                    <center>
                                        <div class="rounded-box">
                                            <div class="outer">
                                                <img src="<?php echo base_url("assets/img/") . $user['image'] ?>" alt="" class="outer" id="image">

                                                <div class="inner">
                                                    <input class="inputfile" type="file" name="image" accept="image/*" id="file">
                                                    <label id="custom-file-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>
                                                        </svg></label>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </a>
                            </div>
                            <div class="form-group">
                                <label style="color:black">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?php echo $user['username'] ?>">
                                <span id="username-error" class="signup-error"></span>
                            </div>
                            <div class="form-group">
                                <label style="color:black">Nama Depan</label>
                                <input type="text" id="nama_depan" name="nama_depan" class="form-control" value="<?php echo $user['nama_depan'] ?>">
                                <span id="nama_depan-error" class="signup-error"></span>
                            </div>
                            <div class="form-group">
                                <label style="color:black">Nama Belakang</label>
                                <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" value="<?php echo $user['nama_belakang'] ?>">
                                <span id="nama_belakang-error" class="signup-error"></span>
                            </div>
                            <div class="form-group">
                                <label style="color:black">Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>" readonly>

                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label style="color:black">Nomor handphone</label>
                                        <input type="text" id="nomor_handphone" name="nomor_handphone" class="form-control" value="<?php echo $user['nomor_handphone'] ?>">
                                        <span id="nomor_handphone-error" class="signup-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label style="color:black">Tanggal lahir</label>
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?php echo $user['tanggal_lahir'] ?>">
                                    <span id="tanggal_lahir-error" class="signup-error"></span>
                                </div>
                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div id="freelancer-field" style=" display:none;">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div style="color:black">
                                    <h4 style="text-align:left"> Profil sebagai Freelancer</h4>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color:black">Tentang Anda </label> <i class="fas fa-exclamation"></i>
                                <input type="text" id="tentang_anda" name="tentang_anda" rows="5" value="<?php echo $user['tentang_anda'] ?>" placeholder=" Silahkan tuliskan skill dan pekerjaan apa yang akan anda lakukan di Fastwork. Dilarang mencantumkan informasi kontak personal seperti nomor ponsel, LINE ID, email atau web pribadi" class="form-control"></input>
                                <span id="tentang_anda-error" class="signup-error"></span>
                            </div>

                            <div class="form-group">
                                <label>Upload Portofolio</label>
                                <br>
                                <input type="file" name="portofolio" id="portofolio"></input>
                                <span id="portofolio-error" class="signup-error"></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="ktp-field" style="display:none;">
                    <div class=" card" id="body">
                        <div class="row">
                            <div style="color:black">
                                <h6 style="text-align:left"><i class="fas fa-lock"></i>KTP</h6>
                                <small id="emailHelp" class="form-text text-muted">KTP diperlukan untuk melindungi pengguna jika terjadi sengketa. Data pribadi pengguna akan selalu
                                    dirahasiakan.
                                </small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Nomor KTP</label>
                            <input id="nomor_ktp" type="text" name="nomor_ktp" class="form-control" value="<?php echo $user['nomor_ktp'] ?>">
                            <span id="nomor_ktp-error" class="signup-error"></span>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Nama depan di KTP</label>
                            <input id="nama_depan_ktp" type="text" name="nama_depan_ktp" class="form-control" value="<?php echo $user['nama_depan_ktp'] ?>">
                            <span id="nama_depan_ktp-error" class="signup-error"></span>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Nama belakang di KTP</label>
                            <input id="nama_belakang_ktp" type="text" name="nama_belakang_ktp" class="form-control" value="<?php echo $user['nama_belakang_ktp'] ?>">
                            <span id="nama_belakang_ktp-error" class="signup-error"></span>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Jenis kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option selected>Memilih</option>
                                <option value="Laki - Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <span id="jenis_kelamin-error" class="signup-error"></span>
                        </div>
                        <div class="row">
                            <div style="color:black">
                                <p style="text-align:left"><i class="fas fa-lock"></i> Foto KTP</p>
                                <small id="emailHelp" class="form-text text-muted">Unggah foto KTP dengan jelas</small>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div style="color:black">

                                        <div class="col-md-12">
                                            <h5 class="media-heading">Pratinjau sudah benar.</h5>
                                            <p> Gambar kartu harus jelas.khususnya nomor kartu</p>

                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <center>

                                                    <img class="media-object" src="<?php echo base_url('assets/img/foto_ktp/ktp1.png') ?>"><br>
                                                    <a href="#" class="link-dark ">Preview</a>
                                                </center>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <center>

                                                    <img class="media-object" src="<?php echo base_url('assets/img/selfie_ktp/ktp2.png') ?>"><br>
                                                    <a href="#" class="link-dark">Preview</a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div style="color:black">
                                    <p style="text-align:left">Upload foto KTP untuk verifikasi. Tidak bisa menggunakan SIM atau Paspor.</p>
                                    <small id="emailHelp" class="form-text text-muted">Dapat mengunggah sebagai .pdf .png .jpg ukuran file tidak lebih dari 10MB</small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-sm-12">

                                    <a href="#" class="thumbnail">
                                        <center>
                                            <div class="rounded-box">
                                                <div class="outer">
                                                    <img src="<?php echo base_url("assets/img/foto_ktp") . $user['foto_ktp'] ?>" alt="" class="outer" id="image">

                                                    <div class="inner">
                                                        <input class="inputfile" type="file" name="foto_ktp" accept="image/*" id="file">
                                                        <label id="custom-file-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>
                                                            </svg></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </a>
                                </div>

                                <div class="col-lg-6 col-sm-12">
                                    <a href="#" class="thumbnail">
                                        <center>
                                            <div class="rounded-box">
                                                <div class="outer">
                                                    <img src="<?php echo base_url("assets/img/selfie_ktp/") . $user['selfie_ktp'] ?>" alt="" class="outer" id="image">
                                                    <div class="inner">
                                                        <input class="inputfile" type="file" name="selfie_ktp" accept="image/*" id="file">
                                                        <label id="custom-file-label"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>
                                                            </svg></label>
                                                    </div>

                                                </div>
                                            </div>
                                            <a>Upload Foto Selfie dengan KTP Anda</a>
                                        </center>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control" value="<?php echo $user['alamat'] ?>">
                            <span id="alamat-error" class="signup-error"></span>
                        </div>

                        <div class="form-group">
                            <label>Kode pos</label>
                            <input type="text" name="kode_pos" id="kode_pos" placeholder="kode pos" class="form-control" value="<?php echo $user['kode_pos'] ?>">
                            <span id="kode_pos-error" class="signup-error"></span>
                        </div>
                    </div>
                </div>

                <div>
                    <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
                    <input class="btnAction" type="button" name="next" id="next" value="Next">
                    <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <script>
        const imgDiv = document.querySelector('.rounded-box');
        const img = document.querySelector('#image');
        const file = document.querySelector('#file');
        const uploadBtn = document.querySelector('#custom-file-label');

        file.addEventListener('change', function() {
            //this refers to file
            const choosedFile = this.files[0];
            if (choosedFile) {
                const reader = new FileReader(); // FileReader is a predefined function of JS

                reader.addEventListener('load', function() {
                    img.setAttribute('src', reader.result);

                });
                reader.readAsDataURL(choosedFile);

            }
        });
    </script>
    <!-- <script>
        const imgDiv = document.querySelector('.rounded-box');
        const img = document.querySelector('#foto_ktp');
        const file = document.querySelector('#file_foto_ktp');
        const uploadBtn = document.querySelector('#custom-file-label');

        file.addEventListener('change', function() {
            //this refers to file
            const choosedFile = this.files[0];
            if (choosedFile) {
                const reader = new FileReader(); // FileReader is a predefined function of JS

                reader.addEventListener('load', function() {
                    img.setAttribute('src', reader.result);

                });
                reader.readAsDataURL(choosedFile);

            }
        });
    </script>
    <script>
        const imgDiv = document.querySelector('.rounded-box');
        const img = document.querySelector('#selfie_ktp');
        const file = document.querySelector('#file_selfie_ktp');
        const uploadBtn = document.querySelector('#custom-file-label');

        file.addEventListener('change', function() {
            //this refers to file
            const choosedFile = this.files[0];
            if (choosedFile) {
                const reader = new FileReader(); // FileReader is a predefined function of JS

                reader.addEventListener('load', function() {
                    img.setAttribute('src', reader.result);

                });
                reader.readAsDataURL(choosedFile);

            }
        });
    </script> -->
</body>

</html>
