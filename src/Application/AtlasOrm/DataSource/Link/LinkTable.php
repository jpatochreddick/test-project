<?php
/**
 * This table class was generated by Atlas. Changes will be overwritten.
 */
namespace Application\AtlasOrm\DataSource\Link;

use Atlas\Orm\Table\AbstractTable;

/**
 * @inheritdoc
 */
class LinkTable extends AbstractTable
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'links';
    }

    /**
     * @inheritdoc
     */
    public function getColNames()
    {
        return [
            'id',
            'title',
            'url',
			'text',
            'submitter_id',
            'created',
            'updated',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getCols()
    {
        return [
            'id' => (object) [
                'name' => 'id',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => true,
                'primary' => true,
            ],
            'title' => (object) [
                'name' => 'title',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'url' => (object) [
                'name' => 'url',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => false,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
			'text' => (object) [
                'name' => 'text',
                'type' => 'varchar',
                'size' => 255,
                'scale' => null,
                'notnull' => false,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'submitter_id' => (object) [
                'name' => 'submitter_id',
                'type' => 'int',
                'size' => 11,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'created' => (object) [
                'name' => 'created',
                'type' => 'datetime',
                'size' => null,
                'scale' => null,
                'notnull' => true,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
            'updated' => (object) [
                'name' => 'updated',
                'type' => 'datetime',
                'size' => null,
                'scale' => null,
                'notnull' => false,
                'default' => null,
                'autoinc' => false,
                'primary' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getPrimaryKey()
    {
        return [
            'id',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getAutoinc()
    {
        return 'id';
    }

    /**
     * @inheritdoc
     */
    public function getColDefaults()
    {
        return [
            'id' => null,
            'title' => null,
            'url' => null,
			'text' => null,
            'submitter_id' => null,
            'created' => null,
            'updated' => null,
        ];
    }
}
