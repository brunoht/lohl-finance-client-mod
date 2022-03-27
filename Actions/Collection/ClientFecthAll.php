<?php

namespace Modules\FinanceClientMod\Actions\Collection;

use Modules\FinanceClientMod\Entities\Client;

/**
 * Fetch all stored Clients
 */
class ClientFecthAll
{
    public function run()
    {
        return Client::all()->sortBy('id');
    }
}
