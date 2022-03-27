<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1a2eeff7fcdc27d962d356dda4e9bd6
{
    public static $prefixLengthsPsr4 = array (
        'M' =>
        array (
            'Modules\\FinanceClientMod\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\FinanceClientMod\\' =>
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\FinanceClientMod\\Actions\\Batch\\CategoryBatchCreate' => __DIR__ . '/../..' . '/Actions/Batch/ClientBatchCreate.php',
        'Modules\\FinanceClientMod\\Actions\\Batch\\CategoryBatchDelete' => __DIR__ . '/../..' . '/Actions/Batch/ClientBatchDelete.php',
        'Modules\\FinanceClientMod\\Actions\\Bulk\\CategoryBulkDelete' => __DIR__ . '/../..' . '/Actions/Bulk/ClientBulkDelete.php',
        'Modules\\FinanceClientMod\\Actions\\Collection\\ClientFecthAll' => __DIR__ . '/../..' . '/Actions/Collection/ClientFecthAll.php',
        'Modules\\FinanceClientMod\\Actions\\Collection\\categorySearch' => __DIR__ . '/../..' . '/Actions/Collection/ClientSearch.php',
        'Modules\\FinanceClientMod\\Actions\\Object\\CategoryCreate' => __DIR__ . '/../..' . '/Actions/Object/ClientCreate.php',
        'Modules\\FinanceClientMod\\Actions\\Object\\CategoryDelete' => __DIR__ . '/../..' . '/Actions/Object/ClientDelete.php',
        'Modules\\FinanceClientMod\\Actions\\Object\\CategoryFetch' => __DIR__ . '/../..' . '/Actions/Object/ClientFetch.php',
        'Modules\\FinanceClientMod\\Actions\\Object\\CategoryUpdate' => __DIR__ . '/../..' . '/Actions/Object/ClientUpdate.php',
        'Modules\\FinanceClientMod\\Console\\CategoryBulkDeleteCmd' => __DIR__ . '/../..' . '/Console/ClientBulkDeleteCmd.php',
        'Modules\\FinanceClientMod\\Console\\CategoryColFetchAllCmd' => __DIR__ . '/../..' . '/Console/ClientColFetchAllCmd.php',
        'Modules\\FinanceClientMod\\Console\\CategoryObjCreateCmd' => __DIR__ . '/../..' . '/Console/ClientObjCreateCmd.php',
        'Modules\\FinanceClientMod\\Console\\CategoryObjDeleteCmd' => __DIR__ . '/../..' . '/Console/ClientObjDeleteCmd.php',
        'Modules\\FinanceClientMod\\Console\\CategoryObjUpdateCmd' => __DIR__ . '/../..' . '/Console/ClientObjUpdateCmd.php',
        'Modules\\FinanceClientMod\\Database\\Seeders\\FinanceClientModDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/FinanceClientModDatabaseSeeder.php',
        'Modules\\FinanceClientMod\\Entities\\Client' => __DIR__ . '/../..' . '/Entities/Client.php',
        'Modules\\FinanceClientMod\\Http\\Controllers\\FinanceClientModController' => __DIR__ . '/../..' . '/Http/Controllers/FinanceClientModController.php',
        'Modules\\FinanceClientMod\\Providers\\FinanceClientModServiceProvider' => __DIR__ . '/../..' . '/Providers/FinanceClientModServiceProvider.php',
        'Modules\\FinanceClientMod\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1a2eeff7fcdc27d962d356dda4e9bd6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1a2eeff7fcdc27d962d356dda4e9bd6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1a2eeff7fcdc27d962d356dda4e9bd6::$classMap;

        }, null, ClassLoader::class);
    }
}