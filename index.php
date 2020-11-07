<!DOCTYPE html>
<html>
<head>
    <style>
        .topper {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background-color: cadetblue;
            color: black;
            text-align: center;
            /* Pone aca un buen font */
        }

        #title {
            color: black;
            border: 1px solid black;
        }

        #subtitle {
            font-family: Candara;
            font-size: larger;
        }
        .chatt {  
            position: static;
            height: 55%;
            overflow: auto;
        }
        .userinput {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: black;
            color: white;
            /* Pone aca un buen font */
        }

        .usertext{
            height: 55%;
            width: 65%;
            margin: 20px;
            align-items: center;
            font-size: 50px;

        }

        .userButt{
            margin-left: 8%;
            height: 70%;
            width: 17%;
            align-items: center;
            font-size: 50px;
            font-family: Courier;
        }

        .sentText{
            text-align: right;
            color: blue;
        }
  
    </style>

    <title>Global chat</title>
</head>
<body>

<div class=topper>
<h1 id=title>Hello World!</h1>
<h3 id=subtitle>This is a online, no rules, anonymous chat-website. Everytime you join the website or reload the chat will be resotred</h3>
<h3 id=subtitle>This is to proof that humanity is good!</h3>
</div>

<br><br><br><br><br><br><br><br><br>

<div class=chatt id="chat">
<h2>Hellop :P</h2>

</div>
<br><br><br><br><br>

<footer class=userinput>
    <input type="text" placeholder="Type here :()" class=usertext id="userText">
    <button type="submit" class=userButt id="userbutt" onclick="send()"><b>Send</b></button>
    <!-- We didn't add to submit with the Enter key so there is less griefing -->
    <script>
        const fs = require('fs')

        function send() 
        {
            var para = document.createElement("p");
            para.innerHTML = document.getElementById("userText").value;
        
            var element = document.getElementById("chat");
            element.appendChild(para);

            window.scrollBy(0, 100);
            // document.getElementById("userbutt").disabled = true;
            // setTimeout(function(){document.getElementById("userbutt").disabled = false;},2500);

            // document.addEventListener("click", function(){window.location.reload();})
        }

        function read(){
            var para = document.createElement("p");
            para.innerHTML = document.getElementById("userText").value;
        
            var element = document.getElementById("chat");
            element.appendChild(para);

            window.scrollBy(0, 100);
            // document.getElementById("userbutt").disabled = true;
            // setTimeout(function(){document.getElementById("userbutt").disabled = false;},2500);

            // document.addEventListener("click", function(){window.location.reload();})
        }
    </script>
</footer>
</body> 
</html>