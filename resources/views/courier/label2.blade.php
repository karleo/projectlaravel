<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style > 
           .flexbox-container{
               display: flex;
               justify-content: center;
           }
           .flexbox-item{
               width: 200px;
               margin: 3px;
               border: 3px solid #333;
               background-color: white;
           }
           .flexbox-item-1{ 
                min-height: 75px; 
           }
           .flexbox-item-2{ 
                min-height: 75px;

           }
           .flexbox-item-3s{ 
               min-height: 75px;
           }
        </style>
    <body>
        
        <div class="flexbox-container">
            <div class="flexbox-item flexbox-item-1">Flex 1</div>
            <div class="flexbox-item flexbox-item-2">Flex 2</div>
            <div class="flexbox-item flexbox-item-3">Flex 3</div>
        </div>
    </body>
    </head>
</html>