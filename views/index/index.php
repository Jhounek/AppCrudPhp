<div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="?controller=Products&method=Store" method="POST">

                        <div class="form-group mb-4 d-flex justify-content-center">
                            <h3>CREATE PRODUCT</h3>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="Nombre" class="form-control" placeholder="Product Name" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="Referencia" class="form-control" placeholder="Product Reference" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="number" name="Precio" class="form-control" placeholder="Product Price" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="number" name="Peso" class="form-control" placeholder="Product weight" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" name="Categoria" class="form-control" placeholder="Product Category" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="number" name="Stock" class="form-control" placeholder="Product Stock" autofocus>
                        </div>

                        <div class="form-group mb-3">
                            <input type="date" name="FechaVenta" class="form-control" placeholder="Product Last Sold" autofocus>
                        </div>

                        <input type="submit" name="save_task" class="btn btn-success w-100" value="Save Product" >

                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(parent::List() as $prod):  ?>
                        <tr>
                            <td><?=$prod->Nombre?></td>
                            <td><?=$prod->Precio?></td>
                            <td><?=$prod->Stock?></td>
                            <td><a href="?controller=Products&method=Edit&id=<?=$prod->Id?>">Edit</a></td>
                            <td><a href="?controller=Products&method=Delete&id=<?=$prod->Id?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>