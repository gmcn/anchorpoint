'use strict';
var body = $('body');
var DURATION = 300;
var preloader = $('.preloader');
var header = $('.header');
var anAwards = $('.an-awards');
var mobileBreakpoint = 992;

function setOverlay(cb) {
    var overlay = $('<div class="overlay"></div>');
    overlay.on('click', cb);
    return overlay;
}
AOS.init({
    duration: 1000
});
// (function() {
//     $(document).ready(function() {
//         $(".animsition").animsition({
//             inClass: 'fade-in',
//             outClass: 'fade-out',
//             inDuration: 1500,
//             outDuration: 1000,
//             linkElement: '.animsition-link',
//             loading: true,
//             loadingParentElement: 'body',
//             loadingClass: 'preloader',
//             loadingInner: `<div class="preloader__spinner">
// 				<span class="preloader__double-bounce"></span>
// 				<span class="preloader__double-bounce preloader__double-bounce--delay"></span>
// 			</div>`,
//             timeout: false,
//             timeoutCountdown: 5000,
//             onLoadEvent: true,
//             browser: ['animation-duration', '-webkit-animation-duration'],
//             overlay: false,
//             overlayClass: 'animsition-overlay-slide',
//             overlayParentElement: 'body',
//             transition: function(url) {
//                 window.location.href = url;
//             }
//         });
//     })
// })();
(function() {
    var menuOpenBtn = $('.menu-toggle');
    var menuCloseBtn = $('.menu__close');
    var menu = $('.menu');
    var dropdownLinks = menu.find('.__js_menu-dropdown-link');
    var ModifierClass = {
        MENU: 'menu--opened',
        TOGGLE: 'menu-toggle--opened'
    };
    menuOpenBtn.on('click', function() {
        var overlay = setOverlay(closeMenu);
        body.append(overlay);
        menuCloseBtn.on('click', closeMenu);
        menuOpenBtn.addClass(ModifierClass.TOGGLE);
        setTimeout(function() {
            overlay.fadeIn(DURATION);
            menu.addClass(ModifierClass.MENU);
        }, DURATION + 50);
    });
    dropdownLinks.on('click', function(evt) {
        evt.preventDefault();
        $(this).next().find('a').on('click', closeMenu);
        $(this).next().slideToggle(DURATION);
    });

    function closeMenu() {
        menuCloseBtn.off('click', closeMenu);
        menu.removeClass(ModifierClass.MENU);
        var overlay = $('.overlay').fadeOut(DURATION);
        setTimeout(function() {
            menuOpenBtn.removeClass(ModifierClass.TOGGLE);
            overlay.remove();
        }, DURATION + 50);
    }
    $(window).on('resize', function() {
        var windowWidth = $(window).width();
        if (windowWidth >= mobileBreakpoint) {
            closeMenu();
        }
    });
})();
(function() {
    var toggleBtn = $('.header-toggle');
    var header = $('.header--aside');
    var dropdownLinks = $('.__js_nav-dropdown-link');
    toggleBtn.on('click', function() {
        if ($(this).hasClass('on')) {
            close();
        } else {
            var overlay = setOverlay(close);
            body.append(overlay);
            $(this).removeClass('off').addClass('on');
            setTimeout(function() {
                overlay.fadeIn(DURATION);
                header.addClass('header--opened');
            }, 500);
        }
    });
    dropdownLinks.on('click', function(evt) {
        evt.preventDefault();
        $(this).next().slideToggle(DURATION);
    });

    function close() {
        var overlay = $('.overlay');
        toggleBtn.addClass('off').removeClass('on');
        setTimeout(function() {
            overlay.fadeOut(DURATION);
            header.removeClass('header--opened');
            setTimeout(function() {
                overlay.remove();
            }, DURATION)
        }, 500);
    }
    $(window).on('resize', function() {
        if ($(window).width() >= 1200) {
            close();
        }
    });
})();
(function() {
    var header = $('.__js_fixed-header');
    var classes = 'header--fixed';
    var headerHeight = header.outerHeight();
    var scroll = $(window).scrollTop();
    var isScroll = false;
    var isAbsoluteHeader = header.hasClass('header--absolute');
    $(window).on('scroll', function() {
        scroll = $(window).scrollTop();
        if (scroll >= headerHeight) {
            isScroll = true;
            headerHeight = isScroll ? header.outerHeight() : null;
            header.addClass(classes);
            if (!header.hasClass('is-fixed')) {
                header.css({
                    'top': -headerHeight + 'px',
                    'transform': 'translateY(' + headerHeight + 'px)'
                }).addClass('is-fixed');
                if (!isAbsoluteHeader) {
                    body.css('padding-top', headerHeight + 'px');
                }
            }
        } else {
            isScroll = false;
            header.removeClass(classes + ' is-fixed').removeAttr('style');
            if (!isAbsoluteHeader) {
                body.css('padding-top', 0);
            }
        }
    });
})();
(function() {
    var search = $('.__js_header-search');
    var toggle = search.find('.header-search__toggle');
    var activeClass = 'header-search--opened';
    toggle.on('click', function() {
        search.toggleClass(activeClass);
    });
})();
(function() {
    var scrollToBtn = $('.__js_to-next-section');
    if (scrollToBtn.length) {
        scrollToBtn.on('click', function(evt) {
            evt.preventDefault();
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            $('html').animate({
                scrollTop: destination
            }, 1100);
        });
    }
})();
(function() {
    var openContactsModalBtn = $('.__js_open-contacts-modal');
    var contactsModal = $('.contacts__modal');
    var closeContactsModalBtn = contactsModal.find('.contacts__modal-close');
    openContactsModalBtn.on('click', function(evt) {
        evt.preventDefault();
        contactsModal.fadeIn(DURATION);
        closeContactsModalBtn.on('click', closeModal);
    });

    function closeModal() {
        contactsModal.fadeOut(DURATION);
    }
})();
(function() {
    var optionsTariff = {
        slidesPerView: 1,
        spaceBetween: 10,
        initialSlide: 1,
        speed: 300,
        loop: false,
        centeredSlides: true,
        centeredSlidesBounds: true,
    };
    var priceList = undefined;
    if ($('.__js_slider-price').length > 0) {
        $(window).resize(function() {
            initPriceSlider();
        });
    }
    initPriceSlider();

    function initPriceSlider() {
        if (window.matchMedia('(max-width: 1199px)').matches && priceList == undefined) {
            var slider = $('.pricing__slider-container');
            priceList = new Swiper('.__js_slider-price', optionsTariff);
            priceList.on('slideChange', function() {
                priceList.activeIndex === 0 ? slider.addClass('hide-left') : slider.removeClass('hide-left');
                priceList.activeIndex === priceList.slides.length - 1 ? slider.addClass('hide-right') : slider.removeClass('hide-right');
            });
        } else if (window.matchMedia('(min-width: 1200px)').matches && priceList != undefined) {
            priceList.destroy();
            priceList = undefined;
        }
    }
})();
(function() {
    var diagrams = document.querySelectorAll('.__js_diagram');
    var specialization = document.querySelector('.specialization');
    var windowHeight = window.innerHeight;
    var animationDone = false;
    if (diagrams && specialization) {
        diagrams.forEach(function(item) {
            var progress = item.querySelector('.diagram__circle--progress');
            var progresslength = Math.round(progress.getTotalLength());
            progress.setAttribute('stroke-dasharray', '0 ' + progresslength);
        });
        window.onscroll = function() {
            var offset = specialization.getBoundingClientRect().top;
            if (offset <= windowHeight && !animationDone) {
                diagrams.forEach(function(item) {
                    var progress = item.querySelector('.diagram__circle--progress');
                    var progresslength = Math.round(progress.getTotalLength());
                    var percent = item.querySelector('.diagram__percent').textContent;
                    var percentValue = parseFloat(percent, 10);
                    var progressFill = percentValue * progresslength / 100;
                    progress.style.strokeDasharray = progressFill + ' ' + progresslength;
                });
                animationDone = true;
            }
        }
    }
})();
(function() {
    var statistics = $('.statistics');
    var numbers = $('.__js_number');
    var animationIsDone = false;
    var scroll = $(window).scrollTop() + $(window).height();
    if ($('*').is('.statistics')) {
        var offset = statistics.offset().top;
        if (!animationIsDone && scroll >= offset) {
            animateNumbers();
        }
        $(window).on('scroll', function() {
            scroll = $(window).scrollTop() + $(window).height();
            if (!animationIsDone && scroll >= offset) {
                animateNumbers();
            }
        });
    }

    function animateNumbers() {
        numbers.each(function() {
            var endValue = parseInt($(this).attr('data-end-value'), 10);
            $(this).easy_number_animate({
                start_value: 0,
                end_value: endValue,
                duration: 2500
            });
        });
        animationIsDone = true;
    }
})();
(function() {
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
})();
(function() {
    $(window).on('load', function() {
        var select = $('.__js_filter-select');
        var filterItem = $('.filter__item');
        var filterItemAll = $('.filter__item[data-filter="*"]');
        var filterActiveClass = 'filter__item--active';
        // var grid = $('.__js_works-filter').isotope({
        //     // itemSelector: '.works__item',
        //     layoutMode: 'packery',
        //     packery: {
        //         gutter: 0
        //     },
        // });
        var grid = $('.__js_gallery-filter').isotope({
            // itemSelector: '.works__item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });
        var grid2 = $('.__js_news-list-filter').isotope({
            itemSelector: '.__js_news-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });
        setTimeout(function() {
            $('.masonry').isotope({
                itemSelector: '.masonry-item',
                layoutMode: 'packery'
            });
        }, 100);
        select.on('change', function() {
            var value = select.val();
            var filterValue = value !== '*' ? '.__js_' + value : value;
            if (value !== '*') {
                var filterValue = '.__js_' + value;
                filterItem.removeClass(filterActiveClass);
            } else {
                filterItemAll.addClass(filterActiveClass);
                var filterValue = value;
            }
            grid.isotope({
                filter: filterValue
            });
        });
        filterItem.on('click', function() {
            var filterValue = $(this).attr('data-filter');
            $(this).addClass(filterActiveClass).siblings().removeClass(filterActiveClass);
            grid.isotope({
                filter: filterValue
            });
            grid2.isotope({
                filter: filterValue
            });
            if ($('.__js_news-list-filter') && $('.__js_news-list-filter').length > 0) {
                var destination = $('.__js_news-list-filter').offset().top - 200;
                $('html').animate({
                    scrollTop: destination
                }, 1100);
            }
        });
    });
})();
(function() {
    var bg = $('.__js_bg-parallax-container');
    var bgInner = bg.find('.__js_bg-parallax-inner');
    if (bg.length) {
        var bgHeight = bg.innerHeight();
        var bgInnerHeight = bgInner.innerHeight();
        var bgOffset = bg.offset().top;
        var hideBgInnerHeight = bgInnerHeight - bgHeight;
        var halfWindowHeight = $(window).height() / 2;
        var ratio = hideBgInnerHeight / halfWindowHeight;
        $(window).on('resize', function() {
            bgHeight = bg.innerHeight();
            bgInnerHeight = bgInner.innerHeight();
            bgOffset = bg.offset().top;
            hideBgInnerHeight = bgInnerHeight - bgHeight;
            halfWindowHeight = $(window).height() / 2;
            ratio = hideBgInnerHeight / halfWindowHeight;
        });
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            var scrollPlusHalfWindowHeight = scroll + halfWindowHeight;
            if (scrollPlusHalfWindowHeight >= bgOffset && scroll <= bgOffset) {
                var difference = bgOffset - scrollPlusHalfWindowHeight;
                var shift = difference * ratio;
                bgInner.css('top', shift + 'px');
            }
        });
    }
})();
(function() {
    $(window).on('load', function() {
        setEqualHeight($('.article-list__list'));
        $(window).resize(function() {
            setEqualHeight($('.article-list__list'));
        });
    });

    function setEqualHeight(row) {
        if (window.matchMedia('(min-width: 768px) and (max-width: 991px)').matches) {
            row.each(function() {
                var tallestcolumn = 0;
                $(this).find('li').each(function() {
                    var currentHeight = $(this).find('.article-preview__content').height();
                    if (currentHeight > tallestcolumn) {
                        tallestcolumn = currentHeight;
                    }
                });
                $(this).find('.article-preview__content').height(tallestcolumn);
            });
        } else {
            $('.article-preview__content').removeAttr('style');
        }
    }
})();
// (function() {
//     initFullPage();
//
//     function initFullPage() {
//         if ($('#pagepiling') && $('#pagepiling').length > 0) {
//             $('#pagepiling').pagepiling({
//                 scrollingSpeed: 280,
//                 loopBottom: true,
//                 afterLoad: function(anchorLink, index) {
//                     var current = $('#pagepiling .section.active');
//                     if (current.hasClass('dark')) {
//                         setDark();
//                     } else {
//                         removeDark();
//                     }
//                     $('.fp-table.active .aos-init').addClass('aos-animate');
//                 }
//             });
//         }
//     }
//
//     function setDark() {
//         $('.header-3').addClass('header-3--dark');
//         $('.footer-3').addClass('footer-3--dark');
//         $('#pp-nav').addClass('dark');
//     }
//
//     function removeDark() {
//         $('.header-3').removeClass('header-3--dark');
//         $('.footer-3').removeClass('footer-3--dark');
//         $('#pp-nav').removeClass('dark');
//     }
// })();
(function() {
    function validateEmail(email) {
        var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
        return re.test(String(email).toLowerCase());
    }

    function mail(event, php) {
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
        var req = new XMLHttpRequest();
        req.open('POST', php, true);
        req.onerror = function() {
            console.log("Error sending request");
        };
        req.send(new FormData(event.target));
    }

    function checkValid(errs) {
        var isValid = true;
        errs.each(function() {
            if ($(this).is(':visible')) {
                isValid = false;
            }
        });
        return isValid;
    }
    $('.js-form-validate button').on('click', function(e) {
        var that = $(this),
            fields = $(this).parent().find('input').add($(this).parent().find('textarea')),
            form = $(this).parent('form'),
            isValid = checkValid(form.find('.field-error'));
        fields.each(function() {
            var err = $(this).parent().next();
            if ($(this).prop('required') === true) {
                if ($(this).val().length === 0) {
                    err.show().text('Please enter a value.');
                    isValid = false;
                } else {
                    err.hide().text('');
                }
            }
            if ($(this).attr('type') === "email") {
                if (validateEmail($(this).val()) === false) {
                    err.show().text('Please enter a valid email address.');
                    isValid = false;
                }
            }
        });
        if (isValid) {
            form.submit(function() {
                mail(event, 'php/mail.php');
                $.fancybox.open({
                    src: '#thanks',
                    type: 'inline',
                    touch: false,
                    scrolling: 'no'
                });
            });
            setTimeout(function() {
                form.off('submit');
            }, 100);
        } else {
            e.preventDefault();
        }
    });
    $('.js-form-validate .field').on('focusout keyup change', function() {
        var input = $(this).find('input'),
            err = input.parent().next(),
            val = input.val();
        if (input.attr('type') === "email") {
            if (validateEmail(val) || val.length === 0) {
                err.hide().text('');
            } else {
                err.show().text('Please enter a valid email address.');
            }
        }
    });
})();
// (function() {
//     $(window).on('load', function() {
//         var footer = $('.footer:not(.footer--technical)');
//         var footerParent = footer.parent();
//         var footerHeight = footer.innerHeight();
//         if (footerHeight <= $(window).height()) {
//             var leftValue = footerParent.css('padding-left');
//             footer.css({
//                 'position': 'fixed',
//                 'left': leftValue,
//                 'right': '0',
//                 'bottom': '0'
//             });
//             body.css('padding-bottom', footerHeight);
//         } else {
//             body.css('padding-bottom', '0');
//             footer.removeAttr('style')
//         }
//         $(window).on('resize', function() {
//             footerHeight = footer.innerHeight();
//             if (footerHeight <= $(window).height()) {
//                 leftValue = footerParent.css('padding-left');
//                 footer.css({
//                     'position': 'fixed',
//                     'left': leftValue,
//                     'right': '0',
//                     'bottom': '0'
//                 });
//                 body.css('padding-bottom', footerHeight);
//             } else {
//                 body.css('padding-bottom', '0');
//                 footer.removeAttr('style');
//             }
//         });
//     });
// })();
