<?php	
	defined('BASEPATH') OR exit('No direct script access allowed');	
		
	class Admin_model extends CI_Model { 		
				
		function __construct(){			
			parent:: __construct();			
			$this->load->database();			
		}		
		public function totalUser()		{						$this->db->select('*');			$this->db->from('tbl_users');			$this->db->where('status',1);			$query=$this->db->get();			$count=$query->result();			return count($count);								}				public function totalJob()		{						$this->db->select('*');			$this->db->from('tbl_jobs');			$this->db->where('status',1);			$query=$this->db->get();			$count=$query->result();			return count($count);								}		public function totalEmployer()		{						$this->db->select('*');			$this->db->from('tbl_employer');			$this->db->where('status',1);			$query=$this->db->get();			$count=$query->result();			return count($count);		}		
		/* Get All Invite Requestt Record */		
		public function getAllInviteRequesttData($id='')		
		{  			
			if($id != ''){				
				$this->db->where('id',$id);				
			}			
			$this->db->select('*'); 			
			$this->db->from('whz_invitation_request');			
			$this->db->order_by('id','desc');			
			$query = $this->db->get();			
			$result = $query->result();			
			if($result){				
				return $result;				
				}else{				
				return false;				
			}			
		}		
				
		/* Delete User */		
		public function deleteUser($id)		
		{			
			$this->db->where('id',$id);			
			$result = $this->db->delete('whz_invitation_request');			
			if($result){				
				return $result;				
				}else{				
				return false;				
			}			
		}		
				
		/* Update Request Records */		
		public function updateInviteRequestData($data)		
		{  			
			$this->db->where('email',$data['email']);			
			$result = $this->db->update('whz_invitation_request',$data);			
			if($result)			
			return true;			
			else			
			return false;			
		}		
				
		/* Get count of request notification */		
		public function getInviteNotiCount()		
		{  			
			$result = $this->db->where(['code_status'=>0])->from("whz_invitation_request")->count_all_results();			
						
			if($result){				
				return $result;				
				}else{				
				return false;				
			}			
		}		
				
		/* Get All Pages Record */		
		public function getAllPageData($id='')		
		{  			
			if($id != ''){				
				$this->db->where('id',$id);				
			}			
			$this->db->select('*'); 			
			$this->db->from('whz_pages');			
			$query = $this->db->get();			
			$result = $query->result();			
			if($result){				
				return $result;				
				}else{				
				return false;				
			}			
		}		
				
		/* Get All Yellow Pages Data */		
		public function selectAllYPData($id='')		
		{  			
			if($id != ''){				
				$this->db->where('id',$id);				
			}			
			$this->db->select('*'); 			
			$this->db->from('whz_ypregistration');			
			$query = $this->db->get();			
			$result = $query->result();			
			if($result){				
				return $result;				
				}else{				
				return false;				
			}			
		}		
				
		/* Get All Yellow Pages Data */		
		public function selectAllYPReviewData($id)		
		{  			
			$this->db->select('whz_yp_reviews.*, whz_users.name, whz_users.profile_pic'); 			
			$this->db->join('whz_users', 'whz_users.whz_email = whz_yp_reviews.user_id', 'left');			
			$this->db->from('whz_yp_reviews');			
			$this->db->where('whz_yp_reviews.yp_id',$id);			
						
			$query = $this->db->get();			
			$result = $query->result();			
			if($result){				
				return $result;				
				}else{				
				return false;				
			}			
		}		
				
		/* Delete YPReview */		
		public function deleteYPReview($id)		
		{			
			$this->db->where('id',$id);			
			$result = $this->db->delete('whz_yp_reviews');			
			if($result){				
				return true;				
				}else{				
				return false;				
			}			
		}		
				
		/* Update YPReview */		
		public function changeReviewStatus($rid,$status)		
		{			
			$data = array('status'=>$status);			
			$this->db->where('id',$rid);			
			$result = $this->db->update('whz_yp_reviews',$data);			
			if($result){				
				return true;				
				}else{				
				return false;				
			}			
		}		
				
				
	}	