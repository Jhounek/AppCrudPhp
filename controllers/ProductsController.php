<?php

class ProductsController extends Products{

    public function Store(){
        parent::Create($_POST);
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function Edit(){
        require_once 'views/layouts/header.php';
        require_once 'views/Products/EditProduct.php';
        require_once 'views/layouts/footer.php';
    }

    public function Delete(){
        parent::Drop($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function Save(){
       parent::Update($_POST);
       require_once 'views/layouts/header.php';
       require_once 'views/index/index.php';
       require_once 'views/layouts/footer.php';
    }
}