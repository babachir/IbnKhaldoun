<?php

namespace Proxies\__CG__\EntityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \EntityBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'localisation', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'commentaires', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'source', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'dateDebut', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'dateFin');
        }

        return array('__isInitialized__', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'localisation', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'commentaires', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'source', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'dateDebut', '' . "\0" . 'EntityBundle\\Entity\\Article' . "\0" . 'dateFin');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', array($source));

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', array());

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut($dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', array($dateDebut));

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', array());

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin($dateFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', array($dateFin));

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', array());

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaires', array());

        return parent::getCommentaires();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalisation', array());

        return parent::getLocalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalisation(\EntityBundle\Entity\Localisation $localisation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalisation', array($localisation));

        return parent::setLocalisation($localisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\EntityBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

}
