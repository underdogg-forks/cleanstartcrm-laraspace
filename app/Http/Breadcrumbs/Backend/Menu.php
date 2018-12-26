<?php

Breadcrumbs::register('admincp.menus.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.menus.management'), route('admincp.menus.index'));
});

Breadcrumbs::register('admincp.menus.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.menus.index');
    $breadcrumbs->push(trans('menus.backend.menus.create'), route('admincp.menus.create'));
});

Breadcrumbs::register('admincp.menus.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.menus.index');
    $breadcrumbs->push(trans('menus.backend.menus.edit'), route('admincp.menus.edit', $id));
});
