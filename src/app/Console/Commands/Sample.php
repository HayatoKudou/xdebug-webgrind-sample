<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Sample extends Command
{
    protected $signature = 'app:sample';
    protected $description = 'プロファイルのサンプル';

    public function handle()
    {
        function heavyComputation() {
            $sum = 0;
            for ($i = 0; $i < 1000000; $i++) {
                $sum += sqrt($i);
            }
            return $sum;
        }

        $result = heavyComputation();

        echo "Result: " . $result . PHP_EOL;
    }
}
