<?php


namespace Home\Controller;
use  Think\Controller;

class   GoodsController  extends Controller{
    
 //   不加$this-> display显示的是show方法,,,加上显示show.html

    function   detail ($id){
       //$id     form的post还可以get传值,,,传给GoodsController的detail方法,传给的detail.html
        $goods=new \Home\Model\GoodsModel('goods');
        $info=$goods->where("goods_id={$id}")->select();
         $this->assign('info',$info);
        $this->display();
        
        
    }
      
    
    
}

