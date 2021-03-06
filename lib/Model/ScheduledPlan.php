<?php
/**
 * ScheduledPlan
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
 * ScheduledPlan Class Doc Comment
 *
 * @category Class
 * @package  Looker
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduledPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'title' => 'string',
        'user_id' => 'int',
        'user' => '\Looker\Model\UserPublic',
        'run_as_recipient' => 'bool',
        'enabled' => 'bool',
        'next_run_at' => '\DateTime',
        'last_run_at' => '\DateTime',
        'look_id' => 'int',
        'dashboard_id' => 'int',
        'lookml_dashboard_id' => 'string',
        'filters_string' => 'string',
        'dashboard_filters' => 'string',
        'require_results' => 'bool',
        'require_no_results' => 'bool',
        'require_change' => 'bool',
        'send_all_results' => 'bool',
        'crontab' => 'string',
        'datagroup' => 'string',
        'timezone' => 'string',
        'query_id' => 'string',
        'scheduled_plan_destination' => '\Looker\Model\ScheduledPlanDestination[]',
        'run_once' => 'bool',
        'include_links' => 'bool',
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
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'title' => null,
        'user_id' => 'int64',
        'user' => null,
        'run_as_recipient' => null,
        'enabled' => null,
        'next_run_at' => 'date-time',
        'last_run_at' => 'date-time',
        'look_id' => 'int64',
        'dashboard_id' => 'int64',
        'lookml_dashboard_id' => null,
        'filters_string' => null,
        'dashboard_filters' => null,
        'require_results' => null,
        'require_no_results' => null,
        'require_change' => null,
        'send_all_results' => null,
        'crontab' => null,
        'datagroup' => null,
        'timezone' => null,
        'query_id' => null,
        'scheduled_plan_destination' => null,
        'run_once' => null,
        'include_links' => null,
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
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'title' => 'title',
        'user_id' => 'user_id',
        'user' => 'user',
        'run_as_recipient' => 'run_as_recipient',
        'enabled' => 'enabled',
        'next_run_at' => 'next_run_at',
        'last_run_at' => 'last_run_at',
        'look_id' => 'look_id',
        'dashboard_id' => 'dashboard_id',
        'lookml_dashboard_id' => 'lookml_dashboard_id',
        'filters_string' => 'filters_string',
        'dashboard_filters' => 'dashboard_filters',
        'require_results' => 'require_results',
        'require_no_results' => 'require_no_results',
        'require_change' => 'require_change',
        'send_all_results' => 'send_all_results',
        'crontab' => 'crontab',
        'datagroup' => 'datagroup',
        'timezone' => 'timezone',
        'query_id' => 'query_id',
        'scheduled_plan_destination' => 'scheduled_plan_destination',
        'run_once' => 'run_once',
        'include_links' => 'include_links',
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
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'title' => 'setTitle',
        'user_id' => 'setUserId',
        'user' => 'setUser',
        'run_as_recipient' => 'setRunAsRecipient',
        'enabled' => 'setEnabled',
        'next_run_at' => 'setNextRunAt',
        'last_run_at' => 'setLastRunAt',
        'look_id' => 'setLookId',
        'dashboard_id' => 'setDashboardId',
        'lookml_dashboard_id' => 'setLookmlDashboardId',
        'filters_string' => 'setFiltersString',
        'dashboard_filters' => 'setDashboardFilters',
        'require_results' => 'setRequireResults',
        'require_no_results' => 'setRequireNoResults',
        'require_change' => 'setRequireChange',
        'send_all_results' => 'setSendAllResults',
        'crontab' => 'setCrontab',
        'datagroup' => 'setDatagroup',
        'timezone' => 'setTimezone',
        'query_id' => 'setQueryId',
        'scheduled_plan_destination' => 'setScheduledPlanDestination',
        'run_once' => 'setRunOnce',
        'include_links' => 'setIncludeLinks',
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
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'title' => 'getTitle',
        'user_id' => 'getUserId',
        'user' => 'getUser',
        'run_as_recipient' => 'getRunAsRecipient',
        'enabled' => 'getEnabled',
        'next_run_at' => 'getNextRunAt',
        'last_run_at' => 'getLastRunAt',
        'look_id' => 'getLookId',
        'dashboard_id' => 'getDashboardId',
        'lookml_dashboard_id' => 'getLookmlDashboardId',
        'filters_string' => 'getFiltersString',
        'dashboard_filters' => 'getDashboardFilters',
        'require_results' => 'getRequireResults',
        'require_no_results' => 'getRequireNoResults',
        'require_change' => 'getRequireChange',
        'send_all_results' => 'getSendAllResults',
        'crontab' => 'getCrontab',
        'datagroup' => 'getDatagroup',
        'timezone' => 'getTimezone',
        'query_id' => 'getQueryId',
        'scheduled_plan_destination' => 'getScheduledPlanDestination',
        'run_once' => 'getRunOnce',
        'include_links' => 'getIncludeLinks',
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['run_as_recipient'] = isset($data['run_as_recipient']) ? $data['run_as_recipient'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['next_run_at'] = isset($data['next_run_at']) ? $data['next_run_at'] : null;
        $this->container['last_run_at'] = isset($data['last_run_at']) ? $data['last_run_at'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['lookml_dashboard_id'] = isset($data['lookml_dashboard_id']) ? $data['lookml_dashboard_id'] : null;
        $this->container['filters_string'] = isset($data['filters_string']) ? $data['filters_string'] : null;
        $this->container['dashboard_filters'] = isset($data['dashboard_filters']) ? $data['dashboard_filters'] : null;
        $this->container['require_results'] = isset($data['require_results']) ? $data['require_results'] : null;
        $this->container['require_no_results'] = isset($data['require_no_results']) ? $data['require_no_results'] : null;
        $this->container['require_change'] = isset($data['require_change']) ? $data['require_change'] : null;
        $this->container['send_all_results'] = isset($data['send_all_results']) ? $data['send_all_results'] : null;
        $this->container['crontab'] = isset($data['crontab']) ? $data['crontab'] : null;
        $this->container['datagroup'] = isset($data['datagroup']) ? $data['datagroup'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['scheduled_plan_destination'] = isset($data['scheduled_plan_destination']) ? $data['scheduled_plan_destination'] : null;
        $this->container['run_once'] = isset($data['run_once']) ? $data['run_once'] : null;
        $this->container['include_links'] = isset($data['include_links']) ? $data['include_links'] : null;
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
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time when ScheduledPlan was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date and time when ScheduledPlan was last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User Id which owns this ScheduledPlan
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Looker\Model\UserPublic
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Looker\Model\UserPublic $user User who owns this ScheduledPlan
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets run_as_recipient
     *
     * @return bool
     */
    public function getRunAsRecipient()
    {
        return $this->container['run_as_recipient'];
    }

    /**
     * Sets run_as_recipient
     *
     * @param bool $run_as_recipient Whether schedule is ran as recipient (only applicable for email recipients)
     *
     * @return $this
     */
    public function setRunAsRecipient($run_as_recipient)
    {
        $this->container['run_as_recipient'] = $run_as_recipient;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Whether the ScheduledPlan is enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets next_run_at
     *
     * @return \DateTime
     */
    public function getNextRunAt()
    {
        return $this->container['next_run_at'];
    }

    /**
     * Sets next_run_at
     *
     * @param \DateTime $next_run_at When the ScheduledPlan will next run (null if running once)
     *
     * @return $this
     */
    public function setNextRunAt($next_run_at)
    {
        $this->container['next_run_at'] = $next_run_at;

        return $this;
    }

    /**
     * Gets last_run_at
     *
     * @return \DateTime
     */
    public function getLastRunAt()
    {
        return $this->container['last_run_at'];
    }

    /**
     * Sets last_run_at
     *
     * @param \DateTime $last_run_at When the ScheduledPlan was last run
     *
     * @return $this
     */
    public function setLastRunAt($last_run_at)
    {
        $this->container['last_run_at'] = $last_run_at;

        return $this;
    }

    /**
     * Gets look_id
     *
     * @return int
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param int $look_id Id of a look
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets dashboard_id
     *
     * @return int
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param int $dashboard_id Id of a dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets lookml_dashboard_id
     *
     * @return string
     */
    public function getLookmlDashboardId()
    {
        return $this->container['lookml_dashboard_id'];
    }

    /**
     * Sets lookml_dashboard_id
     *
     * @param string $lookml_dashboard_id Id of a LookML dashboard
     *
     * @return $this
     */
    public function setLookmlDashboardId($lookml_dashboard_id)
    {
        $this->container['lookml_dashboard_id'] = $lookml_dashboard_id;

        return $this;
    }

    /**
     * Gets filters_string
     *
     * @return string
     */
    public function getFiltersString()
    {
        return $this->container['filters_string'];
    }

    /**
     * Sets filters_string
     *
     * @param string $filters_string Query string to run look or dashboard with
     *
     * @return $this
     */
    public function setFiltersString($filters_string)
    {
        $this->container['filters_string'] = $filters_string;

        return $this;
    }

    /**
     * Gets dashboard_filters
     *
     * @return string
     */
    public function getDashboardFilters()
    {
        return $this->container['dashboard_filters'];
    }

    /**
     * Sets dashboard_filters
     *
     * @param string $dashboard_filters (DEPRECATED) Alias for filters_string field
     *
     * @return $this
     */
    public function setDashboardFilters($dashboard_filters)
    {
        $this->container['dashboard_filters'] = $dashboard_filters;

        return $this;
    }

    /**
     * Gets require_results
     *
     * @return bool
     */
    public function getRequireResults()
    {
        return $this->container['require_results'];
    }

    /**
     * Sets require_results
     *
     * @param bool $require_results Delivery should occur if running the dashboard or look returns results
     *
     * @return $this
     */
    public function setRequireResults($require_results)
    {
        $this->container['require_results'] = $require_results;

        return $this;
    }

    /**
     * Gets require_no_results
     *
     * @return bool
     */
    public function getRequireNoResults()
    {
        return $this->container['require_no_results'];
    }

    /**
     * Sets require_no_results
     *
     * @param bool $require_no_results Delivery should occur if the dashboard look does not return results
     *
     * @return $this
     */
    public function setRequireNoResults($require_no_results)
    {
        $this->container['require_no_results'] = $require_no_results;

        return $this;
    }

    /**
     * Gets require_change
     *
     * @return bool
     */
    public function getRequireChange()
    {
        return $this->container['require_change'];
    }

    /**
     * Sets require_change
     *
     * @param bool $require_change Delivery should occur if data have changed since the last run
     *
     * @return $this
     */
    public function setRequireChange($require_change)
    {
        $this->container['require_change'] = $require_change;

        return $this;
    }

    /**
     * Gets send_all_results
     *
     * @return bool
     */
    public function getSendAllResults()
    {
        return $this->container['send_all_results'];
    }

    /**
     * Sets send_all_results
     *
     * @param bool $send_all_results Will run an unlimited query and send all results.
     *
     * @return $this
     */
    public function setSendAllResults($send_all_results)
    {
        $this->container['send_all_results'] = $send_all_results;

        return $this;
    }

    /**
     * Gets crontab
     *
     * @return string
     */
    public function getCrontab()
    {
        return $this->container['crontab'];
    }

    /**
     * Sets crontab
     *
     * @param string $crontab Vixie-Style crontab specification when to run
     *
     * @return $this
     */
    public function setCrontab($crontab)
    {
        $this->container['crontab'] = $crontab;

        return $this;
    }

    /**
     * Gets datagroup
     *
     * @return string
     */
    public function getDatagroup()
    {
        return $this->container['datagroup'];
    }

    /**
     * Sets datagroup
     *
     * @param string $datagroup Name of a datagroup; if specified will run when datagroup triggered (can't be used with cron string)
     *
     * @return $this
     */
    public function setDatagroup($datagroup)
    {
        $this->container['datagroup'] = $datagroup;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Timezone for interpreting the specified crontab (default is Looker instance timezone)
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * @param string $query_id Query id
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets scheduled_plan_destination
     *
     * @return \Looker\Model\ScheduledPlanDestination[]
     */
    public function getScheduledPlanDestination()
    {
        return $this->container['scheduled_plan_destination'];
    }

    /**
     * Sets scheduled_plan_destination
     *
     * @param \Looker\Model\ScheduledPlanDestination[] $scheduled_plan_destination Scheduled plan destinations
     *
     * @return $this
     */
    public function setScheduledPlanDestination($scheduled_plan_destination)
    {
        $this->container['scheduled_plan_destination'] = $scheduled_plan_destination;

        return $this;
    }

    /**
     * Gets run_once
     *
     * @return bool
     */
    public function getRunOnce()
    {
        return $this->container['run_once'];
    }

    /**
     * Sets run_once
     *
     * @param bool $run_once Whether the plan in question should only be run once (usually for testing)
     *
     * @return $this
     */
    public function setRunOnce($run_once)
    {
        $this->container['run_once'] = $run_once;

        return $this;
    }

    /**
     * Gets include_links
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['include_links'];
    }

    /**
     * Sets include_links
     *
     * @param bool $include_links Whether links back to Looker should be included in this ScheduledPlan
     *
     * @return $this
     */
    public function setIncludeLinks($include_links)
    {
        $this->container['include_links'] = $include_links;

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


