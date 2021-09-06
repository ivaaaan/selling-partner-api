<?php

namespace SellingPartnerApi\Model;

trait ModelWithHeadersTrait
{
    public function getRateLimit(): ?float
    {
        return $this->container['rate_limit'] ?? null;
    }

    public function getRequestId(): ?string
    {
        return $this->container['request_id'] ?? null;
    }

    public function setRateLimit(?float $rateLimit): void
    {
        $this->container['rate_limit'] = $rateLimit;
    }

    public function setRequestId(?string $requestId): void
    {
        $this->container['request_id'] = $requestId;
    }
}