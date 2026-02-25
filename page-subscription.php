<?php
/**
 * Template Name: Subscription Custom
 */

get_header();

?>

<link href="https://fonts.googleapis.com/css2?family=Varela+Round" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'>

<div class="mt-0 w-100">
    <section class="subscription-banner" style="--banner-img: url('<?php echo home_url('/wp-content/uploads/2026/02/subscription-banner.jpg'); ?>'); --banner-img-mobile: url('<?php echo home_url('/wp-content/uploads/2026/02/subscription-banner-mobile.jpg'); ?>');">
        <div class="container-fluid px-md-5">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 subscription-banner-content">
                    <h1 class="font-fredoka-one">
                        Subscription Plans
                    </h1>
                    <p class="font-valera-round mt-3">
                        Select the ideal Edufrienz 99 plan for your home learning and school growth.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <nav class="font-valera-round" aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent p-0 my-5" style="font-size: large;">
        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>" style="color: #10a9ee">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Subscription Plans</li>
        </ol>
    </nav>

    <section class="content-section mb-5">
        <div class="container-fluid px-md-5">
            <ul class="nav nav-pills justify-content-center font-valera-round m-0 gap-3" id="subscriptionTab" role="tablist">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home Plans</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="school-tab" data-toggle="tab" data-target="#school" type="button" role="tab" aria-controls="school" aria-selected="false">School Plans</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="credits-tab" data-toggle="tab" data-target="#credits" type="button" role="tab" aria-controls="credits" aria-selected="false">Credit usage details</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="tutorials-tab" data-toggle="tab" data-target="#tutorials" type="button" role="tab" aria-controls="tutorials" aria-selected="false">Access Tutorials & FAQs</button>
                </li>
            </ul>

            <div class="tab-content" id="subscriptionTabContent">
                <div class="tab-pane fade show active mt-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h2 class="font-fredoka-one section-title">Home Plans</h2>
                    <p class="mb-4 font-valera-round text-center" style="font-size: larger;">The best value with flexible plans for your home learning journey</p>
                    <!-- Baris pertama: Premium Plan di tengah -->
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card premium d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">Premium Plan - Home</h3>
                                        <p class="plan-desc">
                                            Complete 360 access to the full Edufrienz 99 learning experience.
                                        </p>
                                        <div class="plan-price-small"><del>$95.99</del></div>
                                        <div class="plan-price my-2">$79.99 
                                            <div class="d-flex flex-wrap flex-column">
                                                <sup class="plan-date font-valera-round">/year</sup>
                                                <sup class="plan-save font-fredoka badge mb-auto p-1">20% Savings</sup>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo home_url('/products/subscriptions/edufrienz-individual-subscription-1-year-premium/') ?>" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Subscribe here
                                    </a>
                                    <div class="text-right mt-2" style="color:#005B8A; font-size:20px;">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <i class="fas fa-star" <?= $i < 4 ? 'style="margin-right:2px;"' : '' ?>></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in this plan <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Get 100 monthly credits</li>
                                        <li>Access for 2 users</li>
                                        <li>Access to 21st century skills resources(Executive Function & Life Skills)</li>
                                        <li>Access all online learning games</li>
                                        <li>Access to STEM Worksheets</li>
                                        <li>Access to paid learning videos</li>
                                        <li>Access to Social Emotional Learning Resources (Educators)</li>
                                        <li>Access to Social Emotional Learning Resources (Students)</li>
                                        <li>Access to Academic Support (core subjects)</li>
                                        <li>Access to Learning Activity worksheets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Baris kedua: tiga card lainnya -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">30-day Free Trial</h3>
                                        <p class="plan-desc">
                                            Experience our learning resources before subscribing.
                                        </p>
                                        <div class="plan-price my-2">$0.00</div>
                                    </div>
                                    <a href="<?php echo home_url('/products/subscriptions/edufrienz-individual-subscription-1-month/')?>" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Get free trial
                                    </a>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in free trial <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Register and start exploring</li>
                                        <li>No credit card required</li>
                                        <li>Download up to 20 printables and worksheets</li>
                                        <li>Free access to Academic Support (core subjects)</li>
                                        <li>Free access to Learning Activity worksheets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">Lite Plan - Home</h3>
                                        <p class="plan-desc">
                                            Essential access for home learning and basic usage.
                                        </p>
                                        <div class="plan-price my-2">$29.99 
                                            <sup class="plan-date font-valera-round">/year</sup>
                                        </div>
                                    </div>
                                    <a href="<?php echo home_url('/products/subscriptions/edufrienz-school-org-subscription-1-year/') ?>" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Subscribe here
                                    </a>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in this plan <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Get 25 monthly credits</li>
                                        <li>Access SEL interactive and online learning games</li>
                                        <li>Access to STEM Worksheets</li>
                                        <li>Access to paid learning videos</li>
                                        <li>Access to Social Emotional Learning Resources (Educators)</li>
                                        <li>Access to Social Emotional Learning Resources (Students)</li>
                                        <li>Access to Academic Support (core subjects)</li>
                                        <li>Access to Learning Activity worksheets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">Standard Plan - Home</h3>
                                        <p class="plan-desc">
                                            Extended access for regular and consistent learning needs.
                                        </p>
                                        <div class="plan-price my-2">$59.99 
                                            <sup class="plan-date font-valera-round">/year</sup>
                                        </div>
                                    </div>
                                    <a href="<?php echo home_url('/products/subscriptions/edufrienz-individual-subscription-1-year/') ?>" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Subscribe here
                                    </a>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in this plan <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Get 75 monthly credits</li>
                                        <li>Access for 2 users</li>
                                        <li>Access SEL interactive and online learning games</li>
                                        <li>Access to STEM Worksheets</li>
                                        <li>Access to paid learning videos</li>
                                        <li>Access to Social Emotional Learning Resources (Educators)</li>
                                        <li>Access to Social Emotional Learning Resources (Students)</li>
                                        <li>Access to Academic Support (core subjects)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="font-fredoka-one section-title">Compare Features Across <br> All Home Plans</h2>
                    <div class="table-responsive overflow-auto">
                        <table class="table table-bordered bg-white text-center">
                            <thead class="font-fredoka-one">
                                <tr style="background-color: #00aeff; color: white;">
                                    <th>Benefits</th>
                                    <th>30-day free trial</th>
                                    <th>Lite Plan - Home</th>
                                    <th>Standard Plan - Home</th>
                                    <th>Premium Plan - Home</th>
                                </tr>
                            </thead>
                            <tbody id="home-table-body">
                                <tr class="font-valera-round">
                                    <td class="font-weight-bold">Available Credit</td>
                                    <td>0</td>
                                    <td>25</td>
                                    <td>75</td>
                                    <td>100</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>
                                        <p class="font-weight-bold mb-0">Simultaneous Users</p>
                                        <p class="font-italic">Number of people who can be logged in and using the account at the same time.</p>
                                    </td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Interactive Game Access</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Interactive Games</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Online Learning Games</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>21st Century Skills Interactive Games</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Paid Learning Video Access</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Basic SEL Video</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Basic Learning Video</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Parental Guides Video</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Downloadable Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">21st Century Skills</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Executive Functioning Guides</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Executive Functioning Workbooks</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Life Skills Lesson Plans</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Life Skills Workbook/Worksheets</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Life Skills Posters</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>21st Century Skills Curriculum</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>5 Core Competencies Curriculum</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Social Emotional Learning</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Teaching & Learning Tools</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Curriculum</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Training for Teachers</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Modules</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Lesson Plans</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Assessments</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">SEL Students Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Core SEL Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Advanced Ebooks</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Junior Ebooks</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Workbook/Worksheets</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Supporting Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Wall Arts</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Stationery</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Posters</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Activities & Games</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">STEM</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>STEM Worksheets</td>
                                    <td><i class="fas fa-times text-danger"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Academic Support (Core Subjects)</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">English</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>English Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Grammar Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Reading Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Writing Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Mathematics</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Math Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Science</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Science Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Environmental Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Chinese</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Chinese Sheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Chinese Activity Sheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Chinese Writing Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Knowledge & Exploration</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Academic Posters</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>General Awareness</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Learning Activity</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Coloring</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Coloring Pages  (Lumi Frienz Edition)</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Coloring Pages</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Drawing</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Drawing Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Origami</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Origami Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Brain Boosters</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Word Search Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Motivational Wall Arts</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Educational Worksheets</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="5" class="font-weight-bold text-center">Digital Stationery</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Digital Stationery</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Greeting Cards</td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                    <td><i class="fas fa-check text-success"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="home" class="text-center mt-4 font-valera-round">
                        <a href="#" class="btn btn-lg text-white px-4" style="background-color: #00aeff;">See full comparison</a>
                    </div>
                </div>

                <div class="tab-pane fade mt-5" id="school" role="tabpanel" aria-labelledby="school-tab">
                    <h2 class="font-fredoka-one section-title">School Plans</h2>
                    <p class="mb-4 font-valera-round text-center" style="font-size: larger;">Edufrienz 99 plan to enhance your school's learning outcomes and development.</p>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">Lite Plan - Teacher</h3>
                                        <p class="plan-desc">
                                            Basic access to key Edufrienz 99 resources for schools.
                                        </p>
                                        <div class="plan-price my-2">
                                            $99.99 <sup class="plan-date font-valera-round">/year</sup>
                                        </div>
                                    </div>
                                    <a href="https://api.whatsapp.com/send/?phone=6596935989&text&type=phone_number&app_absent=0" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in this plan <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Get 25 monthly credits</li>
                                        <li>Access SEL interactive and online learning games</li>
                                        <li>Access to STEM Worksheets</li>
                                        <li>Access to paid learning videos</li>
                                        <li>Access to Social Emotional Learning Resources (Educators)</li>
                                        <li>Access to Social Emotional Learning Resources (Students)</li>
                                        <li>Access to Academic Support (core subjects)</li>
                                        <li>Access to Learning Activity worksheets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">Standard Plan - School</h3>
                                        <p class="plan-desc">
                                            Complete access to essential Edufrienz 99 features for classroom learning.
                                        </p>
                                        <div class="plan-price my-2">
                                            $199.99 <sup class="plan-date font-valera-round">/year</sup>
                                        </div>
                                    </div>
                                    <a href="https://api.whatsapp.com/send/?phone=6596935989&text&type=phone_number&app_absent=0" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in this plan <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Get 75 monthly credits</li>
                                        <li>Access for 5 users</li>
                                        <li>Access SEL interactive and online learning games</li>
                                        <li>Access to STEM Worksheets</li>
                                        <li>Access to paid learning videos</li>
                                        <li>Access to Social Emotional Learning Resources (Educators)</li>
                                        <li>Access to Social Emotional Learning Resources (Students)</li>
                                        <li>Access to Academic Support (core subjects)</li>
                                        <li>Access to Learning Activity worksheets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card plan-card premium d-flex flex-column">
                                <div class="card-body">
                                    <div class="plan-content">
                                        <h3 class="plan-title">Premium Plan - School</h3>
                                        <p class="plan-desc">
                                            Complete 360 access with advanced features and coaching for teachers.
                                        </p>
                                        <div class="plan-price-small"><del>$312.49</del></div>
                                        <div class="plan-price my-2">
                                            $249.99
                                            <div class="d-flex flex-wrap flex-column">
                                                <sup class="plan-date font-valera-round">/year</sup>
                                                <sup class="plan-save font-fredoka badge mb-auto p-1">25% Savings</sup>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="https://api.whatsapp.com/send/?phone=6596935989&text&type=phone_number&app_absent=0" class="btn btn-lg plan-btn btn-block font-valera-round" target="_blank">
                                        Contact Us
                                    </a>
                                    <div class="text-right mt-2" style="color:#005B8A; font-size:20px;">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <i class="fas fa-star" <?= $i < 4 ? 'style="margin-right:2px;"' : '' ?>></i>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="plan-included text-center font-valera-round">
                                    Included in this plan <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </div>
                                <div class="plan-included-content">
                                    <ul class="ml-0">
                                        <li>Download up to 100 printables and worksheets per month</li>
                                        <li>Access for 5 users</li>
                                        <li>Personalized coaching sessions for teachers</li>
                                        <li>Access to 21st century skills resources(Executive Function & Life Skills)</li>
                                        <li>Access all online learning games</li>
                                        <li>Access to STEM Worksheets</li>
                                        <li>Access to paid learning videos</li>
                                        <li>Access to Social Emotional Learning Resources (Educators)</li>
                                        <li>Access to Social Emotional Learning Resources (Students)</li>
                                        <li>Access to Academic Support (core subjects)</li>
                                        <li>Access to Learning Activity worksheets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="font-fredoka-one section-title">Compare Features Across <br>All School Plans</h2>
                    <div class="table-responsive overflow-auto">
                        <table class="table table-bordered bg-white text-center">
                            <thead class="font-fredoka-one">
                            <tr style="background-color: #00aeff; color: white;">
                                <th>Benefits</th>
                                <th>Lite Plan - Teacher</th>
                                <th>Standard Plan - School</th>
                                <th>Premium Plan - School</th>
                            </tr>
                            </thead>
                            <tbody id="school-table-body">
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Available Credit</td>
                                <td>25</td>
                                <td>75</td>
                                <td>100</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>
                                    <p class="font-weight-bold mb-0">Simultaneous Users</p>
                                    <p class="font-italic">Number of people who can be logged in and using the account at the same time.</p>
                                <td>1</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Coaching Sessions</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Interactive Game Access</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Interactive Games</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Online Learning Games</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>21st Century Skills Interactive Games</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Paid Learning Video Access</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Basic SEL Video</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Basic Learning Video</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Parental Guides Video</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Downloadable Resources</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">21st Century Skills</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Executive Functioning Guides</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Executive Functioning Workbooks</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Life Skills Lesson Plans</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Life Skills Workbook/Worksheets</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">Life Skills Posters</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">21st Century Skills Curriculum</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td class="font-weight-bold">5 Core Competencies Curriculum</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Social Emotional Learning</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Teaching & Learning Tools</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Curriculum</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Training for Teachers</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Modules</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Lesson Plans</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Assessments</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">SEL Students Resources</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Core SEL Resources</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Advanced Ebooks</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Junior Ebooks</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Workbook/Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Supporting Resources</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Wall Arts</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Stationery</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Posters</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>SEL Activities & Games</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">STEM</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>STEM Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Academic Support (Core Subjects)</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">English</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>English Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Grammar Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Reading Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Writing Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Mathematics</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Math Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Science Worksheets</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Science Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Environmental Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Chinese</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Chinese Sheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Chinese Activity Sheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Chinese Writing Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Knowledge & Exploration</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Academic Posters</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>General Awareness</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Learning Activity</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Coloring</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Coloring Pages (Lumi Frienz Edition)</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Coloring Pages</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Drawing</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Drawing Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Origami</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Origami Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Brain Boosters</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Word Search Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Motivational Wall Arts</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Educational Worksheets</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td colspan="4" class="font-weight-bold text-center">Digital Stationery</td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Digital Stationery</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr class="font-valera-round">
                                <td>Greeting Cards</td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="school" class="text-center mt-4 font-valera-round">
                        <a href="#" class="btn btn-lg text-white px-4" style="background-color: #00aeff;">See full comparison</a>
                    </div>
                </div>

                <div class="tab-pane fade mt-5" id="credits" role="tabpanel" aria-labelledby="credits-tab">
                    <h2 class="font-fredoka-one section-title">Credit Usage Guide</h2>
                    <p class="mb-4 font-valera-round text-center" style="font-size: larger;">Understand how many credits are deducted for each product download and manage your subscribtion effectively.</p>
                    <div class="table-responsive overflow-auto" style="height: 600px;">
                        <table class="table table-bordered bg-white text-center">
                            <thead class="font-fredoka-one">
                                <tr style="background-color: #00aeff; color: white;">
                                    <th>Product Category</th>
                                    <th>No. of Credits</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Interactive Game Access</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Interactive Games</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Online Learning Games</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Online Learning Games</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>21st Century Skills Interactive Games</td>
                                    <td>3</td>
                                </tr>
                                
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Paid Learning Video Access</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Basic SEL Video</td>
                                    <td>1</td>
                            
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Basic Learning Video</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Parental Guides Video</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">21st Century Skills</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Executive Functioning Guides</td>
                                    <td>8</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Executive Functioning Workbooks</td>
                                    <td>8</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Life Skills Lesson Plans</td>
                                    <td>5</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Life Skills Workbook/Worksheets</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Life Skills Posters</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>21st Century Skills Curriculum</td>
                                    <td>4</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>5 Core Competencies Curriculum</td>
                                    <td>5</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Social Emotional Learning</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Teaching & Learning Tools</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Curriculum</td>
                                    <td>4</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Training for Teachers</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Modules</td>
                                    <td>4</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Lesson Plans</td>
                                    <td>3</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Assessments</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">SEL Students Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Core SEL Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Advanced Ebooks</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Junior Ebooks</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Workbook/Worksheets</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Supporting Resources</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Wall Arts</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Stationery</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Posters</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>SEL Activities & Games</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">STEM</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>STEM Worksheets</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Academic Support (Core Subjects)</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">English</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>English Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Grammar Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Reading Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Writing Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Mathematics</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Math Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Science</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Science Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Environmental Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Chinese</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Chinese Sheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Chinese Activity Sheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Chinese Writing Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Knowledge & Exploration</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Academic Posters</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>General Awareness</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Learning Activity</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Coloring</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Coloring Pages  (Lumi Frienz Edition)</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Coloring Pages</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Drawing</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Drawing Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Origami</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Origami Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Brain Boosters</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Word Search Worksheets</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Motivational Wall Arts</td>
                                    <td>2</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Educational Worksheets</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td colspan="2" class="font-weight-bold text-center">Digital Stationery</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Digital Stationery</td>
                                    <td>1</td>
                                </tr>
                                <tr class="font-valera-round">
                                    <td>Greeting Cards</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade mt-5" id="tutorials" role="tabpanel" aria-labelledby="tutorials-tab">
                    <h2 class="font-fredoka-one section-title">How to Purchase an <br> Edufrienz 99 Subscription</h2>
                    <div class="row align-items-center my-5">
                        <div class="col-12 col-md-4 text-center p-4">
                             <img src="<?php echo home_url('/wp-content/uploads/2026/02/purchased-subscription.jpg') ?>" class="rounded-more shadow img-fluid" alt="purchase-subscription">
                        </div>
                        <div class="col-12 col-md-8">
                            <ol class="text-left font-valera-round ml-4">
                                <li>Ensure you have an Edufrienz 99 account</li>
                                <li>Visit <a href="<?php echo home_url('subscription') ?>">Edufrienz 99 Subscription</a> and choose your plan: Home or School Plans</li>
                                <li>For School Plans, click "Contact Us" for more details via WhatsApp</li> 
                                <li>For Home Plans, select your desired plan to proceed with the subscription</li>
                                <li>Complete the payment process using a credit card</li>
                                <li>Click "Subscribe Now" to confirm your subscription</li>
                                <li>Congratulations! You are now subscribed to Edufrienz 99</li>
                            </ol>
                        </div>
                    </div>

                    <h2 class="font-fredoka-one section-title">How to Create Account <br> for Edufrienz 99</h2>
                    <div class="row align-items-center my-5">
                        <div class="col-12 col-md-4 text-center p-4">
                            <img src="<?php echo home_url('/wp-content/uploads/2026/02/register-subscription.jpg') ?>" class="rounded-more shadow img-fluid" alt="register-subscription">
                        </div>
                        <div class="col-12 col-md-8">
                            <ol class="text-left font-valera-round ml-4">
                                <li>Visit <a href="<?php echo home_url('my-account') ?>">My Edufrienz 99 Account</a></li>
                                <li>Click on "Register Here"</li>
                                <li>Enter your username, password, and email address</li>
                                <li>Congratulations! Your account is now successfully created</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="font-fredoka-one section-title">Frequently Asked Questions (FAQs)</h2>
                            <div class="mt-5" id="faqAccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="false"
                                                aria-controls="collapseOne">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    How does the 30-day free subscription plan work at Edufrienz 99?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Our 30-day free subscription plan lets you sign up without providing credit card details. Simply register an account with Edufrienz 99 to access our range of free downloads.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    Will my plan be automatically renewed at the end of my subscription period?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Yes. The respective plan will be renewed automatically unless a cancellation request is received prior to expiry. Upon the auto-renewal to the new duration, there will be no refund, as per our terms and conditions. You need to cancel the plan a day before the expiry date.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseThree"
                                                aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    Will I be able to access to the previously download resources once I cancelled my subscription?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Once your subscription is cancelled, your access to the resources will also cease immediately. To enjoy full access to the resources, please cancel the subscription ONLY on the expiry date.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseFour"
                                                aria-expanded="false"
                                                aria-controls="collapseFour">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    How can I promote your subscription as a business partner?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">You can write to us; we will connect with you about collaboration opportunities where you can share with your community.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseFive"
                                                aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    Do you have an affiliate program that I can participate in?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseFive" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Yes, you can sign up as an affiliate, where you can share this great offer with your social network and get our rewards for every successful sign-up.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseSix"
                                                aria-expanded="false"
                                                aria-controls="collapseSix">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    Can I request a refund?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseSix" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">For any cancellation, there will be NO refund. Your cancellation is effective immediately; your access to the resources will also cease immediately. We strongly recommend that you make the cancellation only on the day your subscription expires to enjoy the benefits.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSeven">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseSeven"
                                                aria-expanded="false"
                                                aria-controls="collapseSeven">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    If I'm running big school and I want have more than one plan, is that possible?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseSeven" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Yes, absolutely! Please write to us to discuss options for multiple plans.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseEight"
                                                aria-expanded="false"
                                                aria-controls="collapseEight">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    Beside credit card, what another payment I can use?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseEight" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">You can also use Google Pay to pay for your subscription.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseNine"
                                                aria-expanded="false"
                                                aria-controls="collapseNine">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    What's the different between SEL Resources for Educators and SEL Resources for Students?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseNine" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">SEL Resources for Educators include lesson plans, curricula, and tools to help teachers implement SEL in the classroom. SEL Resources for Students are worksheets and activities designed to help students engage in SEL learning daily.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseTen"
                                                aria-expanded="false"
                                                aria-controls="collapseTen">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    What's Academic Support?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTen" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Academic Support includes a comprehensive curriculum focused on core subjects like English, Math, Chinese, Science, and Knowledge & Exploration, all designed to help students improve their academic performance and excel in their studies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEleven">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseEleven"
                                                aria-expanded="false"
                                                aria-controls="collapseEleven">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    What's Learning Activity?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseEleven" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Learning Activity is fun and educational worksheets like coloring pages, origami, and drawing exercises, aimed at enhancing students' creativity and hands-on learning skills.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwelve">
                                        <div class="mb-0">
                                            <a class="btn btn-lg btn-link text-left px-0 w-100 d-flex justify-content-between align-items-center collapsed"
                                                data-toggle="collapse"
                                                data-target="#collapseTwelve"
                                                aria-expanded="false"
                                                aria-controls="collapseTwelve">
                                                <h3 class="font-valera-round" style="font-size: larger; font-weight: 500;">
                                                    When should I choose the Homes or the Schools plan?
                                                </h3>
                                                <span class="faq-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTwelve" class="collapse">
                                        <div class="card-body">
                                            <p class="font-valera-round text-left" style="font-size: large;">Our Home Plan caters to parents or individuals who are subscribing for personal usage. While our School plans cater to preschools/kindergartens/institutions that use it for a broader group of students or in a corporate environment. Users will likely print in bulk to accommodate their locations.  For three or more locations, please write to us (talktous@edufrienz.com) separately, as we offer a special discount.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How does the 30-day free subscription plan work at Edufrienz 99?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our 30-day free subscription plan lets you sign up without providing credit card details. Simply register an account with Edufrienz 99 to access our range of free downloads"
    }
  },{
    "@type": "Question",
    "name": "Will my plan be automatically renewed at the end of my subscription period?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. The respective plan will be renewed automatically unless a cancellation request is received prior to expiry. Upon the auto-renewal to the new duration, there will be no refund, as per our terms and conditions. You need to cancel the plan a day before the expiry date."
    }
  },{
    "@type": "Question",
    "name": "Will I be able to access to the previously download resources once I cancelled my subscription?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Once your subscription is cancelled, your access to the resources will also cease immediately. To enjoy full access to the resources, please cancel the subscription ONLY on the expiry date."
    }
  },{
    "@type": "Question",
    "name": "How can I promote your subscription as a business partner?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can write to us; we will connect with you about collaboration opportunities where you can share with your community."
    }
  },{
    "@type": "Question",
    "name": "Do you have an affiliate program that I can participate in?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, you can sign up as an affiliate, where you can share this great offer with your social network and get our rewards for every successful sign-up."
    }
  },{
    "@type": "Question",
    "name": "Can I request a refund?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For any cancellation, there will be NO refund. Your cancellation is effective immediately; your access to the resources will also cease immediately. We strongly recommend that you make the cancellation only on the day your subscription expires to enjoy the benefits."
    }
  },{
    "@type": "Question",
    "name": "If I’m running big school and I want have more than one plan, is that possible?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, absolutely! Please write to us to discuss options for multiple plans."
    }
  },{
    "@type": "Question",
    "name": "Beside credit card, what another payment I can use?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can also use Google Pay to pay for your subscription."
    }
  },{
    "@type": "Question",
    "name": "What's the different between SEL Resources for Educators and SEL Resources for Students?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "SEL Resources for Educators include lesson plans, curricula, and tools to help teachers implement SEL in the classroom. SEL Resources for Students are worksheets and activities designed to help students engage in SEL learning daily."
    }
  },{
    "@type": "Question",
    "name": "What's Academic Support?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Academic Support includes a comprehensive curriculum focused on core subjects like English, Math, Chinese, Science, and Knowledge & Exploration, all designed to help students improve their academic performance and excel in their studies."
    }
  },{
    "@type": "Question",
    "name": "What's Learning Activity?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Learning Activity is fun and educational worksheets like coloring pages, origami, and drawing exercises, aimed at enhancing students' creativity and hands-on learning skills."
    }
  },{
    "@type": "Question",
    "name": "When should I choose the Homes or the Schools plan?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our Home Plan caters to parents or individuals who are subscribing for personal usage. While our School plans cater to preschools/kindergartens/institutions that use it for a broader group of students or in a corporate environment. Users will likely print in bulk to accommodate their locations.  For three or more locations, please write to us (talktous@edufrienz.com) separately, as we offer a special discount."
    }
  }]
}
</script>
<?php

get_footer();
?>