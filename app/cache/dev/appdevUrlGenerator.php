<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_f2b8cdf' => true,
       '_assetic_f2b8cdf_0' => true,
       '_assetic_f2b8cdf_1' => true,
       '_assetic_f2b8cdf_2' => true,
       '_assetic_d854fa1' => true,
       '_assetic_d854fa1_0' => true,
       '_assetic_d854fa1_1' => true,
       '_assetic_d854fa1_2' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'JuniorERPDashboardBundle_homepage' => true,
       'JuniorERPDashboardBundle_admin_index' => true,
       'JuniorERPDashboardBundle_admin_utilisateur_index' => true,
       'JuniorERPDashboardBundle_admin_etude_index' => true,
       'JuniorERPDashboardBundle_admin_etude_domaine_ajouter' => true,
       'JuniorERPDashboardBundle_client_index' => true,
       'JuniorERPDashboardBundle_client_ajouter' => true,
       'JuniorERPDashboardBundle_etude_index' => true,
       'JuniorERPDashboardBundle_etude_ajouter' => true,
       'JuniorERPDashboardBundle_etude_voir' => true,
       '_connect' => true,
       '_show_el_finder' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_f2b8cdfRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'f2b8cdf',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/f2b8cdf.css',  ),));
    }

    private function get_assetic_f2b8cdf_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'f2b8cdf',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/f2b8cdf_jquery-ui_1.css',  ),));
    }

    private function get_assetic_f2b8cdf_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'f2b8cdf',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/f2b8cdf_elfinder_2.css',  ),));
    }

    private function get_assetic_f2b8cdf_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'f2b8cdf',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/f2b8cdf_theme_3.css',  ),));
    }

    private function get_assetic_d854fa1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd854fa1',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/d854fa1.js',  ),));
    }

    private function get_assetic_d854fa1_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd854fa1',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/d854fa1_jquery-1.6.2.min_1.js',  ),));
    }

    private function get_assetic_d854fa1_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd854fa1',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/d854fa1_jquery-ui.min_2.js',  ),));
    }

    private function get_assetic_d854fa1_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd854fa1',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/d854fa1_elfinder.min_3.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getJuniorERPDashboardBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\ClientController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getJuniorERPDashboardBundle_admin_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\AdminController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getJuniorERPDashboardBundle_admin_utilisateur_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\AdminController::indexUtilisateurAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/utilisateur',  ),));
    }

    private function getJuniorERPDashboardBundle_admin_etude_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\AdminController::indexEtudeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/etude',  ),));
    }

    private function getJuniorERPDashboardBundle_admin_etude_domaine_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\AdminController::ajouterDomaineEtudeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/etude/domaine/ajouter',  ),));
    }

    private function getJuniorERPDashboardBundle_client_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\ClientController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client',  ),));
    }

    private function getJuniorERPDashboardBundle_client_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\ClientController::ajouterAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/client/ajouter',  ),));
    }

    private function getJuniorERPDashboardBundle_etude_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\EtudeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/etude',  ),));
    }

    private function getJuniorERPDashboardBundle_etude_ajouterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\EtudeController::ajouterAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/etude/ajouter',  ),));
    }

    private function getJuniorERPDashboardBundle_etude_voirRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'JuniorERP\\DashboardBundle\\Controller\\EtudeController::voirAction',), array (  'id' => '\\d',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/etude',  ),));
    }

    private function get_connectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'AlphaLemon\\ElFinderBundle\\Controller\\ElFinderController::connectAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/document/al_elFinderConnect',  ),));
    }

    private function get_show_el_finderRouteInfo()
    {
        return array(array (), array (  '_controller' => 'AlphaLemon\\ElFinderBundle\\Controller\\ElFinderController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/document/',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }
}
