<div class="relative p-8 mt-10 sm:ml-64 bg-lightgrey">
    <div class="flex items-center justify-start w-full p-6 pl-2 my-2">
        <h2 class="text-xl font-semibold md:text-3xl text-darkblue">Daftar Pengguna</h2>
    </div>
    <div class="overflow-x-auto shadow-md sm:rounded-md">
        <table id="userTable" class="w-full text-sm text-left text-dark rtl:text-right">
            <thead class="text-xs uppercase text-lightgrey bg-darkblue">
                <tr>
                    <th class="px-5 py-3">user_id</th>
                    <th class="px-5 py-3">username</th>
                    <th class="px-5 py-3">nama_lengkap</th>
                    <th class="px-5 py-3">email</th>
                    <th class="px-5 py-3">role</th>
                    <th class="px-5 py-3">created_at</th>
                    <th class="px-5 py-3">updated_at</th>
                    <th class="px-5 py-3">action</th>
                </tr>
            </thead>
            <tbody class="text-dark">
                <?php foreach ($users as $item) : ?>
                    <tr id="user-<?= $item->user_id ?>" class="border-b border-darkblue odd:bg-slate-50 even:bg-slate-200">
                        <td class="px-5 py-3"><?= $item->user_id ?></td>
                        <td class="px-5 py-3"><?= $item->username ?></td>
                        <td class="px-5 py-3"><?= $item->nama_lengkap ?></td>
                        <td class="px-5 py-3"><?= $item->email ?></td>
                        <td class="px-5 py-3 role"><?= $item->lv_id == 'lv_01' ? 'User' : 'Admin'; ?></td>
                        <td class="px-5 py-3"><?= $item->created_at ?></td>
                        <td class="px-5 py-3 updated_at"><?= $item->updated_at ?></td>
                        <td class="flex px-5 py-3">
                            <a onclick="editUser('<?= $item->user_id ?>')" class="p-2 m-1 text-sm font-medium text-white bg-green-600 rounded-md editBtn hover:bg-green-500 hover:text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg></a>
                            <a onclick="confirmDelete('<?= $item->user_id ?>')" id="deleteBtn" class="p-2 m-1 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-500 hover:text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>