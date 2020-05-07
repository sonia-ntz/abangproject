<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#moveMaju').click(function(){
          $('#shepur').animate({
            'marginLeft' : "-=30px"
          });
        });
        $('#moveMundur').click(function(){
          $('#shepur').animate({
            'marginLeft' : "+=30px"
          });
        });
      });
    </script>
  </head>
  <body>
    <div style="padding:20px;">
      <button id="moveMaju">Maju</button>
      <button id="moveMundur">Mundur</button>
    </div>
    <div id="shepur">
        <img src="shepur.jpeg">
    </div>
  </body>
</html>
