<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<body>
    <div class="container-fluid">
      
        <div class="row" style="min-height: 90vh;">
            <div class="col-lg-5 col-md-6 col-sm-12 border p-0 m-0">
                <!-- <textarea name="" id="code" cols="30" rows="10" oninput="updateIframeContent(document.getElementById('liveCode'),this.value);"></textarea> -->
                <iframe src="highlight.php" id="codeInput" onchange="window.console.log(this.src);" frameborder="0" width="100%" height="100%"></iframe>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 border p-0 m-0">
                <iframe class="border" src="" id="liveCode" height="100%" width="100%" frameborder="0" ></iframe>    
            </div>
        </div>
    </div>
    
    
    
    <script>
        function updateIframeContent(iframeElement, newHTML)
        {
            iframeElement.src = "about:blank";
            iframeElement.contentWindow.document.open();
            iframeElement.contentWindow.document.write(newHTML);
            iframeElement.contentWindow.document.close();
        }
        window.onload = function() {
            let liveCode = document.getElementById('liveCode');
            let codeInput = document.getElementById("codeInput").contentWindow;
            codeInput.document.getElementById("editor").addEventListener("input",function(){
                updateIframeContent(liveCode,codeInput.editor.getValue());
            }, true);
            
            <?php
                if(isset($_POST['insert'])){
                    echo "codeInput.editor.insert(decodeURIComponent('".$_POST['insert']."'));";
                }
            ?>
            codeInput.editor.insert("");
            updateIframeContent(liveCode,codeInput.editor.getValue());
        };
    </script>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <div class="container">
           <div class="row">
               <div class="col">
             <a href="html.php"><img src="image/my_logo.jpg" alt="logo"></a> 
               </div>
           </div>
       </div>
    </body>
    </html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>