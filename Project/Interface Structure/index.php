<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php include 'nav.php'; ?>
    
    <div class="categories-header">
        <div class="categories">
            <a class="category-item active" data-tab="all-products" onclick="showTab('all-products')">All products</a>
            <a class="category-item" data-tab="instruments" onclick="showTab('instruments')">Instruments</a>
            <a class="category-item" data-tab="soundpacks" onclick="showTab('soundpacks')">Soundpacks</a>
            <a class="category-item" data-tab="cables" onclick="showTab('cables')">Cables</a>
            <a class="category-item" data-tab="bags" onclick="showTab('bags')">Bags & Protection</a>
            <a class="category-item" data-tab="merch" onclick="showTab('merch')">Merch</a>
            <a class="category-item" data-tab="addons" onclick="showTab('addons')">Add ons</a>
        </div>
    </div>

    <div class="tab-content">
        <div id="all-products" class="tab active">
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
                
                <!-- Add more product items here -->
            </div>
        </div>
        <div id="instruments" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
                <!-- Add product items for Instruments here -->
            </div>
        </div>
        <div id="soundpacks" class="tab">
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
                <!-- Add product items for Soundpacks here -->
            </div>
        </div>
        <div id="cables" class="tab">
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
                <!-- Add product items for Cables here -->
            </div>
        </div>
        <div id="bags" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
                <!-- Add product items for Bags & Protection here -->
            </div>
        </div>
        <div id="merch" class="tab">
            <div class="products-list">
            <div class="product">
                    <div class="product-image"></div>
                    <div class="product-details">Additional details</div>
                    <div class="product-title">Product Name</div>
                    <div class="product-price">$XX.XX</div>
                </div>
                
                <!-- Add product items for Merch here -->
            </div>
        </div>
        <div id="addons" class="tab">
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
                <!-- Add product items for Add ons here -->
            </div>
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

    <?php include 'footer.php'; ?>

    <script>
        function showTab(tabId) {
            const tabs = document.querySelectorAll('.tab');
            const tabButtons = document.querySelectorAll('.categories .category-item');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');
            document.querySelector(`.categories .category-item[data-tab=${tabId}]`).classList.add('active');
        }
    </script>
    <script src="index.js"></script>

</body>
</html>

<script>
    function showTab(tabId) {
        const tabs = document.querySelectorAll('.tab');
        const tabButtons = document.querySelectorAll('.tabs div');
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });
        tabButtons.forEach(button => {
            button.classList.remove('active');
        });
        document.getElementById(tabId).classList.add('active');
        document.querySelector(`.tabs div[data-tab=${tabId}]`).classList.add('active');
    }

    function toggleBillingAddress() {
        const billingForm = document.getElementById('billing-address-form');
        const isChecked = document.getElementById('same_as_shipping').checked;
        
        if (isChecked) {
            billingForm.classList.add('disabled');
            billingForm.querySelectorAll('input').forEach(input => {
                input.disabled = true;
            });
        } else {
            billingForm.classList.remove('disabled');
            billingForm.querySelectorAll('input').forEach(input => {
                input.disabled = false;
            });
        }
    }
</script>