## Ofcold

一直以来，我们有这样一个想法。让在线商店、线下门店、仓储、客户管理、财务、工作等进行整合。从货物流、现金流更容易管理。
我们一直尝试去改变这一切！就在2018年，我们开始计划并且致力去改变这一切。让我们的工作更加的愉快和轻松。让一切复杂的事物变得简单。


## 环境

- PHP >= 7.2
- MYSQL >= 5.7.20
- NGINX >= 1.12
- Redis >= 4.0
- MongoDB >= 3.0
- Soowle

## 安装

* Composer
```bash
	$ composer create-project ofcold/platform
```

* 初始化环境变量
```bash
	$ php ft init
```

* 数据迁移
```bash
	$ php ft install

	# OR
	$ php ft install --seed
```

| 开发中 | 已完成 | 等待开发 |
|--------|--------|--------|
| :clock8: | :white_check_mark: | :x: |

### 系统核心组件
| 功能表 | 状态 |版本|
|--------|--------|--------|
| 资源管理器|:white_check_mark:| 1.0 |
| 队列|:white_check_mark:| 1.0 |
| 通知|:white_check_mark:| 1.0 |
| 国际化（货币，手机号码，语言，法律等）|:white_check_mark:| dev-master |
| 邮件|:white_check_mark:| 1.0 |
| 全局配置|:white_check_mark:| 1.0 |
| 模块configuration配置|:white_check_mark:| 1.0 |
| addon管理器|:white_check_mark:| 1.1 |
| editer在线编辑器|:white_check_mark:| 1.0 |
| makedown在线编辑器|:white_check_mark:| 1.0 |
| 所见所得在线编辑器|:white_check_mark: | 1.0 |
| 文件管理器|:white_check_mark: | dev-master |
| 网格自动驱动器|:white_check_mark: | 1.0 |

### 用户管理系统

```2018.4月底，beta ```

| 功能表 | 状态 |
|--------|--------|
| 登录（包含其他第三放社区账户）|:white_check_mark:|
| 注册|:white_check_mark:|
| 找回密码|:white_check_mark:|
| 用户id 相关资料页面（用户隐私，服务条款，账户帮助）|:clock8:|
| 用户资料管理|:white_check_mark:|
| 安全中心（密码管理，id更改）|:white_check_mark:|
| 账户辅助|:white_check_mark:|
| 用户偏好配置|:x:|
| 账户余额|:x:|
| 账户充值|:x:|
| 充值记录管理|:x:|
| 会员管理|:white_check_mark:|
| 用户管理|:white_check_mark:|
| 用户后台权限|:white_check_mark:|
| 用户角色管理|:white_check_mark:|
| 用户地址|:white_check_mark:|
| 用户字段自动伸缩|:white_check_mark:|
| 第三方社区账户绑定和解除绑定|:clock8:|
| socket，短信，邮件通知|:white_check_mark:|

### TCS 云存储

```2018.5月中旬```

| 功能表 | 状态 |
|--------|--------|
|七牛云存储驱动器|:clock8:|
|阿里OSS存储驱动器|:white_check_mark:|
|本地存储驱动器|:white_check_mark:|
|又拍云存储驱动器|:x:|
|磁盘文件夹管理|:white_check_mark:|
|文件管理|:white_check_mark:|
|文件备份|:x:|
|文件同步|:x:|
|文件备份|:x:|


### 页面管理器<small>(bootstrap)</small>


```2018.5月月底```

| 功能表 | 状态 |
|--------|--------|
|页面类型|:x:|
|页面字段自动伸缩管理|:x:|
|页面editer编辑器|:x:|
|页面实时预览|:x:|

### 商店
```2018.7月月底```

| 功能表 | 状态 |
|--------|--------|
|产品管理|:white_check_mark:|
|产品配置|:white_check_mark:|
|产品属性|:white_check_mark:|
|产品详情缓存|:x:|
|品牌管理|:white_check_mark:|
|供应商管理|:x:|
|类别管理|:white_check_mark:|
|类别筛选器|:x:|
|产品类型|:white_check_mark:|
|购物车管理|:x:|
|结算系统|:x:|
|订单管理|:x:|
|发票系统|:x:|
|优惠管理|:x:|
|优惠类型驱动|:x:|
|配送服务|:x:|
|退货管理|:x:|
|订单回收站|:x:|

### 支付支持
| 服务商 | 官网 | App | WEB  | 公众号 | 版本 | 状态 |
|--------|--------|--------|--------|--------|--------|--------|
|支付宝|https://alipay.com|:white_check_mark:|:white_check_mark:|:x:|1.0|:white_check_mark:|
|微信|https://pay.weixin.qq.com|:white_check_mark:|:white_check_mark:|:x:|1.0|:white_check_mark:|
|银联|https://95516.com|:white_check_mark:|:white_check_mark:|:x:|1.0|:white_check_mark:|
|Paypal|https://paypal.com|:white_check_mark:|:white_check_mark:|:x:|1.0|:white_check_mark:|

### 商务合作
* 2018年8月发布1.0.0版本 （21106元人民币/年）(此订阅不包含客户端应用)
* 2018年7月之前订阅费用1106元抵1420元（每人最多购买10次）
* 签约5年以上再9.5折，3年～5年9.8折
* 订阅后 费用以及用户名在此展示
* 默认PC自带客户端32000元（永久免费更新和维护）
* 更多定制开发请以下方式与我联系
* 投资人请发邮件Emial: bill.li@ofcold.com


## Copyright
* Ofcold 隶属深圳市乔诺科技有限公司旗下品牌

### Olivia team

 * Olivia Fu (olivia@ofcold.com)

 * Bill Li (bill.li@ofcold.com)
