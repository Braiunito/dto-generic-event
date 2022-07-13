<?php

namespace Braiunito\DtoGenericEvent\DTO;

final class DTOInvoice
{   
    /** @var string */
    public ?string $providerNif = null;

    /** @var string */
    public ?string $buyerNif = null;

    /** @var string */
    public ?string $businessClientNif = null;

    /** @var string */
    public ?string $marketplace = null;

    /** @var string */
    public ?string $invoiceType = null;

    /** @var string */
    public ?string $internalInvoiceNumber = null;

    /** @var string */
    public ?string $docNumber = null;

    /** @var string */
    public ?string $status = null;

    public function getProviderNif()
    {
        return $this->providerNif;
    }

    public function setProviderNif($providerNif)
    {
        $this->providerNif = $providerNif;

        return $this;
    }

    public function getBuyerNif()
    {
        return $this->buyerNif;
    }

    public function setBuyerNif($buyerNif)
    {
        $this->buyerNif = $buyerNif;

        return $this;
    }

    public function getBusinessClientNif()
    {
        return $this->businessClientNif;
    }

    public function setBusinessClientNif($businessClientNif)
    {
        $this->businessClientNif = $businessClientNif;

        return $this;
    }

    public function getMarketplace()
    {
        return $this->marketplace;
    }

    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    public function getInternalInvoiceNumber()
    {
        return $this->internalInvoiceNumber;
    }

    public function setInternalInvoiceNumber($internalInvoiceNumber)
    {
        $this->internalInvoiceNumber = $internalInvoiceNumber;

        return $this;
    }
    
    public function getDocNumber()
    {
        return $this->docNumber;
    }
    
    public function setDocNumber($docNumber)
    {
        $this->docNumber = $docNumber;

        return $this;
    }
    
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
