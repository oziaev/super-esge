<?php
/* Template Name: COMPANY - JP */
add_filter('pre_get_document_title', function() {
    return '会社概要 | ADFINITYS PTE.LTD.';
});

global $lang_switch_url;
$lang_switch_url = home_url('/company-en/');

get_header('ja');
?>
    <main id="company-jp" class="company">
      <section class="fv mainvisual">
        <div class="container">
          <h2 class="page-title">COMPANY</h2>
        </div>
      </section>

      <section class="company-box">
        <div class="container">
          <table class="company-table">
            <tr>
              <th>Name of Company</th>
              <td>ADFINITYS PTE.LTD.</td>
            </tr>
            <tr>
              <th>Registered Office Address</th>
              <td>111 NORTH BRIDGE ROAD, #20-05, PENINSULA PLAZA,SINGAPORE179098</td>
            </tr>
            <tr>
              <th>DIRECTOR</th>
              <td>CHEN XIAOKAI</td>
            </tr>
          </table>
        </div>
      </section>
    </main>

<?php get_footer('ja'); ?>