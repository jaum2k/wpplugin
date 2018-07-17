<?php 
/**
 * @package  AlecadddPlugin
 */
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
	public function adminDashboard()
	{
		return require_once( "$this->plugin_path/templates/admin.php" );
	}

	public function adminCpt()
	{
		return require_once( "$this->plugin_path/templates/cpt.php" );
	}

	public function adminTaxonomy()
	{
		return require_once( "$this->plugin_path/templates/taxonomy.php" );
	}

	public function adminWidget()
	{
		return require_once( "$this->plugin_path/templates/widget.php" );
	}

	public function alecadddOptionsGroup( $input )
	{
		return $input;
	}

	public function alecadddAdminSection()
	{
		echo 'Check this beautiful section!';
	}

	public function alecadddAPIKey()
	{
		$value = esc_attr( get_option( 'api_key' ) );
		echo '<input type="text" class="regular-text" name="api_key" value="' . $value . '" placeholder="Write Your API Key Here!">';
	}

	public function alecadddAPISecret()
	{
		$value = esc_attr( get_option( 'api_secret' ) );
		echo '<input type="text" class="regular-text" name="api_secret" value="' . $value . '" placeholder="Write your API Secret Here">';
	}
}