<?php

namespace Cryptommer\Smsir\Objects;

use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class LikeToLikeData {

    /**
     * @var String
     */
    public string $PackId;

    /**
     * @var array
     */
    public array $MessageIds;

    /**
     * @var float
     */
    public float $Cost;

    /**
     * @param $data array
     */
    public function __construct($data) {
        $this->PackId = $data['packId'];
        $this->MessageIds = $data['messageIds'];
        $this->Cost = $data['cost'];
    }

    /**
     * @param float $Cost
     */
    public function setCost(float $Cost): void
    {
        $this->Cost = $Cost;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->Cost;
    }

    /**
     * @param array $MessageIds
     */
    public function setMessageIds(array $MessageIds): void
    {
        $this->MessageIds = $MessageIds;
    }

    /**
     * @return array
     */
    public function getMessageIds(): array
    {
        return $this->MessageIds;
    }

    /**
     * @param String $PackId
     */
    public function setPackId(string $PackId): void
    {
        $this->PackId = $PackId;
    }

    /**
     * @return String
     */
    public function getPackId(): string
    {
        return $this->PackId;
    }

}
