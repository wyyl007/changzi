<?php


namespace Home\Controller;
use  Think\Controller;

class   OrderController  extends Controller{
    
    function   gwc3(){
//1.插入订单;;;
//2生成订单号赋给gwc3
        
         $id= session('id');
         $info['order_u_id']=$id;
  $info['order_u_name']=$_POST['email'];    
        $info['order_consignee_id']=$_POST['address'];
             $info['order_remarks']=$_POST['postscript'];
          
   $goods=M('Order');
   $in=  $goods->add($info);

 
           

   $sql="select order_create_time from sw_order where order_id=$in";
 
 $time=$goods->query($sql);
 
 $this->assign('time',$time);
 
 
 
$this->display();
    }

    
    
    
    
}
