@extends('layouts.dashboard')

@section('title')
    Dashboard Store Transaction

@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Transactions</h2>
        <p class="dashboard-subtitle">
          Look what you have made today!
        </p>
      </div>
        <div class="row">
          <div class="col-12 mt-2">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sell Products</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Products</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-1">
                                      <img src="/images/dashboard-icon-product-1.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                      Shirrup Marzane
                                    </div>
                                    <div class="col-md-3">
                                      Angga Risky
                                    </div>
                                    <div class="col-md-3">
                                      12 Januari, 2020
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                      <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>

                                    
                                  </div>
                                </div>
                                
                  </a>

                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                  
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-2.png" alt="">
                      </div>
                      <div class="col-md-4">
                        LeBrone X
                      </div>
                      <div class="col-md-3">
                        Masayashi
                      </div>
                      <div class="col-md-3">
                        11 Januari, 2020
                      </div>
                      <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="">
                      </div>

                      
                    </div>
                  </div>
                  
                  </a>

                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                  
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-3.png" alt="">
                      </div>
                      <div class="col-md-4">
                        Soffa Lembutte
                      </div>
                      <div class="col-md-3">
                        Shayna
                      </div>
                      <div class="col-md-3">
                        11 Januari, 2020
                      </div>
                      <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="">
                      </div>

                      
                    </div>
                  </div>
                  
                  </a>

              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-1">
                                      <img src="/images/dashboard-icon-product-1.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                      Shirrup Marzane
                                    </div>
                                    <div class="col-md-3">
                                      Angga Risky
                                    </div>
                                    <div class="col-md-3">
                                      12 Januari, 2020
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                      <img src="/images/dashboard-arrow-right.svg" alt="">
                                    </div>

                                    
                                  </div>
                                </div>
                                
                  </a>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

