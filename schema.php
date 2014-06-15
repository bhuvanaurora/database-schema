<?php

App::uses('ClassRegistry', 'Utility');
class AppSchema extends CakeSchema {
public $users = array(
		'id' => array('type' => 'integer', 'null' => false,'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false,   'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	
public $profiles = array(
		 'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'screenname' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dob' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'gender' => array('type' => 'string', 'null' => false,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mobile' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'primary_address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),		'postcode' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'securityquestion' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'securityanswer' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fbid' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),	
		'twitterid' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),	
		'linkedinid' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'googleplusid' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'profile_pic' => array('type' => 'string', 'null' => true,  'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	
	public $interests = array(
	    'id' => array('type' => 'integer', 'null' => false,'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),		
		'interest' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),	
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
	
	
	public $works = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'type' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'link' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'company' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
	public $educations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'college_name' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'location' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'degree' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'year_joining' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'year_passing' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
		public $mysessions = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false),
		'user_token' => array('type' => 'text', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'session_create' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'session_end' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);	
		
		public $groups = array(
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'creator_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'group_name' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'group_des' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'group_icon' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'activity_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'group_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
		public $blockedlists = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'blocker_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
	public $members = array(
		'member_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'member_rating' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'member_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
	
	public $posts = array(
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'title' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'text' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'media_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'votes_up' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'total_answers' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'is_anonymous' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'post_rel' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'), //to tell if //the post is endrosed ot no
		'abuse_count' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'post_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
		public $posttags = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tag_id' => array('type' => 'in	teger', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')	   
	);
	
	
		public $tags = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
	public $answers = array(
		'answer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'contri_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'media_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'text' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ans_rel' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'answer_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
	public $votes = array(
		'vote_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'type' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'vote_up' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'vote_time' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'vote_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
	public $my_files = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'entry_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'file_title' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'file_url' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'file_ext' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'shares' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
		public $activities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'activity_type' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	   
	);
	
 
}
?>