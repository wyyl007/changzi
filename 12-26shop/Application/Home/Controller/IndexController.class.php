<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    
    public function  login(){
       
//       session(array('name'=>'session_id','expire'=>3600));
//      session('username',$_POST['User']['username']);
//      session('password',$_POST['User']['password']);

      
      if(isset($_GET['id'])){
          
            $id=$_GET['id'];
        if($id==1){
            $arr1=['admin'=>'/12-26shop/Home/Goods/gwc2'];
            $arr[0]=$arr1;
     
        } else if($id==2){
            $arr1=['admin'=>'/12-26shop/Home/Goods/gwc1'];
             $arr[0]=$arr1;
              
        }
         $this->assign('arr',$arr);
      
      }
      
          
       $this->display();

    }
    
    
    
    //默认先显示Index下的register.html文件.如果在indexController写register方法,则优先执行register方法
    public function   register(){
        
//        var_dump($_POST);
//      $goods= D('user','Model');
//        $info= $goods->add($_POST['User']);
        
        //echo "<script>alert('注册成功');</script>";
        $this->display();
    }
    
        function  category (){
     
          $goods= D('Goods','Model');
             $info= $goods->select();
             var_dump($info);
             $this->assign('info',$info);
            
           //不加display显示的是show方法,,,加上显示show.html  
        $this->display();
    }
    function   upload123(){
        

        
                        $upload = new \Think\Upload();// 实例化上传类   
                         $upload->maxSize   =     3145728 ;// 设置附件上传大小   
                          $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
               // 设置附件上传类型    
                $upload->savePath  =      '../Model/Uploads/';
                 // 设置附件上传目录    // 上传文件     
                 $info   =   $upload->upload();    
                 if(!$info) {
               // 上传错误提示错误信息      
                   $this->error($upload->getError());   
                    }else{
                //上传成功        
                $this->success('上传成功！');  
   }
        
       
     
}
  public      function   upload(){
    
$this->display();    
  

}
public function     gwc3(){
   
    
    
    
    
}
public  function login123(){
    
$id= $_GET['id'];
   $good=M('Goods');
 $info = $good->where("goods_id=$id")->select();

$data['c_goods_id']=$info[0]['goods_id'];
  $data['c_name']=$info[0]['goods_name'];
   $data['c_parentid']=$info[0]['goods_price'];

  $cart=M('Cart');
 // $goods = new \Model\GoodsModel();
$cart-> add($data);
//  if ($rel) {
//                $this->ajaxReturn('添加购物车成功!');
//             
//            }else{
//                $this->ajaxReturn('添加购物车失败');
//            }
$this->redirect('login?id=2');
}

}