<?php
/* Smarty version 3.1.30, created on 2022-04-25 14:16:21
  from "C:\xampp\htdocs\php_04_uproszczony\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6266911566c206_23694702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c73f30bd331e5dd2b8cc4e87ccc0fd2c9a1119eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\views\\CalcView.tpl',
      1 => 1650888103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6266911566c206_23694702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310814605626691155dbff8_04950418', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2131476244626691155dc923_98186680', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7752946176266911566bdc1_54403244', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_310814605626691155dbff8_04950418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> 

<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_2131476244626691155dc923_98186680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat
<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7752946176266911566bdc1_54403244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" style="background-color:gray;width:5%;color:black;"  class="pure-menu-heading pure-menu-link">wyloguj</a>
<br>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
history" style="background-color:gray;width:8%;color:black;"  class="pure-menu-heading pure-menu-link">Poka?? histori??</a>

<h3>Kalkulator obliczania rat kredytu ! Witaj, <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 !  </h3>

	
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
datas" method="post">
	<fieldset>
		<label for="kw">Kwota kredytu</label>
		<input id="kw" type="number" min="1000" max="100000" placeholder="1-100000" name="kw" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
	<br>
		<label style="color: white;" for="rt">podaj ilo???? rat</label>
		<input type="range" min="3" max="36" step="3" name="rt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" oninput="this.nextElementSibling.value = this.value" >
		<output  style="color: white;"><?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
</output>
	<br><br>
		<label for="op">oprocentowanie</label>
		<input placeholder="1-15%" id="op" type="number" min="1.0" max="15.0" name="op" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>


	<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages inf">
		Miesi??czna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
<br>
		Prowizja to: <?php echo $_smarty_tpl->tpl_vars['res']->value->prowizja;?>
<br>
		Kwota do sp??aty: <?php echo $_smarty_tpl->tpl_vars['res']->value->kwotaend;?>
<br> 
</div>
<?php }?>



<?php
}
}
/* {/block 'content'} */
}
