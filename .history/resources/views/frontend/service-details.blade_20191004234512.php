@extends('frontend.layouts.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1080">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title text-theme-colored">Mechanical Industry</h3>
              <ul class="breadcrumb white">
                <li><a href="index-mp-layout1.html">Home</a></li>
                <li class="active">Mechanical Industry</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

       <!-- Section: Services Details -->
       <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="http://placehold.it/750x370" alt="">
              <h4 class="line-bottom text-uppercase mt-30 mb-20">Services Details</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>
              <!-- <h4 class="line-bottom text-uppercase mt-30 mb-20">Price Idea</h4>
              <ul id="myTab" class="nav nav-tabs boot-tabs">
                <li class="active"><a href="#small" data-toggle="tab">Hourly Plan</a></li>
                <li><a href="#medium" data-toggle="tab">Weekly Plan</a></li>
                <li><a href="#large" data-toggle="tab">Complate Project Plan</a></li>
              </ul> -->
              <!-- <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="small">
                  <h5><span class="text-theme-color-2">Price :</span> $350</h5>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh</p>
                </div> -->
                <!-- <div class="tab-pane fade" id="medium">
                  <h5><span class="text-theme-color-2">Price :</span> $420</h5>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh</p>
                </div> -->
                <!-- <div class="tab-pane fade" id="large">
                  <h5><span class="text-theme-color-2">Price :</span> $570</h5>
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh</p>
                </div> -->
              <!-- </div> -->

            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
              <div class="widget">
                <div class="services-list">
                  <ul class="list mt-0">
                    <li class="active"><a href="page-mechanical-industry.html">Mechanical Industry</a></li>
                    <li><a href="page-chemical-industry.html">Chemical Industry</a></li>
                    <li><a href="page-construction-industry.html">Construction Industry</a></li>
                    <li><a href="page-metal-industry.html">Metal Industry</a></li>
                    <li><a href="page-automobile-industry.html">Automobile Industry</a></li>
                    <li><a href="page-wood-industry.html">Wood Industry</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Download Brochures</h4>
                <div class="brochured">
                  <ul class="list">
                    <li><a href="#"><i class="fa fa-file-word-o"></i>Download Doc</a></li>
                    <li><a href="#"><i class="fa fa-file-pdf-o"></i>Download Pdf</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Quick Contact</h4>
                <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
                  <div class="form-group">
                    <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

                <!-- Quick Contact Form Validation-->
                <script type="text/javascript">
                  $("#quick_contact_form_sidebar").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 </div>

@endsection
