# インターネットの仕組み

インターネット:
LANと呼ばれる小規模ネットワークの集合体が世界規模でつながったネットワークのこと。
小さなネットワークがリレーのようにデータを運ぶ。

経路選択:
データを宛先に届ける際にルートを選択すること。
ルーティング。ルータが行う。

IP:
Internet Protocal

パケット:
インターネットでやりとりするデータ。
1つのデータを小さなブロックに分割した細切れのデータ。

TCP:
Transmission Control Protocol

ポート番号:
アプリやサービスを区別する。

サーバ:
- サーバと呼ばれるコンピュータのこと
- クライアントと呼ばれるコンピュータからのリクエストに応じてサービスを提供するソフトウェアのこと

DHCPサーバ:
DHCP(Dynamic Host Configration Protocol)
IPアドレスなど必要な情報を自動的に発行するサーバ

DNSサーバ:
DNS(Domain Name System)
IPアドレスにホスト名、ドメイン名を名づける。

Webサーバ:
HTTP/HTTPSというプロトコルにしたがってクライアントとやりとりを行うサーバ。


# Webの仕組み

webサーバ:
    URL:webページのアドレス

静的Webサーバの仕組み:
    1. リクエストを発行
    2. 該当するHTMLファイルを取得
    3. HTMLファイルからHTML文書を出力
    4. 出力したHTML文書を返す

Webサーバ:
　Apach,IISなど


# Webアプリケーション
Web上で実行できるアプリケーションのこと。

動的Webページの仕組み:
    1. リクエストを発行
    2. PHPスクリプトを発行
    3. 実行結果のHTML文書を出力
    4. 出力したHTMLを返す

