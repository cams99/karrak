'use strict'

$(document).ready(function(){
    // Redes
    setTimeout(() => {
        $('.redes').addClass('display')
    }, 500) 

    // Menu 
    $("#menu").click(function () {
        $('.menu-popup').addClass('menuin');
        $('.menu-popup').addClass('display-flex');    
        setTimeout(() => {
            $('.menu-popup > a').addClass('display-flex');
            $('.menu-popup-background').addClass('display');  
            setTimeout(() => {
                $('.menu-popup').removeClass('menuin');
            }, 500)
        }, 500)
    })
    $('.menu-exit, .menu-popup-background').click(function () {
        $('.menu-popup').addClass('menuout');
        $('.menu-popup-background').removeClass('display');    
        setTimeout(() => {
            $('.menu-popup > a').removeClass('display');
            setTimeout(() => {
                $('.menu-popup').removeClass('display-flex'); 
                $('.menu-popup').removeClass('menuout');
            }, 700)
        }, 300)
    })

    // Menu Responsive
    $('.nav-item i').click(function (e) {
        let id = e.currentTarget.id
        $(`#nav-${id}`).addClass('display ml')
        $('.navbar-collapse').addClass('margin-left')
    })
    $('.back').click(function () {
        for (let i = 0; i < 6; i++) {
            $(`#nav-${i}`).removeClass('display ml')
        }
        $('.navbar-collapse').removeClass('margin-left')
    })
    $('.navbar-toggler').click(function () {
        if ($('.navbar').hasClass('background')) {
            $('.navbar').removeClass('background')
        } else {
            $('.navbar').addClass('background')
        }
    })

    // Page 3-2 - Page 4-2
    if (document.location.pathname == '/country-houses/features' || document.location.pathname == '/city-houses/features') {
        setTimeout(() => {
            $('#solar').addClass('display-flex')
            setTimeout(() => {
                $('#water').addClass('display-flex')
            }, 300)
        }, 150)
    }

    // Page 3-3 - Page 4-3
    if (document.location.pathname == '/country-houses/individual' || document.location.pathname == '/city-houses/individual') {
        setTimeout(() => {
            $('.designed-center').addClass('display')
        }, 450) 
        var slider = {};
        slider.initQuery = '#center';
        slider.slider = $(slider.initQuery + " div,div"+slider.initQuery);
        slider.slides = slider.slider.find('div'); 
        if (screen.width <= 475) {
            slider.number = 3;
            slider.actual = 1; 
            $("#center > div")[2].classList.remove('image')
            $("#center > div")[2].classList.remove('image3')
            $("#center > div")[1].classList.add('image')
            $("#center > div")[1].classList.add('image2')
        } else {
            slider.number = slider.slides.length;
            slider.actual = 2; 
        }

        var slide = slider.slides[slider.actual];
        // slide.innerHTML = "<a href='#next' class='slider-prev'><i class='fas fa-chevron-left'></i></a><a href='#next' class='slider-next'><i class='fas fa-chevron-right'></a>";

        // asignando el evento a los botones de siguiente y anterior
        $(".slider-next").click(function () {
            slider.go('next');
            return false;	
        });
        $(".slider-prev").click(function () {
            slider.go('prev');
            return false;	
        });

        // funcion para moverse a un slide concreto
        slider.go = function (where) {
            if (where == 'next') {
                slider.actual = (slider.actual < slider.number - 1) ? slider.actual*1 + 1 : 0;
            } else if (where == 'prev') {
                slider.actual = (slider.actual > 0) ? slider.actual - 1 : slider.number-1;
            } else {
                slider.actual = where;
            }
        
            for (var i = 0; i < slider.number; i++) {   
                if (slider.actual == i) {
                    var slide = $(slider.slides[i]);
                    var sliders = $(slider.slides);
                    sliders.removeClass('image image1 image2 image3 image4 image5 image6');
                    // $('.slider-prev, .slider-next').remove();
                    var fondo;
                    switch (i) {
                        case 1:
                            fondo = "image2"
                            break;
                        case 2:
                            fondo = "image3"
                            break;
                        case 3:
                            fondo = "image4"
                            break;
                        case 4:
                            fondo = "image5"
                            break;
                        case 5:
                            fondo = "image6"
                            break;
                        default:
                            fondo = "image1"
                            break;
                    }
                    slide.addClass('image ' + fondo);
                    // slider.slides[slider.actual].innerHTML = "<a href='#next' class='slider-prev'><i class='fas fa-chevron-left'></i></a><a href='#next' class='slider-next'><i class='fas fa-chevron-right'></a>";
                }
            }
            // $(".slider-next").click(function () {
            //     slider.go('next');
            //     return false;	
            // });
            // $(".slider-prev").click(function () {
            //     slider.go('prev');
            //     return false;	
            // });
        };
        setInterval(() => {
            slider.go('next');
            // $('.slider-next').click();
        }, 3000) 
    }

    // Page 3-4
    if (document.location.pathname == '/country-houses/building' || document.location.pathname == '/home/building') {
        setTimeout(() => {
            $('.build-image').addClass('display')
        }, 150)
    }

    // Page 3-5
    if (document.location.pathname == '/country-houses/lifestyle') {
        setTimeout(() => {
            $('.energy').addClass('display-flex')
            setTimeout(() => {
                $('.carbon').addClass('display-flex')
                setTimeout(() => {
                    $('#white-house').addClass('display-flex')
                    setTimeout(() => {
                        $('#stone-house').addClass('display-flex')
                    }, 300)
                }, 150)
            }, 150)
        }, 150)
    }

    // Page 4-1
    if (document.location.pathname == '/city-houses') {
        $(".button").click(function() {
            if($('.button').hasClass('rotate') === false) {
                $('.bottom-button > div:nth-child(1)').addClass('animation');
                $('.button').addClass('rotate');
                $('.carousel-indicators').addClass('bottom');
            } else {
                $('.button').removeClass('rotate');
                $('.carousel-indicators').removeClass('bottom');
                $('.bottom-button > div:nth-child(1)').addClass('opacity-0');
                setTimeout(() => {
                    $('.bottom-button > div:nth-child(1)').removeClass('opacity-0');
                    $('.bottom-button > div:nth-child(1)').removeClass('animation');
                }, 1000)
            }
        })
    }


    // Page 4-5
    if (document.location.pathname == '/city-houses/lifestyle' || document.location.pathname == '/home/lifestyle') {
        setTimeout(() => {
            $('.build').addClass('display')
            $('.carbon').addClass('display-flex')
            setTimeout(() => {
                $('#white-house').addClass('display-flex')
                setTimeout(() => {
                    $('#stone-house').addClass('display-flex')
                }, 300)
            }, 150)
        }, 150)
    }

    // Page 5   
    if (document.location.pathname == '/house-design') {
        $('.dropdown').click(function() {
            var menu = $('.menu-dropdown');
            if(menu.hasClass('menu-out') === false) {
                menu.addClass('menu-out');
            } else {
                menu.removeClass('menu-out');
            }
        })
        const observer = new MutationObserver((mutationList) => { 
            console.log(mutationList);
            for (let i=0; i<3; i++) {
                var carouselIndicators = document.querySelectorAll('.carousel-indicators li');             
                if (carouselIndicators[i].classList.contains('active')) {
                    let slide = carouselIndicators[i].getAttribute('data-slide-to')
                    let name = $('.houses a')
                    for (let j=0; j<3; j++) {
                        if(j == slide) {
                            name[j].classList.add('active');
                        } else {
                            name[j].classList.remove('active');
                        }
                    }
                }
            }
        });
        
        var carouselIndicatorsOl = document.querySelector('.carousel-indicators');             

        // Opcions para el observer 
        const observerOptions = { 
            attributes: true, 
            childList: true, 
            subtree: true,
            characterData: false,
            attributeOldValue: false,
            characterDataOldValue: false
        };
        observer.observe(carouselIndicatorsOl, observerOptions);
    }
    

    
    // Page 6-1
    if (document.location.pathname == '/getstarted') {
        setTimeout(() => {
            $('.col-49').addClass('display')
            setTimeout(() => {
                $('.col-45').addClass('display')
            }, 150)
        }, 150)
    }

    // Page 6-2 
    if (document.location.pathname == '/getstarted/building') {
        setTimeout(() => {
            $('.house').addClass('display')
            setTimeout(() => {
                $('.build-right').addClass('display')
                setTimeout(() => {
                    $('.build-center .col-12').addClass('display-flex')
                }, 150)
            }, 150)
        }, 150)
    }

    // Page 6-3
    if (document.location.pathname == '/getstarted/finance') {
        setTimeout(() => {
            $('.build-right').addClass('display')
            setTimeout(() => {
                $('.house').addClass('display')
                setTimeout(() => {
                    $('.build-center .col-12').addClass('display-flex')
                }, 150)
            }, 150)
        }, 150)
    }

    // Page 6-4 - Page 7
    if (document.location.pathname == '/getstarted/occupancy' || document.location.pathname == '/features') {
        setTimeout(() => {
            $('.build-right').addClass('display')
        }, 150)
    }

    // Page 8
    if (document.location.pathname == '/getacost') {
        setTimeout(() => {
            $('.formulario-price').addClass('display')
            setTimeout(() => {
                $('.formulario-contact').addClass('display')
            }, 300)
        }, 150)
    }

    // Page 9-1
    if (document.location.pathname == '/contact') {
        setTimeout(() => {
            $('.map').addClass('display-flex')
            setTimeout(() => {
                $('.form').addClass('display-flex')
            }, 300)
        }, 150)
    }

    // Page 9-2
    if (document.location.pathname == '/contact/about-us') {
        setTimeout(() => {
            $('.principal').addClass('display')
            setTimeout(() => {
                $('.medium-text').addClass('display')
                setTimeout(() => {
                    $('.footer-img').addClass('display-flex')
                }, 150)
            }, 150)
        }, 150)
    }

    // Page 9-3
    if (document.location.pathname == '/contact/people') {
        setTimeout(() => {
            $('.our-team').addClass('display')
            $('.our-team-menu').addClass('display')
            setTimeout(() => {
                $('.our-team-images').addClass('display')
            }, 200)
        }, 150)
    }
});