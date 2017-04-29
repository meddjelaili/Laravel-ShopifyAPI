<?php

return [


    'key' =>env('SHOPIFY_KEY'),

    'secret' => env('SHOPIFY_SECRET'),

    'redirectURL' => env('SHOPIFY_REDIRECT'),

    'scopes' => [
            'read_content', 'write_content', 'read_themes', 'write_themes',
            'read_products', 'write_products', 'read_customers', 'write_customers',
            'read_orders', 'write_orders', 'read_draft_orders', 'write_draft_orders',
            'read_script_tags', 'write_script_tags', 'read_fulfillments', 'write_fulfillments',
            'read_shipping', 'write_shipping', 'read_analytics', 'read_users', 'write_users',
            'read_checkouts', 'write_checkouts', 'read_reports', 'write_reports'
    ],


];