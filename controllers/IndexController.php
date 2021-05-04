<?php

class IndexController extends Products{

    public function Index(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }
}
