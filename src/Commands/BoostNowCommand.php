<?php

namespace ParthaSaha\LaraBoost\Commands;

use Illuminate\Console\Command;

class BoostNowCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boostnow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear and rebuild caches, then list routes';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $commands = [
            'optimize:clear',
            'optimize',
            'config:clear',
            'config:cache',
            'route:clear',
            'route:list',
        ];

        foreach ($commands as $command) {
            $this->components->info("Running {$command}...");

            $exitCode = $this->call($command);

            if ($exitCode !== self::SUCCESS) {
                $this->components->error("Command [{$command}] failed.");

                return $exitCode;
            }

            $this->newLine();
        }

        $this->components->info('BoostNow completed successfully.');

        return self::SUCCESS;
    }
}
