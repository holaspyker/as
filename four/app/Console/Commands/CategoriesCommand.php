<?php

namespace App\Console\Commands;

use App\categories;
use App\Http\Controllers\CategoriesController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CategoriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the categories from the API ';

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
     * @return int
     */
    public function handle()
    {

        $response = Http::get(config('services.foursquare.api') . config('services.foursquare.categories'),//"https://api.foursquare.com/v2/venues/categories",
            [
                'client_id' => config('services.foursquare.client_id'), //'2PKBKOJJLLHWVYLN1TJEIHHFIZHGH2IAX1CDEPGT330Z4FIM',
                'client_secret' => config('services.foursquare.client_secret'),//'5TIHLULOLAA0INDDKO3YUMCFX3SJ3BIMDCMFWHBB51DQC4QN',
                'v' => config('services.foursquare.version')// '20180323'
            ]
        );;

        $cat_controller = new CategoriesController();
            $cat_controller->parseReponse( $response['response']['categories']);


    }
}
