# cryptoとは暗号方式

## 参考記事
- [とほほの暗号入門](https://www.tohoho-web.com/ex/crypt.html)
- [ウェブサーバーの暗号アルゴリズムの選び方](https://www.digicert.co.jp/welcome/pdf/wp_code_algorithm.pdf)
- [暗号化のAES方式とは？](https://it-trend.jp/encryption/article/64-0070)
- [暗号化のアルゴリズムとは？](https://news.mynavi.jp/siryou_hikaku/20210225-1751087/)

### [方式](https://news.mynavi.jp/siryou_hikaku/20210225-1751087/)
- 共通鍵方式
- 公開鍵方式
- ハイブリッド暗号方式
  - [httpsなど](https://news.mynavi.jp/siryou_hikaku/20210225-1751087/)

### [暗号化アルゴリズム](https://news.mynavi.jp/siryou_hikaku/20210225-1751087/)
- 公開鍵方式
  - RSA
    - 代表的な暗号アルゴリズム。
    - 素数の積を元に公開鍵を作成し、2つの素数を元に秘密鍵を作成します。
    - 素数の積を計算するのは簡単だが、2つの素数を素因数分解が導くのは難しい。
    - 処理コストが非常にかかる
  - ECC (楕円曲線暗号)
    - 離散対数問題と素因数分解という、数学上の難解な問題を利用して安全性を確保した公開鍵暗号方式の暗号アルゴリズム
    - RSAよりも鍵のサイズは小さくて済み、処理コストもRSAに比べて少ない。
- 共通鍵方式
    - AES(128・192・256bitの鍵を利用したブロック暗号化方式)
    - 他の方式はしにました
- 公開鍵から共通鍵を作成する方法
  - ECDH([楕円曲線,ディフィーヘルマン鍵共有](https://ja.wikipedia.org/wiki/%E6%A5%95%E5%86%86%E6%9B%B2%E7%B7%9A%E3%83%87%E3%82%A3%E3%83%95%E3%82%A3%E3%83%BC%E3%83%BB%E3%83%98%E3%83%AB%E3%83%9E%E3%83%B3%E9%8D%B5%E5%85%B1%E6%9C%89))
    - [ECCとは? RSAと比べて](https://www.ssl.com/ja/%E3%82%88%E3%81%8F%E3%81%82%E3%82%8B%E8%B3%AA%E5%95%8F%EF%BC%88FAQ%EF%BC%89/%E6%A5%95%E5%86%86%E6%9B%B2%E7%B7%9A%E6%9A%97%E5%8F%B7%E3%81%A8%E3%81%AF/)
      - [詳細 楕円曲線暗号入門](https://blog.cloudflare.com/ja-jp/a-relatively-easy-to-understand-primer-on-elliptic-curve-cryptography-ja-jp/)
 - [Diffie-Helman鍵交換入門](https://github.com/shuto-niimi-intern/linux/blob/main/proc/crypto/Diffie-Hellman/Diffie-Hellman.md)