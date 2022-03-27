<?php

namespace Modules\FinanceClientMod\Actions\Bulk;

use Modules\FinanceClientMod\Entities\Client;

/**
 * Delete all stored Clients
 */
class ClientBulkDelete
{
    public function run()
    {
        Client::truncate();
    }
}
