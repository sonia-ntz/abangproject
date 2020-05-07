<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      .camera{
        width: 100px;
        height: 100px;
        background-color: #fff;
        border-radius: 20px;
        position: absolute;
      }
      .camera::before{
        content: '';
        width: 7px;
        height: 7px;
        background-color: #ff7878;
        border-radius: 4px;
        top: 12px;
        left: 12px;
        position: absolute;
      }
      .camera{
        width: 100px;
        height: 100px;
        background: #fff;
        border-radius: 20px;
        position: relative;
      }
      div.camera::after{
        content: '';
        height: 40px;
        width: 100px;
        background-color: #3889a6;
        top: 30px;
        left: 0px;
        position: absolute;
      }
      .outer-circle{
        width: 60px;
        height: 60px;
        box-sizing: border-box;
        border: 6px solid #fff;
        position: absolute;
        top: calc(50%-30px);
        left: calc(50%-30px);
        z-index: 1000;
        border-radius: 50%;
        background-color: #203B6A;
        box-shadow: 0 3px 4px rgba(0,0,0,0.3);
        margin: 20px;
      }
      .outer-circle::before{
        content: '';
        width: 30px;
        height: 30px;
        position: absolute;
        top: calc(50% - 15px);
        left: calc(50% - 15px);
        z-index: 1000;
        border-radius: 50%;
        background-color: #203B6A;
        background-image: linear-gradient(to bottom, #5989B1,#1A2E52,#5989B1);
      }
      .inner-circle::before{
        content: '';
        width: 6px;
        height: 6px;
        position: absolute;
        top: calc(50% - 6px);
        left: calc(50% - 3px);
        border-radius: 50%;
        background-color:rgba(255,255,255,0.35);
      }
      .inner-circle::after{
        content: '';
        width: 4px;
        height: 4px;
        position: absolute;
        top: calc(50% + 6px);
        left: calc(50% - 2px);
        border-radius: 50%;
        background-color:rgba(255,255,255,0.35);
      }
    </style>
  </head>
  <body style="background-color:#00d3ff">
    <div class="camera">
      <div class="outer-circle">
      </div>
      <div class="inner-circle">
      </div>
    </div>
  </body>
</html>
