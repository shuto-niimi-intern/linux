# linux

## linuxの起動処理

* 参考記事
  * [classmethod systemd超入門](https://dev.classmethod.jp/articles/systemd-getting-started/)
  * [systemd入門](https://qiita.com/s_szk/items/1c8fff34aa5ea744dba9)
  * [ほげほげテクノロジー systemdとは？ 設定ファイルの書き方や自動起動の設定](https://hogetech.info/linux/base/systemd)
* そもそもlinuxってどうやって起動するの？
  * 起動処理
    * 1:電源投入により[BIOS](https://wa3.i-3-i.info/word12418.html)が起動する。
    * 2:[BIOS](https://wa3.i-3-i.info/word12418.html)から[ブートローダー](https://wa3.i-3-i.info/word15558.html)が呼び出される。
    * 3:ブートローダーが[Linuxカーネル](https://hogetech.info/linux/kernel/basic1)を起動する。
    * 4:Linuxカーネルがinitプロセス(PID 1)を起動する。
      * BIOSって？: ハードウェア周りの話なので一旦置いておく
  * initプロセス: カーネルが最初に起動するプロセスで他の全てのプロセスを起動する役割を持つ
    * [カーネルって？](https://hogetech.info/linux/kernel/basic1)
      * 一旦置いておく
    * Sysvinit: 古くから使われていた 
      * サービスを全てshellscriptで記述、細分化が不可
    * Upstart: Sysvinitの代替えとして近年Ubuntuなどで採用されていた
    * Systemd: そしてFedora 15やCentOS 7、Red Hat Enterprise Linux 7で採用された

## systemdとは?
### 結論 : プロセスをPIDではなくcgroupsで管理できるようになった。
- 特徴 
    - 最初から最後まで実行するシェルスクリプトではない。
        - サービスを1つのシェルスクリプトではなくUnitという単位で管理し、設定ファイルとして持つ。
        - 処理の細分化、個別実行が可能に
        - また処理ごとの依存関係(tree構造？)
          - pstree
        - 並列実行も可能 A → B,Cを並列処理など
        - 参考画像 : [Classmethod /etc/init.d/sshd or /usr/lib/system/system/sshd.service](https://cdn-ssl-devio-img.classmethod.jp/wp-content/uploads/2015/02/16b644d51d9196c8d6912f1cd86d32f3.png?_ga=2.107428802.1556591799.1666764705-2049168855.1664779881)
    - プロセス起動を柔軟に???
        - 様々なトリガーを契機にプロセスの起動が行えます。
    - PIDではなくcgroupによってプロセスを管理(名前空間)
        - [cgroups](https://wiki.archlinux.jp/index.php/Cgroups?rdfrom=https%3A%2F%2Fwiki.archlinux.org%2Findex.php%3Ftitle%3DCgroups_%28%25E6%2597%25A5%25E6%259C%25AC%25E8%25AA%259E%29%26redirect%3Dno)


## ファイル構造から中身の意味を確認

### [bin](https://github.com/shuto-niimi-intern/linux/blob/main/bin)

### [boot](https://github.com/shuto-niimi-intern/linux/blob/main/boot)

### [dev](https://github.com/shuto-niimi-intern/linux/blob/main/dev)

### [etc](https://github.com/shuto-niimi-intern/linux/blob/main/etc)

### [home](https://github.com/shuto-niimi-intern/linux/blob/main/home)

### [lib](https://github.com/shuto-niimi-intern/linux/blob/main/lib)

### [lib64](https://github.com/shuto-niimi-intern/linux/blob/main/lib64)

### [media](https://github.com/shuto-niimi-intern/linux/blob/main/media)

### [mnt](https://github.com/shuto-niimi-intern/linux/blob/main/mnt)

### [opt](https://github.com/shuto-niimi-intern/linux/blob/main/opt)

### [proc](https://github.com/shuto-niimi-intern/linux/blob/main/proc/proc.md) : プロセスの基本情報が記述されたファイルが格納

* #### [cgroups](https://github.com/shuto-niimi-intern/linux/blob/main/proc/cgroups/cgroups.md)
* #### [cmdline](https://github.com/shuto-niimi-intern/linux/blob/main/proc/cmdline.md)
* #### [tty](https://github.com/shuto-niimi-intern/linux/blob/main/proc/tty.md)
* #### [crypto](https://github.com/shuto-niimi-intern/linux/blob/main/proc/crypto/crypto.md)
* #### [consoles](https://github.com/shuto-niimi-intern/linux/blob/main/proc/consoles.md)
* #### [filesystems](https://github.com/shuto-niimi-intern/linux/blob/main/proc/filesystems.md)
* #### [mounts](https://github.com/shuto-niimi-intern/linux/blob/main/proc/mounts.md)

### [root](/root)

### [run](/run)

### [sbin](/sbin)

### [srv](/srv)

### [sys](/sys)

### [tmp](/tmp)

### [usr](/usr)

### [var](/var)

## 分からん事

## unit

## systemmd systemctl

## service
