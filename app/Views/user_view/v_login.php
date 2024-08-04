    <!-- Login Form -->

    <body class="bg-thrid">
        <div class="flex min-h-screen pt-32 pb-16 lg:h-screen lg:items-center">
            <div class="container mx-auto">
                <div class="flex flex-col w-10/12 mx-auto overflow-hidden shadow-lg lg:flex-row lg:w-8/12 bg-seventh rounded-xl">
                    <div class="w-full px-12 py-16 lg:w-1/2">
                        <h2 class="mb-4 text-3xl">Login</h2>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 bg-red-200 rounded-lg my-alert" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div class="text-sm font-medium ms-3">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                                <button type="button" class="btn-close ms-auto -mx-1.5 -my-1.5 p-1.5 hover:text-dark inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= base_url(); ?>login/process">
                            <?= csrf_field(); ?>
                            <div class="mt-5">
                                <input type="text" placeholder="Username" name="username" class="w-full px-2 py-1 border rounded border-secondary">
                            </div>
                            <div class="mt-5">
                                <input type="password" placeholder="Password" name="password" class="w-full px-2 py-1 border rounded border-secondary">
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="w-full py-3 text-center text-white rounded bg-primary">Masuk</button>
                            </div>
                        </form>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full p-12 lg:w-1/2 bg-primary">
                        <h1 class="mb-12 text-3xl text-white">Hai Jumpa Lagi !</h1>
                        <div>
                            <p class="text-white">Masuk dan dapatkan penawaran penawaran buah-buahan terbaik untuk Anda.<br>
                                Atau anda belum memiliki akun? </p>
                            <button type="button" class="bg-white hover:bg-gray-300 rounded text-sm px-5 py-2.5 my-2 text-primary font-semibold"><a href="<?php echo site_url('register'); ?>">Daftar</a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>