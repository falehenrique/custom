<html class="" data-ember-extension="1">
  <head>
    <link rel="stylesheet prefetch" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/credit_card_form.css" media="screen" />
  </head>

  <div class="mp-box-inputs mp-line" id="mercadopago-form-coupon">
  </div>
  <div id="mercadopago-form-customer-and-card">
  </div>

 <div class="mp-box-inputs mp-col-100 mp-issuer">
            <label for="issuer"><?php echo $form_labels['form']['issuer']; ?> <em>*</em></label>
            <select id="issuer" data-checkout="issuer" name="mercadopago_custom[issuer]"></select>

            <span class="mp-error" id="mp-error-220" data-main="#issuer"> <?php echo $form_labels['error']['220']; ?> </span>
          </div>

  <div class="CCBackground">
    <div class="outercontainer">
      <div class="card-wrapper"></div>
      <div class="formcontainer" id="mercadopago-form">
        <form action="post.php" method="post">
         <div class="row">
            <div class="col-md-12">
              <input class="form-control" placeholder="Card Number" type="text" id="cardNumber" name="cardNumber" data-checkout="cardNumber" autocomplete="off" >
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <input class="form-control" placeholder="Full Name" type="text" id="cardholderName" name="cardholderName" data-checkout="cardholderName" autocomplete="off" >
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <input class="form-control" placeholder="MM/YY" type="text" id="expiry" name="expiry" data-checkout="expiry">
            </div>
            <div class="col-md-4">
              <input class="form-control" placeholder="CVC" type="text" id="securityCode" name="securityCode" data-checkout="securityCode" autocomplete="off" >
            </div>
          </div>
          <br>
            <select id="installments" class="form-control" placeholder="Installments"  data-checkout="installments" name="installments">
              <option value="" disabled selected>Installments</option>
            </select>
          <br>

          <div class="row">
            <div class="col-md-6 mp-docType">
              <input class="form-control" type="text" id="docType" placeholder="Doc. Type" data-checkout="docType" name="docType" autocomplete="off"/>
            </div>
            <div class="col-md-6">
              <input class="form-control" type="text" id="docNumber" placeholder="Document" data-checkout="docNumber" name="docNumber" autocomplete="off"/>
            </div>
          </div>
          <br>
          <div class="col-xs-12">
            <input type="hidden" id="amount" value="5249.99" name="amount"/>
            <input type="hidden" id="cardToken" value="" name="cardToken"/>
            <input type="hidden" id="discount" name="discount"/>
            <input type="hidden" id="cardExpirationMonth" value="" name="cardExpirationMonth"/>
            <input type="hidden" id="cardExpirationYear" value="" name="cardExpirationYear"/>
            <input type="hidden" id="site_id"  name="site_id"/>
            <input type="hidden" id="paymentMethodId" name="paymentMethodId"/>
            <input type="hidden" id="token" name="token"/>
            <input type="hidden" id="cardTruncated" name="cardTruncated"/>
            <input type="hidden" id="CustomerAndCard" name="CustomerAndCard"/>
          </div>
        </form>
      </div>
      <div class="text-right purchasebtn">
        <button class="btn btn-success">Purchase</button>
      </div>
    </div>
  </div>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="js/credit_card_form.js"></script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script src="js/MPv1.js?no_cache=<?php echo time(); ?>"></script>

<script type="text/javascript">

  $('input[data-checkout=expiry]').change(function() {
    if (this.value.length == 9) {
      var month = this.value.split('/')[0].trim();
      var year = this.value.split('/')[1].trim();
      $('#cardExpirationMonth').val(month);
      $('#cardExpirationYear').val(year);
    }

  });
  MPv1.debug = false;
  MPv1.Initialize('MLB', 'TEST-c7058257-126f-4b3f-aaee-f6217ac0377f', false, '', '');
</script>



