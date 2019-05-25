<?php
interface IRegister 
{
	public function collectUserName();
	public function collectUserFirstName();
	public function collectUserLastName();
	public function collectUserEmail();
	public function collectUserPassword();
	public function collectUserDOB();
	public function collectUserGender();
}


?>