<header class="main-header">

    <a href="{{ route('frontend.index') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            {{ substr(app_name(), 0, 1) }}
        </span>

        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            {{-- @php
            $settings = settings();
            @endphp
            @if($settings->logo)
            <img height="48" width="226" class="navbar-brand" src="{{route('frontend.index')}}/img/site_logo/{{$settings->logo}}">
            @else --}}
            {{ app_name() }}
            {{-- @endif --}}
        </span>
    </a>
    <nav class="topbar-nav" role="navigation">

        <div class="pull-left">

            <ul class="metismenu" id="menu1">
                <li>
                    <a class="has-arrow" href="#">
                        <span class="fa fa-fw fa-github fa-lg"></span>
                        metisMenu
                    </a>
                    <ul>
                        <li>
                            <a href="https://github.com/onokumus/metisMenu">
                                <span class="fa fa-fw fa-code-fork"></span> Fork
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/onokumus/metisMenu">
                                <span class="fa fa-fw fa-star"></span> Star
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/onokumus/metisMenu/issues">
                                <span class="fa fa-fw fa-exclamation-triangle"></span> Issues
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">Menu 0</a>
                    <ul>
                        <li><a href="#">item 0.1</a></li>
                        <li><a href="#">item 0.2</a></li>
                        <li><a href="http://onokumus.com">onokumus</a></li>
                        <li><a href="#">item 0.4</a></li>
                    </ul>
                </li>
                <li id="removable">
                    <a class="has-arrow" href="#" aria-expanded="false">Menu 1</a>
                    <ul>
                        <li><a href="#">item 1.1</a></li>
                        <li><a href="#">item 1.2</a></li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                            <ul>
                                <li><a href="#">item 1.3.1</a></li>
                                <li><a href="#">item 1.3.2</a></li>
                                <li><a href="#">item 1.3.3</a></li>
                                <li><a href="#">item 1.3.4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">item 1.4</a></li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">Menu 1.5</a>
                            <ul>
                                <li><a href="#">item 1.5.1</a></li>
                                <li><a href="#">item 1.5.2</a></li>
                                <li><a href="#">item 1.5.3</a></li>
                                <li><a href="#">item 1.5.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">Menu 2</a>
                    <ul>
                        <li><a href="#">item 2.1</a></li>
                        <li><a href="#">item 2.2</a></li>
                        <li><a href="#">item 2.3</a></li>
                        <li><a href="#">item 2.4</a></li>
                    </ul>
                </li>
                <li>temp</li>
            </ul>
        </div>

        <div class="navbar-custom-menu pull-right">
            <ul class="nav navbar-nav">

                @if (config('locale.status') && count(config('locale.languages')) > 1)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-language"></i> {{ trans('menus.language-picker.language') }} <span class="caret"></span>
                    </a>
                    @include('includes.partials.lang')
                </li>
                @endif

                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-info">0</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">{{ trans_choice('strings.backend.general.you_have.messages', 0, ['number' =>
                            0]) }}</li>
                        <li class="footer">
                            {{ link_to('#', trans('strings.backend.general.see_all.messages')) }}
                        </li>
                    </ul>
                </li><!-- /.messages-menu -->

                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-info notification-counter"></span>
                    </a>

                    <ul class="dropdown-menu notification-menu-container">
                    </ul>
                </li><!-- /.notifications-menu -->

                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-info">0</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="header">{{ trans_choice('strings.backend.general.you_have.tasks', 0, ['number' =>
                            0]) }}</li>
                        <li class="footer">
                            {{ link_to('#', trans('strings.backend.general.see_all.tasks')) }}
                        </li>
                    </ul>
                </li><!-- /.tasks-menu -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ access()->user()->picture }}" class="user-image" alt="User Avatar" />
                        <span class="hidden-xs">{{ access()->user()->first_name }}</span>
                        <div class="clearfix"></div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="user-header">
                            <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Avatar" />
                            <p>
                                {{-- access()->user()->name }} - {{ implode(", ",
                                access()->user()->roles->lists('name')->toArray()) --}}
                                <small>{{ trans('strings.backend.general.member_since') }} {{
                                    access()->user()->created_at->format("m/d/Y") }}</small>
                            </p>
                        </li>

                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                                {{ link_to_route("admincp.profile.edit", 'Edit Profile') }}
                            </div>
                        </li>
                        <li class="user-body border-left">
                            <div class="col-xs-12 text-center">
                                {{ link_to_route('admincp.access.user.change-password','Change Password',
                                access()->user()->id) }}
                            </div>
                            {{-- <div class="col-xs-4 text-center">
                                {{ link_to_route('dashboard', 'Link') }}
                            </div> --}}
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{!! route('frontend.index') !!}" class="btn btn-default btn-flat">
                                    <i class="fa fa-home"></i>
                                    {{ trans('navs.general.home') }}
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href="{!! route('frontend.auth.logout') !!}" class="btn btn-danger btn-flat">
                                    <i class="fa fa-sign-out"></i>
                                    {{ trans('navs.general.logout') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-toggle" data-toggle="control-sidebar" role="button">
                        <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-custom-menu -->
    </nav>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
        </a>
    </nav>
</header>