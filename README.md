Bootstrap_board
===

## Table of Contents
- [Bootstrap_board](#Bootstrap_board)
  * [Beginners Guide](#beginners-guide)

## Beginners Guide

center88留言板 with MVC + member + 前端可以改用jquery validate + View增加Bootstrap
##
* 2019/11/21 加入Bootstrap
1. 引入Bootstrap css js
2. 保留原本的自刻css
3. 將Bootstrap 網格div包在自刻css外面
4. 刪除首頁的搜尋欄，改到nav中，並將會員功能也整合到nav中
5. 使用nav中ul、form的css選項:mr-auto/ml-auto決定這個ul、form要擺在nav的左邊或右邊
6. nav(響應式下拉選單中)，預設下拉文字都是在螢幕左邊，ul class可以加上 text-right，這樣就會變成在右邊

##
* 2019/11/22 修改code review的問題
1. 留言打一堆a大小會變→css加入word-break: break-all;強制換行
2. 搜尋如果沒有找到留言，不顯示頁碼
3. SQL 語法，用別名的話使用小寫，通常用表的名字的第一個字母為別名
4. 資料庫表名簡單，不用加center88_

##
未做工作:  
* bootstrap 頁碼
* 留言表格在螢幕縮小時會跑位
* 使用者輸入值驗證前後端都要做
