<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use App\Http\DataParser;
use Illuminate\Console\Command;

class CakeCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cake:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scheduled task';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param DataParser $parser
     * @return int
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function handle(DataParser $parser)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://api.reddit.com/r/users/search?q=wordnerds&limit=5');
        $response = $request->getBody()->getContents();
        $parser->parse(json_decode($response));
        \Log::info("Cake Cron execution!");
        $this->info('Cake:Cron Command is working fine!');
    }
}
