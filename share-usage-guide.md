# 个性化邀请函使用说明

## 📁 文件清单

1. ✅ `share.html` - 支持个性化姓名的邀请函页面
2. ✅ `share-image.svg` - 分享图片模板（需转换为jpg）

---

## 🎯 个性化邀请功能

### 使用方法

在链接后面添加 `?name=姓名` 或 `?n=姓名` 参数：

**示例：**
```
https://www.qclaw.team/share.html?name=张三
https://www.qclaw.team/share.html?name=李女士
https://www.qclaw.team/share.html?n=王总
```

### 显示效果

页面顶部会显示金色横幅：

```
✨ 尊敬的张三先生/女士，
非常荣幸邀请您参加心意内衣2026年年会
```

### 批量发送

为不同人生成专属链接：

| 姓名 | 专属链接 |
|------|---------|
| 张三 | https://www.qclaw.team/share.html?name=张三 |
| 李四 | https://www.qclaw.team/share.html?name=李四 |
| 王总 | https://www.qclaw.team/share.html?name=王总 |
| 陈女士 | https://www.qclaw.team/share.html?name=陈女士 |

---

## 🖼️ 分享图片说明

### 创建 share.jpg

**方案1：使用在线工具转换**

1. 打开 `share-image.svg` 文件
2. 使用在线工具转换为 jpg：
   - https://cloudconvert.com/svg-to-jpg
   - https://convertio.co/zh/svg-jpg/
3. 设置尺寸为 300x300 像素
4. 保存为 `share.jpg`

**方案2：使用 Photoshop/美图秀秀**

1. 新建 300x300 画布
2. 设计内容：
   - 深红色背景 (#1a0a0a)
   - 金色文字 (#d4af37)
   - 标题：同心同行·孝暖初心·致敬坚守
   - 日期：2026.06.17
   - 地点：建瓯玺苑大酒店
   - Logo：心意内衣
3. 导出为 JPG，大小 < 300KB

**方案3：我帮你生成**

如果你需要，我可以用代码生成一个 Canvas 版本的分享图。

---

## 📤 上传文件到服务器

请将以下文件上传到 `https://www.qclaw.team/`：

1. ✅ `share.html` （主文件）
2. ✅ `share.jpg` （分享缩略图，300x300）
3. ✅ `logo.jpg` （企业Logo）

---

## 💬 微信发送方式

### 单人发送

1. 打开微信
2. 选择联系人
3. 发送链接：`https://www.qclaw.team/share.html?name=张三`

### 群发助手批量发送

1. 打开微信「我」→「设置」→「通用」→「功能」→「群发助手」
2. 新建群发，选择多个联系人
3. 发送不同的专属链接给不同的人

### 使用标签批量发送

1. 给微信好友打标签（如"员工"、"客户"）
2. 使用群发助手按标签发送
3. 每个人收到专属链接

---

## 🎨 自定义样式

### 修改问候语

编辑 `share.html` 中的这段代码：

```javascript
<div class="greeting-text">
  尊敬的 <span class="greeting-name" id="guestName">嘉宾</span>，<br>
  非常荣幸邀请您参加心意内衣2026年年会
</div>
```

改为：
```javascript
<div class="greeting-text">
  亲爱的 <span class="greeting-name" id="guestName">嘉宾</span>，<br>
  诚挚邀请您莅临心意内衣2026年感恩盛典
</div>
```

### 修改颜色主题

在 CSS 中修改主色调：
```css
/* 金色主色调 */
--gold: #d4af37;

/* 改为其他颜色 */
--gold: #ff6b6b;  /* 粉红色 */
--gold: #4ecdc4;  /* 青绿色 */
```

---

## 📊 统计访问（可选）

如果想统计每个人是否打开了邀请函，可以：

1. 使用百度统计或腾讯分析
2. 在页面中添加统计代码
3. 通过 URL 参数区分不同用户

---

## ✨ 效果预览

### 有姓名参数时：
- ✅ 顶部显示金色问候横幅
- ✅ 显示"尊敬的XX先生/女士"
- ✅ 个性化邀请语

### 无姓名参数时：
- ✅ 问候横幅隐藏
- ✅ 显示普通邀请函内容
- ✅ 适合群发或朋友圈分享

---

## 🔧 技术说明

- 使用纯HTML + CSS + JavaScript实现
- 无需后端服务器
- 支持中文字符（自动URL解码）
- 响应式设计，适配手机屏幕
- 自动播放背景音乐
- 支持地图导航

---

## 📞 需要帮助？

如果需要：
1. 生成真正的 JPG 分享图
2. 修改问候语样式
3. 添加更多个性化参数（如部门、座位号等）
4. 其他定制需求

请告诉我！