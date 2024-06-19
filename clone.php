<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Cart Animation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    #cart {
      position: fixed;
      top: 10px;
      right: 10px;
      width: 50px;
      height: 50px;
      background-color: #3498db;
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      cursor: pointer;
      z-index: 1000;
    }

    #cart img {
      width: 30px;
      height: 30px;
      object-fit: cover;
      margin-right: 5px;
    }

    .item {
      position: relative;
      width: 50px;
      height: 50px;
      background-color: #e74c3c;
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin: 10px;
      cursor: pointer;
      transition: transform 0.5s ease-in-out;
    }
  </style>
</head>
<body>
  <div id="cart" onclick="toggleCart()">
    🛒
  </div>

  <div id="item1" class="item" onclick="addItemToCart('item1')">
    Item 1
  </div>

  <div id="item2" class="item" onclick="addItemToCart('item2')">
    Item 2
  </div>

  <div id="item3" class="item" onclick="addItemToCart('item3')">
    Item 3
  </div>

  <div id="item4" class="item" onclick="addItemToCart('item4')">
    Item 4
  </div>

  <div id="cartItems" style="position: fixed; top: 70px; right: 20px; visibility: hidden;"></div>

  <script>
    function toggleCart() {
      const cartItems = document.getElementById('cartItems');
      cartItems.style.visibility = cartItems.style.visibility === 'hidden' ? 'visible' : 'hidden';
    }

    function addItemToCart(itemId) {
      const item = document.getElementById(itemId);
      const clonedItem = item.cloneNode(true);

      const cartItems = document.getElementById('cartItems');
      cartItems.appendChild(clonedItem);

      const itemRect = item.getBoundingClientRect();
      const cartRect = document.getElementById('cart').getBoundingClientRect();

      const deltaX = cartRect.left - itemRect.left;
      const deltaY = cartRect.top - itemRect.top;

      clonedItem.style.position = 'fixed';
      clonedItem.style.top = `${itemRect.top}px`;
      clonedItem.style.left = `${itemRect.left}px`;
      clonedItem.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
      clonedItem.style.transition = 'transform 0.5s ease-in-out';

      setTimeout(() => {
        clonedItem.style.transform = 'translate(0, 0)';
      }, 10);

      setTimeout(() => {
        clonedItem.remove();
      }, 500);
    }
  </script>
</body>
</html>
