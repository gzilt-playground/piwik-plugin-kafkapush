<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\KafkaPush;

use Piwik\Plugins\KafkaPush\Tracker\Handler;
use Piwik\Common;


class KafkaPush extends \Piwik\Plugin
{
//    public function getListHooksRegistered()
//    {
//        return array(
//            'Tracker.newHandler' => 'setHandlerForKafkaPush',
//            #'Live.getAllVisitorDetails' => 'extendVisitorDetails'
//        );
//    }
//
//    /**
//     * @param array $visitorInfo
//     */
//    public function setHandlerForKafkaPush((&$handler))
//    {
//         if (!is_null($handler)) {
//                    return;
//            }
//            $handler = new Handler();
//    }

//
//
//    /**
//     * @param array $visitorInfo
//     */
//    public function kafkaPushNew(&$properties, $request)
//    {
//        $logger = StaticContainer::getContainer()->get('Psr\Log\LoggerInterface');
//        $logger->error('kafkaPushNew = '.$properties['idvisit']);
//    }
//
//    /**
//     * @param array $visitorInfo
//     */
//    public function kafkaPush()
//    {
//        $logger = StaticContainer::getContainer()->get('Psr\Log\LoggerInterface');
//        $logger->error('kafkaPush');
//    }
//
//    /**
//     * @param array $visitorInfo
//     */
//    public function kafkaPushExisting(&$valuesToUpdate, $visit)
//    {
//
//        $logger = StaticContainer::getContainer()->get('Psr\Log\LoggerInterface');
//        $logger->error('kafkaPushExisting = '.$visit['idvisit']);
//    }

}
