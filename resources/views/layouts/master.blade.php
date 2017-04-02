<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">


        <title>{{ isset($title) ? ($title . ' | Invoice Ninja') : ('Invoice Ninja | ' . trans('texts.app_title')) }}</title>
        <meta name="description" content="{{ isset($description) ? $description : trans('texts.app_description') }}"/>
        <link href="{{ asset('favicon-v2.png') }}" rel="shortcut icon" type="image/png">

        <meta property="og:site_name" content="Invoice Ninja"/>
        <meta property="og:url" content=""/>
        <meta property="og:title" content="Invoice Ninja"/>
        <meta property="og:image" content="/images/round_logo.png"/>
        <meta property="og:description" content="Simple, Intuitive Invoicing."/>

        <!-- http://realfavicongenerator.net -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ url('favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ url('favicon-16x16.png') }}" sizes="16x16">
        <link rel="manifest" href="{{ url('manifest.json') }}">
        <link rel="mask-icon" href="{{ url('safari-pinned-tab.svg') }}" color="#3bc65c">
        <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
        <meta name="apple-mobile-web-app-title" content="Invoice Ninja">
        <meta name="application-name" content="Invoice Ninja">
        <meta name="theme-color" content="#ffffff">


    <!-- http://stackoverflow.com/questions/19012698/browser-cache-issues-in-laravel-4-application -->
    <meta http-equiv="cache-control" content="max-age=0"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="cache-control" content="no-store"/>
    <meta http-equiv="cache-control" content="must-revalidate"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-config" content="none"/>
    <link rel="canonical" href=""/>

    <script src="{{ asset('built.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        // http://t4t5.github.io/sweetalert/
        function sweetConfirm(success, text, title) {
            title = title || "{!! trans("texts.are_you_sure") !!}";
            swal({
                //type: "warning",
                //confirmButtonColor: "#DD6B55",
                title: title,
                text: text,
                cancelButtonText: "{!! trans("texts.no") !!}",
                confirmButtonText: "{!! trans("texts.yes") !!}",
                showCancelButton: true,
                closeOnConfirm: false,
                allowOutsideClick: true,
            }).then(function() {
                success();
                swal.close();
            });
        }

        /* Set the defaults for DataTables initialisation */
        $.extend(true, $.fn.dataTable.defaults, {
            "bSortClasses": false,
            "sDom": "t<'row-fluid'<'span6 dt-left'i><'span6 dt-right'p>>l",
            "sPaginationType": "bootstrap",
            "bInfo": true,
            "oLanguage": {
                'sEmptyTable': "{{ trans('texts.empty_table') }}",
                'sLengthMenu': '_MENU_ {{ trans('texts.rows') }}',
                'sSearch': ''
            }
        });

        function fbq() {
            // do nothing
        };


                window._fbq = window._fbq || [];

    </script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    @yield('head')

</head>

<body class="body">


@yield('body')

<script type="text/javascript">


</script>

</body>

</html>
