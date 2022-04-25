<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            h2,
            h5,
            .h2,
            .h5 {
                font-family: inherit;
                font-weight: 600;
                line-height: 1.5;
                margin-bottom: .5rem;
                color: #32325d;
            }

            h5,
            .h5 {
                font-size: .8125rem;
            }

            @media (min-width: 992px) {

                .col-lg-6 {
                    max-width: 50%;
                    flex: 0 0 50%;
                }
            }

            @media (min-width: 1200px) {

                .col-xl-3 {
                    max-width: 25%;
                    flex: 0 0 25%;
                }

                .col-xl-6 {
                    max-width: 50%;
                    flex: 0 0 50%;
                }
            }


            .bg-danger {
                background-color: #f5365c !important;
            }



            @media (min-width: 1200px) {

                .justify-content-xl-between {
                    justify-content: space-between !important;
                }
            }


            .pt-5 {
                padding-top: 3rem !important;
            }

            .pb-8 {
                padding-bottom: 8rem !important;
            }

            @media (min-width: 768px) {

                .pt-md-8 {
                    padding-top: 8rem !important;
                }
            }

            @media (min-width: 1200px) {

                .mb-xl-0 {
                    margin-bottom: 0 !important;
                }
            }




            .font-weight-bold {
                font-weight: 600 !important;
            }


            a.text-success:hover,
            a.text-success:focus {
                color: #24a46d !important;
            }

            .text-warning {
                color: #fb6340 !important;
            }

            a.text-warning:hover,
            a.text-warning:focus {
                color: #fa3a0e !important;
            }

            .text-danger {
                color: #f5365c !important;
            }

            a.text-danger:hover,
            a.text-danger:focus {
                color: #ec0c38 !important;
            }

            .text-white {
                color: #fff !important;
            }

            a.text-white:hover,
            a.text-white:focus {
                color: #e6e6e6 !important;
            }

            .text-muted {
                color: #8898aa !important;
            }

            @media print {
                *,
                *::before,
                *::after {
                    box-shadow: none !important;
                    text-shadow: none !important;
                }

                a:not(.btn) {
                    text-decoration: underline;
                }

                p,
                h2 {
                    orphans: 3;
                    widows: 3;
                }

                h2 {
                    page-break-after: avoid;
                }

            @ page {
                  size: a3;
              }

                body {
                    min-width: 992px !important;
                }
            }

            figcaption,
            main {
                display: block;
            }

            main {
                overflow: hidden;
            }

            .bg-yellow {
                background-color: #ffd600 !important;
            }






            .icon {
                width: 3rem;
                height: 3rem;
            }

            .icon i {
                font-size: 2.25rem;
            }

            .icon-shape {
                display: inline-flex;
                padding: 12px;
                text-align: center;
                border-radius: 50%;
                align-items: center;
                justify-content: center;
            }



        </style>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
