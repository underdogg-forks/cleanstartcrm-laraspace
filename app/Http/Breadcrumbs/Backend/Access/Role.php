<?php

Breadcrumbs::register('admincp.access.role.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.access.roles.management'), route('admincp.access.role.index'));
});

Breadcrumbs::register('admincp.access.role.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.access.role.index');
    $breadcrumbs->push(trans('menus.backend.access.roles.create'), route('admincp.access.role.create'));
});

Breadcrumbs::register('admincp.access.role.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.access.role.index');
    $breadcrumbs->push(trans('menus.backend.access.roles.edit'), route('admincp.access.role.edit', $id));
});
