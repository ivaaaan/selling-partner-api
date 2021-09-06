<?php

namespace SellingPartnerApi\Model;

interface ResponseInterface
{
    public function getRateLimit(): ?float;

    public function getRequestId(): ?string;

    public function setRateLimit(?float $rateLimit): void;

    public function setRequestId(?string $requestId): void;
}