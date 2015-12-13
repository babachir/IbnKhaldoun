<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            if (0 === strpos($pathinfo, '/admin/article')) {
                // admin_article
                if ($pathinfo === '/admin/article') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'admin_article',);
                }

                // admin_update_article
                if (0 === strpos($pathinfo, '/admin/article/update') && preg_match('#^/admin/article/update/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update_article')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::updateAction',));
                }

                // admin_create_article
                if (0 === strpos($pathinfo, '/admin/article/create') && preg_match('#^/admin/article/create/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_create_article')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::createAction',));
                }

                // admin_delete_article
                if (0 === strpos($pathinfo, '/admin/article/delete') && preg_match('#^/admin/article/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete_article')), array (  '_controller' => 'AdminBundle\\Controller\\ArticleController::deleteAction',));
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
