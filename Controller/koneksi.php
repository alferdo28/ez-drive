<?php
    require_once '../vendor/autoload.php';
    use MicrosoftAzure\Storage\Table\TableRestProxy;
    use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;

    $connectionString = "DefaultEndpointsProtocol=https;AccountName=storageaccesdata;AccountKey=wUaamRK2Q6NLGCFWnKBJiUKa0AFIGo+oxAgizVlAlw/MU0SScInjJmdMajquZFb73AEC1svjidi+EoB6priQwg==;";
    $tableClient = TableRestProxy::createTableService($connectionString);
?>