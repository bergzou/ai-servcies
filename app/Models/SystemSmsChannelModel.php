<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SystemSmsChannelModel extends BaseModel
{
    # 使用Eloquent工厂模式
    use HasFactory;

    # 对应的数据库表名
    protected $table = 'system_sms_channel';

    # 黑名单，指定不允许批量赋值的字段（空数组表示所有字段都可赋值）
    protected $guarded = ['id'];

    # 属性类型转换（自动映射数据库类型到PHP类型）
    protected $casts = [
        'id' => 'integer', # 编号
        'signature' => 'string', # 短信签名
        'code' => 'string', # 渠道编码
        'status' => 'boolean', # 开启状态
        'remark' => 'string', # 备注
        'api_key' => 'string', # 短信 API 的账号
        'api_secret' => 'string', # 短信 API 的秘钥
        'callback_url' => 'string', # 短信发送回调 URL
        'creator' => 'string', # 创建者
        'create_time' => 'time', # 创建时间
        'updater' => 'string', # 更新者
        'update_time' => 'time', # 更新时间
        'deleted' => 'boolean', # 是否删除
    ];

}
