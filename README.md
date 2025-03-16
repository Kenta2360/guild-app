# GUILD

## 📌 概要
GUILDは、フリーランサーと企業をつなぐクラウドソーシングプラットフォームです。
フリーランサーが仕事を見つけやすく、企業が適切な人材を効率的に採用できる仕組みを提供します。

## 🎯 主な機能

### フリーランサー向け
- ✅ ユーザー登録・ログイン（メール認証）
- ✅ プロフィール編集・ToDo管理
- ✅ プロジェクト一覧表示・検索・絞り込み
- ✅ メッセージ機能
- ✅ Google SMTPを使用した管理者への問い合わせ
- ✅ プロジェクトいいね機能
- ✅ ファイル提出・ダウンロード機能

### 企業向け
- ✅ プロジェクト作成・編集・削除
- ✅ プロジェクト一覧表示
- ✅ おすすめフリーランサーの表示
- ✅ メッセージ機能
- ✅ Google SMTPを使用した管理者への問い合わせ
- ✅ 提出されたファイルのダウンロード
- ✅ プロフィール編集
- ✅ 報酬支払い機能（PayPal対応）

### 管理者向け
- ✅ フリーランサー・企業・プロジェクトの一覧表示・非表示
- ✅ 支払い履歴一覧

## 🛠 使用技術
- **フロントエンド:** HTML / CSS / JavaScript / Bootstrap
- **バックエンド:** PHP / Laravel
- **データベース:** MySQL
- **その他:** Font Awesome

## 📥 インストール方法
```bash
# リポジトリをクローン
git clone https://github.com/yourname/GUILD.git
cd GUILD

# 依存関係をインストール
composer install
npm install

# 環境設定ファイルを作成
cp .env.example .env

# アプリケーションキーを生成
php artisan key:generate

# データベースを作成し、マイグレーション実行
php artisan migrate --seed

# 開発サーバーを起動
php artisan serve
```

## ⚙️ 環境設定 (.env)
```
APP_NAME=GUILD
APP_ENV=local
APP_KEY=（php artisan key:generate で生成）
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=guild
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="GUILD Support"

PAYPAL_CLIENT_ID=your-paypal-client-id
PAYPAL_SECRET=your-paypal-secret
```

## 💡 使用方法

### デモアカウント
- **管理者**
  - メール: `admin@example.com`
  - パスワード: `adminpassword`
- **企業**
  - メール: `info@cloudsolutions.com`
  - パスワード: `password`
- **フリーランサー**
  - メール: `emily@freelance.com`
  - パスワード: `password`

### 基本的な利用フロー
#### 企業
1. ユーザー登録
2. プロフィール編集
3. プロジェクト作成
4. リクエスト受け取り
5. 支払い
6. ファイル受け取り
7. 案件完了

#### フリーランサー
1. ユーザー登録
2. プロフィール編集
3. 案件リクエスト
4. 承認後、開始
5. ファイル提出
6. 完了後、報酬受け取り

## 🔧 今後の改善点
- [ ] **評価・レビュー機能** - フリーランサーと企業の信頼性向上
- [ ] **通知機能** - メッセージや案件進行のリアルタイム通知
- [ ] **案件フィードの最適化** - AIを活用したおすすめ案件表示
- [ ] **多言語対応** - 英語、日本語、その他の言語対応
- [ ] **モバイル最適化** - スマホ・タブレット向けのUI改善

## 📜 ライセンス
このプロジェクトは MIT ライセンスのもとで公開されています。詳細は [LICENSE](LICENSE) を参照してください。

## 🔗 リンク
[GitHub Repository](https://github.com/yourname/GUILD)

