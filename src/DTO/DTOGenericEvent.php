<?php

namespace Braiunito\DtoGenericEvent\DTO;

use DateTimeInterface;
use Braiunito\DtoGenericEvent\DTO\DTOCustomData as CustomData;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DTOGenericEvent
{   
    /** @var string|null */
    protected $data = null;
    
    /** @var string|null */
    protected $file = null;
    
    /** @var string|null */
    protected $buyerSocialDenomination = null;
    
    /** @var string|null */
    protected $buyerNif = null;
    
    /** @var string|null */
    protected $buyerAlternativeNifId = null;
    
    /** @var string|null */
    protected $buyerCountry = null;
    
    /** @var string|null */
    protected $buyerAlternativeNifType = null;
    
    /** @var string|null */
    protected $providerSocialDenomination = null;
    
    /** @var string|null */
    protected $providerNif = null;
    
    /** @var string|null */
    protected $providerAlternativeNifId = null;
    
    /** @var string|null */
    protected $providerCountry = null;
    
    /** @var string|null */
    protected $providerAlternativeNifType = null;
    
    /** @var CustomData[]|null */
    protected $customData = null;
    
    /** @var DateTimeInterface|null */
    protected $dateOrder = null;
    
    /** @var DateTimeInterface[]|null */
    protected $datesInvOrders = null;
    
    /** @var DateTimeInterface|null */
    protected $sendDate = null;
    
    /** @var DateTimeInterface|null */
    protected $merchandiseReceptionDate = null;
    
    /** @var string|null */
    protected $confirmationReceptionNumber = null;
    
    /** @var string|null */
    protected $shippingNoticeNumber = null;
    
    /** @var array|null */
    protected $docNumbersInvOrders = null;
    
    /** @var string|null */
    protected $docNumberOrder = null;
    
    /** @var string|null */
    protected $marketplace = null;
    
    protected $status = null;

    /** @var string|null */
    protected $freightGlobalChargeAmountOrders = null;

    /** @var string|null */
    protected $internalInvoiceNumber = null;

    /** @var string|null */
    protected $assemblyGlobalChargeAmountOrders = null;

    /** @var string|null */
    protected $totalBaseTaxInvoic = null;

    /** @var string|null */
    protected $companyClientAlternativeNifType = null;

    /** @var string|null */
    protected $companyClientAlternativeNifId = null;

    /** @var string|null */
    protected $totalAmountOrders = null;

    /** @var string|null */
    protected $taxesGlobalChargeAmountInvoic = null;

    /** @var string|null */
    protected $invoiceType = null;

    /** @var string|null */
    protected $chargeAmount = null;

    /** @var string|null */
    protected $assemblyGlobalChargeAmountInvoic = null;

    /** @var DateTimeInterface|null */
    protected $invoiceDate = null;

    /** @var DateTimeInterface|null */
    protected $paymentDate = null;

    /** @var string|null */
    protected $companyClientSocialDenomination = null;

    /** @var string|null */
    protected $description = null;

    /** @var string|null */
    protected $invoiceNumber = null;

    /** @var DateTimeInterface|null */
    protected $chargeDate = null;

    /** @var string|null */
    protected $freightGlobalChargeAmountInvoic = null;

    /** @var string|null */
    protected $totalBaseTaxOrders = null;

    /** @var DateTimeInterface|null */
    protected $effectiveDeadlineDate = null;

    /** @var string|null */
    protected $amountGlobalChargeInvoic = null;

    /** @var string|null */
    protected $unitNetPriceOrders = null;

    /** @var string|null */
    protected $othersGlobalChargeAmount = null;

    /** @var string|null */
    protected $taxesGlobalChargeAmountOrders = null;

    /** @var DateTimeInterface|null */
    protected $internalInvoiceDate = null;

    /** @var string|null */
    protected $totalAmountInvoic = null;

    /** @var string|null */
    protected $unitNetPriceInvoic = null;

    /** @var string|null */
    protected $companyClientNif = null;

    /** @var string|null */
    protected $companyClientCountry = null;

    /** @var string|null */
    protected $paymentAmount = null;

    /** @var string|null */
    protected $currency = null;

    /** @var string|null */
    protected $dataAmount = null;

    /** @var array|null */
    protected $eventHash = null;

    public function parseToCustomData(array $customData): CustomData
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $customData = $serializer->serialize($customData, 'json');
        $customData = $serializer->deserialize($customData, CustomData::class, 'json');
        
        $dataAmount = $this->parseToFloat($customData->getDataAmount());
        $customData->setDataAmount($dataAmount);

        return $customData;
    }

    public function parseToFloat(?string $number): ?float
    {
        if ($number) {
            $number = (float) str_replace(",", ".", $number);
        }
        
        return $number;
    }

    public function toDateTime($date): ?DateTimeInterface
    {
        if ($date) {
            try {
                return (new \DateTime((string) $date));
            } catch (\Throwable $th) {
                return null;
            }
        }
        return null;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile($file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getBuyerSocialDenomination(): ?string
    {
        return $this->buyerSocialDenomination;
    }

    public function setBuyerSocialDenomination($buyerSocialDenomination): self
    {
        $this->buyerSocialDenomination = $buyerSocialDenomination;

        return $this;
    }

    public function getBuyerNif(): ?string
    {
        return $this->buyerNif;
    }

    public function setBuyerNif($buyerNif): self
    {
        $this->buyerNif = $buyerNif;

        return $this;
    }

    public function getBuyerAlternativeNifId(): ?string
    {
        return $this->buyerAlternativeNifId;
    }

    public function setBuyerAlternativeNifId($buyerAlternativeNifId): self
    {
        $this->buyerAlternativeNifId = $buyerAlternativeNifId;

        return $this;
    }

    public function getBuyerCountry(): ?string
    {
        return $this->buyerCountry;
    }

    public function setBuyerCountry($buyerCountry): self
    {
        $this->buyerCountry = $buyerCountry;

        return $this;
    }

    public function getBuyerAlternativeNifType(): ?string
    {
        return $this->buyerAlternativeNifType;
    }

    public function setBuyerAlternativeNifType($buyerAlternativeNifType): self
    {
        $this->buyerAlternativeNifType = $buyerAlternativeNifType;

        return $this;
    }

    public function getProviderSocialDenomination(): ?string
    {
        return $this->providerSocialDenomination;
    }

    public function setProviderSocialDenomination($providerSocialDenomination): self
    {
        $this->providerSocialDenomination = $providerSocialDenomination;

        return $this;
    }

    public function getProviderNif(): ?string
    {
        return $this->providerNif;
    }

    public function setProviderNif($providerNif): self
    {
        $this->providerNif = $providerNif;

        return $this;
    }

    public function getProviderAlternativeNifId(): ?string
    {
        return $this->providerAlternativeNifId;
    }

    public function setProviderAlternativeNifId($providerAlternativeNifId): self
    {
        $this->providerAlternativeNifId = $providerAlternativeNifId;

        return $this;
    }

    public function getProviderCountry(): ?string
    {
        return $this->providerCountry;
    }

    public function setProviderCountry($providerCountry): self
    {
        $this->providerCountry = $providerCountry;

        return $this;
    }

    public function getProviderAlternativeNifType(): ?string
    {
        return $this->providerAlternativeNifType;
    }

    public function setProviderAlternativeNifType($providerAlternativeNifType): self
    {
        $this->providerAlternativeNifType = $providerAlternativeNifType;

        return $this;
    }

    public function getCustomData(): ?Array
    {
        return $this->customData;
    }

    public function setCustomData($customData): self
    {
        $this->customData = $customData;

        return $this;
    }

    public function getDateOrder(): ?DateTimeInterface
    {
        return $this->toDateTime($this->dateOrder);
    }

    public function setDateOrder($dateOrder): self
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }

    public function getSendDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->sendDate);
    }

    public function setSendDate($sendDate): self
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    public function getMerchandiseReceptionDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->merchandiseReceptionDate);
    }

    public function setMerchandiseReceptionDate($merchandiseReceptionDate): self
    {
        $this->merchandiseReceptionDate = $merchandiseReceptionDate;

        return $this;
    }

    public function getConfirmationReceptionNumber(): ?string
    {
        return $this->confirmationReceptionNumber;
    }

    public function setConfirmationReceptionNumber($confirmationReceptionNumber): self
    {
        $this->confirmationReceptionNumber = $confirmationReceptionNumber;

        return $this;
    }

    public function getMarketplace(): ?string
    {
        return $this->marketplace;
    }

    public function setMarketplace($marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getStatus(): ?String
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFreightGlobalChargeAmountOrders(): ?string
    {
        return $this->parseToFloat($this->freightGlobalChargeAmountOrders);
    }

    public function setFreightGlobalChargeAmountOrders($freightGlobalChargeAmountOrders): self
    {
        $this->freightGlobalChargeAmountOrders = $freightGlobalChargeAmountOrders;

        return $this;
    }

    public function getInternalInvoiceNumber(): ?string
    {
        return $this->internalInvoiceNumber;
    }

    public function setInternalInvoiceNumber($internalInvoiceNumber): self
    {
        $this->internalInvoiceNumber = $internalInvoiceNumber;

        return $this;
    }

    public function getAssemblyGlobalChargeAmountOrders(): ?string
    {
        return $this->assemblyGlobalChargeAmountOrders;
    }

    public function setAssemblyGlobalChargeAmountOrders($assemblyGlobalChargeAmountOrders): self
    {
        $this->assemblyGlobalChargeAmountOrders = $assemblyGlobalChargeAmountOrders;

        return $this;
    }

    public function getTotalBaseTaxInvoic(): ?string
    {
        return $this->parseToFloat($this->totalBaseTaxInvoic);
    }

    public function setTotalBaseTaxInvoic($totalBaseTaxInvoic): self
    {
        $this->totalBaseTaxInvoic = $totalBaseTaxInvoic;

        return $this;
    }

    public function getCompanyClientAlternativeNifType(): ?string
    {
        return $this->companyClientAlternativeNifType;
    }

    public function setCompanyClientAlternativeNifType($companyClientAlternativeNifType): self
    {
        $this->companyClientAlternativeNifType = $companyClientAlternativeNifType;

        return $this;
    }

    public function getCompanyClientAlternativeNifId(): ?string
    {
        return $this->companyClientAlternativeNifId;
    }

    public function setCompanyClientAlternativeNifId($companyClientAlternativeNifId): self
    {
        $this->companyClientAlternativeNifId = $companyClientAlternativeNifId;

        return $this;
    }

    public function getTotalAmountOrders(): ?string
    {
        return $this->parseToFloat($this->totalAmountOrders);
    }

    public function setTotalAmountOrders($totalAmountOrders): self
    {
        $this->totalAmountOrders = $totalAmountOrders;

        return $this;
    }

    public function getTaxesGlobalChargeAmountInvoic(): ?string
    {
        return $this->parseToFloat($this->taxesGlobalChargeAmountInvoic);
    }

    public function setTaxesGlobalChargeAmountInvoic($taxesGlobalChargeAmountInvoic): self
    {
        $this->taxesGlobalChargeAmountInvoic = $taxesGlobalChargeAmountInvoic;

        return $this;
    }

    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }

    public function setInvoiceType($invoiceType): self
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    public function getChargeAmount(): ?string
    {
        return $this->chargeAmount;
    }

    public function setChargeAmount($chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;

        return $this;
    }

    public function getAssemblyGlobalChargeAmountInvoic(): ?string
    {
        return $this->parseToFloat($this->assemblyGlobalChargeAmountInvoic);
    }

    public function setAssemblyGlobalChargeAmountInvoic($assemblyGlobalChargeAmountInvoic): self
    {
        $this->assemblyGlobalChargeAmountInvoic = $assemblyGlobalChargeAmountInvoic;

        return $this;
    }

    public function getInvoiceDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->invoiceDate);
    }

    public function setInvoiceDate($invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    public function getPaymentDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->paymentDate);
    }

    public function setPaymentDate($paymentDate): self
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    public function getCompanyClientSocialDenomination(): ?string
    {
        return $this->companyClientSocialDenomination;
    }

    public function setCompanyClientSocialDenomination($companyClientSocialDenomination): self
    {
        $this->companyClientSocialDenomination = $companyClientSocialDenomination;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber($invoiceNumber): self
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    public function getChargeDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->chargeDate);
    }

    public function setChargeDate($chargeDate): self
    {
        $this->chargeDate = $chargeDate;

        return $this;
    }

    public function getFreightGlobalChargeAmountInvoic(): ?string
    {
        return $this->parseToFloat($this->freightGlobalChargeAmountInvoic);
    }

    public function setFreightGlobalChargeAmountInvoic($freightGlobalChargeAmountInvoic): self
    {
        $this->freightGlobalChargeAmountInvoic = $freightGlobalChargeAmountInvoic;

        return $this;
    }

    public function getTotalBaseTaxOrders(): ?string
    {
        return $this->parseToFloat($this->totalBaseTaxOrders);
    }

    public function setTotalBaseTaxOrders($totalBaseTaxOrders): self
    {
        $this->totalBaseTaxOrders = $totalBaseTaxOrders;

        return $this;
    }

    public function getEffectiveDeadlineDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->effectiveDeadlineDate);
    }

    public function setEffectiveDeadlineDate($effectiveDeadlineDate): self
    {
        $this->effectiveDeadlineDate = $effectiveDeadlineDate;

        return $this;
    }

    public function getAmountGlobalChargeInvoic(): ?string
    {
        return $this->parseToFloat($this->amountGlobalChargeInvoic);
    }

    public function setAmountGlobalChargeInvoic($amountGlobalChargeInvoic): self
    {
        $this->amountGlobalChargeInvoic = $amountGlobalChargeInvoic;

        return $this;
    }

    public function getUnitNetPriceOrders(): ?string
    {
        return $this->unitNetPriceOrders;
    }

    public function setUnitNetPriceOrders($unitNetPriceOrders): self
    {
        $this->unitNetPriceOrders = $unitNetPriceOrders;

        return $this;
    }

    public function getOthersGlobalChargeAmount(): ?string
    {
        return $this->parseToFloat($this->othersGlobalChargeAmount);
    }

    public function setOthersGlobalChargeAmount($othersGlobalChargeAmount): self
    {
        $this->othersGlobalChargeAmount = $othersGlobalChargeAmount;

        return $this;
    }

    public function getTaxesGlobalChargeAmountOrders(): ?string
    {
        return $this->parseToFloat($this->taxesGlobalChargeAmountOrders);
    }

    public function setTaxesGlobalChargeAmountOrders($taxesGlobalChargeAmountOrders): self
    {
        $this->taxesGlobalChargeAmountOrders = $taxesGlobalChargeAmountOrders;

        return $this;
    }

    public function getInternalInvoiceDate(): ?DateTimeInterface
    {
        return $this->toDateTime($this->internalInvoiceDate);
    }

    public function setInternalInvoiceDate($internalInvoiceDate): self
    {
        $this->internalInvoiceDate = $internalInvoiceDate;

        return $this;
    }

    public function getTotalAmountInvoic(): ?string
    {
        return $this->parseToFloat($this->totalAmountInvoic);
    }

    public function setTotalAmountInvoic($totalAmountInvoic): self
    {
        $this->totalAmountInvoic = $totalAmountInvoic;

        return $this;
    }

    public function getUnitNetPriceInvoic(): ?string
    {
        return $this->parseToFloat($this->unitNetPriceInvoic);
    }

    public function setUnitNetPriceInvoic($unitNetPriceInvoic): self
    {
        $this->unitNetPriceInvoic = $unitNetPriceInvoic;

        return $this;
    }

    public function getCompanyClientNif(): ?string
    {
        return $this->companyClientNif;
    }

    public function setCompanyClientNif($companyClientNif): self
    {
        $this->companyClientNif = $companyClientNif;

        return $this;
    }

    public function getCompanyClientCountry(): ?string
    {
        return $this->companyClientCountry;
    }

    public function setCompanyClientCountry($companyClientCountry): self
    {
        $this->companyClientCountry = $companyClientCountry;

        return $this;
    }

    public function getPaymentAmount(): ?string
    {
        return $this->parseToFloat($this->paymentAmount);
    }

    public function setPaymentAmount($paymentAmount): self
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    public function getShippingNoticeNumber(): ?string
    {
        return $this->shippingNoticeNumber;
    }
    
    public function setShippingNoticeNumber($shippingNoticeNumber): self
    {
        $this->shippingNoticeNumber = $shippingNoticeNumber;

        return $this;
    }
    
    public function getDocNumberOrder()
    {
        return $this->docNumberOrder;
    }
    
    public function setDocNumberOrder($docNumberOrder)
    {
        $this->docNumberOrder = $docNumberOrder;

        return $this;
    }

    public function getDatesInvOrders(): ?Array
    {
        return $this->datesInvOrders;
    }
    
    public function setDatesInvOrders(array $datesInvOrders): self
    {
        $this->dateOrder = null;
        $this->datesInvOrders = $datesInvOrders;

        return $this;
    }

    public function getDocNumbersInvOrders(): ?array
    {
        return $this->docNumbersInvOrders;
    }

    public function setDocNumbersInvOrders(array $docNumbersInvOrders): self
    {
        $this->docNumbersInvOrders = $docNumbersInvOrders;

        return $this;
    }
    
    public function getCurrency()
    {
        return $this->currency;
    }
    
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }
    
    public function getDataAmount()
    {
        return $this->dataAmount;
    }
    
    public function setDataAmount($dataAmount)
    {
        $this->dataAmount = $dataAmount;

        return $this;
    }
    
    public function getEventHash(): ?array
    {
        return $this->eventHash;
    }
    
    public function setEventHash($eventHash): self
    {
        $this->eventHash = $eventHash;

        return $this;
    }
}

