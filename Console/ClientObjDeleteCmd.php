<?php

namespace Modules\FinanceClientMod\Console;

use Illuminate\Console\Command;
use Modules\FinanceClientMod\Actions\Object\ClientDelete;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ClientObjDeleteCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'finance:client-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a persisted Client.';

    /**
     * @var ClientDelete
     */
    private ClientDelete $clientDelete;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ClientDelete $clientDelete)
    {
        parent::__construct();
        $this->clientDelete = $clientDelete;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $this->clientDelete->setId( $this->argument('client-id') );
            $this->clientDelete->run();
            $this->info('SUCCESS');
        } catch (\Error $e) {
            $this->error('[ ERROR ] NOT FOUND');
        } finally {
            return 0;
        }
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
