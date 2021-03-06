<?php

namespace Proxies\__CG__\WCS\CoavBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PlaneModel extends \WCS\CoavBundle\Entity\PlaneModel implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'id', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'model', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'manufacturer', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'cruiseSpeed', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'planeNbSeats', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'isAvailable'];
        }

        return ['__isInitialized__', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'id', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'model', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'manufacturer', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'cruiseSpeed', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'planeNbSeats', '' . "\0" . 'WCS\\CoavBundle\\Entity\\PlaneModel' . "\0" . 'isAvailable'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PlaneModel $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setModel($model)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModel', [$model]);

        return parent::setModel($model);
    }

    /**
     * {@inheritDoc}
     */
    public function getModel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModel', []);

        return parent::getModel();
    }

    /**
     * {@inheritDoc}
     */
    public function setManufacturer($manufacturer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManufacturer', [$manufacturer]);

        return parent::setManufacturer($manufacturer);
    }

    /**
     * {@inheritDoc}
     */
    public function getManufacturer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManufacturer', []);

        return parent::getManufacturer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCruiseSpeed($cruiseSpeed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCruiseSpeed', [$cruiseSpeed]);

        return parent::setCruiseSpeed($cruiseSpeed);
    }

    /**
     * {@inheritDoc}
     */
    public function getCruiseSpeed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCruiseSpeed', []);

        return parent::getCruiseSpeed();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaneNbSeats($planeNbSeats)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaneNbSeats', [$planeNbSeats]);

        return parent::setPlaneNbSeats($planeNbSeats);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaneNbSeats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaneNbSeats', []);

        return parent::getPlaneNbSeats();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAvailable($isAvailable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAvailable', [$isAvailable]);

        return parent::setIsAvailable($isAvailable);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAvailable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAvailable', []);

        return parent::getIsAvailable();
    }

}
