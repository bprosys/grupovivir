<?php /* Smarty version 2.6.29, created on 2018-07-30 15:04:59
         compiled from modules/Leads/tpls/unique_email_checker.tpl.js */ ?>
<input type="text" name="email1" id="name" maxlength="255" value="<?php echo $this->_tpl_vars['name_value']; ?>
" />
<span id="book_unique_result"></span>

<?php echo '
<script type="text/javascript">
$(document).ready(function() {

    $(\'#name\').blur(function(){

        $(\'#book_unique_result\').html(\'<strong> Verificando ...</strong>\');

        $.post(\'index.php?entryPoint=email_unico\', {email1: $(\'#name\').val(), id: $(\'[name="record"]\').val()}, function(data){

            if (data == \'exists\') {
                removeFromValidate(\'EditView\', \'name\');
                addToValidate(\'EditView\', \'name\', \'float\', true, \'Esa direccion de correo ya esta registrada.\');

                $(\'#book_unique_result\').html(\'<strong style="color:red;"> &#x2717;</strong>\');
            }
            else if (data == \'unique\') {
                removeFromValidate(\'EditView\', \'name\');
                addToValidate(\'EditView\', \'name\', \'\', true, \'Name Required\');

                $(\'#book_unique_result\').html(\'<strong style="color:green;"> &#x2713;</strong>\');
            }
            else {
                // uh oh! maybe you have php display errors on?
            }

        });
    });
});
</script>
'; ?>

