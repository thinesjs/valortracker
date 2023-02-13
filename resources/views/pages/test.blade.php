@extends('parts.layout')

@section('content')

      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-titles">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-12 align-self-center">
              <h4 class="text-muted mb-0 fw-normal">Welcome username</h4>
              <h1 class="mb-0 fw-bold">Dashboard</h1>
            </div>
            <div
              class="
                col-lg-4 col-md-6
                d-none d-md-flex
                align-items-center
                justify-content-end
              "
            >
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- row -->
          <div class="row">
            <div class="col-lg-8">
                  <div class="card-group">
                      <div class="card">
                          <div class="card-body">
                    <span
                        class="
                        btn btn-xl btn-light-info
                        text-info
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="users"></i>
                    </span>
                              <h3 class="mt-3 pt-1 mb-0">
                                  39,354
                                  <span class="fs-2 ms-1 text-danger font-weight-medium"
                                  >-9%</span
                                  >
                              </h3>
                              <h6 class="text-muted mb-0 fw-normal">Customers</h6>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-body">
                    <span
                        class="
                        btn btn-xl btn-light-warning
                        text-warning
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="package"></i>
                    </span>
                              <h3 class="mt-3 pt-1 mb-0">
                                  4396
                                  <span class="fs-2 ms-1 text-success font-weight-medium"
                                  >+23%</span
                                  >
                              </h3>
                              <h6 class="text-muted mb-0 fw-normal">Products</h6>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-body">
                    <span
                        class="
                        btn btn-xl btn-light-danger
                        text-danger
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="bar-chart"></i>
                    </span>
                              <h3 class="mt-3 pt-1 mb-0 d-flex align-items-center">
                                  423,39
                                  <span class="fs-2 ms-1 text-success font-weight-medium"
                                  >+38%</span
                                  >
                              </h3>
                              <h6 class="text-muted mb-0 fw-normal">Sales</h6>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-body">
                    <span
                        class="
                        btn btn-xl btn-light-success
                        text-success
                        btn-circle
                        d-flex
                        align-items-center
                        justify-content-center
                      "
                    >
                      <i data-feather="refresh-cw"></i>
                    </span>
                              <h3 class="mt-3 pt-1 mb-0">
                                  835
                                  <span class="fs-2 ms-1 text-danger font-weight-medium"
                                  >-12%</span
                                  >
                              </h3>
                              <h6 class="text-muted mb-0 fw-normal">Refunds</h6>
                          </div>
                      </div>
                  </div>
              </div>
            <div class="col-lg-4">
              <div
                class="
                  card
                  welcome-card2
                  overflow-hidden
                  bg-light-info
                  border-0
                "
              >
                <div class="card-body">
                  <div class="d-flex align-items-start position-relative">
                    <div>
                      <h4 class="fw-bold">Earnings</h4>
                      <h2 class="text-primary">$63,438.78</h2>
                    </div>
                    <div class="ms-auto">
                      <span
                        class="
                          btn btn-lg btn-primary btn-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <i data-feather="dollar-sign"></i>
                      </span>
                    </div>
                  </div>
                  <a href="#" class="btn btn-info position-relative mt-2"
                    >Download</a
                  >
                </div>
              </div>
            </div>

            <!-- column -->
            <div class="col-lg-8">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h3 class="card-title">Products Performance</h3>
                      <h6 class="card-subtitle">Latest new products</h6>
                    </div>
                    <div class="ms-auto">
                      <ul class="list-style-none">
                        <li class="list-inline-item">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-primary
                              fs-1
                              me-1
                            "
                          ></i>
                          Expence
                        </li>
                        <li class="list-inline-item">
                          <i
                            class="
                              ri-checkbox-blank-circle-fill
                              text-warning
                              fs-1
                              me-1
                            "
                          ></i>
                          Budget
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-5 border-end">
                      <div class="pe-4">
                        <h3 class="fs-8 d-flex align-items-center mb-0">
                          $93,438.78
                          <span
                            class="
                              btn btn-circle btn-sm btn-success
                              fs-1
                              ms-2
                              d-flex
                              align-items-center
                              justify-content-center
                            "
                            >23%</span
                          >
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Budget</h6>
                        <h3 class="fs-8 d-flex align-items-center mb-0 mt-4">
                          $32,839.00
                        </h3>
                        <h6 class="fw-normal text-muted mb-0">Expence</h6>
                        <div class="mt-3 mb-4">
                          <div id="budget-expence-side-chart"></div>
                        </div>
                        <a href="#" class="btn btn-info">Download Report</a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div id="product-performance" class="ps-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column -->
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

@endsection
