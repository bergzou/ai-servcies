<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfraApiErrorLogModel extends BaseModel
{
    # 使用Eloquent工厂模式
    use HasFactory;

    # 对应的数据库表名
    protected $table = 'infra_api_error_log';

    # 黑名单，指定不允许批量赋值的字段（空数组表示所有字段都可赋值）
    protected $guarded = ['id'];

    # 属性类型转换（自动映射数据库类型到PHP类型）
    protected $casts = [
        'id' => 'integer', # 编号
        'trace_id' => 'string', # 链路追踪编号
        'user_id' => 'integer', # 用户编号
        'user_type' => 'boolean', # 用户类型
        'application_name' => 'string', # 应用名
        'request_method' => 'string', # 请求方法名
        'request_url' => 'string', # 请求地址
        'request_params' => 'string', # 请求参数
        'user_ip' => 'string', # 用户 IP
        'user_agent' => 'string', # 浏览器 UA
        'exception_time' => 'time', # 异常发生时间
        'exception_name' => 'string', # 异常名
        'exception_message' => 'string', # 异常导致的消息
        'exception_root_cause_message' => 'string', # 异常导致的根消息
        'exception_stack_trace' => 'string', # 异常的栈轨迹
        'exception_class_name' => 'string', # 异常发生的类全名
        'exception_file_name' => 'string', # 异常发生的类文件
        'exception_method_name' => 'string', # 异常发生的方法名
        'exception_line_number' => 'integer', # 异常发生的方法所在行
        'process_status' => 'boolean', # 处理状态
        'process_time' => 'time', # 处理时间
        'process_user_id' => 'integer', # 处理用户编号
        'creator' => 'string', # 创建者
        'create_time' => 'time', # 创建时间
        'updater' => 'string', # 更新者
        'update_time' => 'time', # 更新时间
        'deleted' => 'boolean', # 是否删除
        'tenant_id' => 'integer', # 租户编号
    ];

}
