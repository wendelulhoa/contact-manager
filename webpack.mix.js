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

// configs able pro
mix.copy('resources/assets/css/plugins/style.css', 'public/assets/css/plugins/style.css')
   .copy('resources/assets/fonts/inter/inter.css', 'public/assets/fonts/inter/inter.css')
   .copy('resources/assets/fonts/tabler-icons.min.css', 'public/assets/fonts/tabler-icons.min.css')
   .copy('resources/assets/fonts/tabler-icons.min.css', 'public/assets/fonts/tabler-icons.min.css')
   .copy('resources/assets/fonts/feather.css', 'public/assets/fonts/feather.css')
   .copy('resources/assets/fonts/fontawesome.css', 'public/assets/fonts/fontawesome.css')
   .copy('resources/assets/fonts/material.css', 'public/assets/fonts/material.css')
   .copy('resources/assets/css/style.css', 'public/assets/css/style.css')
   .copy('resources/assets/css/style-preset.css', 'public/assets/css/style-preset.css')
   .copy('resources/assets/js/plugins/popper.min.js', 'public/assets/js/plugins/popper.min.js')
   .copy('resources/assets/images/user/avatar-1.jpg', 'public/assets/images/user/avatar-1.jpg')
   .copy('resources/assets/images/logo-dark.svg', 'public/assets/images/logo-dark.svg')
   .copy('resources/assets/images/user/avatar-2.jpg', 'public/assets/images/user/avatar-2.jpg')
   .copy('resources/assets/js/plugins/simplebar.min.js', 'public/assets/js/plugins/simplebar.min.js')
   .copy('resources/assets/js/plugins/bootstrap.min.js', 'public/assets/js/plugins/bootstrap.min.js')
   .copy('resources/assets/js/fonts/custom-font.js', 'public/assets/js/fonts/custom-font.js')
   .copy('resources/assets/js/pcoded.js', 'public/assets/js/pcoded.js')
   .copy('resources/assets/js/plugins/feather.min.js', 'public/assets/js/plugins/feather.min.js')
   .copy('resources/assets/images/user/avatar-3.jpg', 'public/assets/images/user/avatar-3.jpg')
   .copy('resources/assets/images/user/avatar-4.jpg', 'public/assets/images/user/avatar-4.jpg')
   .copy('resources/assets/images/user/avatar-5.jpg', 'public/assets/images/user/avatar-5.jpg')
   .copy('resources/assets/images/layout/img-announcement-1.png', 'public/assets/images/layout/img-announcement-1.png')
   .copy('resources/assets/images/layout/img-announcement-2.png', 'public/assets/images/layout/img-announcement-2.png')
   .copy('resources/assets/images/layout/img-announcement-3.png', 'public/assets/images/layout/img-announcement-3.png')
   .copy('resources/assets/images/layout/img-announcement-4.png', 'public/assets/images/layout/img-announcement-4.png')
   .copy('resources/assets/images/user/avatar-6.jpg', 'public/assets/images/user/avatar-6.jpg')
   .copy('resources/assets/images/user/avatar-7.jpg', 'public/assets/images/user/avatar-7.jpg')
   .copy('resources/assets/images/user/avatar-8.jpg', 'public/assets/images/user/avatar-8.jpg')
   .copy('resources/assets/images/user/avatar-9.jpg', 'public/assets/images/user/avatar-9.jpg')
   .copy('resources/assets/images/customizer/caption-on.svg', 'public/assets/images/customizer/caption-on.svg')
   .copy('resources/assets/images/customizer/horizontal.svg', 'public/assets/images/customizer/horizontal.svg')
   .copy('resources/assets/js/plugins/simple-datatables.js', 'public/assets/js/plugins/simple-datatables.js')
   .copy('resources/assets/images/customizer/color-header.svg', 'public/assets/images/customizer/color-header.svg')
   .copy('resources/assets/images/customizer/compact.svg', 'public/assets/images/customizer/compact.svg')
   .copy('resources/assets/images/customizer/tab.svg', 'public/assets/images/customizer/tab.svg')
   .copy('resources/assets/images/customizer/caption-off.svg', 'public/assets/images/customizer/caption-off.svg')
   .copy('resources/assets/fonts/phosphor/duotone/style.css', 'public/assets/fonts/phosphor/duotone/style.css')
   .copy('resources/assets/images/customizer/ltr.svg', 'public/assets/images/customizer/ltr.svg')
   .copy('resources/assets/images/customizer/rtl.svg', 'public/assets/images/customizer/rtl.svg')
   .copy('resources/assets/images/customizer/full.svg', 'public/assets/images/customizer/full.svg')
   .copy('resources/assets/images/customizer/fixed.svg', 'public/assets/images/customizer/fixed.svg')
   .copy('resources/assets/images/layout/img-profile-card.jpg', 'public/assets/images/layout/img-profile-card.jpg')
   .copy('resources/assets/fonts/tabler/tabler-icons.woff2', 'public/assets/fonts/tabler/tabler-icons.woff2')
   .copy('resources/assets/fonts/inter/Inter-roman.var.woff2', 'public/assets/fonts/inter/Inter-roman.var.woff2')
   .copy('resources/assets/fonts/inter/Inter-italic.var.woff2', 'public/assets/fonts/inter/Inter-italic.var.woff2')
   .copy('resources/assets/fonts/phosphor/duotone/Phosphor-Duotone.ttf', 'public/assets/fonts/phosphor/duotone/Phosphor-Duotone.ttf')
   .copy('resources/assets/fonts/phosphor/duotone/Phosphor-Duotone.woff', 'public/assets/fonts/phosphor/duotone/Phosphor-Duotone.woff')
   .copy('resources/assets/images/favicon.svg', 'public/assets/images/favicon.svg')
   .copy('resources/assets/images/logo-white.svg', 'public/assets/images/logo-white.svg')
   .copy('resources/assets/js/plugins/sweetalert2.all.min.js', 'public/assets/js/plugins/sweetalert2.all.min.js')
   .copy('resources/assets/js/plugins/choices.min.js', 'public/assets/js/plugins/choices.min.js')
   .copy('resources/assets/css/plugins/dataTables.bootstrap5.min.css', 'public/assets/css/plugins/dataTables.bootstrap5.min.css')
   .copy('resources/assets/js/plugins/dataTables.min.js', 'public/assets/js/plugins/dataTables.min.js')
   .copy('resources/assets/js/plugins/dataTables.bootstrap5.min.js', 'public/assets/js/plugins/dataTables.bootstrap5.min.js')
   .copy('resources/images/logo.png', 'public/images/logo.png')
   .copy('resources/images/user.png', 'public/images/user.png')
   .copy('resources/images/dual-loading.gif', 'public/images/dual-loading.gif')
   .copy('resources/assets/js/plugins/datepicker-full.min.js', 'public/assets/js/plugins/datepicker-full.min.js')
   .copy('resources/assets/css/plugins/datepicker-bs5.min.css', 'public/assets/css/plugins/datepicker-bs5.min.css')
   .copy('resources/assets/js/plugins/apexcharts.min.js', 'public/assets/js/plugins/apexcharts.min.js')







