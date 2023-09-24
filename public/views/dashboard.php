<div class="relative isolate px-6 pt-14 lg:px-8 relative z-10">
	<div class="container mx-auto">

		<?php include( 'components/page-header.php' ); ?>
		<?php include( 'components/page-message.php' ); ?>

		<section class="w-full max-w-screen-xl px-4 mx-auto lg:px-12 mb-4">
			<a href="<?php APP_URL; ?>/create-website" class="flex flex-col items-center py-6 bg-gray-800/25 backdrop-blur-md rounded-lg shadow md:flex-row hover:backdrop-blur-xl  border-transparent border hover:border-emerald-500">
				<div class="px-12 text-white">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
					</svg>
				</div>
				<div class="flex flex-col justify-between p-4 leading-normal">
					<h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-100">Add a new website</h5>
					<p class="mb-3 font-normal text-lg text-gray-100">Add a new website to begin monitoring it's key vital signs!</p>
				</div>
			</a>
		</section>

		<?php 
		if ( isset( $sites ) ) : 
			foreach ( $sites as $site ) :
				include( 'components/dashboard-site-card.php');
			endforeach;
		 endif;
		?>


	</div>
</div>