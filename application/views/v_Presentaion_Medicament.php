<html>
    <head>
        <title>Fonctionaliter3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         <script>
             </script>
    </head>
    <body>
     <h2>Presentation medicament</h2>   
        
        
         <select id="lstMedicament">
            <?php
                foreach ($lesMedicaments as $medicament)
                    {
                        echo "<option id='opt1' value='".$medicament->MED_DEPOTLEGAL."'>".$composant->MED_NOMCOMMERCIAL."</option>";
                    }
            ?>
         </select><br>
    </body>
</html>