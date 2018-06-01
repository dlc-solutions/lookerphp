<?php
/**
 * DashboardElement
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
 * DashboardElement Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DashboardElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'dashboard_id' => 'string',
        'look_id' => 'string',
        'query_id' => 'int',
        'type' => 'string',
        'listen' => 'map[string,string]',
        'refresh_interval' => 'string',
        'refresh_interval_to_i' => 'int',
        'note_text' => 'string',
        'note_text_as_html' => 'string',
        'note_display' => 'string',
        'note_state' => 'string',
        'title_hidden' => 'bool',
        'title_text' => 'string',
        'title' => 'string',
        'subtitle_text' => 'string',
        'body_text' => 'string',
        'body_text_as_html' => 'string',
        'look' => '\Swagger\Client\Model\LookWithQuery',
        'query' => '\Swagger\Client\Model\Query',
        'edit_uri' => 'string',
        'merge_result_id' => 'string',
        'result_maker_id' => 'int',
        'result_maker' => '\Swagger\Client\Model\ResultMakerWithIdVisConfigAndDynamicFields',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'dashboard_id' => null,
        'look_id' => null,
        'query_id' => 'int64',
        'type' => null,
        'listen' => null,
        'refresh_interval' => null,
        'refresh_interval_to_i' => 'int64',
        'note_text' => null,
        'note_text_as_html' => null,
        'note_display' => null,
        'note_state' => null,
        'title_hidden' => null,
        'title_text' => null,
        'title' => null,
        'subtitle_text' => null,
        'body_text' => null,
        'body_text_as_html' => null,
        'look' => null,
        'query' => null,
        'edit_uri' => 'uri',
        'merge_result_id' => null,
        'result_maker_id' => 'int64',
        'result_maker' => null,
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
        'dashboard_id' => 'dashboard_id',
        'look_id' => 'look_id',
        'query_id' => 'query_id',
        'type' => 'type',
        'listen' => 'listen',
        'refresh_interval' => 'refresh_interval',
        'refresh_interval_to_i' => 'refresh_interval_to_i',
        'note_text' => 'note_text',
        'note_text_as_html' => 'note_text_as_html',
        'note_display' => 'note_display',
        'note_state' => 'note_state',
        'title_hidden' => 'title_hidden',
        'title_text' => 'title_text',
        'title' => 'title',
        'subtitle_text' => 'subtitle_text',
        'body_text' => 'body_text',
        'body_text_as_html' => 'body_text_as_html',
        'look' => 'look',
        'query' => 'query',
        'edit_uri' => 'edit_uri',
        'merge_result_id' => 'merge_result_id',
        'result_maker_id' => 'result_maker_id',
        'result_maker' => 'result_maker',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'dashboard_id' => 'setDashboardId',
        'look_id' => 'setLookId',
        'query_id' => 'setQueryId',
        'type' => 'setType',
        'listen' => 'setListen',
        'refresh_interval' => 'setRefreshInterval',
        'refresh_interval_to_i' => 'setRefreshIntervalToI',
        'note_text' => 'setNoteText',
        'note_text_as_html' => 'setNoteTextAsHtml',
        'note_display' => 'setNoteDisplay',
        'note_state' => 'setNoteState',
        'title_hidden' => 'setTitleHidden',
        'title_text' => 'setTitleText',
        'title' => 'setTitle',
        'subtitle_text' => 'setSubtitleText',
        'body_text' => 'setBodyText',
        'body_text_as_html' => 'setBodyTextAsHtml',
        'look' => 'setLook',
        'query' => 'setQuery',
        'edit_uri' => 'setEditUri',
        'merge_result_id' => 'setMergeResultId',
        'result_maker_id' => 'setResultMakerId',
        'result_maker' => 'setResultMaker',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'dashboard_id' => 'getDashboardId',
        'look_id' => 'getLookId',
        'query_id' => 'getQueryId',
        'type' => 'getType',
        'listen' => 'getListen',
        'refresh_interval' => 'getRefreshInterval',
        'refresh_interval_to_i' => 'getRefreshIntervalToI',
        'note_text' => 'getNoteText',
        'note_text_as_html' => 'getNoteTextAsHtml',
        'note_display' => 'getNoteDisplay',
        'note_state' => 'getNoteState',
        'title_hidden' => 'getTitleHidden',
        'title_text' => 'getTitleText',
        'title' => 'getTitle',
        'subtitle_text' => 'getSubtitleText',
        'body_text' => 'getBodyText',
        'body_text_as_html' => 'getBodyTextAsHtml',
        'look' => 'getLook',
        'query' => 'getQuery',
        'edit_uri' => 'getEditUri',
        'merge_result_id' => 'getMergeResultId',
        'result_maker_id' => 'getResultMakerId',
        'result_maker' => 'getResultMaker',
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
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['listen'] = isset($data['listen']) ? $data['listen'] : null;
        $this->container['refresh_interval'] = isset($data['refresh_interval']) ? $data['refresh_interval'] : null;
        $this->container['refresh_interval_to_i'] = isset($data['refresh_interval_to_i']) ? $data['refresh_interval_to_i'] : null;
        $this->container['note_text'] = isset($data['note_text']) ? $data['note_text'] : null;
        $this->container['note_text_as_html'] = isset($data['note_text_as_html']) ? $data['note_text_as_html'] : null;
        $this->container['note_display'] = isset($data['note_display']) ? $data['note_display'] : null;
        $this->container['note_state'] = isset($data['note_state']) ? $data['note_state'] : null;
        $this->container['title_hidden'] = isset($data['title_hidden']) ? $data['title_hidden'] : null;
        $this->container['title_text'] = isset($data['title_text']) ? $data['title_text'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subtitle_text'] = isset($data['subtitle_text']) ? $data['subtitle_text'] : null;
        $this->container['body_text'] = isset($data['body_text']) ? $data['body_text'] : null;
        $this->container['body_text_as_html'] = isset($data['body_text_as_html']) ? $data['body_text_as_html'] : null;
        $this->container['look'] = isset($data['look']) ? $data['look'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['edit_uri'] = isset($data['edit_uri']) ? $data['edit_uri'] : null;
        $this->container['merge_result_id'] = isset($data['merge_result_id']) ? $data['merge_result_id'] : null;
        $this->container['result_maker_id'] = isset($data['result_maker_id']) ? $data['result_maker_id'] : null;
        $this->container['result_maker'] = isset($data['result_maker']) ? $data['result_maker'] : null;
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
     * @param string $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dashboard_id
     *
     * @return string
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param string $dashboard_id Id of Dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets look_id
     *
     * @return string
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param string $look_id Id Of Look
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets query_id
     *
     * @return int
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param int $query_id Id Of Query
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets listen
     *
     * @return map[string,string]
     */
    public function getListen()
    {
        return $this->container['listen'];
    }

    /**
     * Sets listen
     *
     * @param map[string,string] $listen Listen
     *
     * @return $this
     */
    public function setListen($listen)
    {
        $this->container['listen'] = $listen;

        return $this;
    }

    /**
     * Gets refresh_interval
     *
     * @return string
     */
    public function getRefreshInterval()
    {
        return $this->container['refresh_interval'];
    }

    /**
     * Sets refresh_interval
     *
     * @param string $refresh_interval Refresh Interval
     *
     * @return $this
     */
    public function setRefreshInterval($refresh_interval)
    {
        $this->container['refresh_interval'] = $refresh_interval;

        return $this;
    }

    /**
     * Gets refresh_interval_to_i
     *
     * @return int
     */
    public function getRefreshIntervalToI()
    {
        return $this->container['refresh_interval_to_i'];
    }

    /**
     * Sets refresh_interval_to_i
     *
     * @param int $refresh_interval_to_i Refresh Interval as integer
     *
     * @return $this
     */
    public function setRefreshIntervalToI($refresh_interval_to_i)
    {
        $this->container['refresh_interval_to_i'] = $refresh_interval_to_i;

        return $this;
    }

    /**
     * Gets note_text
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->container['note_text'];
    }

    /**
     * Sets note_text
     *
     * @param string $note_text Note Text
     *
     * @return $this
     */
    public function setNoteText($note_text)
    {
        $this->container['note_text'] = $note_text;

        return $this;
    }

    /**
     * Gets note_text_as_html
     *
     * @return string
     */
    public function getNoteTextAsHtml()
    {
        return $this->container['note_text_as_html'];
    }

    /**
     * Sets note_text_as_html
     *
     * @param string $note_text_as_html Note Text as Html
     *
     * @return $this
     */
    public function setNoteTextAsHtml($note_text_as_html)
    {
        $this->container['note_text_as_html'] = $note_text_as_html;

        return $this;
    }

    /**
     * Gets note_display
     *
     * @return string
     */
    public function getNoteDisplay()
    {
        return $this->container['note_display'];
    }

    /**
     * Sets note_display
     *
     * @param string $note_display Note Display
     *
     * @return $this
     */
    public function setNoteDisplay($note_display)
    {
        $this->container['note_display'] = $note_display;

        return $this;
    }

    /**
     * Gets note_state
     *
     * @return string
     */
    public function getNoteState()
    {
        return $this->container['note_state'];
    }

    /**
     * Sets note_state
     *
     * @param string $note_state Note State
     *
     * @return $this
     */
    public function setNoteState($note_state)
    {
        $this->container['note_state'] = $note_state;

        return $this;
    }

    /**
     * Gets title_hidden
     *
     * @return bool
     */
    public function getTitleHidden()
    {
        return $this->container['title_hidden'];
    }

    /**
     * Sets title_hidden
     *
     * @param bool $title_hidden Whether title is hidden
     *
     * @return $this
     */
    public function setTitleHidden($title_hidden)
    {
        $this->container['title_hidden'] = $title_hidden;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param string $title_text Text tile title
     *
     * @return $this
     */
    public function setTitleText($title_text)
    {
        $this->container['title_text'] = $title_text;

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
     * @param string $title Title of dashboard element
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle_text
     *
     * @return string
     */
    public function getSubtitleText()
    {
        return $this->container['subtitle_text'];
    }

    /**
     * Sets subtitle_text
     *
     * @param string $subtitle_text Text tile subtitle text
     *
     * @return $this
     */
    public function setSubtitleText($subtitle_text)
    {
        $this->container['subtitle_text'] = $subtitle_text;

        return $this;
    }

    /**
     * Gets body_text
     *
     * @return string
     */
    public function getBodyText()
    {
        return $this->container['body_text'];
    }

    /**
     * Sets body_text
     *
     * @param string $body_text Text tile body text
     *
     * @return $this
     */
    public function setBodyText($body_text)
    {
        $this->container['body_text'] = $body_text;

        return $this;
    }

    /**
     * Gets body_text_as_html
     *
     * @return string
     */
    public function getBodyTextAsHtml()
    {
        return $this->container['body_text_as_html'];
    }

    /**
     * Sets body_text_as_html
     *
     * @param string $body_text_as_html Text tile body text as Html
     *
     * @return $this
     */
    public function setBodyTextAsHtml($body_text_as_html)
    {
        $this->container['body_text_as_html'] = $body_text_as_html;

        return $this;
    }

    /**
     * Gets look
     *
     * @return \Swagger\Client\Model\LookWithQuery
     */
    public function getLook()
    {
        return $this->container['look'];
    }

    /**
     * Sets look
     *
     * @param \Swagger\Client\Model\LookWithQuery $look Look
     *
     * @return $this
     */
    public function setLook($look)
    {
        $this->container['look'] = $look;

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
     * @param \Swagger\Client\Model\Query $query Query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets edit_uri
     *
     * @return string
     */
    public function getEditUri()
    {
        return $this->container['edit_uri'];
    }

    /**
     * Sets edit_uri
     *
     * @param string $edit_uri Relative path of URI of LookML file to edit the dashboard element (LookML dashboard only).
     *
     * @return $this
     */
    public function setEditUri($edit_uri)
    {
        $this->container['edit_uri'] = $edit_uri;

        return $this;
    }

    /**
     * Gets merge_result_id
     *
     * @return string
     */
    public function getMergeResultId()
    {
        return $this->container['merge_result_id'];
    }

    /**
     * Sets merge_result_id
     *
     * @param string $merge_result_id ID of merge result
     *
     * @return $this
     */
    public function setMergeResultId($merge_result_id)
    {
        $this->container['merge_result_id'] = $merge_result_id;

        return $this;
    }

    /**
     * Gets result_maker_id
     *
     * @return int
     */
    public function getResultMakerId()
    {
        return $this->container['result_maker_id'];
    }

    /**
     * Sets result_maker_id
     *
     * @param int $result_maker_id ID of the ResultMakerLookup entry.
     *
     * @return $this
     */
    public function setResultMakerId($result_maker_id)
    {
        $this->container['result_maker_id'] = $result_maker_id;

        return $this;
    }

    /**
     * Gets result_maker
     *
     * @return \Swagger\Client\Model\ResultMakerWithIdVisConfigAndDynamicFields
     */
    public function getResultMaker()
    {
        return $this->container['result_maker'];
    }

    /**
     * Sets result_maker
     *
     * @param \Swagger\Client\Model\ResultMakerWithIdVisConfigAndDynamicFields $result_maker Data about the result maker.
     *
     * @return $this
     */
    public function setResultMaker($result_maker)
    {
        $this->container['result_maker'] = $result_maker;

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


