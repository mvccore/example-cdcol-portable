<?php
namespace{
error_reporting(32767);
if(!defined('PACKAGER_PHP_FILE_BASE')){define('PACKAGER_PHP_FILE_BASE',str_replace('\\','/',__DIR__));class Packager_Php_Wrapper{const FS_MODE='PHP_STRICT_PACKAGE';public static$ScriptFilename;public static$BasePath;public static$BasePathLength;public static$Context=NULL;public static$NewContextContents=array();public static$Contents=array();public static$Info=array(/*____\Packager_Php_Wrapper::$Info____*/
'/vendor/mvccore/mvccore/src/MvcCore/Controller/Rendering.php'=>array('index'=>-1,'mtime'=>1583486146,'size'=>13143,'lines'=>array(0,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IController.php'=>array('index'=>-1,'mtime'=>1583236956,'size'=>22587,'lines'=>array(1,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Controller/PropsGettersSetters.php'=>array('index'=>-1,'mtime'=>1583235505,'size'=>19936,'lines'=>array(2,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Controller/Dispatching.php'=>array('index'=>-1,'mtime'=>1583485835,'size'=>14557,'lines'=>array(3,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model/Converters.php'=>array('index'=>-1,'mtime'=>1583155275,'size'=>5363,'lines'=>array(4,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/IField.php'=>array('index'=>-1,'mtime'=>1583312831,'size'=>28305,'lines'=>array(5,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props.php'=>array('index'=>-1,'mtime'=>1560255840,'size'=>8775,'lines'=>array(6,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Rendering.php'=>array('index'=>-1,'mtime'=>1562770089,'size'=>12619,'lines'=>array(7,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Setters.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>17271,'lines'=>array(8,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model/DataMethods.php'=>array('index'=>-1,'mtime'=>1583325462,'size'=>13164,'lines'=>array(9,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Getters.php'=>array('index'=>-1,'mtime'=>1583258306,'size'=>9821,'lines'=>array(10,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model/Props.php'=>array('index'=>-1,'mtime'=>1583243604,'size'=>6497,'lines'=>array(11,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model/Instancing.php'=>array('index'=>-1,'mtime'=>1583334828,'size'=>5150,'lines'=>array(12,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model/DbConnection.php'=>array('index'=>-1,'mtime'=>1583321056,'size'=>12259,'lines'=>array(13,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IModel.php'=>array('index'=>-1,'mtime'=>1583318803,'size'=>11043,'lines'=>array(14,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Required.php'=>array('index'=>-1,'mtime'=>1583312835,'size'=>3353,'lines'=>array(15,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/AccessKey.php'=>array('index'=>-1,'mtime'=>1583258306,'size'=>3124,'lines'=>array(16,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/IValidator.php'=>array('index'=>-1,'mtime'=>1583313827,'size'=>2379,'lines'=>array(17,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/AutoFocus.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>4545,'lines'=>array(18,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Disabled.php'=>array('index'=>-1,'mtime'=>1583258370,'size'=>4657,'lines'=>array(19,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/ReadOnly.php'=>array('index'=>-1,'mtime'=>1583312835,'size'=>4370,'lines'=>array(20,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/TabIndex.php'=>array('index'=>-1,'mtime'=>1583312834,'size'=>6617,'lines'=>array(21,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Fields/IVisibleField.php'=>array('index'=>-1,'mtime'=>1583312833,'size'=>11723,'lines'=>array(22,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/UserAndRole/Permissions.php'=>array('index'=>-1,'mtime'=>1583328419,'size'=>2928,'lines'=>array(23,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/UserAndRole/Base.php'=>array('index'=>-1,'mtime'=>1583328419,'size'=>2344,'lines'=>array(24,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/IUser.php'=>array('index'=>-1,'mtime'=>1583328558,'size'=>9735,'lines'=>array(25,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/AutoComplete.php'=>array('index'=>-1,'mtime'=>1583258306,'size'=>2713,'lines'=>array(26,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/User/Auth.php'=>array('index'=>-1,'mtime'=>1583331329,'size'=>7811,'lines'=>array(27,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/User/Roles.php'=>array('index'=>-1,'mtime'=>1583328732,'size'=>5052,'lines'=>array(28,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/User/Base.php'=>array('index'=>-1,'mtime'=>1583328419,'size'=>3678,'lines'=>array(29,1)),
'/vendor/mvccore/ext-view-helper/src/MvcCore/Ext/Views/Helpers/IHelper.php'=>array('index'=>-1,'mtime'=>1583172684,'size'=>2174,'lines'=>array(30,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Field/Props/MinMaxLength.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>2403,'lines'=>array(31,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/Submitting.php'=>array('index'=>-1,'mtime'=>1583327603,'size'=>12464,'lines'=>array(32,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Fields/ILabel.php'=>array('index'=>-1,'mtime'=>1583312834,'size'=>7478,'lines'=>array(33,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/PlaceHolder.php'=>array('index'=>-1,'mtime'=>1583312835,'size'=>2418,'lines'=>array(34,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Label.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>10295,'lines'=>array(35,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/InputMode.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>3869,'lines'=>array(36,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/DataList.php'=>array('index'=>-1,'mtime'=>1583312834,'size'=>2192,'lines'=>array(37,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/IForm.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>63928,'lines'=>array(38,1)),
'/vendor/mvccore/ext-form-field-numeric/src/MvcCore/Ext/Forms/Field/Props/MinMaxStepNumbers.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>3149,'lines'=>array(39,1)),
'/vendor/mvccore/ext-form-field-numeric/src/MvcCore/Ext/Forms/Fields/IMinMaxStepNumbers.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>2137,'lines'=>array(40,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Fields/IMinMaxLength.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>1536,'lines'=>array(41,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Fields/IDataList.php'=>array('index'=>-1,'mtime'=>1583312834,'size'=>1797,'lines'=>array(42,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/SetMethods.php'=>array('index'=>-1,'mtime'=>1583315747,'size'=>30397,'lines'=>array(43,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/Rendering.php'=>array('index'=>-1,'mtime'=>1583258053,'size'=>6971,'lines'=>array(44,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/InternalProps.php'=>array('index'=>-1,'mtime'=>1583327566,'size'=>5167,'lines'=>array(45,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/GetMethods.php'=>array('index'=>-1,'mtime'=>1583312928,'size'=>20018,'lines'=>array(46,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/FieldMethods.php'=>array('index'=>-1,'mtime'=>1583314207,'size'=>7268,'lines'=>array(47,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/Csrf.php'=>array('index'=>-1,'mtime'=>1583491442,'size'=>4330,'lines'=>array(48,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/ConfigProps.php'=>array('index'=>-1,'mtime'=>1560773831,'size'=>17314,'lines'=>array(49,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/Session.php'=>array('index'=>-1,'mtime'=>1583258077,'size'=>2939,'lines'=>array(50,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/Assets.php'=>array('index'=>-1,'mtime'=>1542383929,'size'=>3914,'lines'=>array(51,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form/AddMethods.php'=>array('index'=>-1,'mtime'=>1583327582,'size'=>6856,'lines'=>array(52,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/Environment.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>13801,'lines'=>array(53,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Application/PropsGettersSetters.php'=>array('index'=>-1,'mtime'=>1583320136,'size'=>28025,'lines'=>array(54,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request/CollectionsMethods.php'=>array('index'=>-1,'mtime'=>1583321140,'size'=>16225,'lines'=>array(55,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/IniRead.php'=>array('index'=>-1,'mtime'=>1583313827,'size'=>7402,'lines'=>array(56,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/IniDump.php'=>array('index'=>-1,'mtime'=>1583321171,'size'=>5559,'lines'=>array(57,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/IniProps.php'=>array('index'=>-1,'mtime'=>1541604952,'size'=>1124,'lines'=>array(58,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Application/Dispatching.php'=>array('index'=>-1,'mtime'=>1583321986,'size'=>19114,'lines'=>array(59,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/MagicMethods.php'=>array('index'=>-1,'mtime'=>1542301149,'size'=>3226,'lines'=>array(60,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Application/Helpers.php'=>array('index'=>-1,'mtime'=>1583166934,'size'=>4725,'lines'=>array(61,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request/Props.php'=>array('index'=>-1,'mtime'=>1555401736,'size'=>8844,'lines'=>array(62,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request/GettersSetters.php'=>array('index'=>-1,'mtime'=>1583320933,'size'=>26076,'lines'=>array(63,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request/Instancing.php'=>array('index'=>-1,'mtime'=>1583171502,'size'=>3560,'lines'=>array(64,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request/InternalInits.php'=>array('index'=>-1,'mtime'=>1583171502,'size'=>14341,'lines'=>array(65,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/GettersSetters.php'=>array('index'=>-1,'mtime'=>1583828062,'size'=>6418,'lines'=>array(66,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/ReadWrite.php'=>array('index'=>-1,'mtime'=>1583172492,'size'=>4773,'lines'=>array(67,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response/Content.php'=>array('index'=>-1,'mtime'=>1583242440,'size'=>4202,'lines'=>array(68,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response/Cookies.php'=>array('index'=>-1,'mtime'=>1583320933,'size'=>2941,'lines'=>array(69,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response/Headers.php'=>array('index'=>-1,'mtime'=>1583240426,'size'=>4806,'lines'=>array(70,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response/Instancing.php'=>array('index'=>-1,'mtime'=>1583171502,'size'=>1361,'lines'=>array(71,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config/PropsGettersSetters.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>3406,'lines'=>array(72,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/Props.php'=>array('index'=>-1,'mtime'=>1583237973,'size'=>4784,'lines'=>array(73,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basic/PropsGettersSetters.php'=>array('index'=>-1,'mtime'=>1583828779,'size'=>31780,'lines'=>array(74,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IDebug.php'=>array('index'=>-1,'mtime'=>1554887168,'size'=>3228,'lines'=>array(75,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IView.php'=>array('index'=>-1,'mtime'=>1583486146,'size'=>19932,'lines'=>array(76,1)),
'/vendor/mvccore/mvccore/src/MvcCore/ITool.php'=>array('index'=>-1,'mtime'=>1582683402,'size'=>7051,'lines'=>array(77,1)),
'/vendor/mvccore/mvccore/src/MvcCore/ISession.php'=>array('index'=>-1,'mtime'=>1583168482,'size'=>6037,'lines'=>array(78,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IRouter.php'=>array('index'=>-1,'mtime'=>1583315825,'size'=>32507,'lines'=>array(79,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IRoute.php'=>array('index'=>-1,'mtime'=>1583315848,'size'=>35313,'lines'=>array(80,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IResponse.php'=>array('index'=>-1,'mtime'=>1583240614,'size'=>8772,'lines'=>array(81,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IRequest.php'=>array('index'=>-1,'mtime'=>1583167435,'size'=>29752,'lines'=>array(82,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/ViewHelpers.php'=>array('index'=>-1,'mtime'=>1583488280,'size'=>8394,'lines'=>array(83,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/UrlHelpers.php'=>array('index'=>-1,'mtime'=>1542369844,'size'=>2060,'lines'=>array(84,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basic/Handling.php'=>array('index'=>-1,'mtime'=>1583327941,'size'=>6450,'lines'=>array(85,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IConfig.php'=>array('index'=>-1,'mtime'=>1583167357,'size'=>8163,'lines'=>array(86,1)),
'/vendor/mvccore/mvccore/src/MvcCore/IApplication.php'=>array('index'=>-1,'mtime'=>1583320342,'size'=>28265,'lines'=>array(87,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/Rendering.php'=>array('index'=>-1,'mtime'=>1583836391,'size'=>7115,'lines'=>array(88,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Debug/Props.php'=>array('index'=>-1,'mtime'=>1552664074,'size'=>3700,'lines'=>array(89,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Debug/Initializations.php'=>array('index'=>-1,'mtime'=>1583755700,'size'=>7259,'lines'=>array(90,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Debug/Handlers.php'=>array('index'=>-1,'mtime'=>1583176999,'size'=>11049,'lines'=>array(91,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Fields/IPattern.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>1828,'lines'=>array(92,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/MagicMethods.php'=>array('index'=>-1,'mtime'=>1583169107,'size'=>4544,'lines'=>array(93,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/LocalMethods.php'=>array('index'=>-1,'mtime'=>1583171502,'size'=>2426,'lines'=>array(94,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response/PropsGettersSetters.php'=>array('index'=>-1,'mtime'=>1583240454,'size'=>4415,'lines'=>array(95,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View/DirectoryMethods.php'=>array('index'=>-1,'mtime'=>1582694926,'size'=>3313,'lines'=>array(96,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/IDatabaseUser.php'=>array('index'=>-1,'mtime'=>1527163489,'size'=>890,'lines'=>array(97,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/Redirecting.php'=>array('index'=>-1,'mtime'=>1566567834,'size'=>2732,'lines'=>array(98,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Size.php'=>array('index'=>-1,'mtime'=>1583312834,'size'=>3767,'lines'=>array(99,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Tool/OopChecking.php'=>array('index'=>-1,'mtime'=>1583320933,'size'=>5197,'lines'=>array(100,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Tool/StringCaseConversions.php'=>array('index'=>-1,'mtime'=>1554888303,'size'=>4049,'lines'=>array(101,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session/Starting.php'=>array('index'=>-1,'mtime'=>1583171502,'size'=>2095,'lines'=>array(102,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/Routing.php'=>array('index'=>-1,'mtime'=>1583172492,'size'=>16017,'lines'=>array(103,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/RouteMethods.php'=>array('index'=>-1,'mtime'=>1583320934,'size'=>17666,'lines'=>array(104,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session/Props.php'=>array('index'=>-1,'mtime'=>1549358329,'size'=>2047,'lines'=>array(105,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/IForm.php'=>array('index'=>-1,'mtime'=>1583328560,'size'=>7382,'lines'=>array(106,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session/NamespaceMethods.php'=>array('index'=>-1,'mtime'=>1583321843,'size'=>3006,'lines'=>array(107,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Field/Props/SpellCheck.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>3262,'lines'=>array(108,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/RewriteRouting.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>12029,'lines'=>array(109,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/UrlByQuery.php'=>array('index'=>-1,'mtime'=>1546442965,'size'=>4838,'lines'=>array(110,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/IAuth.php'=>array('index'=>-1,'mtime'=>1583828778,'size'=>14440,'lines'=>array(111,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/UrlByRoutes.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>2504,'lines'=>array(112,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/Props.php'=>array('index'=>-1,'mtime'=>1549364774,'size'=>9499,'lines'=>array(113,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Tool/Helpers.php'=>array('index'=>-1,'mtime'=>1583326895,'size'=>14631,'lines'=>array(114,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/Instancing.php'=>array('index'=>-1,'mtime'=>1583172492,'size'=>5187,'lines'=>array(115,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/GettersSetters.php'=>array('index'=>-1,'mtime'=>1583172492,'size'=>11792,'lines'=>array(116,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session/Closing.php'=>array('index'=>-1,'mtime'=>1583171502,'size'=>2411,'lines'=>array(117,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session/MagicMethods.php'=>array('index'=>-1,'mtime'=>1541672931,'size'=>3991,'lines'=>array(118,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/Canonical.php'=>array('index'=>-1,'mtime'=>1583172492,'size'=>4697,'lines'=>array(119,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route/UrlBuilding.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>24447,'lines'=>array(120,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route/Props.php'=>array('index'=>-1,'mtime'=>1583167847,'size'=>14657,'lines'=>array(121,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session/MetaData.php'=>array('index'=>-1,'mtime'=>1542378066,'size'=>2436,'lines'=>array(122,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Form/Base.php'=>array('index'=>-1,'mtime'=>1554378510,'size'=>3776,'lines'=>array(123,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route/Matching.php'=>array('index'=>-1,'mtime'=>1583315873,'size'=>9515,'lines'=>array(124,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route/InternalInits.php'=>array('index'=>-1,'mtime'=>1583334280,'size'=>24391,'lines'=>array(125,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route/Instancing.php'=>array('index'=>-1,'mtime'=>1583490928,'size'=>12249,'lines'=>array(126,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Field/Props/Pattern.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>2515,'lines'=>array(127,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route/GettersSetters.php'=>array('index'=>-1,'mtime'=>1583321278,'size'=>27811,'lines'=>array(128,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router/UrlBuilding.php'=>array('index'=>-1,'mtime'=>1554709011,'size'=>6433,'lines'=>array(129,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Controller/Base.php'=>array('index'=>-1,'mtime'=>1542381781,'size'=>1677,'lines'=>array(130,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Wrapper.php'=>array('index'=>-1,'mtime'=>1583312834,'size'=>2273,'lines'=>array(131,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Role/Base.php'=>array('index'=>-1,'mtime'=>1583328419,'size'=>1425,'lines'=>array(132,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/IRole.php'=>array('index'=>-1,'mtime'=>1583328486,'size'=>3436,'lines'=>array(133,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Fields/ISubmit.php'=>array('index'=>-1,'mtime'=>1583312833,'size'=>2798,'lines'=>array(134,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/IController.php'=>array('index'=>-1,'mtime'=>1542381053,'size'=>596,'lines'=>array(135,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Form/SignOut.php'=>array('index'=>-1,'mtime'=>1583331534,'size'=>2515,'lines'=>array(136,1)),
'/vendor/mvccore/ext-form-field-button/src/MvcCore/Ext/Forms/Field/Props/FormAttrs.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>12732,'lines'=>array(137,1)),
'/vendor/mvccore/ext-form-field-button/src/MvcCore/Ext/Forms/Field/Props/Submit.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>3574,'lines'=>array(138,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Form/SignIn.php'=>array('index'=>-1,'mtime'=>1563956534,'size'=>3024,'lines'=>array(139,1)),
'/App/Bootstrap.php'=>array('index'=>-1,'mtime'=>1583332995,'size'=>2388,'lines'=>array(140,1)),
'/vendor/mvccore/mvccore/src/Throwable.php'=>array('index'=>-1,'mtime'=>1583322478,'size'=>477,'lines'=>array(141,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/IError.php'=>array('index'=>-1,'mtime'=>1542377748,'size'=>613,'lines'=>array(142,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/GroupCssClasses.php'=>array('index'=>-1,'mtime'=>1583258370,'size'=>2185,'lines'=>array(143,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/IView.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>6130,'lines'=>array(144,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Field/Props/RowsColsWrap.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>5621,'lines'=>array(145,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Options.php'=>array('index'=>-1,'mtime'=>1583315746,'size'=>7692,'lines'=>array(146,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/Multiple.php'=>array('index'=>-1,'mtime'=>1583312835,'size'=>3488,'lines'=>array(147,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/GroupLabelAttrs.php'=>array('index'=>-1,'mtime'=>1583258370,'size'=>1999,'lines'=>array(148,1)),
'/vendor/mvccore/ext-form-field-button/src/MvcCore/Ext/Forms/Field/Props/WidthHeight.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>2598,'lines'=>array(149,1)),
'/vendor/mvccore/ext-tool-locale-floatparser/src/MvcCore/Ext/Tools/Locales/FloatParser.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>10344,'lines'=>array(150,1)),
'/App/Views/Helpers/JsonAttrHelper.php'=>array('index'=>-1,'mtime'=>1583331772,'size'=>310,'lines'=>array(151,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Validator.php'=>array('index'=>-1,'mtime'=>1583327683,'size'=>7741,'lines'=>array(152,1)),
'/vendor/mvccore/ext-view-helper/src/MvcCore/Ext/Views/Helpers/AbstractHelper.php'=>array('index'=>-1,'mtime'=>1583773728,'size'=>4192,'lines'=>array(153,1)),
'/vendor/mvccore/ext-view-helper-assets/src/MvcCore/Ext/Views/Helpers/Assets.php'=>array('index'=>-1,'mtime'=>1583320934,'size'=>16154,'lines'=>array(154,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Validators/Url.php'=>array('index'=>-1,'mtime'=>1560342946,'size'=>8208,'lines'=>array(155,17)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Validators/SafeString.php'=>array('index'=>-1,'mtime'=>1560350406,'size'=>3126,'lines'=>array(172,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basic.php'=>array('index'=>-1,'mtime'=>1545130407,'size'=>1313,'lines'=>array(173,1)),
'/vendor/mvccore/ext-view-helper-assets/src/MvcCore/Ext/Views/Helpers/CssHelper.php'=>array('index'=>-1,'mtime'=>1583176992,'size'=>19303,'lines'=>array(174,1)),
'/vendor/mvccore/ext-view-helper-assets/src/MvcCore/Ext/Views/Helpers/JsHelper.php'=>array('index'=>-1,'mtime'=>1561042692,'size'=>17502,'lines'=>array(175,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Controller.php'=>array('index'=>-1,'mtime'=>1542369844,'size'=>2547,'lines'=>array(176,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Tool.php'=>array('index'=>-1,'mtime'=>1542378347,'size'=>1190,'lines'=>array(177,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Debug.php'=>array('index'=>-1,'mtime'=>1567417787,'size'=>2864,'lines'=>array(178,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Application.php'=>array('index'=>-1,'mtime'=>1583322514,'size'=>2411,'lines'=>array(179,1)),
'/vendor/mvccore/ext-form-field-numeric/src/MvcCore/Ext/Forms/Validators/Number.php'=>array('index'=>-1,'mtime'=>1542351529,'size'=>4272,'lines'=>array(180,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Validators/MinMaxLength.php'=>array('index'=>-1,'mtime'=>1560346299,'size'=>2370,'lines'=>array(181,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field.php'=>array('index'=>-1,'mtime'=>1583327694,'size'=>13577,'lines'=>array(182,1)),
'/App/Controllers/Base.php'=>array('index'=>-1,'mtime'=>1583333077,'size'=>2404,'lines'=>array(183,1)),
'/vendor/mvccore/ext-form-field-numeric/src/MvcCore/Ext/Forms/Validators/IntNumber.php'=>array('index'=>-1,'mtime'=>1560344295,'size'=>2864,'lines'=>array(184,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model.php'=>array('index'=>-1,'mtime'=>1582897065,'size'=>959,'lines'=>array(185,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Field/Props/VisibleField.php'=>array('index'=>-1,'mtime'=>1535537808,'size'=>1936,'lines'=>array(186,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request.php'=>array('index'=>-1,'mtime'=>1542369844,'size'=>1433,'lines'=>array(187,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response.php'=>array('index'=>-1,'mtime'=>1567110566,'size'=>1017,'lines'=>array(188,1)),
'/App/Controllers/CdCollection.php'=>array('index'=>-1,'mtime'=>1583331722,'size'=>5634,'lines'=>array(189,1)),
'/App/Controllers/Index.php'=>array('index'=>-1,'mtime'=>1583331750,'size'=>1248,'lines'=>array(190,1)),
'/App/Controllers/System.php'=>array('index'=>-1,'mtime'=>1583333138,'size'=>852,'lines'=>array(191,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Route.php'=>array('index'=>-1,'mtime'=>1545070730,'size'=>943,'lines'=>array(192,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session.php'=>array('index'=>-1,'mtime'=>1583321877,'size'=>1215,'lines'=>array(193,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/Fields/Hidden.php'=>array('index'=>-1,'mtime'=>1542611124,'size'=>2089,'lines'=>array(194,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Controller.php'=>array('index'=>-1,'mtime'=>1542380961,'size'=>673,'lines'=>array(195,1)),
'/App/Models/Album.php'=>array('index'=>-1,'mtime'=>1583331811,'size'=>2818,'lines'=>array(196,34)),
'/vendor/mvccore/mvccore/src/MvcCore/Config.php'=>array('index'=>-1,'mtime'=>1544799368,'size'=>1492,'lines'=>array(230,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View.php'=>array('index'=>-1,'mtime'=>1582694805,'size'=>4384,'lines'=>array(231,1)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Forms/View.php'=>array('index'=>-1,'mtime'=>1583316514,'size'=>17088,'lines'=>array(232,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Role.php'=>array('index'=>-1,'mtime'=>1583328668,'size'=>1582,'lines'=>array(233,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router.php'=>array('index'=>-1,'mtime'=>1544796680,'size'=>1641,'lines'=>array(234,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/User.php'=>array('index'=>-1,'mtime'=>1583331482,'size'=>1889,'lines'=>array(235,1)),
'/vendor/mvccore/ext-form-field-button/src/MvcCore/Ext/Forms/Fields/Button.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>3400,'lines'=>array(236,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Users/SystemConfig.php'=>array('index'=>-1,'mtime'=>1583328419,'size'=>1577,'lines'=>array(237,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/Users/Database.php'=>array('index'=>-1,'mtime'=>1583328419,'size'=>3065,'lines'=>array(238,13)),
'/vendor/mvccore/ext-form/src/MvcCore/Ext/Form.php'=>array('index'=>-1,'mtime'=>1583327270,'size'=>7169,'lines'=>array(251,1)),
'/vendor/mvccore/ext-form-field-button/src/MvcCore/Ext/Forms/Fields/SubmitButton.php'=>array('index'=>-1,'mtime'=>1543997334,'size'=>2330,'lines'=>array(252,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/SignInForm.php'=>array('index'=>-1,'mtime'=>1527237740,'size'=>753,'lines'=>array(253,1)),
'/vendor/mvccore/ext-auth-basic/src/MvcCore/Ext/Auths/Basics/SignOutForm.php'=>array('index'=>-1,'mtime'=>1527525998,'size'=>860,'lines'=>array(254,1)),
'/vendor/mvccore/ext-form-field-numeric/src/MvcCore/Ext/Forms/Fields/Number.php'=>array('index'=>-1,'mtime'=>1583316394,'size'=>5320,'lines'=>array(255,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Fields/Text.php'=>array('index'=>-1,'mtime'=>1583258055,'size'=>5422,'lines'=>array(256,1)),
'/vendor/mvccore/ext-form-field-text/src/MvcCore/Ext/Forms/Fields/Password.php'=>array('index'=>-1,'mtime'=>1544001958,'size'=>1562,'lines'=>array(257,1)),
'/index.php'=>array('index'=>-1,'mtime'=>1583842808,'size'=>85,'lines'=>array(258,1)),
'/App/config.ini'=>['index'=>0,'mtime'=>1583332840,'size'=>672,'store'=>'text'],
'/App/Views/Layouts/layout.phtml'=>['index'=>1,'mtime'=>1583846275,'size'=>1562,'store'=>'template'],
'/App/Views/Scripts/cd-collection/create.phtml'=>['index'=>2,'mtime'=>1583488469,'size'=>212,'store'=>'template'],
'/App/Views/Scripts/cd-collection/edit.phtml'=>['index'=>3,'mtime'=>1583488486,'size'=>171,'store'=>'template'],
'/App/Views/Scripts/cd-collection/index.phtml'=>['index'=>4,'mtime'=>1583845773,'size'=>1225,'store'=>'template'],
'/App/Views/Scripts/index/error.phtml'=>['index'=>5,'mtime'=>1583331975,'size'=>100,'store'=>'template'],
'/App/Views/Scripts/index/index.phtml'=>['index'=>6,'mtime'=>1583331920,'size'=>194,'store'=>'template'],
'/static/fonts/myriadwebpro/myriadwebpro-bold-webfont.eot'=>['index'=>7,'mtime'=>1456749696,'size'=>24703,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-bold-webfont.svg'=>['index'=>8,'mtime'=>1456749696,'size'=>60744,'store'=>'gzip'],
'/static/fonts/myriadwebpro/myriadwebpro-bold-webfont.ttf'=>['index'=>9,'mtime'=>1456749696,'size'=>51776,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-bold-webfont.woff'=>['index'=>10,'mtime'=>1456749696,'size'=>28792,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-regular-webfont.eot'=>['index'=>11,'mtime'=>1456749696,'size'=>30474,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-regular-webfont.svg'=>['index'=>12,'mtime'=>1456749696,'size'=>77199,'store'=>'gzip'],
'/static/fonts/myriadwebpro/myriadwebpro-regular-webfont.ttf'=>['index'=>13,'mtime'=>1456749696,'size'=>66376,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-regular-webfont.woff'=>['index'=>14,'mtime'=>1456749696,'size'=>33984,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-semibold-webfont.eot'=>['index'=>15,'mtime'=>1456749696,'size'=>30634,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-semibold-webfont.svg'=>['index'=>16,'mtime'=>1456749696,'size'=>75348,'store'=>'gzip'],
'/static/fonts/myriadwebpro/myriadwebpro-semibold-webfont.ttf'=>['index'=>17,'mtime'=>1456749696,'size'=>67372,'store'=>'binary'],
'/static/fonts/myriadwebpro/myriadwebpro-semibold-webfont.woff'=>['index'=>18,'mtime'=>1456749696,'size'=>34280,'store'=>'binary'],
'/static/img/favicon.ico'=>['index'=>19,'mtime'=>1459332216,'size'=>7886,'store'=>'binary'],
'/static/img/theme/box-bg.min.svg'=>['index'=>20,'mtime'=>1520277813,'size'=>4007,'store'=>'gzip'],
'/static/img/theme/box-dark-dots-bg.min.svg'=>['index'=>21,'mtime'=>1520277813,'size'=>152359,'store'=>'gzip'],
'/static/img/theme/box-light-dots-bg.min.svg'=>['index'=>22,'mtime'=>1520277813,'size'=>152443,'store'=>'gzip'],
'/static/img/theme/buttons-arrows.png'=>['index'=>23,'mtime'=>1520937849,'size'=>402,'store'=>'binary'],
'/static/img/theme/buttons-content.active.min.svg'=>['index'=>24,'mtime'=>1520277813,'size'=>3929,'store'=>'gzip'],
'/static/img/theme/buttons-content.passive.min.svg'=>['index'=>25,'mtime'=>1520277813,'size'=>3869,'store'=>'gzip'],
'/static/img/theme/buttons-form.active.min.svg'=>['index'=>26,'mtime'=>1520277813,'size'=>3878,'store'=>'gzip'],
'/static/img/theme/buttons-form.passive.min.svg'=>['index'=>27,'mtime'=>1520277813,'size'=>3882,'store'=>'gzip'],
'/static/img/theme/text-inputs.error.active.min.svg'=>['index'=>28,'mtime'=>1520277813,'size'=>3812,'store'=>'gzip'],
'/static/img/theme/text-inputs.error.active.required.min.svg'=>['index'=>29,'mtime'=>1520277813,'size'=>4287,'store'=>'gzip'],
'/static/img/theme/text-inputs.error.passive.min.svg'=>['index'=>30,'mtime'=>1520277813,'size'=>3836,'store'=>'gzip'],
'/static/img/theme/text-inputs.error.passive.required.min.svg'=>['index'=>31,'mtime'=>1520277813,'size'=>4283,'store'=>'gzip'],
'/static/img/theme/text-inputs.normal.active.min.svg'=>['index'=>32,'mtime'=>1520277813,'size'=>3878,'store'=>'gzip'],
'/static/img/theme/text-inputs.normal.active.required.min.svg'=>['index'=>33,'mtime'=>1520277813,'size'=>4353,'store'=>'gzip'],
'/static/img/theme/text-inputs.normal.passive.min.svg'=>['index'=>34,'mtime'=>1520277813,'size'=>3882,'store'=>'gzip'],
'/static/img/theme/text-inputs.normal.passive.required.min.svg'=>['index'=>35,'mtime'=>1520277813,'size'=>4329,'store'=>'gzip'],
'/Var/Tmp/minified_css_024ddafb573d77b35cebd5cc25352fa9.css'=>['index'=>36,'mtime'=>1583842817,'size'=>30124,'store'=>'gzip'],
'/Var/Tmp/minified_js_0a22c902c25a64e464ece951c7a3a78b.js'=>['index'=>37,'mtime'=>1583842817,'size'=>14910,'store'=>'gzip'],
'/Var/Tmp/minified_js_1b7cee0f91c0592097ba380c17de88ca.js'=>['index'=>38,'mtime'=>1583842817,'size'=>173,'store'=>'gzip'],
'/Var/Tmp/minified_js_acd741cc5f1e772d165769e88965a7e3.js'=>['index'=>39,'mtime'=>1583842821,'size'=>525,'store'=>'gzip'],
'/vendor/mvccore/mvccore/src/MvcCore/Debug/debug.html'=>['index'=>40,'mtime'=>1544113279,'size'=>3708,'store'=>'text'],
);private static$_baseLinesCount=4184;private static$_minifiedPhp=TRUE;private static$_contexts=array();private static$_closureRendering=TRUE;private static$_currentFileSource=array();public static function PrintBacktrace(){echo '<pre>';var_dump(debug_backtrace());echo '</pre>';}public static function Init(){self::$ScriptFilename=str_replace('\\','/',$_SERVER['SCRIPT_FILENAME']);self::$BasePath=str_replace('\\','/',__DIR__);self::$BasePathLength=mb_strlen(self::$BasePath);if(version_compare(PHP_VERSION,'5.4.0',"<")){self::$_closureRendering=FALSE;}}private static function _includeFile($path,&$context,$onceOnly,$fn=''){$path=self::NormalizePath($path);if($onceOnly&&self::_getIsFileIncluded($path))return;if(!isset(self::$Info[$path])){self::Warning('',$path,$fn);return FALSE;}else{return self::_includeFileWithRendering($path,$context,$onceOnly);}}private static function _getIsFileIncluded($path){return(isset(self::$Info[$path])&&self::$Info[$path]['included'])?TRUE:FALSE;}private static function _includeFileWithRendering($path,&$context,$onceOnly){$store=self::$Info[$path]['store'];$closureRendering=$store=='template'&&self::$_closureRendering;$result=self::_renderFile($path,$context,$onceOnly,$closureRendering,$store);if($closureRendering){return$result;}else{echo $result;return 1;}}private static function _renderFile($path,&$context,$onceOnly,$closureRendering,$store){if($closureRendering){$result=self::_callTemplateClosure($path,$context);}else{$result=self::_evalFile($path,$context,$store);}if($onceOnly)self::_setFileIsIncluded($path);return$result;}private static function _callTemplateClosure($path,&$context){$templateClosure=self::_getFileContent($path,FALSE);if(!is_null($context)){$templateClosure=$templateClosure->bindTo($context,$context);}return$templateClosure();}private static function _evalFile($path,&$context,$store){if($store=='template'){$content=&self::_getStaticWithContext($path,$context,$store);}else{$content=self::_getFileContent($path,TRUE);}self::_addContext($context);ob_start();try{eval(' ?'.'>'.$content.'<'.'?php ');}catch(Exception$e){throw$e;}self::_removeContext();return trim(ob_get_clean());}private static function _getStaticWithContext($path,$context){if(is_null($context)){$templateClosure=self::_getFileContent($path,TRUE);$content=self::_getTemplateClosureBody($templateClosure);}else{$content=&self::_getStaticWithContextAlreadyProcessed($path);if(mb_strlen($content)===0){$templateClosure=self::_getFileContent($path,TRUE);$content=self::_getTemplateClosureBody($templateClosure);$content=preg_replace("#([^\\\])(\\\$this)([^a-zA-Z0-9_\x7f-\xff])#im","$1".get_class()."::\$Context$3",$content);$index=self::$Info[$path]['index'];self::$NewContextContents[$index]=$content;}}return$content;}private static function _getTemplateClosureBody(Closure$templateClosure){$reflection=new ReflectionFunction($templateClosure);$startLine=$reflection->getStartLine()-1;$endLine=$reflection->getEndLine();$length=$endLine-$startLine;self::_setUpCurrentFileSource();$functionSource=implode('',array_slice(self::$_currentFileSource,$startLine,$length));$firstCloseTagPos=mb_strpos($functionSource,'?>')+2;$lastOpenTagPos=mb_strrpos($functionSource,'<?php');$functionBodyLength=$lastOpenTagPos-$firstCloseTagPos;$functionSource=mb_substr($functionSource,$firstCloseTagPos,$functionBodyLength);return$functionSource;}private static function _setUpCurrentFileSource(){if(count(self::$_currentFileSource)===0){self::$_currentFileSource=file(__FILE__);}}private static function _getStaticWithContextAlreadyProcessed($path){$content='';if(isset(self::$Info[$path])){$index=self::$Info[$path]['index'];if(isset(self::$NewContextContents[$index])){$content=&self::$NewContextContents[$index];}}return$content;}private static function _addContext($context){self::$_contexts[]=$context;self::$Context=$context;}private static function _removeContext(){$contextsCount=count(self::$_contexts);$newContext=NULL;if($contextsCount>0){$contextsCount-=1;unset(self::$_contexts[$contextsCount]);self::$_contexts=array_values(self::$_contexts);if($contextsCount>0){$newContext=self::$_contexts[$contextsCount-1];}}self::$Context=$newContext;}private static function _setFileIsIncluded($path){if(isset(self::$Info[$path])){self::$Info[$path]['included']=1;}else{self::$Info[$path]=array('included'=>1);}}private static function _getFileContent($path,$decodeGzip=TRUE){if(!isset(self::$Info[$path]))return FALSE;$record=self::$Info[$path];$index=$record['index'];if($index==-1){return self::_getScript($record['lines']);}else{return self::_getStatic($record['store'],$index,$decodeGzip);}}private static function _getScript($lines){self::_setUpCurrentFileSource();$begin=self::$_baseLinesCount+$lines[0]-1;$end=$begin+$lines[1];$r="<?php\n";$g=self::$_minifiedPhp?"\n":"";for($i=$begin,$l=$end;$i<$l;$i+=1){$r.=$g.self::$_currentFileSource[$i];}$r.="\n?>";return$r;}private static function _getStatic($store,$index,$decodeGzip=TRUE){if($store=='template'){return self::$Contents[$index];}else if($store=='gzip'){return$decodeGzip?gzdecode(self::$Contents[$index]):self::$Contents[$index];}else if($store=='base64'){return base64_decode(self::$Contents[$index]);}else{return self::$Contents[$index];}}public static function NormalizePath($path){$path=str_replace('\\','/',$path);if(mb_strpos($path,'/./')!==FALSE){$path=str_replace('/./','/',$path);}if(mb_strpos($path,'/..')!==FALSE){while(true){$doubleDotPos=mb_strpos($path,"/..");if($doubleDotPos===FALSE){break;}else{$path1=mb_substr($path,0,$doubleDotPos);$path2=mb_substr($path,$doubleDotPos+3);$lastSlashPos=mb_strrpos($path1,'/');$path1=mb_substr($path1,0,$lastSlashPos);$path=$path1.$path2;}}}if(mb_strpos($path,self::$BasePath)===0){$path=mb_substr($path,self::$BasePathLength);}return str_replace('//','/',$path);}public static function _isProtocolPath($path){return preg_match("#^([a-z]*)\://(.*)#",$path)?TRUE:FALSE;}public static function Warning($msg='',$path='',$fn=''){if(!$msg)$msg="$fn($path): failed to open stream: No such file or directory";trigger_error($msg,E_USER_WARNING);}public static function Readfile($filename,$use_include_path=FALSE,$context=NULL){if(self::_isProtocolPath($filename))return call_user_func_array('readfile',func_get_args());$path=self::NormalizePath($filename);$content=self::_getFileContent($path,FALSE);if($content===FALSE){self::Warning('',$filename,'readfile');return FALSE;}else{return self::_readfile($content,$path);}}private static function _readfile(&$content,$path){$store=self::$Info[$path]['store'];if($store=='gzip'){if(strpos($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')!==FALSE){header('Content-Encoding: gzip');}else{$content=gzdecode($content);}}echo $content;return self::$Info[$path]['size'];}public static function IsDir($filename){$path=self::NormalizePath($filename);if(isset(self::$Info[$path]))return TRUE;$caught=FALSE;foreach(self::$Info as$pathKey=>&$item){if(strpos($pathKey,$path)===0){$caught=TRUE;break;}}if($caught)return TRUE;self::_changeItself('/*____\\Packager_Php_Wrapper::$Info____*/',"'".$path."'=>array('index'=>-1,'mtime'=>".time().",'size'=>0,'lines'=>array(0,0)),");return is_dir($filename);}public static function MkDir($filename,$mode=0777,$recursive=FALSE,$context=NULL){$path=self::NormalizePath($filename);$r=FALSE;if(!isset(self::$Info[$path])){if($context!==NULL){$r=mkdir($filename,$mode,$recursive,$context);}else{$r=mkdir($filename,$mode,$recursive);}if($r)self::_changeItself('/*____\\Packager_Php_Wrapper::$Info____*/',"'".$path."'=>['index'=>-1,'mtime'=>".time().",'size'=>0,'lines'=>array(0,0)],");}return$r;}private static function _changeItself($replacement,$newContent){$oldSelf=self::$ScriptFilename;$newSelf=$oldSelf.'.'.uniqid();$oh=@fopen($oldSelf,'r');$nh=@fopen($newSelf,'w+');$r1=FALSE;if($oh&&$nh){$r1=TRUE;while(($ol=fgets($oh))!==FALSE){$pos=mb_strpos($ol,$replacement);if($pos!==FALSE){$ol=mb_substr($ol,0,$pos).$replacement.$newContent.mb_substr($ol,$pos+mb_strlen($replacement));}fwrite($nh,$ol);}}@fclose($oh);@fclose($nh);$r2=FALSE;$r3=FALSE;$r4=FALSE;if($r1){$newOldSelf=$oldSelf.'.'.uniqid();$r2=rename($oldSelf,$newOldSelf);$r3=rename($newSelf,$oldSelf);$r4=unlink($newOldSelf);}return$r1&&$r2&&$r3&&$r4;}public static function FileGetContents($filename,$use_include_path=FALSE,$context=NULL,$offset=0){if(self::_isProtocolPath($filename))return call_user_func_array('file_get_contents',func_get_args());$path=self::NormalizePath($filename);$content=self::_getFileContent($path,TRUE);if($content===FALSE){self::Warning('',$filename,'file_get_contents');return FALSE;}else{return$content;}}public static function File($filename,$flags=0,$context=NULL){if(self::_isProtocolPath($filename))return call_user_func_array('file',func_get_args());$path=self::NormalizePath($filename);$content=self::_getFileContent($path,TRUE);if($content===FALSE){self::Warning('',$filename,'file');return FALSE;}else{$lines=explode("\n",str_replace(["\r\n","\r"],"\n",$content));$fileIgnoreNewLines=$flags>1&&$flags!==4&&$flags!==5;$fileSkipEmptyLines=$flags>3;if($fileIgnoreNewLines&&$fileSkipEmptyLines){foreach($lines as$key=>&$line){if(mb_strlen($line)===0)unset($lines[$key]);}}else if(!$fileIgnoreNewLines){foreach($lines as$key=>&$line)$line.=PHP_EOL;}return$lines;}}public static function ParseIniFile($filename,$process_sections=FALSE,$scanner_mode=INI_SCANNER_NORMAL){$path=self::NormalizePath($filename);$content=self::_getFileContent($path,TRUE);if($content===FALSE){self::Warning('',$filename,'parse_ini_file');return FALSE;}else{return parse_ini_string($content,$process_sections,$scanner_mode);}}public static function FileExists($filename){$path=self::NormalizePath($filename);return isset(self::$Info[$path]);}public static function Filemtime($filename){$path=self::NormalizePath($filename);if(!isset(self::$Info[$path])){self::Warning("filemtime(): stat failed for $filename");return FALSE;}else{return self::$Info[$path]['mtime'];}}public static function IncludeStandard($path,$context=NULL){return self::_includeFile($path,$context,FALSE,'include');}}Packager_Php_Wrapper::Init();}
\Packager_Php_Wrapper::$Contents[0]=<<<'PACKAGER_TEXT'
[environments]
dev = 127.0.0.1

[db]
defaultName		= lite

lite.driver		= sqlite
lite.database	= /.databases/sqlite-cdcol.db


; Example db connections blocks:
;my.driver		= mysql
;my.host		= 127.0.0.1
;my.user		= root
;my.password	= 1234
;my.database	= cdcol
;
;ms.driver		= sqlsrv
;ms.host		= .\SQLEXPRESS
;ms.user		= sa
;ms.password	= 1234
;ms.database	= cdcol
;
;pg.driver		= pgsql
;pg.host		= 127.0.0.1
;pg.user		= postgres
;pg.password	= 1234
;pg.database	= cdcol


; Example system config file authentication credentials block:
;[users]
;0.userName		= admin
;0.fullName		= Administrator
;0.passwordHash	= $2y$10$s9E56/QH6.a69sJML9aS6enCczRCZcEPrbFh7BYTSrnrn4H9QMF6u
PACKAGER_TEXT;
\Packager_Php_Wrapper::$Contents[1]=function(){ ?>
<?php ?><!DOCTYPE HTML><html
lang="en-US"><head><meta
charset="UTF-8" /><title><?php echo  call_user_func(function($__val){return$__val;},isset($title)?$title:$this->title)?> | MvcCore</title><base
href="<?php echo  call_user_func(function($__val){return$__val;},isset($basePath)?$basePath:$this->basePath)?>" /><link
rel="shortcut icon" href="<?php echo  call_user_func($this->GetHelper('assetUrl'),'/static/img/favicon.ico')?>" /><meta
http-equiv="X-UA-Compatible" content="IE=edge" /><meta
name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" /><meta
name="apple-mobile-web-app-capable" content="yes" /> <script>var timestamp=+new Date;(function(a,b,c,d,e,f){if(b[c]('Opera'))b=b[d](e,f);if(b[c]('Trident/'))b=b[d](/ rv:([0-9\.]*)\)/g,e+'$1)');a.setAttribute('data-browser',b);a.className=f;})(document.documentElement,navigator.userAgent,'match','replace',' MSIE ','')</script> <?php echo  call_user_func($this->GetHelper('css'),'fixedHead')?>
<?php echo  call_user_func($this->GetHelper('js'),'fixedHead')?><meta
name="author" content="Tom Flidr <tomflidr(at)gmail(dot)com>" /></head><body>
<!--[if lt IE 9]><div
class="old-browser-warning"><p>Your browser is <b>very</b> old. <br
/>Please install any actual browser, for example <br
/><a
href="https://www.google.com/chrome" target="_blank">Google Chrome</a>, <a
href="https://www.apple.com/safari" target="_blank">Apple Safari</a> or <a
href="https://www.mozilla.org/en/firefox/new" target="_blank">Mozilla Firefox</a>.</p></div><![endif]--><div
class="master-container">
<?php if(isset($this->signOutForm))echo  call_user_func(function($__val){return$__val;},isset($signOutForm)?$signOutForm:$this->signOutForm);?><div
class="content route-<?php echo  call_user_func(function($__val){return$__val;},isset($currentRouteCssClass)?$currentRouteCssClass:$this->currentRouteCssClass)?>">
<?php echo $this->GetContent()?></div></div></body>
<?php echo  call_user_func($this->GetHelper('js'),'varFoot')?></html>
<?php return 1;};
\Packager_Php_Wrapper::$Contents[2]=function(){ ?>
<?php ?><a
class="head-btn btn btn-wide btn-left-arrow btn-no-visiting"
href="<?php echo  call_user_func($this->GetHelper('url'),':Index')?>"><span><b>Back to list</b></span></a><h1>New album</h1><?php echo  call_user_func(function($__val){return$__val;},isset($detailForm)?$detailForm:$this->detailForm)?>
<?php return 1;};
\Packager_Php_Wrapper::$Contents[3]=function(){ ?>
<a
class="head-btn btn btn-wide btn-left-arrow btn-no-visiting"
href="<?php echo  call_user_func($this->GetHelper('url'),':Index')?>"><span><b>Back to list</b></span></a><h1>Edit album</h1><?php echo  call_user_func(function($__val){return$__val;},isset($detailForm)?$detailForm:$this->detailForm)?>
<?php return 1;};
\Packager_Php_Wrapper::$Contents[4]=function(){ ?>
<?php ?>
<?php ?><a
class="head-btn btn btn-wide btn-no-visiting"
href="<?php echo  call_user_func($this->GetHelper('url'),':Create')?>"><span><b>New album</b></span></a><h1>CD Collection</h1><?php if(!call_user_func(function($__val){return$__val;},isset($albums)?$albums:$this->albums)):?><p>No albums in database. To create, click to 'New Album' button.</p>
<?php else:?><table
class="cd-collection-items theme"><thead><tr><th
class="right">Id</th><th>Title</th><th>Interpret</th><th
class="right">Year</th><th></th></tr></thead><tbody>
<?php foreach(call_user_func(function($__val){return$__val;},isset($albums)?$albums:$this->albums)as$id=>$album):?><tr><td
class="right"><?php echo  call_user_func(function($__val){return$__val;},isset($album)?$album:$this->album)->Id?></td><td><a
href="<?php echo  call_user_func($this->GetHelper('url'),':Edit',['id'=>call_user_func(function($__val){return$__val;},isset($album)?$album:$this->album)->Id])?>"><?php echo  call_user_func(function($__val){return$__val;},isset($album)?$album:$this->album)->Title?></a></td><td><?php echo  call_user_func(function($__val){return$__val;},isset($album)?$album:$this->album)->Interpret?></td><td
class="right"><?php echo  call_user_func(function($__val){return$__val;},isset($album)?$album:$this->album)->Year?></td><td
class="center"><form
class="delete" action="<?php echo  call_user_func($this->GetHelper('url'),':Delete',['absolute'=>TRUE])?>" method="post">
<input
type="hidden" name="<?php echo  call_user_func(function($__val){return$__val;},isset($csrfName)?$csrfName:$this->csrfName)?>" value="<?php echo  call_user_func(function($__val){return$__val;},isset($csrfValue)?$csrfValue:$this->csrfValue)?>" />
<input
type="hidden" name="id" value="<?php echo  call_user_func(function($__val){return$__val;},isset($album)?$album:$this->album)->Id?>" />
<input
type="submit" value="Delete" /></form></td></tr>
<?php endforeach;?></tbody></table>
<?php endif;?>
<?php return 1;};
\Packager_Php_Wrapper::$Contents[5]=function(){ ?>
<?php ?><h1>Oooops!</h1><p><?php echo  call_user_func(function($__val){return$__val;},isset($title)?$title:$this->title)?></p><p><?php echo  call_user_func(function($__val){return$__val;},isset($message)?$message:$this->message)?></p>
<?php return 1;};
\Packager_Php_Wrapper::$Contents[6]=function(){ ?>
<?php
?><h1><?php echo  call_user_func(function($__val){return$__val;},isset($title)?$title:$this->title)?></h1><p>Use login: "admin" and password: "demo".</p>
<?php echo  call_user_func(function($__val){return$__val;},isset($signInForm)?$signInForm:$this->signInForm)?>
<?php return 1;};
\Packager_Php_Wrapper::$Contents[7]=<<<'PACKAGER_BIN'
`  �_        �   LP/  �J  P        �       M�~�                   M y r i a d   W e b   P r o    B o l d    V e r s i o n   0 0 1 . 0 1 4   & M y r i a d   W e b   P r o   B o l d     BSGP                 �8 ;� ;� 2���xZW�h[qJx"c�r,g,E�&�C��ľ������@�)ب�Y���PjlP�6k]M�17 ��2�k=���es<\܋Q���V�͆��3����q�b���U�L�

� `�B�iq`+EZ�`�V����b��	��@t��U2ƎƯB�1G��H/��c�^G�0|��鋍����"i����T��P���	<w$ec�����x����"km,��u�k;�MxZ����� B�� �&o�NF� � {�-Uo/��G��1���N.x����Η�C�g��$"Hd�d�'"N�5���C:QÅKh@�L:�l4��0*NW�9+�29�)m:MΛ��I̩,\�8��+h{��k���ʾ-\IF�"��G�<[ı��Zџ[*��Y��X!�7��}�0H�RFRf
�!�;Ff�����E�K������
��kpSlX$�E�i)Ť�D��L�o�����}r�0�0��9�Jrf �_�_S�^�(�F\���1Xe��!��a�%��NLܒ 96�K��F��ٴ�ܪ=�EK<^�4b�OԖw),=AB[4���,4�$?�.
`,a��zw�ѝ��W&<�O�e�9a��	z��܌c�`_8ɉ�/��,Ιܴ���E�џ>n��e��F����tlF�EM�������
��S�
`U䅡
�x�`)��҅�w��U��Յy�^+y�Y��mO@N52��~�`U�+�)j�=CM`�"�|c]� ��%�s"$@3�ta��iZ����0z�>�0"�2_�X�2������+��N| �
��Cm��1�������ԕ
�T
t�3��+
�^-2
Ap�I;�L�M�"�PC@g�JY�Y���\p���1�䲊�c��D-F��UHz>|Ċ��:�j�����o�)&@�2�z�Tz(��HB��p���\n1iųj ��
l��az���~��t=�R%�1�T�ǋU-p�kE�#0$��)gi�;�Dv"��/{�Q5�����Ԧ����>5��-*��ǮiA]N@�ȱDV)U��Z����j}�UlC0�a�X�R���;2X�g�����΀؂J�Fh�HA5�3_U�����`p��i�3ZC�
6�Z��/h���M�dʌ/�6*]��
!EB0�.$���9��c
�jYwQ��i��(�.Lh@c��꩔L�<�I@c�� 'W�G�� ���l����.�_}$�xx#�5{�R�?�s�8P� s(y$�$(����Q�ŀ�w7�z��
�m�T��}��}����?;�_�`�U�^u\鿃��C�F��2d�&�2ܟn��TH�>��*��E�3�Ҁ�l��um���%�`C�ʈ@��dEV�^���dB����p�p|5K����Q3G�⣽͍(������V�Hrl�;��u;	�(c� h��H�Fv�hJn��2eM��Y�E
��j ������h���+�IÙʏ�������_C:i?�C8��d1�����{�5O΁ց���M�B�O��+�z�5gJ�F�4�2�t���R�(��Y�0	�1N1���j���ͣ���V�-!�jj:�������&�mN���s`�S��}�Vj6�K�
��k��ڳ&����N���&U�	v+C祸W �s�!f�j�`{��-[pR���c�'�@����Z��k�5T���T��8��M !��I��(�J��{���Ȋ�1�1��k���)�����7��cәA~�B�P?�9�~�.{�!�����[E4�'NJK�hA�#�L�p�)ETB�q�3e3#���K�s�b�v(p~�S�el�&Jқ��;}g�,�\t`-S���P�ҙ9�F	���0�R���	�%g��0�D�UQ@����CCK4�p�ѥ0^�VF�m��HR�e>��Ϻ�B��M����JO:M��P�w�Q�_.��az1e����a@�`��T����U�ڵ�`խe�Nmz2�$����<4�Ɛ��ʶ��zZ$��O�K��jǒ�2A��� }}`Ӭ�8�,���H#� ���B�NM4��~U�J▓W�b���)���������/��*��>Ln����qVQÑ�F��Ma_收-�h5'H�Yp�4�)!��[?����w෬C���/<��r+#�
Ԝ)���'�Ǔ�؇��Hf���hf�!6�|���ě��.(����������جI��N��u�v��D�
�_*"u@!��l#3�%/e'ՐC8g�YH,2�S;*HK�k��HY��5$u�D�e���V�H#ӑX5�i\! m�=�����RB�ڛ�!�j��%G�l�X�u�ҩ�Ad�&^�Q(cE��p��aQK�@!�"�3'��;q�EE��ǸUa��R��2�1=_N�0E*�6t8ET` ���7�5/p����a(u�6���2����R��soMa� X>o�����
3��'��A�fn�?I?�-c�4Aĝ~����	�NF�,�����9��t�R�=��V�;�)�,n��tS�-�x�]NU�]z��U�z��;
�Z�)Ty�R�L�F�(���I�Jʾ4�QZQQdH�)�;��L�����h�� �R�m3Ҙ��_Ff5�H�>�2���֡���x�� �S�9��?m�j���v�M�B�e@����ߢ�&���[*#OFѤz�GTr�	4C�Sٽ�}R5�O.��0��.ڠ��c�lU�R�7N�ȃ�D���Җ�R��e;5���e㏽ʛN
���%��;���K�� ~2
@��[@>8�l xhe�P��a!

��v�^��U%�&]�H6�@�
�J�p�HT�!��@vꨗ(v�7z��7L$@[��#�9����� ���#�>�?B
����}�P(#�z�;V_�ѣĹ��>��nU�$#��_�N&рmGG��H�l�ZO��K <���-��\�#|\�0u�%�����̉q�!	H�X86p[��Pv�~��@�ˋ����3c+�m(��'��Iw �g!�]LAjf֮E'�|s�������ì��Ob��x1`���kn�� 
`}�B�/f흡���M�E\�k�RoH+C$~�(�������#I�O�����e�5�{���D�wt�1M|����\��5�X���Q��|�d�M�
�q�(g�%��t0:;[Wv�qZ���q]��8VF]4CjFAy�P�#�7�:�mm>�H��P��c�Uv���؞8\ҋa�B�����a��?��c�Q�F���, �MM��~�)�J��+�$k�d�u#���>n83��Q����JUKl5���ȿn� Op�!m�06��n3\��:�[z˖�=.�LTđ!b.����XK� ��`�L+c��.�@N�� e�&T*=���Yi��^b;Q��%
g)R?D~��<-�v,TS���!��1�u�F4
�8]���
k�&��5ꁌ��*,����EZ���Ã��|
�E�
0
������E���H�ھE@�R)
�P@��! m��~�J�ݣl���_mu�/s{Sd[��Cl��@p�-��C�s[Kh%��h���+�(nA<Aڲ|�hx�5L]�	�K�y`I�?�����Pf���f��[��۬��jo�����\~��/�l��H�[��g%�N鬇��oT}�NQ��G�-���vs���}�go�^Blrq�r���m�6m���-f7ߝ&�܎�}jɯ��V�Q�V�u�X<���e-�0�1Fm��dֳt�ow3�:6���r�t�-�-�S�Zv��DYۂK���Ы�P!���z�v'q0Ɖ Q{qd���v�
MT�-d�~�er�Ɏ_��aPA����n��e��o��t�C'�ט�Q�8�^����+ͤc�5��E���W0�шF�q�m(!�mv�j�p��D�&������X�:Ѯee6Q�ǿ�CTCbj&Zq�d��D9��h
�"��}����� ����Z	A���ap�?�+ �\8w[eЊ�l!�u�"-�Cݹ��>^G���f:���sS���mT���.�ĕyw��ux�H3�������3�VEほ������*"���!@�K���xB�s�
x�p��R�{g~!9�,�m�h�n �"pq��;���U̒q�x\A�0��U� Y��� &y�ˌ'��%e��T;��O���T<:&0,�|�YN�A �a�d�B��o-eA���D ��)eMxUv{1^�3���`tH(�,��7���]�6��]-+��M�Li ��;w�q��	�7�'��=dJM�NmG�B`���}�̔�$�0�r`�&w(��s��G���f-S��S�n��-)j�H�N-��}���8�>Cͺ���Y*����Gs�4�Y慆q�?@
b<�T7��Y�(��|��JW�@uT��UqѮ�����i��j�v�
� �:j��J�
�!��	�x�i��e��o�����J�n!�OT{*�	�Xc����#���i�$�O0�c�3���/㟧aN�y�f��܈�` 
�C�a6Tƙl$Ӄ��z��0��3��������jpo, N�j�-�8�����,!<BgQ���J�r��<J&��ڸlrY��4��9vj
E!�-�&Tp!ډ�ʮΤt�mf�t�J	Q$C^1d�l�j0(��^o�m�^�U����������y�1�����԰	%j�E����u�T�*�:&e�=H��I���c�IH��MFa�)%L i���I6�Ç�Up_2�L����F',�B�h��OU}������@�E���H��Y7�h��a��`N�)�O�3��O[�oi0���v�5�u$~�
���X�8��)�l���B�`�H�h�Z�DFZ�uh�8*m���o��fJ�lt�-l�|X�fqy�k��ם�Q��jNOR�rB���eh��I�H����͘R��&�b@�sV��9"�J�3X}ڸ��qܩnlVX�2>��'���`	ؘb`�f�b�K�?M(�AlŬf� j��@��p�)�� L�5X�t�\��s�  �O���|a��
����8轹�"��KEK�H�o�:5]hrٯ&��|h�$C�z�^Q��f�,+T�n��ӫ�UN4��ú�X�� F�q�>��`[*����f�jKk�|�=��A2�Bi���x8�z���F��-|}e1�R�$�����X9�x#yXR�p�����!-1q��uX������Z��[/�ҥ,X�� k�^�e���j�{��V�V1`�Ù����O.������eWͳj�0 �ܳ#v��`��C��&�⬢����V�k�����,>�J~�0ʅ�)�������dޜ��@�T.� �m.�@.�bc����	��G�8�[v�:1�R��Jq���X:D#&(�
���X����H����#�z�
=����jA�G8A@Q|C�x�"�:=�Yu_N���ġ�Gi�S�̩���n�ǉ���jJJ�W��k��:[G�M$����ͻ~ԑ&��'�(�G k�?�P��y�Iۣ����V��$y���ccڥ\rc��FyR�옿�^�����j�
��z9'ipŵr-���!|vf%�1C*3���-[�4��&�����	uǦX.�E)��xJ[�m�i��}���p�r��_��
u���I�G>�a�ۛ�X ֢�d�o��4I�����C+K�ö��̂�0m��2~,id���� ��Șբ��%me��Fb�ǓE��yM��Kؗ�4�ix�<�'���v��07�)�,�KPF��-Xdh�0	�)�4P��,VOsqBIh,Uح�\���=�6�u��$�l��%AE��sC9��`-!��#�	��?��~[.�pa"�i)@ٲ�/����tb��Wf�!�x>�]:7����ߞ�C�o"7#�0îY'=ա�����'³SCl���{ ��K�)�����F�b����AQ��~�k	h�K
3+*b����a�!����ja:�8Q��"��4I���ٕ4J�^G�0-�5���k6��k����7R�Ʒzj�r� ,�i���
'J�B�k^T���� �3�$0��gH��$.z]O<R89P��p�n��%B҅��H�<9���;~����I�<�t�3����  	����o��� �--�\O�� ��ˮo�D&0T��]@��@O�ӲP�AT�̭8�	��ɮ7nt�Ko����xI��t���ג�nK�‖��F���%=��j\�*�c�Tì�"'5��gd��|E���dy�{��K&�����ݸ&��ܽf�^�BR�	��A/M\����z1�DhB؜���9��-�ρ&z)�[J~��r2������� K�b�N!h�Y]�dx̠3 ���_%j^�7��_z�E��)❁ ~�
�3a6>:�p�ϊ@��N���#@�GC-�(j����D��t�;�r����Zq�!�H �G ����S�J�n�~�jj�D�ٯ�n���ʔ���Pv3P��Wd��t1\f�㐰 ֶ���ki�p�M��/%�
�+tu�鑶j�x&��\9n�I�#A��@�N����",z�8�=�W*ws	�>����'�9��$�%�S���i�3�@��|��eb�JB�X�vk���Ǵ�����;�!���-2{h�k�fN{�zߒ_NW���7,^m`��@F�Z��_uMP귉,A���	QR�B&T	N���%RCl#���ڠݑe,��-���Ҥ�,GR-�2�`���Y<��/�;�-C�B�b!�\Ov|�b�$���H
E�1�� ���<-l�#� `�93��kȬ�p�x�E@�������-뱯`$U�Ε �D�},�hCJ֌Y�+����
\���f���4!Os@"�(�{p���*0Z���vS�$��N��-ё��Z�U�j�
m�1�8�R�gY�k����` �� ]���()�E79��g���Xя��_���cH��o���� k�y� �)�������� =�YX�R������P��]�����Q��cgE���;O����<�?���f���pR�w�iжDAhj�&�E���o���r��ꢩņ��@���ˍwE�2s�Q���$e�;0%�a�y�4�L�i�U�U������5~
�	�f�s����qi�n�|rs�F(x��L(m�I���5���v�8��g�L����,��$	�i�**��Z4�F�'P�6�iR�lK'j��J]q��W��+1�|�	���!w<��)�4��0�����E@*�/+����������ˈ�85��u���&�ƛ�kH�2�2���d=���kH- s8�(� WZ �h{`T�D�} R�F����@X�����L'i#�`>�����!_�y�$����^� �a��?��JM���T�9�7AS?H_#����"sK
��N!d8���#����PI��@�*�
$� ��FE��NIB��q3�Qd`���V�ꔄ2/�B�k���ű&�1��b�4�Ut: �I4�����V-���
�=6�Fj�"��iQ���qNMtn@�к�+�_ 
�������$ܖq�z�7�j�[���9������4�)�+l�S�4M���U��)W�#�h6��S�&�a��j��<\Fmo�#�����C.0D�
q�_��Va���	�s�9msyF*V�Nn0/dC/gmшd8��F�鄊�K
o���B�	*�~J�h�LPt0��8���9�3��S���XR���h2N�%.����"�(�o�]/%����L�\�L�aI���
��\�s�u*�D^X�Eͬ �M)X��)U~����d2H$���Г#�>0K}`%�:s��:��*�<��e��s���eʘ���rD���X����)��,� ~�!Y�E@t�6ݴT�c`c��ȏ��礣��;�l7����i'+QQRH�F���D!]�
q[����PЇc	�O���y?:�#[�ْ���
i�H��� �e�rq�K,0T? ���`�"
��#:��G�p3�pv-�k�T�\$�h�ze�Mcl�
�E�O���`M��Cڠz�N�v�F�Є
P����S�:� �	N��]�����B�UG����0H��!\"o�+e�7��]QP���ʢV�Gh�B.h�L�w0r��	��q���d�,�P�z�Gr�bh�%s�Q�"J�� ��6��M.mp, ���-5�ъ�lCC�7�nb�6��t�=��	!�g?�H����a��e� Z��B�x�F_�,�Jg )Uz^�t�"Q�.v�ЄB����/�� A.Wr/�"hG���~���٭8�{DJ���A���ܠ�.�d���=lxA�v�j�ƏO(�����7*��Z������E|����M���a�dc2�'襄f;�+2X���0�������:�UR���M����j��V�Ȇ5kW?T%
8YHRUG�ć㈖��5/��a��bY�����4�m\�f2�7d���MB��s{��Dօ��J�]U�K��hx�ֹ�f�A3�ҙDC�OǬ>��,J(���d������u��ӝ �i��)�H����� p�4&$��lda��Gb�\�dCS�Wx��<;�*�.�\)ȡD!P�-fV��tv�W�X��^�:7��hgly�W2C5'�)U�e��/)�`��j~�س��S�T�g��{�9�^~�N]O��s����ya�[�f%oM�~� ��+)%g|$S�y�:��y霖�
�`�F�%�h0`�|X�v�I�ʿm&�_����.�mUƒ�\�,�i��     (
�KF�+o�eR�I��T��@�olĖ�~T*�Ud�`F�M=��&��Ɋ]hܚ�YP��UZs�����(�oYV����9�-C=@V=�,�q�T�ځק3�rb���Ӽ�kȹU�_	`�L���r5b`�Bp�o��m���<q�-v8���U�J�2���*��fa���5A�/��$�NC:�^���Py��LE�CEN�d�_�@�����#�	���°o�S=l�+��R������-��,H�p�}��PK�GˊF�vh��_�h�P:4d!e�(�tx�T�{�R[�,��,O�p�V	�RV�{�������y��{�52ex2^^y��	
�"*2V1o�:�%�P�G �C�)�Ql��uh�����G�*�X��HH�\�|�XS�l�d�.Z��#MsJI�d��:�s"(�?���fM �R��B�����$oJ]�f�Oaa����G3�/I� >gp>�pS�.T)�n�ܲ�ڃP����G6�w6̤ȷƖos�Y����kk�6�1t�Դ��չ�_���z��|�(_v��.�-�|h
�Q�D���+R��1}�b"�?V6Q/���6)al�
6�4�t[!��v:�=��[��늱ncp�l"\U�+MB�	��ȡ*f!}AF��J�c�m�"C�%W('�3x��3mdJFH�v�>HϢUG�]��Y�T�ᄽʰ�Gf��_9u�Z$J�5lq*�@r�mg0,訰$۔H���<4.���������9��`��N��8z䜝n 3�h��`�H���{b��
�מ�50��J�ǖ��8
.QP�k�d����|�c`r���'֊{t�� ���]�ڲ`r
 �	"DjJ|�����v*d��{����3.�t��O�5A�"e�~��£�G�������N��]��#�ң�PX8��
��2.t��4<�d�y҈)�����aB!���Ҧ
)2'�1�w� R��T`o��H�!�W`���҄9[�7�b���*�^��[�Ș�hu�&�
e����OW@6Y�	�:bW���&Ø>|����ujL�z��)�ݢ6��N6�M@��"ϥo0�9��&��?kB�%���T+��nU)�q
���+�	�����k���B���@[�������?���DIJ�����6���
�HTK�O�ǒO��p��"FUP��� <LY��#yF�o���.����~:�JL��c���kb0�����sR_��|b� �%�F�� ��jzFb�m�dZ	]�ש����`d�f��a�Afd(�E%��2$N�'7�Ѻ�Q�����hLr���^�JM��v--�@2�9�D ���u�$%i:�+�P����@_ŷ c�}Ł�Ney�Hl��j^nmPI�`�$�q�7�嫐�>*��,^J5�I�d�n
n`x�����y) FC�n~�b@�|� ��DL2��x�D�z x��Q�t����n�
)���F]tN����&c_/R�y0����IJs������`���)m�ײ������B��]<�@$$D�5�L�@�t�΁�YV�4�M��i�|����MB8k��#n�� �2�T�+C�	�t�.������
�?�����0]��u8����ЀG'Պ��Q%(�%��OL�YyQ?�m3j��@��Xp���_Ā��� -{��K� �:��#�>	�Q��]����V. Î���J���Io�x^����=BB���!��M!ه�Թ�1���O�sM���DsB��;��^��v��C�Åx_B��+)�A�� aӎ��!)	P=�����E��,��v`#7���ވ&��$"�P�
��dG"m֣"��(7Ԗ]_��`KV���b�8��N���]�V%b̄�3uY����߆b3��Lr����Z��/�@0�n���#6!ղ����!�-���R�A�oݒ���6�	���V�A�����d� �E+�"dɋ6"WBH R.���2@�	?�k��ܤ�N���;v�7D9�g��%�ѣk��WOx}��=k����Y�./��륰-&�JH��F��Dp
��cԀ:��9y0Ɩ�2��}!��wVݚ��מ��*x1�m��'���1�n�B� o�����!�WRn�H�X9llΓ3$
�y��K84k3�+.�ƒG8��Ǯ�n�t�[����0)�:34Uep������pk�b4�X_�&
�����,mՌ��Qrͧ����̣�PRX=�a�
z<MQ`
}�-"$6��h�q���:��\��F�Ɛ��L�
�x�%j��	�߭.3')��x~��G�?
@"U�`P�D�RV��X�$%
��x�v��h�]k�#H��j.������ЂC����W����S.��ԁAr�y���;��e�H�,�SŚ�����G3���jNf:&���3����!<��B�h28X��vc��1�҄�F&$|���o
'�;8�6�r,
����d�#��N�P�<H0��^`�b�[��!�f�/���䖐�Y�q�wO}C��ѫ8Ҕ�rE+[2�O@��9ovK'$���{�Ȑ)��e}8�'vƹ-���D�a�Z7m*`FJ���y���ݣ3, [aH�R��X#�8�� ��$�"�jd�q^F�	o��xۄ��.b�`�f1���W�ón `L{��7&�|Ba'�I��YO|~4�pr^~~
�G�W����� Xu#�S	4dՀܒ[G��Ї��V6+S�:���*�q`��d���ւ��$Z�#�@D�@@X�`�l>0������">��۸h"	޿sa͡|�硋b�Km�2K</�6m���c������
��n�)&'�TC=P)����գ��H�7�pW�WG����2i�N"i���d�	�F~����A�d����Ј?
ٍcPL������k��$ݛ?b=�;�h#ʡ}�.hp����u��aG\M�@6CR4�~nZ��z8m	��R������5" �N3�|!��#�����썼�P(��PǼ�(���o�����9�8=�ҫ�|�VDD�"�Kπ��T�|�Pg�d1sF��c2<��hO�|r3�����<5 Ř�P"���T��t��m r�K�r��v��P!G*��Yョ���Ƒ��[/���Xv=�ae�76�4��3���$��߿��3
�p�l$	�<d���@�`C�H�g��x���!��7�Ҳ'��a��cu��г�bJ�1�\����K���Ų2UB��-�~�(�Π|�-h9�(�V��+���2y�LҸ��^���b��U|n�oc.M�b�0ڇ�#Y��L�(�>�I��^,�^�%��a�&�Į�#3LaX*�Y��P6�{�o�� a��L(u�/D?���&H����n�eZyh4dݣK,�)Zy�T�^�$yZ�:h�ٖ�1���"���=�("8ol���ݦ)W�b�v�?��\��Q��;
��%��ĨbUo�
9`��^n�P�NC�ܾ��@��j��^�%�sSS�[G�l~�ƲF2�Գ-�)��5EᏇW#H7��������P9��M��|%�@*~(�9�(9Cʂ�~������C����z��f
���\�h� �$@-!ch�* $S@�t��֢���
�
'����73ȷ��8��\���r�ȋ�DRP�r89�A�I�N ZQ ʋ0�2��\���^b�Zl����f�e�,A�p:,�\�hyX(�[��А���YqZc��1�[G�:�~�������� *N�BXx�����(Q?0��-�U�5 P���u),2�Od0)c���X�{�_�����f��P��㸾�)ޜ���x#���'b�|��t�'���}��ِ�8���&ŋ���K�/`�%\�Zs��~KѠ�ܴhk��A�<��{B��G�L)�[baM1-1���������]��"���39�&��3�]��h���
��?���x��x���
��b>��e0_(F�]}t�^zW���|f���JoY��o�%4>w��7���y�s�8�m��Fˁ�7�V:�,�,�a�+�Ԡ�������$����x��j	R�1���+�@d�1���R�+
@�6�8M��M�U����]׿j,Obi��L�h�86���R��`�͍����{	� ���O�̓mu�уx�{��	)��mD�@�	�큓ߺ��!g�\w�
�aŻf�C�x-N$2�X�ӯQfp��yś{��r[lˉ�����k;`Ƅ1L&�%Xy"3���J����*��v>��G��X�
��6�q�)�
)l�$EM �3�J�TB��4�! ȶ���J�i,2��2W�q�*��H���UKh�`���20T|]H�,�,n�1#9��r��FiF�
Nd��Q�393�L�R@�ݗ>�jAP64J@5G����3�Y���ٶՏ����r����6�5���p/(6"�>���Y���4��0�<��,ܮY�1AcR�85��*H)L<�D6�5(��q*$
�(���ڔ��4��p������˛&��j�)����:�2��^2}'OgQ҉!.��]��tH���ͭ���U�7{gvëD��a'�X���	��4p�ig�0��dۘ $_������58�UÎ�V"�����y2��L�O'X:*y?L��@��$�gG���;h]�����{Y��`*�����~L�$��x-SF�I���h[$,c��P���l�*�S���:�qRL��\�>Vբ�/��r�@
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[8]=<<<'PACKAGER_GZIP'
�      
�}i���q�w�
hh�'f�>$6Ӳ�mQ��{�3��6�K�@ 9>~��}#��. 5�3���>��;�j��ƙ���o5t���|���{f��gݛ���^_~��{Ͼ�����G����Տ~�w?�I�f�������/��Gݳ�ŋ_��x�������ig��/~�Ϻg�i����x�����o��/����O�z���矼y!7�����0k���^=��x��7����3���gr�^O/_��^~��/��?��ן��>�����������_����_��/�� �8}���o������2S�3_������u��_|>����������̙P�u/�|���In�1=�^�n�Pݳ����7��Y���_��"��g�o��/���eT�|�J��{��|�z�|緦�ٳ���<��?��/�����9��+�����?��
������r�2/[�b=&ᇮOx���\5�7z
��e䨭� \�[��A�&l��fl[!�p<4`!�'�ǢT�>�T�ip���v�6���n :�>��	?��RI6g�ɳ�� V1VY���a3�������iNot��
�H�&��"��q`�"�h�����
��}��8�܌'b�ɕ���$��k(j/;��'������g�Q�`�B���C��2<��6��+��Pa�ܽ��~����W�Cb�-+Ld��0�R��F
B!催�p������gۦ"�!�$�cOQ�S��^����h����k;6P��$�6� ���p�Fj��7(�{�4����_\O�[D\�C���Y6�P����b�Q�A�xik��ꂅh�"s�,#Z���V���]UE�1+��!��)�Zt��E�%qy�
_t��:����q�ށ�q)Rr�6����U�������w�ܲc�gݨ��(p�"�-�,����ϢB7��rqe�im����� �,
#	e-�C�Bҹ�'�@���q�~��"3� ��g�a"<� �m9���Ḿ@��	����	0vv����#��.K�݋-�ΥW
ĒN��Y02D��UvgE� �LC��H�W�:��/��FYM�Y:e@OH)�dʅ��	����B䗚:�����)����I�F%(x���J��(o�4!iX���7��?��d�	���#K��J�*f��$KF,ϊ��\��QM=ByG~Mj��� d�P�#�mD��IB�!�n7�d0��\�25�D���)N��`jȾ��i��I���q����� m	��D�E��2]!� ��(H�m'U&k��ٚ�X��C�YIaeaLLj2g}?m�L_��O�c�lUJ'y3�0yn%���8�)D�@����n%D�X�V���s�/��l�;��vp96���@� bT	CO�ד�E`@�9p��	��&�r@��r"��?�I��?A�aڠ\V���^Jx}<�5V�W�4����/�C�I�,�܌����*�|5�E�����[�D���aZ�L���u�ǿ�=x��+0����q�M��8��8����!��s�+�E�ߦ�8�&jO�!��v��Oh�5�/j]wlu <�80��d�>�[�G�����X��.�i
��bw�<�,���P�'��б�c�Q�C���]�KNcHPWQ ��$AW�S�ѫ�Vie���� �ؓ� �8�h���AA��H�.Jt����oa�MTu�����)4j���i\M��,S��l�}���1�M^WŤ�q� !���p�-_���∕=[rX^�)^&Z��Sj�:�ú^�ք���m���}�\;@V�)ԭy�E��<I�y�Ե�7#�]q��S���fZ�nM�O��[��Ʊ��x�q�8A�v�0�b�+#6���v
��sDem2XH��Ət���T]bY
XLC0�)
f#��d@+����r�m���pN�������o���hR�d1�AƊ"n*�ή��� ��Z�>��k
�mR��f�k\O��2闈5�$����5�p�,��G�֛�����u��J, Ĳ� ���^�ˇE�Y�Y���1
�Y w�
73#Ґ��,��^lj2NH0�Ix`��Z����Y�-��YA+&�l/,�p4�hi|y�U3e:��^��5z熚�ѝH�&�>��!+�q����(�Ih+��S��B�c$��l���� E�hK���;3��*ܱ�fU��`Տ.�U[Ä>�i �Bt]�/bk
���lε+�T�)��+��_|Y����s1��%� �zg|vd��ӎ"��$E L�	�$��8��[_�,�2elR���a��Œ���
��+�a �?a�(��X���
��Y=���9#�.�ˮ�T���夯8+��Dd~��e�i�'y���I؛�k���PEs��&�P���2��
�a�jE����SLD�4�]�?�yL5/�ŵ �g�	��eZ��Mg�g���R=3�f�Bl�1����-a�4oL��dXK�G�yy��e-�O:8?���H�cI�<�h�L6c�L ��w��7@����-��Ȝ��[PM
H�5�;0���i
ci�����a�!])��"Ee`m[
"�g`5$���(��?_'X�t��%��{e
m �<����
G�>Әɬ��H��iTM�
*��1J���$��($n�-���H#�0+[�L'x�`�n�ؼ_�C�2�%�,ӭ����ar��2�S�c��6�f����^��=!�#����5��xz��-�^�"j��#�A�L����� �[�����Rp��'���o3?P�'Y�-:�eZ����=�2����C��@�`2"0�F{}�S`�L�et����c�%���~�Y��IL�({fu�Pf }FK��7�Ɔ@+3B�R�#1݆L�i��j/h��)�KT��@E� �32�5ʫ�4f��s>��԰��b�,���왫�`8���V�s\�8����`eha��r2��rT��LlYXjI�FM`ǋ�рʃ��8��m6����K�1o�nB�Id��Y��?�I��'���JO<��b,#B�M�<���P�RK[�K���-l�Z%��Œ���[x�ҫ<Q��{����`U;
��i2��'f�� /|&���:c��6�0���J�ށ�:m�`q�!69C�K����ۨ� ��xhLus��|(�]T��&b��C�L�@e��E|�|�x�U��]f;�����F�wD�&��i	8��~�� �_ρ��g�Fnx��ĤE$��x���z������Pљ5_�V�e�HNs��%���^�Y�,�@�"�	��Ŕ9�4-S��t�]�A��ӑ]"
�u��@<�ۘ"buV#���k��2F��<�v�l=ź4�g
�]J�7M:�-]I4��#˫N��y֚h�N
��Tz�!�i.�q�0��6�<O2�Ff�1�ڮ,�Z�R��94�&�R�9��OPJ	Xk�x���Ql�H	@׆�p ���n�F0�����d��+0(F�	�t��2�.S���J�*#�T���a01��8x.5Ib�,��r^�7׉�^ �AH8Y�߭��S��q�U�Z�P�
8�����V�pHc忞<K�ͪ�DO*T�|yd�%��x��;��j��^���4�K�pa}
C&(1��]�*�Y@ފ[!!�%b�=4X�s֨�-|�^�%����	~v� WHX��]�\��. D�ls��GZ� �)���thUXt#`Q�e�|A���BP>�9��Q���t�)�Zrnɼ�*���ɸ�H���!Xj`9�]��e�<���=AD���c�*P��hv� ���N�ʹ[Ø�x/�m�x/!'�e��y����P�ڱ�
*��2E� ��!Խ�(��J��&L]����f�	٭����#
2~Y��D@X2�c��e�3$K�m��&��M�⒂Z�&E���s�+d��?���R��ӑ��F8ӻ�Z�t5,�����L���U���\������B��ꤹ�ZԀ�B��W���6K'�ʒb��Xo�k�9��Tv
��F��؟Ki���
��q=:��M����
�H�e/�ze����Z�d���T�h���Z;P���w��b�%�Yd5�F=w��GI� L������A|-��^��L���^��K}��@��i�#�jJ6��P����`�������4�CȬAT���u�"�A�+[����� Z�w���+���ȶ/ZHNɭ��=[Rql���N��uFjd�R���Z��3t�9��a���F�)~j�a�X��J���AP��9���lzX��ZW��=M��_M���&"�N "׺$Q�����s���M�J`۰�)nY�W,���
!�aM�1D����rl3I-"HM��*W��:h�f
S[X=X >�6ˣ�Ta^�ӷavc�O����x!��8����ό}�7,#c���
���0-�#0GP/���@A�����6{`
˼3��G�_�.�:�u�nW6��
��ڍp�d�*��C���q��p��'NHLz��)^~�d�y��a��@Lq8ܭ��tÅ�����j;��Ys���y��3��TO�-A�8]�0�����]j�{����M7"��~XTY�	�G��M㺵;f�x�\��c;w�E�ڀ�!�~�����>��7^��Լ���`��~
������8=
�I໾o��}�;[ �A�!m���a�4a�b`���	I����h��:@MV�>!0摱O
v�$�Ki����<Hڿ������<V4*ݢ���ګ�I������k�EO��%���%��T��vU7�wk��ay����u�NLw;�1�%�{�+%>��[αK���w�a�Ako��ښ��Y�2�,�ǂ��ӆR蚫�hH������|�{hU�-f��F0-���0R\I�Z�h��iY��qב+"�݅yj��C
��k�dP���x�K��e�X��J��[�.�����[�?z��#��(�owȲ�{�ܡ�̞G%�^m=�t�6}� ϫ��㣙�<�G�նG��3]$"~�N��hXh����Jpǯ��~_c{����E��q�q�X��@�8TD*.�ڬ����m���4[���[��7���~҃�j�d�-�9������F�/�U8jS�5�z�I5�
��C�eT�U8�2#�ԅ4�X��-���u������S��\��>2Nf�/�rc&+3���X9��t�#��%�C�	=;Ƕ�YK�4�5��в���G��?�����z���_��v�Gƾ�C�_k�d�Z(]�JLd�j�l&���p%�����Gt��^�o���C��t$�o)Z��h�v����W ��
���Sy�4O%/�U?
���U/d�.���a��á����H:�neJ;YNpӋ�z�W��1k[_�ŉ�k#o8$Xb`��`�F�ݤ�tEeg��_z���V% j�W�!�#k[)�K�'��w��u�Xq=�1���0jG��p�q7n�x$8s����8�]�Q諽�|������s2/�Y�#�Y��(�\�T��qf�
p*6�����<��\6d��],�5�RT��i[�>i�7;o��
�%��~��&�wx���G=ъ�>V���,(5̛��і;�F\��NZ�QG�G�p@!M�WM�hi�o6q��ȑ�;������4��_˲"[9�գƺ�l��]tyD-8�`G�J�cr}+�����zP�dw!�k��4�ݷ����+���P�|�ֻo�y�+>nQ��;i}�r�3�>��L�k�߽�/k}lY��k.��^w	A髺a��}�a��\A�i��^	�;��61qi�R\��.�;�mʉm��D�<�f����������$E4�m���M��k����3��#��	���=�S]��I�&�Jˀ��\�P&�t��Z[�Ɩ�
o���C�ţ|O�r=u�{:���-{�vM7G��x)}��75vcc���N1����`5�¶��̻�߇S{������,BY�.A���IOר�;�ԉ��Fφo�:�I���~�$�=�7E
�5��B��&?��7?J�22z?��g�g�8|��t�0�`筇��$9J�/eoQ٫�)�C��){��%�W�?kݥ>���A�o�'����G,�֥�Q.����=�`�&��̺�\�5��^��U�����¤ofɄ�v`ӵ��n�mS���J��>�:�����<��A�2=�ȶ�F�ev<��X+�~`�OaA-	٪�=RxZ{B�)k����:6/��ֆ:DY8S��Y�+��Z�]���@�0����	�2�e�M���݀w���:1uK:��F
m:�膯f�����;f�F]� #}��GI#{Ž$�G�T� ������K�>
�kG����Q˙y�'����\]�5#�N6G�?Y��{=
�H�0rVww��ʨ0�q )-�����;W B�=�=��پ���ɡy�Ш��if� �ƛVy�G���I�)B)Z����}�Rv�~F�����G��X����V��*E��		ή��\8�qh���R݇3���:$�h7��)��,2#����Г�pP4��u4����ќy~����˯a��Z���h��H|�{?4�g��ݱ/d;�@K��Qޚ�k����!q;9qa��C��{'m���
��1/(LL�;˛+��v�ʞ����T�B{�[�����;vU|.��ً���+tO�*i��nv�ڻ�
�I&�C'��\7�	��vJ7�E�a���aل���J��������c�c~l����	��x���q�; �߀����ǳ��<�c���߸6f�12dxF�����h�q�+Q��@�	эY��
��J2;��pc�ԫ��S�Ș�'��ڦ�0�Q�(�:�81���>�>�[�P��%�?�fz�$�V��������~�Y�0��7�Up�ǿ��Xpk�S���
>���~�K�2V}��g��?C������(�C���p0�p(�����8u��򬅂s�yS4�7� hq�>>��)�(@����G�
X�X����{��;��Ǿ]��-i�b��(��Y���K��ѷ����j!�	�ݤ�_�S{�#	×���[���G�1��a��:<UF;�D��%�
{(���T����A�q����NX�E�!�y�#tt����Gx ���|�.��,��Cv	���̣�L�6�Ѷ��1��`����6I��l��6s��ػD߯K�/�4\��^�c^`�� B�L|��ba�u�: ڸ�@���Y�TQB��r���w1aU!5ze,����nf:������ �v�����`y�fdv7<I�D��,O�#�l�z���8���jU���q���Y5-e�Õ���qx��N���U���a4�~[a1MQ±�,��7��9(��M�ul��O�zH��;�;B�^ꩰ����#���-I=#�~vŜ��q~m�9dV��^��^	K��(�;)�R�k���M+ ��0��t�rv���Xt���p�*�|VP(���ۖ��-q���`�����y��e�3��Lu�\U�m蝙��(�z���������CU,��:�ox��Nz���m8b{gJ��GbJ#��e�/����"��ag��EϞՎ_^ͮ������&Z�m��y��,�Hp�A!-��vԶ���B7r��!)��i����g�,�E�u�-�n�n�6i�c��L�]��iF��e㡍���<V����W7��Y��vQ��4h3ڠ�h�6�����i]բ�����"�?wU+�U-�益�+ne~̍`�I��XvP��9��&��/�ѻ��t�f=����#gX��&�W�}%��u��j���
�'�r��9�]�a�{����'C���R�[�W�n��\oW
������g��\�J�c|��d�=����;�!�O�eɣ�{�0.[�j�Q�g�9N�3���,:��@��c��m��N����.e�p��pvۃvʒX�qݢxB0"��)C��#�޵�؜;7 �Xzjؗ��ȅ�@�E���@�^�Šm���MXޜ�u|K�M�o֊B�[
s�o��=B�7n�l2Ɛoߤ4ݾ}�E�ܸ}��,߸}�� �v#�s%l�iv(3(�r��XV��6\�AO���=m�b����Bf	E��UL�խ�m8Љ�y��g��py���Ŭ���82�HT�K(/ti��H���Ԍ�cd+�ٰ��5��&�+:S�Y����
��-*�غ�h{�֮^k="����ib�wX�+�:����j�E�ݰ�x������(�����U_��gq�ݣ�p��O�M��-����{*��rl����G/2�*�1�m���|ĳ�x�<H��/2��v�^��.��ͼob���,vPM�mL'�ܬ�P�q�wbj=�
\�,�5�i-L�C�F
;Y�I8���a�Ӥ�s��eE����%l��-��y��%�}���uN1EM�t6"'`���[{�տ��؝������������jyf6ƨՄ����m�x�x�
�L�ڨ9��N�̏�k͹V�2�u�@��3��� �QO��S���!vsaa[Y�g�/��4�:����Նƽ��n�9��d=g�}OV9.p��ܧR��j�][4Nb�Jb��J�B����s��
~a�R+w3@g�����v��4P1f�T7K��LN�8��Q���)�e;`e�#8�kF�A��:tpk���f��p���4�e�iQ</>��	��z����ś����?�xmG�  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[9]=<<<'PACKAGER_BIN'
       0FFTMTŮ  <   GDEFJ   X   ,GPOS��  �  |GSUBShz3  
 0 > DFLT latn      ��        ��    kern              
�    : ~ � � �6\��Hbhz����H��� ��"��<f|����Pbx�bb��dv���	.	`	�	�	�
L
v
�  -  7 \ 9 T : T < R  �  �   ��� �  # &�� *�� 2�� 4�� 7�= 8�� 9�X :�} <�' E�� F�� G�� H�� I�� J�� K�� L�� M�� N�� O�� P�� Q�� R�� S�� T�� U�� V�� W�� X�� Y�� Z�� \�� ]  ��q ��q 	 �� �� $�� 7�� 9�� :�� H  R  \��  $  &�� *�� 2�� 4�� D�� H�� L�� O�� R�� U�� X�� \�� ]  �  �  
 �� �� 9�� :�� <�� H 
 R 
 \  � 
 � 
  �� �� :  F�� G�� H�� I�� J�� M�� N 
 O 
 V 
 W�� X�� Y�� Z�� \�� ]  
 &�� *�� 2�� 4�� 7� 8�� 9�L :�u <� H�� R�� X�� Z�� \�� ��N ��N  L   \��  �� �� $�� 7�� 9�� :�� ;�� <�� F 
 G 
 H 
 I  J 
 R  W  Y  Z  [�� \   �� �� �� �� $�q D�� H�� Q�� R�� U�� V�� W  X�� \  � 5 � 5  $�� 7�� 9�� :�� ;�� <��  $  &�� *�� 2�� 4�� 7�� 8�� 9�� ;  <�� D  K  L  W  \ 
 � 
 � 
 
 $�� D�� I  S�� U�� V�� Y�� [�� \�� ]��   X �= �9 �� �� $�Z &�� *�� 2�� 4�� 6�� @ \ D�� H�� R�� U�� X�� \�� ` V �  �    X �` �m �� �� $�� &�� *�� 2�� 4�� 6�� 7 - @ \ D�� G�� H�� K�� L�� P�� R�� U�� W�� X�� \�� ` V �  �   $  &�� *�� 2�� 4�� 7 
 9  :  <  D�� H�� L�� X�� \��   ^ � � �� �� $�) &�� *�� 2�� 4�� 6�� 7 7 9 ) : # ;  < ; @ b D�3 G� H� L�� O�� R� T� W�� X�^ Y�� ` \ 
 $  &�� *�� 2�� 4�� H�� R�� X�� Z�� \��  -  7 ` 9 Z : Z < Z  W�� Y�� Z�� \�� ��� ���  �� �� Y�� Z�� \�� ��� ��� 	 �� �� G�� H�� R�� W ! \  �  �   �� ��  �� �� Y�� Z�� [�� \�� ��� ���   % 
 %  � �� ��  9  9 @ � F�� G�� H�� J�� R�� V�� W ! ` � �  �   �� �� ��� ���  W�� Y�� \�� ��� ���  �� ��  E  H�� J�� K  L  O  P  Q  R�� S  U  Z 
 \  �  �  	 �� �� Y�� Z�� [�� \�� ]�� ��� ���  �� �� Z�� \�� ]�� ��� ���  �� �� ��� ���  �w �w �� D�� F�� G�� H�� I 7 J�� R�� T�� W - Y % Z + [  \ ! ]  �  �   �� �� ��� ��� 
 �� �� F�� G�� H�� J�� R�� \  �  �   �� �� ��� ���  �� ��     D�� F�� G�� H�� R�� T�� V�� Z ! \ # � ' � '  �� ��     D�� F�� G�� H�� R�� T�� V�� Y % \ ' � ) � )  F�� G�� H�� R�� T�� V�� W  Y # Z ' \ ' �  �   �� ��     D�� F�� G�� H�� J�� R�� T�� V�� Y % Z % � ' � '  F�� G�� H�� R�� \  � ! � !  -  7 Z 9 R : R < R  $�o &�� *�� -�d 0�� 2�� 4�� 6�� 7 % 9  :  ; 
 <  D�� F�{ G�{ H�{ I�� J�{ P�� Q�� R�� S�� T�{ U�� V�� X�� ]�� ��u 
 �` �= G�? O�� P�� U�� V�= W�� Y�� ��u  $�m &�� *�� -�d 0�� 2�� 4�� 6�� 7 % 9  :  ; 
 <  D�� F�{ G�{ H�{ I�� J�{ P�� Q�� R�� S�� T�{ U�� V�� X�� ]��  �b �X  
           $ *  , > 
 D K  M N % P ^ ' � � 6 � � 8    
 B \ DFLT latn      ��    AZE  CRT  TRK    ��     aalt frac                          $ N t � �     �   �           $                                                                                                                 ��  �3   ��3  
    " & / : _ �!"� ��     � � � � � � � � � � � � � � �9=AGPX`dnx����      " & / 9 _ �!"� ������������������������������������������}�{�y�r�p�l�j�b�\�I���������������������O�� �                                                                                                                            	

,�+X!!Y-�, Ұ+-�, /�+\X  G#Faj X db8!!Y!Y-�
+��+�
+�	+��99 01!#!#N+4�u,1����N��  U  t�  b �  +�333� /�$3� +�$2�/�$3� +�	

+��+�
+�
+�@	+�+�
+�/�
+�
+�@	+��+�
+�!+�6�?b�" +
�?S�� +
��+�+�+��	+��
+��

+�@&%	+�/�/��2�
+�@	+�(/�ֱ
99�$%�	99��9� �999 �&� #99�� $9��901732654&'.546753&"#5&xC��bum���ǵټ�C��\a{�ɯϾ��ndI><T(B��!Ϳ@�NB73R3F����!��   <��p�    & 1 � �$  +�3�* +�//� +�/+�	 +�/� +�2�2/� ִ
+�+ 01!#N)2����   ��i� 	   �
/� ִ
/�ִ
  +� /�3� +�2� 
+�@	+�/�
ְ2�	

+�@		+�
	
+�@
 	+�
�� ����� ..�@ 013.���4W&��  H����   D �	  +��/���/� ֱ
+�@	+�
+�@ 	+�+ � �9��	999��
90135 654&#"'6%2!bۻ{q��c�����!���canz��ʏ������    W��X� $ h �#  +�
�
/��/�3�/�
��%/�ֱ 
+�@
	+�&+��99 �
� 99�#�9��901?32654&+532654&#"'6%2!$WE��|��|��h�qd��G������������Q�YeS\l�VKBOY�nȚ�\����   6  �� 
  Z �	  +� /�3��2�/�/�	ְ2�
+�@	+�	
+�@	 	+�+�	�9 � �9��9015!3#!%!47#6�������E
pR�Z�����R�;T��$     _��c�  F �  +�	�/��/���/�ֱ
99901?32654!"!!672 !"_@��{��hRu]��@"�4�����:�Ksb�
90146$763"3672 #  %32654&#"Ct� �=�g��uGt���������M{sXmtf\}S�5�s��
7^qCq�����X�w��km�|     l  m�    �  +� /���/�	+ � �901!!5l����Wq��Mm     J����  $ / w �  +��-/���0/� ֱ
��$/�ִ
+�

� +�
2�� +�8-
� +�;/� ִ%
+�%�+�0
+�<+�6�?j�Z +
�5�6����� �56....�56....�@�0�

�	3��2�/� ֱ
��
�����
�
+�	
+�	...�@��99 ��9013!!!!'#)�����w�Il�Q�(F��I~��v����  �����   & � �  +�� +�$�
���'/� ֱ
99 �� 9��
99�$�9��90176! !"732654&+532654#"#"��P}v�����Vճk����wp���d/�!ϥg�+%�����mfdh�`T�     N�� �  = �  +�� +���/� ֱ
  N �	  +�
���/� ֱ	
+�@		+�@		+�@		+�
���
/� ֱ	
+�@		+�@		+�+ 013!!!!����%�����������   N����  v �  +�� +��
�	��/� ֱ
+�@	+�+��99��99 ��9�� 99��9��901 ! &'" 327#!#  N��	�G�����	�|2�2����d�a�]�K��@�����0��U�     �  r�  ? �   +�3� +�3�
 
���/� ֱ
+�@	+�+ 013!!�Q^��c��   t  ��  N �   +�3� +�	3�/� ֱ
9 � �99013!37!!#!
'#t]ȨD#Q8��N��#5�����G/
������T���If7��d}!��I���   �  v�  W �   +�3� +�	3�/� ֱ

�99 � �99013!3&!! '#��aeo6�����N�������v��I�
������:     N���   D �	  +�
� +�
��/� ֱ
�		��/� ֱ
��~nfq
  N��   W � +�
�
	$9��
���!/� ֱ
	99��9��90136! !&.+32654&#"��
$9��901732654&'$4$!2&#"!&[F��o}p��]5 �L��fs`�˽�����F`TJBY/�*��L��HO>9RBHӝ��    !  ��  : �  +� +� �2�/�ֱ
+�@	+�
+�@ 	+�	+ 01!!!!��_������a�     ���e�  7 �  +�
� +�	3�/� ֱ
 ( �
  +�  +�3�/�ֱ
�901! 36!!r14\�d��u��
��'e�I     !  ��  * �  +�3�  +�33�/�+ � �	99901!36!36!!&'#!!h�6�o��V�z���$'.������������ۧ��I�Ȯ���y   '  >�  & �   +�3� +�3�/�+ � �99013	!36!	! '#'��V��4/���R��w��:����|z�|�9��?w��     >� 
 0 �	  +�  +�3�/�	ֱ

2�������������[     6  ��  4 �   +�	� +���/�
� ������..�@ 013#!������    _�
���"/� ֱ
��/� ֱ
� 999��9014 !2&#"#"327  HP�t6Qj����k\){�����
�;+�"����#�4(    J���	   q �  +�  +�
� +��/�/� ֱ
 �4yE�4����1���r}{b~�  H��V=   [ �  +�� +��	
���/�ֱ
+�@ 	+�+��999 ��9�	�9�� 9014 32 !327#  !4&#"H)��
��/�ְ2�
+�@	+�
+�@ 	+�+ ��
9��	9015354>32&#"3#!!�j�xWY
1<KQ����.�'��n��eX7���.  J�8�=  + v � +� +�)�/��/�"��,/� ֱ

�999 ��9�)�
 999��9014 3237! !"'732326=##" %326=4&#"J��^#	�����C����i����TxhF{jW`��:�}�������U�Q��D�"�y�e�]u�   �  �	  E �   +�3� +��/�/� ֱ
  M � +�
/� 	�/� +�/�ֱ
+�	
�9 � 
  +��  +� +�	�/�!/�ֱ
99 �
�
���\�&��P.g>m�|lX�%���������B:��n��kE]D�����c   J�R�=   T � +� +��/� /� ֱ

'�\3*1]���%�mt��i�����   J���=  h �  +�� +��� /�ֱ
+�@		+�2�	
+�@ 	+�+ ��9� �901535%3#327#"&5%�H��>FA%O���.��Y�����iV����    ����%  Y �  +�  +�� +�	3�/� ֱ
 ! �
  +�  +�3�/�+ � 
�901!367!!n�'�d�h��%�R>l����    }%  n �  +�3�  +�
�.�
������+� � �#9 �
....�
.....�@ � �901!367!36!!&'#!U~)���I����r!&r��%���n��{��h��������t       ~%  & �   +�3� +�3�/�+ � �99013	!36!	!'#u��x�/�o��o���#��^C	�	��R?��    � �%   �  +�3�/�+ 01!3!
>54'v��i�c���iE��%�uC��a���«c�'*   0  �%  2 �   +�
� +�
��/�+ � �9��9��90135 67!! !0_I_����RG��Sg��Q`B��     F�
 +�
+�@!	+�2�� ��$

�BTHav5 ��yl-rrtt(rl��'4vaF�     ����\   �/� ִ
+�@*	+�2�� ��3�'
99 �! �&99� �
99��99013254'&54675.547654'#53 %#J&�
XbcW�&PI
��P:� WMMtssqAXL-����6uv3@T���bH��  Y��9  Q �/��+���/� ִ

9901!23273#"&'&#"Y09w�3O�$QnB=�v�-X�� FW���c*'AY�   b�b�1   T � +�	 +�/� ִ
+�@	+�/� ֱ
��"/�ֱ
+�@ 	+�@	+�� ��
+�@!	+�@	+�#+��	9��99��9 � �9��9��99��90135>54'#53&54$32&#"!!!tm�װަc7Lsej4��/OS�0�a8�[N��6�)ma?[�_�H��      ��  r �  +�/�3� +�2�/�
+�@
+�@	+�2�+��99 � �901!3>7!!!!!!!5!5!5!m�%7
+��+�#
+�#�+�
+�/+�#�9��	)+$9 �&+�)9� � ($9��901 !   !     54 #" 4632&#"327#"&F���~�����y�3�1�����Ϛ��J�!Ww���u�T!k������w�����w����?��A�����#u2��v�6pF�    < ���    3	#3	#< ����������%��a�_���a�_     A���   5!AH���     C��   , 4 � � +� +�	/� +�+/�- +�+-
+�@+	+�%2�2/� +�5/� ִ
+��+�,
+�-2�,�0+�
+��+�
+�6+�0,�	($9�� $&999��%9 �+�#9�-�  !$9�2�9��9014 32  #" 732654&#"632#&'&+32'4#"C��������uڙ��ٚ�۬cKzphKuZ57xn3�������� ȣ�䣤���BJV_w\+{S�9NP  ����    � /� +�/� ִ
+�+�
99 �� 901732'4'73#"b+@8N�`�;FY�ve�pz#8B
��$/�ִ
�
��������+�
$9 ��9013!!!!!!'#)�����w�Il5^���=Q�(F��I~��:���L����    )  �8  
�	3��2�/� ֱ
��
�����
�
+�	
+�	...�@��$9��9 ��9013!!!!'#!)�����w�Il�Q�(F5�`����I~��v����z��  )  �8    � �   +�33� +�3� 
�3��2�/� ֱ
��������+�+�...�@��
$9��9 ��9013!!!3#'!'#)�����w�Il����qsTQ�(F��I~��&��P����    )  �K   # � �   +�33� +�3� 
�3��2�/�
 +� �� +�$/� ֱ
+��+�
+��+�
�� ����� � +� +�...�@��999��
"999 ��!9��99013!!!32327673#"'&#"!'#)�����w�Il%�<SW �.0OFJJ."Q�(F��I~��/+,1�45*'_�G����     )  �V    + � �   +�33� +�3� 
�3��2�/�)3��!2�,/�ִ
��������+�+�...�@��999��9 ��9013!!!47632#"'&!'#47672#"&)�����w�Il,-B;)+S<A.,�Q�(F�,*@=+***>AU��I~���>-++->=W,+������?,*+->>++U     )  �<   ! � �   +�
+��+�	
+�	�
�
�3��
���/�+�6����� +
�
+�(+�!�#$$9��$9 ��9��#999��9�� 999��901 !2&#"  327#"'732'4'7$ N�k�D�����ᤁ;��)HW�ujF,<9O�W�����`�D��;������2��>G
X=cZ+z#8B
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!!!����2��t��]��������������:��  �  V9   R �   +�	� +�� 
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!!����2��t�x�`�������������'��    �  V8   R �   +�	� +�� 
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!3#'����2��t������qs�����������&�  �  VV   ) � �   +�	� +�� 
��/�'3��2�*/� ֱ	
+�@		+�@		+�@		+�	� ��
 * �  +� +�/�ֱ

�$9 013#'!����rr=Q&�����I    ��  �V 
+�)�+�
+��+�

!�/0OFIJ.�������v��I���������:/+,/1�45*'_     N��:     M �  +�
� +�
��!/� ֱ
� +�
��!/� ֱ
� +�
��$/� ֱ
� +�
�//� +�+ ��# +�2/� ֱ
+�1�&+�'
+�'�+�
!�/0NFJJ/�N������������O�������}+,/1�45*'_   N��V   * : u �  +�
� +�
�(/�73�!�/2�;/� ֱ

�9 �
#999��99901 !27 !"''7&&#"325&'N�A��~�}��h�������T= T`���Bd��8�H�N���������]Jœ��P���4���c2�z  ���e:   B �  +�
� +�
3�/� ֱ
� +�
3�/� ֱ
� +�
3�/� ֱ
� +�
3�/�,3��$2�//� ֱ
  5 �	  +�  +�3�/�	ֱ

2����2�`�����������[���  ����" ( v �   +�  +��%/���)/� ֱ(
���)/� ֱ
999�&�$9��999 ��99��	9��
901476%54#"'632!'##"&!#3276= A��6Ȥ�@���yy��	mɜà6��cH>E9;��.�ii
���)/� ֱ
99�"�%&($9��'999 ��99��	9��
901476%54#"'632!'##"&%3276= !A��6Ȥ�@���yy��	mɜ�LH>E9;��"�7��.�ii
���,/� ֱ"
999�)�!$9��999 ��99��	9��
901476%54#"'632!'##"&3#'3276= A��6Ȥ�@���yy��	mɜú����ntBH>E9;��.�ii
+�@)	+� +��8
���:/� ֱ0
+�/�0�7+�2�
+�;+�% �
)$9�&�99 �8�999��9��	9��
901476%54#"'632!'##"&32327673#"'&#"3276= A��6Ȥ�@���yy��	mɜ�¦1aG 
�TY?[:-H>E9;��.�ii
���B/�ִ"
901476%54#"'632!'##"&47632"'&3276= 47672"'&A��6Ȥ�@���yy��	mɜÒ-,A<SS>@-+�H>E9;��
**A?**RA?++.�ii
��%/�6 +�>/� +�A/� ֱ)
+�)�0+�2�
+�B+�3�9�:�,%>$9�"�99 �1�999��9��	9��
9�>6�"9901476%54#"'632!'##"&462#"'&3276= 327654'&#"A��6Ȥ�@���yy��	mɜ��tuCC�qrEG=H>E9;��^7*.--7.�ii
�1�1� ��/ +�8/� ֱ'
99�2@
".1$9��999 �*� '999�1�9��	9014$!54&#"'63 632!327#"&'#"&%32>= %!4&#"AX/ig��B¿j�����N�}��.����8�����ML>A]��o�bYWo4��)SR�e�����`bs:�RcZ���8ADA-j�Xqw    H�E�= & � �  +��$  +� +��/� +�'/� ֱ
+�(+� �99�!�#$$9��$9 ��9��#999��9�� 999��9014 !2&"327#"'732'4'7&HH$�t6Ns����nY-n�)GX�ueJ-:<N�T���A+�%����%�/H
Y<d[+|%8B

���$/�ֱ
+�@ 	+�%+��	999 ��9�
�9�� 90147632 !327# '&!#!4'&#"H����

���$/�ֱ
+�@ 	+�%+��	"$9 ��9�
�9�� 90147632 !327# '&!4'&#"!H����

���'/�ֱ
+�@ 	+�(+��	$9 ��9�
�9�� 90147632 !327# '&3#'!4'&#"H����

�%��=/�ִ
+�@& 	+�>+��
%99�.�*999�&�9�6�	999 �
�9�%� 90147632 !327# '&47632"'&!4'&#"47672"'&H����
 * �  +� +�/�ֱ

�$9 013#'!����nt9P�M�����[%��    ��  �� 
�2� +�!/�ֱ
99 0147632"'&!47672"'&E-,B<SS>@,,�PZ++@?*+SA>-+4?,,W@=W,-�%��4@++*,A=W,,   �  ��  ) � �  +�	3� +�' +�'�# �� +�#
+�@#	+�  +� +�
+�/�)
+��
+�	
+�++�)�99��
�TY?[:-%������D�le��ѝG,)0�}0!b    H����    L �  +�� +��� /� ֱ
+�@	+� +�-��1/� ֱ$
+�/�#
+�$�*+�
+�2+�#�'-$9 �-'�901476!2 "'&32327673#"'&#"32654&#"H��	����������0aG �UY>\:.H{fe{uik<<�������������,)0�}0!b�]������YX  H����   + ; m �  +�"� +�03��82� +�(��</� ֱ

�9 � �99��
 &$9��99014 327#"''7&&#"32654/J<��vgrd������mola�F)A2Hs��+Hp�%�5:�Q�������9�W��jB�%��a%��bD     �����   e �  +�  +�� +�
3�/� ֱ
3�/� ֱ
3�/� ֱ
3�6/� ֱ
67674'!v��i�c�OP�iE�RQ;�6��%�uC��a����VUd
RS'*JM��  � ��  # 3 U � +�(3� �02�  +�3�4/�ִ
67674'47632"'&%47672"'&v��i�c�OP�iE�RQ�-,B<S**=@,,�++??+++)A>,+%�uC��a����VUd
RS'*�?,,W@=,+,-<@++*,A=,+,,   )�I��   � �   +�33� +�3�/�	 +� 
�3��2�/� ֱ
+�+�6����� +
�.�.�������+�+�.....�@��99 �	�9� �99��9013!327#"&5467#!!')���]p1&2<Ko_p|U�w�Il�Q�(J��I.}3%-x'aSI�$~��v����    A�I/= ) 2 � �'  +�-�  +�#  +� +��/� +�1'
���3/� ֱ*
+�4+�* �	99��'-$9�0�#%99��"999 �'�999�-�$9�1� 99��9��9014$!54#"'632327#"&5467#'##"&%326= AK6Ȥ�@����]q2%2:Lo^q{V�	mɜ�MG?Et��.��
���+�#RR��PO#�4(�M��   N�� 8   = �  +�� +�	��/� ֱ
���+�#RR��PO#�4(�����    ����8    W �
  +�	� +�	�� /� ֱ
� 9��9��901763  %"373#27654'&#"�������0��5�xp���p\���}}�b>�!�������eG����������uw
� +�!�/�&3�*/� ֱ
 ���yE�4��������ON99}{b??������  ����   y �  +�	� +�	� 
�3�
�2�/�ְ2�
+�@	+�
+�@ 	+��+�	
� +�%�/�3�	 +�
22�
+�@	+�!
+�@!	+��
�8y�̄��������1���uz{b~�    ��Ic�  q �   +�	�  +� +��/� +� 
���/� ֱ	
+�
+�@	+�@	+�@	+�+ � �99013!!!!!327#"&5467����2��t]r1&2<Lo^q|U�����������.}3%-x'aSI�$     H�RV= % , � �#  +��  +� +�*�/� +�&	#
�&��-/�ִ
+�
+�@ 	+��'+�
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!373#����2��t���wq��������������8����    H��V�   & \ �  +�� +�#�

���'/�ֱ
+�@ 	+�(+��	$9 ��9�
�9�� 90147632 !327# '&373#!4'&#"H����
/� ֱ
+�@	+�+� �	999 013!!!�Q^�_�^����c��&��    �  �x   ' �   +�/�/� ֱ
+�@	+��+�	
/� ֱ
+�@		+�@		+�
+�@
���?��       �	  7 �
  +�/�/�
ְ2�	

+�@		+�
	
+�@
	+�

�999 � �99013!3&!! '&'#!��aeo6����HHM��_���������v��I���������:&��   �  ��   Y �  +�	3�  +� +�
+�	
�$9�	�9 � 

�999 � �99013!3&!! '&'#373#��aeo6����HHM �xq����������v��I���������:8����    �  ��   \ �  +�	3�  +� +�
+�	
�$9�	�9 � 
� +�
� /�!3�	�"2�%/� ֱ
� +�
� +�!
�
���$/� ֱ
2�
+�@		+�@
�901 !2!!!!!!"  327&#"N�Wr]q��2��s��4WhV���le��_=Ep���]�

�)��0/� ֱ
���)/� ֱ

'�\3*1]���u�7��%�mt��j������M��  �  �8    + { �   +�3� +�)�! 
���,/� ֱ
9:`aj  p  #�   L �  +� +�
99 ��	
9901373#!3>32&#"!4p�us����!

'�\3*1]����������mt��j�����    [��c8 & * l �%  +�� +���+/�ֱ
(*$9�!�)$9 �%� 9��!$9��9017327654&'$476!2&#"!&![F��o?>p��]�� �L��f:901��^_�������`��F`**JBY/�*�}|L��H'(>9*(BHij��~=��     J���� " & m �!  +�� +���'/�
(*,-$9�!�+$9 �%� 9��!$9��9017327654&'$476!2&#"!&373#[F��o?>p��]�� �L��f:901��^_������xq���F`**JBY/�*�}|L��H'(>9*(BHij��~O����  J���� " ) p �!  +�� +���*/�
����    !  �8   G �  +� +� �2�/�ֱ
+�@	+�
+�@ 	+�+��	
+�@		+�2�	
+�@ 	+�	�+�
� +�
3�/�# +�+/� +�./� ֱ
+��'+�
+��	+�
3�!/�( +�0/� +�3/� ֱ
+��	+�
+��
� +�
3�/�3�	�2�/� ֱ
3�/� ֱ
  ( w �	  +�  +�3�/�&3��2�)/�	ֱ

2�����-,B;**S<A--�++?>*++)?@U���������[e>-++->=W,+=?,*+->>++U   6  �8   4 �   +�	� +���/�+ �	 �9��99��901355!!!!6��mL�:���`�����"��&��  0  ��   2 �   +�
� +�
��/�+ � �9��
� +�� +�
��/�ִ
� +�
��/�+ � �9��
22�/���/�+�6�?��~ +
�.��������+�
+��+�?r�� +�+� � �#9 �...�
.......�@ �� 9��9�	�9��9017267#53!2&#"3##"?/18`>+��6�pG438Bd��5[��{���el�#�]���d��m      ���  + � /�3� +�/� ִ
+��+�
+�+��	99 �� 99014632#"&732654&#"��ut��os��8+-87,.7eazxc\yy\)>=,.<=   �z�  T � +� +��
+�@
+��	+�

+�+�	�
  . �	/� +� +�/� ִ
+�@%$	+�2�<%
+�@< 	+�2�>+�%<�!"999 � +�09��901535465#53676$32.#"!!!!32>7#".'.'z|�*q_�f�?@,�JR�4!5��\��%7�W'LD769�nS��y0*=��$ ��wju'�";>E)� "�.G:7
33�  +�2� 
+�@ 	+�22� /�ִ
+�@	+�
+�@ 	+��+�
+��+�
�
.�������=�� +
�

6
�`��$���
<x��(\���.Lh��V�
h�6z�D`�f�.p�$t�@p�.J�`�H�����j��� R �!6!�"R"�#�$$�$�% %n%�&"&N&~&�'t'�(<(�)2)�*D*�*�+2+�+�,h,�-f-�.�/T00�101�22x3$3N3z3�44�4�5V5�6N6�7X7�88�9"9^9�:j;
;^;�<<b<�=P=�>J>�?D?�@ @6@`@�@�A"AVA�BBvB�CDC�D:D�ENE�F FrF�GdG�H\H�II�J(J�J�KxK�K�LPL�L�M2M�M�N0N|N|N|N|N|N|N|N|N|N|N|N|N�N�N�N�N�OO&OJOzO�O�PPhPhP�P�P�QDRR"      � B            b        �  	   �    	   �  	   �  	  < �  	  &  	  B  	  "`  	 �  	  4�  	 	 B�  	 

�  	  2  	  26  	  Hh  	 � �  	 � 0� C o p y r i g h t   1 9 9 2 - 2 0 0 3   A d o b e   S y s t e m s   I n c o r p o r a t e d .   A l l   R i g h t s   R e s e r v e d .   U . S .   P a t e n t   D e s .   4 5 4 , 5 8 2 . M y r i a d   W e b   P r o B o l d 0 0 1 . 0 1 4 ; A D B E ; M y r i a d W e b P r o - B o l d M y r i a d   W e b   P r o   B o l d V e r s i o n   0 0 1 . 0 1 4 M y r i a d W e b P r o - B o l d M y r i a d   i s   e i t h e r   a   r e g i s t e r e d   t r a d e m a r k   o r   a   t r a d e m a r k   o f   A d o b e   S y s t e m s   I n c o r p o r a t e d   i n   t h e   U n i t e d   S t a t e s   a n d / o r   o t h e r   c o u n t r i e s . A d o b e   S y s t e m s   I n c o r p o r a t e d R o b e r t   S l i m b a c h   a n d   C a r o l   T w o m b l y M y r i a d   i s   a n   A d o b e   O r i g i n a l s   t y p e f a c e   d e s i g n e d   b y   R o b e r t   S l i m b a c h   a n d   C a r o l   T w o m b l y   i n   1 9 9 2 .   M y r i a d   i s   a   s a n s   s e r i f   d e s i g n   t h a t   w o r k s   w e l l   a s   a   t e x t   f a c e   a s   w e l l   a s   p r o v i d i n g   f l e x i b i l i t y   f o r   f i l l i n g   d i s p l a y   n e e d s .   M y r i a d   W e b   h a s   b e e n   o p t i m i z e d   f o r   o n s c r e e n   u s e . h t t p : / / w w w . a d o b e . c o m / t y p e h t t p : / / w w w . a d o b e . c o m / t y p e h t t p : / / w w w . a d o b e . c o m / t y p e / l e g a l . h t m l W e b f o n t   1 . 0 T h u   J u n     7   0 7 : 1 5 : 4 9   2 0 1 2       �4 f                     �         	 
   

Zdotaccent
zdotaccentuni2000uni2001uni2002uni2003uni2004uni2005uni2006uni2007uni2008uni2009uni200Auni2010uni2011
figuredashuni202Funi205FEurouniE000 ����� K�PX��Y�F+X!�YK�RX!��Y�+\X � E�+D� E�  +�+D� E�"+�+D� E�  +�+D� E�[+�+D� E�8+�+D�	 E� C +�+D�
 E�	'+�+D� E� 
 +�+D� E�++�+D�
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[10]=<<<'PACKAGER_BIN'
wOFF     px     �@                       FFTM  �      TŮGDEF  �   (   ,J GPOS  �  �  |��GSUB  �   �  `Shz3OS/2  	�   [   `��=�cmap  	�    ����`cvt   �   2   2�Qfpgm  $  �  eS�/�gasp  
� �������Î4W�R�x�{ �R�����Oi�7C�v�&N�����{U/q��?~�,{��&��J�t��&���DE<F�$q�h�A��3҄g3ֆ��T��8N�S�~Hl�,��ZYÝ��*U���:h�`���#X�z�ٙ��wq��C�1���;�dU&{�Z�u�.C�U�C���P'F�Q���	�]�Y����ƻ�>����C�j` uQ����\�d5�Mv�å	.Mpi���{y�<���6��j��QPL�R= ]�:"�cZ��R,,�=�JBdjp���Y}�} ��#�f���'�u>C���b���QVZڇA3e'�Ka\��x���ʽ��3�!���3�=�wZ��_�b��5P��j;k�����r��
rT7��еM��3dT���!��w�x���5<��s3h�"�E@��s �
7�����Z�.�_�w�T�l�cӑ����(�_����R8mD�-�6l;槲Ԃ�e���6�0�;�i� �Aŷs!���<�	3�9Ƀ��CV�x:��TO�q��7���)�}=��,(i��^q�r^�*��FKg�f�!�P5�jucr
:�ͮ0�%V7����͗Cv�̭�����3��=�v3������2�	�S�eJ�ր�'����]��*�.���;�?�[�跧]R�4ȕ�o�e|�R|�3ɶH������d
�k��<�<AB�]�n�CA  xڅ�=
�@����,BLbI�E�m!��,�U���ųx��9�c�!`1o�7߼( },q�^o�~i��p裮)	��I���Z�;��4�
�ڲ���bq �`�!@*�����a�=*�p�
���L8�!/���$E�a�	i�q��f��`*���oZ�"F�a'��d4ˡ��+_��V   x�c`b�ô�����u�1�l��ː��������������������� �.N�

�D��00��0�)00Lɱ��nR
, c�; xڵ�yP�aǿϯ�H(�U+o��r�K)�r�#��C9��U��>ƙ[��"�`������Ye3�&9���M͚�w��>�����������I���?^C��g��P�2T�5��Z��sԡ�hF+�\ɓ|�H�FCq�H)�AyT�<U�J�p^�G�	���(�E��^�L(���^�A��%�&�H���IK
�P
�h��J�4�r�!<�V�:膿t����![���Z�˷�����*��\�%l�|����LN�T^�Il�H���ɮ�6ժ�Q��W���jQ��(�U��o��r�#�)ʿ
�:mz،����fϙ;/*z����b/�]�,δ|E|B"6oٖ]����#�N/<u���s��/^�T\r��j�5 9�qx��_���u_�X��,ݸx�MkNJߴ�񓏟�|m�T��ϖm=Mߐ�=#'+7/Ǯ��y��~Կ�
����;�4���:	�!�qK��ͺ�����b00����.?�R��4�j˰��Ѽ�3��4@Skm���!��qK�˦�6����$���tUS�����]���`�*́��Vy&ҷ$�,
9�����@�HƼIJ;ㆵƑ���6O��<�Mmo��Y�w�K:�Ȇ�b;b)�	DBFU��Ͻ,�R��@��������D<��u1Vz~���ˊ�V�΋Bwo�j��)��^ξ���Ac�����J��<,�4hCz7z���ꈫ�>�'ӿ�Z     �� xڼ}|TU������MMO&�ɐL���$T��4	Ho�H/bQPl�A��Zߛ�[��PtU��.�H����?��7�	d���n��$���{�=������#�ɷ��8����&��$�������"DvFenwRo�bD��Ů猑���9ň�&��������jk��Q�fkU$Q�ɥ���zN�
�K��w�QW]���}�������`�����dl��<v���c,�Mj+��<7L�I�������BT�Ǔ���s�XR���l����$o���:�T�.�)&X����Vҽ~*��a$R�2YJ*z����=�kO���q��*.�+$ӸD��������E[<���<I���ॼ�L�-����c?ћ�6��!�0Z���D.��9���l��N�K��g��HK_��i1z} ����!�4��0�7�)"{����ʨ��\��tӴŜ7b~�i�[��l�s�H�@���;|l�)�|�����wk�y��N�]��=��O�*���gn�}�R��R���B|]�����)!dy��UG�O�Q����q�~y���n�������׾T����:��`rO�����r��o� +w��Y�^�_o��S]IV���_9�]x��8I���&N.�*��5Q* ��!1*�����*�b	�_wH&`�nQٺ[�F�q*! �K�06�br�S�;����9V`+3��WJB��zIί��\	���Y_(�qA��Wj!֜�����y��yp��ښ��p������{}~C��X����N���)��<7m��+v�xu�GϮ=�G&L��ן���G��G��������koz/��vc߃�H������g7��i�_o[8N��9�߰@w'�y�Õr=8�K� �����q�h4Y�X�QN4��=Ѥ�eň����`�:��i�gz�����YةT�� }��2	 K�=�*�^	�Y�r��((ɦ���%WKn \�Py
�	g���&C~�<�����$n"?���Q�/�n�໇�7wd���
@z*a`�����H���k �u�2|�AIڌ�;�.[\	Gv��$�0����娴�,�PC��)
z���HBH��Ǜ���O��¤��?��^�#��/��ߐ���W�8߅�f�=}P�����Yo\y��}�m��^�y���WwL��s��SW
�����%9�8~��G�h#��!r�,RoQ��W�����+<|��<\B�.A�gE�lFO��F�s��~����!(���d̾�//{�2E����W��n�V��� �d�U�$#����j0��. �Uyq��y�@?=%��3<�K���rQِ�H�.� J3"�4�Fe�n��%M�<���Ɍ?6L��ل͜)�ش������4������6�!��I>R�;�b�/�Ʉ��#�w�
$
�'E���`�L������r�xaN
ܙ\���qʱ�BSp*V�3�c��a��E�8en�"���W8�j<�lE⤊��Zݬ/=�1������r�˝ʨQ�V�
ZX����c
H�@��ɥģn՟��8�\<{%��4�ߙ@����J�B+:���(��t�Z��d/�����"�)
rB��[A�9q�U�fXll��hȎ���	G]��Z����'/��,�Z��'�w�+ ^\���D4 Bj؃
t^4�@I�i-\��Ko�n�-gl�c�3��	�C�?�>���qp��Q��<���g��yym�t�Ϯ��3A;�p���̹�������p��y�RwT6햭1�D	���
�6�D
w�O��'�_S�|{�CG�@&���hڊx��+��
�����p!��W�y�� W��58�5�P\���놏���H�:��ٌh�X2=�����5>yθ�yj;Z-^�.�ql�3	GG�Q�3#q	�E҇�
A/�w��i�Z�&{�����#���~��\���p�i0J��Ĩ?�x�:�{|5�S�#Ni۹�����ܮ�5ܔZ�y
edy�|�޲L<�n2bu7q��C��
�
���=�7pZ��Y�V�2��\��/�N��elMxlJ�ɼ\�`�(yz8AaJ�hȋ�.'��m�
�nh��p
h�(z?�̸N��3��b��#��%����4�@4H��"�F���X\w�%,�c�^!z2�.�`�&u�:惖���ޛ�-��Ɵ?#������Dt��v����3c֏SF?da���#�u�'/��%�H�]�h6
i��N��a�5�8��=�W��%����4��n���Fv��[s���|�$\Q}�o�����kd
y�T���ꑽ��Gb�������°��`/̰�a��d3i�r�2W�g��䴤��6��}�q�=�}���� �;�j���O8L܇��ֈЩ�ԗ�u�9Ģ'�x`�w6�l=��14�>D�x��J^�֤�r��C��:����J�s꽛,&�.�4W]sZ�7O��^�[��|��m~��)��a~��GN��(|����>��s�:��t��]|n�'Z�������-|���i[ԟڷ2��Y�F�*��hV����I�ۏ����s�x�crz�s�.�����`tP�������OR�pR�ݨG��v+�TE�T�b�1��·D����&�{������Kc��1�����T�
bz��*>��	�YPtu�id�DF�O�?�{
�.vh0?��n�yd/|��2�L�8P�_��;�;��µQA�K��x	;���	S*�cdgS³)�Û$��a�>���wD~����e��j����6b�Y�pc�l���4.��l\w
�k�9(��T\vm	�@���3N�%g�{T/��W^�\2}(��~K�����/����qi�Ѫa�Oa�(�
:S*�O�=I����x�-�8���^�(1��-��M�{f�ڳ��xAC���\\���z�:�K�(��)e�@��]u� �)�'3	y��d"y��S��=&�
j�wՃ[FE�9(~G��)2�a�����9���m���V?��I
�`�n��]����mkM:�m���a�^4ɜ4� 'F�ъ0Ê����;�m!>w�4<� �ЕM֓�ԙ��R��73:`��<����\@��^E�	�[0ziy:�����cXfMP�2+3����1:.kZ{1c��4�bX�x�US
���ә�q�=��* ��맰{�`
P�|��>�H��ÿ�>�]b	����y"/�Lk��3�̂c��YG>��(�H�d��}����$x��k��G"����Z�b���.�{ ��΋_*3�?V/��$ªY�;�L=ς�r<�U�����T.�~�S���h�0Z|,g���0i�������ƭ�P�a��E�B�R�Ԏ���La�P]�R�,�(?���/_�X<?�n��9��<��6�E���ϔ�C����%�;Utfc�������z;��A�1j���YRv'b0�|����K��(nu`,$�:|�Ǹ��������C7�,u���fM��-9��:MW�ͭ͙�]7jBC�FV@�}��/By��B��5$�������nm/n�\#4������s� G���5s�X����ԉl�ʆ��D��)�9�
p�xm.:
^���p�'�@f���T�T�y�7$�Ϥ*�ag����ʙ�\���񎌐5�L.v.w����;	����@�̺�V���,G�^"cԋ՛o*q���*xRm���{��mW���w^{��7�/�u���FX�<����Sy)w����g�.P����G??L���!k^����ju$y	L�?�bV������K/��\�^��$G��e���ss��5�]`J�c�����ȱ �Ι2pF�a_s��l�}F.S-ꓠr�YC~lK��Ώg8c�]j�U��j�tԾe�5����E��e�K6Գ�H c�^�E���C�{��%���ķ��XB�~�Gl�88���������
"���:�1�uc��Ns��eD�F�!c�ǥ �9��w�jc�Y[6�l$+��*N�����/�L8 �AO^�I^���s���vA�v(�[�Yl820�g�b�a��� ���o@l8���s�߉���t���\����?SF��I��}�_��]��,�7��/�.�^�V��5a!��&�"��~�agڊ���v �5s���lz�`�Kqy�xG5fw��#�%M4�S�!�0��I N�V��m E����������/����4���^"gl:m��<�z�=���L��3��{�;�Gz���<��f+����&�)��q���@��&��Q��xfT����U%h�ES[ͩϑ�)�s�AR,�T�P/"�
4(�N�ފ���0&1s)&�R�dC��7��[u�Y����|ΰUK�ϻ�7sGH�E�i�������!���՛-�dڊ��<���
V$��J�����[�N�X0MJ���bQ�x�B����\R��*�ؼ�����g�{Θ�f�k8��g��m��G�C���3��q���Wk`�>������������s|'^�����ܦ.%��'�k���6�'�J�~5�r����x�|�'���>?�xQ/�e���������S%p�F�q���\Q@-q%����� -�@su[�Z��"Z��PS�	5��dڪy���&�}	�Q�����KSV��a�s7ū>|�U���OU�5t��3b��G��{��/�o�{�>�l��!�.\0��N��M�6�&�̓q*��i���ި��M��S1��M@�S�&{����mX"'�g,�ӒW��Ӹ죖��'��<�Э���Y�z�����l������N�����~���Rʌ�2�N.-zj4
H��CB�U�<C��g�L��T��dxչ�s/�t��������'02v�����8�~���&�z�5W�{�tjc M-��Bn��/)FC�@�LM^�c1*4��TD��`��S�q8�z����b�ֱ�//�`���U֝���d����]�|$��DXw�r����l��~ؐ���8������Wҵ�g92�(E�-5b;��9l�*r�)��҉g�ҕ2�V�l�?!�-�1�&����.ѫ/[λ�}?�́��&��5"G G�`��A����,�1�����Ր�v��P�E��P��b�&�*X��#@c�r34M��hjP�RK3]�,�����7
d�^��{�g�+1����k'w�;�4˗_?�<�o��MS�����w{;�I��;~���-֖jlqڬ�Hڇ�ۺ��rI�=m~s�<,���~��0�yѢ�q��)|��9�O�{����IJ"F������C�7�������!����h�K��
u1Zw���	1�|�C�gr�v%�b��tu���2Iئ�?�Þ�gϮ�x���]�lfٸ�>��{��7Ied�b�߻ݳ��;K.���A!�b�İx��N�P�5YUHk��8�̂����nf�G�VJXhϠ�Â
0%��/R���g"իnZ�L���0�SC���ܻCu��>w3+A��G&���/��q�eҭR�>⮢�=������ݩ���}�M4�z�mq3���M�7�a�\�0i"��AMb�{��S̚�a��H�l|�xׯϨQ�}ǒ��45�5�_c���ils߆����mӯa�X�W���.�]F{�*�k9�y8��h��=*�&s�#��G�lU���̚���D��ς��?,~��h��4�,I[M�''�,B�K#�r
٭zN�[��ݜ�����=��a�b1�Dv>c@� ��x���VW�ߩߪ�Ǥ	顾��cu���
/q:@�����\��wd�z������o+"�թ�dr/���&�S��8w
i�Z�DW�=�x5��iW*Y�j�y8�<�ɱ�v�\s�΀HKV�g�1�©t�
��jU۪Zت��k�����Fc�R�����%�`�"�D��r��EϹ�EX�+�\rV%��q\�V]��{b���������1�q
)|�u���{�u��K?ް�6���c�O�x��ӭV�R��rvM݅���U��uR��}�m�KR���_}u������Bǐ1�E��	�%�� �Æ��]��M�w�fu��Aj՟�����$�4>�3��@��O�+*�v�.3k5�6]�PS`�� FS��ẸA���E��F���=`�m�T\��������}f�g=9���R|VgBc��%��>B�#/�zh�p�S<��k����^�Zn�FrQ/�^�6�1��vZ�́�䢨
[t����DMHk9��	˹����#�H%U�@�l� `�1;����Ӱ���𗍮�{��3����n^s������8�e�:���͓'�V����g���,�^Z7l�� 	��.*���r��Q9��r��E�=]9lw���X9l�k��6�r���*vY���d�X)�J��t
��*#��x�	�*�Zp&��E_��B���l-�Xu�Vu?s��!�*}�QF�;R����`uMyxr����+�c K؅n[�h�)�Yi4�Q�,�X��
�h.͸[��l18���u�v3�����|#C��$��Hf�وdV��d����!I�]�%9QD�('SZ�'��Q.e
 QL���V��sP���D`b����"�8�*�U�M6-"���j]���D���R����0߿��(߿��:�ԇ��T��B��w�?���?���f>��ߡ�F�;J���%��X#x�94�E�!�Y�H�mg	�[���+����KI��-x��,́�����?�����t���h6U8ee�����מ�n�'�7��.�}]{٠�[��Pѧ�L�h��O��.�Hu�c����CQ�J�)��
�XI*�b4]l�I��d/�c��ѱ\h1���9l�1{l�x�h��Wr0�V@ו�״>D����}��7��16Rޯ!RV���c_�.�0�贻<�{�;p�1" �1���e96W3-�S]XHR̪���H����2'�ʒ��YaGO	��G���2	��.����xp���;%�[vlI��6��L�N�Q]'��at�hB�~��Q� �yt'ʕWj�(̖�j�$�wh_
�V?���8��E��Z��;��0��9Fj������|l�4j-*u��"�Or���p)
��>
�~�ۻ�W啗w���*��B�F��� �����#瞋=+~��;س��?�?���� >�n\YwM&=���:�):�;��5_>'1� G�a�\!Б�>>�4`��X:��	h}�įǐ��{��~�v�;��9]�Q�!����_Dݓ�'���р��KN��n�܏�)=�n:���e�"x���ًeR�tv�z8q����lrZ�r�V��*�X���iڕ
���B��D���^�x[��0tݢ���gy��'j���s����X��E庸 ��i��ip,)���A�$��Y��0p� 8�����:�%��`w'��Y
��IJ-4��z¤�����P,�f�����G�P����JLR��6�"\ZG�)@�d�kH%��"��C�޺e\Y��SF��i��{Ox�4��{������7�鍏�����G�H�*yjq����m}��h���� h���iq�R�kMX���`mM��,+8~�5
����� O��=��?G��m�:� ��{�C������Cp��<s%�H+�r��4Q�@GY�)��V��zQ����H��;�����(�?�K����@>��x`o��P���Y8�Α�]p== �䥭q"&�d-Fm�W'(3���<��/���ԁ�Ef�x��qM�{�V,'BWtOE�?���˻��ݙ�X�0~0��Ÿ~�c�(W ʅ(���
�,j�*�
���K��"��{`�������H#J�ʒ��8 �TY��P*#O��5���k*/ٯ)���**��64��m�0���o�W��W+Rx��jx��G����ᒵ�������a�~��ޖ�2�.��XGֽ�bƿ��6�����P#�q�I��4��6�֟wR]��H�q����'/k�,=唵�6�A�}R]yU~nn^ee]רo�z	��g�����
��h/)�d�4�nR����u����5�E��\+�h�h :�g@U���
���Pc�c}�d13=l��nҺZ����b?i��Zz|�A�ܚn+=k�*��t�/c�䎊���=�y��H����I�5���i����Ҿ��SO�ջM�@ӄ�i����&�5UwCiʢ4e�iӡh*�ؙ(�	�")�Ј:Q�,��+��%�\AI"Ow�P��D�chm��+�mW�h+��"mȰ�BF[N����t��_����R�h��wM�Ȍ��Ρ�f��I��Vr}�;2(�E�cA��#�1�CHpCT��"�bVLW紖=+E�P�R(J�F��0Rl�)�UR�-�SW�#CmS��,��N�Ν�s
�����0{���?��ץp#�"����/�����R ����3�����MZsGs@,�D:�҉��	�Zj)�y���vǾ�d8Nb8<^�ŞP�Ύ��R��'�W��WwR��/]�k��]��)�D����������p��۶�V�y�g���<��Jgky%�tʾ�b�ʏ�	���%�Q�%�	3K����R�:e��K�u��[d�ّHߦ��(�h]uǶ6��u՝w�g���G`N鮎T?�a�?���	�D09?��ڏ�S-��Se.��F�FS٦�V����?�5�ySͬ�R��oR���I��N����Xݥ�Щ�uQ���u	�m|%3�����<d���C���>}J�[�j��֢�����|M�N�K����$�u�G<�{���ׂڸ*��{�%�wޥ>u���{�&u���K��Ӈ��o�x�l��En�]��\�$;nl�u�f�ەZwVǺ�;�᤭��uc�nR���%�
`�Y����\3�S��M�N�y(SO�WޞZ4o`'7s�^����=;��B\{0=;��c(p�%�3�0ϓ��N���P��l��I��ԻF��O@�_��x�7j*��=x��e}�FG��h�'����>%��|�|�I���Dj{PjK��� :�YrDS��%N��i#��9�T���\[Dɒfӆ+�]�@��lw
�<��Ţ���q�z�T��{2�V��4N��ӛ�N��s�(Rŀ��i���Ҵ����!$}R��G!�w~&Q�
C�P�$j�V�Ǭ����[�q�aF�8���'�d�;��
ző��r�÷�� ��AG"��~���n!��H߆�*ޜ�i�-%��ڬ���q�i��������s;�k}�A-U���W�m���]�%�p`@v�:qFQ��b�JiͬK���SDh�ȣ��$Q!�ӥ�uQ2��Qo���E3��E=p׭s�ϙ�<P&�~�A�/_��ꐎw�Ijzm�����گ���|�"��ϓWBIuj��7N;�g9�g��3Y&�p�NcL|�v����N<��?JE͂�iD���FSUv��
�š�WIw�Ն3ڎ�X���={����3�BWB�A��I7!/[������4`�	V��b���ʶ�mP'C�I]�@.�Ajԟ��Bؕ��2������������^l����Oo�QrN�M\wE�vt�/>>E۶1��ф�A���;�*�"�Ǖb;�X��D�(`4�㏦����SHViUc�H�i�vX���'��)+�ɞ�Q��+8n���0R��T!/T��m�(//����
!q��(�s���Y7����������;uq���E��hd�r�{�pl�9��z���̦�1g�0�ܼ����rqeAA��7�3�\�;�Kd��t�+E�;�c��YO�<x��l�BP�#9qR��"�t��"�t�
*��t�ĈwMU�����
�����V��9յu�T�V�>qA��X���'/����]&C���jy<T�uax����dN�s���bTl �%����J�V=�w9����yQ��4)�����)6�x��
��~�-�0���q�3F���-ԌR<��� ��)��c=a���.D���z��Kq�s�NDӧl������	N\�ze�?i�%c�8�p@����Bx�͡�I�<��o�I�S�vs�C�juLBkJ7a5AOpx������b_t��2NjC=��ΰ}��3��T,���{�����c�8�=�;Y\���j�L�7`��v~z"`�3��M���\'��0(
G������A?L����j�p2zt�\@r�\�޽)r HF�\�f��<(��4e&����� �g��
ϸ�..�)yr߅Z���8�ꞻ��LL?��┶.0-Jc�.�������c�f�>>��.]���ϻ�Wܻc5Dv�V�N�e��O��-���|qC�/nE_��&�����l6�)�:,�B����E�Ͱ�!�zS���^x����'�f���߳"^~�^1�"��v�����.]fKߙ�_���ܠ�ʸk��t�r�,��#�P�(���/8������Y�G��KXi %�C[ݕR��
Kr����l� 2)���ARJ�R�s��M���ײT,9Ej���0��:ϝ\�����wΰ��z�O�w��tX�O���ʍ;&Pޱ���3���/�dZS���?r��(�V���u�>�EZݠˤM��2�&	gՁfˏ+��*���M;���9���N������ćv����K�ٛ^'��ԥg⛼��t�;Rw_tyi=�D|�"�>:�z3��Hr��j5���yS��C?Lk"q�-~&1�Ϩ/���Q�z���bi��{��T�L��e�M q�Ȩ�H�
�h�9ƒ��XB�	}	�	�&i��`��^ȥT�^I��!�fr,�)H��3#�$/�u�����v6��I72|��γG�_�f�&=/�}���;�VwL]z1�>Jg����vM��K�lX2/0�}Ѥ�wf�I~F�r?t�8�7g۳���;��c�	��;�u���3�ѽ��q�GE{i��N��&SՑt�j���n�n��y�R:X��)5q�j)�"��`�l�D�'�c�#�f�Ua�g!��V!,G�	Nu�[����R0��*�Y�tBC���,V�Љ�:�f�3��t���f�{��'�:�Θ.�f#<�g�$5���oޙ�5��-[����;�]�Ԕ����X��K雿ʉ���E{>�bމ2��6S1�{_�]Ǚ���ܬb��fK*�7��3:��RV~R��g�$�H�W�
��0��[�X�6|N�
�6�ґsz:��6��\(��C0�FiS���a�<F����O젦m�}�����4m�2sf D�.�sj�L���Y혦zDS���s����D�űL3�}?���a��T�I���Nh�u�hKMdg%a�� m�a\���G5uxo�WG��?D��u?�m��˅�������M�Rzn�t��r�wQ�0�ԝ��s�4ɸp?�΋�T�i��Y�������?\ڞG�N�8��q��]܂��E7S�c)'�c�(%y�ח������g�,�W	]�&��,�+��F�@*���$�;�5����9GMtm�i�7���'�J�ax���}�qZz��|W����<����y'������[�d�rF����ʡ�2�@�}R������}.���ǅ?-�3��E)~���?_��5�5�ړ�&� ��h2��]غg��?���]�WS'�?�G���w��?N ��Z��X�.٣Z�J�֩-b~a��D����&0�a'j��s+����m��/���Am�/.��I�S�ܘ.3�%]eTC�2�[iF�M)2���`�	r�@��tJ� q��7�k�齡I>?:�����>�>#��q���}X�/u����[�)�kؽ���@����sk�b���g��	�.�(`�es,�(���P�;l��S�**�+C�|ZB �}.ڄ�X0��������^���>
���]�U��v�a�Ҽh���@3�����y�u�:��<�{r�i����"��f鰢,VB6������w����)Ù`�qݸ(��p�4�H�.Fk1d!�TZ[�c�Tߚ,���������|�����dA�(�+o�F��\ڪ7J�,{�+:as{XY��+�x'��ù���RJ�-8;vt=aQX��<�Z���k\�V�5|���}���n^_u���^����2��3�-�1�����:�y�� ��>�9u�7�����;r۳�����Gn��'-�z�U��ٴ��&����Yņ�dV�9�f����Ӯ$���ɐ����V�o�Z�������tԵG_��T��|���N]�Egy�Z�}�Pl�ʑ^�u����;nҊW/��nŠ�x������̟���i�2�Ԫ��K��{M�:�X��0y6?d�,�!ǝ �?z�4��,������x�tU���I/Ք�6Sz��t��/Z�c_����tڗ2ܗ@ǾT��%@��Tۗ�Ե�9�mq����9����)�=m{ʴI��=��5��]:�)��|�{��No��2m7k;{�@�#= 1��xņ��
I��G9X5�Uhu��n&��ӣ=��NQ3�:����ݬ,,�������re���2���{Uʕc�2����I��C1��ִ�5`L6G�fc`��i(l�`vz�Q;�jq����!-��$p7U<N6P�^�V���-����ئPzi[S#���΍�[�z��l}s��͛����(�������S��-�/pwk�/���y�7�~�
�o舑���?�@�\��h���5wն;u�^�U�m(I�]��9�j3��.wn���`:���!��M�z��<ݟ����i�5��7�ǫ���*��ޭ�~�����͑�����ٹl2��-c���Jn~�{\��G���&m�+*;�9��f�5�>��60��$��p&�n3���dW�\��>G�}N�>��1�@w:�vz�ti����Vk��D��o���>�v��Z̟gwj��vuK��/n)�nK�2���i��֪�\�`,���;.0�7h��0�����|�BͶ�u1�� *�:y¾�T~G,�ΰ��e��î*'��*9��'l.4Mp�f>�U�b^,'��S�S#0lkĥ7��������SɎa�?���1�?�)?�?�Q2룏G�-=��rN� N��.zvs�8�@Q����uH�f���Y{��э�0\D:r�Q	ҰX���� ��J����sL���k-=�rՒޙ�WV���*��y��I��=u²>}Ɨ���G*�Z��K��c����wc`tO��M�����O��C���BZ�V�ܚQ���VR!�ѫ��R�;���OT�ө������R�%?�k�,����O��.R����;!'��r�::�&��

��^�>�_�F9��OT��1�C���jQ��Ԣ����>֣�����HO]�c��6R���)�z�Gt����V�Eou;NUS�_V5iD���l0p�)�������,mb�u�u-W�G�"���첼�C�E5T�z��pf�׺q�:w����8���&Xkz�ۈ���Dq�$��ЗY�"�1L:�sGJ��͏-��������'��չ�}��g`e6��3�7�g���<��87�:�����9�j�������y�����=�Wx.R7Q���'���Ԑ@�����e��IHo��Ӯ�0��������Ph����l �l�94��������x5E��!E�X�?��6z4�xA�Sda0�nm�
�d+<��������Rs�h,�JКn�s-A�T�����{P����zg�AoqGZ������=���M��
�oi�§	��q�NB�����l��?}�q����,[#zԊdb�D+��_���j�����K�6To {���3��=zNi�G���V�{�����pM���u������6������sO|~�:cӳs��m������O�)7�.J1 �}�4<N{7%ւ�ɇ8�zDym�x#��)8O~h�To�����g���F���lS�3��o]�tɕk�/�vc�HeϺ��:�̩_V�E`4TT�i@:���b�{�o��'K�zAr�6�~����F�t��s�[ 3�k��:i��y32�Y�:��}�U��h>�`�A4ݾs����7?�.���؝�� M�'��b��³d�Ν��3�:ٿ3L�]�p��}��9���,Cd}��pν����]�M�ܳkV�22��$�_��l������"�����z�sޟ�;�.�[�Ӕ�<�;���@z��zI)POH�z���^R�+$!����%H>Y�KA��fBҋI���f��U
�ogW��������of?2�cݳ	�rwj�� ���֖Im1;��
��ދ��������HD��2�����<�+Z�2σޡ��˂��>���k+���r88�;�;�qӆ:�9�þ���m���A�����ݦ��V���bߡ�/����2��h+q��
��)E�mz*���Ţ=�C�LLM��X*���=���Ҷ̍`��J�l��;Z�N�G��yC$�~�ד�8w!�=)������4h��s��,��Tꯦ ��T֫�/��׼�~���˂��LFv�X^Q���[��)I�7�Ti�Q\��,���� =^,�D��}� V�I�A��=������+)Hŏ`3!���1!7�n 8Zq�a"��c��t������$<��n���~�^��S��3<��ӯ���x�w�h�n|�����������4W���+�|��oskٱ�Dq�͛�w7E�,v�71�=r�5<z���W�-rz��8���o&�N~�\�tF2*Z�A��S���GWK��ʣ䱽۫6�6a}ţ�t7m|�2#�Ȍ��˱I��R�����Wˋ��N�R����zcD��2?+s��A~5:c�����YZ�R���w?��#Yn`�%
�X��Ro�<����
���nB�>��ٙy������/MRk�:���
_�Ÿ�����+��7��
:伳��ً��$�o�Lm��8��5�Nd�H@N�&�d��SD�Y2I��hڧh�u6E���f�er��ߜ;�4Bg)�c�\��н��u�s�͞D�����~�Q�ͳ�ȸ�_A��Ț�ǒ��Qj��u}��t��=�M�����9��.��~��x&���ԝhY��m�;��\o��<'g��h;��C�1ּ~��������O���VUTO�L�ߞ�Q��7/Q�E�Y_�w]< 
{�������rj���XΪ	~��q���-s��<�w��S x�c`�����_L�͘C�k��0�a�cqbI`��r�U�Ն�����v6v�Mri8�q<��Ǚ�e�5�[�;�{�;�	<'x������V�^����;�o¿@�K�F�B`��A
��WQ/|�x
�1�J�T1���b6s�f.5�2��Ա��Գ��,a)
���[\�
�e��"��uvMi��iFH�5**}FH۽�#��ȫn��j�g�����Z�AE�
uE�
�^��ͦ��5��ag�ߓ�N�:Ug(��]�P��^"�=i����>��>�Tqg/���PX���z�����gD��e��XZY[�X�Z�Y�[V(�V_����0
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[11]=<<<'PACKAGER_BIN'

w  �u        �   LP�             �      ��M                   M y r i a d   P r o    R e g u l a r   t V e r s i o n   2 . 0 6 2 ; P S   2 . 0 0 0 ; h o t c o n v   1 . 0 . 5 7 ; m a k e o t f . l i b 2 . 0 . 2 1 8 9 5   $ M y r i a d   P r o   R e g u l a r     BSGP                 �� P� P� P����{lg�isut�x&s�44Wo+����N�;��QԣZ�3s��@o9s����m�.���k���	��v�:Q�z|x6k}M<hC(��<��*�"0x�qSZa^II�����N_4,E7;�v��"I�t"��r[wV���3��1U�qi��I
���������|�����XOg�S ���J&�T�U`E�8�B��F,�1� �~�@�]bby��J<*��6��C}y��T'Ο7Oz��ǋ��}3�ʀ@p�K\���H��Q��m�=��@
�щ�%�Q�0E�K}5�j7m�,kH�������<Cق����{�&)5�&�A* l��i�$*�b�s�h�A�j�G

rnq�Dl!T����e�`
�cNZ��� ���l4�0��ۗ��Z�?f�@d�=�
���w�� ��ۏ02j+���H�
����Vr�8d\~N"9�!)h"�Ah"�BA"�7|cp���JQ�������^���.���X�U
�X��a�=����)qW7C,�4KUl�)o���TgހH�-ɂ#�lW��.����$tpZ[b
m��W��7���*-����Չ�����|�
�F����C���b�"0#���Dc'=�`��$�`������"|�t�7�gp������r���������אڣ�4P;#e�!<�5g���*$�R�4�n�T��cŤ*�TH	=�ګ��i%�U��mu<m<���y��=�qԺ��8)��}dQ����>n����=P$P�j�-X�le�D�x
e.�'H��ZJI�\�pMR��p�m�cQ�����A�(�-'��:}Z��cT�7@t���W�y���f���o�K�E]<k���B��j��؈�肗y�-O���0�
�L>֯dc;W�Ef����L����&�S�*s���6uO�׮V���/��*���|�ދ֢�)*s�G�[EI T���]��2��|����h���Ј�s�(D�׏vVY������S8x���)�h��Ѭ�7�¾�n��PprTƪ�1��:����
a�W�8ѕ�ёEA�(��uz�����������+�2�K�-Jp��=��mmz}���Il���˘8��HuD�Z�5�Y/e�1;����L�L���| "Z���O��l`�B��bk����:F�adWy�X��� �T�˖)6���ʶ���+�(~��^��r cv\-1E^�A�=�(������S��d�#�
gbwP\}�.�'y��c�L�d���Z��Z�&qȈwia���u�e7�2Q�Z�f�d^شɍŨ��c-]#�.Jn��#�腈ßIH��W���pܵeh�nvaU��0���+��СP�Qӎa!�]�LMz�}L܊��Mx�j�}"J(�NF�Z����4�A/݆��h�]@�ؼ6��!�ʖ<�Zߣϡ� r	`ต,�r�s_�Qg�qzɺ���׋_��K`y��q�X�Ԋ-Ti��T# 1pNz��p� U�jq��D�ô�᏷�+�f�����q�"�?�]���0�`���BA�7G׋�99V���s��s6`}msDjV8Ro��&���>�o���g�B5X~cҀ����*,�iӞ��XM�RֈF%_�V��ru��+�a��7�&���k��قA��tb�zZV�1%
��
��0BO��2���rtbo���թ0o�'̸y��.t��ۢ�)���YV�M�Ő����(l� ��o�S���'A���1[�侨�m�CVZ�y,��6��Q~+p��+L ��g� �[�>;��!� �������i �N�&���y�������$��ʇp(1�sb�*	� ;�9�p�C��ţ�t9y9
�2Z$��C_��~��xT� R�ex$e���5Yh�X>�w��B�-)Pob8`�qh��7���Q�����Ș�/�	��e��24��2-�6�FY����������pq�rS��z�Ƃa	��d݄��3ɥA3Q�~=��t��)�->�%L� 괮E�w?H��� %�L���#���#
F��0�:�XrFDgo�i%o �81L��Z�y| F��W��8�(�^�4�t�=5�~h��ߤB	 ���3��Bl��[d>�I ]x��L�/�38|>JZ��â�(6�v�y�,��0D�<�9}��:*�z�� �6q=VQ��d�т�o�$�')VA�B��� �
�*֕��+ѱ�b�^+�
X����4��M2��|JĶ�6bΨĹ�1
�P�*�����O?%���sٚ-��M�!
�*���WH^�q(�4�e�@�@i2��8؉��E܀���|&����W|p���ox`���.�|{��K�
!��C��K��4B�Bf���`�%s�1(�}���q� M��~L�\ϭ���wy*��/x��I�R�ʖa���ړ]S�|³)0�i���_i���V镆XKT8*�kh�F��5�`w��ނ�/�"|�<���f-���-��4P҉"���ބ�k�V�N7��<�%!FC[�D�� �A�r������F�(�C�U��47*����#�5"�L
�CL� b� H,@�%*'��
9e1���$� o~S z�M�BMܝ�@]�C��K�����0��%OE��O	��k<�?���P��tfU���aqM��j1��Bo�OL�EX���G �J�DJ�$����bO3{����N�D��-D��Di���6hb��n����Z��Y��Nu�؜�����j��۬Юr&�D��� �'D
�-R$0�
 Ŷ	��-/���
z u!�AwOž���yސr-��p1C`(�~�Ts%qZ$�xk#s���O�bU�eTo��q騻���b�sUf]�"�7@�ķ��$�i{�KKƄDUV��<Ia��`�40HC'3ۖ�c�V��A�h��X��F��#w�ɍ8G�K"u�8#&p�!v#�FH�&��f�0��3��4�*"k]�=�٨^���e^:ٕ⣆QEQx���]W����Nh�>I?怋RA��/>[���|�6�#95ΝR��f�\>/��NG�k��c0b��J��s��#�)b���X/�Rn��j*6��1 [��������]����<���T�5
�B�A��U�-�����}Ȗ>S�!R�C�����t�����N_r����(pʐ?�0+%K��4ɖ��n�����h�<�зOAb���*�=r!7e���K8�Y��\{��T�1���`��*N����ʭ���l�ֳ�,��bf��%뛍�\ i��"�2ͨ�"�<�f�3�u1�!�Z=_�ga	6^�ڛ�1��f��l�"_&���`�-�d�����7�X���_#|C���3Sy�����sg�cڙ�Za�c;�|���m��Y�_/"K��0Q��.6+�`��x'݀���
?Ms)�W޹�:��J7lU}Ζ�/,��E'XJV׫�()��j@ɞ��;[e�t��!o��&��'�8J~�v��!�4+R�����9pu�k�̱��V5A�����ZUN
�2�$:�ν!S`,�Z =5Jp{jI�s$K��ϫA�]]�k�B�1yP�H!��R1i(� &��qcC`��#��0M]�yv��x<�j��G�|ɂYN�hJƌ�WԲ���ev;tru�p�[�j���+�Է����ܩ�`�OMU*�y��H�TYkE�n&�@���ۀgoG]D��*��>_#�:��~�aT6�l����!�m��b��6�����aY!je�r����L�FG���oB�ARP���=�%���
��bYJ�����u<i��T��PU�8#p��pB���8��v�@>��
ba���L��{�y=���V;-!1�҃���Ly]�h|E�4��Tb%��pDS���`��JO͒��ۮ���I"f_o ����E��5q�|HJ��?[�#��BRcb��<��6dRrz�WS�"��
>�q7�����L�� A4�F=��$s!Y�<��
��IC��8�ba�9����ϩ��8�4�/.�4^x"��4�QЪ�SZ�"Z����D'� F4�
drr�����JՓ�����CR�a��1��q��7ݨ�i�B�d潦�+D�[G��r�|�C�Ƃ!贳���#���F�
��~9Pdb�%�9|�g~x��\ܱ`*�6]�n>�C	`
�-UƔU��Yt"��1�g��xM[���u
4XO�3Dr��d@ep/�z�����-��2@���0��.S���8�:��j�R<�.	hM�Dʺe����	8f�S�LJ~^J!	?��O,�ӆG^��
�xr]�ɯD�O`�*1C@��TϨO��&W�h0V��۸HF2�a��:��ه������3�
� �G)Ѩ�0pf���ǽ�4�D.zx������||M��yM�0��0+��z��BH��;�_�Ֆ���&�Z�Fঌ��^����Ba�_J�U��)�ǯȠ	���-�Dמ���@��I	O����+��i�a0Z�����{#���1�VRl�Ct�(�?U2����aҊ�e ��E��K�J��-"a6a���C�Os�=<��S7�Q�(���R3d�/p�����a����F�b�z�c�i*�iB}x��G  ���B3�
�gA97�0t��%v"![eZ�hb��]t��@R�މp ��-J"Lv `Cy07,%Չ1W#�]B���v)�Ǥ&ݞT���6���=�V�Ͳ��������]T$Ȃ -�����r���."�=��$��ڥ%K�٤L%�*Nc���B$���۩��.�����yg��~�{�I�_J�DcS���b�H��vʮ��Q�>d�J(�7�G�����|��V
0jZDf�~�k����fD�
�T\�o["��ݪ�4+:F����q�%���,T���S����O){��;8�
C?�n-�]/����K�NG�D0��8Y�g
����~�C�*.X����^ ���x�ІA�Pd���y��: ���\��2Y��-=[=�!V�d��{?<�p(tu�� 4���A��E��ɲ���;N�X�f|W2�d�rD0?gQ��RI�{��av>@/���� +;1��5�gS���1��oJ���D�!�H���v���
4ȋ�X�E��H	���;O�
�'�Q���p%�ȉ��/��ZBg�����ƛ)�@�vrg+�NN�er�o���/Q ��²Jo���*�Փ8��n~�u�4����~m��6VU�% �_C��}�+�=�X��S�i�j��:6���;�T9��U��F�:�:����!�c/:,�Ԛ���t�(��8Ԟ
���� ��Q����Ԏ��eD��,��:���n���#�c��)j�s��c�~%���s$�H��肷�6��J^�1%�B�R`�<�h
�0��W�v��Ra�%�8En7�1&���)��n��Ny�A��H�g�Y�0����(�|���hJS��YT*1���Z�_PA'����,�8�в����}Ĕ���¼g�=²��W�}�����vt�BD�+Ր�О	���S�I؎rA���>w05J�� ���ɱ�����fo�������P�:�ﱿ�:���!�V(���j	R,_�)]�_eg�:B#g~[�Re��L��� �iCI��U��̏*���`C��a�>9X`��K06���W��q����a8W!=���o�}R%'u�ð�� ��v� ,82�Iɂ,��8;Qx��}�����[��"�慠Y�z&
x��+ ݂�~�ܖp����;������5ڄ�߷����.L0e�Bdr��(I����fℶl�:�D����	S?=�`���mFca��}�Mk
���cH\�
��:7s@�n�p�~�FBqƜ~�����ɒY��3�sJ`BA3N������
��T�$��G�����7ҘM�Z�}oU&e r4��D)�8_�M�@��DRF���DVB,�s��["�Z�+z�'��5���NA�KDp>���P��ar(l\�n��'�d��Q���a6��y�qk)�6��	���.�|����TM�;Pbh��L����C ތ����� E�1����㐅ch��q�w�lV�������	E!;Q���)��%&D_W 5�{&�R�کO�9�������6�Y��'��KL��៏�w���?�u@A f ��MIr�ƌ��� �+��c��b.n�*`{& Dg��:��&lV^�{=%�9Ut6����x4"�A�����<FQ#5�NBߢ����"�&m���+�#�&�ھ*]�tBDTɼS�L�%��l��Դ����p���T���Ǭ�(���K�r��<���>�K�xB4W�ɕ ��B�((c���p�$w��{��ӌ���!��6@Lf�L�h%�ߒJ�F{�4�@L�|��6?/ɀ���n��U���i����?Pާ]��l�-�"�Q�y�)I*Dj�X�@,lB&qKR�����ĠD� �*nA �!7��N2סn�&��@���]�}�;�%IR�F�"X?1AG;�*a^s�#X�����3�×<:$�q=�uZ����y�I
�ڤ����=���W�~�"�b{|�
���6� c����y
.*�� ��k 'Q��0� G4�t��=B%��<��+A��'p�&��D:a��p�'k�)�if�`]o��(���"Jp��,��6��\qF�����;�G�f`����9 ��v����Р�;)��0a,V_�.Ō��
��%D]Xx�
%���09V�, �{��W�-�p	��]�2��<�R�_8Nht����S�@�&�X�W�"kD
9�[�>0/���'|)��x��ObD
ݨ)�u��p��wh8%H\�W��H��J�|�M�ݙ��2� �iG��`e	�]
MdyFL�� .l�?;l�2�,�:�d��)�8��P�|$�L�x�_�b�mg6������xp:�%N ð6���Ve�cng����O�z��5/H�ء1�/� ��R�ZF���-'��E.E0�!�ؚ���p
k�o��xm��h���{R��'U�ox-�H��߳�ο��qӊ;qn��{�
�tC��B�oV���XI�>�]Y��w���X��'�)~,7�����@�
A`���
P�B�Q5�*טlTDQ|=�3mB����eC4��/@g0!*�nK�I��F%�R��2+��!�_�P]���^&5�&BW��:(���L�
h����7��H"�!ע$o��S��7P�<�xI�#�
�􄣧.EE��ȼķ�h�
��_-V��Y%�E����b��ڤ>.���4a��i�@S�PcߓA�#a`"0\h@���"������힩s�8	�]��t�
S{����3�78���k˞�{��@�j=��REh�lJ��*XH�ia�/B�A�5�Gl���=ol�a�kUZɻ��яDB����ҽQ!�$��4[ t�,/||�Ϟ%������cB�O�@x$�"��#J��P�����Le�:���6�PҴB��)����b_h���=��w�ǶoHY���kB!o\��R����o���	x�}�z( ��fZ��%\m�5D�{��3��Cs�������w�ź��r����� &@��
K�ro�l<������|H�
aXR���pX�ɀ�Civ~��GM1f�}m��^pC����h@�:�첷�ݡ��k��D:� �h��,�ޘG���)�Xg���S=8����?u,���+�`�"7�q�>�ڹ��J���[��8I�9@x��mY<�+�s/���3�
̰�� ё�D;����0fڛ�3I��/T�^<S�.��`8�{WN#��dq#�6��,u�I�4wGX+G@�DCq��:��s�|&(Λ�� 5H� ,@���E2A���f��k���ڪ4�	s6O�ݱ
�x|7���5@��VQ�D�r/��,�eB�%�e/�BԱ���
DvE��=��0P�dv� �4��Y^��	�y�����������`�1�.$�7�s9��Mڊj�
\X�0�8�1�5)��J�7�Q�,�6�c�6SO^�X6�`�4B��[��;��v������@�ܑ��r -r�.�^�A.s��?caM�C,�>1ɟFQj���$��v�Ar��T��t8k�T *�%�BW!�^gi@ϒ�ȶ��
�����Q�����pBD�S�iѝ�q@��g�=�d&��ŏ�1��g}�]�2��\𣻴0�$3$�4ӣ�{�$�n^J�x}�� �"�-)�&�V��d"Ԟ�u��ड:Tsz,�u��Uu���
��rX$)�Y =YXL� ��~����/hzTUD���l�s2�HOG���.�L���RF%f`���0�)ϗ´��{ �aa��PDTz}޻�D*U����F��/XX����3ΐ�bA �w��k����]�`����
�.^�$���:�g]>��i���E����C��g��[޾�{`�Y����G�(���gE�L�̐���N��k>������E��+�fV��M�эI�?@���;+�63���
jF�v�	1��äi��fP�]����s�;wE��fy_`}ܖ��8�+�h�J�_B��km��U����<�T.���Gα��q[�!��>"~��H1cJ�h�L���z��^�ֵQS����D� ,�;�� ]�Lќ_E��_�E�1��#7w����~��ȭƾ������=��
�Kf�+o�eR�I�ᴦ�@�l�bKF��ѽ����C�"��W���UUC��Dt��+R�(�=!�������1sI��#�ȉ\�r��Xh#�\���wi�"�j�&�\ص
z���ܩ�"���;�ٿ�����,�{�f��~�b�v>�n��ހť1��s�� X7��UX����v_��C�:�P�<��I� &�炊*,���^���;/V�02�� ��(�^wq����Q!ֵ<[��+Z|�>)�Γ\^�R����fJ�����Q�&��L~b�Gd��
���pg��n�VC�3��V�1�w|��L�C
(uA_�>8D��A�~)9��I	N�������`/�Z�����o��6kXYL\̨Z�VqK���|��ռր�>�	m ���B��> v�<��i���>5�hjm�ٱ��5��)�6#-FYIwv��Z$I�=�hS��'�f�'�(��z��<N�S��@bQ�Y�s��`G����� )Q@�2=(d�x���.bjf��ER?�R��C�:��� ���t������Q�Ta6�<,�M'�9c!2H�G���w!�0H�
�q*�:LE�o���#��f���fADnj���Ǝ��/�y;]S����Q�Yw�Z����M��C>&���P�X�	��$F�8i��F��;x���5��%
p^��hj� �$��:w~���g��wC�0�`���I�+x����wE���Gԏr���<�Ay�6��qŬp�-qO�� I�v��a �ƅ!�^(l����C�;����+J����3<��3�T�yq��׸
9�6i�;0���x޷h�B���u�KЛ`�A��� Ds�b�s\������S��N�`�*�O4�����K�zB��׍������3�O��%�_��l�ш2�<`h�8�2H� ���
"/���/�� ]�h�}���#�߄X�(o�fs˿7]�)؉ ��Vn�8%�L'Q����z8S"��� �EE^~�(^cl���Sag<�� �Bp�F E�̅V(
J��JϼJ�k]�m�A��rX��Ț'&�B$�d���M���F�
*� 	u��Bh�\5�t9,4H�8@��[�Ivv�}Y$gvC�
_�%��s�V;�B�r����F'�q5$a
�
X˗CT�f*(3����r���KY�µNV0I���w������q�Z�m �(�d��M����Z���a��,����$�7p�&����425[�N�Iin�S�7?I��hK�
A�VvNH)s���7p�ʐ-g�u/tթ�@�a�P�2�ܪ��,c�l
����e/�����8�'��tX %i�՜�u��:F����H������D4}�	qNS@t��L@Ǝ(�A*����xl��@X�'����r�Im�y��r�X佮�wgL_<3	��$Ah�� ~p��M�X�rY�8���E�g���0â� ��a��6@t]�(Xw��(�R�Z.�8:H���`��-��#���M����O`�H�XC�٪�i��4[�z�K����Nd��f� ��.�\�f���^80�K���D��r&�dɉ�D~Q�@�����&�=��"� ����&Z��,gsB�N�vlr���e��� �K�̷�	zC�sHQ�E�q+�$�0-,y5�\����b0�Hɘ�%��@�F�J�MBm�8ޚ"��UM����
�pc��Pb�� �
�6�ō�̇*�\͘r��@SU� ˸�&�b[2v��@�`a�d��d�����K�8�E u�%�Â�j<zӰ崖��W5�¢�����_~�O�U˴�n�鴞��"��8u��Ql���+R٘�Lk���%}��f~^��{p�#i��ա�������_�kk�ƀ&���Q4fu��Ε��
B�����5ٮ;�^}z���H������<�r_��5�	� |����a�&�jƒ+�s1y� ���m��d�����@�6b���SS7�쮲@z�_ �y��
�Zt���
�m������ �u�N�=�
�ex���E�=���R?�@)���u�� )�OM[��ʘ��=}]"�:t���q�o����
��8Q0��0�Z&���(蜐����[�v0
2��1�a' � !��������R/�'�x4�W��p ��P�"���iŻ��N��xdCD,_���x;{�M>�&EG<���x)� ��0D���Y�
g�ꯖb4@t�`ҙ!�
=	��_<m[(�AU��n�m��Q_%�L^\��`�w��!s��ـ������A)����h,����!h, ����r�A�L���z"���)�`2��j��_:
;YP��� �-�Q�G��@d&A��sJ",fF:]�����`ؠ3��ӻr��,���X����(5A�'��O�e�9�M���YvaH+T䥬�%���lZP	��]��$�q��}(O�Rw�Ά��J>���u�6۟�.����7���N���ݢ�>lɹL�^��
yz����8�0{���5$,�2�D>S1-�(y�P5f�BHB�hNY�{��E��A�kJ(ݮ���ϧg�Fu{�t�0 Q��lA��T�,
	��t5�8%�;�����*w�4���&
Y#tOr��oFy��j��q[ГvrǁÃs
B�9�s롯�����W��5�Y�ՖП�y�Y�q�����ۊ�=R$+�Ma�U�ΞJ*�h	[�"=���,mX�+���8r��\W�WQ��Z�
��h��v��g������nt�^�O�'g�I;�	ǌ�u;��$�ܥ��|�]&� ����r��<99�g:^(�0-s2�2�șR8*�t0`H��G� �D��*�Cr��?�{��'��Ht�3/hƑ1��"H��V.R���c(q�J2�Ck���z4���S����N2[�Gc������A�Qey�I����AD��3�+kDkѽ�-��"F�6���&��vr�nП 
�Q�J�Rw�e����,�f:Q@2��wZ�����)2�s�̥��!������J�/s/�� �ʄ�?�!�UdP[;XX^�jI07�!z������&m�J�kY��d�
�v�`����s9�'MS����T �u�Ս�?�L��S֥����KͳT���9���Zo�LI��R�@
y��y�J'H?&G��2t�PSi�$p��Q�> �V�|N�ř�r��W-+E�� ����A~Jf�J�.J` ��R��,��z����Q�Q�L�	�ػ꼁����&���g*^��s����s�� �뾵���1�ˑ����Es�� Ӿ( @
����
$�K�(������XeY�l!Q��FW>�=uM6�U��o��I9�\�l��qt�~�L�B&Rm�����s�va���;����`D?��`ʑ˰h:�W����`�p��x��RwI��80�q�����Ē��t���R	I�LI���e+�""u!��V�z�k��w 1��7���"$G���'�OF�/���y'�NhV��KY�vjn�ȳE�ᕬ�Y�6���`.��*j�BpcIA|5���0�d�)�������ȯsN�<=DP��'B���Aӳ���ՊB��Ƀ�J W)]x�"��.��o���b�AEYp�����殭�W�;2�
�A@���l~�^�� eZZu��2�@�| �ύ�! ��`����[�U���.��KJfb��la>`�Ⱥ7�Y�1�~Yz�4�I�w�T�8�O2O���B�Z�%����
^QU�����wx�"����,Ǽ8�H�*��	�Ǚ��Ͳ�3I$�Ah�Q�Ri��`�eހ\)�\���㈟d�ZK%���1q�Z�'���z�}3ꬃ�+.�W� Y�ѐ-c�D�H�rJſ�/K� 4ˁ͢�Y��=��:�����1��v��#�э�Hs���(]@N̝Z�����ȧ��S�xf��:�L2��|����TI��L�ZwǷ�D�B6`���,b���"����͋�DtEH#;�D *�K5�s�r5
�GD�}�`��y�U�XSl���������)�����K5�{ϡ`�ѡ56�%30(b���=hf�2d���C@�
tf�D+&d�68�P��K5�:[�"?�o��$tۉ�j�h�5I�SU����� +5�҉��*L��bd"�[�Ϗa��E`��xi�/�np�uc�+���E���T)�p4���r]�˗��L���)viET��p�
x��N^-���B�X��
va
�-�P/%!�$F(&'���1��2�! 2 O@�p�����X�-/��������K�	�
c���LC��P9�C�e�8"�R��[�@��
�gX�lCB�n�a���I��"��g�?!���B�R,���+"*^���=x�k�h���
��|,�o��XP���� � s�)�E���0��� a	$�}c� �X��/�L��v��ٿ���P#��:1�KH�7�c�,���Lā�W�>�ِr$K���Z$Z��D��3ih��(�f�P�%�a7Ȃ&֝~�	H�s����cD-��`}�<�����?�7�Rd-�CF�C!�H�O�Tx�Q��`��h��fc�^�����XaR����t�!�Ti���P�	H�99ލ
|s��ۓ��e�`�
q�W�J��$�@I��SGZЪ�|��S��a�7��Y�PS�%zĜ�$�c��54i \G}��G�[y�d��&��./�#D����U�B��hHB�Me+:%�0�؃H���2���m&�w	75�%Yl1�iU;�2�w�%#��@;D���d%�s�QP)%�[�s���h��AET�h�#�&�ƶ�^��o��QB1�ib��844�V� ��� Q��k��E� b��D)d��W걒S�ȃZ@]f�ad^¶�up'��}�b��ɦ]o�(��h_Z��949����*�P֌m��%����4�:"L����h2����I`sCkƦנP�f��R/fc��ꢫw�_^�m��7�����]
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[12]=<<<'PACKAGER_GZIP'
�      
��k�,Gr�]������Lq��EҴl]��(����a7��Eqv	?~�㜓Y�3�������~ n�LuUVfddĉ?�����ez��W_�՗?��=�M_��|����W_~����?�����������?��_L_?�b������?��������g����ӿ�w9�'����/?�>:��/�����׿~�ux��W���/��/�_|���v�Ǹо���̹���ۏ&{nm����������d��g�'o?Y?���}�}�G?{���_�?���:}������_}��ۿ��W���_���_}4����ߜ>y�|������N���g��}����闟�������#?�����ן~��j���?��~�<%�?�>�`����/����������#b������ÿ��?ڨ>��-������ۅ��~3�?��/�d~ߋ����ls���ɜ�s�<�y
ejumi
uIe����t
u
پu�ir���&�ͮ��7.���+g���)8����b������%�>p�&�\>��/S�����7obh�oxT��V�?�^��\�S���o�.�g?�K�Sp������rIu�������>����R��}��'������/����i�s��_�Wۀ��vQp�=>{_�/y��= �/�z{e秔���Q������)�q��R��,і����SZ�l�q�)��
Oiq��j5aȳ]R�}rɄ�_�o�fv��{-��EZN��`�`�2���W�O�?���1�b7r&E��w}�>�y��מ�k6����_���ɮ�v�R4��Nfg*6U��W�b
�����^O��f��h�0� �I����:���a��>iqOu��j����A߱'<-g�h_�)�k�?cq�����Z�<v�����!g�����_�k	IK��7��8۽l�ն��E��;g��!��ü��%-|��xI�4�������0���e,_*r�LR�S��[ۛ.Hq��p��@����Cn�}�}i15�o�xgÞm}O�֦X�08n�f��-�Ozψۭ��tu��s�J��%>�&�Ίm
�U3d�{��;5�N���z=ɀ�ʶ�B
�ʣ�p�@�t#�k(u:����!�gGC���sZ0�P+׼6j=�	��{����V����p0;��^+�e��L#aO�$꿡����?5�6כ�0�g��%x��9]lt6��.[�`n���s�o�8��f/�|��`b��v����/f�b.��9�>���
ln2(Xfz��_�
�� i��S�
?@(�4��g:xY��p �nE�e���)����� Ap��	�܎w�vp�y)\�!4���Fl���:�k�n����'����Dn�f���h�t���r�h�UF*��)>��^:g8o渝�88t:2a���K�\�@��N](ݏ�o
A�|�Fg��N������҄�U�LTZة�۔acS&�.߉W��i�ef�~u�b��:��1me�x.KJ7#���8�*y�M2�G��H�Kh��N�mE_g�9ZTE=<��╳��9�p�w��V�DC(����x/,�bKJǽ�	��j��ݏ�91\�L�Go��5K �T%4���� ?Q���D#������2�:��Q�
z�����B�RЛR�{����bp���Ѭ��M���p�X�������s^�l*� 1�q�Ovq�g~��}C��B;�������c�)f:f�
Nl���Cg�ۏ�t���<�����HB�Q�߬����[-L}G0�Ol�.�s0q����ɏ!`�NX�3i�����ІÔ{�|`cNE�jz��*;̓���p
���~�����-�(�rp4�L���m�W�tt�|�j/�cCG��8��T̾���=<W�m��w�C�xn���zp��Bc
sz��9׆�=]�V�K/���f��mP��

�	x��"���,ҟ� 5��%�IP(ǁ�oH�r !��QW�LK�p�t%��
W�����*�.QP
�*�z�6��D�a+������顅�`*T�GBMA�)<�x�S��
DuL�]Gq������t�o��������w�j�l1?"�io�w4��7���O_ݾ�vF�9F�5�ʅ-;�8�XP�r��]��vd�����f�'�K�d`uּ9d<�D�99mz�ۓ��H�%��8�ܼ�lI3��	�8��P�j��7Q�c����&O�@���b*0ϊ�pG�=�8=��:�E8/	^k�Q�ӻ�E(��«绻9^w�
������ٖ`����/�&����S�3"^��/���U_K`��;�4��S�rվ
��j�q�� Ȏ��n����Z��D�;�0�7o��Z�+ړ[�k�cq�6��0��ƼЄ�� ���v*"H�q�2���
��k��U� Y��wz2v�0�%ͱ�U�I���'�s�X�4����'�h>�7o�==�p��\hEo�I�5
Y�A2o��t�J��]ȸ �5��
�l�)��T�%��z[ �㘂����uD��"A���3R�K8�mT���C��M\|-���Y�N�����#��;J\��N�	eXZ�`~�s>�"��4>%3X3������8��{Z�w����ak5wN��i���S�������N$\�n9�/4�Ih��2�-g�i����&0r�Bh0��v�ެ�-m43&�� ��3f��37rd�F�B-�˔6[���C�f�`���V"u�l���p�̒�����.f���F��W���ռ�'�S?.xi���mb�6�.ޟ��v7���Vϖ���sq����]!��~�̵��N�t����5�Շ���>���ڏ��c��Nb`
 lov��<h3������.����G��!�V��wМ-�����.����a��@��h6�i�H�
ۺ҆�������݅ϱ�fD�r���3-dY�D�d����9
�l
��D�;�r�ݢۭ3R�OAD6�/���S�9đ>����Aq�ڔ������Ԑ��-+��
n�sY5o'���;�����f���r����뗓C[�Ʊ�o�����p���pB@K�=����Dx3Ւ6:,Y�C��a�Ӳ�]!V����
�G��+,��;��aE|�$1�#�DR玤B���!��2�	)	!�)��O&3eP	�M����'�FZN��_��TN/ŗ'[1q��M1��p�S2�r�_����t+�P/��1� ��UȢnҼ"q���鴇b���B��3�0��I�Wu��7E��ް�kJ�GCn#&}���7s���qJ��=��o��3�?<�-�R�-�A���wK�8
0��f&���;Y���� ߑVC")el��:��tr`��Qk����;?w�!�s�-�f�֘�� ���L�I�99_�OM�Ij]�}�^0m��1vm��";�!��Z%�
7~�ݷ��[I@K�a��� �I����Ex���5N������fR$��ၔ���~*��~�	'�Hl?��LG"��8(��,LTi��pԱ�Uc�BLOng�zt!�����J�������x��,@�l�S��9(�J$�� L���F���xM�1-D�f�7v��Y�v�ƭ�k�S_W�0�H��W���-���J�X$�6j�5�j�f�+�&:�p��X��v�[����L1Ѡ{pu�_� �Wt����S*���I3	�����o͐}��(Dwo�1�I^$�����نcc����O	]��+V˯H�I�2�>�����5�d��:���VA"�9A�6w��Gѩ�%$��L!���VQ:w�t�8��Q;�*�������t�v�ɂ����-�X�616�(��Y��]�������t5��Q\��ݦ�<
��
|r��h�ʃ�ʳ*p��(����Jڕ�"�_�88��F6�g�'���,
�.!x�o$�׳���f�{��y���ti�'�-u[}'��L��2��ġ^΋�i���wl���	Z2����sj�1d������|$�s��*��J�@s�y��@R�㶒�lי�f����v���f_�;d�ʫ}�zi�����1�	�|��HO"ф�OwL�������Tދ��l1{)ߝqey�}��$$,��]���^Ȋ�fsϻ�c�4pd��P;�*�߶-�U�$�~} ��JGU"�#H1?uO���l��ń�|0�P�����Bm_�A���-Ei�⋕��)�{�Z��i]p5�
d
fV��{��@e�
�>B��PH�n��Ĕ.��j��f���?��g����kϘZT	 g�W��1�����LP<!��l��f?
�||�ga.6�*�A���1y�x^�u��]}������:�ߵ�O�Z̈́��l#:�O�\�!X��{��*�L�qL*�J6�&
�3o��x&" �5�8p�}{r�W�Dv�W��|��v&|�� 0|��Q�Cg�����%V^k���5�	�)$�-CS\o�;lA��f���~��`4*3A��!.�/�}�Y]DW�����l�&ɅN]L]m�N� ���(=4�ĉ��p,+�C׊!�z])��U���DU���J�N9��*�YC�V�L�������2� b3h"u82�~$e3E1h�4̍�l%<����� 3	�)��9*PY�:���~a�,��k��{�
��@ Z�Aq��j2�0UDj�a�Ӝ��!��9�J�I#�&�Xջ����~�� ���X�n+hF>�AK8;c���2HU23H�RB%��,�Izz4��(#�ƭ�ixW+�h���]=������L(B�s׾�k�yL�=@SD���}���ٿ6t����S�+uE���͊�����p���
z7���^��!	���������3����s��|���Y�M�ix[��"���E��1�ԋ�9�q���ACM��Y�Â��Нo�4# d�-��Q�A�-s�&�)���q��F�/�p��:g���������Cl襴W�3cYUtn�E�Ɍ8q�K���\DDQY)>����`b�,���0'&W�
T�J@�}�F.��Q�'7kj̽��|��͢�]O�
����E
l�@��/��l�Z%�G��뒵e��T0eS/�l'�"kn*�CsU1��� C�1�L����J}�S�I��"%{U���)��ug@C>m넃��ׯi�y�7� ߘ��8*ff11���sC�8�[�&R#bώVֺjT�h)>.�B�5��#�L��R&(Æ��ผT�b�+�A��g��2D�ʶ��4�|Ō;D�i�Y/ޅ��=`e�����i$#��Dț 1ߟ$�������__K�� �|�Y2��zA
�zx�����Tz]I?u��7,L�Ap��:���`�ȟ/W6��&Hb�S G�ϩ�&?*��w{+c;�0��̡&�xb���%�"����DL��3<��'�
��n�g���K��nG�|����:��*:�0�#�,2�X
PAQ��q�F�-+k�I�iL�`��)���_���	yއ�f�
�NNE�S"$�EY��=�%�j�ʳ�fם��&�|ڣ����dQ��V����W�`�ȴAlB�i��`-��;2f��r
�E6�i�,ȣ�{Rl:�hFB��Ʋ����l����b$�⬼�hbB�%�8���w��Wr���3w�88r��c�v!��f� Z��_�
�����.�(<g��K����q��h�˞}h������{����B�K�FbL�LָC���Pw����$2o.*���I'Y� �J�p�#�K[Po�C(�L��֜d�GŃz��
�4�{��5��"�� �ǉ9�E���Ě
8�D
%��c�.~�MK/<��;[x~�a���d�`ϸ��) {��|X���*��Q�o�c��A��8�!Jov��G#A軫��f"a�vFio��ǉ��������6}
N=׃\�D��*�$�,o�=M�o����Gg��~N�A)����̅�ds~#K�9N���$���DɎIE�&�����ĸ:¸L�:%���.2�ZA��0���a����E9��,��(�ԺI)��1D�Y�*1�*����N�o�pQx]�ʢC�;�,�Bk�u��ĜI�%a�J�Z���4��<&���#Ә�y.#j���.,�-j�5����2s;�a�Igh�-�8�����D����ʓ'f�P�f�N�2;�T73���i(V�r;IU���H���1'��'U��+��VUWU�:L,"������%���{]��E#�F����zU%��f� U�dz2
���V�����{�N(z	��@׌�<J!=`����B�XP�����-<�����)�:��*�`�|~�/{���i�`�r�i�v�j��S���l��
�:�����S�����4�'�եH:�%� �r/	'2C�S۝��^1�?�z��gE��DgLݶ�9�v0��g�Va�+�|��d[��ٛ�C��R�ڶ'UmS�,��i�V�(2�9���5�aھ[XDǥX�K�y�����z�)���*�0��V�Ur��0|����Bp5EB�H~@�Xy��b%eΉPf�5*���
�ZO�ԇ�W��^d̑{���/�;~��q��O����� I��N ,�D&��di�����.�'�4{�x.m��B�u:w K9:�ºyч�,�](�]1d�s=:Ӄt~Oٞ��3�D�lV-�6�����J��xjv��L+�k�XT�jX!
?�4U�������F[�@��� ʵ@r�=��P�*!��M`���;�S�q�diC͸^wҳ�!h�wUH }�����0�O�tF�jƎ�ߔ�U�Q�@ ZY�)��D�� ��	bA�>2�*,�[�0�2BH$}�.U��hvf	Ff%��߼��F%�l ��a޻�x"�i?]��� �S��|t��.~0��;E��*��^��l�k5Xg<x��5���S��4+����*��v�)��e��x�[|���D�߆�(��1�-��'6�Cb��J��: �mUr4H@"K���v�숦��q��h^�l"
��C�QHD�]����*��1
 VH,��QF����n��g�i}��`�@�bK4d�P�Vi(�Q� ��"~H:d�H��&�X�R�J�����k��k�����"���'|�fuڵLL��gQY���z��Y�S�ջ饰�D�N��=�mi�n22"���Mi�ya6���׎���<$-ڶ�bW'u�	F�*���<�*��2��b��*���g�e�x�Є #�y}�
������8;�L���
S^��Nw��!�] �;����Oʪ�0�^#�����E��E�Uc��?�2�J��Ԏd�|>��o��A:u����@�.[}�D���,���?��?�������JsGJ�+$wz(�pV�͉R��b�7�	�
U���U�j�o��0#ʼ	��%�n
8@��٫.!R.3{�t���es
#ǒ�Im�T���q���@�HM�@ߐ�,֩���s�is�Y�mHi֤�p	�t������Ȕ�m��Ws'V����H� U օnP�G�"�00���yq��\�Y�;DI-V4B1I�8fgfeYl����Oip>j�Ԏm���
k"
��*��'�kL欢s�^*Mis���mYQ	����1:�ٞ2��p��|l{҇j��ʑ�Ͳ�s{U6��d���F�!F�y/�>��aq���,���t��3J- *�;S>��>���Ye֗ae�̵��\���� ������N5jRg���.���>���Y<�#*��ͩN-��3�E��C���dWV(\�z<k�I�frvV6��*��$c�
�	-��xiF��j���_B�����1�Rm`�
������*Цz]3"�l��;�}�~�~/+{������!z&Xי5�S�.��X���&X��g����*3ӻ��|���<��o����$���R(�8���7����;X��c����z�]���ZO��f���T�N%UQ<�����\KD|Y�pn�u�fN\F�vtժ;��˨������7)go%���cL��N��~�H�:�uR�}K�Y0��&+�{A#=
�,+%hxf�ͩ�|���v�`�U�	Mc8�َ�����H'ѓr�ѵ"Ν	�ۓ̽�,��q���c%�"�
�DL0C*d٣�`n � �ef�T�d��=�[O�fk����\(�ZqF��G^�FWW�3!(\ĵW���N,�ƜeV|�=�z�z� PP��偧��[��7���A�z�~3o��E����_�XK#�3�R���}59<�ĵG/*\ˢ.�TQ	�
�Vi
���#��K=U3�^�ء��7o2����t7�#�'m��O=��}��4�M�mv�����~G��v#�Q��`��M��S���Q�Ka+U�w|���_=�%��>�����/��Ud����dH�{?����0c��.l\�Pn�)g�
N26���>D7rB�_�D�(���]��Q�V�UO(sd�hr��*t4PdF�
�ZU�]�	�Be�Ǳ��ܵ4�No)m�*���A�/̀� ��ڮ������%��oQq�lݟUڤ�����LbC�K��]�ۤ<�iU_o׳_S�D/Vo�<���3�ۗ��9��2! �΅Z��'۔Ա�+�c[��?��Kz�^���/bzvoՔ�}k|�b�o�y��⤤z^"c�'��|�V�}����g��k��<�jߜ*@*���n�}�E4�֯����7����[�^�f���2B׵�UC���f��J{�s��p�1cG�uf�f��ƍ�f����2c��ō,5�@-��]ٱ�ʍEnz͌U��D>�&�L3pU\���?׵��*I3	us�c�����n���<�1�?��w�Xz�TaI%T��Q P��<OYG>Ƀ���v���ع 訯�\ζ!P@�>�Ʌ<6ģi߱�l��Z:>;tU��Y��!��ZeV
&
t��#��X��{�*��J�	�/��*���R@�Aɐ��EF��c�c��)��[]mu��0v�sɥ���v3	� 4Vea���샋��hi
y��%�����b���Y:?h����SU$�R#S�|��&B+f�K�Z�I��y��h���}�l׳h\:���ٌ���jtji)�C
�]�NY�i�O�|r�VȧX��,�#%��P>͞*s�Y��
Ծ�6�p�����QG`�Ʉ���𣣧��NC��+�d��) �y�!�N/�#�y�MU��;3���L�
�Z�����~k���d'Q�yJ���l�����f���s����,�Ro�	�fl�|���|�����9mp��mo��s��B���dzp?�������N�>1Q*��l$�F&����ӳ���=��6?%��dpw�w!�vv��f(�����g��}�懂� �x�}j!�6��`W��6���6�ߠ+
K
G����M�*!�P�:�ɑ�G��K�K���ڭ���c�:«H�6��E����ҎvZ�^Dn�i炴{i��pV�A��Qi�!
^a�[��Y>X�|�iԇ
��9�h��h�z!V_���-¾,'�3�E,!۬��Y{B*q0)���L�ʜzt��x8h��ޭ닑�ߐ��`�{`�h�+g�KF�K-����8�qe�6�`��o=V�`Z�P�J�NC��5M��<"�����=�IE��(֨Jp`C�j,�Q:
zU�*�t`B[�|�0v�ь^��-慛l"
O���}wZ��([��agM�
������?�� ��с�-E&�Њ�WL ��6�R��u�uB�bV�JJ�r��J�h呠SG���	[��u���e�5��ҲxR�+߇��g�w�ln�5v|������9��G�6�P2�̪1��j�C��)m��s�1�G�2m�18$��
�חW���x���~B�E�^���2z�zU��b*w0�ߏN΁ݴ�k�ݴ�Nx�J�ݬ�j���>`�孳u`8	��2�qk���dFL��0�*��6L�U#�:E��H{{����)�:CE�:�.������byF��L5H�}�/犔z��5�5�'�^���e��P6�Qc3ᘲO��|,2Y�9"^�id�+����yE���7`�gϙ�wHϩ	���^;��ݵՕ;�~�i�p��"�(�$4�^G���ȏ���^��[���!�#oE��}EW�^ɏ=���jk�s4��z��8j���]��;�LT-:�u�����s��5geׇ�X-9c�ƺ��Wһv��M��P�I�@O�AA3����d��d	�v[�~�8��}v@�"xa~��}:��6 /qK%�!��4r�Q�PF	av�k,H
��H���vQ��Ԝˮ�#�)��(+��W���C�`�夊$�l�\a��<�����^ȅ�eaQ'A����7�[aR�Ns�k�
P����V�.�WԉlY��!�su�5���n{ ?j_0j���9��O�&�R�c�ާ��)ޝ�Բp���o>>�~ǖz|�=}���w�^�������w�9����;r���wV���.���>��;a�||�>K=��Q����`>�����A��m'%��n;�^w��@~��d�?�v��[��>��;��v;	����ng��������"&�k�/�
v�`e �-bp�*#�6�PeU�@�$�=�Nr����o�>�48&2��蕯eG�u i4�*�Hj��A�ΎR��
fS�����7�䄜D���'���h�;��:~�fP�[�XP	m�}���&�e���8!�z�W3
�(�T/$�؜.lX�'�p�lƄHO=I ;�+��c攸���<p �AH(`J�[�ob)%��0�h�]�]m/��-hn���Lhqn��ȠD�B�Y�8"*��cD�܃V�w<g���P�
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[13]=<<<'PACKAGER_BIN'
       @BASEc�[�  L   �FFTM\�]�  �   GDEF.   �    GPOS
 � � DFLT cyrl *grek :latn J     ��          ��          ��      " AZE  "CRT  "MOL  "ROM  "TRK  "  ��      cpsp kern size               n                     �~%v  
   )  Q $ % & ' ( ) * + , - . / 0 1 2 3 4 5 6 7 8 9 : ; < = p q r s t u v w x y z { | } ~  � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �  h    * ^ d j p d d v | � � � � ^ d d d d d d � ^ ^ d � d p p � p( d � � v v |2 �<R<R  ���  �   �   ���  �   L�� ��� ��u ��� ��� ��� � �  v�� � �  ��� ��} � j ��}  �  
 E s K s N s O s � s � s � s � s � � � �  &�� *�� 2�� 4�� w�� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��  �  �   � f � f  L�� ��� ��� ��� ���  L�� ��� ��� ��� ���  * & ' ) / 2 4 6 7 9 : < U w � � � � � � � � � � � � � � � � � � � � � � � � � � � � � <   LD 2 '  ��                                      ��  ��              ��  ��            ��                                 ��      %          
     % #��          ��                                              ��       9      ����          ��                               ��                            ����          ��                                      ��  ��              ��  ��            ��                       %     #   #                 ��       1           ��                                                              ����          ��                                          ������       ����  ����          ��                      �� =��    ��   1   3  %  ����     ) =��          ��                                                              ����          ��                      ��  ��      ����          1    ��     7 =��          ��                                  ����              ��       3            ��                                  ��       1       %           ;            �b '�����������^         ��������������������         ����������            ��           ��                                       
       ��           9   ��             ��        ����    ����       ��   #     '             ! %                      ��      ��  ������                   ��            �R��          �`      ��  ����  ����    ����    ������      �����9                        ��                     !     
              ��             + N  ��     ��  )     !  ��          ����     -  ���� /  ��  #          �L   ������  �T                    ��  ������        ����  �7��-            ��              ��                                     ����            ��          ������         !    
      #  ����      ��     ��            �h��      �����T��    ��  ����  ������ ��     ��  ����      +��                   ! 
�� 
                   '                                   N��  ��   R - 9�f  ��  �}  �}��  ���o��  ���������������� { #   F��                          ��      ��           ��   ������              ����           D��       !    ��      ��  ����  ������ ������  �������� q '  7��              ��   �� 
��      ��          ��    ����        ����    ��               F������   ;�� �Z  �����q  ����  ���d�������������������� s �� �=               ��    ��                      ��    ����          ��    ��                                                  
                          ��                                                                      V     ��                                         ��     ��  ��           
    ����                                        ��      ����          B      � s d ���                                      ��      ��                 ��      +��          ����      ��  ��                                                              ����     ������    ��                                                       ����     ��������                  %      ��                                 b #  ��   f  T��               s                                                                                                        �/�+�                                                                             ��                                                                           ��           #������   #   ��         3��      ��   1   +                    �           R�X����   9  '�u      ��  ��   ���{�� 
�� �� 
            ��  �                                                                                         P�`����   ?   +�H  ��  ��  ��    ���b�m��  ��                  �����P        �V       ��  �?                
          ��                               ��        ��  ��                                              �V      �                                                                              �� D   � 0   +         + '       ( & (                                     
 
  
  '                     $         %   
 
 
            
  
  
                                          ! $   ! $   "              
      $ >  D ^ " i i = n n > p � ? � � � � � � � � � �   �
    
            �� 
�V��                               #                                             ����  ���� ' ��        �\������  �V�%    ��      ��      ���u   � ��   ��            5   1         ' 
��  #��  ��  ��                                ������                                                                        ����     ��                 1 
 )    / %    7                 ����      ��  ��    ��  ��             !  ��  ��  %                                   
��  �R                  ����  ��  ��      ��                               
   ������  ����  ������            ��  ��  %                    ������    ����   
�`�f     ����������  ��        ����          ��          ��    �B            ����  ����            ��    ���� ������  ��             ����     ����  ����    �q         
        ����  �� ���y    ����  ��                        ����  
�/�7��   ��  ��      �{���������`�F    ��  ��  ��      ����   �3        ������  ��                     ���� ������  ��                                              
  ��                 ��                                                                                   
                                                            ��           ��                     
                                            ����   ����    ��     ��         
  ��������                                �� 
  �������� )                       ����                                        �� ����                                                                   ��      ����  ��  ��                      ��                                ��     ��  �� % /   
 !                ��                                           ����      �� 
          ��                                      �� 
������  ������  ��  ��                ��  �R��                                                                      ��������                              ��    ��  ��  ����                                                              ��   ��������                       ������                                 
   
  
��  �� /                - #    ��                                  
       ������                    -��    ��   '                                        ��           %               #    ����                                          N             '   1       -     L 5                                          D�� ��        ��        %��   f ' ;    ������          ��                            %      ��                  ����            ��                                    ��                  ��    ��                            ����    ��  ��   - '      '                �R                                                                        ����      �L                  ��  ����    �d ������  ��   % % %     %          ����   '  �`                 �b��  �����{�)  ������  �   ? ? ?     ?          +   & 
 
 &   $   %   #   % % %  ' '  ( (  + ,  . .  0 0  1 1  2 2  3 3 	 4 4  7 7 
 
 &   $   %   "   %    $ $  % %  & &  ' )  * *  + ,  . /  0 0 
 1 1  2 2  3 3  4 4  5 5  7 7  ; ;  = = 
     $ % ' ( + , . 0 1 2 3 4 7 ; = > ^ i p q r s t u v x y z { | } ~  � � � � � � � � � � � � � � � � � � � � � � � � � � �   �T 0 -   5�� �� F�� %���� '               ���� ���� 
�� /����������                ��    ��  �������� 
��������������������        ������       ����  ����     ��                     �m 
�� %�\ ����     ��  ��       �� ��       ��    ����                          ��       ����  ��  ��  ��     
      ��  ��     ���� 
����                                                   ��            ��      
   
��      ��  
             
          ������  ������  ������  ��  �� ����   �� 
                                           ����       ��  ��  ��     
     �� 
        ��                                 �y��������  �N�������T  ��  ��  ���������� ��  ���� ����  ��  ��  ����  ��������       + J '�� H H  �� %    ��      ������     �� !��  �� ��                           �� j ���� T�}�� R )�Z  ��    �����\���L�1 D�����P�L�����D D���`���^���w�� =���u�j����       �� 1 #  ��  ��  ��       ������     
�� ������ ��  
          ��            ���N����  �m������������������  ��   ��������      ����  ����     ��    ��          ��   )      5 
 %         ��         ����      �� ������ ��                          ��          ��   
  ��         
     ���� ��        ��                                 = ' �� J ; 3�� ' # 
  ��    /   ���� 1      9��  �� ��             ��        ������  ������  ������  ��  �� ��     �� 
              
   
��                     �� �� �� ���� 
   ��        
���� ��   �� �� H������              )            �T  ��  �q������      ��     
      ��  ��        ����  ����                           �� j ���� V�u�� 1 ��         ���������u L�������� ���� F�������������� 1���'������    ����  �� ����������    ��  ��       ����  ��    ����   ��      ��                                                          ��  ��       ����  ����                                                                 �� ��       ��      �� 
                                                                �� ��          ��  ��   
                                                                ��  ��       ����  ����                                                                 ����������   
����  ����  ��  ��                                                          �� ��   
   ����    �� 
                                                             �� '     �� + !  ��                                                              �� ����  �� 
���� )����   �� �� ������  �d��  ��                                         �� %     �� 1   ��    # #                 ��                                        ����������     ����  ����      ��                ��                                        ��  ��       ����       
                                                               
�� ��    
 
����    ��     ��                                                          ��           ��         
                                                             ���� 3     �� 7 #  ��    % )                 ��                                          ������       ����  ����  ��  ��                                                        ���� '��   �� �� 7������                                                               �� ��       ����    �� 
                                                            ��   ��  �� 
���� -����     ��     ��  ����  ��                                        ����  ��       ����  ���� 
   ��                                                          ��  y            j                               + F    �� H��         ��    ��      �� % 
        �� 7   ����                           ��                    ��                          ��                                  ����    ������  ����    ��  ������    ������      ������  ��������  ��                     ��      ��                ��       �� ��         
                                    ����    ������  ����    ��    ��      ������      ������  ��������  ��                       �  ���� ��\��   �b        ��        �� 5      �� )��   9����                          ��     �� ��     ��  ��            ���� 
          ��   
��                              ����    ��    ������  ��������      ��  ��         ��  ��������  ��                       (   *   ) > > ( ^ ^ ( i i + n n , � � * � � - � � . � � / � � - � � . � � / � � + � � ,     &   (   )   (   ' @ @ & ` ` & i i + n n * � � ) � � , � � , � � ( � � + � � *       > ^ i n � � � � � � � � � �      
 r � DFLT cyrl &grek 2latn >     ��        ��        ��    " AZE  "CRT  "MOL  "ROM  "TRK  "  ��    frac                    " 8                                                  �  3�   �3�  � fR    �           ADBE @  �  �   �K  �    $�                   �      x   Z @   ~ � � � � � � � � � � � � � � �:DHU[aeq~���� 
    " & / : _ �!"� ��     � � � � � � � � � � � � � � �9=GPX`dnx����      " & / 9 _ �!"� ������������������������������������������}�{�t�r�n�l�d�^�K����������������������R��!                                                                                                                           	

,�+X!!Y-�, Ұ+-�, /�+\X  G#Faj X db8!!Y!Y-�
  +� +� +�/� ֱ
99 ��90174632#".3#{J:9E <($: ��o<LL<&>$$>|��    o�u�   > �/�3�  +�2�/�ִ +��+� +�	+��99 013#3#o�&v$�%u���

+�@	+��+� +�
+�@	+��+� +�!+�6�?r�� +
�?t�� +
��+�+�+��	+��
+��

+�@.-	+�/��2�
+�@	+�1/�ֱ!�!�-+�2�, +�2�,�+�'�2+�!�9�-�9�,�999��$9�'�%999 �.� +99��'$9��901?32654&'.546753&#"#5.�5)^x:t�yX~b0����}7��1P4$y���N�n�^���)y^Xy3#G\rF����H�L%25QhAG��Y�p��5    A����  # ' 9 H � �5  +�= "+�/� "+�E/�- "+� /� "+�%2�I/� ֱ��+�	 +�	�(+�: +�:�@+�0�J+��$'$9�@:�%-5&=$9 �=�0@99� -�	99014>32#".732>54.#"3	4>32#".732654.#"A6_}Ib�Q6]zF6cS>#�eX>T&+I29U*�Hz���6^}I��6^zFEv\5�dY\\+J1:T*�h�o<c��m�m8!Fd�\��U�_EoY1V�����:�h�o<��m�m96i�o����CpY2W�  C��'� ' 2 E � �  +�#  +�,� +�C��F/� ֱ(�( +�3�(�>+���+��G+�3�9�>�#,1$9��/9��!$9 �,� 99�C� !16$901%5.54>3263#.'#".73267'>54.#"C":A2[�Y��@�t�|c,�?��2�X��h�q?�L�X[�8����96"55'"(E,Wa��I�LF�i>��O�|:	������6]�Dr�oT�NI=�{/J|F"'%*+2#B8"}   o�/�    �/�  +�/�ִ +�+ 013#o�&v���    ���A�   �
�+ 01 4.'3 ,)M_=��������ܵW��������   A�K�   � +�3�/�+ 015573%%#'5AB͆����J��Ҋ��}��*
  +� /�3��2� 
+�@	+�/�
ְ2�	 +�2�	

+�@		+�
	
+�@
 	+�
/�ֱ
+�@)	+�
+�@ 	+�++ �' �9��999��901357>54.#"'>32!b�JknKG-">pMX�<=M�tK�^H,?NwuSq~w�GiqV]NQN(9`P-F2�AP!;N]c4A}}s�xOi�  \���� > b �<  +��/�� /�(��?/�ֱ6� ��-�-
+�@	+�@+ �<� 9��9��0199� �#-99�(�$901?32>'4.+532>54.#"'>32#"&\4!V�?;dE44DSY/kk7m_;:b@O�55)p�Ie�a2��CrV2*Wz�co�I�%*6?> 0S>/�8`=+L<#9&�1!9axBr�/>[~IDlO.:    !  4� 
  Z �	  +� /�3��2�/�/�	ְ2��2�	
+�@	+�	
+�@	 	+�+�	�9 � �9��901533##%!47#!|��ȶ�.�=8���|�����y���ppv\�  \����   t �  +��/�
�
�L�M��#��!��"#!+�"#! � �#9 �!"LM....�!"LM....�@�*E�/:=?$9 �:�<9�H�%9�O� *4$9014>32#"&7##"&54>32>54.#"327#".%32>?&#"^H����pǚp:@l�LH`r�c�N��p�aK0s!D</G��}��i7e��a��#��lǦ{E�LF<vM.+C^�]ȇ�ҞX=r��mwȃHa`��}f��V.�s�!E_�IyɓQh���l��f5M^X=v��_K[]�F�l�    7  
�   , �   +�3� +� 
���/�+ ��90133#!!&'#7���˞������--��;��0e�[��T  ���J�  ( 2 w �  +�� +�0�)(
�)��3/� ֱ�)2��"+��- ���4+�-�
999��	90146$32&#" !267#"$&Oq��T�U1z��՗S,
Y�:%8�~����nլ"�p�=R������!�*c�  ���d�   N �
���/� ֱ	�2�	 
+�@		+�@		+�@		+�
���
/� ֱ	�2�	 
+�@		+�@		+�+ 013!!!!���-��Š���c     O��
���"/� ֱ��+��
+�@	+�#+��999��	99 ��9�� 99��	9��90146$32&#" !27!5!# '&Op�.�v�80���ܛU5�Q���Q����amڤ�s*�?R�������(���91�]  �  ��  ? �   +�3� +�3�
 
�	��/� ֱ�2��+�2��
3� +�3�/� ֱ�2�+ � �9901333673	#��2B����@�����8HU+����բ��    �  ��  , �   +�� +�/� ֱ� 
+�@	+�+ 0133!��x��۠       c�  � �   +�3� +�	3�/� ֱ��+��+�6���n +
����
��� �....�....�@� �9��	99��
9 � �990133363#5##'#g��X=3l�\�$dV����q8(��6����3��;�ۣ����4�P�������    �  ��  P �   +�3� +�	3�/� ֱ��+�
�+� �9��99�
�99 � �9901337&3#'��ث[���*�Z������hj�;�(������  O����  0 D �  +�� +�+��1/� ֱ��%+��2+�%�99 �+� 99014>32#".732>54.#"Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt��     �  4�   X �   +� +�� 
���/� ֱ�2��+�	�+��99 ��9��	9��901363 #"'32>54&#"����(9 rL�d5;cr�Y��z:�{$\tA�vOR
2�+�+/�8+�6�&�.� �.ɰ6���� +
��������+ �..�...�@�+�99 �$�9�1�
 99014>32$%&#.732>54.#"Og������^>q�]��7����CY��xV/�(Pp�XK�gR6$Ll�[^�pN&կ$�oo��죋�|!	=!�K`/V���y_��p?,Pq��T[��tDCu��   �  i�  ' p �   +�3� +�%� 
���(/� ֱ�2��"+�	�)+�"�$9�	�999 � �9��99�%�	9��9013632#&.'#32>54&#"�����D7=*Lc;�7*3�!?!����e�Q���:�;>1�VF|]C8�';&����FT��    \���� , h �*  +�� +���-/�
+�@	+�
+�@ 	+�	+ 015!!#E�=�#����#    �����  7 �  +�� +�3�/� ֱ��+��+��9 01332653#".��4]{L���7c��b]��]4_f��x�o7��m���֓c-+_��      ��  Q �  +�  +�33�/� ֱ�
� ����� �.�..�@ � �9013363#��r+5t�������(����J��;    !  ,�  � �  +�3�  +�333�/� ֱ��+��+�6����S +
� ������>�� +
������� �.....�......�@��9 � �999013363363#'##!ɰ>/`�ȴN[���^ǺK#O��������k������i��;1������     7  ��  & �   +�
3�/�+ � �99013	33673	#&'#7��O��[-4R���>�ݿ_J:e������Ym�Z�2�	F��v���    ��  2 �  +�  +�3�/�ֱ�+��99 � �90133>73#��y'
���6/� ֱ)�)�1+�2��7+�) �99�1�
#	�h��)NzLc��n�e\f���]�{a> ƭ�)e}߹Q�m?�k)(   S���;  = �  +�� +���/� ֱ�+ ��9�� 	999��9014>32&#"327#".SR�րO�+,^�Y�\2ϡ}p!Q�B���yіV"�3?n�R��2���  S��;  0 c �  +�  +�!� +�-�
/�1/� ֱ��'+�	2����/�2+�'�99��9 �-!� 	$9014>3233#'##".732>76=4'.#"SL��as�'�	�	d�T?wdS; �)MxL@tU		�ia�K�؏P\Ez�����=\8$Aav�XQ�l=7iF#0�1 _~k�   S���;  1 j �  +�� +�)�
���2/� ֱ�2�� +��3+� �999��999 ��9��9�� 99014>32!327#".!454'.#"S,Vw�[H{YE,�;eK�|$�Ρ�|�2%:b>$A4."_��h9#;RXdZ,9!_�V+7�E��""(VA*&/274     !  �,  X �  +� +�3� �2�/���/�ְ2��2�
+�@	+�
+�@ 	+�+ ��
9��	90153547632&#"!!#!�{f�WM5E0I.�����3�xc�!7PW49��n�   S�64; , ? y �
  E �  +� +�	� +�/�ֱ
I.��{�:��F<=2F!6!2EF     �    0 �   +�
3� +�/�/� ֱ�2�+ � �9901333673	#��..:��h����b�+?8n�M���m�q    �  a   �   +�/�/� ֱ��+ 0133����   �  �; 4 n �2  +�#33�  +� +�3�*�2�5/�2ֱ1��1�$+�#�#�+��6+�1�9�#2�9��9 �*2�
$90133632367>32#4.#"#4.#"#4��r�4_L9+N1nI.ZaG/�2hLOz�7U68eA�$��9N/O;&%Ad�i��Vh�McJ6*�q|?jM*9U2&8��Y  �  ';  P �  +�3�  +� +��� /�ֱ���+��!+��9��9 ��990133>32#4.#"#4��AWt?0_hM3�8aB[�
�
/�/+��99�
�	9 �+ � 
	$9014>32373###".732676=4'.#"S9_}�Eu�*�	�]�R\�yH�'KzN_�!	�h���t��[*eQ��t�MU6R4N�ʃQ�m?nb3+�/ ^}�   �  �;  < �  +�  +� +�
��/�ֱ��+��9 �
$$9� �999 �$� 9�� $9��901?32654&'$54>32&#"#"X.2�CchXk��3]�SM�,.duR\Yn��]�z�2�,WFDU(g�AqU1%�AT>?K,4�s^�R  (���#  U �  +�� +�3� �2�/�ְ2�	�2�	
+�@		+�	
+�@ 	+�+ ��9� �9015357!!327#"'&5(����CMD+	N\�KK���9����fg
+�
�9��9 ��990133267653#'##".���[���;VwC,RUE7�k����hJ-5����o�#A=%'Ic�    	$  ! �  +�  +�3�/�
��
����� �
....�
....�@��99 � �99901336733673#&'##(ď 
3�/�+ � �99013	336?3	#'&'#z��֘*C-?����sڞ Q3=��:qO_�� ���.�\\�  ��$  # �  +�
3�/���/� + � �90133>73
'67>7>54'��)����k�`-aC0ZN+W!$��lmYN#m�
+�@. 	+�#� ��2 +�2/�3� +�2�2
+�@	+�'2�5+�2.�99 � &�.99��99��990152>74'&54>;#3#".547654=,B%/WsG,$^R��U[$.FpX0Ao-)@v�2IpD!y^]!zm:�,+�<m{$^_x EvQDo�#�     ���Ol   �/� ִ +� +�+ 013������p   7�1� 8 � � +��8/� �(/�' +�9/�ְ2�2 +�2�2
+�@2'	+�� ��
+�@	+� 2�:+�2.�
99 �( �299�'�
99��
�/��2�!/� ִ  +� �+�
�9��9��901&6323273#".'.#"k�vB~wGD_&s�%IZ5,ZjN;1(!~̟�*9"�W�K$)$	
+�@	+�#/� ֱ��+�2� +�2�$+��99 ��9014753&#"327#5.'&��Ȋ�g,^�i�U#>Vh:�m!$�J�f�=}��(!��5�7j�mGz\B!8�&��MC�  {  	� & � �   +�$�/�3��2�/���'/�ֱ�
+�@&	+�@	+�� ���/��
+�@ 	+�(+��	9��#$99��9 �$ �9��9��99��90135>54'#53&54>32&#"!!!{p�
��?o�Z�W*Qt>^7<��
2� /�3�/�ְ2��
+�@	+�2�
+�@	+�2�+��99 � �90133673!!!!#!5!5!5!#��/(!7���x��V�����S����=eb]n��il�l��l�l   ���   / �	/�3��2���/� ֱ��+��+ 014632#"&%4>32#".A/-<=0-?�3.=>/)Q.A@/.BC-3@/.B)   O A}�  ' E � �/� +�A/�; +�3/�- +�#/� +�F/� ִ +��(+�7 +�7�+�
 +�G+�7�#-0?A$9 �;A�?9�3�
 (1>$9�-�09014>32#".73>54.#"4>32&#"3267#".Oh������gg������hmV��ur̒VV��rtΓV�Dt�SP�asd�BF�a@v'i�]�e6���kk������kk���x؜[Z��{xٜ\\�ہ[�g;%V2Q�ZW�T TD>k�     ? �d�    3	#3	#?"���%�F"���#�(��l�m���l�m    A	_�   5!A	��     Z<�   6 A � � +� +�
+�@56	+�.2�?/�  +�B/� ִ +��+�6 +�72�6�<+�12�$ +�,2�$�+�	 +�C+�6�
1 ,
"8 
9 �� 9017326'4'73#"&w :=)6�fyG>[%AQ/'Q�o^ #N�sS>/F)  4 �W�    7	3	3	#4%�ۛ#��ɛ$�ܙ#����l�m'�l�m�  y�6 - ! 0 t �% +�- +�/���1/� ֱ��"+�)
�2+� �9�"�9�	�9�
�
    , �   +�3� +� 
���/�+ ��90133#!3#!&'#7���˞���d�̜���--��;��0��O�[��T     7  
    / �   +�3� +� 
��/�/�+ ��90133#!!&'#37���˞������--������;��0e�[��T��  7  
    2 �   +�3� +� 
��/�3�/�+ ��90133#!73#'#!&'#7���˞������碊�\��--��;��0�����Q�[��T    7  
   $ ,  �   +�3� +�% 
��/��"+��2�-/�ִ$ +�$�+� +�.+�$�%99��)*$9��&99 �%�)9��$990133#!&63232673#"'.#"!&'#7���˞����PF!8+d�8N*.?��--��;��0fz		#2�*a�G�[��T  7  
    ( i �   +�3� +� 
��/�&3�� 2�)/�ֱ��+�#�*+��999��99�#�999 ��90133#!4632#".!&'#4632#"&7���˞���s>-.<<00M��--�>/-==1.;��;��0�-A@..A3���[��T�-A@./@A  7  
�    ( } �   +�3� +� 
��/� +�%/� +�)/�ִ +��"+� +�*+��9�"�
�3��
���/�+�6��w�P +
�.�.��	������	+�	+��
�o�    �  �   R �   +�	� +�� 
���/� ֱ	�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!3#���<���� �̜Š�.����    �  �   M �   +�	� +�� 
��/�/� ֱ	�2�	 
+�@		+�@		+�@		+�+ 013!!!!!3���<���������Š�.�����     �  �   X �   +�	� +�� 
��/�3�/� ֱ	�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!73#'#���<����$��棊�Š�.�������   �  �	   " ~ �   +�	� +�� 
�� /�3��2�#/� ֱ	�2�	 
+�@		+�@		+�@		+� � ���	�+��$+�	�99��9 013!!!!!462#"&%4632#"&���>����?[;;0-=�?/-<<1-=Š�.����,A?./AA/,A?./AA  ��  }   ' �  +� +�/�ֱ�	+��99 013#37�˛=������;    �  G   * �  +� +� /�/�ֱ�	+��99 0133������������;    ��  3   0 �  +�	 +� /�3�/�ֱ�
�9+��9�*7�-99�+�9 � �99�-�79901337&3#'&>32	32673#"'.#"��ث[���*�Zq#D//
������hj�;�(������Ce8
a     O���  0 4 G �  +�� +�+��5/� ֱ��%+��6+�%�13$9 �+� 99014>32#".732>54.#"3#Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&��˛ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt����     O���  0 4 G �  +�� +�+��5/� ֱ��%+��6+�%�13$9 �+� 99014>32#".732>54.#"3Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&f����ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt�����    O���  0 8 G �  +�� +�+��9/� ֱ��%+��:+�%�14$9 �+� 99014>32#".732>54.#"73#'#Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&�ߓ梊�ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt�������  O���  0 R � �  +�� +�+�I/�C�PCI+�4�F2�S/� ֱ��1+�R +�R�F+�G +�G�%+��T+�FR�+4I$9 �+� 99�I�1R99014>32#".732>54.#"&632	32673#"'.#"Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&�PF/	e�4Q	&.ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt���dy
	#3�)_    O���	  0 @ L j �  +�� +�+�>/�J3�8�D2�M/� ֱ��1+�;�;�A+�G�G�%+��N+�A;�+$9 �+� 99014>32#".732>54.#"4>32#"&%4632#"&Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&�
	999 �,�9�"�

�3!
���5/� ֱ*�*�2+�2��6+�* �&999�2�
!'()$9��99 �!� 4$9�
�9��9014$54.#"'>32#'##".3#32676=$MJ42\>2d[%,C�b^�X8�0�kN~N*�����fMc�	�?��8G3#$�*22RsvC�t�f�D[4Wl���z[]fJ!�
  M���� % 0 4 } �  +�!  +�)� +�
�/!
���5/� ֱ&�&�.+�2��6+�& �99�.�
!124$9��3999 �!� 0$9�
�9��9014$54.#"'>32#'##".732676=$3MJ42\>2d[%,C�b^�X8�0�kN~N*�fMc�	�?�������8G3#$�*22RsvC�t�f�D[4WlQ[]fJ!�
�9��    M���� % - 8 � �  +�!  +�1� +�
�7!
���9/� ֱ.�.�6+�2��:+�. �&999�6�
!'(*-$9��)999 �!� 8$9�
�9��9014$54.#"'>32#'##".3#'#32676=$MJ42\>2d[%,C�b^�X8�0�kN~N*�Άғ�ufMc�	�?��8G3#$�*22RsvC�t�f�D[4Wl�9�����z[]fJ!�
   M���� % C N? �  +�!  +�G�8 +�,3�A�@2� +�
�M!
��5;
8
�<3�5�42�O/� ֱD�&D +�C +�D�L+�2��8 ��9 +�P+�6���+ +
�@.�4.�@�,��4�<���Q�a +�,�-,4+�3,4+�@�=@<+�?@<+�-,4 � �#9�39�?@<9�=9 �-3=?....�,-34<=?@........�@�8C�
!+;G$9�9�99 �M� D$9��N99�
�9��9�;�&C99014$54.#"'>32#'##".&>3232673#"&'.#"32676=$MJ42\>2d[%,C�b^�X8�0�kN~N*�&9#2#g� <,#(2WfMc�	�?��8G3#$�*22RsvC�t�f�D[4Wl�5V:

(4�c�U[]fJ!�
    M���� % 2 = K � �  +�!  +�6� +�
�<!
��0/�I3�)�B2�L/� ֱ3�&3 +�-�3�;+�2���E ��>�>/�E�M+�-&�!9�>�
6999�E�99 �<� 3$9��=99�
�9��9014$54.#"'>32#'##".4632#"&32676=$4>32#"&MJ42\>2d[%,C�b^�X8�0�kN~N*�A.0>0->5fMc�	�?a2.=3.=��8G3#$�*22RsvC�t�f�D[4Wls.A3-CC�[]fJ!�
*3@/4C  M���/ % 0 > L � �  +�!  +�)�J +�4 +� +�
�/!
��<C
4
�< +�M/� ֱ&�&�1+�? +�?�.+�2��8.+�G +�G/�8 +�N+�?1�!9�G�
)4<$9�8�99 �/� &$9��099�
�9��9�JC�8199014$54.#"'>32#'##".732676=$4632#"&732>54&#"MJ42\>2d[%,C�b^�X8�0�kN~N*�fMc�	�?#{e@c59d>`}o3!4?41:��8G3#$�*22RsvC�t�f�D[4WlQ[]fJ!�
9Yv6^;8[4sT5#!6!4GH     O��O; : J W � �/  +�63�*�>2� +�3��R2�K%/
�K�2�K�F��X/� ֱ;�;�C+�2�%�K2�%�L+�"�Y+�; �99�C�6999�%�23$9�L�*/R$9�"�$,-999 �%*� ,23;$9�F/�?9��"$9��9014$54.#"'>323>32!327#"&'##".73676=&!6.#"OM1
���3/� ֱ�2�� +��4+� �&/1$9��999 ��9��9�� 99014>32!327#".!6.#"3#S,Vw�[H{YE,�;eK�|$�Ρ�|�2
���3/� ֱ�2�� +��4+� �&/02$9��1$9 ��9��9�� 99014>32!327#".!6.#"3S,Vw�[H{YE,�;eK�|$�Ρ�|�2
���7/� ֱ�2�� +��8+� �&/13$9��2$9 ��9��9�� 99014>32!327#".!6.#"3#'#S,Vw�[H{YE,�;eK�|$�Ρ�|�2
��8/�E3�2�>2�H/� ֱ�2��/+�5�5� +��B +�;�;/�B�I+�;5�&$9 ��9�� 99014>32!327#".!6.#"4632#"&%4632#"&S,Vw�[H{YE,�;eK�|$�Ρ�|�2
�63�/��?/�ֱ�� +�> +��+��3+�2 +�2/�3 +�@+�6���2 +
�;.�-�;�$��-�6����ş +�$�%$-+�,$-+�;�7;6+�:;6+�%$- � �#9�,9�:;69�79 �%,-7:.....�$%,-67:;........�@��9�2>�#5$9 �5 � >990133>32#4.#"#4&63232673#"&'.#"��AWt?0_hM3�8aB[�

f�!=(
(4�c     S��`�  ) - G �  +�� +�$��./� ֱ��+�	�/+��*,$9 �$�	 99014>32#".732>54.#"3#SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3&���	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojt���  S��`�  ) - G �  +�� +�$��./� ֱ��+�	�/+��*,$9 �$�	 99014>32#".732>54.#"3SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3Ͼ���	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojtg9��   S��`�  ) 1 G �  +�� +�$��2/� ֱ��+�	�3+��*-$9 �$�	 99014>32#".732>54.#"3#'#SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3.φђ�}	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojtg9����  S��`�  ) O � �  +�� +�$�D/�>�M>D+�-�A2�P/� ֱ��*+�O +�O�A+�B +�B�+�	�Q+�AO�-$D$9 �$�	 99�D�*O99014>32#".732>54.#"&63232673#"&'.#"SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK33RG
g� <,2	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojt�jz	(4�	
c     S��`�  ) 9 F j �  +�� +�$�6/�C3�/�<2�G/� ֱ��*+�3�3�:+�?�?�+�	�H+�:3�$$9 �$�	 99014>32#".732>54.#"4>32#".%462#".SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3	*0=02�A[>3 2	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojt)3.B4.A@/44  S��`t  ' 2 x �  +�*�  +� +�!�	 +�3/� ֱ��/+�
	999 �*�99�!�
99014>327#"''7&&#"32>54'#SR��n�v\V^NT*Jcu{?�saQ\��M�Jp9aF7!�IiJ~V1J�ՍMK�;�K�|^�y_;K�B���me@"<N]`�u=>l�X�p     ��� �  ! a �  +�  +�� +�3�"/� ֱ��
+�
� !$9��9 ��990133267653#'##".3#���[���;VwC,RUE7�����k����hJ-5����o�#A=%'Ic����     ��� �  ! a �  +�  +�� +�3�"/� ֱ��
+�
�!$9��9�
+�
� "%$9��9�
+�
+�,�,/�3�
�0699 ��990133267653#'##".4632#"&%4>32#".���[���;VwC,RUE7�@/,=*->�3.==02�k����hJ-5����o�#A=%'Ic��.A@/)C-3@/.B4   ���  " # �  +�
3�/���#/�$+ � �90133>73
'67>7>54'3��)����k�`-aC0ZN+W!����$��lmYN#m�
3�/��)/�63�"�02�9/�ֱ&�&�,+�3�:+�&�99�,�99�3�
9 � �90133>73
'67>7>54'4632#"&%4>32#"&��)����k�`-aC0ZN+W!�@/1>0->�3.>?//<$��lmYN#m�
���"/� ֱ��+� +�#+�6�<��2 +
� ����!��!+ �!.�!...�@��$9��9 ��9� �
�(/�#�@2
���B/� ֱ7�7�?+�2�� ?+�+ +�+/�  +�C+�7 �99�+�
2:$9� ?�-/99��#(999 �2#� %+999�:�-9�@� /7.$9��A99�
�9014$54.#"'>32#327#"&547'##".732676=$MJ42\>2d[%,C�b^�X8	6 69060JlWli0�kN~N*�fMc�	�?��8G3#$�*22RsvC�tO}3*u467d5bYv��D[4WlQ[]fJ$�
     O���  # = �  +�� +���$/� ֱ�%+ ��9�� 
999��	90146$32&#" !267#"$&3Oq��T�U1z��՗S,
Y�:%8�~����nR����լ"�p�=R������!�*c����    S����  ! = �  +�� +���"/� ֱ�#+ ��9�� 	999��9014>32&#"327#".3SR�րO�+,^�Y�\2ϡ}p!Q�B��������yіV"�3?n�R��2���Q9��    O���  ' = �  +�� +���(/� ֱ�)+ ��9�� 
999��	90146$32&#" !267#"$&3373#Oq��T�U1z��՗S,
Y�:%8�~����n�����ޔլ"�p�=R������!�*c���  S����  % = �  +�� +���&/� ֱ�'+ ��9�� 	999��9014>32&#"327#".3373#SR�րO�+,^�Y�\2ϡ}p!Q�B���Ԕ���ϊyіV"�3?n�R��2��������  ���d   # R �
/�D/� ֱ��'+�	2����/��3+�; +�E+�'�99�3�1799�;�8C99 �-!� 	$9�
�7;C999014>3233#'##".732>76=4'.#"654.'7SL��as�'�	�	d�T?wdS; �)MxL@tU		�ia�KN� 0/�؏P\Ez�����=\8$Aav�XQ�l=7iF#0�1 _~k�7Xl6-Y3-R65 ����m�  ! y �  +�� +�� 
� 3��2�"/�ְ2��2�
+�@ 	+�
+�@ 	+��+�	�#+��999 � �	9��9015363 #"'3   !"!!������mgi��ֱ��@2C���م[��u��|!�������ihl���	G2,��   S��� # 8 � �  +�  +�)� +�5�/�3��2�/�9/� ֱ$�$�/+�	
+�@/	+���/�
+�@	+�:+�/$�99��9 �5� 	$9014>323!5!533##'##".732>76=4'.#"SL��as�'�Q����	�	d�T?wdS; �)MxL@tU		�ia�K�؏P\Ey��y�Y���=\8$Aav�XQ�l=7iF#0�1 _~k�     ��<�� " i �   +�3�	� +��/�� 
���#/� ֱ	�2�	�+��
+�@	+�@	+�@	+�$+ � �99013!!!!!"#327#"&54>7���<���/O6,4,Kg]l:L,Š�.���IX'(g.^T8pM     S�?�; 5 C � �2  +��  +� +�>�'/�"�62
�6��D/� ֱ�62��++� +��7+��E+�+�>999�7�"'./$9��$%$9 �2"�$+999��9��9�6� 99014>32!327327#".54675"#.!6.#"S,Vw�[H{YE,�;eK�"\-_D4%;,Gj<W0_>	'��{�0	*8U49_A0_��h9#;RXdZ,=_�V+7�#Jb+-/b4'N6I�*��!BH>2(?SS  �  �   U �   +�	� +�� 
��/�/� ֱ	�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!3373#���<���� ����ߓŠ�.������   S����  . 6 m �  +�� +�&�
���7/� ֱ�2�� +��8+� �&/4$9��999 ��9��9�� 99014>32!327#".!6.#"3373#S,Vw�[H{YE,�;eK�|$�Ρ�|�2
/� ֱ� 
+�@	+�+� �	99 0133!3��x��������۠��  �  9T   % �  +�/�/�ֱ�	+��99 0133������S������  �  ��   b �   +�� +�3� 
� +�/� ֱ� 
+�@	+��	+��+�	�999��9 ��90133!>54'7��x�8G]J�$4!7KN+��۠�G<H>W3/M4%     �  �(   G �   +�/�/� ֱ��+�
99 � �	
�	��/� ֱ� 
+�@	+��+�
�+ 01334632#"&��`>++::-+<��Y-@?.-AA    ��  �� 
+�@		+�	
+�@	+�+ �	� 
  +� +�/�/�
ְ2�	�2�	

+�@		+�
	
+�@
	+�
�99015737#��������������w     �  �   V �   +�3� +�	3�/�/� ֱ��+�
�+� �9��$9�
�99 � �9901337&3#'3��ث[���*�Z����������hj�;�(��������  �  '�  # [ �  +�3�  +� +���$/�ֱ���+��%+��9�� !#$9��"9 ��990133>32#4.#"#43��AWt?0_hM3�8aB[�
�+� �9��$9�
�99 � �9901337&3#'3373#��ث[���*�ZL�����������hj�;�(���������    �  '�  ' ^ �  +�3�  +� +���(/�ֱ���+��)+�� 99��!$&'$9��%9 ��990133>32#4.#"#43373#��AWt?0_hM3�8aB[�
�
+�@	+�.+�& �$9 ��&9�
�H��U/� ֱ2�2�:+��H2��I+��V+�:2�-99��	()$9�I�
���,/� ֱ�2��"+�	�-+�"�()+$9�	�*$9 � �9��99�%�	9��9013632#&.'#32>54&#"73�����D7=*Lc;�7*3�!?!����e�Q���:e�����;>1�VF|]C8�';&����FT�����    �  ��   B �  +�  +� +�
��/�ֱ��+��9��9 �
���0/� ֱ�%2��*+�	�1+� �9�*�"$$9�	�999 � �9�%�99�-�	9��9013632#&.'#3373#32>54&#"�����D7=*Lc;�7*3�!?!���Q����ߓ��e�Q���:�;>1�VF|]C8�';&���������FT��   y  ��   D �  +� +� +�
�� /�ֱ�
�!+�
�9��99 ��
99013373#33>32&#"#4y����Ί��=M\0#.BmF
$&')$9� �($9 �$� 9�� $9��901?32654&'$54>32&#"#"3X.2�CchXk��3]�SM�,.duR\Yn��]�z������2�,WFDU(g�AqU1%�AT>?K,4�s^�R�9��    \��� , 4 p �*  +�� +���5/�
!*.134$9�$�"2$9 �*� 9��

$'*,-$9� �+$9 �$� 9�� $9��901?32654&'$54>32&#"#"3373#X.2�CchXk��3]�SM�,.duR\Yn��]�z�1����Ί2�,WFDU(g�AqU1%�AT>?K,4�s^�R���� ��  C   J �  +� +� �2�/�/�ֱ�
+�@	+�
+�@ 	+�+��
$9 015!!#3373#E�=�̣���ޔ#����#똘�     (��/  ' { �  +�� +�3� �2�(/�ְ2�	�2�	
+�@		+�	
+�@ 	+�	�+�! +�)+�	�'$9�!�999 ��9� �9015357!!327#"'&5654.'7(����COA/N^�KK[S�-'3)���;����gf
�) +�</� ֱ��+�, +�,�4+�& +�&�
+�
+�
� "#%$9��9 ��990133267653#'##".333���[���;VwC,RUE7խ��í���k����hJ-5����o�#A=%'Ic�f)��)��    ��   ) k �  +�  +�3�'/�3�!�2�*/�ֱ�+��/���+�$�++��99��99��	9 � �90133>73#462#"&%4>32#"&��y'
22�/���)/�*+�6�?��� +
���� 
�����+�
+� � +� + � ....�
 ........�@ �	�9��90173267#537>3&#"!!#""6Ea_2��
"2>>41;`YvuZUrsT"
�.�
f�!<+$'1�jz	(4�c    A	_�   5!A	��     A	_�   5!A	��     A	_�   5!A	��     A�o   � /����/�+ 015!A�넄  A�No   � /����/�+ 015!A
/�ֱ�+ 01>?K&"	�%z-�0���:���N     .��t   � /� +�/�ֱ�	+ 016?.$K�%y-��d+s���M    M���   A � /�3� +�/� ֱ��+��+��9��9 � �9016?6?M%y-{#L%y.{$Kֈ4M
 6 �/� 	+� 	+�/� ִ
+�+� �99 013	#?"���#�(��l�m     4 ���  ! �/� ְ2�
+�+� �9 017	3	4%�ۛ#�ݕ���l�m  � V$�  # 6 � � /�!�/�'�4/��/�3�
+�@
22��2�,
+�@,	+�� +�/�
+�@	+�8+�$ � !99�,�99��9 �'�99�4� 999��	
99014>3235!5!533##'##"&5!32676=4'.#"�:e�L8`A������#�`��0���tgJt
%4F%iy�\�f82"�l��l�quL|AM��2��}o�WH"g!8)�    ��?� / y �*  +�#� /�3� +�2�/�3� +�2�/���0/�ֱ�
+�@	+�2�
+�@	+� 2�1+��/99 � #�&9��90153547#53676!2.#"!!!!3267#"&'&'~��(����+-�F�s`!c��|��_v�O�/%8�c��O�$m!">o挶G�#vd�o@%m�f,�&4e_��    Cq0�  ( � +�	33�  +�2� +�% +�2� 
+�@ 	+�(222�)/�ִ +�
+�@	+�
+�@ 	+��+�( +�(�+� +�*+�6�?��. +
��	��(�'��� +
�#���%��
�.���&�����+�+��+����z +�#� #+�!#+�"#+�"# � �#9�!9� 9� � �#9�9�9 @
%999��9 015!##33>73#.'##.'#C�uW,�fg�.w'lzlbcc���T�� w	q(��_r�)��T.)29m��      ''  ' �   +� +�/� ִ
�
���.j�
M�N
NNN�ONO�PFP�Q*QfQ�Q�RDR�R�SPSzS�T`T`T`T`T`T`T`T`T`T`T`T`TnT|T�T�T�T�UU(UlU�U�V&V|V|V�V�V�WjW�X�Y    X                    �  	   �    	   �  	   �  	  8 �  	  $ �  	  t  	  "�  	 �  	  4�  	 	 B�  	  2*  	  H\  	 � �  	 � 0� �   1 9 9 2 ,   1 9 9 4 ,   1 9 9 7 ,   2 0 0 0 ,   2 0 0 4   A d o b e   S y s t e m s   I n c o r p o r a t e d .   A l l   r i g h t s   r e s e r v e d . M y r i a d   P r o R e g u l a r 2 . 0 6 2 ; A D B E ; M y r i a d P r o - R e g u l a r M y r i a d   P r o   R e g u l a r V e r s i o n   2 . 0 6 2 ; P S   2 . 0 0 0 ; h o t c o n v   1 . 0 . 5 7 ; m a k e o t f . l i b 2 . 0 . 2 1 8 9 5 M y r i a d P r o - R e g u l a r M y r i a d   i s   e i t h e r   a   r e g i s t e r e d   t r a d e m a r k   o r   a   t r a d e m a r k   o f   A d o b e   S y s t e m s   I n c o r p o r a t e d   i n   t h e   U n i t e d   S t a t e s   a n d / o r   o t h e r   c o u n t r i e s . A d o b e   S y s t e m s   I n c o r p o r a t e d R o b e r t   S l i m b a c h   a n d   C a r o l   T w o m b l y h t t p : / / w w w . a d o b e . c o m / t y p e h t t p : / / w w w . a d o b e . c o m / t y p e / l e g a l . h t m l W e b f o n t   1 . 0 M o n   J u n   1 1   0 8 : 0 6 : 1 5   2 0 1 2       �g f                             	 
   

Zdotaccent
zdotaccentuni2000uni2001uni2002uni2003uni2004uni2005uni2006uni2007uni2008uni2009uni200Auni2010uni2011
figuredashuni202Funi205FdongEurouniE000����� K�PX��Y�F+X!�YK�RX!��Y�+\X � E�+D� E�+�+D� E�+�+D� E�  +�+D� E��+�+D� E�Q+�+D�	 E�1+�+D�
 E�	"+�+D� E�
(+�+D� E�+D�
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[14]=<<<'PACKAGER_BIN'
wOFF     ��    H                       BASE  �   J   �c�[�FFTM        \�]�GDEF  $       . GPOS  D  �  8
12��y V 4 xڽ[
]�^ꣷ��+z�ޥ��o�w�{��������i��1������Zi���}�(z;8����������'*k���Q��l�+{���+h�zǷA�2:Ku8���p<�;�ԩ&�G�
��:B��3�?A=���Qug'��k�tZ����&~��(�y�����>��O����/�o���i�j�6��V�-���>����Q��� ��˨P/������RF�-G[1����8�>w��= ��� �E�=�ۃ�=�ۃ�=��U$����3י��_��6G_�|�p�����a?]��	�},R��|��̿U��;�n��
�iDM��si�[����_�HGCs��x�)����$5��s���cS������κ�K������P�H�-=^y ��Ԥ���=uJ��=YM �&��4�$�>��@V�pwF�T'��@k3�&�Z��c旌�E�MZ�4휳���
�'I77p����;��<��{:Z�{ԓ�i���
�󕏯����nVW��>��N��M,"3���zs��� '>	I��@�^A�K���f��f���%5Vn��5�����b��i5l��p��YCw`�M�Z�������H��};��J\� T؃�M|!p;j$�{�4��*��0�!f`�k5Ԣ/��K�̃v
Go�|����(Ji���Ƃ��|Q���
�H,K��u�R�W���0��6�K��C�z�&���r2)��Ɲ��b�z��Ī]hq�=(�7
g���~�~���W��\Ko��,��/*��F�	�|��� /fý"�1��ӈ`&$��a�B�[�Oع;9~.���03�щ�9��sF�D�.p��W�cL|��g�0Ǭ����'�vLWǴ�6���q�.|������G�</�^��{�N�r~璟=��kBm�zf�ը�G��8�Փ"]S2�ᒌL�k_3��|�љ��-z��@�`�؍X1���6E>C������H���X����A�cZ�Yg��(��"�W����B�%�L�Q�	i���ysѬ��eq-�7a
� PE��(
�$QY#��z/�O����M���
�M�œ��q%[P)�5\jT
]\��BG��
]*�.�Х�:��	u"B�*�S@�4H4���Q���4z_1u*�<`%"�8��z�B/W��
�\�
p��R��� ���:�B�J�c%���o��4,4��V	M����i�D �4�#`����c�U���
�pj��JvgSF��r�Ӵ����f��w�o����x�o˫/q����F�l+�Ǭ�Mߩ~[7[����c��(y�сnn�Vs����(���������xwR�@�x��4|0�f��|�>ܜX�A}]x%��F�s��	����4��IL�Y�/�]f5y�y*���W�M�d=4�n9��f��葇
��-����yE|^�h�1�����6��mD~�o�������Ǹ�<���%�#���?`��0��������!�[/ڶ:�v9"b[�(��a6��~�uɱ\�x����$>{��Df����vL|P>|<	�5��G�	��E�$�k�G��>����NbL5"ôNb�Q�.�_������n���.j���91̪'�u��o�:���q�k��D<y\�Q����vD�G�uZVfy&�����K).+>�����4ދ�\ �A�b@������Kcԝ�=
F��T)�><�����뢷3z�+�{�؇R4%�[y���3g�C���q��}��ϬK�⬝K	�.�Q����˾n��)�����Ӯd��!Uӆγ:K7�up�i19j��C���-�f:-�T��07�y��_g(o��9ɗx�����MWC�¼�Iɞ���,�vZ�	�>����h
�����)!:f�ݘ�R���vj?n������u����Yȗce�:�ޣJE�����Y�d)���:���ϳT�ٺ&����#f7���y��O-U�B٫\9�bȌ �T�f��_v�
��]�� �\y�`(�#Kv�p�Y"�V�X�H��Y�m͒ok���Fɔ�JV�]�8��� 6I��]r:��<`����$��Q�>p,�A2d^O-�!k�{�8��A2X��Z���i���Q2F�V�T&;:�Ғ�:�3:s����4�{)���*]x�c`d``�b(bhb`qq�	a�J�,�aPK/J�f0�I,�c�c`�a����[���1�U�A�9(H��� � _ �

����;�4���:	�!�qK��ͺ�����b00����.?�R��4�j˰��Ѽ�3��4@Skm���!��qK�˦�6����$���tUS�����]���`�*́��Vy&ҷ$�,
9�����@�HƼIJ;ㆵƑ���6O��<�Mmo��Y�w�K:�Ȇ�b;b)�	DBFU��Ͻ,�R��@��������D<��u1Vz~���ˊ�V�΋Bwo�j��)��^ξ���Ac�����J��<,�4hCz7z���ꈫ�>�'ӿ�Z     �� x��}|U���U˲5�.*�%Kn�lU��qzb;��HBR	I @B!�J�K���P>�CY�K��ޖ��z���۷�b�;���vB�������-ɖ5��{�9�S�a�kNM6*�d��LgRYS��)�\EE*�e*�`	�1Q����N���Tt�V�@Q!�.}�Y���T����D*D��,.�d��7
�dUu"���s��)�y�Y�RT_�-��صgy�����F��Qy���3�2˹߰W)�a8F�42T�.F�h�ڊ04!�;��Z��5�jRѥ��D-,C��2��QU�$�۷�x_)����oV���x���}���2.2�I Rk~$�P�ٖW�ED���dy��k�P'gp���J��J����C)�.��E!��XW�Ĩ|im�*��dUt6��
Ac�����a1�/,Q�Ȗ�q�
!^�bӪ`,Y/6���c�D(0t�jSE'G���;\�S���'VCg�Ug�O��[��
^�&�1��_�DYWAޘ
�U!�I�~�-)X�B�q��p<���\,O�"�M���p���$x4�O,Hv��f��]s���\7��s��C�wU��zs��������>�k�������x��X5t۫��}��s��$+��e؋�O�{��glΒ�i9��哌��0~&�g�3���S�焺lҳ!�����(ԥ����qA5���#�
�I`�)���aAWp	�5n$�h^��h	}�U~K�ϼ�%>{㈹���gn�7�ѳ�[0�q��\1"��X�(7|éHO|������
�n��J'��^b��aT9��8�k(�����h��"��Il� �(3�N�L�~�	�Q%�U�J�k[���z��;����y��6���I�K�ב��Y����[�L���ģ�ܛ��b�bK��tH��9�f�ߧqh��M����c뵵�����#�;Ă�⦙���ڷ|���#���64�ڡ�bIyE��3��x#g�	Q{P��@6�q���B����Q�3��;��`[��2�p����W���Ho7�Û��fG���-k�հ/�;v%�$ҷ�~w{���Ó��y�����<�����ye���,�$Ʋ��
@h��ԀǍMDŪ=%m�c������Ht�����m��?-;���Q��'e~�p�h'N���������:Y���+�ez-bR�h�s"d�2@�t���8%88+G�6��&~�����v�t:}�	���`��h
V#-AM"�e��k�*v�=�w:N��S>X��ifR:T��Gȇ?� )v*�9�T3X�=0Qx����W����4T�� y�)fL#jc,ʂ�a;F�td�o��>�ͧ�t�=7���T�e�C�")x~nzK�����z��LI�5��n�~��9�+�����*�%5ؒ�e����)���A�9NA�&2�$��QI�����O��X���&������z� ��������h���;&:�{RN����M�ħ:��
��g$�l�S:�Ͳ�(���H,Ѩ�U�ڏ�p*@�)r��m���+G
	��ĸ�G(,:Ƌ��0��As	�a���Gr,`���"^���X#�"�h$2O�~�h� �j����s8O�oF�=ikS��!QGqD��Z�$�lv��vns�ݱXي�#�����U�¤|�'�-k�.S��Voj,��r��騹��bt�'��^�N�Y7h�Rd7N�n���vk���A�DA.�@'NcRZY��"���,��9$h�	�aQ��#pᔆ��
6WK��7�J������7��\����� A�J�|4�Q�����÷�>����ꆚ�C��k��Nݺ���=�+��H�����XĬ��2�A�Ѩ��|�2wH�����{��n��[���7�F����ǹN=�@���8��<�
���:^$�Ii	�Ρ�Z��ȖA;�U�G�M?0�����U3��{�z�ک�:n�骥/5�)
��9c��9�S�w�ڪ_�~aצQ��Q�?���'���L������&� MHT#i�T�� ��o�U��.X�	�`�E�i����N�`͕@DԘ���#�:�SG�`�8��&�t�H"�%jըM+����)9ey��zE���W�6��#K�}y�+d��y
|�k���{�BG��%���T�=D�2��"jQ�X �y����������(6�����(��
.�:=tzYÙ�x< ���r����-[v!��B�~Jy��ʌb��H��!�MɣZ���D�j��8�[��}� 7N����?���֍
GW�[_r����ǛcK"�'�9��6�gv=��%�
��Hr�O�m�[�����.o�j��}a�qRl����;v,��*=�1�s��/� #&3�Cp1�D%�7�`�ͅ<�l>�d���+��V�Eq/j})��Z�L�

�������mpEz����^�jp�Lص���J40I�'@�P�4��g(y	�s� |E~�����o�Tm=����n����%�j�w[��7g��I�{��6����[�J�VJ^��7�~}&qJ<U|G��I�NjI;	�H�E��i�vR\eÂ��ҁ��tDf��<����컯��W�ٻ���D��;Z�+\�,��q���=��>�x>
J��U�?)�J4��R�3�,_���ī�F5>���A^�N^�6��8��^h�A>u<�8�����J�����[䲎�n��SZl���<�v�Pv�y�բ���̋\�)b2�"q��<�j�l��������ԔEd)Q�ό��y����'w~��F������y�D�wA����J?��e�ɘ���J��{3�٧�T.Ɯ�V3�����PV.ф+�ń��¦	YFQ�Jf֮̕��m	_>�&�_m�'�}L~��t���;]��4U,Ӓ�yW�d�����7���w��"���{ �Z@��R��h�
M��n�a5�%�f�g/��O���:��uL�?�G���F���a�0�Ա�p��u=��~�Ƨ�_��O�}�RV7f֚�Q7.�{ۖ�3sƽ��}쯞"޷��鹯���}~s�o��'�x������1+��3a�S�2h�=]}�Ƃ~���L�O��5=]9f�E��,c�)�A'�.t�1��C-�9���B��d�������?�ȩ"�ė�u[i�h��?�>?V7o�cS_|pC���q�wƚ�������?玸}��ݹ���+�>8��WBEB^D�f��Z�"B�.�	��4�F8Ya��Lc-5�|>z�1�#M�w��|g?��tbL!�[0C�Rʼ�L#��ܤy�r(��'J#zm�V�b�L����t����	*����{�rV��3��N���S�m��w��z�t̊����=z����_���gq���	��ֿ
׺�
��ء�CΤ�l� �F?�C�a�����;ٴ�շ�\ӵx�O�ъ;�
c����Ť���n8��<���/�ɞG��^Pʌ����L��\�1iG�"0��g X�?�0l)\�1�A����kF?���ļ�͝y�֙Qv6w����,O��n٩C7�=/P1��ct@��}�q�JQ��t
`��Օ�&�|��KI��V�Hv���!�"��g���n|f]��u�����I�Gi��b~�q���t�J�-��j���ya_��O�Ճ�.2�����d�R�IB3�����1�ȿ�ͷ����鯽���֋�l
O��oQx��>����5�����b��DGH��a�/�NK�|a�S@����ZDI�,�UD��0+Έ,Z_O���b��$L�$G�K�����1=���{�?Ӎ�g_�:{��vA��3����L]v������-k��Kpm`��^�6^qʐ�*�FZ5��-9�P5cu���7VѨ�e��_�>_�+t���O�6U��^􏤽�)6��8%��ʮ��%\s��� ?I)�,(z:�ZB) �h$�S��Ban��Yܖ.�k��p�#�v�BPZsr���4uZǶ�]�gXr�t=���q�Q�VR���4�IS��*,�a�G��ȝ'O�]����u�ي�O���9�3��	�b/;a��7��ü�iy��|3����h:#�C}�J�J��A$Vr�0��j�L�P�w���������Z�i�J�S짹�\FNMf(��+y};y���.Ez����T7�����L���᧧-�ƀF��t�݊�'�d�$�U���
np��H����f�Q��	Oa���Gm2�d�+�XU���W�6���J_�%k�[���h�[��ɲ�
I-S�t��B7�Ò�b�\�W��Z�<���RYii`���9+��c��e��d[	���?JMLnwó�_9�����f�JG��7��-�~���z�~��_��?lX�*����m����l��~��EIOݸ)�U&ݳwN�Hl��{��T�Nj)7�}�p"�d0�U%`.���(��SDd�=X	FG���+�Du�R�<v6`�<>�C�W�B��p!����I`z[�st	�w_s�=��
bC�F:Bҧ_�v튜X7ϵ��N��M�:u%���O:����T2M�z&��EJ{� b�]�P����f�=���U��
+Ϭ����T���v���^�C`����4;�J�{�_!�8�3<Pg���U�M�5���y۾��c���%Ӄ�W�i�
�^ᇳkg�ɸ)7�� ��\5���3�R��#'Vm�i��,
��V��X��j
`uY�1� Ɨ�!�_*�,���b�	}��q�z�Fg�N�ʊ��+G��z9�ht���%{bb�fA�!�e���7\��PG��$�e���{�d'-��m��xy�J�ڦ+�ʓþ��͜j���x��X�C>k��GsGz�D��3�!4�J0�Ez���lR�RNr�q䐞'u
s��5MU���n�������oH���4��y�˦V��P��dd;���kf�0��v]�W�&ݫ���`�-�l>@Y�x��G�C�4���ǳǜU�M�m�n���(Pۏ{���=�7,�eo�Ļ��ys������-�
Lm��Vl�:�,��0���K�e��Tۥ=:��&��ˊt��>�W�A`E���Ϧqy�*�$������\�gb5z!z�VY�EfĊ"�jYZ#?��Ye�����?4b�����r���U�s�q3Y?�u��
.�>�˞�1ќM�V@�fi�Qo��9�Y|gycCی*���l�^
1��im\�m��u�( u?M���������Mx�m�v�.�EE
/�>���M.����d�9藅G��
L4��ҒH��R�O��cWJ�(����K�異K��+#kw]ݻ��R�]x���:6��
��.���$vB|8�=G8V ��~`�� h��p������&H��m�{&,�f��B���F�y�#�j�d(.��/�K�|�0�� 2��E, ��fZe�V�D��&��L����%�WO
�F��7( ܶ������|hp#�=�{͚�k�ɣ�5�
1	�]�ވtg�؉�
h���&���ә�X�H�?&H�D�g���6x�o5�IQ2bZ�r���u���R7G~v�S��b����[FyMe^�Sg��/��&=�lT@��b}��K+W��h�Ρ-�zi��PW���ϖ[�ytR�H�V��P{�I��<�69"ϵ��=������N�Ya9�g��ݧ��T�S+AϗS��p��m0�{�<R���0�Å��Ғ�a�c�ѡ�Y�����'h@�)�HfO���߾�}���Y�?0��8iQ�en�#�_~�a#�ާ����cllw�
qٰ
���!�9�!a|���E���5X"d�d��
~ɀ�� ��
�7T��G�lh�����`Ks(8�5��8��U�=L�r�rcb��f+#䆺�%�����gڵ��<�k�jb�`�e���R�rBz�0`ԫ+K�<�_�L��#�JO�����ֵ _��B�?��8K�Ս��F����e����k�f�rX���<5�UKülǢ�?����g.����-��烫V�lפI��_��ݓ^�f��1�

笞۠���i^�/\��̻�ٞ[N^����[n=udɒ#�����=�ɴ�>�f��3c�}�m�~pa]�uRx�i��O(*�0�qɝR}K���Ͻ�(aG�K푾7���/HɽC�'��l)ٓ^�^FvK�g�Y2gtQ��3�8
�|��H��y�1��%i{��-��)*1|Xk`��R��&��x�yf���-(ָ0a�	�Ul�c�z�4��X�'�j�mo����9������֭�o�
κ~�T{�N��[���`-�\
Ve0�eڕ��j�5�{vP��8/�`�N��Vz�+�j͜S�d�(d~(���*e��KG�����:�E��2Z��c�
ؿ�K��{Jշ����ɡVʏ�G��kx��,��l.����_=�]�c�
��
���QKԩ9�t����թ�	4�;��]8	��z��� ��~@f1 ��Ȭ�\3�c�|Fh[�+�W��DI���/�<;�H&EM�t������͉���|R��ͩ�n
�m8��h%��B'�+
B���(����H��}��)�%�Y_��ʹ�s}�#��Kp�=�Kt\h�/��deTx��J���Z��V/h��Xm0$G�R�3�\y�8Y�B�M��������i��5��?�믍��'���:���O����I{̀V4e��.3+{#��nL.	��Z`��jX��f�{4J�Þ3na�^�C���*�����SnFn��I�)RY}���@[�z�=a�k
R�T��gRvg$9�7U�Λ�.6/����_n���s2�lY��rrm ��oȟ�3���珄����������� ى�G���XTv�j.�EX�B��"B�~�����+n��bň�%2��R��^�2��i ���jP]VF������k˰�+V�U���#b���Ay98���7kxZ%�>� ��c,�f]I)�>F
8�|�����B4(4�J�q�V�8��Wcߜ�e������*:#�����\/��{
~�h"���5$��@����m>W�D�����ŚV�&��ƺa��I^Vmv����9��b^;�NB�#]B�Q��&/JS��,�M����
�'_�P��M�u��X�.+�4���f�睚�/"�oH2�
�>�/�̾4��/���L�@2e4t��oǎ�����Xh���~�#�6F\�����`�#�
����eXϕ��G�՚�U���F���=[��WT��8��o͊�+���G�@{��v�tH�Z�Κ�����u�H�]Ħjic��]Ye�h��>DݚPfk|���:skđp�Ě��%��#?�{a�\�i����s͂�y�����6.�G\�haS����m
8:)7���s���`���;u�|�K=���7�r��rn��;�13(��Q��:҄��A���%���ɉA��*�ZJ�6������f���^��}i7��;�w�2���#S�'6���z�\WqIY���|�d��l��9�af��]۾���#��ڎ�]ۇU�B_�&M���mI�T��s�e@�����.н]��ߺ�M$y6���]��P���:��T2�E ��4���G�_$��L�ڙ|��8��C�|�{���=_/��o�d�u��/�|@�ďnʏZf�����Ր�V� ��؃�1 =�>Nu�)��!ڐ8��T�1p0�s*�,�*
:�M�P����,;�Ȁ�=�&�F�:�9\r�.�#����p�>~m[�Q�rrm?gXf/|+���;+�������7��43	k�|��gb��<����y�̭R%gnM�`b��⦸�-��}>�yl6�[;�'F��)w[ Ձ��t��yr��F��E�1`Á~��[�L�GN�r�!�DK�Rj盪*�~y�m���Pl��p�Qn�
r1L�(�
V������R�}ԇ��zh��:稛m��p�.c�����3/K_�и���=+��� z����9�P|�����0���px��U��3\�4�$p��Go��0���������is�$*��vW(�HZ0�|���7�B�p�2��@z�4����0=�3������ospP��"��؊��,�����8q�.H�um��6��:,�(��Uګ6Cj���Ȳ�2��Έ>~Xi��MB��υ:xK%�g�)���*��X���e�=���|���9T�`��n${h/fC�+\xA�|���Z�2�5j���s�?^|�����^���/������������"������Pw�
�
)��
/���UT�!�������ԡ�xA�#Z��p���ѕ}�p�s�����/ΚP�����s-�(����W�T����"41ը��!���a�O�1c7�/%�)����W,�M��;T�
u��1)�u���Lw��!/��[B�h����V�@�g���s�OV��N�Fa�i�d1�%M:=W�����3�GK�*]î��\5�Q�����5/�UDk-��M�n��?3I����T��4rnE d����Gl/W(ȶ��=hxc�Q�4~�Y=������>e�rFk�hA~���=6�Z��s����ܬ��������&��2��7)6�|�E��)
���~�K�h��YwlT�̝Ϻi�N��*i��t�6�'�]w�7�K#0>˴��V�XR=��K�����ѭX)��j<m}�z�׭������g�[��4��<�z*0�͵J��Zl)P�(�奮G/գ�R'9c���tͰ�#o�F݉Q��b��a��]y�#��h�����!�v0
���&��D뼁Q'�o��eU� Q�����J�2��ے���&:�UZ�Z}���%���!M�!�/��c�]��.��o+p��%
��=Ŷ�l3��!ޫ��:��]Zi��hY��=�,=8ۨ_��,���G��)`+�(��Pe�3b����2o�s�@fg�Ao�"��Av�%&�������6PQ��sS��! �6�������|qvF#!ޥ��e��������T6;�M@�s�D��&P2zj��X[�-J��t���@�է�&o�������_�����Cl;��&�W	���8+ch��B�CB�+��|�EW�E仍��,�V)����',j�Û�=x�(����9U�[��z�٫�[��6�n{v��OϺ�`�7�d��VZ�}��D�pv�/Q��'T�m���
�nV��θ�+��tF8}�sK:��;�RZ/�Ow�R�r���B��6,^�I� ��2c|��"Ϗ2?���K?�py���%_����^��rwǯ�n�&$j�L����%]����^��~���~P��(-�	��5;q��W��ơ�w'%�W�,�����;����Y��� �A�#x��=T�j�����ɬQKŭBrkU�R�26Y�0���R&<�e�Mφ�d��8b 3���bs�����n>4Z�]/F����.��w����G?{~l�]�x�G�_L����~������XQ������y�)|��Lᦲ6"�1Ow=���s&���)�ui`�B��t�O������ ء�ޭh��)��m'#S
��!z:�
i,G
��!���GTH(�����;B���Å��xd������KsC�׊�D��V��V�8����r�n���e�:񌫨�-��Y���(�+QwEn?��y��:�����~Ӭߛ�e��(�����,R쀞7ƛf]�"\���-��"_�K� ��q;Gyϲ~ꆅ�猑.,	}y=��DoU�j��w.��ᕒ��	G��xR!B���{Nplx�:�Ԓ{��K�l"��l`]�L��^���:�d��kp��r�F�社w3o?	�7��w��%5w�
Y�%�h��Gy�Pu9��u���P��UMɕ��Ɏ�u2��z��6���]�jY�����!懲�2?������T���G���+�ev�����\�	�#K�0my�5�u*������mO�g!�-R�J4��V�&��͋�b��g���]��u�#_�I:�.���H�iɄB6>��yp��#G�$�-޸�u}�/Qڏ�>�"���9Kj��\�pʉ���..���r���y����{q߯�_�5�o9�"Ȍ,/�0���H��/���?X%J�B/�7^���%s����<�{Q�V�D���*� 
�A����Q��Oؠ�$k�Ng�I(��I�H����X'r�f�6A�#�y[L%�/�)I<[�3ٳ��;���^�L3�)�##8P�f͚�+��M4���qy�6j{��,�J�G@�!�+��<�G�x��:&r�H����%Ep�B���y���O@�c.siV?_9wuNה;wk2k��~�Ľ�V����*�ƙ�M��=%�Nl͚ֱ�6����؞R��:�U@.t�:�4�cUj!2����j��jl�8���D�\��6�$���J�F�2��K�^|%ƒ��K}�滼}q�R�v圾c[��(*�ZF����˧U�/�~n�ApF&�u��$�_��<��X��):I�̊
�j��]���<n���҅��N>���w_�m�v`�W.�6��M�
�S|�kb�w;�ѨN)ō��!�	g!q0m629;��s��&�f9v@�M^OC�	z^^M����4�WOY;��jyu�4@Be}!�xx/�����᪚z�%����ҥ���w�}n�a]
�X�K�%w���b��,p��Y�n:S^���Y�nZF�ݴ�n�ʨx��1)�>QM�*�\��Ո�v�
V#�d���=<�OM��m�s�W%Ո��y��;��Jo�;�jD�����s�-�Z��R�5��P��0��o�M���Y��ҩn,#��5-��K,d���Wq��s���;�=A��}d�ceu��
3�lM�6�SYaA���
O<��X�����v�po`;L�!)'� ��6Y�GR�+��vJ���QK6���?����W'��=��4�M\�-�1��w�Z����[/�Ci���G\�«�A�+�66�ި.���۹z>�T1mqj�-���wd,Q�M�
�9�<�Q����4�q��Y�&���c�b��u�J��!ǫ'å����@k44*r���.3ۄ��%܃oc^d�a�^2�Px<�JF*�[�1�JJ��<a0��P�1]�U��S����)sq\�뵱���ȡ�K�u�>b��0�*�U�^Zڂ��u挃��0,2�m�V)�8�h.uV[U�%iK���H	u0���
�V�0V_^���`�H_��p�����q�)����ȕl�ޞ���ox�\�����s?��̾w�w��Kg�p�d�������W?yG�o�����=�>��yd/��pW/�<d�i�}
(B�+{:/�׵)�e�5tρ�=����8�ZDxrNxũ)�w 8bMu9�tk�,��L�f��Nb$r��]��"���.��jm�i%c>���g.E��U}�L��k�2GG��=3�wr�ɺ=�p��d���{��{�����z�������?to��su����;w=jݻ�wq\�߯j&q��D�S]�Ӛ���Г�S4
 �g� x�c`d``o����������~@d�� ��9   x�m�MhQ�O�{3�RAj�HA	J�\T��bBRb$�R�E�R��HiR*�-bD��N�p��EK7��D�E����ә0`g2��w�$6I�xG��ZA��pܔQ�� o��Pbu3�_��]/F��R����Sk���;#'��P�"�=G9���5�GTWQ���uY� �f�դ�g�³.��
�g�1�
	:	�	���:$�EXI�B8K�Cx��1?�=��
�
L\�!�%�%�Dp@pU�0/�&�+dQȮ�{�,��9�B����� Ⴐ#aG³��E|� �o�}       X                xڝS�NQ=����P+���2��T��		��"+�%�j�������XYY��	��;{A$4�v�̜�;3w �3,�9 �E�����hla�ǰ�o��KOcٸ�x�0�~�,���s�1�4��k�jǁu���G�?����)dy\�
v����Dۨ"@>qw�!$nQ�8D�vё�'�*�k�ش6PC���h>�Oy���T���"q�}5\3ޣ�e�Y���}��(j}$n\f{�s*���
؋��"��[�ɳ��}\�F��|2�`�3�p�|�sIk�Y+:ޡLq��NZyC&�S��@�k�Ͳ&�P���Cy�����uE[0����;��ڒ�.q'�_�(b���6�	]K0ԋ�|Mo(=+��jJ:�K]E���h�Ȯ*��+���Ǹ%R�&oQ[2k�u&�QǑyE���E_Hv���#�I��G�H|�茶
�!�9�7����H棬)~�ܣ�li�zF�[Sp �ι0   x�m��oLQ���O�355T�Rj)Z��Lw��Nm���R�53�ez/�s-�'D��ų%� �-!�طX����t΍�8�9�s~�����Љ��a�"��I�H�A2N\��7�t�CW��Fw��A=�E&��C}�G6��@��`�0�\�F>��HF1�1x�ᧀB�(��R�K9��&2�
&3�JT1�iLg3�f5�2�9�QO��e�Y@Y�b���eh��8;��a�������S����Y�� !�x�#�$�//x�s���y�+���nV��*Z��s�5�Ƥ
���EU���G�4:"��c~�,�1 x�=�1�@�l�&!��lf�$*���I�*�ѻ�Z��.�Ge���v�{�x�>�X%y��a�Z7k����$�C8�#�j_Y�d9jE���;�V_���@�g��j3ai��M�ܭ�xK���5�@g��@��C[5���`/7���`��ܰ�/C��a�����a
ʉ� L�$���Y  O��7  
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[15]=<<<'PACKAGER_BIN'
�w  lv        X   LP�             �      X��D                    M y r i a d   P r o   L i g h t    B o l d   t V e r s i o n   2 . 0 6 2 ; P S   2 . 0 0 0 ; h o t c o n v   1 . 0 . 5 7 ; m a k e o t f . l i b 2 . 0 . 2 1 8 9 5   * M y r i a d   P r o   L i g h t   B o l d     BSGP                 �� PW P[ O����{lg�isut�x&s�44Wo+����N�;��QԣZ�3s��@oI�s����N�]f|5�<^�s;P(�,�S��p��[���W�<���^X�o"2x�rSX0���M����<���.*��
zIdc ��cM�.%����u� ��&'�\�dx+1�����~ty��-�|pS5�ԫ{�q��"Zݷ]�;-�z��ov�����$ި�*���>���7v�LkH;p)�m��"�A΁m���҇*��.3�����X7�٬o<Z�wW�$o��n�7e�e��m# �R~�``Y�훊�F�����UsN�� �Uة �|XU�6\�QF�*zuf3�~�и�ZE���79�M�i2�/Y��Tn1=��_���W
���[<;Wn�԰��+�:M�h�uMy�Ϻb�&����?qш�>L��ҁHm�Xu[6�k�btz��gS�r=6��W��f�xW�V�ڑ��k�D!��t��|p�Zn�֦u�H8��i���*�@���p�͹V܆.X8"7{!�_��B
�>g|��u����AI5���j�O,	l*�!�ǌif�5$ &�A���	�D6�:#(Fȕ�Z
�@Xո�`�B30��c��GFR�, rּ`Iҳt �l�������Ǚ�0��Z��VUH�1�ר�՝dA�J8�'M����[䤰ZZ@q�E���w5�����,}��.]`c ����YJ�$��q�~q�P��~�T�口�"-��\t��}ɢ�#~����������%d7�t�C
j5
�Z�������A
9=��=��W(l��Q�7��E
��IYh���w2��3�%!�㏰��q6�d���y�p���ֲ�ޘu@�����%�A;݌`����l� �>W�1c��T�岓�tQ�G,#
�g������dE��֓�&^�'p��X�Ӿ(�N+^o><F���a�}�MfћJ��
�������dg?�%�eb++*�JwNU��h ��=�1T�+r�r��hQ�-���u>�ϭa6	�j�H���^�la�^�*V��yG���"��%����#		h{�6�������Q�'�AQ�Ѱ\ �rnB�C��g`|rA��>���f@����
&t8|8C�DBu��v\�i����.y���;�Rq�~&fA���d�
��X�ҐjJG&���4Rn��If��q=+�<�JluI�r��A�
��%��, 0�m��!lM˥��eBnT�=�u�"e�x�0�N����5���X���%�z�\���������wBK��>����2�f��+����m�BT�����k#�6�*��$�w1��,��Ol�'�=ȂPe-�SB=���jM��	�
�1�X4����!>=H� 0�����I�
�����ʘp�  G��e?���(K.�>�2��U3<R�Q��؀�+4�����/���[�;��``��`l,tC�`(��:��HsF��h6��O�Q��sy�
��
k�$���>��+`��vn��h�4< �*��=|wu>�?��X�YY9jɵ��U��Q!) ��T��^��Y���p�@*����z?����>yԏ���-0� f��p�M�ǜ4v�5��j.�4I;��;�x���c%X>�el�re6,���FO�ߐ?R�g���w��8��E7��{6
�S`��"P��R%%),M�gzo���/H��� ��B��*X�0�ef4��ԶV("\RtP��r%u�����wZ!̖K���eI0��Ln;%�<q�ݒ����R�1�� ��x�\�B�&������].��6]����&%�VL�l����9���t��l�(?3d4�f�"��_�6U!�[��w[.֒�Pj #A`�4�+s�qٟ�h(6�zUp�5\8$��a�@0��*D	�2�
�hG���I��&�|�l	��Dp�K/�`��F �6�Bd<�Z
A�i-��l �g���"�x@�W����v��L����7�b��-��
%�ycYa��fD�/no/�z	�J�Is!�?	����K>C'�{�H��"@5���kd`T7�#� Q���#�ɐ��_E=��d�!�`:��+(��;{Ui�ㆽ�7� ���R*�����L�)����ݵ���Re� 1�*f}!�?tӡҤ�?K��?2Q�|���,�Lz\���@�HY>�@���w_G`�vl�Hxp��D����J�E"E���\8���,�~��31����6&��b�a�����-�N�w���ZV��,/�h$F!%���~U�UZBi�����7�-O�"֟��=J�.d��am�����0�BB,} v��z H.��
5C/k����5P�Rkȕ: ���	�g�T��1ћ f��z�竛���!Dkk�9���P��beqd�!ho�?��Z�X]�YN��3���(~
X�$�k�;�	�l��^�#7��RaP��n��ha�YQ9��(���O�S$�?L�9�MmDYjz ��K��>�&LL�?�"�t�d&�ٴ���E�?�cJ�I���z&-wעJ�P��J�ǚ��J���"��'�x�?��k��<�s�Kz>T!�Kނ��2�@�,g'���0��^��*"�Y�w�� Q�ӛ�y��Oò�z��/=��
I8+1��՜j�5�H�4�R��D
��f�3�,/xH1�b6��\L ~P�	���Z�����B�p4���V#+Q̌��F���͘J��MS<�����I�N^�BLs@�e�$���Am�='̛�5�!2�)p�^�ѡ�YY��k2.a+��h=�B��]x#	X�c�[��.��J���iɷg� ���o^��ߎ-�����DM0��F��H��8��	*�#�oo�q�����f�^|͓�s�0���vx`7�4�/4���#��*ʫ�9��c���.
R�n��_�� ��X	C�fM�f�	��'Q�k���ԮW����[$���h��?j��GcnYy����|�A�5e h���˙�o��@��*��T?�`����u�o�S�sc=���( i���AI�j��f�H#�! �6�586��@6����_�?���oW�mh�'�}�t�B-��]R�	�*�y�j�����JzW��e�vó��V$���ѣ�"���k��FƄ!P9'�`2�; �ט?���~�J2�^���B
��CRv��%�<L������Yp�:� �P3���YlQG�
5��p1��MQE~��s�����pJ�
�7`\�*��MkXmk5 �Y��Y��#������xйs4�H,9�P(+�����Qdm��˭d��l�M�!��"18:U�� a�����h����yM>(����]�
>�?e!"7��LۧZ��b0	�E�+�C��d'FB�%�S���<�&�\Dj��C�I� ���"�P��{*\?⫡�B�y�̢�27��=�}+TRT�wH�]W�ak�+8~�i�zIQ�&x 3�O}P#S�p�S�I;S
N�%V �yk���dϜ�:N�t�K������w��Kfac�7�ǳB�b�%ۧ쉄�1J���P���`xPg�K� P_V|@�T��%�T[��
�be����̂_�(h>�鑤X��a[�*!K%�2�a$�'m�MB`�H�z�]
�˞���Cz����ɣ�1��WK[;����Gk\�(����FH�5�Z��/ݭ�/�.���~����I@��pb�K	qX@�pz���{9%d�"�;(V���0�te�"YU���KH�1��@�Vxa��`���Y�"�G�T�F=�uq��g~ ۊ;I(�������Ue�B���Y�WGlk��j%g��#ϴ1��Z����K������4�ڞ�m����6ۆ2u�C�]kKV� Iԓh��瓗G�U�ҮRbsi8ai0lb),�@�[Iؑ^�AP�t<y�K��0V8X~��і���u��K�Ù�;�#���y�}]���(h¹2�<��C�A�yѝ��K�Jd�z�j8�^���O���Zr��'��9v�Ϧ����
26�"?�@�_���rH(��x"!"�݃��f �a!� 4s��f$NB�"2$]�{Y������$Ӓ-y�٪)z,/��y>)�hD$(��{G�P>�l1m��pO���ą	΁h�*�RIzU��
�o��5���>Z�
oT�e���"l��G4G}'��%�)jj
n q�m����[Y�Ί{�=)�\2�G�W���wy�D����uЖ�yr�FD��\�\�
v!����@��u���)��t�U���d0�7Uw:�󵦅] �]�4�`fyHE��	���
���|)�\������&q-�����1`d��K���(k��B���CVR���#����6� ����ج$�_h�X� �e�cl��VM"��.͕� ����1���=�/�ҝT��h���!c�ke!�p7AL�ʹzr4`J/N߀6�J���	n�BYJ+�hj��z�~
�Bk��,�a/�2Mn,��fnk�hf�i��Y]��-�O�bb��ÂD�z��+��H����B�!C� 2�~�(Ӭ�Xˍ�NF�~���e��[�>�����w���%C��e!�ٝ�87Bx�F�T����Ф��&z&L��V�	tȵU}�	N�N���Ӥ��q�e�rT����"h�n��0�X@����a� � p��2O���B�s.�j�������K���X�HjT�����G�A����x�Ah08�?���]*�t�^�(+n/f,��_��
h�|�E��Mݱ�ѕƘ��d�}-_����|ꉓ��vx�M��(���; yo#��H�Ciɦ��a���"t.�!"J�0��b��}I"��Yh@��V}�"�x�o�F�j����.����喰�.�F�"@�����������&�f͘�R�|�ˈ>zD��wuHQm�K��c��[�L�#�d��12��~����!�"����p���C�"�����du`�'��f��n2Y�Ȑn�Q�� �.��;
��(N3Ѽ)#pa� �Y�9\pP��1��(�
Q4	�'-�$�����H&ƒ�mǌ�wR:�`�8դ.猠���L��ϝ��Y3R�
��b���97�Ά���"w�|8L,	�f���A3�.���?�`Q	1�)��(i����9,h��s�)�Ў$� �Ɨ(�PYs{Zp��d㮸����v���c�HAra,P>��#��_����OV|�bdwYP;�QP{񄖮��K^�K��Z�u�����")>іϋ�-��\�gY]�Ջ+l��O��[�	�X\"�6��u��xy[�	m0�f1��G��]¯��]����vu����}���U���od�
C�l�f��@:��z���	"�����D{�i�Sz�j 
��K�T�dR��
�3
McA��xnYc�9&�"2`HQ1�%&)&�-W��X���BԈ�'dMB�P�n?:�ا� #�+�i 6�b����0��!5��ɢ����������Na�7&
\Ga�)*4Z��'��̸i
SS/��'��EWp�,!�&�(v�5˸��J	y�#��%RL 
�C�B���������Y�̗��F9F#� h�:Zx��T&���c�����	C���� vߗ0%|�7��_.t��
�8/�Vɐ�U`f�����j�_�	�:�p򘡏�6�Ao��X3Ӥf,�֐j*��V��X�9��u���VYK�����f_R����^�l�����.*}dث 	v��4fA۞�K��o<u����Y���a�o;� �#'��YH���_���"����@$$j��� ��
w�=5����AS q� ���р��u-��6��%S^�u���4�� #��~���v����u�����:Ȫ��z��p(?�sK���ϼH\R�~���5����L�Ybe�01�I�e�4��P�;
����|��*;x}q����x�t}�Q	0<	v�ת:iᣋ���{A�A@�Ԏv$��k&�wr�s��=��5���# �Fp3S&E�mErN<�~xi�
�U�~8'T�z@�rGO��a�����~���E�w*���0��^��f��Sb��L/o����ZdG���i�F=�������1Ui!W�i]@��?3u��iy��J��
r-���	)�@#��,+�R�Z�m�Wb��At�9�C<�$�re4\^pZ�Wث� �ȱ��<�D�<Ld
�i#��.w��<�L9��/�bVnq�����݌iL7�,�*,�'�' ����
a�4�j:�,�ЖŜM�m`r=̰򞤤[*ԼTk5������������"mG�۾^�^,��w�Zs� p��&/���d
�GM�4lr������dqMܓ�w�v4|�r�T���-,1YZ!��{D=�N�q�%��,pl6���-�=��ϩ7��̍4>'�@����F�:� Qa�%��Y>���G��@�
b�܆)�o]�]I]"�q ��7���'�Gf�<��#��T��$���>�C�
 ����
ܜm
6\�k�
B�W˚�=Z���˰x��
%�S�<r]�"�XZMlq?�@b���;
V����Oƿ�#�^$��Ze�D���/�T�2}��`��.݌��yل�e�L 5�:^j�u���p���1�f�L�@X���:	�XZA�s;�~n�C��ɫ���i�gRK��Ｊ>���ɲx6\曀4*���VBO}�p�+���&K��И��b��d�p8�x�Qw���<ZBN��L�m2r�p�p�
��鈌�h��F6ݤ�(��t*�_��/dU9l�r��3J���b�R�&��"ЪY�l*3�֔1�}����N�Vq*d�|�~�J�L� f��Z�@�A�
8 �(
^���y(��i�C��Qm#�"-�.$٢NP�*L�o���Z ��\�.�;#�L�y�	���ټ��>�p�&@\g��j��Y��q*L��f/��f]�`H�
ŋef��[�ZI���Ё�r���t$���_�	���fbhΧ�{�F�b��t�+85�p��|<�:d�E�}��ǳ�����$I��	�f�>�;���Z������Gx����I����:jV�^$�B�Y�t$����IXh�9�V�ͩ�i�ޅ&S����/x*��f%=��|Zbo��`gq�ae�vE�(��l	v�Q:��*e�z�C�ӡ�|:�9���z$�����(17�K5�Fn8}�䢏�����+� ဓ�a/��,��6g��h����န ����p(�'#��l�[���B���i��"y.s��A�y7�"�G �Rpʊ?�g�<|E,s2eG,�\�L���lj�
)�n�~�C@ �B�1��@$����ꀀH�<qA�����l �x�tuF���l���S<U1'v������5]
�í�$�*  �d�,i-�/#�Y ������%�S�w��% I򎛭�J+%̕��$�[�loӯ���Y�P�����F��塚�҂����T�|U������R&Y�Nx㥌���"ƞ��U�%�L�7�t��a���(�����C&j�j�D�`��t���:��Ü��m�k�

c#���a2�VHF�^y±g���گ��W��mNk;��yk1Ev�))�|>-���L��ͦM����üW�=�;W5��!b�Y���E��D�����nc}í�|�$N����o��Ѓpbb�{�b�$�&���F���L�PY �}���2�� "���aA�	�B�?�5�v�ڒ� ��poe�M�o)r�W��+�;�Z�	fOH����0���7����Î@K
��� �SN>b�ܷ+Mܒ K�.V���-_o'
�����rA��$��c!�~k琼�	�:C-�J9��K-rՉ�.c��\�A�䊘��3`���C
�R">bM� U��Ă�V2��$Z��TLP����F`2�(p�>�@���Jֈ6�d�b����[����ٛ�G��c�?���?��7� })��Q~$�2+06}�Bٰ��N �	
�6Ӆc*���^�°Ӎ�E��O
#���pFN��϶�F���a^2·���!'	��L}�g�B�����}�_��NvX����u��$(�U�g���B3ZY�R��	����"m�E0Vt)o�^������edKX��V�����s .
�c�_�l9�(�iO�A蒢8��8r�6�,,�I�6H��|.@"(�@R(���&Y=jA������Ųo6�{�Q��IIgK�I��[n�y�e*���b4��I��rhS匞��r-"�plY|���ɴ�aQ-�d'��/��$�JĈ^�pa�+����D���B P���8r=��T�V�����Ec�'��Dc:�li���S�#]��S�㺋'--��/i��
�ޏKu�,auzG]�>�~څhI���o����wLzC�1�þ��	�G�{��� -�lr��6۔���'����B��#y1�,�!`z��i3� ���_�6�ԓiq�"E�O�sȻi(2��kC��=v��p��ndY�e���!%L5W�/�'�9������*�� ��ߢ�8�J���,�,?���J� �M�ͶոR�P��Z̷��?��b�e	�:�x��h�7OpdA�M��D���<���I�DE�/�wX��scF*W0��
�8���O���$�d��rX`"~;�B�����plIrr0�/wV�1���N
��D�]e@^��v' ��P�P�p+�@H%e�>H��� 1>{]/yҢf9��A"��$����5�$I�3畁�ȫ
�x��GZJ���m���:EH>9�%)3�~����B=�KJɖ��l����]YP�7L�IB���3ׅ
�=�}�"��k;a����Q��+�r�e�����X5-G
 u$obd-�$=��o	YO	�HkL+��$i �A�5������a5 �H�x���TF�O���z��
x��;6��i���L�TH��P	q,�q&B�8����є�#1KCiY�ɬ3��M�ht<�M����ĝ���_�4RΤ���������&�b,�����@��i��
zYb &#eM�Þ�! 萯�g��_D-LϯQ��<M���̷e4H]C��B��	RZE��*\�o2�����ր�� ��L�&#I ��0%� F [�X��۝�F���Iso��'�I
�򏇐
��98ȫV������9a9yn�n0nan)LD�`�2�ڐ5e�v�}p	W�	f$o�Ri�5o�T�Y��6�4̭N��$
��R�_�	!�h�I
Wk=��P�-��gS��r��_!�4]����`�1���-�� -�Y�UN_å�)1���3�|�`��'��l�<�G�۰��NA
1�Z!	�$a̓
��%���>*��I���pAXe��jȅ*
�$(O����:�Q ���j@�5"��q?�D����$ZM���*C�E����~���
"r(@ޡ%��Q�ae���6��|x��zxOn�l���$��&\jЄ�h����+��9g3V��V��jIJ �ۉ���n �>W#��-�i�KN�"o�	�$�>
����ր�=��acC��?��7�������
-����"g���b����b����u2	x4�b)y����M��<"ׄ6���Jf2"=�m<M ���|	����}�lI,gv���X��a�.LTtJ�r�A���tR#�� R{(HB5/��!�N�(X�0�s�}�yQ�y�*i�o��Ot@x�
��_�C#>"bˤ�\!�Y��t�MC D-��y 8��c�J� �ua�b�ޖ� B Q �WH����1�T��K?��~�Cm<6�1�����
S�Q�	��M���~[���L��.hŃ���p�RO��`��)�(|P�T�2)p���!�;+6g4��c���z{��9��'T�oB[�d2^�������VG�H7��btVO��-w m��H����Ð����K�bp��c�g1���@K�s�4�o4�J��H�@Ik�g�&_�� ݨ��|:e ��F$jDL ���w��_��>���EI۔M]N��7����s��Ms	Z����T�W7��}�Vi�VW�-�����n����D���S�2�C/��u�!�ϙ�� @��.9��J�H�[�Ll�q�p�|����^t��-&�'�9Xb^Ύȸ�1>qUxQ��A�7?o6'��&��'��y��S<V��9.؟vrY���\�K��2&ר��$��X���0�Я���
����7�,���P�!�6		a�܊[�or��<��7��B�g.� ���6p�!t?���&��+�-f\)W1㹻6!%�+��     *���KF�+o�
�V|x�SF�Y�����~T)�TBF03xX���U��z�M{�����-Id�;���(�OX�Ĳ-$�%�!�c�)��q��vYX��v��*RV���A�xOҥ̦��m�{t�� ��9q�-�6���M�K��=��TK�wj<e�<�X�ZwԻ��}�NY����9��1��pA� ��	�s M�2G
��W@�t���-�q{�4!�F�1Lhdi* 
�/������()`�U��)�.x�G7���x]���_]e�.��V��QU'��$,Z��`����'nZ�F��hze�ygt�B7iw+�厅b���gE�\�?�@ADE�(hUE4de�#�\X�ߖI��Sz	\�V|A���O$��e�q��u*AFw
�����v�y�Yn��TK.�0'Ջ�"qO�@���4��3��S=�����b��R�_b�ܖԱ\�ZO�a��$o%[�CT�*��4hng��9��A@r���@����e�"vARU��Gٛ�iI�1�/bY0{6
?�N7s���$�1,���D��Pϝ߃;���.J�J�A�+�6�����c�;F�ɫIep����0�Y������2w��R��F�1AG�|�g4�)B֠@��������]���'�-�o��dA� ���roP|{7���`ZzИh���,�'N@��Y��q��B��b3����6�O<�{d�ķ}�E{�~`�����|Zv���S�ԿᣀRMa�����}]���x�c�'��U�x��<���,>H����3��,�q����״�r��N�fVs���u H,��k L�XjX�<Cr�U-�K�����ˉ|����dG�۲d�� �:���'��#F��W��/�6�$EN��Y$��H�iS-�P�n���q_L�%�l�����25��@;,z~�|�)1M��A0���(Օ�����M��R'a�\m � j��*����1��q"4����������]�(�z)��A%HN�jf�BA�d ~9�>���l��8�L���� �H4m�8h�jV�\%��:1$@�(��V� �[e�ੑU&r 2OPG��7��;(��WȦz2�r���.�-
�H�A]XL]P�XM��$�FEL'G=#)�Db&B4�|��+��ꕯ@�y�&��]�Ô[,>$��e-t�A�Th�CI�$���Fnc8�	B"�#9�#sE�
�'����*1�)����LbM3�񢁋�8�i +�g��	uX�e��\1��﨤�����?���E�("�$|��8��d���3j�w`zB�:����tu�,�~��X�ӷ"wՍ5�Ra/	���&�`��@Qg�~�-���D�7r�����c�1�Q�ӵ�ﺽ� �
�u�Ǔp���Ұ��n=���DU%
<7��lΗup�������F��u�X&1��VX7 M"�ɾ�ڸa*``�$r�T�&������eq:��
.�X�e� C��ҋACY�B�B���,�Qk�;I!凐#3�7B2Y���{p,0 >��Q�J I�9��m>�^�ȸU��<Y��E8N�d R6�o�hD���vt_!���x���-0��Lf<8�&}����b�}VL�8���#!� �i-��)P�p�U��kgc�KE���a�]IX�J
kp�a�AyB@Z��!�$b*VE��y$ �^Yus 'BY��4)r����\�sd�1Ƥ5�D�۔3(Ӄ�E���/��p/i��
�/D�c�fX#�A����ڽ�Dc��������? �ٗ�S�-�)�&��.b �4|8}���R��
�u��͓��?�3�D�� �Ȉ���`������aF�GvR�ao�{����b�����ۨE��{�6}�|��SpGP����,x��[>?A0��tʍ�K d�
Fi]�{_��Aϭ��	@�-��I ��  ��8�y������1HaR��Q�2�|�QM,��&���CD4��z�^���C��'S�3�hx�����O�� �"67]Ԑ���e:��=`
8�M����xe�.��p�k5%b8���a$�A���q^�q|D�n�d
��sp�Ɯ$g,��]��4��L���Por���J�%ԝ�wG����1 ���K�v4�b(i�����10߬�X2z&K�U;�E#)j�]��I�=|�����2��QQ��Sr;Ҽ�_�TH!�G�G&R�XH� �K�bٕ�<;E��4VSEW�������k-�>�I�W�R��7c	;�C�A���jV�]�J"�  _
��vBAǝ�Z���:��!vm�/ࠁT�z0e���|
z 7;�*h�!#�@I	ZVFB�;�l"����i�����P8�Ն�BE�^ �d�7
@0ބ�S�e��KZm�א���z�!�']�Օ�Ȅ�<�n���y?��Ñ&��1w*EY�j�sBz`�m�������!�$�(_�7�^�
�lʫդ����A��D���~=}�Tx�=��G$�ea�6�Q���E&XJ�e#��b�����Vgh�����n<a�+�~)�A��?�&mS�_�P
��K(�� �R>	N'�"� �<�,�s��`[$it�>������=?3�~�4�!P��
��U:�b�n�xr�(`I�r�c�)��ŕ�����p�H�Em0
�^e�-���ьn�@X��Ft�[����l`�;�����$��V�V�c��GahJ*�4s&e���� �>��Өݽ��	rA}�L���Lc�p���=�� ��@�S��z���j�s��3��������	�V�5�U�3qJX���8}�#�X��y���,J2���MuLl���5�$�7�R��H��u(#�L�����hp)ӕ�XF�����:�"����(��-�ke�uu�4�" �X��5������B���j�/���ʼ����ZdQu;e*i4 �n =)a[�W����r�u-ܱ<{�Uxr�`�Q��xtTེ��#n��J������A ��iSq��v�0D�++�oN���/�2E�
�7�i�]�T�op~F��� �x�@4q�(r��[��رv�	���ɰq1&�A4�x��J�ķr掖o�|�:�Xh��[��1�8Ls�MM8QK�� Nx�D�������:o�OWX��~&����5&�� �__L��N�Cz.�c3l�P���^��q��
�)hO��0��?#c��*c��4Mb�h
}@V���l��3G4kL�2ic!_��Y�.tS���
��	a�\�Fhg�I�QG&A#��vƉ�`9 �q)b��>b~#XƲ#*��	0�zȎ#���9T&��b��Ci��<hma�"��l��6�m��[>� Ų	��X!hB��.�Pzu3���K#�(�6G�`L�#*�WuWq�������N���z����X{��(�(4�x�x@�b��]�Ѓ�����c����A��d10ߴ��th����B,۰:v!���{�\nၦ���
y�y�M�G��ġ	�)������:�3���/����b�z\�&������y��
	"`���=�v�I�U��K���(>N�1aF
���
R���R�Uc���>�f�޷����*����2J��;sF��+� &�l�u���眚3���Kb���L��,���bT4��D�͜����a�8�I\���RSDA�	�M�s�	��̓����)8���4��
?	�?�x�d���ɰV}2��R��0���3H��'��]��)�l���� L�Ll�T*.��Ǩ�9a
����Dzq�bH�h��7�YG� ���R<1NH��Q��sg@R��(���e�/b`+f�Ț켐�a	�"� tLd���XW�#��du�?��5��/�D�}vײ��C��_A��4q�$3՞}J\�*�i�n���,v�5�p�מ���i��e��T?.����&�3�_����Mg��^V��Гۆ6�SH �/����v	Xj�k� �k���7�� İ���Kի��;�D༁����	 /4�K�mV�|�Yl���8�.���E��sAy-�}�-���4d�����6D�]��gO��]{�� ,����ꬂ��/(��Jpc�'8ćȌ�HY������txe�j�}�&?�9�`0#�Ϡr=�1��$}���K��&�9.�ز�~c-��12=G �
cݣ�ü	e8�A�{%QR��ޏ��^(�����@�i���y 5���
��������(S��� M ]�׵��@��~�a�
9�%�tl����,��9)�]�����P���2�P�Hn���%nL����t��IA9o��el��\�7b���z�-�����u�c)��%���A�E0[	y��A2"��|ݔ�i.�<(Z�X3�Eg�h�W�O�}(H<���\���y�8���08ů��wpT�+@?S��d@<\"܎x~a����Yt�ʫ��U��ӭr�(�ϊ�Ыr���58*��ܩ�@q0�����ar|Ҋ�%�,)×Td=����>��Ai)W:wMI�5��J��0 G�.�Gz����(����*:[�>��q���Ru�e'�7�{�~e��zU�S�Ԅ^c�����l�ղږ.�������+�'�Jϊ�uF��f��*�d�"2�PZo"w�T(�Ƀ�"`L�1�Sq����/���[���v��8W7�[d�0R!�lԊ�G��(�ť�e��Y�%XL2���5�C?]����.�l:�PO�2�,_İ��B�
	HA2>l�oAWkR�Ǿb� 05w�*�p�����,g�Qq(w� �љ>�G��gD���B�3s�%�+*�~g����z�]���4�\"�
ٷd:A�޸T�s�X#�bn��/�B�Hc���~֐r�U�(�nLn��C],�����,|B���FA��Yb&4Hl��)+Tg"%T ��y�	�Y�^ <�$H�_�S=M^/�MD+��!5i0 ��mI���^3~���VDk!�N��	J;�dI���1? �E�!3*��؋�Ls;v��ŕ�8���,g������bKx���9
����D��x9��&���6��zKGE�9�2��f�>-�o,�H��ZI��'����F�J��򑨩��NS�I_�
�>�
w�*i�*H
��O��E�?J+���CƄ������؇|���Z��C�E�Z���=�
)���F��~Zg�
}�=�G�3gȾ��i�>��ϴ��I��� �hj�&�7n
�Y+daf
�*�b����o=��d��'lI�4�x3���?�3�V`v��f�Ľ��3���SL{�1��-�L�v̍ۦ�STsTc��6Z��%+#e~�8PQ��!`��nЈG�dq�i��mG��Q�;���׆�r��3�^ל�!�����^S�Փ@�z.�A#H�^�.�D�i�����8�\�(��?��4�@���Xf�,�s��D��ьh���P�sO��aRq./��uL~�Ĩ$$_�6�����}
$��*�p�c<�z�uP�$���:� T� /��l�H���5�;�G�����B�ʗ@MѴR��g����@�p��;ۨ!*��1�zR�A������c2RU�)룯�,�$�E(�����x�+�j�s��B5���?�D#g�ix߬δ�.f�J��2�+Z
T2b2�B����UW�Elj++�\��
vh�Mlұ�eE��=s�_�GE�
I�pD����B�m�8/�cm�b ��,��Y��dr&��
I>Ď�e�3 �/W����f�I�ٰ�2�$�����Ц`��#�dm�ZDt�$Fcuۉ�ʡ^��$Z48		�%��S�4�7��pw���hu���O�}��ջ
Cr7F���g�a�.�T"��Y,��.�ǂ1��i������2�6���7��<��f���cu��zx�)S���I9+A]㈁�
j��7boE� �1�N�ڙTdD����8�ƅ��/�����#��|?�f����~Ν[�)>���tt9pzމJB����A���cS�䇓jP΀fHdS}h4H2g@E��?��Xe�m��hdi��H���Cp��IŁ��$_Db~��	N���һ�J0m[Ҡ��.`�'G�\M1 Q� �^� N�[d VC݇�����;MHˀ7{:S���_���� �c[[�uZw��6e~2�3^�˰�:�������U?b���>��Wc�zI4�x��غ/|�GhP}DȀSL}�LL�vJ5�K�U�Tp�&����l�?"�F%)}
sY�a��y�C$�B�]n��܂�T��[��3��9�n�oU�牅dUg�����D����vM��܎�=q|k ѻeY��lfWk���jú�{9Wš!��U�P];��>�:.
k���(���L���E���B*�Â��u�t�jL��,�:В��%B���c�:�����?b:��4�)�#��dem�A����	��Z1W��Z	
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[16]=<<<'PACKAGER_GZIP'
�      
��k�#W��]�"E�m���}�4�+��k����ZI����m,9�0�����8�D&�+��dϐ��@6�
Hd�7'ND����oO���|��W_���44}�|���ON_}��/?�������/����?���W>}}���W��O���������M�ӏ?������_�뿘�S���?��M���������>�6=}��_}������/>��c{��x�}�c�XO���M����̗_�����<�x�G�ƿ�l���'�'􋏷����?��k���\�/^��W��/>y�W���/���q���N�-ǯ~��7�O^_g�j��#��?����������ן�������8�����ן~��bo/�~4���<�`������_���:����o~E�����E�{���է_��͘>�^{����n�䣷~�'�۾��x_���V;�u
��穕)����r{*疧y�O�ܖܦC���{h�~S�
~��s?Z�OBhS�v��9?�o^�d��5c��C�k�9��!��{O��'�sԝ�0�2�c��t�v?���!��ͫ\��������/�G;�A_�Ô�z	��\N�M�U�R���z�!�J�Ҩ�P�ɾf:���>�}��C��>h�5���B��uï���~m�j_S3.�׸$���������%N����R�]ƹ�~�����Bc��;��L�Q����9���j_c;��l��(*XQ�>a�߱���c����i�}�(��ˡ���m9D~4E^˖zv�)f�)�u�S��#ۊu[�1�v��K�4C�l�q���!�k[��k,�:O1-���@6ǘ��D�P.m99O���_�0W�Q�lXl��x��?��T}�K���y��$jT�<�4��T.�3Dcƍ�m%p�X�ho|�Zn���R{L�&��1"���6�.���b��Rv�s�F�n�5��mb�2_�y���C�yW�DAoڤC�e�����M+���<�v.l+��ɖ�4q�ym���#��I�-�-'uɡ�s�Jo�vi� �=l�+�i��l��Eb�'��ǖ�[;�qH����3߇G9�Y�ܫS�mMO��u���D2u4�l�sa!��V
�l)U����H9����M������;�ٴ�^��c�g�t�Z:�B׋�𫁕.<@�Om��S�%����awMI�M�욁�c.E�w6)Xl�L�@_k�q�f7�h�|�3d⍵������x�<��;�8ȭI�ۥ��>Gn�}M]_jj����LvڙH�4Ue�c�.���3�U�<&��Kc���M3�ߺ@MLm^L԰�j�e��bڞ�D⁨к8��hRg+�������Xa��EdH�	2\�q��;��;����Låޏ1�������5���α�5�m�T*�K�����`
ʾ��@9��,��V2�U�|u�ϼ�)I�L^�ݐ>���U��hb�����La���0�~u�3X>�m�7�����~õ�zī��43{����`qc	+[2~�-������>.�ׄ�۴�UΤ"ԅ�]�3vh�3h�ˇ�R\�������t���6���u��ש%����9��];K�}��c��L����+�=V��d��/�m� }�+��:5��	�I��$5�#�_޻7��X�9��K0a�o��ā?6S�#��B�a�y�ڠ��#��q����W/�`��w`�@7���S��)���La�Z<���B�x�q���f�a��ù�-_�w��m���Y�b�R;E*�jo0�����p�G|5���>bF��K��8��K��[�n*x�Kh�1�p�c>����8�/����������o^���N-}:gx[u�}<��Ӧ����b�1K�#�C�t⹡U������K��i۵ܛ�Z>������ثۗy��z�yD��GdD���5�� 3�42�Li�	��S�Oi������"޾Ï_�aK�¤�S1q��˶��d��?B�n_q��-(j3���N[�0���y�旍	���+u`�|0���^�"/�/����]����A���`^)D�L��{]���
c>�φh�!N��D:e��5a�^�1��x���o�d%7��)��"7P^�<Al�y�C��3x��vil�Kbj�{k�]Lӏrg��z��,[K�i2��MdxP�v�a:�0�q��lQp˴I4��T������[�5̐�Mr�p	��M�e�w
`�����PƷ��
�)����W�2tX�H�>�E�5�{�����L�B;�~��o}�>�"���
�mi�
�㮛�y�������>݂�,R��`�
@�wvE
!�c<�J�������^g�я;�
(dq�;3hi%���I$k#��gB�3�'�C��ǃ"��Y�6�	T���[�P�=3����[�쎍H��-�F����H�L=)���p���$�1=)u�=E6���#BI�V�|��+�l�2�X�&x�2Q��d4�a�?_	���D#��C���+��̔�H����v���BN�-H ��rS�ڤ1��>!�i^0����6uUC;&d��sY�z�gLT�k�;V��������dg ������|1G��q��֖��I�.��\V�ea4h�J
�#�F�.E�)������vZψ��)�{�Ek�0��̗7i�e\���ޠL�5�;����-�hZ��
X�Ȩ�!�5��^�4�Ɉiϝ��\�%D?κi[��*����$Y�3D�`���P\U�,mX�-B}��NDwL��l��0�[�w��3�hR�$TF�"����8	� �!d` ?� H�����~�����k�{x�za�lJھ?�OD@�_��(�X;38��S�C�
hC1��ۊ� �sdIpߢ��!�L���#���U8C�B��3�hg�)d$�k<#P3�
��,��b9��1u�� u	�&�9&�zۉ�8�;n��8e�]W�<L��^ !�WK�s��� �i���NO�����]��Qg�������ܶo�!Jǒ:~en_�U\�d��b'+��v���=%�[��Ო���ėh�:�U>w E���{�\9: ���+̒U��褬�a�9�B�5�]�M�*(N$��H�&���"&
F�Ea��B�Ge��M3ѽ88�⹒����X��o�w�v��X1���STH�SH���A�#2�[�Q������"���� �6#�J�'f!5�i=C����W;�^(��*�+3U�:4ZNR�p�ᅊ�G�#����Ad�Ox�^�\w�l�!(g"
�ؤ�$�$:��s&��p��{ �5y�A|�0�Cw�d¡��tij����L�3u'����zg��M:	&#����W��Xp�^q�)�*�ANδ���Ma���=)!����ظ ��'�3
����r�+��{F��ǉ����g8ū̤-)n7B���[��0��Ҧ��$��Jr��Q���&���2�'�Iȗ*Ֆxf�*#��(�,*R�������-��sx~�G;ډ$���X@�o��J`%4�c����y�٭w"���H��7�P��,�8����g�+�==߉X�1��� ���< ��89!J�'�Pjj_�����ANp	n�a^m���K	~��rY�셄ui�HP"��7��5oq���,L��%�EС��B� �����Y0�����-/��B��i6Q�w&)7ߙ��\��0^:ۤ��K�� 2�A	i��:{[�������1%�\�|��!� ����_ի�x:��n�ɼI,����N��RJ�c�gd��2�N�e��,&��2ɣ�k�^��x�=��iرX�F���d � nє�X�=(&��h��3��\:�����r#��s�񨤖��Rx.,��G�e`*�C%���\m]`~
J�ލ=�ͮ��I%�{�D|��` f�-$�b�|n0+"�3����ԛQB�_ �BȺ�h�O@QHi5I���1���MQp�ډ^ͷFܔ�3����Z �Wfss�
ɩ5ޡfH�0�#��>��Ng24x?K������3�Q�vԁ��w���uw'k���Y�vj���~�Gۭ@V���љ_EwFn�V���ă�������R/ո������Qt�c9�U�������/��=;�*�z���N1�?�Vu�@o�^xS�?�h�����x�����)o��rB
A	[��]�3x�֊�Ď�0�8��ęe����X��"
Y����`��7r:�������'@�<޳�D!�ǂ���m-̪/&�W����g��  �{E*ov�~���eQ�w�ӗ����,]�1CXL��P�V�?������b?7q�	_(?�9yMQ"���d;�^�-��ɳe��$��4BҠ��V34+�)�� A;�t�`h�I2}c:C�"��������묘���E�Q��}:pE�:JrcLc:�N��k�a*��z���<Sc$��d ȥ���QSY�ħ
�\��R,`t�9���7�ICpA�a6�]AL��Py64P� ���N� |Z�:O��F&�B�V�߃��%�؋�W�T�Ld .���m��0��\���	�%0L�c;�@fS�Ce�c"�67p�,ӗ���z
�0����e�"���R�_[Ȃk���,ۏ��K�z����ϕ��U�ӲZ�rǲ��r?2k,vX�TsW��iVO���6f�VO$W��� ��R	/f$���v�%�"��׬
N7����O�y!�#w|����)�Jf��t �ܙ,��AB�NZ@�>��X����`�N;�k�o���_�ow0_�����O�P�p��{�$���y-�uk�2kS�/�B�_�EJ)�G:���0��U68y��.��.H�t���.�/�U�d#0>!Wv�=d�H�V��Һ�d�0�5����v��K
�O�Y�JU�TP��P�g����6y&7�,���QY^�{S$�d�8��!�����L�XU�p��[��V6�$�%y��>jg8.Wa���ϧ�>�P<��uvw2��~ӸX#�@w�ͨ�F"�U�J�˸�
��6 0؝�N
P$У9�p�:��
I���f��F+�,R�*���a�0%�8B��#��e�����O��,:4;z
')D�����!�� j;L,�f?��E�
�X>!�H
�L?�~�%ƨ,�UE�����N�r�����]D0�Ks�F�<ѷ�G�Ux���V����	�54`��K�I4�T�(c�H��&1��=C�������ߔıj2ī��jw���V�OL6Ԥ����b�u.`���.+l�W�����p����?P*)G1D�	��,��Zr���IH�d��T�dT �덅�q�Kl�vG ��}&b��.5�N�n"�AB��N!�-�Ԙh�Q���.u%,�k+Q�AC얢0T ��
S��L�ߣ�;F跻���sK�����xn��N�M�����+DI߱�Q&�8ѐ�@JC�&���hE��B���[�
���B��l;P-��91^
۳䦒��fV��?BGe��J�_��!�z"�й���viԶ��O�	�.e�)-���N�1�I���Qœ�%�.�M�IL��gf\ &�̓ٳ4�9����(V7
����{x'�&8�5n&Z�l��@)[�����8�~0BΙ�!4v�Q�:����m`m�۾�e��u�@���Ti��F@чul�\�1C�cO��X�p�H��ՙv��@Xi��c1�T���?��"�3�t1�
�LPw������,��������0�1�>���<g��;!WC�*��Dժ�c�����]Z̵	0�%�ӥ�A'�.��J"�QfՒ��@��`�|#��(��l�To�,��(x��������E�`]��\��9o���B�g2S�d�Ϟ���)�}�$ri�͑�ɅS�A{H���FG�����ͻM��h� K��L�l��
�W�;V�Na��'���_�(WUsND�M<DW��ha��V����H)�B�ة2�r�&���.X��k�)����yk.:OM�IB��}��,��!�o`��]�YR�D�[�=��$
�P�v0���3�!�s�k���	�������7/e{T��L�Jn'̌��w$o:"���N�m�{���=o�������m�>y��1������D[�yf+�~��R05J��E�'�k���]�)}�,՚�C?k7�+�G���3|Z�4���8h�DbڳS����m*uS��W�3@��'���CӨ�������C���ho�X�'�Y��������]Q��j�_�-AU��FMg���d'E}(؎B�{�|��(���Z�l�Q��r4��G��U���|R��I�ŷ�~HX1�������w�ya�
P2S�Le��Q�!"�D��'P��5�p�!�qW��&ߵ�8�u�o�Bֈ�8���e�Y�:�(��3�{UNJg�vP���.(�m��z9��L����/�W��T�a
�7�3<�42�ޠ7�)���L���ŉ["@F�I8������ŷL�����h$��fU6�NQ���}�˰Oo��U�Gk���$�5����Ga�V}����ufC9�9Q@�ן2������9v����ܫ"}���ӛ��J���'.��ڍ8��6�p[�|c{����
�ޚ���0|\�v{�z{u�?�^ޟ�c����|�տ��gWx5�>���_�1�,��A8(5}>��CPd��w�#�]����Ԍ���&d�1�K�0��
^��ȑ\���銁��9�Ǣ��
͖}�쪩'���<���P�;{�rri��X~��ݰ��(�~�f��/�fF�Y��L?f��0A��VE��(�L]M3�A��������d���kaޙ}W15c&��e�!��,bV�lj+9J͗5�$��!�IQ inA2���sV]q�|�K��Ԯ�P�'�y@�4B���&��:a�m�Ӿ�׻���K�*���x?~�t��`��������=��O��2��)ƿ9eɗ+���)��Sv�ڏ;�E�?�'�|�>� �M��6��=����Z������H���C)���k������n������$���E[���f�v�ݵgn�*���;p��h����L�<?���^v�����H�$"5�(/�p�Lfz]e���u����I���A���i�q�'��$�[�ӽ��"�5��
��t��]B�-��}��#�YI`[�Xf$���H���b3��'�(&�ɫ/�_��8x�����4����A���q�:Ҝ��Ɩ{��I��|Q&�ߛ�R&�?��E�[:'�R������tJl�>��п��4�w�m>��D�/����;���Ǉ����w%o;��i�l�/���?��ϙ>zz���N�����h���Ɉ�9
z�(����ŵlQR�l�TG�S&16��ƨ�!+�<�X�;�Τ�y�Âʋ�N�x6ϫ�S�;=bB��ۡ��y:Z"����)�/U#*
��F�kޗ���}��=^�A�2B��o�~���U/�/k��f��oM�w��_�a�7�T�Ƴ���S��t�>�,
,��
ע7�8t�NQa����Cg$�q��Y����\��w@��{)�,+��h�	�̹{8P!ͺ�
u^��!��@b���6P4n-��Y�ýd�m=)���c���
���8�}� ���s%�M�e�b^����Q��j�֎aL)_ϑ��ع��*i����%��{��s����g{�ۭ��m�ܶ:*W�l�T~~͟�I��O�gVol��9�o%��@��Ѡd���p_0���I������}���3�)��.�}��O�y��1�|�j��m"�e?Ung`��{�=�}n�h�7�@�::��դF�C���"pQ���y��i�4��g�%z��`�Cg3Bb�r��a�/�>Nt�S�`�BP�!��JKt�
�̳��d� ������Hae)���}{��>�Npif,��M�J���>��p;������7��B�g��ײ�5�T�)轝�׼5��zgQ����֔oW��7+�ׇi��<�Ϊ�߹z��}��ؾ/�
�"M	$XR������*������Q�c�k���M�Ƅ1%��q���-�!}�v���q�����ֿy�|���s>-� =:��h��2Ջ�Ow��$1�|�11�Eӕ �U����+��u-�w���� �x���Ƭ���׊���5��u�6� �5�@�*�i�fY�kA|�D�"�d��l������,;+x����ۯ5sdqM��r�oև��V=��T�خ��=赍�9N�nʃ4?m�nм��͹�vݪ��Cܮ�C�~7[�*Ê��A���V=�⾁��E��BLY�w!��I�U����t���wg�G��譺ay��ء����R�r���k�[��F��Y���R�/iZg1�=>�����K���Hw/��W��Ub|k\_Ҵ=Z�oC7��G^uDz��ߗ4m����a��,ݷz�=X��J���m@ ����xu;c�	c�zw�������܇�6�F�P[}?��[�0g��B༐��a
���b�vKua"��K{g��6Db�#�4�e���J�>k�3�#x+?~w���`�Ϗc��l�N��ُ�ҫ��w�0>ߧ�~F�n��A~��ip�֨�n���L�S)?�m���g�f���#cs��h�����8[��� �����H�h�τTǜ8��F`r���'���<�j��f�
�����~S�8]nh@_��uN�&�_2�a	04�����f��[˘6p$�T����������3k�AZ�l�9�d-os�֪,B�^}W<���/e�f�My�4�	��,V�'.y��?�-�P�ֽ�e��7S����hz_O	Cr0��~9?g�P
ىR�4�=%/z���gvHj0�� ���4%TV�l�|���t��+J�&�h�g�>Z
�4O�?*d���Ce��Qd�6�S�E/���:f��IL�ֽx	�NK��|[��C��?3C�z��u�s`W) ���;�����3�JQ�
е�}nﵺh����M.�^�:��5�e��Ƹ�������mq�m�h�2�;K�so0��3.rTH�ijh��=�*��ьh�>�P�l��gu�]G�[=X{f�8�mU���{b�yZ���>s0�9�Qz��WA��A�ԽJ�:���Q9*-O^�S�F�D�
��փ�+O�e1zO�w���
�]�p��w�:�u¸+��U���9� �G��58�Ӽ����J�4+42	yN����N��(�[���F���	�Pۡ�S1���X� �
a��al0�~I<�A����D������A͓�E�3��a����7���f�l7E�A�4�n'����b>+ޢ�5�򏉓M�8���P��Ȣ���!� �jg�v�=g�7C����
5aJk8Z�r�&��1�<��}�JBԍKGK懯��c�
_gyT#m�#ʤ���E�z8�����:D�A����5̘N~�4m�>X��ʙ���s��n�i)�=�0/��紂Y���{9��_��D��s ��Qϩ���9&a����!�1<:�Fq�6��%��
x����:<�[ѿJ6m_QX�6����{�s]�n�s�sw�B�7��49�}|3����<VTmߏx��FhN��"GȮ��mG�{��R}���/����a>��sg�|�a#�h����>?�x	�Jeg���[�ZU���M���T�e:q�X�e�S���b���h����C�	{�����T�m�u�7ڷ��,q������!Y>�)���r\RCO���_�vC1�i�yh�  mO�ٚ:�lL��$������sƸT|������&nbn0��ᰳw<��+��ڈ��*����𿾳#��ۭ*�j�I�fm�L���*�M%m߇}�zs��x�H��-�G����.[\͑�am�8�-c�π�G-���i��J�<֫�2��F��痞0��O�wqJ��-6]��vd?Kt'��&�g�Z�V�
N� ��Zzi}����/9�~��- j�z]Fy��{V��qjN������4k�������u������F��~`�Q��5���fb���Ł���5�
�"�<���DAM�D �����`�|�:���U�X�#��2��TȪ3ԅl���\�t�����(͉瀕�A,x�YiZ���`<�=���f��@�J $d�I�*��U|��7~�*�)k��\��S��;�#��'!%8n2H|�l�����+ȶt��Qw�p���>���Qn���Czs� J	�xv��'n���	&`�Ȭ+�T$�P�32�I&���0]���Ȗ��G��.3�i5�� RxsTv�5�9@F)���&��\4Yƛ���N�	�L��f��B���?h�c���l�>3���bdd�������Ux�
x��{��J�^%�g hp?:�A�v��썵�5R+7B{_h	�p��5d��%�opI~XA���;��*�!��V=y7��H}\�?�0�������p#;�(�m'�SE���I*r���3���h�Jr<�d�M3@N)z6j��Z7�� �n2*�A�1���8�|�cP�H�bzr�c��[��Ӊ���
�(��"a@>�t�a���,�,4{�M�}�Pc.[\P�	��Q�P/lAZ���3�����C����{'Y�Ngv 2l�]�e&�^H��jR�=��p7�,#�V��bU�w"�C�Q��ߪ�⚻��?y����9Jv���;��,b����S�ͫ����ʐ��z�ں�������)j^'eb�*��V����7DI\�6;����Z�7Z`�ɮP  $��و���G��|��w�l>�f����~� ������]���o���sҚ^ʔ�i9[��	���Z�o��u4`,oAIy;�z�g��m^OG�yY&\5V,�����_�W�
�#��}��P= �*V?0����I�$ԞX��h�h~�d���
����m��g>pI�	q�\|�p�'�����b��^�C�B%�{Aq�ΊG�μ�H�!3�ޠ���0f����ؾ��IӹM�� � ��PH�7ՌLķ���Օ�f{1��`L��ʡ���@`�"SQ� 	�����_H@�Z3P�1Z����-�ɬ���|��s/�O��1�e�#wLN�IX�<8^��Y�M��}Ǣ8Y��r.E{9���d�'�MQ�����Ύ�*�9�脏���ҫ#�Uꝡ ׾So14���gw�Y ^0���w�LS~z��%j��o���k�Oߒk7�`?�cS�5��ɱII�W�RzWy�y��Rh���V��w0<�M2+��^Gϯ���M���xSu�M]G�F�EĲ0f�FQR�ZNn�/o������՘�;=���/�����͂
Ja��!S��|��4��du���ԣwa~&S��g��U���Nw
�lY�g��9ʌͰ�{	U���e<5�ܩ�w�k�*Q�記zvԓXs>"�F���Ӂ4?���" Wr����'J9���lխ�y��P@�,XU��M,kL��>~�k_Q�|5��;?���|6�����>7:�ޙ����޿9e�������?�w�
u
�Z�}�4?x��W���{�����Ӄ�����ݷ�x����w���o�9�d��}��c5�����4���}_^{�a����.f�̚��Sp�v���|���d�{]m/b[�8\��Kh�q����\���A��N�}jw93������.���v��,�^�zlu�ph?�*Q����'g��pPmz��ۍ��z#�7��Y���p� P7��dV��}J-����=��}�z+H,DXA_4�m6*�YK���ٛ�)z#l\����L����H_ˑ��nx��{���L����4�ف22iF��hOI'�UA���n���;+S�xow.����-�6����������Q����F�Dmȸn�/u��Az�,������H[�-��n�%6���0�p��2��7��̛)�Ń��~�\ŽN[i�vׅ帤��)�H�yR?m�3��)ӟ��{
UIAA$�Ȳ���pZ
�����i����T(-��Q{�L�s��5�`���.��@� ���%/c FNW M��a'���6M�L�@V�ٱ��\C��ƞ���R�3O��pKjz;|�3�jw�Ѽx϶K�����_���@��MH��5:u�($�5�qRȽF���3{��eT��`�"lM3���_dC2��w��LIc9������Z�؅��v��2����bf�X��V��z&�33���(����p�2$e�O���gro���7A9���r�X`R)2?29��,h�
���w����\��r�F��a8���΍�t����`��R�5�$�K%�O�����<E� 䓩�1\��O��O�r�ꕅĦњ��`C/�C
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[17]=<<<'PACKAGER_BIN'
       @BASEc�[�  L   �FFTM\�39  �   GDEF.   �    GPOS3Q:    8GSUB1V�  :   �OS/2mp�  :�   `cmapCL1F  ;\  �cvt ?Y  =�   >fpgmS�/�  >8  egasp     @�   glyf@Z/  @�  �xhead�$�  �    6hhealx  �X   $hmtx;�NB  �|  loca	�7z  ��  maxp�  ��    name(��  ��  �post��6� �  �prep$�k� �   �webf��O� $            ideoromn DFLT cyrl 0grek Flatn \          ��             ��             ��             ��          ɉo1    �u^�    ��e3                          
 � � DFLT cyrl *grek :latn J     ��          ��          ��      " AZE  "CRT  "MOL  "ROM  "TRK  "  ��      cpsp kern size               n                     �x %p  
   )  Q $ % & ' ( ) * + , - . / 0 1 2 3 4 5 6 7 8 9 : ; < = p q r s t u v w x y z { | } ~  � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �  b    * ^ d j p d d v | � � � d ^ d d d d d d � ^ ^ d � d p p � p" d d d v v |, �6L6L  ���  � 
  � )  ���  �   L�� ��� ��h ��� ��� ��� � �  v�� � }  ��� ��o � b ��o 
 E � K � N � O � � � � � � � � � � � � �  &�� *�� 2�� 4�� w�� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��  �  �   � } � }  L�� ��� ��� ��� ���  L�� ��� ��� ��� ���  * & ' ) / 2 4 6 7 9 : < U w � � � � � � � � � � � � � � � � � � � � � � � � � � � � � <   LD 2 '  ��                                    ��  ��                ��  ��            ��                       
        ��      !                3 !��          ��                                        ��    ��       ;  ��  ����          ��                             ��                              ����          ��                                    ��  ��                ��  ��            ��                        ��    ��                 ��       '           ��                                                              ����          ��                                        ����  ��       ����  ����          ��                       9��      ��   /   - ��    ����      /��          ��                                                              ����          ��                        ��      ����     !  ��       ��     5 3��          ��                                ����    #            ��       '            ��                                ��       !                    -            �Z #�����������L       ��������������������           ����������            ��        ��  ��  ��               
                           
��           )   ��      
           ��  ����    ���� ��      ��                     )                   ����  ��  �� ������ 
                    ��            �b��            �m      ����  ����    ����  ��  ������      ��  �B                        ��                                         ��              D  ��     �� %       ��    
��    ����        ����  ��            �9 )  ������  �N             ��  ��  ������          ����  �5��3            ��                ��             
                       ����            ��        ������  ��      
           ��  ��      ��     ��            �f��    ���������o      ����  ������ ��   ��  ��  ������    1��           
     ��  ��                                                       ;������   F ) !  �j��    ����  ���b�  �������{���������� Z    3�j                            ��               ��    ��������              ����           7��  ��         ����    ����  ������  ����  ��  �������� T   %�              ��   ��   ��            ����    ����  ��      ����   ��               !������   /����  �N����  ���  ���?�����}�����V���������� X �� �#             !  ��    ��    
              ��    ����            ��    ��                                                    ��                   ��                                                         ��           5     
��                                      ����     ��  ��                ����                                      ��      ����            =      � b \ ���                                    ��      ��                   ��      !��          ��        ��  ��                                                             ����     ������                                                             ����     ������  ��              #      ��                                   F   ��   L  H  ��           j                                                                                                          ���                                                                             
��                                                                           ��           ������       ��     3��      ��   /                         �           9�T����   ' 
 !  �q��  ��� 
  ���{�� ��  ����             ��  ��                                                                                        7�T����   -  !  �L��    ����  ���P�V��  ��  ��                �����d        �R       �� �7              
          ��                                ��        ��  ��                                              �^      �-                                                                              �� J   � 0   +         + '       ( & (                                     
 
  
  '                     $         %   
 
 
                         	                 
 
 
 
 
 
 
                      
                                             	  	  	                                          ! $   ! $   "              
      $ >  D ^ " i i = n n > p � ? � � � � � � � � � �   �
         ��                                      ���}�L  ���d           �� + 
��   '  ��                    �� �f��      ��            
           !                                             ����  %�'�3�� !  ��       �j������  �d�+    ��      ��        ���q �
 !     ��       !       +   #        ��   ������  ��                                  ����                                                                        ����      ��                
 !  !    % !    3                ��         ��  ��      ��  ��      ��     ��  ��  !                                   ��  �q                  ����  ��  ��      ��                                   ������  ������  ����            ��  ��  !                    ������   ����   �j�u�� ��  ��������  ��        ����          ��          ����  �?                 ��              ��    ���� 
������  ��               ����   ����  ����    �m                 ����  �����q�\    ����  ��                        ����  �5�H�� ��  ��        �����������^�F    ��  ��  ��        ���� �3      ������             ��          ���� ������  ��                                                 ��               ��                                                                          ��            
                                                                  ��          
             
                                       ��      ��           ��           ��������                                �� 
  �������� #                      ����                                        �� ����                                                                    ����    ����  ��                          ��                                ��     ������ ' -    %              ����                                            ����      �� 
            ��                                    �� 
������  ��  ��  ��  ��                ��  �`��                                                                      ��������                              ��    ��  ��  ����                                                                   ��������                       ������                                
   
  
��  �� +     !             #   ��                                 
       ������                      #��  ��   '                                        ��                            #  ��                                           D             !   )         -   ; 1                                           =�� ��        ��          +�� N ' =     ������                                 %       )    ��  ��                ����              ��                       
            ��                ��    ��                ��            ����    ��  ��                          �J                                                                        ����      �^                  ��          �h ��  ��  ��   ' ' ' '              ����    �N                �f��    ���{�-  ��  ��  �}   ; ; ; ;              +   & 
 
 &   $   %   #   % % %  ' '  ( (  + ,  . .  0 0  1 1  2 2  3 3 	 4 4  7 7 
 
 &   $   %   #   %    $ $  % %  & &  ' )  * *  + ,  . /  0 0  1 1  2 2  3 3  4 4  5 5  7 7  ; ; 	 = = 
     $ % ' ( + , . 0 1 2 3 4 7 ; = > ^ i p q r s t u v x y z { | } ~  � � � � � � � � � � � � � � � � � � � � � � � � � � �   �T 0 -   %�q �� /�� ����               ���� ���� 
�� #����������                  ��    ��  �������� ��������������������      ������        ����  ����  ����                         �d �� #�D ����     ��  ��     �� ��       ��    ����                            ����     
��    ��      ��          ������     ���� 
  ��                               ��                   ��          ��         ��     ��                            ������  ������  ������  ��  ��  ��    �� 
         ��  
  
  ����                           �� ��  ����  ��  ��         ��     
   ��     ��  
                         �{  ������ �T�������o  ��  ������������ ��  ���� ����  
��   ��������  ��������       # 7 %�� 7 5  �� #    ��      ����  �� �� ��  �� ��     ��                      �� T ���� B�o�� B !�`  ��    �������N�) ?�����D�R�{���B ?���b�����b�o�X�� '���Z�X�{��       �� '   ��  ��  ��       ����     �� ������ ��   ��        ��            ���;����  �V����������  ������  ��  ��������      ����  ����    ��        ��          ��   ��    %   %         ��       ����    �� ������ 
��                            ��          ��   ����              ���� ��        ��     ��  ����                       3  �� = - 3�� # %   ��    1  ���� - #  �� 3��  �� !��  !             ��        ������  ������  ������  ��  ��  ��   �� 
   
     ��        ��                         �� 
�� �� ����    ��       ����      �� !�� F��  ��               %            �L  ��  �h  ����      ��       ����  ��    ��  ����������                              �� ^ ���� F�s�� / #��      ���������f L��������  ���� ?���������������� )���������    ����  ��  ����������    ��  ��      ���� ��     ����   ����  ��                                                         ����  ��       ����  ����                                                                 ��  ��       ��      ��                                                                 �� ��        ����  ����                                                                  ��  ��       ����  ����                                                                 ����������   ����  ����  ����   ��                                                      �� ��      ����������                                                                �� #    !�� +   ��    !  
                                                         ����  �� 
���� %����   ��  ����������  �h��  ��                                        �� !     !�� -   ��    # #                   ��                                      ������������   ����  ������  ��                   ��                                      ��            ����                                                                      
��  ��     ����    ��   ��                                                            ��          ��                                                                       ���� +     �� 1   ��    ! +                  ��                                        ��������      ����  ����������    ��                                                    ���� +��   �� �� ?������                                                               ��  ��       ����    ��                                                                ����  �� ���� !����       ��  ��  ��������  ��                                      ����  ��       ����  ����   ��                                                           ��   �             w                                  )    �� +��   ��    ��    ��    ��          �� ?   ����                             ��                    ��          �� ��         /��  ����                              ����    ������  ����    ��  ������  ������      ������    ��������                         ��      ��    ��          ��         ��         ��  ��                                ����    ������  ����    ��    ��    ������      ��  ��  ����������                           f  ���� j�T��   �j        ��      �} 7      �� ��   7����                            ��     �� '��     ��  ��          ����          ��   ��                              ������    ����  ������  ��������    ��������       ��  ������������������                   (   *   ) > > ( ^ ^ ( i i + n n , � � * � � - � � . � � / � � - � � . � � / � � + � � ,     &   (   )   (   ' @ @ & ` ` & i i + n n * � � ) � � , � � , � � ( � � + � � *       > ^ i n � � � � � � � � � �    
 r � DFLT cyrl &grek 2latn >     ��        ��        ��    " AZE  "CRT  "MOL  "ROM  "TRK  "  ��    frac                    " 8                                                  4X  3�   �3�  � fR    �           ADBE    �  �   �F  �    !�                   �      x   Z @   ~ � � � � � � � � � � � � � � �:DHU[aeq~���� 
    " & / : _ �!"� ��     � � � � � � � � � � � � � � �9=GPX`dnx����      " & / 9 _ �!"� ������������������������������������������}�{�t�r�n�l�d�^�K����������������������R��!                                                                                                                           	

,�+X!!Y-�, Ұ+-�, /�+\X  G#Faj X db8!!Y!Y-�
 +�
 +� +�
 +�/�
 +��
�/�
�+��	99 ��90174632#"&!#j\IJZ]KG\'ɑK_^LI`an�
 +��+�
 +�	+��99 013#3#[�+�K�+����.��   Q  (�  Y �  +�333� /�$3� #+�$2�/�$3� #+�	

 +��+�
 +�
+�@	+��+�
 +�
+�@	+��+�
 +�!+�6�?o� +
�?j�Z +
��+�+�+��	+��
+��

+�@+*	+�/��2�
+�@	+�./�ֱ
��*+�2�)
 +�2�)�+�%
�/+��9�*�
9�)�	999��"9�%�#999 �+� 9��%$9��901?32654&'.546753.#"#5.�;��h�q}Z�g5�����;)O^4ifx������d�v�_]MIe-!F]wI����F�X?A\8E������4   <����   # 4 D � �/  +� 3�9 +�/� +�B+�' +�/� +�!2�E/� ִ
 +��+�
 +��$+�5
 +�5�<+�)
 +�F+�� #$9�<5�!&/"9$9 �9�$)<999�'�99014632#".732654.#"3	46 #".732654.#"<Ѧl�U<g�IK�c9�VLOP%?+3I"�2�����K�'E^l;;lYB&�%L3OO
%6#MT���g�l�l:9i�m~���<cO,M~����M�����V�iI$#Hd�VQ~K��0RH3�  C��n� , 6 E � �#  +�(  +�0� +�C��F/� ֱ-
�- +�7
�-�@+�
 #+��+�
 ++�G+�7�599�@�(0$9��%&3$9��#9 �0#�&9�C� 5;$9014675.54>32673!.'#".73267&>54&#"C��6@"1EQf8g�`���X^'�?�eS(��O��t�t>��xK}-s���,#1D5LGHS���F@�L'NJB8(O�at�P�_�����p\*U�Eu�zm�6-v i6+SE( 4=A%Bdi     [�P�    �/� 	 +�/�ִ
 +�+ 013#[�+����    ���Q�   �
 +�+ 013#.�����4WQ-mn�������H��   <��� 	  �
/�ִ
 +�+ 013 <�������q�t��������     A�t�   � +�3�/�+ 015573%%'5AJ٥���S��ߧ����ں8_��A_��8�4��_A��a   W  ��  O �
  +� /�3��2� 
+�@	+�/�
ְ2�	
 +�2�	

+�@		+�
	
+�@
 	+�
 
+�	+ 0167%,Q0�?��~;����f    A�k�  " � /����/� +�
 +�+ 015!A*縸   n���?  5 �
  +�	 +�
  +�	 +�
 +�
 +�+ 0174632#"&n^HI\)M2G\�Ka_M0N-b   ����   � +�/�+ 013���U&��    J��B�   @ �  +��/��� /� ֱ
��+�

�!+��99 ��
9014632#"&%32>54.#"Jx�e�uP&t꧞�q�oOk42kOm���I�F��}�����E����}몦�}��   �  �  # �  +�/�/�ֱ
�	+��9 01%3!#�X�����٪�}��    ]  � # O �   +�!	�/���$/�	ֱ
�	
+�@#	+�	
+�@	 	+�%+ �! �9��99��901357>74.#"'>32!]�Z|wI::dC��MQ�r�p;+FsuQzA��Tx~ad[/1RC&v�BODw�XH�~�wKj�    W��� 6 l �4  +��/��/� ��7/�	ֱ.
� ��%
�%
+�@	+�8+�	�*+99 �4� 9��9��*+99��%99� �901?32>54.+532>54&#"'>32#"&W<4�[IrA!6\p@yy1^S4rpO�3<B�vj�k9!Ac@��.]��gx�J� 7'AN+=^8�,N2Nd6#�-@8`{F8cUD��H�jN+9   )  \� 
  Z �	  +� /�3��2�/�/�	ְ2�
�2�	
+�@	+�	
+�@	 	+�+�	�9 � �9��9015!3##%!47#)B;������=?��f�o�����f��L�{s�}     [��� " F �   +��
�$+��99 � � 9�
�"�)+�
�2+�)"�999��99 �,&� 99��9��901476%6&3632#".%32654&#"F�r�6M::Ml�oDw�[�uB-Wx�X~˄F:zUf|�sJ}J�Dl��	
��?/� ֱ 
� �0 ��
�/�0
� �*+�
�5 ��
�@+�0�9�5�
'-$9��99 �<'� -2$9014%5.54>32#".%32654&'>54.#"Jkk|օY�fG!lnz���x�zB
!,;#alm�t4�`q�`)D]e5_�7.�~}�iAn�j:3+v\g�"�@�@qL0-&o  L��@�  / ` �  +��/�#�-/���0/� ֱ 
� �(+�2�

�1+�  �99�(�99 ��9�#�9�-�
 99014>32'576767##".%3267654.#"LL��ny�|B�\��OR7^�x�'r�[�rA	}kMv!9a?e��e��QZ�ۃ�Y�Tc
�

  +�	 +�/�	 +�/� ְ
 +�2�
 +�+ 0174>32#"&462#".n*L0IZ]KE\]�Z]K-J*�2N,_MI`a$K`_LI`,M   ���   , �/�	 +�/�ִ
 +�+��999 0167%4632#"&-P0�?I\H1J)]KE[��~;����fbK`+N2I`a     �  ��   �  +�/�	+ 015���1��������    W�v     � /� #+�/� #+�/�	+ 015!5!W`��`�����   �  ��   �   +�/�	+ 013555�=���}���  j��I� " 0 ~ �-  +�'	 
 ++��*+�#
 +�#/�*
 +��+�
�2+�#�9��'-$9�*�9 �'�"999�� 901>32#'&7>54&'"4>32#".j>�cb�]1<&%@6��%'[Y;w'N*K/I[]K.K)x(15]uB.ZAS.*J�O09��!09.4GR"��1N+_KI`,N    f� G T � �B/�< +�/�3�K +�& +�Q/� +�1/� +�U/� ִ6
 +�6�+�H
 +�H�,+�
 +�V+�6�?�Y +
�N�O��%��#��$%#+�$%# � �#9 �#$NO....�#$NO....�@�,H�1<?B$9 �<�>9�QK� ,6$9014>$32#"&'##".54>32>54.#"327#".%326?&#"fI�� ����`?m�RKam�Cl?J��p._NC'a>:,E��|��f5c��`��%]�rlǧ}F@>I�%&/Q�Oȅ�ЛW_��uăIZX�B�Vd��T�s�?YIp��Nc����l��b2Gn-&<v��kEP�c�^�   .  2�   � �   +�333� +�3� 
�	3��2�/� ֱ
��+�
�+�6�=:�^ +
� ��������m +
��
�����
�
+��+�+�
�	
+ �
..�	
........�@ ��9013!!!!&'#.�U�����2~�wr07��I��bihR��5    �����  & 0 } �  +�� +�.�'&
�'��1/� ֱ
�'2�� +�
�+ ��

�2+�+�999� �
9��9017>32!"732>54.+532654&#"�D�l��HGRu<hS1���|�l#jCq]54]wG������i/�
     L����  = �  +�	� +��� /� ֱ
�!+ ��9�� 
999��	90146$32&#" 32>7#"$Lw��R�[8��p��L�4m^%+5�{����ʲ$�k�9G�͂����'�N    ���|�   N �  +�� +��� /� ֱ
��+�
�!+��99 �� 9��9��9017632#"732327>5&'&#"����"f�wll����k%o�z|����rD�TU������cbe�>?��     �  �  J �   +�	� +�� 
���/� ֱ	
�2�	 
+�@		+�@		+�@		+�
���
/� ֱ	
�2�	 
+�@		+�@		+�+ 013!!!!�O�������m���     N��.� $ v �   +�� +�	� 
���%/� ֱ
��+�
�
+�@	+�&+�� 999��
	99 � �9��9��
9��	90166$32&#"327!5!# '&Nw�-�U�j$:��uÎNJ��r�C��U�����bjϬ�l�?E��~zȇIo�� 2�]   �  �  ? �   +�3� +�3�
 
�	��/� ֱ
�2��+�2�
�
�
�+ 013!���I    ����  / �  +�	�	 +�/�ֱ
�+ �� 9�	�901?32>5!#"&!NV<VC!.R{�Y:|�H�^��Kw�{N"  �  ��  0 �   +�
3� +�3�/� ֱ
�2�+ � �99013!367!	!�	$G�H����c���_9f��������     �  ��  , �   +�	� +�/� ֱ
� 
+�@	+�+ 013!!�Z��)�    v  ��  � �   +�3� +�	3�/� ֱ
��+�
�+�6�=��� +
������� �....�....�@� �9��	99��
9 � �999013!37!!545###va`�M:BO�ZU��Ie���W=
�
 #+��+�

�+��9��99�
�99 � �99013!3&3!'�2y�\������a	�������q��I��������     N����  * D �  +�� +�&��+/� ֱ
��+�

�,+��99 �&�
 990146$32#".%32>54.#"Ng����]i�� ����`_�|@pXF.,EXrB`�d6ѧ�rr������hq����&Gcz�ME�xdJ)V��     �  o�   R �   +� +��
�
�2��+�
�+��
����Pp7
��'+�

�6+�'�$9�
�9 �#�9�/�
 990146$32$%&'.%32>54.#"Nf����]9f�R��L����+4V��vW08f�]}�]"1CPd8N�`D!Ϩ�qr����y!	1%�Rj0T��}nU���<rk]M79f��   �  ��   * l �   +�3� +�(�! 
���+/� ֱ 
�!2� �%+�

�,+�% �$9�
�9 � �9�!�99�(�
9��9013632!&.'#32654&#"���j��2=A,K^6�9 ��*8 ts������p5� 4)3�^Dz[A7�*~OW:U�o���ntv
�!�+�)
�2+�!�9��
�
+�@	+�
+�@ 	+�	+ 015!!!R�[������)�   ����  7 �  +�� +�
3�/� ֱ
��	+�
�+�	�9 01!3265!#".�����S�Ԇ�ʕNqF������U�����MJ��     �  = �  +�  +�3�/� ֱ
��+�	
�
99 � �901!36!!#�f)*l������f��źX��I     !  F�  � �  +�3�  +�33� /� ֱ
��+�
�!+�6�>q�� +
���������+�	+�
+� � �#9�	9�
9 �	
.......�	
.......�@��99 � �99901!3>7!36!!'#!!�1.
����P    +  ��  & �   +�
3�/�+ � �99013	!367!	!&'#+��\5�;;6=�3�T��ɝFM+Z�����q�w-�6�"~�h���     �� 
�+��99 � �901!367!!2�M3)U�-�������zm�w����b    8  ��  4 �   +�		� +�	��/�
 
+�2�
 +�
 
+�2�	+ 01!#3�����ę�o�    ����  O �  +�3�/� ִ
 +��+�
 +�+�6���O +
� ������..�@ 013#������    C�
 
+��
 +�/��
 
+�/�	+ 013#5!!C����XY���<  n���   �/�/�	+ 013##nĬ���������&��    ��=�]   �/�  +�  +�/�+ 01!!=�ãl     ���  ( �/�	 
 
+�+ �� 901!#�����   F���9 ) 6 w �  +�%  +�-� +�
���7/� ֱ*
�*�2+�2�
�8+�* �99�2�
+�@		+�0/�ֱ
�2�
 #+��&+�
�1+��9�&�	99 �# �9�*�99�	�901365!3>32#"'#32654.#"�3�t��873FT_d4�l/Cb9}�:{VR�	�����OZ�zx�P�r_D/���#6T0��`�\kX&   L���9 ! = �  +�� +���"/� ֱ
�#+ ��9�� 
999��	9014>32&#"327#" L3d��nF�/0Tud�&%2WvDne$Uy?���_��f8�)[MK^P�U.)�&  L��g  - u �  +�  +�� +�*�*
+�@
	+�./� ֱ
��#+�	2�
��
�/�/+�#�99��9 ��99�*� 9��	99014>323!#'##".%32676=4'.#"LK��`i�%	�
���,/� ֱ
�2��+�
�-+��999��999 ��9��9�� 99014>32!327#" !45&'.#"L*Vy�cc�eD�<6[qB��'����� �0P30P7' Y��l>?f��IA0Fk@!0�C u I6$!5FD    �  X �  +� +�3� �2�/���/�ְ2�
�2�
+�@	+�
+�@ 	+�+ ��9��
�*�4+� 2�
��

 #+�
/�>+�* �99�4�"&$9�
�	9 �&�9�:� !999��	9014>32373!"&'732>=##".%32676=4'.#"LN��_N~L�
JR���f�D;9�YCmS-XwE��s"?c=Kx
qRr�~ՍM0F/�������I�-(�".$K}S[/F(��DvX3YI!<�,L_�    �  L  1 �   +�3�/� ֱ
�2��+�
�+��9 013!367632!4.#"�3RTd9g`G*��/P5Jo��L,/Fg�b��S:`J)UA2��    �  ��   E �  +�
 *+�
 *+� +�
�+��	99 014632#"&!�TBCQSDBRI>SR?=SS��!��    ���2��   @ � +�/� �/�	 +�/�ֱ
�*+�
 *+�+��99 0167>5!#4632#"&[�?'CHA�k�TD+C$RECQ�
B*��d�O��H>>>S&B)=SS  �  k  - �   +�
3� +�/� ֱ
�2�+ � �99013!367!	!�4A�w�����Y�LP,T�P���j��    �  �   �   +�/� ֱ
�
�+ 013!���     �  �9 1 q �/  +�"33�  +� +�3�(�2�2/�/ֱ.
�
 #+�.�#+�"
�"�+�
�3+�.�9�"/�9��9 � (�$90133>32367632!4&#"!4.#"!4��6Nn@g�#6J\}7b\C(��_^Ac
�
 ++� �+�
�%+� �9��9 � �990133>32!4.#"!4��<Sq?=<73+$
��+�
�%+��99 �� 99014632#".%32654.#"L�����=i��SoR�wr�(:W5Di=
� ����q��Z)K�τ��ɡ3c^F*>i|   ��R�9  + j �  +��  +� +�&�/�,/�ֱ
�2�
 2+��"+�

�-+��9�"�99 ��99�&�
9� �990133632#"&'#!432654.#"��
��+�#2�
��
�/�.+��99��
9 ��9�)� 9��
99014>327!!##".%32676=4'.#"L7]z�EHyW	��1�pY�yG�|P}
�
 #+�+��9 � �990133>32&#"!4��
_p; %,]��!�Gg1�m\%,����     N��=9 + j �*  +�� +���,/�ֱ!
�!�+�'
�-+�!�99��$*$9�'�%999 �*� 9��%$9��901?32654.'.54>32.#"#"N60�DUT(1!��9f�Z8mT!6(y?FMNj���̾4�/?73�cEyY2�&@20<'2�t��     %���0  Q �  +���� +�3� �2�/�ְ2�	
�2�	
+�@		+�2�	
+�@ 	+�+ 01535%!#327#"&'&5%� ��?J>*KvIw&TZ��I����-e_�-*W��    ���J!  Y �  +�  +�� +�3�/� ֱ
��
+�
�
 ++�/�+�
�9��9 ��9901!326765!#'##".��Lj�
�
��
�������
+�
+�	
+�
 � �#9�9�	9 �
	.......�
	.......�@ � �99901!3>73367!#&'##l-�؅2#7v���~-$"/��!�!��)aBr��+��s����������R       !  & �   +�
3�/�+ � �99013	!36?!	!'&'#n��)~B8%v"��i�с#< (y�0tj>�����9r9C�  �"3!   �  +�3�/�+ 01!367!'67>7654'(�&&���Ixo?H�;=MN(P
 +�22� 2
+�@ (	+�2� �# ��.
 +�./�	033�#
 +�2�9+�#2�99 � &�#.99��99��99015>54'&546;#3#".547654.?+?$
 +�
 +�+ 013����{��   ?�
 +�!22�0
+�@0*	+�� ��3�,
 +�#2�,
+�@6	+�2�8+�,�
 +��+�
 +� +��99 �	� 9��9901&6323273#"&'&'.#"d��E{r[c,a�)Na<C�m
*<-4;���+90)�e�U'.7T`  l�]�*   ^ � +�
	 
 +�
 +� +�
 +�/�
 +��+�
�
�+��
99 014632#"&3l]KGZ)L1G\*�'�J_`I1M,`�&��     �����   q �/�3���	 
+�/��
+�@	+�!/� ֱ
��+�2�
 +�2�"+��99 ��9�� 
999��	99014>753&#"327#5&'.�gʈ�xc0U{��1ToA�f%]���};?Ƈ���-�.��OR,.�0	���B�     t  *� ( � �   +�&�/� 3��2�/���)/�ִ!
 2+�!
+�@!(	+�@! 	+�!� ��	
�	/�
�2� ��
�
+�@ 	+�@	+�*+��%&99 �& �9��9��99��90135>54'#53&54>32&#"!!!tf�׸8ReyC�Z0Qj;W20��`b�1�oI)��FBwaN54�)%CR2^c�{FhV�     z�  p �  +�/�3� +�2�/�
�2�
+�@
+�@	+�2�+��9 � �901!3067!!!!!#!5!5!5!�)0E�����V�����Q��
��+�
�+ 014632#"&%4632+"&N:7JK:8L�M:8JJ87KK9ML:8MN79ML:7NN    H Av  ) F � �/� +�C/�> +�7/�/ +�%/� +�G/� ִ
 +��*+�:
 +�:� +�

 +�H+� :�%/2AC$9 �>C�A9�7�
  *3@$9�/�29014>32#".73>54.#"4>32.#"327#".Hi������g/Tz��[���iT��omƏTT��nnƏT�Es�SL�7\.��C�X�Rg�|�\���jj���\��|V0j���tϖWX��tsЗXX��}Z�f:%i
��R�K6aFi�    : ���    3	#3	#:��������#��h�j���h�j    A�k�   5!A*縸     f�W�   4 @ � � +� +�3 +�5 +�35
+�@3-	+�2�
�  +�A/� ִ
 +��+�4
 +�52�4�9+�/2�$
 +�*2�$�+�	
 +�B+�94�
`d�b:a�Ke�aa�cv��vy����]4+
G?E��    ��~�    � /�	 
 
+�+ 01!�����B��    l�I   2 �/� +�/�ִ
 +�+��
99 �� 901732654'73#"l'@6%0�b�>@Y"-8<"b�rl! H
�" +�'
 +�-+�" �9�'�	
999014>7>'53267#". 4632#"h;'$A6��.7$[Y8x*>=�ab�^0]JG[ZJIv.ZAS/)J�O.9��6NX(GR#�'25]u�_`IJ`   .  2
    � �   +�333� +�3� 
�
��+�
�+�6�=:�^ +
� ��������m +
��������+��+�+��
99 ��9013!!!!#!&'#.�U�����2~(��wwr07��I��b
���bhR��5   .  2
    � �   +�333� +�3� 
�	3��2�/�/� ֱ
��+�
�+�6�=:�^ +
� ��������m +
��
�����
�
+��+�+�
�	
+ �
..�	
........�@��99 ��9013!!!!&'#!.�U�����2~�wr074�(����I��bihR��54��     .  2    � �   +�333� +�3� 
�3��2�/�3�/� ֱ
��+�
�+�6�=:�^ +
� ��������m +
��������+��+�+��+ �..�........�@��99 ��9013!!!3#'#!&'#.�U�����2~4����zyPwr07��I��b�����dhR��5  .  2  * 2  �   +�333� +�3�+ 
�,3��2�%/� +�2�%+� +�3/� ֱ
��+�*
 +�*�+�
 +��+�
�4+�6�=:�^ +
� ����2���� +
��-�����-�-+��2+�+2+�-�,-+ �-2..�+,-2........�@�*�99 �+�/9��*99013!!!&63232>73#"'.#"!&'#.�U����/~WVL=J	
��CF	$

	'#�)
�3��2�/�%3�	 +�2�(/� ֱ
��+�
��+�"
�"�+�
�)+�6�=:�^ +
� ��������m +
��������+��+�+��+ �..�........�@ ��9013!!!4632#"&!&'#4632#"&.�U�����2~!K76HH86J�wr07�J96HI:6H��I��b�8ML96LM�hR��5�8ML96LM  .  2�    ) � �   +�333� +�3� 
�3��2�/� +�'/� +�*/� ֱ
��+�
 +��"+�
 +��+�
�++�6�=:�^ +
� ��������m +
��������+��+�+��+ �..�........�@�"�99 ��9�'�99013!!!4632#"&!&'#32654.#".�U�����2~��nk{�hj�%wr078*.8(,4��I��b�WwuYVtt�hR��5�)?=-'C     ��   � �  +� 3�	� +��
�3��
���/�+�6��v�Y +
�.�.��	������	+�	+��
��-+�
 +�4+�-�%'/0$9��$9 �*%�'9��(/999��9�� 
999��	90146$32&#" 3267#"'732654'7$ Lw��R�[;z�p��L
   R �   +�	� +�� 
���/� ֱ	
�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!!#�S��(��i��(��������R�
��  �  
   M �   +�	� +�� 
��/�/� ֱ	
�2�	 
+�@		+�@		+�@		+�+ 013!!!!!!�S��(��i���(��������R���    �     X �   +�	� +�� 
��/�3�/� ֱ	
�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!3#'#�S��(��i������zz������R�����     �     # � �   +�	� +�� 
��/�!3�	 +�2�$/� ֱ	
�2�	 
+�@		+�@		+�@		+�	� ��
�/�
�	�+�
�%+�	�99 013!!!!!4632#"&%4632#"&�S��(��i��K77HI86J�J86HH87I������R��8ML95MM58ML95MM    ��  �
   ' �  +� +�/�ֱ
�	+��99 01!#!8&��=
������I     �  z
   - �  +� +� /�/�ְ 2�
�	+��99 01!!��(���������I   ��  b   0 �  +�	 +� /�3�/�ֱ
�
�+� 
� /�
�+�
� +� �	99��99 014632#"&!4>32#".8K76GG87I�0"06HI:$: �8MK:6LM����I�1#L96L$;   �  !  5 � �   +�3� +�	3�1/� +�%2�!1+�( +�6/� ֱ
�
 #+��+�5
 +�5�%+�&
 +�&�+�

�7+��9�5�9�%�(99�&�9 � �99�(�599013!3&3!'&63232>73#"'.#"�2y�\������a	4VL$:(
��AJ
'#�)+     N���  * . G �  +�� +�&��//� ֱ
��+�

�0+��+-$9 �&�
 990146$32#".%32>54.#"!#Ng����]i�� ����`_�|@pXF.,EXrB`�d6;'��ѧ�rr������hq����&Gcz�ME�xdJ)V�����   N���  * . G �  +�� +�&��//� ֱ
��+�

�0+��+-$9 �&�
 990146$32#".%32>54.#"!Ng����]i�� ����`_�|@pXF.,EXrB`�d6�(��ѧ�rr������hq����&Gcz�ME�xdJ)V�����   N���
  * 2 G �  +�� +�&��3/� ֱ
��+�

�4+��+.$9 �&�
 990146$32#".%32>54.#"3#'#Ng����]i�� ����`_�|@pXF.,EXrB`�d6S����zzѧ�rr������hq����&Gcz�ME�xdJ)V�������    N���  * N � �  +�� +�&�K/�. +�?2�<.K+�B +�O/� ֱ
��++�N
 +�N�?+�@
 +�@�+�

�P+�?N�&.B$9 �&�
 99�B�+N990146$32#".%32>54.#"&63232673#"'.#"Ng����]i�� ����`_�|@pXF.,EXrB`�d6tUL4	
��BI
ѧ�rr������hq����&Gcz�ME�xdJ)V���v�
	%4�)
0-     N���  * 6 B m �  +�� +�&�4/�@3�.	 +�:2�C/� ֱ
��++�1
�1�7+�=
�=�+�

�D+�71�&$9 �&�
 990146$32#".%32>54.#"4632#"&%4632#"&Ng����]i�� ����`_�|@pXF.,EXrB`�d6=K76HH87I�J96GH:6Hѧ�rr������hq����&Gcz�ME�xdJ)V��K8ML95MM59LK:6LM    N���   % / q �  +�(�  +� +�!�	 +�0/� ֱ
��,+�
�1+� �9�,�&$9�

   B �  +�� +�
3�/� ֱ
��	+�
�+� �9�	�$9 01!3265!#".!#�����S�Ԇ�ʕN�'��qF������U�����MJ��B��     ���
   E �  +�� +�
3�/�/� ֱ
��	+�
�+�	�$9��9 01!3265!#".!�����S�Ԇ�ʕN��'��qF������U�����MJ��=��  ���   M �  +�� +�
3�/�3�/� ֱ
��	+�
�+� �9�	�999��9 01!3265!#".3#'#�����S�Ԇ�ʕN����zyqF������U�����MJ��=����  ���  ! . d �  +�� +�
3�/�+3�	 +�%2�//� ֱ
� +�
��	+�
�(	+�"
�"/�(
�0+�"�99 01!3265!#".4632#"&%4632#".�����S�Ԇ�ʕN�J77GH86I�J96HI:$: qF������U�����MJ���8ML95MM59LL96L$;     � 
�+��$9 � �901!367!!!2�M3)U�-����(������zm�w����b���  ���� @  �   +�   +�%�:/���A/� ֱ@
�@�6+�
�6+�1
�1/�
�6�( ��
�B+�1@�#"99�6 � %+$9��9 �% �"9�:�#9990134>7632#"'732654&'.5467654.#"�(E4��X�tDDG*/-!���\&KZR^-2 "5^X/Y<6S>!�y�06a�Y4`R/+H34"81@"��'�#Q>2P5$B6J'R�-),<[2)X�i�1   F���� & * 5 | �  +�"  +�.� +�
�4"
���6/� ֱ+
�+�3+�2�
�7+�+ �'999�3�
"()*$9��99 �"� 999�
�9��9014$54.#"'>32#'##".!#32676=$FI)-P62j]$4B�ub�a>�\zCN�Q-����UDMo��"��-4&#�(51Ru~I���\v+>%4Yp����JNT>$�    F���� & 1 5 | �  +�"  +�*� +�
�0"
���6/� ֱ'
�'�/+�2�
�7+�' �99�/�
"235$9��4999 �"� 999�
�9��9014$54.#"'>32#'##".%32676=$!FI)-P62j]$4B�ub�a>�\zCN�Q-UDMo��S���"��-4&#�(51Ru~I���\v+>%4YpZJNT>$��B��     F���� & . 9  �  +�"  +�2� +�
�8"
���:/� ֱ/
�/�7+�2�
�;+�/ �'999�7�
"()+.$9��*999 �"� 999�
�9��9014$54.#"'>32#'##".3#'#32676=$FI)-P62j]$4B�ub�a>�\zCN�Q-�ӴչsvYUDMo��"��-4&#�(51Ru~I���\v+>%4Yp�B������JNT>$�  F���� & G R � �  +�"  +�K�8 +�* +�E +� +�
�Q"
��3;
8
�3 +�;3
+�@;'	+�S/� ֱH
�H�G ��'
 +�'/�G
 +�H�P+�822�
�9
 +�T+�P �";K$9�9�99 �Q� H$9��9�
�9��9014$54.#"'>32#'##".&63232>73#"'&'.#"32676=$FI)-P62j]$4B�ub�a>�\zCN�Q-�[O"<+
b�{JNT>$�    F���� & 3 > K � �  +�"  +�7�* +�B3�0	 +�H2� +�
�="
���L/� ֱ4
�' ��-
�4�<+�2�
��E ��?
�?/�E
�M+�-'�"9�?�
7999�E�99 �=� 4$9��9�
�9��9014$54.#"'>32#'##".4632#".32676=$4632+"&FI)-P62j]$4B�ub�a>�\zCN�Q-�N;7IJ:%>"�UDMo��,M98KJ97K"��-4&#�(51Ru~I���\v+>%4Ypf9ML:8M$=�JNT>$�C9ML:7NN  F���1 & 2 = J � �  +�"  +�6�H +�* +�, +�( +� +�
�<"
��0A
*
�0 +�K/� ֱ3
�'3 +�>
 +�3�;+�2�
�E ��-
 +�L+�>'�"9�E�
*60$9�-�99 �<� 3$9��9�
�9��9�HA�'-99014$54.#"'>32#'##".4632#"&32676=$32>4.#"FI)-P62j]$4B�ub�a>�\zCN�Q-��nk}�hj�UDKq��q9- 11 .8"��-4&#�(51Ru~I���\v+>%4Ypw\yv]Ztt�;JNU=$�V+C2=4E     F��k9 4 E T � �0  +�)3�8�#2� +�3�
�O2�F 0
�F�F� ��@��U/� ֱ5
�5�=+�2� 
�F2� �G+�
�V+�5 �
0999� �,-$9�G�#)O$9��&'999 � 8� &,-5$9�F�9�
�
��,+� 
 +�4+�,�%'/0$9� �$9 �*%�'9�� (/999��9�� 
999��	9014>32&#"327#"'73254&'7&L3d��nF�10TwJzR,2WvDne$)�S-BZ*GT0gA%3DUSVV��_��f8�)4\~HP�U.)� QVC4M+'w=$(�   L���   , t �  +�� +�'� 
� ��-/� ֱ
� 2��!+�
�.+� �9�!�'$9��999 ��9��9� � 99014>32!327#" !#!6.#"L*Vy�cc�eD�<6[qB��'����������0P30P7' Y��l>?f��IA0Fk@!0�C ����� AH6$!5FD     L���  ( , o �  +�� +�#�
���-/� ֱ
�2��+�
�.+��#)*,$9��+$9 ��9��9�� 99014>32!327#" !6.#"!L*Vy�cc�eD�<6[qB��'����� �0P30P7'���� Y��l>?f��IA0Fk@!0�C u AH6$!5FDB��  L���  # 0 v �  +�� +�+�$
�$��1/� ֱ
�$2��%+�
�2+� �9�%� #+$9��$9 ��9��9�$� 99014>32!327#" 3#'#!6.#"L*Vy�cc�eD�<6[qB��'������Ӵոtv��0P30P7' Y��l>?f��IA0Fk@!0�C �B������ AH6$!5FD    L���  ( 5 B � �  +�� +�93�%	 +�?2� +�0�)
�)��C/� ֱ
�)2� +�"
��6+�<
�<� ��*
�*/�
�D+�6"�0$9 ��9�)� 99014>32!327#" 4632#".!6.#"4632+"&L*Vy�cc�eD�<6[qB��'����ޫN;6JK:%="U�0P30P7'XN98JJ87L Y��l>?f��IA0Fk@!0�C @9ML:8M$=�Y AH6$!5FD�9ML:7NN   ��  ��   ) �  +� +�/�ֱ
�	+��999 01!#!?��:����V!��   �  [�   ) �   +� +�/� ֱ
�	+� �999 013!!�� ���!���B��    ��  D�   * �  +�	 +�/�ֱ
�
�+� 
� /�
�+�
�+� �	99��9 014632#"&!4632+".HN;6JK:8L�/M98KK8$=!K9ML:8MN��!��K9ML:7N$=  �  L� # A � �!  +�3�4 +�' +�? +�  +�3� +��174
�1 +�71
+�@7$	+�B/�!ֱ 
�
 ++� �A ��$
 +�$/�A
 +� �+�
�4 ��5
 +�C+� �9�4A�'7$9 ��90133>32!4.#"!4&63232673#"'&'.#"��<Sq?=<73+$
	b     L��|�   ' N �  +�� +�$��(/� ֱ
��+�
�)+� �9��$9 �$� 99014632#".!#32654.#"L�����=i��SoR���Ԑwr�(:W5Di=
� ����q��Z)K��`����E��ɡ3c^F*>i  L��|�  # ' N �  +�� +���(/� ֱ
��+�
�)+��$%'$9��&9 �� 99014632#".%32654.#"!L�����=i��SoR�wr�(:W5Di=����
� ����q��Z)K�τ��ɡ3c^F*>i|UB��   L��|�   + U �  +�� +�'��,/� ֱ
��!+�
�-+� �9�!�$9��9 �'� 99014632#".3#'#32654.#"L�����=i��SoR�ӴԹru��wr�(:W5Di=
� ����q��Z)K��B�����f��ɡ3c^F*>i|    L��|�  / @ � �  +�3�! +� +�- +� +�<�%<!
� +�%
+�@%	+�A/� ֱ0
�0 +�/
 +�0�6+�
�"6+�!
 +�!/�"
 +�B+�!/�%3<$9 �<3� 99014632#".&63232673#"'&'.#"32654.#"L�����=i��SoR�[P!<+	"�US<Q0f�wr�(:W5Di=
� ����q��Z)K��8z�'6}-
	b�L��ɡ3c^F*>i|  L��|�   0 > t �  +�#� +�43�	 +�:2� +�,��?/� ֱ 
�  +�
� �&+�
�7&+�1
�1/�7
�@+�1�#,$9 �,#� 99014632#".4632#"&32654.#"4632+".L�����=i��SoR�N;6J!='8LY�wr�(:W5Di=VN98JJ8%<"
� ����q��Z)K���9ML:$=$N����ɡ3c^F*>i|�9ML:7N$=  L��|�  & / h �  +�)� +�!��0/� ֱ
��,+�
�1+� �9�,�'$9�
99014>327#"''7.%3&#"32654/LR��u�w`f`RW=f��P�pdb^S[7m;[:_>+�4Y�4~юNB�I�JӀo��Z*?�N�HԈ}X2+G^d��1ƠxV   ���J�  ! d �  +�  +�� +�3�"/� ֱ
��
+�
�
 ++�/�#+� �9�
� !$9��9 ��9901!326765!#'##".!#��Lj�
��
+�
�
 ++�/�#+�
�!$9��9�
��
+�
�
 ++�/�'+� �9�
� "%$9��9�
��$ ��
�/�$
��
+�
�+ ��1
�
 ++�/�9+�$�9�+�9 ��9901!326765!#'##".4632#".%4632+"&��Lj�
�"�)+�/
�7+�"�99�)�99�/�9 01!367!'67>7654'4632#"&%4632+"&(�&&���Ixo?H�;=MN(P
�3��2�$/� ֱ
��+�
 +�%+�6�=:�^ +
� ����#���� +
�.���������+��#+�#+��+ �#...@
#..........�@ �	�9� �99��9013!327#"&5467!!&'#.�UۆP@3.1'GF!iy?'��/~�wr0��IiE4A~lfE�3��bihR�z['   F�2,9 9 D � �5  +�=�  +� +�
�'/�"�C5
���E/� ֱ:
�:�B+�2�
�* ��
 +�F+�: �99�*�
5=$9�B�/199��"'999 �5"�$*999�=�/099�C� :999��9�
�9014$54.#"'>32#327#"&54>7'##".%32676=$FI)-P62j]$4B�ub�a>Y?:/2/'T|]t \zCN�Q-UDMo��"��-4&#�(51Ru~I��L�.cO68�@k`'NK)r+>%4YpZJNT>$�  L���  # = �  +�	� +���$/� ֱ
�%+ ��9�� 
999��	90146$32&#" 32>7#"$!Lw��R�[8��p��L�4m^%+5�{����=�&��ʲ$�k�9G�͂����'�N��     L����  " = �  +�� +���#/� ֱ
�$+ ��9�� 
999��	9014>32&#"327#" !L3d��nF�/0Tud�K2WvDne$Uy?���z���_��f8�)[�aP�U.)�&�B��  L���
  ' = �  +�	� +���(/� ֱ
�)+ ��9�� 
999��	90146$32&#" 32>7#"$3373#Lw��R�[8��p��L�4m^%+5�{����x�|x���ʲ$�k�9G�͂����'�N����   L����  & E �  +�� +���'/� ֱ
�(+� �9 ��9�� 
999��	9014>32&#"327#" 3373#L3d��nF�/0Tud�K2WvDne$Uy?���ùxt�ҹ_��f8�)[�aP�U.)�&�����     ���|
   # Y �  +�� +�!��$/� ֱ
��+�
�%+� �9��!$9 �� 9�!�9��9017632#"3373#3>56 #"����"f�wll����1�|x��ʥ%o������rD�TU������cbe������~���    L���  - 9 � �  +�  +�� +�*�
/�:/� ֱ
��#+�	2�
��
�/��0+�7
 +�;+�#�99�0�.399�7�4999 ��99�*� 9��	99�
�379999014>323!#'##".%32676=4'.#"654&'7LK��`i�%	�
�"3�� 2�$/�ְ2�
�2�
+�@"	+�
+�@ 	+��+�

�%+��999 � �
9��90153632#"'32>56 #"!!����"f��m���ȡ%p�͎J���rDP��~�YSU������cd~�GH�،��h�   L��
 ! 5 � �  +�  +�&� +�2�/�3� +�2�/�6/� ֱ"
�"�++�	
�2�+
+�@	+�+
+�@+	+��
�/�7+�+"�99��9 �2� 999��	99014>3235!5!5!3##'##".%32676=4'.#"LK��`i�%�f���	�
���/� ֱ	
�2�	�+�
 +�
+�@	+�@	+�@	+� +��9 � �99013!!!!!#327#"&54>7�S��(��i0A`1(4)'S|cr4F)������R�+v4%(�:cZ9pK    L�29 2 A � �0  +��  +� +�:�&/�!�30
�3��B/� ֱ
�32��4+�
�C+�4@	!&)-.:$9��#$$9 �0!�#)99��99��9�3� 99014>32!327327#"&54>75#& !6.#"L*Vy�cc�eD�<$=S^4��'*5F~#8,)T|`p3?%��� �0P3#=/' Y��l>?e��JG*8\?+0�!�8%�@`T4lG!s AH6$*-41     �     U �   +�	� +�� 
��/�/� ֱ	
�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!3373#�S��(��i���|w���������R�����  L���  # 0 v �  +�� +�+�$
�$��1/� ֱ
�$2��%+�
�2+� �9�%� "#+$9��!$9 ��9��9�$� 99014>32!327#" 3373#!6.#"L*Vy�cc�eD�<6[qB��'����޻�uw�Ҹ��0P30P7' Y��l>?f��IA0Fk@!0�C ������� AH6$!5FD  �  �
  	 ; �   +�	� +�/�
/� ֱ
� 
+�@	+�+� �	999 013!!!�Z���(����)���  �  kK   % �  +�/�/�ֱ
�	+��99 01!!��(���G������    �  ��   e �   +�	� +�
� 
+�@	+��
+�
 +�+�
�999��
��+�
 +�+��	99�
99 � �	
���ie)M!\64.&&   �  ��   E �   +�	� +�	 
�		 +�/� ֱ
� 
+�@	+��+�
�+ 013!!4632#".�Z��N96G!<%$=!��)�.8MM8!<%%<    �  �   0 �   +�
��+�

�+ 013!4632#"&�YH61DD54F��Z7KK76MM    ��  
� 
�2�	
+�@		+�	
+�@	+�+ �	� 
  +� +�/�/�
ְ2�	
�2�	

+�@		+�
	
+�@
	+�
�990157!7!
   ` �   +�3� +�	3�/�/� ֱ
�
 #+��+�

�+��9��$9�
�999 � �99013!3&3!'!�2y�\������a	��(���������q��I����������  �  L� # ' a �!  +�3�  +�3� +���(/�!ֱ 
�
 ++� �+�
�)+� �9��$%'$9��&9 � �990133>32!4.#"!4!��<Sq?=<73+$
�
 #+��+�

�+��9��$9�
�99 � �99013!3&3!'3373#�2y�\������a	�{x����������q��I������������  �  L� # + h �!  +�3�  +�3� +���,/�!ֱ 
�
 ++� �+�
�-+�!�$9� �9��%(*+$9��)9 � �990133>32!4.#"!43373#��<Sq?=<73+$
��+�

�4+��+-/02$9�
�19 �&�
 990146$32#".%32>54.#"7!37!Ng����]i�� ����`_�|@pXF.,EXrB`�d6��殚�ѧ�rr������hq����&Gcz�ME�xdJ)V�������     L��|�   ' + W �  +�� +�$��,/� ֱ
��+�
�-+� �9��()+$9��*9 �$� 99014632#".332654.#"3L�����=i��SoR���|�wr�(:W5Di=���
� ����q��Z)K��'6����E��ɡ3c^F*>i�6��   N��t�   / � �  +�	�  +�%�
 +�
���0/� ֱ!
�!�'+�
�
+�@	+�@	+�1+�'!�999 ��'9�� !99�
�����U�
�>��K/� ֱ,
�,�3+�
�>2��?+�
�L+�3,�'99��
#$$9�?�!E$9��999 �0'�9��#$999�>� ,3$9�8�
99014>323>32!3267# '##".%32654.#"%!6.#"L$B^t�K�4=�ya�bB�N��W�H'F�\��}>�~j��O>uLu�<dA7Z8&��	.Q4.M4'T�zbC#qhkn@f��H49���'%�klM��~d�_ĢF~h<,HabA @G6$!5ED    �  �   * . q �   +�3� +�(�! 
���//� ֱ 
�!2� �%+�

�0+�% �+,.$9�
�-99 � �9�!�99�(�
9��9013632!&.'#32654&#"!���j��2=A,K^6�9 ��*8 ts������p5%�'��� 4)3�^Dz[A7�*~OW:U�o���ntv
�
 #+�+��9��9 � �990133>32&#"!4!��
_p; %,]������!�Gg1�m\%,����B��     �  �
   ( 2 x �   +�3� +�0�) 
���3/� ֱ 
�)2� �-+�

�4+�  �!9�-�"%'($9�
�&99 � �9�)�99�0�
9��9013632!&.'#3373#32654&#"���j��2=A,K^6�9 ��*8 ts���{x���U�����p5� 4)3�^Dz[A7�*~OW:U�o��
������ntv
�

 #+�+�
�99��9 ��
99013373#33>32&#"!4p�ry�շ��
_p; %,]���������Gg1�m\%,����  Y�� 0 4 m �.  +�� +���5/�ֱ!
�!�+�)
�6+�!�9�@	
�!�+�'
�1+�!�,999��$*-/$9�'�%.$9 �*� 9��%$9��901?32654.'.54>32.#"#"!N60�DUT(1!��9f�Z8mT!6(y?FMNj���̾����4�/?73�cEyY2�&@20<'2�t���B��  Y��
 0 8 p �.  +�� +���9/�ֱ!
�!�+�)
�:+�!�199�@

�!�+�'
�5+�!�,-$9�@
$*./23$9�'�%01$9 �*� 9��%$9��901?32654.'.54>32.#"#"3373#N60�DUT(1!��9f�Z8mT!6(y?FMNj���̾6�wv�Ӹ4�/?73�cEyY2�&@20<'2�t������     c   J �  +� +� 	�2�/�/�ֱ
�
+�@	+�
+�@ 	+�+��	$9 015!!!3373#R�[����|w�������)�1����   %��d*  & s �  +���� +�3� �2�'/�ְ2�	
�2�	
+�@		+�2�	
+�@ 	+�	�+�!
 +�(+�	�&$9�!�9 01535%!#327#"&'&5>54'7%� ��?J>*KvIw&T�-4�++CAZ��I����-e_�-*W���S0B7!T.7_='	  ���v  # 1 v �  +�� +�
3�!/�' +�./� +�2/� ֱ
��+�$
 +�$�*+�
 +��	+�
�3+�*$�!$9 �.'�9901!3265!#".4632#"&732654.#"�����S�Ԇ�ʕNQ�nHj48kEj��8*.80-qF������U�����MJ���Zv7\;9]6uU)@?/1 3    ���J1  + 8 � �  +�  +��6 +�" +� +�3�)/"
�) +�9/� ֱ
� +�,
 +��
+�
�&
+�2
 +�2/�&
 +�
 ++�/�:+�,�9�2�")999�&�9 ��99�6/�&9901!326765!#'##".4>32#"&732654.#"��Lj�
3�/� ֱ
��	+�
�+�	�$9��9 01!3265!#".7!37!�����S�Ԇ�ʕN�歚�qF������U�����MJ��L����     ���J�  ! % o �  +�  +�� +�3�&/� ֱ
��
+�
�
 ++�/�'+� �9�
� !"$9��#%999�
�+�
�/�
�+�"
�)+��999��99�"�%999 � �901!367!!4632#".%4632#"&2�M3)U�-����K76GH80!�J96HI:6H����zm�w����b*8LK96M#08LK96MM    8  �
   7 �   +�		� +�	�/�/�+ �	 �9��99��901355!5!!!8��W���X�'��@ޜ�����     +  ��   4 �   +�
�+ �	 �9��99��901355!5!!4632#"&8��W���aM9/!K86L�@ޜ����8M#13OO    +  ��   T �   +�
�+��
22�/���,/�-+�6�?��� +
��


!"
 +�	+ � �9013#'#Ҵֹst�B����     H�1   X � +� +� +� +�	/� +�/� ִ
 +�
 +�+�
 +��+�
 +�!+��99 01&63232673#"&'&'.#"#ZO3!�US%@*0�z�
(5}
	b   A�k�   5!A*縸     A�k�   5!A*縸     A�k�   5!A*縸     A��|   � /����/�+ 015!A�Ҫ�  A�:|   � /����/�+ 015!A�Ҫ�  A���  % � /�	 +�	/� ֱ
�
+� �9 016?A+�=�6.
�
+��9 017%?g'9=A�*�I���2   '��L  % � /�	 +�/�ֱ
�	+��9 0167%',N,�<�|+~���e    A�K�   E � /�3�	 +�/� ֱ
��+�
�+� �9��99 � �9016?6?A+�=�,Mx.�;�6-
��+�
�+��99��9 � �9017%67%?g'NV(�-L+�>�*�cθB{*����g    %�.L   0 � /�3�	 +�/�ֱ
�+��9 � �90167%67%%,N.�<�-M+�=�|+~���cx+����e    S4W9  6 �	/�	 +�	 +�/� ִ
 +�
 +�
 +��+�
 +��+� 
 +�'+ 0174>32#"&%4632#"&%4632#"&�+K0I\)M2G\�^HI\\LG\�^HI\\LG\�1O,_M0N-bIKa_MJabIKa_MJab     < ��    �/� ִ
 	+�+� �99 013	#<����#��h�j     2 � �  ! �/� ְ2�
 	+�+� �9 017	3	2���
+�@	+�
+�@
 #+�&�.+�
22�
 +�2�.
+�@	+�.
+�@.	+��
 +�/�8+�& �"#99�.�99��9 �)�9�4�	
9901&>3235!5!533##'##".5!32676=4'.#"�&D]o<Mv��⋋�	&�YJ�^60��dW?d
�
+�@	+�2�
+�@	+� 2�0+��.99 � "�%9��90153547#53676!2&#"!!!!3267#"$'&'z~�'{���6n��kE8��W��Il�H�..=�a�� Vl
�! 0�Ć�D�8wI��6#��Kv'�%2sl}�  ?fK�  # � +�	33�  +�2� +�  +�22� 
+�@ 	+�#$2�$/�ִ
 +�
+�@	+�
+�@ 	+��+�#
 +�#�+�
 +�%+�6�?��� +
��	��#�"������ +
�.�����
�.���������+ +
������ �
 999 015!##336?3#4'##&'#?���q(�DG�%�+S�L'<{{�*��*Q�:rm=���,{O���!�Qy��          5 �   +�	 +�   +�	 +�/� ִ
 +�
 +�+ 011!��       �D��X_<�      ��e3    ��e3����:�            ���  z���B:                         �    j" [u Q� � <w C� [� �� <� A
�H�"~��
   

Zdotaccent
zdotaccentuni2000uni2001uni2002uni2003uni2004uni2005uni2006uni2007uni2008uni2009uni200Auni2010uni2011
figuredashuni202Funi205FdongEurouniE000����� K�PX��Y�F+X!�YK�RX!��Y�+\X � E�+D� E�q+�+D� E�J+�+D� E�6+�+D� E��+�+D� E�z+�+D�	 E�S+�+D�
 E�+D� E� 
� +�Fv+DY�+ Oմ�  
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[18]=<<<'PACKAGER_BIN'
wOFF     ��    ,                       BASE  �   J   �c�[�FFTM        \�39GDEF  $       . GPOS  D  �  83Q:GSUB     �   �1V�OS/2  �   W   `mp�cmap  �    �CL1Fcvt      >   >?Yfpgm  L  �  eS�/�gasp            glyf    a�  �x@Z/head  |    4   6�$�hhea  |4   !   $lxhmtx  |X  R  ;�NBloca  ~�  �  	�7zmaxp  ��        �name  ��    �(��post  ��  �  ���6�prep  �`   �   �$�k�webf  ��      ��O�x�c`d``� b>�̔�����<7���ʢ����l��Ē<�6`d`��a`���dŢ �}�         ɉo1    �u^�    ��e3x�c`d``�b	`b`d`
12��y V 4 xڽ[lU�y�l���������c�c�m'q(M	a�(�R�l�UUT�,%YJ[�$-IKYB�$ee
��5��(����?��ʻ(��w(	Y�z���Q^@9��S�WP~��*�k(�QΠ����)�����J�j?����]j�A`<('Ptm7j�Qۍ�n�vc������p\�[s�a�p���!���}���]��,����O�EX��a͹�]��n3��
�|�s��j�R �"�VD���NX��Y'�3�z��S#F���|���7��tC�|�#���Z���ᐤG�l�//$�)bWo����Ԑ��:uXi��~h����Iu@���8��%�v�#j���UG�ay���T;�-��5i��ʀ����Bk�״Vv�
y�t�g���މR},�0q�)Q��aK���Ķ��X�I�^��s�Y��߂�}�T�4dS�V2�pl��G{5�q���G�'h�Gի!���֎��u���y���1� ��Ml	��.`����;T�J��m26;*��#ҭ:u��|��Iu���v�1��1��ȏ7�o�¢^�_�=�C=���1VهY)B��W��0:z'G�[�����ѯƭ�Έ��c��#��a���g�<v�Uۃ�-~���#j���-��<�u&��-Poݤ�m���wX��c��+��>ܶ��}��U%5V�X��՘��{䳘S?��%��K�.�V�B���n���R	\Z���@t�.��� ��l�g`1"�}L��g|�+��&╇0LXH�ā��ї{�3Wf�݂�ˇ��]�X�/3K����hO�-I������߅q�� t�Ř��]]4��A)�X	Xͼ�9��ss��6�ac]���j9�Z>G��>�&ā}�`~�y����,BoI�JrQ�~c]l�`$��\ҿը3�ȑ�O-e��>����B�c��Z���B���� �|΂�.��X��g��3J5K�}s��եc^�vu�4�	J)G=���
{r�nP�����_=�2�R9� �=m�mx�;��������
��
b�t8�R6��ޢm�1ƀ��<�+V7S���>Z��Ƭs!hsjV>��"_�e�����z�r���jҋY���k�����������r(��ùi���U�x��"���:G�3Y8ڟY�<5�I���H��GJ]QW��pF� ~}A�,��[͎�:�Յ��2��TKk{
FM˹�B^�}8�D^F;�5|{�s�(b����<�B~��_��}@T> T�ǀ* $d��!@��$��	�Y��fFeM�ʦ�{�|1D����&���
��)�1[P����*I���tYD�x�K%��.����:QR�3�N��`�<	X�hr9�ɽ��@%h�2��ԩ�S���0O������H/���H/O. <�x���� �t�HG�t�$+�7 O~�H�(iZE�V��U��@�������吖/7+/f�KgP�ަ6�U�{��b��!� ��L��e:�^�w-}l�)�O��)�������[ѧ��M�K<�P��e��n��O�lc�#���G��p�"Qx
�k��5���=\�}�[�1Հ*������;���
I:
��E@�'�{o��t1Ic�j��-���[ɉ��E�c2X�^��'�������z��Wqg+_s1{�t�K���������,Ȅ��XG�O���g��Ov ��\�c�
��l��,�LL,
L�@yF(ptqreP`Px�����g�brS``��cQd���*Ns xڵ��SPǿgmEBV��]�-ov�E�Hу�cd)aI[ޏ�L�EJ����L3�&?d�/�ML�k��#

����;�4���:	�!�qK��ͺ�����b00����.?�R��4�j˰��Ѽ�3��4@Skm���!��qK�˦�6����$���tUS�����]���`�*́��Vy&ҷ$�,
9�����@�HƼIJ;ㆵƑ���6O��<�Mmo��Y�w�K:�Ȇ�b;b)�	DBFU��Ͻ,�R��@��������D<��u1Vz~���ˊ�V�΋Bwo�j��)��^ξ���Ac�����J��<,�4hCz7z���ꈫ�>�'ӿ�Z     �� x�Ľ|[��8|�;��u5m˖-˒l˶lI�,�ۉw��q��d��MYl�	{F�d�{�RhhKK���%�����B��9Ͻ�各�}���%?KWW������\�����枢�(��J�)ʟdԔ��'�4�G�1 Pǒ

w���b��fvuO�g�t��F�����3��k�<n�IEQ45��7�O)�RR���t(ɪ)�/D�* 0ǒ�����1�Dd��S\�������PUm1n�f|���������ʡ��}&P[���T�F%r1>V[N(���Ş�(������4��_l
l`�1:�N�F����e ����FBa@�=�̑V�#�PE>%�*��Yɪ�����/��V|a5�/��x�B+��B~!��L��owPV�晦e�N�!�8H�*��A��*��mP���6�Ɩe��
^(�	S�fwǀ�?�E*&��Ho��c>a�{�	�B�HM��djhM�j�++w��j�ٝ�jQ(��J�k�]�v��6}���g�K�{Ũ��q��Ko��ȃGO.|q�{sf��ZT�j������?|�k�`��Omj�Y;�����هL��8����?r)#U@��05�z�J0���d��r0��@�B�[-Z��}��@���\xӍ!���P��v̠J��/Ɵj�O5�x=�$!3ގ�g�yS��Z
�!�����
�j�:�ef��1�z1R�n�i拪�LX\������A�t�l�ߚ��]4�D|�:���?�=��Q�iS϶��N�xk^��ztMNoG�Dt�U�hW4���u�֖���2o���_����x��3ˬ��׏Y㖕7E*6�¥t�?qLIa���Ӻp)E�:�h<�����Q	��a}�_�� �Aܓ��T<EO�>����B��03���/��_�P��fw%M_J#�K���K�)*�4�V���K�ī;��52������zjr=
շ~�a٣�c����~�*g�/��Q�ۅQ_K��avmޫ��`�����ڹ��.�4���>wE�%���1��RL���𾠦K>HE(��8�Ņ@c�� m0��h`�	!�J�T�	iŸP�1�Y2Ai^0 '� ,Y�n,W<.>u+���nE��|��T��ēh��꓏�-@��F;{��"q��;0��x�ET;�($�»J�y�ʌI�ƴrձ��/�g��o"t)������ņ��$�Di�B���͞�Y�3"5����|Z`΁%��gП���2��e����x�E�׽�_Q�i|����~�S����'/^8�gl�k;^o7w墪�yT"V��-�MxŪ@\	⠚��"��"c�l-�� ~/-�f�)� f����� F�CD��)�5��
�$(�O�n�*��2Im�<NZ�\����׾�"c��Ʈxl�h�r��3�X�Z1e�S����빺-�o�uQ����:��i{�!������{y�,���53���~�M��޹��-ńF�d�B��8)��0\�q\��$I�\�f�:$���>}�D){�%mJ�P�?����k��@\ʡ������(T��T�cE ^EN�C �j�+#F)6˰��oNǄ~P�p���w����ǖ�aJa�We[�#�ZH��
؏���U8Y�����N�����F��˷�;������ܸ�/7mzyK+2!��,��Yz�e;�������|�{�
�������I�-=kQ͜G���#۷]ڲ�eκ��i�0s��"�.���f��ޜ�
o�q5��S_��2��R	�d»���1�U`=��Ȫ�@V��J�A�u�1N
)y�%|�s *X	֘���Pa�k(ɠo�	[�z�T�jl���&6�G�9e_�ۻ��U�_�����o������>v��3�\ۂ�ۖ���2���5-���ё�'L����ⴿ,Ш؏�ܵomm^s��5׷Ը*��.��d����l�ﳩ���Y��k i��}�+�`�a]/�RG�\Y�Q���ʇ#�a%ZU�[�5}VϘ����o�e�����;�)�;��kn�XX��?��u(��WN	�@2K��[�v6�_ޡ	F�Ƥh�l
��D4K��ӄm�A��L�O�%Z��2���x�Y\��Ӛ�$c��*�QU��s��xs'T�"���� �nؘ��l��}�h#;I��!v�-�5&�?0�:;���i�0_��
��Xe8����eu�Nf�>B�ŧ�zNIuPԇ��Hֳ�g�P��8�I�tnB Y y�Ձ���C�$b�F�8U���,�Nc�ʒ���r*�iz�}Fa�ѸG���>:X�q��	�ZxE�n�j�]�7�@(}$4�xy'ozʨ�T�7�����1��Û�̢,���,D��A�9�G�HU�$��(�6pO�� �-'
F�D�2�HiB^�nq�U/Q������6����g�\y�mES��.��ӗ��W�XW���ͭ;����5.{d��Wzf=�v�mk��͍]��o`���Л{����S�<�K׿��k��D����\=���ŋ~Π��i;�.|���q��W<}��`Ǫ
o����|��;|��}'Я��� ��ꈴ��B�S���BE!�_P��
8gr�6���Xi��`eK�W OC�_g�� e�Q=�
l�2�zq��Ll��]��1� ��}�&�O�������Ƶ�*6j�����)Χ��������PN}�^ý�����mT�ȡ8�`a;W*�'}^;�ú�K�:�|A�¾ş���5�F���jg�F
��^GT�]2߼�`�	>S\��_W�hf&�꼴g�@�l��U����%3Hy`��+nx������&V_y�����emkfՄgm��s���߽4�rw���`��<�W�n�|r�?S�F�4a���us-�Hr��,/p�c]�@%� �q�kUi����=*n����-��4� ,gԲ�WLv�8o

�TiWӽ�
�yFA�λ/|��^������ͻ�Y|b�~;��_]n�3~���ޮ��g>��=�$��i�m�43�����)�$�?�b�I0J�*��C%��^"H>/��LM� k5�n�-�R��!�=���:�����ۨh�7�X!>���=���-[w�}�}�v4�����x׋�o�_�KEc������3H�=�u���>�eS�:N�Y�UOrd��9� Z�Zs�D;H0D���WF-G>�p��~0���%C���rO}"������t_�8���y��pO ����[�iw;��z���3�i寇��`�ô��ޠ��
JYjr!� fu��YR:(d�*Q,��DL�?����(K�f�&'����=C[������
��^�T��(���-�w��(5�P�,�-�:"�H�d��qs��a3		��!~~��2��!S���
j�tr34�Ɔ��yh�c����A�'�'&eעc�2���i]W��N"��	#MB����_�?��נ"�-^��PR�߭��]�G��f�+��1�P��?����TTLGAc®[L%�d�"�=��ApD���t+
��w�䲿�/�o�ڈ�|���O��� ��~J��G||���}�>��6��*�FS	P:;%e� >�d�L��BYY4^���ey��a����f�(%vIl���b=ݷ�I��v;B��Z��)���N=6��yvk�S�+���c��m�{����C���ڵo�_ߑ?y��5�#Ӄ�|}��c���Ǝٳiaw��^�`�}��2#�G���/��Ȥ�L1X��@Z�U�f�����@��V�5c*�����#�BbP(A��r� _���Q�5m�[���ځʲ�7?ڹgּw�sc�C�>�4n�f�c�����/��R��q�1��05K����&80�� "Ԑ;�ƸO&B����)����_h� ��n��>�D�X�ͮ,�x}���Ht��0e��Ňw� B�f�_���{ŏſ�Ó�ڿaJʭ]|pֶgf����/���;w��~�a�|g
��,�)� �����z��:pqP�d�LRӷ������n�5��G�.y��>z
`��B��q�E�V����*Y�Q�|���Q�3�u4�o�Np�Q���5y��k� `���Y�|%�e�����a�h+ 0`��s���k5��L��L��ByWVW�Jޡ�w��F[YW�� ��tk]6�?���o�W�3�7<f�o�#��]�oĺM@����ۡ�G~�{�#�ᕥ�.���Y��ӠN<Q��B� �W�%��Aq&��k�(e��v��[w��e�ӯ��D(~�f�b(2dFE�o��q�S�?6jُ��uT�JhG��> h%� ֎4:��Q�a��W�0_f��cCl�$U���)��G��|m<����O୅��p�J���d6�8��M$[*��TƤ0�"|V����bh
�9���6+>���[
�=�tt'�WJ�}`�%Y)E�xa�p�WIr��g�H�)u�	ʻڎ�D7�ރ����x���W pN=J�N�;���l�'���L� ?�X�L0��+�/�_�+a��_�t�f$�$%�mx
cz� �L�;�!ލ�#W����N㮻��z�M�+�{H.�@ɩՔ�� ���U����+���s��J��'U���a���5�pj�I�T'A�}�[F����6�x����e��p_�+!�Hl5�MZ��s�c`�!���E��p_�/PRފ9�ƨR*Bm��M��U�OX�>����I��c�ښe�)�>eX��A�	�`<3;�F��� ��Y=����.��<XVP��xpF�&�D��h���j =�Ӣ�����>�$�S�T�.l��T��T����Y���7�Ͽm^c���fe��-m};'T դ�cW[UJ�x;*z}�"dʮ{s�n�%5���w�{���	O�pzw�@���:�ɥX�Rp��P�vf61��N��,����-�8l0�L~��Wn�3/�L�\�i��ـ7%�(��z#F��$p�S��
I�-�ՂU8��|n��b�3{`�*�
�*�ņ_���h^�}`���W�ڀR�6?��ں�'�ﵪ�=�~2t��{�l:�0�Y;gt���]�;?2P��=so��|���Ĵ�``^p��+ ��S k��.Jy5q70U6���C�i���TL,1E�:�9�`RR���W=����@����7y=(8e��U����67}+�s�rq���N錱=�z��I���鳍�Kr`��K0mr�
j���$��T'��)�p�6�F�ī�Ŵ�5��uP*�5JA� )t炘�b ���T�	��F�:���AW��cX~�I�ɠ��
�B^�M�9
�M�`���
��c��O�>@�"�j|�j|�g��i\���i�eWu�T�/ovU=ن
�z���+��j�Gc^��G�p�=8U�'"�P�R��@�,���9��P�L�:������t�¡lM'0��g!�t$'��o�)���j\|���Q��9��'N6��V�����'�f�;7�,�������'d�������D��S;���+�c��@܁߼�� Aې)AØ#�$��7&5����)qj��B�I����/v��A�d��u�MO�)C���"{(R`1��и���P�ĲHrS,B��o��s���:ج���k�-~c��ؽ��VN��
�n�뽋���iAC�&�Fe_ӿ�:Z��W��j\}��C��뒊���*�{�M�h/����7L
%�$|0��i&��S9r�T�kU���k�
�!q�N��Wӳ��
B#��a$�nw0�a��NV ^������$��|'&��Rbqi�@J� A(�"����>�������eߘ��S�YbԘ��p�=���u�����:���ɓ.n��_�3�_���~q��tӸ齗�s����_\)��-�v0����0�V��J���Ђ�KjՔ��
` b�z}��s3RP�N5u7��=�6z���z���bŢ9�w�*ʦ�����J��d]�c�&�z)��)��e�3_r�R��Ç:#4���R����n�ǬO�/��R��(�٥}
q�Qx�YTI*��N�iJ����e*Z��F�G}�JK��-��g]C���8�q�Nb�+����uT�	��*�x�b��!��}�]:��9����ܣ�àR�����>��TA��zR���P���H���$*���4�㓠��7#�[���"�S��ŕ��t���ĉ���^Q��aXE�s���k]��~/��}袯�/N�=q˳�w��~1J��}D\�qI�G����V�D�$�JLY�J��nw����
����/��JPE'G.��
��>Z��D
��vy�$����J��)β^��t(�*��(duCF�n��H]��B'v5��	�2Z���TlU���Z�iu��)S&�9�=�]k��:���L�^�,�~o��������6T��-�S�j����[��b��d�@����;����;�m��=ڮ�Ib��!#�n�t��dLB��/
B��Z
Y�Akx���3[ `���LX��ɒ�?ق$|d�sm���J2l��?��7�oFO�V�cl/bCgҋ��d��	�'h��q��M�w	Uh�О�7�oB��ܰ*����{���V=E�C(�VSv�B���ܻ ��H�Q؉��y׀q�I�Q�7��.��SWۋ��u��ݵ\��뉍������h_����Z�
�xӓ<�	[�H�xc�pKL��Oj��2[����If��X��Ծ�w�M�����u%�,XIT��蕨si�ߗ_�OaI``˵�͸������X�����}�*��ؘ�n��{�=��Yy�Mm{���/X���#3�?\�mrٲ䷗��ɍ['W-K~�o��7OASo�`�E?�e��[>�6���:�u��j�mw�%=�y�K����f�g��8��H?�[z�ö����������7dz�v�[�`��~Z�+5���?���of
��k
S��+r�2�P#�\#� _�*0_����A �+,l�`u�M�_K��_+5�c�/�>���!LK�ʂB�4!@-���5�M���B�W��}1RzR�)��T�U�1'����PE܂S��2��WGХn����P�
Y�96���Y�á��E�W.����K�X��u�n�}�ڃ���zJ�BF]�R��+pz���C�U�`ٹ�_7�ҞE���;�`���
JA٨ �I�L;����BDQ�H�0�TF6*ţ|ѐ�D��X�k�x�Ϳ��y������h��v�+��Swd�j��0�s�jA̗{S|UK��-Q��W/!����_�ח���G2�⿿@laڰP����T�x���N�U��$a�4Xd#�'�;A`���2��x�a�N�GT�*�����ݱ�ƎW#�Մ�6%(�{�R�M
1��;fL��� =7���k�U��$�7�����/��5��3_݈-�� IφRC)1~���g��В�
"�,x�<���M�,�yt�Y,U���ĝ
��2YG������a��ϊ� ƫ���i�V��Z��Z��k���p��B�kE0�W9��QƲ��� lW��2Y�Kz�U��'dsI�r���1�}
3����1)�J�:KÙmf�⡶vu1���b�����F�¸q��ְjF�0����{)gQ)u�Ŷ��R����c��1S�G}z
Y��i
a��>�l��,KN����&]�rҌ͒(RzV�8N�t[�"6L[�"�x�p�j�(bs�(b��qfw����3�a=��A����F:;k#ݗ�>��tv�E:�ؾ�vlo,�;��V�/�'�8�B�q)u�q-�`z��~ FC���?��؃��	@|����c;^��Ob2��hS�~��ex*�b	��\���,��I��P[VYk�-����Dxn����&�[w����EiSC���4��-��9�{�SDb?-��*4�qLo��"[�<]�J���³�ͣ�Mgm��VB�Am���X���� ǪAc��`���Bf���3G����q֠	>&�kF�m�YP���Tj����[�#��V�Y���Lժ��.������������ޗ���4+��
h-��kq�'�U��>�v��{�J�WQ�^� �[��`�(�M5,�D.�90��k���d�d�bA��S�����/��Z�a�#&_���FZ%
J1i�K�_��X�#�
����-0RRN�,l�"�V�x��yn���߽�
����Hp�ϻ	r����vB2��������8oؐ���}TR:)�4��Y��	�p|���R��y�8�?��h�y�BZq��48���� ��HVJ��)8X_ك�{����eb ;�>ik��M�S���y;��{So:l༕٭#�o�R�ys�Wn�T�����G�:fRoN��`y����岗(l�R�h�Z�ʞϜ7Z�ڰG�ק]bO�樓��0LU�g�p�Cp�Z��g�v8 4���������4ǫ�a����|�0���0��g�f����Y��Fh���F���ttb��%KO�Ȉ��$��>�1E!�Ky� ��B
U�.>��Q��Vn\��f�ڕ����/
�1�!2,�6ۤ.X��7������s�l{��={��.����rt��-� �����8�CI��~�xs�<a��ſ�yݷO�l�}t�3�Q�#�����L�鵡�{�����\)�F��$+�Հ?�H�=SG��t|5?�۳s$��Lͩ�8~Р��p�]�\+v~��1?\�@=��av���aa0!$�l�����'^D>,�ϴ@�����Tx}��Ӝa}B��%s�%��`��&�FZ�0�u����Z�d��l��$3#�7�ׅ���3�[��P2G�`J���h��`�V��Ce�x���I,�W���g�?��_��ю��Hz\
^a;��@�;�χmN�Ϫd)�c�xZG�)��j�;Z��7�Dĝ��܁�;[���9������������Vᤚ�r���0ǅ:y~&Ilƛ1�R�Ș5i#*Y,KnY�(�����W���f��*�.��hPY��˜n� x���bB��滥!"<����P&G
]��؄�W��dx9e������1��~?��u��l�;�9�
�ˠ��KW���L�],,�q�fO5��G&6��g7?��jGd�
��y$����R*;~C�C/��$�{
Q�T�h&Ţ�b@,�5�����:�$k��^B�0��*� L�!3��c��7M��)���X��$���'4�(0��� mH�%�?�K�5`&ʬ;������4�M�|l���;�F{~��b���dv
�L[�
M���� H5P���4�`t�R�r�A%�2L���֩jє�S%�)zUBX��BP��(푐�P�2@�d��Mz1Ie������,B�)�ԧ�:#Q�-X�C�Fou�a#���΃:��\�|ۮ��2Oݳ��&VQX��S]XY����8s�Y�׭;9��oR��d[A�!\0&-����^� L5���P��rǡ4��{h!�&��xL�v���(0��ͰE�`�x
M#,�s��ѾQ��:OCѤXCS�bP�F{϶��S��дa�zx�f�>�� ��J�4��DgΩ&C�FdU�`�Rʂ�J'&K�h�g@��&��f"O�~��N,����<�����SԳH!~�K�C�~���ԲT>�\��T�EgȤf�g��[kDYҕ_}5�n��|�u���@�󨤥��ni�	�Y$tw�L�M�
���R~j��3�_���qɰT��4f����]�K@2�()�=H#�2g��Ňɏ�^˭���6��������}[�j�n�aa�\��m��+�}K���'��z�.U]��8a;{�E�PrO�*��ޭ�T��)RE�y�t�H
�%W[�X�#H��]˚U*_d�6y����(+����lC�'/��a�H�p(�/I�����r.�iL��B�r�G
���YP�_m��A�e��S_�CD�:��������_i]|w+��݇w�s�r���ι���A�ӗ��,��|������F��9�|��"��(��3��Y�N ���c���.��?�a������gO����5�nN��tixڎ������5}������p��g.�^ִ�o_�G�m�Jg����T�~���4�.d��'���`g�tQ���.ܩ�B����B�����z
ଃ/�@��G�5���J�w��&<��;$H`|��<����<��.��nI�g�䁹<g����0�F�(�iT�I	Fv����B8+x�����zvݏ��꫒�!���˨(��N��P��K��
��̀[(��YċG��<���t��ćb����y�;_f��pF��'��Ց@l�
�)�ݝB��`����!)|�\�J9��.���Z�Zy����	z�T.���n^>���S�\{Z�X����RK�F�']��t���<�
��>���(�_��WX��=��4��B'U�^�u�Dcw�A!� Y�myD�ʙb�Ȟ9Θ�{�H��&�-$?�9��������mD`�p������%i\���p�ɰ�����6������'o��s�~�B�ķj�΀o_�%0�l���������+Oob�=��ϊ|���_O�B�g�a�H�4��M=-�Ť���x�'�0B<㰞g�Vqtr������(�-dkD5�O��	�g�O�݃į���Ԕ9@��_V��⑯Q�!�3sGyd^v�d�yb��	��:�1)���:�J�rT���x�E�!R���a�2C������iڈ�\E��y�w�63�͙-8�o>��tɼ��c�\�i�������_�+��H\h�\+�����K"��a�]�#�J�=x2�"E���'Si���OF��te��%��:����ˏ�� %hbq.?���P�_��]|���1�(�bD?�럽����|���\��k�i�CkG��@o���V0q������.Xh����Ϋy�wHi/�P���i��j�����NqJ��ᝂ)��J�Ơ����d�
�z8K'���CO�'��(�L����re��y�����ե���C
��CY�Ċ'�{Zv.����U��~](a�A>��Fg�9�O�v�d2�TQ����H��&iM�i�R�ԅ�0C��F`�K[+F?�;���i��	��}*�(O�h��UV�h�;�����B�����C�������K'��.�K���P~�Zg��Vf��J�~�5I��J�.ǐ�q �؃K�>3���z��rQ��,L3ح#p�T�/���f����CT*�a�xL&�BTJ�!���t��=��D1��c�����4~�Lf��O��J�� ���eL���n��3�0�uF�G��	���ў�hD�F���rJC�a�!�v�3���Cb�9RY�K	-���Ex?�3P՘<�(��D�<V��&ţ(e���mq=tt3���'����h��v�\��U��ک�&�d&@ؚ�פ&:'4��$?�7���|mN�
��Z�Q��0��ߠïmb��Ok���u���,�Z=-˲-	Y�%K�$K�����@BJ�LȋW£Ą<��4�h�LK2�)m�V�)�-mS�C�4��d�N&$i����s�,۲Q��^����s��{�=�|_.����9-�﯅�Bs���Zs��x�'xfY��b���
@3�2�'<�S[a�K�Ӷ���	�mD���gB����a���JJ`��$�Y�?L{3g�эǐ ;�WJ3wJ10�
��z?0��x�!h�P�p�T<�7���z�̥�&�>`c�&'@?�o�(L}��g�}{j�Ӈ�c�r�
� лpN��槖	1{�Q`T� ���Հru*Iˍ���^t O�^ȧA%
4M�"�FL�F��F��!5��&>lW8Ȕi���ӌ�
��N��X��N�6Q!��Q�H�$!�x��Hh��tkm�۹WX_���K���s����[f�ʻ�=�qޢ�=z�uM�i�:9X�4�O���du��_�����H%�U�o����"�T�?����vE3a ��󴞖MϏd;l>ˤ|hZ�����+ �IwD�6Ҥ
A���Ñ�!�����V�{�̑�S�����G�P˰��?ca&�Eث[��W�'�Ww�)}us$F�G앾(����j�Lc�~y��٬䱮�֙�we�	c�i�d�U X�x�'<;M!ʴ3R��R8�/O�OiIt;{~�������?��ojl���^���la��2� A��AC�!Ғh7��U3�(�$�	�ߕl�iZk�MDa���MĊ�D�$�l��I ���"QjYl��d�W�q�_��o���R�C�h�����.���r�C1#�;��)�X0j��\�X��Hl���>�_Oɬ�l��k�^~�P6��{���+�!
v�f�Ew� K�P�ƬV�p�����!�IBZ�2J��j�b�*���95E٥�A۲�܄˴<�X��S�(�����4Þ�,
W(�H��P�.��E
7��xPr�:��w�W�q�
�Ш3�G4��X�Ѕ
�v]FNj�"�6�T����~�8j����2�[����4JAS�v�O�S8r�[��?S��&1mV��5ځ&OK4ѡ��]��(jqqz�����}�u���ߗ)��7l[0xM .9��O�.F�+Йh�z�gV��Zw|y�Wn�nI��վj�^{C˺�c�koK��Wp�C�?�n"q���صy��L�'`�Q
%H�����x�,�{��2@�IV,Ȋ�����6/������,�<aQ�]F��FF[F�u/ɽ�4ɭ!�V/���LS�q�=T���>:W܎�,���^�������`�\𽔝��@�k�"��O��%���iJ��P;��ӷ�!����,C1v��2&���C����	�*4�$�E��ib�s��b�쟞���{�61���n� ?	����pub�֎�h9�"��<Q2B�!Dg$B�J'$�>+�)�=�N������Rj*y�$���2�����pOC*���=sswO_���K�R��M����^�Z�:���m̷X-�ߪePZI��0j|�� � �׆�'�>E��2M�N_�!�q��I��ɗ�+ ��|EP��g��+����(��/S�H"�8s�I�CY���!�zH�B%O��MQ��a�@�ku���B�֑Z]��2����\{����h��H�Bꆀk���[L��A�j����)��=D(]�q2��`�&(f�P�i��-&��$U�e�AMSWu��zF
=I�
�K4��]�(��w�m�-5���zw�~ᔚ���W��9�̹C+:tJ^{Kg��Tߞ��g%�=�����y_��Փx2w���gv,l�֮��ZzwS����s%���P	� �� � ��p9� �٢Y��� ��{��á9?�`AB�PUd�u�+V�_1��r�L�
�8̍��MfDA���Z�-�vu�]t_TP
.�K����*g�ܳ��Y~��q��c������~48��mͽ��+r'�=F����/�>p��aC���
*�H��.��BD��L'!�|��}�s�sn_�D^j&�.T�N�����#T�-�H^?A��Q��H��(R��
R\��'5R!{I���K�|I֓Ϙ�sD�LFh�	�3���_��[j��g�l�<<}�|��0<G�}�y�e��D?q�,Θ�Hr߼݊�S�NC�|Eڼ�A��ZF�:������b�)3ןh�(�uRGI=ŐY��g�U��Q�>sj�a��hq�e�8�}�G���s��3���<c?�0NRD�q*��(�O��O�/�*�\�v0�_#'>�̱C�86B�Ή_�p�P�0�Z�a���K��6���w��x�G��*ځG�.`,���_�7z篑g=�!~�C���/$�"���U�e��zx�z��GX��@3w��Ԝ�GA\�/��T��y8oPv*A>��3��WR۞��t�����n�I��S��w�&�d�^誺η��7��,�<��]�K1v%xB���M�I}� �8�({Y�<�s�M��`�� b��  x�c`����,�_L���똗1�aaaqa�b�`��r�U�Շu�[�5� ���#�L�
�.�	�/�Np{p��Q�����7�w��/|z|!|����;��	\l< �G�O�0���p���k�_DD�D��Z�v�q�Չ]��"�M�E�Fb���d��%)�C��u��d�d�dn�J�F�N�S�s��!��u��n)*(S|��Ei��e!e#�E*z*�T�ԔԮ���P�آ�G�Es�����V���?�t�t�t>��s�;�/������̠�P�p����	�&I�Ff,f���,D,vY<��t��g`��Zʺ���戭��*;�6{)��{=�N�8E8�pVr>�b�r��������:�'�|�Y�[�yxx��������u�����O�/�o��?�]�V�G��Y����:��W���� �A�J��oa>a�p�
���xc���Vɼ�y3�vv,���
�mHzϯƁ"v5ni]�<�6�5m�U���u#X�^
Z�g���o}�xCۭ�_V�_���k�G����y|���w�������t���f��K���D][�qt_#��S���Sl�'�i�艎�?��H����D���.���S�ܡ��d�"�K�&k�}A,���m���?-g׹�P��M�\g�넨9�)�)�Y�Ǚ��]x��[��o�S륋�ڢ�d:����-LQ�9	�t~k�L��9�B�S�{{h�ʼ��+{��U��G��&�������ͬ���^��4�!�f���ގ�R.��U~C��;;v����>���xh/0œ�7
"=���6�/��X��騨���Cĭ��UW���)�
�1����p�{�[�t���=����V��j1;~v�Z����IK�NA=�������[   x�m��oLQ���O�355T�Rj)Z��Lw��Nm���R�53�ez/�s-�'D��ų%� �-!�طX����t΍�8�9�s~�����Љ��a�"��I�H�A2N\��7�t�CW��Fw��A=�E&��C}�G6��@��`�0�\�F>��HF1�1x�ᧀB�(��R�K9��&2�
&3�JT1�iLg3�f5�2�9�QO��e�Y@Y�b���eh��8;��a�������S����Y�� !�x�#�$�//x�s���y�+���nV��*Z��s�5�Ƥ
���EU���G�4:"��c~�,�1 x�����uc/��������}��ش#7Dzo	2"e7�i�D0l`Vp������M�us!�6��
�yA9,@���R��� rث�N �#�a��5�[�uW�&��ne�.�D�n7/  Oմ�  
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[19]=<<<'PACKAGER_BIN'
           �  6        �	  �       h  f  (       @                                                                                                                                                                                                          � � T� �� �� �� �� �� �� Y�                                                                                     � R� �� �� �� �� �� �� �� �� �� �� Y                                                                        � � �� �� �� �� �� �� �� �� �� �� �� �� �� ��                                                                 � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                            � T� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� _                                                    � � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� 	                                                � S� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� ^                                                � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                � ������/��.���� �� �� �� �� �� �� �� ������ ������ �                                             �:
g�������� ��� ��� ��� ��� ��� �������r��������������������������������� �� �� �� �� �� �� �� �� �� �� ��"����� ��� ��� ��� ��� ��� ������������������������������������������ �� �� �� �� �� �� �� �� �� �� �� ����� ��������������������������������������������������������� �� �� �� �� �� �� �� �� �� �� �� �������������������������������������������������������������� �� �� �� �� �� �� �� �� �� �� �� ��{����������������������������������������������������������� �� �� �� �� �� �� �� �� �� �� �� ��
[����������������������������������������������������������� �x �� �� �� �� �� �� �� �� �� �� ��&����������������������������������������������������������� � �� �� �� �� �� �� �� �� �� �� �� ����������������������������������������������������������     �| �� �� �� �� �� �� �� �� �� �� ��)�����������������������������������������������������         � � �� �� �� �� �� �� �� �� �� �� ��S�������������������������������������������������             � � �� �� �� �� �� �� �� �� �� �� ��
S�������������������������������������������                     � �r �� �� �� �� �� �� �� �� �� �� �O��H��������������������������������y��                                 � �k � �� �� �� �� � �W �        ����S��������������������o��                                                                                                                                                    �����������  ��  ��  �  ?�  ?�  ?�  ?�  ?�  ?�  �  �  �  �                                      �  �  �  �  ������(      0                                                                                                                                                              � � �� �� �� �� �� �� !                                                            � p� �� �� �� �� �� �� �� �� v�                                                 � �� �� �� �� �� �� �� �� �� �� �� �                                            � G� �� �� �� �� �� �� �� �� �� �� �� �� N                                        � �� �� �� �� �� �� �� �� �� �� �� �� �� ��                                 � '� �� �� �� �� �� �� �� �� �� �� �� �� �� �� /                                � X� �� �� �� �� �� �� �� �� �� �� �� �� �� �� `                                � f� �� �� �� �� �� �� �� �� �� �� �� �� �� �� n                                �Ve�e����	�������d���� �� ����D�	�c��l�	�a��D��Il                         � ���������������������w�
�i������������������      � �� ��Y�������������� ����������~����������� � �� ��
����������� ��� �������y��������������� �� �� �� ��
��g����� ��� ����������������������� �� �� �� �� �� �������������������������������� �� �� �� �� �� �������������������������������� �� �� �� �� �� ��|����������������������������� �P �� �� �� �� ��-����������������������������`     � �� �� �� �� ��
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[20]=<<<'PACKAGER_GZIP'
�      
�Wks�H����aj�&/�����S����`��|@hPE35�}�Q3�ht2�5UB7��}��R�?�=��� tF~��SI����;�a��G���_����S�"�,�-��5� � � �^���
A�h �� �(��q*fS���@ێ���SFd��G�#�Q�7I�б�h=�H�&	����0E�+���u��> ���@�m����*��Ƿ
�G�GoPw0/Y����0Z�����%��}9)��f:�{���}Oy�jh�&��!d 5<ìf��6�3x�]c(|��j暾��eﾃ�_�� ��Q�P�����p�v��MH��I.��h�F4�����i��U�W��r�M��R�-�i�#�vż���$�C�V1����B䗇�;�1�S��/ ��z.
4?4G�W �[W��'��9{#sr��Hb�&�sI%� I�h���{ʱ�F� ���3��_@��=�7"���A�I��
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[21]=<<<'PACKAGER_GZIP'
�      
��׮�ꖦw�X^���U̩\�̔�L�1�y�濻ve��'&�ĩ���x�����^}�ב/k=���W���-��������?���_y�sBS�k=ʿL�U?�_��(����e{�_�� (���w�mӿ��y��z��:.%(-�T��
�
Bj��`]�� �^��e�cJ�Ai�R�ֳu�\���[]��XI$�	�4��O6`|��h�6S�Զ. &Z	�`����q~�TAj�m��^�͗ #����`�i�w�S��/|����k�TA):�(���<�W�q!g��r"�MkdT쾘�u��
�/M)�%�*:���CN����7��Y#f`�=� ��Eg�J"a�KO��ݢ'��V��&���J���2%`�2�:�A��|�ZM
���D,]X<=
�˷���p��Iʎ�¨־�����x�$�_C�QMy|ꑺ1v�EO���l��������9�/��C*�Eƭ4�ST����ޠpD�����=��
�~O�X��.i}�:t��ԏ����&.�d�S�|�^n����&��
�֞,�(L5`����@���~"�e�[�{��·7(���.��ma4N�s9�LJ�(K�F`l�F��c}�o��S�a�>�bH�P0�7l[~U�Ԕ �7����O��<9�Xn�N�!���v�M��Y�� ��;ws�!v`c%o�2�2s��`�
b8ޛ#Q�ԑ���|�;	�0��Hd�6�>��7�y�����Y��>\�䧪8|C)��c���e셩�b��3(��ޒ#Z�bMr�n~.
�@Z7V�R��8>Jd8?�t��,?N)�	�,�.����2X��@?��@��)�7}FyQ�_2q��1��Q"�Bɨ�`��@;'��j|z�Q�k	v�	�k�-���=�ie7É��'늒���)HV6b@��2���������േ5P �آ*1
M�~��؆g����q+3��E�t=�}��kDN�\��V����D�H&�Dq!��%�C�_� R~i�؏��^��w;(��'(�&�0�69��ʶF�5��줞$���g�xԔ1Z1���2|z69]y������(44@��4����n�n�н������d��l����_<��,���0��S���A��Z��/0��3v�{����2���]L~F#*Q� C�~�?!�ᴯ�T�80�����I�_z����ػ��\�'NF�N���'X/��!D>��6���K"2��ɞE�T�, 
@���NyWS�W�g�3���'��I�u!M �v43^*>omACn�8�~r�L�/�QWh!s�L�����l�"�x0|"�k�T���x��;k���*�FEB����ω�������+�j���SEv������%I�5�^XBE��s���Ly�@��Æβ >"uN�.���O����
u�k4��F[Q2hy�b�Xu���LK�:҃������ߘ q\�����ϭ,��h�h<�&z:\�+�Fj��\������y��W�ˑI9��C����������6��pP������^ԭ�>R�-�.a���XcΦ+�`�j�6�0��~xre@b�6(~�*ً�^�I�q*mK�NۻdM�G��o7p��<�#���- �O�3�jz�0d���Z$vf j��3�vq�m�Y�"��6���x�8�VwN�I�&D3�[�em�麂FÐ��OY���V1 ��^]�٘�\��Į5��p����o�*���ʶ�h�0���aVG{�s�D�_��Vf�<��qδ�>�����g���������ݍ�i�F���!�g�`�0+�70&�L�l���lmr�+���W�~�ޤ�� 1�<�n2eM@Ч��BU�Kk���
Q� �%3u7
��RMrK@F
�,�`1�G�=#�_�@��o0��Z���z)ξq��]+h�gM��ā���/�e�,RC�5F��!t&+��� �k���8s�YA��	?~ت�qS�����\�*㮹��
�0iu)mZ����6"�G��qA��V�x�Q{��[`Sj1�@Zk1���e� >��z�*&�� �+�(�!xz;���t�%�M��K�\W�@���k��������7� -�S����s�����i����g�	�h�@oh�Y��g����w:i\����G4
00#�A2ԧ��T�����n������P���U`��?�8Q�`�TX@<���'�Z�D�j�e��Jpu� � E�&~DF�̓vc����|�|���`�
����� ����&�Z������IB�jF���=����j�9�[>�q�X�t��<`h	�MwnbxԀhX�>Uv�)|��n��x<��5��ʇ�b_5�Y.]W��9Bg�t'a��C$�����p�#�����U���R�S(%���|�L���E�m��U&TM�Yg|���u�z4�v�ț#�.�*�CȦ���l��W�t����x�ï�2L��c������'(����[�������l'�iwi��v>Oy�c���\�r��� ����*E�1�p��6�i@eU�d���Jјg�?�8����TO�2�c))�Zp��:��*X��Ú�y��4M���
-���,�8C��`��>��r��������~>��1�1�	Ƃ+���6 Ӄ���a�ϐ�a� B�r���3��Zд�.,�"0*��]E���n m~v�;R�
̃S�k�-�Q��Y���-�u��d��������r�)��4R��7#��aj��#@H���^��Q�s���B0�(�(����q���MՋ��w 0^A��B4���}���F���!�Mkd�K�'cq	ˡ����!��(��0��M�*��2G��{�1���jm�u�(�,j^�
�U7��BF��̇^�mP���ԁ��a�S��af�!��`�N�s͸��h��9zlM�2z��.
���D��`���9a��qϓ0�,�?T��CR��vV���o�ΕC��h��I�� �ۜ
��
����ulZu�dZ�=m|���M��3L~W�B�ˌ�����G�f��ub+V�Bj��y�9",��dKB�
�]7��|8i���]������9PO�6Q/����\^�j�S�,uiP�ǣ��,��&%��SM�Y��Į�)g\���[�bD��������0.�/w��/�ݹnS�WNv�Y��/� 
Ed����<$v�����h�){+�����\��eZnژ�a?�9z64j1�KL�M
?�
iL��y�W{t��S����
^-��[���1��U�� �4���:Bʸ����XzI�|l�v�X�o�@|��@M��(���J���q�!��R#�0�V2
�R"���k��� V�����W�oy�rCO�k2�P	#������\�î|�	���1f�Y�ׇ���j��Q"uG<�) ]��JD�hyl����L*A������F"IMt��l�vN�=�Z�!=C�u���'2���2˼��bT%#k+ȫ1sa��L�J�??A�Q^mZ̭d�K��o'���A��%�"��S�4�m��t?vA<��EZ��'c\�?D��)��Ez�>O�@K�Ti|��L�����C=,v��t���`�Ja�l��g�s����O�H�T���3�/�i>�ǕD�*]ܽ�6W��&W�����|��97�%����;/���=}�[t'��1�/��G[C���	`U���k��e�8��Z����/۲��eC��چ��	{��}�j�BP�8a�}\L��-���30!_��.?�7	k=dx�CJ{�$�!X���<���!·��e��tP�8�B���|� �ӽ�Z�l�)�V�z�v4��o�M�\����'�agI�Ϟ��Z����k/�Za��g�b�4�E߷��V�� �r�N�-��&�d����H<Ѽ�κ���Qjye�'�u���v�U�/�Kx��k�@0�=5�(�h�1.<_�,&���"$#�>�'��YZ�l��IW��v'HMC�ȋF}�b�GG�`�� ��5�lBړ	v4_ �߁�6�%�|��a>��ѽ�Y��01��́&��x��oH�1ɉ������նHި�u$�@�?����j�W���J���_zc��\�Z�|��m��t�t�'�uc�V�qHl82fm�y���
<iZ`[�mE�7	M.l���+��}�2	��Ը4'B�H)'�[�;pt�+�ހ�З���xy3=; �dop��Vol4mJeTd!��%�K�I�Nz�*�p�\�����2V��{Y�� �0�Y��'�R�7n}d#c_r��ER����ͳ(��R��H��\���>�~T�ԫ�Q�:�D���;A"�U�wZw$��������|t%�8�l�^$,<����r��{���6������}�c&��U�.�%��/W�&�#�1I�C^�����3H=���W,sg���`���GI���j.������D]ChIYpU

^��CS���#�q���od���\�ꍴLiB<��(-Ф�����S�z���(-J�1�9����N�%�KGh� D� �_R2��og�d���������}
�Ȯ%@��
E�mo��e3�iV��F21ڎ>�d���c�*a��&7I�c�Vf�Gđ�M@#{$�Zs�����[��l5��W�}q�֘�>�˒�S��I�L�*`H.V�YD��ȅ I�e4�	��6ZWyP�"�V���zUz���Aj"~�>L�^낛�����@^�4=�?�G��#3�����>���HgU��ve�;z�g�b�*�J�0�F)�*`�Cް�$��
��H>n�Pj�a�_���Wk6�5�f�r��J���������E
�V/���vY"S����� �;����������H�T����O��^�FG�>I� !��[�`���y�H*�4T���8�뮖��Rg;Qj5EA�x�Ң�D�M
��z�޼���y�\х��]?�����m�ݽ�X���Z�.a_�~݋�\*M%�툜t��ԗ�(S����W-	�c݌�b���r�y��tַ�cO�
F���5��|$���Ǫk���ǽ�:fb��b1�l�|��W��(H���L&>��Dʧ��'4��`c7-��^�/cI0�W�1�Wb0���?��a!�7�7���O��ڜ%�9n�y�8�lŐ��f8�k�o�R*��N�C~�X!l��!�������Q�T�k��p�$�#m�~
R�8Q�|6t|h��2��+�9�D� �!�EA�~�Te�q�CX3h�S�>�xp�T#ѓt��{iLA�˭��C1PND�<p����.��>���bݧ����du���46����p^?��f��Vnf�}�<{��_�m�d�ڃmI���}('��[��!'�T
�)�Ի�,�G��y�.�����s�Ee5��>iZ��%a����1�8&O,U��F�wF��l3X�}(zPz?������U���5���S@rN�Д뻞��W}i�Av�t\�X�
�W'T+��2N�o�������h���9�:yA
�ݗ���i�s{�+��=�1�t�<��<mү�Hb�9��	(E��b�o��M>X�1)�e�)�Q�*��\�����(�.;{?2(����iz/]��y c<T��=�L׹˿����(�7�i��)�gO+uߴ��ؤ�����tt�����K�1�	Aj̦��S�L������n˨����_g���}B�`��zTV��VF�v�@�*����p��2e}��4�?m��Aj��n>}�`�L��nu����W%�
|�3
���WxW�,�Tt5�����/�[H�c1]�!cx;P.e>w�T��W�os@짩?�PrR����5�9'��Pj�qpL?�$<<��1{�w���>͐ _*�f��;�o9І|IRz�ֻ�����BW�}f��gMk�{�t�彣��R�M}�-�?���_�@&n��'�У��"�du�D���*>�^Ν���K{_�\&G�$i�T=�;y�\��s�3�h�q��h�x��,n_�NRm�qU�H�h[�s� ���ص
帟���=�mv,]}R[9��Va��.ևu,V|�P�U>�MXV�Ǆ�v�C�c{�W}����TXD��^K�Z�q
�Up3ґ������m�Ղ�xq�֋�F:�j�(ӟ�c�u&&�R�4��e���F������q`qgpd����Η0�U%)�p
�h��p7�T���pPm;�lɫ{�����z��f��Zc�L�:,{�@<Z���z� ����or}:�T�T����J�X?ɜ:n�Quҧ7�յ���3�K�4+�o+6�)�d]��Ԙ2/h
��7�6��Y8
i���� ��<���{��`��2���͔����Lx��j��H7�OE?�o[,�v~�����8���$<g߿��Z;M�k�8:�hQ��.6a�l��w ��әo�U1�P���t/M}�`5�Ey2G#��|q`�L�?�&�P��������с��Qij���}`	�]�p�M�sDYK0�����\^�$6�Y�)��ץ���Ĕⶇ��{!��Lf.�	�"��Дr��};������l
���\v��������e׸m�Ϣ���F�/���޸����Ӷ��2.^{g-K��0a���+ExL�Rl�ˊ�3 t�}��H�#�33�{(U����� ]�nJ��KB�R�����k�4T�%��-g{��1流�����4g����9�ҥC ��RuA@��r�[�&�h����^���l���}��v�F��l`=C&�c �w@��{�? Խ��<N�d��A1Vd	:���`�
��o�?M紿��od�
 �W�?�B�3�.����PO��~D�ǵ���!�#���N�D�ٜ++��_�+Ox�^���c^�7\�qm�n�^���� C��R�G]��s�z����t�B<�'��HJ1uU+:�B�bF��v��eq����G�u������.2n7�z�� ��B5�X~h�x�c�!�"����J�;�2q����|f1}Ƙq�3zh�`��c
T$> ��8!]ُ��#�7�\0F\ւ~��ԏ�pa֎�e��ZI��Q�F_e�L�����υ���!����~JOk}BT��^�gX���9�J�'K<nx��zwÉd-z��qL��؁��E��]#N�U�DҖ(��6�Wf|�ceB��Ü��)�xͯ9������6�Z��L��H/��FW�������2<ø1x��Z��YQy��b�[��*��`$0Ի�U���t@e��eP|�ϱ�Xp�qG8 ��W�-�[@S^�:����`�7ͷ@�5�=^��q��H�_�:{�t%�<����=�K�p�O��0_�ϥ�Q�����o�.˺�6�L?�/oy�*�jѻ���s[q)��^k/��L?�9 ˌ2p��u!�$�!�r8��Us����ty1�BU"t7��}!�q�N�X��2k�K*�`� n�D_��IP�L��P���6V�յf�5����)ZߡB��|��'gZ�n�x�~>�4O��&�s���,�L7�QE>=ٽYkL'ݙ(plH���K7�tl���Y�4�ЂO�`-]RG�l&,�$�<�
"
GV[b��-E�,�oj�x4�uC�"��S���}�cn3��Z&�J�e�������n��\���nژ�9��Ƅ�o�.�k�|�YkߓFG�|v�{�h�h�Nǘ��`o������ݰOh9U ��]��P��	<.��w�D�m|��I2B� �$:݆�f�4���oӬ�Q�T2��m�����
?j�s�"ƀlx�\�axb�O��Q���&4��h먁�g=z�ٜWS$�Lo�k>�����[��6�-F����VG�2���y��Ԗ�PX�&Hz�)��D��x��
-���r�k�Y[��"��N&#S�'��.{ -��E90��.�.r�x	���I���j C��%�ب=��R����k�Fǧ����^'|%����&_���	He z�$D{���*@e���a}��Q�n�m� H:�h��P��ۼa y} 5������~B%��#���_�0�؜��6D��4E���pۿ�C�~Mx<����c�q��s4�h@۟\�F�V�}����$�5+�?�R܅<=
�ַ����z5g�S�K�t�_$7��]H��i*�P��5aǨrprQ
�0��F&��pn�Uv���y�YULJ�/����"�̵ReK�c�O:�R����L�x;�VԱǖ=�C(����9��Y�à]�c�;)oۂ�HQ.���	Ax
B�.|����7]M4��b�V���!�Bt[���Z[ƒ�es�&DW��=Ջ��d���!�Z
�"hq2�W;�e���ک@��ݞ��32�r��V�C?����d��"�`kXO�R%�0�uT�G�!��}�Jކ����$re�9Q?E�g�  �Ϥ.Ȝ|�h_&���F
�Ȉk��� 3g�
��{.����u�E�"�����BB��r26]�+uM�у��&��
��O��*��Gg䨨������A���Ïn��!���vW�1
��avu�P���GQN|�Y��� �5�� �sw��r�J}��e��LY�j�˴�F�'�TM��R�5�� �@��
2�[D��Z.�<q�a'0f�=Ȟ(�ΙR��/�R�Ǧ&|щ�ἣ
Koy�"\!��B�C0�J�?�A���^��D|D���Ɣ|���<i@F�R����BAD'�D�쪨�x���5:C��S�~y�v���|#5;�J�_�!>ڽ�)�E�X��o$�s���C�N��z����⻋Y$:D
�$�_W�x��Æ��A6�l
	|�Ve+\*��$j��Q����2�MwP�F\y��&WI��һ�b�.����r���o���v�[j����ⅸ�	���Tg���C�G���J�r8M��l��BA/�?�Q�|u/��>gY�W�ej�ȫє�b~J��>�Es�m5&�Z���u.vm����ǐ�},\&(�k)�2OB�q{3��wq��D�w�*d1R->	9�Ʉ|{5%�E�c�wU)E���r�l�-U�7j�X�tp����7-u��\O�{d��^��2�`�b��'��]�weLp��X ��k������ߠ�0������6�=��h�k�k���c��=Iqƍ�2�š�������3������0��-R�sv�B}�%�àW��7l�	|�R@�p�W�>hK�[�=S�&�>�_���B^�;��m�W���^d�˴�Ӗ"a�a�:Vc߇�q ys���u* �e4��d�uٝ_s�ɭ;z��P�0�\+h<����W���M��谋�L
�4��c���x���j��qaU30����m�>����w���y�@���u}v���O�b�J�o�3��גK�b�赘����C��LA���
n�o$�[�����1��u�r�[q��^�͍�.etu(w�u.A��`y��q�;��ڱ^"�t��OM�1� Ay�����������_?<���9M�N3O/�m����뺙Qi���Xo�\�f��RE��n �1r�@� �ynWH����lB.��`B���v�Å��!Sۍ����RN���>�,�㳕eD�KK-�.��s*6'�3j�3���WU�㺟��Oo�H�ʢq��4��a��@���>��sp�ʔ$]Au	��U�u���Ŏ�iNޅ$�Wq탪��� 0�@�)f/�#=��'�G��Cq�"
f�]A�U%��6�vy��($�ɤ�LH	H<\ �ՏƢ�l���Z���U�5ϩ���m�Uj�غ}V\���S�\�������̓A��^#&�1�Pώ�D����j���;����FĀb���I2���iz�	`��'�u/D�)��L����u�9��F� c�i&G8J���v� �U��>���VefP,��rY�id��	��tK���F}̡����X}D"d$�f�a�~/B2�
�FA��+��k�_��2����#4b�kqwA۷�fD�&Gs�z~oP�\��xv~���Iə=u���IY�k���}�=��������X���B&4�oIG�(��ϥ9<�;��8@,י�&?*s��l-�M%c�k���m.ǣ�d����KۇoŌ��g]䄸'֣[o������-�� �_-j�.#,���[(bRe����C�:k�v�($��D�;��c��o��yPv�MQ������I�q�0�n=����̎��Z�x��n5������� L�F>	u�O6Y���N&�Mq�p�s�ǧ8��S�q9�#ma��=6��[���0�.��,��\
�)C
���A
��������R��UŻ̂��S&���Ho>*����?ɣ%��Ep�ޠn�����Q��<6�d�Ų���<ں�&�d	��|Q�@�89���hpY�=������V�9����E7�i����
���B
ἣ��	���rr�l�I�)~əP���}�>jF��R�1�#�$P����~zM�2꽞���n���IS(��v-��d�
��-�IngW��9��V�$�	��F�nߝ�}����	�o�z�����Q���H��YX�L��|)�t�W#;�9	y��*�� ��T���k��ޅ���V��p���N�+\��)��3!�=�'�=�z���бڸ�$>?��N���ٓ��`�q�X?��h=o]� ��QIpF�m
u33⮒�z1r$4�! y��yb1ҟ��U<~�P`|�+����*�u^�ih���AE�"��@g��
��RI}k9@�!�m[�f٤�UԒ���Θ�au�8�^X��-�dɎ��:u�r��#冺������a�����7e_��k|y�k�O�:
e���@�����>����Ԗ�h�v)R��WW�1���?_w
�n�|��q}�m��M�=J���w���8_0�}32q�������.�_(�7bҤ�`,iq;��' �y��Qs�1�y�w%ѐо.1M��9̀L�Z�ڃ�������.)�V��u���v�_���r����f�JC���+)�w`�ZҢ�K�\j�|���Q��0H��9���jL]�
�/��)w+���S�7�jT�N+�+S��`�(6�Fw
͠푛BT3�cl���Á�~lJq�e�g!y��[���W���E�(�Q���tT�.�l[��](��X����I�Td��݂�\<����"݃@���ru ��꾫��g�)�O���x�7�\�R����������@S����z�Ӝ`�_k&	(<�f�/5�����D7*�ChA(�˝�"�I$�x�-2�����,��
� ���UY٫)�(!3�Fr�ڗ�1j�����A��d�'OB��b	h?'o<�%ۀ��!S��P=l�3�}�m%�z�E&M��h�W�#��+�5���(��N�8@�/��>�]�ed�4i�>�"w������ꂐ='�M�>0��~�;[;��S�#�9O�������� #?�W���s�)6� �9�͍S:XM���
�&~�D|�*�o���(	�]yLэP�̰�]�#=�!�gX6��¢�-�TiKqG&�V[2�#�B
� ��Y9Br4�y�@�/E��Jv�Dɟ���"T��8J�G?u�]���^��<����}֚��ݦO�$��N�|��n4J�I
�7xR���6�T���cMag�tK�![�N�D�A'�d��#]��E�ݖ���kߢ�v˹�f�>����pyu�d�UNlVB�,��lN�c�����{�9lo^A�{�^r�Z���Ey$�3��݂o"eA"�z몤�B���b��גTAܯ�%��k�&�c]`�
�/�G+DU<Y�`e5��1��Є�%�׊#o�� >���3�)ಡ��f�'�����k3���������O��!�l��l��H�G&u��k8��WP��E{��5MU���(�$���B*�#a<���fs~�*
� '�����V��	'��C��Qؗ��������	[�����wz5�p�~� 0��"��5���L��d��55D샬p)�V���\����G��-B�%�D./Z��lx�o��7�]3���5ԢUJ�Fe����u~�oa�pa��� �m%?��ޕ�I|���y���k1z91��N�!|ch`�A �堒�ܛ��bx�rptu�꿎b�Y�,j�I���	V7���t��z~3_Zű_<��e��"�`���G��d2-ʊ2��rT��	8��	��r�
�ի��[p�7���K>����e+�:~��^�Oc _����r˅d1��?�	ծvN�g��ʋ��^Р����)C����!{�0��vǍU,�o�3^����W���|�Q��9�_!]Y��3[��iZ٨��+6y���͚���3sd�c�ʹ���-��ѕ_Vv�z�)ɋ2����N�����S��%G�j��=�sq�cV�h/!�F��
��w�c��ۅ��4"����f0=y7�o��uf_/��%e讅+mAky���)�K�Ɉ�� C�J�4�u�l1r>�����dBF� �}|��D�[f3vIXƊ�,��'	�5��C5`�6cK S����q�y�>1�15!��E+�C[���*cY��1t�(��Ȥ�<�]�+�^�y�f��,J%�}~P�[�|Ij��=����6l�S��^��	�c��;E@
1�C&��I=�)Rx]���ڜ.)���;Uf�M+�{��P	<�:��B&N�j'�%Y7�fn)��7�ܫtflT��BS�{�T��C�4&:D���YH�Wy�)��yX 
DO\���+X������ۀ���*�����0�+��:-\G�"��>�{Ed�4�:ʚUc�ip8�'w�D�&���e [�sDF�΢���)&���vy��	��M[iw}⏗��m)@�=�/���(�q#�'b�ʉ�,:�OV�w�w�e1�h:�f��^c�AB�%{����q��ܗ��N��{��w�Sdv<�!	�|�c۵XO��F�I��JS��w0��ۄqc�#�]�@Vz�L�_���*2�J!�E�i�T�a,��|@5/P4�Q�LR�"R��5��ф���I��U������;�-���}�\~��;OR��Ҋ�k�Yܗ�Ft?ΪB;��/���tW����E
']@EU�����I��(%`�ఱ7'�G[�Pe�T�Hkɕ�.��9�/��k�bx�d��^����T�!�jA"y�#�#�ZS?�A��ў�@���{T��O���炵}ʺ� ��@�`\>�w��?��,�y���]�*(0���A��໓�g����a�����b��`��63��|F}���Q��bQ&�Ø�`[2,i
�S�ݜ8�+*�Pr����z
�E���U�D��=X��f���i	<z6MC�Do�?��\�ʈ8f(��B�_/�UF����ӷ5H�`Ĳ�;�^�`bGB�

}G��M���$�9 �':�n�"�
;ـ��t�!U������-����ᝰahrC�B��޺���}�W��r\��|QZ��B: ����8'��z⫚^�F����._�-��,�;�߄U�%J����^W��>�Zp4�׾�0�Y��2��om%wtO�ٷ���b��"�m�E΃i���~��R�S���	JN8�ݠ��`"-�y�J
�1���/�LR�+�u��fz���n��Qbw�����m��p�r��Kp�)B�q���O�ƾ�"Yڬ���
�ܹU2h� ��e�Es۞���/F|3�q�NA������lM�!������߈�{Q?5\�=8;����t��c\���^����-W�M�7��^�M0k�&
y
"e0
�����F���0�*��C�	�8S	���_-��x>��_ ��,��(xģt4�] �uq�|{�e҉_���Y��sUq�����?�Jt��ǩ�Y.f���O���׫4�?��7w��@���#�[�@]��2��=r��2�e��	��mރ�O��ݳ�y��++&fu��-G ^
q�O�5��K+�5�W�Vr��.��0ޥ�_����q޿�i�{�q��n|vğ5ap��� ��1�����T$N�@{�E4�m莺l�L�n}ӜT�m�=�f�eT|	j�ۜ޲�k�⮂1�� '�1���hX]�������\�b��Y2u!��:�
�� �ѳh�}3�2�YB��٭Ó8HB���.64Χ�Tғ���:���[�>Ĳn9�g�C~BZ����U��Y��2��-g����{�Ѕ�m�\ )�;Be��+X��D*&?�~b����hP�-�!y�nXʙ)��hZٶ���-��f%9��1���0�r1~�/��n�Wm;g4S�szӞ~Ǆ��0�Y"K����Kx�(ʨR��`}��p�ߵ���CD������y[��p��� ���lF?�i���ʩ�,k &�� <�D�;"ܧB�5��"��ZrP�?c�|��Ey!#��ن9���{9Y�]�WM�PTM\&�_��s_�,i�u�g|em+�گcn�o�F���d�n���SJ���q߸|I����,�؞���٣�L�ch�_�?��s,V�f�����̕(�2�?��۴Eؙ|���M���T^#V����H<:*$���D��V�)7���0���K6�,Om�q�S���\�*�(���ӛ�zh
�^5 ��_��W~ x��G�c���'� 0���2�|�erHS>6�5��^����U]$tS�T���?N\ϩ��@���D��	>�m����w�$��|Z�-��(�xĞ�X�wh���;��L{W�f�Z��C;C!��Ǧ�#K���]�{qw_�3-Q���I
]�i����vE�t
	ߟ)p��d�O#�z ǎ�a�q!:�~�=k: �>%�W��z��٨�R�K5�T�)=VJ=�{�ē��Yg5ӟ���-xBph��q�W|Vzu�\����j��;�]�]��h����^do"��'�ۀ� ��sTRpeUK�C"�H�@&�>g��H�ǝ���q��E�R�U �[v�%��uNVAH�Q/u�PQt�t�dwc�����e�w1A��J��A
��I��O|�����H�I����r��CFF�g�Ut�>���2;�����Lׇʙ�$��q
M�7 r���_�����,��,��M$l�+�Gh��[y�=�n�
��s�>|Gu�[����🵸O�¼ ����rS�rR�xi%E	R�{�f��!�c�������n o�;J4
xA5F�����|!�"yB�p�4�a�ܪ�TW}�E4��Od�"0�s5c��T8M�1�]yOV� *E}���S��v0�yp��Gx�$���Aڨs�(�v�T�8)�i^!ʭ������D'��ɟ��*bs�����sK�`��O�Qp���ӷm�_����c�YФxZ�?�g~� c�X�Q��;�������6�)����������v��Gb#�>�T�~a��Q��fp��|R��l��+G��ɜ�R��)޳-c)�Tm���;y�uX���XUԥ�cgz:�'FYr����[�On�CۤK'lZ��|�?Y����Oښ���r�8g�j'�Hs�B�H�=4>����&b��%����oWAVJ�Y]i������������e[%���M'�e�ç;
2X7��l%��� g��8*S��8D"g�8�J���lq�k�y��Z���� ����F5�y7[�����k��A��{l�S��9L���"���E��� X�b���ܱ��L/��OEY�6���Y��a������n�6Rm�ON��'0C03b�z��ݹÊ�j	H�:��R�1��f��ń'E8;������o�C���>�h,۞Z���!�,3^:��j��d�����c.�,�P�i�$�Ύe u���y���uU�>��ŒZZ{��#�[���ӂ%3z��75IT��i�t�/e�~<9��T��<�sn�9[[[�d��ZD���3k[�}@�~�η~�l��Go����f"�1q6����q��Guf�L��W�0��L��/wY<��uW������������t�hb�ֺ:�Y��4ڀ��]�/��c�V�_S��p0�����i�/bgAzN��m���N��"�*!�@r^Jpר�Q�X����~qcyR��^���h��d����~c��s�pG�w�q/Bk���{������{��0����蛂\��|��s
��07���r�&.c��o{�%�2"��#p�}���Ͷv{�
�?0�7���M~"�O����}�E�R��8��u*×�ǦG�+�iNE�k���O?�{X��qk|�^>DM-F>{���C��GN����H�`U�O]�7d���;B7���#���j�b�b�Ƞ�$@+�N��K���1���q�Ts�E�L��
���y�Nm�u�S�!"�������g��=������
��"��ta7'�N@L���h�2~#&H��]t5~�!�W�$��f���UL�m�X�*qq�AIM�7J9���ar���Zb>���d����N~
 R���e%�m.��`�q7ہo��u�=�W��'�nZ���X�|�(��jt���
��}����%�xH�X\M�[� ��kv�1����2�C%�	�p��e�q�޼Mv[� �/���G����\��ؚ��g��;�-�\&�g҉�=�ys`�VR
DDm�8eU�O��UV#f �� �'$/k�H-M=J3B�	5�����r����u�g�j%�����c������O ZZB
�1�`�r�a�:�d�ik���U��;����F���G90q
��0��$)a�[���0�����^������1��a����۬Q��v���85P��6m(�8_���[
Ɨ1�Q<!nUVk��lt�4�i�3�y������*S+������Ѓ���:���iC��=~������pY�D�*�4�-)/�s!�1��3�XȘI+��t�P񖲬 o�$����C�7���9��)xG��8��򒹾4�t��[��o6L��x���&��h8�N������ DIe�v�e5�CO+���w�����g�~���A����[���(�����|(�sx��&�$u��1�<dC�g0�p�J���kr2U���MJ�_�w�
�$�H�7�;o+�RG�Qn{���_Y����׸�O�x�ō:��~Q$vS�bUp�gjP}�a�_��{�.��z�)F��8$�j>��e>���D�*��G}�z/8Q��F���U��&�W&�y;89�i��s;��W�ӾI�k`ɴmLv�H�'(V2w���IV������M�~M�w���>UY�e~ ʡ���Eg�L�]εԽ���3���}(V�Aw�7�H^�.�	�qS�@6�
<�/2��o(�a�7QGRR�(��x'{2#��J�M���˙H��|p�*���)fpel�� ���ɻuv�<
!���&�)(�@��:
e)y<� �Vʿ��c1�����>pw����4K�a��<��3���eq>RBc 8�w��o�ď�EN~mJ�'  �X���!v��Jn̞��֩�c'�Js��5�0�9=5Ԇ�$c��J ��g�.�nvY3SѓN��zƇ��K;�Vw"��Ѿ���Q@g͡5Z�`��f1�"�A�HqC�h��9�v�L|F��F4@�43������X�����ѿ_ɞ�~�iϔW���p������
��(Л=�ӌo� k4%T�&  s f�,�`���;}�m��ɰ*�S�?.�-_�J�q�S��r+�&m\]ԛ�b�5�WC�!UW�}�������+H��,��?=�=�C��W�/���Uٰ%ڎ�!�q��7��>�g�c{�#y/%���~
�����{v/:�PbH>�,Z/�.��_r�
���k�夢N�w��5 d�xJ
��̂77���]�5���Ȣ$��-���,�"ENR�m�����o.0���
�a!��P��B��$Γ	m;��+Ժg���+���u �c)��HA��2�b���r��1~pF�9q�a0�O�t�r.�Nǆ;L�Wa��K+�8����[*B����a���,!�(�.'F|�%�)m�XR'z!:}]$9+5*�N����+V�:F��߰�p���*ԁ��KN�������Q`��>����v����|=M5�{8�
9L̫�� ����yJ$cx�	�΢�;�w&��&TZ��ͺ���8��0v���Gꕸg�4����w
(�{F�-��K�I�(b}��wZ�^��H���Cݲ�w������(yjǚf��B{}���D�\���_�U�P�P��g_n��O:q���0�뮖F^˿�[��udb8��E��۽x� �����G��|�i�\�t�K�2�	�p��#�&��Y�M㩦mp��]/JU��h[��gcX�}�$��g
����q���>+��6����׻�ڻC��M>K{����#\9ko�1�Uu
,�t=�l��З�:]��-2�4���tI�t2Bɗ{;R�~����w�&-y�+�r�p#
����2 ����F�u��
����8��!2��Tf�{�L��K$��g�ys Œ4_+b�U�(4�I�l���H�GQfVm̧f�'`ۣF�`LK���g����T���z}�M�����=�@����Ζh�M��v����V#�m��[D;=��u?�x���mƬ���n03t��lh� #���6�s��yu���?�Mg��}��.����o�g'R�rds�`y
}���Od��攟(T}R@C2��`�_��S�+pg�c�P���rh��Й�d<�;{��jo���C$}�e�1r���^48��3��0ԋ@%愲[\Ai�L����R�AY�:>��CH(����})�q36)#�/��D!�4�E&fN�ݧE�8v;���&�23����,���b�m�%�l��������h�@I���>d�9�N��AG�$�7Z�wB�t���+���
�Qqc 5��C��DD%k
�0BYS���[0KD��Ѻ�mO�Z
l�1�~�uY�K�Dn�����7��Ȋ�~f�s��Ī���7j��NA�ޚ��G�NH1$�3%J��.b~GENM�Q�4�/��HmZ���M����iL���qY���CeWʞ0v�7�^3��Xvid��G�y7�4fx�ˍ:޿�NV~���^5�u��>W��^�
����cb��ү�Yֿ"�݂�mT�7�uϨ�1#W��'n��0Z%��݆Q;f�W�[�C��Ӑ5�f�x2p�6����#�yF(jPH���
�l�mǠ|̼�I�T��
[�u^�"n!�����jclѡj���������1���E�Y�G?��s�zz�]^�a3���x���ah�6��<'4P�Pe��P�Q.:�s�H�X���W�K�}i��ɣ�h^����|��Y����"�B�-K��	��}O�髙��/?�|�[N���9��XT+���۪�&CSm`�I+�۾�
�q��<�@]��W�\:�tr08<E�3�7��l�x-���
��4{l�R���ܛvaP1�c�E��X�W�w�ۻ�lD">o�5B4~M�ԕ"�x.~Lp1����5�P�����q��բF�/���T��[?u;0��]�v��0�
����,��P�?ru�!0�D]X�0,���8�*7�Sg]�VdP�N�n���`�?lr�>����%Y��?����Y%Ԃ�2#?�t} DZn��Tw���
�~��co_zg�_=10�r0v&H���C�Jn%�S䳔 ��N��]��d��U�mNߋh�Oj�a�
����`�6��`��+��B����G�;?���@�����\Q� *<�rD"�K�' ùjT���Pz7�`�1۬PJx#1�����},���Ϋ�Q��*o��_���障��Y)��G_篔�>?�|�L9�O;\P�S�}�sx�RtPq�-�c�H��\��ձ��^ER&�R�K~�}�{�]�c�gB���C�A��R�ͳ���|9m�����;-�YHF�����-�����Տ��X^n���H�=�٧k��6{v�n�R��H�C��T���<_����Ў�>b�U��36H�g�ί;�?��d�5k{�'Q�Cd�cY���9~\(�h�xk!�.A��1���=M\r��c�����6��&,��b�?���ଅ�� �P�T�y�E
�8�3��*v�u���p�1��{�68��c�(�*�l��فaP�gw����������y�
OΫ�+��
���bA�f��H#~��V; ç����+jX��$#�3Y�z䞩���o�k�}�'4Oځ�d�O�&�ޚE���e(� ݄gµ\��ߕtv�I�|�	��W2؀탠�qG��{���|ڵ�;������niKv��O��B��H#Z�صQ�%ATڂ>l��~p	e�?J����TT�su�K�A@#%�4P���t�c+p��'�_e|��#B��vb�gc����r$�-���+T����5��[kw�0QL$�G��tx ���-� ��Xϋ�ėop���}x�B�� X�����y��o�i����B����%7E�g�l�D��'�.���Lq̌�� \�-�h��r���^���T�U�:�I��䉾�&!�h�ܜҡ���������kN�-�`T�c)&���ݺ���3ŭ6�t�o�	�O/�L��1"�=�b�4�=XU,�m/���A)�H���L����#���4���R[>��[��M{�x��ڪ8��&�O��<Z#��S�I��v�E����V@ь��_d;9$?��,��0��*���[jk��GV�^oH��0� �j�jO�V4�H���5A#�_X�e	8������:DK�̩�$�i�:`^�9C7�zW��k`]]4q�8�Ϸx>��{}�	#'��]Y�W�52I
���K\
4���̆C�X�`�u�5�b�������i� vZ%بB��~���;�UJ;M��U)���Ix�}����4����G�>V���ם�;������Kb!�Ǯ���#>4�����{�n��&	d&�أ����_d�
A�^�_�Y]C�;"�[�*�F[y���1���{������J�T���p#u^��`�=�3�)�[���#P<��:�����^��!�e���reI�$AU�Ot��Xyr.u�R���D�NAfB���ұl��ظ�;<ی�
)n�KŠ)Z����2\�^"xx�9��ᦓ�pS��_���Ŀ��Z%N�`����r�>����h�B!�눴m+S�X�l-��#b�S�u|?��5�D�u��a���̅sމ�.�6w��sg��{�L�t,�!����>�UJ�+��H0n�k�Td�F��Eq�#O�K�x	���*0�g�2���h/�j���~�G�S'h�Az���8��C}b~�R�S#�(��O��Բ�̑HԃK󈩤]�7�Ľy�/���/���!@46�J�VR�x�Jo^�����@�N��r�P�s���MTg�7��u���6-���7n�(���8�wA��&ߏ���,�l��ɥK��s�(?��?��
: �+�h}4��>V�xӅ�	6t^�@)�֢`R#���R��7|�{w�������+�m�ݢ���	���?UmS��Sr�{C���>>x)
����W���b��ф�$	q;���hdN(��듌��g�\��Dm	����(Ȕy�7���d��Uف%4���W��1������}ʇ�@��c98��+�T�?I)#4t��;T|����O�(�;��%y��Ȼ�� ���Q(;-�L�c����@q��1���Hb]��$@9yDBs��R� OzM�`��!jhLu�,��Q�{Q�:��J:-�W�[�3Ұ]�#?�oԘ���0���.��8j�����h��<�9�6p�X12v��F���-���gݬɲ6�3v�i)���s[z22%�'΃�?9�cs�j%���j�t/�������1�>�Q
bP�._1�M�c[a��t���]��ud"�����8@+3�v�X���~�⚦�~���L`�9�g�
#Hfè�(�sfv�r���Tڔvџ_�Mq�|S�0Z����7���1��jf�NU/���Dڇ�i�c�s�����_u]��!�����|��^?�|���N���0Pp���/�j!#[<.�=���"1�+���)Ls�[	���y�s\���җx��A�^��}(�LF
KQک�'�DtC��X.υz0�2������;��+C�rzP�5��˽(����@%57�b�w�>�/|jd��y�03��$}� YF�
�&�|u��oc9��fT7n�[q.ſO�ű^1����V�������UկR���5ί�d�&�y/3.��^�X��=I1�Ƿ�/�K�'�5����$�xcZ�;�̿t�Ьʤ��aU�\��B%b�.�
/�
M���Z�-X��xlP���Dx�?=���	n��ߘ˻�u�	˵8����9�+�VF��jp0͖������i�p&�ŬQr�C8XM�{�o.���a�g��Y�wJϊc�X�?�g�4Ҁ��֍���;Y�Tka�����
a[������<��=�r�ר��&ܥ��mV��w/��W$���4���G��k2�c�
K�Ul(-���PA���9��k�l�k���c�
��԰��ֶ����I
�JgD��~L��=-��;�ee��P4w�)��f��C:�Gw{��X��s��L�� �`��zt��S��[r-�{[�ig1��:�}
��'�@#]ӳ��iZ��=<�2��6����0�i3O��Ιxm=f�:��݃�S]���G=j.�����9�ʰ��Pw��E\�.�?/ݲ..���<(�ϯ�0�����I�7I�XYp�G�ӻ~�ՠ���N���g+cȮ����]E�A�.T���L�[[�>'�&��\����E�9�O����7*巫�����3���K�]b��o��ZH��3�}4����o��fſ��44;3|�,�H
p���yjX�0���]>շ�L.,?�W������{�+��g�7gWIR>����](	?%Lp�>��}�ʥߗzl	�e����mO������eCs���K���klL���[���![u�v���+�Z�	s<߈Q�T�E#�a���~����^s��?�Gg����9NJG�@���&��q�C6F M (kF��#��b�L"�_沺��B;r�'�ϓ��K�~j���׉�BC.�n7����7��3\%�c���=��
��AS�;�i4��'�(w!�/��S�3���o��N�p�wΞ��#�
��~٥+�W�'
n��ZԿp��+i"|�n���K�Ӳ�/��� @>5����r��X+>�0H�H>n>��<��c��_|��#�bq��:x԰{�7R��D�4�@`G(6�����2�1�!��d��!�6L�G��u_\ٶSv�v}`u�<څ�ł�����j_)C�/,��~�o��;��S*G�b�����76�əXA�M@_-,F�ԪH���?3$������������S����p�W��̄�`no;�ےo�r JB ��
G8BcaA�7F����TN�殹��}�-n��|��-�Wh!��N�4�Qό���Iz����hZ�&�^!
�5���k����������&|_Ҥ�b-�V�
���&/!� ��$���_�c;.�0��֐��8)�j��^���31���y�]����
g������r��t�ԕVfy�N}�ŋ��
�7��J�_>Rp����
W/��^���'���p��)�����c�`��G�c��c	~Mų��tP�o��Ҧ��Й~���QK5"61�؞G�Th�OV�����Fc�|��`�dw�7�JA�	b	�7fo���y�!��/¿�s��E�����Y*�0�8Рsʧ�!��K���u�kvSjP\��-E��G�w1�C�J�/�+�[�j��Է1��*
"��	(�iY"��T�0`��QA��L{Y����E��!�U
3��E��S؜楁�O�����E|��\�9\��wPiw*��ZM�R���4;ۛ#�U��
L��\����n�R�/Cv[�qo�{�%&|�P���,_�3\���\hIwn]◞��>	���2��%��T�O���Ǻ�R���Q�t���+�#,�3F�q�y�$���?��'B�l�����ZY
a��Vg@A�Ӗ����4��*�.�M��
C���Q��d E�C�R�n1��K��eM�_�k)0%RY.�����ң��J[u
$�~U���B+#�G�	�"�$�[�<�h�K���EXg/B��n5��p�fd�����x����6H\O�����hk/�8ρZ����I�~<άw�T!0 �����Y�f��@�J)�O��w��}_X%�ب+�����aY����r����ͳ��>Ϟ�?w��ABuߪ��57#�j��s�IT���o�n�e���-�������Q�˭pw,n�����T;J��	Ww�b�q�xZ�Y��/aD���q�Z�����q7�{�5��:��r��[�X{� Y���
��h�v�z���r��M��Ѯ�TJTVUٍl��[��ZD+n(�؞k'ͤ��@�>t�QF˟'BZ��4���}˵|W��G���K�w>X��%�4�Z��+ľE����|4K����-(�w|�	Vd��w�Q;"�g��ԉyE �@'O;���( X��eup�F(a�����>V������?��x�Zg����C�fo��� B.{й73��%���e����.n������P؎q#%��p��=ѻD�߄�ï^�?U	�d�!%��yi߾7i���U�_^��5��q�)�0��)Q=��h�wbh�\���s^Zܞ�Py������f�9"z���r�̈G%��g�-p~��ڬ���X�Lµ���zd~񜤟<M,�	H#ҡ޸Dp�Z�}хw�u\\<�~��,Sv%�`k���e�K�D�`O�hJ�I����H�~�7�eAQ"�i��m��z��3���"x���n��C�J�s�@̚�c��tw �o���/Ƣ<	�K��f�;R|��a�C�z1`�}�E:H�d_z�	N43��A(��/�[%��*c�|�=��=�{l�0r7��>w��]`
�q0�9�$}��.��F��7"-&	?�Ź�h((��UV|'�Eg&��Ϩ�[��E��k����+��{��4 �,t�y�6F�HeV�w������{+r���O�\M8)p���X���Q�ctd��Ŋ�<�¢-5�߷�U!�Rwe�;e���\�#d�X�S�I`d	_�xE��0)B����9w�M�Td���]軘�sʝfY�W�k���_?ǋ�M��D��\�
T���y�
Մt�4�Їm��L�Z1;.b��*LсT�ݟ�_�G�E��I_B\F���@��͊��kb:���k��MYY�.�k�*��P����1Ww�d�9�=����[0��Y�m��ll"��|��ft��7��ʈ����<D�-�ڔՇ(��`����E�2��RU��X�F� M���L!��(��v4���;�	���z|P6p���/r��)��SmrZ�rįI�3���WN|�c(�ސ��¯_�Q�:Cmn�����,�)&�2���s*�>��M��,b?��sHKCj F��~�+�+5Β����W���"��l{�X��mFh:#���:8��icw�d7��D�f����֖����0S9c3Cgff}�Ҥ��$��{��=	�=0����x��9T�������$�'�&�Ma_�b
�+�ŋh�Ε֤17	����W���|��~�c�}�F|��7pW{ͅ���)u�����|1� R���.vSPGTt�gc�!b���gj�
��u �f%��F�n�(�n?_�<T�9�xyI�bj	�3�p0��
ٻ�Xd$7��3����,&�n�*x+�|�PT89��o�����BX38f����������ў�\?6�~����q�ѫ������0�$|�~68v�\mhR���߇}���楲�2�cg"#.�z�۝��T1r��&Zr�}׽��9g'���,�q�!�0��i�y?��H|��Ph�x�6B�����>�WhjīV$Yͨ�F7v���:_��
9Lه�-
��b��}ӊ�:�B��Ի�F���"��.]�B�ϧx�J���=8*p�4J3�r ������|N>�%|�na�`��e���@�w4?�� EM��B��2��1x�_n���� `jxAa\6��%y�E���@����galX�:¿W��̊��yA�H�ϙ��jWAe��+c^�C&oƵ����.k/6���~2e���Ět�+��"}�����zw���dn�%%3����gҨ�~��[[�6k�U�i$��<���J�+����s�j���B`��f��&aCS�>vTm�6�5��
]`Uo�mQ��l�*1<�lSD��o���ɧ��/�y:��N���ݲYf�*�v+r�Vg]�?T��?̾+O�]�|KMAdK�(��Nx��+�T��f��r�H7堠K�����G��)���W(	���������D3��&0x��pPh�˯��; ���Y�}���Nz���̄mAxzدU��b:z��ŭ�Z_ޯ^"�TA�>�LXp�Q���H�1ት:K@���"h�n�O�/}���y�jk�+�xAb?���������h1`�.�z�� 2�ܝ��K���|��a�|o���2��i���)_�3"���������~�mD�d�v�Z=�'x�T�4�q�cB�*��
?ݚ1ٙ����_"��LxLDH*9������G�I�UO�:<dH�i�c��u*�v�g��,�E�/�,�k��_@�Q�z�L���Xx�b�J��O.vM6�?�C��D�A���*0d�V4<����W�W-81��	C��\J0S꠯�7���P.��6����~�c�Г���B쒛:�"��g7 �{�૨'
֤�b��e�\�vlD{�;�����B:{	�]^��
�P1�=�L����b�͟`z%�A���d4��^��cH�M�+?�N����V�$C�������"� �h�x���<~I ��2�Ř͌(% X!�M�$���D4T�k�
y1У&ֺ�g%4F�`X���v���m4*ׇnϠ's:;�Q�&T��&VjFY�LV?��vl�;�ɦ���M�����[s���O�/�a����Ԟ>�ز�\�X:��,�R`�~*\�4��R��ڭ^�W�^�n���_@#��
�*=V�y��S�k�0]��o�
�������."�|��
�7��Z'��.i=\~��pМ�`�n�T��� �_?.Y�b���AN�3^ۗ[�h�V|?M���}c	u�Չ���VJ�*��B�����ߔ>�M�V��"Z� (�r�~aa���"x���ëU@�ĵ����!�6��5�,����e�`f� <��������}�����t��l���qs�{��V�t�:�K�ߘ�UA]���+&�r��}�+4}:(��QL�x j���R���%�"�9�!�-/2�v��2é�c�)�����E�o�(i�$�<�חi���x��;�}���h/�P��`���nO�g�E�"���w%_�=`�����_B��H�(G����v�(6�z!-�1��!��C��>��R��M�:(;JY��R`'��G��=�k�P´��Xs]�w��g�}�bǦ�Wd��t{0��#����y���>�Y�����
8_.�[�
���@l�!�Y�:'P#m���#R���z��������#/k'�sGH�ϚHJZ��/&�o�#�E6Fl���Ƭ�]}(�"�׋�w� ��D'dt̪�z�1(ռ�'����Y�(>�a~��7��O�b��dvH�<,í����Ӿ�0�~%K�17�Bk��#C��l��~,~�����^
�0�����z}��{5��^jYM��e�j���|/�- ��b�>�o�����ڪa��]<uB(��pa3е=nx.�����)��9�L�#�F>t{�����u�yrr�1�6l��)�
�M�l.����E�K��1�׳�]��
xO�;J3��H��iC���ર}k=����_�H=�=�t���9e���S}}�}�-�S"�*V��Oz-��\�b�cmtH���R�CG�g����'I�:=��h������-��+
އ�֨(�"�z�^ܦ��������t9;�En��SA;�H$\g���#@4�A����3	��TP���4:qUI"da��������=]�F���<D.rd5d!Œ.0�2�b�(�^EPjXGx��4�!��'��I;�٘�.��8l��zos>�� Oyf p��_t GD��]��Q.�#�B�����XM�2a��1�sR�� ve	ܡ�ˆw/�~�#����.P(}�}���n]�}�T��U��D���~��3U6r�6�l�����5d"V�c{���2�2�Ƌ����5rg�ט��1�>cjX����f��XL��>� ��A��镓�� ����6C�گ��3�P�u�PR�Y������֓=?��66�*�]�U��!~�A\_�J�A���L���.�Ka��BL�����m��j�u�cX0���w��V ��j��"��4G�[4N���u�N����AO$7T
X<? :ܜ����&�m�y�v=8� �/�$d��I)��K|RM����q�hH�KwT���A��� 7E�g%�	�Hh���b:aMJ���wG��� �$��Ze�����R��o 3w�؟
�b(z��a�]!�d+��+"���T;�:n���O��5��	\PYWN��1�����֊H��O��,� ���a#�5����^���R��<ƘW�>kB��b/長��umY��c�e`�|̈Frrm�'�u? �?�gz���m�(Yޞ���{H
q�ݻw$����mB�%`1�p���ܐb������<��
�e5��b�$x������\>}A����uf�Ń�>�S�}�~��c@)�V��P̎`����w&
��Y��ֲ�/�s�+]��s���A���S�=�F�= �j}�+�1������A㳋�� �DwW��owU��Kk�Ͻ�vl0������u�-2�d�Øg�"�i���а
�tN,�}
`�P��|VY 3��lt�:�l��@�]�j/�ޑ%*����؎� ��T�^2��"�=�R�.��XD���1x � v �E�t�R���5�0J�½b��*|�:���rh�$G0Td��^@�-��Ҙ�y���N�g��^��|P�m�B?�������a�`�Q��H�Ch<!P�/ԩB_�T�tq�-i�:���I����׊�ӵ��F�4)����}]9���Y	�+�9B�7 #JI�4=KXYr��b�R��u6���' ��u睖��vQ�L!�L��TV�sAa�U/�����_)��;�e��Ct����z�%�^|��~���,���<�|z�z��l���
A�d�V�$%��n���C��~M��11S.,LdJO�}�xGbx�6PpYcГ�!˖ ��Kܿ�N��������"ᯟ�tO��فU�b^F��^�;�=�����=��8�5�cZ�s��� �RIw&��@������d��4�~�H�5N �F�x+�lkA�M�~}�`��"�	�&��`�L����.t�?^�Z0��g3�o9�s����� �<�ـ*>�`T�-�_��)�-�byH��cU��<��WF���w���Iަ'�Q�����j��8�����<萛K�*��?��@���(��45`*}0/��k�`��냣���qdj�)�����O�
�Ӓ�A�U��jޑQKܓ�]_��}O#��ۦѱ]��B4�����-�C�y���n1��H���p��S�M�uu"҆0�O�C�T��T��C��E��_ů�E|9��
�2��UF��3�#�����Q$5��w�����w�`���])Q�	gt���9��;�#���ζ벸�V,4j2l�1��ʦ��a��E �r��!�r���÷�Ϗ�O�N@|�݊�yV��Y 't�:ֵ,��
��$6��1��q`y�\�\H7%�ߔs����swg��@�R���e���U^�C�'��꘣�#���b��|ǴD���;�����
-~=����72Ǜ��[ �����h.����30�F 3�A��ǁ��Rd"���I��}����,��:��`�S䕃�_S�w�3o��k
��X��?�V���
�k/n�`�b��pzA�2�P�員��k�"�
���}j�z���C?�>]�<E�A"e3
���\�j��ձ��(�χ�O������<N�����I�N�6��f�W}��%��5���
?�bDK���K�r���g~��#yF��3K�7ّ̽� +fE)1ض��*�:���%�\&ok�'��_[�1�7��;s�	����`��탏�P���B����`o:f�;֮�F��"EƟ��9#�Ee;Xy0����߳^H$�Z��[� �|󾖙W��
��p4ty��H���V�w>�<�Q���/;h�3{6��#n��	7� t������[P��zcuf�(��d��>[,̸ƂK�3��֏	L0!nUx�¿-�LN���q�$Y&��ut��5֖�sM&
 R�����R��\�N����W1�6砈���hE�$��M8��v�4��SN8��6��5����P�{8,v��Ck��� ��:6<�DL'�j��c��&(��~���n`�e�S�k�q5X~��c�U�������+A
<~� ��6\���ֱK��㟀5]I^l���$�D��������M��&H���c�Sl�L'^���%���A��!�{�)s��������s���T�@Z�W,7	�]GQ���.�ߎ��'e�c���+@%�;��	���36�8�%ġ���O���a��-�i���t�a_�q���\�^�]�ƾ���P�����χ��哣�3��f��G�pjH�`�� [�Xv�=���������D���=p��m'[S5~�*z���=�-�2�r���c�5�ȸu�#c�� jg�<J���?�,��"tQ��<jᨪh.�n��˗]Uto����HJ�*6
-���Լ��q��I%��\�@1v�)�+	��9��m�*�~q�w���I �g�1�G6R�����Wɰ�������
0��gܹ��+l��v_Ӎƀ ��]|�hR�	�ߙ�F�h��k����Cj��>��à�ئ{�SO��
���R�b�(I�-��E_��ym`D������
8�Z*$�V�5�Z8��&}|�t%���
j�"G�bY�n�K͍�+�<jl���$F�8c���|� �NL#ly(t2��t��Y:?.�g��O'�_���@���Z�|��3����gFo;��-��[J*�~�0�9�#��'|���^6��F�g+Y�s��>u�|H�����F�
��];E�Ԅ�QIޥ�E��/���έ��~�k��yyUa�z8{�H��tm���>�I|��ggMT�^��X^��+%�l�����˒�+���Ǯ�c��Ⱀ�8��Η�2?��@P7�͏^
JS2f��X׵ �Ն���:���ͷk�Ե~��US4{I�#.���|eE�T�����M�+�,p;a�V���U̻��U7�� moe��5Ne�c!��)U�ZA��P��*hJ����S<z8��-_K\��R���۶���@2��J_�p���W��qtyv�&��c·f_��q��A]�y�^.��
�FY�A��B���'���i�^�>��'�n�r��U4����Lc0 ��ß�g�_��wQ�z�1����ML3���񢏎�@��qA��Y<��|�|R���A����k�5��*8W�'�h���m��^�(H�~�S^;�K����42r}ٶ�����N)ԍ0��nxTD�$XdL�"���I/2�8�N`�֨� . ��J�Z��ck�hw��q�%%�lua��}��h_ڦ畟`<J�;�ٕ��}s�
*\E��R�l�����TT8H
>��cDB�Oo1�Q�%B(lP��5��p\9*�(�0l&��O��Z�ѧ��Kv���]P$և�i	��P~�d�}�B��vQ-��֟�ܜ��gtd�Y���.B�&M���,�fB��߰�o�nYuD���Y#hE�_]�̛�'���l�_S����m=#���|I su��J��V����FL�*�(��dz������,�Y��N�C3��\�|�lׇ��HҴ*�D/.|��˛��t�`��6U2v1�wr��h��$��$�o�$Y������x�{< �z�*��^�el�6V9P��TW�V�h�ql�r}ԜC["8���8��DH
��Ԫk�f�k���(,\
�?��&~�=��{v���[,\�?xҀ��wҕ��P��)F&�ua�Ϭ�7�?��:<@�4�@�#��;%@3λP��KA�D2�X���9 ���"Bfag����Ec(?ˡ�{ >ا�@����ɾ�]ܥ1{&	�i�Z��;"���u��}��Q��a��\?0��:����|���Z�q؄�ǯ�e�t�kl�i ü"��4D��5���m�9�\( ��_sns�Ԅ�O����+Zv��>У3+�@D�$�M>�A�Ϧ��އp��B����6�?�cXkh�n0���+�ǐ!�<nQ�����=��
�1������dk����C۸�:�$��Sbs���tk�=�
��2��D��D徧~�Κ�c�6�����΍��F�a�%�$��Ӿ(����Xlo��⃸�%&*�ϳ~� q|�fg���ƛo����w���;"4�w��
� v\9�/_'E��M$�+vXأ`�>�<���΁�V5�-DL_v}��R�%3�)a:|rs���g���V�΃���lF���#om^�����Jl���hC�c{�Vs3�/K����ᛲg�L6]
�Ƨs�~�� ��C�QLy=~=���C�^�T����^���B�s���DN8F����
��b��@�	"
�]��āS����_�L��B��ޅg��5_v��i�͚�؎D
�J�$���%�ab{��(Ȅ!,y��!��9
9�b��n�4�4��as}o�����#2@��[SXۯ6�D��,�*����b3?+Ӟ|���GP<T����b�Z�Py�f��H�������W�V����#��ї3���X�ˍ��n�<�uW�������Js�����������L!L�7��d��h�f6���61��ո�~�:{c�~�L�e�>�\,M?)3M��ꁎ�R���?��b�4�ɱ��e
����^����M�$0�jF�2�쮴��[��d�b�
��XH����FE�m�:��0�,� ?�qu�$_a�.b�B@�?�o�y/T�綪�%�	DwI,(C�������#RwHi�3ƹU�~�ϰF����Κ!�eb�Z �*�<�H_DGk�'�q���@��l�o@��j�a:��b����LI0���n�&�T�.�E��Lv�F�1��i�\5M��koȞ�;�Ə:�k{e���$�ԇ,��؝wFS�{(�S�g�H�����" [F+��\�KoE	�y��?
@j�L���K)�:�]=�T�c
9�6����=�4o�(��}�It���)갆ʞ��a`2�r�����:���e�:�˭��W!j�"ݔk�DȰ.:en�H�՛>eb��7!T����zX׵�*��.^ Nܹ�}�2�����xlm�6\Ə�\��&h��L 4�u�n@8�$���䡯K��;r���5�w|�?�0���C���x1Ax	6��������R�-**�ψ*�̀�6�ߘ�>�_��5���ch?����|���~E�D*`|f�t`.���z���n���6_z@���}�?�8H���
7�d��_�[��;eXM�j����cp�\�N��-�pS���<m[�T��ǟ~lx�|Y�7jU7/��N1;�u�D=�$Â�'�9Y`lz��ѐr��+k����ẁ���9F,�(�AtX�����b_�g��.>�����w�e�o)�t�8$�r��W�LS �[�*t��T'�Ҽ��=
~��_b\|�
ҩ,Y��@��RAt�ʼ� �N˙���;�NoqLb�A�PҟA�^q1�09�@t�4$k�fY�b2�	��8�0h����cѦ����Q5
Gvy�6������wvT��O�r��s2ǚ^PLO�F(�u[R	�
0����@�G�]P��:�Ơ������;! R���Q��� �8��G�?gTݸ�#n��ֿŮY�C�S;��$6�'�aS�i��6�w�Qd�r*TU���=Y��
Pwj��fߋ����>e8��Г�{>�>�b�yM+�y�R&�ʢ�2���\	��ܲ��>*���tT��T4_$�}& ��H%��e�b����N����L�)�3��CN6��`���6�=����>��6}R����O)i�ZCv-:��7�;W��~&CP���rσ9��b�kI�m9qiqA�Y��Q�ߤ�bPX��;�5�S��!���<Le�$�	yt�����	��,ퟳ�9��#'�/��֕�1��^J4�D���2a
�f�`����������i�0r:=��"�	�Ev(u���'B�fJh]�����ŧ߷�6�{��r�[�V=��bb��\�&�x�}`֊�ș��)���F&0�q��B�̦��
�LԽV+S��wj���=�7܏�D����{a�6�A��.z�4��*D`<4��8
�i1�d���Y�y�Re��;��F���#@��c�yM*��%��f�v.�9�L[J�Yy���B�����5��63�	��oz8��}��Q�5Ƴ�n^���2|�ߏ����=v��!��F�d<�I�t6�C���4��n��.�;� )p~�v�u�.��
�͗���p�ʮG�v*L�ٟ����R20�;�c��Uʸ/&�M�LS�i��1�Km�G��IVHO�D�]S5I{�x�^���a\�;��n�!+.B!��uˣ$�����5"5
y��V�Ǒn��^
���;N��7�.M���-1�&���������_Q��|v��6c#0�Gy�&\c�Fq��gU-"�1^�y��dU��v��/ �ݐ�LNG+�x���6�)o�ı��0'F�����H�����ݏ����g�s~�����i���	�[����f�2�'�`���� ��A\��e�C�����t
L����
V�#�eL�?%o?��å��"�J������QбF��
��	1jz@����64����>�H }�p��:���hLYQg f��S��]	yS GuK9�gf�ު,��a����a��Z����H��0�_�}j%�u܋�ŷL�NLYV}ZU�o-�(3�x��\���bh&�͗-��Bր�e=W�f���x����^?r�)�W�)q�����ozI��DؖuDDn%S����;�81�c���a�ئb��Y�W6��Zпo���8�[��
�d�ݔ+f}Dr�K�G�l�U[J��yGO�����K�f�hWtT}�n3w,l����֞�[Qo�ae������^|^9�9RV���g�Z'����+b��C0���EH������R}�O�to�0ع�:�C���
����"��� `Ze%E�7�ӗ��~@T�����1�������
����ţb�����̯s��:{`܀�zJ�}x���nW^��	!.k��"�7�_?���^`琾q7�ɼkl�5fwQ���|T�,�¯PA��O��%��� )��b{&&n(���W6�~�f��f(A����Ž�����;��5�Δ�}=$]�RTk�X�;k��7Y=��n: �z����s��8l϶ �}���4��}�@k��¢����c����UDV%Ǖw�
u仼1���ĺ~��(ߏB���o8[A Q��[O�Y��fJ/�~��u,�4f�9iD'������%$���n7\�&����XD_]�r�}��Sdh	��&�3�j�����k�'�� �������x_����Y�ӟ��FR�YJ��r��P�y)���(�E��a��ي�m/�LX0{yՎi�S�ɴ���g�ꤰ*��K꧒��,�6�97�^? e_F��%0�s�w�;e'���R�5�
���_!���@%\����GyF���o3�u�'�4����M>�(�tb��I;��l4���4��ѽ�������,֏�|��5VTn�]�M?ao6z8��p��������?=���~W̐�Ԭ!#
��wnK�S�U�H۱�-�<�3r3V�Zt�+t��ݲo>w������w�2N�i^g��.v���E��&�,ch�&#,M�G���w�2�m|8I�$��6�Y��j�"�~�|v����Y���"@��w�Ijk4�ܳ�p�w�	
�6�8��grs�0���8�=�>��g͐�a���4f�K�f)���$�cu lhЅ�]o��aO�l	��)�i�;����*w�s�G�g'q�g�[B�y�����^���;K7(�&&��~"�����D,��[��u�P�M��۩Ղ7~
��1��ߏ�R��I	JJ�K��pc�*]쪠X����30���v�M-j�P��U������"S>X�d��fD����Ie���Ve\�ۚ�['�Qk��G5�ų�P��g�iV�M>�/�j	5!`�y���)H�����{)�	{��7j�w��gԦOʔ��S*��{4�\lĂ�J����Nx[�l}{$�U<�a{�ŃV���s>��+��bK�4	�R�N*�%��ec��I�m�$sA�w/�T~�l'a3�@���VR�h�lv��\f8�!
_)���&�`Øp"��a5�<=G���r� �K@���p�%&�7���6�з� �x�ٴa��Q�6J&f]kW���y�<�]���u2��%A�{χ4W�E�ē�cG����w���L&���MH�&L��B%��Ύ�ό��F߅؛��P�"�l|N4nu&��y���|v��(�.)����/�Z���A{����=�M�Շ^I���c�㦽��o`��*69�P��:;hGe�z$��_�Fϓ'<=#j�'������	~��+b��Q�y她�YET�̹����wu�_�^���-�_eAӸKW��#! ��w�-$��.�E���e�h"�wC�j/|L����w�-�*�ڡ�b�^�LQ�Jkd :��J��w�����4���|
���6Ge���:��Ɵ���7k���z��:
��f��7x!�/�"��O~�����Ր�˓(b6_GG��~�|$���i��K�5���86��;�p�qz��T���Oά/����%�e6�{�רI���A�f"��
g���j��V���� �U�pj/#�hY_0J��r>�^^D}�s���je�#�D�Tl9<|5�����y,���q7��a�,���j�#4��׭5�ߔ���O�+��U�;���F�ظ|�a
/ʣ�$D�M���7$7�,(�8'l����5�R�kY�L_���U��[�b��];��5f�5r��+��f�򷯬4\/;� �;1*L89�]
�N	�T�����q4+z���e5!�N��8H�)'��/:����� IR�����㳾���W�K�(ԗ>�ȣu�ޫ��z�|\$���^E����[=�S����a�e�@g�S�|�Y�
dhF6�|�+�P����B'�4�GO�UȻ�Ɇ�*�F���,����.d��#\��s�Q����B����2_�0w0��@�
�/p~fD�R�XLTT;��OB�V��&j�I�A����(s��ڽ(�gQf/5D����U��rL{�z�?I��+V�qK�Jj��
36����B�_u^��"���|JIY��72�x�$2RQ�͊�,�'�_���-��v�Z	�������qU���,����T��\��Q��v��L�b6=�dB�a?�q�G�J⾈�=S��b�k�Y���'
mEsr��P�uY�ڡ��颛��#��������H����C'�u�B��<'%��(m��L��v��Q��>�|ܷ_?H󽥗�۴��� ��)Κ��uܿig|]^�y����Aa�C��&��ڒ�_l�\�+���(
A�N��ĝn3�"2��^��CE��x!^AD\QV�4r��ۉ�<���1,����\JKG��5�Lx=��k|
6�J|f":�H9������l���������jt�"��8o_�l�g�ş����z��n�vJ��tʰf�5����w��G�Ai�IaŸ%��ծ�Ծ7�=Ϲ~��֫�J�wE��T_���C� ~6�m~��[q�OP��'��SE��%��U�E�Ј:N=ڪ@��x������j%����h
�\�c���v��v������j>�/�h�N%p�E�:�h���W�P�<�����0���7ˆ@wL��A֬��~�r*D��8-��1�~]��i��϶>}Q=�'�e��6�x<0�,`E�לst�<�b{E�".M�&���TT0��5թ�R�,i��Nf�c❰�� ����쩴��:�s�i
t�-��ts�9�n-p�5�hu��\����}�.3��n��Di���J����rgw�Յ^�-�r���w�~�7���;Ò&k��G}�s?U�|������e��l�b`r�����u���ӽ�C�ϾޘY*�=�`)��zy]#��^�Z�]W��q��K����n��3�xd��Af�d��떹�䓭��M�q�����ҿij��x� @�+��{�:�T�>�U�B5j��|^�jLMk��n��OmhC2"�|�a
�O�P�u�F����t�ٺ�i�M>��\ǭ(�{�Bȳ�d�u7�f�L�L�.�|��@ilz��c� r�~�
�����/x=��䩇�R�1��m�cB�b	;����53R>h_�w��5��쓸i9���S�e�낀���K���gjU�b�/�C�nj?^���D�2�'���Hv���OTš�����MA������Ez�8�B<��mP���r��Ns;�΂]r>��^����	���9χ*,��H�Y'���t	F~k騡�)T`��@�1�26!�#Yho)�h�l�CU�r�X͙��x��'�sJI��<���QK�n�4�Ž����V��uoÓ���q����m��{�8����0����P�>Rw���z����7�)�C[�
AP�9g����\̝�l�?��<�v;/�.3��u��V�S���L|ԏ����d{s�30���wΔ�a�u��;������M{����W8BO��� B��OYTn�H���>J�8P<���W��C!͊ᧆ]a=�+n9��7�r�G��(��4��fG�%oߢV�R~���Pu���U��AT��h�[�>�:������!w!+��ΓY�b탾�E�dC���B#gP�kd�� ��T'R�o饆!F��/d��73�$տo�e�x=^ǳ�QXqwg����{1M���!����([��
��������P?oD�c�(��[ź�f�?#��B���ġ7��
�WN"c'�R�#
�Z�Jd��B+�b��Q��t=��bZ�
o�JT��<(����I�p�͍���[�>Q�j)��_�`��S$�Hɧq�m[P�D���Ḍ�d��m?D�	��te�͖�v���\��c	��޾Ea�����NF�*w(Q����������b�7��+� >��G�}�-����^,ϩ�|�BԶ_��;qSg�,a_t .��a[p']l�6����:��-=|�Jx2�����)~�� �X�y�v�I�{�pg�e���š3=�Zz�M�Gѫ[ܘ-�5Q������.ۋF���X��9[���u^��+\�ڳw����ǣ�f�H�6ք����`U�A���R��9�㒒X��m�[o!x~,�R��{O��]�O�8˸���3&>�����(n�t�N�ٓd��
���}���yJc�*��Ɵ��m���X�t#Yl��}?)tD"*�Uv*�x�F)���v�wO����d?g���j>Ї@�7~�M�|��5~�Z˱?I�oF!�<�իn�����$L��|��Ð�5���s^/ߘ���	u�x�2��v o��t	B�=$ ��o�����Qa�V,�b�`Ә0ӟߔz����n��\B���XIn�:��c	E| w@�-gH4IB�P7�
�˙P��t��*n�P~�Dc{�2�{S�j�|
�a�@���i���^i��}0��Y�zUjO�A��3=�o<�����#o[����A�5p��}��a
��7��M~h#�ekpNC�)\���) ��#a���Gږ�}���?�����|!�� ��_�`�L�-Mk�3J����@Y���ey�alT3�T�s��n7M�ʺ��ee+��W=�v�TN�4A�5H���en1���ԧf�I�랴� N'��<��4W�(f>E�rfw:�oڞk��)�t�쫢���8�cn(������u��3v�i��u�8�;�a)/z�_��}"☉��@���~��7�r�Ә8��Cܮ�f�3}j�u �QC�?�+x�q��e�����a
�#i��ip�7�Y���;;��A��u��@�`�ګ�����Q�?�El�/ʸjܝuA����C����*�پu~��E��h+�VŰ��N�
(�zQe�tSٴ6�F��ט�a�f����V�w���W�?E�IX��m���ֆ ��*㭓Ԉj�R�Ą\Je����N�a+JW��*��+\�m%Q���ze��=�e2"����{f"�1��Ƴ�C� ���4�EU+�W�1�g�Y����{r'���:Q�^j�t��6��7�yA��bMe�2�.��Y"!E�J���޿r�����ϧ5ZA�:"O�F`�S��R��R�q���𖺙z��@�f.X�W�QɌ~�Ri!�l��Q��o�e�R�����kyĿi�>����F��s(Ֆ��#P�ٟ�→�$h�o�����ݞ�e(�	�R��g䡡j�� �TIR�n0�閹H/��ɕ��Jmg�b�]�j���sS�v�I�O(��,���k�J�nHR!|���n�8������:�<�p�����EhX�?Qۣ��c�5��J3!���{ �=���9��ح�e��(��^�s�I?�l].r�6],�S�*$-�NpR��9!w#]�����n�
; �c�F��܇��3ҽ�v��? 9�.�й�9U��%/9Er6���5$,�1�W�O�\.�׈Sg�����|AB���v���g���se�8/�[XtU�#��N�Z�����c���!.����HF�9��Q>���6�|��g�������V�Df�Q!��"�)�d�l�!d�s2��K��F�ǩF���9�fdi@+�ZÞ	B
�J̤>��(,B
�oh���jZ)�:M�uQ2�,t���1F��{,jceW�I�;��N�W&��,�¸���\��a���>j��:�m��i���l�����������"����U#�2���سfj՗Ŭ&c�=~���;
�~Do��r�d���_C�����Bɥ��=��ެ1|�ț�����r�oTkޥ�&[����%z�� 0H�ux��W<wÇl�u�L*�$ɪ۪|��H���{��_��;�,Vw�|��&[௼�~�et�)���,�0����p>%�rEzh����U@�^�����+�A��~���P���*�יj��ְqSp�O{#�+[A(����Ede����@P�c�G��
�Qq��9۳�ꮃv!#
�h��r��&�����ov̪G��z}5ܡ��!&Q�5����S�����<7)zed���DY?������|Q��0e^.����s�r|e�:Uث�-!�ć���������Ɉ�F�R����ߋ0Sqg��	�-zץ-�����6ݔ&�T�ha�gٰ���Y2{� |
�7�dn?��R#���?x~���CԀ�{�������I0�U�G��)FNˊ�q(V������xWZq���p�� N��DW�A�V�~�-L�	|E����<� g�:�sf���n'X���UX`�"�#v��&�:�����ǎd��ĩ��o\# 0�}����$z��3[����p����@� T\��g�9�O�k��~����FZ���nB��n�P���V�
�-M?�	�^� ��F���/��;i/|�4��I���֓�&���}ƀ�+.L���[m3��Е��l��Y�1�T~>��6a�B�7X�����b�m��i�؊��A��5����J��ч|:m��T/�N�&����O֜��M��=�m|����\zTK���~,򷿼U�3	}��7<XlH<���YJ����)El�5$�\w����lf�۞hh��Öi5
.��sӴ�\����I[ ll�bL��������>ƐE�z���t��3�D���14x<��8A���
c}T�긗S�R���������5�E����x��smK6�
`���2�Ֆ`��dT���+'��>"���%ı�5u.RV�*��e�[;a�F<���Wg����E'�{��"�W~h��Pϛ
rr�Tc_}
+��R}l�]�U�Z��i�� c�pP,��Z�p��V�϶|��FG̱�����by�����4�ӺJ?~�Ҋm��Y!4���ݳ�G���S��m��_�=����O��/���緁l<��Y�;�O�K�jJ����f��u
�L���-�g�7n�����e�=>\ߖK����X�3S�#�-Y����d���d7G��wkR�1�,�j)����\��l�Z �4�7ʸn��덜K�#�c� 962y�q>������F��J�����@f�m.ƿ�A
-��QpU�۠�����Ӽz�f3�>J��p8RB~xP���8C�$'��$<�$��#MX���&�AY��dT�"���݃�T�6c}x�g|
�n����ڪaĚv�m�@�9�'��#E=����D]��a�5N�
�"�Dw�u��M$�'l��妟6��qS�"�46{��Gn�&C�>3�s���P[�sJ��G<����m��������Z�4�� �~6wR��f�p���_���Þc�����m�kp���kD����(���<uu��amf����Z�M�R��30���_ߩߋlE~v���
�V�3�#u��M��W���'�'��tv�ػtl8��R�����9�vŜn^!��1��8�tI�3[eO�j;5��h;���d��m�J���?}��A|g��/b�\T�Kr>�dF�\��g��G�ī±��N�19/�,�'#�Z����u���t��}�=#o2M��q{K�6n]�7{���/�e�o�p#K� ��הal����pF�������Z�{��R��Gs���0ro{�P8�����q�1�-E�!���I2��E�J���.��Gc��h�n���xxq{����a�r~��$�D<"��O���5�-`;r��1���d�&�;(�=��lj
��A�'��: SD�������$Ç;0��WG�)ڤ
�A�h��4�B��T��MJ�(�u`�4���K ��\��){�㏬)��!9G\H�f�tE�U���v�1�r͙���Sw���~Һc�8[(����0]>�:��:���o�>�@�a�3B=4%9M1����r�EIGķ{mF�_�w�SIBe��\�����Z�>BBoƍ����$��n�ֈX �_'�'���-@ͪs�w���k�:���g4�����&�G���������bx�Y
��H7�>Cd9M��~K-�`�ݮ�k��B�
6���2u�qU���X���1_<�B9�K�8���b�ŭh1_
meA������?0�{���(���[���{T��
�:]]������]�JYd+����_1f���Eȵ�S�(��M}�����6���"^;s��v{͊t��X���q��|�Ul�\�WH�Z'o�O�.a&�=v"��4
ѐ��-��N�s��'�k�;�ݼ|�y���o�����G�uEG�%�\ߩ�S�?�N�W�ٕ������i0bQd�Կ>��s⿆�/��m���do~"���js�`��ގ������X6W}��x�/���%�Jè[����ob��x���L0?�/<�t��ox�\�VK��{J�^D煱��΃|ڨ�ʡ���|�&���η�d<�+�}�E*��=@��0NN��^�0,αz��:c�����Y6J�\4��C��%�./�� �Q���aw��Ak�`����d��0�M�K�[���D�{�ن�-�Y
�ګ�G�%�G�ʃ�[�A3��L=�Q5�֎�.���3uP0=�r�_�ܝad5�Mݙ�,{ш1bS�0��ۢ�ҵm�o��+������ǢA���j��p`?+�,�8�V3�Ӈ �.�'�w�A�-0
��l������K���|�
+Ql2�K���x�~��7�=6Z��Q,w��ǱKAp�VoB��u��z<�;1L��3��f���
��02��(�=i�q�p�b%��RsT)�Uň�Cpg�x�+�bnz��$�\i��MNwZGi��脥pvV����5�*����Ł����|�0S�T��XtQ���M�8~_w��MY��i2�����(��aE��p�()���?����;�����!
q�_�f�ѝ���hBō`fG+� �r9MV%��P��m*��:�i������˜jD#B�#�$��v+W�y!�c�I���q�6�>��@650�@U�/��ڍ�V?%	ڭ|���B��v�
�93d?`81�Oo��y�m��v~"��X�!�
E�^I�8lK{�'�,A:�@�1�6�6�ో����F+���o#	��k*x��C�\|����ŷ�_�Ӵ���2�q����
��D�4�"�C�H�	4�
��V�?��Op������d��ڂ
��IL���rإɄ&�e� �HCŏlD9�ɘ�_Xt:/�%�R7��d��^0�a�~�!>�_M�/rF"C^��&��Վ�A��"�HE�q?��Sp�+�e����]˞9�2xZ2�"�.5'~ڧ�����K�{鞳�2����H>ͼ�F�����B�A�%�삕-�*�Q�v��K��s�S@;{e^��g+u�u�h��ѓŷ?�slℿ=$�ނO��� \Î�'2@�U�|����<;��w�K2ZG�3��&��`���p������; ����*:n����+_ݝU^5S�t�����^�fpR��=;{��ƍ�����>\�Y�k��G!��$�'���y���v"w*�ïk��
��JS��Ο��7i/d�j\�C�
5e�r�@��j��&��<?�K�^DJtq�xJo[ʉ_�c4�W�e��*f��ѐ�Bb3�נG47�M�sm�O���b��% d�	��Y�����e���݊���dsTT���k0�hT�V��\�7Mçw��[��tv�C���+\��*��������z�d�W���~I��7��Z~E�&}�-�ɘ �~�l"0f>	'l2S�d����*����W��I$bl�d����=�a{�Q@#dY;S��ӓ����̖��|��.%=�c]��r�L�B!Z��~���w#��v�EK���1�	;���������귈��t�q�oXտh��C�z1,G�t��B��
�����hh����d�M��r�eԈ�˸�ݣ�hW+4���O�5��"���:e�|��-���
�2[k�&�S���z9���Xk�oJ�.l��	D�^l�ʢG� u��˨]��q��PVs\�'�+�;��v� &�WP�#zl�{��kf\��v�`�]q���Ps�o �6����Y-��3��l�a+�:��	�B���&m<w9�V�ir
���<E�a^
a<)&�=2�������*Z��v��� �Ӫ�XE��y%�zM���N{�m��.(���7[x�i~t���%ڰ���B38Z���G���N��}S�s�",m*f�XL���2��h�ƦE
�(��X�>J�fl7�B�k�
�S�|^Ț(�d"l
S�DL�O�E:i_u1�E��>|�X���Z����(�$w�X,�����8#��ݜn*�J��D5�Q_�KP�,Ĉ���gbYY=7�K�J�����(Y�"�8��Klw�{���ٵ*w�c��۫�_U��K�
%kBK0�J+�n�8Ri2�_~W	��A�'2miTk�H	�����C7�ͮ��c�5� ؋ZdX���r�"Yڵ����.�+'zf�o0i*��b�c�	�a
��k���<r��_�?:�u��L�8�xO�A=N�P��On������}k�r�<�:�$������H�4K~��+ h��M&�gwu]pQ�\�S&��HmϾ�x:�7>�A�I}�]nx�{ni���F�z$IK]���~Ѱxz�
 �&�g���i�~8J<�e���r%g'Ԏ7էծ����yۉYB@�&���AE�S^��8�Fܯ )6Iٚ���K@\c"/�Mjw�ֹc�+}��]j��]�-+-���}�����jP�j]p#
��u��4� 7�4�sn�x��skS(�R�l%���v�@b/g�C�])����Q4cU?G��Ir��P�y��R���M)�O�:��T]L��`~���g <R�]%�U�t)���g���/�пѹ��>K I��~�S����!<Ǟ1J�J_��m7���R� ��L��z��PL���V8�� w��>�Jl�� ��/���=�ɭ��Y���j(
 ����^��@p�FY#w�F�V�D<*�8^����k���kE����3���#MWԏriő�i�f�>JǏ|Ŝ��:�ۘ��5��.�*��u3�O���dƸ#���V�ﭱ�E��8?��}
��R���<���	��0�^]�g'��d���%qhs��	9��k|��ϥ0 w��s^�v��-4����=D�Ƙ��_3)
GZ^��Ԅ��mmIph�����/ ��k�>�w4�7hG73n�9r�33���?�+�>^6od}mx���:o(yCwҜe��Q��\Jd�{p)���4�(�z-$R�ڥC�ʘZ5�ӹ��T���g�Wb)�+��� _���9�aE�1�O,2�I�L���~b�7���_d��{�iT
�8h��bz<OI��?�I��]� �c��8��3
�1��VԷ�=fG ���(���jt���L�#���[�"����RNqB�o�5�N�$�ppf�Y;�������Yܓ��,�c��rn���Q�2S|N�*ŏ}��'�=��r��1-��3eX�����^ΟU`,S�oy�)D[�җ��7.��TOq��=�4W����=tn��w?W:��?�g Ly!��~W~� ��*��@��x�(]��K�p*ɨ�3a΃�ع: ���w`U�֏��D*�Բ,���UWQ�v}�p��Ram� ��th1�f��M��J�k8f�>*gJ��p)��F4�7�ߐ���Yc(ҷ�%��]s���+���{"*��q���댭@���z��r"
Z�h �eee�ˆ� ᏣYd�������2%,a���w�T��OE�'S^���Z�<�~�bk�E��;P��͚6��)���$ڪ�w�q�)�Gf�����s�͢�r��ye����.m�n�[��C��9���XQ����Uֻ���+x���,�{��Źȣ"�Ѐg�����S&�E��z����ҧ)�$Va-�o��?�V�A-f��I�9�ɿ�7</C�+nz���
""2x�lX9�K#w[���-uʢ��w��V��d���-_���uN���l��y�I�~��[����b1U���)E$#+m��S��<?��{�T�|��P������'~��qܕ]��u�}b�z-��!GlG6e;���;�N��`�l��a�	�
���d���9F$�Y^��J�s�����(�*��U��QɜD��:kkj�@��&k��1�R�Ee|YJS���/tGb�6�!�C`��xbZ�=T6X�ګXZ�q<J�<����=}+n���o!���P���u�&��7���+a�G���p�ϣ�X�z���Ɇp�����l}�뚰뺖@+� }�H�B��S6%��d����M��uV�|Q������rģ�B?D�OVM�0����S$O��
c���@M��Ci���/� O�g��S���L[;q�ۅ�%'��<o�T�$ji�a~>YD�D�!�.�1�"Y��"
�fc����r��
`�bR1�
4n�YP��G������~�̤��k腿�0���,�
X�	��1�i0%|H�ry���� ����돯�M��l� .�`#/C�G�����M��%�hc����x-a.��1�jub}��dW�>-3��/�t���TG(lN�F�&��������
�pж<�3╙���XL;7؉��)M(��à�#��a��[��]K��k����j���l�3{qD��ߛ��fVe2�OM���6��`/<W�fZMI�*��
�d[�"E�)u�.�S��T��ǳ7V��VӻWx
od[�� ����c�R��W-D������i+~e��҉զl%0X�A�HG/y�KP� �6���piIL#
���D)��1C��L�
�_
@������Yu����
b�j�SJ��)�e�^�w%�-V�阳�:�:���t�,�G�'�#}�=�/&�aG�� B�@:=]�D&m�B!"D!GX�8-�o�<b����~`0Y�O�.2!���rcB�(�Y>I����B�;��M?����������ӯ���W�X�� C����s��s�X�>�5^���bq3lE��(���iD�DK�x��d�L���X����<���
b3�[#�v���+Js��/�.�� �Rc^�P�v�#�vu#7�o��p�j'��>���S N�*w��!��kϞPpk?Eue���h�Y�� fb��+�#����h������7e�z���1J�b�+���!�6;E2�����۶�
�C=	~xC�_�f�,
ub@~��,��⯠� ^���;��	`q �9�r���7@���~�;=u9\T��n����_�19�σXF@�7�����|�7@�:=���_�I����~>�g3>��O{쵁�Px�
jBZD��
����Ϡ��ϡ���ȟ��ܞJ!}VQ]��7	&d��̲Xw����u�&��GO��v������U�Tۊ�k����W�Q=27���r)�?
��Sؚ c4��󨦂�->^Q!'&���D�D�=+3֔	�@�c��M�3�͹ �Ӿ�<�*��݃�U����#�+4��)�Tq�L��jҀ�2�dj��)U�>kbY��ע�佖��0P��)��g^�����}�*(Ե�e,H�[���~��S
bt��G��\F5g�Z��lv5,B.�:����v�,�8_[�0��m��Э� ��R���:���j1j��Y�x��ȟ��Ds�p�T@�b?���>]%;|!�������[�[��;�X 37ǲ��{�x0��_��Z^B]k��|���\~S��W�{-��*E����s���8�^%QZ�e5���ى����n��l15�Nm�	:�1+?M�y
��5A�`	V�F����O�J�����Dʀ����C�+G܌Zh�Ġ��j�&���HD�YP� �����'�6_���M�ނ�`����F�����ꢳ!ȵ�?���LrO�;1����A�X�h�O��
�e���6s��k��#
\�E��}[R_�S�IӸ����d�_0[�ʢ�Qҏ�g���v�Oc�4�Q�\C@D�̡�dy�d�t^> �1�X��)�Мi��ӿ��~Ɂʐ��CS���\Ȏ
�h[�.�f�	+7��o6B�����>ت
_@�,QcY�-�q/��5�*.\�8�����.m�s�.Ր�u(�y�����,�Me�L1��w����Q���&��f��(Z����wE���j���E��Q�$�3���}}~�r&�1KP����o��ƞr�=��۾��!_���}e�����R7S^�M
������=����
#M�*�ge͍c=�ɠ�Ak9���%�7�������3_3!���s.��`�Ä{߱�y�\7O:c!�U����|��(�mq9�(����H��e�o�bo� �|4��j����ҤȲ�%�`{G�)��
��擵��[F�w��2�]T���=||?q��Qʹ��פ}8�S�`a%����0,�,�0���M~�����b@I$��@�F7���DR ž�u�R���N"��Z	e�>	�{)ӝ�FS��+_�]��,���N�4#D궞4�r��R�
�B��y:�E�� ��|�9�X�J��!�C���5m�^�O9L���5�F�����f�5����U��l��2r��'��Q�$�3rK@�}Df�9���/w=a�� �q��e��Ʈ �����&��]�Տ�햱Ȥ���gj��z8>��2jiH�he+)��9�Cx)�JE=k���F@4rN�JP� $M.K��P��n����N_�~z�B��%��:��L+?��[�@�(�Ӏ�b�����_�r]������P�T?�p"A�;(�ԏS�B��I���.�1����&4&�.��'
ޞ�N�N6�b� �H�p�`I7���1�:�v�%:W�>��"\F����%��J�j
F�����|`�HXG�d�t>��`Љ�z�&+T˦	�d�
����Ϳg�Z|�BR[?�׼@��	���o�½"�������d������4/�;
>뀄T��al�a�h$F�k����
�	�J�WeW�?��E�5���v��bV�6����8.��
R� �Z:�
c{6����;�I�w�AW�.Xl�*�Z
�G�A����v�!n9���}�������U����P �h����U���a��0
�G���B�����>�u���#�D�6�gBZQ�D���U��e�.�Yߋ�ĪBF0x�t?S�\+�Қ�߻2�^ZzQD[H�4�]���L��̔G�����������7%�|�7ّj��v�����Wu���U��q��I-_�0�r��'��l�$�j�-Y]�Ie�+.���
D*��BV[q��c�W]�~�k�r�@ZF>S�G�x
b��a(���Lq�/��>ǉ��M�/��$}�SjS����=���?6��E}�s����EځJ#�Q�2W/���Ĺ���6ly3�h/)\S�Ä�,.����PZ~L��"��Cw8���*	a���;��� .
�
c���ym�J������q�n� � 0����jD��[̓@��t6 \�%�3tM�D�B��OX,bwQ��Q��X�����\�\)��J7�:{�l��Ԁ�RD-��\�>��oN;��SӜ�	VY�ΈA�w�tN�3�ţ<����`�f�Y��f���
���8�Ĵ��n&�]�ˆ� ֹy+G�$a�6`��}��d��vw)�����\W��e+),���h��ӻ�3��s�g����c�h�G��Aΐn=|���
/z|�gjIE�S��liy�ȼc�"h�V��"��=�T:B��F��sc�
H6	�sV>�6����u���%�)�qf��?�=�95�w��U�qx���g�5�r$��Vɽ��c4.����5���u��̐퓄�U���g��r��X�`�� Y�}�b�={��׉��w��ڭm�+�D�(��c�9$Gr��a(��
|������p��]q��<D.�/�'
����D� l�Ƒ6Ġj߁��dc�ڋ�����ւ`߰��L]�:$>��'��v���"�_C�O�qzG��c�5DŖq�}����� \���Eʠy*m���/���
��+�=�G�<�Va]��-��mI�qj~\Gu��7�*���=��ǻb�r9�����4S�u\8b��L���%~�O%�̥��u�B���v�-�v���I+��K}J8>�`#!�Ͱ����۞����9t	=�C�)6�=Â��O�}A^ߢ�m��`�ߡ�08�o�G��s��,l�閻��v=���dYh���A����X~��~ef��s��8%��?-�*"���~����
$��̋��K����0�%�\^\�nk�sar�W��_�4��g��
�����5V��Nu���Ǧ�8�.ܔn3�w�c�o5uY��ހ�Q���GyT6$cI��f�]Y��p9�-Ňx�҂
��*�q0�-R� v�����
[�;-�`.n�0��Z��A�oc��+S�ԋ��41�G�S�қ�Pٮ{�a�a�ʹ�}��9\@�vC��˛P���þrB�\XL+���b6�9ZrI0b?u���IG�8r�u��!e��4Hp1dz!�*!�sn`}|���x�E�i1����'���f�'���}��\���{0(hV�a��R]A��T>��]�&4$�B����
������	�`����!�snO�w���Y8ϵ�4�\H� D�j�-�x�s����q��"[Y��2%�j��!�"�@gZ ��6hvWp�i��*��A��t��� �fʱ�\�����- %R @�a���6�
�؀��tk����F�{<����gm��cn�틻*?L�6���.+AO��U�a]�䄥�2��B�sC7e\f���n���N�ϐj7g"���Q2D�e��8�����M%%������yT�>���<NE|�bȺ�o;��܍g����	���Wg�>��[���Ջv�����X�lR�\���>AR����D���n�[��x�m���"�\�'�r`ݗƏS�u$]-�/���<� ��x�9,_7�
݅��P���]6�ܞN+&���׬�?�������e��_�Rm�(d�A�C�8�ѹ�؊�:!�!'iThW9���/��*�G�>����#Y��]�/n�M��y'n!M��Q�?�M)�+�đ*���u�.���H��H�)�m�/�c
XƮ�Z��}����T�U�!U�v���fC#<ٹN��`���C�l�E�W_�����3������?0e���~��/�ڀGԔ����w.Om��&z]}	w�L��m�5#��0���̓oW��P�km�8�X<N�fޒR�r`�-��^�ml����5�5�+���?QA�| olD��7\B�F�~(A޾�r�ܴ!����@���#�u�����)��h�6�78'�o^���}ɟ=׊m���O��\D�*�L��~9e�-f��ڀ!\D�,ǡ�Ɩk��a|�����W��������+��@�'�].����$e�EyfO��;�L	�W�z~:'��>Kh�^p�=g��z/A_�S0I_��>a?.�WM��~�����Sfh
+��}e~n�cO ���s��@�k����|:��f�Mn�Lp���y�L4N�jw�T���FQ��%,�3Y;�rEu�1r��bP_��^ҟ�䏶���*w�><���m���ww�α}m���Z� $	QL���;@�s��EJ_���짨��EdN�n��7�7��i����*[d0@k�o��n �9�w�2����`x�)&L�Z�##�<������w��XDli_�LMOr
�qKh1�vb�L[��D�H5�gB�ݜ�E=2���^|�I��
^�O�zx�����Aw���y�i�>���8P��+�|)�-��v�)$ O�<�HWe �����h�l��18Z�Hn\��I�8�|$7�'֡�dQ�4Q�w3�?��l���z»���g����jP��8��m&6Y#����x"���TXY�o���ClWK$y���o� I����j�<��79Q��+��C�Q�R���Tgdpv�*en��s�|�!P�Ht4�.d?J�&sm�=vT#�j���W�������v~���c>{�����H�n�w�=�U�0� Z��	��Yn{0p�
�E7w'F����'����K��wyl�tL|���"ٻбm�"�, �%��eOD{��ѕ:vZ���Yf0�}���o�i.�����}�%h6u�}�a)6�	$�
>:���@���d���D�7�C5.d���%���a�=Ve�Zw���0f�M:��?̫����t��~[:/�˛+�?�ʡ
���J�ik��D�� M7ȭ�X�jW���t�pUP-�G�Ƅ���3w��{��iɰX��*������o�"���oT"��Wo�>r��p��P��������L��7�H���*Ez��[�1�E`�U^�����6e1>H�'
U>B���b��h�1�Ɂ=��x^��&'�}.�"���j��n��kƐ�J��_�	��B��>`����	w]`�2zC �V Y\�ઉ�k.��8P�vGPb} ¥Xg��ԯ��y�b�@��k��6FT�ۓeb���գ]ɿ*�I�t�`��Dx;���
�Dn�	:��ՙH8Q��%�}�HI@�"ZK����Tv�|ֿ�`�����GC���73��g�!A,�Η���Q�00�`�A+f�0l�O������X}N�w3�)6��!��ZLz�)Q���hK(�Ϸ�2 �����L�fʤ}�*�a5O~
T�7��T_ �	�ǿ�u��,ۖ&�3pu�S���md���&e}��S���Y0<;��)��v��U���~��Y><L#�Ս�iS��g��V�ޅ��� a��}+�V~���ZG��P-���@%<��3�CQʹ� D�`����vme��s2��<_��z��<����z��8�j���I̟�y����y�����(u����O��ð�o��G[�h��a���"6@ut��l��e_�8���6 �C,]JA[fmCܞD���i�`
�Y.�����������
W	������X���P��x�tJ�8�����BA!�K��Y���y��Ԝ�Fc�!,�a�2�����K=�B1�K5JS�t|{Hb'��'wއ(�(E�>_�}��jɭib*�9��Q^ӬY������|����!�)yo�sJ��F�a�~E�	v��`�;��)���"j&L��&�HA�g�͍E������] ^�J;�{�p;�)�j� ����W=!�>R�D{��Sk���hxu<18L.���Kg��a��F�w�U9v�]�V������%԰lb����$��o���a)�Z�l�VH!�������������\-��������.�N	,E��w)��TwC(7��}tc�w��vN̠�)}Pf��\��ؾ�r�mB��!I�x8�
�3�}�a��o�
0���_���=GA�G!(r�NmG���]�5�3�Mz:�O�p=%�����Z�7����k����(��R�C�)Q�k6���UC@���h@���^-B�ķ�>{�G�F�WF�K�7���c�]=I���
X��\�50:,��4WkQ�ٯKsYZ9T����� �̇m�L�H��7���=N!�}�~�������m�
�h�KjBP)�Cs�%6��;�5��J�ߖ��4*;4gz��K�HZXqpHE��+�q�ݑo]8�����j7�����u�R˪3Q��ry=���A�s.ྦ�4I�~u�Kv��e�0M�)��xz�W ���iH�����AL�Z��Ћ�V���_Z���O�� ] wt)_:�~l�U�t9h"��޽!׼��G?1(����>�� gnIj�d~���7��Fy�NU�-\{���Ei�h���A�k_8.3���}a�0�'�:�L��6����"���Yݷ���uź�̞�i�O�$iP"�]����\�H�Z˥�6�&���sɡ���z�d�Rp0�<�<�kO����^�2��O��c~\;E�I�{b���D�t.�H��W������H�T��T���$d0�V"�$�!<u�s���?Ie���иBHO�����vſZ�O�̄�a�읰���|:H��Hj6W�k�n�]��E�����@��z'�����]jS�~Nk�҆K�#J2eS�|zjK��H=�ǖ��g��4���t~�=�`��!2$'+���	"�b�4SțFb|��XNάLOk^6���%�3�P�⹬,��J�$/2Y�	��qc'�W�$��8lC��:h%�
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[22]=<<<'PACKAGER_GZIP'
�      
��ג�ږ�w����
]���]�Nu���%<p������ZQ��dF2I. ��9�7 ���_����ȗ���
製��/AF������&���_� 	�����R6t���Ey 6���BΈ	��D0���Ȩ�}1
�����^�@����dbaG��O�3HsTL`y��b$˺��,0aw���)���\�|U��6�
@Q����_�殀
z�t�0�Z�e�*�y�v�_jۡS` b���34Es&cZ�M�e-^�R�K�Ut<0,@����#h��o*�'=�F���{�C! 6 ?���D��0%�EO٭�Mh���eJ��Ceju�?�>1��S��07_�X��xz�o%]��~˓�i�Q�}s�eu��I�����&��0��#uc�6r������0o����3*�s�-^��TP��[i���Xw7�"�Aሎ^KG�{�#�%:]C�{yȬC�c6{~�A��ע�����`��>�u�"�JJB�3�� ]�(�V�Ƞ/]vp�����ܲ���|�sN|�&P ڻ�ڂ����s��8���,>\��b=t萁�[SM\���"��f��P%��MXL�_S�PSzt���Ґ3�gV�68���ʐXw֔k�.�ł ~����!����L
����\��5�0�t匙h;}",�vx�3�U�����f����e;������"��:���!�
	��A��=Y�Q�j�@7!��+[-�Dv� -������oP.��]b]��2h��rޙ�.Q�V��؜�^���X��9�0ö|�Ő��`$oض����)A�oHW!r��1�yr�����uC�3H%b햛;�.�A,�w���C���J��e|e�"��8^i�_{b?�/���78Է��ꈬ������������o��y�"r��v&�^�ѝt�p0�}�<���7� ����2m���ǆ�U���Q�GY6���F�99�O��^���6!Oj��ޤ�L�n\37#��/®��������Nc����'��ٱ����|)�N�ҏL�[����Q�~_{󘈎9ۢ6K�+{g�e�Pb+�p�7G���#_O1�NwZa��Ȅ+l*}�3$o��n��c���އ}�n�OUq��R2��L�i��S����$�gP/�%G��Ě����\���n���(�q|0��p~�麉Y:~ �R�Y�]zWGe�:��~��h�=R
o���T�d�,)c@�D���Q���-�vN�G��������	ִ[
*+�R�#�R�+���_`�9�g��3�t!��3d�������FT(�����9~B��i_q��5p`ܓ�9D������1EC�w��vO��$�6=?O�^2�C�|>��m�Y�8Dd+��=��5��Y@��A�a��:���8�5f�-0QO7���B�� ��hf<�T|2�ڂ���q���ޙ
_T���B��[��c[�'���E~�`�D4��G��`w�����	T$�<��2��#�!��3�����)TW���ƻŧ����'���7K�k���"�(��j�%����*Q�
J?)��v+�SG���ziD�;c��X�ة]��q.�lp��b�A����Ygw��`q�������D�h<a��4�d��",ŀ���?*M�(�nu�K�ÿ1A�\g	F��[Yح%Ѐ�xM�t��W���:��.��m�+��lï�#�8r���UW�UYkc	�5l���>;�)f�㽨[�}�n[�]�T?/�ƜMW&�h�<�m�aГ����.�ľmP��U�5���.��Tږ֝�wɚL�0��
n�2�y�G2��[@n��g���a�6���H�� �.lOg0��^���E��lb��
�/p����
�tP�^���WB��C��z��+I�4'W���X\{e������KV.�3u��� �rv��'�4F����-�~G�w�ΚЇg��-UM5L���1A9a!yט�Z��
��YPg}�'�8�a���M�f��nrU����B�7 �̍jg��V ,%2���l|�߅��Oi��ʿyIw(*RE���p�Ǒt�pW� GR��xc@B�ĳ��%ϰg1n���{��"ot�~����*���ե�i�N^ۈ����[%�eF�I�o9�M�9�`i��|�G��=��4��������2���܆����7�1(���
4An/s
o�1`@�[И�_�d�1"��X������}m{Cx?P?��z������r�����1����R�>��d�����P:`쟶%��d���G��~3�rm����;I��VT��R(�P�u�xB̻�����T6�p���b�iZǔJ4�X��{�����L�T��Wv
�Hy���I�m��=Yd"I�N�4��ˍo��t��b8��Ӳ+�1����P�P��-�)��N��̤��?.Ϩ\&>/�q���Dʾ�bɊ����Y|���t�*��d�m�P�*�R�"��_�5:k럧�BY�sWI<��+�4�D�-.Pa��;��j�9�Ֆ-��+��xb ��I���2Oڍ)>f�����}򮃁.(���[��l�?��뚠kM(��"�7'	=���F����;��}l��oA���acU�M��E$�7ݹ��-P�a��T���a?�!����K���+��}դf�t]Yv��-ҝ�U�*_�\�~�OW�Y����VU�KvK!�N��4
��~0��Oa��KT�P5�f�����e�ш�)#o�T��!�:�R���^��A3cc�y���0���d~�����v�woA۷�f�:J����ݥA��<�Վ�"�s�52t�L�~cLҪ=�|���p��Um���*Ec�ih�t㤟�R=�OȔ���Tk�9��Xx2�`	�k�5v��`4A�c(8�����������:H�8���)h��;;�������_����'Z�d��� L:_�d>C��� )�)J̤�kAӎ;8��h4���4�w��s�h�e����H�*0N�U��G�6gA�cƷ����	 �z�>�GP����P.�L8H٫ތ���)Ǐ !5�_z	�G�R̭��� ���<����ecd�6U/���q8 �xAd &���F�I�%~���
4
��\ǉ��ө�U^�vVu�	��x���tg6٫�Yykj�������Ν�W����Bf�%Ǎ	la0x�����?K����ħ��e���)]�S��OR���&#X>��D���R�Ώ�E�h���4mu�>��8�M���wuo���}�`?]�j�����Ϋ:����P��u+�W�|��z8��2zqV�A��R*��O=J���E�P���;u�5�#�ٻ��e4-���Cn�(л��ъ��ʊ�i>�=O��P�O�U H}W_�X�^c�U:W-:�Uv�&���Tns*��*��&\ױiՙ�i�r���jr7�.�0�]�
a�/3V�kT2M����׉]�X�
��^�i戰�	��-	�6�W����K�i�<5��l=|��N�<�^�h*�*�*wyܴ����w�V��c �@=��D��O{rye�Y�N	�ԥA)������`w_L=4-|g�v�Ƨ�q�3�[n�Q�o×��¸ ��-��tw�M�_9��gE����4 �AUUGԆy
_�fTl�t0��>�#|��T��nq;�K���f�Ս�rB��RD	x�d�����gN��J�u�i���¿0�B|�z���ɩϱ{O�`�E&��7��o�K^5Q	V&l{1��
ƿ6c�{-�9���)F�o�ı�������:�iװ�{�H���?��N
tQb��1>i���^��-�x����V�+���7�I�i���m��#U��94� ���f[rݼ�:�_����@hH��B���,�
֮�!
��0,/��/ u��N��"Ou�p�RP�����Oi�G��q��G��
�a�<�-�R��V�3���j
���	��ǃ�+i`���Q{�q��"ۃ>�"mR�#���L���hW��tQp���L\�NT�\%O�����rc�����*�?�������oѝ4����~HdPpm
B&�I��HO��jY����ZE��t�ħǾ�04�rᖊޟ ��%->{��k
3��ET��.���������,^�eĸ�|�����K����� �Ԟ@�gi����>']aڝ 5
r�?;�����QYR��F	��%���\��W�iݑ|N"��C��K�ѕ|�p��{���D�ʉ
��i���(��ײS<����P�3T����~�\Y�`���$y-B��vX>� �L�_�̝�:���>%Ѯ/S��L�w�b~B�^u
��Z�_K��D��ŷ�a�J�r=65TDg~?`�����i��� ��*�"��	�LS��-��8��߯=��"G��z��
풽�J�J���P���KR0��R̨O�[
ئ���w�|8�FA���T�1�c,XW�X��o�1`p�6lp�
��ݴze��y$��_�Ǵ_9����?�b�x҇��ߴ��~?=zks�H�-���/���C~�c�� ���eK�@;���b��<��x��V�go�G�R!D0���]\��{�8�1�5��/ڋ��x����8���B�[J�y��"�sY�W�(M �X��T�/*�k� �fm'ڿZ�?	�2�6Ȗ�B^"����#R̵����S`"�l6����~��:էC�xu�����Ad�weij�U�:�6�6R�}�U�-Z��>���Ĭ3��� ��a�!T���ks�j�ɽ��ȧi�NQ�>��<�w@���δ"���@^~	��o(�DpxN05�e������Gf�y^��X<_(H��D��������$2�,|�8WL�\��|��Rq���]=`͠�O!����ER�DO�����1�/��{��@9Y����j�{�h��4#�u�Vn�s0���������:X�y����[��-�a��	2~��M��j�%ճ���H�o���R5dBg;�v2a�������0!6=&G��l�.�q�����2*r��f)�.�S�W�w,X���a�5qE��g�9	:��1qQ�E����ް��L۔eO"	���Ҡ~�g��/|����+T��R�2�HU����$�s[H0��]��z��i����=�{�t�<��U	F��!۳�`����A���*���V}h�Sp�(�O�9�{@S��zZ_��aȟ�ٵ�qe�ca(h�_�P�����8y���#x�.:t:��Y�W���)�"t_N2|~����ѯt����DҝZ��w�I�"����'�M�����34�`yƤXh�eP��Ga����s,GHh�ã"�����Ƞ���t1����P���,�2]�.��Z¢|,��f�-#��=��}��c�v6�ӛ���E'KoL�/!Ơ�&�1��N�3q����?�i,���B�����	]t��2�-PY�Z��Q
 ]?��^S�G�nʔ��G��`���w�����݃�3]������cd#\�L7�R w��3�N�thrw�����g�ǣ� 4�X��f�5�\+��h��A3!Z2ಟ���K\P./���{
��^#dPl_й����S�~�W�@�ǥ��%���}6s���9���O��C�]��#�;��O��ֻ8�~�9�
]��!�&��j��*�]�(\2|�O\=�]=�LS��п��D� o!%?�a�t}Ć���@����)_P�^�r �������B�I��$ל眰�3@�!��1�������6g���~�y���4C�|�D�9�R�ܿ�@�%I�$Z�*���
]w��^�5���]�=`����
_H}4�9D���`^G-M�۾��u~�,B����$���"�纫��{9w���/\,��~�r��k���S����rm�Ι΄�M�Q֢��%겸}%:I��U�#1�m=�<�D_0c�:4����6fJ�*�g��/-`��TE6Ӻ��W�|���r���EvY����*�7<�`���K�1�O�{#yÈ^)�vm$���	�d�zø��`�#]B:�Be�5�	˖w������YҾ�KN��k�2�/����&�)�v��B� g��͞�{�;)�$�Lzv�|�`��S���v���L�E8�2{l6e{��G�A<�����n4V�����f1,��榀$�^?��h[ҪT8M����F";Æ820}F�cQ%Q#Ƈӗj����AD��\+
�*��~������ٱt�Im��[�}���XֱlX�B]V��7aYEF�����^���F�{SaA�{-	k��)@FT��HG���ʊ�1V���[/V��`�L>�֙��K�ӘrX�q�M��3P$�āŝ��-�7�_�;_�DV����)�ע���݈R���3�AI�퀳%��Y2�^�6ꁓ��:k�I2�����hu7��?�?�����R%R��ҿ~^(mc�$s긍GY<�I�~�8V�r�{��d/�Ҭ4��H�짠�uMN\CPcʼ�),Z�P�X�g�4��=~.���<N|�+@�٫J�+d��"
��&����c���:4S֣&h3�-z�p�#ݸ?m��m� �U�yh�gx��@�z��}�Ɠ�k�4)�9.�责DI�#�P؄U�YW߁��Og��zT��C��3ӽ4y�̓�X���0��ŁI3M���0@����cW;4�GN?G���TD���% w���7�fP�e-E��j:vsy)�`�g��l�_���OS���k�X�s0���O$h�d�BS�!���,G��.��Ӳ5$":���Ӣ�?i�R��WC����i��!�P�'tP�/�\��+L��s��#`�Cd�z���]㶕>���W)�ȋ��R{���JO�>;˸dx흵,��~��aJ~��1}�J��.+Bp�x Щ���#��������T�;�v�k(N�t��e(�"/	�K����˯��Pm��2����1�Ǽ�*.r"�gӜ������K����K�= ���5n횬��S�Ǔ"Dz	p����>�Uf;؍�z��������%��� P��N^�8
�_i�m�p��J6/C=��O�q׮Ӈ���#�;5Igs����~m�<��z���y��p�Ƶ���z�;Jx��-�Kmu�:�}��n��ӑ�̟43 )���UA��`
��}:ڑ/��)��ϣyT׍k&k�[r<������q���
uԐc��M������d�cJ$*���6�����������c�M��Q��c�)0P���pn�te?�#�`�hs�ypY���S?JY;����k%�LGiT}�!3u�6��>f�����Ss�)=��	Q�GPz�a} �_��*��,�t��u���a'�}D��z��1M�{`���C xw�8�W�I[��rی'^��Ꮥ	�s�����5��D���Z�b۴nh�F20A�#�hs]�fsChbX?������j ji HdE}�E"�
S�4�Y��P�x���]�#�����ҕp�pp��B�3�l.�?�q>!8��|a>��G=�b�AL�,�n�83�0����t�E���mť�kz����3�@� ,3����ׅl�䇐��?zW�e^�����P�
U���[L����Ɓ:�c5�ˬy/u�T؂]��}u?'A�3ŖBI���XiWך֌�_l��h}�
��s���t�i��] ���@�<�қ@ϡ��3��G��d�f�1�tg���!a��/�0Cб�/�ga�pB>A��tI����t���06 �EƑ2f,����R�("J�b�f�tƠoU������>�p*�(Ym�U��粈�����h�
�E��� Jj�$*
	�����ta��5u�F7�<�+��?9ʫ 6�!�����W���т�?��>B��7�"7�]��(<B��ՉC3(}D9�
�ͫ�H~ŘWI�'n�ă�`��/��������?��0`V��n&��llx�D�􃨧�����tܠ��>�+1�1
i�c?q�����3��5������hU�q栾�]�u��o�����W����S�y�Z�R��Jq�����N��q9�����k�w=}���O_-7<4P����I�?��@m�g�Y��"�iZ~�=阽x�k���!�oblvf��U\�3�[OS�5L?�h��]�?
p=H68���Q~�{���W�[�� pu	��p���ӽ&2��O�bqb�rSyTw�Z��^�e�+���F��E|W�6�y%���l?r>��5���E�TK!�_�}�Q#��%j��CV�C�9�~���=q���ktbLɅ_���%���Ȕn������;7� 2:��B�T�l��Q'�3@�����C��� A7�F��UOp�=�b��0��%ң[���5��k��[�6�ZЪ"�f�����4���1�G��#$��K `�'V�����Ј�㲎�
1l�u�$_�P6]҄	�?����O�vT��M��V�4��KC�4'&�Q84q��k�`<��N����d���(��l�`����+"V���(q�O���r�'E�@ɤeb�P,z�f��(2�]ak��a����E]XrTn�'�CZ��DZ|
�K:*�õnJ�?��xn�tơg�����>{^_$�v�>o65aUD�?�W�y���ۏ��{�h�1pt��C�jb��%��S)2?T�����_���"K&�4B�Ca<־,4M~�nm�����OOt���;9n��$�Z|&�f�m�9��D�X�u�,�'�c��h���E��!��fl|��L��:Ķ�m�i6���w_XL�� 
�n Q>�^3��E�%�Z6җ���R����M6].}a��_zg}Z��S�Z҈#��a2��m��_d�;���fnG�	P�Fܽ@����w;2t9 U�,ϲX#:�Y��̤ �Og������5/mR�vA)�%	W�4r��t��Q'q�̞��>+�.�N��m��V/S8�]�]]�0˿�,���/��G�&	���al5��!��#Qb��+W���5p���AQ�ǰ	��+�ʀ�v���#_����J�0%#t�ϳ=����X�p�#wplzf��'CWJ$��"�6!kc_?�H>}��+}q%��ǝ�rX����Ml�0��k�!M�E��jNW�~-}��w<p�<�+~h=ᤑ�*5��)u�PZp]_x(i�o�x1�Ƴ�Q���l��9��79�_{S�	�(,�1�=�p�(�
 U��*���g6{�V��b�:S�y�#��Ke֫Ʒ
��	�����cw���*N����������*�~S��h����-c=翑�Ι�j�;����.p��.f��5�|,�}��4_)��D |]m@�]D���]ؐ�)L$�Z��p����|���F�s���,k4�U@�
�l>��K���C
ψTP֏��o�H��H���Yy����^Qg�߰=&���JE 9��^���-]o��LMtc���<�_y2�LJ�)_���{�i�.�2O[���n�a4�X�}�Ɓ��uN�v֩ ���������ew~��&����C�,s���$O�W_	fj6U8�ģ�.�3)�ӀΎ9���GR��Z$ǅU��4�K�o���؛������!�����!;0�>A�*=���d�_K.���/D��b�'��+0e�f+�I��dn�SD?�LB|�iˁn��[{�67V���ա�ALֹy~O��m+�	��k�z�\ ���O>}4�;�T�O4f��ҟc*c0��|��:��5:�p<����n�S��fF�Y>c�c�=rI{��!�K��^��E�Z�]!M��	��w�	A���I.��Lm7�C�H9=_����,���V�%.-�l� �ϩ؜tΨ���D�g"^U��~k?��#9+�����x>��> ��Hr�(N��+S�t�%���V!�ڳ;��9y��^ŵ����/��wh���,��l2؟�qzaĭ�(��w�V��2�t��m�򢐄'���2!% �p��V?��a�skݺ�W��<�#���IV��r`��Yq�O�sE���Zf�7�
��DqY2tǞr���i�ޞN�����_��[��~�4��?�O���v̱��9�rH-�Bq��QH6i^\l�*������<��n�%_��� ��㯪�.���-~r��{�+H�`5�����'��Fy9���᷁�(�ߝ��~y	Io3�+F�"^�n��c7���B�����c`�ĎӰ�T����U[t���}"0�.��h��v;Ob� �)M��LZ���E��SsM愾�z���v��5�R�'rbS��:�^���^�l��@%�Ps���-�;��N��g'�� YT�!'�|(0�&5\����>P���yɒwl@�ߤ��Sx�A/�{P?|�Y�8.�ˍ���i,��9����w��I�!�k5��&ۑc�W*"�H��9t[bo(�a��m�]��$j.0���6�밈�f���������x��<ީڱ�/�J�<%��/�dd���{��dv�^wȱ!B�&�4�ׯ"^V����.6�0��� үN�U] ��{�{;1u'��gb>�����߮K�i���|�ROx{XgM_�s���
�]����d7����[�)��y���Gܥ�t�dB�{$����4�_C���&�=a�%�t�J��ص�U���j��~Ց�t[g��2��&���?�J��8]0�.����(�� ڞ���J��W�2��O���/[ E�����'�$���*[pEP��z��՗��WG�n��P��˦�f^�h����%��E1���$���9�eM�t�R��3[M �|
���P�5
�~(8.�5��f"B:�2�A+�t� �w�9�*,	+ۯ����e#ƙGKS��Jؘ �!�d��LS�_�a�/q��ں��ȶa[Y�N0񆑙/�u6o2�Au�BL)C�ʏ�M-�e0F#�v��Q����X��ZN���fi���o��5��:�۲O�Ӏe�7�Y�����G橙��J�n
ހ�n�&���F�7e�)Um��C�-�o	��I~X�c~�^��~b&5gfB��[���9q����˞��9��Zy�g1�#���T{˃-̘b��Sϝ����x�������˦���N�A[5s���l"���g�q���!�L��[y�:�a9(_�����pw@�������5�9�[���#@�Gܴ���N�Yk�gK%1����^��E���52\Ń�s�P7aʫ�z
e���,�?-���jD�=��,��j�Oɧ�(j6����2$�x�b;{&��� �f|�!����?ί�Ж8������G�ب��Hu�Tt����Q׌����Rz�j1��|�O���Y�_�y�������$d��&��1y�L
/� ��ؙD-�o��s�S#<�e��vd�q�1S�g���FD�*��VN'Db*�����&]��%gB�;~,���|�)�J��G�@d�@!֯��5�˨�z�>����'M��w_صp��* ��x&��]�J�;^[哈&ܳ�z�}w���rf�.'L���ٚ���GIǛ�#��fa�3�j�,�]|\���$�RX�h� �R��_�q�z�"[Q��%�2:��peL2��W΄ �����D���C�j�ړ�0�D�:I��gO�R���}c��3��*���uq��D%�M�5��I���l#D"`To,=�(��[���Q�DѸc�����Z��5.��*�3}T�cwoK�-w��u�b�'����vg�e��I�nZ�����蓸+GR߅ظ:�b�@��5�|G�r�/�KB�Y�;&P=���@�	��6��M�*����j+r2Fwd�HM�+�t����]��x%��ː ����OEFǝq�㢅��c�>���k2�k�|�ش�~�~�U�-��~U^7I��<�0?��S��U6e[��/�t{�D$�Ր��pc�M��|3�x7�L-�K���괅Vln�(2�*��̈�J&��ȑ�H���*�E��HB2W��qB��t���,p�y���?���к�C+��J%���X0 ��L�ul�_�e��VQK���;c���#�za2��%;�+j�Թ����꾛#�*Άu�&�G�ߔ}]���eP(�!>	�4��ŏ���|�VE?Q!_ѹ0TA���Ȧ�bsnoW
M��u6�X��T"ט�W7�\���6d�=������#\��Ɗ��?0�����t�����Qd
�'YW�(+�����l�\�̸X.ϒ�i
��F�YZ\�o^�T��5��N��RI�p7^��qMuc���g �=&O�λ�c�۝�MS!��ϠN�]�^�
�sZ����{�{���}dGݸ=}�wJ�>����°?�f��&����8u<b
�7X�Ug~�Z��*�튲8�ZH9��ӼA����$ωV!n^;1���2����$��+:	���8JQ ���])���n�5w��川b7�(
��e��n�|�d�E���eC��&�|����h�I���������;� $�G͵Ǡ�ޕDCB���4m�b�421ki<jzo������[QF��/Lr��~�:��D�˾ۚ�+=�ӆ/��$߁%jI��/1s�	�]g [G	��~�D �_�d�ޚ?�1u-*����ܭhc�O�تQ!:��L��]��,�5L(KH�J� ��e��ѥ�ȉ}	�BG��������7�](4��Gn
Q�X����o?��R��)�	����n��*^�ZT�����VD���Q�4�m�
t��*ci��b'%R�q�gv��r���ޒ�tiJ`��E��W���.t����>�K _T�ޜnp�K���V�G�w����v�M�.��S��Os�]���$|8��=��Ԭ��+�ݨ}d���.wR���&��c2�}�Ȕ����P+F��VeAd��`��h�<�Qk_~�Ǩ����2�G���<	��U$���L��(�l��Le�#C��m��鷕��
�+���������
�l	D:=C��OO���׵��/X4x�;�����(��I�r��R��R�FV�-@4��=�-q�l�:EtI�`0�ٿ�t��)ft[�r��}�V��q,�ҚM��
p�GN����V9�Y	i�J�9yT$���b���-氽y��m{�Mk)r|��i��Θ&w����\?@譫�v
�.`��iJl^KFpPq��� ��K�p�u�
�T���Ҿ���y�4(�ZRO�,��y�CUҙ�я��#������H�f�4︅��-��]S��׫��3,��n�Q��YO���v���Zu�`=�Y�&�E�}�!�/��p�0� ����YA/���{�=+�N\��D�4��&�3a�3I��ߣR���f a���q�C~MTpbM�����V!���>ۥ_|���]���$���ki�H�k%7�D�09r�oD�	dr�%�*���R�wg[i�.'��{?��Ga_�k�CbXV��&lmR<�c?<��I����Q����8�(
ר�25W���/����¥�[Q>�Sp����}�u����h�7��y���B�8v��J��pP�VM(�&�?��ٿQ�-(
�8��� �dA�T���dC�0s�ҙ�Q��RM
��Ӕ�(kV�A���x��
��_�$j�C�]):�o5�M����s��\��M>UoU�H_Ve��8�&�3���ȷ�&������x�f��`��0�sY�e��^��q�^����NU����,���K�$G�,6����
r�&�k�ǲ�}#���m��
���=Ks�{^�����9:��'�0�>z�!�wB�������@�K]J��=g�$@σ�/-L���l���"wO�躣g���G�����6N<���;���Y�Gʃ��d�#�=cIW���L�`GAa33o1
��;w ���w�RRi�
$����z@�S��K���^t�ٯD�s��W� ��$��0A��A�?(EO���W=�I��dj]@y�`��w�^Qrz���Uj��P �,-s6�R�P�G�h�e�m��\���M=r"��[:��2:^V`AWB�F$�#ӱܖ:��m�嫋���%n虫�D�ϩ��nF�nZ�(�������T��7�z1-�1K� ͛�
�l����Ԡ�������x���Q ;b��}ݒ�����1�L�JX�cNQ�Z�3,B霚�a�h��/��}��w�a���5�܌}"�h��u�0V��[q�������
W���w�yj�7��yU��P�7v�Q��d옶��=,��4�$�X��!�jc�r1�l5jHP����� l�
�%�h�����>iH$��EI���>p�w�'I���2�1U�ʗD�l��\�7�M�h�n��/�P_���a��NK�����ø2��} pR�8X���}?�Q�ϣ�/k"pnjB3攦�U�E��x��rU���Q���/�!t'Q�zS�Y��ʟi`M�͜�L��_�Yr,Р$z�0+A7���D���tr�S^�U,[�.�ܣ��y�h�	o�͵���d�Jݷ�f5b���x������ˀ��ÿ�6Gԫ�,����*�����X"g�#B�Ƶc���8"��i��y��aN�
���;�M��atp��'{�FPL�S2h�RA�(����C�`��kM�x�>F{!��Q�
?�˧���)�ւ�o�	O�q������T���`���*wͪh��8��)���N�����s�3����������NCL@kDA�G�
���K}Dh�7y,��F�+�D^�瓴0�s���'��CF�t�7��KO��Hw�������ؑa��"3Ԁ�n0@��W�t���o؉���}v��6�F1[%����E�P���O�]�g�a��qs���X�ڃ�\��F���2�Ps��AI���z0�4UU����GH������,�������d>��a��f�\h�L��q���|�� ���,$8SR:�\�_W�k*�_!(�nh�I�;F��)۵'�K�����$�Ur�m��F�"�4��~���t΀���t�D��ڽ��l��&��U��w�Ҁ>���P�W�E�KoOl��R�-K�D�W'Vi{q� ��~לZa� �r�j����.����\Ad�����M?7��3@s��4��Í>���^+m<�,���vؽbeS�:\�y}ΐ�E�养�A7��z����I�P�!��J^�;���um'y�η�BA��a�Y"�w��Ā�p�P�g~t!�t?Xh��l:^�w� ����o�x���2X �C�l�\lC
%kS���%L txB��Nr� S��^�����h=��w��B
V}i@.��s�h�t�0��#���5t
��tB'�}�z�)(�-�7���O䀠��t�݊t7hb#E6y�SZ�D�3V��6��X�ϼ^um
逌�Nʇ��v뉯jz!a�/�|��XZj�x�V��(��ZFz]AD��|k���^���,f9������T��=�f��O���3���%9�����zK�N�N�'(9�@w��{؃����+(�Ǹc�G��3I�r���y���9P��R��o�G�ݥ��f��?�	ʡ���.����>���?����di�n�kx6�7 ,|�>v����<#����vHS����1��k���"w�hG/*�R�*i7pz���x����)�*���Q1��ܝ��� ��������͋P�_R�R�s ��+�%R�P��[9i���ƾ �A2������`�73Һ@?B=��I�a�����g	��Ag��}�FQ�,ڸ��n$^�z���n�Q�'o��xr-k/	�3�
�Z�e�A�Hj14�Wh�Ⱦ�Q]���>C���b��+���:�Q�S��$\w�±w���V�AȰ��q��&>3(��ې��0vz��c�a���*�r�Vɠ�xחA�Al{�>���<�e:���~<��5� ���;~#���E��pP����^��Ҏq�F�{
2t
�\}7q� *z�7��
�̃�ɢ�f�z�F��Ӹ(	@�G�KIw��������AI �a��K�Zu��_Ӭ���%�C��1���nͳ�TB��EP�g���y�c�}:3v7,�A6�I��5��8K'��"�rLQ���RM)J�e����?[�3
2]�t��Scύ�-$r ����q{��V�ભ7��و@��ct�������T�F�&�d�j?٣��[zbb�8��}�SLPoU3������E`���O�,�lMCO=���<TO��C��:nY14&����S���!WnRFk�5%P���%�Yvꢍ�B�[�R�-y2g"�cL)�1?�׬�/���X^
Ɯ^$� ��F�au�&
`�:�s	���~Ld�ԅp��W4��?N�"�P�&eQ�@���}�d��\��>��G|FQ+�_��FϢM�����g1�wg�O� 	A�G,���8��SIO^v�Pro)�˺�`�]�	�i%�Vp �gS��L���d����/�CV��r������`�B��T�D��1>�n�A����e�q`)g��ie�B�7����伞������y������_�	��L���M{���� g�,�3Gܿ,	�%�`(�J�{��I0�e�Cc�!��Ύ�K,�m�./��'�����Th����*�r����p���A��p�r@����t�kj�A�����兌��fv�T�C,��d
�%��!M�� p��#zU>/jWu��M�R�*_�8q=�R�*>]��'��]~Sc�u����iŷ�B�(�{�b�ޡ�r��v윏3�]9�qj�FX�a������,�+w}���}5S̴D*�'5�ú�I�]��[�K��Vܙ֕,�h�f�랑\����v"�j����PȊ�F�]P�yu�[��F� d.����ωmv�N#�FKȆ��N9��o
���b� �(t�������)$|��u�ߒ�>e�X�;�Yƅ�P8����� ��0^����f�K5/-��R=��X)�0�O��f��LoC��	����9^�Y���s��W7�	��Xw���vU�k ��g\n+{�����_�4n����QI�u�U-��\�"��L���{#�w.b��)�5J�W
%����#�|���~)~`�=�k���8���Ui�V_��A�j36 :
����(G7tSe8�۳����m_����݋`Bv�����j��hq����F����~J��yO�e�H������PO_
�!��1�5=FB��|�9Z|I����lG}��u.9&c�e��}uM�Ǥ][P�Z���	ŇW|���;{'%.�Eb�N/�
��+��EK2�
��}�p���3ko��s=ϖe�
˩�������:
J�W�!��e�����ĉ�cxOң8[,݆Đ��|GBԊ�QW.A6M3�l9�r{��W��Л\D�Ҿ�7z��g{�(�G�����S��޴�T}c�o���8F=���0����=xĿ��p�	m��<��4I�@�K�M#d�Ş��
&���d�l�k���/)�isVlsS;G�o<����ω^0a�1�D�w;6(�<\m8�+�B�]��!s�v�	�������]�b���)�'U6>�[H/�#Mn$�r�>$˽*E��V�e�XdX����
�z��c2]*gJ ��j�5�Ǉ�7��٪+4߀�2@�	~mS��R@wd4��ǳd�7�0�Q���oo�����~(�CxΙV��m�Ao���:���<�
�p�CzK�M��Ia�Q�%Hiq{d�ģ�	��nr������(U�4�n$��z������w"����gbO�.%AGF����U-.t�׭-@�Dv*9�/��Z�)1;L݊�	P%&c�ѐ�O�87$���'��G˶
"e�������,��� {d;�]Y)�fu�av��'�S"�^{���m��|�7�$����4�"U��!@�ET��H�rr]��Y%�/�  ���m�����QLԦZ��^�N�#0�L�fl�۠
��z!Q���T�>�.���+~��=�D���ON�%�7Ь�습Av���D��dԠ/�Ҹ
d<<}N�����ʚJ��Щ|��Ea ԇ�&���̖Y�Ckw�5�r�맛93��v-�<���?�<�A>Γ �!Ϗ��D9�T������_���������b�O��g�!����N��ԯ	���	,4_��:�/�x7~�N_^-�@�i���1:!���U��_c��_yV��@w+S���KG䑲��i�nv���ܷ[������h֣q�h%?�U��Α%!�3� S�d��}�O
IH}�C!?0�&V����@M��U;!jQ���T�O�@"=�/O@�����'�א,���:\�lpD��?��-��!Ab�_u��[S�7EpJL��S:�Eq����)�`]�`Ʋ�`�o �I#� p�L��H��q��*iZ������n�iVj��ׂD�����4��l
r���͎�5 ��L���𓟈���GT8hw��|a3Ip��I=�K>u��*HD�����8�����������xȈ����I���{7����*��\���L��6��GlP<�bNc�u�K���xod�Q�_&���9
��u����3���ŎN�[�=�	 �Z�2S�4��h-s��9pM ��*
d�W#\�z���i[�9b2� p��� ,�)�;bn3�-]A]�p�n�l�H$�������^�L��l�z�N�lɤ1�|#�yѶ��S�n��3��-�<�:��W߼S	��K�R�F�_��Y����.�83�yKz��iY�k�}�}C^L{q�Xt�4��=�쑺8�@��զm��6~b"�Zϟ�*6�ysMO`����1�w�R�H�̻͠��R`0��ǹل���6n�w�ɨ�����L�)ʝ�}�}~�HxO�"X<����3G{�x҂X�5��ᜎo���u���=u]�8��`�$�k����e��J�V_t���lb���k#D <<s�If�}G�,yՎj"�l��"���B��fAM�K<��k�ccZ�зA�{�'���^\F���@�H.�D���	�d]Y?ʮ^�ҝb�RM(�{�����P
��p:�*Or쨅X�tZ���+%� @(��f��$������VY�G
/�Q�~�յ����q>���M��;i���&$��!��S�^Qm��,j���q�w	̿�7~",��������k��j�l�t�Ʈ^��E��;P=GW��߈0��,1�l��i'*n�|�Gݝs�������O>7���#.S{��T͝�1~{���

W$ ��ܙ`$m&�4�j�^=h��R�Eg�\�/� �4^�L��RL�F�����1�~��wx���� ^Y���J�
d�0W�V<	8�s���ݛyå6�r$�
x��:_�F��>yC��7�r�E��M�U����A�%�~���i� ��Q��k��f��|J������������D
�'Y�2K�3Vc4��5�ޑ;��Te�b��(�r8��c��3uv9�R���s���`�k��X��q�d"y���$X�Mmٌ6�����K*;�I�\O'c�Ⱥ������<L����E�[NG�ܓ�[~T:)�H���������DIH͢`
�I��Ɍ�*+�6�S�/g"5n��=�P�3<��w������d�P��&�����4h�݋����w�&�:�N�'�f�A�,~��j&���B�p��@>�SI��/21V�G�.�"��ka���F�D��^kT�k�t
H��z��m�-
�Z���4K��qs5�t������V����PS�R��ߩ��a*e>cx��B�}�m�M�2�IGa��hom����oJ�;?�i�o�}�5 �� Pk�~��
���Ȑ�G{e$`X��f>3R})��T� �<Cl������j�`�۸H�lSދ�{\J-���U�<0�h��XW9@�"���X&�U��x�v�����'�ǵ��ѥF���99����ƞ�B��?&��M�;�1Gb����@ܫ�g���? �V���f�����+��@ B��b��}�B\2jD|z�-p�섺������2��^���mv�.%3���ẹ	�>~<����������
���tخ ��9)GĚ%���5 ������0�n��Y.�|�{�J	�zn���T&���^Y)� &{������b�4)�%�aP�����\2S8�Ҷ����O��(��vǀ���o`��#��>r
�D��|��7�ŝ�N2���(��멖uX�%iw̭Uow��o�:�R;���4 raX��
�S/�7[�M���ZyCk�6A}�������R+�t
���Z� ��Gb��E[^E�肕�!5~R�T�6���ޝ�hK��g�j/�5�!<Z|kz���b,1�-�������d4]%&
F�N�r��`�{������NzS�R%��
�����w�p���}�~��"����ys�
:� -F�,��x��X��~_��h�KVeÖh;f���G߈B�����9Џ佔�P?`l�)����ٽ��C�!��h�,�л~��7�j�>#������ʨ	��[�]\Z��jF·���[�E�f�U^{ U޿J�5��	�=8ֽ�*8<����񖓊:��9+� ���)5�#�d���z���"��苯��`G)F��F�'�������K�
P�Z_�b�5��������ay	rH��;���Ͻ�8�v&�4<�}}��������
+���G�Q2�
�
Ά��4aI�7�h��,�t�%��v� z�~��
<��MgC��o�*�S;�š�!��ֻ�dv�jL�U'��x�B����P��!v�
rv�R�q�|�?"�����Џ8>����쩟Vݍ ����=�}>wX��	/�b�ղ2�������R�-���pH�7ɛm,vkn���I�dL�F�F��:���v��)����&�5��.������lj���y&ۯ@�;�3��F��7���6��,�Ѓi%�*��j�ˀ���G"�֕+�w
����08@ �ȴ
R���92��/�tJ���9́K�|���Va���sn$�����7#u�E}�Y�}0��A��m�fق1-q6枝~nS=vp����7
Dō����nE��5(�n�;X���|�H�\�K� ]�S��c�Z������#����[��8�~O_�s�8��{���&֥���}g�Wx9
cskV���X-�/EH"�ORĦ��݅*|�eMI�:�o�,
b:@��6S�������������ߊpR����P��k�{h�0�Z6��%��|��� |��*s+����>��h��|�I�w���~���ض�@VĀ��#u���Yi�k��TǷ}3���� Jכ_�|��,\�_�V����-P���}Z팑i�g�oR9AO��A��=��_��/�Y����y;�q�!>��w��8m��ڥ!��G�*�g��|�U�`n>𢫝j�H���f��I{k�aԻ�="P�na~$�Z��@��?��Hd����ڵ�{�w^9u]����T䶺��/�x�f�y�O�N�b���>�A A?�[�C�iP\M����6�o���=�s�.������0n<�ȺXľak����[�v*f�Ǫ���Y3�s���-ON~�d���̞�v@�q_'��Ն� ��|��}ʿ<�w �?�F�09F}(��G���-�7u�D d�]���]䞵/:�ī��tRJ���G������k�(a��Ѡ)/��:0B�^n���5z._Ȧ�V%L@�}���q��/~��m�����-c�����s|������J�=�Ih��q?��fZ��
n�e��k�]){��y��z͸�c٥��-���\Ҙ�
VR!	�V����Z�o�(���c����~�!��I���5�� ��aj�JrsE����D�U�|\.Q���QE�ZB��,���l�B)!���dc��[�I��;/;��F��9�|9�:�krbfg��^}��RJH��P��2�X>�pA}O�����-�J�A�q��"�Br=�V�v�{I��K�.���1�Yw��5{�	�RH��q��JY7�V?����Xo��+��f!M裏r�$J��wT?rby���G�#	��g��%���ٱ��K��#�a^S��G�C�|�N`�.j@;�����W%[���t ���7:����&�y�x��՞D�!��e!����q����㭅|<����
(sL�4q�u��1��?��Ȓ���?�q�0�Ã�f�:� �Bq�S��=48r��bN})j�!5���[Pc���}��7�N��/�]��:��K1g:�yǯ��Nn���^|�hz�Ϸj��{��z^�lӇT8��m�:r]z��~���=�kU��e����~�}2A��`k��;O�u���O7R<p��%��AЌ����og�-�B]^��9�	.���۫I� �}'t�j�`��K�f
�ϡw��-H���n��5I^����~ ,��ݔ(\�� �����s�3��j���|T�����س�g�AM��Ix���o�C?h�Y+<E8���,�+���Y�B"��ٯZ� �^�2HR��a8����dm�M�{��G:�B�������<i���"<]�{kU����D\t�	�Zp��W��Q2$I�=�'Ԇ_�`R����A��c�i����{0l�24��-١�?��
=X#�h�c�F
H�vf��9I����Q1���Ȓ�v��_�{���$��%&X>	��2��ǈ|�p�}�$�`U�D������� �ۧ2-ܿ�S����b~Jm��Zo�;�7���9�k��`��?]�h}�p�N�&Qf��
y���c����W)�4�_W�,�K'�}���J�n��س�mv�X�s�^wr�gs;�o/��X���ڏ��D����/�}�A�f�$t���b��ʫ@<~�u6`#p��o�����E����i�t��y�n�j�@Zep*f՗ �>w4���Tm箭bR��0 p)������[�j���C�%ﱋ�&�>e Bʵ��26�E���3�O��
��#Ҷ�L�b!��|����nL�����ǧ���U�Y���>3�y'f�L�L�qfΝi��2��A �L�Pv�o~"��V)y���"����uR�!�����<�/Q�%0���dП��ʔj�� �ej4.�b�F�O�����^Hw�d����K��N�أ��?�BS�^0G"Q.�#��v�x�$���0�
��od{� ��(+EVXI��I�+�yY�gޯ	:M��BQ�yO7Q��ߤ���?
�zڴ,�߸�������G�|?�����=f&�.���i��t���+� |��"��� G�XU�MN'��y���Z��IE�ض�K���a�ݕ&_O��#߯0�9v���S�A$��_�T�M�tN�I��{���4$�ss�ͮW8��nk�o$U���Ω�^����å�b�L5̌$�Ų툷�X��C@�D3/~��+.X� Н�j�� ���������h���!Sm�����̘�n��0��%�m��3C���fG�t=�lB]|N�F�.R(r�LQ�z$�⊮Aj;���/Y�@�(���i�� � g���t"���R�~wt�1�cp�?�W
�0�hA�E�%�rT'̢ �͆
��fN�O�E�N��H���b��ة���"8�8�ßu�&��@�ص.��Pڪ�m��Ȕȗ�8����͡�.���ڎ��ӽH+�s�� K0�LF50�B�K��;4�@��O�*�A��|��7��m�����N�v�֑q���#�c� ����b!@���ъk�v����3��洞*� 1�
�@�a��*L�$+4��jA�`���A�:y�}���rZ'��c.��ׅ'T,���#��昮X8�{�Z�n��b���4[���jvj�e���L�JD�=� `5k�y���_bh�6���e��f�)=+�ac���5�H�"Z7*�[�d�S��a�
O+�m�f>��W�����

:yN����!���jw��P���2nm
-M��Lu�v�i�$W��v�X��a�0���Xu�n,�e/�ݞf�:���C�N���_�3Zf�a���4W�^�th��PF$�v	t���h���kxAD-�t~.3>��ϞwG�O�JS f�ဧs�>�x��tro}���[k�:N�jg1��\B*�3�O�e��(^��4��x鰢�ћbʵ��_��q�b�Z�@;q�cG�54*%�]g7���H
jQ�B������_�.�fL�B��v�� ���C"^�!�c���=�� �"���D��<v�I�~��L4�����y�Q����HMz��@o ��شS���S����L�ʓM{����0At���}qe�N�}������hjv�ˎ��}�ɾ<��Z��);��WO�����Wo��'gb�7}��uS�"����̐ �s2V�G�V��Oժ��ý_)S3҃���LnK���(	*������wL�S9���B`Hd�I��i���E���_!��tv;��lG=3jD$��'�UlnxS?8���i���{�(�֜�zG����ۗ����}I�f�!��Z%C(�vb����P'�d�A�����H
[C��⤠���z����Ġ����Y�w5�#Т(�U�+f����ϟ�QSWBX��!;��3�r/n7�iԤ�+�" �P"�+��H����+\�0�za߇��b��ڧ��"K�u�m�*�]�Z�%�5�VD��A�_��K�B/Cg���z��G-Ո�İb{�R��?Yy�o\r��
��mqǽ��u����e@5�O�|y�p��~p�%ݹu�_zN�^�$`vjn� �_�̧zSY>���{�Hir�GA�1j��K����xǽ�A�؟z��p�[��!@g�G8'keI(���[1��O[�������T7�{*��F8?t���VH��X�.�v8 ��5�;~ٮ���He�p#OK�V�+m�5������:�̢�˲�T���.���t����fɉ�/�/8�g|�v�}�p-���|]x��W�O��$���fX�Cp�ϱ1耞}Ӏ�7����3e����@5u�6H�_�e/nt!�ے߶#��c���#����!�M4�,��W��b�`n�W�)��0F��(�D��U���
��|Q&��0�Lo����A.��拣a������՛��k����Y 2��� q=���������<jk�#N'	��8��eS��� ��~�SfњY�w I+�?����)�}a�b��t"2x�ud�W���{��_4�O�<{��!w	�}��
�܌@�Վ�e'QU�S|�y�]����O�(Z�ǟ�C\�F�/��ݱ�Q�W�R�():&\�i���Ƶ�i�fU"���JǭjA���so��ݐ�Y��R��rr�	no�bEX��<dm��s4�N�Y.<g*��V�`+��+����ڹc�-�»�ʭ�7u2G��R)QYU-td7z�	��n�bk�P��,c{��4�RB]��9@G-B�ia/�Tf^��-��]i���J�.��`�˖�ӤkI3��1C�c؟��,u��bf�����&X��+�1�F�ȏ*��&P'���<��S��, `Ex�{���������S~,��X�.2�7������aj�	*I��������e@���(~��[�5�Ff_���'گb~Ca;ƍ��zc�1��D��~��zIwP�T%��ه���}�Nܤ]���W
���u�NtJY���c"��yG�"M�3�R�eU��vbRw9�_&�����Y��R	0F����f��v�֘k6��L59}�%i�_�JW�G�!�6
�N�<Դ��W��Jݕ�6���;Ȫpa��Mc%OM'��%|
�~�D]��Q��CO̊�����ȸ:T;ϩ���7�wc�|��t��E -
���K���!��i�,�z���V�1짘�ƿ����1k0����Ȧ��.����?��?�۟�(��%��wr����
a������^c��J�ϫG{�p����Ūֳ�q�F�N*�7���ܒp������
���X���~��Gp���u�qEؐV�L��I�w �ϟ��}`���^A�Wh2+~��A"�>g�F�]�⯌yy�����:T#���� 2<���ɔi~�kБ�����?�R�}�IT�'��]���`Zgػ�H�j���om�۬m�W����Wf$��zb*!��r��>���1�w�G�a�j�=��
�ٴ�	L�8	fM"�6Ezs�������ӢD9�S�d�TP��=�
5J�T�v_Ӕ��ʂ�l|c����s.ٚ#�Z���4�^�CFg� ��wܿ�&��!��̞���.L}�{�:�m���j� bZ�o"
w�f��xۭ�e[�u9�P�T~�0�
�<�w��,�5U�-8���>8���S����z�E\ �`���.�wK? �9�����_�$���ןR6�͔��t����A�x,�Z��P��f!��JN�;陪��3���a�V�S����zB�Bj�}y�z�R1S��3a��D�B��"�Ƅ'��,��ѻMR<���5~��m�M�9�hx���|,N�{3x��@:�ŀ���)sp��<swf�/�#?|x��
|��n��ç���,|�#�p��f~�W��7���-�]���Ak���M�P	��Ʊ�	} j���7(��&#P�袃��ש�%��6p��8�,\_ǳ��Mf��^
YR��3</�c+���q�;�-�'�L?>�W&S�8z�!l�Qs�Q�R#�"��ИD,�>�(�tk�dgN�o���2�1!���������'MxW=���!L��O�e�ש��A��勲tE����ܯ�W~�G��2Q��rc�e�E+�[�>��5ذ�T�{���#���9[����N�^�^���$R'}�ss)A�L=�����8��Cm���ۼ"T���i��@Ov���Kn�Dȋ苟݀��u����4l�yl�NԽ3�\Sri���F�Q��er�d�O�ƅ���lOF���0b<��.}|k�Ye�,s��L�vffr�D%rޟϓAEpYt����bÄ����1����'C�Y�J'�.;&EL��M�y|tlC���]��TD�;�mx�l.aMR?eeo�����з��!w�2����@m�k�>��
����>7�v2S�@�{cI���2;I*3��ȅ�J+X��u.l���sIڱ�M�lz��
��%�wy��6��o(`C�<�\2��7��7��m��]ʷ���{�ߏ!y7�N���:����Z���3�CG���t���E�3�o��%�J��`�c63�� `��6=P�p���P���K6�]��)��VP?��f�J�J�2s�7y��d����o��J/��t-0ḨAo[�����z:�L:��3HR��"�}��.NWK�������ǴtB5
ƶ/�A�7��"��H��J���F2F���#>�e�e��t>N�mE�3��0�]�I�N�J)w�IXef�`�U �aߋ��������W�O\�#T3�\4�D�X[wt~
�7�d�o�9���dtVo�9h�I`���8��g�ҙ����?\C8�w���;U��@�+�p�lH��XA&���\%����v��^{�
�(b�rrEb�(�?�H�]��p�J��#K�k�z�_�{�1�C��xb*D0��@Xq�Y2OU���t�Ͼ�;*��_d������yb6��G��w�ڂ䙇 ��a�F��q��Ε�[4˝�\� n��IC�4��D'cb˥��{��ҭ7I"�Z�\p!�A���@��%�Ԥ�oTt8��O)��T�j�DT��h��p�Af�-8@s�ut��S�
�p~��d��u��J9��xm_n5�I[���4q֋��%�iV'�b�#[)ͫ�M��r�9~S�l7�ZafD�hI��ʽ�e��9��qb��zT��w2�pN���$��Z���I�S���s�OG�f���������_�2��EP̩��O[Iӕs�.eTL~c
WEui�>����������0��\��G1��p�erJ��ȋ�眆Զ���ڑ{���U�ʒ�f�������|��__��.d����
�l�	���o⢽�C-�����=E��9��2�ߕ|���q��W�	}�#]������U���ꅴ(�@�� '����H�~6��(e�FJ��8�Qk��쯙BAӎ*c�u���מ������^�Q'���غ��Z����W��xg�裪O7�� G�m����5���e�2�=b��Û�� ~Ƽ��1���-���ʢ����9L�Ǭ�pY��'�Q
z0)!ʢ�D���&�|�ε�������0f��ג��Ϭ���!'߉�E�=?�͍F�G�I�z�^�����@��k�Ǫ���ka��JEg����5�w�%ц�\��v��H
�M����J�ٮ���}:���Fx)�Ðf[o�����;��Ox�e5=z�q���A��r���7����>���3��k��iD�;v��	���-�@����௚?ZخO��J���3͎������nJ��_���u��gذ	{R�TH6x�ͻ�����R�	�O�H9�ů ��П�B��?4Rb�_����jA� �\����*���f��Iu��~��
�Պ�4���$
����n���	�RdLU$�,|�;�^�{/�&V=M�$?5�9�[X��>�'`Vn�$h�U2���m�&tF�R�T&i^b�4�
��qҸ�w!\�K��_�D�-O
׽��B�o ډk����(��$}c%�� mR0O�]L=��Ĺw��?��r2�`撼�j�q��m֥%F-�eN
8;�NqV6�a@ހi�U�C�ɹ��x��-��p�h��<�I�)� �M�7�He��o�_�x(�g�Re?R��������z��_�A��hn��Lb3�W다�8��+�GnFF�u�k<ɺ�7��O�M��+K�Яە�
Wx��>��
ާX���3!=t�.��y]�����_|���y���|���>� ���Z����Ϟ
yк(:���|�����﫳(!^�����f%��9|�LD��f�������&��&���&E��F˴����S�"B!��[�#$9�x�d�q�Z�
Q	f�3#���.}�f{1qHbv�?X�O�	�y�a�����9�[�6���f�l����o�8%��;ԙ;�jby<��P5�]�[]���9�Q�:�n�M�����G}�/<��7	��z�*C=��jC�n���k�(j�E6�'�a�^�g�Ǟ�oJ�/8����gK�6�
�3�M,�ǺM�(-�"M�v��ǌ� `��˜\��G��㩸bv�������̓i(��c;��Оu^��sJ��l-
����@�� �*�J�N뗱��	�����DQ�+`�� �ps�V�kL.��-G�Q��,�P�,����='
Ԍ�*2px	��K�3W�c:d\u|���E�8���W�r�׵e]���)���1#�ɵ���U`� <�T��哖>`�9#�d!x{���!5Џ��[_)�8��R���Pr��F�]~
~}�{)�%v�ޑ���O$K�	���ń��W��rC�-����+�_���(p��ը������M���
PBs��
�����=���]����P�	�{���vJc�QN��:�e��z��A-��[��NFȦ���#���U�F1�"]��<�@���LP�
}�RI�m��f������*'�#_+FO�N�Ӥ����At���trde$����S܀�(%���,ae�UK십J�B��@��� ���ATd�wZ���E%2�3ijSY���)Vq�Ԇ>Q�<;i?D�I�g�����z-������C̳�g'�|�U���f�Ug[+�.�![����J���Ol �^l�5e���LI��0�)=U��)����@�e�AO��,[�<�TH,q�J�;�n.�^`��Gz����~��
??�>�w8U�v+��Y}�f��е;�Xײ�;�+<���,��\Gǁ�msAXr!ݔDSΕG�#�ݝ�K��_�	�rVyx�������c���,���Y��I��J�$J�+����7.H|���ov�oD�F$^~��T�����x�d	,��bfK��x���$1z��j``x
�X�G� JL�QO�WV} L��a4ϼ]��5\ �g��:�S8ex i��#��BApQ_\E��?a��S�<����w�ڦ��Ox)�,�*�?�c*�@[�c*�R���}����"����<CŗO�Jb���*�GR����-X����`�t��A���(�2�s����Vǂ[��X?~>�x6N;�_�8�ӳ�'�;%�l���^�A3�7v������+7�>�k�t�8��~�k9��?�];Q�6᭯O,�[���LF~��5��ُ�c�hb���m����ǉ��t~�e���
�����'J2a�>I����PKp��V�!���H��X�;}��
����`��=/� �6_��ܨ\���z�|�nM5�N�L�E90��O��'�l�J]:{bq��$�'l�{�%'���/����{,�JP�j��v2m/cO+Y�
�dG2��� ���@`ێz����'�tr�X����H�m�Ƥ�H����'4j�F8�Z�Ʒ>jC�Sj
����O���i�X��y��׊�G����`��؟j�z!�hjE�2l��/���Zf^�7�D�&Gp;6yShvQ�&��Q�
�E����H@Ӥ�!��~I�֠��i� A~����H������/�[�)# Eǿ���=����o�k���6fl��''��kb쯿�V��t�B�)���X��uNʮ�	���6	�a��S��'��¸]a,��@��{�͂�w��E�/Ɛ{�:K�M���3�:���_,�ϊ7�_϶����9���W%�Ƥ���|�-� �B�w`mO��y��пxL�U�`*�m���Lf�\(S�a��p���Q���ȑ��[B�3_&`񣄏n��)�u����g�J4����ȯ]���s�d{���tE/�������B6V���j�^�E��6�-�h#BB-Ή�A�jVѦCV.�ZD�=ᇔ�O����7U@Cl�����a�Զs!�.�qR�^�������/��˩�����X��HUƯ
�M�i���蚂����+x9IŊ�N@����N.��.m��϶���b�@��H`~�a������t����6S^��Ƭ��j/�x�G���(^FY�
�|�~� ^UC���Fv�L�8����c�?\;P���X��'ao F�t�@����Fuf�ds��B>�~�	3-�1�D�@�V��Y���h�2ѝ������C�H���'�Z��A.��_G�,�1�j��H���-"�«���D�����ˈ����|Gb5��z:��V!Е���_7p0���v�����K�����)j�%	���U��!�db�U[W}h�S�Ѵ(Z���s>����j�/G/?v�� �/9�b��ǯ�!ca���֌�Ў��yζ�J_����>�%c4�IB�l�_B�<XM��e
�ҫ*@�����
��X2=8�{�ǽ�d�H���]R��Y[��5�(�H�#Dϣ�K)�s�N8���C2^Ŵۜ�"Z��ٓ�>6�`�����BO9�X���P��D�NB}���i�+���V�����|1���Y�i��㛠0"��꫻�͖)O%���`�M(W4�YW����B��)�x��s\�s�p�*[�R,��X�~��t%y��7#���W�܊Bw_41C� ��!��N�12�x�OF��&�e��@�!�̭v��c0x\f�, 2��)VSuz iu^�x�$@vUD�j���<;�����U��� �@h��PC�'$�jt[��p�$���:�/<��V�����>��Rlcӡ�}��!
�/p�zMvQxT���B���c�>>��O��τj�
�
����2�P�UU�vO �[��O
^�unh�ǋ�vM����� SK3"7=)m��Ur��[���%�4��7@o�=j��n�|1n]���/�������ǣ֠��*����VͯP)ǫ3I_e��!�����O?]Xw:���R�v	+>��#Z?R+���+R���]Jl&�<�r
�V��˶�:�%�d����]�?ۯ��_�����\⸖�h�+N(�*��m�e-$�	/57�?�<<��VK��i�����:1]�����lp�ӽ�g�����U?����r e��n�jm��06����ē��2o)����� �P�h����{� ���d�����1��!���W��7�Cj.�5}؍9�ͳ���8���YQ�wzk>�8��/U]!k��8֊רoQ�r�K�65%��f�fV�X��UJ��l�bH�.�>u��|O�C^dM3�^����%�,�T
�61❮�j�[�O!�e��䉇	����ЖCvE�_o[Zt{?��A4/�a,��U���E֭�B��.Y_
��dd9�3��,�����<<G%��,1���6{�$��t�H��śj9	���wO���K��:������5{�(�7v�I�R�F%y�^�&��f���:����ٮ������U�����u"~�ҵ�N��L'U���N��5Q�{Y�[by�ﮔ�ѿ���/KZ��*V�2�-���B�㴒:_����A��6?z5���$���14XJqz1@�6���BR� E����ؑ86q,�׹�贈uv>m�uϕ.�fgm�Wq`�Ch�2�p���V�J/�R=�%ֺ��QgcKQ�;�bGG.�7tãBJ�{���w��DOČ����*(Mɘ�_�c]�V�~��nK_4߮�R���#WM��%鏸�Ƃ��SM����7ݮ$�@���ZF{T1�>v<_T�pxx���i��-�nx�8����l/�T�jy�C�j��q (
�Wj���H��zyN��v��U�ՂVє_��3����jN�	~�^�E������7n6!0E�0_h�Ƌ>:��eR���g�xz���Ial����T�U�'�삫�\Q��d�	^Ϸ�{�� �'��_Ly�/��[C��|��e�"`�;�P7´2��QU2�`�1Y�4��'�`PȠ�P:�eZ�����*�j-R��]�����ɖ<��j�������m�}i��W~��(��{fWʂ�ͭ+�p 4J���oFx8��SQ� 5���J�4z_�TYk��'��j�H6�VM`*���R��leEa,�积��9U�%�8�?�p�������K�n��(������E~2P�7k�`��NC�|ޱ��}���HdF�Ə�n^�����)'VEN��yOg$o��p��(���0�>��x�D͇�HN�"ķV�!�T��
e2�
rI��1�]�[#1HӪd���ů/ov GVХ��Z�T���x�ȅ���$��̾I�d�ח.�Z��� �굫>z=c��v�X�@<�S]�Zu��Ǳ
g4)͏9x[7E�ce3d���33�:��8��:�7��H��m`�V���nK ���E��>�cJ�[���TP���w�D�q6�N���-t1�E�Z����|�y�_5�:сְv�� ��`��i���9�@����7pU�D��Ve�q��@�p�q!��w�_�x�x���~���x�����x`��G���34��?&�6�n���C�ߨ�	��ss����'����D����#�c�����s�?�=�j�o�k�7z��xk�$��q�E������a���I���/
�g)�0"��"��؜�͎�gm	�rK�,�ĠX�m��sy"����.*;�6:-�(r���C(r,��(�_�km�������L[�^�2��y*_/�����̶b�T���j�<�|
}�"�HD�^[������Q��mι7����/GF
$Y���@t�:�mώD-�.a�{%�Y<5`4|�ġb�	�u�ߴ'�l&����_���9�*�~�=#j9�c
�"�� �Eǒ�ē��]��L���h-�qB?�g�E��_��S���O����@^�Z;��A(e�N,Nj�_�a��綧�z��L�#��}��mmf�c3��`�fݪ��.�7�P ���i|nҝ ���Е-���M��^�b�	��]u�X���qy��xQ�'���h;��T{�گ6*`���N��%�$������/o�pa�w��Ib��IW�zCK����օI?���D�|�@� A�\I����` �8�Bi��/9Tɜb����F�����s"����,����`�
D%�k[�&�2wq���$���j�c�/��׭�o��F	����s���n�G�3�����ka�a�����I<��E�U �8��13׌�㷁��r����͹�iSb>9�겮hٝ�@�ά\I��6��>���{7�n��n��<[���a����9��s/��C��r�E�����>�$�7���ҧ�	��6�G��f+����c�o����m��P|��0N�	�r�ӭ��*0����V�_#����E�;k����lB�:7N�3��Q��"���O��X�6�b��A�⮗��P|?��q�񍛝|jo���G:r�=�����Јk@p܉6+,�q��h|��7����U`a���2��p��ně:$Zռ�1}����K��L�X������S�V�"�Z��9��ֳ	t�������y�krj�+���?��
GS��rU����5?o&�����{�A�c��o}�C�q�[r�������d)� 5��B[r%��B�b�n%Rzf�5�� ���>�J�K�<sv�,��0SKJ�t�8D�j(^F�Ŭ�7F����qՂ�)��2eӐ�X�nE��e�ӯ	lx��Ć����d����Z�qW+D��a�ɧ�� P�G1�'���h��zi|�S�rj{5+d�Ε>J9�]F'�7���K���y��,����l��Tp5��vB�_��m�*���Ö���t���`�3�j׬7���F�;K����]��Q���!k@O���ˣ��?�ӆ��m"*�'�w��(A��Z�>��w�Y��6|}���q�*ҋ��

`� ���풆P���x(伊�/�������A���]�{l�FJ�� �oMit`m��0{
	s�lRo~6��5G�Y'�v2�P=S��-��n��=sT0J%�v���7^��c�4����Q���L&��9�z'�\�G,X�4���ߞ�]�B�
�V�ߺ����p�Mli��
���u�Pu|�۪�h'�%}���BB�Rg3ЏH�!�-��V��	�>�M�O�:k�\���7j<��s��#}��ƹ#�k�y��9�u~�MS���o��r��;R0%��OҺ��@S%��sE�0ٙ��0rr��r�4	�^��!{V^��?�`��mp����R
��J$cw�UL��M��Om�i#��#�o��l�0Rs�{,�%(��c�( ��2=g��/��� v�:PQ�)��:ؼ.X�S��Ҽy�X�e�&�q�ߦ��*{�C��Ʉ�eg��j�^��D kHC���/���_����tS�Q!ú蔹y#eWo���w���P%n�o?|�a]׾��G�x�8q�*�M���BB㱵9��p?"sU�����3�@�יOv�}ഒTp�k���.�sƻ����o�O�d��i�mB����j����%��2�w�
z�Z�KE����?#V`�h2��|~c�k�8_8�4�;������>�m"���iM���9�9��P�bj�}N�i��|���������� �6vG+����_~1na��\�a5U/������sY;�o���M���ulaS!f������dި	TmܼP�;�`�H�q Y�hFP�����d����GC�E�yV{�ۆ��o�B����x�aAB��}q�-ں���O�{����m�}���?��㐠#ȝ�^�2M�X�n��u*S�(J�*��4�@�c���=;�Q�~X�9N_����aRi�����]P%���o��]�lb�(^�P�;��~�z��z�<��y��߫>U:����Z���6��(r��
9�����f�`��7ni�t�:7�=w=g!���Td�� ��.�CWF_�F��-=]���\_o#�}�V%���5Bc�(��3��q�q7��g�Sua!]덴���-�Se[A7L�Am�n�yU�������WC����J�B�n)�
��V�1,c�v]�L�[���hߔ08�o� (H��d
:'.��mE_څ��5L�^;�W..�I��H4�ٺ�%e�m��H<~n�j�%�6����S��g�Af���Q��rE��7*O���I�y�d�	e���6X���!:t�U��
40>�����T�HZ�oU+�,���'�B�v�T��Q~���r�@6e�I[D48ɔ��8�^0���Hb����o���*�:�`7=�_�~z��`QL�ͣO��Yy)��9!�U�)��fLt��k����i�������S5	CQUC�]�mƲi�0�"����="n��;�SOfÑ�[ �`�����	�y�?�M���Xf��%�=3C�ȵ�I��/�D�N��m���C7�k���!Y�Ok�]����O?�V$\�\*��&���j:e���X$�~��cTC��Z��Ds�wm�����H��g	�rCh��Fw	�$��m�l�H|�%`���Tv
O:;������`����)������C_'��QQ�>�����kzA1=���mI%�+�d�Bn�-PwAm�H�rs�g��hHm3G=�/���x�m��Qu����KPZ��fi�N-� ���8D��M	����D��F�Y˩PU�k6�d��+@ݩ���}/���;�����4�CO.�� �4���5���K�+��˄��sa$x,�s��S���FN�#�Q)�wR�|��~��  �#�4�A�9, :T|:;�;{�3���Έ29�H҃���j���.����4��I��k;S<���k
�2�6*+p3Q�Z�L�C\ߩ���_Z���p?�>zg�!�c�$����x҄�F���|�Dpk4�(�����rhcg5橇J-�A���[��n�� uG��9�5�<��C��۹`�p2m)-g�z�9�����H#�̜&�:.�1��B��r�FF��R�yAP:x/��?�r����mv�׆�a��&q�ٔ"E��
H����t� ������%�@�*�6_".2+�Mک0�fVB�K�h�����zV)���7�3yLY����/�]�z&Y�!=qwM�T$�ar�=z�
��q��HʻɆ���6�-��8;ȃ?;׈�4�O1{�i�^§�4
mNm�E�P*�^[	|<��G��{5ȁ�3�_�r�yZ���p1kv]�"���)�8�U.ʌZ9�-W����@H�:�Z���*8�/�8�� s�4�~����د��C��~莿E�F��5�ی�����^�p���F�U��@�x����UIۥ?� @vC�39�x⩞k��Ԧ�Mǆ�9�.�Z�#!�[�w?�_۟����ڧ�F�mk_'�l���q�`�@����vq�*�)��+gs�5�ש��;��ϵ����-Ŏ����x�@� ��M�Dk�5���C2�h)�����E�!����]�}	��S�o�/�s�����@��o##I��(��}25Y��wl�r���򜡕���!�'e��&M�i��qTP*0u3xS/�+Xɏ�1!����H.b�~��h*�f��&�DA���*�R&Ĩ��}*�"��pp�F
�4#��9�1��&��1eE���-*N��w%�M��-����hx��̇4��~�r��fkM�k�"A�Ü~����x�q/��2�;1eY�i}TE�����x�㝚s��o���`7_�,���
YR���\-�
�B]M�>Q2�փ�.�환��p
V_�3���=�����G���J��^����נ:S����t�KQ�Q�-biP�﬙s�Dd�h˻�  �!�*�d,�L�=����֊�����IV�B�*��b��3��ڎVY�WR�)7����gj��G5�ΐZ��9�I�r�J�B���D_��*ԑ���T_h<R���ۢ|?
q/3<ؿ�lTD}Nn=Yf	��)����Cֱ@Ҙ�����k�~��d�:b�Eh0�p��T��
b}u�R��>p�Sl�N��%ޚ�̄�]��w��U����t.����}�rJn�gM�N�IAg)iO|8��C��p�.f��urf+����3`���U;J�9X\^L�#$����
�͔֩���0Tfz7����҉�'�"����ӄG�j�3����X?^[�a0�XYlP��w7�������b�m+k0>+{�����]1CS���(H�޹-QN}W#ml��3�0���X��jѵ���w˾��&_�X�!�8eR�y��+��m�	#D�l�������4�A���!�ܷy��$5�8+ۈfu[�ɋ �=L��-b*nfu>�� 
�"M�wyS��L6�`�Q�!i4�g*Ɠ#���ߙ!4��g�=��һ���W#��D��eP���^R�қw�]���jd�l2����kv���jݤ��A��C�q�"�����w%��`�P:���!�(�J�#�p����HCO�s�y9���e����]E�[�# K���^Q`�$ya�M`�ںV��Ru��S�SVȚ�c�ٹ���'� 	����s����_�𓬴Y� D�]D#�)]ѭ���/���J�����='
_ĳ"��Ut��n1?�mC�6��n�V��)�o�h�J?�J}h�'%()
7��ŗ� ���8���B�ꃘ��/vfӆ�z~D�/�(��u�]��)�@v�<���[��ߎ�=�x\�EO:�)�J�ށ�2�܇�6!]�0a3�,j:;�?3��}boJ�CmX�@��9Ѹՙ`�������a�_�Ļ�l>~J�{��Bh5��b�b������h7�Wz%�*O������
�=x�ɂ���|BW���x����$�;|�=O���A`�Ğ~H�{�^'��o�H�5�G�敗�fQ�2�r�����\{	[o��X~�IL�.]A^�� <����T��껌�vd�}����
.��\~`�,ؤ������M<RSqK��>9���B�3�x��h�9_�&a$�	1/��|^7Lw�3SӐ45w�/R7�Ykj('���C)�=�:s�%��Z��.�V]©��أe}�(�w��Vxy�]`΅�W���Z��R�����|w�ۻ�!��b���(g�����~0����,�{\�֠S�b>����WQ��CD��b��%�5�/����6>_W*�(�j��7�"�ߐ�(2�������"��wԨRH��e�3}�p�VATw�n5��+v��:_XԘ
���oO�&@!csW̲{	�6Ъ��
�Gىf �j�gT��|hY�f�Ľ�ٝA���3�.�*�sR�[�����+�Ԩ�x�!���B�wy��Ib���2������jnO���XKTv�]��O|O�Қ �8:�-�� �~�bZZ3�Nh1��G�]������n���0[��#��|(�# ���O@���ȧc��Or�u�v�����F^".&K�/��Z�h%4c)ͭ������]����b l����P^�'0f2Kmt�&�{�k)��/��t�q+��ŏ�F�*�ؠ�_�>��y_��P;��)%e������`��HE�6+����X-S�O���}j%��F�N�Z\W/�	T��3W{Pms�?F
�󜔌~��u�2��۹�GA����q�~� ���^
l�
6�ă�8kv�*�ap��u��uy��=��{����'���jK�~��s�2N���)�:e�w��Њ��*{�baZ�xqEY)����n'��'�p�dj�s)-y��2��\V�M�YL4$Pj�w��Mr̀y�OY��L������zׯ��iv�ִx�B�Y��0O��~RU	�b�N�i&�@�]��=^^@�PZL��
�6HxV���F 3���>���K�;����|M�&��gM ��n��Q��ߑ����T(�(*��d#���G��Ӳ��Gn��k��A���D c0� �	|�Q���^8�_�)v���)1@Ο�)Ú��BB2L�}�m��'��h$CW��S�f���<����Z�&*!��rS}�q���,��}��l�?AA
��'O��Z��.8Vm]C#�|8�h�M3��
0��o׫�L�'#�5Дj^�tD��G&��ϊ�[�Hf�̄5��
�N��V. �?k|RB��4q��nѣ��1����..���~=բ1����~��m�',����G��;;�&0��*�s�Q�L�i��G��@ccCJ1�x/Gf���ch}�,��,���=����^k34?�
��DO�#�
QaXD��+�lU"��e|-��Î��ɐ��S����;�p�?F����w���}��)�[pM��j��AԗZ��rW�:Ch���g� ��;��h�ԣ�3_U8B���L��O����3"�,�1}�Y���o�%�9ȩu��,���Ǆ�uY#���FF�<���E�,�x�M^�ڤ�����mL��_s����X�����4��첎S!PI�<;�T�&J�<���;���1�w����j����fk��Ѧ)���|��U��\�����x���s}v�'�����1+�eg(Ѿ��O�a��
4qƕ.S~K����.�y�d 9_��;�|��R��@V�
ը%��y��15�ûv?��
!�n�)��|�2�2黌�M����QϏ��ȭ�A7��z,����6������Jӓ�fF��6�S	�L��.��9�Sgo�;�h�`��,m� �![ѦU��&�/��Om��Gd	?��s�G�R)9F��[����褿�Rb��"�xY����j�W;�k��P/��z�����զ�t�@�$�?��1M^Cʫ�l[���Â�٩o?X. t��$��&�}i��p5O�q��Fԏ�kO_�8x�t�{���ñ�Đ�yg3���^+��gx<[��u,��o��G��<J�fI�E0ҧsoj���/��T/)�jIOf��3�纩� t~�k�s�
�!^JE��C��"Ҳ�	����V>R���Û�j�xr�cژC�}��E��/�u9b��%߫ck�j���v�{f˫X����F݇
?�;�<�q���c2�MF���V��8*9�v���F�V�1z�� 1X�m;z%�\Q)�R���������ߒ�&b<Hy����E�	Y �%X�PW83[��H��}E߉^T �О�O����Ou��E��.�o/�#;D��U�U�@��A�xA#f%��P�"H�`.#?Q��/j�7�N\��.�m���f�A�6����;���;v��t�{�' '�<<���#��f�p��%�1������P�M6���;�؄4�d�u��l����U�Ac5g2�U4v����)%�~2��:�F-E[�I҄��o�[9��bԽ
)Rl���
�Y}�Qkԩ�Ղ����?Hǿo]Y8'N�6�ڜI������Ԩ�F�ѷ���X%l�O����9���0�lK�D�u���Wu��	^�8:a�1�p �'����7�E5FW�mbi�Or��Ax���V!p��)7��57�
����Г���)A-��bP$s1w��1�����t������Fw��[mO�n��2�Q?�>���͑���.�9S^8������w��7�Ij_�=�ߗ)g?eP��#-fS��(-R�@�І_��4+��v�I��
�0��0+����ڢh�K�Vtа֛�E���}�Z�K���VCթRBW�>Q)��)nq�Ht��Қ;O��܅��f:Ofe�!��>5�
��A���e^�ȚR�HѾ���傾�I��̨�T����]��x
����'z�9�L>�T����oX��ئB.wx�<�n�Q�~Y�J(��M�m�l�}��T��m��t�Z��oR�v�pd��!*���S���=~�hci�Mۭ.$yx��!�!���a����ch�7�D�npc�H�De���fJ6�l/�N�b�i��l	WT��y=�`p�k�޵
����"9�X~�w>�U	���J��dd0�KJbm�/�1o������K-V�=�va>Q�,��F;Ϙ�$�;H�֢�)��;�gO��F�*�:<��:��)���tW&÷���S`�Ӎd��������hx��V٩����;G��Q�=Qf�ֺ�	����˪�@U��u7��e.���ki,��$u��L@�W����b�0);��zCvx�TG��y�|c&�'��/���<f�d�ٲ�%5�� ���w��jF�u�[����2�Mc�L~S�WS����s	�W^`c%�A��֏%��Qh��i �$	�C��N4���ԅ7�fE��#�+s�Q�2�e��iy-&�ƹh��z��M/��/�
�&4K+q���nr��������K���<D���<g�� ʝ�W�.t���Z���`�A^����a�? �)p/gB�s�-?���C����ʀ�M����)D�}x![�	OHN{�Ɇn����g}��UM�=�����\�Q�䪒�ˎ�m	|�>&�"���I���+�)�w�g7�������8
���H>�@���a��0��΅�r�o�Ww\%����,V�����ϻ���Y)���E1���Me��\�c_c��A�c�!c�[1G��N�^���'!`��m�Z�[��g���NR#z�K�r)��O��;}���(]E��`<^�p鶕DmZ������m�h`�Ɉ�2����i�����ϒ*Z�(U�D_�Ǩ��f1�v���!ȝ|ۏJ�D
TE�f��r笛��1��j
�: �i�$�	�4�E�����&>�!>���Q\Y'���;i^�\�w�@
�:�;"r�'��y�b���#�ķMǧ�����Sc���kO��C�<��6oW���:VbϚ�U_������͢~�4�a+j��� �d&�F��9���S$<)����0����u���1��H��*���-,�˥�I"�[x~
�l=�P��Z��^���P]p�����?U����I��iG���QTI[��C�O4Z�7ď��&�y
�B��˴�YA> � >��g��U�:Z�����:����7�����e\�W���-wkB��sD
궖<k���?6�65t�;�E�b1�z5��EU*��]�p	��༐��Y��3&\�j-cV�,fmq;�D��7ʝ��7�k�7����{�JR���_�\�{�, ��7�7f��d�P�K`3����$ĵ�K
�0<�hk��Ϩm"b,}���d[�	�kP�5�g�1,���Ѱ�����/��;��m�;& ���u�k���F�����s����z=��ٌ����K��"F^���d�!D8�y0�=#_�Y�v>*&�4N{��h�f��/2���L,��g��/�a����6%
I�-�/��N�0.@7')=��s��~�|�a�=H�%��"=[���AO��#���Z�xA�2fE�@~���^�zӾ��M�Cc
;��g�!ڦ0�V�~������g�JIQ�8�&��5H��H#�p���L�D�TD�3S/Vy�\�ȿ��̥Tľ#����R�3��0�,�U��Nsj��jP�M���?ͮJ����v��o̬�\���İ ���]3{��wbg�W�Y8D��¬�P꥓'�z�����#�rD��]��hJKp�䒱]����S�+����v��g��L���>2�
�?���p�����ė��BĹ)�r��1{HT��q;�t�UHN K�~ ��l]2�,��5�l�	���I���b���]�	��Vk�8��*��D��?�.�ІW|+/�7'��Cm��M�8Qt&y��a��~���	y͜wY���-FJ��P}*_8�%^v��A�`����y�����)�$�"�٣,h��K����͛$���R�R^��Ow�B��L�!ml��0#PYi�'��ٖzr:Ū+�(+�˶4�<'|sx!��Q���,&�Ҥ�'M�
[OR�P���:��0=އo���CW�#���Rf��PS����ڄ�q�8|`��vb\2�m��*�-c+�����.fԀ�G+�.F�IT�uX�R� P:?\��?�?YsG6]b������'r�Q-��o������V��$����0`�!�dzr$g)	�R��M�.Ԑ�r��� ��EHo{����[��(���MӖs�>��'m	3��A��+�1m��F��sB�C��6ө����D��������+��Q���^NQJ�Bf�#����fנ������Vϵ-Y�7p�4R���_���H)�L�+].���$?�YA.��6��
x��S��M� 	CgMɲT
k��1�S(]������	����5���4$]b�z%��[�Y<
�	�/�l �)Dມ&w��j��k�z�M�7期�ç^"����>�u�b��8u7 �O
���f:W�ݬb��3�U����updl����6]X�r�|��LDeT��Y߫9�o0(�ȟ�B�2��0������!�4+)W�~`���%�6��]�/�[���!6�1yh�Ӫ LOh��~��U�F8�[��C�Bw���_
���b�ұ�j�K�c�k��`�s�y��<�X.��%�l�=�����OB����w ��Sx�a*�.�{��aNH���r��rQ/m��x�s�>�	t��
�.k8u��೴��|j���m��҉j,������<4���!�-
�R�F�R�ؒ$��jH�!אv����y��r����������r����(UJ������Ћ*%�~?��.9Q|X�@9��h];N�K�S�p���yS��I�.�)�@�!�F���ȝ��q��s9�7m����� ؁���ʂ��
�崼�Jk�>�^_��Ј���V����J+7I\<A�{IR<*'� �1?�v�h2͇d 2B���E{^�^-nM�0����ㆻ�n͗������F��Xq�Q���=Y�ח���V�M0Y��`4�	���L�/w�hLS[@�,�:�&>4�3X��QE,�Γv���Ɣ8rrl>e�:���4V��
��lL�!����Ƶ�<q�v�V��vC�/�N���6	�Ţ��m.��1%��)(n��O��mjTS�X7)u�ׁ�L�G.�x�seKl�칏?��H��q!��M�A5V�C�Y�PXC�M4g�g�O�M6v�I�M�l��b��t����"��s��m?�<0 mL��y|��|��4Ŕ�]3�O�=V%��1h~e�9N%	��cs��ƞGk� 	�7rS��n��$��[#b�����,◶ 5��u�1,��䮩�x�{����
��;� �����S���g) �#����I�4��-�8��v�V�=��4@�Ğ!�XB���/Q�n�1�}3A�t� ������W�A��i�K�,t+ �\vw��5�UTj�c}��|�
���/�f���Z�mcXh���|5p�������6�q�!qT�~������
i��0��k<�6�ّ�*u����
��_�#f�ى��W���qkV����M*Mm~
��:��Vec��{��e�L���K@׵v���f�#�X���]��x�)��sl�=�'�J=z�W�яq}/�'r��@@��e��d3rp�W�[�n[v�{#�aL�Kq��TT�Z��ޚ���f6d�M?[!�m�́�r�y#X�
 Y��3ꬿ�R3&E5��b�;
q���*D� ̐���Ġ>=��2�n�}{���0�b��(z�%e�-퍞вu��!���D��.f\�����;b�
����U*:����=��`��N��L��멧`�^�Sv����ш)�5UFf��l�h��{2�B��Xo|^�����ev�)�_#y�0��#�'�H*��Z]�,��>�!L�*JxX����j*�N$1����a�&�H��: "]?V��0&ca�����KQ܀^��{��)�a$��<~5u���yIOt��jT;�=��"�S��H�O�1\诸��G�ۦS�wI,{���iɰ�P�Ԝ�i���Ύv/�{����{*j#�4�9���k�.��\z�V�$��F���.C,	
΁N��y�ǟm8��I�M�e�_DO������1����L{>����p
;#
�-^��$�h��kӏ�B�)em��]g��� .i%���ǿ4dž�"h��S"���6r���q2�)��+yLa�:үߤ���/�qq7� (cM�f��q1
�!7���������5��G�b��C��!z2��)91#f.�
HV{�Ӽ�oAJ� �a�	����e���-O ��8�u�^{Ӫ�m@�]o��%"��!
��n�_6�5�7Q�26-�r���HA�%���w\>�Hʹ��(9|�i���vd��ѝ3z�=��;9��{�*}�V�iT5�Xm
�\
��^��ܜ7-ϵ->i\�b׋=����='��g	����?�w+*�7��QQ�g{����Q�[�o`Tr]��4
��i��_��#�%�:�ޘ�Jk���u�'c> F������yh�$���L���{�ϫۣ ^Q�'���}�-�w���AF��e�LH OOn?X�3[VN�꺔�xj�u�?<���39Oq�hqC8��m�ލ�
Kء-)��'�.�~j^���O��"���M��+�a1T��Ix���Ű��]r-�Q7h�����H�	"�uNt���l���b�(���A0��&%����
�j��c��9n�7����T������.>^C�Kw��~)��n��/k�&�����4���7����~c+���4\t
�Ѩd�ڽ�O�俈���Yқ��]f��H5jkS�7d� 6�XS�dMq�k��m@)j���8��p�Gy�>ZD	-��Ӳ�g]��h��~�|p�Kʮ��ڨ����[�ɍ~~�@t�5�B�5z'�&_��f��G��R���]$�Ln����KPk�1BRd;����܅�����O�/x�J��|���_oR昷�����F�70�E��ZN���+zB�Xe��� ]wK"����A�Bt��{�lWH��j�
c	�5�)Mh��-"&a{E���*�9�ԝ�/�vɒ��Z�BY�Ip����(�dJ�۩�8� ^A����گ�q��i�e�wq��nC͵�y�H�H�'C g�`N��{��\�N��'H���~��d�����Zu8��	(�§����y)�����lOT��뚫h-H���1�#B�4_L�.cq����m04��;�̷y�^���o�"�lᵦ��ٲ��h�vpƏ��h�!V�:%Z�M=�i������c1}���$
���-(��Rc��(���2�Ϯ�+(O
.h`|,����yR|8�gת�я��o��UIĂ.�7�+�h`��3�"Ëo�uW��gS+� ��{7���ܴ��$��ꦊ��V��Y�<��/�fH���aE?�)�T��u�7V	�j�Q˚��G��c�q+~j+�jXO����c��\����'����~=��C�v������!�r/�%
������V�b�@���������t�0����+{�q51�]��r_s�XoM�I¡[��j���P$I)���w2���ߐŏ�2�xR��46��ulH��g��{P�pAZ|��b2�
ҏ׫#�S���r��<~���ׁl��y�+��� �,����,S�S㒑h��Μ�ʱ�A1��j{2����;i����vs.\�ʌ�~6���`��1s�84��U��.��A�{`�,�
�iˎz���2���H��K��o�k��cVdv,�T[SOo;�3�j�?��F��
�%����>�4]Q?ʥG������(?�s��ocҟ׀��\4�l��ͤ>�B�g�㎬[Y���fX�J����b�)�KMn �xc�'d�#0Z��{u������N��Xġ��Kp&X�(�O���Sj?�� d���y!8�a��Ќ��F�ac�
��(iy:R��]��%��I""?w��hZ������`ߠ�̸�ȍ��h�G��x�xټ����%F��@��P�
gqO&ҳ<���ʹYz?D��L�9�?�m��0�b�zƴvo̔q`h�6�:z9V��L���m�K_Rb޸HnR=�����\��3�й��-�\頒o�l�U 0}�P�]�<��o���>㽢tO.é$��τ9b�"� ���߁U9[?F
hͣ���]�mf,��?�f��w&�bʔ`��%J(V�]R��o<U�Ly峮jeT�|�]Ȋ�i�f�@Q�6k�L~G��7K�h��)S���\����N�Q�7��ˁc�5C��滴
�|?Y5A��2,��O�<ņ6 #!�Y�7�\��Š�#�΃ R�	�B��v�=���t���?�Kj]f9�repӎh��G=�'�E�#�,�%�ɫ�{�����⒌M��E��Z��t��]�'�u���~*�W���+���W�6�?��&px��F�K�d��v�\��I��x������mޔ���6��o���ͼT�&yޟﭡ�
��D��i�4����������7ޔЫuHq|�0�k5���+J��ua,[/u���O�fl��AU�=��Sc�y����
C#��!������a(��uH���0�?{�b�ݧEݮ2�^i��%��b���{23�݁?��✆ c0{��FÛ��>�u�`�/���Y��- f�D�B+#��<'����ӥ愅hI���(�MW���ԘvH�2Ă#q��be~����GCս�R�@��/0�B`��Ѩ���T����Mn4�#JyVy�,CS����h�i��Ǆ���:|�����**-���.r����[��'�b����7��Wt/�Ț�J�^��q_\'*��V�Mׯ�hpN� ,�����\!�|�� �i֒��j<���Dg�[��"��~�ܒ��U�%��Fa%{l[jn�ͳ��X�v�ߛ(F��"�X���O
�u����c$	��r39��G�*��S@�i4y��q��Ђ<�Ǟ�w<@L�o0��21hl���q�n����r�R���a�}���d--0�Q���<�� �d%�(蛍�*�����/(�
����+��~�������J���v*��w�]`�}����[�+��l��/�!��h����
���٬ͬp�2sE�������Ә���K?�S��
Y�@y�U����7xr��K��)�X�}hgA�j�2���2��2��
���b��J��+P`��&4z�4�Q���!-��
��oq�w-
�E�*��m�<V�+��gJmJ^�!�:������&J'V����`af9#IT��9/A)j P�ڤ�J�å%1�(��?�hh�9�o0�7���c�������z��Mk�ί	P�#�ԝ;�ꡓ	�f7�����>�1�C����t@�}<xsR�`�7��~V��Qt�l,ze��m.K�aT�_ɇW��{CT�Λ�[�>�A� �6:��!Y8�X���O�o?���
��l�a��迭��}��o���d]?ɻȄ؛�ˍ	y��,dm�$1��^��7��ҋ�N�&�[xJ�O�^J^�Cb�������շw���bM�4�x���1̰]�s6���g�m -�Z�%
�i2yJvLb��F��LT�*���o���񛿯(��wp�\���K�yY@]��D�Ս�8��c,���r���jN8ɪ�
�x��ɠbܖBo�
*X��%��

)�8��
>
����7�?ܸ�|��i����/A�j,<��� `��X��I����6�%�c��q�D��ZS�B�Z��I��%bINwl߾��F��U9�V%�v%p�y:V@[��;��b�q/�i̒�iM�Wx'|:<I$&0��8c�-���8=ȃ���[�`g�y�%�A�]�.����kS�2��-�ϹN
�F6{B��� �X�(w��z_�,1���*�	i��(�f�JL?��;?�6�k#s{*��YEu���$�L��Z3�b=��v��
��i��k=-G�9Z�c�3�W5Rm+���g^�G���p�˥|;�4�����O?$ZMO ��>H�	&p]�\)��G�P:zk�9���Z�y��}Y�k�	{b��Ň#�D6,�@vE#�ְ�q"����ʤD�wS~Va�XJ�t���/����P���yO�Q���-��*�܏�5����]�t����J�JCR,Ԉ�;��^k�M�@U�W;]�D�
�l�R�/4��2��G,�Ul%QJ{����ik�B:���l~%�d��4u_3��������������������K>5???켼hKi�oˇ�M�*�U��)�����.R�t��b.�#�GV������^�Y���������tI��a�]���ۜ��ЉN��x��eC��C�a����y� �m���x4q|fU6!�!�7�%G����e��$��3߼��L%kB��	
4�*���Wa��
X�,Nhp�dΉ�\n?2��o6��;��}�i���%����t�6�`0���C�CקƭxiF�QQ����l��U�k�����<o(j�r�J�MO�%�k�IFw�ɑ��hĳ+'�j��i
��9<��u|���v-ʾ�o5C�Y]����(׶��Px�RF��}�ު ̣a*=`U�ANQ�93�2y�xY !���t�@b������k@6���m[�5�g�V�D;�v��D�D^����-1� �B�>��'`G7����K�n�ڇЇ5�4:���J�v�b�@��: ���.��XS>�|�jt >,ԩ�Q;��X�hUF�=	�bZw�:��L֐㪕����>(�1��4PFu�MQl�b@��`ˇ����0B?+�%Nak����fϣ�
���xqD�����Y����XS& ��a�4���L6��L���|0�x�Yt�˾�zV]���҇��Д�@�Sũ2��=H��$��m^�T����e�_�2��Zfl��@1�����y�^�O�!T��P�j�A� �o��2���O�)��-���orMԜ� h�ó!�հ���,Z�O�)���|]l}~�P���C��,K}�/H���q|ĨggE�y�#r�����Sy���"Ȳ�ty�p�����R�|k�?oe�o ��h|b���ˆj�K��$b�~-:,:hy-u�U�JoL�Y�#T.rE�M��_1��(۫}PT�"���+~�&�d{�Dah��՘+vCg'2&�{��Դ:�UN$�(Ǭ�4A��50X@���g�N��r�81�5o{޳_����|C��$dOθ$�����<���7��W���V���p����;͊��/�����}Ȉf�k� �_>�j�iԀl��C�#�P�1j�����Ls�o~��U�m����Ϳr�4�����n+J�~q��uE$ �� �� ��������<��pl��>�8��fߧ�$|��S�۶t�$�2X�A�gS<D����?�쑇xz��5���*Ȓ��%X�-C�K/D<!*�*�nz�)�n��K��q3j���W���\r�#m�gA!ȳ�P�7�8�|�'�7�x�ǂ�&.9b���2��Ά �R��v2�=�C4��l�*Bq�c٢E?�6\"�J{�	���
_@�,QcY�-�q/��5�*.\�8�����.m�s�.Ր�u(�y�����,�
�O֦W����C�Ze���L��{��~0����$�s_]!�I�p����J-+"	aX�=X*�y�<�7�!ˏ��%����;���SI���;�QJ
ݦq��ǅY��4k��	����A�-F5�)�W�
R� �Z:�
�z��}Ig����7%�|�7ّj��v�����Wu���U��q��I-_�0�r��'��l�$�j�-Y]�Ie�+.���
D*��BV[q��c�W]�~�1֜庁��|�6��
���݂�_E�~�d�1�P��#+��_�}�yY�L_6[I��+��(����{Po�(lʗ7Q���m2*�i*��Fy�\���&�'�խ�a˛�ˮ@{I��&eq�D�'����crG����iD�VIcD�ޱ����pi��	���<�"�iX�L�Z^�_)�V�W��:�ό�ƫ���ҟ�,������@q��A[.�e�DOU��L��XaT�����������
y�g����sd@�.����|N���qO&�mS��0cf�=6�G'�^Q��B�G
D���ȓY͓��m6�哖^;?�}�J��/b�K'X�|K�zZ�i�dʻ-�X�Q�E:�_E>zX��
-���G�
���C�j���Pۉq�ȴw��M��<T
���X��7>���B$��z:j�%(����h�x��r50�"��Y2�
��k�z�&���%'��ru�R�������B�o$�m��s�A����Z�{� |���'Q��e�b��Y4����H�>A.SaValW�<o��o�� ]�ؾ�V=N�m��R�@SU���{K�y(�1�����!��v����h]�	��C�.��5ʸk��B���K����#���@�&[co���X߀0P���\|�k����iǗ}j�S�#�*k��1��ΐ��u&�x􏧢�z����?K��L���_A���G������f���lH`��W9�&	�H��}���'����K1=�4��2�"�.XIa�� t'E#WM������=�M�G3<��r�Dp��;-�Ux���<SK*����zK�G�%kA+�"�Y������h]5B��V�@�I�����i%���5�&(�L��3ӧ���Aϩ	���U���U.�����ʑ�o[%����	иt�CFx� �o�B2C�ONVm#�����ccო2d�������1V^&�޽?�Kh����V��hQ�Q�*sH��R%�P���t;�5
(M$W
eG�8Nsm�[�`�'����S�E��{�s�٭_1H]�sB`�p�����i���/�X]���F	d�H�� I��yad�j��rk�Ih��3�><
��J���n�w�7�r>�������ZP�O�b� A#���F[�~�1>�B�n��C��+�b��q�=��;�rc}�}]3wx;j��a�Iݱ
|������p��]q��<D._�OƧ��#���S a�$Չ"A��#m�Aվ
з�#���qC6��t�]p��X�FY�,
�I0y:�v��<~�#ihx?k�P��t旗���@�H�t[*���*�8hqk2��=��Z�/xݤC8������E���uU�)��p�C��))����7����� �U-���+m`�P�q7S0�4���BО�ΎǸ�)��W�s� �_�O-<0�o>uf��@�%L
vњАp
�ߺ�6�F�eѮ������E֝�j�
u�C���uXI�><Vk
�)S���}!y��� Őu��v����6��|��&�/_�!��J�;l�#XGW/��Ac7O|RbY�I}r�[�j�I-�.w]�s��
nE\v�]�/G��s9��ʁut_~?N)Bԑt���H�oZ�<��
b��GTP'�+`���r��Kh�(�%��Z����"�T���}���y"r��<�!���5�I��?/� U�ɟ=׊m���O��\D�*�L��~9e�-f��ڀ!\D�,��yDc˵K�0>�XBA۫[`UR��M�vn��K�.��QXl�2��<��|ԝ?I���+i=?���o���u	/8�XZ���/�)���k�
���&i�S?e�K�{��.3�gI�udq����
+��}e~n�cO ���s��@�k����|:��f�Mn�Lp���y�L4N�jw�T���FQ��%,�3Y;�rEu�1r��bP_��^ҟ�䏶���*w�><���m���ww�α}m���Z� $	QL���;@�s��EJ_���짨��EdN�n��7�7��i����*[d0@kί��n �9�w�2����`x�)&L�Z�##�<������w��XDli_�LMOr
�qKh1�vb�L[��D�H5�gB�ݜ�E=2�����n/��'t�_Ce�Fs��6�>�ɖT̃��\�М5�Hz󇏞��I��K�������wq���b���
��p�x���4�ǘ���*))xe?���E|
��5��A���L��@�����W$���SH@:�\y����
 �5����#�Ͳ%~��hU#�q%�$
N�i"
5v{�6f�&�5\vhX��d	z2 �I��ic+�ˇ�a?_`��Q]Y+O�t�]-���<�����ofnx���yU�|Q��]I:m�4~�ȃ}������W�JС��
j�����ߘ�w�n�x���:-�4Z�^�z=y�ۯH�=��*�[ϫ7F9H[��
U>B���b��h�1�Ɂ=��x^��&'�}.�"���j��n��kƐ�J��_�	��B��>`����	w]`�2zC �V Y\�ઉ�k.��8P�vGPb} ¥Xg��ԯ��y�b�@��k��6FT�ۓeb���գ]ɿ*�I�t�`��Dx;���
�Dn�	:��ՙH8Q��%�}�HI@�"ZK����!��L��#�x��Տ�jq�7nf2�ϔC�X��/[#�]��Ga`D�ЃV�
a�,
ԥ{��l[�8���=$N�z�����o����3�O�~f���4Ҧh���{�VM ��Y��f��0��V7��MB���[yz����p��S�U���X�ŵ�T!�Z`e�Jxwg"R���s�������;r����#�6d�y��+���y�����L�q��˓$�?=���]#�v����
���]?�^����El2��&
�0���G˾�q`E-@m@4�X�����چ�=���{�Ә,�*�\TW!��ŷ�3����
��ύ�)�&��C�'���)%�DHD�'
��/)�g���Ss�Î�A��x���L���;�z��b��j��������Nh�O�"�Q4Q�h}�&)��Ւ[��T��s�󣼦Y�J5��9�D3��C�S�^�0u�~ü��*N�"}��/vxaS�-F�E�4L�4M^�8�"���������A�0 ��2�v�
���v
S��������zB2}����1`�֘�����xbp�\h�/F��D�)²��4oG�r섻�U������%԰lb����$��o���a)�Z�l�VH!������������W�����M���|�f��"Sû�D�I��!���x�>�1��WU;'fP���(3Uy.�sl����6!_���F<���
��)s�~�`�Q�m��x�t>����ت�R�o����W�4���bx�L>��ե�g�����7��My��8����� ��񴩾ޗͯ��Q�sL�ì(�W�JKo���D�!|�������)ڞ����Y>(-(��pg��YQ�edhl���<D�g߉�f�k
/$|-jy�G����D���u��]�J����s�F:F7>�����5�D[�|R��@��wf� �+c��T������ME>Tz�Kp�c���S�B`�
��{"�����
2������
����v�3�T~M�\ʩ_�`��V>j�;���s�0���&��Y�5V�`�`������4fϴ�4	-;�-��q�~LW;7`a@�,ަ�NFtj%���k&Q<�E��;�ɒ��P�c-Ai<)����O��h�3����?{h޴1I��mr\6o7�������g�/��z�_�
p����o�ȼ\g��A��f�K�Z��Wؐbʄ��NP���KoF� �	
<*������8�g�BBP��H"{]��^����	�FQ���	�G!��6jP�b��V.��>�H����e����i�����j�`�������8āo��^��4D�p@���łz�� E|� ��I\��vθ�Ηr�3j\�p����0�p**� " ��)�[%�X��Rn
0���_���=GA�G!(r�NmG���]�5�3�Mz��'F�����DDd�ț}�x�۵}��j�C)ԡɔ�(��5�f�!�mqh4�D�L�!|�[S��?g��^��+��%�����1�֌���E����'n;t���R�}ZAT_0�-P,-���?����6aT>�}�~-VO�'��sD!ٗ��M�|RYQu�	�a�Č�^/�EE���ԇ;�� VJ�♆ZGưӥ�����S(,k|.���a��������ץ��,�*|q~�cb��6`&H$���B����R?��m|�X�ٶ��
N��4�L�ܔ�q�ޯѕ�Ɵ�[����Um�UTLb��5� �����A����H�\�+�~�?���-��Ԉq���]I �'���z0��>��d�0�3� i8�!Z�M5�Gʦc�6��H�6L���2DD�gL;/V�Ew�������A�,�cړS���F|��?7gֺ
�S5��8!Ѕ�@
SN��!)V�E�:�"1}j9�C/*Z���2|i�Z�?%҃xt���U�|�p���V�堉�z��\��<�1�AQ��� ��=8sKR� ;�C�?�Y<4�;t�zl������>(J�E{�V�]���"1��xh��#R��d[�hs�^�/.x��}�8�\W���I��4�K�%>�U`��������\jish�~=W�:Aܯ��I&)#�#�s����?a_��-�Z�1��??;��U�S��ľ'F��N�M�d,~e���<0̀$�πA��H͎LB�k%2K��S:���TfO~�+!����ikW��k��L����	����ͧ��^����`s�����&�%+_T����
�A�w�X|K٥f05�紆-m��A8�$S6�˧������|l)Y|&P�/H�YkK�7�S
V��!Cr���o� r(vO3��i$�g��4������e�I^b8�	U-���b/�t�O�F&�0��;n��j�d{�m(X���!�F�u� �f�U%�3�;FV{�,��s�:���ĝ��Ū��k��u������wpN��\����n�?��ￆ����k���������c���_����?Φؿ�C����߲�����3ϟ����>���_�����g��|?�L�/%���������\�5��_/�5�jZ������}����o���������������q�{S 
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[23]=<<<'PACKAGER_BIN'
�PNG

   
  �   ���l   gAMA  ���a   sRGB ���   -PLTE   ������G��;����GRv���.G�M�������TVa������A��L   tRNS ����7����d�f   �IDATX��-�@Fg�!@���G���5x�C �H�\����`��IHa����|O�N'�V�d�	h���5��i'���|
u��"
PACKAGER_BIN;
\Packager_Php_Wrapper::$Contents[24]=<<<'PACKAGER_GZIP'
�      
͗ms�Z���OA�ܙ&M\$j�v@56j"����Áh ��s��=�Ƈ���ޙ��z�=����r�_f�C<~`��Ig(�B��Ug�%��ė�_�b����%"xFD[��
A^ ܳ �+w=��34�tC���+��t������@�ձek`G��&��h:��:�%��S[-�E�M�a#+\�6r�Ig�����(���j���0ɑ.
��[�ظ�
�KV�S+��pX
i��`q�""Z�ȉ�|<��ӕlt.��?=6>Q�#�����WC�-Ϗ�"6��$H��9���ۭx�7�K:	�7ģO�[�&�d��+�Ė��)7D���
��(��s�4�m��c��-��x��i��'�zb�*26���7����z{��C�j`\f��к�R�2����S,IA�W%z�
�W�!@��|Y����M�]��%tb���P��׹V�5�E�)���CA4 ��4�O6�.��s��/5��ߖ�8�^m�9=$��$G��:u��AU����5�|Sq���}@RU�`�o��5� Ӕ1��4nN�
sșm`�	P�
��Od,+/�\���o�&��'m(��y�G���߄͞PP�9$�q���wC���tk9�saS�=vಒˋʚl�SФm��|����k�=^���aU߿A���ρ�����g�_���Y  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[25]=<<<'PACKAGER_GZIP'
�      
�WkS�J�~E6֭ZE�<@D��$�� (n퇐L�H�o��3�A���*Id:g�t��i��m�:�B���4�fh*�t��߃E��i�[�rS��[2� ���7U��� ��% ��2��)�f�oi�F��% ��$=��~���OC�ě vƲi32iLA<Ol3�0�o�B
&��R!�f,���RY�
�O@�e��lǹ<��W?�.�XZ����r	9�C�X��E��#K,�Ð�X2K��]�ϯ~��?J'� �p�P���
l�؀�Ì�`3�R���Q��bJT*`
j?
b�E��V�F���T���Xu%�NR'XS�I�Y$nJ��?c	�+g\F�Ơ�z>{��ܼ����S_�AO]���s55{g�dUWD�zF��0��
7e�R^�.\K�����s���>�š����O�Tі�6�r����u�&h�t�(��QP�Gug��`3�[�����j�b��� �[�N�4���	�L����R�o��m�S�h%h��иeo��Z�<`A��><�'�R�h� ^78�>�`��蓿���<�F  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[26]=<<<'PACKAGER_GZIP'
�      
�Wis�H���B�k��F�I��H���`F���c���H
����3�`ado���M����n��ڗ�s��FN�4[fh*�u�������/�?j�}i8���h����xٖ(��1/�6(UkQl�@��=���3 �$)'|9h����1"��� ���X�l�&�)H��1�΂a�����Y�`����Nڏ��a�r���?���jd����i�Q��Kת��ڻoR�CP�ؿl�u�l���w�c�ML�M�}4�����~�ôjp��{���*z
o'7-J�W�J.AX���/3�lR�ՠD1�g�?0��-�|��(,�iR��@��􍝽��N�(��l�������eO����p�����pl)�^^16�S��Ҍ� ����&�.<)F��UO.{�_^�o��3�7�c�F�F1ܘT��td�?�k�vh�m�~�����>O���pz�hb_I��
 �z�h&�Y��WS�]|�`��
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[27]=<<<'PACKAGER_GZIP'
�      
�Wks�H����!�U���#&cF���&�j�L�£!�0�fj��v��Q�����,�B_ν����KY���5���
��y��Ep�K �C���-��� (=���$����i%�+a�@+�g�k� b'���l�LLS�ȩk&΂a��)�r��,W+)�4��b���c��}��g�L��l�V�]�Q7-;n��d�Y
�r�����/*���Y2�.�9K���boÓbd�]��c����p\A8�}s8ve4��KH5\_G��S��hG�-Ц���9
���V��ӓ#w�j�\�P(⣧�e����4���'��51�|O�ƃ�$�ݞ�@�l�aw�| |8"����K0B�|�c!�jC�+��g�����y`/՚���R0R�ڐI�C�;yUi���w7i������p���Ė"^�P���dlw�h�h�W/�Ҥ�h�H�hE�23��h{�i{xŒ��t�mvŊ-�b��'��O
�u&��]_$?����M'T�2�a_���P�� v�PΌ �^�%��n��.���k�|h>i}�Jw�J녬���U���4Xtu4���<c��j>S��o��ԛ����~9=��mì�"���l�T�S�q�ܝ�7���K��Cמ8mr�c(΍���e���i��յ�
Ǣ{3���/��u5�׭񰫴��5�g�62,���.����J4� ��g�����z~��*  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[28]=<<<'PACKAGER_GZIP'
�      
�Wks�H����!�U���CMLĩnPLL|�L�ް�$��n��n�R#�ݭ�MU}9}��s/WS���=jn��L�-04���P�`j
�4���~�~�:�pܭS�ܦ�
��)��/ 
>���z�ŁeY�?
>��4x���K���$�=G�Z�L���k��/����kG�
���X���� �5�1�m�X?+и.�,�VK�bi"5x�ˊLl��N��B�>P5M�,lឌ�@��YyB�M���F�T��cB�V
<L�KM��r�ĽC�~´d;���=P��b�[��i x�/��	 �@C�����A��R&�[g�fgBc��P��3�>��w~޻J� �2- �KO��Wc����uGI���.)����@�;���1��nW�v]�O��3�ȁ�q
�'uÔ��5�����b�S�Sy��/c�������Ҟ<b[ˣ�RR�,E�<��ǫh�R��e���E��ete���$�	�[K.����fi�����Eh�Ҭ?�w)��Rƭo�K��qr+_;�&D�9�7&
���X�l�  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[29]=<<<'PACKAGER_GZIP'
�      
՗�s�H����e�6q�|gխ@|E���� �C������7`�QO�����KU�i�����MʟC�"|�q��U��n�$�z�j&[�V!Wk�s���;��&]�p}��J��`��Q���D��- '�iz�� A��۵c ޑ̹�,�o�E�μ�CĞ���3q���$ajs���W;)R$��^��#q�t:�}�܅�|�<&�J�H����L��j��"K����/��5�����ܲ�����ǭ�~Z�0x�R?���,��ɒWJZ�E���@e�������5(�m�2�A�h6�V1�UH���S#��K�]ExE�q��b�뮆�xbÍ���N�|/+���$8�mA�)��V�*�~ղ-��$���j��T�P-���m\�����	1�J"z�y��r��cW��֒=�C��
��r��$w��I9�Y6
�B�o����b�`fy̇�N��Ҙj�:�!n_6`u�Z�[�����)3�ͶR5��6�� �h �7� BrM8�6
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[30]=<<<'PACKAGER_GZIP'
�      
՗�r�H���)�qmU�،�O@j$d��-[N�B�t��������Ȑ F��VeMa1��{�n5E�������n�S�'Z`h^�u��c�ڻ�$ԮH�S��*���@��9��I��-�)1�w�N�L. LӴ�r�0�a+�&���!�M;c��� � �S�H�M�	(�tm'Y��Rd ���zN��i�w)��yn0�2���0�5ô�F-N�ـG�w��&��G��3Y��]X�u�����%����.������.-���zf�������7x��K���K����"�p� �\�����.ƌ�.���@R
N�r��f�|�y��ҝ�"�w�WQ��G�����-��PLo�@���
p��r&[(cC@�S�Z�HgJ��kN�����
�Kҡ�p.��y�Lk��Pn3�m����z�7S�f+0x{��v�:0o���mA}e(�:Am���i�����o�m�  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[31]=<<<'PACKAGER_GZIP'
�      
՗�r�H���)��*61��R���T.���$�$#�����H�C��UY($ͨ����[
�o�������{YNڦlε�`���?��nG:��D���&w?7>���苃�p%c��l#�]��<�'#>Љ��gv
�Ȓ���7�c�����i�{�pB����Z��S��h��Y"u5T�R+��Oc50�s'}��Q��5����ʶ([�RƇ
ЉRo9�\U�z�a���AlsRj��g:�v�=�cY��G|OX���or��� �R����RJ�e��S'�^�o�����Yxnԕ�>�����z��%W��R�mr6�
3�G�px�@ѩ�f�g��y�8����uN��m�'�^?=GU����P��h���0�(�R����Qqa�r8����聓
P��<
���rG3�no�A�O�
�iôS�l��p:�� �����8���*�$!�MW6�O'����:��י��qM}y��f,X�4��E
VvN�C���"��8���)D���,�x�  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[32]=<<<'PACKAGER_GZIP'
�      
�Wis�H���B�k��F�I��H���`F���c���H
����3�`ado���M����n��ڗ�s��FN�4[fh*�u�������/�?j�}i8���h����xٖ(��1/�6(UkQl�@��=���3 �$)'|9h����1"��� ���X�l�&�)H��1�΂a�����Y�`����Nڏ��a�r���?���jd����i�Q��Kת��ڻoR�CP�ؿl�u�l���w�c�ML�M�}4�����~�ôjp��{���*z
o'7-J�W�J.AX���/3�lR�ՠD1�g�?0��-�|��(,�iR��@��􍝽��N�(��l�������eO����p�����pl)�^^16�S��Ҍ� ����&�.<)F��UO.{�_^�o��3�7�c�F�F1ܘT��td�?�k�vh�m�~�����>O���pz�hb_I��
 �z�h&�Y��WS�]|�`��
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[33]=<<<'PACKAGER_GZIP'
�      
͖is�X��ϯ�險I�x%ƴ���..�[W@��Щ��s�,�`bgz��*�{}�r�s8Z����r�*N�	���U�u�*����o�|��g�C�
�I���yL702O �8�/����(��Q!�z4<�n��|�� "#���d^t�H<G+=X�,�w[+�V)�8��v�jF� ����6�V�&KH��e�~��*�a���l-�.+�r<#3_/A�&�2W�u��4���m�~� �F>.��&;�����l$&��۷�%����
�h�¡�'�Vz�ʖ��}L���j�V$�$��a�i��H6�4�r�*�Q],4���3�ۑ�(��Q�ت�I��l�*���f�>�l#�K���b����a/�T�7]Ϯ�魥�ħ+��w��)>Wb񫁯�OD D �v���+�[��
��?+}��o��p� V��L�~
B���l�sm�"L?~���� o�3xgx<���Q�C����X����=돏�}�6�|��лx�q��;�x��v����)9��z2�S��Ét��v�J�]�^>���ȋ�b�Y�84��N�1�ԓ���$>�O�gvՓ��/+�w��2�i�ݑ���V�Tce��8|�m�0����m�w��P}��i5f����4�ˠK������VI��,�C,��$�`
"'��-�Y/�
H��1�S �
��Rh,,:�Y����f�ZD	��
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[34]=<<<'PACKAGER_GZIP'
�      
�Wks�H����!�U���#&cF���&�j�L�£!�0�fj��v��Q�����,�B_ν����KY���5���
��y��Ep�K �C���-��� (=���$����i%�+a�@+�g�k� b'���l�LLS�ȩk&΂a��)�r��,W+)�4��b���c��}��g�L��l�V�]�Q7-;n��d�Y
�r�����/*���Y2�.�9K���boÓbd�]��c����p\A8�}s8ve4��KH5\_G��S��hG�-Ц���9
���V��ӓ#w�j�\�P(⣧�e����4���'��51�|O�ƃ�$�ݞ�@�l�aw�| |8"����K0B�|�c!�jC�+��g�����y`/՚���R0R�ڐI�C�;yUi���w7i������p���Ė"^�P���dlw�h�h�W/�Ҥ�h�H�hE�23��h{�i{xŒ��t�mvŊ-�b��'��O
�u&��]_$?����M'T�2�a_���P�� v�PΌ �^�%��n��.���k�|h>i}�Jw�J녬���U���4Xtu4���<c��j>S��o��ԛ����~9=��mì�"���l�T�S�q�ܝ�7���K��Cמ8mr�c(΍���e���i��յ�
Ǣ{3���/��u5�׭񰫴��5�g�62,���.����J4� ��g����߇sٺ*  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[35]=<<<'PACKAGER_GZIP'
�      
͖ks�H���`�ڪM���hL2�
���i���p��[���z{44��7�f�"m�8Z�Hc�1��$�Y�g,M�g���qd�B����C>4x��`�S�S�!J�F��h�"
�]�^6>���س��p%c��l=:]��<QϦ�����$#>XUO[�h~��}�9�9�}�9v�5�%�$3G��ݧx���
-���_
U��vD%ii�B�}ץ%;��8̩u}��Oz��굗݃�1M�+��d/�-�
�Hŉ���������e���]�e{�G)u<
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[36]=<<<'PACKAGER_GZIP'
�      
�]�o�7p�����dA9�{�][\�>�K��p�E�jdI+��X#�{�%�?��8i��$6�g8�!g(jt�ixUհNVW���Z�"�PVWW%�P]�p�����m�KA��� N@U���HQ
��`;�9(@���/��F�(� FQ	�̳��q�iU J6`�`�*��Q
�u���7�ۀ$��}�/�����4U]&���ɳ
�/��
�~�7J�TW��(
��h�d#&,RPma�?.�a8ϰ/|� Z�g�-(7��L��d:�k\3�<�|�1L�b_A<�h_�8���?���B��R,"��t
�r�5V��|)�����]kd�r��i���̗>"to��>�%fI�c-Uc-3�?^czfza�kf3=�?�����|�㩀��C6y5{�Ɩ�@�8�����m��xbeR`P��In��j�V�� $����	y�/+����_ �> ]x�q4n`�+�Ad����56����_��/����?�0_=v^ݰ11��ی�M��]c�^�d�暨��/t$�8��f�i~��ae,�rTm�oЕ�JQ$����g���=)���ICk�Nۖ��v�ߍ�6��TR�A3
!b�j!��jF�""¤(ƨ.b;&���ի�1+C�H�(--���}�c�<O�:�r=r�.�q\��@�Sn�+7�������1�>=sè�`��u��3�5䏙�l=��i�xh�:���=4�?��b]ڪ·�h�U�H���X�7����hy.�Ph�!vݲ��h����}
�Ȋڼo�����yy�S$c_5�$:��]�Ď���cl���[�C������ށ����<�=\l�6�!�AF�qt��VZ�F�C�ir��J����5;5�QX�q����Iqw�J��؈5;5��84��)
�!n��؈P���d8�F�C����e#�@,���W�s���Cl���*�ϮaU��ӡ��C��0��N㫩��5J�m
�8y3����S���hw�孷��A��'=�+$�f�����y���}B7?FT�{���HK�#����|5��u���\�n#��CO.�X�bk���]��G[x���n��Ƙ��]qT�yo���#�ң8�]����ǬG1繈[/9"�=�7�e�~�o�{�E)4���|��3.>�)O�v��;j>�1o��vC�;�>�5'�v��;�>Jj�n�娀oT~��{:�S	�1�Q|�Z���"z7CA~LgC��}�/����$x���|�ڶ�!�}7uش�#�~�λwu�'1L�����pr8������[:x�����,椱��=����p�=0e'E��8�F�C�ر+)���;)~��J��؈5
z����QA����T0���k�fb�1˃@L|��ʒgk[�_߽A���w��wm���Q�]�����6� s�������>��0MV��x�c�$��&��CR%Q����&q�21S3	��+��L��.k�?�6O��m��`���8�,���p�:Bs
b�[�6T
���Hz^�8���H�2�
��xb�I]��t_�~^�*�nS�0Lݘ��+c��k�9`�%���(�A��i����@���n�<�� �,��du����Z�1B5��~������c�*�,�]H`���#%!rC�5�;������rY����L�.�r/|6HA�ߍ�Zk��k��_Ӷ�^��ׄW$�α4���f�Ls�����;Sg����6C-w��S���rm��M�Y���,�!����ĸ���AD8��)��7N�r
�C�$�!]܅V�x�B�"��N���5;�Q�*�=~�Nʪ�u@��x�x�z�U|=�AY�s��n�XC��y��/v�)`��L��y2S
_����1��cGb�C�ly�ag�1���b �� �Kq�g�<�UW�{U�%-�:m~>?M�ٹ��+�5I7��k�Y�SXThQ!��úAٟa���B�e	�
��!ML������Q��������H��KU+
���1��` 
�`�r�~��u�u�H���I��z]�.�t�ƪ-h��Q�ݖ�j�V�Nj:9d�e�{����c��i�<���Z}�U�~'˛p�_���?P���{�@�׀ {�Z}�Oo�e�J��o<��[���x�OKlS�����*dx�f���7 +;�n�T0�D�p�燓�-�V+�f5ļ��&��B��4+�i��/K���m���L�W^��"�}E�����S�
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[37]=<<<'PACKAGER_GZIP'
�      
�[�s۶��ޙ�2�k�L�m�����8I�4�i�6���I��M�^��ce��{���h7ݹ_D ����ѣ�QY�*
�Ju����X�"�+�=CH�PGC�~���U9�E^���	�Utwg���`"Z�D��9q��evkU���+ {"�k\�c'�W��,�"�Z���1�i-��bւ�բȯG+y=��ϊ"/,vѣ���BT#��*na�FU>
�(�)�]���A&x�^���N�����'��<�������y󻍶�ڐ���[, �Ӝ�J�h�~I#��^���V��zg��j!����TvS�T�'�H\������:���e�Ƒ�\���L��*�ȸ�F���LIsM��2��
kB��Q`G~0�ЙEso%~dXXlw��Z<�� F��63[���,Z�t���TOIŵ��Q��H���ac_��'�ȱ���
aiNy�� �lr�g ��H+j/~�x��?�7���9j�=�����������b�
��qt������\���j$oҲ�cd2��g���^PHq��J_�[�I�BK%ww�o�*y8`��,�u�1�:�"�+���Y�T9�
 ���:�"�T��$��l�"r>K�ӥ�K��ZKh	[��v�-���e�����7V��D9��`�4�*�F�!<.��J�_96�d��d�/[4�d�8p��F!Rt��`�Mx����D�YY�]���O��kX4ӛҲ#C�s<m�i`;"X�Z��F��U���l:�PcF"Cow(o@�W�j��2/��t����rd�ᣴ:�n2�e)�[�C:���F�i���8]��뼈��} GaoF(\ܲo<����l������$�ؤ�A)���х�롱,��p���{��.�8KtGq��W,��u��* ���i��c�lyz	�W��@��j��vzb#e��-�r���� ���!Y:Q�Y�f��&{hB�:�'���)��5��F��Q��vK���� a�D,,����7I�slo��u�v5F#A�"��W�%�u�鯥�s"@=�����)l���$s���O���t�����luu���l�o8	�=^�ɻG��{Z�(����{O��'����HH��{�w��$#�H���*~|�� �gr`�6��zp&�,��c�x=4.�1� ��]g�}�^��X�j�G�o��7Bm���Fq�/��X��7��  ]Q�F�.�����]&-2!���ǭ�#D���Ԡ���v58�$T����O��-��!$ޱJ	Z%���=#"d2A��mK݇�ٶk�!+	?KČh:?˪1Fx�.4Qg5��L�5�qi�͏1�XK��Ar����M��
.U-�����/P��U��|S+	<'t����^�X�E�5��n�y�g��RLl��R%d���o0[/��##�Ү��-�d"��2�^ ��������F!�"/ �W��hwu����&{t�`�C���fm~���,V|tw��-X,| �/`�R��s 5Z�A��a�m��A�ot�V�dP@�\�<��!���B)v�6)���*�!������!� E
q;�.�轕z5A��]�����/��d��f�G�&QOG�\�EUN�,DF�������/�v���\����'��Lx��8��@�K�b�����,� &łD�
�3 W���}�>�,�g-K��������2{QU���qL��T����vD$U)£�����C `y�.`c�<0�d�e��<�^��� ?ԯLu�g���t�K�
ju�s���w0Н��u��F�Q�GS��>(lD���('�c��@��#�~=0B"�~�((*����/
���(i�Q�H�qn�P� ��Mj��#8b�?��OA����GU��g��7��a�^VL��R�?�:�P�a<�s
J|%!V%ғ񽉚�L��"�" Ĩ�
�5��#���6oc�)R��[��8�4��^)��A�~s#��J��M[���h)C1%sEOz-l��TKiD_)A�ᕁ�S �V�Do��`h&��)��z����_��.Q�:��A�6�����KlH�.�<Sx~�n�]�#�C]�������e��C|�]����>�b(@U����?nZ����L~hާ����Uz��ŭkuR-Wx ���:8֟��R��|z��4��qGl�ڞo���f��Q��!/��)W�������u ��ŰqDGSSK��������j��&�����F�<02)��t�GyS��G�(7q`&�jn��������Ѳ���T����'T	�������1�Yf�piU�Ju�
;cV�K��k.�H�
��*M�޵�8w�+���Ł��N�t�]dSfd�zDq��}�g��6�1nVh:�cD�)�\/�#£?�kT�1�d�̮-���1�͗-�9�F�w�����=�|������}���q��P�y	��+2��?�c�mVzu�Z�����"��(���֢�.]*0) �α1�"��g㰦-зf�Q-��&��$�^GФ6'?�;;����MPvt�:�1_�/�f����f29<�9��n�C��x~���y�u�<^c�	��n}W��
��`,�k0�ۅ3��lW@g��N�m�T�Ne�	�⍨N�� ~pt����/c+��~��.т%�h�7��i�oTH�Z
��Ёa� �3)���ϡ�|\�zjNp1um�P�Իo������25�*������^��X�	�.]B�~��|e��n-�:�U�����v�����~�(�y�Sbއ����q���3�n|�b���Π��x#��l���|�l���RϿ��]6��F%/���?���oz�o�v�z��W�S[E�����)+�.E�٘C�(�������p*��1��kx����Z��p�j
�za��~h���m�b�=�_�UE<_6�F@���EH�ѿggs�n�g���WGZA՚����9J8���:6�7B�:+��]U��],�)�P2��g�ؚ�g�Y�ȞBi&��g��9��So����ν�6~U>:��c��i�>���,f�v��
��ɍ�>���s�F����X:��7���v�7��(s�%`[�I�;}x@�t�����N�֟wН"u�:O�ح:�O+��{@�*A%�~�]����d��r�wh��4���a��Y�]�ބ�o�������0]��W����Á����XoM7��ZM����Y�fn���Y�As�툷Eg�C�z���6����5��6_��}a�mC���	������p͞��+��I>\�'����Fm}`�< �W���H��G��!��x�/�M��j[tu0�;�E������r_���!�V��8����=�\�:�ğmr�+RE!N���a��HW��J�6�_3�j�;������o��������O��>}�����
:� �M���oX�c3����xlon���������4�A�u��?|k�On&��q��FUz�/4 j ����Fk��::  
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[38]=<<<'PACKAGER_GZIP'
�      
�A
�0E�������${ŕmW�!�L�L$3���U��}�se�Xz����)�ؑ��]/��3�;$��D�Z_��;�<A�EbIy���i���*d;�	H�i0h���~!���*�?�^��8���m�Y�|\l8j�����}�c�   
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[39]=<<<'PACKAGER_GZIP'
�      
uQ�N�0�W�?���.Łk�APʉǅ��u�ʱ+{݇��7TH ���ٙ��IV�P��:�:�X�lRsS� �Ai,'$�vsg�X��3m��Yƻm�3�|d��؂E�\�k�;�V��M2Ԕ�)e�����Ӆ��U��L���%������R+FwQ�7R�6�Q,o� BίϏ,��ƏV��5
�	����r;��4G��J���o=d�=܌9�
b��֔E
PACKAGER_GZIP;
\Packager_Php_Wrapper::$Contents[40]=<<<'PACKAGER_TEXT'
<div id="mvccore-dumps"><div id="mvccore-dumps-items">%mvccoreDumps%</div><input id="mvccore-dumps-btn" type="button" /></div>
<style>#mvccore-dumps{display:table;position:fixed;bottom:0;right:0;z-index:999999;margin:10px;overflow:auto;background:#e8e8e8;box-shadow:0 0 10px rgba(0,0,0,0.5);border-radius:5px;opacity:0;}#mvccore-dumps *{font-family:consolas,courier !important;}#mvccore-dumps-items .item{background:#fff;margin:5px 5px 0 5px;border-radius:3px;white-space:pre-wrap;}#mvccore-dumps-items .title{background:#888;color:#fff;font-weight:bold;padding:5px;margin:0;}#mvccore-dumps-items .value{padding:0 3px 0 3px;overflow:auto;}#mvccore-dumps-items .value pre{margin:0;}#mvccore-dumps-items .value small.file{display:block;font-size:10px;color:#888;}#mvccore-dumps input{font-weight:bold;float:right;margin:5px;padding:2px 7px 2px 10px;}#mvccore-dumps a.editor{position:relative;top:1px;font-size:8px;white-space:nowrap;display:block;}#mvccore-dumps-items pre.xdebug-var-dump{padding:0px 7px 7px 7px;}</style>
<script>(function(d,p,l,r){function a(){if(m){k.height="auto";k.width="auto";var b=e.offsetHeight,a=e.offsetWidth,d=u.innerHeight-20,c=u.innerWidth-20;k.overflow=d>b&&c<a?"hidden":"auto";k.height=Math.min(d,b)+"px";k.width=Math.min(c,a)+"px"}}function b(b){"boolean"!=typeof b&&(m=!m);(v.mvccoreDumpsVisible=m)?y.display="block":(y.display="none",k.height="auto",k.width="auto");a()}function h(a,d){a&&(m=!0);d&&(z.value="Dumps("+d+")",k.opacity=1);b(a)}var c=/MSIE [5-8]/g.test(navigator.userAgent),g=document,u=window,e=g.getElementById("mvccore-dumps"),w=g.getElementById("mvccore-dumps-items"),z=g.getElementById("mvccore-dumps-btn"),x=c?"attachEvent":"addEventListener",k=e.style,y=w.style,m=!1,v=localStorage||{},m=v?"true"===v.mvccoreDumpsVisible:m;k.display="block";u[x]("resize",a);z[x]("click",b);h(l,r);(function(){if(!c){var b=u.XMLHttpRequest,a=b.prototype.open;b.prototype.open=function(){var b=this;a.apply(b,arguments);b[x]((c?"on":"")+"load",function(){var a,c=b.getAllResponseHeaders().split("\n"),e,g;a="";for(var n,k=0,m,q=[],u=[],t=0,v=c.length;t<v;t+=1)e=c[t],n=e.indexOf(":"),-1<n&&(g=e.substr(0,n),"content-encoding"==g?a=e.substr(n+1).trim().toLowerCase():"x-mvccore-debug"==g?k=parseInt(e.substr(n+1).trim(),10):0===g.indexOf("x-mvccore-debug")&&(g=e.substring(16,n).trim(),m=g.split("-"),g=parseInt(m[0],10),m=parseInt(m[1],10),"undefined"==typeof q[g]&&(q[g]=[]),q[g][m]=e.substr(n+1).trim()));t=0;for(v=q.length;t<v;t+=1)u[t]=q[t].join("");a=[k,u,a];c=a[0];e=a[1];a=a[2];k="";for(n=0;n<c;n+=1)q=e[n],q=(new p(a))(d(q)),k+=q;w.innerHTML+=k;r+=c;h(l,r)})}}})()})(function(){var d=[],p="undefined"!==typeof Uint8Array?Uint8Array:Array;f="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";for(var l=0,r=f.length;l<r;++l)d[f.charCodeAt(l)]=l;d[45]=62;d[95]=63;return function(a){var b,h;h=a.length;if(0<h%4)throw Error("Invalid string. Length must be a multiple of 4");var c=a.indexOf("=");-1===c&&(c=h);h=[c,c===h?0:4-c%4];b=h[0];h=h[1];for(var c=new p(3*(b+h)/4-h),g=0,l=0<h?b-4:b,e=0;e<l;e+=4)b=d[a.charCodeAt(e)]<<18|d[a.charCodeAt(e+1)]<<12|d[a.charCodeAt(e+2)]<<6|d[a.charCodeAt(e+3)],c[g++]=b>>16&255,c[g++]=b>>8&255,c[g++]=b&255;2===h&&(b=d[a.charCodeAt(e)]<<2|d[a.charCodeAt(e+1)]>>4,c[g++]=b&255);1===h&&(b=d[a.charCodeAt(e)]<<10|d[a.charCodeAt(e+1)]<<4|d[a.charCodeAt(e+2)]>>2,c[g++]=b>>8&255,c[g++]=b&255);return c}}(),function(){function d(d){try{return decodeURIComponent(d)}catch(l){return String.fromCharCode(65533)}}return function(p){for(var l=p.length,r="",a="",l=Math.min(p.length,l||Infinity),b=0;b<l;b++)127>=p[b]?(r+=d(a)+String.fromCharCode(p[b]),a=""):a+="%"+p[b].toString(16);return r+d(a)}},"%mvccoreInitArgs%")</script>
PACKAGER_TEXT;
}namespace MvcCore\Controller{trait Rendering{public function&Render($controllerOrActionNameDashed=NULL,$actionNameDashed=NULL){if($this->dispatchState==0)$this->Init();if($this->dispatchState==1)$this->PreDispatch();if($this->dispatchState<4&&$this->viewEnabled){$topMostParentCtrl=$this->parentController===NULL;if(!$topMostParentCtrl)$this->view->SetUpStore($this->parentController->GetView(),FALSE);foreach($this->childControllers as$ctrlKey=>$childCtrl){if(!is_numeric($ctrlKey)&&!isset($this->view->{$ctrlKey}))$this->view->{$ctrlKey}=$childCtrl;}if(($this->renderMode&\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT)!=0){return$this->renderWithObFromActionToLayout($controllerOrActionNameDashed,$actionNameDashed,$topMostParentCtrl);}else{$sessionClass=$this->GetApplication()->GetSessionClass();if($sessionClass::GetStarted()){$sessionClass::SendCookie();$sessionClass::Close();}$this->response->SendHeaders();if(ob_get_length()!==FALSE)ob_end_flush();return$this->renderWithoutObContinuously($controllerOrActionNameDashed,$actionNameDashed,$topMostParentCtrl);}}$this->dispatchState=4;$result='';return$result;}public function HtmlResponse($output='',$terminate=TRUE){if(!$this->response->HasHeader('Content-Type')){$contentTypeHeaderValue=strpos(\MvcCore\View::GetDoctype(),\MvcCore\View::DOCTYPE_XHTML)!==FALSE?'application/xhtml+xml':'text/html';$this->response->SetHeader('Content-Type',$contentTypeHeaderValue);}$this->response->SetCode(\MvcCore\IResponse::OK)->SetBody($output);if($terminate)$this->Terminate();}public function XmlResponse($output='',$terminate=TRUE){$res=$this->response;if(!$res->HasHeader('Content-Type'))$res->SetHeader('Content-Type','application/xml');$res->SetBody($output);if($res->GetCode()===NULL)$res->SetCode(\MvcCore\IResponse::OK);if($terminate)$this->Terminate();}public function TextResponse($output='',$terminate=TRUE){$res=$this->response;if(!$res->HasHeader('Content-Type'))$res->SetHeader('Content-Type','text/plain');$res->SetBody($output);if($res->GetCode()===NULL)$res->SetCode(\MvcCore\IResponse::OK);if($terminate)$this->Terminate();}public function JsonResponse($data=NULL,$terminate=TRUE){$res=$this->response;$toolClass=$this->application->GetToolClass();$output=$toolClass::EncodeJson($data);ob_clean();if(!$res->HasHeader('Content-Type'))$res->SetHeader('Content-Type','text/javascript');$res->SetHeader('Content-Length',strlen($output))->SetBody($output);if($res->GetCode()===NULL)$res->SetCode(\MvcCore\IResponse::OK);if($terminate)$this->Terminate();}public function JsonpResponse($data=NULL,$callbackParamName='callback',$terminate=TRUE){$res=$this->response;$toolClass=$this->application->GetToolClass();$output=$toolClass::EncodeJson($data);ob_clean();if(!$res->HasHeader('Content-Type'))$res->SetHeader('Content-Type','text/javascript');$callbackParam=$this->GetParam($callbackParamName,'a-zA-Z0-9\.\-_\$',$callbackParamName,'string');$output=$callbackParam.'('.$output.');';$res->SetHeader('Content-Length',strlen($output))->SetBody($output);if($res->GetCode()===NULL)$res->SetCode(\MvcCore\IResponse::OK);if($terminate)$this->Terminate();}public function RenderError($exceptionMessage=''){if($this->application->IsErrorDispatched())return;throw new\ErrorException($exceptionMessage?$exceptionMessage:"Server error: `".htmlspecialchars($this->request->GetFullUrl())."`.",500);}public function RenderNotFound(){if($this->application->IsNotFoundDispatched())return;throw new\ErrorException("Page not found: `".htmlspecialchars($this->request->GetFullUrl())."`.",404);}public function GetViewScriptPath($controllerOrActionNameDashed=NULL,$actionNameDashed=NULL){$currentCtrlIsTopMostParent=$this->parentController===NULL;if($this->viewScriptsPath!==NULL){$resultPathItems=[$this->viewScriptsPath];if($controllerOrActionNameDashed!==NULL)$resultPathItems[]=$controllerOrActionNameDashed;if($actionNameDashed!==NULL)$resultPathItems[]=$actionNameDashed;return str_replace(['_','\\'],'/',implode('/',$resultPathItems));}if($actionNameDashed!==NULL){$controllerNameDashed=$controllerOrActionNameDashed;}else{$toolClass='';if($currentCtrlIsTopMostParent){$controllerNameDashed=$this->controllerName;}else{$ctrlsDefaultNamespace=$this->application->GetAppDir().'\\'.$this->application->GetControllersDir();$currentCtrlClassName=get_class($this);if(mb_strpos($currentCtrlClassName,$ctrlsDefaultNamespace)===0)$currentCtrlClassName=mb_substr($currentCtrlClassName,mb_strlen($ctrlsDefaultNamespace)+1);$currentCtrlClassName=str_replace('\\','/',$currentCtrlClassName);$toolClass=$this->application->GetToolClass();$controllerNameDashed=$toolClass::GetDashedFromPascalCase($currentCtrlClassName);}if($controllerOrActionNameDashed!==NULL){$actionNameDashed=$controllerOrActionNameDashed;}else{if($currentCtrlIsTopMostParent){$actionNameDashed=$this->actionName;}else{$defaultCtrlAction=$this->application->GetDefaultControllerAndActionNames();$actionNameDashed=$toolClass::GetDashedFromPascalCase($defaultCtrlAction[1]);}}}$controllerPath=str_replace(['_','\\'],'/',$controllerNameDashed);return implode('/',[$controllerPath,$actionNameDashed]);}protected function&renderWithObFromActionToLayout($controllerOrActionNameDashed,$actionNameDashed,$topMostParentCtrl){$viewScriptPath=$this->GetViewScriptPath($controllerOrActionNameDashed,$actionNameDashed);$this->view->SetUpRender($this->renderMode,$controllerOrActionNameDashed,$actionNameDashed);$actionResult=$this->view->RenderScript($viewScriptPath);if(!$topMostParentCtrl){$this->dispatchState=4;return$actionResult;}$viewClass=$this->application->GetViewClass();$layout=$viewClass::CreateInstance()->SetController($this)->SetUpStore($this->view,TRUE)->SetUpRender($this->renderMode,$controllerOrActionNameDashed,$actionNameDashed);$outputResult=$layout->RenderLayoutAndContent($this->layout,$actionResult);unset($layout,$this->view);$this->XmlResponse($outputResult,FALSE);$this->dispatchState=4;$result='';return$result;}protected function&renderWithoutObContinuously($controllerOrActionNameDashed,$actionNameDashed,$topMostParentCtrl){if($topMostParentCtrl){$viewClass=$this->application->GetViewClass();$layout=$viewClass::CreateInstance()->SetController($this)->SetUpStore($this->view,TRUE)->SetUpRender($this->renderMode,$controllerOrActionNameDashed,$actionNameDashed);$layout->RenderLayout($this->layout);}else{$viewScriptPath=$this->GetViewScriptPath($controllerOrActionNameDashed,$actionNameDashed);$this->view->RenderScript($viewScriptPath);}$this->dispatchState=4;$result='';return$result;}}}
namespace MvcCore{interface IController{public static function CreateInstance();public static function GetCallerControllerInstance();public static function Redirect($location='',$code=\MvcCore\IResponse::SEE_OTHER,$reason=NULL);public function Dispatch($actionName="IndexAction");public function Init();public function PreDispatch();public function GetParam($name="",$pregReplaceAllowedChars="a-zA-Z0-9_/\-\.\@");public function GetApplication();public function SetApplication(\MvcCore\IApplication$application);public function GetRequest();public function GetControllerName();public function GetActionName();public function SetRequest(\MvcCore\IRequest$request);public function GetResponse();public function SetResponse(\MvcCore\IResponse$response);public function GetRouter();public function SetRouter(\MvcCore\IRouter$router);public function IsAjax();public function GetUser();public function SetUser($user);public function GetView();public function SetView(\MvcCore\IView$view);public function GetRenderMode();public function SetRenderMode($renderMode=\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT);public function GetLayout();public function SetLayout($layout='');public function GetViewScriptsPath();public function SetViewScriptsPath($viewScriptsPath=NULL);public function GetViewEnabled();public function SetViewEnabled($viewEnabled=TRUE);public function AddChildController(\MvcCore\IController$controller,$index=NULL);public function GetParentController();public function SetParentController(\MvcCore\IController$parentController=NULL);public function GetChildControllers();public function SetChildControllers(array$childControllers=[]);public function GetChildController($index=NULL);public function AssetAction();public function&Render($controllerOrActionNameDashed=NULL,$actionNameDashed=NULL);public function HtmlResponse($output="",$terminate=TRUE);public function XmlResponse($output="",$terminate=TRUE);public function TextResponse($output='',$terminate=TRUE);public function JsonResponse($data=NULL,$terminate=TRUE);public function JsonpResponse($data=NULL,$callbackParamName='callback',$terminate=TRUE);public function Url($controllerActionOrRouteName='Index:Index',array$params=[]);public function AssetUrl($path='');public function GetSessionNamespace($name=\MvcCore\ISession::DEFAULT_NAMESPACE_NAME);public function RenderError($exceptionMessage='');public function RenderNotFound();public function Terminate();}}
namespace MvcCore\Controller{trait PropsGettersSetters{protected static$staticPath='/static';protected static$tmpPath='/Var/Tmp';protected$application;protected$request;protected$response;protected$router;protected$controllerName='';protected$actionName='';protected$ajax=FALSE;protected$view=NULL;protected$renderMode=\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT;protected$layout='layout';protected$viewScriptsPath=NULL;protected$viewEnabled=TRUE;protected$user=NULL;protected$autoStartSession=TRUE;protected$autoInitProperties=TRUE;protected$dispatchState=0;protected$parentController=NULL;protected$childControllers=[];protected static$allControllers=[];private static$_assetsMimeTypes=['js'=>'text/javascript','css'=>'text/css','ico'=>'image/x-icon','gif'=>'image/gif','png'=>'image/png','jpg'=>'image/jpg','jpeg'=>'image/jpeg','bmp'=>'image/bmp','svg'=>'image/svg+xml','eot'=>'application/vnd.ms-fontobject','ttf'=>'font/truetype','otf'=>'font/opentype','woff'=>'application/x-font-woff',];public function GetParam($name="",$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\@\:",$ifNullValue=NULL,$targetType=NULL){return$this->request->GetParam($name,$pregReplaceAllowedChars,$ifNullValue,$targetType);}public function GetApplication(){return$this->application;}public function SetApplication(\MvcCore\IApplication$application){$this->application=$application;return$this;}public function GetRequest(){return$this->request;}public function GetControllerName(){return$this->controllerName;}public function GetActionName(){return$this->actionName;}public function GetResponse(){return$this->response;}public function SetResponse(\MvcCore\IResponse$response){$this->response=$response;return$this;}public function GetRouter(){return$this->router;}public function SetRouter(\MvcCore\IRouter$router){$this->router=$router;return$this;}public function IsAjax(){return$this->ajax;}public function GetUser(){return$this->user;}public function SetUser($user){$this->user=$user;return$this;}public function GetView(){return$this->view;}public function SetView(\MvcCore\IView$view){$this->view=$view;return$this;}public function GetRenderMode(){return$this->renderMode;}public function SetRenderMode($renderMode=\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT){$this->renderMode=$renderMode;return$this;}public function GetLayout(){return$this->layout;}public function SetLayout($layout=''){$this->layout=$layout;return$this;}public function GetViewScriptsPath(){return$this->viewScriptsPath;}public function SetViewScriptsPath($viewScriptsPath=NULL){$this->viewScriptsPath=$viewScriptsPath;return$this;}public function GetViewEnabled(){return$this->viewEnabled;}public function SetViewEnabled($viewEnabled=TRUE){$this->viewEnabled=$viewEnabled;return$this;}public function GetParentController(){return$this->parentController;}public function SetParentController(\MvcCore\IController$parentController=NULL){$this->parentController=$parentController;return$this;}public function GetChildControllers(){return$this->childControllers;}public function SetChildControllers(array$childControllers=[]){$this->childControllers=$childControllers;return$this;}public function GetChildController($index=NULL){return$this->childControllers[$index];}public function Url($controllerActionOrRouteName='Index:Index',array$params=[]){return$this->router->Url($controllerActionOrRouteName,$params);}public function AssetUrl($path=''){return$this->router->Url('Controller:Asset',['path'=>$path]);}}}
namespace MvcCore\Controller{trait Dispatching{public static function CreateInstance(){$instance=new static();self::$allControllers[spl_object_hash($instance)]=$instance;return$instance;}public static function GetCallerControllerInstance(){$result=NULL;$backtraceItems=debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT);if(count($backtraceItems)<3)return$result;$calledClass=get_called_class();foreach($backtraceItems as$backtraceItem){if(!isset($backtraceItem['object'])||!$backtraceItem['object'])continue;$object=$backtraceItem['object'];$class=$backtraceItem['class'];if($object instanceof\MvcCore\IController&&$class!==$calledClass){$result=$object;break;}}return$result;}public function SetRequest(\MvcCore\IRequest$request){$this->request=$request;$this->controllerName=ltrim($request->GetControllerName(),'/');$this->actionName=$request->GetActionName();$this->ajax=$request->IsAjax();if($this->ajax||($this->controllerName=='controller'&&$this->actionName=='asset'))$this->SetViewEnabled(FALSE);return$this;}public function Dispatch($actionName="IndexAction"){$actionNameStart=$this->actionName;if($this->dispatchState<1)$this->Init();if($this->dispatchState==5)return;if($this->dispatchState<1)$this->dispatchState=1;if($this->dispatchState<2)$this->PreDispatch();if($this->dispatchState==5)return;if($this->dispatchState<2)$this->dispatchState=2;if($this->actionName!==$actionNameStart){$toolClass=$this->application->GetToolClass();$actionName=$toolClass::GetPascalCaseFromDashed($this->actionName).'Action';}if($this->dispatchState<3&&method_exists($this,$actionName))$this->{$actionName}();if($this->dispatchState==5)return;if($this->dispatchState<3)$this->dispatchState=3;if($this->dispatchState<4)$this->Render($this->controllerName,$this->actionName);}public function Init(){if($this->dispatchState>0)return;self::$allControllers[spl_object_hash($this)]=$this;if($this->parentController===NULL&&!$this->request->IsCli()){if($this->autoStartSession)$this->application->SessionStart();$responseContentType=$this->ajax?'text/javascript':'text/html';$this->response->SetHeader('Content-Type',$responseContentType);}if($this->autoInitProperties)$this->processAutoInitProperties();foreach($this->childControllers as$controller){$controller->Init();if($controller->dispatchState==5)break;}if($this->dispatchState===0)$this->dispatchState=1;}protected function processAutoInitProperties(){$type=new\ReflectionClass($this);$props=$type->getProperties(\ReflectionProperty::IS_PUBLIC|\ReflectionProperty::IS_PROTECTED|\ReflectionProperty::IS_PRIVATE);$toolsClass=$this->application->GetToolClass();$phpWithTypes=PHP_VERSION_ID>=70400;foreach($props as$prop){$docComment=$prop->getDocComment();if(mb_strpos($docComment,'@autoinit')===FALSE)continue;$propName=$prop->getName();$methodName='create'.ucfirst($propName);$hasMethod=$type->hasMethod($methodName);if(!$hasMethod){$methodName='_'.$methodName;$hasMethod=$type->hasMethod($methodName);}if($hasMethod){$method=$type->getMethod($methodName);if(!$method->isPublic())$method->setAccessible(TRUE);$instance=$method->invoke($this);$implementsController=$instance instanceof\MvcCore\IController;}else{$className=NULL;if($phpWithTypes&&$prop->hasType()){$refType=$prop->getType();if($refType!==NULL)$className=$refType->getName();}else{$pos=mb_strpos($docComment,'@var ');if($pos!==FALSE){$docComment=str_replace(["\r","\n","\t","*/"]," ",mb_substr($docComment,$pos+5));$pos=mb_strpos($docComment,' ');if($pos===FALSE){$className=trim(mb_substr($docComment,0,$pos));$pos=mb_strpos($className,'|');if($pos!==FALSE)$className=mb_substr($className,0,$pos);}}}if($className===NULL)continue;if(!@class_exists($className)){$className=$prop->getDeclaringClass()->getNamespaceName().'\\'.$className;if(!@class_exists($className))continue;}$implementsController=$toolsClass::CheckClassInterface($className,'MvcCore\\IController',FALSE,FALSE);if($implementsController){$instance=$className::CreateInstance();}else{$instance=new$className();}}if($implementsController)$this->AddChildController($instance,$propName);if(!$prop->isPublic())$prop->setAccessible(TRUE);$prop->setValue($this,$instance);}}public function PreDispatch(){if($this->dispatchState>1)return;if($this->dispatchState==0)$this->Init();if($this->viewEnabled&&$this->view===NULL){$viewClass=$this->application->GetViewClass();$this->view=$viewClass::CreateInstance()->SetController($this);}foreach($this->childControllers as$controller){$controller->PreDispatch();if($controller->dispatchState==5)break;}if($this->dispatchState==1)$this->dispatchState=2;}public function AddChildController(\MvcCore\IController$controller,$index=NULL){self::$allControllers[spl_object_hash($controller)]=$controller;if(!in_array($controller,$this->childControllers,TRUE)){if($index===NULL){$this->childControllers[]=$controller;}else{$this->childControllers[$index]=$controller;}}$controller->SetParentController($this)->SetApplication($this->application)->SetRequest($this->request)->SetResponse($this->response)->SetRouter($this->router)->SetLayout($this->layout)->SetUser($this->user);return$this;}public function GetSessionNamespace($name=\MvcCore\ISession::DEFAULT_NAMESPACE_NAME){$sessionClass=$this->application->GetSessionClass();return$sessionClass::GetNamespace($name);}public static function Redirect($location='',$code=\MvcCore\IResponse::SEE_OTHER,$reason=NULL){$app=\MvcCore\Application::GetInstance();$response=$app->GetResponse();$response->SetCode($code)->SetHeader('Location',$location);if($reason!==NULL)$response->SetHeader('X-Reason',$reason);foreach(self::$allControllers as&$controller)$controller->dispatchState=5;$app->Terminate();}public function Terminate(){$this->dispatchState=5;$this->application->Terminate();}public function AssetAction(){$ext='';$path=$this->GetParam('path','a-zA-Z0-9_\-\/\.');$path='/'.ltrim(str_replace('..','',$path),'/');if(strpos($path,static::$staticPath)!==0&&strpos($path,static::$tmpPath)!==0)throw new\ErrorException("[".get_class($this)."] File path: '$path' is not allowed.",500);$path=$this->request->GetAppRoot().$path;if(!\Packager_Php_Wrapper::FileExists($path))throw new\ErrorException("[".get_class($this)."] File not found: '$path'.",404);$lastDotPos=strrpos($path,'.');if($lastDotPos!==FALSE)$ext=substr($path,$lastDotPos+1);if(isset(self::$_assetsMimeTypes[$ext]))header('Content-Type: '.self::$_assetsMimeTypes[$ext]);header_remove('X-Powered-By');header('Vary: Accept-Encoding');$assetMTime=@\Packager_Php_Wrapper::Filemtime($path);if($assetMTime)header('Last-Modified: '.gmdate('D, d M Y H:i:s T',$assetMTime));\Packager_Php_Wrapper::Readfile($path);exit;}}}
namespace MvcCore\Model{trait Converters{protected static function convertToType($rawValue,$typeStr){$conversionResult=FALSE;$typeStr=trim($typeStr,'\\');if($typeStr=='DateTime'){$dateTimeFormat='Y-m-d H:i:s';if(is_numeric($rawValue)){$rawValueStr=str_replace(['+','-','.'],'',strval($rawValue));$secData=mb_substr($rawValueStr,0,10);$dateTimeStr=date($dateTimeFormat,intval($secData));if(strlen($rawValueStr)>10)$dateTimeStr.='.'.mb_substr($rawValueStr,10);}else{$dateTimeStr=strval($rawValue);if(strpos($dateTimeStr,'-')===FALSE){$dateTimeFormat=substr($dateTimeFormat,6);}else if(strpos($dateTimeStr,':')===FALSE){$dateTimeFormat=substr($dateTimeFormat,0,5);}if(strpos($dateTimeStr,'.')!==FALSE)$dateTimeFormat.='.u';}$dateTime=date_create_from_format($dateTimeFormat,$dateTimeStr);if($dateTime!==FALSE){$rawValue=$dateTime;$conversionResult=TRUE;}}else{if(settype($rawValue,$typeStr))$conversionResult=TRUE;}return[$conversionResult,$rawValue];}protected static function getKeyConversionMethods($keysConversionFlags=\MvcCore\IModel::KEYS_CONVERSION_CASE_SENSITIVE){$flagsAndConversionMethods=[$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_UNDERSCORES_TO_PASCALCASE=>'keyConversionUnderscoresToPascalcase',$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_UNDERSCORES_TO_CAMELCASE=>'keyConversionUnderscoresToCamelcase',$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_PASCALCASE_TO_UNDERSCORES=>'keyConversionPascalcaseToUnderscores',$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_PASCALCASE_TO_CAMELCASE=>'keyConversionPascalcaseToCamelcase',$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_CAMELCASE_TO_UNDERSCORES=>'keyConversionCamelcaseToUnderscores',$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_CAMELCASE_TO_PASCALCASE=>'keyConversionCamelcaseToPascalcase',$keysConversionFlags&\MvcCore\IModel::KEYS_CONVERSION_CASE_INSENSITIVE=>'keyConversionCaseInsensitive',];unset($flagsAndConversionMethods[0]);return$flagsAndConversionMethods;}protected static function keyConversionCaseInsensitive($key,$toolsClass,$csKeysMap){$keyPos=stripos($csKeysMap,','.$key.',');if($keyPos===FALSE)return$key;return substr($csKeysMap,$keyPos+1,strlen($key));}protected static function keyConversionUnderscoresToPascalcase($key,$toolsClass,$csKeysMap){return$toolsClass::GetPascalCaseFromUnderscored($key);}protected static function keyConversionUnderscoresToCamelcase($key,$toolsClass,$csKeysMap){return lcfirst($toolsClass::GetPascalCaseFromUnderscored($key));}protected static function keyConversionPascalcaseToUnderscores($key,$toolsClass,$csKeysMap){return$toolsClass::GetUnderscoredFromPascalCase($key);}protected static function keyConversionPascalcaseToCamelcase($key,$toolsClass,$csKeysMap){return lcfirst($key);}protected static function keyConversionCamelcaseToUnderscores($key,$toolsClass,$csKeysMap){return$toolsClass::GetUnderscoredFromPascalCase(lcfirst($key));}protected static function keyConversionCamelcaseToPascalcase($key,$toolsClass,$csKeysMap){return ucfirst($key);}}}
namespace MvcCore\Ext\Forms{interface IField{const LABEL_SIDE_LEFT='left';const LABEL_SIDE_RIGHT='right';const AUTOFOCUS_DUPLICITY_EXCEPTION=0,AUTOFOCUS_DUPLICITY_UNSET_OLD_SET_NEW=1,AUTOFOCUS_DUPLICITY_QUIETLY_SET_NEW=-1;public static function CreateInstance($cfg=[]);public function SetForm(\MvcCore\Ext\Forms\IForm$form);public function PreDispatch();public function Submit(array&$rawRequestParams=[]);public function&GetValidatorData($fieldPropsDefaultValidValues=[]);public function AddValidationError($errorMsg='',array$errorMsgArgs=[],callable$replacingCallable=NULL);public function GetId();public function GetName();public function GetType();public function GetValue();public function&GetCssClasses();public function&GetControlAttrs();public function GetControlAttr($name='data-*');public function&GetValidators();public function HasValidator($validatorNameOrInstance);public function GetViewScript();public function GetJsClassName();public function GetJsSupportingFile();public function GetCssSupportingFile();public static function&GetTemplates();public function SetId($id=NULL);public function SetName($name=NULL);public function SetType($type=NULL);public function SetValue($value);public function SetCssClasses($cssClasses);public function AddCssClasses($cssClasses);public function SetControlAttrs(array$attrs=[]);public function SetControlAttr($name,$value);public function AddControlAttrs(array$attrs=[]);public function SetValidators(array$validatorsNamesOrInstances=[]);public function AddValidators($validatorsNamesOrInstances=[]);public function RemoveValidator($validatorNameOrInstance);public function SetViewScript($boolOrViewScriptPath=NULL);public function SetJsClassName($jsClassName);public function SetJsSupportingFile($jsSupportingFilePath);public function SetCssSupportingFile($cssSupportingFilePath);public function SetTranslate($translate);public function AddError($errorMsg);public static function SetTemplate($templateName='control',$templateCode='');public static function SetTemplates($templates=[]);public function Render();public function RenderTemplate();public function RenderNaturally();public function RenderLabelAndControl();public function RenderControlInsideLabel();public function RenderControl();public function RenderLabel();public function RenderErrors();}}
namespace MvcCore\Ext\Forms\Field{trait Props{protected$id=NULL;protected$name=NULL;protected$type=NULL;protected$value=NULL;protected$cssClasses=[];protected$controlAttrs=[];protected$validators=[];protected$viewScript=NULL;protected$jsClassName=NULL;protected$jsSupportingFile=NULL;protected$cssSupportingFile=NULL;protected$translate=NULL;protected static$templates=['label'=>'<label for="{id}"{attrs}>{label}</label>','control'=>'<input id="{id}" name="{name}" type="{type}" value="{value}"{attrs} />','togetherLabelLeft'=>'<label for="{id}"{attrs}><span>{label}</span>{control}</label>','togetherLabelRight'=>'<label for="{id}"{attrs}>{control}<span>{label}</span></label>',];protected$errors=[];protected$view=NULL;protected$form=NULL;protected static$declaredProtectedProperties=['view','form','translate','errors'];}}
namespace MvcCore\Ext\Forms\Field{trait Rendering{public function Render(){if($this->viewScript){return$this->RenderTemplate();}else{return$this->RenderNaturally();}}public function RenderTemplate(){$viewClass=$this->form->GetViewClass();$formParentController=$this->form->GetParentController();$view=$viewClass::CreateInstance()->SetController($formParentController)->SetView($formParentController->GetView())->SetForm($this->form)->SetField($this);return$view->Render($viewClass::GetFieldsDir(),is_bool($this->viewScript)?$this->type:$this->viewScript);}public function RenderNaturally(){$result='';$renderMode=\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NO_LABEL;$label=NULL;if($this instanceof\MvcCore\Ext\Forms\Fields\ILabel){$renderMode=$this->GetRenderMode();$label=$this->GetLabel();}if($renderMode==\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NORMAL&&$label){$result=$this->RenderLabelAndControl();}else if($renderMode==\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_LABEL_AROUND&&$label){$result=$this->RenderControlInsideLabel();}else if($renderMode==\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NO_LABEL||!$label){$result=$this->RenderControl();$errors=$this->RenderErrors();$formErrorsRenderMode=$this->form->GetErrorsRenderMode();if($formErrorsRenderMode!==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_BEFORE_EACH_CONTROL){$result=$errors.$result;}else if($formErrorsRenderMode!==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_AFTER_EACH_CONTROL){$result.=$errors;}}return$result;}public function RenderLabelAndControl(){$result='';if($this->labelSide==\MvcCore\Ext\Forms\IField::LABEL_SIDE_LEFT){$result=$this->RenderLabel().$this->RenderControl();}else{$result=$this->RenderControl().$this->RenderLabel();}$errors=$this->RenderErrors();$formErrorsRenderMode=$this->form->GetErrorsRenderMode();if($formErrorsRenderMode==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_BEFORE_EACH_CONTROL){$result=$errors.$result;}else if($formErrorsRenderMode==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_AFTER_EACH_CONTROL){$result.=$errors;}return$result;}public function RenderControlInsideLabel(){if($this->renderMode==\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NO_LABEL)return$this->RenderControl();$template=$this->labelSide==\MvcCore\Ext\Forms\IField::LABEL_SIDE_LEFT?static::$templates->togetherLabelLeft:static::$templates->togetherLabelRight;$attrsStr=$this->renderLabelAttrsWithFieldVars();$formViewClass=$this->form->GetViewClass();$result=$formViewClass::Format($template,['id'=>$this->id,'label'=>$this->label,'control'=>$this->RenderControl(),'attrs'=>$attrsStr?" $attrsStr":'',]);$errors=$this->RenderErrors();$formErrorsRenderMode=$this->form->GetErrorsRenderMode();if($formErrorsRenderMode==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_BEFORE_EACH_CONTROL){$result=$errors.$result;}else if($formErrorsRenderMode==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_AFTER_EACH_CONTROL){$result.=$errors;}return$result;}public function RenderControl(){$attrsStr=$this->renderControlAttrsWithFieldVars();if(!$this->form->GetFormTagRenderingStatus())$attrsStr.=(strlen($attrsStr)>0?' ':'').'form="'.$this->form->GetId().'"';$formViewClass=$this->form->GetViewClass();return$formViewClass::Format(static::$templates->control,['id'=>$this->id,'name'=>$this->name,'type'=>$this->type,'value'=>htmlspecialchars_decode(htmlspecialchars($this->value,ENT_QUOTES),ENT_QUOTES),'attrs'=>strlen($attrsStr)>0?' '.$attrsStr:'',]);}public function RenderLabel(){$renderMode=$this instanceof\MvcCore\Ext\Forms\Fields\ILabel?$this->GetRenderMode():\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NO_LABEL;if($renderMode==\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NO_LABEL)return'';$attrsStr=$this->renderLabelAttrsWithFieldVars();$formViewClass=$this->form->GetViewClass();return$formViewClass::Format(static::$templates->label,['id'=>$this->id,'label'=>$this->label,'attrs'=>$attrsStr?" $attrsStr":'',]);}public function RenderErrors(){$result="";if($this->errors&&$this->form->GetErrorsRenderMode()!==\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_ALL_TOGETHER){$result.='<span class="errors">';foreach($this->errors as$key=>$errorMessage){$errorCssClass='error error-'.$this->name.' error-'.$key;$result.="<span class=\"$errorCssClass\">$errorMessage</span>";}$result.='</span>';}return$result;}protected function renderLabelAttrsWithFieldVars($fieldVars=[]){return$this->renderAttrsWithFieldVars($fieldVars,$this->labelAttrs,$this->cssClasses,FALSE);}protected function renderControlAttrsWithFieldVars($fieldVars=[]){return$this->renderAttrsWithFieldVars($fieldVars,$this->controlAttrs,$this->cssClasses,TRUE);}protected function renderAttrsWithFieldVars($fieldVars=[],$fieldAttrs=[],$cssClasses=[],$controlRendering=FALSE){$attrs=[];foreach($fieldVars as$key=>$value){if(is_numeric($key)){$fieldName=$value;$attrName=strtolower($fieldName);}else{$fieldName=$key;$attrName=strtolower($value);}if($this->{$fieldName}!==NULL){if(is_array($this->{$fieldName})){$attrs[$attrName]=implode(',',$this->{$fieldName});}else{$attrs[$attrName]=(string)$this->{$fieldName};}}}if($this instanceof\MvcCore\Ext\Forms\Fields\IVisibleField){$boolFieldVars=['accessKey'=>FALSE,'autoFocus'=>TRUE,'disabled'=>TRUE,'readOnly'=>TRUE,'required'=>TRUE,];foreach($boolFieldVars as$fieldName=>$addAlsoAsCssClass){if(isset($this->{$fieldName})&&$this->{$fieldName}!==NULL&&$this->{$fieldName}!==FALSE){$attrName=strtolower($fieldName);if($controlRendering)$attrs[$attrName]=$attrName;if($addAlsoAsCssClass)$cssClasses[]=$attrName;}}if($this->tabIndex!==NULL)$attrs['tabindex']=$this->tabIndex+$this->form->GetBaseTabIndex();}$cssClasses[]=\MvcCore\Tool::GetDashedFromPascalCase($this->name);$attrs['class']=implode(' ',array_unique($cssClasses));$formViewClass=$this->form->GetViewClass();return$formViewClass::RenderAttrs(array_merge($fieldAttrs,$attrs));}}}
namespace MvcCore\Ext\Forms\Field{trait Setters{public function SetId($id=NULL){$this->id=$id;return$this;}public function SetName($name=NULL){$this->name=$name;return$this;}public function SetType($type=NULL){$this->type=$type;return$this;}public function SetValue($value){$this->value=$value;return$this;}public function SetCssClasses($cssClasses){$cssClassesArr=gettype($cssClasses)=='array'?$cssClasses:explode(' ',(string)$cssClasses);$this->cssClasses=$cssClassesArr;return$this;}public function AddCssClasses($cssClasses){$cssClassesArr=gettype($cssClasses)=='array'?$cssClasses:explode(' ',(string)$cssClasses);$this->cssClasses=array_merge($this->cssClasses,$cssClassesArr);return$this;}public function SetControlAttrs(array$attrs=[]){$this->controlAttrs=$attrs;return$this;}public function SetControlAttr($name,$value){$this->controlAttrs[$name]=$value;return$this;}public function AddControlAttrs(array$attrs=[]){$this->controlAttrs=array_merge($this->controlAttrs,$attrs);return$this;}public function SetValidators(array$validatorsNamesOrInstances=[]){$this->validators=[];return$this->AddValidators($validatorsNamesOrInstances);}public function AddValidators($validatorsNamesOrInstances=[]){$validatorsNamesOrInstances=func_get_args();if(count($validatorsNamesOrInstances)===1&&is_array($validatorsNamesOrInstances[0]))$validatorsNamesOrInstances=$validatorsNamesOrInstances[0];foreach($validatorsNamesOrInstances as$validatorNameOrInstance){$instanceType=FALSE;if(is_string($validatorNameOrInstance)){$validatorClassName=$validatorNameOrInstance;}else if($validatorNameOrInstance instanceof\MvcCore\Ext\Forms\IValidator){$instanceType=TRUE;$validatorClassName=get_class($validatorNameOrInstance);}else{return$this->throwNewInvalidArgumentException($validatorNameOrInstance instanceof\Closure?'Unknown validator type given.':'Unknown validator type given: `'.$validatorNameOrInstance.'`, type: `'.gettype($validatorNameOrInstance).'`.');}$slashPos=strrpos($validatorClassName,'\\');$validatorName=$slashPos!==FALSE?substr($validatorClassName,$slashPos+1):$validatorClassName;$this->validators[$validatorName]=$validatorNameOrInstance;if($instanceType)$validatorNameOrInstance->SetField($this);}return$this;}public function RemoveValidator($validatorNameOrInstance){if(is_string($validatorNameOrInstance)){$validatorClassName=$validatorNameOrInstance;}else if($validatorNameOrInstance instanceof\MvcCore\Ext\Forms\IValidator){$validatorClassName=get_class($validatorNameOrInstance);}else{return$this->throwNewInvalidArgumentException('Unknown validator type given: `'.$validatorNameOrInstance.'`, type: `'.gettype($validatorNameOrInstance).'`.');}$slashPos=strrpos($validatorClassName,'\\');$validatorName=$slashPos!==FALSE?substr($validatorClassName,$slashPos+1):$validatorClassName;if(isset($this->validators[$validatorName]))unset($this->validators[$validatorName]);return$this;}public function SetViewScript($boolOrViewScriptPath=NULL){$this->viewScript=$boolOrViewScriptPath;return$this;}public function SetJsClassName($jsClassName){$this->jsClassName=$jsClassName;return$this;}public function SetJsSupportingFile($jsSupportingFilePath){$this->jsSupportingFile=$jsSupportingFilePath;return$this;}public function SetCssSupportingFile($cssSupportingFilePath){$this->cssSupportingFile=$cssSupportingFilePath;return$this;}public function SetTranslate($translate){$this->translate=$translate;return$this;}public function AddError($errorMsg){$this->errors[]=$errorMsg;return$this;}public static function SetTemplate($templateName='control',$templateCode=''){if(gettype(static::$templates)=='array'){static::$templates[$templateName]=$templateCode;}else{static::$templates->{$templateName}=$templateCode;}return$templateCode;}public static function SetTemplates($templates=[]){if(gettype(static::$templates)=='array'){static::$templates=(array)$templates;}else{static::$templates=(object)$templates;}return static::$templates;}}}
namespace MvcCore\Model{trait DataMethods{public function GetValues($getNullValues=FALSE,$includeInheritProperties=TRUE,$publicOnly=TRUE){$data=[];$properties=$publicOnly?static::__getPropsNamesAll():static::__getPropsNamesPublic();$phpWithTypes=PHP_VERSION_ID>=70400;foreach($properties as$propertyName=>$propData){list($ownedByCurrent,$accessMod,$types,$prop)=$propData;if(!$includeInheritProperties&&!$ownedByCurrent)continue;$propValue=NULL;if($accessMod==4){if($phpWithTypes){if($prop->isInitialized($this))$propValue=$this->getValue($this,$propertyName);}else if(isset($this->{$propertyName})){$propValue=$this->getValue($this,$propertyName);}}else{$propValue=$this->{$propertyName};}if(!$getNullValues&&$propValue===NULL)continue;$data[$propertyName]=$propValue;}return$data;}public function SetUp($data=[],$keysConversionFlags=NULL,$completeInitialValues=TRUE){$propsData=static::__getPropsData();$caseSensitiveKeysMap=','.implode(',',array_keys($propsData)).',';$keyConversionsMethods=$keysConversionFlags!==NULL?static::getKeyConversionMethods($keysConversionFlags):[];$toolsClass=\MvcCore\Application::GetInstance()->GetToolClass();foreach($data as$dbKey=>$value){$propertyName=$dbKey;foreach($keyConversionsMethods as$keyConversionsMethod)$propertyName=static::$keyConversionsMethod($propertyName,$toolsClass,$caseSensitiveKeysMap);$isNotNull=$value!==NULL;$accessMod=1;if($isNotNull&&isset($propsData[$propertyName])){list(,$accessMod,$typeStrings,$prop)=$propsData[$propertyName];$targetTypeValue=NULL;foreach($typeStrings as$typeString){if(substr($typeString,-2,2)==='[]'){if(!is_array($value)){$value=trim(strval($value));$value=$value===''?[]:explode(',',$value);}$arrayItemTypeString=substr($typeString,0,strlen($typeString)-2);$targetTypeValue=[];$conversionResult=TRUE;foreach($value as$key=>$item){list($conversionResultLocal,$targetTypeValueLocal)=static::convertToType($item,$arrayItemTypeString);if($conversionResultLocal){$targetTypeValue[$key]=$targetTypeValueLocal;}else{$conversionResult=FALSE;break;}}}else{list($conversionResult,$targetTypeValue)=static::convertToType($value,$typeString);}if($conversionResult){$value=$targetTypeValue;break;}}}if($accessMod==4){$prop->setValue($this,$value);}else{$this->{$propertyName}=$value;}if($completeInitialValues)$this->initialValues[$propertyName]=$value;}return$this;}public function GetTouched($includeInheritProperties=TRUE,$publicOnly=FALSE){$touchedValues=[];$properties=$publicOnly?static::__getPropsNamesAll():static::__getPropsNamesPublic();$phpWithTypes=PHP_VERSION_ID>=70400;foreach($properties as$propertyName=>$propData){list($ownedByCurrent,$accessMod,$types,$prop)=$propData;if(!$includeInheritProperties&&!$ownedByCurrent)continue;$initialValue=NULL;$currentValue=NULL;if(array_key_exists($propertyName,$this->initialValues))$initialValue=&$this->initialValues[$propertyName];$currentValue=NULL;if($accessMod==4){if($phpWithTypes){if($prop->isInitialized($this))$currentValue=$this->getValue($this,$propertyName);}else{$currentValue=$this->getValue($this,$propertyName);}}else if(isset($this->{$propertyName})){$currentValue=&$this->{$propertyName};}if($initialValue!==$currentValue)$touchedValues[$propertyName]=&$this->{$propertyName};}return$touchedValues;}public function __call($rawName,$arguments=[]){$nameBegin=strtolower(substr($rawName,0,3));$name=substr($rawName,3);if($nameBegin=='get'){if(property_exists($this,lcfirst($name)))return$this->{lcfirst($name)};if(property_exists($this,$name))return$this->$name;return NULL;}else if($nameBegin=='set'){if(property_exists($this,lcfirst($name)))$this->{lcfirst($name)}=isset($arguments[0])?$arguments[0]:NULL;if(property_exists($this,$name))$this->$name=isset($arguments[0])?$arguments[0]:NULL;return$this;}else{throw new\InvalidArgumentException("[".get_class()."] No method `{$rawName}()` defined.");}}public function __set($name,$value){if(isset(static::$protectedProperties[$name]))throw new\InvalidArgumentException("[".get_class()."] It's not possible to change property: `{$name}` originally declared in this class.");if(property_exists($this,lcfirst($name)))return$this->{lcfirst($name)}=$value;return$this->{$name}=$value;}public function __get($name){if(isset(static::$protectedProperties[$name]))throw new\InvalidArgumentException("[".get_class()."] It's not possible to get property: `{$name}` originally declared in this class.");if(isset($this->{lcfirst($name)}))return$this->{lcfirst($name)};if(isset($this->{$name}))return$this->{$name};return NULL;}public function __sleep(){$props=array_keys((array)$this);foreach(static::$protectedProperties as$propName=>$serialize)if($serialize)unset($props[$propName]);return$props;}public function __wakeup(){if(property_exists($this,'autoInit')&&$this->autoInit)$this->Init();}private static function __getPropsData(){static$__propsData=NULL;if($__propsData==NULL){$calledClassFullName=get_called_class();$props=(new\ReflectionClass($calledClassFullName))->getProperties(\ReflectionProperty::IS_PUBLIC|\ReflectionProperty::IS_PROTECTED|\ReflectionProperty::IS_PRIVATE);$__propsData=[];$phpWithTypes=PHP_VERSION_ID>=70400;foreach($props as$prop){$propName=$prop->getName();if(isset(static::$protectedProperties[$propName]))continue;$types=[];if($phpWithTypes&&$prop->hasType()){$refType=$prop->getType();if($refType!==NULL)$types=[$refType->getName()];}else{preg_match('/@var\s+([^\s]+)/',$prop->getDocComment(),$matches);if($matches){list(,$rawType)=$matches;$types=explode('|',$rawType);}}$accessMod=$prop->getModifiers();$prop->setAccessible(TRUE);$__propsData[$propName]=[$prop->class==$calledClassFullName,$accessMod,$types,$accessMod==4||$phpWithTypes?$prop:NULL];}}return$__propsData;}private static function __getPropsNamesAll(){static$__allPropsNames=NULL;if($__allPropsNames==NULL){$propsData=static::__getPropsData();$__allPropsNames=[];foreach($propsData as$propName=>$propData)$__allPropsNames[$propName]=$propData[0];}return$__allPropsNames;}private static function __getPropsNamesPublic(){static$__publicPropsNames=NULL;if($__publicPropsNames==NULL){$propsData=static::__getPropsData();$__publicPropsNames=[];foreach($propsData as$propName=>$propData){list($ownedByCurrent,$accessMod)=$propData;if($accessMod==1)$__publicPropsNames[$propName]=$ownedByCurrent;}}return$__publicPropsNames;}}}
namespace MvcCore\Ext\Forms\Field{trait Getters{public function GetId(){return$this->id;}public function GetName(){return$this->name;}public function GetType(){return$this->type;}public function GetValue(){return$this->value;}public function&GetCssClasses(){return$this->cssClasses;}public function&GetControlAttrs(){return$this->controlAttrs;}public function GetControlAttr($name='data-*'){return isset($this->controlAttrs[$name])?$this->controlAttrs[$name]:NULL;}public function&GetValidators(){return$this->validators;}public function HasValidator($validatorNameOrInstance){if(is_string($validatorNameOrInstance)){$validatorClassName=$validatorNameOrInstance;}else if($validatorNameOrInstance instanceof\MvcCore\Ext\Forms\IValidator){$validatorClassName=get_class($validatorNameOrInstance);}else{return$this->throwNewInvalidArgumentException('Unknown validator type given: `'.$validatorNameOrInstance.'`, type: `'.gettype($validatorNameOrInstance).'`.');}$slashPos=strrpos($validatorClassName,'\\');$validatorName=$slashPos!==FALSE?substr($validatorClassName,$slashPos+1):$validatorClassName;return isset($this->validators[$validatorName]);}public function GetViewScript(){return$this->viewScript;}public function GetJsClassName(){return$this->jsClassName;}public function GetJsSupportingFile(){return$this->jsSupportingFile;}public function GetCssSupportingFile(){return$this->cssSupportingFile;}public function GetTranslate(){return$this->translate;}public static function&GetTemplates(){return(array)static::$templates;}}}
namespace MvcCore\Model{trait Props{protected static$connectionArguments=['4D'=>['dsn'=>'{driver}:host={host};user={user};password={password};dbname={database};port={port};charset={charset}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>[],'defaults'=>['port'=>19812,'charset'=>'UTF-8',],],'firebird'=>['dsn'=>'{driver}:host={host};dbname={database};charset={charset}','auth'=>TRUE,'fileDb'=>TRUE,'options'=>[],'defaults'=>['charset'=>'UTF-8',],],'ibm'=>['dsn'=>'ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE={database};HOSTNAME={host};PORT={port};PROTOCOL={protocol};','auth'=>TRUE,'fileDb'=>FALSE,'options'=>[],'defaults'=>['port'=>56789,'protocol'=>'TCPIP',],],'informix'=>['dsn'=>'{driver}:host={host};service={service};database={database};server={server};protocol={protocol};EnableScrollableCursors=1','auth'=>TRUE,'fileDb'=>FALSE,'options'=>[],'defaults'=>['service'=>9800,'protocol'=>'onsoctcp',],],'mysql'=>['dsn'=>'{driver}:host={host};dbname={database};port={port}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>['\PDO::ATTR_EMULATE_PREPARES'=>TRUE,'\PDO::MYSQL_ATTR_MULTI_STATEMENTS'=>TRUE,'\PDO::MYSQL_ATTR_INIT_COMMAND'=>"SET NAMES 'UTF8'",],'defaults'=>['port'=>3306,],],'sqlite'=>['dsn'=>'{driver}:{database}','auth'=>FALSE,'fileDb'=>TRUE,'options'=>[],'defaults'=>['\PDO::ATTR_TIMEOUT'=>15,],],'sqlsrv'=>['dsn'=>'{driver}:Server={host};Database={database}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>[],'defaults'=>[],],'default'=>['dsn'=>'{driver}:host={host};dbname={database}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>[],'defaults'=>[],],];protected static$systemConfigDbSectionName='db';protected static$systemConfigModelProps=['sectionName'=>'db','defaultName'=>'defaultName','defaultClass'=>'defaultClass','name'=>'name','index'=>'index','driver'=>'driver','host'=>'host','port'=>'port','user'=>'user','password'=>'password','database'=>'database','options'=>'options','class'=>'class',];protected static$connectionName=NULL;protected static$connectionClass='\\PDO';protected static$connections=[];protected static$instances=[];protected static$configs=NULL;protected$autoInit=FALSE;protected$db;protected$config;protected$resource;protected$initialValues=[];protected static$protectedProperties=['autoInit'=>TRUE,'db'=>FALSE,'config'=>FALSE,'resource'=>FALSE,'initialValues'=>FALSE,];}}
namespace MvcCore\Model{trait Instancing{public function __construct($connectionName=NULL){if($this->autoInit)$this->Init($connectionName);}public static function GetInstance(){$staticClassName=get_called_class();$args=func_get_args();$instanceIndex=str_replace('\\','_',$staticClassName).'#'.serialize($args);if(!isset(self::$instances[$instanceIndex])){$reflectionClass=new\ReflectionClass($staticClassName);$instance=$reflectionClass->newInstanceArgs($args);self::$instances[$instanceIndex]=$instance;}return self::$instances[$instanceIndex];}public static function GetResource($args=[],$resourceClassPath='%SELF%s\Resource'){$result=NULL;$staticClassPath=get_called_class();$namespaceSeparator=strpos($staticClassPath,'\\')===FALSE?'_':'\\';$staticClassPathExpl=explode($namespaceSeparator,$staticClassPath);$resourceClassPathExpl=explode($namespaceSeparator,$resourceClassPath);$resourceClassPathArr=[];foreach($resourceClassPathExpl as$key=>$resourceClassPathItem){$selfMatched=mb_strpos($resourceClassPathItem,'%SELF%')!==FALSE;if($selfMatched){$resourceClassPathItem=str_replace('%SELF%',$staticClassPath,$resourceClassPathItem);$resourceClassPathItemExpl=explode($namespaceSeparator,$resourceClassPathItem);$resourceClassPathArr=array_merge($resourceClassPathArr,$resourceClassPathItemExpl);}else if($resourceClassPathItem==='.'){if($key===0){unset($staticClassPathExpl[count($staticClassPathExpl)-1]);$resourceClassPathArr=array_merge([],$staticClassPathExpl);}continue;}else if($resourceClassPathItem==='..'){if($key===0){unset($staticClassPathExpl[count($staticClassPathExpl)-1]);$resourceClassPathArr=array_merge([],$staticClassPathExpl);}unset($resourceClassPathArr[count($resourceClassPathArr)-1]);}else{$resourceClassPathArr[]=$resourceClassPathItem;}}$resourceClassName=implode($namespaceSeparator,$resourceClassPathArr);if(class_exists($resourceClassName)){$result=call_user_func_array([$resourceClassName,'GetInstance'],$args?:[]);}else{throw new\InvalidArgumentException("Class `{$resourceClassName}` doesn't exist.");}return$result;}public function Init($args=[]){$connectionName=NULL;$initResource=FALSE;$args=func_get_args();foreach($args as$arg){if(is_bool($arg)){$initResource=$arg;}else if(is_string($arg)||is_int($arg)){$connectionName=$arg;}}if($connectionName===NULL)$connectionName=static::$connectionName;if($connectionName===NULL)$connectionName=self::$connectionName;$this->config=static::GetConfig($connectionName);$this->db=static::GetDb($connectionName);if($initResource)$this->resource=static::GetResource();}}}
namespace MvcCore\Model{trait DbConnection{public static function GetDb($connectionNameOrConfig=NULL,$strict=FALSE){if(is_array($connectionNameOrConfig)||$connectionNameOrConfig instanceof\stdClass){if(self::$configs===NULL)static::loadConfigs(FALSE);$connectionName=static::SetConfig((array)$connectionNameOrConfig);}else{if(self::$configs===NULL)static::loadConfigs(TRUE);$connectionName=$connectionNameOrConfig;if($connectionName===NULL)$connectionName=static::$connectionName;if($connectionName===NULL)$connectionName=self::$connectionName;}if($connectionName===NULL)throw new\InvalidArgumentException("[".get_class()."] No connection name or connection config specified.");if(!isset(static::$connections[$connectionName])){$cfg=static::GetConfig($connectionName);if($strict)throw new\InvalidArgumentException("No connection found under given name/index: `{$connectionNameOrConfig}`.");if($cfg===NULL)$cfg=current(self::$configs);$sysCfgProps=(object)static::$systemConfigModelProps;$conArgsKey=isset(self::$connectionArguments[$cfg->{$sysCfgProps->driver}])?$cfg->{$sysCfgProps->driver}:'default';$conArgs=(object)self::$connectionArguments[$conArgsKey];$connection=NULL;if($conArgs->fileDb){$appRoot=\MvcCore\Application::GetInstance()->GetRequest()->GetAppRoot();if(strpos($appRoot,'phar://')!==FALSE){$lastSlashPos=strrpos($appRoot,'/');$appRoot=substr($appRoot,7,$lastSlashPos-7);}$cfg->{$sysCfgProps->database}=str_replace('\\','/',realpath($appRoot.$cfg->{$sysCfgProps->database}));}$dsn=$conArgs->dsn;$cfgArr=array_merge($conArgs->defaults,(array)$cfg);foreach($cfgArr as$key=>$value){if(is_numeric($key))continue;if(isset($sysCfgProps->{$key})){$prop=$sysCfgProps->{$key};$value=isset($cfg->{$prop})?$cfg->{$prop}:$value;}$dsn=str_replace('{'.$key.'}',$value,$dsn);}$connectionClass=isset($cfg->{$sysCfgProps->class})?$cfg->{$sysCfgProps->class}:self::$connectionClass;if($conArgs->auth){$rawOptions=isset($cfg->{$sysCfgProps->options})?array_merge($conArgs->options,$cfg->{$sysCfgProps->options}?:[]):$conArgs->options;$options=[];foreach($rawOptions as$optionKey=>$optionValue){if(is_string($optionKey)){if(defined($optionKey))$options[constant($optionKey)]=$optionValue;}else{$options[$optionKey]=$optionValue;}}$connection=new$connectionClass($dsn,$cfg->{$sysCfgProps->user},$cfg->{$sysCfgProps->password},$options);}else{$connection=new$connectionClass($dsn);}static::$connections[$connectionName]=$connection;}return static::$connections[$connectionName];}public static function&GetConfigs(){if(self::$configs===NULL)static::loadConfigs(TRUE);return self::$configs;}public static function SetConfigs(array$configs=[],$defaultConnectionName=NULL){self::$configs=[];foreach($configs as$key=>$value)self::$configs[$key]=(object)$value;self::$configs=&$configs;if($defaultConnectionName!==NULL)self::$defaultConnectionName=$defaultConnectionName;return TRUE;}public static function&GetConfig($connectionName=NULL){if(self::$configs===NULL)static::loadConfigs(TRUE);if($connectionName===NULL)$connectionName=static::$connectionName;if($connectionName===NULL)$connectionName=self::$connectionName;return self::$configs[$connectionName];}public static function SetConfig(array$config=[],$connectionName=NULL){if(self::$configs===NULL)static::loadConfigs(FALSE);$sysCfgProps=(object)static::$systemConfigModelProps;if($connectionName===NULL){if(isset($config[$sysCfgProps->name])){$connectionName=$config[$sysCfgProps->name];}else if(isset($config[$sysCfgProps->index])){$connectionName=$config[$sysCfgProps->index];}}if($connectionName===NULL){$configNumericKeys=array_filter(array_keys(self::$configs),'is_numeric');if($configNumericKeys){sort($configNumericKeys);$connectionName=$configNumericKeys[count($configNumericKeys)-1]+1;}else{$connectionName=0;}}self::$configs[$connectionName]=(object)$config;return$connectionName;}protected static function loadConfigs($throwExceptionIfNoSysConfig=TRUE){$configClass=\MvcCore\Application::GetInstance()->GetConfigClass();$systemCfg=$configClass::GetSystem();if($systemCfg===FALSE&&$throwExceptionIfNoSysConfig)throw new\Exception("[".get_class()."] System config not found in '".$configClass::GetSystemConfigPath()."'.");if(!isset($systemCfg->db)&&$throwExceptionIfNoSysConfig)throw new\Exception("[".get_class()."] No [db] section and no records matched "."'db.*' found in system config.ini.");$sysCfgProps=(object)static::$systemConfigModelProps;$systemCfgDb=&$systemCfg->{$sysCfgProps->sectionName};$cfgType=gettype($systemCfgDb);$configs=[];$defaultConnectionName=NULL;$defaultConnectionClass=NULL;if($cfgType=='array'){if(isset($systemCfgDb[$sysCfgProps->defaultName]))$defaultConnectionName=$systemCfgDb[$sysCfgProps->defaultName];if(isset($systemCfgDb[$sysCfgProps->defaultClass]))$defaultConnectionClass=$systemCfgDb[$sysCfgProps->defaultClass];foreach($systemCfgDb as$key=>$value){if(is_scalar($value)){$configs[$key]=$value;}else{$configs[$key]=(object)$value;}}}else if($cfgType=='object'){if(isset($systemCfgDb->{$sysCfgProps->defaultName}))$defaultConnectionName=$systemCfgDb->{$sysCfgProps->defaultName};if(isset($systemCfgDb->{$sysCfgProps->defaultClass}))$defaultConnectionClass=$systemCfgDb->{$sysCfgProps->defaultClass};if(isset($systemCfgDb->driver)){$configs[0]=$systemCfgDb;}else{foreach($systemCfgDb as$key=>$value){if(is_scalar($value)){$configs[$key]=$value;}else{$configs[$key]=(object)$value;}}}}if($defaultConnectionName===NULL){if($configs){reset($configs);$defaultConnectionName=key($configs);}}if(!isset($configs[$defaultConnectionName]))throw new\Exception("[".get_class()."] No default connection name '{$defaultConnectionName}'"." found in 'db.*' section in system config.ini.");self::$connectionName=$defaultConnectionName;if($defaultConnectionClass!==NULL)self::$connectionClass=$defaultConnectionClass;self::$configs=&$configs;}}}
namespace MvcCore{interface IModel{const KEYS_CONVERSION_UNDERSCORES_TO_PASCALCASE=0b00000001;const KEYS_CONVERSION_UNDERSCORES_TO_CAMELCASE=0b00000010;const KEYS_CONVERSION_PASCALCASE_TO_UNDERSCORES=0b00000100;const KEYS_CONVERSION_PASCALCASE_TO_CAMELCASE=0b00001000;const KEYS_CONVERSION_CAMELCASE_TO_UNDERSCORES=0b00010000;const KEYS_CONVERSION_CAMELCASE_TO_PASCALCASE=0b00100000;const KEYS_CONVERSION_CASE_SENSITIVE=0b01000000;const KEYS_CONVERSION_CASE_INSENSITIVE=0b10000000;public function GetValues($getNullValues=FALSE,$includeInheritProperties=TRUE,$publicOnly=TRUE);public function SetUp($data=[],$keysConversionFlags=NULL);public function GetTouched($includeInheritProperties=TRUE,$publicOnly=FALSE);public static function GetInstance();public static function GetResource($args=[],$resourceClassPath='%SELF%s\Resource');public function Init($args=[]);public static function GetDb($connectionNameOrConfig=NULL);public static function&GetConfigs();public static function SetConfigs(array$configs=[]);public static function&GetConfig($connectionName=NULL);public static function SetConfig(array$config=[],$connectionName=NULL);public function __call($rawName,$arguments=[]);public function __set($name,$value);public function __get($name);public function __sleep();public function __wakeup();}}
namespace MvcCore\Ext\Forms\Field\Props{trait Required{protected$required=NULL;public function GetRequired(){return$this->required;}public function SetRequired($required=TRUE){$this->required=$required;return$this;}}}
namespace MvcCore\Ext\Forms\Field\Props{trait AccessKey{protected$accessKey=NULL;public function GetAccessKey(){return$this->accessKey;}public function SetAccessKey($accessKey){$this->accessKey=$accessKey;return$this;}}}
namespace MvcCore\Ext\Forms{interface IValidator{public static function CreateInstance(array$constructorConfig=[]);public static function GetErrorMessage($errorMsgIndex);public function SetForm(\MvcCore\Ext\Forms\IForm$form);public function SetField(\MvcCore\Ext\Forms\IField$field);public function Validate($rawSubmittedValue);}}
namespace MvcCore\Ext\Forms\Field\Props{trait AutoFocus{protected$autoFocus=NULL;public function GetAutoFocus(){return$this->autoFocus;}public function SetAutoFocus($autoFocus=TRUE,$duplicateBehaviour=\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_EXCEPTION){$this->autoFocus=$autoFocus;if($autoFocus&&$duplicateBehaviour!==\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_QUIETLY_SET_NEW){$form=$this->form;$form::SetAutoFocusedFormField($form->GetId(),$this->name,$duplicateBehaviour);}return$this;}}}
namespace MvcCore\Ext\Forms\Field\Props{trait Disabled{protected$disabled=NULL;public function GetDisabled(){return$this->disabled;}public function SetDisabled($disabled){$this->disabled=$disabled;return$this;}}}
namespace MvcCore\Ext\Forms\Field\Props{trait ReadOnly{protected$readOnly=NULL;public function GetReadOnly(){return$this->readOnly;}public function SetReadOnly($readOnly=TRUE){$this->readOnly=$readOnly;return$this;}}}
namespace MvcCore\Ext\Forms\Field\Props{trait TabIndex{protected$tabIndex=NULL;public function GetTabIndex(){return$this->tabIndex;}public function SetTabIndex($tabIndex='auto'){if($tabIndex==='auto'||is_int($tabIndex)){$this->tabIndex=$tabIndex;}else{$this->throwNewInvalidArgumentException('Property `tabindex` is possible to configure only with `auto` string or integer. `'.$tabIndex.'` value given.');}return$this;}protected function preDispatchTabIndex(){if($this->tabIndex==='auto')$this->tabIndex=$this->form->GetFieldNextAutoTabIndex();}}}
namespace MvcCore\Ext\Forms\Fields{interface IVisibleField{public function GetAccessKey();public function SetAccessKey($accessKey);public function GetAutoFocus();public function SetAutoFocus($autoFocus=TRUE,$duplicateBehaviour=\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_EXCEPTION);public function GetDisabled();public function SetDisabled($disabled);public function GetReadOnly();public function SetReadOnly($readOnly=TRUE);public function GetRequired();public function SetRequired($required=TRUE);public function GetTabIndex();public function SetTabIndex($tabIndex);}}
namespace MvcCore\Ext\Auths\Basics\UserAndRole{trait Permissions{protected$permissions=[];public function GetPermission($permissionName){if(property_exists($this,'admin')&&$this->admin)return TRUE;if(in_array($permissionName,$this->permissions,TRUE))return TRUE;return FALSE;}public function SetPermission($permissionName,$allow=TRUE){if(!in_array($permissionName,$this->permissions,TRUE)&&$allow){$this->permissions[]=$permissionName;}else if(in_array($permissionName,$this->permissions,TRUE)&&!$allow){$position=array_search($permissionName,$this->permissions);if($position!==FALSE)array_splice($this->permissions,$position,1);}return$this;}public function&GetPermissions(){return$this->permissions;}public function SetPermissions($permissions){if(is_string($permissions)){$this->permissions=explode(',',$permissions);}else if(is_array($permissions)){$this->permissions=$permissions;}return$this;}}}
namespace MvcCore\Ext\Auths\Basics\UserAndRole{trait Base{protected$id=NULL;protected$active=TRUE;public function GetId(){return$this->id;}public function SetId($id){$this->id=$id;return$this;}public function IsActive(){return$this->active;}public function GetActive(){return$this->active;}public function SetActive($active){$this->active=(bool)$active;return$this;}}}
namespace MvcCore\Ext\Auths\Basics{interface IUser{const SESSION_USERNAME_KEY='userName';const SESSION_AUTHENTICATED_KEY='authenticated';public function GetId();public function SetId($id);public function IsActive();public function GetActive();public function SetActive($active);public function GetUserName();public function SetUserName($userName);public function GetFullName();public function SetFullName($fullName);public function GetPasswordHash();public function SetPasswordHash($passwordHash);public static function SetUpUserBySession();public static function LogIn($userName='',$password='');public static function LogOut($destroyWholeSession=FALSE);public static function EncodePasswordToHash($password='',$options=[]);public static function GetUserSessionNamespace();public static function SetUserSessionNamespace(\MvcCore\ISession$userSessionNamespace);public function IsAdmin();public function GetAdmin();public function SetAdmin($admin=TRUE);public function&GetRoles();public function SetRoles($rolesOrRolesNames=[]);public function AddRole($roleOrRoleName);public function HasRole($roleOrRoleName);public function RemoveRole($roleOrRoleName);public function IsAllowed($permissionName);public function GetPermission($permissionName);public function SetPermission($permissionName,$allow=TRUE);public function&GetPermissions();public function SetPermissions($permissions);public static function GetByUserName($userName);}}
namespace MvcCore\Ext\Forms\Field\Props{trait AutoComplete{protected$autoComplete=NULL;public function GetAutoComplete(){return$this->autoComplete;}public function SetAutoComplete($autoComplete=FALSE){if($autoComplete===FALSE){$this->autoComplete='off';}else if($autoComplete===TRUE){$this->autoComplete='on';}else{$this->autoComplete=$autoComplete;}return$this;}}}
namespace MvcCore\Ext\Auths\Basics\User{trait Auth{protected static$userSessionNamespace=NULL;public static function SetUpUserBySession(){$userSessionNamespace=static::GetUserSessionNamespace();$userNameStr=\MvcCore\Ext\Auths\Basics\IUser::SESSION_USERNAME_KEY;$authenticatedStr=\MvcCore\Ext\Auths\Basics\IUser::SESSION_AUTHENTICATED_KEY;if(isset($userSessionNamespace->{$userNameStr})&&isset($userSessionNamespace->{$authenticatedStr})&&$userSessionNamespace->{$authenticatedStr}){$user=static::GetByUserName($userSessionNamespace->{$userNameStr});$user->passwordHash=NULL;if(is_array($user->initialValues)&&array_key_exists('passwordHash',$user->initialValues))$user->initialValues['passwordHash']=NULL;return$user;}return NULL;}public static function LogIn($userName='',$password=''){$user=static::GetByUserName($userName);if($user){$hashedPassword=static::EncodePasswordToHash($password);if(static::hashEquals($user->passwordHash,$hashedPassword)){$userSessionNamespace=static::GetUserSessionNamespace();$userNameStr=\MvcCore\Ext\Auths\Basics\IUser::SESSION_USERNAME_KEY;$authenticatedStr=\MvcCore\Ext\Auths\Basics\IUser::SESSION_AUTHENTICATED_KEY;$userSessionNamespace->$userNameStr=$user->userName;$userSessionNamespace->$authenticatedStr=TRUE;$user->passwordHash=NULL;if(is_array($user->initialValues)&&array_key_exists('passwordHash',$user->initialValues))$user->initialValues['passwordHash']=NULL;return$user;}}return NULL;}public static function LogOut($destroyWholeSession=FALSE){$userSessionNamespace=static::GetUserSessionNamespace();if($destroyWholeSession){static::GetUserSessionNamespace()->Destroy();}else{$authenticatedStr=\MvcCore\Ext\Auths\Basics\IUser::SESSION_AUTHENTICATED_KEY;$userSessionNamespace->$authenticatedStr=FALSE;}}public static function EncodePasswordToHash($password='',$options=[]){if(!isset($options['salt'])){$configuredSalt=\MvcCore\Ext\Auths\Basic::GetInstance()->GetPasswordHashSalt();if($configuredSalt!==NULL){$options['salt']=$configuredSalt;}else{throw new\InvalidArgumentException('['.get_class().'] No option `salt` given by second argument `$options`'." or no salt configured by `\MvcCore\Ext\Auth::GetInstance()->SetPasswordHashSalt('...')`.");}}if(isset($options['cost'])&&($options['cost']<4||$options['cost']>31))throw new\InvalidArgumentException('['.get_class().'] `cost` option has to be from `4` to `31`, `'.$options['cost'].'` given.');if(\PHP_VERSION_ID>=50500){$result=@password_hash($password,PASSWORD_BCRYPT,$options);}else{$cost=isset($options['cost'])?$options['cost']:10;$hashPrefix=sprintf("$2y$%02d$",$cost);$hash=$hashPrefix.$options['salt'].'$';$result=crypt($password,$hash);}if(!$result||strlen($result)<60)throw new\RuntimeException('['.get_class().'] Hash computed by `password_hash()` is invalid. Try a little bit longer salt.');return$result;}public static function GetUserSessionNamespace(){if(static::$userSessionNamespace===NULL){$sessionClass=\MvcCore\Application::GetInstance()->GetSessionClass();static::$userSessionNamespace=$sessionClass::GetNamespace('MvcCore\Ext\Auths\Basic');static::$userSessionNamespace->SetExpirationSeconds(\MvcCore\Ext\Auths\Basic::GetInstance()->GetExpirationSeconds());}return static::$userSessionNamespace;}public static function SetUserSessionNamespace(\MvcCore\ISession$userSessionNamespace){static::$userSessionNamespace=$userSessionNamespace;return$userSessionNamespace;}protected static function hashEquals($hash1,$hash2){if(function_exists('hash_equals')){return hash_equals($hash1,$hash2);}else{if(strlen($hash1)!=strlen($hash2)){return FALSE;}else{$res=$hash1^$hash2;$ret=0;for($i=strlen($res)-1;$i>=0;$i--)$ret|=ord($res[$i]);return!$ret;}}}}}
namespace MvcCore\Ext\Auths\Basics\User{trait Roles{protected$admin=FALSE;protected$roles=[];public function IsAdmin(){return$this->admin;}public function GetAdmin(){return$this->admin;}public function SetAdmin($admin=TRUE){$this->admin=(bool)$admin;return$this;}public function&GetRoles(){return$this->roles;}public function SetRoles($rolesOrRolesNames=[]){$this->roles=[];foreach($rolesOrRolesNames as$roleOrRoleName)$this->roles[]=static::getRoleName($roleOrRoleName);return$this;}public function AddRole($roleOrRoleName){$roleName=static::getRoleName($roleOrRoleName);if(!in_array($roleName,$this->roles,TRUE))$this->roles[]=$roleName;return$this;}public function HasRole($roleOrRoleName){$roleName=static::getRoleName($roleOrRoleName);return in_array($roleName,$this->roles,TRUE);}public function RemoveRole($roleOrRoleName){$roleName=static::getRoleName($roleOrRoleName);$position=array_search($roleName,$this->roles);if($position!==FALSE)array_splice($this->roles,$position,1);return$this;}public function IsAllowed($permissionName){if($this->GetPermission($permissionName))return TRUE;return FALSE;}protected static function getRoleName($roleOrRoleName){if(is_string($roleOrRoleName)){return$roleOrRoleName;}else if($roleOrRoleName instanceof\MvcCore\Ext\Auths\Basics\IRole){return$roleOrRoleName->GetName();}else{throw new\InvalidArgumentException('['.get_class()."] Given argument `{$roleOrRoleName}` doesn't "."implement interface `\MvcCore\Ext\Auths\Basics\IRole` "."or it's not string with role name.");}}}}
namespace MvcCore\Ext\Auths\Basics\User{trait Base{protected$userName=NULL;protected$fullName=NULL;protected$passwordHash=NULL;public function GetUserName(){return$this->userName;}public function SetUserName($userName){$this->userName=$userName;return$this;}public function GetFullName(){return$this->fullName;}public function SetFullName($fullName){$this->fullName=$fullName;return$this;}public function GetPasswordHash(){return$this->passwordHash;}public function SetPasswordHash($passwordHash){$this->passwordHash=$passwordHash;return$this;}}}
namespace MvcCore\Ext\Views\Helpers{interface IHelper{public static function GetInstance();public function SetView(\MvcCore\IView$view);}}
namespace MvcCore\Ext\Forms\Field\Props{trait MinMaxLength{protected$minLength=NULL;protected$maxLength=NULL;public function GetMinLength(){return$this->minLength;}public function SetMinLength($minLength){$this->minLength=$minLength;return$this;}public function GetMaxLength(){return$this->maxLength;}public function SetMaxLength($maxLength){$this->maxLength=$maxLength;return$this;}protected function setFormMinMaxLength(){if(($this->minLength!==NULL||$this->maxLength!==NULL)&&!isset($this->validators['MinMaxLength']))$this->validators['MinMaxLength']='MinMaxLength';}}}
namespace MvcCore\Ext\Form{trait Submitting{public function Submit(array&$rawRequestParams=[]){if($this->dispatchState<1)$this->Init();if(!$rawRequestParams)$rawRequestParams=$this->request->GetParams('.*');$this->SubmitSetStartResultState($rawRequestParams)->SubmitValidateMaxPostSizeIfNecessary()->SubmitCsrfTokens($rawRequestParams)->SubmitAllFields($rawRequestParams)->SaveSession();return[$this->result,$this->values,$this->errors,];}public function SubmitSetStartResultState(array&$rawRequestParams=[]){if(!$this->customResultStates){$this->result=\MvcCore\Ext\Forms\IForm::RESULT_SUCCESS;}else{$customResultStateDefined=FALSE;foreach($this->customResultStates as$fieldName=>$customResultState){if(isset($rawRequestParams[$fieldName])){$customResultStateDefined=TRUE;$this->result=$customResultState;break;}}if(!$customResultStateDefined)$this->result=\MvcCore\Ext\Forms\IForm::RESULT_SUCCESS;}return$this;}public function SubmitValidateMaxPostSizeIfNecessary(){if($this->method!=\MvcCore\Ext\Forms\IForm::METHOD_POST)return$this;$contentLength=$this->request->GetContentLength();if($contentLength===NULL)$this->AddError($this->GetDefaultErrorMsg(\MvcCore\Ext\Forms\IError::EMPTY_CONTENT));$maxSize=static::GetPhpIniSizeLimit('post_max_size');if($maxSize>0&&$maxSize<$contentLength){$viewClass=$this->viewClass;$this->AddError($viewClass::Format($this->GetDefaultErrorMsg(\MvcCore\Ext\Forms\IError::MAX_POST_SIZE),[$maxSize]));}return$this;}public function SubmitAllFields(array&$rawRequestParams=[]){$rawRequestParams=$this->submitAllFieldsEncodeAcceptCharsets($rawRequestParams);$this->values=[];foreach($this->fields as$fieldName=>$field){if($field instanceof\MvcCore\Ext\Forms\Fields\ISubmit)continue;$safeValue=$field->Submit($rawRequestParams);if($safeValue===NULL){$this->values[$fieldName]=NULL;}else{$field->SetValue($safeValue);$this->values[$fieldName]=$safeValue;}}return$this;}public function SubmittedRedirect(){if($this->dispatchState<1)$this->Init();$urlPropertyName='';$redirectMsg='';if($this->result===\MvcCore\Ext\Forms\IForm::RESULT_ERRORS){$urlPropertyName='errorUrl';$redirectMsg='error URL';}else if($this->result===\MvcCore\Ext\Forms\IForm::RESULT_SUCCESS){$urlPropertyName='successUrl';$redirectMsg='success URL';}else if($this->result===\MvcCore\Ext\Forms\IForm::RESULT_PREV_PAGE){$urlPropertyName='prevStepUrl';$redirectMsg='previous step URL';}else if($this->result===\MvcCore\Ext\Forms\IForm::RESULT_NEXT_PAGE){$urlPropertyName='nextStepUrl';$redirectMsg='next step URL';}$url=isset($this->{$urlPropertyName})?$this->{$urlPropertyName}:NULL;$errorMsg=$url?'':'Specify `'.$urlPropertyName.'` property.';if($this->result)$this->values=[];$this->SaveSession();if(!$url&&$this->result>-1&&$this->result<4)throw new\RuntimeException('['.get_class().'] No url specified to redirect. '.$errorMsg);if($url)self::Redirect($url,\MvcCore\IResponse::SEE_OTHER,'Form has been submitted and redirected to '.$redirectMsg);}public function&GetValidator($validatorName){if(isset($this->validators[$validatorName])){$validator=$this->validators[$validatorName];}else{$validator=NULL;$toolClass=self::$toolClass;foreach(static::$validatorsNamespaces as$validatorsNamespace){$validatorFullClassName=$validatorsNamespace.$validatorName;if(class_exists($validatorFullClassName)&&$toolClass::CheckClassInterface($validatorFullClassName,'MvcCore\\Ext\\Forms\\IValidator',TRUE,TRUE)){$validator=$validatorFullClassName::CreateInstance()->SetForm($this);break;}}if($validator===NULL)$this->throwNewInvalidArgumentException('Validator `'.$validatorName.'` not found in any namespace: `'.implode('`, `',static::$validatorsNamespaces).'`.');$this->validators[$validatorName]=$validator;}return$validator;}public function GetDefaultErrorMsg($index){return static::$defaultErrorMessages[$index];}protected function&submitAllFieldsEncodeAcceptCharsets(array&$rawRequestParams=[]){if(count($this->acceptCharsets)===0)return$rawRequestParams;$toEncoding=strtoupper($this->GetResponse()->GetEncoding());if(!static::$toolClass)static::$toolClass=\MvcCore\Application::GetInstance()->GetToolClass();$bestCharset=NULL;$translatedStats=[];$translatedRawRequestParams=[];foreach($this->acceptCharsets as$acceptCharset){if($acceptCharset==='UNKNOWN')$acceptCharset=$toEncoding;list($stats,$total,$rawTranslatedValues)=$this->encodeAcceptCharsetsArrayOrString($rawRequestParams,$acceptCharset,$toEncoding);$translatedRawRequestParams[$acceptCharset]=$rawTranslatedValues;if($total===$stats){$bestCharset=$acceptCharset;break;}else{$translatedStats[$acceptCharset]=$stats;}}if(!$bestCharset){asort($translatedStats);$translatedStats=array_reverse($translatedStats);reset($translatedStats);$firstCharset=current(array_keys($translatedStats));$bestScore=$translatedStats[$firstCharset];foreach($this->acceptCharsets as$acceptCharset){if($acceptCharset==='UNKNOWN')$acceptCharset=$toEncoding;if($translatedStats[$acceptCharset]===$bestScore){$bestCharset=$acceptCharset;break;}}}return$translatedRawRequestParams[$bestCharset];}protected function encodeAcceptCharsetsArrayOrString(&$rawValue,$fromEncoding,$toEncoding){if(gettype($rawValue)=='array'){$stats=0;$totalCount=0;$rawTranslatedValues=[];foreach($rawValue as$rawKey=>&$rawValueItem){if(gettype($rawValueItem)=='array'){list($rawItemStats,$rawItemsTotal,$rawTranslatedValue)=$this->encodeAcceptCharsetsArrayOrString($rawValueItem,$fromEncoding,$toEncoding);}else{list($rawItemStats,$rawItemsTotal,$rawTranslatedValue)=$this->encodeAcceptCharsetsString($rawValueItem,$fromEncoding,$toEncoding);}$totalCount+=$rawItemsTotal;if($rawItemStats){$stats+=$rawItemStats;$rawTranslatedValues[$rawKey]=$rawTranslatedValue;}else{$rawTranslatedValues[$rawKey]=$rawValue;}}return[$stats,$totalCount,$rawTranslatedValues];}else{return$this->encodeAcceptCharsetsString($rawValue,$fromEncoding,$toEncoding);}}protected function encodeAcceptCharsetsString(&$rawValue,$fromEncoding,$toEncoding){$errors=[];$toolClass=static::$toolClass;$translatedValue=$toolClass::Invoke('iconv',[$fromEncoding,$toEncoding.'//TRANSLIT',$rawValue],function()use(&$errors){$errors[]=func_get_args();});if($errors||$translatedValue===FALSE){return[0,1,NULL];}else{return[1,1,$translatedValue];}}}}
namespace MvcCore\Ext\Forms\Fields{interface ILabel{public function GetLabel();public function SetLabel($label=NULL);public function GetLabelSide();public function SetLabelSide($labelSide=\MvcCore\Ext\Forms\IField::LABEL_SIDE_RIGHT);public function GetRenderMode();public function SetRenderMode($renderMode=\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_LABEL_AROUND);public function&GetLabelAttrs();public function GetLabelAttr($name='data-*');public function SetLabelAttrs(array$attrs=[]);public function SetLabelAttr($name,$value);public function AddLabelAttrs(array$attrs=[]);}}
namespace MvcCore\Ext\Forms\Field\Props{trait PlaceHolder{protected$placeHolder=NULL;public function GetPlaceHolder(){return$this->placeHolder;}public function SetPlaceHolder($placeHolder){$this->placeHolder=$placeHolder;return$this;}}}
namespace MvcCore\Ext\Forms\Field\Props{trait Label{protected$label=NULL;protected$labelSide=\MvcCore\Ext\Forms\IField::LABEL_SIDE_LEFT;protected$renderMode=NULL;protected$labelAttrs=[];public function GetLabel(){return$this->label;}public function SetLabel($label=NULL){$this->label=$label;return$this;}public function GetLabelSide(){return$this->labelSide;}public function SetLabelSide($labelSide=\MvcCore\Ext\Forms\IField::LABEL_SIDE_RIGHT){$this->labelSide=$labelSide;return$this;}public function GetRenderMode(){return$this->renderMode;}public function SetRenderMode($renderMode=\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_LABEL_AROUND){$this->renderMode=$renderMode;return$this;}public function&GetLabelAttrs(){return$this->labelAttrs;}public function GetLabelAttr($name='data-*'){return isset($this->labelAttrs[$name])?$this->labelAttrs[$name]:NULL;}public function SetLabelAttrs(array$attrs=[]){$this->labelAttrs=$attrs;return$this;}public function SetLabelAttr($name,$value){$this->labelAttrs[$name]=$value;return$this;}public function AddLabelAttrs(array$attrs=[]){$this->labelAttrs=array_merge($this->labelAttrs,$attrs);return$this;}}}
namespace MvcCore\Ext\Forms\Field\Props{trait InputMode{protected static$fieldTypesAndInputModes=['text'=>'text','password'=>'text','tel'=>'tel','search'=>'search','email'=>'email','url'=>'url'];protected$inputMode=NULL;public function GetInputMode(){return$this->inputMode;}public function SetInputMode($inputMode){$this->inputMode=$inputMode;return$this;}protected function preDispatchInputMode(){if($this->inputMode!==NULL)return;if($this->type==='number'){if((is_numeric($this->value)&&floor($this->value)!==$this->value)||(is_numeric($this->step)&&floor($this->step)!==$this->step)||(is_numeric($this->min)&&floor($this->min)!==$this->min)||(is_numeric($this->max)&&floor($this->max)!==$this->max)){$this->inputMode='decimal';}else{$this->inputMode='numeric';}}else if(isset(static::$fieldTypesAndInputModes[$this->type])){$this->inputMode=static::$fieldTypesAndInputModes[$this->type];}}}}
namespace MvcCore\Ext\Forms\Field\Props{trait DataList{protected$list=NULL;public function GetList(){return$this->list;}public function SetList($dataListIdOrInstance){if($dataListIdOrInstance instanceof\MvcCore\Ext\Forms\IField){$this->list=$dataListIdOrInstance->GetId();}else{$this->list=(string)$dataListIdOrInstance;}return$this;}}}
namespace MvcCore\Ext\Forms{interface IForm{const METHOD_GET='GET';const METHOD_POST='POST';const ENCTYPE_URLENCODED='application/x-www-form-urlencoded';const ENCTYPE_MULTIPART='multipart/form-data';const ENCTYPE_PLAINTEXT='text/plain';const HTML_IDS_DELIMITER='_';const RESULT_ERRORS=0;const RESULT_SUCCESS=1;const RESULT_PREV_PAGE=2;const RESULT_NEXT_PAGE=3;const FIELD_RENDER_MODE_NORMAL='normal';const FIELD_RENDER_MODE_NO_LABEL='no-label';const FIELD_RENDER_MODE_LABEL_AROUND='label-around';const ERROR_RENDER_MODE_ALL_TOGETHER='all-together';const ERROR_RENDER_MODE_BEFORE_EACH_CONTROL='before-each-control';const ERROR_RENDER_MODE_AFTER_EACH_CONTROL='after-each-control';const FORM_ASSETS_DIR_REPLACEMENT='__MVCCORE_FORM_ASSETS_DIR__';public function Init();public function PreDispatch();public function Translate($translationKey);public function GetId();public function GetAction();public function GetMethod();public function GetEnctype();public function GetTarget();public function GetAutoComplete();public function GetNoValidate();public function GetAcceptCharsets();public function GetLang();public function GetLocale();public function&GetCssClasses();public function&GetAttributes();public function GetSuccessUrl();public function GetPrevStepUrl();public function GetNextStepUrl();public function GetErrorUrl();public function GetResult();public function GetTranslator();public function GetTranslate();public function GetDefaultRequired();public function&GetValues();public function&GetErrors();public function GetSessionExpiration();public function GetBaseTabIndex();public function GetFieldNextAutoTabIndex();public function GetDefaultFieldsRenderMode();public function GetErrorsRenderMode();public function GetViewScript();public function GetViewClass();public function&GetJsSupportFiles();public function&GetCssSupportFiles();public function GetJsSupportFilesRenderer();public function GetCssSupportFilesRenderer();public function GetFormTagRenderingStatus();public static function GetJsSupportFilesRootDir();public static function GetCssSupportFilesRootDir();public static function GetValidatorsNamespaces();public static function GetPhpIniSizeLimit($iniVarName);public static function GetById($formId);public static function GetAutoFocusedFormField($formId,$fieldName);public function SetId($id);public function SetAction($url=NULL);public function SetMethod($method=\MvcCore\Ext\Forms\IForm::METHOD_POST);public function SetEnctype($enctype=\MvcCore\Ext\Forms\IForm::ENCTYPE_URLENCODED);public function SetTarget($target='_self');public function SetAutoComplete($autoComplete=FALSE);public function SetNoValidate($noValidate=TRUE);public function SetAcceptCharsets($acceptCharsets=[]);public function SetLang($lang=NULL);public function SetLocale($locale=NULL);public function SetCssClasses($cssClasses);public function SetAttributes(array$attributes=[]);public function SetSuccessUrl($url=NULL);public function SetPrevStepUrl($url=NULL);public function SetNextStepUrl($url=NULL);public function SetErrorUrl($url=NULL);public function SetResult($result=\MvcCore\Ext\Forms\IForm::RESULT_SUCCESS);public function SetTranslator(callable$translator=NULL);public function SetDefaultRequired($defaultRequired=TRUE);public function SetValues(array$values=[],$caseInsensitive=FALSE,$clearPreviousSessionValues=FALSE);public function SetErrors($errorsCollection=[]);public function SetSessionExpiration($seconds=0);public function SetBaseTabIndex($baseTabIndex=0);public function SetDefaultFieldsRenderMode($defaultFieldsRenderMode=\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NORMAL);public function SetErrorsRenderMode($errorsRenderMode=\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_ALL_TOGETHER);public function SetViewScript($boolOrViewScriptPath=NULL);public function SetViewClass($viewClass='\\MvcCore\\Ext\\Forms\\View');public function SetJsSupportFiles(array$jsRelPathsClassNamesAndParams=[]);public function SetCssSupportFiles(array$cssRelativePaths=[]);public function SetJsSupportFilesRenderer(callable$jsSupportFilesRenderer);public function SetCssSupportFilesRenderer(callable$cssSupportFilesRenderer);public function SetFormTagRenderingStatus($formTagRenderingStatus=TRUE);public static function SetJsSupportFilesRootDir($jsSupportFilesRootDir);public static function SetCssSupportFilesRootDir($cssSupportFilesRootDir);public static function SetValidatorsNamespaces(array$validatorsNamespaces=[]);public static function SetAutoFocusedFormField($formId=NULL,$fieldName=NULL,$duplicateBehaviour=\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_EXCEPTION);public function AddAcceptCharset($charset);public function AddCssClasses($cssClasses);public function AddError($errorMsg,$fieldNames=NULL);public function AddJsSupportFile($jsRelativePath='/fields/custom-type.js',$jsClassName='MvcCoreForm.FieldType',$constructorParams=[]);public function AddCssSupportFile($cssRelativePath='/fields/custom-type.css');public static function AddCsrfErrorHandler(callable$handler,$priorityIndex=NULL);public static function AddValidatorsNamespaces($validatorsNamespaces);public function GetFields();public function SetFields($fields=[]);public function AddFields($fields);public function AddField(\MvcCore\Ext\Forms\IField$field);public function HasField($fieldOrFieldName=NULL);public function RemoveField($fieldOrFieldName=NULL);public function GetField($fieldName='');public function GetFieldsByType($fieldType='');public function GetFirstFieldByType($fieldType='');public function GetFieldsByPhpClass($fieldClassName='',$directTypesOnly=FALSE);public function GetFirstFieldByPhpClass($fieldClassName='',$directTypesOnly=FALSE);public function ClearSession();public function SaveSession();public function __toString();public function Render($controllerDashedName='',$actionDashedName='');public function RenderContent();public function RenderErrors();public function RenderBegin();public function RenderEnd();public function RenderSupportingCss();public function RenderSupportingJs();public function Submit(array&$rawRequestParams=[]);public function SubmitSetStartResultState(array&$rawRequestParams=[]);public function SubmitValidateMaxPostSizeIfNecessary();public function SubmitAllFields(array&$rawRequestParams=[]);public function SubmittedRedirect();public function GetValidator($validatorName);public function GetDefaultErrorMsg($index);public static function ProcessCsrfErrorHandlersQueue(\MvcCore\Ext\Forms\IForm$form,$errorMsg);public function SetEnableCsrf($enabled=TRUE);public function GetCsrf();public function SubmitCsrfTokens(array&$rawRequestParams=[]);public function SetUpCsrf();}}
namespace MvcCore\Ext\Forms\Field\Props{trait MinMaxStepNumbers{protected$min=NULL;protected$max=NULL;protected$step=NULL;public function GetMin(){return$this->min;}public function SetMin($min){$this->min=$min===NULL?NULL:floatval($min);return$this;}public function GetMax(){return$this->max;}public function SetMax($max){$this->max=$max===NULL?NULL:floatval($max);return$this;}public function GetStep(){return$this->step;}public function SetStep($step){$this->step=$step===NULL?NULL:floatval($step);return$this;}}}
namespace MvcCore\Ext\Forms\Fields{interface IMinMaxStepNumbers{public function GetMin();public function SetMin($min);public function GetMax();public function SetMax($max);public function GetStep();public function SetStep($step);}}
namespace MvcCore\Ext\Forms\Fields{interface IMinMaxLength{public function GetMinLength();public function SetMinLength($minLength);public function GetMaxLength();public function SetMaxLength($maxLength);}}
namespace MvcCore\Ext\Forms\Fields{interface IDataList{public function GetList();public function SetList($dataListIdOrInstance);}}
namespace MvcCore\Ext\Form{trait SetMethods{public function SetId($id){$this->id=$id;self::$instances[$id]=$this;return$this;}public function SetAction($url=NULL){$this->action=$url;return$this;}public function SetMethod($method=\MvcCore\Ext\Forms\IForm::METHOD_POST){$this->method=strtoupper($method);return$this;}public function SetEnctype($enctype=\MvcCore\Ext\Forms\IForm::ENCTYPE_URLENCODED){$this->enctype=$enctype;return$this;}public function SetTarget($target='_self'){$this->target=$target;return$this;}public function SetAutoComplete($autoComplete=FALSE){if($autoComplete==='off'||$autoComplete===FALSE){$this->autoComplete=FALSE;}else if($autoComplete==='on'||$autoComplete===TRUE){$this->autoComplete=TRUE;}else{$this->autoComplete=NULL;}return$this;}public function SetNoValidate($noValidate=TRUE){if($noValidate===TRUE){$this->noValidate=TRUE;}else{$this->noValidate=NULL;}return$this;}public function SetAcceptCharsets($acceptCharsets=[]){$this->acceptCharsets=$acceptCharsets;return$this;}public function SetLang($lang=NULL){$this->lang=$lang;return$this;}public function SetLocale($locale=NULL){$this->locale=strtoupper($locale);return$this;}public function SetCssClasses($cssClasses){$cssClassesArr=gettype($cssClasses)=='array'?$cssClasses:explode(' ',(string)$cssClasses);$this->cssClasses=$cssClassesArr;return$this;}public function SetAttributes(array$attributes=[]){$this->attributes=$attributes;return$this;}public function SetSuccessUrl($url=NULL){$this->successUrl=$url;return$this;}public function SetPrevStepUrl($url=NULL){$this->nextStepUrl=$url;return$this;}public function SetNextStepUrl($url=NULL){$this->nextStepUrl=$url;return$this;}public function SetErrorUrl($url=NULL){$this->errorUrl=$url;return$this;}public function SetResult($result=\MvcCore\Ext\Forms\IForm::RESULT_SUCCESS){$this->result=$result;return$this;}public function SetTranslator(callable$translator=NULL){if($translator!==NULL&&is_callable($translator))$this->translator=$translator;return$this;}public function SetDefaultRequired($defaultRequired=TRUE){$this->defaultRequired=$defaultRequired;return$this;}public function SetValues(array$values=[],$caseInsensitive=FALSE,$clearPreviousSessionValues=FALSE){if($this->dispatchState<1)$this->Init();if($clearPreviousSessionValues)$this->ClearSession();$defaultsKeys=$caseInsensitive?','.implode(',',array_keys($values)).',':'';foreach($this->fields as$fieldName=>$field){if(isset($values[$fieldName])){$fieldValue=$values[$fieldName];}else if($caseInsensitive){$defaultsKeyPos=stripos($defaultsKeys,','.$fieldName.',');if($defaultsKeyPos===FALSE)continue;$defaultsKey=substr($defaultsKeys,$defaultsKeyPos+1,strlen($fieldName));$fieldValue=$values[$defaultsKey];}else{continue;}$fieldValuesIsStr=is_string($fieldValue);if($fieldValue!==NULL&&(!$fieldValuesIsStr||($fieldValuesIsStr&&$fieldValue!=''))){$field->SetValue($fieldValue);$this->values[$fieldName]=$fieldValue;}}return$this;}public function SetErrors($errorsCollection=[]){$this->errors=[];foreach($errorsCollection as$errorMsgAndFieldNames){list($errorMsg,$fieldNames)=$errorMsgAndFieldNames;$this->AddError($errorMsg,is_array($fieldNames)?$fieldNames:[$fieldNames]);}return$this;}public function SetSessionExpiration($seconds=0){$this->sessionExpiration=$seconds;return$this;}public function SetBaseTabIndex($baseTabIndex=0){$this->baseTabIndex=$baseTabIndex;return$this;}public function SetDefaultFieldsRenderMode($defaultFieldsRenderMode=\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NORMAL){$this->defaultFieldsRenderMode=$defaultFieldsRenderMode;return$this;}public function SetErrorsRenderMode($errorsRenderMode=\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_ALL_TOGETHER){$this->errorsRenderMode=$errorsRenderMode;return$this;}public function SetViewScript($boolOrViewScriptPath=NULL){$this->viewScript=$boolOrViewScriptPath;return$this;}public function SetViewClass($viewClass='\\MvcCore\\Ext\\Forms\\View'){$this->viewClass=$viewClass;return$this;}public function SetJsSupportFiles(array$jsRelPathsClassNamesAndParams=[]){$this->jsSupportFiles=[];foreach($jsRelPathsClassNamesAndParams as$jsRelPathClassNameAndParams){list($jsRelativePath,$jsClassName,$constructorParams)=$jsRelPathClassNameAndParams;$this->AddJsSupportFile($jsRelativePath,$jsClassName,$constructorParams);}return$this;}public function SetCssSupportFiles(array$cssRelativePaths=[]){$this->cssSupportFiles=[];foreach($cssRelativePaths as$cssRelativePath)$this->AddCssSupportFile($cssRelativePath);return$this;}public function SetJsSupportFilesRenderer(callable$jsSupportFilesRenderer){$this->jsSupportFilesRenderer=$jsSupportFilesRenderer;return$this;}public function SetCssSupportFilesRenderer(callable$cssSupportFilesRenderer){$this->cssSupportFilesRenderer=$cssSupportFilesRenderer;return$this;}public function SetFormTagRenderingStatus($formTagRenderingStatus=TRUE){$this->formTagRendergingStatus=$formTagRenderingStatus;return$this;}public static function SetJsSupportFilesRootDir($jsSupportFilesRootDir){if($jsSupportFilesRootDir)static::$jsSupportFilesRootDir=$jsSupportFilesRootDir;return static::$jsSupportFilesRootDir;}public static function SetCssSupportFilesRootDir($cssSupportFilesRootDir){if($cssSupportFilesRootDir)static::$cssSupportFilesRootDir=$cssSupportFilesRootDir;return static::$cssSupportFilesRootDir;}public static function SetValidatorsNamespaces(array$validatorsNamespaces=[]){static::$validatorsNamespaces=[];return static::AddValidatorsNamespaces($validatorsNamespaces);}public static function SetAutoFocusedFormField($formId=NULL,$fieldName=NULL,$duplicateBehaviour=\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_EXCEPTION){if(self::$autoFocusedFormField){if($formId===NULL&&$fieldName===NULL){list($oldFormId,$oldFieldName)=self::$autoFocusedFormField;self::GetById($oldFormId)->GetField($oldFieldName)->SetAutoFocus(FALSE);self::$autoFocusedFormField=[];}else if($duplicateBehaviour===\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_EXCEPTION){list($currentFormId,$currentFieldName)=self::$autoFocusedFormField;throw new\RuntimeException('Another form field has already defined `autofocus` attribute.'.' Form id: `'.$currentFormId.'`, field name: `'.$currentFieldName.'`.');}else if($duplicateBehaviour===\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_QUIETLY_SET_NEW){self::GetById($formId)->GetField($fieldName)->SetAutoFocus(TRUE,\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_QUIETLY_SET_NEW);}else if($duplicateBehaviour===\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_UNSET_OLD_SET_NEW){list($oldFormId,$oldFieldName)=self::$autoFocusedFormField;self::GetById($oldFormId)->GetField($oldFieldName)->SetAutoFocus(FALSE);self::GetById($formId)->GetField($fieldName)->SetAutoFocus(TRUE,\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_QUIETLY_SET_NEW);}}else{self::$autoFocusedFormField=[$formId,$fieldName];self::GetById($formId)->GetField($fieldName)->SetAutoFocus(TRUE,\MvcCore\Ext\Forms\IField::AUTOFOCUS_DUPLICITY_QUIETLY_SET_NEW);}return TRUE;}}}
namespace MvcCore\Ext\Form{trait Rendering{public function __toString(){return$this->Render();}public function&Render($controllerDashedName=NULL,$actionDashedName=NULL){$this->PreDispatch();if($this->viewScript){$result=$this->view->RenderTemplate();}else{$result=$this->view->RenderNaturally();}$this->cleanSessionErrorsAfterRender();return$result;}public function RenderContent(){return$this->view->RenderContent();}public function RenderErrors(){return$this->view->RenderErrors();}public function RenderBegin(){return$this->view->RenderBegin();}public function RenderEnd(){$this->PreDispatch();$this->SetFormTagRenderingStatus(FALSE);$result='</form>'.$this->RenderSupportingJs().$this->RenderSupportingCss();$this->cleanSessionErrorsAfterRender();return$result;}public function RenderSupportingCss(){if(!$this->cssSupportFiles)return'';$cssFiles=$this->completeSupportingFilesToRender(FALSE);if(!$cssFiles)return'';$cssFilesContent='';$useExternalRenderer=is_callable($this->cssSupportFilesRenderer);foreach($cssFiles as$cssFile){$this->renderSupportingFile($cssFilesContent,$cssFile,$useExternalRenderer,$this->cssSupportFilesRenderer);}if($useExternalRenderer)return'';return'<style type="text/css">'.$cssFilesContent.'</style>';}public function RenderSupportingJs(){if(!$this->jsSupportFiles)return'';$jsFiles=$this->completeSupportingFilesToRender(TRUE);if(!$jsFiles)return'';$jsFilesContent='';$fieldsConstructors=[];$useExternalRenderer=is_callable($this->jsSupportFilesRenderer);if(!isset(self::$allJsSupportFiles[static::$jsBaseSupportFile])){$jsBaseSupportFile=$this->absolutizeSupportingFilePath(static::$jsBaseSupportFile,'js');self::$allJsSupportFiles[static::$jsBaseSupportFile]=TRUE;$this->renderSupportingFile($jsFilesContent,$jsBaseSupportFile,$useExternalRenderer,$this->jsSupportFilesRenderer);}foreach($jsFiles as$jsFile)$this->renderSupportingFile($jsFilesContent,$jsFile,$useExternalRenderer,$this->jsSupportFilesRenderer);foreach($this->jsSupportFiles as$jsSupportFile){list(,$jsFullClassName,$constructParams)=$jsSupportFile;$constructParamsEncoded=json_encode($constructParams);$constructParamsEncoded=mb_substr($constructParamsEncoded,1,mb_strlen($constructParamsEncoded)-2);$fieldsConstructors[]='new '.$jsFullClassName.'('.$constructParamsEncoded.')';}$result=$jsFilesContent.'new MvcCoreForm('.'document.getElementById(\''.$this->id.'\'),'.'['.implode(',',$fieldsConstructors).']'.')';$viewDocType=\MvcCore\View::GetDoctype();if($this->response->IsXmlOutput()||strpos($viewDocType,\MvcCore\View::DOCTYPE_XHTML)!==FALSE||strpos($viewDocType,\MvcCore\View::DOCTYPE_XML)!==FALSE)$result='/*<![CDATA[*/'.$result.'/*]]>*/';return'<script type="text/javascript">'.$result.'</script>';}protected function cleanSessionErrorsAfterRender(){$this->errors=[];$session=&$this->getSession();$session->errors=[];return$this;}}}
namespace MvcCore\Ext\Form{use\MvcCore\Ext\Forms\IError;trait InternalProps{protected$submitFields=[];protected$customResultStates=[];protected$formTagRendergingStatus=FALSE;protected$validators=[];protected$fieldsAutoTabIndex=0;protected$translate=FALSE;protected static$sessionClass=NULL;protected static$toolClass=NULL;protected static$allFormsSessions=[];protected static$allJsSupportFiles=[];protected static$allCssSupportFiles=[];protected static$csrfErrorHandlers=[];protected static$jsBaseSupportFile='__MVCCORE_FORM_ASSETS_DIR__/mvccore-form.js';protected static$defaultErrorMessages=[IError::REQUIRED=>"Field `{0}` is required.",IError::EMPTY_CONTENT=>"Sent data are empty.",IError::MAX_POST_SIZE=>"Sent data exceeds the limit of `{1}` bytes.",IError::CSRF=>"Form hash expired, please submit the form again.",];protected static$instances=[];}}
namespace MvcCore\Ext\Form{trait GetMethods{public function GetId(){return$this->id;}public function GetAction(){return$this->action;}public function GetMethod(){return$this->method;}public function GetEnctype(){return$this->enctype;}public function GetTarget(){return$this->target;}public function GetAutoComplete(){return$this->autoComplete;}public function GetNoValidate(){return$this->noValidate;}public function GetAcceptCharsets(){return$this->acceptCharsets;}public function GetLang(){return$this->lang;}public function GetLocale(){return$this->locale;}public function&GetCssClasses(){return$this->cssClasses;}public function&GetAttributes(){return$this->attributes;}public function GetSuccessUrl(){return$this->successUrl;}public function GetPrevStepUrl(){return$this->prevStepUrl;}public function GetNextStepUrl(){return$this->nextStepUrl;}public function GetErrorUrl(){return$this->errorUrl;}public function GetResult(){return$this->result;}public function GetTranslator(){return$this->translator;}public function GetTranslate(){return$this->translate;}public function GetDefaultRequired(){return$this->defaultRequired;}public function&GetValues(){return$this->values;}public function&GetErrors(){return$this->errors;}public function GetSessionExpiration(){return$this->sessionExpiration;}public function GetBaseTabIndex(){return$this->baseTabIndex;}public function GetFieldNextAutoTabIndex(){$this->fieldsAutoTabIndex+=1;return$this->fieldsAutoTabIndex;}public function GetDefaultFieldsRenderMode(){return$this->defaultFieldsRenderMode;}public function GetErrorsRenderMode(){return$this->errorsRenderMode;}public function GetViewScript(){return$this->viewScript;}public function GetViewClass(){return$this->viewClass;}public function&GetJsSupportFiles(){return$this->jsSupportFiles;}public function&GetCssSupportFiles(){return$this->cssSupportFiles;}public function GetJsSupportFilesRenderer(){return$this->jsSupportFilesRenderer;}public function GetCssSupportFilesRenderer(){return$this->cssSupportFilesRenderer;}public function GetFormTagRenderingStatus(){return$this->formTagRendergingStatus;}public static function GetJsSupportFilesRootDir(){return static::$jsSupportFilesRootDir;}public static function GetCssSupportFilesRootDir(){return static::$cssSupportFilesRootDir;}public static function GetValidatorsNamespaces(){return static::$validatorsNamespaces;}public static function GetPhpIniSizeLimit($iniVarName){$rawIniValue=@ini_get($iniVarName);if($rawIniValue===FALSE){return 0;}else if($rawIniValue===NULL){return NULL;}$unit=strtoupper(substr($rawIniValue,-1));$multiplier=($unit=='M'?1048576:($unit=='K'?1024:($unit=='G'?1073741824:1)));return intval($multiplier*floatval($rawIniValue));}public static function GetById($formId){if(isset(self::$instances[$formId])){return self::$instances[$formId];}else{throw new\RuntimeException('No form instance exists under form id `'.$formId.'`.'.' Check if searched form instance has been already initialized'.' or if form id has been already set.');}}public static function GetAutoFocusedFormField($formId,$fieldName){if(self::$autoFocusedFormField){list($currentFormId,$currentFieldName)=self::$autoFocusedFormField;return self::GetById($currentFormId)->GetField($currentFieldName);}return NULL;}}}
namespace MvcCore\Ext\Form{trait FieldMethods{public function&GetFields(){return$this->fields;}public function SetFields($fields=[]){$this->fields=[];foreach($fields as$field)$this->AddField($field);return$this;}public function AddFields($fields){$fields=func_get_args();if(count($fields)===1&&is_array($fields[0]))$fields=$fields[0];foreach($fields as$field)$this->AddField($field);return$this;}public function AddField(\MvcCore\Ext\Forms\IField$field){if($this->dispatchState<1)$this->Init();$fieldName=$field->GetName();$field->SetForm($this);$this->fields[$fieldName]=$field;if($field instanceof\MvcCore\Ext\Forms\Fields\ISubmit){$this->submitFields[$fieldName]=$field;$fieldCustomResultState=$field->GetCustomResultState();if($fieldCustomResultState!==NULL)$this->customResultStates[$fieldName]=$fieldCustomResultState;}return$this;}public function HasField($fieldOrFieldName=NULL){$fieldName=NULL;if($fieldOrFieldName instanceof\MvcCore\Ext\Forms\IField){$fieldName=$fieldOrFieldName->GetName();}else if(is_string($fieldOrFieldName)){$fieldName=$fieldOrFieldName;}return isset($this->fields[$fieldName]);}public function RemoveField($fieldOrFieldName=NULL){if($this->dispatchState<1)$this->Init();$fieldName=NULL;if($fieldOrFieldName instanceof\MvcCore\Ext\Forms\IField){$fieldName=$fieldOrFieldName->GetName();}else if(is_string($fieldOrFieldName)){$fieldName=$fieldOrFieldName;}if(isset($this->fields[$fieldName]))unset($this->fields[$fieldName]);return$this;}public function GetField($fieldName=''){$result=NULL;if(isset($this->fields[$fieldName]))$result=$this->fields[$fieldName];return$result;}public function GetFieldsByType($fieldType=''){$result=[];foreach($this->fields as$field){if($field->GetType()==$fieldType)$result[$field->GetName()]=$field;}return$result;}public function GetFirstFieldByType($fieldType=''){$result=NULL;foreach($this->fields as$field){if($field->GetType()==$fieldType){$result=$field;}}return$result;}public function GetFieldsByPhpClass($fieldClassName='',$directTypesOnly=FALSE){$result=[];foreach($this->fields as$field){if(is_a($field,$fieldClassName)){if($directTypesOnly)if(is_subclass_of($field,$fieldClassName))continue;$result[$field->GetName()]=$field;}}return$result;}public function GetFirstFieldByPhpClass($fieldClassName='',$directTypesOnly=FALSE){$result=NULL;foreach($this->fields as$field){if(is_a($field,$fieldClassName)){if($directTypesOnly)if(is_subclass_of($field,$fieldClassName))continue;$result=$field;break;}}return$result;}}}
namespace MvcCore\Ext\Form{trait Csrf{public static function ProcessCsrfErrorHandlersQueue(\MvcCore\Ext\Forms\IForm$form,$errorMsg){$request=$form->GetRequest();$response=$form->GetResponse();foreach(static::$csrfErrorHandlers as$handlersRecord){list($handler,$isClosure)=$handlersRecord;try{if($isClosure){$handler($form,$request,$response,$errorMsg);}else{call_user_func($handler,$form,$request,$response,$errorMsg);}}catch(\Exception$e){$debugClass=$form->GetApplication()->GetDebugClass();$debugClass::Log($e,\MvcCore\IDebug::CRITICAL);}}}public function SetEnableCsrf($enabled=TRUE){$this->csrfEnabled=$enabled;return$this;}public function GetCsrf(){$session=&$this->getSession();list($name,$value)=$session->csrf;return(object)['name'=>$name,'value'=>$value];}public function SubmitCsrfTokens(array&$rawRequestParams=[]){if(!$this->csrfEnabled)return$this;$result=FALSE;$session=&$this->getSession();list($name,$value)=$session->csrf?$session->csrf:[NULL,NULL];if($name!==NULL&&$value!==NULL)if(isset($rawRequestParams[$name])&&$rawRequestParams[$name]===$value)$result=TRUE;if(!$result){$errorMsg=$this->GetDefaultErrorMsg(\MvcCore\Ext\Forms\IError::CSRF);if($this->translate)$errorMsg=call_user_func($this->translator,$errorMsg);$this->AddError($errorMsg);static::ProcessCsrfErrorHandlersQueue($this,$errorMsg);}return$this;}public function SetUpCsrf(){$requestUrl=$this->request->GetBaseUrl().$this->request->GetPath();if(function_exists('openssl_random_pseudo_bytes')){$randomHash=bin2hex(openssl_random_pseudo_bytes(32));}else if(PHP_VERSION_ID>=70000){$randomHash=bin2hex(random_bytes(32));}else{$randomHash='';for($i=0;$i<32;$i++)$randomHash.=str_pad(dechex(rand(0,255)),2,'0',STR_PAD_LEFT);}$nowTime=(string)time();$name='____'.sha1($this->id.$requestUrl.'name'.$nowTime.$randomHash);$value=sha1($this->id.$requestUrl.'value'.$nowTime.$randomHash);$session=&$this->getSession();$session->csrf=[$name,$value];return[$name,$value];}}}
namespace MvcCore\Ext\Form{trait ConfigProps{protected$id=NULL;protected$action=NULL;protected$method=\MvcCore\Ext\Forms\IForm::METHOD_POST;protected$enctype=\MvcCore\Ext\Forms\IForm::ENCTYPE_URLENCODED;protected$target=NULL;protected$autoComplete=NULL;protected$noValidate=NULL;protected$acceptCharsets=[];protected$lang=NULL;protected$locale=NULL;protected$cssClasses=[];protected$attributes=[];protected$successUrl=NULL;protected$prevStepUrl=NULL;protected$nextStepUrl=NULL;protected$errorUrl=NULL;protected$result=NULL;protected$translator=NULL;protected$csrfEnabled=TRUE;protected$defaultRequired=FALSE;protected$fields=[];protected$values=[];protected$errors=[];protected$sessionExpiration=0;protected$baseTabIndex=0;protected$defaultFieldsRenderMode=\MvcCore\Ext\Forms\IForm::FIELD_RENDER_MODE_NORMAL;protected$errorsRenderMode=\MvcCore\Ext\Forms\IForm::ERROR_RENDER_MODE_ALL_TOGETHER;protected$viewScript=NULL;protected$viewClass='\\MvcCore\\Ext\\Forms\\View';protected$jsSupportFiles=[];protected$cssSupportFiles=[];protected$jsSupportFilesRenderer=NULL;protected$cssSupportFilesRenderer=NULL;protected static$jsSupportFilesRootDir=NULL;protected static$cssSupportFilesRootDir=NULL;protected static$validatorsNamespaces=['\\MvcCore\\Ext\\Forms\\Validators\\'];protected static$autoFocusedFormField=[];}}
namespace MvcCore\Ext\Form{trait Session{public function ClearSession(){$this->values=[];$this->errors=[];$session=&$this->getSession();$session->values=[];$session->csrf=[];$session->errors=[];return$this;}public function SaveSession(){$session=&$this->getSession();$session->errors=$this->errors;$session->values=$this->values;return$this;}protected function&getSession(){if(isset(self::$allFormsSessions[$this->id])){$sessionNamespace=&self::$allFormsSessions[$this->id];}else{$sessionClass=self::$sessionClass;$toolClass=self::$toolClass;$formIdPc=$this->id;if(strpos($formIdPc,'-')!==FALSE)$formIdPc=$toolClass::GetPascalCaseFromDashed($formIdPc);if(strpos($formIdPc,'_')!==FALSE)$formIdPc=$toolClass::GetPascalCaseFromUnderscored($formIdPc);$namespaceName='\\MvcCore\\Ext\\Form\\'.ucfirst($formIdPc);$sessionNamespace=$sessionClass::GetNamespace($namespaceName);$sessionNamespace->SetExpirationSeconds($this->sessionExpiration);if(!isset($sessionNamespace->values))$sessionNamespace->values=[];if(!isset($sessionNamespace->csrf))$sessionNamespace->csrf=[];if(!isset($sessionNamespace->errors))$sessionNamespace->errors=[];self::$allFormsSessions[$this->id]=&$sessionNamespace;}return$sessionNamespace;}}}
namespace MvcCore\Ext\Form{trait Assets{protected function completeSupportingFilesToRender($javascriptFiles=TRUE){$files=[];if($javascriptFiles){$instanceCollection=&$this->jsSupportFiles;$staticCollection=&self::$allJsSupportFiles;}else{$instanceCollection=&$this->cssSupportFiles;$staticCollection=&self::$allCssSupportFiles;}foreach($instanceCollection as$item){$absoluteSupportingFilePath=static::absolutizeSupportingFilePath($item[0],$javascriptFiles);$files[$absoluteSupportingFilePath]=TRUE;}$files=array_keys($files);foreach($files as$key=>$file){if(isset($staticCollection[$file])){unset($files[$key]);}else{$staticCollection[$file]=TRUE;}}return array_values($files);}protected static function absolutizeSupportingFilePath($supportingFileRelPath='',$javascriptFiles=TRUE){$assetsRootDir=$javascriptFiles?static::$jsSupportFilesRootDir:static::$cssSupportFilesRootDir;return str_replace([\MvcCore\Ext\Forms\IForm::FORM_ASSETS_DIR_REPLACEMENT,'\\'],[$assetsRootDir,'/'],$supportingFileRelPath);}protected function renderSupportingFile(&$content,&$absolutePath,$useExternalRenderer=FALSE,&$rendererHandler=NULL){if($useExternalRenderer){call_user_func($rendererHandler,new\Packager_Php_Wrapper_SplFileInfo($absolutePath));}else{$content.=trim(\Packager_Php_Wrapper::FileGetContents($absolutePath),"\n\r;").';';}}}}
namespace MvcCore\Ext\Form{trait AddMethods{public function AddAcceptCharset($charset){$this->acceptCharsets[]=$charset;return$this;}public function AddCssClasses($cssClasses){$cssClassesArr=gettype($cssClasses)=='array'?$cssClasses:explode(' ',(string)$cssClasses);$this->cssClasses=array_merge($this->cssClasses,$cssClassesArr);return$this;}public function AddError($errorMsg,$fieldNames=NULL){$errorMsgUtf8=iconv(mb_detect_encoding($errorMsg,mb_detect_order(),TRUE),"UTF-8",$errorMsg);$fieldNamesArr=$fieldNames===NULL?[]:(gettype($fieldNames)=='array'?$fieldNames:[$fieldNames]);$newErrorRec=[strip_tags($errorMsgUtf8),$fieldNamesArr];if($fieldNamesArr){foreach($fieldNamesArr as$fieldName){if(isset($this->fields[$fieldName])){$field=&$this->fields[$fieldName];$field->AddError($errorMsgUtf8)->AddCssClasses('error');if($field instanceof\MvcCore\Ext\Forms\IFieldsGroup)$field->AddGroupLabelCssClasses('error');}}}$this->errors[]=$newErrorRec;$this->result=\MvcCore\Ext\Forms\IForm::RESULT_ERRORS;return$this;}public function AddJsSupportFile($jsRelativePath='/fields/custom-type.js',$jsClassName='MvcCoreForm.FieldType',$constructorParams=[]){$this->jsSupportFiles[]=[$jsRelativePath,$jsClassName,$constructorParams];return$this;}public function AddCssSupportFile($cssRelativePath='/fields/custom-type.css'){$this->cssSupportFiles[]=[$cssRelativePath];return$this;}public static function AddCsrfErrorHandler(callable$handler,$priorityIndex=NULL){if(!is_callable($handler))throw new\InvalidArgumentException('['.get_class().'] Given argument is not callable: `'.serialize($handler).'`.');if(is_array($handler)||(is_string($handler)&&mb_strpos($handler,'::')!==FALSE)){$isClosure=FALSE;}else{$reflection=new\ReflectionFunction($handler);$isClosure=$reflection->isClosure();}if($priorityIndex===NULL){static::$csrfErrorHandlers[]=[$handler,$isClosure];}else{if(isset(static::$csrfErrorHandlers[$priorityIndex])){array_splice(static::$csrfErrorHandlers,$priorityIndex,0,[$handler,$isClosure]);}else{static::$csrfErrorHandlers[$priorityIndex]=[$handler,$isClosure];}}return count(static::$csrfErrorHandlers);}public static function AddValidatorsNamespaces($validatorsNamespaces){$validatorsNamespaces=func_get_args();if(count($validatorsNamespaces)===1&&is_array($validatorsNamespaces[0]))$validatorsNamespaces=$validatorsNamespaces[0];foreach($validatorsNamespaces as$validatorsNamespace)static::$validatorsNamespaces[]='\\'.trim($validatorsNamespace,'\\').'\\';return count(static::$validatorsNamespaces);}}}
namespace MvcCore\Config{trait Environment{protected static$environment=NULL;public static function IsDevelopment($autoloadSystemConfig=TRUE){return static::GetEnvironment($autoloadSystemConfig)===static::ENVIRONMENT_DEVELOPMENT;}public static function IsBeta($autoloadSystemConfig=TRUE){return static::GetEnvironment($autoloadSystemConfig)===static::ENVIRONMENT_BETA;}public static function IsAlpha($autoloadSystemConfig=TRUE){return static::GetEnvironment($autoloadSystemConfig)===static::ENVIRONMENT_ALPHA;}public static function IsProduction($autoloadSystemConfig=TRUE){return static::GetEnvironment($autoloadSystemConfig)===static::ENVIRONMENT_PRODUCTION;}public static function GetEnvironment($autoloadSystemConfig=FALSE){if(static::$environment===NULL){if($autoloadSystemConfig){if(static::GetSystem()===FALSE)static::EnvironmentDetectByIps();}else{static::EnvironmentDetectByIps();}}return static::$environment;}public static function SetEnvironment($environment=\MvcCore\IConfig::ENVIRONMENT_PRODUCTION){return static::$environment=$environment;}public static function EnvironmentDetectByIps(){if(static::$environment===NULL){$request=\MvcCore\Application::GetInstance()->GetRequest();$serverAddress=$request->GetServerIp();$remoteAddress=$request->GetClientIp();if($serverAddress==$remoteAddress){static::$environment=static::ENVIRONMENT_DEVELOPMENT;}else{static::$environment=static::ENVIRONMENT_PRODUCTION;}}return static::$environment;}public static function EnvironmentDetectBySystemConfig(array$environmentsSectionData=[]){$environment=NULL;$app=self::$app?:self::$app=\MvcCore\Application::GetInstance();$request=$app->GetRequest();$clientIp=NULL;$serverHostName=NULL;$serverGlobals=NULL;foreach((array)$environmentsSectionData as$environmentName=>$environmentSection){$sectionData=static::envDetectParseSysConfigEnvSectionData($environmentSection);$detected=static::envDetectBySystemConfigEnvSection($sectionData,$request,$clientIp,$serverHostName,$serverGlobals);if($detected){$environment=$environmentName;break;}}if($environment&&!static::$environment){static::SetEnvironment($environment);}else if(!static::$environment){static::SetEnvironment('production');}return static::$environment;}protected static function envDetectParseSysConfigEnvSectionData($environmentSection){$data=(object)['clientIps'=>(object)['check'=>FALSE,'values'=>[],'regExeps'=>[]],'serverHostNames'=>(object)['check'=>FALSE,'values'=>[],'regExeps'=>[]],'serverVariables'=>(object)['check'=>FALSE,'existence'=>[],'values'=>[],'regExeps'=>[]]];if(is_string($environmentSection)&&strlen($environmentSection)>0){static::envDetectParseSysConfigClientIps($data,$environmentSection);}else if(is_array($environmentSection)||$environmentSection instanceof\stdClass){foreach((array)$environmentSection as$key=>$value){if(is_numeric($key)||$key=='clients'){static::envDetectParseSysConfigClientIps($data,$value);}else if($key=='servers'){static::envDetectParseSysConfigServerNames($data,$value);}else if($key=='variables'){static::envDetectParseSysConfigVariables($data,$value);}}}return$data;}protected static function envDetectParseSysConfigClientIps(&$data,$rawClientIps){$data->clientIps->check=TRUE;if(is_string($rawClientIps)){if(substr($rawClientIps,0,1)=='/'){$data->clientIps->regExeps[]=$rawClientIps;}else{$data->clientIps->values=array_merge($data->clientIps->values,explode(',',str_replace(' ','',$rawClientIps)));}}else if(is_array($rawClientIps)||$rawClientIps instanceof\stdClass){foreach((array)$rawClientIps as$rawClientIpsItem){if(substr($rawClientIpsItem,0,1)=='/'){$data->clientIps->regExeps[]=$rawClientIpsItem;}else{$data->clientIps->values=array_merge($data->clientIps->values,explode(',',str_replace(' ','',$rawClientIpsItem)));}}}}protected static function envDetectParseSysConfigServerNames(&$data,$rawHostNames){$data->serverHostNames->check=TRUE;if(is_string($rawHostNames)){if(substr($rawHostNames,0,1)=='/'){$data->serverHostNames->regExeps[]=$rawHostNames;}else{$data->serverHostNames->values=array_merge($data->serverHostNames->values,explode(',',str_replace(' ','',$rawHostNames)));}}else if(is_array($rawHostNames)||$rawHostNames instanceof\stdClass){foreach((array)$rawHostNames as$rawHostNamesItem){if(substr($rawHostNamesItem,0,1)=='/'){$data->serverHostNames->regExeps[]=$rawHostNamesItem;}else{$data->serverHostNames->values=array_merge($data->serverHostNames->values,explode(',',str_replace(' ','',$rawHostNamesItem)));}}}}protected static function envDetectParseSysConfigVariables(&$data,$rawServerVariable){$data->serverVariables->check=TRUE;if(is_string($rawServerVariable)){$data->serverVariables->existence[]=$rawServerVariable;}else if(is_array($rawServerVariable)||$rawServerVariable instanceof\stdClass){foreach((array)$rawServerVariable as$key=>$value){if(is_numeric($key)){$data->serverVariables->existence[]=$value;}else if(substr($value,0,1)=='/'){$data->serverVariables->regExeps[$key]=$value;}else{$data->serverVariables->values[$key]=$value;}}}}protected static function envDetectBySystemConfigEnvSection(&$data,$req,&$clientIp,&$serverHostName,&$serverGlobals){if($data->clientIps->check){$clientIp=$clientIp?:$req->GetClientIp();if($data->clientIps->values){$clientIpToMatch=','.$clientIp.',';$clientIpsToMatch=','.implode(',',$data->clientIps->values).',';if(strpos($clientIpsToMatch,$clientIpToMatch)!==FALSE)return TRUE;}if($data->clientIps->regExeps)foreach($data->clientIps->regExeps as$regExep)if(preg_match($regExep,$clientIp))return TRUE;}if($data->serverHostNames->check){$serverHostName=$serverHostName?:gethostname();if($data->serverHostNames->values){$serverHostNamesToMatch=','.implode(',',$data->serverHostNames->values).',';if(strpos($serverHostNamesToMatch,','.$serverHostName.',')!==FALSE)return TRUE;}if($data->serverHostNames->regExeps)foreach($data->serverHostNames->regExeps as$regExep)if(preg_match($regExep,$serverHostName))return TRUE;}if($data->serverVariables->check){$serverGlobals=$serverGlobals?:$req->GetGlobalCollection('server');if($data->serverVariables->existence)foreach($data->serverVariables->existence as$serverVariableName)if(array_key_exists($serverVariableName,$serverGlobals))return TRUE;if($data->serverVariables->values)foreach($data->serverVariables->values as$serverVariableName=>$serverVariableValue)if(isset($serverGlobals[$serverVariableName])&&$serverGlobals[$serverVariableName]===$serverVariableValue)return TRUE;if($data->serverVariables->regExeps)foreach($data->serverVariables->regExeps as$serverVariableName=>$serverVariableRegExp)if(isset($serverGlobals[$serverVariableName])&&preg_match($serverVariableRegExp,(string)$serverGlobals[$serverVariableName]))return TRUE;}return FALSE;}}}
namespace MvcCore\Application{trait PropsGettersSetters{protected static$instance;protected$compiled=NULL;protected$controller=NULL;protected$request=NULL;protected$response=NULL;protected$router=NULL;protected$preRouteHandlers=[];protected$postRouteHandlers=[];protected$preDispatchHandlers=[];protected$postDispatchHandlers=[];protected$postTerminateHandlers=[];protected$configClass='\MvcCore\Config';protected$controllerClass='\MvcCore\Controller';protected$debugClass='\MvcCore\Debug';protected$requestClass='\MvcCore\Request';protected$responseClass='\MvcCore\Response';protected$routeClass='\MvcCore\Route';protected$routerClass='\MvcCore\Router';protected$sessionClass='\MvcCore\Session';protected$toolClass='\MvcCore\Tool';protected$viewClass='\MvcCore\View';protected$appDir='App';protected$controllersDir='Controllers';protected$viewsDir='Views';protected$defaultControllerName='Index';protected$defaultControllerDefaultActionName='Index';protected$defaultControllerErrorActionName='Error';protected$defaultControllerNotFoundActionName='NotFound';protected$terminated=FALSE;public function GetCompiled(){if($this->compiled===NULL){$compiled=static::NOT_COMPILED;if(strpos(PACKAGER_PHP_FILE_BASE.'/vendor/mvccore/mvccore/src/MvcCore/Application/PropsGettersSetters.php','phar://')===0){$compiled=static::COMPILED_PHAR;}else if(class_exists('\Packager_Php_Wrapper')){$compiled=constant('\Packager_Php_Wrapper::FS_MODE');}$this->compiled=$compiled;}return$this->compiled;}public function GetConfigClass(){return$this->configClass;}public function GetControllerClass(){return$this->controllerClass;}public function GetDebugClass(){return$this->debugClass;}public function GetRequestClass(){return$this->requestClass;}public function GetResponseClass(){return$this->responseClass;}public function GetRouteClass(){return$this->routeClass;}public function GetRouterClass(){return$this->routerClass;}public function GetSessionClass(){return$this->sessionClass;}public function GetToolClass(){return$this->toolClass;}public function GetViewClass(){return$this->viewClass;}public function GetRequest(){if($this->request===NULL){$requestClass=$this->requestClass;$this->request=$requestClass::CreateInstance();}return$this->request;}public function GetResponse(){if($this->response===NULL){$responseClass=$this->responseClass;$this->response=$responseClass::CreateInstance();}return$this->response;}public function GetRouter(){if($this->router===NULL){$routerClass=$this->routerClass;$this->router=$routerClass::GetInstance();}return$this->router;}public function GetController(){return$this->controller;}public function GetAppDir(){return$this->appDir;}public function GetControllersDir(){return$this->controllersDir;}public function GetViewsDir(){return$this->viewsDir;}public function GetDefaultControllerAndActionNames(){return[$this->defaultControllerName,$this->defaultControllerDefaultActionName];}public function SetCompiled($compiled=''){$this->compiled=$compiled;return$this;}public function SetConfigClass($configClass){return$this->setCoreClass($configClass,'configClass','MvcCore\IConfig');}public function SetControllerClass($controllerClass){return$this->setCoreClass($controllerClass,'configClass','MvcCore\IController');}public function SetDebugClass($debugClass){return$this->setCoreClass($debugClass,'debugClass','MvcCore\IDebug');}public function SetRequestClass($requestClass){return$this->setCoreClass($requestClass,'requestClass','MvcCore\IRequest');}public function SetResponseClass($responseClass){return$this->setCoreClass($responseClass,'responseClass','MvcCore\IResponse');}public function SetRouteClass($routeClass){return$this->setCoreClass($routeClass,'routerClass','MvcCore\IRoute');}public function SetRouterClass($routerClass){return$this->setCoreClass($routerClass,'routerClass','MvcCore\IRouter');}public function SetSessionClass($sessionClass){return$this->setCoreClass($sessionClass,'sessionClass','MvcCore\ISession');}public function SetToolClass($toolClass){return$this->setCoreClass($toolClass,'toolClass','MvcCore\ITool');}public function SetViewClass($viewClass){return$this->setCoreClass($viewClass,'viewClass','MvcCore\IView');}public function SetAppDir($appDir){$this->appDir=$appDir;return$this;}public function SetController(\MvcCore\IController$controller=NULL){$this->controller=$controller;return$this;}public function SetControllersDir($controllersDir){$this->controllersDir=$controllersDir;return$this;}public function SetViewsDir($viewsDir){$this->viewsDir=$viewsDir;return$this;}public function SetDefaultControllerName($defaultControllerName){$this->defaultControllerName=$defaultControllerName;return$this;}public function SetDefaultControllerDefaultActionName($defaultActionName){$this->defaultControllerDefaultActionName=$defaultActionName;return$this;}public function SetDefaultControllerErrorActionName($defaultControllerErrorActionName){$this->defaultControllerErrorActionName=$defaultControllerErrorActionName;return$this;}public function SetDefaultControllerNotFoundActionName($defaultControllerNotFoundActionName){$this->defaultControllerNotFoundActionName=$defaultControllerNotFoundActionName;return$this;}public function AddPreRouteHandler(callable$handler,$priorityIndex=NULL){if(!is_callable($handler))throw new\InvalidArgumentException("[".get_class()."] Pre route handler is not callable (handler: {$handler}, priorityIndex: {$priorityIndex}).");return$this->setHandler($this->preRouteHandlers,$handler,$priorityIndex);}public function AddPostRouteHandler(callable$handler,$priorityIndex=NULL){if(!is_callable($handler))throw new\InvalidArgumentException("[".get_class()."] Post route handler is not callable (handler: {$handler}, priorityIndex: {$priorityIndex}).");return$this->setHandler($this->postRouteHandlers,$handler,$priorityIndex);}public function AddPreDispatchHandler(callable$handler,$priorityIndex=NULL){if(!is_callable($handler))throw new\InvalidArgumentException("[".get_class()."] Pre dispatch handler is not callable (handler: {$handler}, priorityIndex: {$priorityIndex}).");return$this->setHandler($this->preDispatchHandlers,$handler,$priorityIndex);}public function AddPostDispatchHandler(callable$handler,$priorityIndex=NULL){if(!is_callable($handler))throw new\InvalidArgumentException("[".get_class()."] Post dispatch handler is not callable (handler: {$handler}, priorityIndex: {$priorityIndex}).");return$this->setHandler($this->postDispatchHandlers,$handler,$priorityIndex);}public function AddPostTerminateHandler(callable$handler,$priorityIndex=NULL){if(!is_callable($handler))throw new\InvalidArgumentException("[".get_class()."] Post terminate handler is not callable (handler: {$handler}, priorityIndex: {$priorityIndex}).");return$this->setHandler($this->postTerminateHandlers,$handler,$priorityIndex);}}}
namespace MvcCore\Request{trait CollectionsMethods{public function&GetGlobalCollection($type){$collection='global'.ucfirst(strtolower($type));return$this->{$collection};}public function SetHeaders(array&$headers=[]){$this->headers=&$headers;return$this;}public function&GetHeaders($pregReplaceAllowedChars=['#[\<\>\'"]#'=>'']){if($this->headers===NULL)$this->initHeaders();if($pregReplaceAllowedChars===FALSE||$pregReplaceAllowedChars===''||$pregReplaceAllowedChars==='.*')return$this->headers;$cleanedHeaders=[];foreach($this->headers as$key=>&$value){$cleanedKey=$this->cleanParamValue($key,$pregReplaceAllowedChars);$cleanedHeaders[$cleanedKey]=$this->GetHeader($key,$pregReplaceAllowedChars);}return$cleanedHeaders;}public function SetHeader($name='',$value=''){if($this->headers===NULL)$this->initHeaders();$this->headers[$name]=$value;return$this;}public function GetHeader($name='',$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\.\@\=\+\?\!",$ifNullValue=NULL,$targetType=NULL){if($this->headers===NULL)$this->initHeaders();return$this->getParamFromCollection($this->headers,$name,$pregReplaceAllowedChars,$ifNullValue,$targetType);}public function HasHeader($name=''){if($this->headers===NULL)$this->initHeaders();return isset($this->headers[$name]);}public function SetParams(array&$params=[]){$this->params=&$params;return$this;}public function&GetParams($pregReplaceAllowedChars=['#[\<\>\'"]#'=>''],$onlyKeys=[]){if($this->params===NULL)$this->initParams();if($pregReplaceAllowedChars===FALSE||$pregReplaceAllowedChars===''||$pregReplaceAllowedChars==='.*'){if($onlyKeys){$result=array_intersect_key($this->params,array_flip($onlyKeys));}else{$result=&$this->params;}return$result;}$cleanedParams=[];foreach($this->params as$key=>&$value){if($onlyKeys&&!in_array($key,$onlyKeys,TRUE))continue;$cleanedKey=$this->cleanParamValue($key,$pregReplaceAllowedChars);$cleanedParams[$cleanedKey]=$this->GetParam($key,$pregReplaceAllowedChars);}return$cleanedParams;}public function SetParam($name='',$value=''){if($this->params===NULL)$this->initParams();$this->params[$name]=$value;return$this;}public function RemoveParam($name=''){if($this->params===NULL)$this->initParams();unset($this->params[$name]);return$this;}public function GetParam($name='',$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\@\:",$ifNullValue=NULL,$targetType=NULL){if($this->params===NULL)$this->initParams();return$this->getParamFromCollection($this->params,$name,$pregReplaceAllowedChars,$ifNullValue,$targetType);}public function HasParam($name=''){if($this->params===NULL)$this->initParams();return isset($this->params[$name]);}public function SetFiles(array&$files=[]){$this->globalFiles=&$files;return$this;}public function&GetFiles(){return$this->globalFiles;}public function SetFile($file='',$data=[]){$this->globalFiles[$file]=$data;return$this;}public function GetFile($file=''){if(isset($this->globalFiles[$file]))return$this->globalFiles[$file];return[];}public function HasFile($file=''){return isset($this->globalFiles[$file]);}public function SetCookies(array&$cookies=[]){$this->globalCookies=&$cookies;return$this;}public function&GetCookies($pregReplaceAllowedChars=['#[\<\>\'"]#'=>''],$onlyKeys=[]){if($pregReplaceAllowedChars===FALSE||$pregReplaceAllowedChars===''||$pregReplaceAllowedChars==='.*'){if($onlyKeys){$result=array_intersect_key($this->paglobalCookiesrams,array_flip($onlyKeys));}else{$result=$this->globalCookies;}return$result;}$cleanedCookies=[];foreach($this->globalCookies as$key=>&$value){if($onlyKeys&&!in_array($key,$onlyKeys,TRUE))continue;$cleanedKey=$this->cleanParamValue($key,$pregReplaceAllowedChars);$cleanedCookies[$cleanedKey]=$this->GetCookie($key,$pregReplaceAllowedChars);}return$cleanedCookies;}public function SetCookie($name="",$value=""){$this->globalCookies[$name]=$value;return$this;}public function GetCookie($name='',$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\.\@\=\+\?\!",$ifNullValue=NULL,$targetType=NULL){return$this->getParamFromCollection($this->globalCookies,$name,$pregReplaceAllowedChars,$ifNullValue,$targetType);}public function HasCookie($name=''){return isset($this->globalCookies[$name]);}protected function getParamItem(&$rawValue=NULL,$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\@\:",$ifNullValue=NULL,$targetType=NULL){if($rawValue===NULL){if($targetType===NULL)return$ifNullValue;$result=is_scalar($ifNullValue)?$ifNullValue:clone$ifNullValue;settype($result,$targetType);return$result;}else{if(is_string($rawValue)&&mb_strlen(trim($rawValue))===0){$result="";if($targetType===NULL)return$result;$result=is_scalar($ifNullValue)?$ifNullValue:clone$ifNullValue;settype($result,$targetType);return$result;}else if($pregReplaceAllowedChars===FALSE||$pregReplaceAllowedChars==='.*'){$result=$rawValue;if($targetType===NULL)return$result;settype($result,$targetType);return$result;}else if(is_array($rawValue)){$result=[];foreach((array)$rawValue as$key=>$value){$cleanedKey=$this->cleanParamValue($key,$pregReplaceAllowedChars);$result[$cleanedKey]=$this->getParamItem($value,$pregReplaceAllowedChars,$ifNullValue,$targetType);}return$result;}else{$result=$this->cleanParamValue($rawValue,$pregReplaceAllowedChars);if($targetType===NULL)return$result;settype($result,$targetType);return$result;}}}protected function cleanParamValue($rawValue,$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\@\:"){if($pregReplaceAllowedChars===FALSE){return$rawValue;}else if(is_array($pregReplaceAllowedChars)){foreach($pregReplaceAllowedChars as$pattern=>$replace){$replaceFn=mb_substr($pattern,0,1)==='#'?'preg_replace':'str_replace';$rawValue=$replaceFn($pattern,$replace,$rawValue);}return$rawValue;}else{return preg_replace("#[^".$pregReplaceAllowedChars."]#","",(string)$rawValue);}}}}
namespace MvcCore\Config{trait IniRead{public function Read($fullPath,$systemConfig=FALSE){if($this->data)return$this->data;$this->fullPath=$fullPath;$this->system=$systemConfig;if(!$this->_iniScannerMode)$this->_iniScannerMode=\PHP_VERSION_ID<50610?1:2;clearstatcache(TRUE,$fullPath);$this->lastChanged=\Packager_Php_Wrapper::Filemtime($fullPath);$rawIniData=\Packager_Php_Wrapper::ParseIniFile($this->fullPath,TRUE,$this->_iniScannerMode);if($rawIniData===FALSE)return FALSE;$this->data=[];$envsSectionName=static::$environmentsSectionName;$environmentsData=NULL;if($this->system&&isset($rawIniData[$envsSectionName])){$rawIniEnvSectionData=array_merge([],$rawIniData[$envsSectionName]);$this->iniReadExpandLevelsAndReType($rawIniEnvSectionData);$environmentsData=array_merge([],$this->data);$environment=static::EnvironmentDetectBySystemConfig($environmentsData);foreach($this->objectTypes as&$objectType)if($objectType[0])$objectType[1]=(object)$objectType[1];unset($rawIniData[$envsSectionName]);$this->data=[];$this->objectTypes=[];}else{$environment=static::$environment;}$iniData=&$this->iniReadFilterEnvironmentSections($rawIniData,$environment);$this->iniReadExpandLevelsAndReType($iniData);if($environmentsData!==NULL)$this->data[$envsSectionName]=(object)$environmentsData;foreach($this->objectTypes as&$objectType)if($objectType[0])$objectType[1]=(object)$objectType[1];unset($this->objectTypes);return TRUE;}protected function&iniReadFilterEnvironmentSections(array&$rawIniData,$environment){$iniData=[];foreach($rawIniData as$keyOrSectionName=>$valueOrSectionValues){if(is_array($valueOrSectionValues)){if(strpos($keyOrSectionName,'>')!==FALSE){list($envNamesStrLocal,$keyOrSectionName)=explode('>',str_replace(' ','',$keyOrSectionName));if(!in_array($environment,explode(',',$envNamesStrLocal)))continue;}$sectionValues=[];foreach($valueOrSectionValues as$key=>$value)$sectionValues[$keyOrSectionName.'.'.$key]=$value;$iniData=array_merge($iniData,$sectionValues);}else{$iniData[$keyOrSectionName]=$valueOrSectionValues;}}return$iniData;}protected function iniReadExpandLevelsAndReType(array&$iniData){$oldIniScannerMode=$this->_iniScannerMode===1;foreach($iniData as$rawKey=>$rawValue){$current=&$this->data;$rawKeys=[];$lastRawKey=$rawKey;$lastDotPos=strrpos($rawKey,'.');if($lastDotPos!==FALSE){$rawKeys=explode('.',substr($rawKey,0,$lastDotPos));$lastRawKey=substr($rawKey,$lastDotPos+1);}$levelKey='';$prevLevelKey='';foreach($rawKeys as$key){$prevLevelKey=$levelKey;$levelKey.=($levelKey?'.':'').$key;if(!isset($current[$key])){$current[$key]=[];$this->objectTypes[$levelKey]=[1,&$current[$key]];if(is_numeric($key)&&isset($this->objectTypes[$prevLevelKey])){$this->objectTypes[$prevLevelKey][0]=0;}}$current=&$current[$key];}if($oldIniScannerMode){$typedValue=$this->getTypedValue($rawValue);}else{$typedValue=$rawValue;}if(isset($current[$lastRawKey])){$current[$lastRawKey][]=$typedValue;$this->objectTypes[$levelKey?$levelKey:$lastRawKey][0]=0;}else{if(!is_array($current)){$current=[$current];$this->objectTypes[$levelKey]=[0,&$current];}$current[$lastRawKey]=$typedValue;if(is_numeric($lastRawKey))$this->objectTypes[$levelKey][0]=0;}}}protected function getTypedValue($rawValue){if(gettype($rawValue)=="array"){foreach($rawValue as$key=>$value){$rawValue[$key]=$this->getTypedValue($value);}return$rawValue;}else if(mb_strlen($rawValue)>0){if(is_numeric($rawValue)){return$this->getTypedValueFloatOrInt($rawValue);}else{return$this->getTypedSpecialValueOrString($rawValue);}}else{return$this->getTypedSpecialValueOrString($rawValue);}}protected function getTypedValueFloatOrInt($rawValue){if(strpos($rawValue,'.')!==FALSE||strpos($rawValue,'e')!==FALSE||strpos($rawValue,'E')!==FALSE){return floatval($rawValue);}else{$intVal=intval($rawValue);return(string)$intVal===$rawValue?$intVal:$rawValue;}}protected function getTypedSpecialValueOrString($rawValue){$lowerRawValue=strtolower($rawValue);if(isset(static::$specialValues[$lowerRawValue])){return static::$specialValues[$lowerRawValue];}else{return trim($rawValue);}}}}
namespace MvcCore\Config{trait IniDump{public function Dump(){$environment=static::GetEnvironment(TRUE);list($sections,$envSpecifics)=$this->dumpSectionsInfo();$levelKey='';$basicData=[];$sectionsData=[];foreach($this->data as$key=>&$value){if(is_object($value)||is_array($value)){if($sectionsData)$sectionsData[]='';$sectionType=isset($sections[$key])?$sections[$key]:0;$environmentSpecificSection=$sectionType===3;if($sectionType){unset($sections[$key]);$sectionsData[]=($environmentSpecificSection?'['.$environment.' > '.$key.']':'['.$key.']');$levelKey='';}else{$levelKey=(string)$key;}$this->dumpRecursive($levelKey,$value,$sectionsData);if($environmentSpecificSection&&isset($envSpecifics[$key])){foreach($envSpecifics[$key]as$envName=>$sectionLines){if($envName===$environment)continue;$sectionsData[]='';foreach($sectionLines as$sectionLine)$sectionsData[]=$sectionLine;}}}else{$basicData[]=$key.' = '.$this->dumpScalarValue($value);}}$result='';if($basicData)$result=implode(PHP_EOL,$basicData);if($sectionsData)$result.=PHP_EOL.PHP_EOL.implode(PHP_EOL,$sectionsData);return$result;}protected function dumpSectionsInfo(){$sections=[];$envSpecifics=[];if(\Packager_Php_Wrapper::FileExists($this->fullPath)){$rawIniLines=file($this->fullPath,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);$contentFilling=[];foreach($rawIniLines as$rawIniLine){$rawIniLine=trim($rawIniLine);$firstChar=mb_substr($rawIniLine,0,1);if($firstChar===';')continue;$rawSection=NULL;if($firstChar=='['&&mb_substr($rawIniLine,-1,1)==']')$rawSection=mb_substr($rawIniLine,1,-1);if($rawSection){if(strpos($rawSection,'>')!==FALSE){list($envNameLocal,$sectionName)=explode('>',str_replace(' ','',$rawSection));$sections[$sectionName]=3;if(!isset($envSpecifics[$sectionName]))$envSpecifics[$sectionName]=[];$envSpecifics[$sectionName][$envNameLocal]=[];$contentFilling=&$envSpecifics[$sectionName][$envNameLocal];}else{$sections[$rawSection]=2;$contentFilling=[];}}$contentFilling[]=$rawIniLine;}}else{$sections=array_fill_keys(array_keys($this->data),1);}return[$sections,$envSpecifics];}protected function dumpRecursive($levelKey,&$data,&$rawData){if(is_object($data)||is_array($data)){if(strlen($levelKey)>0)$levelKey.='.';foreach((array)$data as$key=>$value){$this->dumpRecursive($levelKey.$key,$value,$rawData);}}else{$rawData[]=$levelKey.' = '.$this->dumpScalarValue($data);}}protected function dumpScalarValue($value){if(is_numeric($value)){return(string)$value;}else if(is_bool($value)){return$value?'true':'false';}else if($value===NULL){return'null';}else{static$specialChars=['=','/','.','#','&','!','?','-','@',"'",'"','*','^','[',']','(',')','{','}','<','>','\n','\r',];$valueStr=(string)$value;$specialCharCaught=FALSE;foreach($specialChars as$specialChar){if(mb_strpos($valueStr,$specialChar)){$specialCharCaught=TRUE;break;}}if($specialCharCaught){return'"'.addcslashes($valueStr,'"').'"';}else{return$valueStr;}}}}}
namespace MvcCore\Config{trait IniProps{protected static$systemConfigPath='/%appPath%/config.ini';protected static$specialValues=['true'=>TRUE,'on'=>TRUE,'yes'=>TRUE,'false'=>FALSE,'off'=>FALSE,'no'=>FALSE,'none'=>FALSE,'null'=>NULL,];private$_iniScannerMode=0;}}
namespace MvcCore\Application{trait Dispatching{public function Run($singleFileUrl=FALSE){if($singleFileUrl)$this->SetCompiled(static::COMPILED_SFU);try{$this->GetRequest();$this->GetResponse();$debugClass=$this->debugClass;$debugClass::Init();}catch(\Throwable$e){$this->DispatchException($e);return$this->Terminate();}if(!$this->ProcessCustomHandlers($this->preRouteHandlers))return$this->Terminate();if(!$this->RouteRequest())return$this->Terminate();if(!$this->ProcessCustomHandlers($this->postRouteHandlers))return$this->Terminate();if(!$this->DispatchRequest())return$this->Terminate();return$this->Terminate();}public function SessionStart(){$sessionClass=$this->sessionClass;$sessionClass::Start();}public function RouteRequest(){$router=$this->GetRouter()->SetRequest($this->GetRequest());try{$result=$router->Route();}catch(\Throwable$e){$this->DispatchException($e);$result=FALSE;}return$result;}public function ProcessCustomHandlers(&$handlers=[]){if(!$handlers||$this->request->IsInternalRequest()===TRUE)return TRUE;$result=TRUE;foreach($handlers as$handlerRecord){list($closureCalling,$handler)=$handlerRecord;$subResult=NULL;try{if($closureCalling){$subResult=$handler($this->request,$this->response);}else{$subResult=call_user_func($handler,$this->request,$this->response);}if($subResult===FALSE){$result=FALSE;break;}}catch(\Throwable$e){$this->DispatchException($e);$result=FALSE;break;}}return$result;}public function DispatchRequest(){$route=$this->router->GetCurrentRoute();if($route===NULL)return$this->DispatchException('No route for request',404);list($ctrlPc,$actionPc)=[$route->GetController(),$route->GetAction()];$actionName=$actionPc.'Action';$viewClass=$this->viewClass;$viewScriptFullPath=$viewClass::GetViewScriptFullPath($viewClass::GetScriptsDir(),$this->request->GetControllerName().'/'.$this->request->GetActionName());if($ctrlPc=='Controller'){$controllerName=$this->controllerClass;}else if($this->controller!==NULL){$controllerName='\\'.get_class($this->controller);}else{$controllerName=$this->CompleteControllerName($ctrlPc);if(!class_exists($controllerName)){if(\Packager_Php_Wrapper::FileExists($viewScriptFullPath)){$controllerName=$this->controllerClass;}else{return$this->DispatchException("Controller class `$controllerName` doesn't exist.",404);}}}return$this->DispatchControllerAction($controllerName,$actionName,$viewScriptFullPath,function(\Throwable$e){return$this->DispatchException($e);});}public function DispatchControllerAction($ctrlClassFullName,$actionNamePc,$viewScriptFullPath,callable$exceptionCallback){if($this->controller===NULL){$controller=NULL;try{$controller=$ctrlClassFullName::CreateInstance();}catch(\Throwable$e){return$this->DispatchException($e->getMessage(),404);}$this->controller=$controller;}$ctrl=$this->controller;$ctrl->SetApplication($this)->SetRequest($this->request)->SetResponse($this->response)->SetRouter($this->router);if(!method_exists($this->controller,$actionNamePc)&&$ctrlClassFullName!==$this->controllerClass){if(!\Packager_Php_Wrapper::FileExists($viewScriptFullPath)){$appRoot=$this->request->GetAppRoot();$viewScriptPath=mb_strpos($viewScriptFullPath,$appRoot)===FALSE?$viewScriptFullPath:mb_substr($viewScriptFullPath,mb_strlen($appRoot));$ctrlClassFullName=$this->request->GetControllerName();return$this->DispatchException("Controller class `$ctrlClassFullName` has not method `$actionNamePc` \n"."or view doesn't exist: `$viewScriptPath`.",404);}}if(!$this->ProcessCustomHandlers($this->preDispatchHandlers))return FALSE;try{$this->controller->Dispatch($actionNamePc);}catch(\Throwable$e){return$exceptionCallback($e);}return TRUE;}public function Url($controllerActionOrRouteName='Index:Index',$params=[]){return$this->router->Url($controllerActionOrRouteName,$params);}public function Terminate(){if($this->terminated)return$this;$this->ProcessCustomHandlers($this->postDispatchHandlers);if(!$this->response->IsSentHeaders()){$sessionClass=$this->sessionClass;if($sessionClass::GetStarted()){$sessionClass::SendCookie();$sessionClass::Close();}$this->response->SendHeaders();}if(!$this->response->IsSentBody())$this->response->SendBody();$this->terminated=TRUE;if($this->controller){$ctrlType=new\ReflectionClass($this->controller);$dispatchStateProperty=$ctrlType->getProperty('dispatchState');$dispatchStateProperty->setAccessible(TRUE);$dispatchStateProperty->setValue($this->controller,5);}$this->ProcessCustomHandlers($this->postTerminateHandlers);return$this;}public function DispatchException($exceptionOrMessage,$code=NULL){if(class_exists('\Packager_Php'))return FALSE;$exception=NULL;if($exceptionOrMessage instanceof\Throwable){$exception=$exceptionOrMessage;}else{try{if($code===NULL)throw new\Exception($exceptionOrMessage);throw new\ErrorException($exceptionOrMessage,$code);}catch(\Exception$e){$exception=$e;}}$debugClass=$this->debugClass;$configClass=$this->configClass;if($exception->getCode()==404){$debugClass::Log($exception->getMessage().": ".$this->request->GetFullUrl(),\MvcCore\IDebug::INFO);return$this->RenderNotFound($exception->getMessage());}else if($configClass::IsDevelopment(TRUE)){$debugClass::Exception($exception);return FALSE;}else{$debugClass::Log($exception,\MvcCore\IDebug::EXCEPTION);return$this->RenderError($exception);}}public function RenderError(\Throwable$e){$defaultCtrlFullName=$this->GetDefaultControllerIfHasAction($this->defaultControllerErrorActionName);$exceptionMessage=$e->getMessage();if(!$this->GetRequest()->IsCli()&&$defaultCtrlFullName){$debugClass=$this->debugClass;$viewClass=$this->viewClass;$this->router->SetOrCreateDefaultRouteAsCurrent(\MvcCore\IRouter::DEFAULT_ROUTE_NAME_ERROR,$this->defaultControllerName,$this->defaultControllerErrorActionName,TRUE);$exceptionCode=$e->getCode();$exceptionCode=$exceptionCode>0?$exceptionCode:500;$newParams=array_merge($this->request->GetParams(FALSE),['code'=>$exceptionCode,'message'=>$exceptionMessage,]);$this->request->SetParams($newParams);$this->response->SetCode($exceptionCode);$this->controller=NULL;$this->DispatchControllerAction($defaultCtrlFullName,$this->defaultControllerErrorActionName."Action",$viewClass::GetViewScriptFullPath($viewClass::GetScriptsDir(),$this->request->GetControllerName().'/'.$this->request->GetActionName()),function(\Throwable$e2)use($exceptionMessage,$debugClass){$this->router->RemoveRoute(\MvcCore\IRouter::DEFAULT_ROUTE_NAME_NOT_FOUND);$configClass=$this->configClass;if($configClass::IsDevelopment(TRUE)){$debugClass::Exception($e2);}else{$debugClass::Log($e2,\MvcCore\IDebug::EXCEPTION);$this->RenderError500PlainText($exceptionMessage.PHP_EOL.PHP_EOL.$e2->getMessage());}});return FALSE;}else{return$this->RenderError500PlainText($exceptionMessage);}}public function RenderNotFound($exceptionMessage=''){if(!$exceptionMessage)$exceptionMessage='Page not found.';$defaultCtrlFullName=$this->GetDefaultControllerIfHasAction($this->defaultControllerNotFoundActionName);if(!$this->GetRequest()->IsCli()&&$defaultCtrlFullName){$debugClass=$this->debugClass;$viewClass=$this->viewClass;$this->router->SetOrCreateDefaultRouteAsCurrent(\MvcCore\IRouter::DEFAULT_ROUTE_NAME_NOT_FOUND,$this->defaultControllerName,$this->defaultControllerNotFoundActionName,TRUE);$newParams=array_merge($this->request->GetParams(FALSE),['code'=>404,'message'=>$exceptionMessage,]);$this->request->SetParams($newParams);$this->response->SetCode(404);$this->controller=NULL;$this->DispatchControllerAction($defaultCtrlFullName,$this->defaultControllerNotFoundActionName."Action",$viewClass::GetViewScriptFullPath($viewClass::GetScriptsDir(),$this->request->GetControllerName().'/'.$this->request->GetActionName()),function(\Throwable$e)use($exceptionMessage,$debugClass){$this->router->RemoveRoute(\MvcCore\IRouter::DEFAULT_ROUTE_NAME_NOT_FOUND);$configClass=$this->configClass;if($configClass::IsDevelopment(TRUE)){$debugClass::Exception($e);}else{$debugClass::Log($e,\MvcCore\IDebug::EXCEPTION);$this->RenderError404PlainText($exceptionMessage);}});return FALSE;}else{return$this->RenderError404PlainText($exceptionMessage);}}public function RenderError500PlainText($text=''){$htmlResponse=FALSE;$responseClass=$this->responseClass;$configClass=$this->configClass;if(!$configClass::IsDevelopment(TRUE)){$text='Error 500: Internal Server Error.'.PHP_EOL;}else{$obContent=ob_get_clean();if(mb_strlen($obContent)>0)$htmlResponse=mb_strpos($obContent,'<')!==FALSE&&mb_strpos($obContent,'>')!==FALSE;if($htmlResponse){$text='<pre><big>Error 500</big>: '.PHP_EOL.PHP_EOL.$text.'</pre>'.$obContent;}else{$text='Error 500: '.PHP_EOL.PHP_EOL.$text.PHP_EOL.$obContent;}}$this->response=$responseClass::CreateInstance(\MvcCore\IResponse::INTERNAL_SERVER_ERROR,['Content-Type'=>$htmlResponse?'text/html':'text/plain'],$text);return FALSE;}public function RenderError404PlainText($text=''){$htmlResponse=FALSE;$responseClass=$this->responseClass;$configClass=$this->configClass;if(!$configClass::IsDevelopment(TRUE)){$text='Error 404: Page not found.'.PHP_EOL;}else{$obContent=ob_get_clean();if(mb_strlen($obContent)>0)$htmlResponse=mb_strpos($obContent,'<')!==FALSE&&mb_strpos($obContent,'>')!==FALSE;if($htmlResponse){$text='<pre><big>Error 404</big>: '.PHP_EOL.PHP_EOL.$text.'</pre>'.$obContent;}else{$text='Error 404: '.PHP_EOL.PHP_EOL.$text.PHP_EOL.$obContent;}}$this->response=$responseClass::CreateInstance(\MvcCore\IResponse::NOT_FOUND,['Content-Type'=>$htmlResponse?'text/html':'text/plain'],$text);return FALSE;}}}
namespace MvcCore\Config{trait MagicMethods{public function __get($key){if(array_key_exists($key,$this->data))return$this->data[$key];return NULL;}public function __set($key,$value){return$this->data[$key]=$value;}public function __isset($key){return isset($this->data[$key]);}public function __unset($key){if(isset($this->data[$key]))unset($this->data[$key]);}public function count(){return count($this->data);}public function getIterator(){return new\ArrayIterator($this->data);}public function offsetSet($offset,$value){if($offset===NULL){$this->data[]=$value;}else{$this->data[$offset]=$value;}}public function offsetGet($offset){return isset($this->data[$offset])?$this->data[$offset]:NULL;}public function offsetExists($offset){return isset($this->data[$offset]);}public function offsetUnset($offset){unset($this->data[$offset]);}}}
namespace MvcCore\Application{trait Helpers{public function GetDefaultControllerIfHasAction($actionName){$defaultControllerName=$this->CompleteControllerName($this->defaultControllerName);if(class_exists($defaultControllerName)&&method_exists($defaultControllerName,$actionName.'Action')){return$defaultControllerName;}return'';}public function CompleteControllerName($controllerNamePascalCase){if(substr($controllerNamePascalCase,0,2)=='//')return'\\'.ltrim($controllerNamePascalCase,'/');return'\\'.implode('\\',[$this->appDir,$this->controllersDir,ltrim($controllerNamePascalCase,'\\')]);}public function IsErrorDispatched(){$toolClass=$this->toolClass;$defaultCtrlName=$toolClass::GetDashedFromPascalCase($this->defaultControllerName);$errorActionName=$toolClass::GetDashedFromPascalCase($this->defaultControllerErrorActionName);return$this->request->GetControllerName()==$defaultCtrlName&&$this->request->GetActionName()==$errorActionName;}public function IsNotFoundDispatched(){$toolClass=$this->toolClass;$defaultCtrlName=$toolClass::GetDashedFromPascalCase($this->defaultControllerName);$errorActionName=$toolClass::GetDashedFromPascalCase($this->defaultControllerNotFoundActionName);return$this->request->GetControllerName()==$defaultCtrlName&&$this->request->GetActionName()==$errorActionName;}protected function setCoreClass($newCoreClassName,$coreClassVar,$coreClassInterface){if(call_user_func([$this->toolClass,'CheckClassInterface'],$newCoreClassName,$coreClassInterface,TRUE,TRUE))$this->$coreClassVar=$newCoreClassName;return$this;}protected function setHandler(array&$handlers,callable$handler,$priorityIndex=NULL){$closureCalling=((is_string($handler)&&strpos($handler,'::')!==FALSE)||(is_array($handler)&&strpos($handler[1],'::')!==FALSE))?FALSE:TRUE;if($priorityIndex===NULL){$handlers[]=[$closureCalling,$handler];}else{if(isset($handlers[$priorityIndex])){array_splice($handlers,$priorityIndex,0,[$closureCalling,$handler]);}else{$handlers[$priorityIndex]=[$closureCalling,$handler];}}return$this;}}}
namespace MvcCore\Request{trait Props{protected static$twoSegmentTlds=['co.jp'=>1,'ac.uk'=>1,'co.uk'=>1,'co.kr'=>1,'co.nl'=>1,'in.ua'=>1,'co.nf'=>1,'ny.us'=>1,'co.us'=>1];protected static$routerClass=NULL;protected static$app=NULL;protected$phpSapi=NULL;protected$cli=NULL;protected$lang=NULL;protected$locale=NULL;protected$mediaSiteVersion=NULL;protected$scheme=NULL;protected$secure=NULL;protected$hostName=NULL;protected$host=NULL;protected$port=NULL;protected$domainParts=NULL;protected$portDefined=FALSE;protected$path=NULL;protected$query=NULL;protected$fragment=NULL;protected$ajax=NULL;protected$scriptName=NULL;protected$appRoot=NULL;protected$basePath=NULL;protected$requestPath=NULL;protected$domainUrl=NULL;protected$baseUrl=NULL;protected$requestUrl=NULL;protected$fullUrl=NULL;protected$method=NULL;protected$referer=NULL;protected$serverIp=NULL;protected$clientIp=NULL;protected$contentLength=NULL;protected$microtime=NULL;protected$headers=NULL;protected$params=NULL;protected$appRequest=NULL;protected$controllerName=NULL;protected$actionName=NULL;protected$globalServer=[];protected$globalGet=[];protected$globalPost=[];protected$globalCookies=[];protected$globalFiles=[];}}
namespace MvcCore\Request{trait GettersSetters{public static function AddTwoSegmentTlds($twoSegmentTlds){$tlds=func_get_args();if(count($tlds)===1&&is_array($tlds[0]))$tlds=$tlds[0];foreach($tlds as$tld)self::$twoSegmentTlds[$tld]=TRUE;}public function IsInternalRequest(){if($this->appRequest===NULL){try{$ctrl=$this->GetControllerName();$action=$this->GetActionName();}catch(\Exception$e){$ctrl=NULL;$action=NULL;}if($ctrl!==NULL&&$action!==NULL){$this->appRequest=FALSE;if($ctrl==='controller'&&$action==='asset')$this->appRequest=TRUE;}}return$this->appRequest;}public function SetControllerName($controllerName){$this->controllerName=$controllerName;$routerClass=self::$routerClass;$router=$routerClass::GetInstance();$this->params[$router::URL_PARAM_CONTROLLER]=$controllerName;return$this;}public function GetControllerName(){if($this->controllerName===NULL){$routerClass=self::$routerClass;$router=$routerClass::GetInstance();if(isset($this->globalGet[$router::URL_PARAM_CONTROLLER]))$this->controllerName=$this->GetParam($router::URL_PARAM_CONTROLLER,'a-zA-Z0-9\-_/','','string');}return$this->controllerName;}public function SetActionName($actionName){$this->actionName=$actionName;$routerClass=self::$routerClass;$router=$routerClass::GetInstance();$this->params[$router::URL_PARAM_ACTION]=$actionName;return$this;}public function GetActionName(){if($this->actionName===NULL){$routerClass=self::$routerClass;$router=$routerClass::GetInstance();if(isset($this->globalGet[$router::URL_PARAM_ACTION]))$this->actionName=$this->GetParam($router::URL_PARAM_ACTION,'a-zA-Z0-9\-_','','string');}return$this->actionName;}public function IsCli(){return$this->cli;}public function SetLang($lang){$this->lang=$lang;return$this;}public function GetLang(){if($this->lang===NULL)$this->initLangAndLocale();return$this->lang;}public function SetLocale($locale){$this->locale=$locale;return$this;}public function GetLocale(){if($this->locale===NULL)$this->initLangAndLocale();return$this->locale;}public function SetMediaSiteVersion($mediaSiteVersion){$this->mediaSiteVersion=$mediaSiteVersion;return$this;}public function GetMediaSiteVersion(){return$this->mediaSiteVersion;}public function __call($name,$arguments=[]){$nameBegin=strtolower(substr($name,0,3));$prop=lcfirst(substr($name,3));if($nameBegin=='get'&&isset($this->$prop)){return$this->$prop;}else if($nameBegin=='set'){$this->$prop=isset($arguments[0])?$arguments[0]:NULL;return$this;}else{throw new\InvalidArgumentException("[".get_class()."] No property with name '{$prop}' defined.");}}public function __get($name){return isset($this->$name)?$this->$name:NULL;}public function __set($name,$value){$this->$name=$value;return$this;}public function GetScriptName(){if($this->scriptName===NULL)$this->initScriptNameAndBasePath();return$this->scriptName;}public function GetPhpSapi(){return$this->phpSapi;}public function GetAppRoot(){if($this->appRoot===NULL){$indexFilePath=ucfirst(str_replace(['\\','//'],'/',$this->globalServer['SCRIPT_FILENAME']));$this->appRoot=strpos(PACKAGER_PHP_FILE_BASE.'/vendor/mvccore/mvccore/src/MvcCore/Request/GettersSetters.php','phar://')===0?'phar://'.$indexFilePath:dirname($indexFilePath);}return$this->appRoot;}public function SetMethod($rawMethod){$this->method=$rawMethod;return$this;}public function GetMethod(){if($this->method===NULL){$this->method=strtoupper($this->globalServer['REQUEST_METHOD']);}return$this->method;}public function SetBasePath($rawBasePath){$this->basePath=$rawBasePath;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;return$this;}public function GetBasePath(){if($this->basePath===NULL)$this->initScriptNameAndBasePath();return$this->basePath;}public function SetScheme($rawProtocol){$this->scheme=$rawProtocol;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;return$this;}public function GetScheme(){if($this->scheme===NULL){$this->scheme=((isset($this->globalServer['HTTPS'])&&strtolower($this->globalServer['HTTPS'])=='on')||$this->globalServer['SERVER_PORT']==443)?static::SCHEME_HTTPS:static::SCHEME_HTTP;}return$this->scheme;}public function IsSecure(){if($this->secure===NULL)$this->secure=in_array($this->GetScheme(),[static::SCHEME_HTTPS,static::SCHEME_FTPS,static::SCHEME_IRCS,static::SCHEME_SSH],TRUE);return$this->secure;}public function GetReferer($rawInput=FALSE){if($this->referer===NULL){$referer=isset($this->globalServer['HTTP_REFERER'])?$this->globalServer['HTTP_REFERER']:'';if($referer){while(mb_strpos($referer,'%')!==FALSE)$referer=rawurldecode($referer);$referer=filter_var($referer,FILTER_SANITIZE_URL)?:'';}$this->referer=$referer;}return$rawInput?$this->referer:static::HtmlSpecialChars($this->referer);}public function GetMicrotime(){if($this->microtime===NULL)$this->microtime=$this->globalServer['REQUEST_TIME_FLOAT'];return$this->microtime;}public function SetTopLevelDomain($topLevelDomain){if($this->domainParts===NULL)$this->initDomainSegments();$this->domainParts[2]=$topLevelDomain;$this->hostName=trim(implode('.',$this->domainParts),'.');if($this->hostName&&$this->portDefined)$this->host=$this->hostName.':'.$this->port;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;return$this;}public function GetTopLevelDomain(){if($this->domainParts===NULL)$this->initDomainSegments();return$this->domainParts[2];}public function SetSecondLevelDomain($secondLevelDomain){if($this->domainParts===NULL)$this->initDomainSegments();$this->domainParts[1]=$secondLevelDomain;$this->hostName=trim(implode('.',$this->domainParts),'.');if($this->hostName&&$this->portDefined)$this->host=$this->hostName.':'.$this->port;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;return$this;}public function GetSecondLevelDomain(){if($this->domainParts===NULL)$this->initDomainSegments();return isset($this->domainParts[1])?$this->domainParts[1]:NULL;}public function SetThirdLevelDomain($thirdLevelDomain){if($this->domainParts===NULL)$this->initDomainSegments();$this->domainParts[0]=$thirdLevelDomain;$this->hostName=trim(implode('.',$this->domainParts),'.');if($this->hostName&&$this->portDefined)$this->host=$this->hostName.':'.$this->port;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;return$this;}public function GetThirdLevelDomain(){if($this->domainParts===NULL)$this->initDomainSegments();return isset($this->domainParts[0])?$this->domainParts[0]:NULL;}public function SetHostName($rawHostName){if($this->hostName!==$rawHostName)$this->domainParts=NULL;$this->hostName=$rawHostName;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;if($rawHostName&&$this->portDefined)$this->host=$rawHostName.':'.$this->port;return$this;}public function GetHostName(){if($this->hostName===NULL)$this->hostName=$this->globalServer['SERVER_NAME'];return$this->hostName;}public function SetHost($rawHost){$this->host=$rawHost;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;$doubleDotPos=mb_strpos($rawHost,':');if($doubleDotPos!==FALSE){$hostName=mb_substr($rawHost,0,$doubleDotPos);$this->SetPort(mb_substr($rawHost,$doubleDotPos+1));}else{$hostName=$rawHost;$this->port='';$this->portDefined=FALSE;}return$this->SetHostName($hostName);}public function GetHost(){if($this->host===NULL)$this->host=$this->globalServer['HTTP_HOST'];return$this->host;}public function SetPort($rawPort){$this->port=$rawPort;$this->domainUrl=NULL;$this->baseUrl=NULL;$this->requestUrl=NULL;$this->fullUrl=NULL;if(strlen($rawPort)>0){$this->host=$this->hostName.':'.$rawPort;$this->portDefined=TRUE;}else{$this->host=$this->hostName;$this->portDefined=FALSE;}return$this;}public function GetPort(){if($this->port===NULL)$this->initUrlSegments();return$this->port;}public function SetPath($rawPathValue){$this->path=$rawPathValue;$this->requestUrl=NULL;$this->requestPath=NULL;$this->fullUrl=NULL;return$this;}public function GetPath($rawInput=FALSE){if($this->path===NULL)$this->initUrlSegments();return$rawInput?$this->path:static::HtmlSpecialChars($this->path);}public function SetQuery($rawQuery){$this->query=ltrim($rawQuery,'?');$this->fullUrl=NULL;$this->requestPath=NULL;return$this;}public function GetQuery($withQuestionMark=FALSE,$rawInput=FALSE){if($this->query===NULL)$this->initUrlSegments();$result=($withQuestionMark&&mb_strlen($this->query)>0)?'?'.$this->query:$this->query;return$rawInput?$result:static::HtmlSpecialChars($result);}public function GetRequestPath($rawInput=FALSE){if($this->requestPath===NULL){$this->requestPath=$this->GetPath(TRUE).$this->GetQuery(TRUE,TRUE).$this->GetFragment(TRUE,TRUE);}return$rawInput?$this->requestPath:static::HtmlSpecialChars($this->requestPath);}public function GetDomainUrl(){if($this->domainUrl===NULL)$this->domainUrl=$this->GetScheme().'//'.$this->GetHost();return$this->domainUrl;}public function GetBaseUrl(){if($this->baseUrl===NULL)$this->baseUrl=$this->GetDomainUrl().$this->GetBasePath();return$this->baseUrl;}public function GetRequestUrl($rawInput=FALSE){if($this->requestUrl===NULL)$this->requestUrl=$this->GetBaseUrl().$this->GetPath(TRUE);return$rawInput?$this->requestUrl:$this->HtmlSpecialChars($this->requestUrl);}public function GetFullUrl($rawInput=FALSE){if($this->fullUrl===NULL)$this->fullUrl=$this->GetRequestUrl(TRUE).$this->GetQuery(TRUE,TRUE).$this->GetFragment(TRUE,TRUE);return$rawInput?$this->fullUrl:static::HtmlSpecialChars($this->fullUrl);}public function GetFragment($withHash=FALSE,$rawInput=FALSE){if($this->fragment===NULL)$this->initUrlSegments();$result=($withHash&&mb_strlen($this->fragment)>0)?'?'.$this->fragment:$this->fragment;return$rawInput?$result:static::HtmlSpecialChars($result);}public function GetServerIp(){if($this->serverIp===NULL){$this->serverIp=(isset($this->globalServer['SERVER_ADDR'])?$this->globalServer['SERVER_ADDR']:(isset($this->globalServer['LOCAL_ADDR'])?$this->globalServer['LOCAL_ADDR']:''));}return$this->serverIp;}public function GetClientIp(){if($this->clientIp===NULL){$this->clientIp=(isset($this->globalServer['REMOTE_ADDR'])?$this->globalServer['REMOTE_ADDR']:(isset($this->globalServer['HTTP_X_CLIENT_IP'])?$this->globalServer['HTTP_X_CLIENT_IP']:''));$this->clientIp=preg_replace("#[^0-9a-zA-Z\.\:\[\]]#",'',$this->clientIp);}return$this->clientIp;}public function IsAjax(){if($this->ajax===NULL){$this->ajax=(isset($this->globalServer['HTTP_X_REQUESTED_WITH'])&&strlen($this->globalServer['HTTP_X_REQUESTED_WITH'])>0);}return$this->ajax;}public function GetContentLength(){if($this->contentLength===NULL){if(isset($this->globalServer['CONTENT_LENGTH'])&&ctype_digit($this->globalServer['CONTENT_LENGTH']))$this->contentLength=intval($this->globalServer['CONTENT_LENGTH']);}return$this->contentLength;}public static function HtmlSpecialChars($str){static$chars=['"'=>'&quot;',"'"=>'&apos;','<'=>'&lt;','>'=>'&gt;',];return strtr($str,$chars);}}}
namespace MvcCore\Request{trait Instancing{public static function CreateInstance(array&$server=[],array&$get=[],array&$post=[],array&$cookie=[],array&$files=[]){if(!func_get_args())list($server,$get,$post,$cookie,$files)=[&$_SERVER,&$_GET,&$_POST,&$_COOKIE,&$_FILES];$app=self::$app?:(self::$app=\MvcCore\Application::GetInstance());$requestClass=$app->GetRequestClass();return new$requestClass($server,$get,$post,$cookie,$files);}public function __construct(array&$server=[],array&$get=[],array&$post=[],array&$cookie=[],array&$files=[]){$app=self::$app?:(self::$app=\MvcCore\Application::GetInstance());self::$routerClass=self::$routerClass?:$app->GetRouterClass();$this->globalServer=&$server;$this->globalGet=&$get;$this->globalPost=&$post;$this->globalCookies=&$cookie;$this->globalFiles=&$files;$this->initCli();}public function InitAll(){$this->GetScriptName();$this->GetAppRoot();$this->GetMethod();$this->GetBasePath();$this->GetScheme();$this->IsSecure();$this->GetHostName();$this->GetHost();$this->GetRequestPath();$this->GetFullUrl();$this->GetReferer();$this->GetMicrotime();$this->IsAjax();if($this->port===NULL)$this->initUrlSegments();if($this->headers===NULL)$this->initHeaders();if($this->params===NULL)$this->initParams();$this->GetServerIp();$this->GetClientIp();$this->GetContentLength();return$this;}}}
namespace MvcCore\Request{trait InternalInits{public static function ParseHttpAcceptLang($languagesList){$languages=[];$languageRanges=explode(',',trim($languagesList));foreach($languageRanges as$languageRange){$regExpResult=preg_match("/(\*|[a-zA-Z0-9]{1,8}(?:-[a-zA-Z0-9]{1,8})*)(?:\s*;\s*q\s*=\s*(0(?:\.\d{0,3})|1(?:\.0{0,3})))?/",trim($languageRange),$match);if($regExpResult){$priority=isset($match[2])?(string)floatval($match[2]):'1.0';if(!isset($languages[$priority]))$languages[$priority]=[];$langOrLangWithLocale=str_replace('-','_',$match[1]);$delimiterPos=strpos($langOrLangWithLocale,'_');if($delimiterPos!==FALSE){$languages[$priority][]=[strtolower(substr($langOrLangWithLocale,0,$delimiterPos)),strtoupper(substr($langOrLangWithLocale,$delimiterPos+1))];}else{$languages[$priority][]=[strtolower($langOrLangWithLocale),NULL];}}}krsort($languages);reset($languages);return$languages;}protected function initCli(){$this->phpSapi=php_sapi_name();$phpSapiCHasCli=FALSE;if(substr($this->phpSapi,0,3)==='cli'){$this->phpSapi='cli';$phpSapiCHasCli=TRUE;}$this->cli=FALSE;if($phpSapiCHasCli&&!isset($this->globalServer['REQUEST_URI'])){$this->cli=TRUE;$hostName=gethostname();$this->scheme='file:';$this->secure=FALSE;$this->hostName=$hostName;$this->host=$hostName;$this->port='';$this->path='';$this->query='';$this->fragment='';$this->ajax=FALSE;$this->basePath='';$this->requestPath='';$this->domainUrl='';$this->baseUrl='';$this->requestUrl='';$this->fullUrl='';$this->referer='';$this->serverIp='127.0.0.1';$this->clientIp=$this->serverIp;$this->contentLength=0;$this->headers=[];$this->params=[];$this->appRequest=FALSE;$this->method='GET';$backtraceItems=debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);$indexFilePath=str_replace('\\','/',$backtraceItems[count($backtraceItems)-1]['file']);$lastSlashPos=mb_strrpos($indexFilePath,'/');$this->appRoot=mb_substr($indexFilePath,0,$lastSlashPos);$this->scriptName=mb_substr($indexFilePath,$lastSlashPos);$args=$this->globalServer['argv'];array_shift($args);$params=[];if($args){foreach($args as$arg){parse_str($arg,$paramsLocal);if(!$paramsLocal)continue;foreach($paramsLocal as$paramName=>$paramValue){if(is_array($paramValue)){$params=array_merge($params,[$paramName=>array_merge($params[$paramName]?:[],$paramValue)]);}else{$params[$paramName]=$paramValue;}}}}$this->params=$params;$this->globalGet=$params;}}protected function initUrlSegments(){$this->portDefined=FALSE;$this->port='';$this->path='';$this->query='';$this->fragment='';$uri=$this->GetScheme().'//'.$this->globalServer['HTTP_HOST'];if(isset($this->globalServer['UNENCODED_URL'])){$uri.=rawurldecode($this->globalServer['UNENCODED_URL']);}else if(isset($this->globalServer['UNENCODED_URL'])){$uri.=rawurldecode($this->globalServer['UNENCODED_URL']);}else{$uri.=rawurldecode($this->globalServer['REQUEST_URI']);}$firstColonPos=mb_strpos($uri,':');if($firstColonPos!==FALSE)$uri=mb_substr($uri,$firstColonPos+1);if(mb_substr($uri,0,2)==='//'){$nextSlashPos=mb_strpos($uri,'/',2);if($nextSlashPos!==FALSE){$authority=mb_substr($uri,2,$nextSlashPos-2);$uri=mb_substr($uri,$nextSlashPos);$colonsCount=mb_substr_count($authority,':');if($colonsCount===1){$colonPos=mb_strpos($authority,':');$this->port=mb_substr($authority,$colonPos+1);if($this->port!=='')$this->portDefined=TRUE;}}else{return;}}$basePath=$this->GetBasePath();$uri=mb_substr($uri,mb_strlen($basePath));$questionMarkPos=mb_strpos($uri,'?');$hashPos=mb_strpos($uri,'#');$questionMarkContained=$questionMarkPos!==FALSE;$hashContained=$hashPos!==FALSE;if(!$questionMarkContained&&!$hashContained){$this->path=$uri;}else if($questionMarkContained&&!$hashContained){$this->path=mb_substr($uri,0,$questionMarkPos);$this->query=trim(mb_substr($uri,$questionMarkPos+1),'&');}else if(!$questionMarkContained&&$hashContained){$this->path=mb_substr($uri,0,$hashPos);$this->fragment=mb_substr($uri,$hashPos+1);}else if($questionMarkContained&&$hashContained&&$questionMarkPos<$hashPos){$this->path=mb_substr($uri,0,$questionMarkPos);$this->query=trim(mb_substr($uri,$questionMarkPos+1,$questionMarkPos+1-$hashPos),'&');$this->fragment=mb_substr($uri,$hashPos+1);}else{$this->path=mb_substr($uri,0,$questionMarkPos);$this->fragment=mb_substr($uri,$hashPos+1);}}protected function initHeaders(){if(function_exists('getallheaders')){$headers=getallheaders();}else{$headers=[];foreach($this->globalServer as$name=>$value){if(substr($name,0,5)=='HTTP_'){$headers[str_replace(' ','-',ucwords(strtolower(str_replace('_',' ',substr($name,5)))))]=$value;}else if($name=="CONTENT_TYPE"){$headers["Content-Type"]=$value;}else if($name=="CONTENT_LENGTH"){$headers["Content-Length"]=$value;}}}$this->headers=$headers;}protected function initParams(){$params=array_merge($this->globalGet);if($this->GetMethod()==self::METHOD_POST){$postValues=[];if(count($this->globalPost)>0){$postValues=$this->globalPost;}else{$postValues=$this->initParamsCompletePostData();}$params=array_merge($params,$postValues);}$this->params=$params;}protected function initParamsCompletePostData(){$result=[];$rawPhpInput=\Packager_Php_Wrapper::FileGetContents('php://input');$app=self::$app?:(self::$app=\MvcCore\Application::GetInstance());$toolClass=$app->GetToolClass();$probablyAJsonType=!$toolClass::IsQueryString($rawPhpInput);if($probablyAJsonType){$decodedJsonResult=$toolClass::DecodeJson($rawPhpInput);if($decodedJsonResult->success){$result=(array)$decodedJsonResult->data;}else{$probablyAJsonType=FALSE;}}if(!$probablyAJsonType){$rawPhpInput=trim($rawPhpInput,'&=');parse_str($rawPhpInput,$result);}return$result;}protected function getParamFromCollection(&$paramsCollection=[],$name="",$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\@\:",$ifNullValue=NULL,$targetType=NULL){if(!isset($paramsCollection[$name]))return$ifNullValue;if(is_array($paramsCollection[$name])){if($targetType!==NULL&&$targetType!=='array')throw new\InvalidArgumentException("`$name` must be a `$targetType`, not an `array`.");$result=[];$paramsCollectionArr=$paramsCollection[$name];foreach($paramsCollectionArr as$key=>$value){$cleanedKey=is_numeric($key)?$key:$this->cleanParamValue($key,$pregReplaceAllowedChars);$result[$cleanedKey]=$this->getParamItem($value,$pregReplaceAllowedChars,$ifNullValue,$targetType);}return$result;}else{return$this->getParamItem($paramsCollection[$name],$pregReplaceAllowedChars,$ifNullValue,$targetType);}}protected function initScriptNameAndBasePath(){$this->basePath='';$this->scriptName=str_replace('\\','/',$this->globalServer['SCRIPT_NAME']);$lastSlashPos=mb_strrpos($this->scriptName,'/');if($lastSlashPos!==0){$redirectUrl=rawurldecode(isset($this->globalServer['REDIRECT_URL'])?$this->globalServer['REDIRECT_URL']:'');$redirectUrlLength=mb_strlen($redirectUrl);$requestUri=rawurldecode($this->globalServer['REQUEST_URI']);$questionMarkPos=mb_strpos($requestUri,'?');if($questionMarkPos!==FALSE)$requestUri=mb_substr($requestUri,0,$questionMarkPos);if($redirectUrlLength===0||($redirectUrlLength>0&&$redirectUrl===$requestUri)){$this->basePath=mb_substr($this->scriptName,0,$lastSlashPos);$this->scriptName='/'.mb_substr($this->scriptName,$lastSlashPos+1);}else{$requestUriPosInRedirectUri=mb_strrpos($redirectUrl,$requestUri);$apacheRedirectedPath=mb_substr($redirectUrl,0,$requestUriPosInRedirectUri);$this->scriptName=mb_substr($this->scriptName,mb_strlen($apacheRedirectedPath));$lastSlashPos=mb_strrpos($this->scriptName,'/');$this->basePath=mb_substr($this->scriptName,0,$lastSlashPos);}}else{$this->scriptName='/'.mb_substr($this->scriptName,$lastSlashPos+1);}}protected function initLangAndLocale(){$rawUaLanguages=$this->globalServer['HTTP_ACCEPT_LANGUAGE'];if(extension_loaded('Intl')){$langAndLocaleStr=\locale_accept_from_http($rawUaLanguages);$langAndLocaleArr=$langAndLocaleStr!==NULL?explode('_',$langAndLocaleStr):[NULL,NULL];}else{$languagesAndLocales=static::ParseHttpAcceptLang($rawUaLanguages);$langAndLocaleArr=current($languagesAndLocales);if(is_array($langAndLocaleArr))$langAndLocaleArr=current($langAndLocaleArr);}if($langAndLocaleArr[0]===NULL)$langAndLocaleArr[0]='';if(count($langAndLocaleArr)>1&&$langAndLocaleArr[1]===NULL)$langAndLocaleArr[1]='';list($this->lang,$this->locale)=$langAndLocaleArr;}protected function initDomainSegments(){$hostName=$this->GetHostName();$this->domainParts=[];$lastDotPos=mb_strrpos($hostName,'.');if($lastDotPos===FALSE){$this->domainParts=[NULL,NULL,$hostName];}else{$first=mb_substr($hostName,$lastDotPos+1);$second=mb_substr($hostName,0,$lastDotPos);if(self::$twoSegmentTlds){$lastDotPos=mb_strrpos($second,'.');if($lastDotPos!==FALSE){$firstTmp=mb_substr($second,$lastDotPos+1).'.'.$first;if(isset(self::$twoSegmentTlds[$firstTmp])){$first=$firstTmp;$second=$firstTmp=mb_substr($second,0,$lastDotPos);}}}$lastDotPos=mb_strrpos($second,'.');if($lastDotPos===FALSE){$this->domainParts=[NULL,$second,$first];}else{$third=mb_substr($second,0,$lastDotPos);$second=mb_substr($second,$lastDotPos+1);$this->domainParts=[$third,$second,$first];}}}}}
namespace MvcCore\View{trait GettersSetters{public static function CreateInstance(){$result=new static();return$result;}public static function GetExtension(){return static::$extension;}public static function SetExtension($extension='.phtml'){return static::$extension=$extension;}public static function GetDoctype(){return static::$doctype;}public static function SetDoctype($doctype=\MvcCore\IView::DOCTYPE_HTML5){return static::$doctype=$doctype;}public static function GetLayoutsDir(){return static::$layoutsDir;}public static function SetLayoutsDir($layoutsDir='Layouts'){return static::$layoutsDir=$layoutsDir;}public static function GetScriptsDir(){return static::$scriptsDir;}public static function SetScriptsDir($scriptsDir='Scripts'){return static::$scriptsDir=$scriptsDir;}public function SetController(\MvcCore\IController$controller){$this->controller=$controller;return$this;}public function GetController(){return$this->controller;}public function SetUpRender($renderMode=\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT,$controllerOrActionNameDashed=NULL,$actionNameDashed=NULL){$this->__protected['renderArgs']=func_get_args();$helpers=&$this->__protected['helpers'];$router=$this->controller->GetRouter();if(!isset($helpers['url']))$helpers['url']=function($controllerActionOrRouteName='Index:Index',array$params=[])use(&$router){return$router->Url($controllerActionOrRouteName,$params);};if(!isset($helpers['assetUrl']))$helpers['assetUrl']=function($path='')use(&$router){return$router->Url('Controller:Asset',['path'=>$path]);};foreach(self::$_globalHelpers as$helperNamePascalCase=>$helperRecord){$helperNameCamelCase=lcfirst($helperNamePascalCase);if(isset($helpers[$helperNameCamelCase]))continue;$instance=&$helperRecord[0];$implementsIHelper=$helperRecord[1];$needsClosureFn=$helperRecord[2];if($implementsIHelper)$instance->SetView($this);if($needsClosureFn){$helpers[$helperNameCamelCase]=function()use(&$instance,$helperNamePascalCase){return call_user_func_array([$instance,$helperNamePascalCase],func_get_args());};}else{$helpers[$helperNameCamelCase]=&$instance;}}return$this;}}}
namespace MvcCore\Config{trait ReadWrite{public static function CreateInstance(array$data=[],$appRootRelativePath=NULL){$instance=new static();if($data)$instance->data=&$data;if($appRootRelativePath){$app=self::$app?:self::$app=\MvcCore\Application::GetInstance();$appRoot=self::$appRoot?:self::$appRoot=$app->GetRequest()->GetAppRoot();$instance->fullPath=$appRoot.'/'.str_replace('%appPath%',$app->GetAppDir(),ltrim($appRootRelativePath,'/'));}return$instance;}public static function GetSystem(){$app=self::$app?:self::$app=\MvcCore\Application::GetInstance();$systemConfigClass=$app->GetConfigClass();$appRootRelativePath=$systemConfigClass::GetSystemConfigPath();if(!isset(self::$configsCache[$appRootRelativePath]))self::$configsCache[$appRootRelativePath]=self::getConfigInstance($appRootRelativePath,TRUE);return self::$configsCache[$appRootRelativePath];}public static function GetConfig($appRootRelativePath){if(!isset(self::$configsCache[$appRootRelativePath])){$app=self::$app?:self::$app=\MvcCore\Application::GetInstance();$systemConfigClass=$app->GetConfigClass();$system=$systemConfigClass::GetSystemConfigPath()==='/'.ltrim($appRootRelativePath,'/');self::$configsCache[$appRootRelativePath]=self::getConfigInstance($appRootRelativePath,$system);}return self::$configsCache[$appRootRelativePath];}public function Save(){$rawContent=$this->Dump();if($rawContent===FALSE)throw new\Exception('Configuration data was not possible to dump.');$app=self::$app?:self::$app=\MvcCore\Application::GetInstance();$toolClass=$app->GetToolClass();try{$toolClass::SingleProcessWrite($this->fullPath,$rawContent,'w',10,5000,30000);}catch(\Exception$ex){throw$ex;}return TRUE;}protected static function getConfigInstance($appRootRelativePath,$systemConfig=FALSE){$app=self::$app?:self::$app=\MvcCore\Application::GetInstance();$appRoot=self::$appRoot?:self::$appRoot=$app->GetRequest()->GetAppRoot();$fullPath=$appRoot.'/'.str_replace('%appPath%',$app->GetAppDir(),ltrim($appRootRelativePath,'/'));if(!\Packager_Php_Wrapper::FileExists($fullPath)){$result=FALSE;}else{$systemConfigClass=$app->GetConfigClass();$result=$systemConfigClass::CreateInstance();if(!$result->Read($fullPath,$systemConfig))$result=FALSE;}return$result;}}}
namespace MvcCore\Response{trait Content{public function SetBody($body){$this->body=&$body;return$this;}public function PrependBody($body){$this->body=$body.$this->body;return$this;}public function AppendBody($body){$this->body.=$body;return$this;}public function&GetBody(){return$this->body;}public function IsHtmlOutput(){if(isset($this->headers['Content-Type'])){$value=$this->headers['Content-Type'];return strpos($value,'text/html')!==FALSE||strpos($value,'application/xhtml+xml')!==FALSE;}return FALSE;}public function IsXmlOutput(){if(isset($this->headers['Content-Type'])){$value=$this->headers['Content-Type'];return strpos($value,'xml')!==FALSE;}return FALSE;}public function IsSentBody(){return$this->bodySent;}public function Send(){$this->SendHeaders();$this->SendBody();}public function SendHeaders(){if(headers_sent())return;$httpVersion=$this->GetHttpVersion();$code=$this->GetCode();$status=$this->codeMessage!==NULL?' '.$this->codeMessage:(isset(static::$codeMessages[$code])?' '.static::$codeMessages[$code]:'');if(!isset($this->headers['Content-Encoding'])){if(!$this->encoding)$this->encoding='utf-8';$this->headers['Content-Encoding']=$this->encoding;}$this->UpdateHeaders();header($httpVersion.' '.$code.$status);header('Host: '.$this->request->GetHost());foreach($this->headers as$name=>$value){if($name=='Content-Type'){$charsetMatched=FALSE;$charsetPos=strpos($value,'charset');if($charsetPos!==FALSE){$equalPos=strpos($value,'=',$charsetPos);if($equalPos!==FALSE)$charsetMatched=TRUE;}if(!$charsetMatched)$value.=';charset='.$this->encoding;}if(isset($this->disabledHeaders[$name])){header_remove($name);}else{header($name.": ".$value);}}foreach($this->disabledHeaders as$name=>$b)header_remove($name);$this->addTimeAndMemoryHeader();}public function SendBody(){if($this->bodySent)return;echo $this->body;if(ob_get_level())ob_end_flush();flush();$this->bodySent=TRUE;}protected function addTimeAndMemoryHeader(){$headerName=static::HEADER_X_MVCCORE_CPU_RAM;if(isset($this->disabledHeaders[$headerName]))return;$mtBegin=$this->request->GetMicrotime();$time=number_format((microtime(TRUE)-$mtBegin)*1000,1,'.',' ');$ram=function_exists('memory_get_peak_usage')?number_format(memory_get_peak_usage()/1000000,2,'.',' '):'n/a';header("$headerName: $time ms, $ram MB");}}}
namespace MvcCore\Response{trait Cookies{public function SetCookie($name,$value,$lifetime=0,$path='/',$domain=NULL,$secure=NULL,$httpOnly=TRUE){if($this->IsSentHeaders())throw new\RuntimeException("[".get_class()."] Cannot set cookie after HTTP headers have been sent.");$request=\MvcCore\Application::GetInstance()->GetRequest();return\setcookie($name,$value,$lifetime===0?0:time()+$lifetime,$path,$domain===NULL?$request->GetHostName():$domain,$secure===NULL?$request->IsSecure():$secure,$httpOnly);}public function DeleteCookie($name,$path='/',$domain=NULL,$secure=NULL){return$this->SetCookie($name,'',0,$path,$domain,$secure);}}}
namespace MvcCore\Response{trait Headers{public function IsSentHeaders(){return headers_sent();}public function SetHeaders(array$headers=[],$cleanAllPrevious=FALSE){if($cleanAllPrevious){header_remove();$this->headers=[];}foreach($headers as$name=>$value){$this->SetHeader($name,$value);}return$this;}public function SetHeader($name,$value){if(isset($this->disabledHeaders[$name]))return$this;header($name.": ".$value);$this->headers[$name]=$value;if($name==='Content-Type'){$charsetPos=strpos($value,'charset');if($charsetPos!==FALSE){$equalPos=strpos($value,'=',$charsetPos);if($equalPos!==FALSE)$this->SetEncoding(trim(substr($value,$equalPos+1)));}}if($name==='Content-Encoding')$this->encoding=$value;return$this;}public function GetHeader($name){return isset($this->headers[$name])?$this->headers[$name]:NULL;}public function HasHeader($name){return isset($this->headers[$name]);}public function UpdateHeaders(){$rawHeaders=headers_list();$name='';$value='';foreach($rawHeaders as$rawHeader){$doubleDotPos=strpos($rawHeader,':');if($doubleDotPos!==FALSE){$name=trim(substr($rawHeader,0,$doubleDotPos));$value=trim(substr($rawHeader,$doubleDotPos+1));}else{$name=$rawHeader;$value='';}if(!isset($this->disabledHeaders[$name]))$this->headers[$name]=$value;}}public function SetDisabledHeaders($disabledHeaders){$this->disabledHeaders=[];$args=func_get_args();if(count($args)===1&&is_array($args[0]))$args=$args[0];foreach($args as$arg)$this->disabledHeaders[$arg]=TRUE;return$this;}public function GetDisabledHeaders(){return array_keys($this->disabledHeaders);}}}
namespace MvcCore\Response{trait Instancing{public static function CreateInstance($code=NULL,$headers=[],$body=''){$code=$code?:\MvcCore\IResponse::OK;$responseClass=\MvcCore\Application::GetInstance()->GetResponseClass();return new$responseClass($code,$headers,$body);}public function __construct($code=NULL,$headers=[],$body=''){$this->code=$code?:\MvcCore\IResponse::OK;$this->headers=$headers;$this->body=$body;$this->request=\MvcCore\Application::GetInstance()->GetRequest();}}}
namespace MvcCore\Config{trait PropsGettersSetters{protected static$configsCache=[];protected static$environmentsSectionName='environments';protected static$app;protected static$appRoot;protected$data=[];protected$fullPath=NULL;protected$lastChanged=0;protected$system=FALSE;protected$objectTypes=[];public static function GetSystemConfigPath(){return static::$systemConfigPath;}public static function SetSystemConfigPath($systemConfigPath){return static::$systemConfigPath=$systemConfigPath;}public static function SetConfigCache($appRootRelativePath,\MvcCore\IConfig$configInstance){return static::$configsCache[$appRootRelativePath]=$configInstance;}public function&GetData(){return$this->data;}public function SetData(array$data=[]){$this->data=$data;return$this;}public function GetFullPath(){return$this->fullPath;}public function GetLastChanged(){return$this->lastChanged;}public function IsSystem(){return$this->system;}}}
namespace MvcCore\View{trait Props{protected$controller=NULL;protected$__protected=['content'=>'','store'=>[],'helpers'=>[],'renderArgs'=>[\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT,NULL,NULL],'renderedFullPaths'=>[],'reflectionTypes'=>[],'reflectionName'=>NULL,];protected static$extension='.phtml';protected static$doctype=self::DOCTYPE_HTML5;protected static$layoutsDir='Layouts';protected static$scriptsDir='Scripts';protected static$helpersDir='Helpers';protected static$helpersNamespaces=[];private static$_globalHelpers=[];private static$_viewScriptsFullPathBase=NULL;private static$_toolClass=NULL;}}
namespace MvcCore\Ext\Auths\Basic{trait PropsGettersSetters{protected static$instance=NULL;protected static$toolClass=NULL;protected static$nonConfigurationProperties=['userInitialized','application','user','form',];protected$expirationSeconds=600;protected$userClass='MvcCore\Ext\Auths\Basics\User';protected$roleClass='MvcCore\Ext\Auths\Basics\Role';protected$controllerClass='//MvcCore\Ext\Auths\Basics\Controller';protected$signInFormClass='MvcCore\Ext\Auths\Basics\SignInForm';protected$signOutFormClass='MvcCore\Ext\Auths\Basics\SignOutForm';protected$signedInUrl=NULL;protected$signedOutUrl=NULL;protected$signErrorUrl=NULL;protected$signInRoute=['name'=>'auth_signin','match'=>'#^/signin/?$#','reverse'=>'/signin','method'=>\MvcCore\IRequest::METHOD_POST];protected$signOutRoute=['name'=>'auth_signout','match'=>'#^/signout/?$#','reverse'=>'/signout','method'=>\MvcCore\IRequest::METHOD_POST];protected$passwordHashSalt=NULL;protected$invalidCredentialsTimeout=3;protected$translator=NULL;protected$preHandlersPriority=100;protected$application=NULL;protected$user=NULL;protected$form=NULL;protected$userInitialized=FALSE;protected$addRoutesForAnyRequestMethod=FALSE;public function GetExpirationSeconds(){return$this->expirationSeconds;}public function GetUserClass(){return$this->userClass;}public function GetRoleClass(){return$this->roleClass;}public function GetControllerClass(){return$this->controllerClass;}public function GetSignInFormClass(){return$this->signInFormClass;}public function GetSignOutFormClass(){return$this->signOutFormClass;}public function GetSignedInUrl(){return$this->signedInUrl;}public function GetSignedOutUrl(){return$this->signedOutUrl;}public function GetSignErrorUrl(){return$this->signErrorUrl;}public function GetSignInRoute(){return$this->getInitializedRoute('SignIn');}public function GetSignOutRoute(){return$this->getInitializedRoute('SignOut');}public function GetPasswordHashSalt(){return$this->passwordHashSalt;}public function GetInvalidCredentialsTimeout(){return$this->invalidCredentialsTimeout;}public function GetTranslator(){return$this->translator;}public function GetUser(){if(!$this->userInitialized&&$this->user===NULL){$configuredUserClass=$this->userClass;$this->user=$configuredUserClass::SetUpUserBySession();if($this->user!==NULL)$this->user->SetPasswordHash(NULL);$this->userInitialized=TRUE;}return$this->user;}public function IsAuthenticated(){return$this->GetUser()!==NULL;}public function GetForm(){if($this->IsAuthenticated()){$form=$this->GetSignOutForm();}else{$form=$this->GetSignInForm();}return$form;}public function GetSignInForm(){if($this->form!==NULL)return$this->form;$routerClass=$this->application->GetRouterClass();$router=$routerClass::GetInstance();$route=$this->getInitializedRoute('SignIn')->SetRouter($router);$method=$route->GetMethod();$appCtrl=$this->application->GetController();$formClassType=new\ReflectionClass($this->signInFormClass);$this->form=$formClassType->newInstanceArgs([$appCtrl]);$this->form->AddCssClasses(str_replace('_',' ',$this->form->GetId()))->SetMethod($method!==NULL?$method:\MvcCore\IRequest::METHOD_POST)->SetAction($router->UrlByRoute($route))->SetSuccessUrl($this->signedInUrl)->SetErrorUrl($this->signErrorUrl);if($this->translator)$this->form->SetTranslator($this->translator);$this->form->Init();return$this->form;}public function GetSignOutForm(){if($this->form!==NULL)return$this->form;$routerClass=$this->application->GetRouterClass();$router=$routerClass::GetInstance();$route=$this->getInitializedRoute('SignOut')->SetRouter($router);$method=$route->GetMethod();$appCtrl=$this->application->GetController();$formClassType=new\ReflectionClass($this->signOutFormClass);$this->form=$formClassType->newInstanceArgs([$appCtrl]);$this->form->AddCssClasses(str_replace('_',' ',$this->form->GetId()))->SetMethod($method!==NULL?$method:\MvcCore\IRequest::METHOD_POST)->SetAction($router->UrlByRoute($route))->SetSuccessUrl($this->signedOutUrl)->SetErrorUrl($this->signErrorUrl);if($this->translator)$this->form->SetTranslator($this->translator);$this->form->Init();return$this->form;}public function GetConfiguration(){$result=[];$type=new\ReflectionClass($this);$props=$type->getProperties(\ReflectionProperty::IS_PUBLIC|\ReflectionProperty::IS_PROTECTED);foreach($props as$prop){if($prop->isStatic())continue;$name=$prop->getName();if(!in_array($name,static::$nonConfigurationProperties,TRUE))$result[$name]=$prop->getValue($this);}return$result;}public function SetExpirationSeconds($expirationSeconds=600){$this->expirationSeconds=$expirationSeconds;return$this;}public function SetUserClass($userClass=''){$this->userClass=$this->checkClassImplementation($userClass,'MvcCore\Ext\Auths\Basics\IUser',TRUE);return$this;}public function SetRoleClass($roleClass=''){$this->userClass=$this->checkClassImplementation($roleClass,'MvcCore\Ext\Auths\Basics\IRole',TRUE);return$this;}public function SetControllerClass($controllerClass=''){if(substr($controllerClass,0,2)=='//'){$controllerClassToCheck=substr($controllerClass,2);}else{$controllerClassToCheck=$controllerClass;}$controllerClassToCheck=$this->checkClassImplementation($controllerClassToCheck,'MvcCore\Ext\Auths\Basics\IController',FALSE);$controllerClassToCheck=$this->checkClassImplementation($controllerClassToCheck,'MvcCore\IController',TRUE);if($controllerClassToCheck)$this->controllerClass=$controllerClass;return$this;}public function SetSignInFormClass($signInFormClass=''){$this->signInFormClass=$this->checkClassImplementation($signInFormClass,'MvcCore\Ext\Auths\Basics\IForm',FALSE);return$this;}public function SetSignOutFormClass($signOutFormClass=''){$this->signOutFormClass=$this->checkClassImplementation($signOutFormClass,'MvcCore\Ext\Auths\Basics\IForm',FALSE);return$this;}public function SetSignedInUrl($signedInUrl=NULL){$this->signedInUrl=$signedInUrl;return$this;}public function SetSignedOutUrl($signedOutUrl=NULL){$this->signedOutUrl=$signedOutUrl;return$this;}public function SetSignErrorUrl($signErrorUrl=NULL){$this->signErrorUrl=$signErrorUrl;return$this;}public function SetSignInRoute($signInRoute=NULL){$this->signInRoute=$signInRoute;$method=NULL;if(gettype($signInRoute)=='array'&&isset($signInRoute['method']))$method=strtoupper($signInRoute['method']);if($signInRoute instanceof\MvcCore\IRoute)$method=$signInRoute->GetMethod();if($method!==\MvcCore\IRequest::METHOD_POST)$this->addRoutesForAnyRequestMethod=TRUE;return$this;}public function SetSignOutRoute($signOutRoute=NULL){$this->signOutRoute=$signOutRoute;$method=NULL;if(gettype($signOutRoute)=='array'&&isset($signOutRoute['method']))$method=strtoupper($signOutRoute['method']);if($signOutRoute instanceof\MvcCore\IRoute)$method=$signOutRoute->GetMethod();if($method!==\MvcCore\IRequest::METHOD_POST)$this->addRoutesForAnyRequestMethod=TRUE;return$this;}public function SetPasswordHashSalt($passwordHashSalt=''){$this->passwordHashSalt=$passwordHashSalt;return$this;}public function SetInvalidCredentialsTimeout($seconds=3){$this->invalidCredentialsTimeout=$seconds;return$this;}public function SetTranslator(callable$translator=NULL){$this->translator=$translator;return$this;}public function SetUser(\MvcCore\Ext\Auths\Basics\IUser$user=NULL){$this->user=$user;if($this->user!==NULL)$this->user->SetPasswordHash(NULL);$this->userInitialized=TRUE;return$this;}public function SetForm(\MvcCore\Ext\Auths\Basics\IForm$form){$this->form=$form;return$this;}public function SetConfiguration($configuration=[],$throwExceptionIfPropertyIsMissing=TRUE){foreach($configuration as$key=>$value){$setter='Set'.ucfirst($key);if(method_exists($this,$setter)){$this->{$setter}($value);}else if($throwExceptionIfPropertyIsMissing){throw new\InvalidArgumentException('['.get_class().'] Property `'.$key.'` has no setter method `'.$setter.'` in class `'.get_class($this).'`.');}}return$this;}public function SetTableStructureForDbUsers($tableName=NULL,$columnNames=NULL){$userClass=$this->userClass;$toolClass=static::$toolClass;if($toolClass::CheckClassInterface($userClass,'MvcCore\Ext\Auths\Basics\IDatabaseUser',TRUE,TRUE)){$userClass::SetUsersTableStructure($tableName,$columnNames);};return$this;}protected function checkClassImplementation($testClassName,$interfaceName,$checkStaticMethods=FALSE){$toolClass=static::$toolClass;if($toolClass::CheckClassInterface($testClassName,$interfaceName,$checkStaticMethods,TRUE)){return$testClassName;}return'';}}}
namespace MvcCore{interface IDebug{const DEBUG='debug',INFO='info',WARNING='warning',ERROR='error',EXCEPTION='exception',CRITICAL='critical',JAVASCRIPT='javascript';public static function Init($forceDevelopmentMode=NULL);public static function Timer($name=NULL);public static function Dump($value,$return=FALSE,$exit=FALSE);public static function BarDump($value,$title=NULL,$options=[]);public static function Log($value,$priority=\MvcCore\IDebug::INFO);public static function Exception($exception,$exit=TRUE);public static function ShutdownHandler();}}
namespace MvcCore{interface IView{const RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT=0b01;const RENDER_WITHOUT_OB_CONTINUOUSLY=0b10;const DOCTYPE_HTML4='HTML4';const DOCTYPE_XHTML='XHTML';const DOCTYPE_HTML5='HTML5';const DOCTYPE_XML='XML';const HELPERS_INTERFACE_CLASS_NAME='MvcCore\\Ext\\Views\\Helpers\\IHelper';public static function CreateInstance();public static function GetExtension();public static function SetExtension($extension='.phtml');public static function GetDoctype();public static function SetDoctype($doctype=\MvcCore\IView::DOCTYPE_HTML5);public static function GetLayoutsDir();public static function SetLayoutsDir($layoutsDir='Layouts');public static function GetScriptsDir();public static function SetScriptsDir($scriptsDir='Scripts');public static function GetHelpersDir();public static function SetHelpersDir($helpersDir='Helpers');public static function AddHelpersNamespaces($helperNamespaces);public static function SetHelpersNamespaces($helperNamespaces);public static function GetViewScriptFullPath($typePath='',$corectedRelativePath='');public function SetController(\MvcCore\IController$controller);public function GetController();public function SetUpRender($renderMode=\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT,$controllerOrActionNameDashed=NULL,$actionNameDashed=NULL);public function SetUpStore(\MvcCore\IView$view,$overwriteExistingKeys=TRUE);public function&GetContent();public function GetCurrentViewFullPath();public function GetCurrentViewDirectory();public function GetParentViewFullPath();public function GetParentViewDirectory();public function&RenderScript($relativePath='');public function&RenderLayout($relativePath='');public function&RenderLayoutAndContent($relativePath='',&$content=NULL);public function&Render($typePath='',$relativePath='');public function Evaluate($content);public function Url($controllerActionOrRouteName='Index:Index',array$params=[]);public function AssetUrl($path='');public function&GetHelper($helperNameCamelCase);public function SetHelper($helperNameCamelCase,$instance,$forAllTemplates=TRUE);public function __set($name,$value);public function __get($name);public function __isset($name);public function __unset($name);public function __call($method,$arguments);}}
namespace MvcCore{interface ITool{public static function GetDashedFromPascalCase($pascalCase='');public static function GetPascalCaseFromDashed($dashed='');public static function GetUnderscoredFromPascalCase($pascalCase='');public static function GetPascalCaseFromUnderscored($underscored='');public static function EncodeJson($data);public static function DecodeJson($jsonStr);public static function IsJsonString($jsonStr);public static function IsQueryString($queryStr);public static function GetSystemTmpDir();public static function Invoke($internalFnOrHandler,array$args,callable$onError);public static function SingleProcessWrite($fullPath,$content,$writeMode='w',$lockWaitMilliseconds=100,$maxLockWaitMilliseconds=5000,$oldLockMillisecondsTolerance=30000);public static function CheckClassInterface($testClassName,$interfaceName,$checkStaticMethods=FALSE,$throwException=TRUE);public static function CheckClassTrait($testClassName,$traitName,$throwException=TRUE);}}
namespace MvcCore{interface ISession{const SESSION_METADATA_KEY='__MC';const DEFAULT_NAMESPACE_NAME='default';const EXPIRATION_SECONDS_MINUTE=60;const EXPIRATION_SECONDS_HOUR=3600;const EXPIRATION_SECONDS_DAY=86400;const EXPIRATION_SECONDS_WEEK=604800;const EXPIRATION_SECONDS_MONTH=2592000;const EXPIRATION_SECONDS_YEAR=31536000;public static function Start();public static function GetSessionStartTime();public static function GetSessionMetadata();public static function Close();public static function GetNamespace($name=\MvcCore\ISession::DEFAULT_NAMESPACE_NAME);public function SetExpirationHoops($hoops);public function SetExpirationSeconds($seconds);public static function SendCookie();public function Destroy();public static function DestroyAll();public function __isset($key);public function __unset($key);public function __get($key);public function __set($key,$value);public function count();public function getIterator();public function offsetSet($offset,$value);public function offsetGet($offset);public function offsetExists($offset);public function offsetUnset($offset);}}
namespace MvcCore{interface IRouter{const DEFAULT_ROUTE_NAME='default';const DEFAULT_ROUTE_NAME_ERROR='error';const DEFAULT_ROUTE_NAME_NOT_FOUND='not_found';const TRAILING_SLASH_ALWAYS=1;const TRAILING_SLASH_BENEVOLENT=0;const TRAILING_SLASH_REMOVE=-1;const URL_PARAM_CONTROLLER='controller';const URL_PARAM_ACTION='action';const URL_PARAM_ABSOLUTE='absolute';const URL_PARAM_HOST='host';const URL_PARAM_DOMAIN='domain';const URL_PARAM_TLD='tld';const URL_PARAM_SLD='sld';const URL_PARAM_BASEPATH='basePath';const URL_PARAM_PATH='path';public static function GetInstance(array$routes=[],$autoInitialize=TRUE);public function SetRoutes($routes=[],$autoInitialize=TRUE);public function AddRoutes(array$routes=[],$prepend=FALSE,$throwExceptionForDuplication=TRUE);public function AddRoute($routeCfgOrRoute,$groupName=NULL,$prepend=FALSE,$throwExceptionForDuplication=TRUE);public function HasRoute($routeOrRouteName);public function RemoveRoute($routeName);public function GetRoute($routeName);public function GetRoutes();public function GetRequest();public function SetRequest(\MvcCore\IRequest$request);public function SetRouteByQueryString($routeByQueryString=TRUE);public function GetRouteByQueryString();public function SetCurrentRoute(\MvcCore\IRoute$currentRoute);public function GetCurrentRoute();public function GetRouteToDefaultIfNotMatch();public function SetRouteToDefaultIfNotMatch($enable=TRUE);public function&GetDefaultParams();public function&GetRequestedParams();public function GetTrailingSlashBehaviour();public function SetTrailingSlashBehaviour($trailingSlashBehaviour=-1);public function GetAutoCanonizeRequests();public function SetAutoCanonizeRequests($autoCanonizeRequests=TRUE);public function SetPreRouteMatchingHandler(callable$preRouteMatchingHandler=NULL);public function GetPreRouteMatchingHandler();public function SetPreRouteUrlBuildingHandler(callable$preRouteUrlBuildingHandler=NULL);public function GetPreRouteUrlBuildingHandler();public function Route();public function RedefineRoutedTarget($controllerNamePc=NULL,$actionNamePc=NULL,$changeSelfRoute=FALSE);public function Url($controllerActionOrRouteName='Index:Index',array$params=[]);public function UrlByQueryString($controllerActionOrRouteName='Index:Index',array&$params=[],$givenRouteName=NULL);public function UrlByRoute(\MvcCore\IRoute$route,array&$params=[],$urlParamRouteName=NULL);public function SetOrCreateDefaultRouteAsCurrent($routeName,$controllerPc,$actionPc,$fallbackCall=FALSE);}}
namespace MvcCore{interface IRoute{const CONFIG_FILTER_IN='in';const CONFIG_FILTER_OUT='out';const CONFIG_METHOD='method';const CONFIG_REDIRECT='redirect';const CONFIG_ABSOLUTE='absolute';const FLAG_SCHEME_NO=0;const FLAG_SCHEME_ANY=2;const FLAG_SCHEME_HTTP=7;const FLAG_SCHEME_HTTPS=8;const FLAG_QUERY_NO=0;const FLAG_QUERY_INCL=1;const FLAG_HOST_NO=0;const FLAG_HOST_HOST=1;const FLAG_HOST_DOMAIN=2;const FLAG_HOST_TLD=3;const FLAG_HOST_SLD=4;const FLAG_HOST_BASEPATH=10;const PLACEHOLDER_HOST='%host%';const PLACEHOLDER_DOMAIN='%domain%';const PLACEHOLDER_TLD='%tld%';const PLACEHOLDER_SLD='%sld%';const PLACEHOLDER_BASEPATH='%basePath%';public static function CreateInstance($patternOrConfig=NULL,$controllerAction=NULL,$defaults=[],$constraints=[],$method=NULL);public function GetPattern();public function SetPattern($pattern);public function GetMatch();public function SetMatch($match);public function GetReverse();public function SetReverse($reverse);public function GetName();public function SetName($name);public function GetController();public function SetController($controller);public function GetAction();public function SetAction($action);public function GetControllerAction();public function SetControllerAction($controllerAction);public function&GetDefaults();public function SetDefaults($defaults=[]);public function GetConstraints();public function SetConstraints($constraints=[]);public function&GetFilters();public function SetFilters(array$filters=[]);public function GetFilter($direction=\MvcCore\IRoute::CONFIG_FILTER_IN);public function SetFilter($handler,$direction=\MvcCore\IRoute::CONFIG_FILTER_IN);public function GetMethod();public function SetMethod($method=NULL);public function GetRedirect();public function SetRedirect($redirectRouteName=NULL);public function GetAbsolute();public function SetAbsolute($absolute=TRUE);public function GetGroupName();public function SetGroupName($groupName);public function GetReverseParams();public function SetMatchedParams($matchedParams=[]);public function&GetMatchedParams();public function GetRouter();public function SetRouter(\MvcCore\IRouter$router);public function GetAdvancedConfigProperty($propertyName);public function&Matches(\MvcCore\IRequest$request);public function Filter(array&$params=[],array&$defaultParams=[],$direction=\MvcCore\IRoute::CONFIG_FILTER_IN);public function Url(\MvcCore\IRequest$request,array&$params=[],array&$defaultUrlParams=[],$queryStringParamsSepatator='&',$splitUrl=FALSE);public function InitAll();}}
namespace MvcCore{interface IResponse{const OK=200;const MOVED_PERMANENTLY=301;const SEE_OTHER=303;const NOT_FOUND=404;const INTERNAL_SERVER_ERROR=500;const HEADER_X_MVCCORE_CPU_RAM='X-MvcCore-Cpu-Ram';public static function CreateInstance($code=NULL,$headers=[],$body='');public function GetHttpVersion();public function SetHttpVersion($httpVersion);public function SetCode($code,$codeMessage=NULL);public function GetCode();public function SetHeaders(array$headers=[]);public function SetHeader($name,$value);public function GetHeader($name);public function HasHeader($name);public function SetEncoding($encoding='utf-8');public function GetEncoding();public function SetBody($body);public function PrependBody($body);public function AppendBody($body);public function&GetBody();public function UpdateHeaders();public function IsRedirect();public function IsHtmlOutput();public function IsXmlOutput();public function IsSent();public function IsSentHeaders();public function IsSentBody();public function Send();public function SendHeaders();public function SendBody();public function SetCookie($name,$value,$lifetime=0,$path='/',$domain=NULL,$secure=NULL,$httpOnly=TRUE);public function DeleteCookie($name,$path='/',$domain=NULL,$secure=NULL);public function SetDisabledHeaders($disabledHeaders);public function GetDisabledHeaders();}}
namespace MvcCore{interface IRequest{const SCHEME_HTTP='http:';const SCHEME_HTTPS='https:';const SCHEME_FTP='ftp:';const SCHEME_FTPS='ftps:';const SCHEME_IRC='irc:';const SCHEME_IRCS='ircs:';const SCHEME_MAILTO='mailto:';const SCHEME_FILE='file:';const SCHEME_DATA='data:';const SCHEME_TEL='tel:';const SCHEME_TELNET='telnet:';const SCHEME_LDAP='ldap:';const SCHEME_SSH='ssh:';const SCHEME_RTSP='rtsp:';const SCHEME_RTP='rtp:';const METHOD_GET='GET';const METHOD_POST='POST';const METHOD_PUT='PUT';const METHOD_DELETE='DELETE';const METHOD_HEAD='HEAD';const METHOD_OPTIONS='OPTIONS';const METHOD_PATCH='PATCH';const PARAM_FILTER_ALPHABETS='a-zA-Z';const PARAM_FILTER_ALPHABETS_LOWER='a-z';const PARAM_FILTER_ALPHABETS_UPPER='A-Z';const PARAM_FILTER_ALPHABETS_DIGITS='a-zA-Z0-9';const PARAM_FILTER_ALPHABETS_PUNCT='a-zA-Z\-\.\, ;`"\'\:\?\!';const PARAM_FILTER_ALPHABETS_NUMERICS_PUNCT='a-zA-Z0-9\+\-\.\, ;`"\'\:\?\!';const PARAM_FILTER_ALPHABETS_NUMERICS_PUNCT_SPECIAL='a-zA-Z0-9\+\-\.\, ;`"\'\:\?\!%_/@~\#\&\$\[\]\(\)\{\}\|\=\*\^';const PARAM_FILTER_PUNCT='\-\.\, ;`"\'\:\?\!';const PARAM_FILTER_SPECIAL='%_/@~\#\&\$\[\]\(\)\{\}\|\=\*\^';const PARAM_FILTER_DIGITS='0-9';const PARAM_FILTER_NUMERICS='-\+0-9\.\,';public static function AddTwoSegmentTlds($twoSegmentTlds);public static function CreateInstance(array&$server=[],array&$get=[],array&$post=[],array&$cookie=[],array&$files=[]);public function&GetGlobalCollection($type);public function SetHeaders(array&$headers=[]);public function&GetHeaders($pregReplaceAllowedChars=['#[\<\>\'"]#','']);public function SetHeader($name='',$value='');public function GetHeader($name='',$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\.\@\=\+\?\!",$ifNullValue=NULL,$targetType=NULL);public function HasHeader($name='');public function SetParams(array&$params=[]);public function&GetParams($pregReplaceAllowedChars=['#[\<\>\'"]#',''],$onlyKeys=[]);public function SetParam($name='',$value='');public function RemoveParam($name='');public function GetParam($name='',$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\@\:",$ifNullValue=NULL,$targetType=NULL);public function HasParam($name='');public function SetFiles(array&$files=[]);public function&GetFiles();public function SetFile($file='',$data=[]);public function GetFile($file='');public function HasFile($file='');public function SetCookies(array&$cookies=[]);public function&GetCookies($pregReplaceAllowedChars=['#[\<\>\'"]#',''],$onlyKeys=[]);public function SetCookie($name='',$value='');public function GetCookie($name='',$pregReplaceAllowedChars="a-zA-Z0-9_;, /\-\.\@\=\+\?\!",$ifNullValue=NULL,$targetType=NULL);public function HasCookie($name='');public function InitAll();public function IsInternalRequest();public function SetControllerName($controllerName);public function GetControllerName();public function SetActionName($actionName);public function GetActionName();public function IsCli();public function SetLang($lang);public function GetLang();public function SetLocale($locale);public function GetLocale();public function SetMediaSiteVersion($mediaSiteVersion);public function GetMediaSiteVersion();public function __call($name,$arguments=[]);public function __get($name);public function __set($name,$value);public function GetScriptName();public function GetAppRoot();public function SetMethod($rawMethod);public function GetMethod();public function SetBasePath($rawBasePath);public function GetBasePath();public function SetScheme($rawProtocol);public function GetScheme();public function IsSecure();public function GetReferer($rawInput=FALSE);public function GetMicrotime();public function SetTopLevelDomain($topLevelDomain);public function GetTopLevelDomain();public function SetSecondLevelDomain($secondLevelDomain);public function GetSecondLevelDomain();public function SetThirdLevelDomain($thirdLevelDomain);public function GetThirdLevelDomain();public function SetHostName($rawHostName);public function GetHostName();public function SetHost($rawHost);public function GetHost();public function SetPort($rawPort);public function GetPort();public function SetPath($rawPathValue);public function GetPath($rawInput=FALSE);public function SetQuery($rawQuery);public function GetQuery($withQuestionMark=FALSE,$rawInput=FALSE);public function GetRequestPath($rawInput=FALSE);public function GetDomainUrl();public function GetBaseUrl();public function GetRequestUrl($rawInput=FALSE);public function GetFullUrl($rawInput=FALSE);public function GetFragment($withHash=FALSE,$rawInput=FALSE);public function GetServerIp();public function GetClientIp();public function IsAjax();public function GetContentLength();public static function HtmlSpecialChars($str);}}
namespace MvcCore\View{trait ViewHelpers{public static function GetHelpersDir(){return static::$helpersDir;}public static function SetHelpersDir($helpersDir='Helpers'){return static::$helpersDir=$helpersDir;}public static function AddHelpersNamespaces($helperNamespaces){if(!static::$helpersNamespaces)self::initHelpersNamespaces();$args=func_get_args();if(count($args)===1&&is_array($args[0]))$args=$args[0];foreach($args as$arg)static::$helpersNamespaces[]='\\'.trim($arg,'\\').'\\';}public static function SetHelpersNamespaces($helperNamespaces){static::$helpersNamespaces=[];$args=func_get_args();if(count($args)===1&&is_array($args[0]))$args=$args[0];foreach($args as$arg)static::$helpersNamespaces[]='\\'.trim($arg,'\\').'\\';}public function __call($method,$arguments){$result='';$methodCamelCase=lcfirst($method);$instance=&$this->GetHelper($methodCamelCase);$isObject=is_object($instance);if($instance instanceof\Closure||($isObject&&method_exists($instance,'__invoke'))){$result=call_user_func_array($instance,$arguments);}else if($isObject&&method_exists($instance,$method)){$result=call_user_func_array([$instance,$method],$arguments);}else{throw new\InvalidArgumentException("[".get_class()."] View class instance has no method '{$method}', no view helper found.");}$this->__protected['helpers'][$methodCamelCase]=&$instance;return$result;}public function&GetHelper($helperNameCamelCase){$setUpView=FALSE;$needsClosureFn=FALSE;$instance=NULL;$helpers=&$this->__protected['helpers'];$helperNamePascalCase=ucfirst($helperNameCamelCase);if(isset($helpers[$helperNameCamelCase])){$instance=&$helpers[$helperNameCamelCase];}else if(isset(self::$_globalHelpers[$helperNamePascalCase])){$globalHelpersRecord=&self::$_globalHelpers[$helperNamePascalCase];$instance=&$globalHelpersRecord[0];$result=&$instance;$setUpView=$globalHelpersRecord[1];$needsClosureFn=$globalHelpersRecord[2];}else{$helperFound=FALSE;$toolClass=self::$_toolClass?:self::$_toolClass=\MvcCore\Application::GetInstance()->GetToolClass();$helpersInterface=self::HELPERS_INTERFACE_CLASS_NAME;if(!static::$helpersNamespaces)self::initHelpersNamespaces();foreach(static::$helpersNamespaces as$helperClassBase){$className=$helperClassBase.$helperNamePascalCase.'Helper';if(!class_exists($className))continue;$helperFound=TRUE;if($toolClass::CheckClassInterface($className,$helpersInterface,TRUE,FALSE)){$setUpView=TRUE;$instance=$className::GetInstance();}else{$instance=new$className();}$needsClosureFn=(!($instance instanceof\Closure)&&!method_exists($className,'__invoke'));self::$_globalHelpers[$helperNamePascalCase]=[&$instance,$setUpView,$needsClosureFn];break;}if(!$helperFound)throw new\InvalidArgumentException("[".get_class()."] View helper method '{$helperNamePascalCase}' is not"." possible to handle by any configured view helper (View"." helper namespaces: '".implode("', '",static::$helpersNamespaces)."').");}if($setUpView)$instance->SetView($this);if($needsClosureFn){$result=function()use(&$instance,$helperNamePascalCase){return call_user_func_array([$instance,$helperNamePascalCase],func_get_args());};$helpers[$helperNameCamelCase]=&$result;}else{$helpers[$helperNameCamelCase]=&$instance;$result=&$instance;}return$result;}public function SetHelper($helperNameCamelCase,$instance,$forAllTemplates=TRUE){$implementsIHelper=FALSE;if(self::$_toolClass===NULL)self::$_toolClass=\MvcCore\Application::GetInstance()->GetToolClass();$toolClass=self::$_toolClass;$helpersInterface=self::HELPERS_INTERFACE_CLASS_NAME;$className=get_class($instance);$implementsIHelper=$toolClass::CheckClassInterface($className,$helpersInterface,FALSE,FALSE);$helperNamePascalCase=ucfirst($helperNameCamelCase);$needsClosureFn=(!($instance instanceof\Closure)&&!method_exists($className,'__invoke'));if($forAllTemplates)self::$_globalHelpers[ucfirst($helperNameCamelCase)]=[&$instance,$implementsIHelper,$needsClosureFn];$helpers=&$this->__protected['helpers'];if($needsClosureFn){$helpers[$helperNameCamelCase]=function()use(&$instance,$helperNamePascalCase){return call_user_func_array([$instance,$helperNamePascalCase],func_get_args());};}else{$helpers[$helperNameCamelCase]=&$instance;}return$this;}}}
namespace MvcCore\View{trait UrlHelpers{public function Url($controllerActionOrRouteName='Index:Index',array$params=[]){return$this->controller->GetRouter()->Url($controllerActionOrRouteName,$params);}public function AssetUrl($path=''){return$this->controller->AssetUrl($path);}}}
namespace MvcCore\Ext\Auths\Basic{trait Handling{public static function GetInstance($configuration=[]){if(self::$instance===NULL){$result=new static($configuration);self::$instance=$result;}else{$result=self::$instance;}return$result;}public function __construct($config=[]){self::$instance=$this;if($config)$this->SetConfiguration($config);$this->application=\MvcCore\Application::GetInstance();static::$toolClass=$this->application->GetToolClass();$this->application->AddPreRouteHandler(function(){$this->preRouteHandler();},$this->preHandlersPriority)->AddPreDispatchHandler(function(){$this->preDispatchHandler();},$this->preHandlersPriority);}protected function preRouteHandler(){$this->GetUser();$this->preRouteHandlerSetUpUrlAdresses();if($this->addRoutesForAnyRequestMethod||$this->application->GetRequest()->GetMethod()==\MvcCore\IRequest::METHOD_POST){$this->preRouteHandlerSetUpRouter();}}protected function preDispatchHandler(){if($this->user!==NULL)$this->application->GetController()->SetUser($this->user);}protected function preRouteHandlerSetUpUrlAdresses(){$currentFullUrl=$this->application->GetRequest()->GetFullUrl();if($this->signedInUrl===NULL)$this->signedInUrl=$currentFullUrl;if($this->signedOutUrl===NULL)$this->signedOutUrl=$currentFullUrl;if($this->signErrorUrl===NULL)$this->signErrorUrl=$currentFullUrl;}protected function preRouteHandlerSetUpRouter(){$routerClass=$this->application->GetRouterClass();$router=$routerClass::GetInstance();$router->AddRoute($this->getInitializedRoute('SignIn'),NULL,TRUE);$router->AddRoute($this->getInitializedRoute('SignOut'),NULL,TRUE);}protected function getInitializedRoute($actionName){$routeName=lcfirst($actionName).'Route';$rawRoute=$this->{$routeName};if($rawRoute instanceof\MvcCore\IRoute){return$rawRoute;}else{$routerClass=$this->application->GetRouterClass();$router=$routerClass::GetInstance();$ctrlParamName=$router::URL_PARAM_CONTROLLER;$actionParamName=$router::URL_PARAM_ACTION;$routeInitData=[$ctrlParamName=>$this->controllerClass,$actionParamName=>$actionName];$routeClass=$this->application->GetRouteClass();$route=$routeClass::CreateInstance(gettype($rawRoute)=='array'?array_merge($routeInitData,$rawRoute):array_merge(['pattern'=>$rawRoute],$routeInitData));$this->{$routeName}=$route;return$route;}}}}
namespace MvcCore{interface IConfig{const ENVIRONMENT_DEVELOPMENT='dev';const ENVIRONMENT_ALPHA='alpha';const ENVIRONMENT_BETA='beta';const ENVIRONMENT_PRODUCTION='production';public static function IsDevelopment($autoloadSystemConfig=FALSE);public static function IsBeta($autoloadSystemConfig=FALSE);public static function IsAlpha($autoloadSystemConfig=FALSE);public static function IsProduction($autoloadSystemConfig=FALSE);public static function GetEnvironment();public static function SetEnvironment($environment=\MvcCore\IConfig::ENVIRONMENT_PRODUCTION);public static function EnvironmentDetectByIps();public static function EnvironmentDetectBySystemConfig(array$environmentsSectionData=[]);public static function GetSystemConfigPath();public static function SetSystemConfigPath($systemConfigPath);public static function CreateInstance(array$data=[],$appRootRelativePath=NULL);public static function GetSystem();public static function GetConfig($appRootRelativePath);public function Read($fullPath,$systemConfig=FALSE);public function Save();public function&GetData();public function SetData(array$data=[]);public function GetFullPath();public function GetLastChanged();public function IsSystem();public function __get($key);public function __set($key,$value);public function __isset($key);public function __unset($key);public function count();public function getIterator();public function offsetSet($offset,$value);public function offsetGet($offset);public function offsetExists($offset);public function offsetUnset($offset);}}
namespace MvcCore{interface IApplication{const COMPILED_PHP='PHP';const COMPILED_PHAR='PHAR';const COMPILED_SFU='SFU';const NOT_COMPILED='';public static function GetInstance();public function GetCompiled();public function GetConfigClass();public function GetControllerClass();public function GetDebugClass();public function GetRequestClass();public function GetResponseClass();public function GetRouteClass();public function GetRouterClass();public function GetSessionClass();public function GetToolClass();public function GetViewClass();public function GetRouter();public function GetController();public function GetRequest();public function GetResponse();public function GetAppDir();public function GetControllersDir();public function GetViewsDir();public function GetDefaultControllerAndActionNames();public function SetCompiled($compiled='');public function SetConfigClass($configClass);public function SetControllerClass($controllerClass);public function SetDebugClass($debugClass);public function SetRequestClass($requestClass);public function SetResponseClass($responseClass);public function SetRouteClass($routerClass);public function SetRouterClass($routerClass);public function SetSessionClass($sessionClass);public function SetToolClass($toolClass);public function SetViewClass($viewClass);public function SetAppDir($appDir);public function SetController(\MvcCore\IController$controller=NULL);public function SetControllersDir($controllersDir);public function SetViewsDir($viewsDir);public function SetDefaultControllerName($defaultControllerName);public function SetDefaultControllerDefaultActionName($defaultActionName);public function SetDefaultControllerErrorActionName($defaultControllerErrorActionName);public function SetDefaultControllerNotFoundActionName($defaultControllerNotFoundActionName);public function AddPreRouteHandler(callable$handler,$priorityIndex=NULL);public function AddPostRouteHandler(callable$handler,$priorityIndex=NULL);public function AddPreDispatchHandler(callable$handler,$priorityIndex=NULL);public function AddPostDispatchHandler(callable$handler,$priorityIndex=NULL);public function AddPostTerminateHandler(callable$handler,$priorityIndex=NULL);public function Run($singleFileUrl=FALSE);public function SessionStart();public function RouteRequest();public function ProcessCustomHandlers(&$handlers=[]);public function DispatchRequest();public function DispatchControllerAction($controllerClassFullName,$actionNamePc,$viewScriptFullPath,callable$exceptionCallback);public function Url($controllerActionOrRouteName='Index:Index',$params=[]);public function Terminate();public function DispatchException($exceptionOrMessage,$code=NULL);public function RenderError(\Throwable$e);public function RenderNotFound($exceptionMessage='');public function RenderError500PlainText($text='');public function RenderError404PlainText();public function GetDefaultControllerIfHasAction($actionName);public function CompleteControllerName($controllerNamePascalCase);public function IsErrorDispatched();public function IsNotFoundDispatched();}}
namespace MvcCore\View{trait Rendering{public function&RenderScript($relativePath=''){return$this->Render(static::$scriptsDir,$relativePath);}public function&RenderLayout($relativePath=''){return$this->Render(static::$layoutsDir,$relativePath);}public function&RenderLayoutAndContent($relativePath='',&$content=NULL){if($relativePath===NULL)return$content;$this->__protected['content']=&$content;return$this->Render(static::$layoutsDir,$relativePath);}public function&Render($typePath='',$relativePath=''){if(!$typePath)$typePath=static::$scriptsDir;$result='';$relativePath=$this->correctRelativePath($typePath,$relativePath);$viewScriptFullPath=static::GetViewScriptFullPath($typePath,$relativePath);if(!\Packager_Php_Wrapper::FileExists($viewScriptFullPath)){throw new\InvalidArgumentException("[".get_class()."] Template not found in path: `{$viewScriptFullPath}`.");}$renderedFullPaths=&$this->__protected['renderedFullPaths'];$renderedFullPaths[]=$viewScriptFullPath;list($renderMode)=$this->__protected['renderArgs'];$renderModeWithOb=($renderMode&\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT)!=0;if($renderModeWithOb)ob_start();$result=call_user_func(function($viewPath,$controller,$helpers){extract($helpers,EXTR_SKIP);unset($helpers);extract($this->__protected['store'],EXTR_SKIP);\Packager_Php_Wrapper::IncludeStandard(($viewPath),$this);},$viewScriptFullPath,$this->controller,$this->__protected['helpers']);if($renderModeWithOb){$result=ob_get_clean();\array_pop($renderedFullPaths);return$result;}else{$result='';\array_pop($renderedFullPaths);return$result;}}public static function GetViewScriptFullPath($typePath='',$corectedRelativePath=''){if(self::$_viewScriptsFullPathBase===NULL)self::initViewScriptsFullPathBase();return implode('/',[self::$_viewScriptsFullPathBase,$typePath,$corectedRelativePath.static::$extension]);}public function SetUpStore(\MvcCore\IView$view,$overwriteExistingKeys=TRUE){$currentStore=&$this->__protected['store'];$viewStore=&$view->__protected['store'];if($overwriteExistingKeys){$this->__protected['store']=array_merge($currentStore,$viewStore);}else{foreach($viewStore as$key=>&$value)if(!array_key_exists($key,$currentStore))$currentStore[$key]=&$value;}return$this;}public function&GetContent(){list($renderMode,$controllerOrActionNameDashed,$actionNameDashed)=$this->__protected['renderArgs'];$renderModeWithOb=($renderMode&\MvcCore\IView::RENDER_WITH_OB_FROM_ACTION_TO_LAYOUT)!=0;if($renderModeWithOb){return$this->__protected['content'];}else{$viewScriptPath=$this->controller->GetViewScriptPath($controllerOrActionNameDashed,$actionNameDashed);$viewClass=$this->controller->GetApplication()->GetViewClass();$actionView=$viewClass::CreateInstance()->SetController($this->controller)->SetUpStore($this,TRUE)->SetUpRender($renderMode,$controllerOrActionNameDashed,$actionNameDashed);$actionView->RenderScript($viewScriptPath);$result='';return$result;}}public function&Evaluate($content){if($content===NULL||mb_strlen(strval($content))===0)return'';ob_start();try{eval(' ?'.'>'.$content.'<'.'?php ');}catch(\Throwable$e){throw$e;}$content=ob_get_clean();return$content;}}}
namespace MvcCore\Debug{trait Props{public static$EmailRecepient='admin@localhost';public static$LogDirectory='~/Var/Logs';public static$InitGlobalShortHands=[];protected static$debugging=NULL;protected static$strictExceptionsMode=NULL;protected static$strictExceptionsModeDefaultLevels=[E_ERROR,E_RECOVERABLE_ERROR,E_CORE_ERROR,E_USER_ERROR,E_WARNING,E_CORE_WARNING,E_USER_WARNING];protected static$prevErrorHandler=NULL;protected static$systemConfigDebugProps=['sectionName'=>'debug','emailRecepient'=>'emailRecepient','logDirectory'=>'logDirectory','strictExceptions'=>'strictExceptions',];protected static$systemConfigDebugValues=NULL;protected static$handlers=['timer'=>'timerHandler','dump'=>'dumpHandler','barDump'=>'dumpHandler','log'=>'dumpHandler','exceptionHandler'=>'exceptionHandler','shutdownHandler'=>'ShutdownHandler',];protected static$dumps=[];protected static$timers=[];protected static$originalDebugClass=TRUE;protected static$logDirectoryInitialized=FALSE;protected static$app=NULL;protected static$requestBegin=0.0;}}
namespace MvcCore\Debug{trait Initializations{public static function Init($forceDevelopmentMode=NULL){if(static::$debugging!==NULL)return;if(self::$strictExceptionsMode===NULL)self::initStrictExceptionsMode(self::$strictExceptionsMode);$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());static::$requestBegin=$app->GetRequest()->GetMicrotime();if(gettype($forceDevelopmentMode)=='boolean'){static::$debugging=$forceDevelopmentMode;}else{$configClass=$app->GetConfigClass();static::$debugging=!$configClass::IsProduction(TRUE);}static::$originalDebugClass=ltrim($app->GetDebugClass(),'\\')==get_class();static::initHandlers();$initGlobalShortHandsHandler=static::$InitGlobalShortHands;$initGlobalShortHandsHandler(static::$debugging);}public static function SetStrictExceptionsMode($strictExceptionsMode,array$errorLevelsToExceptions=[]){if($strictExceptionsMode&&!self::$strictExceptionsMode){$errorLevels=array_fill_keys($errorLevelsToExceptions,TRUE);$allLevelsToExceptions=isset($errorLevels[E_ALL]);$prevErrorHandler=NULL;$prevErrorHandler=set_error_handler(function($errLevel,$errMessage,$errFile,$errLine,$errContext)use(&$prevErrorHandler,$errorLevels,$allLevelsToExceptions){if($errFile===''&&defined('HHVM_VERSION'))$errFile=func_get_arg(5)[1]['file'];if($allLevelsToExceptions||isset($errorLevels[$errLevel]))throw new\ErrorException($errMessage,$errLevel,$errLevel,$errFile,$errLine);return$prevErrorHandler?call_user_func_array($prevErrorHandler,func_get_args()):FALSE;});self::$prevErrorHandler=&$prevErrorHandler;}else if(!$strictExceptionsMode&&self::$strictExceptionsMode){if(self::$prevErrorHandler!==NULL){set_error_handler(self::$prevErrorHandler);}else{restore_error_handler();}}return self::$strictExceptionsMode=$strictExceptionsMode;}protected static function initStrictExceptionsMode($strictExceptionsMode){$errorLevelsToExceptions=[];if($strictExceptionsMode!==FALSE){$sysCfgDebug=static::getSystemCfgDebugSection();if(isset($sysCfgDebug['strictExceptions'])){$rawStrictExceptions=$sysCfgDebug['strictExceptions'];$rawStrictExceptions=is_array($rawStrictExceptions)?$rawStrictExceptions:explode(',',trim($rawStrictExceptions,'[]'));$errorLevelsToExceptions=array_map(function($rawErrorLevel){$rawErrorLevel=trim($rawErrorLevel);if(is_numeric($rawErrorLevel))return intval($rawErrorLevel);return constant($rawErrorLevel);},$rawStrictExceptions);}else{$errorLevelsToExceptions=self::$strictExceptionsModeDefaultLevels;}}return self::SetStrictExceptionsMode($strictExceptionsMode,$errorLevelsToExceptions);}protected static function initHandlers(){$className=get_called_class();foreach(static::$handlers as$key=>$value){static::$handlers[$key]=[$className,$value];}register_shutdown_function(static::$handlers['shutdownHandler']);}protected static function initLogDirectory(){$sysCfgDebug=static::getSystemCfgDebugSection();$logDirConfiguredPath=isset($sysCfgDebug['logDirectory'])?$sysCfgDebug['logDirectory']:static::$LogDirectory;if(mb_substr($logDirConfiguredPath,0,1)==='~'){$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());$logDirAbsPath=$app->GetRequest()->GetAppRoot().'/'.ltrim(mb_substr($logDirConfiguredPath,1),'/');}else{$logDirAbsPath=$logDirConfiguredPath;}static::$LogDirectory=$logDirAbsPath;try{if(!\Packager_Php_Wrapper::IsDir($logDirAbsPath)){if(!\Packager_Php_Wrapper::MkDir($logDirAbsPath,0777,TRUE))throw new\RuntimeException('['.get_class()."] It was not possible to create log directory: `".$logDirAbsPath."`.");if(!is_writable($logDirAbsPath))if(!chmod($logDirAbsPath,0777))throw new\RuntimeException('['.get_class()."] It was not possible to setup privileges to log directory: `".$logDirAbsPath."` to writeable mode 0777.");}}catch(\Exception$e){die('['.get_class().'] '.$e->getMessage());}static::$logDirectoryInitialized=TRUE;return$logDirAbsPath;}protected static function getSystemCfgDebugSection(){if(self::$systemConfigDebugValues!==NULL)return self::$systemConfigDebugValues;$result=[];$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());$configClass=$app->GetConfigClass();$cfg=$configClass::GetSystem();if($cfg===FALSE)return$result;$cfgProps=(object)static::$systemConfigDebugProps;if(!isset($cfg->{$cfgProps->sectionName}))return$result;$cfgDebug=&$cfg->{$cfgProps->sectionName};if(isset($cfgDebug->{$cfgProps->emailRecepient}))$result['emailRecepient']=$cfgDebug->{$cfgProps->emailRecepient};if(isset($cfgDebug->{$cfgProps->logDirectory}))$result['logDirectory']=$cfgDebug->{$cfgProps->logDirectory};if(isset($cfgDebug->{$cfgProps->strictExceptions}))$result['strictExceptions']=$cfgDebug->{$cfgProps->strictExceptions};self::$systemConfigDebugValues=$result;return$result;}}}
namespace MvcCore\Debug{trait Handlers{public static function Timer($name=NULL){return static::BarDump(call_user_func(static::$handlers['timer'],$name),$name,['backtraceIndex'=>3]);}public static function Dump($value,$return=FALSE,$exit=FALSE){if(static::$originalDebugClass){$options=['bar'=>FALSE,'backtraceIndex'=>1];if($exit)$options['lastDump']=TRUE;$dumpedValue=static::dumpHandler($value,NULL,$options);}else{$dumpedValue=@call_user_func(static::$handlers['dump'],$value,$return);}if($return)return$dumpedValue;if(static::$debugging){echo $dumpedValue;}else{static::storeLogRecord($dumpedValue,\MvcCore\IDebug::DEBUG);}return$value;}public static function BarDump($value,$title=NULL,$options=[]){if(static::$originalDebugClass){if(!isset($options['backtraceIndex']))$options['backtraceIndex']=1;$options['bar']=static::$debugging;$dumpedValue=static::dumpHandler($value,$title,$options);}else{$dumpedValue=@call_user_func_array(static::$handlers['barDump'],func_get_args());}if(!static::$debugging)static::storeLogRecord($dumpedValue,\MvcCore\IDebug::DEBUG);return$value;}public static function Log($value,$priority=\MvcCore\IDebug::INFO){if(static::$originalDebugClass){$dumpedValue=static::dumpHandler($value,NULL,['bar'=>FALSE,'backtraceIndex'=>1]);return static::storeLogRecord($dumpedValue,$priority);}else{return@call_user_func_array(static::$handlers['log'],func_get_args());}}public static function Exception($exception,$exit=TRUE){if(static::$originalDebugClass){$dumpedValue=static::dumpHandler($exception,NULL,['bar'=>!$exit,'backtraceIndex'=>1]);if(static::$debugging){echo $dumpedValue;}else{static::storeLogRecord($dumpedValue,\MvcCore\IDebug::EXCEPTION);}}else{@call_user_func_array(static::$handlers['exceptionHandler'],func_get_args());}}public static function ShutdownHandler(){$error=error_get_last();if(isset($error['type']))static::Exception($error);if(!self::isHtmlResponse()||count(self::$dumps)===0)return;list($dumps,$lastDump)=self::formatDebugDumps();echo  str_replace(['%mvccoreDumps%','"%mvccoreInitArgs%"'],[$dumps,($lastDump?'!0':'!1').','.count(self::$dumps)],\Packager_Php_Wrapper::FileGetContents(PACKAGER_PHP_FILE_BASE.'/vendor/mvccore/mvccore/src/MvcCore/Debug'.'/debug.html'));}protected static function timerHandler($name=NULL){$now=microtime(TRUE);if($name===NULL)return$now-static::$requestBegin;$difference=round((isset(static::$timers[$name])?$now-static::$timers[$name]:0)*1000)/1000;static::$timers[$name]=$now;return$difference;}protected static function dumpHandler($value,$title=NULL,$options=[]){ob_start();var_dump($value);$content=preg_replace("#\</small\>\n#",'</small>',ob_get_clean(),1);$content=preg_replace("#\<small\>([^\>]*)\>#",'',$content,1);$backtraceIndex=isset($options['backtraceIndex'])?$options['backtraceIndex']:2;$backtrace=debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,$backtraceIndex+1);$originalPlace=(object)$backtrace[$backtraceIndex];$options['file']=$originalPlace->file;$options['line']=$originalPlace->line;if($options['bar']){if(self::isHtmlResponse()){self::$dumps[]=[$content,$title,$options];}else{self::sendDumpInAjaxHeader($content,$title,$options);}}return$content;}protected static function storeLogRecord($value,$priority){$content=date('[Y-m-d H-i-s]')."\n".$value;$content=preg_replace("#\n(\s)#","\n\t$1",$content)."\n";if(!static::$logDirectoryInitialized)static::initLogDirectory();$fullPath=static::$LogDirectory.'/'.$priority.'.log';file_put_contents($fullPath,$content,FILE_APPEND);return$fullPath;}protected static function formatDebugDumps(){$dumps='';$lastDump=FALSE;$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());$appRoot=$app->GetRequest()->GetAppRoot();foreach(self::$dumps as$values){list($dumpResult,$lastDumpLocal)=self::formatDebugDump($values,$appRoot);$dumps.=$dumpResult;if($lastDumpLocal)$lastDump=$lastDumpLocal;}return[$dumps,$lastDump];}protected static function formatDebugDump($dumpRecord,$appRoot=NULL){$result='';$lastDump=FALSE;if($appRoot===NULL){$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());$appRoot=$app->GetRequest()->GetAppRoot();}$options=$dumpRecord[2];$result.='<div class="item">';if($dumpRecord[1]!==NULL)$result.='<pre class="title">'.$dumpRecord[1].'</pre>';$file=$options['file'];$line=$options['line'];$displayedFile=str_replace('\\','/',$file);if(strpos($displayedFile,$appRoot)===0){$displayedFile=substr($displayedFile,strlen($appRoot));}$link='<a class="editor" href="editor://open/?file='.rawurlencode($file).'&amp;line='.$line.'">'.$displayedFile.':'.$line.'</a>';$dump=&$dumpRecord[0];$dump=preg_replace("#\n(\s+)\<b\>array\</b\>\s([^\n]+)\n(\s+)(\<i\>\<font )([^\>]+)(\>empty)#m","<b>array</b> $2 $4$5$6",$dump);$dump=preg_replace("#\n(\s+)\<b\>array\</b\>\s([^\n]+)\n(\s+)\.\.\.#m","<b>array</b> $2 ...",$dump);$dump=preg_replace("#\n(\s+)\<b\>array\</b\>\s([^\n]+)\n#m","<b>array</b> $2\n",$dump);$dump=preg_replace("#(\<font color='\#)([^']+)'\>\=&gt;\</font\>\s\n\s+([^\n]+)\n\s+\.\.\.#m","<font color='#$2'>=&gt;</font> $3 ...",$dump);$dump=preg_replace("#\n\s+(.*)\<b\>object\</b\>([^\n]+)\n#m","$1<b>object</b> $2\n",$dump);$result.='<div class="value">'.preg_replace("#\[([^\]]*)\]=>([^\n]*)\n(\s*)#","[$1] => ",str_replace("<required>","&lt;required&gt;",$link.$dump)).'</div></div>';if(isset($dumpRecord[2]['lastDump'])&&$dumpRecord[2]['lastDump'])$lastDump=TRUE;return[$result,$lastDump];}protected static function sendDumpInAjaxHeader($value,$title,$options){static$ajaxHeadersIndex=0;$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());$response=$app->GetResponse();list($dumpStr,)=self::formatDebugDump([$value,$title,$options],$app->GetRequest()->GetAppRoot());$dumpStr64Arr=str_split(base64_encode($dumpStr),5000);foreach($dumpStr64Arr as$key=>$base64Item)$response->SetHeader('X-MvcCore-Debug-'.$ajaxHeadersIndex.'-'.$key,$base64Item);$ajaxHeadersIndex+=1;$response->SetHeader('X-MvcCore-Debug',$ajaxHeadersIndex);}protected static function isHtmlResponse(){$app=static::$app?:(static::$app=\MvcCore\Application::GetInstance());$request=$app->GetRequest();if($request->IsInternalRequest())return FALSE;$response=$app->GetResponse();return$response->HasHeader('Content-Type')&&$response->IsHtmlOutput();}}}
namespace MvcCore\Ext\Forms\Fields{interface IPattern{public function GetPattern();public function SetPattern($pattern);}}
namespace MvcCore\View{trait MagicMethods{public function __set($name,$value){return$this->__protected['store'][$name]=&$value;}public function __get($name){$store=&$this->__protected['store'];if(array_key_exists($name,$store))return$store[$name];if($controllerType=$this->getReflectionClass('controller')){if($controllerType->hasProperty($name)){$property=$controllerType->getProperty($name);if(!$property->isStatic()){if(!$property->isPublic())$property->setAccessible(TRUE);$value=NULL;if(PHP_VERSION_ID>=70400&&$property->hasType()){if($property->isInitialized($this->controller))$value=$property->getValue($this->controller);}else{$value=$property->getValue($this->controller);}$store[$name]=&$value;return$value;}}}return NULL;}public function __isset($name){$store=&$this->__protected['store'];if(array_key_exists($name,$store))return TRUE;if($controllerType=$this->getReflectionClass('controller')){if($controllerType->hasProperty($name)){$property=$controllerType->getProperty($name);if(!$property->isStatic()){if(!$property->isPublic())$property->setAccessible(TRUE);$value=NULL;if(PHP_VERSION_ID>=70400&&$property->hasType()){if($property->isInitialized($this->controller))$value=$property->getValue($this->controller);}else{$value=$property->getValue($this->controller);}$store[$name]=&$value;return$value!==NULL;}}}return FALSE;}public function __unset($name){$store=&$this->__protected['store'];if(isset($store[$name]))unset($store[$name]);}protected function getReflectionClass($currentContextObjectName){$privates=&$this->__protected;$reflectionTypes=&$privates['reflectionTypes'];if(isset($reflectionTypes[$currentContextObjectName])){return$reflectionTypes[$currentContextObjectName];}if($privates['reflectionName']===$currentContextObjectName){$privates['reflectionName']=NULL;return NULL;}$privates['reflectionName']=$currentContextObjectName;$currentContextObject=$this->{$currentContextObjectName};if($currentContextObject!==NULL){$reflectionType=new\ReflectionClass($currentContextObject);$reflectionTypes[$currentContextObjectName]=&$reflectionType;return$reflectionType;}$privates['reflectionName']=NULL;return NULL;}}}
namespace MvcCore\View{trait LocalMethods{protected function correctRelativePath($typePath,$relativePath){$result=str_replace('\\','/',$relativePath);if(substr($relativePath,0,2)=='./'){if(self::$_viewScriptsFullPathBase===NULL)self::_initViewScriptsFullPathBase();$typedViewDirFullPath=implode('/',[self::$_viewScriptsFullPathBase,$typePath]);$renderedFullPaths=&$this->__protected['renderedFullPaths'];$lastRenderedFullPath=$renderedFullPaths[count($renderedFullPaths)-1];$renderedRelPath=substr($lastRenderedFullPath,strlen($typedViewDirFullPath));$renderedRelPathLastSlashPos=strrpos($renderedRelPath,'/');if($renderedRelPathLastSlashPos!==FALSE){$result=substr($renderedRelPath,0,$renderedRelPathLastSlashPos+1).substr($relativePath,2);$result=ltrim($result,'/');}}return$result;}protected static function initViewScriptsFullPathBase(){$app=\MvcCore\Application::GetInstance();self::$_viewScriptsFullPathBase=implode('/',[$app->GetRequest()->GetAppRoot(),$app->GetAppDir(),$app->GetViewsDir()]);}protected static function initHelpersNamespaces(){$app=\MvcCore\Application::GetInstance();static::$helpersNamespaces=['\\MvcCore\\Ext\\Views\Helpers\\','\\'.implode('\\',[$app->GetAppDir(),$app->GetViewsDir(),static::$helpersDir]).'\\',];}}}
namespace MvcCore\Response{trait PropsGettersSetters{protected static$codeMessages=[\MvcCore\IResponse::OK=>'OK',\MvcCore\IResponse::MOVED_PERMANENTLY=>'Moved Permanently',\MvcCore\IResponse::SEE_OTHER=>'See Other',\MvcCore\IResponse::NOT_FOUND=>'Not Found',\MvcCore\IResponse::INTERNAL_SERVER_ERROR=>'Internal Server Error',];protected$httpVersion=NULL;protected$code=NULL;protected$codeMessage=NULL;protected$headers=[];protected$encoding=NULL;protected$body=NULL;protected$bodySent=FALSE;protected$disabledHeaders=[];protected$request=NULL;public function GetHttpVersion(){if($this->httpVersion===NULL){$server=&$this->request->GetGlobalCollection('server');$this->httpVersion=isset($server['SERVER_PROTOCOL'])?$server['SERVER_PROTOCOL']:'HTTP/1.1';}return$this->httpVersion;}public function SetHttpVersion($httpVersion){$this->httpVersion=$httpVersion;return$this;}public function SetCode($code,$codeMessage=NULL){$this->code=$code;if($codeMessage!==NULL)$this->codeMessage=$codeMessage;http_response_code($code);return$this;}public function GetCode(){if($this->code===NULL){$phpCode=http_response_code();$this->code=$phpCode===FALSE?\MvcCore\IResponse::OK:$phpCode;}return$this->code;}public function SetEncoding($encoding='utf-8'){$this->encoding=$encoding;$this->headers['Content-Encoding']=$encoding;return$this;}public function GetEncoding(){return$this->encoding;}public function IsRedirect(){return isset($this->headers['Location']);}public function IsSent(){return$this->bodySent&&headers_sent();}}}
namespace MvcCore\View{trait DirectoryMethods{public function GetCurrentViewFullPath(){$result=NULL;$renderedFullPaths=&$this->__protected['renderedFullPaths'];$count=count($renderedFullPaths);if($count>0)$result=$renderedFullPaths[$count-1];return$result;}public function GetCurrentViewDirectory(){$result=$this->GetCurrentViewFullPath();$lastSlashPos=mb_strrpos($result,'/');if($lastSlashPos!==FALSE){$result=mb_substr($result,0,$lastSlashPos);}return$result;}public function GetParentViewFullPath(){$result=NULL;$renderedFullPaths=&$this->__protected['renderedFullPaths'];$count=count($renderedFullPaths);if($count>1){$result=$renderedFullPaths[$count-2];}else{$controller=$this->controller;$parentCtrl=$controller->GetParentController();if($parentCtrl!==NULL){while(TRUE){$parentCtrlView=$parentCtrl->GetView();if($parentCtrlView===NULL){$parentCtrl->GetParentController();if($parentCtrl===NULL)break;}$result=$parentCtrlView->GetCurrentViewFullPath();if($result!==NULL)break;}}if($result===NULL){$relativePath=$this->correctRelativePath(static::$layoutsDir,$controller->GetLayout());return static::GetViewScriptFullPath(static::$layoutsDir,$relativePath);}}return$result;}public function GetParentViewDirectory(){$result=$this->GetParentViewFullPath();$lastSlashPos=mb_strrpos($result,'/');if($lastSlashPos!==FALSE){$result=mb_substr($result,0,$lastSlashPos);}return$result;}}}
namespace MvcCore\Ext\Auths\Basics{interface IDatabaseUser{public static function SetUsersTableStructure($tableName=NULL,$columnNames=NULL);}}
namespace MvcCore\Router{trait Redirecting{protected function redirectToProperTrailingSlashIfNecessary(){if(!$this->trailingSlashBehaviour)return TRUE;$path=$this->request->GetPath();if($path=='/')return TRUE;if($path==''){$this->redirect($this->request->GetBaseUrl().'/'.$this->request->GetQuery(TRUE).$this->request->GetFragment(TRUE),\MvcCore\IResponse::MOVED_PERMANENTLY,'Home trailing slash added');}$lastPathChar=mb_substr($path,mb_strlen($path)-1);if($lastPathChar=='/'&&$this->trailingSlashBehaviour==\MvcCore\IRouter::TRAILING_SLASH_REMOVE){$this->redirect($this->request->GetBaseUrl().rtrim($path,'/').$this->request->GetQuery(TRUE).$this->request->GetFragment(TRUE),\MvcCore\IResponse::MOVED_PERMANENTLY,'Removed trailing slash');return FALSE;}else if($lastPathChar!='/'&&$this->trailingSlashBehaviour==\MvcCore\IRouter::TRAILING_SLASH_ALWAYS){$this->redirect($this->request->GetBaseUrl().$path.'/'.$this->request->GetQuery(TRUE).$this->request->GetFragment(TRUE),\MvcCore\IResponse::MOVED_PERMANENTLY,'Trailing slash added');return FALSE;}return TRUE;}protected function redirect($url,$code=301,$reason=NULL){$app=\MvcCore\Application::GetInstance();$response=$app->GetResponse();$response->SetCode($code)->SetHeader('Location',$url);if($reason!==NULL)$response->SetHeader('X-Reason',$reason);$app->Terminate();}}}
namespace MvcCore\Ext\Forms\Field\Props{trait Size{protected$size=NULL;public function GetSize(){return$this->size;}public function SetSize($size){$this->size=$size;return$this;}}}
namespace MvcCore\Tool{trait OopChecking{protected static$interfacesStaticMethodsCache=[];public static function CheckClassInterface($testClassName,$interfaceName,$checkStaticMethods=FALSE,$throwException=TRUE){$result=FALSE;$errorMsg='';$interfaceName=trim($interfaceName,'\\');$testClassType=new\ReflectionClass($testClassName);if(in_array($interfaceName,$testClassType->getInterfaceNames(),TRUE)){$result=TRUE;}else{$errorMsg="Class `{$testClassName}` doesn't implement interface `{$interfaceName}`.";}if($result&&$checkStaticMethods){$allStaticsImplemented=TRUE;$interfaceMethods=static::checkClassInterfaceGetPublicStaticMethods($interfaceName);foreach($interfaceMethods as$methodName){if(!$testClassType->hasMethod($methodName)){$allStaticsImplemented=FALSE;$errorMsg="Class `{$testClassName}` doesn't implement static method `{$methodName}` from interface `{$interfaceName}`.";break;}$testClassStaticMethod=$testClassType->getMethod($methodName);if(!$testClassStaticMethod->isStatic()){$allStaticsImplemented=FALSE;$errorMsg="Class `{$testClassName}` doesn't implement static method `{$methodName}` from interface `{$interfaceName}`, method is not static.";break;}}if(!$allStaticsImplemented)$result=FALSE;}if($result)return TRUE;if(!$throwException)return FALSE;throw new\InvalidArgumentException("[".get_class()."] ".$errorMsg);}public static function CheckClassTrait($testClassName,$traitName,$checkParentClasses=FALSE,$throwException=TRUE){$result=FALSE;$errorMsg='';$testClassType=new\ReflectionClass($testClassName);if(in_array($traitName,$testClassType->getTraitNames(),TRUE)){$result=TRUE;}else if($checkParentClasses){$currentClassType=$testClassType;while(TRUE){$parentClass=$currentClassType->getParentClass();if($parentClass===FALSE)break;$parentClassType=new\ReflectionClass($parentClass->getName());if(in_array($traitName,$parentClassType->getTraitNames(),TRUE)){$result=TRUE;break;}else{$currentClassType=$parentClassType;}}}if(!$result)$errorMsg="Class `{$testClassName}` doesn't implement trait `{$traitName}`.";if($result)return TRUE;if(!$throwException)return FALSE;throw new\InvalidArgumentException("[".get_class()."] ".$errorMsg);}protected static function&checkClassInterfaceGetPublicStaticMethods($interfaceName){if(!isset(static::$interfacesStaticMethodsCache[$interfaceName]))static::$interfacesStaticMethodsCache[$interfaceName]=array_map(function(\ReflectionMethod$method){return$method->name;},(new\ReflectionClass($interfaceName))->getMethods(\ReflectionMethod::IS_STATIC));return static::$interfacesStaticMethodsCache[$interfaceName];}}}
namespace MvcCore\Tool{trait StringCaseConversions{public static function GetDashedFromPascalCase($pascalCase=''){return strtolower(preg_replace("#([a-z])([A-Z])#","$1-$2",lcfirst(preg_replace_callback("#[A-Z]{2,}#",function($match){$str=$match[0];return substr($str,0,1).'-'.strtolower(implode('-',str_split(substr($str,1))));},$pascalCase))));}public static function GetPascalCaseFromDashed($dashed=''){$a=explode('/',$dashed);foreach($a as&$b)$b=ucfirst(str_replace('-','',ucwords($b,'-')));return ucfirst(implode('/',$a));}public static function GetUnderscoredFromPascalCase($pascalCase=''){return strtolower(preg_replace("#([a-z])([A-Z])#","$1_$2",lcfirst(preg_replace_callback("#[A-Z]{2,}#",function($match){$str=$match[0];return substr($str,0,1).'_'.strtolower(implode('_',str_split(substr($str,1))));},$pascalCase))));}public static function GetPascalCaseFromUnderscored($underscored=''){$a=explode('/',$underscored);foreach($a as&$b)$b=ucfirst(str_replace('_','',ucwords($b,'_')));return ucfirst(implode('/',$a));}}}
namespace MvcCore\Session{trait Starting{public static function Start(&$session=[]){if(static::GetStarted())return;$req=self::$req?:self::$req=\MvcCore\Application::GetInstance()->GetRequest();if($req->IsInternalRequest()===TRUE)return;static::$started=session_start();static::$sessionStartTime=time();static::$sessionMaxTime=static::$sessionStartTime;static::setUpMeta();static::setUpData();}public static function GetSessionStartTime(){return static::$sessionStartTime;}public static function GetStarted(){if(static::$started===NULL){$req=self::$req?:self::$req=\MvcCore\Application::GetInstance()->GetRequest();if(!$req->IsCli()){$alreadyStarted=session_status()===PHP_SESSION_ACTIVE&&session_id()!=='';if($alreadyStarted){static::$sessionStartTime=time();static::$sessionMaxTime=static::$sessionStartTime;static::setUpMeta();static::setUpData();}static::$started=$alreadyStarted;}}return static::$started;}}}
namespace MvcCore\Router{trait Routing{public function Route(){$this->internalRequest=$this->request->IsInternalRequest();if(!$this->internalRequest)if(!$this->redirectToProperTrailingSlashIfNecessary())return FALSE;list($requestCtrlName,$requestActionName)=$this->routeDetectStrategy();if($this->routeByQueryString){$this->queryStringRouting($requestCtrlName,$requestActionName);}else{$this->rewriteRouting($requestCtrlName,$requestActionName);}if(!$this->routeProcessRouteRedirectionIfAny())return FALSE;return$this->routeSetUpDefaultForHomeIfNoMatch()->routeSetUpSelfRouteNameIfAny()->canonicalRedirectIfAny();}public function RedefineRoutedTarget($controllerNamePc=NULL,$actionNamePc=NULL,$changeSelfRoute=FALSE){$toolClass=self::$toolClass;$ctrlNameDc=NULL;$actionNameDc=NULL;$currentRoute=$this->currentRoute;$currentRouteMatched=$currentRoute instanceof\MvcCore\IRoute;$matchedParams=$currentRouteMatched?$currentRoute->GetMatchedParams():[];$controllerNamePcNotNull=$controllerNamePc!==NULL;$actionNamePcNotNull=$actionNamePc!==NULL;if($controllerNamePcNotNull){$ctrlNameDc=str_replace(['\\','_'],'/',$toolClass::GetDashedFromPascalCase($controllerNamePc));$matchedParams[static::URL_PARAM_CONTROLLER]=$ctrlNameDc;$this->request->SetControllerName($ctrlNameDc)->SetParam(static::URL_PARAM_CONTROLLER,$ctrlNameDc);if(isset($this->requestedParams[static::URL_PARAM_CONTROLLER]))$this->requestedParams[static::URL_PARAM_CONTROLLER]=$ctrlNameDc;$currentRoute->SetController($controllerNamePc);}if($actionNamePcNotNull){$actionNameDc=$toolClass::GetDashedFromPascalCase($actionNamePc);$matchedParams[static::URL_PARAM_ACTION]=$actionNameDc;$this->request->SetActionName($actionNameDc)->SetParam(static::URL_PARAM_ACTION,$ctrlNameDc);if(isset($this->requestedParams[static::URL_PARAM_ACTION]))$this->requestedParams[static::URL_PARAM_ACTION]=$actionNameDc;$currentRoute->SetAction($actionNamePc);}if($currentRouteMatched){$currentRoute->SetMatchedParams($matchedParams);$currentRouteName=$currentRoute->GetName();if(strpos($currentRouteName,':')!==FALSE&&($controllerNamePcNotNull||$actionNamePcNotNull)){list($ctrlPc,$actionPc)=explode(':',$currentRouteName);$currentRoute->SetName(($controllerNamePcNotNull?$controllerNamePc:$ctrlPc).':'.($actionNamePcNotNull?$actionNamePc:$actionPc));}}if($currentRouteMatched&&$changeSelfRoute){$this->selfRouteName=$this->anyRoutesConfigured?$currentRoute->GetName():$currentRoute->GetControllerAction();if($controllerNamePcNotNull)if(isset($this->requestedParams[static::URL_PARAM_CONTROLLER]))$this->requestedParams[static::URL_PARAM_CONTROLLER]=$ctrlNameDc;if($actionNamePcNotNull)if(isset($this->requestedParams[static::URL_PARAM_ACTION]))$this->requestedParams[static::URL_PARAM_ACTION]=$actionNameDc;}return TRUE;}public function SetOrCreateDefaultRouteAsCurrent($routeName,$controllerPc,$actionPc,$fallbackCall=FALSE){$controllerPc=strtr($controllerPc,'/','\\');$ctrlActionRouteName=$controllerPc.':'.$actionPc;$request=$this->request;if(isset($this->routes[$ctrlActionRouteName])){$defaultRoute=$this->routes[$ctrlActionRouteName];}else if(isset($this->routes[$routeName])){$defaultRoute=$this->routes[$routeName];}else{$routeClass=self::$routeClass;$pathParamName=static::URL_PARAM_PATH;$defaultRoute=$routeClass::CreateInstance()->SetMatch("#/(?<$pathParamName>.*)#")->SetReverse("/<$pathParamName>")->SetName($routeName)->SetController($controllerPc)->SetAction($actionPc)->SetDefaults([$pathParamName=>NULL,static::URL_PARAM_CONTROLLER=>NULL,static::URL_PARAM_ACTION=>NULL,]);$anyRoutesConfigured=$this->anyRoutesConfigured;$this->AddRoute($defaultRoute,NULL,TRUE,FALSE);$this->anyRoutesConfigured=$anyRoutesConfigured;if(!$request->IsInternalRequest())$request->SetParam(static::URL_PARAM_PATH,($request->HasParam(static::URL_PARAM_PATH)?$request->GetParam(static::URL_PARAM_PATH,'.*'):$request->GetPath()));}$toolClass=self::$toolClass;$request->SetControllerName(str_replace('\\','/',$toolClass::GetDashedFromPascalCase($defaultRoute->GetController())))->SetActionName($toolClass::GetDashedFromPascalCase($defaultRoute->GetAction()));$this->currentRoute=$defaultRoute;if(!$fallbackCall)$this->selfRouteName=$routeName;return$defaultRoute;}protected function routeDetectStrategy(){$request=$this->request;$requestCtrlName=$request->GetControllerName();$requestActionName=$request->GetActionName();if($this->routeByQueryString===NULL){list($reqScriptName,$reqPath)=[$request->GetScriptName(),$request->GetPath(TRUE)];$requestCtrlNameNotNull=$requestCtrlName!==NULL;$requestActionNameNotNull=$requestActionName!==NULL;$requestCtrlAndAlsoAction=$requestCtrlNameNotNull&&$requestActionNameNotNull;$requestCtrlOrAction=$requestCtrlNameNotNull||$requestActionNameNotNull;$this->routeByQueryString=($requestCtrlAndAlsoAction||($requestCtrlOrAction&&($reqScriptName===$reqPath||trim($reqPath,'/')==='')));}return[$requestCtrlName,$requestActionName];}protected function queryStringRouting($requestCtrlName,$requestActionName){$toolClass=self::$toolClass;list($ctrlDfltName,$actionDfltName)=$this->application->GetDefaultControllerAndActionNames();$this->SetOrCreateDefaultRouteAsCurrent(\MvcCore\IRouter::DEFAULT_ROUTE_NAME,$toolClass::GetPascalCaseFromDashed($requestCtrlName?:$ctrlDfltName),$toolClass::GetPascalCaseFromDashed($requestActionName?:$actionDfltName));$this->defaultParams=array_merge([],$this->defaultParams,$this->request->GetParams(FALSE));$this->requestedParams=array_merge([],$this->defaultParams);}protected function routeProcessRouteRedirectionIfAny(){if($this->currentRoute instanceof\MvcCore\IRoute){$redirectRouteName=$this->currentRoute->GetRedirect();if($redirectRouteName!==NULL){$redirectUrl=$this->Url($redirectRouteName,$this->requestedParams);$this->redirect($redirectUrl,\MvcCore\IResponse::MOVED_PERMANENTLY,'Redirection route ');return FALSE;}}return TRUE;}protected function routeSetUpDefaultForHomeIfNoMatch(){if($this->currentRoute===NULL){$request=$this->request;if($this->routeToDefaultIfNotMatch){$requestIsHome=(trim($request->GetPath(),'/')==''||$request->GetPath()==$request->GetScriptName());if($requestIsHome){list($dfltCtrl,$dftlAction)=$this->application->GetDefaultControllerAndActionNames();$this->SetOrCreateDefaultRouteAsCurrent(static::DEFAULT_ROUTE_NAME,$dfltCtrl,$dftlAction);$requestParams=array_merge([],$this->request->GetParams(FALSE));unset($requestParams[static::URL_PARAM_CONTROLLER],$requestParams[static::URL_PARAM_ACTION]);$this->requestedParams=&$requestParams;}}}return$this;}protected function routeSetUpSelfRouteNameIfAny(){if($this->currentRoute instanceof\MvcCore\IRoute)$this->selfRouteName=$this->anyRoutesConfigured?$this->currentRoute->GetName():$this->currentRoute->GetControllerAction();return$this;}}}
namespace MvcCore\Router{trait RouteMethods{public function SetRoutes($routes=[],$groupName=NULL,$autoInitialize=TRUE){if($autoInitialize){$this->routes=[];$this->AddRoutes($routes,$groupName);}else{$routesAreEmpty=count($routes)===0;$noGroupNameDefined=$groupName===NULL;$newRoutes=[];$this->urlRoutes=[];foreach($routes as$route){$routeName=$route->GetName();$newRoutes[$routeName]=$route;$this->urlRoutes[$routeName]=$route;$controllerAction=$route->GetControllerAction();if($controllerAction!==':')$this->urlRoutes[$controllerAction]=$route;if($noGroupNameDefined){$routeGroupName=$route->GetGroupName();if($routeGroupName===NULL)$routeGroupName='';if(!array_key_exists($routeGroupName,$this->routesGroups))$this->routesGroups[$routeGroupName]=[];$this->routesGroups[$routeGroupName][]=$route;}}$this->routes=$newRoutes;if($noGroupNameDefined){if($routesAreEmpty){$this->routesGroups=[];$this->noUrlRoutes=[];}$this->routesGroups['']=$newRoutes;}else{$this->routesGroups[$groupName]=$newRoutes;}$this->anyRoutesConfigured=(!$routesAreEmpty)||$this->preRouteMatchingHandler!==NULL;}return$this;}public function AddRoutes(array$routes=[],$groupName=NULL,$prepend=FALSE,$throwExceptionForDuplication=TRUE){if($prepend)$routes=array_reverse($routes);$routeClass=self::$routeClass;foreach($routes as$routeName=>&$route){$numericKey=is_numeric($routeName);$ctrlActionName=!$numericKey&&mb_strpos($routeName,':')!==FALSE;if($route instanceof\MvcCore\IRoute){if($numericKey){if(!$route->GetName()){$routeAutoName=$route->GetControllerAction();if($routeAutoName===':')$routeAutoName='Route_'.$routeName;$route->SetName($routeAutoName);}}else{if($ctrlActionName){$route->SetControllerAction($routeName);}else if($route->GetName()!==$routeName&&$route->GetName()===$route->GetControllerAction()){$route->SetName($routeName);}if($route->GetName()===NULL)$route->SetName($routeName);}$this->AddRoute($route,$groupName,$prepend,$throwExceptionForDuplication);}else if(is_array($route)){if(!$numericKey)$route[$ctrlActionName?'controllerAction':'name']=$routeName;$this->AddRoute($this->getRouteInstance($route),$groupName,$prepend,$throwExceptionForDuplication);}else if(is_string($route)){$routeCfgData=['pattern'=>$route];$routeCfgData[$ctrlActionName?'controllerAction':'name']=$routeName;$this->AddRoute($routeClass::CreateInstance($routeCfgData),$groupName,$prepend,$throwExceptionForDuplication);}else{throw new\InvalidArgumentException("[".get_class()."] Route is not possible to assign"." (key: `{$routeName}`, value: `".serialize($route)."`).");}}$this->anyRoutesConfigured=count($routes)>0||$this->preRouteMatchingHandler!==NULL;return$this;}public function AddRoute($routeCfgOrRoute,$groupName=NULL,$prepend=FALSE,$throwExceptionForDuplication=TRUE){$instance=$this->getRouteInstance($routeCfgOrRoute);$routeName=$instance->GetName();$controllerAction=$instance->GetControllerAction();if($throwExceptionForDuplication){$errorMsgs=[];if(isset($this->routes[$routeName]))$errorMsgs[]='Route with name `'.$routeName.'` has already been defined between router routes.';if(isset($this->urlRoutes[$controllerAction]))$errorMsgs[]='Route with `Controller:Action` combination: `'.$controllerAction.'` has already been defined between router routes.';if($errorMsgs){$debBack=debug_backtrace();$debBackLength=count($debBack);if($debBackLength>1){$debBackSemiFinalRec=$debBack[$debBackLength-2];$file=str_replace('\\','/',$debBackSemiFinalRec['file']);$bootstrapFilePath='/App/Bootstrap.php';if(mb_strpos($file,$bootstrapFilePath)===mb_strlen($file)-mb_strlen($bootstrapFilePath))die('['.get_class().'] '.implode(' ',$errorMsgs));}throw new\InvalidArgumentException('['.get_class().'] '.implode(' ',$errorMsgs));}}$this->urlRoutes[$routeName]=$instance;if($controllerAction!==':')$this->urlRoutes[$controllerAction]=$instance;$this->addRouteToGroup($instance,$routeName,$groupName,$prepend);if($prepend){$newItem=[$routeName=>$instance];$this->routes=$newItem+$this->routes;}else{$this->routes[$routeName]=$instance;}$this->anyRoutesConfigured=TRUE;return$this;}protected function addRouteToGroup(\MvcCore\IRoute$route,$routeName,$groupName,$prepend){if($groupName===NULL){$routesGroupsKey='';}else{$routesGroupsKey=$groupName;$route->SetGroupName($groupName);}if(isset($this->routesGroups[$routesGroupsKey])){$groupRoutes=&$this->routesGroups[$routesGroupsKey];}else{$groupRoutes=[];$this->routesGroups[$routesGroupsKey]=&$groupRoutes;}if($prepend){$newItem=[$routeName=>$route];$groupRoutes=$newItem+$groupRoutes;}else{$groupRoutes[$routeName]=$route;}}public function HasRoute($routeOrRouteName){if(is_string($routeOrRouteName)){return isset($this->routes[$routeOrRouteName]);}else{return(isset($this->routes[$routeOrRouteName->GetName()])||isset($this->routes[$routeOrRouteName->GetControllerAction()]));}}public function RemoveRoute($routeName){$result=NULL;if(isset($this->routes[$routeName])){$result=$this->routes[$routeName];unset($this->routes[$routeName]);$this->removeRouteFromGroup($result,$routeName);$controllerAction=$result->GetControllerAction();if(isset($this->urlRoutes[$routeName]))unset($this->urlRoutes[$routeName]);if(isset($this->urlRoutes[$controllerAction]))unset($this->urlRoutes[$controllerAction]);$currentRoute=$this->currentRoute;if($currentRoute->GetName()===$result->GetName())$this->currentRoute=NULL;}if(!$this->routes&&$this->preRouteMatchingHandler===NULL)$this->anyRoutesConfigured=FALSE;return$result;}protected function removeRouteFromGroup(\MvcCore\IRoute$route,$routeName){$routeGroup=$route->GetGroupName();$groupRoutesKey=$routeGroup?:'';if(isset($this->routesGroups[$groupRoutesKey]))unset($this->routesGroups[$groupRoutesKey][$routeName]);}public function GetRoutes($groupName=NULL){if($groupName!==NULL)return$this->routesGroups[$groupName];return$this->routes;}public function GetRoute($routeName){if(isset($this->routes[$routeName]))return$this->routes[$routeName];return NULL;}public function SetCurrentRoute(\MvcCore\IRoute$currentRoute){$this->currentRoute=$currentRoute;return$this;}public function GetCurrentRoute(){return$this->currentRoute;}protected function getRouteInstance(&$routeCfgOrRoute){if($routeCfgOrRoute instanceof\MvcCore\IRoute)return$routeCfgOrRoute->SetRouter($this);$routeClass=self::$routeClass;return$routeClass::CreateInstance($routeCfgOrRoute)->SetRouter($this);}}}
namespace MvcCore\Session{trait Props{protected$__name=\MvcCore\ISession::DEFAULT_NAMESPACE_NAME;protected static$started=NULL;protected static$meta=['names'=>[],'hoops'=>[],'expirations'=>[],];protected static$instances=[];protected static$sessionStartTime=0;protected static$sessionMaxTime=0;protected static$req=NULL;}}
namespace MvcCore\Ext\Auths\Basics{interface IForm{const HTML_ID_SIGNIN='authentication_signin';const HTML_ID_SIGNOUT='authentication_signout';public function SetId($id);public function SetAction($url=NULL);public function SetMethod($method=\MvcCore\Ext\Forms\IForm::METHOD_POST);public function SetCssClasses($cssClasses);public function SetSuccessUrl($url=NULL);public function SetErrorUrl($url=NULL);public function SetTranslator(callable$translator=NULL);public function Init();public function AddFields($fields);public function AddField(\MvcCore\Ext\Forms\IField$field);public function Submit(array&$rawRequestParams=[]);public function ClearSession();public function SubmittedRedirect();public function __toString();public function Render($controllerDashedName='',$actionDashedName='');}}
namespace MvcCore\Session{trait NamespaceMethods{public static function GetNamespace($name=\MvcCore\ISession::DEFAULT_NAMESPACE_NAME){if(!static::GetStarted())static::Start();if(!isset(static::$instances[$name])){$instance=new static();$instance->__name=$name;static::$meta->names[$name]=1;if(!isset($_SESSION[$name]))$_SESSION[$name]=[];static::$instances[$name]=$instance;}return static::$instances[$name];}public function SetExpirationHoops($hoops){static::$meta->hoops[$this->__name]=$hoops;return$this;}public function SetExpirationSeconds($seconds=0){if($seconds>0)static::$meta->expirations[$this->__name]=static::$sessionStartTime+$seconds;return$this;}public function Destroy(){$name=$this->__name;$names=&static::$meta->names;$hoops=&static::$meta->hoops;$expirations=&static::$meta->expirations;$instances=&static::$instances;if(isset($names[$name]))unset($names[$name]);if(isset($hoops[$name]))unset($hoops[$name]);if(isset($expirations[$name]))unset($expirations[$name]);if(isset($_SESSION[$name]))unset($_SESSION[$name]);if(isset($instances[$name]))unset($instances[$name]);}public static function DestroyAll(){session_destroy();$_SESSION=NULL;static::$started=FALSE;$response=\MvcCore\Application::GetInstance()->GetResponse();if(!$response->IsSent()){$params=(object)session_get_cookie_params();$response->DeleteCookie(session_name(),$params->path,$params->domain,$params->secure);}}}}
namespace MvcCore\Ext\Forms\Field\Props{trait SpellCheck{protected$spellCheck=NULL;public function GetSpellCheck(){return$this->spellCheck;}public function SetSpellCheck($spellCheck){if($spellCheck===TRUE){$spellCheck='true';}else if($spellCheck===FALSE){$spellCheck='false';}$this->spellCheck=$spellCheck;return$this;}}}
namespace MvcCore\Router{trait RewriteRouting{protected function rewriteRouting($requestCtrlName,$requestActionName){$request=$this->request;$requestedPathFirstWord=$this->rewriteRoutingGetReqPathFirstWord();$this->rewriteRoutingProcessPreHandler($requestedPathFirstWord);$routes=$this->rewriteRoutingGetRoutesToMatch($requestedPathFirstWord);$requestMethod=$request->GetMethod();foreach($routes as&$route){if($this->rewriteRoutingCheckRoute($route,[$requestMethod]))continue;$allMatchedParams=$route->Matches($request);if($allMatchedParams!==NULL){$this->currentRoute=clone$route;$this->currentRoute->SetMatchedParams($allMatchedParams);$this->rewriteRoutingSetRequestedAndDefaultParams($allMatchedParams,$requestCtrlName,$requestActionName);if($this->rewriteRoutingSetRequestParams($allMatchedParams))continue;$this->rewriteRoutingSetUpCurrentRouteByRequest();break;}}}protected function rewriteRoutingGetReqPathFirstWord(){$requestedPath=ltrim($this->request->GetPath(),'/');$nextSlashPos=mb_strpos($requestedPath,'/');if($nextSlashPos===FALSE)$nextSlashPos=mb_strlen($requestedPath);return mb_substr($requestedPath,0,$nextSlashPos);}protected function rewriteRoutingProcessPreHandler($firstPathWord){if($this->preRouteMatchingHandler===NULL)return;call_user_func($this->preRouteMatchingHandler,$this,$this->request,$firstPathWord);}protected function rewriteRoutingGetRoutesToMatch($firstPathWord){if(isset($this->routesGroups[$firstPathWord])){$routes=$this->routesGroups[$firstPathWord];}else if(isset($this->routesGroups[''])){$routes=$this->routesGroups[''];}else{$routes=[];}reset($routes);return$routes;}protected function rewriteRoutingCheckRoute(\MvcCore\IRoute$route,array$additionalInfo){list($requestMethod,)=$additionalInfo;$routeMethod=$route->GetMethod();if($routeMethod!==NULL&&$routeMethod!==$requestMethod)return TRUE;return FALSE;}protected function rewriteRoutingSetRequestedAndDefaultParams(array&$allMatchedParams,$requestCtrlName=NULL,$requestActionName=NULL){$request=$this->request;$rawQueryParams=array_merge([],$request->GetParams(FALSE));list($ctrlDfltNamePc,$actionDfltNamePc)=$this->application->GetDefaultControllerAndActionNames();$toolClass=self::$toolClass;if($requestCtrlName!==NULL){$request->SetControllerName($requestCtrlName);$allMatchedParams[static::URL_PARAM_CONTROLLER]=$requestCtrlName;$rawQueryParams[static::URL_PARAM_CONTROLLER]=$requestCtrlName;}else if(isset($allMatchedParams[static::URL_PARAM_CONTROLLER])){$request->SetControllerName($allMatchedParams[static::URL_PARAM_CONTROLLER]);}else{$defaultCtrlNameDashed=$toolClass::GetDashedFromPascalCase($ctrlDfltNamePc);$request->SetControllerName($defaultCtrlNameDashed);$allMatchedParams[static::URL_PARAM_CONTROLLER]=$defaultCtrlNameDashed;}if($requestActionName!==NULL){$request->SetActionName($requestActionName);$allMatchedParams[static::URL_PARAM_ACTION]=$requestActionName;$rawQueryParams[static::URL_PARAM_ACTION]=$requestActionName;}else if(isset($allMatchedParams[static::URL_PARAM_ACTION])){$request->SetActionName($allMatchedParams[static::URL_PARAM_ACTION]);}else{$defaultActionNameDashed=$toolClass::GetDashedFromPascalCase($actionDfltNamePc);$request->SetActionName($defaultActionNameDashed);$allMatchedParams[static::URL_PARAM_ACTION]=$defaultActionNameDashed;}$this->defaultParams=array_merge($this->currentRoute->GetDefaults(),$this->defaultParams,$allMatchedParams,$rawQueryParams);$routeReverseParams=$this->currentRoute->GetReverseParams()?:[];$pathOnlyMatchedParams=array_merge([],$allMatchedParams);$controllerInReverse=in_array(static::URL_PARAM_CONTROLLER,$routeReverseParams,TRUE);$actionInReverse=in_array(static::URL_PARAM_ACTION,$routeReverseParams,TRUE);if(!$controllerInReverse)unset($pathOnlyMatchedParams[static::URL_PARAM_CONTROLLER]);if(!$actionInReverse)unset($pathOnlyMatchedParams[static::URL_PARAM_ACTION]);$this->requestedParams=array_merge([],$pathOnlyMatchedParams,$rawQueryParams);}protected function rewriteRoutingSetRequestParams(array&$allMatchedParams){$request=$this->request;$defaultParamsBefore=array_merge([],$this->defaultParams);$requestParams=array_merge([],$this->defaultParams);list($success,$requestParamsFiltered)=$this->currentRoute->Filter($requestParams,$this->defaultParams,\MvcCore\IRoute::CONFIG_FILTER_IN);if($success===FALSE){$this->defaultParams=$defaultParamsBefore;$this->requestedParams=[];$allMatchedParams=NULL;$this->currentRoute=NULL;return TRUE;}$requestParamsFiltered=$requestParamsFiltered?:$requestParams;$request->SetParams($requestParamsFiltered);if(isset($requestParamsFiltered[static::URL_PARAM_CONTROLLER]))$request->SetControllerName($requestParamsFiltered[static::URL_PARAM_CONTROLLER]);if(isset($requestParamsFiltered[static::URL_PARAM_ACTION]))$request->SetActionName($requestParamsFiltered[static::URL_PARAM_ACTION]);return FALSE;}protected function rewriteRoutingSetUpCurrentRouteByRequest(){$request=$this->request;$toolClass=self::$toolClass;$this->currentRoute->SetController(str_replace(['/','\\\\'],['\\','//'],$toolClass::GetPascalCaseFromDashed($request->GetControllerName())))->SetAction($toolClass::GetPascalCaseFromDashed($request->GetActionName()));}}}
namespace MvcCore\Router{trait UrlByQuery{public function UrlByQueryString($controllerActionOrRouteName='Index:Index',array&$params=[],$givenRouteName=NULL){if($givenRouteName=='self'){$params=array_merge($this->requestedParams?:[],$params);if($controllerActionOrRouteName===static::DEFAULT_ROUTE_NAME&&isset($params[static::URL_PARAM_PATH]))unset($params[static::URL_PARAM_PATH]);}list($ctrlPc,$actionPc)=$this->urlByQueryStringCompleteCtrlAction($controllerActionOrRouteName,$params);$absolute=$this->urlGetAbsoluteParam($params);$result=$this->urlByQueryStringCompleteResult($ctrlPc,$actionPc,$params);$result=$this->request->GetBasePath().$result;if($absolute)$result=$this->request->GetDomainUrl().$result;return$result;}protected function urlByQueryStringCompleteCtrlAction($controllerActionOrRouteName,array&$params){list($ctrlPc,$actionPc)=strpos($controllerActionOrRouteName,':')!==FALSE?explode(':',$controllerActionOrRouteName):[NULL,NULL];if(isset($params[static::URL_PARAM_CONTROLLER])){$ctrlPc=$params[static::URL_PARAM_CONTROLLER];unset($params[static::URL_PARAM_CONTROLLER]);}if(isset($params[static::URL_PARAM_ACTION])){$actionPc=$params[static::URL_PARAM_ACTION];unset($params[static::URL_PARAM_ACTION]);}$ctrlPc=str_replace('\\','/',$ctrlPc);return[$ctrlPc,$actionPc];}protected function urlByQueryStringCompleteResult($ctrlPc,$actionPc,array&$params){$result='';$toolClass=self::$toolClass;$amp=$this->getQueryStringParamsSepatator();list($dfltCtrlPc,$dftlActionPc)=$this->application->GetDefaultControllerAndActionNames();$ctrlIsNotDefault=$ctrlPc!==$dfltCtrlPc;$actionIsNotDefault=$actionPc!==$dftlActionPc;$sep='?';if($params||$ctrlIsNotDefault||$actionIsNotDefault)$result.=$this->request->GetScriptName();if($ctrlIsNotDefault){$result.=$sep.'controller='.$toolClass::GetDashedFromPascalCase($ctrlPc);$sep=$amp;}if($actionIsNotDefault){$result.=$sep.'action='.$toolClass::GetDashedFromPascalCase($actionPc);$sep=$amp;}if($params)$result.=$sep.str_replace('%2F','/',http_build_query($params,'',$amp,PHP_QUERY_RFC3986));if($result=='')$result='/';return$result;}protected function urlGetAbsoluteParam(array&$params=[]){$absolute=FALSE;$absoluteParamName=static::URL_PARAM_ABSOLUTE;if($params&&isset($params[$absoluteParamName])){$absolute=(bool)$params[$absoluteParamName];unset($params[$absoluteParamName]);}return$absolute;}}}
namespace MvcCore\Ext\Auths\Basics{interface IAuth{public static function GetInstance($configuration=[]);public function GetExpirationSeconds();public function GetUserClass();public function GetRoleClass();public function GetControllerClass();public function GetSignInFormClass();public function GetSignOutFormClass();public function GetSignedInUrl();public function GetSignedOutUrl();public function GetSignErrorUrl();public function GetSignInRoute();public function GetSignOutRoute();public function GetPasswordHashSalt();public function GetInvalidCredentialsTimeout();public function GetTranslator();public function GetUser();public function IsAuthenticated();public function GetForm();public function GetSignInForm();public function GetSignOutForm();public function GetConfiguration();public function SetExpirationSeconds($expirationSeconds=600);public function SetUserClass($userClass='');public function SetRoleClass($roleClass='');public function SetControllerClass($controllerClass='');public function SetSignInFormClass($signInFormClass='');public function SetSignOutFormClass($signOutFormClass='');public function SetSignedInUrl($signedInUrl=NULL);public function SetSignedOutUrl($signedOutUrl=NULL);public function SetSignErrorUrl($signErrorUrl=NULL);public function SetSignInRoute($signInRoute=NULL);public function SetSignOutRoute($signOutRoute=NULL);public function SetPasswordHashSalt($passwordHashSalt='');public function SetInvalidCredentialsTimeout($seconds=3);public function SetTranslator(callable$translator=NULL);public function SetUser(\MvcCore\Ext\Auths\Basics\IUser$user=NULL);public function SetForm(\MvcCore\Ext\Auths\Basics\IForm$form);public function SetConfiguration($configuration=[],$throwExceptionIfPropertyIsMissing=TRUE);public function SetTableStructureForDbUsers($tableName=NULL,$columnNames=NULL);}}
namespace MvcCore\Router{trait UrlByRoutes{public function UrlByRoute(\MvcCore\IRoute$route,array&$params=[],$urlParamRouteName=NULL){if($urlParamRouteName=='self')$params=array_merge($this->requestedParams?:[],$params);$defaultParams=$this->GetDefaultParams()?:[];list($resultUrl)=$route->Url($this->request,$params,$defaultParams,$this->getQueryStringParamsSepatator(),FALSE);return$resultUrl;}protected function getQueryStringParamsSepatator(){if($this->queryParamsSepatator===NULL){$response=\MvcCore\Application::GetInstance()->GetResponse();if($response->HasHeader('Content-Type')){$this->queryParamsSepatator=$response->IsXmlOutput()?'&amp;':'&';}else{$viewDocType=\MvcCore\View::GetDoctype();$this->queryParamsSepatator=(strpos($viewDocType,\MvcCore\View::DOCTYPE_XML)!==FALSE||strpos($viewDocType,\MvcCore\View::DOCTYPE_XHTML)!==FALSE)?'&amp;':'&';}}return$this->queryParamsSepatator;}}}
namespace MvcCore\Router{trait Props{protected static$instance=NULL;protected static$routerClass=NULL;protected static$routeClass=NULL;protected static$toolClass=NULL;protected$application=NULL;protected$request=NULL;protected$routes=[];protected$routesGroups=[];protected$urlRoutes=[];protected$routeByQueryString=NULL;protected$currentRoute=NULL;protected$selfRouteName=NULL;protected$routeToDefaultIfNotMatch=FALSE;protected$defaultParams=[];protected$requestedParams=[];protected$trailingSlashBehaviour=0;protected$autoCanonizeRequests=TRUE;protected$queryParamsSepatator=NULL;protected$anyRoutesConfigured=NULL;protected$preRouteMatchingHandler=NULL;protected$preRouteUrlBuildingHandler=NULL;protected$noUrlRoutes=[];protected$internalRequest=FALSE;}}
namespace MvcCore\Tool{trait Helpers{protected static$tmpDir=NULL;public static function EncodeJson($data,$flags=0,$depth=512){if(!defined('JSON_PRESERVE_ZERO_FRACTION'))define('JSON_PRESERVE_ZERO_FRACTION',1024);$flags|=(JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_NUMERIC_CHECK|JSON_UNESCAPED_SLASHES|JSON_PRESERVE_ZERO_FRACTION);if(\PHP_VERSION_ID>=50500){$result=@json_encode($data,$flags,$depth);}else{$result=@json_encode($data,$flags);}$errorCode=json_last_error();if($errorCode==JSON_ERROR_NONE){if(PHP_VERSION_ID<70100)$result=strtr($result,["\xe2\x80\xa8"=>'\u2028',"\xe2\x80\xa9"=>'\u2029',]);return$result;}throw new\RuntimeException("[".get_class()."] ".static::getJsonLastErrorMessage($errorCode),$errorCode);}public static function DecodeJson($jsonStr,$flags=0,$depth=512){$assoc=($flags&JSON_OBJECT_AS_ARRAY)!=0;$result=@json_decode($jsonStr,$assoc,$depth,$flags);$errorCode=json_last_error();if($errorCode==JSON_ERROR_NONE)return$result;throw new\RuntimeException("[".get_class()."] ".static::getJsonLastErrorMessage($errorCode),$errorCode);}protected static function getJsonLastErrorMessage($jsonErrorCode){if(function_exists('json_last_error_msg')){return json_last_error_msg();}else{static$__jsonErrorMessages=array(JSON_ERROR_DEPTH=>'The maximum stack depth has been exceeded.',JSON_ERROR_STATE_MISMATCH=>'Occurs with underflow or with the modes mismatch.',JSON_ERROR_CTRL_CHAR=>'Control character error, possibly incorrectly encoded.',JSON_ERROR_SYNTAX=>'Syntax error.',JSON_ERROR_UTF8=>'Malformed UTF-8 characters, possibly incorrectly encoded.');return$__jsonErrorMessages[$jsonErrorCode];}}public static function IsJsonString($jsonStr){return!preg_match('#[^,:{}\[\]0-9.\\-+Eaeflnr-u \n\r\t]#',preg_replace('#"(\.|[^\\"])*"#','',(string)$jsonStr));}public static function IsQueryString($queryStr){$queryStr=trim($queryStr,'&=');$apmsCount=substr_count($queryStr,'&');$equalsCount=substr_count($queryStr,'=');$firstAndLast=mb_substr($queryStr,0,1).mb_substr($queryStr,-1,1);if($firstAndLast==='{}'||$firstAndLast==='[]')return FALSE;if($apmsCount===0&&$equalsCount===0)return FALSE;if($equalsCount>0)$equalsCount-=1;if($equalsCount===0)return TRUE;return$apmsCount/$equalsCount>=1;}public static function GetSystemTmpDir(){if(self::$tmpDir===NULL){$tmpDir=sys_get_temp_dir();if(strtolower(substr(PHP_OS,0,3))=='win'){$sysRoot=getenv('SystemRoot');if(!$tmpDir||$tmpDir===$sysRoot){$tmpDir=!empty($_SERVER['TEMP'])?$_SERVER['TEMP']:(!empty($_SERVER['TMP'])?$_SERVER['TMP']:(!empty($_SERVER['WINDIR'])?$_SERVER['WINDIR'].'/Temp':$sysRoot.'/Temp'));}$tmpDir=str_replace('\\','/',$tmpDir);}else if(!$tmpDir){$iniSysTempDir=@ini_get('sys_temp_dir');$tmpDir=!empty($_SERVER['TMPDIR'])?$_SERVER['TMPDIR']:(!empty($_SERVER['TMP'])?$_SERVER['TMP']:(!empty($iniSysTempDir)?$iniSysTempDir:'/tmp'));}self::$tmpDir=$tmpDir;}return self::$tmpDir;}public static function Invoke($internalFnOrHandler,array$args,callable$onError){$prevErrorHandler=NULL;$prevErrorHandler=set_error_handler(function($errLevel,$errMessage,$errFile,$errLine,$errContext)use($onError,&$prevErrorHandler,$internalFnOrHandler){if($errFile===''&&defined('HHVM_VERSION'))$errFile=func_get_arg(5)[1]['file'];if($errFile===PACKAGER_PHP_FILE_BASE.'/vendor/mvccore/mvccore/src/MvcCore/Tool/Helpers.php'){$funcNameStr=is_string($internalFnOrHandler)?$internalFnOrHandler:(is_array($internalFnOrHandler)&&count($internalFnOrHandler)===2?$internalFnOrHandler[1]:strval($internalFnOrHandler));$errMessage=preg_replace("#^$funcNameStr\(.*?\): #",'',$errMessage);if($onError($errMessage,$errLevel,$errFile,$errLine,$errContext)!==FALSE)return TRUE;}return$prevErrorHandler?call_user_func_array($prevErrorHandler,func_get_args()):FALSE;});try{return call_user_func_array($internalFnOrHandler,$args);}catch(\Exception$e){}restore_error_handler();return NULL;}public static function SingleProcessWrite($fullPath,$content,$writeMode='w',$lockWaitMilliseconds=100,$maxLockWaitMilliseconds=5000,$oldLockMillisecondsTolerance=30000){$waitUTime=$lockWaitMilliseconds*1000;$lockHandle=NULL;$tmpDir=self::GetSystemTmpDir();$lockFullPath=$tmpDir.'/mvccore_lock_'.sha1($fullPath).'.tmp';set_error_handler(function($level,$msg,$file,$line,$args)use(&$fullPath,&$lockFullPath,&$lockHandle){if($level==E_WARNING){if(mb_strpos($msg,'fopen('.$fullPath)===0||mb_strpos($msg,'filemtime('.$fullPath)===0||mb_strpos($msg,'fopen('.$lockFullPath)===0||mb_strpos($msg,'filemtime('.$lockFullPath)===0){if($lockHandle!==NULL){@flock($lockHandle,LOCK_UN);fclose($lockHandle);unlink($lockFullPath);}throw new\Exception($msg);}}return FALSE;},E_WARNING);clearstatcache(TRUE,$lockFullPath);if(\Packager_Php_Wrapper::FileExists($lockFullPath)){$fileModTime=@\Packager_Php_Wrapper::Filemtime($lockFullPath);if($fileModTime!==FALSE){if(time()>$fileModTime+$oldLockMillisecondsTolerance)unlink($lockFullPath);}}$waitingTime=0;while(TRUE){clearstatcache(TRUE,$lockFullPath);$lockHandle=@fopen($lockFullPath,'x');if($lockHandle!==FALSE)break;$waitingTime+=$lockWaitMilliseconds;if($waitingTime>$maxLockWaitMilliseconds){throw new\Exception('Unable to create lock handle: `'.$lockFullPath.'` for file: `'.$fullPath.'`. Lock creation timeout. Try to clear cache: `'.$tmpDir.'`');}usleep($waitUTime);}if(!flock($lockHandle,LOCK_EX)){fclose($lockHandle);unlink($lockFullPath);throw new\Exception('Unable to create lock handle: `'.$lockFullPath.'` for file: `'.$fullPath.'`. Lock creation timeout. Try to clear cache: `'.$tmpDir.'`');}fwrite($lockHandle,$fullPath);fflush($lockHandle);clearstatcache(TRUE,$fullPath);$handle=@fopen($fullPath,$writeMode);if($handle&&!flock($handle,LOCK_EX))$handle=FALSE;if(!$handle){flock($lockHandle,LOCK_UN);fclose($lockHandle);unlink($lockFullPath);throw new\Exception('Unable to create locked handle for file: `'.$fullPath.'`.');}fwrite($handle,$content);fflush($handle);flock($handle,LOCK_UN);flock($lockHandle,LOCK_UN);fclose($lockHandle);$success=unlink($lockFullPath);restore_error_handler();return$success;}}}
namespace MvcCore\Router{trait Instancing{public static function GetInstance(array$routes=[],$autoInitialize=TRUE){if(!self::$instance){$app=\MvcCore\Application::GetInstance();self::$routeClass=$app->GetRouteClass();self::$routerClass=$app->GetRouterClass();self::$toolClass=$app->GetToolClass();$routerClass=$app->GetRouterClass();$instance=new$routerClass($routes,$autoInitialize);$instance->application=$app;self::$instance=$instance;}return self::$instance;}public function __construct(array$routes=[],$autoInitialize=TRUE){if($routes)$this->SetRoutes($routes,NULL,$autoInitialize);}}}
namespace MvcCore\Router{trait GettersSetters{public function GetRequest(){return$this->request;}public function SetRequest(\MvcCore\IRequest$request){$this->request=$request;return$this;}public function SetRouteByQueryString($routeByQueryString=TRUE){$this->routeByQueryString=$routeByQueryString;return$this;}public function GetRouteByQueryString(){return$this->routeByQueryString;}public function GetRouteToDefaultIfNotMatch(){return$this->routeToDefaultIfNotMatch;}public function SetRouteToDefaultIfNotMatch($enable=TRUE){$this->routeToDefaultIfNotMatch=$enable;return$this;}public function&GetDefaultParams(){return$this->defaultParams;}public function&GetRequestedParams(){return$this->requestedParams;}public function GetTrailingSlashBehaviour(){return$this->trailingSlashBehaviour;}public function SetTrailingSlashBehaviour($trailingSlashBehaviour=-1){$this->trailingSlashBehaviour=$trailingSlashBehaviour;return$this;}public function GetAutoCanonizeRequests(){return$this->autoCanonizeRequests;}public function SetAutoCanonizeRequests($autoCanonizeRequests=TRUE){$this->autoCanonizeRequests=$autoCanonizeRequests;return$this;}public function SetPreRouteMatchingHandler(callable$preRouteMatchingHandler=NULL){$this->preRouteMatchingHandler=$preRouteMatchingHandler;if($preRouteMatchingHandler===NULL)$this->anyRoutesConfigured=count($this->routes)>0;return$this;}public function GetPreRouteMatchingHandler(){return$this->preRouteMatchingHandler;}public function SetPreRouteUrlBuildingHandler(callable$preRouteUrlBuildingHandler=NULL){$this->preRouteUrlBuildingHandler=$preRouteUrlBuildingHandler;return$this;}public function GetPreRouteUrlBuildingHandler(){return$this->preRouteUrlBuildingHandler;}}}
namespace MvcCore\Session{trait Closing{public static function Close(){if(!static::GetStarted())return;register_shutdown_function(function(){foreach(static::$instances as&$instance)if(count((array)$_SESSION[$instance->__name])===0)$instance->Destroy();$metaKey=static::SESSION_METADATA_KEY;$_SESSION[$metaKey]=serialize(static::$meta);@session_write_close();});}public static function SendCookie(){if(!static::GetStarted())return;$maxExpiration=static::GetSessionMaxTime();$response=\MvcCore\Application::GetInstance()->GetResponse();if(!$response->IsSent()){$params=(object)session_get_cookie_params();$response->SetCookie(session_name(),session_id(),($maxExpiration>static::$sessionStartTime?(static::$sessionMaxTime-static::$sessionStartTime):(isset($params->lifetime)?$params->lifetime:0)),$params->path,$params->domain,$params->secure,TRUE);}}public static function GetSessionMaxTime(){static::$sessionMaxTime=static::$sessionStartTime;if(static::$meta->expirations){foreach(static::$meta->expirations as$expiration){if($expiration>static::$sessionMaxTime)static::$sessionMaxTime=$expiration;}}return static::$sessionMaxTime;}}}
namespace MvcCore\Session{trait MagicMethods{public function __get($key){$name=$this->__name;if(isset($_SESSION[$name][$key]))return$_SESSION[$name][$key];return NULL;}public function __set($key,$value){return$_SESSION[$this->__name][$key]=$value;}public function __isset($key){return isset($_SESSION[$this->__name][$key]);}public function __unset($key){$name=$this->__name;if(isset($_SESSION[$name][$key]))unset($_SESSION[$name][$key]);}public function __debugInfo(){$hoops=isset(static::$meta->hoops[$this->__name])?static::$meta->hoops[$this->__name]:NULL;$expiration=isset(static::$meta->expirations[$this->__name])?static::$meta->expirations[$this->__name]:NULL;return['name'=>$this->__name,'expirationSeconds'=>date('D, d M Y H:i:s',$expiration),'expirationHoops'=>$hoops,'values'=>$_SESSION[$this->__name],];}public function count(){return count((array)$_SESSION[$this->__name]);}public function getIterator(){return new\ArrayIterator($_SESSION[$this->__name]);}public function offsetSet($offset,$value){$data=&$_SESSION[$this->__name];if($offset===NULL){$data[]=$value;}else{$data[$offset]=$value;}}public function offsetGet($offset){$data=&$_SESSION[$this->__name];return isset($data[$offset])?$data[$offset]:NULL;}public function offsetExists($offset){return isset($_SESSION[$this->__name][$offset]);}public function offsetUnset($offset){unset($_SESSION[$this->__name][$offset]);}}}
namespace MvcCore\Router{trait Canonical{protected function canonicalRedirectIfAny(){if($this->internalRequest||!$this->autoCanonizeRequests||$this->request->GetMethod()!==\MvcCore\IRequest::METHOD_GET)return TRUE;if($this->routeByQueryString){return$this->canonicalRedirectQueryStringStrategy();}else if($this->selfRouteName!==NULL){return$this->canonicalRedirectRewriteRoutesStrategy();}return TRUE;}protected function canonicalRedirectQueryStringStrategy(){$request=$this->request;$redirectToCanonicalUrl=FALSE;$requestGlobalGet=&$request->GetGlobalCollection('get');$requestedCtrlDc=isset($requestGlobalGet[static::URL_PARAM_CONTROLLER])?$requestGlobalGet[static::URL_PARAM_CONTROLLER]:NULL;$requestedActionDc=isset($requestGlobalGet[static::URL_PARAM_ACTION])?$requestGlobalGet[static::URL_PARAM_ACTION]:NULL;$toolClass=self::$toolClass;list($dfltCtrlPc,$dftlActionPc)=$this->application->GetDefaultControllerAndActionNames();$dfltCtrlDc=$toolClass::GetDashedFromPascalCase($dfltCtrlPc);$dftlActionDc=$toolClass::GetDashedFromPascalCase($dftlActionPc);$requestedParamsClone=array_merge([],$this->requestedParams);if($requestedCtrlDc!==NULL&&$requestedCtrlDc===$dfltCtrlDc){unset($requestedParamsClone[static::URL_PARAM_CONTROLLER]);$redirectToCanonicalUrl=TRUE;}if($requestedActionDc!==NULL&&$requestedActionDc===$dftlActionDc){unset($requestedParamsClone[static::URL_PARAM_ACTION]);$redirectToCanonicalUrl=TRUE;}if($redirectToCanonicalUrl){$selfCanonicalUrl=$this->UrlByQueryString($this->selfRouteName,$requestedParamsClone);$this->redirect($selfCanonicalUrl,\MvcCore\IResponse::MOVED_PERMANENTLY,'Canonical URL');return FALSE;}return TRUE;}protected function canonicalRedirectRewriteRoutesStrategy(){$request=$this->request;$redirectToCanonicalUrl=FALSE;$defaultParams=$this->GetDefaultParams()?:[];list($selfUrlDomainAndBasePart,$selfUrlPathAndQueryPart)=$this->currentRoute->Url($request,$this->requestedParams,$defaultParams,$this->getQueryStringParamsSepatator(),TRUE);if(mb_strpos($selfUrlDomainAndBasePart,'//')===FALSE)$selfUrlDomainAndBasePart=$request->GetDomainUrl().$selfUrlDomainAndBasePart;if(mb_strlen($selfUrlDomainAndBasePart)>0&&$selfUrlDomainAndBasePart!==$request->GetBaseUrl()){$redirectToCanonicalUrl=TRUE;}else if(mb_strlen($selfUrlPathAndQueryPart)>0){$path=$request->GetPath(FALSE);$requestedUrl=$path===''?'/':$path;if(mb_strpos($selfUrlPathAndQueryPart,'?')!==FALSE){$selfUrlPathAndQueryPart=rawurldecode($selfUrlPathAndQueryPart);$requestedUrl.=$request->GetQuery(TRUE,FALSE);}if($selfUrlPathAndQueryPart!==$requestedUrl)$redirectToCanonicalUrl=TRUE;}if($redirectToCanonicalUrl){$selfCanonicalUrl=$this->Url($this->selfRouteName,$this->requestedParams);$this->redirect($selfCanonicalUrl,\MvcCore\IResponse::MOVED_PERMANENTLY);return FALSE;}return TRUE;}}}
namespace MvcCore\Route{trait UrlBuilding{public function Filter(array&$params=[],array&$defaultParams=[],$direction=\MvcCore\IRoute::CONFIG_FILTER_IN){if(!$this->filters||!isset($this->filters[$direction]))return[TRUE,$params];list($closureCalling,$handler)=$this->filters[$direction];try{$req=\MvcCore\Application::GetInstance()->GetRequest();if($closureCalling){$newParams=$handler($params,$defaultParams,$req);}else{$newParams=call_user_func_array($handler,[$params,$defaultParams,$req]);}$success=TRUE;}catch(\RuntimeException$e){\MvcCore\Debug::Log($e,\MvcCore\IDebug::ERROR);$success=FALSE;$newParams=$params;}return[$success,$newParams];}public function Url(\MvcCore\IRequest$request,array&$params=[],array&$defaultUrlParams=[],$queryStringParamsSepatator='&',$splitUrl=FALSE){if($this->reverseParams===NULL)$this->initReverse();if(count($this->reverseParams)===0){$allParamsClone=array_merge([],$params);}else{$emptyReverseParams=array_fill_keys(array_keys($this->reverseParams),'');$allMergedParams=array_merge($this->defaults,$defaultUrlParams,$params);$allParamsClone=array_merge($emptyReverseParams,array_intersect_key($allMergedParams,$emptyReverseParams),$params);}list(,$filteredParams)=$this->Filter($allParamsClone,$defaultUrlParams,\MvcCore\IRoute::CONFIG_FILTER_OUT);$domainParams=$this->urlGetAndRemoveDomainPercentageParams($filteredParams);$result=$this->urlComposeByReverseSectionsAndParams($this->reverse,$this->reverseSections,$this->reverseParams,$filteredParams,$this->defaults);if($filteredParams){$result.=(mb_strpos($result,'?')!==FALSE?$queryStringParamsSepatator:'?').str_replace('%2F','/',http_build_query($filteredParams,'',$queryStringParamsSepatator,PHP_QUERY_RFC3986));}return$this->urlAbsPartAndSplit($request,$result,$domainParams,$splitUrl);}protected function urlComposeByReverseSectionsAndParams(&$reverse,&$reverseSections,&$reverseParams,&$params,&$defaults){$sections=[];$paramIndex=0;$reverseParamsKeys=array_keys($reverseParams);$paramsCount=count($reverseParamsKeys);$anyParams=$paramsCount>0;foreach($reverseSections as$sectionIndex=>&$section){$fixed=$section->fixed;$sectionResult='';if($anyParams){$sectionOffset=$section->start;$sectionParamsCount=0;$defaultValuesCount=0;while($paramIndex<$paramsCount){$paramKey=$reverseParamsKeys[$paramIndex];$param=$reverseParams[$paramKey];if($param->sectionIndex!==$sectionIndex)break;$sectionParamsCount++;$paramStart=$param->reverseStart;if($sectionOffset<$paramStart)$sectionResult.=mb_substr($reverse,$sectionOffset,$paramStart-$sectionOffset);$paramName=$param->name;$paramValue=$params[$paramName];$paramValueStr=is_array($paramValue)?implode(',',$paramValue):strval($paramValue);if($paramValue===NULL||(array_key_exists($paramName,$defaults)&&$paramValueStr==strval($defaults[$paramName])))$defaultValuesCount++;$sectionResult.=htmlspecialchars($paramValueStr,ENT_QUOTES);unset($params[$paramName]);$paramIndex+=1;$sectionOffset=$param->reverseEnd;}$sectionEnd=$section->end;if(!$fixed&&$sectionParamsCount===$defaultValuesCount){$sectionResult='';}else if($sectionOffset<$sectionEnd){$sectionResult.=mb_substr($reverse,$sectionOffset,$sectionEnd-$sectionOffset);}}else if($fixed){$sectionResult=mb_substr($reverse,$section->start,$section->length);}$sections[]=$sectionResult;}$result=implode('',$sections);$result=&$this->urlCorrectTrailingSlashBehaviour($result);return$result;}protected function urlAbsPartAndSplit(\MvcCore\IRequest$request,$resultUrl,&$domainParams,$splitUrl){$domainParamsFlag=$this->flags[1];$basePathInReverse=FALSE;if($domainParamsFlag>=static::FLAG_HOST_BASEPATH){$basePathInReverse=TRUE;$domainParamsFlag-=static::FLAG_HOST_BASEPATH;}if($this->flags[0]){$this->urlReplaceDomainReverseParams($request,$resultUrl,$domainParams,$domainParamsFlag);if($basePathInReverse){return$this->urlAbsPartAndSplitByReverseBasePath($request,$resultUrl,$domainParams,$splitUrl);}else{return$this->urlAbsPartAndSplitByRequestedBasePath($request,$resultUrl,$splitUrl);}}else{return$this->urlAbsPartAndSplitByGlobalSwitchOrBasePath($request,$resultUrl,$domainParams,$domainParamsFlag,$splitUrl);}}protected function urlReplaceDomainReverseParams(\MvcCore\IRequest$request,&$resultUrl,&$domainParams,$domainParamsFlag){$replacements=[];$values=[];$router=$this->router;if($domainParamsFlag==static::FLAG_HOST_HOST){$hostParamName=$router::URL_PARAM_HOST;$replacements[]=static::PLACEHOLDER_HOST;$values[]=isset($domainParams[$hostParamName])?$domainParams[$hostParamName]:$request->GetHost();}else if($domainParamsFlag==static::FLAG_HOST_DOMAIN){$domainParamName=$router::URL_PARAM_DOMAIN;$replacements[]=static::PLACEHOLDER_DOMAIN;$values[]=isset($domainParams[$domainParamName])?$domainParams[$domainParamName]:$request->GetSecondLevelDomain().'.'.$request->GetTopLevelDomain();}else{if($domainParamsFlag==static::FLAG_HOST_TLD){$tldParamName=$router::URL_PARAM_TLD;$replacements[]=static::PLACEHOLDER_TLD;$values[]=isset($domainParams[$tldParamName])?$domainParams[$tldParamName]:$request->GetTopLevelDomain();}else if($domainParamsFlag==static::FLAG_HOST_SLD){$sldParamName=$router::URL_PARAM_SLD;$replacements[]=static::PLACEHOLDER_SLD;$values[]=isset($domainParams[$sldParamName])?$domainParams[$sldParamName]:$request->GetSecondLevelDomain();}else if($domainParamsFlag==static::FLAG_HOST_TLD+static::FLAG_HOST_SLD){$tldParamName=$router::URL_PARAM_TLD;$sldParamName=$router::URL_PARAM_SLD;$replacements[]=static::PLACEHOLDER_TLD;$replacements[]=static::PLACEHOLDER_SLD;$values[]=isset($domainParams[$tldParamName])?$domainParams[$tldParamName]:$request->GetTopLevelDomain();$values[]=isset($domainParams[$sldParamName])?$domainParams[$sldParamName]:$request->GetSecondLevelDomain();}}$resultUrl=str_replace($replacements,$values,$resultUrl);}protected function urlAbsPartAndSplitByReverseBasePath(\MvcCore\IRequest$request,$resultUrl,&$domainParams,$splitUrl){$doubleSlashPos=mb_strpos($resultUrl,'//');$doubleSlashPos=$doubleSlashPos===FALSE?0:$doubleSlashPos+2;$router=$this->router;$basePathPlaceHolderPos=mb_strpos($resultUrl,static::PLACEHOLDER_BASEPATH,$doubleSlashPos);if($basePathPlaceHolderPos===FALSE){return$this->urlAbsPartAndSplitByRequestedBasePath($request,$resultUrl,$splitUrl);}$pathPart=mb_substr($resultUrl,$basePathPlaceHolderPos+mb_strlen(static::PLACEHOLDER_BASEPATH));$pathPart=str_replace('//','/',$pathPart);$basePart=mb_substr($resultUrl,0,$basePathPlaceHolderPos);$basePathParamName=$router::URL_PARAM_BASEPATH;$basePart.=isset($domainParams[$basePathParamName])?$domainParams[$basePathParamName]:$request->GetBasePath();if($this->flags[0]===static::FLAG_SCHEME_ANY)$basePart=$request->GetScheme().$basePart;if($splitUrl)return[$basePart,$pathPart];return[$basePart.$pathPart];}protected function urlAbsPartAndSplitByRequestedBasePath(\MvcCore\IRequest$request,$resultUrl,$splitUrl){$doubleSlashPos=mb_strpos($resultUrl,'//');$doubleSlashPos=$doubleSlashPos===FALSE?0:$doubleSlashPos+2;if(!$splitUrl){$resultSchemePart=mb_substr($resultUrl,0,$doubleSlashPos);$resultAfterScheme=mb_substr($resultUrl,$doubleSlashPos);$resultAfterScheme=str_replace('//','/',$resultAfterScheme);if($this->flags[0]===static::FLAG_SCHEME_ANY){$resultUrl=$request->GetScheme().'//'.$resultAfterScheme;}else{$resultUrl=$resultSchemePart.$resultAfterScheme;}return[$resultUrl];}else{$nextSlashPos=mb_strpos($resultUrl,'/',$doubleSlashPos);if($nextSlashPos===FALSE){$queryStringPos=mb_strpos($resultUrl,'?',$doubleSlashPos);$baseUrlPartEndPos=$queryStringPos===FALSE?mb_strlen($resultUrl):$queryStringPos;}else{$baseUrlPartEndPos=$nextSlashPos;}$requestedBasePath=$request->GetBasePath();$basePathLength=mb_strlen($requestedBasePath);if($basePathLength>0){$basePathPos=mb_strpos($resultUrl,$requestedBasePath,$baseUrlPartEndPos);if($basePathPos===$baseUrlPartEndPos)$baseUrlPartEndPos+=$basePathLength;}$basePart=mb_substr($resultUrl,0,$baseUrlPartEndPos);if($this->flags[0]===static::FLAG_SCHEME_ANY)$basePart=$request->GetScheme().$basePart;$pathAndQueryPart=str_replace('//','/',mb_substr($resultUrl,$baseUrlPartEndPos));return[$basePart,$pathAndQueryPart];}}protected function urlAbsPartAndSplitByGlobalSwitchOrBasePath(\MvcCore\IRequest$request,$resultUrl,&$domainParams,$domainParamsFlag,$splitUrl){$router=$this->router;$basePathParamName=$router::URL_PARAM_BASEPATH;$basePart=isset($domainParams[$basePathParamName])?isset($domainParams[$basePathParamName]):$request->GetBasePath();if($domainParamsFlag){$placeHolderBasePath=static::PLACEHOLDER_BASEPATH;$basePathPlaceHolderPos=mb_strpos($resultUrl,$placeHolderBasePath);if($basePathPlaceHolderPos!==FALSE){$basePart=mb_substr($resultUrl,0,$basePathPlaceHolderPos).$basePart;$resultUrl=mb_substr($resultUrl,$basePathPlaceHolderPos+mb_strlen($placeHolderBasePath));}}$absoluteParamName=$router::URL_PARAM_ABSOLUTE;if($this->absolute||(isset($domainParams[$absoluteParamName])&&$domainParams[$absoluteParamName]))$basePart=$request->GetDomainUrl().$basePart;$resultUrl=str_replace('//','/',$resultUrl);if($splitUrl)return[$basePart,$resultUrl];return[$basePart.$resultUrl];}protected function urlGetAndRemoveDomainPercentageParams(array&$params=[]){static$domainPercentageParams=[];$absolute=FALSE;$router=$this->router;$absoluteParamName=$router::URL_PARAM_ABSOLUTE;$result=[];if(!$domainPercentageParams){$domainPercentageParams=[$router::URL_PARAM_HOST,$router::URL_PARAM_DOMAIN,$router::URL_PARAM_TLD,$router::URL_PARAM_SLD,$router::URL_PARAM_BASEPATH,];}foreach($domainPercentageParams as$domainPercentageParam){if(isset($params[$domainPercentageParam])){$absolute=TRUE;$result[$domainPercentageParam]=$params[$domainPercentageParam];unset($params[$domainPercentageParam]);}}if($absolute){$result[$absoluteParamName]=TRUE;}else if(isset($params[$absoluteParamName])){$result[$absoluteParamName]=(bool)$params[$absoluteParamName];unset($params[$absoluteParamName]);}return$result;}protected function&urlCorrectTrailingSlashBehaviour(&$urlPath){$trailingSlashBehaviour=$this->_trailingSlashBehaviour?:($this->_trailingSlashBehaviour=$this->router->GetTrailingSlashBehaviour());$urlPathLength=mb_strlen($urlPath);$lastCharIsSlash=$urlPathLength>0&&mb_substr($urlPath,$urlPathLength-1)==='/';if(!$lastCharIsSlash&&$trailingSlashBehaviour===\MvcCore\IRouter::TRAILING_SLASH_ALWAYS){$urlPath.='/';}else if($lastCharIsSlash&&$trailingSlashBehaviour===\MvcCore\IRouter::TRAILING_SLASH_REMOVE){$urlPath=mb_substr($urlPath,0,$urlPathLength-1);}if($urlPath==='')$urlPath='/';return$urlPath;}}}
namespace MvcCore\Route{trait Props{protected static$defaultPathConstraint='[^/]+';protected static$defaultDomainConstraint='[^\.]+';protected static$protectedProperties=['router'=>1,'matchedParams'=>1,];protected$pattern=NULL;protected$match=NULL;protected$reverse=NULL;protected$name='';protected$controller='';protected$action='';protected$defaults=[];protected$constraints=[];protected$filters=[];protected$method=NULL;protected$redirect=NULL;protected$absolute=FALSE;protected$groupName=NULL;protected$reverseParams=NULL;protected$matchedParams=[];protected$reverseSections=NULL;protected$lastPatternParam=NULL;protected$flags=[];protected$router=NULL;protected$config=[];private$_trailingSlashBehaviour=NULL;}}
namespace MvcCore\Session{trait MetaData{protected static function setUpMeta(){$metaKey=static::SESSION_METADATA_KEY;$meta=[];if(isset($_SESSION[$metaKey]))$meta=@unserialize($_SESSION[$metaKey]);if(!$meta)$meta=['names'=>[],'hoops'=>[],'expirations'=>[],];$meta=(object)$meta;static::$meta=&$meta;}protected static function setUpData(){$hoops=&static::$meta->hoops;$names=&static::$meta->names;$expirations=&static::$meta->expirations;foreach($hoops as$name=>$hoop){$hoops[$name]-=1;}foreach($names as$name=>$one){$unset=[];if(isset($hoops[$name])){if($hoops[$name]<0)$unset[]='hoops';}if(isset($expirations[$name])){$expiration=$expirations[$name];if($expiration<static::$sessionStartTime){$unset[]='expirations';}else if($expiration>static::$sessionMaxTime){static::$sessionMaxTime=$expiration;}}if($unset){$currentErrRepLevels=error_reporting();error_reporting(0);foreach($unset as$unsetKey){if(isset(static::$meta->{$unsetKey})&&isset(static::$meta->{$unsetKey}[$name])){unset(static::$meta->{$unsetKey}[$name]);}}error_reporting($currentErrRepLevels);unset($names[$name]);unset($_SESSION[$name]);}}}public static function GetSessionMetadata(){return static::$meta;}}}
namespace MvcCore\Ext\Auths\Basics\Form{trait Base{protected$auth=NULL;protected$successUrlField=NULL;protected$errorUrlField=NULL;protected$sourceUrlField=NULL;protected function initAuthFormPropsAndHiddenControls(){$this->auth=\MvcCore\Ext\Auths\Basic::GetInstance();$this->successUrlField=new\MvcCore\Ext\Forms\Fields\Hidden(['name'=>'successUrl','value'=>$this->auth->GetSignedInUrl(),'validators'=>['Url'],]);$this->errorUrlField=new\MvcCore\Ext\Forms\Fields\Hidden(['name'=>'errorUrl','value'=>$this->auth->GetSignErrorUrl(),'validators'=>['Url'],]);$this->sourceUrlField=new\MvcCore\Ext\Forms\Fields\Hidden(['name'=>'sourceUrl','validators'=>['Url'],]);$this->AddFields($this->successUrlField,$this->errorUrlField,$this->sourceUrlField);return$this;}public function PreDispatch(){if($this->dispatchState>1)return$this;parent::PreDispatch();$successUrlValue=$this->successUrlField->GetValue();if($successUrlValue){$this->auth->SetSignedInUrl(rawurlencode($successUrlValue));$this->successUrlField->SetValue(rawurlencode($successUrlValue));}else{$successUrlValue=$this->auth->GetSignedInUrl();if(!$successUrlValue)$successUrlValue=htmlspecialchars($this->request->GetFullUrl());$this->successUrlField->SetValue(rawurlencode($successUrlValue));}$errorUrlValue=$this->errorUrlField->GetValue();if($errorUrlValue){$this->auth->SetSignErrorUrl(rawurlencode($errorUrlValue));$this->errorUrlField->SetValue(rawurlencode($errorUrlValue));}else{$errorUrlValue=$this->auth->GetSignErrorUrl();if(!$errorUrlValue)$errorUrlValue=htmlspecialchars($this->request->GetFullUrl());$this->errorUrlField->SetValue(rawurlencode($errorUrlValue));}$sourceUrl=$this->request->GetParam('sourceUrl',FALSE,'','string');while(preg_match("#%[0-9a-zA-Z]{2}#",$sourceUrl))$sourceUrl=rawurldecode($sourceUrl);$parsedSourceUrl=parse_url($sourceUrl);if($parsedSourceUrl!==NULL&&isset($parsedSourceUrl['host'])&&$parsedSourceUrl['host']===$this->request->GetHostName())$this->sourceUrlField->SetValue(rawurlencode($sourceUrl));return$this;}}}
namespace MvcCore\Route{trait Matching{public function&Matches(\MvcCore\IRequest$request){$matchedParams=NULL;$pattern=$this->matchesGetPattern();$subject=$this->matchesGetSubject($request);$matchedValues=&$this->match($pattern,$subject);if(isset($matchedValues[0])&&count($matchedValues[0])>0){$matchedParams=$this->matchesParseRewriteParams($matchedValues,$this->GetDefaults());if(isset($matchedParams[$this->lastPatternParam]))$matchedParams[$this->lastPatternParam]=rtrim($matchedParams[$this->lastPatternParam],'/');}return$matchedParams;}protected function matchesGetPattern(){if($this->match===NULL){$this->initMatchAndReverse();}else{$this->initReverse();}return$this->match;}protected function matchesGetSubject(\MvcCore\IRequest$request){$subject=$this->matchesGetSubjectHostAndBase($request).$request->GetPath(TRUE);if($this->flags[2])$subject.=$request->GetQuery(TRUE,TRUE);return$subject;}protected function&match($pattern,&$subject){if(preg_match('#[^\x20-\x7f]#',$subject)){$lastHashPos=mb_strrpos($pattern,'#');if(mb_strpos($pattern,'u',$lastHashPos+1)===FALSE)$pattern.='u';}preg_match_all($pattern,$subject,$matchedValues);return$matchedValues;}protected function matchesGetSubjectHostAndBase(\MvcCore\IRequest$request){$schemeFlag=$this->flags[0];$basePathDefined=FALSE;$basePath='';$hostFlag=$this->flags[1];if($hostFlag>=static::FLAG_HOST_BASEPATH){$hostFlag-=static::FLAG_HOST_BASEPATH;$basePath=static::PLACEHOLDER_BASEPATH;$basePathDefined=TRUE;}if($schemeFlag){if(!$basePathDefined)$basePath=$request->GetBasePath();$subject=$this->matchesGetSubjectScheme($schemeFlag).$this->matchesGetSubjectHost($request,$hostFlag).$basePath;}else{$subject=$basePathDefined?$basePath:'';}return$subject;}protected function matchesGetSubjectScheme(&$schemeFlag){static$prefixes=NULL;if($prefixes===NULL)$prefixes=[static::FLAG_SCHEME_NO=>'',static::FLAG_SCHEME_ANY=>'//',static::FLAG_SCHEME_HTTP=>'http://',static::FLAG_SCHEME_HTTPS=>'https://',];return$prefixes[$schemeFlag];}protected function matchesGetSubjectHost(\MvcCore\IRequest$request,&$hostFlag){$hostPart='';if($hostFlag==static::FLAG_HOST_NO){$hostPart=$request->GetHostName();}else if($hostFlag==static::FLAG_HOST_HOST){$hostPart=static::PLACEHOLDER_HOST;}else if($hostFlag==static::FLAG_HOST_DOMAIN){$hostPart=$request->GetThirdLevelDomain().'.'.static::PLACEHOLDER_DOMAIN;}else if($hostFlag==static::FLAG_HOST_TLD){$hostPart=$request->GetThirdLevelDomain().'.'.$request->GetSecondLevelDomain().'.'.static::PLACEHOLDER_TLD;}else if($hostFlag==static::FLAG_HOST_SLD){$hostPart=$request->GetThirdLevelDomain().'.'.static::PLACEHOLDER_SLD.'.'.$request->GetTopLevelDomain();}else if($hostFlag==static::FLAG_HOST_TLD+static::FLAG_HOST_SLD){$hostPart=$request->GetThirdLevelDomain().'.'.static::PLACEHOLDER_SLD.'.'.static::PLACEHOLDER_TLD;}return$hostPart;}protected function&matchesParseRewriteParams(&$matchedValues,&$defaults){$toolClass=\MvcCore\Application::GetInstance()->GetToolClass();$matchedParams=[];$router=$this->router;if($this->controller!==NULL)$matchedParams[$router::URL_PARAM_CONTROLLER]=$toolClass::GetDashedFromPascalCase(str_replace(['_','\\'],'/',$this->controller));if($this->action!==NULL)$matchedParams[$router::URL_PARAM_ACTION]=$toolClass::GetDashedFromPascalCase($this->action);array_shift($matchedValues);foreach($matchedValues as$key=>$matchedValueArr){if(is_numeric($key))continue;$matchedValue=(string)current($matchedValueArr);if(!isset($defaults[$key]))$defaults[$key]=NULL;$matchedEmptyString=mb_strlen($matchedValue)===0;if($matchedEmptyString)$matchedValue=$defaults[$key];if(isset($matchedParams[$key])&&$matchedEmptyString)continue;$matchedParams[$key]=$matchedValue;}return$matchedParams;}}}
namespace MvcCore\Route{trait InternalInits{public function InitAll(){if($this->match===NULL&&$this->reverse===NULL){$this->initMatchAndReverse();}else if($this->match!==NULL&&($this->reverseParams===NULL||$this->lastPatternParam===NULL)){$this->initReverse();}return$this;}protected function initMatchAndReverse(){if($this->reverseSections!==NULL)return;if($this->pattern===NULL)$this->throwExceptionIfKeyPropertyIsMissing('pattern');$this->lastPatternParam=NULL;$match=addcslashes($this->pattern,"#(){}-?!=^$.+|:*\\");$reverse=$this->reverse!==NULL?$this->reverse:$this->pattern;list($this->reverseSections,$matchSections)=$this->initSectionsInfoForMatchAndReverse($reverse,$match);$this->reverse=$reverse;$this->reverseParams=$this->initReverseParams($reverse,$this->reverseSections,$this->constraints,$match);$this->initFlagsByPatternOrReverse($reverse);$this->match=$this->initMatchComposeRegex($match,$matchSections,$this->reverseParams,$this->constraints);}protected function initSectionsInfoForMatchAndReverse(&$match,&$reverse){$matchInfo=[];$reverseInfo=[];$reverseIndex=0;$matchIndex=0;$reverseLength=mb_strlen($reverse);$matchLength=mb_strlen($match);$matchOpenPos=FALSE;$matchClosePos=FALSE;while($reverseIndex<$reverseLength){$reverseOpenPos=mb_strpos($reverse,'[',$reverseIndex);$reverseClosePos=FALSE;if($reverseOpenPos!==FALSE){$reverseClosePos=mb_strpos($reverse,']',$reverseOpenPos);$matchOpenPos=mb_strpos($match,'[',$matchIndex);$matchClosePos=mb_strpos($match,']',$matchOpenPos);}if($reverseClosePos===FALSE){$reverseInfo[]=(object)['fixed'=>TRUE,'start'=>$reverseIndex,'end'=>$reverseLength,'length'=>$reverseLength-$reverseIndex];$matchInfo[]=(object)['fixed'=>TRUE,'start'=>$matchIndex,'end'=>$matchLength,'length'=>$matchLength-$matchIndex];break;}else{if($reverseIndex<$reverseOpenPos){$reverseInfo[]=(object)['fixed'=>TRUE,'start'=>$reverseIndex,'end'=>$reverseOpenPos,'length'=>$reverseOpenPos-$reverseIndex];$matchInfo[]=(object)['fixed'=>TRUE,'start'=>$matchIndex,'end'=>$matchOpenPos,'length'=>$matchOpenPos-$matchIndex];}$reverseOpenPosPlusOne=$reverseOpenPos+1;$reverseLocalLength=$reverseClosePos-$reverseOpenPosPlusOne;$reverse=mb_substr($reverse,0,$reverseOpenPos).mb_substr($reverse,$reverseOpenPosPlusOne,$reverseLocalLength).mb_substr($reverse,$reverseClosePos+1);$reverseLength-=2;$reverseClosePos-=1;$reverseInfo[]=(object)['fixed'=>FALSE,'start'=>$reverseOpenPos,'end'=>$reverseClosePos,'length'=>$reverseLocalLength];$matchOpenPosPlusOne=$matchOpenPos+1;$matchLocalLength=$matchClosePos-$matchOpenPosPlusOne;$match=mb_substr($match,0,$matchOpenPos).mb_substr($match,$matchOpenPosPlusOne,$matchLocalLength).mb_substr($match,$matchClosePos+1);$matchLength-=2;$matchClosePos-=1;$matchInfo[]=(object)['fixed'=>FALSE,'start'=>$matchOpenPos,'end'=>$matchClosePos,'length'=>$matchLocalLength];}$reverseIndex=$reverseClosePos;$matchIndex=$matchClosePos;}return[$matchInfo,$reverseInfo];}protected function initReverse(){if($this->reverseSections!==NULL)return;$reverse=NULL;if($this->reverse!==NULL){$reverse=$this->reverse;}else if($this->pattern!==NULL){$reverse=$this->pattern;}else{if($this->redirect!==NULL)return$this->initFlagsByPatternOrReverse($this->pattern!==NULL?$this->pattern:str_replace(['\\','(?',')?','/?'],'',$this->match));$this->throwExceptionIfKeyPropertyIsMissing('reverse','pattern');}$this->lastPatternParam=NULL;$this->reverseSections=$this->initSectionsInfo($reverse);$this->reverse=$reverse;$match=NULL;$this->reverseParams=$this->initReverseParams($reverse,$this->reverseSections,$this->constraints,$match);$this->initFlagsByPatternOrReverse($reverse);}protected function&initSectionsInfo(&$pattern){$result=[];$index=0;$length=mb_strlen($pattern);while($index<$length){$openPos=mb_strpos($pattern,'[',$index);$closePos=FALSE;if($openPos!==FALSE)$closePos=mb_strpos($pattern,']',$openPos);if($closePos===FALSE){$result[]=(object)['fixed'=>TRUE,'start'=>$index,'end'=>$length,'length'=>$length-$index];break;}else{if($index<$openPos)$result[]=(object)['fixed'=>TRUE,'start'=>$index,'end'=>$openPos,'length'=>$openPos-$index];$openPosPlusOne=$openPos+1;$lengthLocal=$closePos-$openPosPlusOne;$pattern=mb_substr($pattern,0,$openPos).mb_substr($pattern,$openPosPlusOne,$lengthLocal).mb_substr($pattern,$closePos+1);$length-=2;$closePos-=1;$result[]=(object)['fixed'=>FALSE,'start'=>$openPos,'end'=>$closePos,'length'=>$lengthLocal];}$index=$closePos;}return$result;}protected function&initReverseParams(&$reverse,&$reverseSectionsInfo,&$constraints,&$match=NULL){$result=[];$completeMatch=$match!==NULL;$reverseIndex=0;$matchIndex=0;$sectionIndex=0;$section=$reverseSectionsInfo[$sectionIndex];$reverseLength=mb_strlen($reverse);$greedyCaught=FALSE;$matchOpenPos=-1;$matchClosePos=-1;$this->lastPatternParam='';while($reverseIndex<$reverseLength){$reverseOpenPos=mb_strpos($reverse,'<',$reverseIndex);$reverseClosePos=FALSE;if($reverseOpenPos!==FALSE){$reverseClosePos=mb_strpos($reverse,'>',$reverseOpenPos);if($completeMatch){$matchOpenPos=mb_strpos($match,'<',$matchIndex);$matchClosePos=mb_strpos($match,'>',$matchOpenPos)+1;}}if($reverseClosePos===FALSE)break;$reverseClosePos+=1;if($reverseClosePos>$section->end){$reverseSectionsInfoCountMinusOne=count($reverseSectionsInfo)-1;while($sectionIndex<$reverseSectionsInfoCountMinusOne){$nextSection=$reverseSectionsInfo[$sectionIndex+1];if($reverseClosePos>$nextSection->end){$sectionIndex+=1;}else{$sectionIndex+=1;$section=$reverseSectionsInfo[$sectionIndex];break;}}}$paramLength=$reverseClosePos-$reverseOpenPos;$paramName=mb_substr($reverse,$reverseOpenPos+1,$paramLength-2);list($greedyFlag,$sectionIsLast)=$this->initReverseParamsGetGreedyInfo($reverseSectionsInfo,$constraints,$paramName,$sectionIndex,$greedyCaught);if($greedyFlag&&$sectionIsLast){$lastSectionChar=mb_substr($reverse,$reverseClosePos,$reverseSectionsInfo[$sectionIndex]->end-$reverseClosePos);if($lastSectionChar=='/'){$lastSectionChar='';$reverseSectionsInfo[$sectionIndex]->end-=1;}if($lastSectionChar==='')$this->lastPatternParam=$paramName;}$result[$paramName]=(object)['name'=>$paramName,'greedy'=>$greedyFlag,'sectionIndex'=>$sectionIndex,'length'=>$paramLength,'reverseStart'=>$reverseOpenPos,'reverseEnd'=>$reverseClosePos,'matchStart'=>$matchOpenPos,'matchEnd'=>$matchClosePos,];$reverseIndex=$reverseClosePos;$matchIndex=$matchClosePos;}return$result;}protected function initReverseParamsGetGreedyInfo(&$reverseSectionsInfo,&$constraints,&$paramName,&$sectionIndex,&$greedyCaught){$greedyFlag=mb_strpos($paramName,'*')!==FALSE;$sectionIsLast=NULL;if($greedyFlag){if($greedyFlag&&$greedyCaught)throw new\InvalidArgumentException("[".get_class()."] Route pattern definition can have only one greedy `<param_name*>` "." with star (to include everything - all characters and slashes . `.*`) ({$this}).");$reverseSectionsCount=count($reverseSectionsInfo);$sectionIndexPlusOne=$sectionIndex+1;if($sectionIndexPlusOne<$reverseSectionsCount&&!($reverseSectionsInfo[$sectionIndexPlusOne]->fixed)){$constraintDefined=isset($constraints[$paramName]);$constraint=$constraintDefined?$constraints[$paramName]:NULL;$greedyReal=!$constraintDefined||($constraintDefined&&(mb_strpos($constraint,'.*')!==FALSE||mb_strpos($constraint,'.+')!==FALSE));if($greedyReal)throw new\InvalidArgumentException("[".get_class()."] Route pattern definition can not have greedy `<param_name*>` with star "."(to include everything - all characters and slashes . `.*`) immediately before optional "."section ({$this}).");}$greedyCaught=TRUE;$paramName=str_replace('*','',$paramName);$sectionIsLast=$sectionIndexPlusOne===$reverseSectionsCount;}return[$greedyFlag,$sectionIsLast];}protected function initFlagsByPatternOrReverse($pattern){$scheme=static::FLAG_SCHEME_NO;if(mb_strpos($pattern,'//')===0){$scheme=static::FLAG_SCHEME_ANY;}else if(mb_strpos($pattern,'http://')===0){$scheme=static::FLAG_SCHEME_HTTP;}else if(mb_strpos($pattern,'https://')===0){$scheme=static::FLAG_SCHEME_HTTPS;}$host=static::FLAG_HOST_NO;if($scheme){if(mb_strpos($pattern,static::PLACEHOLDER_HOST)!==FALSE){$host=static::FLAG_HOST_HOST;}else if(mb_strpos($pattern,static::PLACEHOLDER_DOMAIN)!==FALSE){$host=static::FLAG_HOST_DOMAIN;}else{if(mb_strpos($pattern,static::PLACEHOLDER_TLD)!==FALSE)$host+=static::FLAG_HOST_TLD;if(mb_strpos($pattern,static::PLACEHOLDER_SLD)!==FALSE)$host+=static::FLAG_HOST_SLD;}if(mb_strpos($pattern,static::PLACEHOLDER_BASEPATH)!==FALSE)$host+=static::FLAG_HOST_BASEPATH;}$queryString=mb_strpos($pattern,'?')!==FALSE?static::FLAG_QUERY_INCL:static::FLAG_QUERY_NO;$this->flags=[$scheme,$host,$queryString];}protected function initMatchComposeRegex(&$match,&$matchSectionsInfo,&$reverseParams,&$constraints){$sections=[];$paramIndex=0;$reverseParamsKeys=array_keys($reverseParams);$paramsCount=count($reverseParamsKeys);$anyParams=$paramsCount>0;$defaultPathConstraint=static::$defaultPathConstraint;$defaultDomainConstraint=static::$defaultDomainConstraint;$schemeFlag=$this->flags[0];$matchIsAbsolute=(bool)$schemeFlag;$firstPathSlashPos=0;if($matchIsAbsolute){$matchIsAbsolute=TRUE;$defaultConstraint=$defaultDomainConstraint;$firstPathSlashPos=mb_strpos($match,'/',$schemeFlag+($schemeFlag>static::FLAG_SCHEME_ANY?1:0));}else{$defaultConstraint=$defaultPathConstraint;}$pathFixedSectionsCount=0;$lastPathFixedSectionIndex=0;$trailingSlash='?';$one=$matchIsAbsolute?0:1;$sectionsCountMinusOne=count($matchSectionsInfo)-1;foreach($matchSectionsInfo as$sectionIndex=>$section){$sectionEnd=$section->end;if($anyParams){$sectionOffset=$section->start;$sectionResult='';while($paramIndex<$paramsCount){$paramKey=$reverseParamsKeys[$paramIndex];$param=$reverseParams[$paramKey];if($param->sectionIndex!==$sectionIndex)break;$paramStart=$param->matchStart;if($matchIsAbsolute&&$paramStart>$firstPathSlashPos)$defaultConstraint=$defaultPathConstraint;if($sectionOffset<$paramStart)$sectionResult.=mb_substr($match,$sectionOffset,$paramStart-$sectionOffset);$paramName=$param->name;$customConstraint=isset($constraints[$paramName]);if(!$customConstraint&&$param->greedy)$defaultConstraint='.*';if($customConstraint){$constraint=$constraints[$paramName];}else{$constraint=$defaultConstraint;}$sectionResult.='(?<'.$paramName.'>'.$constraint.')';$paramIndex+=1;$sectionOffset=$param->matchEnd;}if($sectionOffset<$sectionEnd)$sectionResult.=mb_substr($match,$sectionOffset,$sectionEnd-$sectionOffset);}else{$sectionResult=mb_substr($match,$section->start,$section->length);}if($matchIsAbsolute&&$sectionEnd>$firstPathSlashPos)$one=1;if($section->fixed){$pathFixedSectionsCount+=$one;$lastPathFixedSectionIndex=$sectionIndex;}else{$sectionResult='('.$sectionResult.')?';}$sections[]=$sectionResult;}if($pathFixedSectionsCount>0){$lastFixedSectionContent=&$sections[$lastPathFixedSectionIndex];if($sectionsCountMinusOne==0&&$lastPathFixedSectionIndex==0&&$lastFixedSectionContent==='/'){$trailingSlash='';}else{$lastCharIsSlash=mb_substr($lastFixedSectionContent,-1,1)=='/';if($lastPathFixedSectionIndex==$sectionsCountMinusOne){if(!$lastCharIsSlash)$trailingSlash='/?';}else{$lastFixedSectionContent.=($lastCharIsSlash?'':'/').'?';$trailingSlash='/?';}}}$result='#^'.implode('',$sections).$trailingSlash.'$#';if(preg_match('#[^\x20-\x7f]#',$result))$result.='u';return$result;}protected function throwExceptionIfKeyPropertyIsMissing($propsNames){$propsNames=func_get_args();throw new\LogicException("[".get_class()."] Route configuration property/properties is/are"." missing: `".implode("`, `",$propsNames)."`, to parse and"." complete key properties `match` and/or `reverse` to route"." or build URL correctly ({$this}).");}public function __toString(){$type=new\ReflectionClass($this);$allProps=$type->getProperties(\ReflectionProperty::IS_PUBLIC|\ReflectionProperty::IS_PROTECTED|\ReflectionProperty::IS_PRIVATE);$result=[];foreach($allProps as$prop){if($prop->isStatic())continue;if($prop->isPrivate())$prop->setAccessible(TRUE);$value=NULL;try{$value=$prop->getValue($this);}catch(\Exception$e){};$result[]='"'.$prop->getName().'":"'.($value===NULL?'NULL':var_export($value)).'"';}return'{'.implode(', ',$result).'}';}public function __sleep(){return static::__getPropsNames();}private static function __getPropsNames(){static$__propsNames=NULL;if($__propsNames==NULL){$props=(new\ReflectionClass(get_called_class()))->getProperties(\ReflectionProperty::IS_PUBLIC|\ReflectionProperty::IS_PROTECTED|\ReflectionProperty::IS_PRIVATE);$__propsNames=[];foreach($props as$prop)if(!$prop->isStatic()&&!isset(static::$protectedProperties[$prop->name]))$__propsNames[]=$prop->name;}return$__propsNames;}public function __wakeup(){$this->router=\MvcCore\Application::GetInstance()->GetRouter();}}}
namespace MvcCore\Route{trait Instancing{public static function CreateInstance($patternOrConfig=NULL,$controllerAction=NULL,$defaults=[],$constraints=[],$advancedConfiguration=[]){return(new\ReflectionClass(get_called_class()))->newInstanceArgs(func_get_args());}public function __construct($patternOrConfig=NULL,$controllerAction=NULL,$defaults=[],$constraints=[],$advancedConfiguration=[]){if(count(func_get_args())===0)return;if(is_array($patternOrConfig)){$data=(object)$patternOrConfig;$this->constructDataPatternsDefaultsConstraintsFilters($data);$this->constructDataCtrlActionName($data);$this->constructDataAdvConf($data);$this->config=&$patternOrConfig;}else{$this->constructVarsPatternDefaultsConstraintsFilters($patternOrConfig,$defaults,$constraints,$advancedConfiguration);$this->constructVarCtrlActionNameByData($controllerAction);$this->constructVarAdvConf($advancedConfiguration);$this->config=&$advancedConfiguration;}$this->constructCtrlOrActionByName();}protected function constructDataPatternsDefaultsConstraintsFilters(&$data){if(isset($data->pattern))$this->pattern=$data->pattern;if(isset($data->match))$this->match=$data->match;if(isset($data->reverse))$this->reverse=$data->reverse;if(isset($data->defaults))$this->SetDefaults($data->defaults);if(isset($data->constraints))$this->SetConstraints($data->constraints);if(isset($data->filters)&&is_array($data->filters))$this->SetFilters($data->filters);}protected function constructDataCtrlActionName(&$data){if(isset($data->controllerAction)){list($ctrl,$action)=explode(':',$data->controllerAction);if($ctrl)$this->controller=$ctrl;if($action)$this->action=$action;if(isset($data->name)){$this->name=$data->name;}else{$this->name=$data->controllerAction;}}else{$this->controller=isset($data->controller)?$data->controller:NULL;$this->action=isset($data->action)?$data->action:NULL;if(isset($data->name)){$this->name=$data->name;}else if($this->controller!==NULL&&$this->action!==NULL){$this->name=$this->controller.':'.$this->action;}else{$this->name=NULL;}}}protected function constructDataAdvConf(&$data){$methodParam=static::CONFIG_METHOD;if(isset($data->{$methodParam}))$this->method=strtoupper((string)$data->{$methodParam});$redirectParam=static::CONFIG_REDIRECT;if(isset($data->{$redirectParam}))$this->redirect=(string)$data->{$redirectParam};$absoluteParam=static::CONFIG_ABSOLUTE;if(isset($data->{$absoluteParam}))$this->absolute=(bool)$data->{$absoluteParam};}protected function constructVarsPatternDefaultsConstraintsFilters(&$pattern,&$defaults,&$constraints,&$advCfg){if($pattern!==NULL)$this->pattern=$pattern;if($defaults!==NULL)$this->defaults=$defaults;if($constraints!==NULL)$this->SetConstraints($constraints);$filterInParam=static::CONFIG_FILTER_IN;if(isset($advCfg[$filterInParam]))$this->SetFilter($advCfg[$filterInParam],$filterInParam);$filterOutParam=static::CONFIG_FILTER_OUT;if(isset($advCfg[$filterOutParam]))$this->SetFilter($advCfg[$filterOutParam],$filterOutParam);}protected function constructVarCtrlActionNameByData(&$ctrlAction){if($ctrlAction!==NULL){list($ctrl,$action)=explode(':',$ctrlAction);if($ctrl)$this->controller=$ctrl;if($action)$this->action=$action;}}protected function constructVarAdvConf(&$advCfg){$methodParam=static::CONFIG_METHOD;if(isset($advCfg[$methodParam]))$this->method=strtoupper((string)$advCfg[$methodParam]);$redirectParam=static::CONFIG_REDIRECT;if(isset($advCfg[$redirectParam]))$this->redirect=(string)$advCfg[$redirectParam];$absoluteParam=static::CONFIG_ABSOLUTE;if(isset($advCfg[$absoluteParam]))$this->absolute=(bool)$advCfg[$absoluteParam];}protected function constructCtrlOrActionByName(){if(!$this->controller&&!$this->action&&strpos($this->name,':')!==FALSE&&strlen($this->name)>1){list($ctrl,$action)=explode(':',$this->name);if($ctrl)$this->controller=$ctrl;if($action)$this->action=$action;}}}}
namespace MvcCore\Ext\Forms\Field\Props{trait Pattern{protected$pattern=NULL;public function GetPattern(){return$this->pattern;}public function SetPattern($pattern){$this->pattern=$pattern;return$this;}protected function setFormPattern(){if($this->pattern&&!isset($this->validators['Pattern']))$this->validators['Pattern']='Pattern';}}}
namespace MvcCore\Route{trait GettersSetters{public function GetPattern(){return$this->pattern;}public function SetPattern($pattern){$this->pattern=$pattern;return$this;}public function GetMatch(){return$this->match;}public function SetMatch($match){$this->match=$match;return$this;}public function GetReverse(){return$this->reverse;}public function SetReverse($reverse){$this->reverse=$reverse;return$this;}public function GetName(){return$this->name;}public function SetName($name){$this->name=$name;return$this;}public function GetController(){return$this->controller;}public function SetController($controller){$this->controller=$controller;return$this;}public function GetAction(){return$this->action;}public function SetAction($action){$this->action=$action;return$this;}public function GetControllerAction(){return$this->controller.':'.$this->action;}public function SetControllerAction($controllerAction){list($ctrl,$action)=explode(':',$controllerAction);if($ctrl)$this->controller=$ctrl;if($action)$this->action=$action;return$this;}public function&GetDefaults(){return$this->defaults;}public function SetDefaults($defaults=[]){$this->defaults=$defaults;return$this;}public function GetConstraints(){return$this->constraints;}public function SetConstraints($constraints=[]){$this->constraints=$constraints;foreach($constraints as$key=>$value)if(!isset($this->defaults[$key]))$this->defaults[$key]=NULL;return$this;}public function&GetFilters(){$filters=[];foreach($this->filters as$direction=>$handler)$filters[$direction]=$handler[1];return$filters;}public function SetFilters(array$filters=[]){foreach($filters as$direction=>$handler)$this->SetFilter($handler,$direction);return$this;}public function GetFilter($direction=\MvcCore\IRoute::CONFIG_FILTER_IN){return isset($this->filters[$direction])?$this->filters[$direction]:NULL;}public function SetFilter($handler,$direction=\MvcCore\IRoute::CONFIG_FILTER_IN){$closureCalling=((is_string($handler)&&strpos($handler,'::')!==FALSE)||(is_array($handler)&&strpos($handler[1],'::')!==FALSE))?FALSE:TRUE;$this->filters[$direction]=[$closureCalling,$handler];return$this;}public function GetMethod(){return$this->method;}public function SetMethod($method=NULL){$this->method=strtoupper($method);return$this;}public function GetRedirect(){return$this->redirect;}public function SetRedirect($redirectRouteName=NULL){$this->redirect=$redirectRouteName;return$this;}public function GetAbsolute(){return$this->absolute||(isset($this->flags[0])&&((bool)$this->flags[0]));}public function SetAbsolute($absolute=TRUE){$this->absolute=$absolute;return$this;}public function GetGroupName(){return$this->groupName;}public function SetGroupName($groupName){$this->groupName=$groupName;return$this;}public function GetReverseParams(){return$this->reverseParams!==NULL?array_keys($this->reverseParams):[];}public function SetMatchedParams($matchedParams=[]){$this->matchedParams=$matchedParams;return$this;}public function&GetMatchedParams(){return$this->matchedParams;}public function GetRouter(){return$this->router;}public function SetRouter(\MvcCore\IRouter$router){$this->router=$router;return$this;}public function GetAdvancedConfigProperty($propertyName){$result=NULL;if(isset($this->config[$propertyName]))$result=$this->config[$propertyName];return$result;}}}
namespace MvcCore\Ext\Auths\Basics\Controller{trait Base{public function SignInAction(){$form=\MvcCore\Ext\Auths\Basic::GetInstance()->GetSignInForm();list($result,)=$form->Submit();if($result!==\MvcCore\Ext\Form::RESULT_SUCCESS){}if($result)$form->ClearSession();$form->SubmittedRedirect();}public function SignOutAction(){$form=\MvcCore\Ext\Auths\Basic::GetInstance()->GetSignOutForm();list($result,)=$form->Submit();if($result)$form->ClearSession();$form->SubmittedRedirect();}}}
namespace MvcCore\Ext\Forms\Field\Props{trait Wrapper{public$wrapper='{control}';public function GetWrapper(){return$this->wrapper;}public function SetWrapper($wrapper){$this->wrapper=$wrapper;return$this;}protected function renderControlWrapper($renderedCode){$wrapperReplacement='{control}';$wrapper=mb_strpos($wrapperReplacement,$this->wrapper)!==FALSE?$this->wrapper:$wrapperReplacement;return str_replace($wrapperReplacement,$renderedCode,$wrapper);}}}
namespace MvcCore\Ext\Auths\Basics\Role{trait Base{protected$name=NULL;public function GetName(){return$this->name;}public function SetName($name){$this->name=$name;return$this;}public function IsAllowed($permissionName){return$this->GetPermission($permissionName);}}}
namespace MvcCore\Ext\Auths\Basics{interface IRole{public function GetId();public function SetId($id);public function IsActive();public function GetActive();public function SetActive($active);public function GetPermission($permissionName);public function SetPermission($permissionName,$allow=TRUE);public function&GetPermissions();public function SetPermissions($permissions);public function GetName();public function SetName($name);public function IsAllowed($permissionName);public function GetByName($roleName);}}
namespace MvcCore\Ext\Auths\Basics{interface IController{public function SignInAction();public function SignOutAction();}}
            (
                \[
            )