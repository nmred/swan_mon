<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker: */
// +---------------------------------------------------------------------------
// | SWAN [ $_SWANBR_SLOGAN_$ ]
// +---------------------------------------------------------------------------
// | Copyright $_SWANBR_COPYRIGHT_$
// +---------------------------------------------------------------------------
// | Version  $_SWANBR_VERSION_$
// +---------------------------------------------------------------------------
// | Licensed ( $_SWANBR_LICENSED_URL_$ )
// +---------------------------------------------------------------------------
// | $_SWANBR_WEB_DOMAIN_$
// +---------------------------------------------------------------------------
 
namespace lib\monitor\adapter;
use lib\monitor\adapter\exception\sw_exception;

/**
+------------------------------------------------------------------------------
* sw_abstract 
+------------------------------------------------------------------------------
* 
* @abstract
* @package 
* @version $_SWANBR_VERSION_$
* @copyright $_SWANBR_COPYRIGHT_$
* @author $_SWANBR_AUTHOR_$ 
+------------------------------------------------------------------------------
*/
class sw_mysql extends sw_abstract
{
    // {{{ const
    // }}}
	// {{{ members
	
	/**
	 * 数据库连接 
	 * 
	 * @var mixed
	 * @access protected
	 */
	protected $__db = null;

	// }}}
	// {{{ functions
	// {{{ protected function _run()

	/**
	 * 运行抽象方法 
	 * 
	 * @abstract
	 * @access protected
	 * @return void
	 */
	protected function _run($params)
	{
        //$status_mysql = $this->__db->query('show global status;')->fetch_all();
		$data = array();
		return $data;
	}

	// }}}
	// }}}
}
