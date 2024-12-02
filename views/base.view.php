<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tabel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            dark: '#011f4b',
                            medium: '#03396c',
                            DEFAULT: '#005b96',
                            light: '#6497b1',
                            lighter: '#b3cde0',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="icon" href="<?php asset("imgs/favicon/norm-favicon.svg") ?>" type="image/svg">
    <script defer src="<?php asset("js/index.js") ?>"></script>

</head>

<body class="flex flex-col min-h-screen bg-white">
    <!-- Simple Navbar -->
    <?php include_once 'sections/nav.view.php' ?>
    <!-- Main Content -->
    <main class="flex-grow">