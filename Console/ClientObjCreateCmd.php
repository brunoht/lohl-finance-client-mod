<?php

namespace Modules\FinanceClientMod\Console;

use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Modules\App\Helpers\Command\InputValidator;
use Modules\App\Helpers\Command\MenuCreateUpdate;
use Modules\FinanceClientMod\Entities\Client;
use Symfony\Component\Console\Input\InputOption;
use Modules\FinanceClientMod\Actions\Object\ClientCreate;

class ClientObjCreateCmd extends Command
{
    use MenuCreateUpdate, InputValidator;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'finance:client-create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new client.';

    /**
     * @var ClientCreate
     */
    private ClientCreate $clientCreate;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ClientCreate $clientCreate)
    {
        parent::__construct();
        $this->clientCreate = $clientCreate;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $create = function ( $client ) {
            try {
                $this->clientCreate->setClient($client);
                $this->clientCreate->run();
                $client->printAttributes();
                $this->info('[ SUCCESS ] SUCCESSFULLY CREATED');
            } catch (QueryException $e) {
                if ( $e->getCode() === '23505' ) $this->error('[ ERROR ] ALREADY EXISTS');
                else dd( $e );
            }
        };

        $this->menu(Client::getInstance(), $create);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
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
