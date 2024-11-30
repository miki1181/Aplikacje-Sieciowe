<?php
/* Smarty version 4.5.4, created on 2024-11-30 23:43:30
  from 'C:\xampp\htdocs\5_kontroler_glowny\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_674b9512116a09_48535360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39c83674bff5c50c686e7277daa1465a585ede66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\5_kontroler_glowny\\app\\calc\\CalcView.html',
      1 => 1732996274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b9512116a09_48535360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_395385241674b951210bf91_45774037', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content'} */
class Block_395385241674b951210bf91_45774037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_395385241674b951210bf91_45774037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\5_kontroler_glowny\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<h2>Kalkulator Kredytowy</h2>
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
    <label>Kwota kredytu: <input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
" /></label><br/>
    <label>Liczba lat: <input type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" /></label><br/>
    <label>Oprocentowanie (%): <input type="text" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rate;?>
" /></label><br/>
    <input type="submit" value="Oblicz" />
</form>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['msgs']->value) > 0) {?>
<div>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->monthly_payment))) {?>
<div>
    <h4>Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['result']->value->monthly_payment;?>
</h4>
</div>
<?php }
}
}
/* {/block 'content'} */
}
