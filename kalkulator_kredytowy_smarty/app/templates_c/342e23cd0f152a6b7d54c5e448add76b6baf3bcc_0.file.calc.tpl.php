<?php
/* Smarty version 4.5.4, created on 2024-11-11 22:53:30
  from 'C:\xampp\htdocs\kredytowy_smarty_reorganized\app\templates\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67327cda34f5c9_49741058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '342e23cd0f152a6b7d54c5e448add76b6baf3bcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredytowy_smarty_reorganized\\app\\templates\\calc.tpl',
      1 => 1731361953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67327cda34f5c9_49741058 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<!--
    Minimaxing by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy - Minimaxing" ?? null : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
    </head>
    <body>
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header-wrapper">
                <div class="container">
                    <header id="header">
                        <h1><a href="#"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy" ?? null : $tmp);?>
</a></h1>
                    </header>
                </div>
            </div>

            <!-- Main Content -->
            <div id="main-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <section>
                                <h2>Oblicz swoją miesięczną ratę kredytu</h2>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php" method="post">
                                    <div class="row gtr-uniform">
                                        <div class="col-12">
                                            <label for="amount">Kwota kredytu:</label>
                                            <input type="text" id="amount" name="amount" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['amount']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
                                        </div>
                                        <div class="col-12">
                                            <label for="interest">Oprocentowanie (%):</label>
                                            <input type="text" id="interest" name="interest" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['interest']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
                                        </div>
                                        <div class="col-12">
                                            <label for="years">Okres (lata):</label>
                                            <input type="text" id="years" name="years" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['years']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
                                        </div>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <li><button type="submit" class="primary">Oblicz ratę</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>

                                <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                                    <div class="result">
                                        <h3>Wynik:</h3>
                                        <p>Miesięczna rata: <strong><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 PLN</strong></p>
                                    </div>
                                <?php }?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div id="footer-wrapper">
                <div class="container">
                    <footer id="footer">
                        <ul class="menu">
                            <li>&copy; Minimaxing. All rights reserved.</li>
                        </ul>
                    </footer>
                </div>
            </div>

        </div>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
