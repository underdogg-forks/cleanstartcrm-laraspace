<?php

Breadcrumbs::register('admincp.emailtemplates.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.emailtemplates.management'), route('admincp.emailtemplates.index'));
});

Breadcrumbs::register('admincp.emailtemplates.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.emailtemplates.index');
    $breadcrumbs->push(trans('menus.backend.emailtemplates.create'), route('admincp.emailtemplates.create'));
});

Breadcrumbs::register('admincp.emailtemplates.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.emailtemplates.index');
    $breadcrumbs->push(trans('menus.backend.emailtemplates.edit'), route('admincp.emailtemplates.edit', $id));
});
