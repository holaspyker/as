<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>



<ul class="nav navbar-nav">
    <li class="dropdown">
        <ul class="dropdown-menu">
    @include('menu.menuRecursive', array('data'=>$data, 'child' => 0))
        </ul>
    </li>
</ul>




















{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-2 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">--}}

{{--            @php var_dump(count($data))@endphp--}}
{{--            @foreach( $data as  $item)--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline"><?=$item->name?></span></a>--}}
{{--                <div class="subnav">--}}
{{--                    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>--}}
{{--                    <div class="subnav-content">--}}
{{--                        <a href="#company">Company</a>--}}
{{--                        <a href="#team">Team</a>--}}
{{--                        <a href="#careers">Careers</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
















{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-2 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">--}}
{{--            <ul class="nav flex-column flex-nowrap overflow-hidden">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Overview</span></a>--}}
{{--                </li>--}}

{{--                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>--}}
{{--                <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="col pt-2">--}}
{{--            <h2>--}}
{{--                <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> Content </h2>--}}
{{--            <h6 class="hidden-sm-down">Shrink page width to see sidebar collapse</h6>--}}
{{--            <p>Codeply editor wolf moon retro jean shorts chambray sustainable roof party. Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</body>
</html>
