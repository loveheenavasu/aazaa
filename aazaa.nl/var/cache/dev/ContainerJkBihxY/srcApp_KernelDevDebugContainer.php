<?php

namespace ContainerJkBihxY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'mobile_detect.mobile_detector' => 'getMobileDetect_MobileDetectorService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
        ];
        $this->fileMap = [
            'App\\Controller\\Account\\DefaultController' => 'getDefaultControllerService.php',
            'App\\Controller\\Account\\SecurityController' => 'getSecurityControllerService.php',
            'App\\Controller\\Admin\\CollectorController' => 'getCollectorControllerService.php',
            'App\\Controller\\Admin\\DefaultController' => 'getDefaultController2Service.php',
            'App\\Controller\\Admin\\MenuController' => 'getMenuControllerService.php',
            'App\\Controller\\Admin\\PageController' => 'getPageControllerService.php',
            'App\\Controller\\Admin\\SecurityController' => 'getSecurityController2Service.php',
            'App\\Controller\\Admin\\UserController' => 'getUserControllerService.php',
            'App\\Controller\\Admin\\VideoController' => 'getVideoControllerService.php',
            'App\\Controller\\Admin\\WorkshopController' => 'getWorkshopControllerService.php',
            'App\\Controller\\AjaxController' => 'getAjaxControllerService.php',
            'App\\Controller\\DefaultController' => 'getDefaultController3Service.php',
            'App\\Controller\\PaymentController' => 'getPaymentControllerService.php',
            'App\\Controller\\Webhook\\GitController' => 'getGitControllerService.php',
            'App\\Controller\\Webhook\\MailgunController' => 'getMailgunControllerService.php',
            'App\\Controller\\Webhook\\MolliePaymentController' => 'getMolliePaymentControllerService.php',
            'App\\Controller\\WorkshopController' => 'getWorkshopController2Service.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService.php',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService.php',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'fungio.google_calendar' => 'getFungio_GoogleCalendarService.php',
            'git.handler' => 'getGit_HandlerService.php',
            'httplug.client' => 'getHttplug_ClientService.php',
            'httplug.message_factory' => 'getHttplug_MessageFactoryService.php',
            'httplug.stream_factory' => 'getHttplug_StreamFactoryService.php',
            'httplug.uri_factory' => 'getHttplug_UriFactoryService.php',
            'knp_paginator' => 'getKnpPaginatorService.php',
            'mail_helper' => 'getMailHelperService.php',
            'mailgun.swift_transport.transport' => 'getMailgun_SwiftTransport_TransportService.php',
            'open_tok' => 'getOpenTokService.php',
            'page_content_helper' => 'getPageContentHelperService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'templating' => 'getTemplatingService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'user_manager_service' => 'getUserManagerServiceService.php',
            'user_payment' => 'getUserPaymentService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Config/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceLocatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/TemplateNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/Loader/TemplateLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/LocaleAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/DataCollector/DeviceDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Environment.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/DumpExtension.php';
            include_once $this->targetDirs[3].'/src/Twig/mailEmbedImages.php';
            include_once $this->targetDirs[3].'/src/Twig/jsonDecode.php';
            include_once $this->targetDirs[3].'/src/Twig/versionControl.php';
            include_once $this->targetDirs[3].'/src/Twig/vimeoThumbnail.php';
            include_once $this->targetDirs[3].'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Intl.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once $this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Twig/Extension/MobileDetectExtension.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Collector/Twig/HttpMessageMarkupExtension.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Twig/Extension/PaginationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/ClonerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/AbstractCloner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Cloner/VarCloner.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Server/Connection.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php';
            include_once $this->targetDirs[3].'/vendor/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';
            include_once $this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Helper/DeviceView.php';
            include_once $this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/EventListener/RequestResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/php-http/discovery/src/Strategy/DiscoveryStrategy.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Discovery/ConfiguredClientsStrategy.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug/src/HttpClient.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug/src/HttpAsyncClient.php';
            include_once $this->targetDirs[3].'/vendor/php-http/client-common/src/VersionBridgeClient.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Collector/ProfileClient.php';
            include_once $this->targetDirs[3].'/vendor/php-http/discovery/src/ClassDiscovery.php';
            include_once $this->targetDirs[3].'/vendor/php-http/discovery/src/HttpClientDiscovery.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Collector/PluginClientFactory.php';
            include_once $this->targetDirs[3].'/vendor/php-http/message/src/Formatter.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Collector/Formatter.php';
            include_once $this->targetDirs[3].'/vendor/php-http/message/src/Formatter/FullHttpMessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/php-http/message/src/Formatter/CurlCommandFormatter.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Collector/Collector.php';
            include_once $this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Collector/PluginClientFactoryListener.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Subscriber/SlidingPaginationSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Helper/Processor.php';
            include_once $this->targetDirs[3].'/vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php';
            include_once $this->targetDirs[3].'/vendor/mobiledetect/mobiledetectlib/namespaced/Detection/MobileDetect.php';
            include_once $this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/DeviceDetector/MobileDetector.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/IdentityTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('sJrRs3TvgD', 0, ($this->targetDirs[0].'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('0WXU7ELibm', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a);

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['mobile_detect.request_listener'] ?? $this->getMobileDetect_RequestListenerService());
        }, 1 => 'handleRequest'], 1);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['mobile_detect.request_listener'] ?? $this->getMobileDetect_RequestListenerService());
        }, 1 => 'handleResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
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
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'onKernelException'], -2048);
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
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load('getDebug_DumpListenerService.php'));
        }, 1 => 'configure'], 1024);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['httplug.strategy'] ?? $this->getHttplug_StrategyService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['httplug.strategy'] ?? $this->getHttplug_StrategyService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener'] ?? $this->getPluginClientFactoryListenerService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener'] ?? $this->getPluginClientFactoryListenerService());
        }, 1 => 'onEvent'], 1024);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
        }, 7)), $a));
    }

    /**
     * Gets the public 'mobile_detect.mobile_detector' shared service.
     *
     * @return \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector
     */
    protected function getMobileDetect_MobileDetectorService()
    {
        return $this->services['mobile_detect.mobile_detector'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector();
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $c->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $c->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $c->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $c->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $c->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $d->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $e = new \SunCat\MobileDetectBundle\DataCollector\DeviceDataCollector(($this->privates['mobile_detect.device_view'] ?? $this->getMobileDetect_DeviceViewService()));
        $e->setRedirectConfig($this->parameters['mobile_detect.redirect']);
        $f = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $f->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($c);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(($this->privates['httplug.collector.collector'] ?? ($this->privates['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector())));
        $instance->add($e);
        $instance->add($f);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcApp_KernelDevDebugContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcApp_KernelDevDebugContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this), $a, 'nl');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'nl', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')], 'ar' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ar.xliff')], 'az' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')], 'ca' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml')], 'cs' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml')], 'cy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.da.xliff')], 'de' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.de.xliff')], 'el' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')], 'en' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.en.xliff')], 'es' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.es.xliff')], 'et' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')], 'eu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')], 'fa' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')], 'fr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.fr.xliff')], 'gl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml')], 'he' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')], 'hr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')], 'hu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.hu.xliff')], 'hy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.id.xliff')], 'it' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.it.xliff')], 'ja' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml')], 'lb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')], 'lt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')], 'mn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.nb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')], 'nl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.nl.xliff')], 'nn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.no.xlf')], 'pl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.pl.xliff')], 'pt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')], 'pt_BR' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ru.xliff')], 'sk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml')], 'sl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml')], 'sq' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')], 'sv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.sv.xliff')], 'th' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')], 'tl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')], 'uk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 5 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.uk.xliff')], 'vi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.vi.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')], 'zh_CN' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml')], 'zh_TW' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[3].'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')], 'bn' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')], 'bn_BD' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')], 'eo' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')], 'ky' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 2 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/translations/KnpPaginatorBundle.sw.xliff')]]]);
        $a->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $a->setFallbackLocales([0 => 'nl']);

        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator($a);
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()), ($this->privates['templating.name_parser'] ?? ($this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $a->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $a->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $a->addPath(($this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Resources/views'), 'MobileDetect');
        $a->addPath(($this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Resources/views'), '!MobileDetect');
        $a->addPath(($this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Resources/views'), 'Httplug');
        $a->addPath(($this->targetDirs[3].'/vendor/php-http/httplug-bundle/src/Resources/views'), '!Httplug');
        $a->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $a->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle/Resources/views'), '!KnpPaginator');
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['default_path' => ($this->targetDirs[3].'/templates'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception::showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'paths' => [], 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $c]);
        $f = new \SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension(($this->services['mobile_detect.mobile_detector'] ?? ($this->services['mobile_detect.mobile_detector'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector())), ($this->privates['mobile_detect.device_view'] ?? $this->getMobileDetect_DeviceViewService()), $this->parameters['mobile_detect.redirect']);
        $f->setRequestByRequestStack($d);
        $g = new \Symfony\Bridge\Twig\AppVariable();
        $g->setEnvironment('dev');
        $g->setDebug(true);
        if ($this->has('security.token_storage')) {
            $g->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $g->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($c, $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \App\Twig\mailEmbedImages());
        $instance->addExtension(new \App\Twig\jsonDecode());
        $instance->addExtension(new \App\Twig\versionControl($this));
        $instance->addExtension(new \App\Twig\vimeoThumbnail());
        $instance->addExtension(new \Twig_Extensions_Extension_Intl());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addExtension($f);
        $instance->addExtension(new \Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension());
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(($this->privates['knp_paginator.helper.processor'] ?? $this->getKnpPaginator_Helper_ProcessorService())));
        $instance->addGlobal('app', $g);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'Http\Client\Common\PluginClientFactory' shared service.
     *
     * @return \Http\HttplugBundle\Collector\PluginClientFactory
     */
    protected function getPluginClientFactoryService()
    {
        return $this->privates['Http\\Client\\Common\\PluginClientFactory'] = new \Http\HttplugBundle\Collector\PluginClientFactory(($this->privates['httplug.collector.collector'] ?? ($this->privates['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector())), ($this->privates['httplug.collector.formatter'] ?? $this->getHttplug_Collector_FormatterService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'Http\HttplugBundle\Collector\PluginClientFactoryListener' shared service.
     *
     * @return \Http\HttplugBundle\Collector\PluginClientFactoryListener
     */
    protected function getPluginClientFactoryListenerService()
    {
        return $this->privates['Http\\HttplugBundle\\Collector\\PluginClientFactoryListener'] = new \Http\HttplugBundle\Collector\PluginClientFactoryListener(($this->privates['Http\\Client\\Common\\PluginClientFactory'] ?? $this->getPluginClientFactoryService()));
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
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

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qo2l4sX+f1', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('89rYE2llhb', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('nxad54IZYj', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('mnJkuMI6BU', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true, 'UTF-8');
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $this->targetDirs[3], function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.role_hierarchy_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'httplug.collector.formatter' shared service.
     *
     * @return \Http\HttplugBundle\Collector\Formatter
     */
    protected function getHttplug_Collector_FormatterService()
    {
        return $this->privates['httplug.collector.formatter'] = new \Http\HttplugBundle\Collector\Formatter(new \Http\Message\Formatter\FullHttpMessageFormatter(0), new \Http\Message\Formatter\CurlCommandFormatter());
    }

    /**
     * Gets the private 'httplug.strategy' shared service.
     *
     * @return \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy
     */
    protected function getHttplug_StrategyService()
    {
        return $this->privates['httplug.strategy'] = new \Http\HttplugBundle\Discovery\ConfiguredClientsStrategy(new \Http\HttplugBundle\Collector\ProfileClient(\Http\Discovery\HttpClientDiscovery::find(), ($this->privates['httplug.collector.collector'] ?? ($this->privates['httplug.collector.collector'] = new \Http\HttplugBundle\Collector\Collector())), ($this->privates['httplug.collector.formatter'] ?? $this->getHttplug_Collector_FormatterService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))), NULL);
    }

    /**
     * Gets the private 'knp_paginator.helper.processor' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->privates['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor(($this->services['router'] ?? $this->getRouterService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig', 'defaultSortableTemplate' => '@KnpPaginator/Pagination/sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5]);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'nl', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'mobile_detect.device_view' shared service.
     *
     * @return \SunCat\MobileDetectBundle\Helper\DeviceView
     */
    protected function getMobileDetect_DeviceViewService()
    {
        $this->privates['mobile_detect.device_view'] = $instance = new \SunCat\MobileDetectBundle\Helper\DeviceView(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setCookieKey('device_view');
        $instance->setCookiePath('/');
        $instance->setCookieDomain('');
        $instance->setCookieSecure(false);
        $instance->setCookieHttpOnly(true);
        $instance->setSwitchParam('device_view');
        $instance->setCookieExpireDatetimeModifier('1 month');
        $instance->setRedirectConfig($this->parameters['mobile_detect.redirect']);

        return $instance;
    }

    /**
     * Gets the private 'mobile_detect.request_listener' shared service.
     *
     * @return \SunCat\MobileDetectBundle\EventListener\RequestResponseListener
     */
    protected function getMobileDetect_RequestListenerService()
    {
        return $this->privates['mobile_detect.request_listener'] = new \SunCat\MobileDetectBundle\EventListener\RequestResponseListener(($this->services['mobile_detect.mobile_detector'] ?? ($this->services['mobile_detect.mobile_detector'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector())), ($this->privates['mobile_detect.device_view'] ?? $this->getMobileDetect_DeviceViewService()), ($this->services['router'] ?? $this->getRouterService()), $this->parameters['mobile_detect.redirect'], true);
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.dao.admin_area'] ?? $this->load('getSecurity_Authentication_Provider_Dao_AdminAreaService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.admin_area'] ?? ($this->privates['security.authentication.provider.anonymous.admin_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 3 => ($this->privates['security.authentication.provider.rememberme.main'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_MainService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 5), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.admin_area' => ['privates', 'security.firewall.map.context.admin_area', 'getSecurity_Firewall_Map_Context_AdminAreaService.php', true],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.admin_area' => ($this->privates['.security.request_matcher.TlEZAKG'] ?? ($this->privates['.security.request_matcher.TlEZAKG'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 3));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('admin_area', 'admin_logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('main', 'account_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
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

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService.php', true],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService.php', true],
        ]));
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), [0 => ($this->targetDirs[3].'/src')]))), $this->targetDirs[0]);
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()))]);
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    protected function getVarDumper_ServerConnectionService()
    {
        return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', $this->targetDirs[3], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
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

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
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
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'twig.default_path' => false,
        'fos_user.registration.confirmation.from_email' => false,
        'fos_user.resetting.email.from_email' => false,
        'mailgun.key' => false,
        'mailgun.domain' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'TwigBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MonologBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'MakerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'WebServerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'FOSJsRoutingBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ],
                'FOSUserBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'cspooSwiftmailerMailgunBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/cspoo/swiftmailer-mailgun-bundle'),
                    'namespace' => 'cspoo\\Swiftmailer\\MailgunBundle',
                ],
                'StofDoctrineExtensionsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ],
                'MobileDetectBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle'),
                    'namespace' => 'SunCat\\MobileDetectBundle',
                ],
                'HttplugBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/php-http/httplug-bundle/src'),
                    'namespace' => 'Http\\HttplugBundle',
                ],
                'KnpPaginatorBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/knplabs/knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'FungioGoogleCalendarBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/fungio/google-calendar-bundle/Fungio/GoogleCalendarBundle'),
                    'namespace' => 'Fungio\\GoogleCalendarBundle',
                ],
            ]; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcApp_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'fos_user.registration.confirmation.from_email': $value = [
                $this->getEnv('MAILER_USER') => $this->getEnv('MAILER_USER'),
            ]; break;
            case 'fos_user.resetting.email.from_email': $value = [
                $this->getEnv('MAILER_USER') => $this->getEnv('MAILER_USER'),
            ]; break;
            case 'mailgun.key': $value = $this->getEnv('MAILGUN_API_KEY'); break;
            case 'mailgun.domain': $value = $this->getEnv('MAILGUN_DOMAIN'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'cspooSwiftmailerMailgunBundle' => 'cspoo\\Swiftmailer\\MailgunBundle\\cspooSwiftmailerMailgunBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'MobileDetectBundle' => 'SunCat\\MobileDetectBundle\\MobileDetectBundle',
                'HttplugBundle' => 'Http\\HttplugBundle\\HttplugBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'FungioGoogleCalendarBundle' => 'Fungio\\GoogleCalendarBundle\\FungioGoogleCalendarBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'locale' => 'nl',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'nl',
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
            'session.save_path' => '/opt/alt/php73/var/lib/php/session',
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
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
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
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
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
            'doctrine.orm.auto_generate_proxy_classes' => true,
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
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => 'aazaa@jpvdw.nl',
            'swiftmailer.mailer.default.delivery_addresses' => [
                0 => 'aazaa@jpvdw.nl',
            ],
            'swiftmailer.mailer.default.delivery_whitelist' => [

            ],
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => 'aazaa@jpvdw.nl',
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.normalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RouteCollectionNormalizer',
            'fos_js_routing.normalizer.routes_response.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RoutesResponseNormalizer',
            'fos_js_routing.denormalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Denormalizer\\RouteCollectionDenormalizer',
            'fos_js_routing.request_context_base_url' => NULL,
            'fos_js_routing.cache_control' => [
                'enabled' => false,
            ],
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main, admin_area',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
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
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.default_locale' => 'nl',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'mobile_detect.mobile_detector.class' => 'SunCat\\MobileDetectBundle\\DeviceDetector\\MobileDetector',
            'mobile_detect.device_view.class' => 'SunCat\\MobileDetectBundle\\Helper\\DeviceView',
            'mobile_detect.cookie_key' => 'device_view',
            'mobile_detect.switch_param' => 'device_view',
            'mobile_detect.cookie_expire_datetime_modifier' => '1 month',
            'mobile_detect.request_response_listener.class' => 'SunCat\\MobileDetectBundle\\EventListener\\RequestResponseListener',
            'mobile_detect.redirect' => [
                'mobile' => [
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ],
                'tablet' => [
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ],
                'full' => [
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ],
                'detect_tablet_as_mobile' => false,
            ],
            'mobile_detect.switch_device_view.save_referer_path' => true,
            'mobile_detect.twig.extension.class' => 'SunCat\\MobileDetectBundle\\Twig\\Extension\\MobileDetectExtension',
            'mobile_detect.cookie_path' => '/',
            'mobile_detect.cookie_domain' => '',
            'mobile_detect.cookie_secure' => false,
            'mobile_detect.cookie_httponly' => true,
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.templating.helper.pagination.class' => 'Knp\\Bundle\\PaginatorBundle\\Templating\\PaginationHelper',
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/twitter_bootstrap_v3_pagination.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => '@KnpPaginator/Pagination/sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'fungio.google_calendar.class' => 'Fungio\\GoogleCalendarBundle\\Service\\GoogleCalendar',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'httplug.collector.collector' => [
                    0 => 'httplug',
                    1 => '@Httplug/webprofiler.html.twig',
                ],
                'mobile_detect_bundle.device.collector' => [
                    0 => 'device.collector',
                    1 => '@MobileDetect/Collector/device.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.doctrine_cache.contains_command',
                1 => 'console.command.public_alias.doctrine_cache.delete_command',
                2 => 'console.command.public_alias.doctrine_cache.flush_command',
                3 => 'console.command.public_alias.doctrine_cache.stats_command',
            ],
        ];
    }
}
