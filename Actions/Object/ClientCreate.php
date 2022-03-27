<?php

namespace Modules\FinanceClientMod\Actions\Object;

use Modules\FinanceClientMod\Entities\Client;

/**
 * Store a new Client
 */
class ClientCreate
{
    private Client $client;

    public function run()
    {
        return $this->client->save();
    }

    /**
     * @param Client $client
     * @return void
     */
    public function setClient( Client $client ): void
    {
        $this->client = $client;
    }
}
