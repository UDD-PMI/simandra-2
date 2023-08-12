<head>
  <base href="./"/>
  <title>BloodConnect &mdash; 
  @if (empty($data['title']))
      404
  @else
    {{$data['title']}}
  @endif
  </title>
  <meta charset="utf-8" />
  <meta name="description" content="Dashboard for admin BloodConnect" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="BloodConnect &mdash; {{$data['title']}}" />
  <meta property="og:url" content="{{url()->full()}}" />
  <meta property="og:site_name" content="BloodConnect &mdash; {{$data['title']}}" />
  <meta property="og:image" content="{{ asset('assets/media/banner.png') }}" />
  <link rel="shortcut icon" href="{{ asset('assets/media/logo.png') }}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>