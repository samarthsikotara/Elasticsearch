<?php
/*
 * Elstic search for search in document, reading from files
 * created by Samarth
 */
require_once 'vendor/autoload.php';
require_once 'vendor/Elasticsearch/Client.php';
require_once 'vendor/Elasticsearch/Transport.php';
require_once 'vendor/Elasticsearch/Connections/ConnectionInterface.php';

require_once 'vendor/Elasticsearch\Common\Exceptions\ElasticsearchException.php';
require_once 'vendor/Elasticsearch\Common\Exceptions\transportException.php';
require_once 'vendor/Elasticsearch\Common\Exceptions\Curl\CouldNotConnectToHost.php';
require_once 'vendor/Elasticsearch/Connections/AbstractConnection.php';
require_once 'vendor/Elasticsearch/Connections/GuzzleConnection.php';
require_once 'vendor/Elasticsearch/Serializers/SerializerInterface.php';
require_once 'vendor/Elasticsearch/Serializers/SmartSerializer.php';
require_once 'vendor/Guzzle/Common/HasDispatcherInterface.php';
require_once 'vendor/Symfony/Component/EventDispatcher/EventDispatcherInterface.php';
require_once 'vendor/Symfony/Component/EventDispatcher/EventDispatcher.php';
require_once 'vendor/Symfony\Component\EventDispatcher\Event.php';
require_once 'vendor/Guzzle\Common\ToArrayInterface.php';

require_once 'vendor/Guzzle\Common\Event.php';
require_once 'vendor/Guzzle/Common/AbstractHasDispatcher.php';
require_once 'vendor/Guzzle/Http/ClientInterface.php';
require_once 'vendor/Guzzle/Common/ToArrayInterface.php';
require_once 'vendor/Guzzle/Http/Message/MessageInterface.php';
require_once 'vendor/Guzzle/Http/Message/RequestInterface.php';


require_once 'vendor/Guzzle/Http/Message/header/HeaderInterface.php';
require_once 'vendor/Guzzle/Http/Message/Header.php';
require_once 'vendor/Guzzle\Http\Message\Header\HeaderCollection.php';
require_once 'vendor/Guzzle\Http\Message\Header\HeaderFactoryInterface.php';
require_once 'vendor/Guzzle\Http\Message\Header\HeaderFactory.php';
require_once 'vendor/Guzzle/Http/Message/AbstractMessage.php';
require_once 'vendor/Elasticsearch\Common\Exceptions\BadRequest400Exception.php';
require_once 'vendor/Elasticsearch\Common\Exceptions\Missing404Exception.php';
require_once 'vendor/Guzzle\Common\Exception\GuzzleException.php';

require_once 'vendor/Guzzle\Common\Exception\RuntimeException.php';
require_once 'vendor/Guzzle\Http\Exception\HttpException.php';

require_once 'vendor/Guzzle\Http\Exception\RequestException.php';
require_once 'vendor/Guzzle\Http\Exception\BadResponseException.php';

require_once 'vendor/Guzzle\Http\Exception\ClientErrorResponseException.php';
require_once 'vendor/Guzzle/Http/Url.php';
require_once 'vendor/Guzzle/Http/Message/Request.php';
require_once 'vendor/Guzzle\Common\Collection.php';
require_once 'vendor/Guzzle/Http/QueryString.php';
require_once 'vendor/Guzzle/Stream/Streaminterface.php';

require_once 'vendor/Guzzle/Stream/Stream.php';
require_once 'vendor/Guzzle/Http/EntityBodyInterface.php';

require_once 'vendor/Guzzle/Http/EntityBody.php';
require_once 'vendor/Guzzle/Http/Message/EntityEnclosingRequestInterface.php';

require_once 'vendor/Guzzle/Http/Message/EntityEnclosingRequest.php';
require_once 'vendor/Guzzle/Http/Message/RequestFactoryInterface.php';
require_once 'vendor/Guzzle/Http/Message/RequestFactory.php';
require_once 'vendor/Guzzle/Common/Collection.php';
require_once 'vendor/Guzzle/Common/Version.php';
require_once 'vendor/Guzzle/Http/Curl/CurlVersion.php';
require_once 'vendor/Guzzle/Parser/UriTemplate/UriTemplateInterface.php';

require_once 'vendor/Guzzle/Parser/UriTemplate/UriTemplate.php';
require_once 'vendor/Guzzle/Parser/ParserRegistry.php';
require_once 'vendor/Guzzle\Http\Message\Response.php';
require_once 'vendor/Guzzle\Http\Curl\RequestMediator.php';
require_once 'vendor/Guzzle\Http\Curl\CurlHandle.php';


require_once 'vendor/Guzzle\Common\Exception\ExceptionCollection.php';
require_once 'vendor/Guzzle\Http\Exception\MultiTransferException.php';

require_once 'vendor/Guzzle\Http\Exception\CurlException.php';
require_once 'vendor/Guzzle\Http\Curl\CurlMultiInterface.php';
require_once 'vendor/Guzzle\Http\Curl\CurlMulti.php';
require_once 'vendor/Guzzle\Http\Curl\CurlMultiInterface.php';
require_once 'vendor/Guzzle\Http\Curl\CurlMultiProxy.php';
require_once 'vendor/Guzzle/Http/Client.php';
require_once 'vendor/Symfony/Component/EventDispatcher/EventSubscriberInterface.php';
require_once 'vendor/Guzzle/Http/RedirectPlugin.php';
require_once 'vendor/Elasticsearch/ConnectionPool/AbstractConnectionPool.php';
require_once 'vendor/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php';
require_once 'vendor/Elasticsearch/ConnectionPool/Selectors/SelectorInterface.php';
require_once 'vendor/Elasticsearch/ConnectionPool/Selectors/RoundRobinSelector.php';
require_once 'vendor/Elasticsearch/Common/AbstractFactory.php';
require_once 'vendor/Elasticsearch/Namespaces/AbstractNamespace.php';
require_once 'vendor/Elasticsearch/Namespaces/ClusterNamespace.php';
require_once 'vendor/Elasticsearch/Namespaces/NodesNamespace.php';
require_once 'vendor/Elasticsearch/Namespaces/SnapshotNamespace.php';
require_once 'vendor/Elasticsearch/Namespaces/CatNamespace.php';
require_once 'vendor/Elasticsearch/Endpoints/AbstractEndpoint.php';

require_once 'vendor/Elasticsearch/Endpoints/Index.php';

require_once 'vendor/Elasticsearch/Namespaces/IndicesNamespace.php';
require_once 'vendor/Elasticsearch/Connections/ConnectionFactory.php';
require_once 'vendor/Elasticsearch\Common\Exceptions\RuntimeException.php';
require_once 'vendor/Elasticsearch\Endpoints\Get.php';
require_once 'vendor/Elasticsearch\Endpoints\Search.php';
//require_once 'vendor/Elasticsearch\Endpoints\Create.php';

require_once 'vendor/Elasticsearch/Common/DICBuilder.php';
require_once 'vendor/Psr/Log/LogLevel.php';
require_once 'vendor/Pimple/Container.php';
require_once 'vendor/Psr/Log/LoggerInterface.php';
require_once 'vendor/Psr/Log/AbstractLogger.php';
require_once 'vendor/Elasticsearch/Common/EmptyLogger.php';
require_once 'vendor/Psr/Log/LogLevel.php';
require_once 'vendor/Pimple/Container.php';


//logging feature activating
$params = array();
$params['logging'] = true;
$client = new \Elasticsearch\Client();

//
$es = new \Elasticsearch\Client(
    array(
        'hosts' => array('127.0.0.1:9200'),
    )
);

$es->index(
    array(
        'index' => 'my_app',
        'type'  => 'blog_post',
        'id'    => 1,
        'body'  => array(
            'title'   => 'Elasticsearch clients',
            'content' => 'Interesting content...',
            'date'    => '2014-10-09'
        )
    )
);
$es->index(
    array(
        'index' => 'roofz',
        'type' => 'Real Estate Property Portal',
        'id' => 2,
        'body' => array(
            'name' => 'samarth roofz',
            'location' => 'Mumbai'
        )

    )
);
$es->index(
    array(
        'index' => 'roofz',
        'type' => 'Real Estate Property Portal',
        'id' => 3,
        'body' => array(
            'name' => 'nandan roofz',
            'location' => 'Mumbai'
        )

    )
);

$doc = $es->get(
    array(
        'index' => 'roofz',
        'type' => 'Real Estate Property Portal',
        'id' => 2

    )
);

//print_r(json_encode($doc));

$params = array(
    'index' => 'roofz',
    'type'  => 'Real Estate Property Portal'
);

$params['body'] = array(
    'query' => array(
        'match' => array(
            'name' => 'roofz'
        )
    )
);

$results = $es->search($params);
print_r(json_encode($results));
