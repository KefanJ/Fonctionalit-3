<html>
    <head>
        <title>Fonctionaliter3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
          <script>
              
      $(
              function()
               {
            $('#lstComposant').change(function(){
          $('#txtValeur').val($('#lstComposant').val());
      });
      
      
    }
    
    ),
    
    
    $(
        function()
        {
          $('#lstComposant').change(function(){
              $('#txtValeur').val($('#lstComposant option:selected').text());
          });  
        },   
       
    );
 

              
              
              
        </script>
    </head>
    <body>
        
        <h2>Liste composant</h2>
        <select id="lstComposant">
            <?php
                foreach ($LesComposants as $composant)
                    {
                        echo "<option id='opt1' value='".$composant->CMP_CODE."'>".$composant->CMP_LIBELLE."</option>";
                    }
            ?>
            
        </select><br>
        <input id="btn1" type="button" value="Ajouter">
        <input id="btn2" type="button" value="Modifier">
        <input id="btn3" type="button" value="Nouveau">
        <input id="txtValeur" type="text" value="">
        <input id="txtAjouter" type="text" value="">
        
        
    
    </body>
</html>