<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="template/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
            @include('default.css')
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
            @include('default.side_mobilemenu')
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="template/dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> Skripsi FPST UPB </span> 
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                    @include('default.breadcrumb')
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                    </div>
                    <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-1.jpg">
                                    </div>
                                    <div class="ml-3">Russell Crowe</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">russellcrowe@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-11.jpg">
                                    </div>
                                    <div class="ml-3">Denzel Washington</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">denzelwashington@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-3.jpg">
                                    </div>
                                    <div class="ml-3">Arnold Schwarzenegger</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">arnoldschwarzenegger@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-11.jpg">
                                    </div>
                                    <div class="ml-3">Johnny Depp</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/preview-14.jpg">
                                </div>
                                <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-8.jpg">
                                </div>
                                <div class="ml-3">Sony A7 III</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/preview-5.jpg">
                                </div>
                                <div class="ml-3">Nike Tanjun</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/preview-8.jpg">
                                </div>
                                <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-1.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-11.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-3.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Arnold Schwarzenegger</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-11.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="template/dist/images/profile-4.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                    @include('default.account_menu')
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                    @include('default.sidebar')
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 2xl:col-span-9">
                            <div class="grid grid-cols-12 gap-6">
                                <!-- BEGIN: Notification -->
                                <div class="col-span-12 mt-6 -mb-6 intro-y">
                                    <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                                        <span>Hai Selamat Datang di Aplikasi Skripsi FPST UPB <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">themeforest.net</a>.</span>
                                        <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                                    </div>
                                </div>
                                <!-- BEGIN: Notification -->
                                <!-- BEGIN: Weekly Top Products -->
                                <div class="col-span-12 mt-6">
                                    <div class="intro-y block sm:flex items-center h-10">
                                        <h2 class="text-lg font-medium truncate mr-5">
                                            Weekly Top Products
                                        </h2>
                                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                        </div>
                                    </div>
                                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                        <table class="table table-report sm:mt-2">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">IMAGES</th>
                                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="intro-x">
                                                    <td class="w-40">
                                                        <div class="flex">
                                                            <div class="w-10 h-10 image-fit zoom-in">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-8.jpg" title="Uploaded at 6 February 2022">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-1.jpg" title="Uploaded at 30 November 2022">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-15.jpg" title="Uploaded at 23 April 2022">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a> 
                                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                                                    </td>
                                                    <td class="text-center">50</td>
                                                    <td class="w-40">
                                                        <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                                    </td>
                                                    <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="intro-x">
                                                    <td class="w-40">
                                                        <div class="flex">
                                                            <div class="w-10 h-10 image-fit zoom-in">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-8.jpg" title="Uploaded at 3 January 2021">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-8.jpg" title="Uploaded at 15 March 2021">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-10.jpg" title="Uploaded at 20 May 2021">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a> 
                                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                                                    </td>
                                                    <td class="text-center">69</td>
                                                    <td class="w-40">
                                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                    </td>
                                                    <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="intro-x">
                                                    <td class="w-40">
                                                        <div class="flex">
                                                            <div class="w-10 h-10 image-fit zoom-in">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-7.jpg" title="Uploaded at 21 September 2022">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-7.jpg" title="Uploaded at 19 December 2020">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-8.jpg" title="Uploaded at 20 November 2022">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a> 
                                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                                                    </td>
                                                    <td class="text-center">117</td>
                                                    <td class="w-40">
                                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                    </td>
                                                    <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="intro-x">
                                                    <td class="w-40">
                                                        <div class="flex">
                                                            <div class="w-10 h-10 image-fit zoom-in">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-13.jpg" title="Uploaded at 2 November 2020">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-10.jpg" title="Uploaded at 19 March 2021">
                                                            </div>
                                                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="template/dist/images/preview-8.jpg" title="Uploaded at 1 June 2021">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="" class="font-medium whitespace-nowrap">Sony A7 III</a> 
                                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Photography</div>
                                                    </td>
                                                    <td class="text-center">147</td>
                                                    <td class="w-40">
                                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                    </td>
                                                    <td class="table-report__action w-56">
                                                        <div class="flex justify-center items-center">
                                                            <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                            <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                                        <nav class="w-full sm:w-auto sm:mr-auto">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                                </li>
                                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <select class="w-20 form-select box mt-3 sm:mt-0">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END: Weekly Top Products -->
                            </div>
                        </div>
                        <div class="col-span-12 2xl:col-span-3">
                            <div class="2xl:border-l -mb-10 pb-10">
                                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                                    <!-- BEGIN: Recent Activities -->
                                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                                        <div class="intro-x flex items-center h-10">
                                            <h2 class="text-lg font-medium truncate mr-5">
                                                Recent Activities
                                            </h2>
                                            <a href="" class="ml-auto text-primary truncate">Show More</a> 
                                        </div>
                                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                                            <div class="intro-x relative flex items-center mb-3">
                                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                        <img alt="Midone - HTML Admin Template" src="template/dist/images/profile-3.jpg">
                                                    </div>
                                                </div>
                                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Al Pacino</div>
                                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                    </div>
                                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                                </div>
                                            </div>
                                            <div class="intro-x relative flex items-center mb-3">
                                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                        <img alt="Midone - HTML Admin Template" src="template/dist/images/profile-4.jpg">
                                                    </div>
                                                </div>
                                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Al Pacino</div>
                                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                    </div>
                                                    <div class="text-slate-500">
                                                        <div class="mt-1">Added 3 new photos</div>
                                                        <div class="flex mt-2">
                                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nikon Z6">
                                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="template/dist/images/preview-11.jpg">
                                                            </div>
                                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Dell XPS 13">
                                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="template/dist/images/preview-11.jpg">
                                                            </div>
                                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="Nikon Z6">
                                                                <img alt="Midone - HTML Admin Template" class="rounded-md border border-white" src="template/dist/images/preview-1.jpg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                                            <div class="intro-x relative flex items-center mb-3">
                                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                        <img alt="Midone - HTML Admin Template" src="template/dist/images/profile-15.jpg">
                                                    </div>
                                                </div>
                                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Denzel Washington</div>
                                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                    </div>
                                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Nike Tanjun</a> price and description</div>
                                                </div>
                                            </div>
                                            <div class="intro-x relative flex items-center mb-3">
                                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                        <img alt="Midone - HTML Admin Template" src="template/dist/images/profile-4.jpg">
                                                    </div>
                                                </div>
                                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Johnny Depp</div>
                                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                                    </div>
                                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Samsung Q90 QLED TV</a> description</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Recent Activities -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        {{-- <div data-url="side-menu-dark-dashboard-overview-2.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div> --}}
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
            @include('default.js')
        <!-- END: JS Assets-->
    </body>
</html>