# Type System
型システム

## PHPの型システム
部分型の関係を満たしつつ(behaviral subtyping)
名前ベースで一致を調べる型システム(nominal type system)
を採用している。

部分型の関係:
コンパイル時にチェックされる。
型の検証は実行時に動的に行われる。


### 基本型
一部の言語に強く統合されている組み込み型。
ユーザー定義の型として再現できない。

基本型の一覧
- 組み込みの型
    - ヌル(null)
    - スカラー型:
        論理値(bool)
        整数(int)
        浮動小数点数(float)
        文字列(string)
        
    - 配列(array)
    - オブジェクト(object)
    - リソース(resource)
    - never
    - void
    - クラス内での関係を示す相対型: self, parent, static

- Value型
    - false
    - true

- ユーザー定義型 (一般的に、クラス型とも呼びます)
    - インターフェイス
    - クラス
    - 列挙型(Enum)

- callable


### 複合型
複数の基本型を組み合わせて、複合型を作ることができる。

型の組み合わせ方法:
- (インターフェイスやクラスの)交差型
- union 型


### 交差型
宣言した複数のクラス型を(単一ではなく)すべて満たす値を受け入れることができる。
交差型を構成する個別の型は、& 記号で結合する。
型T, U, Vの交差型はT&U&V と書く。


### union型
ひとつではなく、複数の異なる型を値として受け取ることができる。
union型を構成する個別の型は、｜記号で結合する。
型T, U, Vのunion 型は T|U|V と書く。
型のひとつが交差型の場合、DNFで記すために括弧で囲む必要がある。T|(X&Y) 


### 型のエイリアス
型のエイリアスをふたるサポートしている。
mixed と iterable。 それぞれ、 union 型 object|resource|array|string|float|int|bool|null と、Traversable|array に対応する。
