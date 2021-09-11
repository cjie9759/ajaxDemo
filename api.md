### **Ajax demo**
###### 接口功能
> 获取服务器时间

###### URL
> /api/getime.php

###### 支持格式
> JSON

###### HTTP请求方式
> GET

###### 请求参数
null

###### 返回字段
| 返回字段  | 字段类型 | 说明                             |
| :-------- | :------- | :------------------------------- |
| err       | int      | 返回结果状态。0：正常；1：错误。 |
| msg       | string   | 错误信息                         |
| data      | object   | 数据                             |
| data.time | string   | 服务器时间                       |

###### 接口示例
> [/api/getime.php](/api/getime.php)
``` javascript
{
    "err": 0,
    "msg": ""
    "data":{
        "time":"12:12:12"
    }
}
```