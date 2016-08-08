 <?php defined('BASEPATH') OR exit('No direct script access allowed');
 		class User_model extends CI_Model{
 			public function insert($name,$pass){
 				$sql="insert into user(userid,name,pass) values(null,'$name','$pass')";
				$query=$this->db->query($sql);
				return $query;
 			}
			public function get_name_by_pass($name,$pass){
				
			}
 		}
 
 
 ?> 