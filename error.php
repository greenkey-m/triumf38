<?php
/**
 * @package    triumf
 *
 * @author     Greenkey <info@greenkey.ru>
 * @developer   Greenkey studio
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://triumf40.ru
 */

defined('_JEXEC') or die;

if (($this->error->getCode()) == '404') {
    // Redirect to error article
    header('Location: /index.php?option=com_content&view=article&id=54');
    exit;
}
