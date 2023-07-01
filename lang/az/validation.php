<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'ascii' => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'decimal' => 'The :attribute must have :decimal decimal places.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lowercase' => 'The :attribute must be lowercase.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute must be uppercase.',
    'url' => 'The :attribute must be a valid URL.',
    'ulid' => 'The :attribute must be a valid ULID.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        "photo" => [
            'required' => 'şəkil seçimi mütləqdir.',
            'image' => 'şeçdiyiniz fayl bir şəkil olmalıdır.',
            'mimes' => 'şəkil formatı jpg, png, webp və ya svg olmalıdır.',
        ],
        "links" => [
            'required' => 'şəklin mütləq linki olmalıdır!',
        ],
        "russian_number" => [
            'required' => 'nömrə mütləq qeyd edilməlidir!',
        ],
        "russian_number" => [
            'required' => 'nömrə mütləq qeyd edilməlidir!',
            'max' => "nömrənin maksimal simvol sayı 15 simvoldur",
            'min' => "nömrənin minimal simvol sayı 12 simvoldur",
        ],
        "spanish_number" => [
            'required' => 'nömrə mütləq qeyd edilməlidir!',
            'max' => "nömrənin maksimal simvol sayı 15 simvoldur",
            'min' => "nömrənin minimal simvol sayı 12 simvoldur",
        ],
        "whatsapp_number" => [
            'required' => 'nömrə mütləq qeyd edilməlidir!',
            'max' => "nömrənin maksimal simvol sayı 15 simvoldur",
            'min' => "nömrənin minimal simvol sayı 12 simvoldur",
        ],
        "instagram_link" => [
            'required' => 'instagram linki mütləq qeyd edilməlidir!',
        ],
        "facebook_link" => [
            'required' => 'facebook linki mütləq qeyd edilməlidir!',
        ],
        "district_name" => [
            'required' => 'rayon adı mütləq qeyd edilməlidir!',
        ],
        "about_title" => [
            'required' => 'haqqımızda başlığı mütləq yazılmalıdır',
            'max' => 'haqqımızda başlığı maksimum 255 simvol ola bilər'
        ],
        "about_desc" => [
            'required' => 'haqqımızda mətni mütləq yazılmalıdır'
        ],
        "about_footer" => [
            'required' => 'haqqımızda altlığı mütləq yazılmalıdır',
            'max' => 'haqqımızda altlığı maksimum 255 simvol ola bilər'
        ],
        "about_photo" => [
            'required' => 'haqqımızda şəklinin seçimi mütləqdir.',
            'image' => 'Seçdiyiniz fayl bir şəkil olmalıdır.',
            'mimes' => 'Şəkil formatı jpg, png, webp və ya svg olmalıdır.'
        ],
        'founder_name' => [
            'required' => 'founder mütləq yazılmalıdır',
        ],
        'founder_position' => [
            'required' => 'founder mütləq yazılmalıdır',
        ],
        'founder_desc' => [
            'required' => 'founder mütləq yazılmalıdır',
        ],
        'founder_languages' => [
            'required' => 'founder mütləq yazılmalıdır',
        ],
        "founder_photo" => [
            'required' => 'founder şəklinin seçimi mütləqdir.',
            'image' => 'seçdiyiniz fayl bir şəkil olmalıdır.',
            'mimes' => 'şəkil formatı jpg, png, webp və ya svg olmalıdır.'
        ],
        "type_name" => [
            'required' => 'tikilinin tipinin qeyd edilməsi mütləqdir!',
        ],
        "newbuildings_photo" => [
            'required' => 'yeni tikili şəklinin seçimi mütləqdir.',
            'image' => 'seçdiyiniz fayl bir şəkil olmalıdır.',
            'mimes' => 'şəkil formatı jpg, png, webp və ya svg olmalıdır.'
        ],
        "newbuildings_title" => [
            'required' => 'yeni tikilinin adının daxil edilməsi mütləqdir.',
        ],
        "newbuildings_title" => [
            'required' => 'yeni tikilinin adının daxil edilməsi mütləqdir.',
        ],
        "headers_photo" => [
            'required' => 'başlıq şəklinin seçimi mütləqdir.',
            'image' => 'seçdiyiniz fayl bir şəkil olmalıdır.',
            'mimes' => 'şəkil formatı jpg, png, webp və ya svg olmalıdır.'
        ],
        "headers_title" => [
            'required' => 'səhvə başlığının seçimi mütləqdir.',
            'headers_name' => 'səhvə adının seçimi mütləqdir!',
            'headers_title'=> 'səhvə başlığının əsas mətninin yazılması mütləqdir!',
            'header_subtitle' => 'səhvə başlığının alt mətninin yazılması mütləqdir!'
        ],
        'products_title' => [
            'required' => 'məhsul adı seçimi mütləqdir.',
        ],
        "artikul" => [
            'required' => 'məhsul artikulu seçimi mütləqdir.',
        ],
        "products_price" => [
            'required' => 'məhsul qiyməti seçimi mütləqdir.',
            "numeric" => 'məhsul qiyməti tam və ya kəsr ədəd olmalıdır.',
            "integer" => 'məhsul qiyməti tam və ya kəsr ədəd olmalıdır.',
        ],
        "bedrooms" => [
            'required' => 'yataq otaqlarının sayı mütləq daxil edilməlidir',
        ],
        "bathrooms" => [
            'required' => 'vanna otaqlarının sayı mütləq daxil edilməlidir',
        ],
        "square" => [
            'required' => 'sahə mütləq daxil edilməlidir',
        ],
        "plot" => [
            'required' => 'ərazi mütləq daxil edilməlidir',
        ],
        "product_image[]" => [
            'required' => 'məhsul şəklinin seçimi mütləqdir.',
            'image' => 'seçdiyiniz fayl bir şəkil olmalıdır.',
            'mimes' => 'şəkil formatı jpg, png, webp və ya svg olmalıdır.'
        ],
        "products_building_type" => [
            'required' => 'məhsul tikilisinin tipinin seçimi mütləqdir.',
        ],
        "products_district" => [
            'required' => 'məhsul yerləşmə rayonunun seçimi mütləqdir.',
        ],
        "newbuildings_id" => [
            'required' => 'yeni tikilinin tipinin seçimi mütləqdir.',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
