@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Cart' subtitle='Cart' />

    <!-- Cart Section Start -->
    <div class="cart-section sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="entry-content">
                        <div class="woocommerce rounded bg-light">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form class="woocommerce-cart-form" action="#" method="post">
                                @csrf
                                <table class="table shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                    <thead class="shadow-sm">
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                            <td class="product-thumbnail">
                                                <a href="{{ route('single-product') }}"><img width="80"
                                                        src="{{ asset('images/sh-s1.jpg') }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="">
                                                </a>
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a href="{{ route('single-product') }}">Golf Ball Srixon SF Tour Special</a>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>45.00</span>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity d-flex align-items-center">
                                                    <input type="button" value="-" class="qty_button minus">
                                                    <input type="number" class="input-text qty text" step="1"
                                                        placeholder="1" name="quantity">
                                                    <input type="button" value="+" class="qty_button plus">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#" class="remove"><i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr> <!-- cart item end -->
                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                            <td class="product-thumbnail">
                                                <a href="{{ route('single-product') }}"><img width="80"
                                                        src="{{ asset('images/sh-s2.jpg') }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="">
                                                </a>
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a href="{{ route('single-product') }}">Golf Gloves Footjoy GTxtreme</a>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity d-flex align-items-center">
                                                    <input type="button" value="-" class="qty_button minus">
                                                    <input type="number" class="input-text qty text" step="1"
                                                        placeholder="1" name="quantity">
                                                    <input type="button" value="+" class="qty_button plus">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#" class="remove"><i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr> <!-- cart item end -->

                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                            <td class="product-thumbnail">
                                                <a href="{{ route('single-product') }}"><img width="80"
                                                        src="{{ asset('images/sh-s3.jpg') }}"
                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="">
                                                </a>
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a href="{{ route('single-product') }}">Golf Footjoy GTxtreme</a>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>56.00</span>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity d-flex align-items-center">
                                                    <input type="button" value="-" class="qty_button minus">
                                                    <input type="number" class="input-text qty text" step="1"
                                                        placeholder="1" name="quantity">
                                                    <input type="button" value="+" class="qty_button plus">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#" class="remove"><i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr> <!-- cart item end -->

                                        <tr>
                                            <td colspan="6" class="actions cart-form-footer mt-3 p-3">
                                                <div
                                                    class="bottom-cart d-flex justify-content-between align-items-center flex-wrap">
                                                    <div class="coupon mb-3 mb-sm-0">
                                                        <input type="text" placeholder="Coupon Code">
                                                        <button class="btn btn-success text-info">Apply Coupon</button>
                                                    </div>
                                                    <a href="{{ route('shop') }}" class="btn btn-primary">Continue
                                                        Shopping</a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Cart Total Start -->
                    <aside class="cart-totals ms-lg-4 p-lg-5 p-3 rounded bg-light">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Products</th>
                                    <td>Subtotals:</td>
                                </tr>
                                <tr class="product-list">
                                    <th>Jabra Elite 75t</th>
                                    <td>$40.00</td>
                                </tr>
                                <tr class="product-list">
                                    <th>Jabra Elite 75t</th>
                                    <td>$40.00</td>
                                </tr>
                                <tr class="product-list">
                                    <th>Jabra Elite 75t</th>
                                    <td>$40.00</td>
                                </tr>
                                <tr class="subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount">$242.00</span></td>
                                </tr>
                                <tr class="shipping-cost">
                                    <th>Shipping Cost</th>
                                    <td><span class="amount">$50.00</span></td>
                                </tr>
                                <tr class="total">
                                    <th>Total</th>
                                    <td><strong><span class="amount">$292.00</span></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center mt-4">
                            <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to checkout</a>
                        </div>
                    </aside>
                    <!-- Cart Total End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Section End -->

@endsection
