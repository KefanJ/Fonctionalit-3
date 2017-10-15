function ModifierComposant()
 {   
    alert($('#txtValeur').val());
     alert($('#lstComposant').val());
     $.ajax 
     (
         {
             type:"get",
             url:"index.php/Ctrl_Gestion_Composant/GetModifierMedicament",
             data:"nomComposant="+$('#libelle').val()+"&code="+$('#lstComposant').val(),
             success:function(data)
             {
                 $('#form-group').empty();
                $('#form-group').append(data);
                 
             },
            error:function()
             {
                 alert('Erreur pendant la modification !!!');
            }
         }
 
    ); 
 }