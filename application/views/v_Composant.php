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
           $('#lst1').change(function(){
          $('#lst2').val($('#lst1').val());
     });
     
     
    }
   
    ),
    
    
    $(
        function()
        {
          $('#btn1').click(function(){
              $('#lst2').val($('#lst1 option:selected').text());
          });  
        },   
       
    );
 

              
              
              
        </script>
    </head>
    <body>
        
        <h2>Liste composant</h2>
        <select multiple="" id="lst1">
            <?php 
            
           
         
                foreach ($LesComposants as $composant)
                    {
                        echo "<option id='opt1' value='".$composant->CMP_CODE."'>".$composant->CMP_LIBELLE."</option>";
                    }
                   
                    
            ?>
        </select><br><br>
        
       <form method="post">
    
<!--    $data = array(
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
);
$this->db->insert('mytable', $data);
// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')-->

    
<tr>
    <td>
                <div class="form-group">
                    <label for="Code">Code</label>
                    <input type="textbox" id="code" name="code">
                </div>
            

            <td>
                <div class="form-group">
                    <label for="Libelle">Libelle</label>
                    <input type="textbox" id="libelle" name="libelle">
                </div>
            </td>     
        </tr>

        <tr>    
            <td>
               <input type="submit" name="insert" value="Ajouter" />
                <input type="submit" name="update" value="Modifier" />
            </td>
            
        </tr>           
         <?php
if($this->input->post('insert') != ''){
/*Perform insert operation here*/
    $code = $this->input->post('code');
    $libelle = $this->input->post('libelle');
    $data = array(
        'CMP_CODE' => $code,
        'CMP_LIBELLE' => $libelle,
    );
    $this->db->insert('composant',$data);
}
?>
  <?php
        if($this->input->post('update') != ''){
/*Perform insert operation here*/
    $code = $this->input->post('code');
    $libelle = $this->input->post('libelle');
    $data = array(
        'CMP_CODE' => $code,
        'CMP_LIBELLE' => $libelle,
    );
    $this->db->update('composant',$data);
}
?>
       
       </form>
        
        
       
   
        
      
        
        

        
        
    
    </body>
</html>