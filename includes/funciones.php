<?php 

define('TEMPLATES_URL', __DIR__ .  '/templates');
define('FUNCIONES_URL', '/includes/funciones.php');
define('FOLDER_IMG', $_SERVER['DOCUMENT_ROOT'] . '/img/');


function includeTemplate( $name ) {
    include TEMPLATES_URL . "/${name}.php";
}

function isAuth() : void {
    session_start();

    //login es true
    if (!$_SESSION['login']) {
        header('Location: /');
    }

}


function debug($item) {
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
    exit;

}

function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function validateOrRedirect(String $url) {
    $id = null;

    if ($_GET['updateID']) {
        $id = filter_var($_GET['updateID'], FILTER_VALIDATE_INT);
    }
    if (isset($_GET["deleteID"])) {
        $id = filter_var(intval($_GET['deleteID']), FILTER_VALIDATE_INT);
    }

    if (!$id) {
        header("Location: ${url}");
    }

    return $id;
}