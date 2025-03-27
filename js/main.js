//МОБИЛЬНОЕ МЕНЮ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
const menuToggle = document.querySelector('#menu-toggle')
const mobileNavContainer = document.querySelector('#mobile-nav')


menuToggle.onclick = function () {
    menuToggle.classList.toggle('menu-icon-active');
	mobileNavContainer.classList.toggle('mobile-nav--active');
	body.classList.toggle('lock')
}

// ПЛАВНЫЙ ЯКОРНЫЙ ПЕРЕХОД!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
function slowScroll(id) {
    var offset = 0;
    $('html, body').animate({
        scrollTop: $(id).offset().top - offset
    }, 1000);
    return false;
}
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

let SubMenuActive = document.getElementById('mobile-nav__item');
SubMenuActive.addEventListener ('click', function(){
	let subMenu= document.querySelector('.sub-mobmenu__list');
	SubMenuActive.classList.toggle('active_sub');
	subMenu.classList.toggle('open');
});

let SubMenuActive2 = document.getElementById('mobile-nav__item2');
SubMenuActive2.addEventListener ('click', function(){
	let subMenu= document.querySelector('.sub-mobmenu__list2');
	SubMenuActive2.classList.toggle('active_sub');
	subMenu.classList.toggle('open2');
});

let SubMenuActive3 = document.getElementById('mobile-nav__item3');
SubMenuActive3.addEventListener ('click', function(){
	let subMenu= document.querySelector('.sub-mobmenu__list3');
	SubMenuActive3.classList.toggle('active_sub');
	subMenu.classList.toggle('open3');
});




// let arrow = document.querySelectorAll('.arrow');
// for(i=0; i<arrow.length; i++){
// 	let subMenu=arrow[i].nextElementSibling;
// 	let thisArrow=arrow[i];
// 	arrow[i].addEventListener('click', function(){
// 		subMenu.classList.toggle('open');
// 		thisArrow.classList.toggle('active'); 
// 	});
// }




// ФИКСИРОВАННАЯ ШАПКА!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

window.onscroll = function showHeader() {

    var header = document.querySelector('.top')

    if (window.pageYOffset > 160) {
        header.classList.add('header__fixed')
    } else {
        header.classList.remove('header__fixed')
    }
}

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



// MODAL__FORM!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 800;

if (popupLinks.length > 0) {
	for (let index = 0; index < popupLinks.length; index++) {
		const popupLink = popupLinks[index];
		popupLink.addEventListener("click", function (e) {
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
		el.addEventListener('click', function (e) {
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
		}else {
			bodyLock();
		}
		curentPopup.classList.add('open');
		curentPopup.addEventListener("click", function (e) {
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
	const lockPaddingValue = window.innerWidth - document.body.offsetWidth + 'px';

	if (lockPadding.length > 0) {
		for (let index = 0; index < lockPadding.length; index++) {
			const el = lockPadding[index];
			el.style.paddingRight = lockPaddingValue;
		}
	}
	body.style.paddingRight = lockPaddingValue;
	body.classList.add('lock');

	unlock = false;
	setTimeout(function () {
		unlock = true;
	}, timeout);
}

function bodyUnLock() {
	setTimeout(function () {
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
	setTimeout(function () {
		unlock = true;
	}, timeout);
}



document.addEventListener('keydown', function (e) {
	if (e.which === 27) {
		const popupActive = document.querySelector('.popup.open');
		popupClose(popupActive);
	}
});

(function () {
	// проверяем поддержку
	if (!Element.prototype.closest) {
		// реализуем
		Element.prototype.closest = function (css) {
			var node = this;
			while (node) {
				if (node.matches(css)) return node;
				else node = node.parentElement;
			}
			return null;
		};
	}
})();
(function () {
	// проверяем поддержку
	if (!Element.prototype.matches) {
		// определяем свойство
		Element.prototype.matches = Element.prototype.matchesSelector ||
			Element.prototype.webkitMatchesSelector ||
			Element.prototype.mozMatchesSelector ||
			Element.prototype.msMatchesSelector;
	}
})();








// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!







// !!!!!!!!!!!! FORM__INPUT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


"use strict"

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend);
    
    const body = document.querySelector('body');
    
    var popup = document.getElementById('popup');

    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);


        let formData = new FormData(form);

        if (error === 0) {
			form.classList.add('_sending');
			let response = await fetch('sendmail.php', {
				method: 'POST',
				body: formData
			});
			if (response.ok) {
				let result = await response.json();
				alert(result.message);
                form.reset();  
                form.classList.remove('_sending');
                popup.classList.remove('open');
                body.classList.remove('lock');
                body.style.paddingRight = '0px';
			} else {
				alert("Ошибка");
				form.classList.remove('_sending');
			}
		} else {
			alert('Заполните обязательные поля');
		}

	}

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.getAttribute("type") === "checkbox" && input.checked === false) {
                formAddError(input);
                error++;
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }

    function formAddError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }

    function formRemoveError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }


});






"use strict"

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form2');
    form.addEventListener('submit', formSend);
    
    const body = document.querySelector('body');
    
    var popup = document.getElementById('popup2');

    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);


        let formData = new FormData(form);

        if (error === 0) {
			form.classList.add('_sending');
			let response = await fetch('sendmail2.php', {
				method: 'POST',
				body: formData
			});
			if (response.ok) {
				let result = await response.json();
				alert(result.message);
                form.reset();  
                form.classList.remove('_sending');
                popup.classList.remove('open');
                body.classList.remove('lock');
                body.style.paddingRight = '0px';
			} else {
				alert("Ошибка");
				form.classList.remove('_sending');
			}
		} else {
			alert('Заполните обязательные поля');
		}

	}

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req2');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.getAttribute("type") === "checkbox" && input.checked === false) {
                formAddError(input);
                error++;
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }

    function formAddError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }

    function formRemoveError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }


});



// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!




let contact = document.getElementById('contact_mob')


contact.onclick = function (){
	menuToggle.classList.remove('menu-icon-active');
	mobileNavContainer.classList.remove('mobile-nav--active');
	body.classList.remove('lock')
	slowScroll('#contacts')
}
