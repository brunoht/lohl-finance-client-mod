<?php

namespace Modules\FinanceClientMod\Actions\Object;

use Modules\FinanceClientMod\Entities\Client;

/**
 * Update a stored Client by its ID
 */
class ClientUpdate
{
    private Client $client;

    public function run()
    {
        $this->client->save();
        return $this->client;
    }

    /**
     * @param Client $category
     * @return void
     */
    public function setClient( Client $client ) : void
    {
        $this->client = $client;
    }
}
