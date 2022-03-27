<?php

namespace Modules\FinanceClientMod\Console;

use Illuminate\Console\Command;
use Modules\App\Helpers\Command\CollectionListHandler;
use Modules\FinanceClientMod\Actions\Collection\ClientFecthAll;
use Symfony\Component\Console\Input\InputOption;

class ClientColFetchAllCmd extends Command
{
    use CollectionListHandler;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'finance:client-all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all persisted Clients.';

    /**
     * @var ClientFecthAll
     */
    private ClientFecthAll $clientFecthAll;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ClientFecthAll $clientFecthAll)
    {
        parent::__construct();
        $this->clientFecthAll = $clientFecthAll;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->listHandler( $this->clientFecthAll->run() );
        return 0;
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
