<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>
<li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>
<li><a href="{{ url('admin/review') }}"><i class="fa fa-comment"></i>Отзывы</a></li>
<li><a href="{{ url('admin/mainslider') }}"><i class="fa fa-chevron-circle-right"></i>Главный слайдер</a></li>
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Магазин</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url('admin/shopslider') }}">Слайдер</a></li>
        <li><a href="{{ url('admin/product') }}"><i class="fa fa-newspaper-o"></i> <span>Продукты</span></a></li>
        <li><a href="{{ url('admin/productcategory') }}"><i class="fa fa-list"></i> <span>Категории</span></a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>Блог</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Записи</span></a></li>
        <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Категории</span></a></li>
{{--        <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>--}}
    </ul>
</li>