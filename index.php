<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parser Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/methods-parser.js" charset="utf-8"></script>
  </head>
  <body>
    <script type="text/javascript">

      function getBlabla(result){
        alert(result);
      }
      function getAgeHandler(e){
        alert(e);
      }

      MethodParser.addCall("getName", getBlabla);
      MethodParser.addCall("getAge", getAgeHandler);

      // Aan het einde van de pagina
      MethodParser.execute();
    </script>
  </body>
</html>
