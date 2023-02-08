@extends('layout.mainlayout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Earnings (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Earnings (Annual)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Calculate My Salary!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <div class="text-sm"><b>Salary (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="salary" onkeyup="calculateSalary()"
                                            placeholder="First Name" value="0">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm"><b>Allowances (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="allowance"
                                            placeholder="Last Name" value="0">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm"><b>Bonus (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="bonus"
                                            placeholder="Last Name" value="0">
                                    </div>
                                </div>
                                <hr class="my-4">

                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <div class="text-sm"><b>EPF (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="epf"
                                            placeholder="First Name" value="0">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm"><b>SOCSO (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="socso"
                                            placeholder="Last Name" value="0">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm"><b>EIS (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="eis"
                                            placeholder="Last Name" value="0">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="text-sm"><b>TAX (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="tax"
                                            placeholder="First Name" value="0">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm"><b>TOTAL (RM)</b></div>
                                        <input type="text" class="form-control form-control-user" id="total"
                                            placeholder="Last Name" value="0">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"
                        style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        function calculateSalary() {
            var at = document.getElementById("salary").value;
            var age = document.getElementById("allowance").value;
            var fname = document.getElementById("bonus").value;

            // EPF calculation
            const EPF = (salary) => {
                const contributionRate = 0.11;
                return salary * contributionRate;
            }

            // SOCSO calculation
            const SOCSO = (salary) => {
                const contributionRate = 0.005;
                return salary * contributionRate;
            }

            // EIS calculation
            const EIS = (salary) => {
                const contributionRate = 0.01;
                return salary * contributionRate;
            }

            // Example usage
            const salary = 2900;
            console.log("EPF: " + EPF(salary));
            console.log("SOCSO: " + SOCSO(salary));
            console.log("EIS: " + EIS(salary));

        }
    </script>
@endsection
