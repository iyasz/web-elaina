<?php 

$page = isset($_GET['page']) ? $_GET['page'] : '';

if($page == 'home'){
    include "views/page/home.php";
}elseif($page == 'gallery'){
    include "views/page/gallery.php";
}elseif($page == 'profil'){
    include "views/page/profil.php";
}elseif($page == 'fanspage'){
    include "views/page/fanspage.php";
}

?>