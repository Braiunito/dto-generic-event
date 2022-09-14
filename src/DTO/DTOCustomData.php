<?php

namespace Braiunito\DtoGenericEvent\DTO;

final class DTOCustomData
{   
    /** @var integer|null */
    protected ?int $position = null;

    /** @var string|null */
    protected ?string $description = null;
    
    /** @var string|null */
    protected ?string $dataString = null;
    
    /** @var string|null */
    protected ?string $dataAmount = null;
    
    /** @var string|null */
    protected ?string $dataDate = null;
    
    /** @var string|null */
    protected ?string $dataTimestamp = null;
    
    /** @var string|null */
    protected ?string $dataNumeric = null;
    
    /** @var string|null */
    protected ?string $operation = null;

    /** @var string|null */
    protected ?string $eventId = null;

    public function __construct(
        $position = null,
        $description = null,
        $dataString = null,
        $dataAmount = null,
        $dataDate = null,
        $dataTimestamp = null,
        $dataNumeric = null,
        $operation = null
    )
    {
        $this->position = $position;
        $this->description = $description;
        $this->dataString = $dataString;
        $this->dataAmount = $dataAmount;
        $this->dataDate = $dataDate;
        $this->dataTimestamp = $dataTimestamp;
        $this->dataNumeric = $dataNumeric;
        $this->operation = $operation;
    }

    public function getDescription()
    {
        return $this->description;
    }
 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
 
    public function getDataString()
    {
        return $this->dataString;
    }
 
    public function setDataString($dataString)
    {
        $this->dataString = $dataString;

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
 
    public function getDataDate()
    {
        return $this->dataDate;
    }
 
    public function setDataDate($dataDate)
    {
        $this->dataDate = $dataDate;

        return $this;
    }
 
    public function getDataTimestamp()
    {
        return $this->dataTimestamp;
    }
 
    public function setDataTimestamp($dataTimestamp)
    {
        $this->dataTimestamp = $dataTimestamp;

        return $this;
    }
 
    public function getDataNumeric()
    {
        return $this->dataNumeric;
    }
 
    public function setDataNumeric($dataNumeric)
    {
        $this->dataNumeric = $dataNumeric;

        return $this;
    }
 
    public function getOperation()
    {
        return $this->operation;
    }
 
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
    
    public function getEventId()
    {
        return $this->eventId;
    }
    
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }
}
