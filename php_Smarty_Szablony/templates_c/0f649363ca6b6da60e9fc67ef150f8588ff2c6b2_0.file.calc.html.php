<?php
/* Smarty version 4.5.4, created on 2024-11-26 21:04:58
  from 'C:\xampp\htdocs\php_05\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_674629ea4d2d69_91569821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f649363ca6b6da60e9fc67ef150f8588ff2c6b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\app\\calc.html',
      1 => 1732651405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674629ea4d2d69_91569821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1347261351674629ea4c0f45_00919788', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1481702754674629ea4c1722_97181340', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1347261351674629ea4c0f45_00919788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1347261351674629ea4c0f45_00919788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1481702754674629ea4c1722_97181340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1481702754674629ea4c1722_97181340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\php_05\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\php_05\\lib\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
        <fieldset>

            <label for="amount">Kwota kredytu</label>
            <input id="amount" type="text" placeholder="kwota kredytu" name="amount" value="<?php if ((isset($_smarty_tpl->tpl_vars['form']->value['amount']))) {
echo $_smarty_tpl->tpl_vars['form']->value['amount'];
}?>">

            <label for="years">Liczba lat</label>
            <input id="years" type="text" placeholder="liczba lat" name="years" value="<?php if ((isset($_smarty_tpl->tpl_vars['form']->value['years']))) {
echo $_smarty_tpl->tpl_vars['form']->value['years'];
}?>">

            <label for="rate">Oprocentowanie (%)</label>
            <input id="rate" type="text" placeholder="oprocentowanie" name="rate" value="<?php if ((isset($_smarty_tpl->tpl_vars['form']->value['rate']))) {
echo $_smarty_tpl->tpl_vars['form']->value['rate'];
}?>">

            <button type="submit" class="pure-button">Oblicz</button>
        </fieldset>
    </form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
    <h4>Informacje: </h4>
    <ol class="inf">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
    <h4>Miesięczna rata wynosi</h4>
    <p class="res">
        <?php echo smarty_function_math(array('equation'=>"round(r,2)",'r'=>$_smarty_tpl->tpl_vars['result']->value),$_smarty_tpl);?>
 zł
    </p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
