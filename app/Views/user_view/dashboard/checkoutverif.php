<div id="viewCheckOut" class="flex pb-32 justify-center fixed top-[1rem] bottom-[1rem] z-200 w-full h-full mt-10 overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
    <div class="w-2/3 mt-10 rounded-md md:w-1/2 bg-lightgrey h-fit">
        <div class="flex items-center justify-between px-5 pt-5">
            <h3 class="font-semibold text-center uppercase ">Verifikasi Checkout</h3>
        </div>
        <form id="checkOutForm" class="p-5">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="col-span-3">
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
                <div class="col-span-3">
                    <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telp</label>
                    <input type="tel" name="no_telp" id="no_telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                </div>
                <div class="col-span-3">
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                    <textarea type="text" rows="2" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5"></textarea>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <button type="submit" class="text-white items-center bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:text-dark">
                    Konfirmasi
                </button>
                <button id="cancelBtn" type="button" class="text-white items-center bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:text-dark">
                    Batal
                </button>

            </div>
        </form>
    </div>
</div>