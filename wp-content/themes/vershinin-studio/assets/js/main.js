$(document).ready(function() {
    $('.header__slider').slick({
        arrows: false,
        speed: 500,
        easing: 'ease-in-out',
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnFocus: false,
        pauseOnHover: false,
    });
});

$(document).ready(function() {
    $('.header__slider-vertical').slick({
        arrows: false,
        speed: 500,
        easing: 'ease-in-out',
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnFocus: false,
        pauseOnHover: false,
    });
});
//=============== Popup
const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 800;

if (popupLinks.length > 0) {
    for (let index = 0; index < popupLinks.length; index++) {
        const popupLink = popupLinks[index];
        popupLink.addEventListener("click", function(e) {
            const popupName = popupLink.getAttribute('href').replace('#', '');
            const curentPopup = document.getElementById(popupName);
            popupOpen(curentPopup);
            e.preventDefault();
        });
    }
}
const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
    for (let index = 0; index < popupCloseIcon.length; index++) {
        const el = popupCloseIcon[index];
        el.addEventListener('click', function(e) {
            popupClose(el.closest('.popup'));
            e.preventDefault();
        });
    }
}

function popupOpen(curentPopup) {
    if (curentPopup && unlock) {
        const popupActive = document.querySelector('.popup.open');
        if (popupActive) {
            popupClose(popupActive, false);
        } else {
            bodyLock();
        }
        curentPopup.classList.add('open');
        curentPopup.addEventListener("click", function(e) {
            if (!e.target.closest('.popup__content')) {
                popupClose(e.target.closest('.popup'));
            }
        });
    }
}

function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
        popupActive.classList.remove('open');
        if (doUnlock) {
            bodyUnLock();
        }
    }
}

function bodyLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

    if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = lockPaddingValue;
        }
    }
    body.style.paddingRight = lockPaddingValue;
    body.classList.add('lock');

    unlock = false;
    setTimeout(function() {
        unlock = true;
    }, timeout);
}

function bodyUnLock() {
    setTimeout(function() {
        if (lockPadding.length > 0) {
            for (let index = 0; index < lockPadding.length; index++) {
                const el = lockPadding[index];
                el.style.paddingRight = '0px';
            }
        }
        body.style.paddingRight = '0px';
        body.classList.remove('lock');
    }, timeout);

    unlock = false;
    setTimeout(function() {
        unlock = true;
    }, timeout);
}

document.addEventListener('keydown', function(e) {
    if (e.which === 27) {
        const popupActive = document.querySelector('.popup.open');
        popupClose(popupActive);
    }
});

(function() {
    // проверяем поддержку
    if (!Element.prototype.closest) {
        // реализуем
        Element.prototype.closest = function(css) {
            var node = this;
            while (node) {
                if (node.matches(css)) return node;
                else node = node.parentElement;
            }
            return null;
        };
    }
})();
(function() {
    // проверяем поддержку
    if (!Element.prototype.matches) {
        // определяем свойство
        Element.prototype.matches = Element.prototype.matchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector;
    }
})();

//=============Telegram form

$(document).ready(function() {
    $(".form-element").submit(function() {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        var message = $(formNm).find(".form-message");
        var formTitle = $(formNm).find(".form-title");
        $.ajax({
            type: "POST",
            url: 'php/send-message-to-telegram.php',
            data: formNm.serialize(),
            success: function(data) {
                // Вывод сообщения об успешной отправке
                message.html(data);
                formTitle.css("display", "none");
                setTimeout(function() {
                    formTitle.css("display", "block");
                    message.html('');
                    $('input').not(':input[type=submit], :input[type=hidden]').val('');
                }, 3000);
            },
            error: function(jqXHR, text, error) {
                // Вывод сообщения об ошибке отправки
                message.html(error);
                formTitle.css("display", "none");
                setTimeout(function() {
                    formTitle.css("display", "block");
                    message.html('');
                    $('input').not(':input[type=submit], :input[type=hidden]').val('');
                }, 3000);
            }
        });
        return false;
    });
});

//================Slider Vidguk

$(document).ready(function() {
    $('.vidguk__slider').slick({
        arrows: true,
        speed: 500,
        easing: 'ease-in-out',
        autoplay: false,

    });
});

//==============Scroll
const anchors = document.querySelectorAll('a[href^="#"]')
for (let anchor of anchors) {
    anchor.addEventListener("click", function(e) {
        e.preventDefault()
        const id = anchor.getAttribute('href');
        const yOffset = -100;
        const element = document.querySelector(id);
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({ top: y, behavior: 'smooth' });
    })
}