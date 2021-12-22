<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ConcoreAcademics</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('backend/js/scripts.bundle.js')}}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{asset('backend/js/custom/widgets.js')}}"></script>
	<script src="{{asset('backend/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{asset('backend/js/custom/modals/create-app.js')}}"></script>
	<script src="{{asset('backend/js/custom/modals/upgrade-plan.js')}}"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
    </body>
</html>
