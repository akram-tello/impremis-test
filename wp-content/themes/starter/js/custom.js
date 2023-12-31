(() => {
    // HERO SLIDER
    jQuery('.js-hero').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 6000,
        items: 1
    });

    jQuery('.js-logo-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 6000,
        margin: 20,
        responsive: {
            0 : {
                items: 2,
                center: true,
                stagePadding: 50
            },
            768 :  {
                items: 3,
            },
            1024 : {
                items: 5,
                stagePadding: 0,
                margin: 40
            }
        }
    });

    // Mobile Menu
    const _mobileMenu = jQuery('.mobile-navigation');
    jQuery('.js-mobile-open').click(function(){
        _mobileMenu.addClass('open');
    });

    jQuery('.js-mobile-close').click(function(){
        _mobileMenu.removeClass('open');
    });

    const _faqs = document.querySelectorAll('.faq-list');
    if( _faqs ) {
        _faqs.forEach( _faq => {
            const _question = _faq.querySelectorAll('.faq-question');

            _question.forEach( _toggle => {
                _toggle.addEventListener('click', e => {
                    e.preventDefault();
                    const _target = e.currentTarget;
                    const _parent = _target.parentNode;

                    _parent.classList.toggle('active');
                });
            });
        });
    }

    // LAZY LOAD IMAGES
    const _images = document.querySelectorAll('img');

	[].forEach.call( _images, image => {
	
        let _source = image.getAttribute('data-src');

        image.setAttribute('src', _source);

        image.onload = () => {

        image.removeAttribute('data-src');

        }

	});

    // HEADER
    const header = document.getElementById('masthead');
    if (header) {
        header.style.backgroundColor = 'rgba(0, 0, 0, 1)';
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                header.style.backgroundColor = '#FFFFFF';
            } else {
                header.style.backgroundColor = '#1A1A1A';
                header.style.borderBottom = '0.5px solid #FFFFFF';
            }
        });
    } 

      // Dropdown Menu for Submenu
      const subMenuToggleButtons = document.querySelectorAll('.menu-item-has-children > a'); // Assuming the parent li has a class 'menu-item-has-children' and directly contains an anchor
      if (subMenuToggleButtons) {
          subMenuToggleButtons.forEach(button => {
              button.addEventListener('click', function(event) {
                  event.preventDefault();
                  const parentLi = this.parentNode;
                  const subMenu = parentLi.querySelector('.sub-menu'); // Assuming the submenu has a class 'sub-menu'
                  if (subMenu) {
                      subMenu.classList.toggle('open'); // Toggle 'open' class to show/hide
                  }
              });
          });
      }
    

})();