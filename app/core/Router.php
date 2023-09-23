<?php
declare( strict_types=1 );

namespace UptimeMonitor\Core;

class Router {

    private $handlers;
    private $notFoundHandler;
    private const METHOD_POST = 'POST';
    private const METHOD_GET  = 'GET';

    public function get( string $path,  $handler ) : void {
        $this->addHandler( self::METHOD_GET, $path, $handler );
    }

    public function post( string $path,  $handler ) : void {
        $this->addHandler( self::METHOD_POST, $path, $handler );
    }

    private function addHandler( string $method, string $path, $handler ) : void {
  
        // Standard URL
        $this->handlers[$method . $path ] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];

        // URL with trailing slash
        $this->handlers[$method . $path . '/'] = [
            'path' => $path . '/',
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function handlerNotFound( $handler ) : void {
        $this->notFoundHandler = $handler;
    }

    public function run() {
        $requestUri = parse_url( $_SERVER['REQUEST_URI'] );
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;
        $params = [];

        foreach ( $this->handlers as $handler ) {
            $pathPattern = preg_replace( '/\/\{\w+\}/', '/\w+', $handler['path'] );
            $pathPattern = str_replace( '/', '\/', $pathPattern );

            if ( preg_match('/^' . $pathPattern . '$/', $requestPath, $matches) && $method === $handler['method'] ) {
                $callback = $handler['handler'];

                // Extract route parameters from the matched path
                $params = array_slice( $matches, 1 );
            }
        }

        if ( !$callback ) {
            header( 'HTTP/1.0 404 Not Found' );
            if ( !empty( $this->notFoundHandler ) ) {
                $callback = $this->notFoundHandler;
            }
        }

        call_user_func_array( $callback, [
            array_merge( $_GET, $_POST ),
            $params // Pass route parameters as an additional argument
        ]);
    }
}