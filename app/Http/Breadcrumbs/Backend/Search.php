<?php

Breadcrumbs::register('admincp.search.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('strings.backend.search.title'), route('admincp.search.index'));
});
