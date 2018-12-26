<?php

Breadcrumbs::register('admincp.settings.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.settings.edit'), route('admincp.settings.edit', $id));
});
