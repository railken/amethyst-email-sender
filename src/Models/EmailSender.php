<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

/**
 * @property DataBuilder $data_builder
 */
class EmailSender extends Model implements EntityContract
{
    use SoftDeletes, ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.email-sender.data.email-sender');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function data_builder()
    {
        return $this->belongsTo(DataBuilder::class);
    }
}
