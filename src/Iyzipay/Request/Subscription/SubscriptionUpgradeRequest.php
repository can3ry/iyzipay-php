<?php

namespace Iyzipay\Request\Subscription;

use Iyzipay\JsonBuilder;
use Iyzipay\Request;

class SubscriptionUpgradeRequest extends Request
{

    private $subscriptionReferenceCode;
    private $newPricingPlanReferenceCode;
    private $upgradePeriod;
    private $useTrial;

    public function setSubscriptionReferenceCode($subscriptionReferenceCode)
    {
        $this->subscriptionReferenceCode = $subscriptionReferenceCode;
    }

    public function getSubscriptionReferenceCode()
    {
        return $this->subscriptionReferenceCode;
    }

    public function setNewPricingPlanReferenceCode($newPricingPlanReferenceCode)
    {
        $this->newPricingPlanReferenceCode = $newPricingPlanReferenceCode;
    }

    public function getNewPricingPlanReferenceCode()
    {
        return $this->newPricingPlanReferenceCode;
    }

    public function setUpgradePeriod($upgradePeriod)
    {
        $this->upgradePeriod= $upgradePeriod;
    }

    public function getUpgradePeriod()
    {
        return $this->upgradePeriod;
    }

    public function setUseTrial($useTrial)
    {
        $this->useTrial= $useTrial;
    }

    public function GetUseTrial()
    {
        return $this->useTrial;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
            ->add("locale", $this->getLocale())
            ->add("conversationId", $this->getConversationId())
            ->add("subscriptionReferenceCode", $this->getSubscriptionReferenceCode())
            ->add("newPricingPlanReferenceCode", $this->getNewPricingPlanReferenceCode())
            ->add("upgradePeriod", $this->getUpgradePeriod())
            ->add("useTrial", $this->getUseTrial())
            ->getObject();
    }
}