<?php

	Class extension_mediumtextareafield extends Extension
	{	  
	/*-------------------------------------------------------------------------
		Extension definition
	-------------------------------------------------------------------------*/
		public function about()
		{
			return array('name' => 'Field: Medium Textarea',
						 'version' => '1.0',
						 'release-date' => '2009-08-20',
						 'author' => array('name' => 'Max Wheeler',
										   'website' => 'http://makenosound.com/',
										   'email' => 'max@makenosound.com'),
 						 'description' => 'Extension of the default textarea field that stores data as `mediumtext` instead of `text`.'
				 		);
		}
		
		public function uninstall()
		{
			$this->_Parent->Database->query("DROP TABLE `tbl_fields_mediumtextarea`");
		}
		
		public function install()
		{
			return $this->_Parent->Database->query("CREATE TABLE `tbl_fields_mediumtextarea` (
				`id` int(11) unsigned NOT NULL auto_increment,
				`field_id` int(11) unsigned NOT NULL,
				`formatter` varchar(100) collate utf8_unicode_ci default NULL,
				`size` int(3) unsigned NOT NULL,
				PRIMARY KEY  (`id`),
				KEY `field_id` (`field_id`)
			)");
		}
	}