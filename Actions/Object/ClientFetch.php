<?php

namespace Modules\FinanceClientMod\Actions\Object;

use Modules\FinanceClientMod\Entities\Client;

/**
 * Fetch a Client by its ID
 */
class ClientFetch
{
    private $id;

    public function run()
    {
        return Client::where('id', $this->id)->first();
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
