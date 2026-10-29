<?php
declare(strict_types=1);
use Elang\Http\Response;
$router->get('/',fn()=>Response::html('<!doctype html><html lang="en"><title>Welcome to Elang</title><h1>Your next idea starts here.</h1><p>Built with Elang.</p></html>'),'home');
$router->get('/api/hello/{name}',fn(string $name)=>['message'=>'Hello, '.$name.'!'],'hello');
