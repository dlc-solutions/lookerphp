<?php
/**
 * RunningQueries
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
 * RunningQueries Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RunningQueries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RunningQueries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'user' => '\Swagger\Client\Model\UserPublic',
        'query' => '\Swagger\Client\Model\Query',
        'sql_query' => '\Swagger\Client\Model\SqlQuery',
        'look' => '\Swagger\Client\Model\LookBasic',
        'created_at' => 'string',
        'completed_at' => 'string',
        'query_id' => 'string',
        'source' => 'string',
        'node_id' => 'string',
        'slug' => 'string',
        'query_task_id' => 'string',
        'cache_key' => 'string',
        'connection_name' => 'string',
        'dialect' => 'string',
        'connection_id' => 'string',
        'message' => 'string',
        'status' => 'string',
        'runtime' => 'double',
        'sql' => 'string',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'user' => null,
        'query' => null,
        'sql_query' => null,
        'look' => null,
        'created_at' => null,
        'completed_at' => null,
        'query_id' => null,
        'source' => null,
        'node_id' => null,
        'slug' => null,
        'query_task_id' => null,
        'cache_key' => null,
        'connection_name' => null,
        'dialect' => null,
        'connection_id' => null,
        'message' => null,
        'status' => null,
        'runtime' => 'double',
        'sql' => null,
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
        'user' => 'user',
        'query' => 'query',
        'sql_query' => 'sql_query',
        'look' => 'look',
        'created_at' => 'created_at',
        'completed_at' => 'completed_at',
        'query_id' => 'query_id',
        'source' => 'source',
        'node_id' => 'node_id',
        'slug' => 'slug',
        'query_task_id' => 'query_task_id',
        'cache_key' => 'cache_key',
        'connection_name' => 'connection_name',
        'dialect' => 'dialect',
        'connection_id' => 'connection_id',
        'message' => 'message',
        'status' => 'status',
        'runtime' => 'runtime',
        'sql' => 'sql',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user' => 'setUser',
        'query' => 'setQuery',
        'sql_query' => 'setSqlQuery',
        'look' => 'setLook',
        'created_at' => 'setCreatedAt',
        'completed_at' => 'setCompletedAt',
        'query_id' => 'setQueryId',
        'source' => 'setSource',
        'node_id' => 'setNodeId',
        'slug' => 'setSlug',
        'query_task_id' => 'setQueryTaskId',
        'cache_key' => 'setCacheKey',
        'connection_name' => 'setConnectionName',
        'dialect' => 'setDialect',
        'connection_id' => 'setConnectionId',
        'message' => 'setMessage',
        'status' => 'setStatus',
        'runtime' => 'setRuntime',
        'sql' => 'setSql',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user' => 'getUser',
        'query' => 'getQuery',
        'sql_query' => 'getSqlQuery',
        'look' => 'getLook',
        'created_at' => 'getCreatedAt',
        'completed_at' => 'getCompletedAt',
        'query_id' => 'getQueryId',
        'source' => 'getSource',
        'node_id' => 'getNodeId',
        'slug' => 'getSlug',
        'query_task_id' => 'getQueryTaskId',
        'cache_key' => 'getCacheKey',
        'connection_name' => 'getConnectionName',
        'dialect' => 'getDialect',
        'connection_id' => 'getConnectionId',
        'message' => 'getMessage',
        'status' => 'getStatus',
        'runtime' => 'getRuntime',
        'sql' => 'getSql',
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['sql_query'] = isset($data['sql_query']) ? $data['sql_query'] : null;
        $this->container['look'] = isset($data['look']) ? $data['look'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['completed_at'] = isset($data['completed_at']) ? $data['completed_at'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['node_id'] = isset($data['node_id']) ? $data['node_id'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['query_task_id'] = isset($data['query_task_id']) ? $data['query_task_id'] : null;
        $this->container['cache_key'] = isset($data['cache_key']) ? $data['cache_key'] : null;
        $this->container['connection_name'] = isset($data['connection_name']) ? $data['connection_name'] : null;
        $this->container['dialect'] = isset($data['dialect']) ? $data['dialect'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
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
     * Gets user
     *
     * @return \Swagger\Client\Model\UserPublic
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\UserPublic $user User who initiated the query
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets query
     *
     * @return \Swagger\Client\Model\Query
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Swagger\Client\Model\Query $query Query that was run
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets sql_query
     *
     * @return \Swagger\Client\Model\SqlQuery
     */
    public function getSqlQuery()
    {
        return $this->container['sql_query'];
    }

    /**
     * Sets sql_query
     *
     * @param \Swagger\Client\Model\SqlQuery $sql_query SQL Query that was run
     *
     * @return $this
     */
    public function setSqlQuery($sql_query)
    {
        $this->container['sql_query'] = $sql_query;

        return $this;
    }

    /**
     * Gets look
     *
     * @return \Swagger\Client\Model\LookBasic
     */
    public function getLook()
    {
        return $this->container['look'];
    }

    /**
     * Sets look
     *
     * @param \Swagger\Client\Model\LookBasic $look Look of query that was run
     *
     * @return $this
     */
    public function setLook($look)
    {
        $this->container['look'] = $look;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Date/Time Query was initiated
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return string
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param string $completed_at Date/Time Query was completed
     *
     * @return $this
     */
    public function setCompletedAt($completed_at)
    {
        $this->container['completed_at'] = $completed_at;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param string $query_id Query Id
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Source (look, dashboard, queryrunner, explore, etc.)
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets node_id
     *
     * @return string
     */
    public function getNodeId()
    {
        return $this->container['node_id'];
    }

    /**
     * Sets node_id
     *
     * @param string $node_id Node Id
     *
     * @return $this
     */
    public function setNodeId($node_id)
    {
        $this->container['node_id'] = $node_id;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug Slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets query_task_id
     *
     * @return string
     */
    public function getQueryTaskId()
    {
        return $this->container['query_task_id'];
    }

    /**
     * Sets query_task_id
     *
     * @param string $query_task_id ID of a Query Task
     *
     * @return $this
     */
    public function setQueryTaskId($query_task_id)
    {
        $this->container['query_task_id'] = $query_task_id;

        return $this;
    }

    /**
     * Gets cache_key
     *
     * @return string
     */
    public function getCacheKey()
    {
        return $this->container['cache_key'];
    }

    /**
     * Sets cache_key
     *
     * @param string $cache_key Cache Key
     *
     * @return $this
     */
    public function setCacheKey($cache_key)
    {
        $this->container['cache_key'] = $cache_key;

        return $this;
    }

    /**
     * Gets connection_name
     *
     * @return string
     */
    public function getConnectionName()
    {
        return $this->container['connection_name'];
    }

    /**
     * Sets connection_name
     *
     * @param string $connection_name Connection
     *
     * @return $this
     */
    public function setConnectionName($connection_name)
    {
        $this->container['connection_name'] = $connection_name;

        return $this;
    }

    /**
     * Gets dialect
     *
     * @return string
     */
    public function getDialect()
    {
        return $this->container['dialect'];
    }

    /**
     * Sets dialect
     *
     * @param string $dialect Dialect
     *
     * @return $this
     */
    public function setDialect($dialect)
    {
        $this->container['dialect'] = $dialect;

        return $this;
    }

    /**
     * Gets connection_id
     *
     * @return string
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     * @param string $connection_id Connection ID
     *
     * @return $this
     */
    public function setConnectionId($connection_id)
    {
        $this->container['connection_id'] = $connection_id;

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
     * @param string $message Additional Information(Error message or verbose status)
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status description
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return double
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param double $runtime Number of seconds elapsed running the Query
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets sql
     *
     * @return string
     */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
     * Sets sql
     *
     * @param string $sql SQL text of the query as run
     *
     * @return $this
     */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;

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


