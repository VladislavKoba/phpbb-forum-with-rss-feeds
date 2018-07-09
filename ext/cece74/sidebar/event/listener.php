<?php
/**
*
* @package Sidebar
* @copyright (c) 2015 Cece74
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\sidebar\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.common'							=> 'common_setup',
			'core.user_setup'						=> 'load_language_on_setup',
			'core.viewtopic_modify_post_row'		=> 'viewtopic_postrow_sidebar',
		);
	}

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	/**
	* Constructor
	* 
	* @param \phpbb\controller\helper	$helper		Controller helper object
	* @param \phpbb\template			$template	Template object
	*/
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config, $php_ext)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->config = $config;
		$this->php_ext = $php_ext;
	}

	public function common_setup($event)
	{
		$this->template->assign_vars(array(
			'S_AD_STATUS'		=> $this->config['ad_status'] ? true : false,
			'S_AD_TYPE'			=> $this->config['ad_type'] ? true : false,
			'S_AD_FIRSTPOST'		=> $this->config['ad_firstpost'] ? true : false,
			'S_AD_TWITTER'		=> $this->config['ad_twitter'] ? true : false,
			'S_AD_DIGG'			=> $this->config['ad_digg'] ? true : false,
			'S_AD_FORUM7'		=> $this->config['ad_forum7'] ? true : false,
			'S_AD_FORUM3'	=> $this->config['ad_forum3'] ? true : false,
			'S_AD_FACEBOOKPAGE'	=> $this->config['ad_facebookpage'] ? true : false,
			'S_AD_VK'			=> $this->config['ad_vk'] ? true : false,
			'S_AD_ALL'		=> $this->config['ad_all'] ? true : false,
			'AD_CODE'				=> isset($this->config['sidebar_ad_code']) ? $this->config['sidebar_ad_code'] : '',
			'AD_URLPAGE'				=> isset($this->config['sidebar_ad_urlpage']) ? $this->config['sidebar_ad_urlpage'] : '',
			'AD_CODE_SLOT'				=> isset($this->config['sidebar_ad_code_slot']) ? $this->config['sidebar_ad_code_slot'] : '',
			'SIDEBAR_WIDTH'				=> isset($this->config['sidebar_width']) ? $this->config['sidebar_width'] : '',
			'SIDEBAR_HEIGHT'				=> isset($this->config['sidebar_height']) ? $this->config['sidebar_height'] : '',
			'SIDEBAR_TEXT'				=> isset($this->config['sidebar_text']) ? $this->config['sidebar_text'] : '',
		));
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'cece74/sidebar',
			'lang_set' => 'sidebar',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function viewtopic_postrow_sidebar($event)
	{
		if (!$this->config['ad_status'])
		{
			return;
		}

		$row = $event['row'];

		$post_row = $event['post_row'];
		
		$topic_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'f=' . $event['row']['forum_id'] . '&t=' . $event['row']['topic_id'];
		$post_url = generate_board_url() . "/viewtopic.$this->php_ext?" . 'p=' . $event['row']['post_id'] . '#p' . $event['row']['post_id'];
		$sidebar_url = !$this->config['sd_type'] ? $post_url : $topic_url;

		$topic_title = $row['post_subject'];
		$topic_title = str_replace(array('Re: '), '', $topic_title);
	}
}
