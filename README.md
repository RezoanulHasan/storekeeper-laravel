# Project Name README

## Introduction

This README provides an overview of the project and instructions on how to use and understand the provided routes.

## Routes

### Dashboard

- **Route:** `/`
- **Controller Method:** `dashboard`
- **Description:** Displays the dashboard.

### Create Product

- **Route:** `/create`
- **Controller Method:** `showCreateProductForm`
- **Description:** Shows the form to create a new product.

- **Route:** `/products/create`
- **Controller Method:** `create`
- **Description:** Handles the creation of a new product.

### All Products

- **Route:** `/products`
- **Controller Method:** `all`
- **Description:** Displays a list of all products.

### Show Product Details

- **Route:** `/products/{id}`
- **Controller Method:** `show`
- **Description:** Displays details of a specific product.

### Edit Product Price

- **Route:** `/products/{id}/edit-price`
- **Controller Method:** `editPrice`
- **Description:** Shows the form to edit the price of a specific product.

- **Route:** `/products/{id}/update-price`
- **Controller Method:** `updatePrice`
- **Description:** Handles the update of a product's price.

### Sell Product

- **Route:** `/products/{id}/sell`
- **Controller Method:** `showSellProductForm`
- **Description:** Shows the form to sell a specific product.

- **Route:** `/products/{id}/sell`
- **Controller Method:** `sellProduct`
- **Description:** Handles the selling of a product.

### All Sales

- **Route:** `/sales`
- **Controller Method:** `allsales`
- **Description:** Displays a list of all sales.

## Usage

1. Clone the repository.

```bash
git clone <repository-url>


