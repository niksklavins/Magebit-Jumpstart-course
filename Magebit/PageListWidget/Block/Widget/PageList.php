<?php

namespace Magebit\PageListWidget\Block\Widget;

use \Magento\Widget\Block\BlockInterface;
use \Magento\Framework\View\Element\Template;
class PageList extends Template implements BlockInterface
{
    protected $_template = 'page-list.phtml';

    const string OPTION_404 = '404_not_found';
    const  string OPTION_HOME = 'home_page';
    const string OPTION_COOKIES = 'enable_cookies';
    const string OPTION_PRIVACY = 'privacy_and_cookie_policy';

    /**
     * Get links based on the provided page names.
     *
     * @param array $names An array of page names.
     * @return array An array containing the links corresponding to the page names.
     */

    public function getLinks(Array $names): array
    {

        $links = [];
        ///Link for Enable Cookies is a placefolder for a page called Enable Cookies, which is not created
        foreach($names as $name){
            switch ($name){
                case self::OPTION_404:
                    $links[$name] = 'http://magento.local/404';
                    break;
                case self::OPTION_PRIVACY:
                    $links[$name] = 'http://magento.local/privacy-policy-cookie-restriction-mode/';
                    break;
                case self::OPTION_HOME || $name == self::OPTION_COOKIES:
                     $links[$name] = 'http://magento.local/';
                     break;
            }
        }

        return $links;
    }
    //

}
