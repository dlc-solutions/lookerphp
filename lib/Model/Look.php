<?php
/**
 * Look
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
 * Look Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Look implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Look';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'content_metadata_id' => 'int',
        'view_count' => 'int',
        'favorite_count' => 'int',
        'last_accessed_at' => '\DateTime',
        'content_favorite_id' => 'int',
        'title' => 'string',
        'user' => '\Swagger\Client\Model\UserIdOnly',
        'query_id' => 'int',
        'description' => 'string',
        'short_url' => 'string',
        'space' => '\Swagger\Client\Model\SpaceBase',
        'public' => 'bool',
        'public_slug' => 'string',
        'user_id' => 'int',
        'space_id' => 'string',
        'model' => '\Swagger\Client\Model\LookModel',
        'public_url' => 'string',
        'embed_url' => 'string',
        'image_embed_url' => 'string',
        'google_spreadsheet_formula' => 'string',
        'excel_file_url' => 'string',
        'created_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'last_updater_id' => 'int',
        'deleter_id' => 'int',
        'deleted' => 'bool',
        'last_viewed_at' => '\DateTime',
        'is_run_on_load' => 'bool',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'content_metadata_id' => 'int64',
        'view_count' => 'int64',
        'favorite_count' => 'int64',
        'last_accessed_at' => 'date-time',
        'content_favorite_id' => 'int64',
        'title' => null,
        'user' => null,
        'query_id' => 'int64',
        'description' => null,
        'short_url' => null,
        'space' => null,
        'public' => null,
        'public_slug' => null,
        'user_id' => 'int64',
        'space_id' => null,
        'model' => null,
        'public_url' => null,
        'embed_url' => null,
        'image_embed_url' => null,
        'google_spreadsheet_formula' => null,
        'excel_file_url' => null,
        'created_at' => 'date-time',
        'deleted_at' => 'date-time',
        'updated_at' => 'date-time',
        'last_updater_id' => 'int64',
        'deleter_id' => 'int64',
        'deleted' => null,
        'last_viewed_at' => 'date-time',
        'is_run_on_load' => null,
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
        'content_metadata_id' => 'content_metadata_id',
        'view_count' => 'view_count',
        'favorite_count' => 'favorite_count',
        'last_accessed_at' => 'last_accessed_at',
        'content_favorite_id' => 'content_favorite_id',
        'title' => 'title',
        'user' => 'user',
        'query_id' => 'query_id',
        'description' => 'description',
        'short_url' => 'short_url',
        'space' => 'space',
        'public' => 'public',
        'public_slug' => 'public_slug',
        'user_id' => 'user_id',
        'space_id' => 'space_id',
        'model' => 'model',
        'public_url' => 'public_url',
        'embed_url' => 'embed_url',
        'image_embed_url' => 'image_embed_url',
        'google_spreadsheet_formula' => 'google_spreadsheet_formula',
        'excel_file_url' => 'excel_file_url',
        'created_at' => 'created_at',
        'deleted_at' => 'deleted_at',
        'updated_at' => 'updated_at',
        'last_updater_id' => 'last_updater_id',
        'deleter_id' => 'deleter_id',
        'deleted' => 'deleted',
        'last_viewed_at' => 'last_viewed_at',
        'is_run_on_load' => 'is_run_on_load',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'content_metadata_id' => 'setContentMetadataId',
        'view_count' => 'setViewCount',
        'favorite_count' => 'setFavoriteCount',
        'last_accessed_at' => 'setLastAccessedAt',
        'content_favorite_id' => 'setContentFavoriteId',
        'title' => 'setTitle',
        'user' => 'setUser',
        'query_id' => 'setQueryId',
        'description' => 'setDescription',
        'short_url' => 'setShortUrl',
        'space' => 'setSpace',
        'public' => 'setPublic',
        'public_slug' => 'setPublicSlug',
        'user_id' => 'setUserId',
        'space_id' => 'setSpaceId',
        'model' => 'setModel',
        'public_url' => 'setPublicUrl',
        'embed_url' => 'setEmbedUrl',
        'image_embed_url' => 'setImageEmbedUrl',
        'google_spreadsheet_formula' => 'setGoogleSpreadsheetFormula',
        'excel_file_url' => 'setExcelFileUrl',
        'created_at' => 'setCreatedAt',
        'deleted_at' => 'setDeletedAt',
        'updated_at' => 'setUpdatedAt',
        'last_updater_id' => 'setLastUpdaterId',
        'deleter_id' => 'setDeleterId',
        'deleted' => 'setDeleted',
        'last_viewed_at' => 'setLastViewedAt',
        'is_run_on_load' => 'setIsRunOnLoad',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'content_metadata_id' => 'getContentMetadataId',
        'view_count' => 'getViewCount',
        'favorite_count' => 'getFavoriteCount',
        'last_accessed_at' => 'getLastAccessedAt',
        'content_favorite_id' => 'getContentFavoriteId',
        'title' => 'getTitle',
        'user' => 'getUser',
        'query_id' => 'getQueryId',
        'description' => 'getDescription',
        'short_url' => 'getShortUrl',
        'space' => 'getSpace',
        'public' => 'getPublic',
        'public_slug' => 'getPublicSlug',
        'user_id' => 'getUserId',
        'space_id' => 'getSpaceId',
        'model' => 'getModel',
        'public_url' => 'getPublicUrl',
        'embed_url' => 'getEmbedUrl',
        'image_embed_url' => 'getImageEmbedUrl',
        'google_spreadsheet_formula' => 'getGoogleSpreadsheetFormula',
        'excel_file_url' => 'getExcelFileUrl',
        'created_at' => 'getCreatedAt',
        'deleted_at' => 'getDeletedAt',
        'updated_at' => 'getUpdatedAt',
        'last_updater_id' => 'getLastUpdaterId',
        'deleter_id' => 'getDeleterId',
        'deleted' => 'getDeleted',
        'last_viewed_at' => 'getLastViewedAt',
        'is_run_on_load' => 'getIsRunOnLoad',
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
        $this->container['content_metadata_id'] = isset($data['content_metadata_id']) ? $data['content_metadata_id'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['favorite_count'] = isset($data['favorite_count']) ? $data['favorite_count'] : null;
        $this->container['last_accessed_at'] = isset($data['last_accessed_at']) ? $data['last_accessed_at'] : null;
        $this->container['content_favorite_id'] = isset($data['content_favorite_id']) ? $data['content_favorite_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['short_url'] = isset($data['short_url']) ? $data['short_url'] : null;
        $this->container['space'] = isset($data['space']) ? $data['space'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['public_slug'] = isset($data['public_slug']) ? $data['public_slug'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['space_id'] = isset($data['space_id']) ? $data['space_id'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['public_url'] = isset($data['public_url']) ? $data['public_url'] : null;
        $this->container['embed_url'] = isset($data['embed_url']) ? $data['embed_url'] : null;
        $this->container['image_embed_url'] = isset($data['image_embed_url']) ? $data['image_embed_url'] : null;
        $this->container['google_spreadsheet_formula'] = isset($data['google_spreadsheet_formula']) ? $data['google_spreadsheet_formula'] : null;
        $this->container['excel_file_url'] = isset($data['excel_file_url']) ? $data['excel_file_url'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['last_updater_id'] = isset($data['last_updater_id']) ? $data['last_updater_id'] : null;
        $this->container['deleter_id'] = isset($data['deleter_id']) ? $data['deleter_id'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['last_viewed_at'] = isset($data['last_viewed_at']) ? $data['last_viewed_at'] : null;
        $this->container['is_run_on_load'] = isset($data['is_run_on_load']) ? $data['is_run_on_load'] : null;
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
     * Gets content_metadata_id
     *
     * @return int
     */
    public function getContentMetadataId()
    {
        return $this->container['content_metadata_id'];
    }

    /**
     * Sets content_metadata_id
     *
     * @param int $content_metadata_id Id of content metadata
     *
     * @return $this
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

        return $this;
    }

    /**
     * Gets view_count
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     *
     * @param int $view_count Number of times viewed in the Looker web UI
     *
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets favorite_count
     *
     * @return int
     */
    public function getFavoriteCount()
    {
        return $this->container['favorite_count'];
    }

    /**
     * Sets favorite_count
     *
     * @param int $favorite_count Number of times favorited
     *
     * @return $this
     */
    public function setFavoriteCount($favorite_count)
    {
        $this->container['favorite_count'] = $favorite_count;

        return $this;
    }

    /**
     * Gets last_accessed_at
     *
     * @return \DateTime
     */
    public function getLastAccessedAt()
    {
        return $this->container['last_accessed_at'];
    }

    /**
     * Sets last_accessed_at
     *
     * @param \DateTime $last_accessed_at Time that the Look was last accessed by any user
     *
     * @return $this
     */
    public function setLastAccessedAt($last_accessed_at)
    {
        $this->container['last_accessed_at'] = $last_accessed_at;

        return $this;
    }

    /**
     * Gets content_favorite_id
     *
     * @return int
     */
    public function getContentFavoriteId()
    {
        return $this->container['content_favorite_id'];
    }

    /**
     * Sets content_favorite_id
     *
     * @param int $content_favorite_id Content Favorite Id
     *
     * @return $this
     */
    public function setContentFavoriteId($content_favorite_id)
    {
        $this->container['content_favorite_id'] = $content_favorite_id;

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
     * @param string $title Look Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\UserIdOnly
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\UserIdOnly $user User
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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
     * @param int $query_id Query Id
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets short_url
     *
     * @return string
     */
    public function getShortUrl()
    {
        return $this->container['short_url'];
    }

    /**
     * Sets short_url
     *
     * @param string $short_url Short Url
     *
     * @return $this
     */
    public function setShortUrl($short_url)
    {
        $this->container['short_url'] = $short_url;

        return $this;
    }

    /**
     * Gets space
     *
     * @return \Swagger\Client\Model\SpaceBase
     */
    public function getSpace()
    {
        return $this->container['space'];
    }

    /**
     * Sets space
     *
     * @param \Swagger\Client\Model\SpaceBase $space Space of this Look
     *
     * @return $this
     */
    public function setSpace($space)
    {
        $this->container['space'] = $space;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool $public Is Public
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets public_slug
     *
     * @return string
     */
    public function getPublicSlug()
    {
        return $this->container['public_slug'];
    }

    /**
     * Sets public_slug
     *
     * @param string $public_slug Public Slug
     *
     * @return $this
     */
    public function setPublicSlug($public_slug)
    {
        $this->container['public_slug'] = $public_slug;

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
     * @param int $user_id User Id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets space_id
     *
     * @return string
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param string $space_id Space Id
     *
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        $this->container['space_id'] = $space_id;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Swagger\Client\Model\LookModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Swagger\Client\Model\LookModel $model Model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets public_url
     *
     * @return string
     */
    public function getPublicUrl()
    {
        return $this->container['public_url'];
    }

    /**
     * Sets public_url
     *
     * @param string $public_url Public Url
     *
     * @return $this
     */
    public function setPublicUrl($public_url)
    {
        $this->container['public_url'] = $public_url;

        return $this;
    }

    /**
     * Gets embed_url
     *
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->container['embed_url'];
    }

    /**
     * Sets embed_url
     *
     * @param string $embed_url Embed Url
     *
     * @return $this
     */
    public function setEmbedUrl($embed_url)
    {
        $this->container['embed_url'] = $embed_url;

        return $this;
    }

    /**
     * Gets image_embed_url
     *
     * @return string
     */
    public function getImageEmbedUrl()
    {
        return $this->container['image_embed_url'];
    }

    /**
     * Sets image_embed_url
     *
     * @param string $image_embed_url Image Embed Url
     *
     * @return $this
     */
    public function setImageEmbedUrl($image_embed_url)
    {
        $this->container['image_embed_url'] = $image_embed_url;

        return $this;
    }

    /**
     * Gets google_spreadsheet_formula
     *
     * @return string
     */
    public function getGoogleSpreadsheetFormula()
    {
        return $this->container['google_spreadsheet_formula'];
    }

    /**
     * Sets google_spreadsheet_formula
     *
     * @param string $google_spreadsheet_formula Google Spreadsheet Formula
     *
     * @return $this
     */
    public function setGoogleSpreadsheetFormula($google_spreadsheet_formula)
    {
        $this->container['google_spreadsheet_formula'] = $google_spreadsheet_formula;

        return $this;
    }

    /**
     * Gets excel_file_url
     *
     * @return string
     */
    public function getExcelFileUrl()
    {
        return $this->container['excel_file_url'];
    }

    /**
     * Sets excel_file_url
     *
     * @param string $excel_file_url Excel File Url
     *
     * @return $this
     */
    public function setExcelFileUrl($excel_file_url)
    {
        $this->container['excel_file_url'] = $excel_file_url;

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
     * @param \DateTime $created_at Time that the Look was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at Time that the Look was deleted.
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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
     * @param \DateTime $updated_at Time that the Look was updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets last_updater_id
     *
     * @return int
     */
    public function getLastUpdaterId()
    {
        return $this->container['last_updater_id'];
    }

    /**
     * Sets last_updater_id
     *
     * @param int $last_updater_id Id of User that last updated the look.
     *
     * @return $this
     */
    public function setLastUpdaterId($last_updater_id)
    {
        $this->container['last_updater_id'] = $last_updater_id;

        return $this;
    }

    /**
     * Gets deleter_id
     *
     * @return int
     */
    public function getDeleterId()
    {
        return $this->container['deleter_id'];
    }

    /**
     * Sets deleter_id
     *
     * @param int $deleter_id Id of User that deleted the look.
     *
     * @return $this
     */
    public function setDeleterId($deleter_id)
    {
        $this->container['deleter_id'] = $deleter_id;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Whether or not a look is deleted.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets last_viewed_at
     *
     * @return \DateTime
     */
    public function getLastViewedAt()
    {
        return $this->container['last_viewed_at'];
    }

    /**
     * Sets last_viewed_at
     *
     * @param \DateTime $last_viewed_at Time last viewed in the Looker web UI
     *
     * @return $this
     */
    public function setLastViewedAt($last_viewed_at)
    {
        $this->container['last_viewed_at'] = $last_viewed_at;

        return $this;
    }

    /**
     * Gets is_run_on_load
     *
     * @return bool
     */
    public function getIsRunOnLoad()
    {
        return $this->container['is_run_on_load'];
    }

    /**
     * Sets is_run_on_load
     *
     * @param bool $is_run_on_load auto-run query when Look viewed
     *
     * @return $this
     */
    public function setIsRunOnLoad($is_run_on_load)
    {
        $this->container['is_run_on_load'] = $is_run_on_load;

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


