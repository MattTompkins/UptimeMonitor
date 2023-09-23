<div class="relative isolate px-6 pt-14 lg:px-8 relative z-10">
    <div class="container mx-auto">

    <?php include( 'components/page-header.php' ); ?>
    <?php include( 'components/page-message.php' ); ?>

    <?php include( 'components/site-key-stats.php' ); ?>

        <section class="max-w-screen-xl px-5 mx-auto lg:px-12 mb-4">
            <div class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row text-gray-100 px-5">

            <pre>
            <?php print_r($testRequest); ?>
            </pre>
            </div>
        </section>


    </div>
</div>