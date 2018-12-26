<?php

Breadcrumbs::register('admincp.faqs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.faqs.management'), route('admincp.faqs.index'));
});

Breadcrumbs::register('admincp.faqs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.faqs.index');
    $breadcrumbs->push(trans('menus.backend.faqs.create'), route('admincp.faqs.create'));
});

Breadcrumbs::register('admincp.faqs.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.faqs.index');
    $breadcrumbs->push(trans('menus.backend.faqs.edit'), route('admincp.faqs.edit', $id));
});
