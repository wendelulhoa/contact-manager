<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <link rel="stylesheet" href="{{ mix('/assets/css/plugins/style.css') }}" />
    <meta content="alfasoft" name="description">
    <meta content="wu developers" name="author">

    <link rel="icon" type="image/x-icon" href="{{ mix('images/logo.png') }}" />

    <title>{{ $titlePage ?? 'alfasoft' }}</title>

    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="author" content="Wu dev" />

    <!-- [Font] Family -->
    <link rel="stylesheet" href="{{ mix('/assets/fonts/inter/inter.css') }}" id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ mix('/assets/fonts/tabler-icons.min.css') }}" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ mix('/assets/fonts/feather.css') }}" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ mix('/assets/fonts/fontawesome.css') }}" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ mix('/assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ mix('/assets/css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{ mix('/assets/css/style-preset.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.0/sweetalert2.min.css" integrity="sha512-OWGg8FcHstyYFwtjfkiCoYHW2hG3PDWwdtczPAPUcETobBJOVCouKig8rqED0NMLcT9GtE4jw6IT1CSrwY87uw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.4/tagify.css">
    <link rel="stylesheet" href="{{ mix('/assets/css/plugins/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ mix('/assets/css/plugins/datepicker-bs5.min.css') }}" />
    @stack('style-css')

    <style>
        #datetimepicker {
            width: 75px;
            font-size: 16px;
            padding: 5px;
            text-align: right;
            cursor: pointer;
        }
        
        .datepicker-dropdown {
            color: black !important;
        }

        .avatar-list {
            list-style: none;
            display: flex;
        }

        .avatar-list img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 1px solid #eee;
        }

        .avatar-list li {
            margin-left: -28px;
            transition: translate .3s;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fffc;
        }
        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
    </style>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="color-header" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="page-loader">
        <div class="bar">
        </div>
    </div>
    <div class="preloader">
        <div class="loading">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ mix('/images/dual-loading.gif') }}" width="100">
                </div>
                <div class="col-12 text-center">
                    <h1 id="preloader-title"></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    @include('template.components.sidebar-menu')
    <!-- [ Sidebar Menu ] end -->


    <!-- [ Header Topbar ] start -->
    @include('template.components.header-menu')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                @foreach (Breadcrumbs::generate() as $breadcrumb)
                                    @if (!is_null($breadcrumb->url) && !$loop->last)
                                        <li class="breadcrumb-item"><a
                                                href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                                        </li>
                                    @else
                                        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">{{ $titlePage ?? '' }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                @yield('content')
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    @stack('modal')
    
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0">{{ env('APP_NAME') }}</p>
                </div>
                <div class="col-auto my-1">
                    {{-- <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="../index.html">Home</a></li>
                        <li class="list-inline-item"><a href="https://phoenixcoded.gitbook.io/able-pro/"
                                target="_blank">Documentation</a></li>
                        <li class="list-inline-item"><a href="https://phoenixcoded.authordesk.app/"
                                target="_blank">Support</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </footer>

    <!-- Required Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ mix('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ mix('/assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ mix('/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ mix('/assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ mix('/assets/js/pcoded.js') }}"></script>
    <script src="{{ mix('/assets/js/plugins/feather.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.0/sweetalert2.min.js" integrity="sha512-Wi5Ms24b10EBwWI9JxF03xaAXdwg9nF51qFUDND/Vhibyqbelri3QqLL+cXCgNYGEgokr+GA2zaoYaypaSDHLg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.4/tagify.min.js"></script>

    {{-- Datatable --}}
    <script src="{{ mix('/assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ mix('/assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <script>
        localStorage.setItem('layout', 'color-header');
        layout_change('false');
        layout_theme_contrast_change('false');
        change_box_container('false');
        layout_caption_change('true');
        layout_rtl_change('false');
        preset_change('preset-1');
        main_layout_change('color-header');
    </script>

    <!-- [Page Specific JS] start -->
    <script src="{{ mix('/assets/js/plugins/simple-datatables.js') }}"></script>

    <!-- [Page Specific JS] end -->

    {{-- @include('template.components.page-specific') --}}
    @include('template.global-js')
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    @stack('script-js')
    <script src="{{ mix('/assets/js/plugins/datepicker-full.min.js') }}"></script>
</body>
<!-- [Body] end -->

</html>
@php
    session()->forget('urlCreate');
    session()->forget('successMsg');
    session()->forget('warningMsg');
@endphp
