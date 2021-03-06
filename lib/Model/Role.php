<?php
/**
 * Role
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
 * Role Class Doc Comment
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Role implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Role';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'permission_set' => '\Looker\Model\PermissionSet',
        'permission_set_id' => 'int',
        'model_set' => '\Looker\Model\ModelSet',
        'model_set_id' => 'int',
        'url' => 'string',
        'users_url' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'permission_set' => null,
        'permission_set_id' => 'int64',
        'model_set' => null,
        'model_set_id' => 'int64',
        'url' => 'uri',
        'users_url' => 'uri',
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
        'name' => 'name',
        'permission_set' => 'permission_set',
        'permission_set_id' => 'permission_set_id',
        'model_set' => 'model_set',
        'model_set_id' => 'model_set_id',
        'url' => 'url',
        'users_url' => 'users_url',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'permission_set' => 'setPermissionSet',
        'permission_set_id' => 'setPermissionSetId',
        'model_set' => 'setModelSet',
        'model_set_id' => 'setModelSetId',
        'url' => 'setUrl',
        'users_url' => 'setUsersUrl',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'permission_set' => 'getPermissionSet',
        'permission_set_id' => 'getPermissionSetId',
        'model_set' => 'getModelSet',
        'model_set_id' => 'getModelSetId',
        'url' => 'getUrl',
        'users_url' => 'getUsersUrl',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['permission_set'] = isset($data['permission_set']) ? $data['permission_set'] : null;
        $this->container['permission_set_id'] = isset($data['permission_set_id']) ? $data['permission_set_id'] : null;
        $this->container['model_set'] = isset($data['model_set']) ? $data['model_set'] : null;
        $this->container['model_set_id'] = isset($data['model_set_id']) ? $data['model_set_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['users_url'] = isset($data['users_url']) ? $data['users_url'] : null;
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
     * @param int $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of Role
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets permission_set
     *
     * @return \Looker\Model\PermissionSet
     */
    public function getPermissionSet()
    {
        return $this->container['permission_set'];
    }

    /**
     * Sets permission_set
     *
     * @param \Looker\Model\PermissionSet $permission_set (Read only) Permission set
     *
     * @return $this
     */
    public function setPermissionSet($permission_set)
    {
        $this->container['permission_set'] = $permission_set;

        return $this;
    }

    /**
     * Gets permission_set_id
     *
     * @return int
     */
    public function getPermissionSetId()
    {
        return $this->container['permission_set_id'];
    }

    /**
     * Sets permission_set_id
     *
     * @param int $permission_set_id (Write-Only) Id of permission set
     *
     * @return $this
     */
    public function setPermissionSetId($permission_set_id)
    {
        $this->container['permission_set_id'] = $permission_set_id;

        return $this;
    }

    /**
     * Gets model_set
     *
     * @return \Looker\Model\ModelSet
     */
    public function getModelSet()
    {
        return $this->container['model_set'];
    }

    /**
     * Sets model_set
     *
     * @param \Looker\Model\ModelSet $model_set (Read only) Model set
     *
     * @return $this
     */
    public function setModelSet($model_set)
    {
        $this->container['model_set'] = $model_set;

        return $this;
    }

    /**
     * Gets model_set_id
     *
     * @return int
     */
    public function getModelSetId()
    {
        return $this->container['model_set_id'];
    }

    /**
     * Sets model_set_id
     *
     * @param int $model_set_id (Write-Only) Id of model set
     *
     * @return $this
     */
    public function setModelSetId($model_set_id)
    {
        $this->container['model_set_id'] = $model_set_id;

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
     * @param string $url Link to get this item
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets users_url
     *
     * @return string
     */
    public function getUsersUrl()
    {
        return $this->container['users_url'];
    }

    /**
     * Sets users_url
     *
     * @param string $users_url Link to get list of users with this role
     *
     * @return $this
     */
    public function setUsersUrl($users_url)
    {
        $this->container['users_url'] = $users_url;

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


