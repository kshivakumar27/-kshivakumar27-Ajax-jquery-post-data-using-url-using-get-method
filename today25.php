<?php

if( isset($_GET['ajax']) && isset($_GET['name'])  ){
 echo $_GET['name'];

 
 exit;
}

?>

<!doctype html>
<html>
 
 <body >
 
  <form method='get' action>

   <input type='text' name='name' placeholder='Enter your name' id='name'>
   
   
   

   

   <input type='button' value='submit' name='submit' id="submit"><br>
   <div id='response'></div>
  </form>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#submit').click(function(){
     var name = $('#name').val();
     var name1 = $('#psno').val();

     $.ajax({
       url:'myphp.php',
      type: 'get',
      data: {ajax: 1,name: name},
      
      
      success: function(response){
       $('#response').text('name : ' + response);
      }
     });
    });
  
  });

  



  </script>


 </body>
</html>