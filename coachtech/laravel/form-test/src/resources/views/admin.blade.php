<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h2 class="header__logo" href="/">
                FashionablyLate
            </h2>
            <button class="header__button-submit" type="submit">logout</button>
        </div>
    </header>

    <main>
        <div class="admin__content">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
            <form action="">
                <div class="admin-select">
                    <input  type="text" name="name" value="" placeholder="名前やメールアドレスを入力してください">
                    <select>
                        <option value="性別">性別</option>
                        <option value="性別">男性</option>
                        <option value="性別">女性</option>
                        <option value="性別">その他</option>
                    </select>
                    <select name="" id="">
                        <option value="">お問い合わせの種類</option>
                    </select>
                    <select name="" id="">
                        <option value="">年/月/日</option>
                    </select>
                    <button>検索</button>
                    <button>リセット</button>
                </div>
                <div class="export">
                    <button>エクスポート</button>
                    <select name="" id=""></select>
                    <select name="" id="">1</select>
                    <select name="" id="">2</select>
                    <select name="" id="">3</select>
                    <select name="" id="">4</select>
                    <select name="" id="">5</select>
                    <select name="" id=""></select>
                </div>
            </form>
            <div class="admin-table">
                <table class="admin-table__inner">
                    <tr class="admin-table__row">
                        <th class="admin-table__header">お名前</th>
                        <th class="admin-table__header">性別</th>
                        <th class="admin-table__header">メールアドレス</th>
                        <th class="admin-table__header">お問い合わせの種類</th>
                        <th class="admin-table__header"></th>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                    <tr class="admin-table__row">
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text" name="content">
                                </div>
                            </form>
                        </td>
                        <td class="admin-table__item">
                            <div class="button__item"></div>
                            <form action="">
                                <button>詳細</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>