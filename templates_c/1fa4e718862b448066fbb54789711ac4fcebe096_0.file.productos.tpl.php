<?php /* Smarty version 3.1.27, created on 2015-10-02 02:43:30
         compiled from "C:\xampp\htdocs\Web 2\privera--vieja\templates\productos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10240560dd332bc1cb9_41574634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa4e718862b448066fbb54789711ac4fcebe096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera--vieja\\templates\\productos.tpl',
      1 => 1443746608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10240560dd332bc1cb9_41574634',
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'key' => 0,
    'atributo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560dd332c343c6_84692130',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560dd332c343c6_84692130')) {
function content_560dd332c343c6_84692130 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10240560dd332bc1cb9_41574634';
?>
<label class="control-label" for="nombre">Productos</label>
<?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['producto']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->_loop = true;
$foreach_producto_Sav = $_smarty_tpl->tpl_vars['producto'];
?>
  <ul class="list-group col-sm-12">
    <?php
$_from = $_smarty_tpl->tpl_vars['producto']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['atributo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['atributo']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['atributo']->value) {
$_smarty_tpl->tpl_vars['atributo']->_loop = true;
$foreach_atributo_Sav = $_smarty_tpl->tpl_vars['atributo'];
?>
      <?php if ($_smarty_tpl->tpl_vars['key']->value === "descripcion") {?>
        <ul class="list-group-item col-sm-4">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "imagenes") {?>
        <ul class="list-group-item col-sm-2">
          <img src="<?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>
" alt="no se cargo imagen" />
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['key']->value === "nombre") {?>
        <ul class="list-group-item col-sm-2">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
      <?php } else { ?>
        <ul class="list-group-item col-sm-1">
          <?php echo $_smarty_tpl->tpl_vars['atributo']->value;?>

        </ul>
      <?php }?>
    <?php
$_smarty_tpl->tpl_vars['atributo'] = $foreach_atributo_Sav;
}
?>
    <a class="glyphicon glyphicon-trash eliminar" href="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a>
    <a class="glyphicon glyphicon-eye-open ver" href="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a>
    <a class="glyphicon glyphicon-picture botonAgregarImagenes" href="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"></a>
  </ul>
<?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}
?>

<?php echo '<script'; ?>
 src="js/imagenajax.js"><?php echo '</script'; ?>
>
<?php }
}
?>