<!DOCTYPE html>
<html lang="en-US" dir="ltr">
@include('layout.header')
<body data-sidebar="menuDashboard">
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Sidebar -->
            @include('layout.sidebar')
            <!-- Topbar -->
            @include('layout.topbar')

            <div class="content px-0 pt-9">
                <div class="p-5">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-8">
                                        <h2 class="mb-2">Nota's Dashboard</h2>
                                        <h5 class="text-700 fw-semi-bold">Here’s what’s going on at Notainclusion right now</h5>
                                    </div>
                                    <div class="row align-items-center g-4">
                                        <div class="col-12 col-md-auto">
                                            <div class="d-flex align-items-center">
                                                <span data-feather="users" style="height: 40px; width: 40px;color:#9633ff;"></span>
                                                <div class="ms-3">
                                                    <h4 class="mb-0">{{$countSpeakers}} speakers</h4>
                                                    <p class="text-800 fs--1 mb-0">Registered</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto">
                                            <div class="d-flex align-items-center">
                                                <span data-feather="clipboard" style="height: 40px; width: 40px;color:#5986ff;"></span>
                                                <div class="ms-3">
                                                    <h4 class="mb-0">{{$countProposalsGenerated}} Proposals</h4>
                                                    <p class="text-800 fs--1 mb-0">Generated</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto">
                                            <div class="d-flex align-items-center">
                                            <span data-feather="layout" style="height: 40px; width: 40px;color:#17dfff;"></span>
                                                <div class="ms-3">
                                                    <h4 class="mb-0">{{$countProposalsRequested}}  Proposals</h4>
                                                    <p class="text-800 fs--1 mb-0">Requested</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-5 mt-md-0">
                                    <div class="row g-3">
                                        <div class="col-12 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h5 class="mb-1">Proposals generated</h5>
                                                            <h6 class="text-700">Last month</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center px-4 py-4">
                                                        <img src="{{ asset('img/panelNota/icons/illustrations/16.png') }}" alt="" height="46" width="46" />
                                                    <h2>{{ $countThisMonthGenerated }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h5 class="mb-1">Proposals requested</h5>
                                                            <h6 class="text-700">Last month</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center px-4 py-4">
                                                        <img src="{{ asset('img/panelNota/icons/illustrations/26.png') }}" alt="" height="46" width="46" />
                                                        <h2>{{ $countThisMonthRequested }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5 border-top bg-white">
                    <div class="row flex-between-center mb-4 g-3">
                    <div class="col-auto">
                        <h3>Speakers by category</h3>
                        <p class="text-700 lh-sm mb-0">Registered categories </p>

                        <div class="row g-0 mt-5">
                            @foreach ($categories as $cat)
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">{{ $cat->title }}</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0"><?= \App\SpeakerCategories::where('id_category', $cat->id)->get()->count(); ?>

                                    </h3>
                                </div>
                            </div>
                            @endforeach
                            <!--<div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">DE&I (Diversity, Equity, & Inclusion)</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Racial Equity</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Mental Health</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Disability Awareness</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>

                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Intersectionality</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Allyship</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Development</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Leadership</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>

                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">LGBTQIA+ Pride Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Women's History Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Black History Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Hispanic Heritage Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>

                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Asian American and Pacific Island Heritage Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Military Family Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Breast Cancer Awareness Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Micro-aggressions</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>

                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Juneteenth</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Unconscious Bias</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Arab Heritage Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Social Activism</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>

                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Empathy in the Workplace</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">National Native American Heritage Month</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Female Empowerment</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Women in Leadership</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>

                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-bottom border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Self-love</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-success" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Healing</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Health and wellness</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-end-xl-0">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-info-300" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Workplace and Employee wellness</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">220</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <div class="dashboard-category-item align-items-sm-start justify-content-md-between flex-xxl-column ps-sm-3 ps-md-4 p-md-3 border-end">
                                    <div class="d-flex align-items-center mb-1">
                                        <span class="fa-solid fa-square fs--3 me-2 text-primary" data-fa-transform="up-2"></span><span class="mb-0 fs--1 text-900">Business leadership + management</span>
                                    </div>
                                    <h3 class="fw-semi-bold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0">80</h3>
                                </div>
                            </div>-->

                        </div>

                    </div>

                </div>
                </div>

                <!-- Footer -->
                @include('layout.footer')

            </div>

            <script>
                var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                var navbarTop = document.querySelector('.navbar-top');
                if (navbarTopStyle === 'darker') {
                    navbarTop.classList.add('navbar-darker');
                }

                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVertical && navbarVerticalStyle === 'darker') {
                    navbarVertical.classList.add('navbar-darker');
                }
            </script>

            <!-- assets -->
            @include('layout.assets')

        </div>
    </main>
</body>
</html>
