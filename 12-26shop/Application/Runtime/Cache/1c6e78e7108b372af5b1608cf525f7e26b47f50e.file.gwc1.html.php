<?php /* Smarty version Smarty-3.1.6, created on 2017-01-11 21:44:38
         compiled from "./Application/Home/View\Goods\gwc1.html" */ ?>
<?php /*%%SmartyHeaderCode:32359586a3bf4a94d63-37161803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c6e78e7108b372af5b1608cf525f7e26b47f50e' => 
    array (
      0 => './Application/Home/View\\Goods\\gwc1.html',
      1 => 1484142267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32359586a3bf4a94d63-37161803',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_586a3bf4cafee',
  'variables' => 
  array (
    'res' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586a3bf4cafee')) {function content_586a3bf4cafee($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />

        <title>购物流程_YONGDA商城 - Powered by YongDa</title>

        <link href="/12-26shop/Public/Qcss/style.css" rel="stylesheet" type="text/css" />
       
        <style type="text/css">
            table { border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto; }
            td { border:1px solid #dddddd; }
            #consignee_addr { width:450px; }
            .spinnerExample{ width:28px  }
            .jia  { border-width:1px 0 1px 1px;border-radius:3px 0 0 3px; }
            .jian { border-width:1px 1px 1px 0;border-radius:0  3px 3px  0; }
        </style>

        
        
  
<script src="http://cdn.static.runoob.com/libs/jquery/1.8.1/jquery.min.js"></script>
<   

 <script>
                 function delete12(){
                    xhr=new  XMLHttpRequest();
                      xhr.open('get','delete12',true);
                      xhr.send();
                      xhr.onreadystatechange=function(){
                          if(xhr.readyState==4){
                              r=xhr.responseText;
                              alert(r);
                          }     
                      }
                            }
                     function update(){
                  
                  xhr=new  XMLHttpRequest();
                      xhr.open('get','update',true);
                      xhr.send();
                      xhr.onreadystatechange=function(){
                          if(xhr.readyState==4){
                              r=xhr.responseText;
                              alert(r);
                          }
                      }
         
                            }
                
                      //////////////////////////////////加减///////////////////////////////                    
                             $(document).ready(function(){  
   var add,reduce,num,num_txt;  
   add=$(".jia");//添加数量  
   reduce=$(".jian");//减少数量  
   num="";//数量初始值  
   num_txt=$(".spinnerExample");//接受数量的文本框     
   //var num_val=num_txt.val();//给文本框附上初始值  
     
   /*添加数量的方法*/  
   add.click(function(){  
     num = $(".spinnerExample").val();      
     num++;  
     num_txt.val(num);  
     //ajax代码可以放这里传递到数据库实时改变总价  
    });  
      
   /*减少数量的方法*/   
   reduce.click(function(){  
    //如果文本框的值大于0才执行减去方法  
        num = $(".spinnerExample").val();  
     if(num >0){  
      //并且当文本框的值为1的时候，减去后文本框直接清空值，不显示0  
      if(num==1)  
      { num--;  
       num_txt.val("");  
      }  
      //否则就执行减减方法  
      else  
      {  
       num--;  
       num_txt.val(num);  
      }  
    
     }  
    });  
  })  
       
 
                
                
                
                
                
                
                
                
                
                
                
                
          </script>
    </head>
    <body>

        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="#" name="top"><img class="logo" src="./images/logo.gif" /></a>
            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <a href="#"> 登录</a>
                        <a href="#">注册</a>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="#">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>


                </div>
            </div>

            <div id="mainNav" class="clearfix">
                <a href="#" class="cur">首页<span></span></a>
                <a href="#">GSM手机<span></span></a>
                <a href="#">双模手机<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>
            </div>
        </div>


        <div class="header_bg">

            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('./images/sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>

        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="./images/biao6.gif" />
                北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>

            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="./images/biao3.gif" />

                <span class="cart" id="ECS_CARTINFO">
                    <a href="#" title="查看购物车">您的购物车中有 1 件商品，总计金额 ￥2000.00元。</a></span>
                <a href="#"><img style="vertical-align: middle;" src="./images/biao7.gif" /></a>
            </div>
        </div>

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>
        <div class="blank"></div>

        <div class="blank"></div>
        <div class="block">
             
            
            
          
            
            
            <div class="flowBox">
                <h6><span>商品列表</span></h6>
   
                <form id="formCart"  action="" method="">
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>属性</th>
                                <th>市场价</th>
                                <th>本店价</th>
                                <th>购买数量</th>
                                <th>小计</th>
                                <th>操作</th>
                            </tr>
                           <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
                            <tr>
                                <td align="center">
                                    <a href="#" target="_blank"><img style="width: 80px; height: 80px;" src="./images/24_thumb_G_1241971981429.jpg" title="P806" /></a><br />
                                    <a href="#" target="_blank" class="f6"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];?>
</a>
                                </td>
                                <td>颜色:灰色 <br />
                                </td>
                                <td align="right">￥.00元</td>
                                <td align="right">￥2000.00元</td>
                                <td align="right">
                                    <center>
                                    <input type="text" class="jian"/>
                                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['name_num'];?>
" class="spinnerExample"/>
                                    <input type="text" class="jia"/>
                                    </center>
<!--                                    <input name="goods_number[43]" id="goods_number_43" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['name_num'];?>
" size="4" class="inputBg" style="text-align: center;" onkeydown="showdiv(this)" type="text" />-->
                                </td>
                                <td align="right">￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_parentid'];?>
元</td>
                                <td align="center">
                                    <a href="onedelete?id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_goods_id'];?>
" class="f6">删除</a>
                                </td>
                            </tr>
                  
                     
                           
                   
                          <?php } ?>
                        </tbody></table>
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <td>
                                    购物金额小计 ￥2000.00元，比市场价 ￥2400.00元 节省了 ￥400.00元 (17%)              </td>
                                <td align="right">
                             <input value="清空购车"  id="bnt_blue_1" onclick="delete12()"  type="button" />
<!--                              <a name='del' href=''>清空购物车</a>
                              <a name="del2"  href="">更新购物车</a>-->
                              <input name="submit" id="bnt_blue_2" onclick="update()" value="更新购物车" type="button" />
                                </td>
                            </tr>
                        </tbody></table>
                    
                    <input name="step" value="update_cart" type="hidden" />
                </form>
           

                <table cellpadding="5" cellspacing="0" width="99%">
                    <tbody><tr>
                            <td><a href="index"><img src="/12-26shop/Public/Qimg/continue.gif" alt="continue" /></a></td>
                            <td align="right"><a href="../Center/ucenter2"><img src="/12-26shop/Public/Qimg/checkout.gif" alt="checkout" /></a></td>
                        </tr>
                    </tbody></table>
            </div>
             
            <div class="blank"></div>
            <div class="blank5"></div>
        </div>

        <div class="blank"></div>
        <div class="block">

            <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="./images/di.jpg" /></a>

            <div class="blank"></div>
        </div>

        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>
                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="blank"></div>

        <div id="bottomNav" class="box block">
            <div class="box_1">
                <div class="links clearfix"> 
                    <a href="#" target="_blank" title="YONGDA商城"><img src="./images/flow.htm" alt="YONGDA商城" /></a>


                    [<a href="#" target="_blank" title="">yongda商城</a>]
                </div>
            </div>
        </div>

        <div class="blank"></div>


        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
                |
                <a href="#">联系我们</a>
                |
                <a href="#">公司简介</a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>
        </div>



        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>
    </body>
</html><?php }} ?>