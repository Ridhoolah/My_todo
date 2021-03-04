<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'v4.2.0',
    'version' => '4.2.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'classpreloader/classpreloader' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2c9f3bcbab329570c57339895bd11b5dd3b00877',
    ),
    'd11wtq/boris' => 
    array (
      'pretty_version' => 'v1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '125dd4e5752639af7678a22ea597115646d89c6e',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '1.1.10',
      'version' => '1.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '72538eeb70bbfb11964412a3d098d109efd012f7',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/exception' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/foundation' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/html' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/remote' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'illuminate/workbench' => 
    array (
      'replaced' => 
      array (
        0 => 'v4.2.22',
      ),
    ),
    'ircmaxell/password-compat' => 
    array (
      'pretty_version' => 'v1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c5cde8822a69545767f7c7f3058cb15ff84614c',
    ),
    'jeremeamia/superclosure' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d89ca74994feab128ea46d5b3add92e6cb84554',
    ),
    'kylekatarnls/update-helper' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '429be50660ed8a196e0798e5939760f168ec8ce9',
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v4.2.22',
      'version' => '4.2.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '7bfe4a10387d726569856bb4ceaec576e60ae7bb',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => 'v4.2.0',
      'version' => '4.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.39.1',
      'version' => '1.39.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4be0c005164249208ce1b5ca633cd57bdd42ff33',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v0.9.5',
      'version' => '0.9.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef70767475434bdb3615b43c327e2cae17ef12eb',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b3899e3c3ddde89016f576edb8c489708ad64cd',
    ),
    'patchwork/utf8' => 
    array (
      'pretty_version' => 'v1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e1fa4d4a57896d074c9a8d01742b688d5db4e9d5',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '0.3.10',
      'version' => '0.3.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd15bba1edcc7c89e09cc74c5d961317a8b947bf4',
    ),
    'predis/predis' => 
    array (
      'pretty_version' => 'v0.8.7',
      'version' => '0.8.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '4123fcd85d61354c6c9900db76c9597dbd129bf6',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'stack/builder' => 
    array (
      'pretty_version' => 'v1.0.5',
      'version' => '1.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb3d136d04c6be41120ebf8c0cc71fe9507d750a',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v5.4.12',
      'version' => '5.4.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '181b89f18a90f8925ef805f950d47a7190e9b950',
    ),
    'symfony/browser-kit' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b49a059de813b0abda4223c48e766cae2c44bc7d',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '574cb4cfaa01ba115fc2fc0c2355b2c5472a4804',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b490439a4287f6502426bcb0418e707c2eebe5e',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '4a7330f29b3d215f8bacf076689f9d1c3d568681',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd905e1c5885735ee66af60c205429b9941f24752',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v2.8.52',
      'version' => '2.8.52.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a77e974a5fecb4398833b0709210e3d5e334ffb0',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v2.8.52',
      'version' => '2.8.52.0',
      'aliases' => 
      array (
      ),
      'reference' => '7ae46872dad09dffb7fe1e93a0937097339d0080',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '34226a3aa279f1e356ad56181b91acfdc9a2525c',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b67e5cbd2bf837fb3681f2c4965826d6c6758532',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v2.7.52',
      'version' => '2.7.52.0',
      'aliases' => 
      array (
      ),
      'reference' => '435064b3b143f79469206915137c21e88b56bfb9',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aed596913b70fae57be53d86faa2e9ef85a2297b',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5f7b932ee6fa802fc792eabd77c4c88084517ce',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eda637e05670e2afeec3842dcd646dce94262f6b',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '33bd5882f201f9a3b7dd9640b95710b71304c4fb',
    ),
    'symfony/security-core' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a5d7f9f6fc8ace1059c7066ad787d054619e4068',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v2.7.51',
      'version' => '2.7.51.0',
      'aliases' => 
      array (
      ),
      'reference' => '1959c78c5a32539ef221b3e18a961a96d949118f',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
