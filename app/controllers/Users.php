<?php 
use App\Models\User;

class Users extends Controller
{
    protected $userModel;
    public $stmt;
    public $sql;
    public $error = 0;
    

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index(){
        $this->view('users/index');
    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => ''
            ];

                //validation
                if(empty($data['name'])){
                    $data['name_err'] = "Please enter name";
                    $this->error = 1;
                }
                if(empty($data['email'])){
                    $data['email_err'] = "Please enter email";
                    $this->error = 1;
                }else{
                    if($this->userModel->FindByEmail($data['email'])){
                        $data['email'] = 'Email alread exist';
                        $this->error = 1;
                    }
                }
                if(empty($data['password'])){
                    $data['password_err'] = "Please enter password";
                    $this->error = 1;
                }

                if($this->error == 0){
                    $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
                    $request = $this->userModel->register($data);
                    
                    if($request){
                      $this->view('users/index');
                    }else{
                        echo "<script> alert: Registation Failled</script>";
                    }  
                }else{
                    $this->view('users/register',$data);
                }
        }else{
            $data = [
                'name'=>'',
                'email' => '',
                'password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                
            ];
            $this->view('users/register',$data);
        }
         
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
                'email'=> trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];
            // vaildation 
            if(empty($data['email'])){
                $data['email_err'] = 'please enter Email';
                $this->error = 1;
            }
                if(!$this->userModel->FindByEmail($data['email'])){
                    $data['email_err'] = 'NO Email Found';
                    $this->error = 1;
                }
            

            if(empty($data['password'])){
                $data['Password_err'] = 'Please enter Password';
                $this->error = 1;
            }
                if(strlen($data['password'] < 6)){
                    $data['password'] = 'Password is less than 6';
                    $this->error = 1;
                }
            
            if($this->error == 0){
                $request = $this->userModel->login($data);
                if($request){
                    $this->userSession($request);
                }else{
                    $data['password'] = 'Incorrect Both email and password';
                    $this->error = 1;
                    $this->view('users/login',$data);
                }
            }else{
                $this->view('users/login',$data);
            }
        }else{
            $data = [
                'email_err' => '',
                'password_err' => ''
            ];
            $this->view('users/login',$data);
        }
        
    }

    public function userSession($user)
    {
        $_SESSION['email'] = $user->email;
        $_SESSION['name'] = $user->name;
        $this->view('dashboards/index');
    }
}
