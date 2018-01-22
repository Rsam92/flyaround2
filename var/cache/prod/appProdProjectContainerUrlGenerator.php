<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'terrain_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/terrain/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'terrain_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\TerrainController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/terrain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReservationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/flight/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/flight/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'flight_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\FlightController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/flight',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planemodel/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/planemodel/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'planemodel_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\PlaneModelController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/planemodel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listing_index' => array (  0 =>   array (    0 => 'reservation_id',    1 => 'flight_id',    2 => 'planemodel_id',  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ListingController::indexAction',  ),  2 =>   array (    'reservation_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'planemodel_id',    ),    2 =>     array (      0 => 'text',      1 => '/planemodel',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'flight_id',    ),    4 =>     array (      0 => 'text',      1 => '/flight',    ),    5 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'reservation_id',    ),    6 =>     array (      0 => 'text',      1 => '/listing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'review_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReviewController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/review/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'review_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\ReviewController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/review/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wcs_coav_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\CoavBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
