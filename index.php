<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-3268566607730450-111016-ac2dabfeb2265dc9e52e6e58cbcbc04c-1236365320');


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
<div>
  <p>Hola</p>
  <script
    src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
    data-preference-id="<?php echo $preference->id; ?>">
  </script>
</div>