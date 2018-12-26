<?php

Breadcrumbs::register('admincp.access.permission.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.access.permissions.management'), route('admincp.access.permission.index'));
});

Breadcrumbs::register('admincp.access.permission.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.access.permission.index');
    $breadcrumbs->push(trans('menus.backend.access.permissions.create'), route('admincp.access.permission.create'));
});

Breadcrumbs::register('admincp.access.permission.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.access.permission.index');
    $breadcrumbs->push(trans('menus.backend.access.permissions.edit'), route('admincp.access.permission.edit', $id));
});
