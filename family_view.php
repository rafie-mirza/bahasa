<!DOCTYPE html>
<html>

<head>
    <title>Ayo Belajar Bahasa Isyarat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/zero.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

    <style>
        * {
             /*border: 1px solid black !important; */
        }
    </style>
</head>

<body id="body">

    <div id="overlay"></div>

    <div class="modal-frame modal-frame-delete">
        <div class="modal-box modal-box-delete" id="modal-top">
            <div class="modal-header">
                <h4>Hapus Kata</h4>
                <div class="modal-close" onclick="modalClose()"><i class="material-icons">close</i></div>
            </div>
            <div class="modal-body modal-body-delete">
                <div class="col-2 d-flex flex-center">
                    <img id="word-image-delete" src="assets/images/family_father.png" alt="image">
                </div>
                <div class="col-10">
                    <input type="hidden" id="word-id-delete">
                    <p>Hapus <span id="word-label-delete">One</span> - <span id="word-sunda-delete">Hiji</span> ?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn ripple-effect" onclick="deleteData()">hapus</button>
            </div>
        </div>
    </div>

    <div class="modal-frame modal-frame-add">
        <div class="modal-box modal-box-add" id="modal-top">
            <div class="modal-header">
                <h4>Tambah Kata</h4>
                <div class="modal-close" onclick="modalClose()"><i class="material-icons">close</i></div>
            </div>
            <div class="modal-body">
                <form id="form-add" method="get">
                    <div class="form-input">
                        <input type="file" accept=".gif,.jpg,.jpeg,.png" name="image-add" id="image-add">
                        <label id="image-label-add">Tambah Gambar</label>
                    </div>
                    <div class="form-input">
                        <input type="text" required="" name="word-label-add" id="word-label-add">
                        <label>Kata Dalam Bahasa Inggris</label>
                    </div>
                    <div class="form-input">
                        <input type="text" required="" name="word-sunda-add" id="word-sunda-add">
                        <label>Kata Dalam Bahasa Indonesia</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn ripple-effect" id="button-submit-add">simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal-frame modal-frame-edit">
        <div class="modal-box modal-box-edit" id="modal-top">
            <div class="modal-header">
                <h4>Edit Word</h4>
                <div class="modal-close" onclick="modalClose()"><i class="material-icons">close</i></div>
            </div>
            <div class="modal-body">
                <form id="form-edit" method="get">
                    <input type="hidden" id="word-id-edit">
                    <div class="form-input">
                        <input type="file" id="image-edit" name="image-edit">
                        <label id="image-label-edit">Gambar</label>
                        <input type="hidden" id="current-image-edit" name="current-image-edit">
                    </div>
                    <div class="form-input">
                        <input type="text" required="" id="word-label-edit" name="word-label-edit">
                        <label>Kata Dalam Bahasa Inggris</label>
                    </div>
                    <div class="form-input">
                        <input type="text" required="" id="word-sunda-edit" name="word-sunda-edit">
                        <label>Kata Dalam Bahasa Indonesia</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn ripple-effect" id="button-submit-edit">Edit</button>
                </form>
            </div>
        </div>
    </div>


    <div class="dashboard">
        <div class="sidebar" id="sidebar-mobile">
            <nav>
                <ul>
                    <li class="li-logo">
                        <a href="javascript:void(0)">
                            <i class="material-icons f-left" onclick="toggleMenuOpen()" id="menu">menu</i>
                            <!-- <img src="assets/images/logo.png"> -->
                            <p>Ayo Belajar Bahasa Isyarat</p>
                        </a>
                    </li>
                    <li class="menu-number">
                        <a href="index.php">
                            <div class="menu-icon-frame">
                                <img src="assets/images/logo/angka.png" style="width:40px;height:40px;">
                            </div>
                            <p class="f-left">Angka</p>
                        </a>
                    </li>
                    <li class="menu-family active" style="background-color: #379237;">
                        <a href="family_view.php">
                            <div class="menu-icon-frame">
                                <img src="assets/images/logo/abjad.png" style="width:40px;height:40px;">
                            </div>
                            <p class="f-left">Abjad</p>
                        </a>
                    </li>
                    <li class="menu-color">
                        <a href="emosi_view.php">
                            <div class="menu-icon-frame">
                                <img src="assets/images/logo/emosi.png" style="width:40px;height:40px;">
                            </div>
                            <p class="f-left">Emosi</p>
                        </a>
                    </li>
                    <li class="menu-phrase">
                        <a href="phrases_view.php">
                            <div class="menu-icon-frame">
                                <img src="assets/images/logo/orang.png" style="width:40px;height:40px;">
                            </div>
                            <p class="f-left">Orang</p>
                        </a>
                    </li>
                    <li class="menu-people">
                        <a href="people_view.php">
                            <div class="menu-icon-frame">
                                <img src="assets/images/logo/tempat.png" style="width:40px;height:40px;">
                            </div>
                            <p class="f-left">Tempat</p>
                        </a>
                    </li>
                    <li class="menu-keluarga">
                        <a href="keluarga_view.php">
                            <div class="menu-icon-frame">
                                <img src="assets/images/logo/keluarga.png" style="width:40px;height:40px;">
                            </div>
                            <p class="f-left">Keluarga</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="mainbar" id="mainbar">
            <header class="d-flex clearfix">
                <i class="material-icons f-left menu-phone" onclick="toggleMenuOpen()" id="menu">menu</i>
                <h5 class="f-left">Halaman Abjad</h5>
            </header>
            <!-- <button class="action-add ripple-effect" onclick="modalAdd()" style="background-color: #379237;"><i class="material-icons">add</i></button> -->
            <div class="content" id="content">

            </div>

            <footer>
                <center>© Website Ayo Belajar Bahasa Isyarat 2023</center>
            </footer>

        </div>
    </div>


    <script src="js/zero_css_script.js"></script>
    <script src="js/family_script.js"></script>

</body>

</html>