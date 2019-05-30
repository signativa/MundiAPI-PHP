<?php

$apiClient = new \MundiAPILib\MundiAPIClient(
    $testSecretKey,
    ''
);

$subscriptionsController = $apiClient->getSubscriptions();

$request = new \MundiAPILib\Models\CreateSubscriptionRequest();
$request->paymentMethod = "credit_card";
$request->currency = "BRL";
$request->interval = "month";
$request->intervalCount = 3;
$request->billingType = "prepaid";
$request->installments = 3;
$request->minimumPrice = 10000;
$request->boletoDueDays = 5;

$request->customer = new \MundiAPILib\Models\CreateCustomerRequest();
$request->customer->name = "Tony Stark";
$request->customer->email = "tonystark@avengers.com";

$request->card = new \MundiAPILib\Models\CreateCardRequest();
$request->card->holderName = "Tony Stark";
$request->card->number = "4000000000000010";
$request->card->expMonth = 1;
$request->card->expYear = 26;
$request->card->cvv = "903";
$request->card->billingAddress = new \MundiAPILib\Models\CreateAddressRequest();
$request->card->billingAddress->line1 = "375  Av-> General Justo  Centro";
$request->card->billingAddress->line2 = "8º andar";
$request->card->billingAddress->zipCode = "20021130";
$request->card->billingAddress->city = "Rio de Janeiro";
$request->card->billingAddress->state = "RJ";
$request->card->billingAddress->country = "BR";

$request->discounts = [new \MundiAPILib\Models\CreateDiscountRequest()];
$request->discounts[0]->cycles = 3;
$request->discounts[0]->value = 10;
$request->discounts[0]->discountType = "percentage";

$request->increments = [new \MundiAPILib\Models\CreateIncrementRequest()];
$request->increments[0]->cycles = 2;
$request->increments[0]->value = 20;

$request->items = [
    new \MundiAPILib\Models\CreateSubscriptionItemRequest(),
    new \MundiAPILib\Models\CreateSubscriptionItemRequest()];

$request->items[0]->description = "Musculação";
$request->items[0]->quantity = 1;
$request->items[0]->pricingScheme = new \MundiAPILib\Models\CreatePricingSchemeRequest();
$request->items[0]->pricingScheme->price = 18990;

$request->items[1]->description = "Matrícula";
$request->items[1]->quantity = 1;
$request->items[1]->cycles = 1;
$request->items[1]->pricingScheme = new \MundiAPILib\Models\CreatePricingSchemeRequest();
$request->items[1]->pricingScheme->price = 5990;

$result = $subscriptionsController->createSubscription($request);

return $result;