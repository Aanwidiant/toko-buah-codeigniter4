<div id="viewUpdate" class="hidden pb-32 justify-center fixed top-[1rem] bottom-[1rem] z-200 w-full h-full mt-10 overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
    <div class="w-2/3 mt-10 rounded-md md:w-1/2 modal-container bg-lightgrey h-fit">
        <div class="flex items-center justify-between px-5 pt-5">
            <h3 class="font-semibold text-center uppercase ">Update Data Pengguna</h3>
            <button id="closeUpdate"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x hover:scale-150">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></button>
        </div>
        <form id="userUpdateForm" class="p-5">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="col-span-2 md:col-span-1">
                    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">user_id</label>
                    <div class="flex items-center justify-center text-gray-900 bg-white border-2 border-red-600 rounded-md">
                        <input type="text" name="user_id" id="user_id" class="text-sm block w-full p-2.5 rounded-md cursor-not-allowed" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-6 h-6 m-2 fill-red-600">
                            <path d="M 3.71875 2.28125 L 2.28125 3.71875 L 28.28125 29.71875 L 29.71875 28.28125 L 19.625 18.1875 L 26.71875 11.09375 C 28.345107 9.467393 28.345107 6.907607 26.71875 5.28125 C 25.905572 4.4680715 24.859464 4.0625 23.8125 4.0625 C 22.765536 4.0625 21.719428 4.4680715 20.90625 5.28125 L 20.1875 6 L 13.8125 12.375 L 3.71875 2.28125 z M 23.8125 6 C 24.311277 6 24.794429 6.2319285 25.28125 6.71875 C 26.254893 7.692393 26.254893 8.713857 25.28125 9.6875 L 24.6875 10.28125 L 21.71875 7.3125 L 22.3125 6.71875 C 22.799321 6.2319285 23.313723 6 23.8125 6 z M 20.3125 8.71875 L 23.28125 11.6875 L 18.1875 16.75 L 15.25 13.8125 L 20.3125 8.71875 z M 11 15.1875 L 5.40625 20.78125 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 11.21875 26.59375 L 16.8125 21 L 15.40625 19.59375 L 11.1875 23.78125 C 10.533142 22.500659 9.4993415 21.466858 8.21875 20.8125 L 12.40625 16.59375 L 11 15.1875 z M 6.9375 22.4375 C 8.1365842 22.923393 9.0766067 23.863416 9.5625 25.0625 L 6.28125 25.71875 L 6.9375 22.4375 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans" />
                        </svg>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">username</label>
                    <div class="flex items-center justify-center text-gray-900 bg-white border-2 border-red-600 rounded-md">
                        <input type="text" name="username" id="username" class="text-sm block w-full p-2.5 rounded-md cursor-not-allowed" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-6 h-6 m-2 fill-red-600">
                            <path d="M 3.71875 2.28125 L 2.28125 3.71875 L 28.28125 29.71875 L 29.71875 28.28125 L 19.625 18.1875 L 26.71875 11.09375 C 28.345107 9.467393 28.345107 6.907607 26.71875 5.28125 C 25.905572 4.4680715 24.859464 4.0625 23.8125 4.0625 C 22.765536 4.0625 21.719428 4.4680715 20.90625 5.28125 L 20.1875 6 L 13.8125 12.375 L 3.71875 2.28125 z M 23.8125 6 C 24.311277 6 24.794429 6.2319285 25.28125 6.71875 C 26.254893 7.692393 26.254893 8.713857 25.28125 9.6875 L 24.6875 10.28125 L 21.71875 7.3125 L 22.3125 6.71875 C 22.799321 6.2319285 23.313723 6 23.8125 6 z M 20.3125 8.71875 L 23.28125 11.6875 L 18.1875 16.75 L 15.25 13.8125 L 20.3125 8.71875 z M 11 15.1875 L 5.40625 20.78125 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 11.21875 26.59375 L 16.8125 21 L 15.40625 19.59375 L 11.1875 23.78125 C 10.533142 22.500659 9.4993415 21.466858 8.21875 20.8125 L 12.40625 16.59375 L 11 15.1875 z M 6.9375 22.4375 C 8.1365842 22.923393 9.0766067 23.863416 9.5625 25.0625 L 6.28125 25.71875 L 6.9375 22.4375 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans" />
                        </svg>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900">nama_lengkap</label>
                    <div class="flex items-center justify-center text-gray-900 bg-white border-2 border-red-600 rounded-md">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="text-sm block w-full p-2.5 rounded-md cursor-not-allowed" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-6 h-6 m-2 fill-red-600">
                            <path d="M 3.71875 2.28125 L 2.28125 3.71875 L 28.28125 29.71875 L 29.71875 28.28125 L 19.625 18.1875 L 26.71875 11.09375 C 28.345107 9.467393 28.345107 6.907607 26.71875 5.28125 C 25.905572 4.4680715 24.859464 4.0625 23.8125 4.0625 C 22.765536 4.0625 21.719428 4.4680715 20.90625 5.28125 L 20.1875 6 L 13.8125 12.375 L 3.71875 2.28125 z M 23.8125 6 C 24.311277 6 24.794429 6.2319285 25.28125 6.71875 C 26.254893 7.692393 26.254893 8.713857 25.28125 9.6875 L 24.6875 10.28125 L 21.71875 7.3125 L 22.3125 6.71875 C 22.799321 6.2319285 23.313723 6 23.8125 6 z M 20.3125 8.71875 L 23.28125 11.6875 L 18.1875 16.75 L 15.25 13.8125 L 20.3125 8.71875 z M 11 15.1875 L 5.40625 20.78125 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 11.21875 26.59375 L 16.8125 21 L 15.40625 19.59375 L 11.1875 23.78125 C 10.533142 22.500659 9.4993415 21.466858 8.21875 20.8125 L 12.40625 16.59375 L 11 15.1875 z M 6.9375 22.4375 C 8.1365842 22.923393 9.0766067 23.863416 9.5625 25.0625 L 6.28125 25.71875 L 6.9375 22.4375 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans" />
                        </svg>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">email</label>
                    <div class="flex items-center justify-center text-gray-900 bg-white border-2 border-red-600 rounded-md">
                        <input type="email" name="email" id="email" class="text-sm block w-full p-2.5 rounded-md cursor-not-allowed" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-6 h-6 m-2 fill-red-600">
                            <path d="M 3.71875 2.28125 L 2.28125 3.71875 L 28.28125 29.71875 L 29.71875 28.28125 L 19.625 18.1875 L 26.71875 11.09375 C 28.345107 9.467393 28.345107 6.907607 26.71875 5.28125 C 25.905572 4.4680715 24.859464 4.0625 23.8125 4.0625 C 22.765536 4.0625 21.719428 4.4680715 20.90625 5.28125 L 20.1875 6 L 13.8125 12.375 L 3.71875 2.28125 z M 23.8125 6 C 24.311277 6 24.794429 6.2319285 25.28125 6.71875 C 26.254893 7.692393 26.254893 8.713857 25.28125 9.6875 L 24.6875 10.28125 L 21.71875 7.3125 L 22.3125 6.71875 C 22.799321 6.2319285 23.313723 6 23.8125 6 z M 20.3125 8.71875 L 23.28125 11.6875 L 18.1875 16.75 L 15.25 13.8125 L 20.3125 8.71875 z M 11 15.1875 L 5.40625 20.78125 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 11.21875 26.59375 L 16.8125 21 L 15.40625 19.59375 L 11.1875 23.78125 C 10.533142 22.500659 9.4993415 21.466858 8.21875 20.8125 L 12.40625 16.59375 L 11 15.1875 z M 6.9375 22.4375 C 8.1365842 22.923393 9.0766067 23.863416 9.5625 25.0625 L 6.28125 25.71875 L 6.9375 22.4375 z" color="#000" overflow="visible" font-family="Bitstream Vera Sans" />
                        </svg>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900">role</label>
                    <select id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option value="lv_01">User</option>
                        <option value="lv_02">Admin</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Save Update
            </button>
        </form>
    </div>
</div>