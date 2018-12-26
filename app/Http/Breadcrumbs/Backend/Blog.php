<?php

Breadcrumbs::register('admincp.blogcategories.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.blog_management.management'), route('admincp.blogcategories.index'));
});

Breadcrumbs::register('admincp.blogcategories.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.blogcategories.index');
    $breadcrumbs->push(trans('menus.backend.blog_management.create'), route('admincp.blogcategories.create'));
});

Breadcrumbs::register('admincp.blogcategories.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.blogcategories.index');
    $breadcrumbs->push(trans('menus.backend.blog_management.edit'), route('admincp.blogcategories.edit', $id));
});
