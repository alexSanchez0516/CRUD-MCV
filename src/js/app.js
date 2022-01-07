
document.addEventListener('DOMContentLoaded', function () {
    listEvent();
    darkMode();
    formCreateAdmin()
    showDetail();
    messagesFlash();
    validatePolicy();
    navFixed();
    destroyCookies();

});

function destroyCookies() {
    const accept_cookies = document.querySelector('#btn-aceptar-cookies');
    const cookies = document.querySelector('.cookies');

    dataLayer = [];

    if (!localStorage.getItem('cookies-aceptadas')) {
        cookies.classList.add('activo');
    } else {
        dataLayer.push({ 'event': 'cookies-aceptadas' });
        cookies.remove();
    }


    accept_cookies.addEventListener('click', () => {
        cookies.remove();
        localStorage.setItem('cookies-aceptadas', true);

        dataLayer.push({'event': 'cookies-aceptadas'});
    });
}
function navFixed() {
    const top = document.querySelector('.header_nav');
    const content_websites = document.querySelector('.content-websites');
    const navbarbrand = document.querySelector('.navbarbrand');
    const darkMode = document.querySelector('.dark-mode');

    window.addEventListener('scroll', function () {
        //funcion para cordenadas -->  console.log(packages.getBoundingClientRect())
        if (content_websites.getBoundingClientRect().top < 0) { //Cuando la parte de arriba toque el inicio de ese div
            top.classList.add('fixed');
            navbarbrand.classList.add('d-none');
            darkMode.classList.add('d-none');
        } else {
            top.classList.remove('fixed');
            navbarbrand.classList.remove('d-none');
            darkMode.classList.remove('d-none');
        }
    });



}

function validatePolicy() {

    const checkbox = document.querySelector('#polict');
    const btn = document.querySelector('#change-color');

    if (checkbox != null) {
        checkbox.addEventListener('change', evt => {
            if (checkbox.checked) {
                btn.classList.add('add');

            } else {
                btn.classList.remove('add');
            }
        });
    }


}

function messagesFlash() {
    if (document.querySelector('.state')) {
        const state = document.querySelector('.state');
        setTimeout(() => {
            state.remove();
        }, 4000);
    }

}


function showDetail() {
    const fa_caret_down = document.querySelectorAll('.fa-caret-down');


    fa_caret_down.forEach(item => {
        item.addEventListener('click', evt => {
            const parent = item.parentNode;
            const parenDParent = parent.parentNode;
            const elementContainer = parenDParent.lastElementChild;
            elementContainer.classList.toggle('add');
        });
    });



}



function formCreateAdmin() {
    const listInputs = document.querySelectorAll(".validation");
    const send = document.querySelector("#send");
    const wrapFormAdmin = document.querySelector(".wrap-form-admin");


    listInputs.forEach(item => {
        item.addEventListener('input', evt => {

            let item = evt.target.value.trim();


            if (item.length < 3) {


                send.classList.toggle('no-send');


                const alert = document.createElement('DIV');

                showAlert(1, "¡Minimo 3 carácteres y no puede ser solo espacios!", alert, wrapFormAdmin);

            }

        })
    })

    //console.log(listInputs);
}

function showAlert(type, message, child, parent) {
    if (document.querySelector('.alert')) {
        return;
    }

    child.innerHTML = message;


    child.classList.toggle('alert');

    parent.appendChild(child);


    setTimeout(() => {
        child.remove();
    }, 1000);


}



function darkMode() {
    const bntDarkMode = document.querySelector('.dark-mode');
    const wrapServiceDeluxe = document.querySelector('.wrap-service-deluxe');
    const formIndexService = document.querySelector('.contact-foot');
    const footerChangeBanckground = document.querySelector('.footer-content');
    const contentPictureAbout = document.querySelector('.content-picture-about');
    const iconDev = document.querySelectorAll('.iconDev');
    const titleContact = document.querySelector('.title-contact');
    const pol = document.querySelector('.pol');
    const formContact = document.querySelector('.form-contact');

    bntDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-md');


        if (wrapServiceDeluxe != null) {
            wrapServiceDeluxe.classList.toggle('wrapServiceDeluxe');
        }
        if (formIndexService != null) {
            formIndexService.classList.toggle('formIndexService');
        }

        if (contentPictureAbout != null) {
            contentPictureAbout.classList.toggle('contentPictureAbout');
        }
        if (iconDev != null) {
            iconDev.forEach(item => {
                item.classList.toggle('iconDevFix');
            });

        }
        if (titleContact != null) {
            titleContact.classList.toggle("titleContact");
        }

        if (pol != null) {
            pol.classList.toggle("changeColourPol");
        }

        if (formContact != null) {
            formContact.classList.toggle('formContactFix');
        }


        footerChangeBanckground.classList.toggle('footerChangeBanckground');
    });
}

function listEvent() {
    const burger = document.querySelector('#burger');
    const link = document.querySelector('.mn');

    burger.addEventListener('click', navBurger);
    link.addEventListener('mouseover', showSubMenu);

}

function navBurger() {
    const navContent = document.querySelector('.nav-content');
    navContent.classList.toggle('add-menu-mobile');


}


function showSubMenu() {
    //const servicesList = document.querySelector('.services-list');

    //servicesList.classList.toggle('showMenu');


}


