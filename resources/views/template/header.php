<nav class="navbar navbar-expand-lg" id="navBar">
    <div class="container">
        <div style="display:inline">

        </div>
        <div class="logo" id="logoTucson">
            <img src="./img/logoBlue.png" alt="" style="width: 20%;">
            <a class="navbar-brand" href="menuPrincipal">ERP TUCSON</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION["user"])) { ?>
                    <li class="nav-item"> <img src="./img/usuario2.jpg" width="45px" style="margin-top:10px"></li>
                    <li class="nav-link">

                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value='0'><?= $_SESSION["user"]["nombre"] ?></option>
                            <option value='1'>Mi Profile</option>
                            <option value='2'>Logout</option>
                        </select>




                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./menu_principal">MENU</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="./login"><i class="fa-solid fa-power-off"></i></a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>