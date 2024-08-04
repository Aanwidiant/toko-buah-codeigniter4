<div class="relative p-8 my-10 sm:ml-64 bg-secondry">
    <div class="container">
        <div class="flex items-center w-full p-6 pl-2 my-2">
            <h2 class="text-xl font-semibold md:text-3xl text-darkblue">Profile Akun Anda</h2>
        </div>
        <div class="flex items-center p-6 pl-2 my-2 border-2 rounded-lg border-dark">
            <div class="flex flex-wrap justify-between w-full text-md text-dark ">
                <div class="w-full md:w-1/2">
                    <p id="user_id" class="p-4 m-4 md:text-xl">User ID: <?= $user->user_id ?></p>
                    <p id="username" class="p-4 m-4 md:text-xl">Username: <?= $user->username ?></p>
                    <p id="nama_lengkap" class="p-4 m-4 md:text-xl">Nama Lengkap: <?= $user->nama_lengkap ?></p>
                </div>
                <div class="w-full md:w-1/2">
                    <p id="email" class="p-4 m-4 md:text-xl">Email: <?= $user->email ?></p>
                    <p id="lv_id" class="p-4 m-4 md:text-xl">Role: <?= $user->lv_id == 'lv_01' ? 'User' : 'Admin'; ?></p>
                </div>
            </div>

        </div>
        <div class="flex justify-end w-full">
            <a class="flex items-center justify-center gap-2 p-2 m-2 border-2 rounded-md cursor-pointer w-fit text-dark border-dark hover:bg-primary hover:border-primary"><i data-feather="edit"></i>Edit Profile</a>
        </div>
    </div>
</div>