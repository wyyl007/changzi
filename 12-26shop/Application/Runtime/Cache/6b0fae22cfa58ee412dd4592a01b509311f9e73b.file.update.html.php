<?php /* Smarty version Smarty-3.1.6, created on 2017-01-04 21:37:52
         compiled from "./Application/Admin/View\Goods\update.html" */ ?>
<?php /*%%SmartyHeaderCode:13152586cfab02fcf32-54269587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b0fae22cfa58ee412dd4592a01b509311f9e73b' => 
    array (
      0 => './Application/Admin/View\\Goods\\update.html',
      1 => 1482934297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13152586cfab02fcf32-54269587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_586cfab03f30f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586cfab03f30f')) {function content_586cfab03f30f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/12-26shop/Public/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>
           
        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./admin.php?c=goods&a=showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/12-26shop/index.php/Admin/Goods/save" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                
               <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="goods_category_id">
                            <option>请选择</option>
                            <option>家用电器</option>
                            <option>手机数码</option>
                            <option>电脑办公</option>
                            <option>服饰鞋帽</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="goods_brand_id">
                            <option>请选择</option>
                            <option>苹果</option>
                            <option>诺基亚</option>
                            <option>HTC</option>
                            <option>摩托罗拉</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_image" value="./img/2013-12-33.jpg" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_introduce"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_introduce'];?>
</textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">
                            
                            
                            
                            
                            
             
                        <input type="submit" value="修改">
                    </td>
                </tr>
                 <?php } ?>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>