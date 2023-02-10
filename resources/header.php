<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/header.css">
</head>
<body>
    <div id="header">
        <div id="logo">
            Jservices ✨
        </div>
        <div id="catchphrase">
            The Best services🔌✨
        </div>
        <div>
            <button onclick="display()">
                Click me
            </button>
        </div>
    </div>
    <script>
        function display(){
    let popup=document.createElement('div');
    popup.style.position="fixed";
    popup.style.height="500px";
    popup.style.width="500px";
    popup.style.top="100px";
    popup.style.border="solid";
    let close=document.createElement('p')
    close.innerText='X';
    let iframe=document.createElement('iframe');
    iframe.src="https://plugged.pro/refund/stores"
    iframe.style.width="100%"
    iframe.style.height="100%";
    popup.append(iframe);
    close.onclick=function(){
        popup.remove();
    }
    popup.append(close);
    document.body.append(popup);
}
    </script>
</body>
</html>

