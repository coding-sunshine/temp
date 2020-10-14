<?php

namespace Modules\Platform\Core\Entities;

use HipsterJazzbo\Landlord\BelongsToTenants;
use Illuminate\Database\Eloquent\Model;
use Modules\Platform\Accounts\Entities\Account;

/**
 * Class Comment
 *
 * @package Modules\Platform\Core\Entities
 * @property int $id
 * @property string|null $commentable_id
 * @property string|null $commentable_type
 * @property string|null $commented_id
 * @property string|null $commented_type
 * @property string $comment
 * @property bool $approved
 * @property float|null $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $parent_id
 * @property int $upvote
 * @property int|null $account_id
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commented
 * @property-read \Modules\Platform\Accounts\Entities\Account|null $account
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereCommentedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereCommentedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment whereUpvote($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Platform\Core\Entities\Comment query()
 */
class Comment extends Model
{
    const UPVOTES_TABLE_NAME = 'bap_comment_user_upvote';

    use BelongsToTenants;


    protected $fillable = [
        'comment',
        'upvote',
        'approved',
        'commentable_id',
        'commentable_type',
        'commented_id',
        'commented_type',
        'parent_id',
        'account_id'
    ];

    public $table = 'bap_comment';

    protected $casts = [
        'approved' => 'boolean'
    ];


    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function commented()
    {
        return $this->morphTo();
    }

    /**
     * @return $this
     */
    public function approve()
    {
        $this->approved = true;
        $this->save();

        return $this;
    }
}
