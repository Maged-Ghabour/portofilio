<?php
/*
Template Name: Payment Page
*/
get_header();
?>

<!-- PAYMENT -->
<?php
  // Helper function to get ACF field with Theme Mod fallback
  function get_payment_data($key, $default) {
      if (function_exists('get_field')) {
          $val = get_field($key);
          if (!empty($val)) return $val;
      }
      return get_theme_mod($key, $default);
  }

  $pay_title_en = get_payment_data('maged_payment_title_en', 'Payment Details');
  $pay_title_ar = get_payment_data('maged_payment_title_ar', 'بيانات الدفع');
  $pay_sub_en   = get_payment_data('maged_payment_subtitle_en', 'Choose the suitable payment method and copy details easily.');
  $pay_sub_ar   = get_payment_data('maged_payment_subtitle_ar', 'اختر طريقة الدفع المناسبة لك وانسخ البيانات بسهولة.');

  $paypal_currency = get_payment_data('maged_payment_paypal_currency', 'USD');
  $paypal_link  = get_payment_data('maged_payment_paypal_link', 'https://paypal.me/elwaaa');
  $paypal_email = get_payment_data('maged_payment_paypal_email', '3lwaaa+5@gmail.com');

  $stc_currency = get_payment_data('maged_payment_stc_currency', 'SAR');
  $stc_name     = get_payment_data('maged_payment_stc_name', 'Ali Ahmed Abd elrazek Ahmed');
  $stc_iban     = get_payment_data('maged_payment_stc_iban', 'EG070002023102310333000113743');
  $stc_bank     = get_payment_data('maged_payment_stc_bank', 'Banque Misr');
  $stc_account  = get_payment_data('maged_payment_stc_account', '2310333000113743');
  $stc_purpose  = get_payment_data('maged_payment_stc_purpose', 'Family Support/Living Expenses');

  $rajhi_currency = get_payment_data('maged_payment_rajhi_currency', 'SAR');
  $rajhi_first  = get_payment_data('maged_payment_rajhi_firstname', 'على');
  $rajhi_last   = get_payment_data('maged_payment_rajhi_lastname', 'احمد عبدالرازق احمد');
  $rajhi_iban   = get_payment_data('maged_payment_rajhi_iban', 'EG070002023102310333000113743');
  $rajhi_account= get_payment_data('maged_payment_rajhi_account', '2310333000113743');
  $rajhi_swift  = get_payment_data('maged_payment_rajhi_swift', 'BMISEGCXXXX');
  $rajhi_bank   = get_payment_data('maged_payment_rajhi_bank', 'Banque Misr');
  $rajhi_branch = get_payment_data('maged_payment_rajhi_branch', '101- All Branches (أو 231 - كفر الشيخ 50)');
  $rajhi_address= get_payment_data('maged_payment_rajhi_address', 'مزلقان الانشاء والتعمير, Kafr El-Sheikh');
  $rajhi_postal = get_payment_data('maged_payment_rajhi_postal', '33513');

  $int_currency = get_payment_data('maged_payment_int_currency', 'USD');
  $int_city     = get_payment_data('maged_payment_int_city', 'Kafr El-Sheikh');
  $int_state    = get_payment_data('maged_payment_int_state', 'Kafr El-Sheikh Governorate');
  $int_country  = get_payment_data('maged_payment_int_country', 'Egypt');
  $int_phone    = get_payment_data('maged_payment_int_phone', '+20 100 224 1591');

  $instapay_currency = get_payment_data('maged_payment_instapay_currency', 'EGP');
  $instapay_acc1  = get_payment_data('maged_payment_instapay_acc1', 'magedghabour@instapay');
  $instapay_link1 = get_payment_data('maged_payment_instapay_link1', '');
  $instapay_acc2  = get_payment_data('maged_payment_instapay_acc2', 'megoghabour@instapay');
  $instapay_link2 = get_payment_data('maged_payment_instapay_link2', '');
  $instapay_phone = get_payment_data('maged_payment_instapay_phone', '01284867755');

  $vf_barq_currency = get_payment_data('maged_payment_vf_barq_currency', 'EGP');
  $vf_barq_name   = get_payment_data('maged_payment_vf_barq_name', 'Ali Ahmed Abd elrazek Ahmed');
  $vf_barq_phone1 = get_payment_data('maged_payment_vf_barq_phone1', '01002241591');
  $vf_barq_img    = get_payment_data('maged_payment_vf_barq_img', '');
  $vf_barq_phone2 = get_payment_data('maged_payment_vf_barq_phone2', '01002241591');


  $notes_title_en = get_payment_data('maged_payment_notes_title_en', 'Important Notes');
  $notes_title_ar = get_payment_data('maged_payment_notes_title_ar', 'ملاحظات هامة');
  $notes_1_en     = get_payment_data('maged_payment_notes_1_en', 'After completing the transfer, please send a screenshot of the receipt via WhatsApp to confirm the payment.');
  $notes_1_ar     = get_payment_data('maged_payment_notes_1_ar', 'بعد إتمام عملية التحويل، يرجى إرسال لقطة شاشة (Screenshot) للإيصال عبر الواتساب لتأكيد الدفع.');
  $notes_2_en     = get_payment_data('maged_payment_notes_2_en', 'International transfers take from 2 to 4 working days to appear in the account.');
  $notes_2_ar     = get_payment_data('maged_payment_notes_2_ar', 'تستغرق الحوالات الدولية من يومين إلى 4 أيام عمل لتظهر في الحساب.');
  $notes_btn_en   = get_payment_data('maged_payment_notes_btn_en', 'Send Payment Proof');
  $notes_btn_ar   = get_payment_data('maged_payment_notes_btn_ar', 'إرسال إثبات الدفع');
  $notes_wa_link  = get_payment_data('maged_payment_notes_wa_link', 'https://wa.me/201007852746');
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
        <?php if($paypal_currency): ?><span class="currency-badge currency-<?php echo strtolower($paypal_currency); ?>"><?php echo esc_html($paypal_currency); ?></span><?php endif; ?>
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
        <?php if($stc_currency): ?><span class="currency-badge currency-<?php echo strtolower($stc_currency); ?>"><?php echo esc_html($stc_currency); ?></span><?php endif; ?>
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
        <?php if($rajhi_currency): ?><span class="currency-badge currency-<?php echo strtolower($rajhi_currency); ?>"><?php echo esc_html($rajhi_currency); ?></span><?php endif; ?>
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

    <!-- InstaPay Egypt -->
    <?php if($instapay_acc1 || $instapay_acc2 || $instapay_phone) : ?>
    <div class="payment-card">
      <div class="payment-card-header">
        <i class="fas fa-bolt"></i>
        <h3 data-en="InstaPay Egypt" data-ar="انستا باي مصر">InstaPay Egypt</h3>
        <?php if($instapay_currency): ?><span class="currency-badge currency-<?php echo strtolower($instapay_currency); ?>"><?php echo esc_html($instapay_currency); ?></span><?php endif; ?>
      </div>
      <div class="payment-card-body">
        
        <?php if($instapay_acc1) : ?>
        <div class="payment-info-item">
          <span data-en="Account 1:" data-ar="الحساب الأول:">Account 1:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($instapay_acc1); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php if($instapay_link1) : ?>
        <div class="payment-info-item" style="align-items: center;">
          <span data-en="Direct Pay:" data-ar="الدفع المباشر:">Direct Pay:</span>
          <a href="<?php echo esc_url($instapay_link1); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 1.2rem; display: inline-flex; align-items: center; gap: 0.5rem;">
            <i class="fas fa-external-link-alt"></i> <span data-en="Pay Now" data-ar="ادفع الآن">Pay Now</span>
          </a>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <?php if($instapay_acc2) : ?>
        <div class="payment-info-item">
          <span data-en="Account 2:" data-ar="الحساب الثاني:">Account 2:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($instapay_acc2); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php if($instapay_link2) : ?>
        <div class="payment-info-item" style="align-items: center;">
          <span data-en="Direct Pay:" data-ar="الدفع المباشر:">Direct Pay:</span>
          <a href="<?php echo esc_url($instapay_link2); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 1.2rem; display: inline-flex; align-items: center; gap: 0.5rem;">
            <i class="fas fa-external-link-alt"></i> <span data-en="Pay Now" data-ar="ادفع الآن">Pay Now</span>
          </a>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <?php if($instapay_phone) : ?>
        <div class="payment-info-item">
          <span data-en="Phone Number:" data-ar="رقم الجوال:">Phone Number:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($instapay_phone); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

      </div>
    </div>
    <?php endif; ?>

    <!-- Vodafone Cash Barq -->
    <?php if($vf_barq_phone1 || $vf_barq_phone2) : ?>
    <div class="payment-card payment-card-barq">
      <div class="payment-card-header-barq">
        <h3 data-en="International Transfer via Barq on Vodafone Cash" data-ar="تحويل دولي على المحفظة باستخدام برق على فودافون كاش">تحويل دولي على المحفظة باستخدام برق على فودافون كاش</h3>
        <?php if($vf_barq_currency): ?><span class="currency-badge currency-<?php echo strtolower($vf_barq_currency); ?>" style="margin-top: 1rem; display: inline-block;"><?php echo esc_html($vf_barq_currency); ?></span><?php endif; ?>
      </div>
      <div class="payment-card-body">
        
        <div class="barq-subtitle" data-en="Via Barq app to transfer to Meeza Vodafone Cash wallet" data-ar="عبر تطبيق برق لتحويل لمحفظة ميزا فودافون كاش">عبر تطبيق برق لتحويل لمحفظة ميزا فودافون كاش</div>

        <?php if($vf_barq_name) : ?>
        <div class="payment-info-item">
          <span data-en="Name:" data-ar="الاسم:">الاسم:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($vf_barq_name); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($vf_barq_phone1) : ?>
        <div class="payment-info-item">
          <span data-en="Phone Number:" data-ar="رقم الهاتف:">رقم الهاتف:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($vf_barq_phone1); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        <?php endif; ?>

        <?php if($vf_barq_img) : ?>
        <div class="payment-info-item">
          <a href="<?php echo esc_url($vf_barq_img); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-block" style="text-align: center; border-radius: .5rem; padding: 1.2rem; font-size: 1.4rem; display: block; width: 100%;">
            <span data-en="Illustrative Image" data-ar="صورة توضيحية">صورة توضيحية</span>
          </a>
        </div>
        <?php endif; ?>

        <?php if($vf_barq_phone2) : ?>
        <hr class="barq-divider">
        <div class="barq-subtitle" data-en="Or transfer from inside Egypt directly" data-ar="او التحويل من داخل مصر مباشرة">او التحويل من داخل مصر مباشرة</div>

        <div class="payment-info-item">
          <span data-en="Phone Number:" data-ar="رقم الهاتف:">رقم الهاتف:</span>
          <div class="copy-wrapper">
            <input type="text" value="<?php echo esc_attr($vf_barq_phone2); ?>" readonly>
            <button type="button" class="copy-btn" onclick="magedCopyText(this)"><i class="fas fa-copy"></i></button>
          </div>
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

  <!-- Important Notes -->
  <div class="payment-notes-card" data-aos="fade-up">
    <h3 class="notes-title" data-en="<?php echo esc_attr($notes_title_en); ?>" data-ar="<?php echo esc_attr($notes_title_ar); ?>">
      <?php echo esc_html($notes_title_en); ?>
    </h3>
    <div class="notes-content">
      <div class="notes-action">
        <a href="<?php echo esc_url($notes_wa_link); ?>" target="_blank" rel="noopener noreferrer" class="btn-whatsapp-glow">
          <i class="fab fa-whatsapp"></i>
          <span data-en="<?php echo esc_attr($notes_btn_en); ?>" data-ar="<?php echo esc_attr($notes_btn_ar); ?>">
            <?php echo esc_html($notes_btn_en); ?>
          </span>
        </a>
      </div>
      <ul class="notes-list">
        <?php if($notes_1_en || $notes_1_ar) : ?>
        <li>
          <i class="fas fa-check-circle"></i>
          <span data-en="<?php echo esc_attr($notes_1_en); ?>" data-ar="<?php echo esc_attr($notes_1_ar); ?>">
            <?php echo esc_html($notes_1_en); ?>
          </span>
        </li>
        <?php endif; ?>
        <?php if($notes_2_en || $notes_2_ar) : ?>
        <li>
          <i class="far fa-clock"></i>
          <span data-en="<?php echo esc_attr($notes_2_en); ?>" data-ar="<?php echo esc_attr($notes_2_ar); ?>">
            <?php echo esc_html($notes_2_en); ?>
          </span>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>

</section>

<?php get_footer(); ?>
