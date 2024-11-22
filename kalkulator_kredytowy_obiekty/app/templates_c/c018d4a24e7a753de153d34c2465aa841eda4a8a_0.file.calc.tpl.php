<?php
/* Smarty version 4.5.4, created on 2024-11-22 21:47:35
  from 'C:\xampp\htdocs\kalkulator_kredytowy_obiekty\app\templates\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6740ede791b850_93061611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c018d4a24e7a753de153d34c2465aa841eda4a8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_kredytowy_obiekty\\app\\templates\\calc.tpl',
      1 => 1732308435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6740ede791b850_93061611 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Minimaxing by HTML5 UP</title>
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
						<div class="row">
							<div class="col-12">

								<header id="header">
									<h1><a href="#"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator Kredytowy" ?? null : $tmp);?>
</a></h1>
									<nav id="nav">
										
									</nav>
								</header>

							</div>
						</div>
					</div>
				</div>

			<!-- Banner -->
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

								 <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
                                    <div class="error-messages">
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error_message']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                                                <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                <?php }?>

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


			<!-- Main -->
				<div id="main">
					<div class="container">
						<div class="row main-row">
							<div class="col-4 col-12-medium">

								<section>
									<h2>Welcome to Minimaxing!</h2>
									<p>This is <strong>Minimaxing</strong>, a fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> and released for free by <a href="http://html5up.net">HTML5 UP</a>. It features
									a simple, lightweight design, solid HTML5 and CSS3 code, and full responsive support for desktop, tablet, and small displays.</p>
									<footer class="controls">
										<a href="http://html5up.net" class="button">More cool designs ...</a>
									</footer>
								</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<section>
									<h2>Who are you guys?</h2>
									<ul class="small-image-list">
										<li>
											<a href="#"><img src="images/pic2.jpg" alt="" class="left" /></a>
											<h4>Jane Anderson</h4>
											<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo facilisis amet quis.</p>
										</li>
										<li>
											<a href="#"><img src="images/pic1.jpg" alt="" class="left" /></a>
											<h4>James Doe</h4>
											<p>Vitae magna eget odio amet mollis justo facilisis amet quis. Sed sagittis consequat.</p>
										</li>
									</ul>
								</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<section>
									<h2>How about some links?</h2>
									<div>
										<div class="row">
											<div class="col-6 col-12-small">
												<ul class="link-list">
													<li><a href="#">Sed neque nisi consequat</a></li>
													<li><a href="#">Dapibus sed mattis blandit</a></li>
													<li><a href="#">Quis accumsan lorem</a></li>
													<li><a href="#">Suspendisse varius ipsum</a></li>
													<li><a href="#">Eget et amet consequat</a></li>
												</ul>
											</div>
											<div class="col-6 col-12-small">
												<ul class="link-list">
													<li><a href="#">Quis accumsan lorem</a></li>
													<li><a href="#">Sed neque nisi consequat</a></li>
													<li><a href="#">Eget et amet consequat</a></li>
													<li><a href="#">Dapibus sed mattis blandit</a></li>
													<li><a href="#">Vitae magna sed dolore</a></li>
												</ul>
											</div>
										</div>
									</div>
								</section>

							</div>
							<div class="col-6 col-12-medium">

								<section>
									<h2>An assortment of pictures and text</h2>
									<p>Duis neque nisi, dapibus sed mattis quis, rutrum et accumsan.
									Suspendisse nibh. Suspendisse vitae magna eget odio amet mollis
									justo facilisis quis. Sed sagittis mauris amet tellus gravida
									lorem ipsum dolor sit amet consequat blandit lorem ipsum dolor
									sit amet consequat sed dolore.</p>
									<ul class="big-image-list">
										<li>
											<a href="#"><img src="images/pic3.jpg" alt="" class="left" /></a>
											<h3>Magna Gravida Dolore</h3>
											<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
											facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
											Maecenas eu arcu purus, phasellus fermentum elit.</p>
										</li>
										<li>
											<a href="#"><img src="images/pic4.jpg" alt="" class="left" /></a>
											<h3>Magna Gravida Dolore</h3>
											<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
											facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
											Maecenas eu arcu purus, phasellus fermentum elit.</p>
										</li>
										<li>
											<a href="#"><img src="images/pic5.jpg" alt="" class="left" /></a>
											<h3>Magna Gravida Dolore</h3>
											<p>Varius nibh. Suspendisse vitae magna eget et amet mollis justo
											facilisis amet quis consectetur in, sollicitudin vitae justo. Cras
											Maecenas eu arcu purus, phasellus fermentum elit.</p>
										</li>
									</ul>
								</section>

							</div>
							<div class="col-6 col-12-medium">

								<article class="blog-post">
									<h2>Just another blog post</h2>
									<a class="comments" href="#">33 comments</a>
									<a href="#"><img src="images/pic6.jpg" alt="" class="top blog-post-image" /></a>
									<h3>Magna Gravida Dolore</h3>
									<p>Aenean non massa sapien. In hac habitasse platea dictumst.
									Maecenas sodales purus et nulla sodales aliquam. Aenean ac
									porttitor metus. In hac habitasse platea dictumst. Phasellus
									blandit turpis in leo scelerisque mollis. Nulla venenatis
									ipsum nec est porta rhoncus. Mauris sodales sed pharetra
									nisi nec consectetur. Cras elit magna, hendrerit nec
									consectetur in, sollicitudin vitae justo. Cras amet aliquet
									Aliquam ligula turpis, feugiat id fermentum malesuada,
									rutrum eget turpis. Mauris sodales sed pharetra nisi nec
									consectetur. Cras elit magna, hendrerit nec consectetur
									in sollicitudin vitae.</p>
									<footer class="controls">
										<a href="#" class="button">Continue Reading</a>
									</footer>
								</article>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">

								<section>
									<h2>How about a truckload of links?</h2>
									<div>
										<div class="row">
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="#">Sed neque nisi consequat</a></li>
													<li><a href="#">Dapibus sed mattis blandit</a></li>
													<li><a href="#">Quis accumsan lorem</a></li>
													<li><a href="#">Suspendisse varius ipsum</a></li>
													<li><a href="#">Eget et amet consequat</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="#">Quis accumsan lorem</a></li>
													<li><a href="#">Sed neque nisi consequat</a></li>
													<li><a href="#">Eget et amet consequat</a></li>
													<li><a href="#">Dapibus sed mattis blandit</a></li>
													<li><a href="#">Vitae magna sed dolore</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="#">Sed neque nisi consequat</a></li>
													<li><a href="#">Dapibus sed mattis blandit</a></li>
													<li><a href="#">Quis accumsan lorem</a></li>
													<li><a href="#">Suspendisse varius ipsum</a></li>
													<li><a href="#">Eget et amet consequat</a></li>
												</ul>
											</div>
											<div class="col-3 col-6-medium col-12-small">
												<ul class="link-list">
													<li><a href="#">Quis accumsan lorem</a></li>
													<li><a href="#">Sed neque nisi consequat</a></li>
													<li><a href="#">Eget et amet consequat</a></li>
													<li><a href="#">Dapibus sed mattis blandit</a></li>
													<li><a href="#">Vitae magna sed dolore</a></li>
												</ul>
											</div>
										</div>
									</div>
								</section>

							</div>
							<div class="col-4 col-12-medium">

								<section>
									<h2>Something of interest</h2>
									<p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
									Suspendisse eu varius nibh. Suspendisse vitae magna eget odio amet
									mollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
									lorem ipsum dolor sit blandit.</p>
									<footer class="controls">
										<a href="#" class="button">Oh, please continue ....</a>
									</footer>
								</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">

								<div id="copyright">
									Przykładowa stopka | Design: <a href="http://html5up.net">HTML5 UP</a>
								</div>

							</div>
						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
