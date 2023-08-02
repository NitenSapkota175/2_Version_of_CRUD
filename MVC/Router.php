<?php 
        namespace app;
        class Router{
            
            public array $getRoutes = [];
            public array $postRoutes = [];
            public function get($url,callable $fn){

                    $this->getRoutes[$url] = $fn;
            }

            public function post($url,callable $fn)
            {
                $this->postRoutes[$url] = $fn;

            }
            public function resolve(){

                $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
                $method = $_SERVER['REQUEST_METHOD'];
                
                if($method === 'GET'){
                  
                    $fn = $this->getRoutes[$currentUrl] ?? null;

                }
                else{
                    $fn = $this->postRoutes[$currentUrl] ?? null;
                }

                if($fn){

                    call_user_func($fn);
                }
                else{
                    echo "Page not found";
                }

            }


        }

?>