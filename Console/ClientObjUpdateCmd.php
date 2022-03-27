<?php

namespace Modules\FinanceClientMod\Console;

use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Modules\App\Helpers\Command\InputValidator;
use Modules\App\Helpers\Command\MenuCreateUpdate;
use Modules\FinanceClientMod\Actions\Object\ClientFetch;
use Modules\FinanceClientMod\Actions\Object\ClientUpdate;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ClientObjUpdateCmd extends Command
{
    use MenuCreateUpdate, InputValidator;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'finance:client-update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update a persisted Client.';

    /**
     * @var ClientFetch
     */
    private ClientFetch $clientFetch;

    /**
     * @var ClientUpdate
     */
    private ClientUpdate $clientUpdate;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct (
        ClientFetch $clientFetch,
        ClientUpdate $clientUpdate
    ) {
        parent::__construct();
        $this->clientFetch = $clientFetch;
        $this->clientUpdate = $clientUpdate;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() : int
    {
        // fetch the Client object
        $this->clientFetch->setId( $this->argument('client-id') );
        $client = $this->clientFetch->run();

        // prepare the function to update client
        $store = function ( $client ) {
            try {
                $this->clientUpdate->setClient( $client );
                $this->clientUpdate->run();
                $client->printAttributes();
                $this->info('[ SUCCESS ] SUCCESSFULLY UPDATED');
            } catch (QueryException $e) {
                if ( $e->getCode() === '23505' ) $this->error('[ ERROR ] ALREADY EXISTS');
            }
        };

        // starts the menu on terminal
        return $this->menu( $client, $store );
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['client-id', InputArgument::REQUIRED, 'Client ID.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
