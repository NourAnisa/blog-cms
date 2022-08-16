<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <!-- CSS files -->
    <link href="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased">
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="<?= base_url(); ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    SI ARTIKEL
                </a>
                <div class="navbar-nav flex-row order-md-last ml-md-4">
                    <div class="nav-item dropdown d-none d-md-flex mr-3">
                        <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                            <span class="badge bg-red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                            <div class="card">
                                <div class="card-body">
                                    <a href="https://nouranisa.skom.id/" class="btn d-block btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 9l3 3l-3 3" />
                                            <line x1="13" y1="15" x2="16" y2="15" />
                                            <rect x="4" y="4" width="16" height="16" rx="4" />
                                        </svg>
                                        Nor Anisa
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (userdata()) : ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
                                <?php if (userdata()->avatar) : ?>
                                    <span class="avatar avatar-sm" style="background-image: url(<?= base_url('assets/dist/img/users/') . userdata()->avatar ?>)"></span>
                                <?php else : ?>
                                    <span class="avatar avatar-sm bg-blue-lt"><?= user_initial(userdata()->fullname); ?></span>
                                <?php endif; ?>
                                <div class="d-none d-xl-block pl-2">
                                    <div><?= userdata()->fullname; ?></div>
                                    <div class="mt-1 small text-muted text-capitalize"><?= userdata()->role; ?></div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <?php if (userdata()->role != "member") : ?>
                                    <a href="<?= base_url('dashboard'); ?>" class="dropdown-item">Dashboard</a>
                                    <div class="dropdown-divider"></div>
                                <?php endif; ?>
                                <a href="<?= base_url('configuration/account') ?>" class="dropdown-item">My Account</a>
                                <a href="<?= base_url('signout'); ?>" class="dropdown-item">Sign Out</a>
                            </div>
                        </div>
                    <?php else : ?>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('signin') ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 11l2 2l4 -4" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Sign In
                                    </span>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 4h3l2 2h5a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                            <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h2" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Category
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <?php foreach (get_category() as $category) : ?>
                                        <a class="dropdown-item" href="<?= base_url('post/index') . '?category=' . $category->category_id . '&search=' ?>">
                                            <?= $category->category_name; ?>
                                        </a>
                                    <?php endforeach; ?>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url() ?>">
                                        Show All
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="ml-md-auto pl-md-4 py-2 py-md-0 order-first order-md-last flex-grow-1">
                            <form action="<?= base_url('post/index'); ?>" method="get">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="10" cy="10" r="7" />
                                            <line x1="21" y1="21" x2="15" y2="15" />
                                        </svg>
                                    </span>
                                    <input type="hidden" name="category" value="<?= set_value('category', $selected_category); ?>">
                                    <input type="text" name="search" class="form-control" placeholder="Search…">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="container-xl">