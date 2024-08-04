    <div class="p-8 my-10 sm:ml-64 bg-secondry">
        <div class="container">
            <div class="flex items-center w-full p-6 pl-2 my-2">
                <h2 class="text-xl font-semibold md:text-3xl text-darkblue">Keranjang Belanja Anda</h2>
            </div>
            <?php foreach ($cart as $item) : ?>
                <div id="cartItem-<?= $item->prd_id; ?>" class="w-full my-4 overflow-auto border-2 rounded-lg border-dark bg-secondry text-dark">
                    <div class="flex flex-wrap items-center justify-around p-2 m-4">
                        <div class="w-1/2 md:w-1/4">
                            <input type="checkbox" class="relative w-6 h-6">
                            <img id="img-product" src="<?= base_url('upload/' . $item->produk_img) ?>" alt="Product-img" class="w-24 mx-auto" />
                        </div>

                        <div class="w-1/2 md:w-1/4">
                            <h3 class="m-3 "><?= $item->nama_produk ?></h3>
                            <p class="m-3 ">Harga: Rp <?= number_format($item->harga) ?></p>
                        </div>
                        <div class="w-1/2 md:w-1/4">
                            <p class="m-3 ">Qty Produk: <?= $item->qty_item ?></p>
                            <p class="m-3 ">Total Harga: Rp <?= number_format($item->qty_item * $item->harga) ?></p>
                        </div>
                        <div class="w-1/2 md:w-1/4">
                            <a onclick="deleteCart('<?= $item->prd_id ?>')" class="flex items-center justify-center gap-2 p-2 m-2 border-2 rounded-md cursor-pointer w-fit text-dark border-dark hover:bg-red-500 hover:border-red-500"><i data-feather="trash-2"></i>Hapus dari Keranjang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="flex justify-end w-full">
                <button id="checkOutBtn" class="flex items-center justify-center gap-2 p-2 m-2 border-2 rounded-md cursor-pointer w-fit text-dark border-dark hover:bg-primary hover:border-primary"><i data-feather="package"></i>Check Out Produk</button>
                <a class="flex items-center justify-center gap-2 p-2 m-2 border-2 rounded-md cursor-pointer w-fit text-dark border-dark hover:bg-red-500 hover:border-red-500"><i data-feather="trash-2"></i>Hapus dari Keranjang</a>
            </div>
        </div>
    </div>

    <!-- Alert Delete Cart Success -->
    <div id="successDeleteCart" class="fixed top-0 left-0 z-50 items-center justify-center hidden w-full h-full overflow-auto bg-dark/80">
        <div class="flex items-center justify-center p-4 text-sm rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit bg-turquoise shadow-darkblue" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <div>
                <p class="ml-4 font-medium">Delete Data Berhasil</p>
            </div>
        </div>
    </div>

    <!-- Alert Delete Cart Failed -->
    <div id="failedDeleteCart" class="fixed top-0 left-0 z-50 items-center justify-center hidden w-full h-full overflow-auto bg-dark/80">
        <div class="flex items-center justify-center p-4 text-sm bg-red-600 rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit shadow-darkblue" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>Cart
            <div>
                <p class="ml-4 font-medium">Delete Data Gagal</p>
            </div>
        </div>
    </div>