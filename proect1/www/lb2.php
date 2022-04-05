<html>                                                                  
<head>      
<style >
#inp1
{
margin-top: 10px;
}
FORM{
    align-content: center;
}
</style>                                                          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script >   
$(document).ready(function(){

    /*$('INPUT[name="but123"]').click ( function () { 
            var Value1=$('INPUT[name="i1"]').val() ; 
            var Value2=$('INPUT[name="i2"]').val() ;
            var Value3=$('INPUT[name="i3"]').val() ;
                if (Value1 == '') 
                {
                     alert("FIO")
                }              
                else
                    {
                        if (Value2 == '') 
                {
                     alert("Sity")
                }  
                else
                {
                    if (Value3 == '') 
                {
                     alert("Age")
                }   
                else
                {
                    alert("You are genios!!!") 
                }
                }
                    }

                    /*if (Value2 == 'Тирасполь') 
                {
                     alert("За тобой следят ты в матрице")
                }   
        }); */

});                                           
</script>
                                                          
</head>
<body> 
   
   

    <form action="lb3.php" method="GET">
<INPUT id="inp1"type="text" placeholder="FIO" size="40" name="i1"> <br/>
<INPUT id="inp1"type="text" placeholder="Sity" size="30"name="i2"><br/>
<INPUT id="inp1"type="text" placeholder="Age" size="11"name="i3"><br/>
<INPUT id="inp1" type="submit" value="send" name="but123"/>
    </form>
<INPUT type="reset" value="Clear"> 


</body>
</html>
