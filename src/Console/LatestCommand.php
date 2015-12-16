<?php

namespace Phroggyy\LaravelAdminer\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class LatestCommand extends Command
{
    protected $signature = 'adminer:latest {--mysql} {--en} {--b|bare}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch the latest version of Adminer';

    protected $files;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;
        parent::__construct();
    }
    
    public function handle()
    {
        $file = 'https://www.adminer.org/latest';

        if ($this->option('bare')) {
            $file .= '-mysql-en';
        } else {
            if ($this->option('mysql')) {
                $file .= '-mysql';
            }

            if ($this->option('en')) {
                $file .= '-en';
            }
        }

        $file .= '.php';

        $this->files->put("adminer.php", fopen($file));
        $this->info("Latest adminer version downloaded.");
    }
}