<?php

namespace Braiunito\DtoGenericEvent\DTO;

use JMS\Serializer\Annotation\Type;

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

    /** @var string */
    public ?string $chargeDate = null;
    
    /** @var string */
    public ?string $charChain = null;
    
    /** @var string */
    public ?bool $largeData = null;

    /**
     * @var array 
     * @Type("array")
     */
    public ?array $setOfCharChain = null;

    /**
     * @var array 
     * @Type("array")
     */
    public ?array $internalInvoiceDate = [];

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
    
    public function getInternalInvoiceDate(): ?array
    {
        return $this->internalInvoiceDate;
    }
    
    public function setInternalInvoiceDate(?array $internalInvoiceDate): self
    {
        $this->internalInvoiceDate = $internalInvoiceDate;

        return $this;
    }
    
    public function getCharChain(): ?string
    {
        return $this->charChain;
    }
    
    public function setCharChain(?string $charChain): self
    {
        $this->charChain = $charChain;

        return $this;
    }
    
    public function getChargeDate(): ?string
    {
        return $this->chargeDate;
    }
    
    public function setChargeDate(?string $chargeDate): self
    {
        $this->chargeDate = $chargeDate;

        return $this;
    }
    
    public function getLargeData(): ?bool
    {
        return $this->largeData;
    }
    
    public function setLargeData(?bool $largeData): self
    {
        $this->largeData = $largeData;

        return $this;
    }
    
    public function getSetOfCharChain(): ?array
    {
        return $this->setOfCharChain;
    }
    
    public function setSetOfCharChain(?array $setOfCharChain): self
    {
        $this->setOfCharChain = $setOfCharChain;

        return $this;
    }
}
