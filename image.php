<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Get URL i</title>
</head>
<body>
<a href="https://apply.driverreachapp.com/attached_documents/6472109?v=thumb" download="1.jpg">Download</a>
<canvas id="c"></canvas>
   <img src="https://apply.driverreachapp.com/attached_documents/6472109?v=thumb" id="myImg" >
   <button type="button" id="me">CLICK</button>
   <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script> 
   <script>
$(document).ready(function(){
$("#me").on("click",function(){

    var image = new Image();
//   image.crossOrigin = "Anonymous";
  image.src = "https://apply.driverreachapp.com/attached_documents/6472109?v=thumb";
  image.crossorigin="anonymous"
        var canvas = document.createElement("canvas");
        canvas.width = image.width;
        canvas.height = image.height;
  
        var ctx = canvas.getContext("2d");
        ctx.drawImage(image, 0, 0);
  
        var dataURL = canvas.toDataURL();

        console.log(dataURL)
// var img = document.getElementById('myImg');
// console.log(img)
// var canvas = document.getElementById('c');
// canvas.toDataURL("image/jpeg", 0.5);

//   canvas.width = img.width;
//   canvas.height = img.height;
  
//   const ctx = canvas.getContext('2d');
  
//   ctx.drawImage(img, 0, 0,  canvas.width ,  canvas.height );
//   var link = document.createElement('a');
//   link.download = 'filename.jpg';
//   link.href = document.getElementById('c').toDataURL()
//   link.click();
  
//   const imageData = ctx.getImageData(0, 0, canvas.width ,  canvas.height );
//   const data = imageData.data;
  
//   for (let i = 0, len = data.length; i < len; i += 4) {
//     const avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
//   }
})
})


   </script>
</body>