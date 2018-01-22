<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/terrain')) {
            // terrain_index
            if ('/terrain' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_terrain_index;
                }

                $ret = array (  '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::indexAction',  '_route' => 'terrain_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'terrain_index'));
                }

                return $ret;
            }
            not_terrain_index:

            // terrain_show
            if (preg_match('#^/terrain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_terrain_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terrain_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::showAction',));
            }
            not_terrain_show:

        }

        elseif (0 === strpos($pathinfo, '/reservation')) {
            // reservation_index
            if ('/reservation' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_index;
                }

                $ret = array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reservation_index'));
                }

                return $ret;
            }
            not_reservation_index:

            // reservation_new
            if ('/reservation/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reservation_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }
            not_reservation_new:

            // reservation_show
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reservation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::showAction',));
            }
            not_reservation_show:

            // reservation_edit
            if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reservation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::editAction',));
            }
            not_reservation_edit:

            // reservation_delete
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_reservation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::deleteAction',));
            }
            not_reservation_delete:

        }

        elseif (0 === strpos($pathinfo, '/review')) {
            // review_index
            if ('/review' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_review_index;
                }

                $ret = array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReviewController::indexAction',  '_route' => 'review_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'review_index'));
                }

                return $ret;
            }
            not_review_index:

            // review_new
            if ('/review/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_review_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ReviewController::newAction',  '_route' => 'review_new',);
            }
            not_review_new:

        }

        elseif (0 === strpos($pathinfo, '/flight')) {
            // flight_index
            if ('/flight' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_flight_index;
                }

                $ret = array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::indexAction',  '_route' => 'flight_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'flight_index'));
                }

                return $ret;
            }
            not_flight_index:

            // flight_new
            if ('/flight/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_flight_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::newAction',  '_route' => 'flight_new',);
            }
            not_flight_new:

            // flight_show
            if (preg_match('#^/flight/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_flight_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'flight_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::showAction',));
            }
            not_flight_show:

            // flight_edit
            if (preg_match('#^/flight/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_flight_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'flight_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::editAction',));
            }
            not_flight_edit:

            // flight_delete
            if (preg_match('#^/flight/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_flight_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'flight_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::deleteAction',));
            }
            not_flight_delete:

        }

        elseif (0 === strpos($pathinfo, '/planemodel')) {
            // planemodel_index
            if ('/planemodel' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_planemodel_index;
                }

                $ret = array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::indexAction',  '_route' => 'planemodel_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'planemodel_index'));
                }

                return $ret;
            }
            not_planemodel_index:

            // planemodel_new
            if ('/planemodel/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_planemodel_new;
                }

                return array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::newAction',  '_route' => 'planemodel_new',);
            }
            not_planemodel_new:

            // planemodel_show
            if (preg_match('#^/planemodel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_planemodel_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planemodel_show')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::showAction',));
            }
            not_planemodel_show:

            // planemodel_edit
            if (preg_match('#^/planemodel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_planemodel_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planemodel_edit')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::editAction',));
            }
            not_planemodel_edit:

            // planemodel_delete
            if (preg_match('#^/planemodel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_planemodel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planemodel_delete')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::deleteAction',));
            }
            not_planemodel_delete:

        }

        // listing_index
        if (0 === strpos($pathinfo, '/listing') && preg_match('#^/listing/(?P<reservation_id>\\d+)/flight/(?P<flight_id>[^/]++)/planemodel/(?P<planemodel_id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_listing_index;
            }

            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_index')), array (  '_controller' => 'WCS\\CoavBundle\\Controller\\ListingController::indexAction',));
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'listing_index'));
            }

            return $ret;
        }
        not_listing_index:

        // wcs_coav_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'WCS\\CoavBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wcs_coav_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'wcs_coav_homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
