<?php

namespace Modules\FinanceClientMod\Console;

use Illuminate\Console\Command;
use Modules\FinanceClientMod\Actions\Bulk\ClientBulkDelete;
use Symfony\Component\Console\Input\InputOption;

class ClientBulkDeleteCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'finance:client-bulk-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all Clients';

    /**
     * @var ClientBulkDelete
     */
    private ClientBulkDelete $clientBulkDelete;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ClientBulkDelete $clientBulkDelete)
    {
        parent::__construct();
        $this->clientBulkDelete = $clientBulkDelete;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->clientBulkDelete->run();
        $this->info('SUCCESS');
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
