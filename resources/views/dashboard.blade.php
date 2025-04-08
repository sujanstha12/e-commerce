@extends('admin.layout.master')
@section('container')

    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>Dashboard</h2>
             </div>
          </div>
       </div>
       <div class="row column1">
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-user yellow_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">2500</p>
                      <p class="head_couter">Welcome</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-clock-o blue1_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">123.50</p>
                      <p class="head_couter">Average Time</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-cloud-download green_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">1,805</p>
                      <p class="head_couter">Collections</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                   <div>
                      <i class="fa fa-comments-o red_color"></i>
                   </div>
                </div>
                <div class="counter_no">
                   <div>
                      <p class="total_no">54</p>
                      <p class="head_couter">Comments</p>
                   </div>
                </div>
             </div>
          </div>
       </div>

       <!-- graph -->

       <!-- end graph -->
       <div class="row column3">
          <!-- testimonial -->
          <div class="col-md-6">
             <div class="dark_bg full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Testimonial</h2>
                   </div>
                </div>
                <div class="full graph_revenue">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="content testimonial">
                            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                               <!-- Wrapper for carousel items -->
                               <div class="carousel-inner">
                                  <div class="item carousel-item active">
                                     <div class="img-box"><img src="https://th.bing.com/th/id/OIP.BsKfLXkkyMCwANx4vRz8SgHaHa?w=200&h=200&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt=""></div>
                                     <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                     <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                  </div>
                                  <div class="item carousel-item">
                                     <div class="img-box"><img src="{{ asset('assets/images/layout_img/user_img.jpg')}}" alt=""></div>
                                     <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                     <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                  </div>
                                  <div class="item carousel-item">
                                     <div class="img-box"><img src="{{ asset('assets/images/layout_img/user_img.jpg')}}" alt=""></div>
                                     <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                     <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                  </div>
                               </div>
                               <!-- Carousel controls -->
                               <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                               <i class="fa fa-angle-left"></i>
                               </a>
                               <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                               <i class="fa fa-angle-right"></i>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- end testimonial -->
          <!-- progress bar -->
          <div class="col-md-6">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>Progress Bar</h2>
                   </div>
                </div>
                <div class="full progress_bar_inner">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="progress_bar">
                            <!-- Skill Bars -->
                            <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>
                            <div class="progress skill-bar ">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                               </div>
                            </div>
                            <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                               </div>
                            </div>
                            <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                               </div>
                            </div>
                            <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                               </div>
                            </div>
                            <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                            <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- end progress bar -->
       </div>

    </div>



@endsection
