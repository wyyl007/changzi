<?php

namespace Home\Controller;
use  Think\Controller;

class  CenterController  extends Controller{
    
 //   不加$this-> display显示的是show方法,,,加上显示show.html
    function   ucenter1(){
         var_dump($_POST);
         
         
         
         
        $this->display();
    }
    
    public function   index(){
//        session(array('name'=>'session_id','expire'=>3600));
//        session('user',mrlee);
      
    }
    public function   test(){
        
        echo session('user');
    }
    
    public function  ucenter3(){
        $order=D('Order','Model');
        $sql="select  * from sw_order";
     $res =  $order->query($sql);
     var_dump($res);
     $this->assign('res',$res);
     
     $this->display();
             
        
        
    }
    
    
    
    
}

