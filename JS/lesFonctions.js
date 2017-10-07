
function afficherLesFormation(numeroActivite)
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormations",
            data:"numeroActivite="+numeroActivite,
             success:function(data)
            {
                $('#divFormations').empty();
                $('#divFormations').append(data);
            },
            error:function()
            {
                alert('Erreur');
            }
        }
        );
    }
    
    function afficherLesAgent(numeroFormation)
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesAgents",
            data:"numeroFormation="+numeroFormation,
             success:function(data)
            {
                $('#divAgents').empty();
                $('#divAgents').append(data);
            },
            error:function()
            {
                alert('Erreur2');
            }
        }
        );
    }
    
    
   