<?php
	class UsersController extends Controller
	{
		public function viewall()
		{
			$this->set('header', 'Hieronder staan alle users in de user tabel');
			$users = $this->_model->select_all();
			//var_dump($users);
			$show_table = '';
			foreach ($users as $value)
			{
				$show_table .= "<tr>
									<td>".$value['User']['user_id']."</td>
									<td>".$value['User']['firstname']."</td>
									<td>".$value['User']['infix']."</td>
									<td>".$value['User']['surname']."</td>
									<td><a href='./remove_user/".$value['User']['user_id']."'><img src='../img/drop.png' alt='drop' /></a></td>
									<td><a href='./update_user/".$value['User']['user_id']."'><img src='../img/edit.png' alt='drop' /></a></td>
								</tr>";
				
			}
			$this->set('show_users', $show_table);
		} 
		
		public function remove_user($id)
		{
			$this->_model->remove_user($id);
			header('location:../viewall');
		}
		
		public function add_user()
		{
			if ( isset($_POST['submit']))
			{
				$this->_model->insert_into_users($_POST);
				header('location:../users/viewall');
			}
			else
			{
				$this->set('header', 'Voeg een gebruiker toe');				
			}
		}
		
		public function update_user($id)
		{
			if ( isset($_POST['submit']))
			{ 
				$this->_model->update_user($id, $_POST);
				header('location:../users/viewall');
			}
			else
			{
				$user = $this->_model->find_user_by_id($id);
				//var_dump($user);
				$this->set('user', $user);
				$this->set('header', 'Wijzig het onderstaande record');
			}
		}
	}
?>