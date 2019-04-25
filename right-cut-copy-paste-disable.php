<!DOCTYPE html>
<html>
<head>
    <title>Jquery disable right click, cut, copy and paste example</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    
<h1>Jquery disable right click, cut, copy and paste example Dharmendra </h1>
   
<script type="text/javascript">
    $(document).ready(function(){
        $(document).bind('cut copy paste', function(event){
            event.preventDefault();
        });

        $(document).on('contextmenu', function(event){
            return false;
        });
    });


</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(window).keydown(function(event){
      if(event.keyCode == 123){
        event.preventDefault();
        return false;
      }
    });



  });

</script>

   
</body>
</html>
