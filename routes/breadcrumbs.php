<?php

// ----------
// Restoran
// ----------

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Data Restoran
Breadcrumbs::for('data_restoran', function ($trail) {
    $trail->parent('home');
    $trail->push('Data Restoran', route('restoran'));
});

// Home > Data Restoran > Edit Data
Breadcrumbs::for('edit_restoran', function ($trail) {
    $trail->parent('home');
    $trail->push('Data Restoran', route('restoran'));
    $trail->push('Edit Restoran', route('restoran'));
});

// ----------
// Cafe
// ----------

// Home > Data cafe
Breadcrumbs::for('data_cafe', function ($trail) {
    $trail->parent('home');
    $trail->push('Data Cafe', route('cafe'));
});

// Home > Data cafe > Edit Data
Breadcrumbs::for('edit_cafe', function ($trail) {
    $trail->parent('home');
    $trail->push('Data Cafe', route('cafe'));
    $trail->push('Edit Cafe', route('cafe'));
});

// ----------
// Pengguna
// ----------

// Home > Data user
Breadcrumbs::for('data_user', function ($trail) {
    $trail->parent('home');
    $trail->push('Data User', route('pengguna'));
});

// Home > Data user > Edit Data
Breadcrumbs::for('edit_user', function ($trail) {
    $trail->parent('home');
    $trail->push('Data User', route('pengguna'));
    $trail->push('Edit User', route('pengguna'));
});

// Home > Data user > Profil user
Breadcrumbs::for('profil_user', function ($trail) {
    $trail->parent('home');
    $trail->push('Data User', route('pengguna'));
    $trail->push('Profil User', route('pengguna'));
});


