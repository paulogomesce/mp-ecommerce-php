<?php
class NewPreferenceResponse{

    
        public $additional_info;
        public $auto_return;

        /*"back_urls": {
            "failure": "https://vitrinelivre.com.br/fale-conosco/",
            "pending": "https://vitrinelivre.com.br/devolucao-e-troca/",
            "success": "https://vitrinelivre.com.br/carrinho/"
        },*/

        public $binary_mode;
        public $client_id;
        public $collector_id;
        public $coupon_code;
        public $coupon_labels;
        public $date_created;
        public $date_of_expiration;
        public $expiration_date_from;
        public $expiration_date_to;
        public $expires;
        public $external_reference;
        public $id;
        public $init_point;
        public $internal_metadata;

        /*"items": [
            {
                "id": "1234",
                "category_id": "",
                "currency_id": "BRL",
                "description": "Celular de Tienda e-commerce",
                "picture_url": "https://vitrinelivre.com.br/vitrinelivre/wp-content/uploads/2017/12/Azul-Cromado-Marron-01.png",
                "title": "Nome do produto selecionado no carrinho de venda",
                "quantity": 1,
                "unit_price": 99.99
            }
        ],*/
		
        public $marketplace;
        public $marketplace_fee;
        public $metadata;
        public $notification_url;
        public $operation_type;

        /*"payer": {
            "phone": {
                "area_code": "55",
                "number": "98529-8743"
            },
            "address": {
                "zip_code": "78134-190",
                "street_name": "Insurgentes Sur",
                "street_number": "1602"
            },
            "email": "test_user_92801501@testuser.com",
            "identification": {
                "number": "725762927",
                "type": ""
            },
            "name": "Lalo Landa",
            "surname": "",
            "date_created": null,
            "last_purchase": null
        },*/

        /*"payment_methods": {
            "default_card_id": null,
            "default_payment_method_id": null,
            "excluded_payment_methods": [
                {
                    "id": "amex"
                }
            ],
            "excluded_payment_types": [
                {
                    "id": ""
                }
            ],
            "installments": 6,
            "default_installments": null
        },*/

        public $processing_modes;
        public $product_id;
        
        /*"redirect_urls": {
            "failure": "",
            "pending": "",
            "success": ""
        },*/

        public $sandbox_init_point;
        public $site_id;
        
        /*"shipments": {
            "default_shipping_method": null,
            "receiver_address": {
                "zip_code": "",
                "street_name": "",
                "street_number": null,
                "floor": "",
                "apartment": "",
                "city_name": null,
                "state_name": null,
                "country_name": null
            }
        },*/

        public $total_amount;
        public $last_updated;
    

}