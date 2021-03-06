<?php
/**
 * ProjectError
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
 * ProjectError Class Doc Comment
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'severity' => 'string',
        'kind' => 'string',
        'message' => 'string',
        'field_name' => 'string',
        'file_path' => 'string',
        'line_number' => 'int',
        'model_id' => 'string',
        'explore' => 'string',
        'help_url' => 'string',
        'params' => 'map[string,string]',
        'sanitized_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'severity' => null,
        'kind' => null,
        'message' => null,
        'field_name' => null,
        'file_path' => null,
        'line_number' => 'int64',
        'model_id' => null,
        'explore' => null,
        'help_url' => null,
        'params' => null,
        'sanitized_message' => null
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
        'code' => 'code',
        'severity' => 'severity',
        'kind' => 'kind',
        'message' => 'message',
        'field_name' => 'field_name',
        'file_path' => 'file_path',
        'line_number' => 'line_number',
        'model_id' => 'model_id',
        'explore' => 'explore',
        'help_url' => 'help_url',
        'params' => 'params',
        'sanitized_message' => 'sanitized_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'severity' => 'setSeverity',
        'kind' => 'setKind',
        'message' => 'setMessage',
        'field_name' => 'setFieldName',
        'file_path' => 'setFilePath',
        'line_number' => 'setLineNumber',
        'model_id' => 'setModelId',
        'explore' => 'setExplore',
        'help_url' => 'setHelpUrl',
        'params' => 'setParams',
        'sanitized_message' => 'setSanitizedMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'severity' => 'getSeverity',
        'kind' => 'getKind',
        'message' => 'getMessage',
        'field_name' => 'getFieldName',
        'file_path' => 'getFilePath',
        'line_number' => 'getLineNumber',
        'model_id' => 'getModelId',
        'explore' => 'getExplore',
        'help_url' => 'getHelpUrl',
        'params' => 'getParams',
        'sanitized_message' => 'getSanitizedMessage'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['file_path'] = isset($data['file_path']) ? $data['file_path'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['model_id'] = isset($data['model_id']) ? $data['model_id'] : null;
        $this->container['explore'] = isset($data['explore']) ? $data['explore'] : null;
        $this->container['help_url'] = isset($data['help_url']) ? $data['help_url'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['sanitized_message'] = isset($data['sanitized_message']) ? $data['sanitized_message'] : null;
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code A stable token that uniquely identifies this class of error, ignoring parameter values. Error message text may vary due to parameters or localization, but error codes do not. For example, a \"File not found\" error will have the same error code regardless of the filename in question or the user's display language
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string $severity Severity: fatal, error, warning, info, success
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind Error classification: syntax, deprecation, model_configuration, etc
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Error message which may contain information such as dashboard or model names that may be considered sensitive in some use cases. Avoid storing or sending this message outside of Looker
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name The field associated with this error
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets file_path
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->container['file_path'];
    }

    /**
     * Sets file_path
     *
     * @param string $file_path Name of the file containing this error
     *
     * @return $this
     */
    public function setFilePath($file_path)
    {
        $this->container['file_path'] = $file_path;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number Line number in the file of this error
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets model_id
     *
     * @return string
     */
    public function getModelId()
    {
        return $this->container['model_id'];
    }

    /**
     * Sets model_id
     *
     * @param string $model_id The model associated with this error
     *
     * @return $this
     */
    public function setModelId($model_id)
    {
        $this->container['model_id'] = $model_id;

        return $this;
    }

    /**
     * Gets explore
     *
     * @return string
     */
    public function getExplore()
    {
        return $this->container['explore'];
    }

    /**
     * Sets explore
     *
     * @param string $explore The explore associated with this error
     *
     * @return $this
     */
    public function setExplore($explore)
    {
        $this->container['explore'] = $explore;

        return $this;
    }

    /**
     * Gets help_url
     *
     * @return string
     */
    public function getHelpUrl()
    {
        return $this->container['help_url'];
    }

    /**
     * Sets help_url
     *
     * @param string $help_url A link to Looker documentation about this error
     *
     * @return $this
     */
    public function setHelpUrl($help_url)
    {
        $this->container['help_url'] = $help_url;

        return $this;
    }

    /**
     * Gets params
     *
     * @return map[string,string]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param map[string,string] $params Error parameters
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets sanitized_message
     *
     * @return string
     */
    public function getSanitizedMessage()
    {
        return $this->container['sanitized_message'];
    }

    /**
     * Sets sanitized_message
     *
     * @param string $sanitized_message A version of the error message that does not contain potentially sensitive information. Suitable for situations in which messages are stored or sent to consumers outside of Looker, such as external logs. Sanitized messages will display \"(?)\" where sensitive information would appear in the corresponding non-sanitized message
     *
     * @return $this
     */
    public function setSanitizedMessage($sanitized_message)
    {
        $this->container['sanitized_message'] = $sanitized_message;

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


