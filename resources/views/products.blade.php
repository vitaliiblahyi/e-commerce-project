@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="container px-3 py-4" id="icon-grid">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/736x/73/93/72/7393723d146c6ab99316c002bf19840c.jpg'); background-size: cover; background-blend-mode: soft-light;">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="py-5 my-5 display-5 lh-1 fw-bold text-center">Hot Deals</h3>
                <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small>Earth</small>
                </li>
                <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                    <small>3d</small>
                </li>
                </ul>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/736x/05/7d/4e/057d4e59654eba72073c50f0d276955f.jpg'); background-size: cover; background-blend-mode: soft-light;">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="py-5 my-5 display-5 lh-1 fw-bold text-center">Ready to Ship</h3>
                <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small>Earth</small>
                </li>
                <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                    <small>3d</small>
                </li>
                </ul>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/736x/c0/23/49/c0234919d6a524f7ef1221ce9edf637f.jpg');  background-size: cover; background-blend-mode: soft-light;">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="py-5 my-5 display-6 lh-1 fw-bold text-center">Bestsellers</h3>
                <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small>California</small>
                </li>
                <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                    <small>5d</small>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="row d-flex align-items-stretch row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 py-5">
                <div class="col px-4 my-4">
                    <div class="text-center p-3">
                    <img src="https://i.pinimg.com/736x/23/ef/5c/23ef5ce042a51545e511f855380763f6.jpg" alt="products" class="img-fluid" style="max-height: 330px;">
                    </div>
                        <div class="row px-3 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h3 class="fw-bold mb-1 fs-6 text-body-emphasis">Featured title this item</h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="display-6 fs-5">
                                $12.64
                                </div>
                            </div>
                            <p class="fw-lighter text-success" style="font-size: 0.85rem">Ready to Ship</p>
                            <div class="col-lg-9">
                            <button type="button" class="btn btn-primary border-0 text-uppercase w-100" style="--bs-btn-padding-y: .30rem;--bs-btn-padding-x: .6rem;--bs-btn-font-size: .8rem;--;--bs-btn-bg: #9575ff;--bs-btn-hover-bg: #7577ff;">Buy now</button>
                            </div>                            
                            <div class="col-lg-3">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                </div>
                <div class="col px-4 my-4">
                    <div class="text-center p-3">
                        <img src="https://i.pinimg.com/736x/52/09/02/5209024d25a94b9e69448c475937a79f.jpg" alt="products" class="img-fluid" style="max-height: 330px;">
                    </div>
                        <div class="row px-3 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h3 class="fw-bold mb-1 fs-6 text-body-emphasis">Featured title this item</h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="display-6 fs-5">
                                $14.88
                                </div>
                            </div>
                            <p class="fw-lighter text-success" style="font-size: 0.85rem">Ready to Ship</p>
                            <div class="col-lg-9">
                            <button type="button" class="btn btn-primary border-0 text-uppercase w-100" style="--bs-btn-padding-y: .30rem;--bs-btn-padding-x: .6rem;--bs-btn-font-size: .8rem;--;--bs-btn-bg: #9575ff;--bs-btn-hover-bg: #7577ff;">Buy now</button>
                            </div>                            
                            <div class="col-lg-3">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                </div>
                <div class="col px-4 my-4">
                    <div class="text-center p-3">
                        <img src="https://i.pinimg.com/736x/db/5f/c5/db5fc5760ab6b610e69e5a7ed3e6c537.jpg" alt="products" class="img-fluid" style="max-height: 330px;">
                    </div>
                        <div class="row px-3 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h3 class="fw-bold mb-1 fs-6 text-body-emphasis">Featured title this item</h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="display-6 fs-5">
                                $21.99
                                </div>
                            </div>
                            <p class="fw-lighter text-success" style="font-size: 0.85rem">Ready to Ship</p>
                            <div class="col-lg-9">
                            <button type="button" class="btn btn-primary border-0 text-uppercase w-100" style="--bs-btn-padding-y: .30rem;--bs-btn-padding-x: .6rem;--bs-btn-font-size: .8rem;--;--bs-btn-bg: #9575ff;--bs-btn-hover-bg: #7577ff;">Buy now</button>
                            </div>                            
                            <div class="col-lg-3">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                </div>
                <div class="col px-4 my-4">
                    <div class="text-center p-3">
                    <img src="https://i.pinimg.com/736x/23/ef/5c/23ef5ce042a51545e511f855380763f6.jpg" alt="products" class="img-fluid" style="max-height: 330px;">
                    </div>
                        <div class="row px-3 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h3 class="fw-bold mb-1 fs-6 text-body-emphasis">Featured title this item</h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="display-6 fs-5">
                                $12.64
                                </div>
                            </div>
                            <p class="fw-lighter text-success" style="font-size: 0.85rem">Ready to Ship</p>
                            <div class="col-lg-9">
                            <button type="button" class="btn btn-primary border-0 text-uppercase w-100" style="--bs-btn-padding-y: .30rem;--bs-btn-padding-x: .6rem;--bs-btn-font-size: .8rem;--;--bs-btn-bg: #9575ff;--bs-btn-hover-bg: #7577ff;">Buy now</button>
                            </div>                            
                            <div class="col-lg-3">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                </div>
                <div class="col px-4 my-4">
                    <div class="text-center p-3">
                        <img src="https://i.pinimg.com/736x/52/09/02/5209024d25a94b9e69448c475937a79f.jpg" alt="products" class="img-fluid" style="max-height: 330px;">
                    </div>
                        <div class="row px-3 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h3 class="fw-bold mb-1 fs-6 text-body-emphasis">Featured title this item</h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="display-6 fs-5">
                                $14.88
                                </div>
                            </div>
                            <p class="fw-lighter text-success" style="font-size: 0.85rem">Ready to Ship</p>
                            <div class="col-lg-9">
                            <button type="button" class="btn btn-primary border-0 text-uppercase w-100" style="--bs-btn-padding-y: .30rem;--bs-btn-padding-x: .6rem;--bs-btn-font-size: .8rem;--;--bs-btn-bg: #9575ff;--bs-btn-hover-bg: #7577ff;">Buy now</button>
                            </div>                            
                            <div class="col-lg-3">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                </div>
                <div class="col px-4 my-4">
                    <div class="text-center p-3">
                        <img src="https://i.pinimg.com/736x/db/5f/c5/db5fc5760ab6b610e69e5a7ed3e6c537.jpg" alt="products" class="img-fluid" style="max-height: 330px;">
                    </div>
                        <div class="row px-3 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h3 class="fw-bold mb-1 fs-6 text-body-emphasis">Featured title this item</h3>
                            </div>
                            <div class="col-lg-4">
                                <div class="display-6 fs-5">
                                $21.99
                                </div>
                            </div>
                            <p class="fw-lighter text-success" style="font-size: 0.85rem">Ready to Ship</p>
                            <div class="col-lg-9">
                            <button type="button" class="btn btn-primary border-0 text-uppercase w-100" style="--bs-btn-padding-y: .30rem;--bs-btn-padding-x: .6rem;--bs-btn-font-size: .8rem;--;--bs-btn-bg: #9575ff;--bs-btn-hover-bg: #7577ff;">Buy now</button>
                            </div>                            
                            <div class="col-lg-3">
                                <i class="bi bi-heart"></i>
                            </div>
                        </div>
                </div>
        </div>
  </div>
@endsection