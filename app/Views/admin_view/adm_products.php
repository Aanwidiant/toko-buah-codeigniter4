<div class="p-8 my-10 sm:ml-64 bg-lightgrey">
    <div class="flex items-center justify-between w-full p-6 pl-2 my-2">
        <h2 class="text-xl font-semibold md:text-3xl text-darkblue">Daftar Produk</h2>
        <a id="btnCreate" class="flex items-center px-4 py-2 m-1 text-white bg-green-600 rounded-md cursor-pointer text-end hover:bg-green-500 hover:text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg> <span class="ms-2">Tambah Produk</span></a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-md">
        <table class="w-full text-sm text-left text-dark rtl:text-right">
            <thead class="text-xs uppercase text-lightgrey bg-darkblue">
                <tr>
                    <th class="px-5 py-3">prd_id</th>
                    <th class="px-5 py-3">nama_produk</th>
                    <th class="px-5 py-3">produk_img</th>
                    <th class="px-5 py-3">deskripsi</th>
                    <th class="px-5 py-3">harga</th>
                    <th class="px-5 py-3">qty</th>
                    <th class="px-5 py-3">stok</th>
                    <th class="px-5 py-3">created_at</th>
                    <th class="px-5 py-3">updated_at</th>
                    <th class="px-5 py-3">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product as $item) : ?>
                    <tr id="product-<?= $item->prd_id ?>" class="border-b border-darkblue odd:bg-slate-50 even:bg-slate-200">
                        <td class="px-5 py-3"><?= $item->prd_id ?></td>
                        <td class="px-5 py-3 nama_produk"><?= $item->nama_produk ?></td>
                        <td class="px-5 py-3"><img src="<?php echo base_url('upload/') . $item->produk_img; ?>" alt="Product-img" class="produk_img h-[50px]" /></td>
                        <td class="px-5 py-3 deskripsi"><?= $item->deskripsi ?></td>
                        <td class="px-5 py-3 harga">Rp <?= $item->harga ?></td>
                        <td class="px-5 py-3 qty"><?= $item->qty ?></td>
                        <td class="px-5 py-3 stok"><?= $item->stok ?></td>
                        <td class="px-5 py-3"><?= $item->created_at ?></td>
                        <td class="px-5 py-3 updated_at"><?= $item->updated_at ?></td>
                        <td class="flex px-5 py-3 ">
                            <a onclick="editProduct('<?= $item->prd_id ?>')" class="p-2 m-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-500 hover:text-dark editBtn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg></a>
                            <a onclick="confirmDeleteProduct('<?= $item->prd_id ?>', '<?= $item->produk_img; ?>')" id="deleteBtn" class="p-2 m-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-500 hover:text-dark"><svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>