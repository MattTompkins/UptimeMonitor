<div class="relative isolate px-6 pt-14 lg:px-8 relative z-10">
    <div class="container mx-auto">

        <section class="w-full max-w-screen-xl px-4 mx-auto lg:px-12 mb-6">

            <div class="relative overflow-hidden bg-gray-800/25 backdrop-blur-md shadow-md sm:rounded-lg lg:mt-10">
                <div class="flex-row items-center justify-center p-10 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                    <div class="mt-1 flex items-center gap-x-1.5">
                        <div class="flex-none rounded-full bg-emerald-500/20 p-2 animate-pulse" id="js-logo-outer">
                            <div class="h-8 w-8 rounded-full bg-emerald-500" id="js-logo-inner"></div>
                        </div>
                    </div>
                    <h1 class="text-yellow-500 text-5xl font-bold">Add a new website</h1>
                </div>
            </div>

        </section>

        <?php if (isset($message)) : ?>
            <section class="w-full max-w-screen-xl px-4 mx-auto lg:px-12 mb-4">
                <div class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-100 mx-auto"><?php echo $message; ?></h5>
                 </div>
            </section>
        <?php endif; ?>

        <section class="w-2/3 max-w-screen-xl px-4 mx-auto lg:px-12 mb-4">
            <div class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row">

                <form method="POST" action="<?php echo APP_URL; ?>create-websites" enctype="application/x-www-form-urlencoded" class="px-5 w-full">
                    <label class="text-gray-100 text-lg font-semibold mb-1">Give the site a name</label>
                    <div class="relative w-full mb-4 mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>

                        <input type="text" id="name" name="name" class="border text-sm rounded-lg block w-96 pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-emerald-500" placeholder="Website name" required>
                    </div>


                    <label class="text-gray-100 text-lg font-semibold mb-1">Provide the URL</label>
                    <div class="relative w-full mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="url" name="url" class="border text-sm rounded-lg block w-full pl-10 p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-emerald-500" placeholder="https://www.example.com/" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-4 rounded-lg mt-5">Create website</button>
                    </div>
                </form>

            </div>
        </section>


    </div>
</div>