<div id="viewCreate" class="hidden pb-32 justify-center fixed top-[1rem] bottom-[1rem] z-200 w-full h-full mt-10 overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
    <div class="w-2/3 mt-10 rounded-md md:w-1/2 modal-container bg-lightgrey h-fit">
        <div class="flex items-center justify-between px-5 pt-5">
            <h3 class="font-semibold text-center uppercase ">Create Data Produk</h3>
            <button id="closeCreate"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x hover:scale-150">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></button>
        </div>
        <form id="productCreateForm" class="p-5">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="col-span-3 md:col-span-1">
                    <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900">nama_produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="produk_img" class="block mb-2 text-sm font-medium text-gray-900">produk_img</label>
                    <input type="file" name="produk_img" id="produk_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
                <div class="col-span-3">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">deskripsi</label>
                    <textarea type="text" rows="3" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"></textarea>
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">harga</label>
                    <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="qty" class="block mb-2 text-sm font-medium text-gray-900">qty</label>
                    <input type="text" name="qty" id="qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
                <div class="col-span-3 md:col-span-1">
                    <label for="stok" class="block mb-2 text-sm font-medium text-gray-900">stok</label>
                    <input type="text" name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
            </div>
            <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Create Product
            </button>
        </form>
    </div>
</div>