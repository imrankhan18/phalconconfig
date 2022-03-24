<?php 


use Phalcon\Mvc\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        $this->view->users = Users::find();
    }
    public function adminProfieAction()
    {
        
        $_SESSION['admindetails']=$this->getArray();
        print_r($_SESSION['admindetails']);
        // die();
  
    }

    public function getArray($result)
    {
        return array(
        'id'=>$result->id,
        'name'=>$result->name,
        'email'=>$result->email,
        'password'=>$result->password,
        'status'=>$result->status
            
        );
    }
}
