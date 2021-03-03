<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'symfony/website-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.1@2afde5a9844126bc311cd5f548b5475e75f800d3',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.3@015fdd490074d4daa891e2d1df998dc35ba54924',
  'doctrine/doctrine-migrations-bundle' => '3.0.2@b8de89fe811e62f1dea8cf9aafda0ea45ca6f1f3',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.1.0@260991be753a38aa25b6f2d13dbb7f113f8dbf8f',
  'doctrine/orm' => '2.8.2@ebae57eb9637acd8252b398df3121b120688ed5c',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v4.4.19@f2204a526c34945b1614cde033692983b6102eb8',
  'symfony/cache' => 'v4.4.19@3c18a6d8e4fb15b9e6ed4e6eb1c93f2ad0fd4d55',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v4.4.19@2c4c7827a7e143f5cf375666641b0f448eab8802',
  'symfony/console' => 'v4.4.19@24026c44fc37099fa145707fecd43672831b837a',
  'symfony/debug' => 'v4.4.19@af4987aa4a5630e9615be9d9c3ed1b0f24ca449c',
  'symfony/dependency-injection' => 'v4.4.19@2468b95d869c872c6fb1b93b395a7fcd5331f2b9',
  'symfony/doctrine-bridge' => 'v4.4.19@a908956f818918488a8705aca534cd4b7e070774',
  'symfony/dotenv' => 'v4.4.19@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.19@d603654eaeb713503bba3e308b9e748e5a6d3f2e',
  'symfony/event-dispatcher' => 'v4.4.19@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.19@066402a1894fcaef22cbff1591c8a0bdf7f66e9b',
  'symfony/filesystem' => 'v4.4.19@83a6feed14846d2d9f3916adbaf838819e4e3380',
  'symfony/finder' => 'v4.4.19@25d79cfccfc12e84e7a63a248c3f0720fdd92db6',
  'symfony/flex' => 'v1.12.2@e472606b4b3173564f0edbca8f5d32b52fc4f2c9',
  'symfony/form' => 'v4.4.19@bab1af95e9e6cac06c7bfe68731b526809fa38d3',
  'symfony/framework-bundle' => 'v4.4.19@790f1db60deb1577eaf86f2025215b48c53f8e94',
  'symfony/http-client' => 'v4.4.19@d8df50fe9229576b254c6822eb5cfff36c02c967',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.19@8888741b633f6c3d1e572b7735ad2cae3e03f9c5',
  'symfony/http-kernel' => 'v4.4.19@07ea794a327d7c8c5d76e3058fde9fec6a711cb4',
  'symfony/inflector' => 'v4.4.19@a8691d012fb449ba49363a3b3e3e743f354f7d56',
  'symfony/intl' => 'v4.4.19@8a15571146066c39536fd7c3734aa36281d0e788',
  'symfony/mailer' => 'v4.4.19@38b6dcb4bb265fa4f003b0f42dd42fb91cbd877b',
  'symfony/mime' => 'v4.4.19@7f50c27c7417115ca620962b853a7f4db0479e7c',
  'symfony/monolog-bridge' => 'v4.4.19@47343492b1841db765de8d55b4b5ccaa1c96edd3',
  'symfony/monolog-bundle' => 'v3.6.0@e495f5c7e4e672ffef4357d4a4d85f010802f940',
  'symfony/options-resolver' => 'v4.4.19@cd8c6a2778d5f8b5e8fc4b7abdf126790b5d5095',
  'symfony/orm-pack' => 'v2.1.0@357f6362067b1ebb94af321b79f8939fc9118751',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v4.4.19@7e950b6366d4da90292c2e7fa820b3c1842b965a',
  'symfony/property-access' => 'v4.4.19@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/property-info' => 'v4.4.19@3314c9f854b8693b12c81114556c1fb51b6d2bf7',
  'symfony/proxy-manager-bridge' => 'v4.4.19@811a39770b21f05bea9a737568074be4f02e7733',
  'symfony/routing' => 'v4.4.19@87529f6e305c7acb162840d1ea57922038072425',
  'symfony/security-bundle' => 'v4.4.19@b2cd6ea94f82b0d018dd26275f18392881cab6d1',
  'symfony/security-core' => 'v4.4.19@02da7f55df0a144972b0e012810d6515b5adf3fb',
  'symfony/security-csrf' => 'v4.4.19@6864087a9c20eb4bb4063fc2f36954cec0ce28a6',
  'symfony/security-guard' => 'v4.4.19@20f522ada1eefb7c2f90cb83dcc76abb160c782f',
  'symfony/security-http' => 'v4.4.19@c275805b0205403be4124b9cdef6eea72b09a28d',
  'symfony/serializer' => 'v4.4.19@6b383bc45777d14857b634e9f8fa2b8a2e69b66d',
  'symfony/serializer-pack' => 'v1.0.4@61173947057d5e1bf1c79e2a6ab6a8430be0602e',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v4.4.19@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/translation' => 'v4.4.19@e1d0c67167a553556d9f974b5fa79c2448df317a',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v4.4.19@85a27fe641886e07edcef52105df9b59225d4ceb',
  'symfony/twig-bundle' => 'v4.4.19@7cee73b45e3bd963a0ab4184f1041dcdc85b6e86',
  'symfony/twig-pack' => 'v1.0.1@08a73e833e07921c464336deb7630f93e85ef930',
  'symfony/validator' => 'v4.4.19@039479123c8d824f23efba9bb413b85dc3f42e43',
  'symfony/var-dumper' => 'v4.4.19@a1eab2f69906dc83c5ddba4632180260d0ab4f7f',
  'symfony/var-exporter' => 'v4.4.19@3a3ea598bba6901d20b58c2579f68700089244ed',
  'symfony/web-link' => 'v4.4.19@e063a969693e2c0804df709f661bd50e10f13665',
  'symfony/yaml' => 'v4.4.19@17ed9f14c1aa05b1a5cf2e2c5ef2d0be28058ef9',
  'twig/extra-bundle' => 'v3.3.0@e2d27a86c3f47859eb07808fa7c8679d30fcbdde',
  'twig/twig' => 'v3.3.0@1f3b7e2c06cc05d42936a8ad508ff1db7975cdc5',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'nikic/php-parser' => 'v4.10.4@c6d052fc58cb876152f89f532b95a8d7907e7f0e',
  'symfony/browser-kit' => 'v4.4.19@f6f060bdc473c3f3b1f00e2ebdeb3d02eda77f82',
  'symfony/css-selector' => 'v4.4.19@f907d3e53ecb2a5fad8609eb2f30525287a734c8',
  'symfony/debug-bundle' => 'v4.4.19@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/debug-pack' => 'v1.0.9@cfd5093378e9cafe500f05c777a22fe8a64a9342',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/dom-crawler' => 'v4.4.19@21032c566558255e551d23f4a516434c9e3a9a78',
  'symfony/maker-bundle' => 'v1.29.1@313b5669a5370bf36cd34fa8f5b5bbbfa5fb8aa8',
  'symfony/phpunit-bridge' => 'v5.2.3@587f2b6bbcda8c473b91c18165958ffbb8af3c4c',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/test-pack' => 'v1.0.7@e61756c97cbedae00b7cf43b87abcfadfeb2746c',
  'symfony/web-profiler-bundle' => 'v4.4.19@6cde98609e1dd9afa9840b9c222a59ee40cef2db',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  'symfony/website-skeleton' => 'v4.4.99@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
