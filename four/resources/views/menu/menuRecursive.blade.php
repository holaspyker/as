<?php

$cat = \App\Http\Controllers\CategoriesController::getChildrens($data, $child);

?>

@foreach( $cat as  $item)
    @php $children = \App\Http\Controllers\CategoriesController::getChildrens($data , $item->id);

    @endphp
    @if(!empty($children))
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="true"> <span class="nav-label"><?=$item->name?></span></a>
        <ul class="dropdown-submenu">
                @include('menu.menuRecursive', array('data'=>$data, 'child' => $item->id))
            </ul>

    @else
        <li class="active"><a href="#"><?=$item->name?></a></li>
    @endif
@endforeach


{{--<?php--}}
{{--<?php--}}

{{--echo " hijo .$child";--}}


{{--$cat = \App\Http\Controllers\CategoriesController::getChildrens($data, $child);--}}

{{--?>--}}

{{--@foreach( $cat as  $item)--}}
{{--    @php $children = \App\Http\Controllers\CategoriesController::getChildrens($data , $item->id);--}}
{{--    echo $item->id--}}

{{--    @endphp--}}

{{--    @if(!empty($children)):--}}

{{--    <ul class="dropdown-menu">--}}
{{--     {{ $item->name}}--}}
{{--    </ul>--}}
{{--    <ul class="dropdown-menu">--}}
{{--        @php  echo  " hrrijo . $item->name";@endphp--}}
{{--        @include('menu.menuRecursive', array('data'=>$data, 'child' => $item->id))--}}
{{--        --}}{{--            @endforeach--}}
{{--    </ul>--}}
{{--    @else:--}}
{{--    <li class="active"><a href="#"><?=$item->name?></a></li>--}}
{{--    @endif--}}
{{--@endforeach--}}
