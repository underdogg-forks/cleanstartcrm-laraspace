<?php

Breadcrumbs::register('admincp.access.user.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('labels.backend.access.users.management'), route('admincp.access.user.index'));
});

Breadcrumbs::register('admincp.access.user.deactivated', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.access.user.index');
    $breadcrumbs->push(trans('menus.backend.access.users.deactivated'), route('admincp.access.user.deactivated'));
});

Breadcrumbs::register('admincp.access.user.deleted', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.access.user.index');
    $breadcrumbs->push(trans('menus.backend.access.users.deleted'), route('admincp.access.user.deleted'));
});

Breadcrumbs::register('admincp.access.user.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.access.user.index');
    $breadcrumbs->push(trans('menus.backend.access.users.create'), route('admincp.access.user.create'));
});

Breadcrumbs::register('admincp.access.user.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.access.user.index');
    $breadcrumbs->push(trans('menus.backend.access.users.view'), route('admincp.access.user.show', $id));
});

Breadcrumbs::register('admincp.access.user.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.access.user.index');
    $breadcrumbs->push(trans('menus.backend.access.users.edit'), route('admincp.access.user.edit', $id));
});

Breadcrumbs::register('admincp.access.user.change-password', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.access.user.index');
    $breadcrumbs->push(trans('menus.backend.access.users.change-password'), route('admincp.access.user.change-password', $id));
});
