<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
            '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
            '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
            '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
            '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/nieuw-wachtwoord-aanvragen' => [[['_route' => 'account_reset_pass', '_controller' => 'App\\Controller\\Account\\SecurityController::resetPassword'], null, null, null, false, false, null]],
            '/webhook/github' => [[['_route' => 'webhook_github', '_controller' => 'App\\Controller\\Webhook\\GitController::github'], null, null, null, false, false, null]],
            '/webhook/bitbucket' => [[['_route' => 'webhook_bitbucket', '_controller' => 'App\\Controller\\Webhook\\GitController::bitbucket'], null, null, null, false, false, null]],
            '/webhook/mailgun' => [[['_route' => 'webhook_mailgun', '_controller' => 'App\\Controller\\Webhook\\MailgunController::mailgun'], null, null, null, false, false, null]],
            '/webhook/mollie/webhook' => [[['_route' => 'webhook_mollie', '_controller' => 'App\\Controller\\Webhook\\MolliePaymentController::normalWebhook'], null, null, null, false, false, null]],
            '/admin/inloggen' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\Admin\\SecurityController:loginAction'], null, null, null, false, false, null]],
            '/admin/inloggen_check' => [[['_route' => 'admin_login_check', '_controller' => 'App\\Controller\\Admin\\SecurityController::checkAction'], null, null, null, false, false, null]],
            '/admin/uitloggen' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\Admin\\SecurityController::logoutAction'], null, null, null, false, false, null]],
            '/admin/paginas' => [[['_route' => 'admin_page_overview', '_controller' => 'App\\Controller\\Admin\\PageController::index'], null, null, null, true, false, null]],
            '/admin/paginas/nieuw-bewerken' => [[['_route' => 'admin_page_edit', '_controller' => 'App\\Controller\\Admin\\PageController::edit'], null, null, null, true, false, null]],
            '/admin/paginas/content-nieuw-bewerken' => [[['_route' => 'admin_page_edit_content', '_controller' => 'App\\Controller\\Admin\\PageController::editContent'], null, null, null, true, false, null]],
            '/admin/paginas/categorieen' => [[['_route' => 'admin_page_category', '_controller' => 'App\\Controller\\Admin\\PageController::category'], null, null, null, true, false, null]],
            '/admin/paginas/categorieen-nieuw-bewerken' => [[['_route' => 'admin_page_category_edit', '_controller' => 'App\\Controller\\Admin\\PageController::editCategory'], null, null, null, true, false, null]],
            '/admin/paginas/load-template' => [[['_route' => 'admin_page_get_template', '_controller' => 'App\\Controller\\Admin\\PageController::getTemplateSettings'], null, ['POST' => 0], null, true, false, null]],
            '/admin/paginas/categorieen-sorteren' => [[['_route' => 'admin_page_category_sort', '_controller' => 'App\\Controller\\Admin\\PageController::sort'], null, ['POST' => 0], null, true, false, null]],
            '/admin/workshop' => [[['_route' => 'admin_workshop_index', '_controller' => 'App\\Controller\\Admin\\WorkshopController::index'], null, null, null, true, false, null]],
            '/admin/workshop/nieuw-bewerken' => [[['_route' => 'admin_workshop_edit', '_controller' => 'App\\Controller\\Admin\\WorkshopController::edit'], null, null, null, true, false, null]],
            '/admin/workshop/clone' => [[['_route' => 'admin_workshop_clone', '_controller' => 'App\\Controller\\Admin\\WorkshopController::cloneWorkshops'], null, null, null, true, false, null]],
            '/admin/workshop/locaties' => [[['_route' => 'admin_workshop_location_index', '_controller' => 'App\\Controller\\Admin\\WorkshopController::locationOverview'], null, null, null, true, false, null]],
            '/admin/workshop/locaties/bewerken' => [[['_route' => 'admin_workshop_location_edit', '_controller' => 'App\\Controller\\Admin\\WorkshopController::editLocation'], null, null, null, false, false, null]],
            '/admin/blokken' => [[['_route' => 'admin_collector_index', '_controller' => 'App\\Controller\\Admin\\CollectorController::index'], null, null, null, true, false, null]],
            '/admin/blokken/nieuw-bewerken' => [[['_route' => 'admin_collector_edit', '_controller' => 'App\\Controller\\Admin\\CollectorController::edit'], null, null, null, true, false, null]],
            '/admin/video-chat' => [[['_route' => 'video_chat_index', '_controller' => 'App\\Controller\\Admin\\VideoController::index'], null, null, null, true, false, null]],
            '/admin/gebruikers' => [[['_route' => 'admin_user_overview', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, true, false, null]],
            '/admin/gebruikers/mailing' => [[['_route' => 'admin_user_mailing', '_controller' => 'App\\Controller\\Admin\\UserController::mailing'], null, null, null, true, false, null]],
            '/admin/gebruikers/send-mailing' => [[['_route' => 'admin_user_send_mailing', '_controller' => 'App\\Controller\\Admin\\UserController::sendMailing'], null, null, null, true, false, null]],
            '/admin/foto-uploaden' => [[['_route' => 'admin_image_upload', '_controller' => 'App\\Controller\\Admin\\DefaultController::imageUpload'], null, null, null, true, false, null]],
            '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\DefaultController::index'], null, null, null, true, false, null]],
            '/admin/Verander-de-achtergrond' => [[['_route' => 'admin_background_index', '_controller' => 'App\\Controller\\Admin\\DefaultController::veranderDeAchtergrond'], null, null, null, false, false, null]],
            '/account/inloggen' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\Account\\SecurityController::loginAction'], null, null, null, false, false, null]],
            '/account/inloggen_check' => [[['_route' => 'account_login_check', '_controller' => 'App\\Controller\\Account\\SecurityController::checkAction'], null, null, null, false, false, null]],
            '/account/uitloggen' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\Account\\SecurityController::logoutAction'], null, null, null, false, false, null]],
            '/account/registreren' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\Account\\SecurityController::register'], null, null, null, false, false, null]],
            '/account/update-gebruiker' => [[['_route' => 'account_update', '_controller' => 'App\\Controller\\Account\\SecurityController::update'], null, null, null, false, false, null]],
            '/account/lidmaatschap' => [[['_route' => 'account_subscription', '_controller' => 'App\\Controller\\Account\\DefaultController::subscription'], null, null, null, false, false, null]],
            '/account/word-lid' => [[['_route' => 'account_new_subscription', '_controller' => 'App\\Controller\\Account\\DefaultController::generateSubscription'], null, null, null, false, false, null]],
            '/account/stop-lidmaatschap' => [[['_route' => 'account_stop_subscription', '_controller' => 'App\\Controller\\Account\\DefaultController::stopSubscription'], null, null, null, false, false, null]],
            '/account/bekeken-videos' => [[['_route' => 'account_viewed_videos', '_controller' => 'App\\Controller\\Account\\DefaultController::viewedVideos'], null, null, null, false, false, null]],
            '/account/workshop-sessies' => [[['_route' => 'account_workshop', '_controller' => 'App\\Controller\\Account\\DefaultController::workshop'], null, null, null, false, false, null]],
            '/account' => [[['_route' => 'account_index', '_controller' => 'App\\Controller\\Account\\DefaultController::index'], null, null, null, true, false, null]],
            '/account/favorieten' => [[['_route' => 'account_favorites', '_controller' => 'App\\Controller\\Account\\DefaultController::favorites'], null, null, null, false, false, null]],
            '/account/limiet-bereikt' => [[['_route' => 'account_limit', '_controller' => 'App\\Controller\\Account\\DefaultController::index'], null, null, null, false, false, null]],
            '/ajax/toggle-favorite' => [[['_route' => 'account_favorites_toggle', '_controller' => 'App\\Controller\\AjaxController::toggleFavorite'], null, ['POST' => 0], null, true, false, null]],
            '/ajax/deel-video' => [[['_route' => 'account_share_video', '_controller' => 'App\\Controller\\AjaxController::shareVideo'], null, ['POST' => 0], null, true, false, null]],
            '/ajax/deel-pagina' => [[['_route' => 'account_share_page', '_controller' => 'App\\Controller\\AjaxController::sharePage'], null, ['POST' => 0], null, true, false, null]],
            '/betaling' => [[['_route' => 'payment_success', '_controller' => 'App\\Controller\\PaymentController::payment'], null, null, null, true, false, null]],
            '/algemene-voorwaarden-en-privacystatement' => [[['_route' => 'privacy_statement', '_controller' => 'App\\Controller\\DefaultController::privacystatement'], null, null, null, false, false, null]],
            '/workshops' => [[['_route' => 'workshops', '_controller' => 'App\\Controller\\WorkshopController:indexWorkshop'], null, null, null, true, false, null]],
            '/cursussen' => [[['_route' => 'cursussen', '_controller' => 'App\\Controller\\WorkshopController::indexCursus'], null, null, null, true, false, null]],
            '/sessies' => [[['_route' => 'sessions_calendar', '_controller' => 'App\\Controller\\WorkshopController::calendarWeek', 'year' => null, 'week' => null], null, null, null, true, false, null]],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/js/routing(?:\\.(js|json))?(*:196)'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:233)'
                        .'|setting/reset/([^/]++)(*:263)'
                    .')'
                    .'|/uitschrijven/([^/]++)/([^/]++)(*:303)'
                    .'|/a(?'
                        .'|c(?'
                            .'|tiveren/([^/]++)/([^/]++)/([^/]++)(*:354)'
                            .'|count/video\\-sessie/([^/]++)(*:390)'
                        .')'
                        .'|dmin/(?'
                            .'|workshop/verwijderd/([^/]++)(*:435)'
                            .'|video\\-chat/([^/]++)/(?'
                                .'|aanmaken(*:475)'
                                .'|open(*:487)'
                                .'|sluiten(*:502)'
                            .')'
                            .'|gebruikers/(?'
                                .'|bekijk/([^/]++)(*:540)'
                                .'|uitschakelen/([^/]++)(*:569)'
                                .'|inschakelen/([^/]++)(*:597)'
                            .')'
                        .')'
                    .')'
                    .'|/w(?'
                        .'|ebhook/mollie\\-subscription\\-status/([^/]++)(*:657)'
                        .'|orkshops\\-en\\-cursussen/(?'
                            .'|inschrijven/([^/]++)(*:712)'
                            .'|([^/]++)(*:728)'
                        .')'
                    .')'
                    .'|/lidmaatschap\\-status/([^/]++)(*:768)'
                    .'|/sessies(?:/([^/]++)(?:/([^/]++))?)?(*:812)'
                    .'|/(.+)(*:825)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            196 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller:indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
            233 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
            263 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            303 => [[['_route' => 'unsubscribe_mailing', '_controller' => 'App\\Controller\\Account\\DefaultController::unsubscribeMailing'], ['userMail', 'userToken'], null, null, false, true, null]],
            354 => [[['_route' => 'user_validate_email', '_controller' => 'App\\Controller\\Account\\SecurityController::activateAccount'], ['userId', 'tokenLogin', 'email'], null, null, false, true, null]],
            390 => [[['_route' => 'account_workshop_video_session', '_controller' => 'App\\Controller\\Account\\DefaultController::startVideoSession'], ['userWorkshop'], null, null, false, true, null]],
            435 => [[['_route' => 'admin_workshop_remove', '_controller' => 'App\\Controller\\Admin\\WorkshopController::remove'], ['id'], null, null, true, true, null]],
            475 => [[['_route' => 'video_chat_create', '_controller' => 'App\\Controller\\Admin\\VideoController::create'], ['workshop'], null, null, false, false, null]],
            487 => [[['_route' => 'video_chat_open', '_controller' => 'App\\Controller\\Admin\\VideoController::open'], ['workshop'], null, null, false, false, null]],
            502 => [[['_route' => 'video_chat_close', '_controller' => 'App\\Controller\\Admin\\VideoController::close'], ['workshop'], null, null, false, false, null]],
            540 => [[['_route' => 'admin_user_detail', '_controller' => 'App\\Controller\\Admin\\UserController::detail'], ['user'], null, null, true, true, null]],
            569 => [[['_route' => 'admin_user_disable', '_controller' => 'App\\Controller\\Admin\\UserController::disable'], ['user'], null, null, true, true, null]],
            597 => [[['_route' => 'admin_user_enable', '_controller' => 'App\\Controller\\Admin\\UserController::enable'], ['user'], null, null, true, true, null]],
            657 => [[['_route' => 'webhook_mollie_subscription', '_controller' => 'App\\Controller\\Webhook\\MolliePaymentController::subscriptionWebhook'], ['mollieUserId'], null, null, false, true, null]],
            712 => [[['_route' => 'workshops_cursus_register', '_controller' => 'App\\Controller\\WorkshopController::subscribe'], ['workshop'], null, null, false, true, null]],
            728 => [[['_route' => 'workshops_cursus_detail', '_controller' => 'App\\Controller\\WorkshopController::detail'], ['slug'], null, null, false, true, null]],
            768 => [[['_route' => 'subscription_success', '_controller' => 'App\\Controller\\PaymentController::subscription'], ['mollieUserId'], null, null, false, true, null]],
            812 => [[['_route' => 'sessions_calendar_date', '_controller' => 'App\\Controller\\WorkshopController::calendarWeek', 'year' => null, 'week' => null], ['year', 'week'], null, null, false, true, null]],
            825 => [[['_route' => 'page_loader', '_controller' => 'App\\Controller\\DefaultController::pageCollector'], ['slug'], null, null, false, true, null]],
        ];
    }
}
