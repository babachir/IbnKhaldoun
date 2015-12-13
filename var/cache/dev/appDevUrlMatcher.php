<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // entity_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'entity_homepage');
            }

            return array (  '_controller' => 'EntityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entity_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AdminBundle\\Controller\\IndexController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_article
            if ($pathinfo === '/admin/article') {
                return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article',);
            }

            // admin_test
            if ($pathinfo === '/admin/test') {
                return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::testAction',  '_route' => 'admin_test',);
            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // admin_update_article
                if (0 === strpos($pathinfo, '/admin/article/update') && preg_match('#^/admin/article/update/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update_article')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::updateAction',));
                }

                // admin_create_article
                if ($pathinfo === '/admin/article/create') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'admin_create_article',);
                }

                // admin_list_article
                if ($pathinfo === '/admin/article/list') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::listAction',  '_route' => 'admin_list_article',);
                }

                // admin_delete_article
                if (0 === strpos($pathinfo, '/admin/article/delete') && preg_match('#^/admin/article/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_article')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::deleteAction',));
                }

                // admin_read_article
                if (0 === strpos($pathinfo, '/admin/article/read') && preg_match('#^/admin/article/read/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_read_article')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::readAction',));
                }

            }

            // admin_user
            if ($pathinfo === '/admin/user') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'admin_user',);
            }

            if (0 === strpos($pathinfo, '/admin/com')) {
                // admin_delete_com
                if (0 === strpos($pathinfo, '/admin/com/delete') && preg_match('#^/admin/com/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_com')), array (  '_controller' => 'AdminBundle\\Controller\\UtilisateurController::deleteComAction',));
                }

                // admin_validate_com
                if (0 === strpos($pathinfo, '/admin/com/validate') && preg_match('#^/admin/com/validate/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_validate_com')), array (  '_controller' => 'AdminBundle\\Controller\\UtilisateurController::validateComAction',));
                }

            }

        }

        // public_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'public_homepage');
            }

            return array (  '_controller' => 'PublicBundle\\Controller\\IbnkhaldounMapController::indexAction',  '_route' => 'public_homepage',);
        }

        // public_map
        if ($pathinfo === '/parcours') {
            return array (  '_controller' => 'PublicBundle\\Controller\\IbnkhaldounMapController::mapAction',  '_route' => 'public_map',);
        }

        if (0 === strpos($pathinfo, '/article')) {
            // public_article
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'PublicBundle\\Controller\\ArticleController::indexAction',  '_route' => 'public_article',);
            }

            // public_readarticle
            if (0 === strpos($pathinfo, '/article/read') && preg_match('#^/article/read/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_readarticle')), array (  '_controller' => 'PublicBundle\\Controller\\ArticleController::readAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
