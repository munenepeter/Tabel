<?php

namespace App\Console\Commands;

use Tabel\Core\Command;

class SampleCommand extends Command {

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int {
        try {

            $this->info('Staring my Sample..');
            //call sampling ;
            $this->info('sampling completed successfully!');

            return 0; // Success
        } catch (\Exception $e) {
            $this->error($e->getMessage());
            return 1; // Failure
        }
    }
}
