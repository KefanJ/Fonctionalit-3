function ModifierComposant()
{   
    alert($('#txtValeur').val());
    alert($('#lstComposant').val());
    $.ajax 
    (
        {
            type:"get",
            url:"index.php/Ctrl_Gestion_Composant/ModifierComposant",
            data:"nomComposant="+$('#txtValeur').val()+"&code="+$('#lstComposant').val(),
            success:function(data)
            {
                // A toi de jouer ici
            },
            error:function()
            {
                alert('Erreur pendant la modification !!!');
            }
        }

    );   
}