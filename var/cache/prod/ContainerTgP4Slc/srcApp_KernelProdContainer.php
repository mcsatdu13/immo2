<?php

namespace ContainerTgP4Slc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\BienController' => 'getBienControllerService',
            'App\\Controller\\MainController' => 'getMainControllerService',
            'App\\Controller\\UserController' => 'getUserControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'http_kernel' => 'getHttpKernelService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService',
            'templating' => 'getTemplatingService',
            'templating.loader' => 'getTemplating_LoaderService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'validator' => 'getValidatorService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /*
     * Gets the public 'App\Controller\BienController' shared autowired service.
     *
     * @return \App\Controller\BienController
     */
    protected function getBienControllerService()
    {
        $this->services['App\\Controller\\BienController'] = $instance = new \App\Controller\BienController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\BienController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\MainController' shared autowired service.
     *
     * @return \App\Controller\MainController
     */
    protected function getMainControllerService()
    {
        $this->services['App\\Controller\\MainController'] = $instance = new \App\Controller\MainController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\MainController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UserController' shared autowired service.
     *
     * @return \App\Controller\UserController
     */
    protected function getUserControllerService()
    {
        $this->services['App\\Controller\\UserController'] = $instance = new \App\Controller\UserController();

        $instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->get_ServiceLocator_VdmMuyEService())->withContext('App\\Controller\\UserController', $this));

        return $instance;
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()), ($this->services['templating'] ?? $this->getTemplatingService()));
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('U3BLnj9BYF', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())]);
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('POui6VulB3', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['templating.cache_warmer.template_paths'] ?? $this->getTemplating_CacheWarmer_TemplatePathsService());
            yield 1 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 2 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 3 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 4 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 5 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 6 => ($this->privates['twig.cache_warmer'] ?? $this->getTwig_CacheWarmerService());
            yield 7 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 8 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 9), false, ($this->targetDir.''.'/srcApp_KernelProdContainerDeprecations.log'));
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /*
     * Gets the public 'console.command.public_alias.doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService()
    {
        return $this->services['console.command.public_alias.doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.generate_entities_command' => ['privates', 'doctrine.generate_entities_command', 'getDoctrine_GenerateEntitiesCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.current_command' => ['privates', 'doctrine_migrations.current_command', 'getDoctrineMigrations_CurrentCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.sync_metadata_command' => ['privates', 'doctrine_migrations.sync_metadata_command', 'getDoctrineMigrations_SyncMetadataCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'doctrine_migrations.versions_command' => ['privates', 'doctrine_migrations.versions_command', 'getDoctrineMigrations_VersionsCommandService', false],
            'fos_user.command.activate_user' => ['privates', 'fos_user.command.activate_user', 'getFosUser_Command_ActivateUserService', false],
            'fos_user.command.change_password' => ['privates', 'fos_user.command.change_password', 'getFosUser_Command_ChangePasswordService', false],
            'fos_user.command.create_user' => ['privates', 'fos_user.command.create_user', 'getFosUser_Command_CreateUserService', false],
            'fos_user.command.deactivate_user' => ['privates', 'fos_user.command.deactivate_user', 'getFosUser_Command_DeactivateUserService', false],
            'fos_user.command.demote_user' => ['privates', 'fos_user.command.demote_user', 'getFosUser_Command_DemoteUserService', false],
            'fos_user.command.promote_user' => ['privates', 'fos_user.command.promote_user', 'getFosUser_Command_PromoteUserService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.generate_entities_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.current_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand',
            'doctrine_migrations.sync_metadata_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand',
            'doctrine_migrations.versions_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ListCommand',
            'fos_user.command.activate_user' => 'FOS\\UserBundle\\Command\\ActivateUserCommand',
            'fos_user.command.change_password' => 'FOS\\UserBundle\\Command\\ChangePasswordCommand',
            'fos_user.command.create_user' => 'FOS\\UserBundle\\Command\\CreateUserCommand',
            'fos_user.command.deactivate_user' => 'FOS\\UserBundle\\Command\\DeactivateUserCommand',
            'fos_user.command.demote_user' => 'FOS\\UserBundle\\Command\\DemoteUserCommand',
            'fos_user.command.promote_user' => 'FOS\\UserBundle\\Command\\PromoteUserCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'security:encode-password' => 'security.command.user_password_encoder', 'fos:user:activate' => 'fos_user.command.activate_user', 'fos:user:change-password' => 'fos_user.command.change_password', 'fos:user:create' => 'fos_user.command.create_user', 'fos:user:deactivate' => 'fos_user.command.deactivate_user', 'fos:user:demote' => 'fos_user.command.demote_user', 'fos:user:promote' => 'fos_user.command.promote_user', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email']);
    }

    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $a->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService())));
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity')]), 'App\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCacheImpl($b);
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\BienRepository' => ['privates', 'App\\Repository\\BienRepository', 'getBienRepositoryService', false],
        ], [
            'App\\Repository\\BienRepository' => '?',
        ])));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService())), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false)));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->getFosUser_Security_InteractiveLoginListenerService());
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->getFosUser_Listener_AuthenticationService());
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->getFosUser_Listener_FlashService());
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->getFosUser_Listener_ResettingService());
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'fos_user.change_password.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ChangePasswordController
     */
    protected function getFosUser_ChangePassword_ControllerService()
    {
        $this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', $this->parameters['fos_user.change_password.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.profile.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ProfileController
     */
    protected function getFosUser_Profile_ControllerService()
    {
        $this->services['fos_user.profile.controller'] = $instance = new \FOS\UserBundle\Controller\ProfileController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', $this->parameters['fos_user.profile.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.registration.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\RegistrationController
     */
    protected function getFosUser_Registration_ControllerService()
    {
        $this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', $this->parameters['fos_user.registration.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.resetting.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ResettingController
     */
    protected function getFosUser_Resetting_ControllerService()
    {
        $this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\UserBundle\Form\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', $this->parameters['fos_user.resetting.form.validation_groups']), ($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), new \FOS\UserBundle\Util\TokenGenerator(), new \FOS\UserBundle\Mailer\Mailer(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['templating'] ?? $this->getTemplatingService()), ['confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => ['confirmation' => $this->parameters['fos_user.registration.confirmation.from_email'], 'resetting' => $this->parameters['fos_user.resetting.email.from_email']]]), 7200);

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.security.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\SecurityController
     */
    protected function getFosUser_Security_ControllerService()
    {
        $this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()), ($this->services['doctrine'] ?? $this->getDoctrineService())->getManager(NULL), 'App\\Entity\\User');
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->getSecurity_UserValueResolverService());
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'fr');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($this->privates['file_locator'] ?? $this->getFileLocatorService());
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]))));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService());

        $b = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(false), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 4 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 7 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, $b, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a), NULL, [])], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }

    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($this->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['mailer.logger_message_listener'])) {
                yield 'mailer.logger_message_listener' => ($this->privates['mailer.logger_message_listener'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['doctrine.result_cache_pool'])) + (int) (isset($this->privates['doctrine.system_cache_pool'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['mailer.logger_message_listener'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'mailer.logger_message_listener' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset']]);
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->getSwiftmailer_TransportService()));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        return $this->services['swiftmailer.mailer.default.transport.real'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp', 'url' => $this->getEnv('MAILER_URL'), 'username' => NULL, 'password' => NULL, 'host' => 'localhost', 'port' => NULL, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => NULL, 'command' => 'C:/laragon/bin/sendmail/sendmail.exe', 'stream_options' => []], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }

    /*
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_TransportService()
    {
        return $this->services['swiftmailer.transport'] = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());
    }

    /*
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine
     *
     * @deprecated The "templating" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplatingService()
    {
        @trigger_error('The "templating" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        $this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, []);

        $instance->addEngine($this->getTemplating_Engine_TwigService());
        $instance->addEngine(($this->privates['templating.engine.php'] ?? $this->getTemplating_Engine_PhpService()));

        return $instance;
    }

    /*
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     *
     * @deprecated The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LoaderService()
    {
        @trigger_error('The "templating.loader" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'fr', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.af.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.af.yml')], 'ar' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ar.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.ar.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ar.yml')], 'az' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.az.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.az.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.be.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.be.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.bg.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.bg.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bg.yml')], 'bs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bs.xlf')], 'ca' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ca.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.ca.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ca.yml')], 'cs' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.cs.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.cs.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cs.yml')], 'cy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.da.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.da.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.da.yml')], 'de' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.de.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.de.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.de.yml')], 'el' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.el.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.el.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.el.yml')], 'en' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.en.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.en.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.en.yml')], 'es' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.es.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.es.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.es.yml')], 'et' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.et.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.et.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.et.yml')], 'eu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.eu.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.eu.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eu.yml')], 'fa' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fa.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.fa.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fa.yml')], 'fi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.fi.yml'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fi.yml')], 'fr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.fr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.fr.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.fr.yml')], 'gl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.gl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.gl.yml')], 'he' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.he.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.he.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.he.yml')], 'hr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.hr.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hr.yml')], 'hu' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.hu.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.hu.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hu.yml')], 'hy' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.id.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.id.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.id.yml')], 'it' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.it.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.it.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.it.yml')], 'ja' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ja.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.ja.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ja.yml')], 'lb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lb.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.lb.yml')], 'lt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lt.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.lt.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lt.yml')], 'lv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.lv.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.lv.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.lv.yml')], 'mn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nb.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.nb.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nb.yml')], 'nl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.nl.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nl.yml')], 'nn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.no.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.no.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.no.xlf')], 'pl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.pl.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pl.yml')], 'pt' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.pt.yml'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt.yml')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.pt_BR.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.pt_BR.yml')], 'ro' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ro.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.ro.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ro.yml')], 'ru' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.ru.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.ru.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ru.yml')], 'sk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sk.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.sk.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sk.yml')], 'sl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sl.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.sl.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sl.yml')], 'sq' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sr_Latn.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.sr_Latn.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sr_Latn.yml')], 'sv' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.sv.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.sv.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.sv.yml')], 'th' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.th.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.th.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.th.yml'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.th.yml')], 'tl' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.tr.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.tr.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.tr.yml')], 'uk' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.uk.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.uk.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.uk.yml')], 'vi' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.vi.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.vi.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.vi.yml')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.zh_CN.yml'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_CN.yml')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'.\DIRECTORY_SEPARATOR.'security.pt_PT.xlf')], 'bn' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.bn.yml'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bn.yml')], 'bn_BD' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.bn_BD.yml'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.bn_BD.yml')], 'eo' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.eo.yml'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.eo.yml')], 'ky' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'FOSUserBundle.ky.yml'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'.\DIRECTORY_SEPARATOR.'validators.ky.yml')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'), 4 => (\dirname(__DIR__, 4).'/translations'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/FrameworkBundle/translations'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigBundle/translations'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigExtraBundle/translations'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SensioFrameworkExtraBundle/translations'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineBundle/translations'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/translations'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineMigrationsBundle/translations'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MonologBundle/translations'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/FOSUserBundle/translations'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-cache-bundle/translations'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineCacheBundle/translations'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/translations'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SwiftmailerBundle/translations'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/translations'), 4 => 'translations', 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/FrameworkBundle/translations'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/translations'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigBundle/translations'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/TwigExtraBundle/translations'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src/translations'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SensioFrameworkExtraBundle/translations'), 13 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/translations'), 14 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineBundle/translations'), 15 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/translations'), 16 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineMigrationsBundle/translations'), 17 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/translations'), 18 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SecurityBundle/translations'), 19 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle/translations'), 20 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/MonologBundle/translations'), 21 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/FOSUserBundle/translations'), 22 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-cache-bundle/translations'), 23 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/DoctrineCacheBundle/translations'), 24 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/translations'), 25 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/SwiftmailerBundle/translations'), 26 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle/Resources/views'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/views'), 'FOSUser');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/views'), '!FOSUser');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['debug' => false, 'strict_variables' => false, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $c = new \Symfony\Bridge\Twig\AppVariable();
        $c->setEnvironment('prod');
        $c->setDebug(false);
        if ($this->has('security.token_storage')) {
            $c->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $c->setRequestStack($b);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($b, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addGlobal('app', $c);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     *
     * @deprecated The "twig.controller.exception" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        @trigger_error('The "twig.controller.exception" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(($this->services['twig'] ?? $this->getTwigService()), false);
    }

    /*
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     *
     * @deprecated The "twig.controller.preview_error" service is deprecated since Symfony 4.4.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        @trigger_error('The "twig.controller.preview_error" service is deprecated since Symfony 4.4.', E_USER_DEPRECATED);

        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), NULL);
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /*
     * Gets the private '.errored..service_locator.C0tz1wP.App\Entity\Bien' shared service.
     *
     * @return \App\Entity\Bien
     */
    protected function getBienService()
    {
        $this->throw('Cannot autowire service ".service_locator.C0tz1wP": it references class "App\\Entity\\Bien" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.tIQ5Q0N.App\Entity\User' shared service.
     *
     * @return \App\Entity\User
     */
    protected function getUserService()
    {
        $this->throw('Cannot autowire service ".service_locator.tIQ5Q0N": it references class "App\\Entity\\User" but no such service exists.');
    }

    /*
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /*
     * Gets the private '.service_locator.C0tz1wP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_C0tz1wPService()
    {
        return $this->privates['.service_locator.C0tz1wP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'bien' => ['privates', '.errored..service_locator.C0tz1wP.App\\Entity\\Bien', NULL, 'Cannot autowire service ".service_locator.C0tz1wP": it references class "App\\Entity\\Bien" but no such service exists.'],
        ], [
            'bien' => 'App\\Entity\\Bien',
        ]);
    }

    /*
     * Gets the private '.service_locator.lvWrPc.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_LvWrPc_Service()
    {
        return $this->privates['.service_locator.lvWrPc.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'bienRepository' => ['privates', 'App\\Repository\\BienRepository', 'getBienRepositoryService', false],
        ], [
            'bienRepository' => 'App\\Repository\\BienRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.o9nGMXB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_O9nGMXBService()
    {
        return $this->privates['.service_locator.o9nGMXB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]);
    }

    /*
     * Gets the private '.service_locator.tIQ5Q0N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_TIQ5Q0NService()
    {
        return $this->privates['.service_locator.tIQ5Q0N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'user' => ['privates', '.errored..service_locator.tIQ5Q0N.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.tIQ5Q0N": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\User',
        ]);
    }

    /*
     * Gets the private '.service_locator.vdmMuyE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VdmMuyEService()
    {
        return $this->privates['.service_locator.vdmMuyE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'templating' => ['services', 'templating', 'getTemplatingService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'templating' => '?',
            'twig' => '?',
        ]);
    }

    /*
     * Gets the private 'App\Form\BienType' shared autowired service.
     *
     * @return \App\Form\BienType
     */
    protected function getBienTypeService()
    {
        return $this->privates['App\\Form\\BienType'] = new \App\Form\BienType();
    }

    /*
     * Gets the private 'App\Form\UserType' shared autowired service.
     *
     * @return \App\Form\UserType
     */
    protected function getUserTypeService()
    {
        return $this->privates['App\\Form\\UserType'] = new \App\Form\UserType();
    }

    /*
     * Gets the private 'App\Repository\BienRepository' shared autowired service.
     *
     * @return \App\Repository\BienRepository
     */
    protected function getBienRepositoryService()
    {
        return $this->privates['App\\Repository\\BienRepository'] = new \App\Repository\BienRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /*
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\BienController::delete' => ['privates', '.service_locator.C0tz1wP', 'get_ServiceLocator_C0tz1wPService', false],
            'App\\Controller\\BienController::edit' => ['privates', '.service_locator.C0tz1wP', 'get_ServiceLocator_C0tz1wPService', false],
            'App\\Controller\\BienController::index' => ['privates', '.service_locator.lvWrPc.', 'get_ServiceLocator_LvWrPc_Service', false],
            'App\\Controller\\BienController::show' => ['privates', '.service_locator.C0tz1wP', 'get_ServiceLocator_C0tz1wPService', false],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.tIQ5Q0N', 'get_ServiceLocator_TIQ5Q0NService', false],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.tIQ5Q0N', 'get_ServiceLocator_TIQ5Q0NService', false],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.tIQ5Q0N', 'get_ServiceLocator_TIQ5Q0NService', false],
            'App\\Controller\\BienController:delete' => ['privates', '.service_locator.C0tz1wP', 'get_ServiceLocator_C0tz1wPService', false],
            'App\\Controller\\BienController:edit' => ['privates', '.service_locator.C0tz1wP', 'get_ServiceLocator_C0tz1wPService', false],
            'App\\Controller\\BienController:index' => ['privates', '.service_locator.lvWrPc.', 'get_ServiceLocator_LvWrPc_Service', false],
            'App\\Controller\\BienController:show' => ['privates', '.service_locator.C0tz1wP', 'get_ServiceLocator_C0tz1wPService', false],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.tIQ5Q0N', 'get_ServiceLocator_TIQ5Q0NService', false],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.tIQ5Q0N', 'get_ServiceLocator_TIQ5Q0NService', false],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.tIQ5Q0N', 'get_ServiceLocator_TIQ5Q0NService', false],
        ], [
            'App\\Controller\\BienController::delete' => '?',
            'App\\Controller\\BienController::edit' => '?',
            'App\\Controller\\BienController::index' => '?',
            'App\\Controller\\BienController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\BienController:delete' => '?',
            'App\\Controller\\BienController:edit' => '?',
            'App\\Controller\\BienController:index' => '?',
            'App\\Controller\\BienController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:show' => '?',
        ]));
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('VfU5xW6l3X', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('FY1bJM5t8N', 0, $this->getParameter('container.build_id'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('4Cx5v43eiu', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('k4iUsl-t7F', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('5WA0B78Vv2', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('iyhyEIKezU', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'doctrine.result_cache_pool', 7 => 'doctrine.system_cache_pool', 8 => 'cache.property_access', 9 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /*
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type'], [0 => 'App\\Form\\BienType', 1 => 'App\\Form\\UserType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 5 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 6 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 7 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 8 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 9 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 10 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FileType.php'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'TranslatorHelper.php'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LegacyTranslatorProxy.php'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FlashListener.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'fr', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/translations'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FileType.php'), 5 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Csrf'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Templating'.\DIRECTORY_SEPARATOR.'Helper'.\DIRECTORY_SEPARATOR.'TranslatorHelper.php'), 9 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LegacyTranslatorProxy.php'), 10 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TranslationsCacheWarmer.php'), 11 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'FlashListener.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /*
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /*
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /*
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        $this->privates['doctrine.generate_entities_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:generate:entities');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    protected function getDoctrine_Migrations_DependencyFactoryService()
    {
        $a = new \Doctrine\Migrations\Configuration\Configuration();
        $a->addMigrationsDirectory('DoctrineMigrations', (\dirname(__DIR__, 4).'/migrations'));
        $a->setAllOrNothing(false);
        $a->setCheckDatabasePlatform(true);
        $a->setMetadataStorageConfiguration(new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration());

        return $this->privates['doctrine.migrations.dependency_factory'] = \Doctrine\Migrations\DependencyFactory::fromEntityManager(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration($a), new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('LW5ZmPcjU5', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('P99VFXnrOr', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'doctrine_migrations.current_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\CurrentCommand
     */
    protected function getDoctrineMigrations_CurrentCommandService()
    {
        $this->privates['doctrine_migrations.current_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\CurrentCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:current');

        $instance->setName('doctrine:migrations:current');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DiffCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DiffCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:diff');

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:dump-schema');

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ExecuteCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:execute');

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\GenerateCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\GenerateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:generate');

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\LatestCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\LatestCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:latest');

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\MigrateCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\MigrateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:migrate');

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\RollupCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\RollupCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:rollup');

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\StatusCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\StatusCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:status');

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.sync_metadata_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
     */
    protected function getDoctrineMigrations_SyncMetadataCommandService()
    {
        $this->privates['doctrine_migrations.sync_metadata_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:sync-metadata-storage');

        $instance->setName('doctrine:migrations:sync-metadata-storage');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\UpToDateCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:up-to-date');

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\VersionCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\VersionCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:version');

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.versions_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\ListCommand
     */
    protected function getDoctrineMigrations_VersionsCommandService()
    {
        $this->privates['doctrine_migrations.versions_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ListCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->getDoctrine_Migrations_DependencyFactoryService()), 'doctrine:migrations:versions');

        $instance->setName('doctrine:migrations:list');

        return $instance;
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false);
    }

    /*
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources'), [0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src')], false);
    }

    /*
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\BienType' => ['privates', 'App\\Form\\BienType', 'getBienTypeService', false],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => ['privates', 'fos_user.change_password.form.type', 'getFosUser_ChangePassword_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => ['privates', 'fos_user.profile.form.type', 'getFosUser_Profile_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => ['privates', 'fos_user.registration.form.type', 'getFosUser_Registration_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => ['privates', 'fos_user.resetting.form.type', 'getFosUser_Resetting_Form_TypeService', false],
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => ['privates', 'fos_user.username_form_type', 'getFosUser_UsernameFormTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\BienType' => '?',
            'App\\Form\\UserType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => '?',
            'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /*
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /*
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /*
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /*
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->privates['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('App\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.command.activate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\ActivateUserCommand
     */
    protected function getFosUser_Command_ActivateUserService()
    {
        $this->privates['fos_user.command.activate_user'] = $instance = new \FOS\UserBundle\Command\ActivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:activate');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.change_password' shared service.
     *
     * @return \FOS\UserBundle\Command\ChangePasswordCommand
     */
    protected function getFosUser_Command_ChangePasswordService()
    {
        $this->privates['fos_user.command.change_password'] = $instance = new \FOS\UserBundle\Command\ChangePasswordCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:change-password');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.create_user' shared service.
     *
     * @return \FOS\UserBundle\Command\CreateUserCommand
     */
    protected function getFosUser_Command_CreateUserService()
    {
        $this->privates['fos_user.command.create_user'] = $instance = new \FOS\UserBundle\Command\CreateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:create');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.deactivate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DeactivateUserCommand
     */
    protected function getFosUser_Command_DeactivateUserService()
    {
        $this->privates['fos_user.command.deactivate_user'] = $instance = new \FOS\UserBundle\Command\DeactivateUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:deactivate');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.demote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DemoteUserCommand
     */
    protected function getFosUser_Command_DemoteUserService()
    {
        $this->privates['fos_user.command.demote_user'] = $instance = new \FOS\UserBundle\Command\DemoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:demote');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.command.promote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\PromoteUserCommand
     */
    protected function getFosUser_Command_PromoteUserService()
    {
        $this->privates['fos_user.command.promote_user'] = $instance = new \FOS\UserBundle\Command\PromoteUserCommand(($this->privates['fos_user.util.user_manipulator'] ?? $this->getFosUser_Util_UserManipulatorService()));

        $instance->setName('fos:user:promote');

        return $instance;
    }

    /*
     * Gets the private 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->privates['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener(new \FOS\UserBundle\Security\LoginManager(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService())), 'main');
    }

    /*
     * Gets the private 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->privates['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener(($this->services['session'] ?? $this->getSessionService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->privates['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener(($this->services['router'] ?? $this->getRouterService()), 86400);
    }

    /*
     * Gets the private 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->privates['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('App\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->privates['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('App\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->privates['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('App\\Entity\\User');
    }

    /*
     * Gets the private 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->privates['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /*
     * Gets the private 'fos_user.user_provider.username' shared service.
     *
     * @return \FOS\UserBundle\Security\UserProvider
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->privates['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()));
    }

    /*
     * Gets the private 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->privates['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService())));
    }

    /*
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->privates['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->privates['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator(($this->services['fos_user.user_manager'] ?? $this->getFosUser_UserManagerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false);
    }

    /*
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'fr', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'log/prod.log'), 100, true, NULL, false);
        $a->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => ['code' => 404, 'urls' => []], 1 => ['code' => 405, 'urls' => []]], 400), 50, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), true);
    }

    /*
     * Gets the private 'property_info.cache' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor
     */
    protected function getPropertyInfo_CacheService()
    {
        return $this->privates['property_info.cache'] = new \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1)), ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
    }

    /*
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->getSerializer_Mapping_CacheClassMetadataFactoryService()));
    }

    /*
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))));
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->getSecurity_Access_RoleHierarchyVoterService());
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->getSecurity_Access_ExpressionVoterService());
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->privates['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()));
    }

    /*
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->privates['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()));
    }

    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), [0 => 'ROLE_ADMIN'], NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_LoginService()
    {
        return $this->privates['security.authentication.listener.anonymous.login'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.form.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Form_MainService()
    {
        $a = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $b->setProviderKey('main');
        $c = ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService());

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        $this->privates['security.authentication.listener.form.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'main', $b, $d, ['check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));

        $instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\RememberMeListener
     */
    protected function getSecurity_Authentication_Listener_Rememberme_MainService()
    {
        return $this->privates['security.authentication.listener.rememberme.main'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), true, ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.anonymous.login'] ?? ($this->privates['security.authentication.provider.anonymous.login'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 1 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->getSecurity_Authentication_Provider_Dao_MainService());
            yield 2 => ($this->privates['security.authentication.provider.rememberme.main'] ?? $this->getSecurity_Authentication_Provider_Rememberme_MainService());
            yield 3 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 4), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_MainService()
    {
        return $this->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'main', ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), true);
    }

    /*
     * Gets the private 'security.authentication.provider.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Rememberme_MainService()
    {
        return $this->privates['security.authentication.provider.rememberme.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider(($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), $this->getEnv('APP_SECRET'), 'main');
    }

    /*
     * Gets the private 'security.authentication.rememberme.services.simplehash.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    protected function getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()
    {
        return $this->privates['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices([0 => ($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService())], $this->getEnv('APP_SECRET'), 'main', ['lifetime' => 604800, 'path' => '/bien', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => 'lax', 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /*
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'FOS\\UserBundle\\Model\\UserInterface']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /*
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService());
        }, 1), 'login', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /*
     * Gets the private 'security.context_listener.1' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_1Service()
    {
        $this->privates['security.context_listener.1'] = $instance = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['fos_user.user_provider.username'] ?? $this->getFosUser_UserProvider_UsernameService());
        }, 1), 'main', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);

        $instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['FOS\\UserBundle\\Model\\UserInterface' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => '2y']]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.login' => ['privates', 'security.firewall.map.context.login', 'getSecurity_Firewall_Map_Context_LoginService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.login' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.login' => ($this->privates['.security.request_matcher.plOLTQs'] ?? ($this->privates['.security.request_matcher.plOLTQs'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(login$|register|resetting)')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 3)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->privates['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.anonymous.login'] ?? $this->getSecurity_Authentication_Listener_Anonymous_LoginService());
            yield 3 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'login', NULL, NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('login', 'security.user_checker', '.security.request_matcher.plOLTQs', true, false, 'fos_user.user_provider.username', 'login', NULL, NULL, NULL, [0 => 'anonymous'], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
        $c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'fos_user_security_logout']);
        $c->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $c->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $c->addHandler(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.1'] ?? $this->getSecurity_ContextListener_1Service());
            yield 2 => ($this->privates['security.authentication.listener.form.main'] ?? $this->getSecurity_Authentication_Listener_Form_MainService());
            yield 3 => ($this->privates['security.authentication.listener.rememberme.main'] ?? $this->getSecurity_Authentication_Listener_Rememberme_MainService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, '/login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.3UEFixr', true, false, 'fos_user.user_provider.username', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, [0 => 'form_login', 1 => 'remember_me', 2 => 'anonymous'], NULL));
    }

    /*
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'fos_user_security_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'serializer.mapping.cache_class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory
     */
    protected function getSerializer_Mapping_CacheClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.cache_class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))])), \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/serialization.php'), ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService())));
    }

    /*
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'templating.cache_warmer.template_paths' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer
     *
     * @deprecated The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_CacheWarmer_TemplatePathsService()
    {
        @trigger_error('The "templating.cache_warmer.template_paths" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.cache_warmer.template_paths'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer(($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /*
     * Gets the private 'templating.engine.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine
     *
     * @deprecated The "templating.engine.php" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Engine_PhpService()
    {
        @trigger_error('The "templating.engine.php" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        $this->privates['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine(($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'templating.helper.actions' => ['privates', 'templating.helper.actions', 'getTemplating_Helper_ActionsService', false],
            'templating.helper.assets' => ['privates', 'templating.helper.assets', 'getTemplating_Helper_AssetsService', false],
            'templating.helper.code' => ['privates', 'templating.helper.code', 'getTemplating_Helper_CodeService', false],
            'templating.helper.form' => ['privates', 'templating.helper.form', 'getTemplating_Helper_FormService', false],
            'templating.helper.logout_url' => ['privates', 'templating.helper.logout_url', 'getTemplating_Helper_LogoutUrlService', false],
            'templating.helper.request' => ['privates', 'templating.helper.request', 'getTemplating_Helper_RequestService', false],
            'templating.helper.router' => ['privates', 'templating.helper.router', 'getTemplating_Helper_RouterService', false],
            'templating.helper.security' => ['privates', 'templating.helper.security', 'getTemplating_Helper_SecurityService', false],
            'templating.helper.session' => ['privates', 'templating.helper.session', 'getTemplating_Helper_SessionService', false],
            'templating.helper.slots' => ['privates', 'templating.helper.slots', 'getTemplating_Helper_SlotsService', false],
            'templating.helper.stopwatch' => ['privates', 'templating.helper.stopwatch', 'getTemplating_Helper_StopwatchService', false],
            'templating.helper.translator' => ['privates', 'templating.helper.translator', 'getTemplating_Helper_TranslatorService', false],
        ], [
            'templating.helper.actions' => '?',
            'templating.helper.assets' => '?',
            'templating.helper.code' => '?',
            'templating.helper.form' => '?',
            'templating.helper.logout_url' => '?',
            'templating.helper.request' => '?',
            'templating.helper.router' => '?',
            'templating.helper.security' => '?',
            'templating.helper.session' => '?',
            'templating.helper.slots' => '?',
            'templating.helper.stopwatch' => '?',
            'templating.helper.translator' => '?',
        ]), ($this->services['templating.loader'] ?? $this->getTemplating_LoaderService()), $this->getTemplating_GlobalsService());

        $instance->setCharset('UTF-8');
        $instance->setHelpers(['slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security']);

        return $instance;
    }

    /*
     * Gets the private 'templating.engine.twig' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     *
     * @deprecated The "templating.engine.twig" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTemplating_Engine_TwigService()
    {
        @trigger_error('The "templating.engine.twig" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['templating.name_parser'] ?? $this->getTemplating_NameParserService()), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));
    }

    /*
     * Gets the private 'templating.finder' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder
     *
     * @deprecated The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_FinderService()
    {
        @trigger_error('The "templating.finder" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.finder'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder(($this->services['kernel'] ?? $this->get('kernel', 1)), new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser(), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src/Resources'));
    }

    /*
     * Gets the private 'templating.form.engine' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine
     *
     * @deprecated The "templating.form.engine" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Form_EngineService()
    {
        @trigger_error('The "templating.form.engine" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine(($this->privates['templating.engine.php'] ?? $this->getTemplating_Engine_PhpService()), $this->parameters['templating.helper.form.resources']);
    }

    /*
     * Gets the private 'templating.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     *
     * @deprecated The "templating.form.renderer" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Form_RendererService()
    {
        @trigger_error('The "templating.form.renderer" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Component\Form\FormRenderer($this->getTemplating_Form_EngineService(), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'templating.globals' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables
     *
     * @deprecated The "templating.globals" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_GlobalsService()
    {
        @trigger_error('The "templating.globals" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /*
     * Gets the private 'templating.helper.actions' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper
     *
     * @deprecated The "templating.helper.actions" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        @trigger_error('The "templating.helper.actions" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /*
     * Gets the private 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     *
     * @deprecated The "templating.helper.assets" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        @trigger_error('The "templating.helper.assets" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
    }

    /*
     * Gets the private 'templating.helper.code' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper
     *
     * @deprecated The "templating.helper.code" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_CodeService()
    {
        @trigger_error('The "templating.helper.code" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8');
    }

    /*
     * Gets the private 'templating.helper.form' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper
     *
     * @deprecated The "templating.helper.form" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_FormService()
    {
        @trigger_error('The "templating.helper.form" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($this->getTemplating_Form_RendererService());
    }

    /*
     * Gets the private 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     *
     * @deprecated The "templating.helper.logout_url" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        @trigger_error('The "templating.helper.logout_url" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'templating.helper.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper
     *
     * @deprecated The "templating.helper.request" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_RequestService()
    {
        @trigger_error('The "templating.helper.request" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     *
     * @deprecated The "templating.helper.router" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_RouterService()
    {
        @trigger_error('The "templating.helper.router" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper(($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     *
     * @deprecated The "templating.helper.security" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        @trigger_error('The "templating.helper.security" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'templating.helper.session' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper
     *
     * @deprecated The "templating.helper.session" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_SessionService()
    {
        @trigger_error('The "templating.helper.session" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'templating.helper.slots' shared service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper
     *
     * @deprecated The "templating.helper.slots" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        @trigger_error('The "templating.helper.slots" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /*
     * Gets the private 'templating.helper.stopwatch' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper
     *
     * @deprecated The "templating.helper.stopwatch" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        @trigger_error('The "templating.helper.stopwatch" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /*
     * Gets the private 'templating.helper.translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper
     *
     * @deprecated The "templating.helper.translator" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        @trigger_error('The "templating.helper.translator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     *
     * @deprecated The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_LocatorService()
    {
        @trigger_error('The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? $this->getFileLocatorService()), $this->targetDir.'');
    }

    /*
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     *
     * @deprecated The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.
     */
    protected function getTemplating_NameParserService()
    {
        @trigger_error('The "templating.name_parser" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /*
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /*
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /*
     * Gets the private 'twig.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer
     *
     * @deprecated The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.
     */
    protected function getTwig_CacheWarmerService()
    {
        @trigger_error('The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

        return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->getTemplating_FinderService()), [(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form') => NULL]);
    }

    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'));

        $instance->setName('debug:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /*
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /*
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->get_ServiceLocator_O9nGMXBService())->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'), [(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info.cache'] ?? $this->getPropertyInfo_CacheService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/config/validation.xml'), 1 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService())));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));
        $instance->addXmlMapping((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /*
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /*
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $a->setLogger($b);

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator($a, 'UTF-8', true, NULL);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sensio'.\DIRECTORY_SEPARATOR.'framework-extra-bundle'.\DIRECTORY_SEPARATOR.'src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'FOSUserBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelProdContainer',
            'container.dumper.inline_class_loader' => false,
            'container.dumper.inline_factories' => true,
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'fr',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
                1 => 'php',
            ],
            'templating.helper.form.resources' => [
                0 => 'FrameworkBundle:Form',
            ],
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => 'bootstrap_4_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.migrations.preferred_em' => NULL,
            'doctrine.migrations.preferred_connection' => NULL,
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                    ],
                ],
                'monolog.handler.main' => NULL,
            ],
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.from_email' => [
                'vincent@vfac.fr' => 'vincent@vfac.fr',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.email.from_email' => [
                'vincent@vfac.fr' => 'vincent@vfac.fr',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
