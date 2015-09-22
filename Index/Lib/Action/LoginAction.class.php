<?php
/*
	注册与登陆

命名习惯：class 类名与Action的文件名.class前面相同。
并且继承到父类的Action。

*/


Class LoginAction extends Action {

	/**
	 * 登陆
	 */
	Public function index() {
		$this->dispaly();
	}


	/**
	 * 注册
	 */
	Public function register() {
		$this->dispaly();
	}



}


?>