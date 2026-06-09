<?php
/*
Template Name: Payment Page
*/
get_header();
?>

<!-- PAYMENT -->
<?php
  $pay_title_en = get_theme_mod('maged_payment_title_en', 'Payment Details');
  $pay_title_ar = get_theme_mod('maged_payment_title_ar', 'بيانات الدفع');
  $pay_sub_en   = get_theme_mod('maged_payment_subtitle_en', 'Choose the suitable payment method and copy details easily.');
  $pay_sub_ar   = get_theme_mod('maged_payment_subtitle_ar', 'اختر طريقة الدفع المناسبة لك وانسخ البيانات بسهولة.');

  $paypal_link  = get_theme_mod('maged_payment_paypal_link', 'https://paypal.me/elwaaa');
  $paypal_email = get_theme_mod('maged_payment_paypal_email', '3lwaaa+5@gmail.com');

  $stc_name     = get_theme_mod('maged_payment_stc_name', 'Ali Ahmed Abd elrazek Ahmed');
  $stc_iban     = get_theme_mod('maged_payment_stc_iban', 'EG070002023102310333000113743');
  $stc_bank     = get_theme_mod('maged_payment_stc_bank', 'Banque Misr');
  $stc_account  = get_theme_mod('maged_payment_stc_account', '2310333000113743');
  $stc_purpose  = get_theme_mod('maged_payment_stc_purpose', 'Family Support/Living Expenses');

  $rajhi_first  = get_theme_mod('maged_payment_rajhi_firstname', 'على');
  $rajhi_last   = get_theme_mod('maged_payment_rajhi_lastname', 'احمد عبدالرازق احمد');
  $rajhi_iban   = get_theme_mod('maged_payment_rajhi_iban', 'EG070002023102310333000113743');
  $rajhi_account= get_theme_mod('maged_payment_rajhi_account', '2310333000113743');
  $rajhi_swift  = get_theme_mod('maged_payment_rajhi_swift', 'BMISEGCXXXX');
  $rajhi_bank   = get_theme_mod('maged_payment_rajhi_bank', 'Banque Misr');
  $rajhi_branch = get_theme_mod('maged_payment_rajhi_branch', '101- All Branches (أو 231 - كفر الشيخ 50)');
  $rajhi_address= get_theme_mod('maged_payment_rajhi_address', 'مزلقان الانشاء والتعمير, Kafr El-Sheikh');
  $rajhi_postal = get_theme_mod('maged_payment_rajhi_postal', '33513');

  $int_city     = get_theme_mod('maged_payment_int_city', 'Kafr El-Sheikh');
  $int_state    = get_theme_mod('maged_payment_int_state', 'Kafr El-Sheikh Governorate');
  $int_country  = get_theme_mod('maged_payment_int_country', 'Egypt');
  $int_phone    = get_theme_mod('maged_payment_int_phone', '+20 100 224 1591');
?>
<section class="payment" id="payment">
  <h1 class="heading" data-aos="fade-up">
    <span data-en="<?php echo esc_attr($pay_title_en); ?>" data-ar="<?php echo esc_attr($pay_title_ar); ?>">
      <?php echo esc_html($pay_title_en); ?>
    </span>
  </h1>
  <p class="payment-subtitle" data-aos="fade-up" data-en="<?php echo esc_attr($pay_sub_en); ?>" data-ar="<?php echo esc_attr($pay_sub_ar); ?>">
    <?php echo esc_html($pay_sub_en); ?>
  </p>

  <div class="payment-methods" data-aos="fade-up">
    
    <!-- PayPal -->
    <?php if($paypal_link || $paypal_email) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fab fa-paypal"></i>
        <h3 data-en="PayPal Transfer" data-ar="تحويل PayPal">PayPal Transfer</h3>
      </div>
      <div class="payment-card-body">
        <?php if($paypal_link) : ?>
        <div class="payment-info-item">
          <span data-en="Direct Link:" data-ar="رابط الدفع المباشر:">Direct Link:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($paypal_link); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>
        <?php if($paypal_email) : ?>
        <div class="payment-info-item">
          <span data-en="Email:" data-ar="البريد الإلكتروني:">Email:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($paypal_email); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- STC Pay -->
    <?php if($stc_name || $stc_iban) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-wallet"></i>
        <h3 data-en="STC Pay (International)" data-ar="STC Pay (حوالة دولية)">STC Pay (International)</h3>
      </div>
      <div class="payment-card-body">
        <p class="payment-note" data-en="Via MoneyGram" data-ar="عبر MoneyGram (وليس ويسترن يونيون)">Via MoneyGram</p>
        
        <?php if($stc_name) : ?>
        <div class="payment-info-item">
          <span data-en="Name:" data-ar="الاسم:">Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_name); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_iban) : ?>
        <div class="payment-info-item">
          <span data-en="IBAN:" data-ar="IBAN:">IBAN:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_iban); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_bank) : ?>
        <div class="payment-info-item">
          <span data-en="Bank Name:" data-ar="اسم البنك:">Bank Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_bank); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_account) : ?>
        <div class="payment-info-item">
          <span data-en="Account Number:" data-ar="رقم الحساب:">Account Number:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_account); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($stc_purpose) : ?>
        <div class="payment-info-item">
          <span data-en="Purpose:" data-ar="الغرض من التحويل:">Purpose:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($stc_purpose); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- Al Rajhi Bank -->
    <?php if($rajhi_first || $rajhi_last || $rajhi_iban) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-university"></i>
        <h3 data-en="Al Rajhi Bank" data-ar="تحويل بنك الراجحي">Al Rajhi Bank</h3>
      </div>
      <div class="payment-card-body">
        
        <?php if($rajhi_first) : ?>
        <div class="payment-info-item">
          <span data-en="First Name:" data-ar="الاسم الأول:">First Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_first); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_last) : ?>
        <div class="payment-info-item">
          <span data-en="Last Name:" data-ar="اسم العائلة:">Last Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_last); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_iban) : ?>
        <div class="payment-info-item">
          <span data-en="IBAN:" data-ar="IBAN:">IBAN:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_iban); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_account) : ?>
        <div class="payment-info-item">
          <span data-en="Account Number:" data-ar="رقم الحساب:">Account Number:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_account); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_swift) : ?>
        <div class="payment-info-item">
          <span data-en="SWIFT Code:" data-ar="SWIFT Code:">SWIFT Code:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_swift); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_bank) : ?>
        <div class="payment-info-item">
          <span data-en="Bank Name:" data-ar="اسم البنك:">Bank Name:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_bank); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_postal) : ?>
        <div class="payment-info-item">
          <span data-en="Postal Code:" data-ar="الرمز البريدي:">Postal Code:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($rajhi_postal); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($rajhi_branch) : ?>
        <div class="payment-info-item">
          <span data-en="Branch:" data-ar="الفرع:">Branch:</span>
          <span class="payment-plain-text"><?php echo esc_html($rajhi_branch); ?></span>
        </div>
        <?php endif; ?>

        <?php if($rajhi_address) : ?>
        <div class="payment-info-item">
          <span data-en="Branch Address:" data-ar="عنوان الفرع:">Branch Address:</span>
          <span class="payment-plain-text"><?php echo esc_html($rajhi_address); ?></span>
        </div>
        <?php endif; ?>

      </div>
    </div>
    <?php endif; ?>

    <!-- International Bank Transfer -->
    <?php if($int_city || $int_state) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-globe"></i>
        <h3 data-en="Int. Bank Transfer (Extra)" data-ar="تحويل بنكي دولي (بيانات إضافية)">Int. Bank Transfer (Extra)</h3>
      </div>
      <div class="payment-card-body">
        <p class="payment-note" data-en="Required for some international transfers." data-ar="هذه البيانات قد تكون مطلوبة في بعض الحوالات الدولية.">Required for some international transfers.</p>
        
        <?php if($int_city) : ?>
        <div class="payment-info-item">
          <span data-en="City:" data-ar="المدينة / City:">City:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_city); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($int_state) : ?>
        <div class="payment-info-item">
          <span data-en="State/Province:" data-ar="الولاية/المحافظة:">State/Province:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_state); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($int_country) : ?>
        <div class="payment-info-item">
          <span data-en="Country:" data-ar="الدولة:">Country:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_country); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($int_phone) : ?>
        <div class="payment-info-item">
          <span data-en="Phone:" data-ar="رقم الهاتف:">Phone:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($int_phone); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

      </div>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
