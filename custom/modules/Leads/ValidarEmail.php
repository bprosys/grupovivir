<?php
/* disclaimer: we are not gonna get all crazy with using PDO and parameterized queries at this point,
               but be aware that there is potential for sql injection here. The auth => true will help
               mitigate that somewhat, but you're never supposed to trust any input, blah blah blah. */

global $db; // load the global sugarcrm database object for your query

$book_name = urldecode($_REQUEST['email1']); // we are gonna start with $_REQUEST to make this easier to test, but consider changing to $_POST when confirmed working as expected
$book_id   = urldecode($_REQUEST['id']);   // need to make sure this still works as expected when editing an existing record

// the $db->quote is an alias for mysql_real_escape_string() It still does not protect you completely from sql injection, but is better than not using it...
$sql = "SELECT id FROM email_addresses WHERE deleted = 0 AND email_address = '".$db->quote($book_name)."' AND id <> '".$db->quote($book_id)."'";
$sql2 = "SELECT * FROM email_addresses 
INNER JOIN email_addr_bean_rel ON email_addresses.id = email_addr_bean_rel.email_address_id
WHERE 
email_addresses.email_address = '".$db->quote($book_name)."'AND 
email_addr_bean_rel.bean_module IN ('Leads','Contacts','Account') AND 
email_addr_bean_rel.deleted = 0 AND email_addresses.id <> '".$db->quote($book_id)."'";

$res = $db->query($sql2);

if ($db->getRowCount($res) > 0) {
    echo 'exists';
}
else {
    echo 'unique';
}

?>