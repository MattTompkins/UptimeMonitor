<?php if ( isset( $message ) ) : ?>
    <section class="w-full max-w-screen-xl px-4 mx-auto lg:px-12 mb-4">
        <div class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-100 mx-auto"><?php echo $message; ?></h5>
        </div>
    </section>
<?php endif; ?>