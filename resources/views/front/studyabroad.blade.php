@extends('front.layouts.app')
@section('content')
<section class="breadcrumb" style="background-image: url(./img/page-top.JPG); padding-top: 84px;">
     <div class="container">
          <h1>Australia</h1>
     </div>
</section>

<div class="page-wrapper">
     <div class="row">
          <div class="col-md-12 col-sm-12">
               <h3>About Australia</h3>
          </div>
          <div class="col-md-9">
               <div class="australia-detail">
                    <p>Australia is safe, multicultural and friendly society where international students can easily
                         adjust in Australian lifestyle.Australian education system had made it third in the list of
                         enrolling international students after the USA & UK. Australia has the best 5 cities of the
                         world for students on multicultural environment, affordability, and quality and employer
                         activity. Australia offers globally recognized qualification and safest study and living
                         environment. Australian education system is the best in the world with technological drive.
                         Australia brings the best education services, facilities with strict quality standards that
                         meet the need of the most international students. Australia offers a diverse range of study
                         options for international students, with more than 1,100 institutions and over 22,000
                         courses.International Students can study at all levels of education from primary and secondary
                         school, to vocational education and training (VET), from English language courses to higher
                         education.

                         As an international student on a student visa, you must study with an institution and in a
                         course that is registered on the Commonwealth Register of Institutions and Courses for Overseas
                         Students (CRICOS). CRICOS registration guarantees that the course and the institution at which
                         you study meet the high standards expected by international students. Along with the ESOS Act
                         and National Code, there are also regulatory and quality assurance organisations for higher
                         education and VET institutions. These government organisations are responsible for registration
                         of institutions and accreditation of courses. These organisations are:</p>
               </div>
          </div>
          <div class="col-md-3">
               <div class="detail-img">
                    <img width="100%" height="200px !important" src="./img/australia.png" alt="">
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-md-12 .col-sm-12">
               <div class="detail-toggle">
                    <div id="accordion">
                         <div class="card">
                              <div class="card-header" id="headingOne">
                                   <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                             aria-expanded="true" aria-controls="collapseOne">
                                             Scholarships in Australia for International Students:
                                        </button>
                                   </h5>
                              </div>

                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                   data-parent="#accordion">
                                   <div class="card-body">
                                        There are many grants, scholarships and bursaries available to assist
                                        International students financially in Australia. The Australian Government has
                                        invested over a $300 million in scholarships for international students. Please
                                        call us for more information in this regard. You can also find more information
                                        this link:
                                        https://www.studyinaustralia.gov.au/English/Australian-Education/Scholarships
                                   </div>
                              </div>
                         </div>
                         <div class="card">
                              <div class="card-header" id="headingTwo">
                                   <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                             data-target="#collapseTwo" aria-expanded="false"
                                             aria-controls="collapseTwo">
                                             Application Process
                                        </button>
                                   </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                   data-parent="#accordion">
                                   <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                   </div>
                              </div>
                         </div>
                         <div class="card">
                              <div class="card-header" id="headingThree">
                                   <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                             data-target="#collapseThree" aria-expanded="false"
                                             aria-controls="collapseThree">
                                             Entry Requirements/Eligibility
                                        </button>
                                   </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                   data-parent="#accordion">
                                   <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection