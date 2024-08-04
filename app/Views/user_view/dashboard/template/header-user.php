<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vers Fruit</title>
    <link rel="stylesheet" href="<?php echo base_url('front_end/src/css/output.css'); ?>" />
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-secondry">
    <nav class="fixed top-0 z-50 w-full shadow-sm bg-primary shadow-dark">
        <div class="container py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button id="sideBtn" type="button" class="inline-flex items-center mr-5 text-sm rounded-lg text-dark sm:hidden hover:bg-secondry">
                        <i class="w-7 h-7" data-feather="menu"></i>
                    </button>
                    <a href="<?php echo site_url('/'); ?>" class="text-2xl font-semibold md:text-3xl"><span class="text-secondry">Vers </span> Fruits</a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 border rounded-full bg-lightgrey text-darkblue border-darkblue">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <p class="mx-2 font-medium text-dark"><?= session()->get('username'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>