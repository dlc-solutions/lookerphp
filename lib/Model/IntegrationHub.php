<?php
/**
 * IntegrationHub
 *
 * PHP version 5
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Experimental Looker API 3.1 Preview
 *
 * This API 3.1 is in active development. Breaking changes are likely to occur to some API functions in future Looker releases until API 3.1 is officially launched and upgraded to beta status.  If you have time and interest to experiment with new or modified services exposed in this embryonic API 3.1, we welcome your participation and feedback!  For large development efforts or critical line-of-business projects, we strongly recommend you stick with the API 3.0 while API 3.1 is under construction.
 *
 * OpenAPI spec version: 3.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Looker\Model;

use \ArrayAccess;
use \Looker\ObjectSerializer;

/**
 * IntegrationHub Class Doc Comment
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationHub implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationHub';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'url' => 'string',
        'label' => 'string',
        'official' => 'bool',
        'fetch_error_message' => 'string',
        'authorization_token' => 'string',
        'has_authorization_token' => 'bool',
        'legal_agreement_signed' => 'bool',
        'legal_agreement_required' => 'bool',
        'legal_agreement_text' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'url' => null,
        'label' => null,
        'official' => null,
        'fetch_error_message' => null,
        'authorization_token' => null,
        'has_authorization_token' => null,
        'legal_agreement_signed' => null,
        'legal_agreement_required' => null,
        'legal_agreement_text' => null,
        'can' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'url' => 'url',
        'label' => 'label',
        'official' => 'official',
        'fetch_error_message' => 'fetch_error_message',
        'authorization_token' => 'authorization_token',
        'has_authorization_token' => 'has_authorization_token',
        'legal_agreement_signed' => 'legal_agreement_signed',
        'legal_agreement_required' => 'legal_agreement_required',
        'legal_agreement_text' => 'legal_agreement_text',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'label' => 'setLabel',
        'official' => 'setOfficial',
        'fetch_error_message' => 'setFetchErrorMessage',
        'authorization_token' => 'setAuthorizationToken',
        'has_authorization_token' => 'setHasAuthorizationToken',
        'legal_agreement_signed' => 'setLegalAgreementSigned',
        'legal_agreement_required' => 'setLegalAgreementRequired',
        'legal_agreement_text' => 'setLegalAgreementText',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'label' => 'getLabel',
        'official' => 'getOfficial',
        'fetch_error_message' => 'getFetchErrorMessage',
        'authorization_token' => 'getAuthorizationToken',
        'has_authorization_token' => 'getHasAuthorizationToken',
        'legal_agreement_signed' => 'getLegalAgreementSigned',
        'legal_agreement_required' => 'getLegalAgreementRequired',
        'legal_agreement_text' => 'getLegalAgreementText',
        'can' => 'getCan'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['official'] = isset($data['official']) ? $data['official'] : null;
        $this->container['fetch_error_message'] = isset($data['fetch_error_message']) ? $data['fetch_error_message'] : null;
        $this->container['authorization_token'] = isset($data['authorization_token']) ? $data['authorization_token'] : null;
        $this->container['has_authorization_token'] = isset($data['has_authorization_token']) ? $data['has_authorization_token'] : null;
        $this->container['legal_agreement_signed'] = isset($data['legal_agreement_signed']) ? $data['legal_agreement_signed'] : null;
        $this->container['legal_agreement_required'] = isset($data['legal_agreement_required']) ? $data['legal_agreement_required'] : null;
        $this->container['legal_agreement_text'] = isset($data['legal_agreement_text']) ? $data['legal_agreement_text'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the hub.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL of the hub.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label of the hub.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets official
     *
     * @return bool
     */
    public function getOfficial()
    {
        return $this->container['official'];
    }

    /**
     * Sets official
     *
     * @param bool $official Whether this hub is a first-party integration hub operated by Looker.
     *
     * @return $this
     */
    public function setOfficial($official)
    {
        $this->container['official'] = $official;

        return $this;
    }

    /**
     * Gets fetch_error_message
     *
     * @return string
     */
    public function getFetchErrorMessage()
    {
        return $this->container['fetch_error_message'];
    }

    /**
     * Sets fetch_error_message
     *
     * @param string $fetch_error_message An error message, present if the integration hub metadata could not be fetched. If this is present, the integration hub is unusable.
     *
     * @return $this
     */
    public function setFetchErrorMessage($fetch_error_message)
    {
        $this->container['fetch_error_message'] = $fetch_error_message;

        return $this;
    }

    /**
     * Gets authorization_token
     *
     * @return string
     */
    public function getAuthorizationToken()
    {
        return $this->container['authorization_token'];
    }

    /**
     * Sets authorization_token
     *
     * @param string $authorization_token (Write-Only) An authorization key that will be sent to the integration hub on every request.
     *
     * @return $this
     */
    public function setAuthorizationToken($authorization_token)
    {
        $this->container['authorization_token'] = $authorization_token;

        return $this;
    }

    /**
     * Gets has_authorization_token
     *
     * @return bool
     */
    public function getHasAuthorizationToken()
    {
        return $this->container['has_authorization_token'];
    }

    /**
     * Sets has_authorization_token
     *
     * @param bool $has_authorization_token Whether the authorization_token is set for the hub.
     *
     * @return $this
     */
    public function setHasAuthorizationToken($has_authorization_token)
    {
        $this->container['has_authorization_token'] = $has_authorization_token;

        return $this;
    }

    /**
     * Gets legal_agreement_signed
     *
     * @return bool
     */
    public function getLegalAgreementSigned()
    {
        return $this->container['legal_agreement_signed'];
    }

    /**
     * Sets legal_agreement_signed
     *
     * @param bool $legal_agreement_signed Whether the legal agreement message has been signed by the user. This only matters if legal_agreement_required is true.
     *
     * @return $this
     */
    public function setLegalAgreementSigned($legal_agreement_signed)
    {
        $this->container['legal_agreement_signed'] = $legal_agreement_signed;

        return $this;
    }

    /**
     * Gets legal_agreement_required
     *
     * @return bool
     */
    public function getLegalAgreementRequired()
    {
        return $this->container['legal_agreement_required'];
    }

    /**
     * Sets legal_agreement_required
     *
     * @param bool $legal_agreement_required Whether the legal terms for the integration hub are required before use.
     *
     * @return $this
     */
    public function setLegalAgreementRequired($legal_agreement_required)
    {
        $this->container['legal_agreement_required'] = $legal_agreement_required;

        return $this;
    }

    /**
     * Gets legal_agreement_text
     *
     * @return string
     */
    public function getLegalAgreementText()
    {
        return $this->container['legal_agreement_text'];
    }

    /**
     * Sets legal_agreement_text
     *
     * @param string $legal_agreement_text The legal agreement text for this integration hub.
     *
     * @return $this
     */
    public function setLegalAgreementText($legal_agreement_text)
    {
        $this->container['legal_agreement_text'] = $legal_agreement_text;

        return $this;
    }

    /**
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


