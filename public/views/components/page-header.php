<?php if ( isset( $page_title) ) : ?>
    <section class="w-full max-w-screen-xl px-4 mx-auto lg:px-12 mb-6">

        <div class="relative overflow-hidden bg-gray-800/25 backdrop-blur-md shadow-md sm:rounded-lg lg:mt-10">
            <div class="flex-row items-center justify-center p-10 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                <div class="mt-1 flex items-center gap-x-1.5">
                    <div class="flex-none rounded-full bg-emerald-500/20 p-2 animate-pulse" id="js-logo-outer">
                        <div class="h-8 w-8 rounded-full bg-emerald-500" id="js-logo-inner"></div>
                    </div>
                </div>
                <h1 class="text-yellow-500 text-5xl font-bold"><?php echo $page_title; ?></h1>
            </div>
        </div>

    </section>
<?php endif; ?>