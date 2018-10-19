# 关于表的介绍
## blog

字段 | 描述
---|---
`id` | '博客id'
`cate_id` | '分类id'
`content` | '内容'
`updated_at` | '更新时间'
`created_at` |'创建时间'
`isdeleted` | '软删除标识位 1 表示已经删除 0 未删除 '
`keywords` | '关键词，逗号隔开'
  
## category
字段 | 描述
---|---
`id` | '分类id'
`title` | '分类名称'
`pid` | '父类id'
`updated_at` | '更新时间'
`created_at` | '创建时间'
## user
字段 | 描述
---|---
  `id` | '用户id'
  `user_name` | '用户名称'
  `updated_at` | '更新时间'
  `created_at` | '创建时间'
  `password` | '密码'
  `email` | '邮箱'
  `telephone` | '电话'
  `intro` | '简介'
  `gender` | '性别：男M 女F'
  `qq` | 'qq号'
  `addr` | '地址'
  `job` | '工作'
  `company` | '公司'
  `birthday` | '出生日期'