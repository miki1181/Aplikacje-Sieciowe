<?php
/* Smarty version 4.5.4, created on 2024-11-26 20:00:05
  from 'C:\xampp\htdocs\php_04_szablony_smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67461ab54ea4e7_27150425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d04ff6f87b60f2513a692aec8ab8863cec4d5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\app\\calc.html',
      1 => 1732647603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67461ab54ea4e7_27150425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104804644467461ab54dbd09_59826621', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56023493067461ab54dc486_55929743', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_104804644467461ab54dbd09_59826621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_104804644467461ab54dbd09_59826621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_56023493067461ab54dc486_55929743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_56023493067461ab54dc486_55929743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\php_04_szablony_smarty\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\php_04_szablony_smarty\\lib\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
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