<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\KafkaPush;

use Piwik\Settings\SystemSetting;
use Piwik\Settings\UserSetting;

/**
 * Defines Settings for KafkaPush.
 *
 * Usage like this:
 * $settings = new Settings('KafkaPush');
 * $settings->autoRefresh->getValue();
 * $settings->metric->getValue();
 */
class Settings extends \Piwik\Plugin\Settings
{
    /** @var SystemSetting */
    public $debugMode;

    /** @var SystemSetting */
    public $brokers;

    /** @var SystemSetting */
    public $topic;

    protected function init()
    {
        $this->setIntroduction('Here you can specify the settings for this plugin.');

        // User setting --> checkbox converted to bool
        $this->createDebugModeSetting();

        // System setting --> textarea
        $this->createBrokersSetting();

        // System setting --> textarea
        $this->createTopicSetting();
    }

    private function createDebugModeSetting()
    {
        $this->debugMode        = new SystemSetting('debugMode', 'Debug Mode');
        $this->debugMode->type  = static::TYPE_BOOL;
        $this->debugMode->uiControlType = static::CONTROL_CHECKBOX;
        $this->debugMode->description   = 'If enabled, logs will be generated for the each action created.';
        $this->debugMode->defaultValue  = false;

        $this->addSetting($this->debugMode);
    }

    private function createBrokersSetting()
    {
        $this->brokers = new SystemSetting('brokers', 'Kafka Broker List');
        $this->brokers->readableByCurrentUser = true;
        $this->brokers->uiControlType = static::CONTROL_TEXTAREA;
        $this->brokers->description   = 'List of brokers separated by comma.';

        $this->addSetting($this->brokers);
    }

    private function createTopicSetting()
    {
        $this->topic = new SystemSetting('topic', 'KAFKA Topic');
        $this->topic->readableByCurrentUser = true;
        $this->topic->uiControlType = static::CONTROL_TEXT;
        $this->topic->description   = 'Kafka Topic for publishing PIWIK Actions';

        $this->addSetting($this->topic);
    }
}
