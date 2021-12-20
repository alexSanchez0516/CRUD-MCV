<main class="wrap">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="build/img/xbanner.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="build/img/xbanner-services-3.webp" alt="Third slide">
            </div>
        </div>
    </div>


    <section class="service-box-wrap">

        <?php if (isset($message)) : ?>
            <div class="alert alert-success state col-auto text-center" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <h2 class="title-box-wrap text-center m-4">
            <?php echo $service->name ?>
        </h2>

        <p class="sumary-box-product-wrap">
            <?php echo $service->description ?>
        </p>

        <ul class="list-product-wrap">
            <h3 class="text-primary m-4 h5 ">¿QUÉ SOMOS CAPACES DE HACER?</h3>


            <?php foreach ($listServices as $service) : ?>

                <li class="m-2"><?php echo $service ?></li>

            <?php endforeach; ?>

        </ul>

    </section>

    <section class="contact-foot">
        <h3 class="title-contact-foot title-deluxe text-center m-4 text-light">Obtenga un presupuesto gratuito</h3>
        <form  method="post" class="w-100 form-contact-foot d-flex flex-column">
            <div class="content-contact-foot">
                <input type="text" name="contact[name]" id="name" placeholder="Nombre" required>
                <input type="email" name="contact[email]" id="email" placeholder="Correo electrónico" required>
                <input type="text" name="contact[company]" id="company" placeholder="Compañia" required>
                <input type="text" name="contact[url]" id="url" placeholder="URL del sitio web" required>
            </div>
            <textarea class="text-area-contact" name="contact[msg]" id="details" cols="40" rows="6" required placeholder="Proporcione cualquier otro detalle o pregunta que tenga sobre su sitio web"></textarea>
            <input type="text" name="contact[content]" id="content" required placeholder="¿Qué contenido principal necesitas en tu proyecto?">
	    <label class="pol" for="polict"><input class="p-2" type="checkbox" name="contact[polict]" id="polict" value="Si" required>Con anterioridad a la remisión de mis datos, he leído la advertencia y la Política de Privacidad incluida en esta página Web, y me muestro expresamente de acuerdo con sus términos.</label>

	    <input type="submit" class="w-25" name="Enviar" value="Enviar" />
        </form>
    </section>


</main>
