<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 次の言語行には、バリデータクラスによって使用されるデフォルトのエラーメッセージが含まれています。
    | これらのルールには複数のバージョンがあるものもあり、サイズルールなどがあります。
    | ここでそれぞれのメッセージを自由に調整してください。
    |
    */

    'accepted' => ':attributeを承認する必要があります。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認する必要があります。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:date以降の日付でなければなりません。',
    'after_or_equal' => ':attributeは:date以降の日付でなければなりません。',
    'alpha' => ':attributeは文字のみを含むことができます。',
    'alpha_dash' => ':attributeは文字、数字、ダッシュ、アンダースコアのみを含むことができます。',
    'alpha_num' => ':attributeは文字と数字のみを含むことができます。',
    'array' => ':attributeは配列でなければなりません。',
    'before' => ':attributeは:date以前の日付でなければなりません。',
    'before_or_equal' => ':attributeは:date以前の日付でなければなりません。',
    'between' => [
        'numeric' => ':attributeは:minから:maxの間でなければなりません。',
        'file' => ':attributeは:minから:maxキロバイトの間でなければなりません。',
        'string' => ':attributeは:minから:max文字の間でなければなりません。',
        'array' => ':attributeは:minから:max項目の間でなければなりません。',
    ],
    'boolean' => ':attributeフィールドはtrueまたはfalseでなければなりません。',
    'confirmed' => ':attributeの確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付でなければなりません。',
    'date_format' => ':attributeは:format形式と一致しません。',
    'declined' => ':attributeは拒否する必要があります。',
    'declined_if' => ':otherが:valueの場合、:attributeは拒否する必要があります。',
    'different' => ':attributeと:otherは異なっていなければなりません。',
    'digits' => ':attributeは:digits桁でなければなりません。',
    'digits_between' => ':attributeは:minから:max桁の間でなければなりません。',
    'dimensions' => ':attributeは無効な画像寸法を持っています。',
    'distinct' => ':attributeフィールドには重複した値があります。',
    'email' => ':attributeは有効なメールアドレスでなければなりません。',
    'ends_with' => ':attributeは次のいずれかで終わらなければなりません: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeはファイルでなければなりません。',
    'filled' => ':attributeフィールドには値が必要です。',
    'gt' => [
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'file' => ':attributeは:valueキロバイトより大きくなければなりません。',
        'string' => ':attributeは:value文字より大きくなければなりません。',
        'array' => ':attributeは:value項目以上を持つ必要があります。',
    ],
    'gte' => [
        'numeric' => ':attributeは:value以上でなければなりません。',
        'file' => ':attributeは:valueキロバイト以上でなければなりません。',
        'string' => ':attributeは:value文字以上でなければなりません。',
        'array' => ':attributeは:value項目以上を持つ必要があります。',
    ],
    'image' => ':attributeは画像でなければなりません。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在しません。',
    'integer' => ':attributeは整数でなければなりません。',
    'ip' => ':attributeは有効なIPアドレスでなければなりません。',
    'ipv4' => ':attributeは有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attributeは有効なIPv6アドレスでなければなりません。',
    'json' => ':attributeは有効なJSON文字列でなければなりません。',
    'lt' => [
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'file' => ':attributeは:valueキロバイトより小さくなければなりません。',
        'string' => ':attributeは:value文字より小さくなければなりません。',
        'array' => ':attributeは:value項目未満でなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attributeは:value以下でなければなりません。',
        'file' => ':attributeは:valueキロバイト以下でなければなりません。',
        'string' => ':attributeは:value文字以下でなければなりません。',
        'array' => ':attributeは:value項目以下でなければなりません。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスでなければなりません。',
    'max' => [
        'numeric' => ':attributeは:maxを超えてはなりません。',
        'file' => ':attributeは:maxキロバイトを超えてはなりません。',
        'string' => ':attributeは:max文字を超えてはなりません。',
        'array' => ':attributeは:max項目を超えてはなりません。',
    ],
    'mimes' => ':attributeは次のファイルタイプのいずれかでなければなりません: :values。',
    'mimetypes' => ':attributeは次のファイルタイプのいずれかでなければなりません: :values。',
    'min' => [
        'numeric' => ':attributeは少なくとも:minでなければなりません。',
        'file' => ':attributeは少なくとも:minキロバイトでなければなりません。',
        'string' => ':attributeは少なくとも:min文字でなければなりません。',
        'array' => ':attributeは少なくとも:min項目を持つ必要があります。',
    ],
    'multiple_of' => ':attributeは:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式は無効です。',
    'numeric' => ':attributeは数値でなければなりません。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attributeフィールドが存在する必要があります。',
    'prohibited' => ':attributeフィールドは禁止されています。',
    'prohibited_if' => ':otherが:valueの場合、:attributeフィールドは禁止されています。',
    'prohibited_unless' => ':attributeフィールドは:otherが:valuesに含まれていない限りは禁止されています。',
    'prohibits' => ':attributeフィールドは:otherの存在を禁止します。',
    'regex' => ':attributeの形式は無効です。',
    'required' => ':attributeフィールドは必須です。',
    'required_array_keys' => ':attributeフィールドには:valuesのエントリが必要です。',
    'required_if' => ':otherが:valueの場合、:attributeフィールドは必須です。',
    'required_unless' => ':attributeフィールドは:otherが:valuesに含まれていない限り必須です。',
    'required_with' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeフィールドは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeフィールドは必須です。',
    'required_without_all' => ':valuesが全て存在しない場合、:attributeフィールドは必須です。',
    'same' => ':attributeと:otherは一致する必要があります。',
    'size' => [
        'numeric' => ':attributeは:sizeでなければなりません。',
        'file' => ':attributeは:sizeキロバイトでなければなりません。',
        'string' => ':attributeは:size文字でなければなりません。',
        'array' => ':attributeは:size項目を含む必要があります。',
    ],
    'starts_with' => ':attributeは次のいずれかで始まる必要があります: :values。',
    'string' => ':attributeは文字列でなければなりません。',
    'timezone' => ':attributeは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeは有効なURLでなければなりません。',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション言語行
    |--------------------------------------------------------------------------
    |
    | ここでは、属性に対して特定のカスタムバリデーションメッセージを指定できます。
    | "attribute.rule"という名前の行の命名規則を使用します。これにより、特定の属性ルールに対して特定のカスタムメッセージを迅速に指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性
    |--------------------------------------------------------------------------
    |
    | 次の言語行は、属性プレースホルダーを「Eメールアドレス」などのより読みやすいものと交換するために使用されます。
    | これにより、メッセージをより表現力豊かにすることができます。
    |
    */

    'attributes' => [
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード'
    ],

];
