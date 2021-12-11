<?php

if (isset($_GET['state'])) {
    $state = filter_var($_GET['state'], FILTER_VALIDATE_INT) ?? null; //inset si no existe es valor null
}

?>

<main class="wrap">

    <?php if ($state === 1) : ?>
        <p class="text-success state text-center h4 m-2">
            Servicio creado correctamente
        </p>
    <?php elseif ($state=== 2) : ?>
        <p class="text-success state text-center h4 m-2">
            Servicio actualizado correctamente
        </p>
    <?php elseif ($state === 3) : ?>
        <p class="text-success state text-center h4 m-2">
            Servicio eliminado correctamente
        </p>
    <?php endif; ?>

    <h1 class="text-admin text-center text-primary m-4">Administrador de Servicios</h1>
    <a href="/admin/create" id="addService" class=" btn btn-outline-info">CREATE SERVICE</a>
    <table class="table  table-responsive table-hover table-dark  admin-table ">
        <thead>
            <tr>
                <!--CAMPOS -->
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">PRICE</th>
                <th scope="col">PHOTO</th>

                <th scope="col" class="text-center  text-danger" colspan="2">OPTIONS</th>


            </tr>
        </thead>

        <tbody>
            <?php foreach ($services as $service) : ?>
                <tr>
                    <th scope="row"><?php echo $service->id; ?></th> <!-- ID -->
                    <td><?php echo $service->name; ?></td>
                    <td><?php echo $service->description; ?></td>
                    <td><?php echo $service->price; ?>€</td>

                    <td> <img src="../../img/<?php echo $service->imageProduct; ?>" class="img-fluid" style="height:45px;"></td>

     
                    <td class="bg-danger btn-table"><a href="/admin/delete?id=<?php echo $service->id; ?>">DELETE</a></td>
                    <td class="bg-danger btn-table"><a href="/admin/update?id=<?php echo $service->id; ?>">UPDATE</a></td>

                </tr>
            <?php endforeach;  ?>

        </tbody>
    </table>

</main>
