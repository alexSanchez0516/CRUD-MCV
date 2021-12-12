<main class="login-wrap">

    <section class="left d-flex flex-column w-100 m-5">
        <?php foreach ($errors as $e) : ?>
            <div class="errors mb-2">
                <?php echo $e ?>
            </div>
        <?php endforeach; ?>
        <form action="/login" method="POST" id="form-login">
            <legend class="text-center text-info" id="legend-login">Control de Acceso</legend>
            <input type="text" name="username" id="user" placeholder="Usuario" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <input type="submit" class="btn btn-primary" value="Ingresar">
        </form>
    </section>
</main>