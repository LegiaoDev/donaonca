## Este é o site da Dona Onça

### Como alterar o banco de dados

UPDATE wp_options SET option_value = replace(option_value, 'http://donaonca-shop.umbler.net', 'https://donaonca.shop') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = replace(guid, 'http://donaonca-shop.umbler.net','https://donaonca.shop');

UPDATE wp_posts SET post_content = replace(post_content, 'http://donaonca-shop.umbler.net', 'https://donaonca.shop');

UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://donaonca-shop.umbler.net','https://donaonca.shop');
