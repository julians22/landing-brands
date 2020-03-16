<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.view-cust', function ($trail) {
    $trail->push(__('strings.backend.view-cust.title'), route('admin.view-cust'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
