

document.addEventListener("DOMContentLoaded", () => {
    
    MicroModal.init({
        onShow: modal => console.info(`${modal.id} is shown`), // [1]
        onClose: modal => console.info(`${modal.id} is hidden`), // [2]

        openClass: 'is-open', // [5]
        disableScroll: true, // [6]
        disableFocus: false, // [7]
        debugMode: true // [10]
    });

    // Функция открытия меню
    let openLandingMenu = () => {
        let burgerIcon = document.querySelector('.landing button.menu');
        let burgerMenu = document.querySelector('.landing nav.navigation');
        
        burgerIcon.addEventListener("click", (e) => {
            burgerIcon.classList.toggle('opened');
            burgerIcon.setAttribute('aria-expanded', burgerIcon.classList.contains('opened'));

            burgerMenu.classList.toggle('opened');
            burgerMenu.setAttribute('aria-expanded', burgerIcon.classList.contains('opened'));
        });
    }
    openLandingMenu();

    // Функция, скрывающая бургер иконку когда листаем вниз, показывает когда листам вверх
    let burgerHideOnScroll = () => {
        let burgerIcon = document.querySelector('.landing button.menu');
        let scrollPrev = 0;
        window.addEventListener('scroll', function(e) {
            let scrolled = this.scrollY;
            if ( scrolled > 100 && scrolled > scrollPrev && !burgerIcon.classList.contains('opened')) {
                burgerIcon.classList.add('out');
            } else {
                burgerIcon.classList.remove('out');
            }
            scrollPrev = scrolled;
        });
    };
    burgerHideOnScroll();

    // Слайдеры
    new Glide('.mission-slider', {
        type: 'carousel',
        perView: 2,
        startAt: 0,
        autoplay: 3000,
        hoverpause: true,
        breakpoints: {
            1600: {
                perView: 2
            },
            990: {
                perView: 1
            }
            }
    }).mount()

    new Glide('.news-slider', {
        type: 'carousel',
        perView: 1,
        startAt: 0,
        autoplay: 5000,
        hoverpause: true
    }).mount();

    new Glide('.projects-slider__special', {
        type: 'carousel',
        perView: 1,
        startAt: 0,
        autoplay: 6000,
        hoverpause: true
    }).mount()

    new Glide('.projects-slider', {
        type: 'carousel',
        perView: 1,
        startAt: 0,
        autoplay: 3000,
        hoverpause: true,
    }).mount()

    // new Glide('.experts-slider', {
    //     type: 'carousel',
    //     perView: 2,
    //     startAt: 0,
    //     // autoplay: 3000,
    //     hoverpause: true,
    //     breakpoints: {
    //         1600: {
    //             perView: 2
    //         },
    //         1200: {
    //             perView: 1
    //         }
    //         }
    // }).mount()


    AOS.init();

    

      
});