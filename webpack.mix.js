const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.scripts([
		'resources/vendor/jquery/jquery.min.js',
		'resources/vendor/jquery.appear/jquery.appear.min.js',
		'resources/vendor/jquery.easing/jquery.easing.min.js',
		'resources/vendor/jquery-cookie/jquery-cookie.min.js',
		'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
		'resources/vendor/common/common.min.js',
		'resources/vendor/jquery.validation/jquery.validation.min.js',
		'resources/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js',
		'resources/vendor/jquery.gmap/jquery.gmap.min.js',
		'resources/vendor/jquery.lazyload/jquery.lazyload.min.js',
		'resources/vendor/isotope/jquery.isotope.min.js',
		'resources/vendor/owl.carousel/owl.carousel.min.js',
		'resources/vendor/magnific-popup/jquery.magnific-popup.min.js',
		'resources/vendor/vide/vide.min.js',
		'resources/vendor/vivus/vivus.min.js',
		'resources/js/theme.js',
		'resources/vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
		'resources/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',
		'resources/vendor/nouislider/nouislider.min.js',
		'resources/js/functions.js',
		'resources/js/theme.init.js',
], 'public/js/app.js');





mix.styles([
	'resources/vendor/bootstrap/css/bootstrap.min.css',
	'resources/vendor/font-awesome/css/fontawesome-all.min.css',
	'resources/vendor/animate/animate.min.css',
	'resources/vendor/linear-icons/css/linear-icons.min.css',
	'resources/vendor/nouislider/nouislider.min.css',
	'resources/vendor/owl.carousel/assets/owl.carousel.min.css',
	'resources/vendor/owl.carousel/assets/owl.theme.default.min.css',

	'resources/css/default.css',

], 'public/css/vendor.css');

mix.sass('resources/sass/theme.scss', 'public/css/app.css');
mix.sass('resources/sass/theme-elements.scss', 'public/css/theme.css');