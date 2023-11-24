@extends('layouts.app')
@section('content')

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('pages/home') }}" rel="nofollow">Home</a>
                <span></span> Cart
            </div>
        </div> 
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <?php if(count($cart) > 0 ){?>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $carts )
                               
                                <tr> 
                                    <td class="image product-thumbnail"><img src="{{asset('images/products/' .$carts->model->image)}}" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a href="#">{{$carts->model->name}}</a></h5>
                                        <p class="font-xs">Sizes: {{ $carts->options->size }}  </p>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <span>C${{number_format($carts->price)}} </span>
                                        <p class="font-xs old-price" style="text-decoration: line-through; color:red">C${{number_format($carts->model->price)}}</p>
                                       
                                    </td>
                                    <td class="text-center cart-item" data-title="Quantity" data-cart-item-id="{{ $carts->rowId }}">
                                        <div class="detail-qty  radius  m-auto">
<<<<<<< HEAD
                                            <a href="#" class="qty-down" data-cart-item-id="{{ $carts->rowId }}"><i class="fi-rs-angle-small-down decrement-btn"></i></a>
                                            <input type="number" class="border mr-2 qty-val quantity-input" data-qty="{{ $carts->qty }}" value="{{ $carts->qty }}">
                                            <a href="#" class="qty-up" data-cart-item-id="{{ $carts->rowId }}"><i class="fi-rs-angle-small-up increment-btn"></i></a>
=======
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down decrement-btn"></i></a>
                                            <input type="number" class="border mr-2 qty-val quantity-input" data-qty="{{ $carts->qty }}" value="{{ $carts->qty }}">
                                            {{-- <span class="qty-val quantity-input" data-qty="{{ $carts->qty }}">{{$carts->qty}}</span> --}}
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up increment-btn"></i></a>
>>>>>>> 22c04a2289fd617c155aca4e6d7584606495c233
                                        </div>
                                    </td>
                                    <style>
                                        /* Adjust spacing between buttons and input field */
                                        .quantity-controls {
                                            display: flex; /* Display the elements in a horizontal row */
                                            align-items: center; /* Vertically align the elements in the center */
                                        }

                                        .qty-down,
                                        .qty-up {
                                            margin: 4px 7px; /* Adjust the margin to control spacing between buttons and input field */
                                            padding: 5px;
                                        }

                                        /* Hide the up and down arrows in number input */
                                        input[type=number]::-webkit-inner-spin-button,
                                        input[type=number]::-webkit-outer-spin-button {
                                            -webkit-appearance: none;
                                            margin: 0;
                                        }

                                        /* Hide the up and down arrows in Firefox */
                                        input[type=number] {
                                            -moz-appearance: textfield;
                                            padding-left: 6px;
                                        }
                                    </style>
                                    <td class="text-right" data-title="Cart">
                                        <span>C${{number_format($carts->price*$carts->qty )}} </span>
                                    </td>
                                    <td class="action" data-title="Remove"> 
                                        <a href="{{route('carts.delete', $carts->rowId)}}" class="text-muted"><i class="fi-rs-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{-- </div>
                    <div class="cart-action text-end">
                        <a class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Update Cart</a>
                        <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                    </div> --}}
                    <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                    <div class="row mb-50">
                        <div class="col-lg-6 col-md-12">
                           
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="border p-md-4 p-30 border-radius cart-totals">
                                <div class="heading_s1 mb-3">
                                    <h4>Cart Totals</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="cart_total_label">Cart Subtotal</td>
                                                @php
                                                    $subTotal = Cart::subTotal();
                                                    $tax = $subTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                                    $totalPrice = $subTotal + $tax; // I add the tax to the subtotal to get the total price
                                                @endphp
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">C${{Cart::subTotal()}}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Shipping</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Stardard Shipping</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                @php
                                                    $priceTotal = Cart::priceTotal();
                                                    $tax = $priceTotal * 0.12; // Calculate the tax amount (12% of the subtotal)
                                                    $totalPrice = $priceTotal + $tax; // Add the tax to the subtotal to get the total price
                                                @endphp
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">C${{ number_format($totalPrice, 2) }}</span></strong></td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <a href="{{route('checkout.index')}}" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
                <div style="background:#eee; text-align:center" class="p-3">
                    <img src="{{asset('/images/images.png')}}"> 
                @guest
                <p>Don't have an account <strong style="color:#fed700"><a href="{{route('register')}}">Register</a></strong> OR <strong style="color:#fed700"><a href="{{route('login')}}">Login</a></strong> to continue shopping</p>
                    @else
                    <p>Click<a href="{{ url('pages/products')}}"> Here </a>to Start Shopping</p>
                    @endguest
                </div>
            <?php }?>
        </div>
    </section>
</main>
@if(session('message'))
<script>
    toastr.success('{{ session('message') }}');
</script>
@endif

<script>
    jQuery(document).ready(function ($) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Find all quantity inputs and attach change event listeners
        $('.quantity-input').on('change', function() {
            updateCartItemQuantity($(this));
        });
        $('.qty-up').on('click', function(e) {
            e.preventDefault();
            var quantityInput = $(this).closest('.cart-item').find('.quantity-input');
            var currentQuantity = parseInt(quantityInput.val());
            quantityInput.val(currentQuantity + 1);
            quantityInput.trigger('change'); // Trigger change event for cart update or other actions
           // alert(quantityInput);
        });

        $('.qty-down').on('click', function(e) {
            e.preventDefault();
            var quantityInput = $(this).closest('.cart-item').find('.quantity-input');
            var currentQuantity = parseInt(quantityInput.val());
            if (currentQuantity > 1) {
                quantityInput.val(currentQuantity - 1);
                quantityInput.trigger('change'); // Trigger change event for cart update or other actions
                //alert(quantityInput);
            }
        });

         // Function to update the cart
         function updateCartItemQuantity(quantityInput) {
            var quantity = parseInt(quantityInput.val());
            var cartItemId = quantityInput.closest('.cart-item').data('cart-item-id');
           // alert(cartItemId);
            //alert(quantity);
            // Send an AJAX request to update the cart item quantity in the server
            $.ajax({
                url: '{{ route('cart.updatequantity') }}',
                type: 'POST',
                data: { 
                    quantity: quantity, 
                    cartItemId: cartItemId 
                },
                success: function(response) {
                    //toastr.success(response.message);
                    toastr.success('Cart item quantity updated successfully');
                    var cartContentCount = response.cartCount;
                   
                    $('.cartCount').text(cartContentCount);
                    // alert('yes');
                    updateCartCount();
                
                },
                error: function(xhr, status, error) {
                    alert(error);
                }
            });
        }

        function updateCartCount() {
            $.ajax({
                url: '{{ route('cart.getcount') }}',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var cartCount = response.cartCount;
                    $('.cartCount').text(cartCount); 
                    //alert('yes');
                },
                error: function(xhr, status, error) {
                    console.error(error); 
                    //alert(error);
                }
            });
        }
        setInterval(updateCartCount, 1000);


    });

</script>

@endsection

