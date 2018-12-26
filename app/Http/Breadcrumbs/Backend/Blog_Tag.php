<?php

Breadcrumbs::register('admincp.blogtags.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.dashboard');
    $breadcrumbs->push(trans('menus.backend.blogtags.management'), route('admincp.blogtags.index'));
});

Breadcrumbs::register('admincp.blogtags.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admincp.blogtags.index');
    $breadcrumbs->push(trans('menus.backend.blogtags.create'), route('admincp.blogtags.create'));
});

Breadcrumbs::register('admincp.blogtags.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admincp.blogtags.index');
    $breadcrumbs->push(trans('menus.backend.blogtags.edit'), route('admincp.blogtags.edit', $id));
});
