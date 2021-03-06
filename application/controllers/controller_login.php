<?
class Controller_Login extends Controller {
	
	function action_index() {
    	if (has_login()) go_Url('main');
 		// put error message in $data if message exists
    	$data = empty($_SESSION['login_error']) ? "" : $_SESSION['login_error'];
    	unset($_SESSION['login_error']);
    	
    	$this->view->generate('login_view.php','template_view.php', $data);
	}

	function action_enter() {
		$this->model = new Model_Login();
		$result = $this->model->validateLoginAndCreateSession();
		if ($result == 'success')
			{
				$_SESSION['user_msg'] = "Добро пожаловать!";
				if (isset($_SESSION['last_page']))
					{
						header('Location:'.$_SESSION['last_page']);
						unset($_SESSION['last_page']);
						exit;
					}
				go_Url('blog');
			} 
		else 
			{
				$_SESSION['login_error'] = $result;
				go_Url('login');
			}
	}

	function action_exit() {
		unset($_SESSION['id']);
		unset($_SESSION['email']);
		go_Url('blog');
	}
}