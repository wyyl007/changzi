<?php
     namespace Admin\Controller;
     use Think\Controller;
     
     class  GoodsController  extends Controller{
         function sdd12(){
          
              $arr = array(
               'goods_name'=>'htc',
               'goods_price'=>5600,
                'goods_weight'=>400,
        
           );
            $goods = new \Model\GoodsModel();  
                $info= $goods -> add($arr);     
              
             
              $this->display('sdd');
         }
         function   add(){
             $goods=new \Admin\Model\GoodsModel();
     
             
          if (!empty($_POST)){
                 $z=$goods ->add($_POST);
                  //跳转
                 if($z){
                         
                     $this->redirect('show',array(),3,'添加商品成功');
                     
                 }else{
                          $this->redirect('show',array(),3,'添加商品失败');
                  
                 }
                 
             } else {
                 //展示表单
                 $this->display();    
             }
            
         }
         
         function   GoodsList123(){
                  //展示表单
                 $this->display();
             //重定向到其他界面
                 $this->dirrect('show');
             
         }
         function show(){
            // echo \Tools\Page::$name;
             
                     $goods=D('Goods');
             $total=$goods->count();
             $per=4;
             $page_obj=new \Tools\Page($total,$per);
             
             $sql="select * from sw_goods order by goods_id  desc limit 0,4";
                    
             
             
             $info=$goods->query($sql);
            //
             $pagelist=$page_obj->fpage();
             $this->assign('pagelist',$pagelist);
        
            $this->assign('info',$info);
           //不加display显示的是show方法,,,加上显示show.html  
            $this->display();
             
             
         }
         function   delete(){
             ///得刷新界面,,,,,,,思考用ajax   服务器数据库 区别
                     $id = $_GET['id'];
               $goods=new \Admin\Model\GoodsModel();
           $goods -> where("goods_id=$id") -> delete();
         
             $this->redirect('show');
          
         }
         
              function   update(){
             // 4.1显示修改信息
             //查询一条记录,,把获得的信息传递给模板使用
            $id= $_GET['id'];
         $goods=new \Admin\Model\GoodsModel();
          
         $info = $goods -> where("goods_id=$id") -> select();
            
                  $this->assign('info',$info);
                  
                  //$this->assign('info','Goods/save')
                 $this->display();
                         
         }
         function   save(){
              $goods=new \Admin\Model\GoodsModel();
             //4.2  将修改后的信息跟新到show页面
             $data['goods_introduce']=$_POST['goods_introduce'];
             $data['goods_name']=$_POST['goods_name'];
              $data['goods_category_id']=$_POST['goods_category_id'];
              $data['goods_price']=$_POST['goods_price'];
              $data['goods_brand_id']=$_POST['goods_brand_id'];
              $data['goods_id']=$_POST['id'];
              
              var_dump($_POST);
                 $in = $goods->where("goods_id={$_POST['id']}")->save($data);
                 
                 if($in){   
          $this->redirect('show');
                 }
                   
         }
    
         function  showList(){
            
             
             
             
             
             
             
         }
         
         
         
     }


















?>


