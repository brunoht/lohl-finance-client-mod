<?php

namespace Modules\FinanceClientMod\Actions\Object;

use Modules\FinanceClientMod\Entities\Client;

/**
 * Delete a stored Client
 */
class ClientDelete
{
    private $id;

    public function run()
    {
        $clientFetch = new ClientFetch();
        $clientFetch->setId( $this->id );
        $client = $clientFetch->run();
        return $client->delete();
    }

    /**
     * @param $id
     * @return void
     */
    public function setId( $id ) : void
    {
        $this->id = $id;
    }
}
