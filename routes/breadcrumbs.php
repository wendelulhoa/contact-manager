<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without

use App\Models\Contact;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('admin.contact.index', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Contacts', route('admin.contact.index'));
});

Breadcrumbs::for('admin.contact.create', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Contacts', route('admin.contact.index'));
    $trail->push('Create', route('admin.contact.create'));
});

Breadcrumbs::for('admin.contact.edit', function (BreadcrumbTrail $trail, Contact $contact) {
    $trail->push('Dashboard', route('admin.dashboard'));
    $trail->push('Contacts', route('admin.contact.index'));
    $trail->push('Edit', route('admin.contact.edit', ['contact' => $contact]));
});