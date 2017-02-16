<?php


namespace Admin\Controller;
use Think\Controller;
use Think\Verify;


class DengluController extends Controller {
    public function login(){
        $this->display();
    }
    
    
    function  verifyImg(){
        $con=array(
        'imageH'    =>  45,               // 验证码图片高度
        'imageW'    =>  100,               // 验证码图片宽度
        'length'    =>  4,               // 验证码位数 
                'fontSize'  =>  15,              // 验证码字体大小(px)
        );
        
        
        $very=new Verify($con);
        
        
        $very->entry();
        
        
        
    }
  public  function   logincode(){
//            if(!empty($_POST)){
//		$verify = new \Think\Verify(); 
//		if(!$verify->check($_POST['captcha'])){
//                 //   echo  "<script>alert('验证码错误')</script>";			
//				}else{
//                                    
//                              $goods=new \Admin\Model\DengluModel();
//            $info= $goods->select();
//               
//        if($info['admin_user']==$_POST['admin_user'] && $info['admin_psd']==$_POST['admin_psd']){
//              
//               //	echo "<script>alert('验证码正确')</script>";
//               $this->redirect('index');
//            }  
//           
//}	
//			}
        
        echo '123';
        
       // $this->direct('../Index/index');
                
    }
    
    
    
    
    
    
}

