<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'Employee Details',
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }

  public function admin()
  {
    error_reporting(E_ERROR | E_PARSE);
    $this->view('pages/login');
  }

  public function guest()
  {
    $models = $this->model('Empdata');
    $posts = $models->display();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/viewpage', $data);
  }

  public function login()
  {

    if ($_POST['emailaddress'] == '' || $_POST['password'] == '') {
      $data = [
        'title' => 'Field should not empty!'
      ];
      $this->view('pages/login', $data);
    }

    if (($_POST['emailaddress'] != 'admin_name') || ($_POST['password'] != 'admin_password')) {
      $data = [
        'title' => 'invalid username and password!'
      ];
      $this->view('pages/login', $data);
    }
    if (isset($_POST)) {
      $adminname = $_POST['emailaddress'];
      $password = $_POST['password'];
      if (admin_name == $adminname && admin_password == $password) {
        session_start();
        $_SESSION['admin_name'] = 'emailaddress';
        $redirecturi = URLROOT . "index/log";
        header('Location:' . $redirecturi);
        exit;
      } else {
        $this->view('pages/login');
      }
    }
  }
  public function log()
  {
    if (isset($_SESSION['admin_name'])) {
      $models = $this->model('Empdata');
      $posts = $models->display();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/adminpage', $data);
    } else {

      $this->view('pages/login');
    }
  }

  public function search()
  {
    error_reporting(E_ERROR | E_PARSE);
    $models = $this->model('Empdata');
    $posts = $models->search($_POST);
    if($posts)

    {
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/adminpage', $data);
  }

else{
   $data=[
    '$error'=> 'id not found'
   ];
    $this->view('pages/adminpage', $data);
   
}

}

  public function logout()
  {
    error_reporting(E_ERROR | E_PARSE);
    session_unset();
    session_destroy();
    $this->view('pages/login');
  }
  public function insert()
  {
    $this->view('pages/add_data');
  }

  public function viewdata()
  {
    if (isset($_SESSION['admin_name'])) {
      $models = $this->model('Empdata');
      $posts = $models->display();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/viewpage', $data);
    } else {
      $this->view('pages/login');
    }
  }
  public function delete($Emp_id)
  {
    if (isset($_SESSION['admin_name'])) {
      $models = $this->model('empdata');
      $models->mdelete($Emp_id);
      $posts = $models->display();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/adminpage', $data);
    } else {
      $this->view('pages/login');
    }
  }

  public function edit($Emp_id)
  {

    if (isset($_SESSION['admin_name'])) {
      $models = $this->model('Empdata');
      $models1 = $models->emppedit($Emp_id);
      $this->view('pages/editform', $models1);
    } else {
      $this->view('pages/login');
    }
  }

  public function editsave()
  {
    $target_dir='../public/img/';
    $target_file= $target_dir.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES["image"]['tmp_name'],$target_file);
    $Emp_id = $_POST['Emp_id'];
    $Emp_fname = $_POST['Emp_fname'];
    $Emp_lname = $_POST['Emp_lname'];
    $Emp_email = $_POST['Emp_email'];
    $Emp_number = $_POST['Emp_number'];
    $Emp_street = $_POST['Emp_street'];
    $Emp_state = $_POST['Emp_state'];
    $Emp_country = $_POST['Emp_country'];
    $pincode = $_POST['pincode'];
    $image = $target_file;
    $data = [$Emp_id, $Emp_fname, $Emp_lname, $Emp_email, $Emp_number, $Emp_street, $Emp_state, $Emp_country, $pincode, $image];

    $models = $this->model('Empdata');
    $models->emppedit1($data,$target_file);
    $models = $this->model('Empdata');
    $posts = $models->display();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/adminpage', $data);
  }

  public function addinfo()
  {
    if (isset($_SESSION['admin_name'])) {
      $target_dir='../public/img/';
      $target_file= $target_dir.basename($_FILES['image']['name']);
      move_uploaded_file($_FILES["image"]['tmp_name'],$target_file);
      $model = $this->model('Empdata');
      $postdata = $_POST;
      $model->addinfo($postdata,$target_file);
      $redirecturi = URLROOT . "index/log";
      header('Location:' . $redirecturi);
    } else {
      $this->view('pages/login');
    }
  }
  public function display()
  {
    $models = $this->model('Empdata');
    $posts = $models->display();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/adminpage', $data);
  }

}
