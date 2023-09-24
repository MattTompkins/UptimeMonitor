<div class="relative isolate px-6 pt-14 lg:px-8 relative z-10">
    <div class="container mx-auto">

        <?php include('components/page-header.php'); ?>

        <?php include('components/page-message.php'); ?>

        <?php include('components/site-key-stats.php'); ?>

        <section class="max-w-screen-xl px-5 mx-auto lg:px-12 mb-4">
            <div class="flex space-x-4">
                <a href="<?php echo APP_URL;?>site/<?php echo $siteInfo['id']; ?>/create-monitor" class="flex items-center justify-center bg-gray-800/25 backdrop-blur-md rounded-lg w-48  text-white px-4 py-3 border border-transparent hover:border-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span class="text-sm font-semibold">Add new monitor</span>
                </a>

                <a href="<?php echo $siteInfo['URL']; ?>" target="_blank" class="flex items-center justify-center bg-gray-800/25 backdrop-blur-md rounded-lg w-48  text-white px-4 py-3 border border-transparent hover:border-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
                    <span class="text-sm font-semibold">Go to site</span>
                </a>


                <a href="#" class="flex items-center justify-center bg-gray-800/25 backdrop-blur-md rounded-lg w-48  text-white px-4 py-3 border border-transparent hover:border-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    <span class="text-sm font-semibold">Delete site</span>
                </a>
            </div>
        </section>



        <section class="max-w-screen-xl px-5 mx-auto lg:px-12 mb-4">
            <div class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row text-gray-100 px-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

                <pre>
            <?php print_r($testRequest); ?>
            </pre>
            </div>
        </section>

    </div>
</div>