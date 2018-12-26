<?php

Breadcrumbs::register('admincp.blogs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.blogs.management'), route('admincp.blogs.index'));
});

Breadcrumbs::register('admincp.blogs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.blogs.index');
    $breadcrumbs->push(trans('menus.backend.blogs.create'), route('admincp.blogs.create'));
});

Breadcrumbs::register('admincp.blogs.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.blogs.index');
    $breadcrumbs->push(trans('menus.backend.blogs.edit'), route('admincp.blogs.edit', $id));
});
