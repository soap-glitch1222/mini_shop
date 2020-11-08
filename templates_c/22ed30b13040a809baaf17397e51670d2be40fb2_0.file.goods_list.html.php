<?php
/* Smarty version 3.1.29, created on 2020-11-08 12:28:37
  from "F:\discode\UniServerZ\www\mini_shop\templates\goods_list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa7e4759b8f90_54116179',
  'file_dependency' => 
  array (
    '22ed30b13040a809baaf17397e51670d2be40fb2' => 
    array (
      0 => 'F:\\discode\\UniServerZ\\www\\mini_shop\\templates\\goods_list.html',
      1 => 1604837377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa7e4759b8f90_54116179 ($_smarty_tpl) {
?>
<div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['all_goods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_goods_0_saved_item = isset($_smarty_tpl->tpl_vars['goods']) ? $_smarty_tpl->tpl_vars['goods'] : false;
$_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['goods']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
$__foreach_goods_0_saved_local_item = $_smarty_tpl->tpl_vars['goods'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
"></a>
        <div class="caption">
          <div style="height: 60px;">
            <h3><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></h3>
          </div>
          <div class="row">
            <div class="col-md-6">售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</div>
            <div class="col-md-6">人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</div>
          </div>
          
          <div>
            <h3></h3><a href="comment.php"><button type="button" class="btn btn-block" style="background-color:#ff4dff;font-weight: bold;color: #ffffff;">評論區</button></a></h3>
            
          </div>
          
          <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <title>document示例</title>
          </head>
          <body  onload="test()">
          <table id ="czy">
              <tr>
                  <td style="font-size: large;">★</td><td style="font-size: large;">★</td><td style="font-size: large;">★</td><td style="font-size: large;">★</td><td style="font-size: large;">★</td>
              </tr>
          </table>
          <input type="button" id="ok" style="font-size: normal;" value="打分">

          <?php echo '<script'; ?>
>
              tds=document.getElementsByTagName("td");
              for(var i=0;i<tds.length;i++){
                  tds[i].onmouseover=test;
              }
              var index;
              function  test(){

                  for(var i=0;i<tds.length;i++){
                      if(tds[i]==this)
                      {
                          index=i;
                      }
                  }
                  for(var i=0;i<=index;i++) {
                      tds[i].style.color = "red";
                  }
                  for(var i=index+1;i<tds.length;i++){
                      tds[i].style.color="black";
                  }
              }
              document.getElementById("ok").onclick=function(){
                  alert("评分："+(index+1)+"分");
              }
          <?php echo '</script'; ?>
>
          </body>
          </html>

        </div>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_local_item;
}
if ($__foreach_goods_0_saved_item) {
$_smarty_tpl->tpl_vars['goods'] = $__foreach_goods_0_saved_item;
}
?>
</div>

共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 件商品
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

<?php }
}
