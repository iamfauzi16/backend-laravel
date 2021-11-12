@extends('layouts.dashboard')

@section('title')
    Dashboard Store Product

@endsection

@section('content')
<div id="page-content-wrapper">
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
      data-aos="fade-down"
    >
      <div class="container-fluid">
        <button
          class="btn btn-secondary d-md-none mr-auto mr-2"
          id="menu-toggle"
        >
          &laquo;menu
        </button>
        <button
          class="navbar-toggler ml-auto"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex ml-auto">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, Angga
              </a>
              <div class="dropdown-menu">
                <a href="/dashoard.html" class="dropdown-item"
                  >Dashboard</a
                >
                <a href="/dashboard-account.html" class="dropdown-item"
                  >Setting</a
                >
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart-filled.svg" alt="" />
                <div class="card-bagde">3</div>
              </a>
            </li>
          </ul>

          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="" class="nav-link">Hi,Angga</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link d-inline-block"> Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Section Content -->
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">My Products</h2>
          <p class="dashboard-category">Manage it well and get money</p>
        </div>
        <div class="dashboard-products">
          <div class="row">
            <div class="col-12">
              <a
                href="/dashboard-products-create.html"
                class="btn btn-success"
              >
                Add New Product</a
              >
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                href="/dashboard-products-details.html"
                class="card card-dashboard-product d-block"
              >
                <div class="card-body">
                  <img
                    src="/images/product-card-1.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                href="/dashboard-products-details.html"
                class="card card-dashboard-product d-block"
              >
                <div class="card-body">
                  <img
                    src="/images/product-card-2.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                href="/dashboard-products-details.html"
                class="card card-dashboard-product d-block"
              >
                <div class="card-body">
                  <img
                    src="/images/product-card-3.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                href="/dashboard-products-details.html"
                class="card card-dashboard-product d-block"
              >
                <div class="card-body">
                  <img
                    src="/images/product-card-4.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <a
                href="/dashboard-products-details.html"
                class="card card-dashboard-product d-block"
              >
                <div class="card-body">
                  <img
                    src="/images/product-card-5.png"
                    alt=""
                    class="w-100 mb-2"
                  />
                  <div class="product-title">Shirup Marzzan</div>
                  <div class="product-category">Foods</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

