<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!--Italianno Google FONTS font-family: 'Italianno', cursive;-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <!-- Place favicon.ico in the root directory -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
                
            }
            .grid-container{
                
                margin:auto;
                border-radius: 10px;
                text-align: center;
                display: grid;    
                grid-template-areas:
                    "title" 
                    "subtitle" 
                    "image" 
                    "footer"
                    "button"
                 ;
            }
         
            .grid-container > div{
                box-shadow: -1px 1px 7px 0px rgba(0,0,0,0.75);
                text-align: center;
                max-width: 50%;
            }
            /*grid areas*/
            .title{
                grid-area: title;
                background-color: #f6f6f6;
                color:gray;
            }
            .subtitle{
                grid-area: subtitle;
                background-color: #f6f6f6;
                color:gray;
            }
            .image{
                grid-area: image;
                background-color: #f6f6f6;
                
                
            }
            .footer{
                grid-area: footer;
                background-color: #f6f6f6;
                line-height: 50px;
                font-family: 'Pacifico', cursive;
                font-size: 20px;
                color:gray;

            }
            .button{
                grid-area: button;
                background-color: #f6f6f6;
                padding:5px;
            }

            img{
                height: 100%;
                max-width: 95%;
                margin-bottom: 5px;
                border-radius: 15px;
            }     

            #btn{
                background-color: #ff2015;
                line-height:30px;
                font-size: 20px;
                color:white;
                border-radius: 25px;
                padding: 0 10px;
            }
           

        </style>
    </head>
    <body>
        <div class="grid-container">
            <div class="title">
                <h1>{TITLE}</h1>
            </div>
            <div class="subtitle">
                <h2>{SUBTITLE}</h2>
            </div>
            <!--image stored at POSTIMAGES.ORG https://postimages.org/-->
            <div class="image">
                <img src="https://i.postimg.cc/bwPTgQxk/room.png" alt="room photo">
            </div>
            <div class="footer">
                <h3>{FOOTER}</h3>

            </div>
            <div class="button">
                <button id="btn">VIEW FULL ITINERARY</button>
            </div>
        </div>    	
    </body>
</html>