<?php

namespace ls\tests;

use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverDimension;
use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\Exception\TimeOutException;

/**
 * 
 */
class SideMenuTest extends TestBaseClassWeb
{
    public static function setupBeforeClass(): void
    {
        parent::setupBeforeClass();

        $username = getenv('ADMINUSERNAME');
        if (!$username) {
            $username = 'admin';
        }

        $password = getenv('PASSWORD');
        if (!$password) {
            $password = 'password';
        }

        // Permission to everything.
        \Yii::app()->session['loginID'] = 1;

        // Import survey.
        $file = 'tests/data/surveys/limesurvey_survey_sidemenu.lss';
        self::importSurvey($file);

        // Browser login.
        self::adminLogin($username, $password);
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();
        
        // Delete survey.
        if (self::$testSurvey) {
            self::$testSurvey->delete();
            self::$testSurvey = null;
        }
    }

    /**
     * @test
     */
    public function checkSideMenuAreTheSame(): void
    {
        $expected = [];
        $actual = [''];
        $this->assertEqual($expected, $actual);
    }

    public function checkNewQuestionIsVisibleOnTheSideMenu(): void
    {

    }

    public function checkChangedQuestionWillBeUpdatedInTheSideMenu(): void
    {

    }
}