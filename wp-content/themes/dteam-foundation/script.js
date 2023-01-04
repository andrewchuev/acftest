

jQuery(document).ready(function ($) {

    new WOW().init();

    /**
     * Back to top button
     */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 500, 'easeInOutExpo');
        return false;
    });


    /**
     * Copy to clipboard
     */
    $('.far.fa-copy').click(function () {
        let target = $(this).data('target');

        if (target === '') {
            return;
        }

        $('body').append("<input type='text' id='copied-value' value='" + target + "'>");
        $('#copied-value').select();

        try {
            document.execCommand("copy");
        } catch (e) {
            console.warn(e);
        }

        $('#copied-value').remove();
    });


    // Theme switcher
    let dteamTheme = Cookies.get('dteam-theme');


    if (!dteamTheme) {
        dteamTheme = 'dark-theme';
    }

    if (dteamTheme === 'light-theme') {
        setLightTheme();
    } else {
        setDarkTheme();
    }

    $('#theme-switcher').on('click', function (e) {
        e.preventDefault();
        let dteamTheme = Cookies.get('dteam-theme');
        if (dteamTheme === 'dark-theme') {
            setLightTheme();
        } else {
            setDarkTheme();
        }
        //$('.navbar').removeClass('navbar-light bg-light');
        //$('.navbar').addClass('navbar-dark bg-dark');
    });


    function setDarkTheme() {
        console.log('setDarkTheme');
        Cookies.set('dteam-theme', 'dark-theme', {expires: 7, path: '/', 'SameSite': 'Strict' });
        $('#theme-switcher').find('i').removeClass('fa-moon').addClass('fa-sun');

        $('.text-dark').removeClass('text-dark').addClass('text-light');
        $('.border-dark').removeClass('border-dark').addClass('border-light');
        $('.bg-light').removeClass('bg-light').addClass('bg-dark');
        $('.btn-ligth').removeClass('btn-light').addClass('btn-dark');
        $('.navbar').removeClass('navbar-light').addClass('navbar-dark');
        $('.navbar').removeClass('bg-light').addClass('bg-dark');
        $('.navbar img').prop('src', '/wp-content/themes/dteam-foundation/assets/img/logo-dark.webp');
    }

    function setLightTheme() {
        console.log('setLightTheme');
        Cookies.set('dteam-theme', 'light-theme', {expires: 7, path: '/', 'SameSite': 'Strict'});
        $('#theme-switcher').find('i').removeClass('fa-sun').addClass('fa-moon');

        $('.text-light').removeClass('text-light').addClass('text-dark');
        $('.border-light').removeClass('text-light').addClass('border-dark');
        $('.bg-dark').removeClass('bg-dark').addClass('bg-light');
        $('.btn-dark').removeClass('btn-dark').addClass('btn-light');
        $('.navbar').removeClass('navbar-dark').addClass('navbar-light');
        $('.navbar').removeClass('bg-dark').addClass('bg-light');
        $('.navbar img').prop('src', '/wp-content/themes/dteam-foundation/assets/img/logo-light.webp');
    }

});
