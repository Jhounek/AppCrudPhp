<?php foreach(parent::ListById($_GET['id']) as $prod):  ?>
<div class="container p-4 d-flex justify-content-center">
        <div class="row">
            <div class="col-md-auto">
                <div class="card card-body">
                    <form action="?controller=Products&method=Save" method="POST">

                        <div class="form-group mb-4 d-flex justify-content-center">
                            <h3>CREATE PRODUCT</h3>
                        </div>

                        <div class="form-group mb-3">
                            <input type="hidden"  name="Id" class="form-control" placeholder="Product Id" value="<?=$prod->Id?>">
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="Nombre" class="form-control" placeholder="Product Name" value="<?=$prod->Nombre?>" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="Referencia" class="form-control" placeholder="Product Reference" value="<?=$prod->Referencia?>" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="number" name="Precio" class="form-control" placeholder="Product Price" value="<?=$prod->Precio?>" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="number" name="Peso" class="form-control" placeholder="Product weight" value="<?=$prod->Peso?>" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="Categoria" class="form-control" placeholder="Product Category" value="<?=$prod->Categoria?>" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="number" name="Stock" class="form-control" placeholder="Product Stock" value="<?=$prod->Stock?>" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="hidden" disabled name="FechaCreacion" class="form-control" placeholder="Product Created at" value="<?=$prod->FechaCreacion?>">
                        </div>

                        <div class="form-group mb-3">
                            <input type="datetime" name="FechaVenta" class="form-control" placeholder="Product Last Sold" value="<?=$prod->FechaVenta?>" autofocus>
                        </div>

                        <input type="submit" name="save_task" class="btn btn-success w-100" value="Update Product" >

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>