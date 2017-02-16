<?php

namespace Home\Controller;
use  Think\Controller;

class   GoodsController  extends Controller{
    
 //   不加$this-> display显示的是show方法,,,加上显示show.html

    function   detail ($id){
       //$id     form的post还可以get传值,,,传给GoodsController的detail方法,传给的detail.html
 
     session(array('name'=>'session_id','expire'=>3600));
      session('id',$id);
      
        
        
        $goods=new \Home\Model\GoodsModel('goods');
        $info=$goods->where("goods_id={$id}")->select();
        var_dump($info);
        $this->assign('info',$info);
   
         $this->display();
        
        
    }
    
      function  index (){
      
          $goods= D('Goods','Model');
             $info= $goods->select();
             var_dump($info);
             $this->assign('info',$info);
           
         //不加display显示的是show方法,,,加上显示show.html  
        $this->display();
    }
    function  gwc1(){
//        if (isset($_GET['id'])){
//            $id=$_GET['id'];
//      
//         $goods= D('Goods','Model');
//         
//          $info= $goods->where("goods_id=$id")->select();
//               
//          $this->assign('info',$info);
//        } else {
//            var_dump($_SERVER);
//            echo $_SERVER['QUERY_STRING'];
//        } 
      
       $goods=D('Cart','Model');
       
       
      $info= $goods->select();
      //购物车相同商品
     $sql="select c_goods_id,c_name,count(c_name) as name_num,c_parentid  from  sw_cart GROUP BY  c_name";
    $res = $goods->query($sql);
    var_dump($res);
      
 $this->assign('res',$res);
            
         //不加display显示的是show方法,,,加上显示show.html  
  $this->display();
    }
     function  gwc2(){
      $id= session('id');
         $goods= D('Goods','Model');
            $info= $goods->where("goods_id=$id")->select();

            $this->assign('info',$info);
      
         //不加display显示的是show方法,,,加上显示show.html  
$this->display();
    }
    function  delete12(){
        //使用了ajax
       $cart=D('Cart','Model');
      $sql="delete from sw_cart";
      $Res= $cart->execute($sql);
      if ($Res){
          echo '1';
          
      }else{
          echo '0';
      }
    }
    function onedelete(){
    $id = $_GET['id'];
   
         $cart=D('Cart','Model');
  
        $cart->where("c_goods_id=$id")->delete();
        
     $this->redirect('gwc1');
        
        
        
    }
    function   comment(){
       
  
//     $arr=[];
//     $arr['email']=$_POST['em'];
//     $arr['content']=$_POST['som'];
//     $arr['goods_id']=$_POST['id123'];
      $arr=[];
      $arr['email']=$_POST['email'];
        $arr['content']=$_POST['content'];
        $arr['goods_id']=$_GET['id'];
        
        
        
        
     $com=D('Comment','Model');
     $com->add($arr);
     $info=$com->select();
   
     $this->assign('info',$info);
    // $this->display('detail');
    }
    function   update(){
        //使用ajax
           $goods=D('Cart','Model');
      $info= $goods->select();
    
      $this->assign('info',$info);
    }
    
  
    
    
}






























?>