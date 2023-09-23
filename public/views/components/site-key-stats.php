<section class="max-w-screen-xl px-4 mx-auto lg:px-12 mb-4 relative">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-6 bg-gray-800/25 backdrop-blur-md rounded-lg text-gray-100 px-5">
        <span class="text-xs absolute top-1 left-0 mt-2 ml-4 mt-1 text-gray-300">Just now (<?php echo date("H:i:s"); ?>)</span>
        
        <div class="sm:flex sm:space-x-4">

            <div class="inline-block align-bottom rounded-lg text-center overflow-hidden transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div>
                    <div class="sm:flex sm:items-start justify-center items-center">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium text-gray-400">HTTP code</h3>
                            <?php $is2xx = substr( ( string ) $testRequest['http_code'], 0, 1 ) === '2'; ?>
                            <p class="text-3xl font-bold text-<?php echo $is2xx ? 'emerald' : 'red';?>-400"><?php echo $testRequest['http_code']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inline-block align-bottom rounded-lg text-center overflow-hidden transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div>
                    <div class="sm:flex sm:items-start justify-center items-center">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium text-gray-400">Primary IP</h3>
                            <p class="text-3xl font-bold text-white"><?php echo $testRequest['primary_ip']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inline-block align-bottom rounded-lg text-center overflow-hidden transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div>
                    <div class="sm:flex sm:items-start justify-center items-center">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium text-gray-400">Request & response time</h3>
                            <p class="text-3xl font-bold text-white"><?php echo $testRequest['total_time']; ?>s</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inline-block align-bottom rounded-lg text-center overflow-hidden transform transition-all mb-4 w-full sm:w-1/3 sm:my-8">
                <div>
                    <div class="sm:flex sm:items-start justify-center items-center">
                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                            <h3 class="text-sm leading-6 font-medium text-gray-400">Download Speed</h3>
                            <p class="text-3xl font-bold text-white"><?php echo \UptimeMonitor\Core\Helpers::bytesPerSecondToKbps( $testRequest['speed_download'] ); ?>Kb/s</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>