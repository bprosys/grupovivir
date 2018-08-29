<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadsViewEdit extends ViewEdit
{
    public function display()
    {
        // make sure it works in the subpanel too
        $this->useForSubpanel = true;

        // make the name value available in the tpl file
        $this->ss->assign('name_value', $this->bean->email1);

        // load the parsed contents of the tpl into this var
        $name_input_code = $this->ss->fetch('modules/Leads/tpls/unique_email_checker.tpl.js');

        // pass the parsed contents down into the editviewdefs
        $this->ss->assign('custom_name_code', $name_input_code);

        // definitely need to call the parent method
        parent::display();
    }
}
?>