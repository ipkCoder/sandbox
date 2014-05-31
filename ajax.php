<html>

    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            $.ajax(
            {
                type: "POST",
                url: 'http://www.google.com',
                success:function(data){
                    alert(data);
                }
            });
            
//            $.ajax({
//                type:
//  url: 'http://www.google.com',
//  success:function(data){
//    alert(data);
//  }
//});
        </script>
    </head>

    <body>
    
    </body>
</html>