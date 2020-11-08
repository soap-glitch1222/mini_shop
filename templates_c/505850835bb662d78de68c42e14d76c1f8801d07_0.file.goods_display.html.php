<?php
/* Smarty version 3.1.29, created on 2020-11-08 12:26:11
  from "F:\discode\UniServerZ\www\mini_shop\templates\goods_display.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa7e3e348cfa5_02632246',
  'file_dependency' => 
  array (
    '505850835bb662d78de68c42e14d76c1f8801d07' => 
    array (
      0 => 'F:\\discode\\UniServerZ\\www\\mini_shop\\templates\\goods_display.html',
      1 => 1604838326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa7e3e348cfa5_02632246 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
    <p>售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
元整</p>
    <p>人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
    <div>
      <a href="index.php?op=add_to_cart&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&goods_title=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
&goods_amount=1" class="btn btn-primary" role="button">加入購物車</a>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-warning">編輯商品</a>
        <a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-danger">刪除商品</a>
      <?php }?>
    </div>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>发表评论</title>
        <style type="text/css">
            .demo{
                width:500px;
                margin:  0 auto;
            }
            h3{
                font-size:18px
    }
            #comments{
                margin:10px auto
    }
            #post{
                margin-top:10px
    }
            #comments p,#post p{
                line-height:30px
    }
            #comments p span{
                margin:4px; color:#999
    }
            #message{
                position:relative;
                display:none;
                width:100px;
                padding:4px;
                margin-top:-100px;
                margin-left:30px;
                background: #ff0000;
                color: #c286ff;
                z-index:1001
    }
        </style>
        <?php echo '<script'; ?>
 src="//cdn.bootcss.com/jquery/1.4.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function(){
                var comments = $("#comments");
                $.getJSON("server.php",function(json){
                    $.each(json,function(index,array){
                        var txt = "<p><strong>"+array["user"]+"</strong>："+array["comment"]+"<span>"+array["addtime"]+"</span></p>";
                        comments.append(txt);
                    });
                });
                $("#add").click(function(){
                    var user = $("#user").val();
                    var txt = $("#txt").val();
                    $.ajax({
                        type: "POST",
                        url: "comment.php",
                        data: "user="+user+"&txt="+txt,
                        success: function(msg){
                            if(msg==1){
                                var str = "<p><strong>"+user+"</strong>："+txt+"<span>刚刚</span></p>";
                                comments.append(str);
                                $("#message").show().html("发表成功！").fadeOut(1000);
                                $("#txt").attr("value","");
                            }else{
                                $("#message").show().html(msg).fadeOut(1000);
                            }
                        }
                    });
                });
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
    <div class="demo">
        <div id="comments">
            <h3>评论列表</h3>
        </div>
        <div id="post">
            <h3>发表评论</h3>
            <p>昵称：</p>
            <p><input type="text" class="input" id="user" /></p>
            <p>评论内容：</p>
            <p><textarea class="input" id="txt" style="width:100%; height:80px"></textarea></p>
            <p><input type="submit" value="发表" id="add" /></p>
            <div id="message"></div>
        </div>
    </div>
    </body>
    </html>

  </div>
</div>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#goods" aria-controls="goods" role="tab" data-toggle="tab">商品介紹</a></li>
  <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab">退換或須知</a></li>
  <li role="presentation"><a href="#service" aria-controls="service" role="tab" data-toggle="tab">售後服務</a></li>
  <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">特別說明</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="goods">
    <h3>商品介紹</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</p>
  </div>
  <div role="tabpanel" class="tab-pane" id="note">
    <h3>退換貨須知</h3>
    <ul>
      <li>商品到貨享十天猶豫期之權益<span class="text-danger">（注意！猶豫期非試用期）</span>，辦理退貨商品必須是全新狀態且包裝完整，否則將會影響退貨權限。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="service">
    <h3>售後服務</h3>
    <ul>
      <li>如您收到商品，請依正常程序儘速檢查商品，若商品發生新品瑕疵之情形，您可申請更換新品或退貨，請直接點選<a href="#" target="_blank">聯絡我們</a>。</li>
      <li>若您對於購買流程、付款方式、退貨及商品運送方式有疑問，你可直接點選<a href="#" target="_blank">會員中心</a>。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="other">
    <h3>特別說明</h3>
    <ul>
      <li>本公司對於所販售具遞延性之商品或服務，消費者權益均受保障。如因合作廠商無法提供商品或服務，請與本公司聯繫辦理退貨或換成等值商品。</li>
      <li>※特惠商品，不適用折價券</li>
    </ul>
  </div>
</div>

<?php }
}
