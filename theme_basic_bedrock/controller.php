<?php
namespace Concrete\Package\ThemeBasicBedrock;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\File\Image\Thumbnail\Type\Type;
use Concrete\Core\Entity\File\Image\Thumbnail\Type\Type as ThumbnailType;
use Concrete\Core\Asset\AssetList;
use Concrete\Core\Asset\AssetInterface;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package {

    protected $pkgHandle = 'theme_basic_bedrock'; //Change to the file directory name, Example: theme_afixia
    protected $themePath = 'themes/basic_bedrock/'; //Change theme path
    protected $themeName = 'Basic Bedrock'; //Change Theme Name
    protected $themeHandle = 'basic_bedrock'; //Change Theme Handle
    protected $appVersionRequired = '9.0.0';
    protected $pkgVersion = '1.0';

    //Replace ThemeName with the name of the theme
    public function getPackageDescription() {
        return t("Adds Basic Bedrock Theme."); //Example "Adds Afixia Theme"
    }

    //Name the Package
    public function getPackageName() {
        return t($this->themeName); //Example Afixia
    }

    public function install() {
        $pkg = parent::install();
        Theme::add($this->themeHandle, $pkg); //Change to the name of the theme, Example: afixia (should be the folder of the theme)

        $xs = Type::getByHandle('xs');
        if (!is_object($xs)) {
            $type = new ThumbnailType();
            $type->setName('Extra Small');
            $type->setHandle('xs');
            $type->setWidth(540);
            $type->save();
        }

        $sm = Type::getByHandle('sm');
        if (!is_object($sm)) {
            $type = new ThumbnailType();
            $type->setName('Small');
            $type->setHandle('sm');
            $type->setWidth(540);
            $type->save();
        }

        $md = Type::getByHandle('md');
        if (!is_object($md)) {
            $type = new ThumbnailType();
            $type->setName('Medium');
            $type->setHandle('md');
            $type->setWidth(720);
            $type->save();
        }

        $lg = Type::getByHandle('lg');
        if (!is_object($lg)) {
            $type = new ThumbnailType();
            $type->setName('Large');
            $type->setHandle('lg');
            $type->setWidth(960);
            $type->save();
        }

        $xl = Type::getByHandle('xl');
        if (!is_object($xl)) {
            $type = new ThumbnailType();
            $type->setName('Extra Large');
            $type->setHandle('xl');
            $type->setWidth(1140);
            $type->save();
        }
    }

    public function on_start() {
        $al = AssetList::getInstance();
        $al->register('css', 'basic-bedrock-app-css',  $this->themePath . 'css/app.css', ['position' => AssetInterface::ASSET_POSITION_HEADER, 'local'=>true], $this->pkgHandle);
        $al->register('javascript', 'basic-bedrock-app-js',  $this->themePath . 'js/app.js', ['position' => AssetInterface::ASSET_POSITION_FOOTER, 'local'=>true], $this->pkgHandle);
        $al->registerGroup('basic-bedrock-app', array(
            array('css', 'basic-bedrock-app-css'),
            array('javascript', 'basic-bedrock-app-js'),
        ));
    }

}