<?php

// composer autoload
require 'vendor/autoload.php';

//API credentials
$apiKey = 'yourWalmartApiKey';
$apiUrl = 'https://marketplace.walmartapis.com/v2/feeds';

//Basic components used by the Services
$httpClient        = new \GuzzleHttp\Client();
$errorHandler      = new \WalmartApiClient\Exception\Handler\ApiExceptionHandler();
$transportService  = new \WalmartApiClient\Http\TransportService($httpClient, $errorHandler, $apiUrl);
$entityFactory     = new \WalmartApiClient\Factory\EntityFactory();
$collectionFactory = new \WalmartApiClient\Factory\CollectionFactory();

//Actual Services you will use for interacting with the API
$productService  = new \WalmartApiClient\Service\ProductService($transportService, $entityFactory, $collectionFactory);
$offerService    = new \WalmartApiClient\Service\OfferService($transportService, $entityFactory, $collectionFactory);
$reviewService   = new \WalmartApiClient\Service\ReviewService($transportService, $entityFactory, $collectionFactory);
$taxonomyService = new \WalmartApiClient\Service\TaxonomyService($transportService, $entityFactory, $collectionFactory);
echo "<pre>";
echo var_dump($offerService);
echo "</pre>";