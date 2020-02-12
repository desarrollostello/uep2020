<aside class="main-sidebar sidebar-dark-primary elevation-4 collapse-left" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">Proyectos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <p>
                            <i class="fas fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                    

                </li>
                <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                    <a class="nav-link nav-dropdown-toggle">
                        <i class="fas fa-users">

                        </i>
                        <p>
                            <span>Modelos Secundarios</span>
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    	@can('banco_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.bank.index") }}" class="nav-link {{ request()->is('admin/banks') || request()->is('admin/banks/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.banco.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan
		                @can('departamento_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.departament.index") }}" class="nav-link {{ request()->is('admin/departaments') || request()->is('admin/departaments/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.departamento.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('localidad_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.location.index") }}" class="nav-link {{ request()->is('admin/locations') || request()->is('admin/locations/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.localidad.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('garantia_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.guarantie.index") }}" class="nav-link {{ request()->is('admin/guaranties') || request()->is('admin/guaranties/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.garantia.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('estadoCivil_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.civilState.index") }}" class="nav-link {{ request()->is('admin/civilState') || request()->is('admin/civilState/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.estadoCivil.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('figuraLegal_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.legalFigure.index") }}" class="nav-link {{ request()->is('admin/legalFigure') || request()->is('admin/legalFigure/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.figuraLegal.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('destinoCredito_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.destinationCredit.index") }}" class="nav-link {{ request()->is('admin/destinationCredit') || request()->is('admin/destinationCredit/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.destinoCredito.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('lineasCredito_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.creditLine.index") }}" class="nav-link {{ request()->is('admin/creditLine') || request()->is('admin/creditLine/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.lineasCredito.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('periodicidad_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.periodicity.index") }}" class="nav-link {{ request()->is('admin/periodicity') || request()->is('admin/periodicity/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.periodicidad.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('estado_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.state.index") }}" class="nav-link {{ request()->is('admin/state') || request()->is('admin/state/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.estado.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('sector_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.sector.index") }}" class="nav-link {{ request()->is('admin/sector') || request()->is('admin/sector/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.sector.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('zona_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.zone.index") }}" class="nav-link {{ request()->is('admin/zone') || request()->is('admin/zone/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.zona.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('alerta_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.alert.index") }}" class="nav-link {{ request()->is('admin/alert') || request()->is('admin/alert/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.alerta.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan

		                @can('provincia_access')
		                    <li class="nav-item">
		                        <a href="{{ route("admin.province.index") }}" class="nav-link {{ request()->is('admin/province') || request()->is('admin/province/*') ? 'active' : '' }}">
		                            <i class="fas fa-cogs">

		                            </i>
		                            <p>
		                                <span>{{ trans('uep.province.title') }}</span>
		                            </p>
		                        </a>
		                    </li>
		                @endcan
                	</ul>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle">
                            <i class="fas fa-users">

                            </i>
                            <p>
                                <span>{{ trans('global.userManagement.title') }}</span>
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                        <i class="fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.permission.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                        <i class="fas fa-briefcase">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.role.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                        <i class="fas fa-user">

                                        </i>
                                        <p>
                                            <span>{{ trans('global.user.title') }}</span>
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
               
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-sign-out-alt">

                            </i>
                            <span>{{ trans('uep.logout') }}</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>