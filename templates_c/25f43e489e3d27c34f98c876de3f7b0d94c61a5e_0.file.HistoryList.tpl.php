<?php
/* Smarty version 3.1.30, created on 2022-04-25 15:01:33
  from "C:\xampp\htdocs\php_04_uproszczony\app\views\HistoryList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62669bada78868_29604890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f43e489e3d27c34f98c876de3f7b0d94c61a5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_uproszczony\\app\\views\\HistoryList.tpl',
      1 => 1650891692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62669bada78868_29604890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157520896062669bada685d6_98174879', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132777387562669bada68fa7_10718554', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67652821862669bada78346_89258173', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_157520896062669bada685d6_98174879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>KALKUALTOR </p> 

<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_132777387562669bada68fa7_10718554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator obliczania rat
<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_67652821862669bada78346_89258173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" style="background-color:gray;width:5%;color:black;"  class="pure-menu-heading pure-menu-link">wyloguj</a>
<br>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcshow" style="background-color:gray;width:10%;color:black;"  class="pure-menu-heading pure-menu-link">Pokaż Kalkulator</a>
<br><br><br>
<div class="bottom-margin">

</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>lp.</th>
		<th>ilosc rat</th>
		<th>kwota</th>
		<th>oprocentowanie</th>
		<th>rata</th>
		<th>prowizja</th>
		<th>kwota do oddania</th>

	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kredyt']->value, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['k']->value["id_kredyt"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['k']->value["ilosc_rat"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['k']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['k']->value["opr"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['k']->value["result_rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['k']->value["result_prowizja"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['k']->value["result_kwota"];?>
</td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table>

<?php
}
}
/* {/block 'content'} */
}
