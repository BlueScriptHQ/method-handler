# PHAJAX

A little PHP and AJAX helper that combines all your AJAX calls into one. 
While at the server, it extracts this AJAX call into seperate configurable functions.

This saves you alot of bandwidth, and because it handles all of the AJAX calls, 
you don't have to worry about the boring stuff and just get your work done.

## Usage:

First of all, you want to download all of the required files to make this work.
These are: phajax-parser.js and phajax-parser.php. Once you have these two files downloaded, you're almost done.
The last thing that you should do, is set the correct file path to the phajax-parser.php file. 
(this can be done through the phajax-parser.js file)

HTML

 `<script src="../js/phajax-parser.js" charset="utf-8"></script>`
 
The Javascript

```javascript
      function getName(result){
        alert(result)l
      }
      function getAge(e){
        alert(e);
      }
     
      // Simply add the name of the function you want the return statement from in the PHP file.
      // The second parameter is just the callback function that will be executed.
      // The result of the ajax call will be sent to this function, so be sure to add that parameter!
      MethodParser.addCall("getName", getName);
      MethodParser.addCall("getAge", getAge);

      // Add the end of the page. This executes the one and only AJAX call
      MethodParser.execute();`
 
 ```
 
 The PHP
 
 ```php
    
    <?php
     
     require "assets/classes/parser.php";

    function getName() {
      return "test";
    } $parser->addFunc("getName");
  
   // function getAge() that has been called for in the browser. 
   // Note: You MUST bind this function to the phajax-parser in order for it to work
   // You can however simply do this using the addFunc() method. Simple, right? :)
    function getAge(){
      return 20;
    } $parser->addFunc("getAge");
  
   // Boring isset that is required. This HAS to be put at the end of the page, right before the sendResult();
   // If you don't do this, the function won't have time to be added to an internal array and thus won't be executed.
    if(isset($_POST["callArray"])){
      $callsArray = json_decode($_POST["callArray"]);
      $parser->parseCalls($callsArray);
    }
  
    // Once again, add the end of the page. This will send the results back to the webbrowser.
    $parser->sendResult();
     
   ?>
 ```
 
 This is about everthing that is required to get you started.
 Good luck!
 

