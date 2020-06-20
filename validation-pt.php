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
    'accepted'             => 'O :attribute deve ser aceito.',
    'active_url'           => 'O :attribute não é uma URL válida.',
    'after'                => 'O :attribute deve ser uma data após :date.',
    'after_or_equal'       => 'O :attribute deve ser uma data após ou igual a :date.',
    'alpha'                => 'O :attribute pode conter apenas letras.',
    'alpha_dash'           => 'O :attribute pode conter apenas letras, números e traços.',
    'alpha_num'            => 'O :attribute pode conter apenas letras e números.',
    'array'                => 'O :attribute deve ser uma matriz.',
    'before'               => 'O :attribute deve ser uma data antes :date.',
    'before_or_equal'      => 'O :attribute deve ser uma data antes ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre: min e :max.',
        'file'    => 'O :attribute deve estar entre: min e: max kilobytes.',
        'string'  => 'O :attribute deve estar entre: min e: caracteres máx.',
        'array'   => 'O :attribute deve ter entre: min e: max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não corresponde.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não corresponde ao formato :format.',
    'different'            => 'O :attribute e: outro deve ser diferente.',
    'digits'               => 'O :attribute deve ser: digitos digitos.',
    'digits_between'       => 'O :attribute deve estar entre: min e: max digits.',
    'dimensions'           => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo :attribute tem um valor duplicado.',
    'email'                => 'O :attribute deve ser um endereço de e-mail válido.',
    'exists'               => 'O selecionado: atributo é inválido.',
    'file'                 => 'O :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute deve ter um valor.',
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O selecionado: atributo é inválido.',
    'in_array'             => 'O campo :attribute não existe em: outro.',
    'integer'              => 'O :attribute deve ser um inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço IP válido.',
    'ipv4'                 => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O :attribute deve ser uma string JSON válida.',
    'max'                  => [
        'numeric' => 'O :attribute pode não ser maior que :max.',
        'file'    => 'O :attribute pode não ser maior do que: max kilobytes.',
        'string'  => 'O :attribute pode não ser maior do que: caracteres máx.',
        'array'   => 'O :attribute pode não ter mais de: máx. de itens.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :valores.',
    'mimetypes'            => 'O :attribute deve ser um arquivo do tipo: :valores.',
    'min'                  => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file'    => 'O :attribute deve ser pelo menos: min kilobytes.',
        'string'  => 'O :attribute deve ser pelo menos: caracteres min.',
        'array'   => 'O :attribute deve ter pelo menos: min itens.',
    ],
    'not_in'               => 'O selecionado: atributo é inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato :attribute é inválido.',
    'required'             => 'O campo :attribute é necessário.',
    'required_if'          => 'O campo :attribute é necessário quando: outro é :value.',
    'required_unless'      => 'O campo :attribute é necessário a menos que: outro esteja em :valores.',
    'required_with'        => 'O campo :attribute é necessário quando: valores estão presentes.',
    'required_with_all'    => 'O campo :attribute é necessário quando: valores estão presentes.',
    'required_without'     => 'O campo :attribute é necessário quando: valores não estão presentes.',
    'required_without_all' => 'O campo :attribute é necessário quando nenhum de: valores estão presentes.',
    'same'                 => 'O :attribute e: outro deve corresponder.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser :size.',
        'file'    => 'O :attribute deve ser: tamanho kilobytes.',
        'string'  => 'O :attribute deve ser: caracteres de tamanho.',
        'array'   => 'O :attribute deve conter: itens de tamanho.',
    ],
    'string'               => 'O :attribute deve ser uma string.',
    'timezone'             => 'O :attribute deve ser uma zona válida.',
    'unique'               => 'O :attribute já foi tirado.',
    'uploaded'             => 'O :attribute falhou ao fazer upload.',
    'url'                  => 'O formato :attribute é inválido.',
    // Custom app validations
    // 'full_name_required'            => 'Seu nome é necessário',
    'composite_unique'              => 'O :attribute :value já existe.',
    'register_email_unique'         => 'Este endereço de email já tem uma conta. Por favor, tente outra coisa.',
    'role_type_required'            => 'Selecionar tipo de função.',
    'attribute_id_required'         => 'Selecionar atributo.',
    'attribute_type_id_required'    => 'Selecionar tipo de atributo.',
    'attribute_code_required'       => 'O campo de código de atributo é necessário.',
    'attribute_value_required'      => 'O campo de valor do atributo é necessário.',
    'category_list_required'        => 'Selecione pelo menos uma categoria.',
    'manufacturer_required'         => 'O campo do fabricante é necessário.',
    'origin_required'               => 'O campo de origem é necessário.',
    'offer_start_required'          => 'Quando você tem um preço de oferta, a data de início da oferta é necessária.',
    'offer_start_after'             => ' The promotion start time can\'t be a past time.',
    'offer_end_required'            => 'Quando você tem um preço de oferta, a data de encerramento da oferta é necessária.',
    'offer_end_after'               => ' O tempo de término da oferta deve ser um tempo após a hora de início da oferta.',
    'variants_required'             => 'Variantes necessárias',
    'sku-unique'                    => 'O sku: valor já foi levado. Tente novo um.',
    'sku-distinct'                  => 'Variante :attribute tem um valor de sku duplicado.',
    'offer_price-numeric'           => ' não é um valor de preço válido. O preço de oferta deve ser um número.',
    'email_template_id_required'    => 'Modelo de email é necessário.',
    // 'merchant_have_shop'            => 'Este comerciante tem uma loja.',
    'brand_logo_max'                => 'O logotipo da marca pode não ser maior do que: max kilobytes.',
    'brand_logo_mimes'              => 'O logotipo da marca deve ser um arquivo do tipo: :valores.',
    'uploaded'                      => 'O tamanho do arquivo excedeu o limite máximo de upload em seu servidor. Por favor, verifique o arquivo php.ini.',
    'avatar_required'               => 'Escolha um avatar.',
    'subject_required_without'      => 'O assunto é necessário se você não utilizar um modelo.',
    'message_required_without'      => 'A mensagem é necessária se você não utilizar um modelo.',
    'template_id_required_without_all' => 'Selecione um modelo ou compositor uma nova mensagem.',
    'customer_required'             => 'Selecione um cliente.',
    'reply_required_without' => 'A resposta apresentada é necessária.',
    'template_id_required_without' => 'Selecione um modelo é necessário ao se reacoplar com modelo.',
    'shipping_zone_tax_id_required' => 'Selecione o perfil fiscal para a zona',
    'shipping_zone_country_ids_required' => 'Selecione pelo menos um país',
    'rest_of_the_world_composite_unique' => 'O resto da zona marítima mundial já existe.',
    'something_went_wrong' => 'Algo não está certo. Por favor, verifique e tente novamente.',
    'shipping_rate_required_unless' => 'Give a shipping rate or select \'Free shipping\' option',
    'shipping_range_minimum_min' => 'Minimum range can\'t be negative value',
    'shipping_range_maximum_min' => 'Maximum range can\'t be less than minimum value',
    'csv_mimes'                => 'O :attribute deve ser um arquivo do tipo csv.',
    'import_data_required' => 'O dataset não é válido para importar. Por favor, verifique seus dados e tente novamente.',
    'do_action_required'    => 'You didn\'t provide the input.',
    'do_action_invalid'    => 'A palavra-chave / entrada dada não é válida.',
    'recaptcha' => 'Please ensure that you are a human!',
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
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
    'upload_rows' => 'Você pode fazer o upload de um máximo de: registros de linhas por lote.',
    'csv_upload_invalid_data' => 'Algumas linhas contêm dados inválidos que não podem ser processados. Por favor, verifique seus dados e tente novamente.',
];
