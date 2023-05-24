<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Upload File</h2>
<form action="" id="upload_file" enctype="multipart/form-data">
    <input type="text" name="name" value="1" class="form-control">
    <input type="text" name="age" value="2" class="form-control">
    <img src="https://apply.driverreachapp.com/attached_documents/6472109?v=thumb" alt="" id="my-image" >
    <input type="file" name="file"  class="form-control">
    <button type="button" id="upload" class="btn btn-primary mt-2">Upload</button>
</form>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
        var toDataURL=null;
        const image = document.getElementById('my-image');

     toDataURL = () => {
        const canvas = document.createElement('canvas');

        // We use naturalWidth and naturalHeight to get the real image size vs the size at which the image is shown on the page
        canvas.width = image.naturalWidth;
        canvas.height = image.naturalHeight;

        // We get the 2d drawing context and draw the image in the top left
        canvas.getContext('2d').drawImage(image, 0, 0);

        // Convert canvas to DataURL and log to console
        const dataURL = canvas.toDataURL();
        console.log(dataURL);
        // logs data:image/png;base64,wL2dvYWwgbW9yZ...

        // Convert to Base64 string
        const base64 = getBase64StringFromDataURL(dataURL);
        console.log(base64);
          // If the image has already loaded, let's go!
    if (image.complete) toDataURL(image);
    };
    console.log(dataURL);
        $("#upload").on("click",function(){
            let formdata=$("#upload_file").find("input[type='file']");
            let form=new FormData();
            form.append("myfile",formdata[0].files[0]);
            console.log(formdata[0].files)
            let myform = document.getElementById("upload_file");
            console.log(myform)

            console.log($("#upload_file"))
            let f=$("#upload_file")[0];
    let fd = new FormData(f);
            $.ajax({
                url:"rec-file.php",
                type:'post',
                data:fd,
                contentType: false,
                 processData: false,
            });

            $.ajax({
                url:"https://apply.driverreachapp.com/attached_documents/6472109?v=thumb",
                method:'get',
                cache:false,
                  cors: true ,
                'xhrFields' : {
                'responseType' : 'blob'
                },
                // dataType: 'jsonp',
             //    ContentType: "binary",
                success:function(resp){
                   console.log(resp)
                    var blob = new Blob([resp], { type: "image/png" });
                    var url = URL.createObjectURL(blob);
                    var downloadUrl = URL.createObjectURL(blob);
                    var a = document.createElement("a");
                    a.href = url;
                    a.download = "data.png";
                    document.body.appendChild(a);
                    a.click();

                }
            })
        })
    })
</script>
</html>
