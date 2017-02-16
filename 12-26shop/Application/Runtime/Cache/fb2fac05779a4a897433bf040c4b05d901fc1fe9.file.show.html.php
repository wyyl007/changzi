<?php /* Smarty version Smarty-3.1.6, created on 2017-01-04 21:37:24
         compiled from "./Application/Admin/View\Goods\show.html" */ ?>
<?php /*%%SmartyHeaderCode:2915586cfa940cbfa5-14540028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb2fac05779a4a897433bf040c4b05d901fc1fe9' => 
    array (
      0 => './Application/Admin/View\\Goods\\show.html',
      1 => 1483535473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2915586cfa940cbfa5-14540028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
    's_category_info' => 0,
    '_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_586cfa9422b8f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586cfa9422b8f')) {function content_586cfa9422b8f($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
                <title>会员列表</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="/12-26shop/Public/css/mine.css" type="text/css" rel="stylesheet" />
         <style>
            .tr_color{ background-color: #9F88FF }
        </style>
   
        
        
        
        
    </head>
    <body>
        
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="add">【添加商品】</a>
                </span>
            </span>
        </div>
        
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
          <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                    
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_weight'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
                        <td><img src="/12-26shop/Public/img/20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="/12-26shop/Public/img/20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_create_time'];?>
</td>
                        <td><a href="/12-26shop/index.php/Admin/Goods/update?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">修改</a></td>
                        <td><a href="/12-26shop/index.php/Admin/Goods/delete?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                           <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
<!--        
        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_category_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['category_name'];?>
</option>
                            <?php } ?>-->
        
        
        
       
    </body>
</html>
<?php }} ?>