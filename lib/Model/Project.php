<?php
/**
 * Project
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Project Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'uses_git' => 'bool',
        'git_remote_url' => 'string',
        'git_service_name' => 'string',
        'pull_request_mode' => 'string',
        'validation_required' => 'bool',
        'is_example' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'uses_git' => null,
        'git_remote_url' => 'uri',
        'git_service_name' => null,
        'pull_request_mode' => null,
        'validation_required' => null,
        'is_example' => null,
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
        'uses_git' => 'uses_git',
        'git_remote_url' => 'git_remote_url',
        'git_service_name' => 'git_service_name',
        'pull_request_mode' => 'pull_request_mode',
        'validation_required' => 'validation_required',
        'is_example' => 'is_example',
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
        'uses_git' => 'setUsesGit',
        'git_remote_url' => 'setGitRemoteUrl',
        'git_service_name' => 'setGitServiceName',
        'pull_request_mode' => 'setPullRequestMode',
        'validation_required' => 'setValidationRequired',
        'is_example' => 'setIsExample',
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
        'uses_git' => 'getUsesGit',
        'git_remote_url' => 'getGitRemoteUrl',
        'git_service_name' => 'getGitServiceName',
        'pull_request_mode' => 'getPullRequestMode',
        'validation_required' => 'getValidationRequired',
        'is_example' => 'getIsExample',
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
        $this->container['uses_git'] = isset($data['uses_git']) ? $data['uses_git'] : null;
        $this->container['git_remote_url'] = isset($data['git_remote_url']) ? $data['git_remote_url'] : null;
        $this->container['git_service_name'] = isset($data['git_service_name']) ? $data['git_service_name'] : null;
        $this->container['pull_request_mode'] = isset($data['pull_request_mode']) ? $data['pull_request_mode'] : null;
        $this->container['validation_required'] = isset($data['validation_required']) ? $data['validation_required'] : null;
        $this->container['is_example'] = isset($data['is_example']) ? $data['is_example'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Project Id
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
     * @param string $name Project display name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uses_git
     *
     * @return bool
     */
    public function getUsesGit()
    {
        return $this->container['uses_git'];
    }

    /**
     * Sets uses_git
     *
     * @param bool $uses_git If true the project is configured with a git repository
     *
     * @return $this
     */
    public function setUsesGit($uses_git)
    {
        $this->container['uses_git'] = $uses_git;

        return $this;
    }

    /**
     * Gets git_remote_url
     *
     * @return string
     */
    public function getGitRemoteUrl()
    {
        return $this->container['git_remote_url'];
    }

    /**
     * Sets git_remote_url
     *
     * @param string $git_remote_url Git remote repository url
     *
     * @return $this
     */
    public function setGitRemoteUrl($git_remote_url)
    {
        $this->container['git_remote_url'] = $git_remote_url;

        return $this;
    }

    /**
     * Gets git_service_name
     *
     * @return string
     */
    public function getGitServiceName()
    {
        return $this->container['git_service_name'];
    }

    /**
     * Sets git_service_name
     *
     * @param string $git_service_name Name of the git service provider
     *
     * @return $this
     */
    public function setGitServiceName($git_service_name)
    {
        $this->container['git_service_name'] = $git_service_name;

        return $this;
    }

    /**
     * Gets pull_request_mode
     *
     * @return string
     */
    public function getPullRequestMode()
    {
        return $this->container['pull_request_mode'];
    }

    /**
     * Sets pull_request_mode
     *
     * @param string $pull_request_mode The git pull request policy for this project. Valid values are: \"off\", \"links\", \"recommended\", \"required\".
     *
     * @return $this
     */
    public function setPullRequestMode($pull_request_mode)
    {
        $this->container['pull_request_mode'] = $pull_request_mode;

        return $this;
    }

    /**
     * Gets validation_required
     *
     * @return bool
     */
    public function getValidationRequired()
    {
        return $this->container['validation_required'];
    }

    /**
     * Sets validation_required
     *
     * @param bool $validation_required Validation policy: If true, the project must pass all validation checks before project changes can be committed to the git repository
     *
     * @return $this
     */
    public function setValidationRequired($validation_required)
    {
        $this->container['validation_required'] = $validation_required;

        return $this;
    }

    /**
     * Gets is_example
     *
     * @return bool
     */
    public function getIsExample()
    {
        return $this->container['is_example'];
    }

    /**
     * Sets is_example
     *
     * @param bool $is_example If true the project is an example project and cannot be modified
     *
     * @return $this
     */
    public function setIsExample($is_example)
    {
        $this->container['is_example'] = $is_example;

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


