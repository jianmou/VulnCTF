# VulnCTF 的练习教室 | 每日一练
## ID：9763f1b840ce1284
### Category：Crypto
### Description：这里没有key：你说没有就没有啊，俺为啥要听你的啊
### Subject：JScript.Encode | Unicode
### Remarks: 据说是西普学院CTF

#### 9763f1b840ce1284 Writeup

#### 1.Build

1.1 获取镜像：

```
    docker pull vulnctf/crypto
```

1.2 创建并启动容器：

```
    docker run -d -p 8080:80 vulnctf/crypto
```

* 访问Crypto3题目链接：http://主机:8080/9763f1b840ce1284/


#### 2.Point
jother/jsfuck是另类的javascript模式。

Jother（Jsfuck）是用匿名函数的原生形式，解码则按照编码原理倒过来写个程序。其特点是由“[]，()，{}，+,！”组成的编码后的字符，这是一个JavaScript的绕过代码编码方式。


#### 3.Writeup

打开时候是jsfuck编码
直接拖到控制台发现执行不了，看一下题目，知道了是缺点东西，打开[jsfuck](http://www.jsfuck.com/)，对比一下，发现头部缺少]，补齐以后放入控制台，但是结果如下：

* ![Alt text](src/1.png)


感觉像是和我开了一个玩笑，到这都没有思路了，决定换一个网站看一下：[poisonjs](https://ooze.ninja/javascript/poisonjs/)（强烈推荐），看到里面的flag后面紧跟了一alert的弹窗，所以使用控制台执行就会出现弹窗覆盖了前面提示的flag信息，get了。

* ![Alt text](src/1.png)

#### 4.Reference

 WooYun/jother编码之谜:https://github.com/tczhangzhi/WooYun/blob/master/jother%E7%BC%96%E7%A0%81%E4%B9%8B%E8%B0%9C.html

 