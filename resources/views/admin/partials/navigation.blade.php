<h2 class="hidden">Navigation</h2>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel hide">
            <div class="pull-left image">
                <img src="{{ profile_image() }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{!! user()->firstname !!}</p>
                <p>{!! user()->lastname !!}</p>
            </div>
        </div>

        <nav>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">NAVIGATION</li>
                @include ('admin.partials.navigation_list', ['collection' => $navigation['root']])

                <li class="">
                <a href="/app/admin/eventos">
            <i class="fa fa-fw fa-newspaper-o"></i>
            <span>Eventos</span>

                            <i class="fa fa-angle-left pull-right"></i>
                    </a>
            </li>

            </ul>
        </nav>
    </section>
</aside>