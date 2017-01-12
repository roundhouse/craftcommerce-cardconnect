<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\CreditCardGatewayAdapter;

class Cardconnect_GatewayAdapter extends CreditCardGatewayAdapter
{
    public function handle()
    {
        return "Cardconnect_Ecommerce";
    }
}

