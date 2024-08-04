        <!-- Modal Box Delete Confirmation -->
        <div id="deleteAlert" class="hidden justify-center items-center fixed top-[1rem] z-100 w-full h-full mt-10 overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
            <div class="p-4 -translate-y-1/3 w-fit">
                <div class="rounded-lg shadow bg-secondry">
                    <div class="p-4 text-center md:p-5 text-dark">
                        <svg class="w-10 h-10 mx-auto mb-4 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal ">Anda yakin ingin menghapus data ini?</h3>
                        <button id="confirmDeleteBtn" type="button" class="text-dark hover:bg-green-500 bg-green-600 font-medium rounded-lg inline-flex items-center px-5 py-2.5 text-center hover:text-white">
                            Ya
                        </button>
                        <button id="noBtn" type="button" class="py-2.5 px-5 ms-3 font-medium text-dark  hover:bg-red-500 rounded-lg bg-red-600 hover:text-white ">Tidak</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alert Create success -->
        <div id="successCreate" class="fixed top-0 items-center justify-center hidden w-full h-full overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
            <div class="flex items-center justify-center p-4 text-sm rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit bg-turquoise shadow-darkblue" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <div>
                    <p class="ml-4 font-medium">Create Data Berhasil</p>
                </div>
            </div>
        </div>

        <!-- Alert Create Failed -->
        <div id="failedCreate" class="fixed top-0 items-center justify-center hidden w-full h-full overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
            <div class="flex items-center justify-center p-4 text-sm bg-red-600 rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit shadow-darkblue" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <div>
                    <p class="ml-4 font-medium">Create Data Gagal</p>
                </div>
            </div>
        </div>

        <!-- Alert Update success -->
        <div id="successUpdate" class="fixed top-0 items-center justify-center hidden w-full h-full overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
            <div class="flex items-center justify-center p-4 text-sm rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit bg-turquoise shadow-darkblue" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <div>
                    <p class="ml-4 font-medium">Update Data Berhasil</p>
                </div>
            </div>
        </div>

        <!-- Alert Update Failed -->
        <div id="failedUpdate" class="fixed top-0 items-center justify-center hidden w-full h-full overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
            <div class="flex items-center justify-center p-4 text-sm bg-red-600 rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit shadow-darkblue" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <div>
                    <p class="ml-4 font-medium">Update Data Gagal</p>
                </div>
            </div>
        </div>

        <!-- Alert Delete Success -->
        <div id="successDelete" class="fixed top-0 items-center justify-center hidden w-full h-full overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
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

        <!-- Alert Delete Failed -->
        <div id="failedDelete" class="fixed top-0 items-center justify-center hidden w-full h-full overflow-auto sm:ml-64 md:ml-32 bg-dark/80">
            <div class="flex items-center justify-center p-4 text-sm bg-red-600 rounded-md shadow-sm top-1/2 md:text-xl w-fit h-fit shadow-darkblue" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <div>
                    <p class="ml-4 font-medium">Delete Data Gagal</p>
                </div>
            </div>
        </div>