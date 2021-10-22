<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'fos_js_routing_js' => [['_format'], ['_controller' => 'fos_js_routing.controller:indexAction', '_format' => 'js'], ['_format' => 'js|json'], [['variable', '.', 'js|json', '_format', true], ['text', '/js/routing']], [], []],
        'fos_user_security_login' => [[], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login']], [], []],
        'fos_user_security_check' => [[], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check']], [], []],
        'fos_user_security_logout' => [[], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout']], [], []],
        'fos_user_profile_show' => [[], ['_controller' => 'fos_user.profile.controller:showAction'], [], [['text', '/profile/']], [], []],
        'fos_user_profile_edit' => [[], ['_controller' => 'fos_user.profile.controller:editAction'], [], [['text', '/profile/edit']], [], []],
        'fos_user_registration_register' => [[], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/']], [], []],
        'fos_user_registration_check_email' => [[], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email']], [], []],
        'fos_user_registration_confirm' => [['token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/register/confirm']], [], []],
        'fos_user_registration_confirmed' => [[], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed']], [], []],
        'fos_user_resetting_request' => [[], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request']], [], []],
        'fos_user_resetting_send_email' => [[], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email']], [], []],
        'fos_user_resetting_check_email' => [[], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email']], [], []],
        'fos_user_resetting_reset' => [['token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/resetting/reset']], [], []],
        'fos_user_change_password' => [[], ['_controller' => 'fos_user.change_password.controller:changePasswordAction'], [], [['text', '/profile/change-password']], [], []],
        'unsubscribe_mailing' => [['userMail', 'userToken'], ['_controller' => 'App\\Controller\\Account\\DefaultController::unsubscribeMailing'], [], [['variable', '/', '[^/]++', 'userToken', true], ['variable', '/', '[^/]++', 'userMail', true], ['text', '/uitschrijven']], [], []],
        'user_validate_email' => [['userId', 'tokenLogin', 'email'], ['_controller' => 'App\\Controller\\Account\\SecurityController::activateAccount'], [], [['variable', '/', '[^/]++', 'email', true], ['variable', '/', '[^/]++', 'tokenLogin', true], ['variable', '/', '[^/]++', 'userId', true], ['text', '/activeren']], [], []],
        'account_reset_pass' => [[], ['_controller' => 'App\\Controller\\Account\\SecurityController::resetPassword'], [], [['text', '/nieuw-wachtwoord-aanvragen']], [], []],
        'webhook_github' => [[], ['_controller' => 'App\\Controller\\Webhook\\GitController::github'], [], [['text', '/webhook/github']], [], []],
        'webhook_bitbucket' => [[], ['_controller' => 'App\\Controller\\Webhook\\GitController::bitbucket'], [], [['text', '/webhook/bitbucket']], [], []],
        'webhook_mailgun' => [[], ['_controller' => 'App\\Controller\\Webhook\\MailgunController::mailgun'], [], [['text', '/webhook/mailgun']], [], []],
        'webhook_mollie' => [[], ['_controller' => 'App\\Controller\\Webhook\\MolliePaymentController::normalWebhook'], [], [['text', '/webhook/mollie/webhook']], [], []],
        'webhook_mollie_subscription' => [['mollieUserId'], ['_controller' => 'App\\Controller\\Webhook\\MolliePaymentController::subscriptionWebhook'], [], [['variable', '/', '[^/]++', 'mollieUserId', true], ['text', '/webhook/mollie-subscription-status']], [], []],
        'admin_login' => [[], ['_controller' => 'App\\Controller\\Admin\\SecurityController:loginAction'], [], [['text', '/admin/inloggen']], [], []],
        'admin_login_check' => [[], ['_controller' => 'App\\Controller\\Admin\\SecurityController::checkAction'], [], [['text', '/admin/inloggen_check']], [], []],
        'admin_logout' => [[], ['_controller' => 'App\\Controller\\Admin\\SecurityController::logoutAction'], [], [['text', '/admin/uitloggen']], [], []],
        'admin_page_overview' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::index'], [], [['text', '/admin/paginas/']], [], []],
        'admin_page_edit' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::edit'], [], [['text', '/admin/paginas/nieuw-bewerken/']], [], []],
        'admin_page_edit_content' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::editContent'], [], [['text', '/admin/paginas/content-nieuw-bewerken/']], [], []],
        'admin_page_category' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::category'], [], [['text', '/admin/paginas/categorieen/']], [], []],
        'admin_page_category_edit' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::editCategory'], [], [['text', '/admin/paginas/categorieen-nieuw-bewerken/']], [], []],
        'admin_page_get_template' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::getTemplateSettings'], [], [['text', '/admin/paginas/load-template/']], [], []],
        'admin_page_category_sort' => [[], ['_controller' => 'App\\Controller\\Admin\\PageController::sort'], [], [['text', '/admin/paginas/categorieen-sorteren/']], [], []],
        'admin_workshop_index' => [[], ['_controller' => 'App\\Controller\\Admin\\WorkshopController::index'], [], [['text', '/admin/workshop/']], [], []],
        'admin_workshop_edit' => [[], ['_controller' => 'App\\Controller\\Admin\\WorkshopController::edit'], [], [['text', '/admin/workshop/nieuw-bewerken/']], [], []],
        'admin_workshop_clone' => [[], ['_controller' => 'App\\Controller\\Admin\\WorkshopController::cloneWorkshops'], [], [['text', '/admin/workshop/clone/']], [], []],
        'admin_workshop_remove' => [['id'], ['_controller' => 'App\\Controller\\Admin\\WorkshopController::remove'], [], [['text', '/'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/workshop/verwijderd']], [], []],
        'admin_workshop_location_index' => [[], ['_controller' => 'App\\Controller\\Admin\\WorkshopController::locationOverview'], [], [['text', '/admin/workshop/locaties/']], [], []],
        'admin_workshop_location_edit' => [[], ['_controller' => 'App\\Controller\\Admin\\WorkshopController::editLocation'], [], [['text', '/admin/workshop/locaties/bewerken']], [], []],
        'admin_collector_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CollectorController::index'], [], [['text', '/admin/blokken/']], [], []],
        'admin_collector_edit' => [[], ['_controller' => 'App\\Controller\\Admin\\CollectorController::edit'], [], [['text', '/admin/blokken/nieuw-bewerken/']], [], []],
        'video_chat_index' => [[], ['_controller' => 'App\\Controller\\Admin\\VideoController::index'], [], [['text', '/admin/video-chat/']], [], []],
        'video_chat_create' => [['workshop'], ['_controller' => 'App\\Controller\\Admin\\VideoController::create'], [], [['text', '/aanmaken'], ['variable', '/', '[^/]++', 'workshop', true], ['text', '/admin/video-chat']], [], []],
        'video_chat_open' => [['workshop'], ['_controller' => 'App\\Controller\\Admin\\VideoController::open'], [], [['text', '/open'], ['variable', '/', '[^/]++', 'workshop', true], ['text', '/admin/video-chat']], [], []],
        'video_chat_close' => [['workshop'], ['_controller' => 'App\\Controller\\Admin\\VideoController::close'], [], [['text', '/sluiten'], ['variable', '/', '[^/]++', 'workshop', true], ['text', '/admin/video-chat']], [], []],
        'admin_user_overview' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/admin/gebruikers/']], [], []],
        'admin_user_detail' => [['user'], ['_controller' => 'App\\Controller\\Admin\\UserController::detail'], [], [['text', '/'], ['variable', '/', '[^/]++', 'user', true], ['text', '/admin/gebruikers/bekijk']], [], []],
        'admin_user_disable' => [['user'], ['_controller' => 'App\\Controller\\Admin\\UserController::disable'], [], [['text', '/'], ['variable', '/', '[^/]++', 'user', true], ['text', '/admin/gebruikers/uitschakelen']], [], []],
        'admin_user_enable' => [['user'], ['_controller' => 'App\\Controller\\Admin\\UserController::enable'], [], [['text', '/'], ['variable', '/', '[^/]++', 'user', true], ['text', '/admin/gebruikers/inschakelen']], [], []],
        'admin_user_mailing' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::mailing'], [], [['text', '/admin/gebruikers/mailing/']], [], []],
        'admin_user_send_mailing' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::sendMailing'], [], [['text', '/admin/gebruikers/send-mailing/']], [], []],
        'admin_image_upload' => [[], ['_controller' => 'App\\Controller\\Admin\\DefaultController::imageUpload'], [], [['text', '/admin/foto-uploaden/']], [], []],
        'admin_index' => [[], ['_controller' => 'App\\Controller\\Admin\\DefaultController::index'], [], [['text', '/admin/']], [], []],
        'admin_background_index' => [[], ['_controller' => 'App\\Controller\\Admin\\DefaultController::veranderDeAchtergrond'], [], [['text', '/admin/Verander-de-achtergrond']], [], []],
        'account_login' => [[], ['_controller' => 'App\\Controller\\Account\\SecurityController::loginAction'], [], [['text', '/account/inloggen']], [], []],
        'account_login_check' => [[], ['_controller' => 'App\\Controller\\Account\\SecurityController::checkAction'], [], [['text', '/account/inloggen_check']], [], []],
        'account_logout' => [[], ['_controller' => 'App\\Controller\\Account\\SecurityController::logoutAction'], [], [['text', '/account/uitloggen']], [], []],
        'account_register' => [[], ['_controller' => 'App\\Controller\\Account\\SecurityController::register'], [], [['text', '/account/registreren']], [], []],
        'account_update' => [[], ['_controller' => 'App\\Controller\\Account\\SecurityController::update'], [], [['text', '/account/update-gebruiker']], [], []],
        'account_subscription' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::subscription'], [], [['text', '/account/lidmaatschap']], [], []],
        'account_new_subscription' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::generateSubscription'], [], [['text', '/account/word-lid']], [], []],
        'account_stop_subscription' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::stopSubscription'], [], [['text', '/account/stop-lidmaatschap']], [], []],
        'account_viewed_videos' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::viewedVideos'], [], [['text', '/account/bekeken-videos']], [], []],
        'account_workshop' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::workshop'], [], [['text', '/account/workshop-sessies']], [], []],
        'account_workshop_video_session' => [['userWorkshop'], ['_controller' => 'App\\Controller\\Account\\DefaultController::startVideoSession'], [], [['variable', '/', '[^/]++', 'userWorkshop', true], ['text', '/account/video-sessie']], [], []],
        'account_index' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::index'], [], [['text', '/account/']], [], []],
        'account_favorites' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::favorites'], [], [['text', '/account/favorieten']], [], []],
        'account_limit' => [[], ['_controller' => 'App\\Controller\\Account\\DefaultController::index'], [], [['text', '/account/limiet-bereikt']], [], []],
        'account_favorites_toggle' => [[], ['_controller' => 'App\\Controller\\AjaxController::toggleFavorite'], [], [['text', '/ajax/toggle-favorite/']], [], []],
        'account_share_video' => [[], ['_controller' => 'App\\Controller\\AjaxController::shareVideo'], [], [['text', '/ajax/deel-video/']], [], []],
        'account_share_page' => [[], ['_controller' => 'App\\Controller\\AjaxController::sharePage'], [], [['text', '/ajax/deel-pagina/']], [], []],
        'payment_success' => [[], ['_controller' => 'App\\Controller\\PaymentController::payment'], [], [['text', '/betaling/']], [], []],
        'subscription_success' => [['mollieUserId'], ['_controller' => 'App\\Controller\\PaymentController::subscription'], [], [['variable', '/', '[^/]++', 'mollieUserId', true], ['text', '/lidmaatschap-status']], [], []],
        'privacy_statement' => [[], ['_controller' => 'App\\Controller\\DefaultController::privacystatement'], [], [['text', '/algemene-voorwaarden-en-privacystatement']], [], []],
        'workshops' => [[], ['_controller' => 'App\\Controller\\WorkshopController:indexWorkshop'], [], [['text', '/workshops/']], [], []],
        'cursussen' => [[], ['_controller' => 'App\\Controller\\WorkshopController::indexCursus'], [], [['text', '/cursussen/']], [], []],
        'sessions_calendar' => [[], ['_controller' => 'App\\Controller\\WorkshopController::calendarWeek', 'year' => null, 'week' => null], [], [['text', '/sessies/']], [], []],
        'sessions_calendar_date' => [['year', 'week'], ['_controller' => 'App\\Controller\\WorkshopController::calendarWeek', 'year' => null, 'week' => null], [], [['variable', '/', '[^/]++', 'week', true], ['variable', '/', '[^/]++', 'year', true], ['text', '/sessies']], [], []],
        'workshops_cursus_register' => [['workshop'], ['_controller' => 'App\\Controller\\WorkshopController::subscribe'], [], [['variable', '/', '[^/]++', 'workshop', true], ['text', '/workshops-en-cursussen/inschrijven']], [], []],
        'workshops_cursus_detail' => [['slug'], ['_controller' => 'App\\Controller\\WorkshopController::detail'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/workshops-en-cursussen']], [], []],
        'index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
        'page_loader' => [['slug'], ['_controller' => 'App\\Controller\\DefaultController::pageCollector'], ['slug' => '.+'], [['variable', '/', '.+', 'slug', true]], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
