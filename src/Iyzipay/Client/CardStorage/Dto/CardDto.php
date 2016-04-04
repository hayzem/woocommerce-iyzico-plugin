<?php

namespace Iyzipay\Client\CardStorage\Dto;

use Iyzipay\Client\JsonBuilder;
use Iyzipay\Client\PKIRequestStringBuilder;
use Iyzipay\Client\RequestDto;

class CardDto extends RequestDto
{
    private $cardAlias;
    private $cardNumber;
    private $expireYear;
    private $expireMonth;
    private $cardHolderName;

    public function getCardAlias()
    {
        return $this->cardAlias;
    }

    public function setCardAlias($cardAlias)
    {
        $this->cardAlias = $cardAlias;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function getExpireYear()
    {
        return $this->expireYear;
    }

    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
    }

    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
    }

    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
    }

    public function getJsonObject()
    {
        return JsonBuilder::newInstance()
            ->add("cardAlias", $this->getCardAlias())
            ->add("cardNumber", $this->getCardNumber())
            ->add("expireYear", $this->getExpireYear())
            ->add("expireMonth", $this->getExpireMonth())
            ->add("cardHolderName", $this->getCardHolderName())
            ->getObject();
    }

    public function toPKIRequestString()
    {
        return PKIRequestStringBuilder::newInstance()
            ->append("cardAlias", $this->getCardAlias())
            ->append("cardNumber", $this->getCardNumber())
            ->append("expireYear", $this->getExpireYear())
            ->append("expireMonth", $this->getExpireMonth())
            ->append("cardHolderName", $this->getCardHolderName())
            ->getRequestString();
    }
}