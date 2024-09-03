<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

    <?php 
    include 'nav.php';
    ?>

<div class="return">
    Back to Shop
</div>

<div class="products-container">
                <div class="product-images">
                    <div class="image1">
                    </div>
                    <div class="image2">
                    </div>
                </div>
                

            <div class="product-info">
                <div class="product-informations">
                    <div class="product-brand">Product Brand</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">100.00 PHP</div>
                </div>

                <div class="buttons-modal-features">
                    <button class="check-out">Add to Cart</button>
                    <div class="number-control">
                        <div class="number-left"></div>
                        <input type="number" name="number" class="number-quantity">
                        <div class="number-right"></div>
                    </div>
                    <button class="con-shopping">Explore (insert brand)</button>
                    <p>Stocks: 1</p>

                    <div class="product-features">
                        <div class="key-features">Key Features</div>
                        <div class="features-details">
                        <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</li>
                        <li>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</li>
                        <li>Praesent mauris. Fusce nec tellus sed augue semper porta.</li>
                        <li>Maecenas mattis. Sed convallis tristique sem.</li>
                        <li>Proin ut ligula vel nunc egestas porttitor.</li>
                        <li>Nulla facilisi. Etiam feugiat lorem non metus.</li>
                        </ul>
                        </div>
                    </div>
                    <button class="delivery-returns">Delivery & Returns</button>
                </div>
            </div>
</div>


<div class="specifications">
    <div class="specifications-title">Specifications</div>
    <div class="spec-features">


        <div class="key-features">Feature 1</div>
        <div class="features-details">
            <ul class="new-features-list">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</li>
                <li>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</li>
                <li>Praesent mauris. Fusce nec tellus sed augue semper porta.</li>
                <li>Maecenas mattis. Sed convallis tristique sem.</li>
                <li>Proin ut ligula vel nunc egestas porttitor.</li>
                <li>Nulla facilisi. Etiam feugiat lorem non metus.</li>
            </ul>
        </div>

        <div class="key-features">Feature 2</div>
        <div class="features-details">
            <ul class="new-features-list">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</li>
                <li>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</li>
                <li>Praesent mauris. Fusce nec tellus sed augue semper porta.</li>
                <li>Maecenas mattis. Sed convallis tristique sem.</li>
                <li>Proin ut ligula vel nunc egestas porttitor.</li>
                <li>Nulla facilisi. Etiam feugiat lorem non metus.</li>
            </ul>
        </div>

        <div class="key-features">Feature 3</div>
        <div class="features-details">
            <ul class="new-features-list">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</li>
                <li>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.</li>
                <li>Praesent mauris. Fusce nec tellus sed augue semper porta.</li>
                <li>Maecenas mattis. Sed convallis tristique sem.</li>
                <li>Proin ut ligula vel nunc egestas porttitor.</li>
                <li>Nulla facilisi. Etiam feugiat lorem non metus.</li>
            </ul>
        </div>
    </div>

    <div class="related-prod">
    <div class="specifications-title">Related Product</div>
    <div class="products-list">
    <div class="product">
        <div class="product-image"></div>
        <div class="product-details">Additional details</div>
        <div class="product-title">Product Name</div>
        <div class="product-price">$XX.XX</div>
    </div>
    <div class="product">
        <div class="product-image"></div>
        <div class="product-details">Additional details</div>
        <div class="product-title">Product Name</div>
        <div class="product-price">$XX.XX</div>
    </div>
    <div class="product">
        <div class="product-image"></div>
        <div class="product-details">Additional details</div>
        <div class="product-title">Product Name</div>
        <div class="product-price">$XX.XX</div>
    </div>
    <div class="product">       
        <div class="product-image"></div>
        <div class="product-details">Additional details</div>
        <div class="product-title">Product Name</div>
        <div class="product-price">$XX.XX</div>
    </div>
</div>
</div>
</div>

<div id="search-modal" class="search-modal">
  <div class="modal-content">
    <!-- Exit Button -->
    <button id="close-modal" class="close-modal-btn">&times;</button>
    <input id="search-input" class="search-input" type="text" placeholder="Search...">
  </div>
</div>

<div id="cart-modal" class="cart-modal">
    <div class="cart-modal-content">
        <span class="close-button">&times;</span>
        <h2>Cart</h2>
        <hr>
        <div class="cart-items">
            <!-- Product 1 -->
            <div class="cart-item">
                <div class="cart-item-image"></div>
                <div class="cart-item-details">
                    <div class="cart-item-name">Product 1</div>
                    <div class="number-control">
                        <div class="number-left"></div>
                        <input type="number" name="number" class="number-quantity">
                        <div class="number-right"></div>
                    </div>
                </div>
                <div class="cart-pay">
                    <span class="remove-product">&times;</span>
                    <div class="cart-item-price">540.00</div>
                    <div class="cart-item-currency">PHP</div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="cart-item">
                <div class="cart-item-image"></div>
                <div class="cart-item-details">
                    <div class="cart-item-name">Product 2</div>
                    <div class="number-control">
                        <div class="number-left"></div>
                        <input type="number" name="number" class="number-quantity">
                        <div class="number-right"></div>
                    </div>
                </div>
                <div class="cart-pay">
                    <span class="remove-product">&times;</span>
                    <div class="cart-item-price">110.00</div>
                    <div class="cart-item-currency">PHP</div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="cart-item">
                <div class="cart-item-image"></div>
                <div class="cart-item-details">
                    <div class="cart-item-name">Product 3</div>
                    <div class="number-control">
                        <div class="number-left"></div>
                        <input type="number" name="number" class="number-quantity">
                        <div class="number-right"></div>
                    </div>
                </div>
                <div class="cart-pay">
                    <span class="remove-product">&times;</span>
                    <div class="cart-item-price">320.00</div>
                    <div class="cart-item-currency">PHP</div>
                </div>
            </div>
        </div>

        <div class="payment-info">
            <div class="subtotal">
                <span>Subtotal</span>
                <span class="amount">100.00</span>
            </div>
            <div class="discount">
                <span>Discount</span>
                <span class="amount">100.00</span>
            </div>
            <div class="shipping">
                <span>Shipping</span>
                <span class="amount">100.00</span>
            </div>
            <div class="total">
                <span>Total</span>
                <span class="amount">100.00</span>
            </div>
        </div>
        <div class="buttons-modal">
            <button class="check-out">Check out</button>
            <button class="con-shopping">Continue Shopping</button>
        </div>
    </div>
</div>
<?php 
    include 'footer.php';
 ?>
</body>
</html>
    <script src="index.js"></script>

    