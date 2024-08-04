<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vers Fruit</title>
    <link rel="stylesheet" href="<?php echo base_url('front_end/src/css/output.css'); ?>" />
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        const baseUrl = "<?php echo base_url('upload/') ?>"
    </script>
</head>

<body>
    <!-- Header start -->
    <header class="fixed top-0 left-0 z-10 flex items-center w-full shadow-sm bg-primary shadow-secondry">
        <div class="container">
            <nav class="flex items-center justify-between w-full">
                <a href="<?php echo site_url('/'); ?>#home" class="block py-6 mx-4 text-3xl italic font-bold text-dark">Vers <span class="text-white">Fruits</span></a>

                <div id="nav-menu" class="absolute pt-24 top-0 right-[-100%] h-screen w-1/2 bg-primary opacity-0 transition-all duration-500 lg:h-fit lg:pt-0 lg:static lg:shadow-none lg:opacity-100 lg:w-fit">
                    <ul id="nav-list" class="block lg:flex">
                        <li class="group">
                            <a href="<?php echo site_url('/'); ?>#home" class="flex py-2 mx-6 text-xl text-dark group-hover:text-white">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="<?php echo site_url('/'); ?>#about" class="flex py-2 mx-6 text-xl text-dark group-hover:text-white">Tentang Kami</a>
                        </li>
                        <li class="group">
                            <a href="<?php echo site_url('/'); ?>#product" class="flex py-2 mx-6 text-xl text-dark group-hover:text-white">Produk Kami</a>
                        </li>
                    </ul>
                    <a href="<?php echo site_url('login'); ?>" class="absolute py-2 mx-4 text-xl text-dark lg:hidden bottom-3"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline-block px-1 py-1 mx-4 my-4 bg-white border-2 rounded-full feather feather-user hover:text-primary border-dark">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></a>
                </div>

                <div>
                    <ul id="nav-icon" class="flex items-center">
                        <li class="group">
                            <div>
                                <button id="searchBtn" class="flex py-2 mx-4 text-xl text-dark group-hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </div>
                            <div id="searchBox" class="absolute flex items-center self-center w-2/3 h-12 bg-white border-2 right-[15%] top-[105%] md:w-1/3 border-dark rounded-xl scale-y-0 origin-top transition-all duration-300">
                                <input type="search" id="searchInpt" name="searchInpt" placeholder="Cari di sini ..." class="w-full h-full p-4 text-xl text-dark rounded-xl" />
                                <label for="searchInpt" class="p-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg></label>
                            </div>
                        </li>
                        <li class="group">
                            <a href="<?php echo site_url('cart'); ?>" class="flex py-2 mx-4 text-xl text-dark group-hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg></a>
                        </li>
                        <li class="hidden group lg:contents">
                            <a href="<?php echo site_url('login'); ?>" class="flex py-2 mx-4 text-xl text-dark group-hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg></a>
                        </li>
                        <li>
                            <button id="hamburger" name="hamburger" type="button" class="z-10 block py-2 mx-4 text-xl lg:hidden text-dark">
                                <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
                                <span class="transition duration-300 ease-in-out hamburger-line"></span>
                                <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header end -->