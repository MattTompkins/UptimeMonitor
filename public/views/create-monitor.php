<div class="relative isolate px-6 pt-14 lg:px-8 relative z-10">
    <div class="container mx-auto">

    <?php include( 'components/page-header.php' ); ?>
    <?php include( 'components/page-message.php' ); ?>

        <section class="w-full max-w-screen-xl px-4 mx-auto lg:px-12 mb-4">
            <div class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row">

                <form method="POST" action="<?php echo APP_URL; ?>site/<?php echo $siteInfo['id']; ?>/create-monitor" enctype="application/x-www-form-urlencoded" class="px-5 w-full">
                    <label class="text-gray-100 font-semibold mb-1">Select a type of monitor</label>
                    <div class="relative w-full mb-4 mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 22">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                            </svg>
                        </div>

                        <select id="type" name="type" class="border text-sm rounded-lg block w-96 pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-emerald-500" placeholder="Website name" required>
                            <option value="ping">Ping</option>
                            <option value="http">HTTP Request</option>
                        </select>
                    </div>

                    <label class="text-gray-100 font-semibold mb-1">Select an interval for monitoring (Every X minutes)</label>
                    <div class="relative w-full mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <input type="number" id="interval" name="interval" class="border text-sm rounded-lg block w-48 pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-emerald-500" placeholder="1" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-4 rounded-lg mt-5">Create monitor</button>
                    </div>
                </form>

            </div>
        </section>


    </div>
</div>