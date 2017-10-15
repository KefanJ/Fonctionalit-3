<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_modifMedicament
 *
 * @author user
 */
class model_modifMedicament extends CI_Controller{
public function GetModifierMedicament()
{
        
        $sql = $this->db->query(" UPDATE composant
SET CMP_CODE =,
  CMP_LIBELLE = 
  WHERE = $data
 ");
 return $sql->result();
         }
    
}
