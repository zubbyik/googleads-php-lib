<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemAttributeValue
{

    /**
     * @var int $feedAttributeId
     */
    protected $feedAttributeId = null;

    /**
     * @var int $integerValue
     */
    protected $integerValue = null;

    /**
     * @var float $doubleValue
     */
    protected $doubleValue = null;

    /**
     * @var boolean $booleanValue
     */
    protected $booleanValue = null;

    /**
     * @var string $stringValue
     */
    protected $stringValue = null;

    /**
     * @var long[] $integerValues
     */
    protected $integerValues = null;

    /**
     * @var double[] $doubleValues
     */
    protected $doubleValues = null;

    /**
     * @var boolean[] $booleanValues
     */
    protected $booleanValues = null;

    /**
     * @var string[] $stringValues
     */
    protected $stringValues = null;

    /**
     * @param int $feedAttributeId
     * @param int $integerValue
     * @param float $doubleValue
     * @param boolean $booleanValue
     * @param string $stringValue
     * @param long[] $integerValues
     * @param double[] $doubleValues
     * @param boolean[] $booleanValues
     * @param string[] $stringValues
     */
    public function __construct($feedAttributeId = null, $integerValue = null, $doubleValue = null, $booleanValue = null, $stringValue = null, array $integerValues = null, array $doubleValues = null, array $booleanValues = null, array $stringValues = null)
    {
      $this->feedAttributeId = $feedAttributeId;
      $this->integerValue = $integerValue;
      $this->doubleValue = $doubleValue;
      $this->booleanValue = $booleanValue;
      $this->stringValue = $stringValue;
      $this->integerValues = $integerValues;
      $this->doubleValues = $doubleValues;
      $this->booleanValues = $booleanValues;
      $this->stringValues = $stringValues;
    }

    /**
     * @return int
     */
    public function getFeedAttributeId()
    {
      return $this->feedAttributeId;
    }

    /**
     * @param int $feedAttributeId
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setFeedAttributeId($feedAttributeId)
    {
      $this->feedAttributeId = $feedAttributeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntegerValue()
    {
      return $this->integerValue;
    }

    /**
     * @param int $integerValue
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setIntegerValue($integerValue)
    {
      $this->integerValue = $integerValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getDoubleValue()
    {
      return $this->doubleValue;
    }

    /**
     * @param float $doubleValue
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setDoubleValue($doubleValue)
    {
      $this->doubleValue = $doubleValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBooleanValue()
    {
      return $this->booleanValue;
    }

    /**
     * @param boolean $booleanValue
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setBooleanValue($booleanValue)
    {
      $this->booleanValue = $booleanValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getStringValue()
    {
      return $this->stringValue;
    }

    /**
     * @param string $stringValue
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setStringValue($stringValue)
    {
      $this->stringValue = $stringValue;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getIntegerValues()
    {
      return $this->integerValues;
    }

    /**
     * @param long[] $integerValues
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setIntegerValues(array $integerValues)
    {
      $this->integerValues = $integerValues;
      return $this;
    }

    /**
     * @return double[]
     */
    public function getDoubleValues()
    {
      return $this->doubleValues;
    }

    /**
     * @param double[] $doubleValues
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setDoubleValues(array $doubleValues)
    {
      $this->doubleValues = $doubleValues;
      return $this;
    }

    /**
     * @return boolean[]
     */
    public function getBooleanValues()
    {
      return $this->booleanValues;
    }

    /**
     * @param boolean[] $booleanValues
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setBooleanValues(array $booleanValues)
    {
      $this->booleanValues = $booleanValues;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getStringValues()
    {
      return $this->stringValues;
    }

    /**
     * @param string[] $stringValues
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemAttributeValue
     */
    public function setStringValues(array $stringValues)
    {
      $this->stringValues = $stringValues;
      return $this;
    }

}