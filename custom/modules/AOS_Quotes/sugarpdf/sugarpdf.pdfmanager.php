<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/Sugarpdf/sugarpdf/sugarpdf.pdfmanager.php');

class AOS_QuotesSugarpdfPdfmanager extends SugarpdfPdfmanager
{

    function preDisplay()
    {
        parent::preDisplay();
        $this->set_account();
    }

    function set_account()
    {
        /*$account=array();
        if($this->bean->account_id)
        {
            $account_object=new Account();
            $account_object->retrieve($this->bean->account_id);
            $account_object = (array) $account_object;
            $account=$account_object["fetched_row"];
        }
        $this->ss->assign('account', $account);
        */
        $GLOBALS['log']->error('Entro');

    }
}
