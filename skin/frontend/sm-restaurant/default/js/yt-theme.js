
jQuery.cookie = function (name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

function trim(str, chars) {
    chars = chars || "\\s";
    str = str.replace(new RegExp("^[" + chars + "]+", "g"), "");
    return str;
}

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name, defaultvalue) {
    var i, x, y, arrcookies = document.cookie.split(";");
    for (i = 0; i < arrcookies.length; i++) {
        x = arrcookies[i].substr(0, arrcookies[i].indexOf("="));
        y = arrcookies[i].substr(arrcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
    return defaultvalue;
}


// Click btn cpanel
jQuery(document).ready(function ($) {
    $('#cpanel_btn').click(function () {
        if ($('#cpanel_btn i').attr('class') == 'fa fa-hand-o-left') {
            $('#cpanel_wrapper').animate({
                'right': '-302px'
            }, 300, function () {
                $('#cpanel_wrapper').show().animate({
                    'right': '0px'
                });
            });
            $('#cpanel_btn i').attr('class', 'fa fa-hand-o-right');
        } else if ($('#cpanel_btn i').attr('class') == 'fa fa-hand-o-right') {
            $('#cpanel_wrapper').animate({
                'right': '0px'
            }, 300, function () {
                $('#cpanel_wrapper').show().animate({
                    'right': '-302px'
                });
            });
            $('#cpanel_btn i').attr('class', 'fa fa-hand-o-left');
        }
    });
});

//reset cpanel
function onCPResetDefault(_cookie) {
    for (i = 0; i < _cookie.length; i++) {
        if (getCookie(TMPL_NAME + '_' + _cookie[i]) != undefined) {
            createCookie(TMPL_NAME + '_' + _cookie[i], '', -1);
        }
    }

    if (window.location.href.indexOf('?') > -1) window.location.href = window.location.href.substr(0, window.location.href.indexOf('?'));
    else window.location.reload();
}

//apply config cpanel
function onCPApply() {
    var elems = document.getElementById('cpanel_wrapper').getElementsByTagName('*');
    var usersetting = {};
    for (i = 0; i < elems.length; i++) {
        var el = elems[i];
        if (el.name && (match = el.name.match(/^ytcpanel_(.*)$/))) {
            var name = match[1];
            var value = '';
            if (el.tagName.toLowerCase() == 'input' && (el.type.toLowerCase() == 'radio' || el.type.toLowerCase() == 'checkbox')) {
                if (el.checked) value = el.value;
            } else {
                value = el.value;
            }
            if (trim(value)) {
                if (usersetting[name]) {
                    if (value) usersetting[name] = value + ',' + usersetting[name];
                } else {
                    usersetting[name] = value;
                }
            }
        }
    }

    for (var k in usersetting) {
        name = TMPL_NAME + '_' + k;
        value = usersetting[k];
        createCookie(name, value, 365);
    }

    if (window.location.href.indexOf('?') > -1) window.location.href = window.location.href.substr(0, window.location.href.indexOf('?'));
    else window.location.reload();
}

/* OnePage Feature */
jQuery(document).ready(function ($) {
    $('<div class="symbol-line"></div>').prependTo('.cmspage4.cms-index-index .group_2_wrapper, .cmspage3.cms-index-index .group_6_wrapper');
    $('<div style="width: 407px; margin: 5px auto 0; overflow: hidden;" class="symbol-block"><div class="symbol-line"></div></div>').appendTo('.cmspage4.cms-index-index #deals .deal-pretext,.cmspage4.cms-index-index #our-menu .pre-text ');
    $('.cms-home.cmspage1 .sm_megamenu_wrapper_horizontal_menu li.sm_megamenu_lv1:first-child').addClass('active');

    $(window).load(function(event) {
        Home();
    });

    function Home() {
        if (window.location.href.indexOf('?') > -1) {

            window.location.hash = '#' + window.location.search.substring(1);
            $('html,body').animate({scrollTop: $(window).scrollTop() - 325}, 1000);
            window.location.hash = '';
            history.pushState('', document.title, window.location.pathname);

        }

        $('.cmspage1 .sm_megamenu_wrapper_horizontal_menu ul li > a').on('click', function(e) {
            if($(this).parents().find('body').hasClass('cms-home')) {
                $('html, body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                return false;
            }
            else {
                var add_test = $(this).attr('href').substring(1);
                window.location.href = homepage_add + '?' + add_test;

            }

        });

    }

});
jQuery(function($){

    $(window).scroll(function(event) {
        Scroll();
    });



    $(window).on('load resize change', function(event){
        Move();
    });

    function Move() {
        if($(window).width() < 992) {
            $('.header-style-1 .header-bottom-right .minicart-header, .header-style-1 .header-bottom-right .block-search').prependTo($('.header-style-1 .header-bottom-right .yt-menu .block-right-mobile'));
            $('.cms-index-index.cmspage4 .col-main div[style*="z-index:9999; clear: both;"]').prependTo($('.cms-index-index.cmspage4 .col-left.sidebar'));
        }
        else {
            $('.header-style-1 .header-bottom-right .minicart-header, .header-style-1 .header-bottom-right .block-search').prependTo($('.header-style-1 .header-bottom-right'));
            $('.cms-index-index.cmspage4 .col-left.sidebar div[style*="z-index:9999; clear: both;"] ').prependTo($('.cms-index-index.cmspage4 .col-main'));
        }
    }




    function Scroll() {
        var contentTop      =   [];
        var contentBottom   =   [] ;
        var winTop      =   $(window).scrollTop();
        var rangeTop    =   200;
        var rangeBottom =   500;
        $('.cms-home.cmspage1 .sm_megamenu_wrapper_horizontal_menu').find('.sm_megamenu_lv1 > a').each(function(){
            contentTop.push( $( $(this).attr('href') ).offset().top);
            contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height());
        })
        $.each( contentTop, function(i){
            if ( winTop > contentTop[i] - rangeTop ){
                $('.cms-home.cmspage1 .sm_megamenu_wrapper_horizontal_menu li.sm_megamenu_lv1')
                    .removeClass('active')
                    .eq(i).addClass('active');
            }
        })
    };


});