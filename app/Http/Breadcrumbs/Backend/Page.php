<?php

Breadcrumbs::register('admincp.pages.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.pages.management'), route('admincp.pages.index'));
});

Breadcrumbs::register('admincp.pages.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.pages.index');
    $breadcrumbs->push(trans('menus.backend.pages.create'), route('admincp.pages.create'));
});

Breadcrumbs::register('admincp.pages.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.pages.index');
    $breadcrumbs->push(trans('menus.backend.pages.edit'), route('admincp.pages.edit', $id));
});
