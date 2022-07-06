@extends('layouts.base')
@section('content')
    <!-- Row-1 -->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Dashboard</h4>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">Total Users</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $users }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">This Month Sale</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">Rs {{ $thisMonthSale }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">This Month Sale in litters</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $thisMonthSaleLitter }} Litters</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">This Month Purchase</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">Rs {{ $thisMonthPurchase }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">This Month Purchase in Litters</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $thisMonthPurchaseLitter }} Litters</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">Total Sale Till Now</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">Rs {{ $totalSale }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0 dash4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                            <div class="">
                                <span class="fs-14 font-weight-normal">Total Purchase Till Now</span>
                                <h2 class="mb-2 number-font carn1 font-weight-bold">Rs {{ $totalPurchase }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14 font-weight-normal">Remaining Stock of Petrol</span>
                                    <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $remainingStockPetrol }} Litters</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14 font-weight-normal">Remaining Stock of Diesle</span>
                                    <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $remainingStockDesile }} Litters</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14 font-weight-normal">Remaining Stock of Mob Oil</span>
                                    <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $remainingStockMobOil }} Litters</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

    </div>
    <!-- End Row-1 -->
@endsection
