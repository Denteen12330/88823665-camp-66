@extends('layouts.default')
@section('title', 'CAMP-66 | Product')
@section('body', 'layout-fixed sidebar-expand-lg bg-body-tertiary')
@section('content')
    <div class="app-wrapper">
        @include('components.header')
        @include('components.menu')
        <main class="app-main">
            <div class="row">
                <h1 class="mt-5 ms-5 fw-bold">Product</h1>
            </div>

            <form action="{{ url('/product') }}" method="post" class="mt-3 ms-5" onsubmit="return swal(event)">
                @csrf
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="category_name">Category name</label>
                        <input type="text" name="category_name" id="category_name" class="form-control" required />
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="button" id="btn-add-product-list">+ เพิ่ม Product</button>
                <div class="row mt-5 mr-4 align-items-center">
                    <p class="fst-italic col-1 mb-0">Product List</p>
                    <hr class="col mb-0 me-5">
                </div>
                <div class="row mt-1 align-items-center mr-4 me-3" id="product-list">
                    <div class="col-6 mt-3">
                        <label for="">Product name <button type="button"
                                class="btn btn-danger ms-2 mb-2 btn-del-product-list">Delete</button></label>
                        <input type="text" name="product_name[]" class="form-control" required />
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3 mb-3 col-1">Save</button>
            </form>
            <table class="table table-bordered me-5 ms-5 w-auto">
                <thead>
                    <tr class="fw-bold text-center">
                        <td>#</td>
                        <td>Category Name</td>
                        <td>ProductList Name</td>
                        <td>Add by</td>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $category => $items)
                        <tr class="align-middle">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $category }}</td>
                            <td>
                                <ul class="list-group list-group-numbered">
                                    @foreach ($items as $product)
                                        <li class="list-group-item">{{ $product->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-center">{{ $items->first()->user->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No products found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </main>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#btn-add-product-list').on('click', function() {
                $('#product-list').append(
                    `<div class="col-6 mt-3">
                    <label for="">Product name <button type="button" class="btn btn-danger ms-2 mb-2 btn-del-product-list">Delete</button></label>
                    <input type="text" name="product_name[]" class="form-control" required />
                </div>`)
            });
            $(document).on('click', '.btn-del-product-list', function() {
                $(this).parent().parent().remove();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function swal(event) {
            event.preventDefault();
            Swal.fire({
                title: "Add products?",
                text: "Are you sure you want to add these products?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, do it!",
                cancelButtonText: "Hold on"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Added!",
                        text: "Your products has been added.",
                        icon: "success"
                    });
                    event.target.closest('form').submit();
                }
            });
        }
    </script>
    <script>
        function validateField(selector, pattern = null) {
            const field = $(selector);
            const value = field.val().trim();
            field.removeClass('is-invalid is-valid');

            if (value === '') {
                field.addClass('is-invalid');
                return false;
            }

            if (pattern && !pattern.test(value)) {
                field.addClass('is-invalid');
                return false;
            }

            field.addClass('is-valid');
            return true;
        }
    </script>
@endsection
