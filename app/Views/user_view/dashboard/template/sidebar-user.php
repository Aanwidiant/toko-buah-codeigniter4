<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full border-r-2 border-slate-400 bg-secondry sm:translate-x-0">
    <div class="container ">
        <div class="h-screen px-3 pb-4 ml-5">
            <ul class="flex flex-col justify-center h-full gap-10 font-medium ">
                <li>
                    <a href="<?php echo site_url('/'); ?>" class="flex items-center p-2 text-xl rounded-lg text-dark hover:bg-primary hover:text-secondry group">
                        <i class="w-5 h-5 transition duration-75 text-dark group-hover:text-white" data-feather="home"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('dashboard/usr'); ?>" class="flex items-center p-2 text-xl rounded-lg text-dark hover:bg-primary hover:text-secondry group">
                        <i class="w-5 h-5 transition duration-75 text-dark group-hover:text-white" data-feather="user"></i>
                        <span class="ms-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('cart'); ?>" class="flex items-center p-2 text-xl rounded-lg text-dark hover:bg-primary hover:text-secondry group">
                        <i class="w-5 h-5 transition duration-75 text-dark group-hover:text-white" data-feather="shopping-cart"></i>
                        <span class="ms-3">Keranjang Belanja</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center p-2 text-xl rounded-lg text-dark hover:bg-primary hover:text-secondry group">
                        <i class="w-5 h-5 transition duration-75 text-dark group-hover:text-white" data-feather="shopping-bag"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('logout'); ?>" class="flex items-center p-2 text-xl rounded-lg text-dark hover:bg-primary hover:text-secondry group">
                        <i class="w-5 h-5 transition duration-75 text-dark group-hover:text-white" data-feather="log-out"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>