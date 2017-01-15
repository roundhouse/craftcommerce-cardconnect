<?php

namespace Omnipay\Cardconnect\Message;

class CaptureRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount', 'transactionReference');
    	$data = array(
    		'merchid'   => $this->getMerchantId(),
    		'amount'    => $this->getAmountInteger(),
    		'currency'  => $this->getCurrency(),
    		'retref'   => $this->getTransactionReference()
    	);

        error_log(print_r($this->getEndpoint(), TRUE)); 
        error_log(print_r($data, TRUE)); 
        
        return $data;
    }

    public function getEndpoint()
    {
        return $this->getEndpointBase() . "/capture";
    }
}
