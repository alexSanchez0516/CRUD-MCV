<main class="wrap">
    <button onclick="window.location.href='/admin' " type="button" class="btn btn-outline-info text-dark w-25 m-4" id="btn-return-create">Return</button>
    <h1 class="text-admin text-primary text-center m-4">Crear Servicio</h1>

    <?php foreach ($errors as $e) : ?>
        <div class="errors">
            <?php echo $e ?>
        </div>
    <?php endforeach; ?>
   
    <form  method="POST" id="form-admin" class="d-flex flex-column" enctype="multipart/form-data">
        <!-- PARA SUBIR IMAGES -->
        <?php include __DIR__ . '/../form.php';  ?>
        <input type="submit" value="Crete" id="send" class=" w-25 mt-2">

    </form>

</main>