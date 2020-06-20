<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Notifications Email Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the Notification library to build
    | the Notification emails. You are free to change them to anything
    | you want to customize your views to better match your platform.
    | Supported colors are blue, green, and red.
    |
    */
    // Auth Notifications
    'password_updated' => [
        'subject' => 'Sua senha :marketplace foi atualizada com sucesso!',
        'greeting' => 'Olá :usuário!',
        'message' => 'Sua senha de login de conta foi alterada com sucesso! Se você não fez essa mudança, entre em contato com a gente asap! Clique no botão abaixo para login em sua página de perfil.',
        'button_text' => 'Visite Seu Perfil',
    ],
    // Billing Notifications
    'invoice_created' => [
        'subject' => ':marketplace Mensal da taxa de inscrição',
        'greeting' => 'Olá :comerciante!',
        'message' => 'Thanks for your continued support. We\'ve attached a copy of your invoice for your records. Please let us know if you have any questions or concerns!',
        'button_text' => 'Ir para o Painel',
    ],
    // Customer Notifications
    'customer_registered' => [
        'subject' => 'Bem-vindo ao: marketplace de marketplace!',
        'greeting' => 'Parabéns :cliente!',
        'message' => 'Sua conta foi criada com sucesso! Clique no botão abaixo para verificar seu endereço de e-mail.',
        'button_text' => 'Verifique me',
    ],
    'customer_updated' => [
        'subject' => 'Informações da conta atualizadas com sucesso!',
        'greeting' => 'Olá :cliente!',
        'message' => 'Esta é uma notificação para deixar você saber que sua conta foi atualizada com sucesso!',
        'button_text' => 'Visite seu perfil',
    ],
    'customer_password_reset' => [
        'subject' => 'Redefinição de Senha de',
        'greeting' => 'Olá!',
        'message' => 'Você está recebendo este e-mail porque recebemos um pedido de reajuste de senha para sua conta. Se você não pediu um reset de senha, Basta ignorar esta notificação e não será necessário mais button_text.',
        'button_text' => 'Alterar Senha',
    ],
    // Dispute Notifications
    'dispute_acknowledgement' => [
        'subject' => '[Order ID: :order_id] Dispute has been submitted successfully',
        'greeting' => 'Olá :cliente',
        'message' => 'Esta é uma notificação para que você saiba que recebemos a sua disputa pelo ID Pedido:: order_id, Nossa equipe de apoio vai voltar para você o mais rápido possível.',
        'button_text' => 'Visualizar a disputa',
    ],
    'dispute_created' => [
        'subject' => 'Nova disputa para ID da Ordem:: order_id',
        'greeting' => 'Olá :comerciante!',
        'message' => 'O senhor recebeu uma nova disputa pelo ID da Ordem:: order_id. Favor revisar e resolver a questão com o cliente.',
        'button_text' => 'Visualizar a disputa',
    ],
    'dispute_updated' => [
        'subject' => '[Order ID: :order_id] Dispute status has been updated!',
        'greeting' => 'Olá :cliente!',
        'message' => 'Uma disputa para o ID Pedido: order_id foi atualizado com esta mensagem do fornecedor ":responder". Por favor, confira abaixo e entre em contato conosco se você precisar de alguma assistência.',
        'button_text' => 'Visualizar a disputa',
    ],
    'dispute_appealed' => [
        'subject' => '[Order ID: :order_id] Dispute appealed!',
        'greeting' => 'Olá!',
        'message' => 'Uma disputa para o ID da Ordem: order_id foi apelada com esta mensagem ":responder". Por favor, confira abaixo os detalhes.',
        'button_text' => 'Visualizar a disputa',
    ],
    'appealed_dispute_replied' => [
        'subject' => '[Order ID: :order_id] New respons for appealed dispute!',
        'greeting' => 'Olá!',
        'message' => 'Uma disputa para o ID da Ordem: order_id foi respondido com esta mensagem: </br></br> ":responder"',
        'button_text' => 'Visualizar a disputa',
    ],
    // Inventory
    'low_inventory_notification' => [
        'subject' => 'Alerta de baixo estoque!',
        'greeting' => 'Olá!',
        'message' => 'Um ou mais de seus itens de inventário ficando baixos. Hora de adicionar mais estoque para manter o item ao vivo no marketplace.',
        'button_text' => 'Atualizar Inventário',
    ],
    'inventory_bulk_upload_procceed_notice' => [
        'subject' => 'O seu pedido de importação de inventário em massa foi procceado.',
        'greeting' => 'Olá!',
        'message' => 'We\'re happy to let you know that your bulk inventory import request has been procceed. Total number of rows imported successfully into the platform :success, Failed number of rows :failed ',
        'failed' => 'Por favor, encontre o arquivo anexado para linhas falidas.',
        'button_text' => 'Visualizar Inventário',
    ],
    // Message Notifications
    'new_message' => [
        'subject' => ':assunto',
        'greeting' => 'Olá :receptor',
        'message' => ':mensagem',
        'button_text' => 'Visualizar a mensagem no site',
    ],
    'message_replied' => [
        'subject' => ':usuário respondeu: assunto',
        'greeting' => 'Olá :receptor',
        'message' => ':resposta',
        'button_text' => 'Visualizar a mensagem no site',
    ],
    // Order Notifications
    'order_created' => [
        'subject' => '[Order ID: :order] your order has been placed successfully!',
        'greeting' => 'Olá :cliente',
        'message' => 'Thank you for choosing us! Your order [Order ID :order] has been placed successfully. We\'ll let you know the status of the order.',
        'button_text' => 'Visite a loja',
    ],
    'merchant_order_created_notification' => [
        'subject' => 'New order [Order ID: :order] has been placed on your shop!',
        'greeting' => 'Olá :comerciante',
        'message' => 'A new order [Order ID :order] has been placed. Please check the order detail and fulfill the order asap.',
        'button_text' => 'Cumprir a ordem',
    ],
    'order_updated' => [
        'subject' => '[Order ID: :order] your order status has been updated!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that your order [Order ID :order] has been updated. Please see below for order detail. You can also check your orders from your dashboard.',
        'button_text' => 'Visite a loja',
    ],
    'order_fulfilled' => [
        'subject' => '[Order ID: :order] Your order on it\'s way!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that your order [Order ID :order] has been shipped and it\'s on your way. Please see below for order detail. You can also check your orders from your dashboard.',
        'button_text' => 'Visite a loja',
    ],
    'order_paid' => [
        'subject' => '[Order ID: :order] Your order been paid successfully!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that your order [Order ID :order] has been paid successfully and it\'s on your way. Please see below for order detail. You can also check your orders from your dashboard.',
        'button_text' => 'Visite a loja',
    ],
    'order_payment_failed' => [
        'subject' => '[Order ID: :order] payment failed!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that your order [Order ID :order] payment has been failed. Please see below for order detail. You can also check your orders from your dashboard.',
        'button_text' => 'Visite a loja',
    ],
    // Refund Notifications
    'refund_initiated' => [
        'subject' => '[Order ID: :order] a refund has been initiated!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that we have initiated a refund request for your order :order. One of our team memeber will review the request soon. We\'ll let you know the status of the request.',
    ],
    'refund_approved' => [
        'subject' => '[Order ID: :order] a refund request has been approved!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that we have approved a refund request for your order :order. Refunded amount is :amount. We have sent the money to your payment method, it may take few days to effect your account. Contact your payment provider if you don\'t see the money effected in few days.',
    ],
    'refund_declined' => [
        'subject' => '[Order ID: :order] a refund request has been declined!',
        'greeting' => 'Olá :cliente',
        'message' => 'This is a notification to let you know that a refund request has been declined for your order :order. If you\'re not satisfied with the merchant\'s solution, you can contact to the merchant directly from the platform or even you can appeal the dispute on :marketplace. We\'ll step in to solve the issue.',
    ],
    // Shop Notifications
    'shop_created' => [
        'subject' => 'Sua loja está pronta para ir!',
        'greeting' => 'Parabéns :comerciante!',
        'message' => 'Sua loja :shop_name foi criada com sucesso! Clique no botão abaixo para fazer login no painel admin da loja.',
        'button_text' => 'Ir para o Painel',
    ],
    'shop_updated' => [
        'subject' => 'Informações da loja atualizadas com sucesso!',
        'greeting' => 'Olá :comerciante!',
        'message' => 'Esta é uma notificação para deixar você saber que sua loja :shop_name foi atualizada com sucesso!',
        'button_text' => 'Ir para o Painel',
    ],
    'shop_config_updated' => [
        'subject' => 'Configuração da loja atualizada com sucesso!',
        'greeting' => 'Olá :comerciante!',
        'message' => 'Sua configuração de loja foi atualizada com sucesso! Clique no botão abaixo para fazer login no painel admin da loja.',
        'button_text' => 'Ir para o Painel',
    ],
    'shop_down_for_maintainace' => [
        'subject' => 'Sua loja está em baixo!',
        'greeting' => 'Olá :comerciante!',
        'message' => 'This is a notification to let you know that your shop :shop_name is down! No customer can visit your shop until it\'s back to live again.',
        'button_text' => 'Ir para a página de Config',
    ],
    'shop_is_live' => [
        'subject' => 'Sua loja está de volta ao LIVE!',
        'greeting' => 'Olá :comerciante',
        'message' => 'Esta é uma notificação para deixar você saber que sua loja :shop_name está de volta para viver com sucesso!',
        'button_text' => 'Ir para o Painel',
    ],
    'shop_deleted' => [
        'subject' => 'Sua loja foi removida de :marketplace!',
        'greeting' => 'Olá Comerciante!',
        'message' => 'This is a notification to let you know that your shop has been deleted from our markerplace! We\'ll miss you.',
    ],
    // System Notifications
    'system_is_down' => [
        'subject' => 'Seu marketplace: marketplace está em baixo agora!',
        'greeting' => 'Olá :usuário!',
        'message' => 'This is a notification to let you know that your marketplace :marketplace is down! No customer can visit your marketplace until it\'s back to live again.',
        'button_text' => 'Ir para a página config',
    ],
    'system_is_live' => [
        'subject' => 'Seu marketplace: marketplace está de volta para o LIVE!',
        'greeting' => 'Olá :usuário!',
        'message' => 'Esta é uma notificação para deixar você saber que o seu marketplace: marketplace está de volta para viver com sucesso!',
        'button_text' => 'Ir para o Painel',
    ],
    'system_info_updated' => [
        'subject' => ':marketplace-informações de marketplace atualizadas com sucesso!',
        'greeting' => 'Olá :usuário!',
        'message' => 'Esta é uma notificação para deixar você saber que o seu marketplace: marketplace foi atualizado com sucesso!',
        'button_text' => 'Ir para o Painel',
    ],
    'system_config_updated' => [
        'subject' => ':marketplace-configuração de marketplace atualizada com sucesso!',
        'greeting' => 'Olá :usuário!',
        'message' => 'A configuração do seu marketplace: marketplace foi atualizado com sucesso! Clique no botão abaixo para login no painel admin.',
        'button_text' => 'Configurações de visualização',
    ],
    'new_contact_us_message' => [
        'subject' => 'Nova mensagem via contato conosco forma: :assunto',
        'greeting' => 'Olá!',
        'message_footer_with_phone' => 'Você pode responder este e-mail ou entrar em contato diretamente com este telefone: telefone',
        'message_footer' => 'Você pode responder este e-mail diretamente.',
    ],
    // Ticket Notifications
    'ticket_acknowledgement' => [
        'subject' => '[Ticket ID: :ticket_id] :subject',
        'greeting' => 'Olá :usuário',
        'message' => 'Esta é uma notificação para deixar você saber que recebemos o seu ingresso :ticket_id com sucesso! Nossa equipe de apoio vai voltar para você o mais rápido possível.',
        'button_text' => 'Visualizar o chamado',
    ],
    'ticket_created' => [
        'subject' => 'New Support Ticket [Ticket ID: :ticket_id] :subject',
        'greeting' => 'Olá!',
        'message' => 'Você recebeu um novo ID de ticket de suporte :ticket_id, Sender: remetente do fornecedor :vendor. Reveja e assente a passagem para equipe de apoio.',
        'button_text' => 'Visualizar o chamado',
    ],
    'ticket_assigned' => [
        'subject' => 'A ticket just assinged to you [Ticket ID: :ticket_id] :subject',
        'greeting' => 'Olá :usuário',
        'message' => 'This is a notification to let you know that ticket [Ticket ID: :ticket_id] :subject just assinged to you. Review and reply the ticket to as soon as possible.',
        'button_text' => 'Responder o bilhete',
    ],
    'ticket_replied' => [
        'subject' => ':user replied the ticket [Ticket ID: :ticket_id] :subject',
        'greeting' => 'Olá :usuário',
        'message' => ':resposta',
        'button_text' => 'Visualizar o chamado',
    ],
    'ticket_updated' => [
        'subject' => 'A Ticket [Ticket ID: :ticket_id] :subject has been updated!',
        'greeting' => 'Olá :usuário!',
        'message' => 'Um de seus bilhetes de suporte ticket ID # :ticket_id :assunto foi atualizado. Por favor, entre em contato conosco se você precisar de alguma assistência.',
        'button_text' => 'Visualizar o chamado',
    ],
    // User Notifications
    'user_created' => [
        'subject' => ':O admin adicionou você ao: marketplace de marketplace!',
        'greeting' => 'Parabéns :usuário!',
        'message' => 'Você foi adicionado ao: marketplace por :admin! Clique no botão abaixo para login na sua conta. Use a senha temporária para login inicial.',
        'alert' => 'Don\'t forgot to change your password after login.',
        'button_text' => 'Visite seu perfil',
    ],
    'user_updated' => [
        'subject' => 'Informações da conta atualizadas com sucesso!',
        'greeting' => 'Olá :usuário!',
        'message' => 'Esta é uma notificação para deixar você saber que sua conta foi atualizada com sucesso!',
        'button_text' => 'Visite seu perfil',
    ],
    // Vendor Notifications
    'verdor_registered' => [
        'subject' => 'Novo fornecedor apenas registrado!',
        'greeting' => 'Parabéns!',
        'message' => 'Your marketplace :marketplace just got a new verdor with shop name <strong>:shop_name</strong> and the merchant\'s email address is :merchant_email',
        'button_text' => 'Ir para o Painel',
    ],
    // User/Merchant Notification
    'email_verification' => [
        'subject' => 'Verifique sua conta: marketplace!',
        'greeting' => 'Parabéns :usuário!',
        'message' => 'Sua conta foi criada com sucesso! Clique no botão abaixo para verificar seu endereço de e-mail.',
        'button_text' => 'Verificar Meu Email',
    ],
    // Version 1.2.6
    'dispute_solved' => [
        'subject' => 'Dispute [Order ID: :order_id] has been marked as solved!',
        'greeting' => 'Olá :cliente!',
        'message' => 'A disputa pelo ID da Ordem:: order_id foi marcado como resolvido. Obrigado por estar com a gente.',
        'button_text' => 'Visualizar a disputa',
    ],
];