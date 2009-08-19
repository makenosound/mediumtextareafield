<?php
	
	require_once(TOOLKIT . '/fields/field.textarea.php');
	
	Class fieldMediumtextarea extends fieldTextarea
	{
		function __construct(&$parent)
		{
			parent::__construct($parent);
			$this->_name = __('Medium Textarea');
		}
		function createTable()
		{
			return $this->_engine->Database->query(
				"CREATE TABLE IF NOT EXISTS `tbl_entries_data_" . $this->get('id') . "` (
					`id` int(11) unsigned NOT NULL auto_increment,
					`entry_id` int(11) unsigned NOT NULL,
					`value` mediumtext,
					`value_formatted` mediumtext,
					PRIMARY KEY  (`id`),
					KEY `entry_id` (`entry_id`),
					FULLTEXT KEY `value` (`value`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"
			);
		}
	}