<?php
/* Smarty version 4.3.4, created on 2025-01-22 20:50:29
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67914c05e67569_51861747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'febe5ff061940fb691ff6a7a7b803a00093ea7cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\Hello.tpl',
      1 => 1737575429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67914c05e67569_51861747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    
	<meta charset="utf-8"/>
	<title>Hello World | Amelia framework</title>
</head>

<body>
    
    My value: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

</body>

</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
}
