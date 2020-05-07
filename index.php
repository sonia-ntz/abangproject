<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Watermelon</title>
    <style type="text/css">
      div.wm-container{
        width: 150px;
      }
      div.wm{
        display: block;
        background-color: #43C29E;
        width: 150px;
        height: 80px;
        border-radius: 0 0 75px 75px / 0 0 80px 80px;
        position:relative;
        z-index: 1;
      }
      div.wm::before{
        content: '';
        margin-left: 5px;
        display: block;
        background-color: #7DD5BC;
        width: 140px;
        height: 75px;
        border-radius: 0 0 70px 70px / 0 0 75px 75px;
        z-index: 1;
      }
      div.wm::after{
        content: '';
        position: absolute;
        top: 0;
        margin-left: 10px;
        display: block;
        background-color: #EC5e64;
        width: 130px;
        height: 70px;
        border-radius: 0 0 65px 65px / 0 0 70px 70px;
        z-index: 1;
      }
      div.seed-container{
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
        top: 0;
        left: 0;
        text-align: center;
        margin-top:-70px;
        z-index: 1000;
      }
      div.seed{
        display: inline-block;
        width: 6px;
        height: 10px;
        top: 0;
        left: 0;
        border-radius: 3px 3px 3px 3px / 6px 6px 4px 4px;
        background-color: #000;
        margin: 0 5px 0 5px;
      }
    </style>
  </head>
  <body>
    <div class="wm-container">
      <div class="wm"></div>
      <div class="seed-container">
        <div class="seed"></div>
        <div class="seed"></div>
        <div class="seed"></div>
        <div class="seed"></div>
        <div class="seed"></div>
        <br>
        <div class="seed"></div>
        <div class="seed"></div>
        <div class="seed"></div>
        <div class="seed"></div>        
      </div>
    </div>
  </body>
</html>
