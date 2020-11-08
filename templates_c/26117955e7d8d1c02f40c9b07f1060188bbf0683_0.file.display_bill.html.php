<?php
/* Smarty version 3.1.29, created on 2020-11-08 09:31:58
  from "F:\discode\UniServerZ\www\mini_shop\templates\display_bill.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa7bb0e580047_52729309',
  'file_dependency' => 
  array (
    '26117955e7d8d1c02f40c9b07f1060188bbf0683' => 
    array (
      0 => 'F:\\discode\\UniServerZ\\www\\mini_shop\\templates\\display_bill.html',
      1 => 1604741690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa7bb0e580047_52729309 ($_smarty_tpl) {
?>
<h2><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_date'];?>
 訂購細目-<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_status'];?>
</h2>
<div>收貨人：<?php echo $_smarty_tpl->tpl_vars['bill']->value['user_name'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_sex'];?>
</div>
<div>收貨地址：<?php echo $_smarty_tpl->tpl_vars['bill']->value['user_zip'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_county'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_district'];
echo $_smarty_tpl->tpl_vars['bill']->value['user_address'];?>
</div>
<div>收貨電話：<?php echo $_smarty_tpl->tpl_vars['bill']->value['user_tel'];?>
</div>
<table class="table">
    <tr>
      <th>商品名稱</th>
      <th>單價</th>
      <th>數量</th>
      <th style="text-align: right;">小計</th>
    </tr>
  <?php
$_from = $_smarty_tpl->tpl_vars['bill_detail']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bill_0_saved_item = isset($_smarty_tpl->tpl_vars['bill']) ? $_smarty_tpl->tpl_vars['bill'] : false;
$_smarty_tpl->tpl_vars['bill'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['bill']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->_loop = true;
$__foreach_bill_0_saved_local_item = $_smarty_tpl->tpl_vars['bill'];
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_title'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_price'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_amount'];?>
</td>
      <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['bill']->value['goods_total'];?>
 元</td>
    </tr>
  <?php
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_0_saved_local_item;
}
if ($__foreach_bill_0_saved_item) {
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_0_saved_item;
}
?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_total'];?>
 元</td>
    </tr>
</table>
<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value && $_smarty_tpl->tpl_vars['bill']->value['bill_status'] == '') {?>
  <?php echo '<script'; ?>
 src="class/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" type="text/css" href="class/bootstrap-sweetalert/sweet-alert.css">
  <?php echo '<script'; ?>
 type="text/javascript">
    function delete_bill(bill_sn){
      swal({
        title: "確定要刪除此訂單嗎？",
        text: "刪掉之後，該訂單所有資料會消失喔!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "是！我要刪了它！",
        closeOnConfirm: false
        },
        function(){
        location.href='bill.php?op=delete_bill&bill_sn=' + bill_sn;
        swal("好啦！刪完了！", "後悔也來不及了。", "success");
      });
    }
  <?php echo '</script'; ?>
>
  <a href="javascript:delete_bill('<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
')" class="btn btn-danger">刪除訂單</a>
  <a href="bill.php?op=finish_bill&bill_sn=<?php echo $_smarty_tpl->tpl_vars['bill']->value['bill_sn'];?>
" class="btn btn-primary">已出貨</a>
<?php }
}
}
