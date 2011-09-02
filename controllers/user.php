<?php
class UserController extends AppController {

  public function actionSignin()
  {
    if(!isset($_SESSION['user'])) {
      $this->setLayout('signin');
      $this->loadView('user/signin');
    } else {
      $this->redirect('/');
    }
  }

  public function actionSigninAction($username, $password) {
    if ($username === 'admin' && $password === 'password') {
      session_start();
      $_SESSION['uid'] = $username;
      $this->redirect('/');
    } else {
      $this->setLayout('signin');
      $this->setVar('success', 'false');
      $this->setVar('message', 'Invalid user name or password');
      $this->loadView('user/signin');
    }
  }

}
?>
