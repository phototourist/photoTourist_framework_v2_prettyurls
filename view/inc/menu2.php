<body >
<div id="alertbanner"></div>
    <!-- Header -->
    <header id="header">
        <h1><img class="logo" src="<?php echo VIEW_MEDIA ?>Logo.png" alt="70" width="70" />
        <a class="titulomain" href="<?php amigable('?module=main'); ?>">JoinElderly</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="<?php amigable('?module=main'); ?>">Home</a></li>
                <li><a href="<?php amigable('?module=ofertas'); ?>">Ofertas</a></li>
                <li><a href="<?php amigable('?module=contact'); ?>">Contacto</a></li>
                <li id="LogProf">
                    <a href="<?php echo PROJECT . "modules/user/view/modal.html"; ?>"
                    class="button special" data-toggle="modal" id="Login" data-target="#modalLog">Acceder</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="LoginModal"></div>
