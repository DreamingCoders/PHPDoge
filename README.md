# PHPDoge
PHPDoge - PHP for the people,
is a simple and extensive PHP library/framework.
This tool supports, a custom Doge minified compiler, API connections to Doge, and everything essential to land on the moon.

## Purpose
At first I wanted to make custom Doge commands in PHP, but now I am making this a "framework" that simplifies PHP functions
By making for example queries run seamlessly.
I intend to make PHPDoge light meaning it will be minimal and very fast to run in contrast to other frameworks like Laravel.

## Usage
### Routing
Use *router.php* for routing, everything below that shows KODN_ROUTER.php, assume router.php which requires the file.
We are not using this file and rather router.php

This was already documented with php-router, I am leaving this here as I have included them in this repo.
Simply add src/KODDN_ROUTER.php file in your project;
```php
// composer auto loader
require __DIR__ . '/src/KODDN_ROUTER.php';

// match get request
ROUTER::get('/',function($req,$res,$next){
    // ..do something 
    $res->send("Thanks");
});
```
Patterns
You can use patterns to match the request

:paramName => named URL segments that are used to capture the values specified at their position in the URL, begin with colon
=> will capture anything
In the below example we are capturing user id from the url
```php
// URL => /api/user/111

ROUTER::get('/api/user/:id',function($req,$res){
    
    $id=$req['params']['id'];
    // $req['params]=>['id'='111']
    
});
In the example we are capturing using

// URL => /flight/india-usa

ROUTER::get('/flight/:from-:to',function($req,$res){
    
    // $req['params]=['from'=>'india','to'=>'usa'];
    $from =$req['params']['from'];
    $to = $req['params']['to'];
   
});
// URL => /post-name-apc/123
ROUTER::get('/*/:postID',function($req,$res){
    
    // $req['params']=['postID'=>'123'];
    $postID =$req['params']['postID'];
    // do something
   
});
```
Route Handlers
We can use multiple callback functions to handle the route
```php
ROUTER::get('/some-url', function($req,$res,$next){

    // Do something here
    echo "START" ;
    
    // call Next Callback, control goes to next callback function
    $next();
    
},function($req,$res){

   
    echo "END";  // task completed
    
});
```
Also, if we want the edited request to be referenced in next callback then use &$req as request parameter
```php
ROUTER::get('/dashboard', function(&$req,$res,$next){

    // if user authorized
    $req['userID']= "someUserID";
    
    $next();
    
},function(&$req){

   
   // now you can have use the req.userID here as well
    
});
Sample how we can use it as middleware for authentication

ROUTER::post('/login', function(&$req,$res,$next){

    // do the authorize stuff here
    if(!authorize){
    $res->send("invalid");
    }
    $next();
    
},function(&$req,$res){

   
   // do something if authorized
  // grantAccessToSomething
    
});
```
Redirect
```php
//ROUTER::redirect('/url-to-match', callbackBeforeRedirect, 'redirect to url', $replaceHeaders=false (optional), $redirectCode =301 (optional));
ROUTER::redirect('/url-to-match', function(){/*do some logs*/}, '/new-url', $replaceHeaders =false/*( boolean optional)*/, $redirectCode=301 /*(int optional)*/);
Responses
With Koddn PHP router either you can manually handle responses, or you can use the built-in ones.

ROUTER::post('/about', function($req,$res,$next){
 $res->send("About us");
});
```
Send JSON data
```php
ROUTER::post('/api/user', function($req,$res,$next){
    $userData=['name'=>"Harpal Singh", 'id'=>11];
     $res->json($userData);
});
```
Set Header Status Codes
```php
ROUTER::post('/api/user', function($req,$res,$next){
  
     $res->setStatus(404)->send('Not Found');
});
```
Clear cookies
```php
ROUTER::post('/api/user', function($req,$res,$next){
     // clear all cookies
     $res->clearCookies();
     
     // clear specific cookies
     $res->clearCookies('nameOfCookie');
     
     // do something
     
});
```
Clear cookies
```php
ROUTER::post('/api/user', function($req,$res,$next){
    // clear Sessions
     $res->clearSession();
     
     // do something
     
});
```
End request
It is similar to die();
```php
ROUTER::post('/api/user', function($req,$res,$next){
    // clear Sessions
     $res->end();
      // do something
     
});
```
Redirect using Response
```php
//ROUTER::redirect('redirect to url', $replaceHeaders=false (optional), $redirectCode =301 (optional));
ROUTER::post('/api/user', function($req,$res,$next){
    // clear Sessions
     $res->redirect('/new-url',$replaceHeaders=false /*(optional)*/, $redirectCode =301  /*(optional)*/);
      // do something
     
});
```
ALL Functions
```php
ROUTER::any('/url-to-match',function(&$req,$res,$next){}/*, function(&$req,$res,$next){}*/);
ROUTER::post('/url-to-match',function(&$req,$res,$next){}/*, function(&$req,$res,$next){}*/);
ROUTER::get('/url-to-match',function(&$req,$res,$next){}/*, function(&$req,$res,$next){}*/);
ROUTER::put('/url-to-match',function(&$req,$res,$next){}/*, function(&$req,$res,$next){}*/);
ROUTER::delete('/url-to-match',function(&$req,$res,$next){}/*, function(&$req,$res,$next){}*/);
ROUTER::redirect('/url-to-match', function(){/*do some logs*/}, '/new-url', $replaceHeaders =false/*( boolean optional)*/, $redirectCode=301 /*(int optional)*/);
ROUTER::post('/url-to-match',function(&$req,$res,$next){
//
//$req = ['$fullUrl' => $fullUrl, 'url' => $url, 'path' => $path, 'params' => $params, 'rPath' => $rPath];

});
ROUTER::post('/url-to-match',function(&$req,$res,$next){
//send
$res->send('Some Text');
//json
$res->json(['id'=>11,'name'=>'Harpal Singh']);
//redirect using response
$res->redirect('/new-url',$replaceHeaders=false /*(optional)*/, $redirectCode =301  /*(optional)*/);
// Exit
$res->end();
// clear all cookies
$res->clearCookies();
// clear specific cookies
$res->clearCookies();
//set Status
$res->setStatus(404)->send('Not Found');
});
```

### Use DogePay
You need to have Doge compiled on your server, we will attempt to do this automatically Seems Promising
https://www.reddit.com/r/dogecoin/comments/2f1ew9/build_dogecoin_on_ubuntu/
### Run commands
  * You can run commands by accessing the **doge.php** file and adding the GET request "c" (Command) containing your DOGE code
    * Example https://foobar.com/doge.php?c=dogeSay'Hello'.
    * This will convert the "Dogecode"TM into PHP realtime!

## Credits
Koddn PHP Router
We use the repository by @koddn and intend to build on to their amazing creation!

### Hello
  * Wow
  * Fun fact: I wasn't intending to make PHPDoge a framework. I personally do not like frameworks instead raw PHP without an MVC
   * I am intending on making it functional for those who prefer MVC's or none through multiple transports
