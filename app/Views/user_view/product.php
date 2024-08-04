    <!-- Our Product Section Start -->
    <section id="product" class="pt-32 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto mb-6 text-center">
                    <h2 class="w-full mb-6 text-3xl font-bold text-center text-dark lg:text-4xl">Produk <span class="text-primary">Kami</span></h2>
                    <p class="font-medium text-md text-dark md:text-lg">Berikut ini adalah beberapa produk buah-buahan unggulan kami.</p>
                </div>
            </div>

            <div class="grid gap-6 mt-16" style="grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr))">
                <!-- Product card -->
                <?php foreach ($product as $item) : ?>
                    <div class="items-center p-8 border-2 rounded-lg product-card border-dark">
                        <div class="flex justify-center py-4 product-img">
                            <img src="<?php echo base_url('upload/') . $item->produk_img; ?>" alt="Product-img" class="h-[150px]" />
                        </div>
                        <div class="product-content">
                            <h3 class="text-2xl text-center"><?= $item->nama_produk ?></h3>
                            <div class="text-center product-price">Rp <?= number_format($item->harga) ?> / <?= $item->qty ?> </div>
                            <div class="flex justify-center gap-2 mt-4 product-icons">
                                <a onclick="addToCart('<?= $item->prd_id ?>')" class="flex items-center justify-center w-10 h-10 m-1 border-2 rounded-md cursor-pointer text-dark border-dark hover:bg-primary hover:border-primary"><i data-feather="shopping-cart"></i></a>
                                <a onclick="detailProduct('<?= $item->prd_id ?>')" class="flex items-center justify-center w-10 h-10 m-1 border-2 rounded-md cursor-pointer text-dark border-dark hover:bg-primary hover:border-primary"><i data-feather="eye"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Our Product Section End -->

    <!-- Modal Box Detail Product Start -->
    <div class="fixed top-0 left-0 z-50 items-center justify-center hidden w-full h-full overflow-auto bg-dark/80" id="product-detail">
        <div class="relative w-2/3 p-4 m-4 rounded-lg lg:w-1/2 h-fit bg-secondry text-dark">
            <button type="button" class="absolute right-4 closeDetail">
                <svg class="w-4 h-4 hover:scale-150" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
            <div class="flex flex-wrap lg:flex-nowrap w-fit">
                <img id="img-product" src="" alt="Product-img" class="w-full h-full p-4 m-4 rounded-lg lg:w-2/5" />
                <div class="lg:w-1/2 product-content">
                    <h3 id="nama-product" class="m-3 text-3xl "></h3>
                    <p class="m-3 text-xl font-medium ">Deskripsi produk:</p>
                    <p id="desc-product" class="m-3 text-base "></p>
                    <div class="m-3 text-xl font-medium">Harga: <span id="harga-product" class="text-base"></span> </div>
                    <a id="addToCartButton" onclick="addToCartFromButton()" class="flex items-center justify-center gap-2 p-2 m-2 border-2 rounded-md cursor-pointer w-fit text-dark border-dark hover:bg-primary hover:border-primary"><i data-feather="shopping-cart"></i>Tambah ke keranjang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box Detail Product End -->

    <!-- Alert Add to card success -->
    <div id="successAddCart" class="fixed top-0 left-0 z-50 items-center justify-center hidden w-full h-full overflow-auto bg-dark/80">
        <div class="flex items-center justify-center p-4 text-sm rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit bg-turquoise shadow-darkblue" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <div>
                <p class="ml-4 font-medium">Berhasil Menambahkan ke Keranjang</p>
            </div>
        </div>
    </div>

    <!-- Alert Add to card failed -->
    <div id="failedAddCart" class="fixed top-0 left-0 z-50 items-center justify-center hidden w-full h-full overflow-auto bg-dark/80">
        <div class="flex items-center justify-center p-4 text-sm bg-red-600 rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit shadow-darkblue" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
            <div>
                <p class="ml-4 font-medium">Silahkan Login Terlebih Dahulu</p>
            </div>
        </div>
    </div>