<html>                                                                  
<head>      
<style >
p1
{
border:1px solid;
}
</style>                                                          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script >   
$(document).ready(function(){

    $('#href1').hover(function(){
    $('#href1').css("font-family", 'Arial');});
    $('#href1').mouseout(function(){
    $('#href1').css("font-family", 'Calibry');});

    $("#href1").click (function(){$('body').append('<div>');});


});                                           
</script>
                                                          
</head>
<body> 
    <a id="href1" href="lb2.php" >
         webform.ru</a>

   

</body>
</html>